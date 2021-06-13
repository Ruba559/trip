<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceManegar;
use App\Models\Place;
use App\Models\Regoin;
use App\Models\Service;
use App\Models\Room;
use App\Models\User;
use App\Models\Available;
use App\Models\PlacePicture;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ServiceManegarRequest;
use App\Http\Requests\PlaceRequest;
use App\Http\Requests\RoomRequest;
use Illuminate\Support\Facades\Auth;

class ServiceManegerController extends Controller
{



    function reservationRooom(Request $request)
    {  

        $available =  Available::where('room_id' , $request->id)->get();
        
         $id = $available->pluck('user_id')->toArray();
   
         $users = User::where('id', $id)->first();

        return view('manegar.reservation-user', ['availables' => $available , 'user' => $users ]);
    }


    function index_register()
    {
        return view('manegar.register');
    }

    function place_info(Request $req)
    {

        $places= Place::find($req->id);
        
        $place = $places->regoin;

        $service = Service::where('place_id', $req->id)->get();
        
        return view('manegar.place-info', ['services' => $service ,'places' =>  $places ]  );
    }

    function index(Request $req)
    {

        $id_manegar = ServiceManegar::find( auth('serviceManegar')->user()->id);

            $place = Place::find($id_manegar->place_id);

             return view('manegar.index' , ['places' => $place ]);
    }


    function roomInfo(Request $request)
    {
    
        $room =Place::with('room')->get();

        return view('manegar.room-info' , ['rooms' => $room ]);
    }


    function create(ServiceManegarRequest $request)
    {
     

        $filePath = " ";

        if ($request->has('photo_certificate')) {
  
             $filePath = uploadImage($request->photo_certificate ,'images');
          }      

            $user= new ServiceManegar;
            $place= new Place;
    
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->Email=$request->Email;
            $user->password=Hash::make($request->password);
            $user->phone_number=$request->phone_number;
            $user->photo_certificate = $filePath;
            $user->is_a_proven ="0"; 
            $user->place_name=$request->place_name;
           
           
            $place->place_name = $request->place_name;
           // $id = Place::where('place_name', $request->place_name)->get()->pluck('id')->toArray();
        
          

            if($request->password !=$request->confirm_password)
            {
                 return redirect()->back()->with(['message' => 'wrong to confirm password']);
            }

            else {

            $user->save();
            $user->place();

             return redirect('/');
            }
     }

     public function editPlace(Request $request)
    {
        $place = Place::find($request->idplace);

        $regoin = Regoin::find($request->idregoin);

       $placePicture = new PlacePicture;

        $filePath = "";

        if ($request->has('picture')) {
  
             $filePath = uploadImage($request->picture ,'images');
          }

         $placePicture->picture  = $filePath;
         $placePicture->place_id  = $request->idplace;

        $place->address  = $request->address;
        $place->Email    = $request->Email;
       

        $regoin->region_name = $request->region_name;

        $regoin->update();
        $place->update();
        $placePicture->save();
        

        $places= Place::find($request->idplace);
        
        $place = $places->regoin;

        $service = Service::where('place_id', $request->idplace)->get();
        
        return view('manegar.place-info', ['services' => $service ,'places' =>  $places ]  );
    }



    public function editReservation(Request $request)
    {

        $available = Available::find($request->id);

        $available->status  = "1";

        $available->update();

        $available =  Available::where('room_id' , $request->room_id)->get();
       
        $id = $available->pluck('user_id')->toArray();
        
        $users = User::where('id' , $id)->first();

       return view('manegar.reservation-user', ['availables' => $available , 'user' => $users ]);

       return redirect('/index_reservation_user');
    }


    
    public function aditBill(Request $request)
    {

        $available = Available::find($request->id);

        $available->paid = $request->paid;

        $available->update();
      
        $available =  Available::where('room_id' , $request->room_id)->get();
       
        $id = $available->pluck('user_id')->toArray();
        
        $users = User::where('id' , $id)->first();

       return view('manegar.reservation-user', ['availables' => $available , 'user' => $users ]);

       return redirect('/index_reservation_user');
    }


    public function editService(Request $request)
    {

        $service = Service::find($request->id);

        $service->service_name  = $request->service_name;
        $service->price = $request->price;
    

        $service->update();

        $places= Place::find($request->idplace);
        
        $place = $places->regoin;

        $service = Service::where('place_id', $request->idplace)->get();
        
        return view('manegar.place-info', ['services' => $service ,'places' =>  $places ]  );

       return redirect('/place_info');
    }

    function removeService(Request $request)
    {
       

        $id_manegar = ServiceManegar::find( auth('serviceManegar')->user()->id);

        $place = Place::find($id_manegar->place_id);

        Service::destroy($request->id);
         return view('manegar.index' , ['places' => $place ]);
        
    }

    function removeReservation($id)
    {
         
        Available::destroy($id);

        return redirect('/room_info');
    }

    function addService (Request $req)
    {
              
            $service= new Service;
    
            $service->service_name=$req->service_name;
            $service->price=$req->price;
            $service->place_id=$req->id;
            $service->place_room=$req->place_room;

        
             $service->save();

             $places= Place::find($req->id);
        
             $place = $places->regoin;
     
             $service = Service::where('place_id', $req->id)->get();
             
             return view('manegar.place-info', ['services' => $service ,'places' =>  $places ]  );
             return redirect()->back();
     }

     function addRoom (RoomRequest $request)
    {
              
        $filePath = "";

        if ($request->has('pictuer')) {
  
             $filePath = uploadImage($request->pictuer ,'images');
          }

            $room= new Room;
    
            $room->count_people =$request->count_people ;
            $room->price=$request->price;
            $room->description=$request->description;
            $room->pictuer= $filePath;
            $room->is_avalible= "0";
            $room->place_id=$request->id;
        
            $room->save();

             return redirect('/room_info');
     }

     function removeRoom($id)
    {
         
        Room::destroy($id);

        return redirect('/room_info');
    }


    public function aditRoom(RoomRequest $request)
    {

        $filePath = "";

        if ($request->has('picture')) {
  
             $filePath = uploadImage($request->picture ,'images');
          }

        $room = Room::find($request->id);

        $room->price = $request->price;
        $room->description = $request->description;
        $room->count_people = $request->count_people;
        $room->pictuer  = $filePath ;

        $room->update();
      

       return redirect('/room_info');
    }


    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}

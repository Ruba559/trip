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

class ServiceManegerController extends Controller
{

    function indexReservation(Request $req , $id)
    {

        $available =User::with(['available'=> function($query){
            $query->select(
             'id',
            's_date',
            'e_date',
            'booking_name',
            'status',
            'bill',
            'paid',
            'room_id',
            )->where('room_id' , $id);
           }])->first();

        return view('manegar.reservation-user', ['availables' => $available ]);
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


    function roomInfo(Request $request)
    {
    
        $room =Place::with('room')->get();
        
        return view('manegar.room-info' , ['rooms' => $room ]);
    }


    function create(ServiceManegarRequest $request)
    {
              
            $user= new ServiceManegar;
    
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->Email=$request->Email;
            $user->password=Hash::make($request->password);
            $user->phone_number=$request->phone_number;
            $user->photo_certificate=$request->photo_certificate;
            $user->is_a_proven ="0";
            $user->place_id= "1";
            $user->save();

             return redirect('/');
     }

     public function editPlace(PlaceRequest $request)
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

         $placePicture->save();


        $place->address  = $request->address;
        $place->Email    = $request->Email;
        $place->update();

        $regoin->region_name = $request->region_name;
        $regoin->update();
      

       return redirect('/place_info');
    }



    public function editReservation(Request $request , $id)
    {

        $available = Available::find($id);

        $available->status  = "1";

        $available->update();
      

       return redirect('/index_reservation_user');
    }


    public function editService(Request $request)
    {

        $service = Service::find($request->id);

        $service->service_name  = $request->service_name;
        $service->price    = $request->price;
    

        $service->update();
      

       return redirect('/place_info');
    }

    function removeService($id)
    {
         
        Service::destroy($id);

        return redirect('/place_info');
    }

    function removeReservation($id)
    {
         
        Available::destroy($id);

        return redirect('/index_reservation_user');
    }

    function addService (Request $req)
    {
              
            $service= new Service;
    
            $service->service_name=$req->service_name;
            $service->price=$req->price;
            $service->place_id=$req->id;

        
             $service->save();

             return redirect()->back();
     }

     function addRoom (RoomRequest $request)
    {
              
            $room= new Room;
    
            $room->count_people =$request->count_people ;
            $room->price=$request->price;
            $room->description=$request->description;
            $room->pictuer=$request->pictuer;
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

    public function aditBill(Request $request)
    {

        $available = Available::find($request->id);

        $available->paid = $request->paid;

        $available->update();
      

       return redirect('/index_reservation_user');
    }
}

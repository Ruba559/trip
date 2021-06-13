<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regoin;
use App\Models\Place;
use App\Models\Room;
use App\Models\Available;
use App\Models\Service;
use App\Models\PlacePicture;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;


class SerchController extends Controller
{
     function index()
    { 
         $regoins = Regoin::get();

         return view('sershing',['regoins' => $regoins ]);   
 
    }

    function finalReservation(Request $request)
    {
              
            $available= new Available;
    
            $available->booking_name = $request->booking_name;
            $available->s_date = $request->s_date;
            $available->e_date = $request->e_date;

            $available->room_id  = $request->price;
            $available->bill  = $request->id;
            
            $available->status = '0';
            $available->paid = '0';

            $available->user_id = auth()->user()->id;
        
             $available->save();

             return redirect('/');
    }

    function searching(Request $request)
    { 

          $regoin_name = $request->region;
          $s_date = $request->check_in;
          $e_date = $request->check_out;
          $place_type = $request->place_type;
         // $adult = $request->adult;

          
          $regoin = Regoin::where('region_name', $regoin_name)->get();

          if ($regoin)
          {

               $available = Available::where('s_date', $s_date)->where('e_date', $e_date)->get();
             
               if ($available)
               {
     
                    $place =Place::with(['room'=> function($query){
                         $query->select(
                          'id',
                         'count_people',
                         'price',
                         'description',
                         'is_avalible',
                         'place_id',
                         )->paginate(2);
                        }])->where('place_type' , $place_type)->get();

                        $place_ids = $place->pluck('id')->toArray();
                        
                }
          }

           // $service = Place::with('service')->whereIn('id' , $place_ids )->get();

            $service = Service::whereIn('place_id' , $place_ids)->where('place_room' , 'place')
            ->get();


          $photo = PlacePicture::where('place_id' , $place_ids)
          ->first();


          $services_f = Service::get();

          $favorite = Place::with('favorite')->get();

          return view('/hotels' , [ 'places' => $place , 'services'=> $service , 'photos' => $photo , 
          'services_f' => $services_f , 'favorites' => $favorite]);   
 
    }
    
    
    function showRoom(Request $request)
    { 

        $id =  Place::where('id' , $request->id)->get()->pluck('id')->toArray();

        $place =  Place::where('id' , $request->id)->first();

        $room = Room::where('place_id' , $id)->get();

        $service = Service::where('place_id' , $id)->where('place_room' , 'room')->get();

        $placePicture = PlacePicture::where('place_id' , $id)->get();
      
         return view('rooms',['rooms' => $room , 'places' => $place , 'services' => $service , 'placePicture' => $placePicture]);   
 
    }

    function selectRoom(Request $request)
    { 

       $room_select = Room::find($request->id);

       $Room = Room::find($request->id);

       $Room->is_avalible  = "1";

       $Room->update();

         return view('final', ['rooms_selects' => $room_select] );   
 
    }


    function reservationUser(Request $request)
    { 

     $place =Place::with(['room'=> function($query){
          $query->select(
           'id',
          'count_people',
          'price',
          'description',
          'is_avalible',
          'place_id',
      )->where('id', $request->id);
         }])->get();
         
     
         return view('rooms',['rooms' => $room ]);   
 
    }

    function serviceFilter(Request $request)
    { 

     $id = Service::where('id' , $request->id )->get()->pluck("place_id")->toArray();

     $place =Place::with(['room'=> function($query){
          $query->select(
           'id',
          'count_people',
          'price',
          'description',
          'is_avalible',
          'place_id',
          );
         }])->where('id' , $id )->get();
     
     $service = Service::whereIn('place_id' , $id)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $id)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo ,
        'services_f' => $services_f , 'favorites' => $favorite]);   
 
    }


    function typeHouseFilter(Request $request)
    { 

     $place =Place::with(['room'=> function($query){
          $query->select(
           'id',
          'count_people',
          'price',
          'description',
          'is_avalible',
          'place_id',
          );
         }])->where('place_type' , 'house' )->get();

         $place_ids = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $place_ids)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $place_ids)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();
     
       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo , 
       'services_f' => $services_f , 'favorites' => $favorite]);   
 
    }


    function typeHomeFilter(Request $request)
    { 

     $place =Place::with(['room'=> function($query){
          $query->select(
           'id',
          'count_people',
          'price',
          'description',
          'is_avalible',
          'place_id',
          );
         }])->where('place_type' , 'home' )->get();

         $place_ids = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $place_ids)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $place_ids)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo , 
       'services_f' => $services_f , 'favorites' => $favorite]);   
 
    }

    function typeFilter(Request $request)
    { 

     $place =Place::with(['room'=> function($query){
          $query->select(
           'id',
          'count_people',
          'price',
          'description',
          'is_avalible',
          'place_id',
          );
         }])->get();

         $place_ids = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $place_ids)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $place_ids)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo , 
       'services_f' => $services_f , 'favorites' => $favorite]);   
 
    }


    function addFavorite(Request $request)
    { 

     $favorite= new Favorite;
    
     $favorite->user_id = auth()->user()->id;
     //auth::user('api')->id;
     $favorite->place_id =$request->id;
     
      $favorite->save();

      return redirect()->back();   
 
    }


    function showFavorite(Request $request)
    { 

     $place_ids = Favorite::where('user_id' , auth()->user()->id )->where('place_id' , $request->place_id)->get()->pluck('place_id')->toArray();
return $place_ids ;
     $place =Place::with(['room'=> function($query){
          $query->select(
           'id',
          'count_people',
          'price',
          'description',
          'is_avalible',
          'place_id',
          )->where('is_avalible' , '1');
         }])->where('id', $place_ids)->get();
         
         $service = Service::whereIn('place_id' , $place_ids)
         ->get();

         $photo = PlacePicture::whereIn('place_id' , $place_ids)
         ->get();

         $services_f = Service::get();

         $favorite = Place::with('favorite')->get();

         return view('/hotels' , [ 'places' => $place , 'services'=> $service , 'photos' => $photo , 
         'services_f' => $services_f , 'favorites' => $favorite]);   
 
    }

    function star1Filter(Request $request)
    { 

     $place = Place::where('stars', '1')->get();

     $id = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $id)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $id)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo ,
        'services_f' => $services_f , 'favorites' => $favorite]);   
   
 
    }

    function star2Filter(Request $request)
    { 

     $place = Place::where('stars', '2')->get();

     $id = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $id)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $id)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo ,
        'services_f' => $services_f , 'favorites' => $favorite]);   
   
 
    }

    function star3Filter(Request $request)
    { 

     $place = Place::where('stars', '3')->get();

     $id = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $id)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $id)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo ,
        'services_f' => $services_f , 'favorites' => $favorite]);   
   
 
    }


    function star4Filter(Request $request)
    { 

     $place = Place::where('stars', '4')->get();

     $id = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $id)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $id)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo ,
        'services_f' => $services_f , 'favorites' => $favorite]);   
   
 
    }

    function star5Filter(Request $request)
    { 

     $place = Place::where('stars', '5')->get();

     $id = $place->pluck('id')->toArray();

     $service = Service::whereIn('place_id' , $id)
     ->get();
     
     $photo = PlacePicture::whereIn('place_id' , $id)
     ->get();

     $services_f = Service::get();

     $favorite = Place::with('favorite')->get();

       return view('hotels', ['places' => $place , 'services'=> $service , 'photos' => $photo ,
        'services_f' => $services_f , 'favorites' => $favorite]);   
   
 
    }
}

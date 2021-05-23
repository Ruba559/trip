<?php

namespace App\Http\Controllers;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Models\Regoin;
use App\Models\Certificate_Registration;
use App\Models\ServiceManegar;


class AdminController extends Controller
{
    function index()
    { 
         return view('admin.index'); 
 
    }


    function placeTable()
    { 
        
        $place =Regoin::with(['place'=> function($query){
            $query->select(
             'id',
            'place_name',
            'stars',
            'place_name',
            'Email',
            'place_type',
            'address',
            'regoin_id',
        );
           }])->get();

         
         return view('admin.place',['places' =>  $place ]); 
 
    }

    function userTable()
    { 

        $user = User::orderBy('created_at', 'desc')->get();

        return view('admin.user-table',['users' =>  $user ]); 
 
    }

    function removePlace($id)
    {
        Place::destroy($id);

        return redirect('place_table');
    }

    function removeUser($id)
    {
         
        User::destroy($id);

        return redirect('user_table');
    }

    function serviceTable()
    { 

        $servicemanegarnotproven =Place::with(['serviceManegar'=> function($query){
            $query->select(
             'id',
            'first_name',
            'Email',
            'last_name',
            'password',
            'phone_number',
            'photo_certificate',
            'is_a_proven',
            'place_id',
        )->where('is_a_proven',"0");
           }])->get();
 
           $servicemanegarproven =Place::with(['serviceManegar'=> function($query){
            $query->select(
             'id',
            'first_name',
            'Email',
            'last_name',
            'password',
            'phone_number',
            'photo_certificate',
            'is_a_proven',
            'place_id',
        )->where('is_a_proven',"1");
           }])->get();
      

        return view('admin.service' ,  ['servicemanegarsnotproven' => $servicemanegarnotproven , 'servicemanegarsproven' => $servicemanegarproven]); 
 
    }


    function removeServiceManegar($id)
    {
         
        ServiceManegar::destroy($id);

        return redirect('service_table');
    }
}

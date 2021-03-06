<?php

namespace App\Http\Controllers;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Models\Regoin;
use App\Models\Certificate_Registration;
use App\Models\ServiceManegar;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   
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

        $user = User::get();

        return view('admin.user-table',['users' =>  $user ]); 
 
    }

    function removePlace($id)
    {

        Place::destroy($id);

        return redirect('place_table');
    }


    function removeUser($id)
    {
        dd($id);
        User::find($id)->delete();

        return redirect('user_table');
    }


    function serviceTable()
    { 

        $servicemanegarnotproven =ServiceManegar::where('is_a_proven',"0")->get();
 
        $servicemanegarproven =ServiceManegar::where('is_a_proven',"1")->get();
   
        return view('admin.service' ,  ['servicemanegarsnotproven' => $servicemanegarnotproven , 'servicemanegarsproven' => $servicemanegarproven]); 
 
    }


    function removeServiceManegar($id)
    {
         
        ServiceManegar::destroy($id);

        return redirect('service_table');
    }

    function addProven($id)
    {
         
        $serviceManegar = ServiceManegar::find($id);

        $serviceManegar->is_a_proven  = "1";

        $serviceManegar->update();
      

       return redirect('/service_table');
    }
    
    
    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}

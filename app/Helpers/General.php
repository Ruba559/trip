<?php


use Illuminate\Support\Facades\Config;



function uploadImage($image, $destination = null)
    {
        $imageName = time().'.'.$image->extension();
        
        if ($destination){
            $destinationPath = public_path('/images/'.$destination);
        } else {
            $destinationPath = public_path('/images');
        }
        
        $image->move($destinationPath, $imageName);
        return $destination ? '/images/'.$destination.'/'.$imageName : '/images/'.$imageName;
    }







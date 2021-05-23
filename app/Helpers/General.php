<?php


use Illuminate\Support\Facades\Config;



function uploadImage($folder, $image)
{
    $image->store('/', $folder);
    $filename = $image->hashName();
    $path = ' ' . $folder . '/' . $filename;
    return $path;
}






<?php

use Illuminate\Support\Facades\Storage;


if (!function_exists('getProfileImg')) {
    function getProfileImg($name) {
        return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
    }

}


if (!function_exists('breadcrump')) {
    function breadcrump() {
        $url = request()->url();
        $path = str($url)->explode('/backend/');
        echo str()->headline($path[1]) ?? 'Unknown';
    }

}



if (!function_exists('general_status')) {
    function general_status($status, $route = "#")
    {

        if ($status == 0) {
            echo '<a
                    href="' . $route . '"
                    class="btn btn-danger btn-sm w-24 d-inline-block me-1 mb-2">Inactive</a>';
        } else if ($status == 1) {
            echo '<a 
            href="' . $route . '"
            class="btn btn-success w-24 d-inline-block me-1 mb-2">Active</a>';
        }
    }
}


if (!function_exists('stock_status')) {
    function stock_status($status, $route = "#")
    {

        if ($status == 0) {
            echo '<a
                    href="' . $route . '"
                    class="btn btn-danger btn-sm w-24 d-inline-block me-1 mb-2">Out of Stock</a>';
        } else if ($status == 1) {
            echo '<a 
            href="' . $route . '"
            class="btn btn-success w-24 d-inline-block me-1 mb-2">In Stock</a>';
        }
    }
}



if(!function_exists('title_image')){
    function title_image ($src){
    
        if($src && Storage::disk('public')->exists($src)){
            return asset('storage/'.$src);
        } else{
            return asset('frontend/img/placeholder.webp');
        }
    }
}





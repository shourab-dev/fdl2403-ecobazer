<?php


if (!function_exists('getProfileImg')) {
    function getProfileImg($name) {
        return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
    }

}

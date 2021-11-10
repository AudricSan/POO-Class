<?php

function RandomString($max){
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstring = substr(str_shuffle($permitted_chars), 0, $max);
    return $randstring;
}

function RandomDate(){
    $timestamp = mt_rand(1, time());
    $randomDate = date("d M Y", $timestamp);
    return $randomDate;
}

function RandomBool(){
    $randint = (bool) mt_rand(0, 1);
    if($randint == 1){
        $randomBool = true;
    }else{
        $randomBool = false;
    }
    return $randomBool;
}
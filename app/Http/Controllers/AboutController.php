<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $name = "พันธกานต์ อาดัม";
        $city = "ปทุมธานี , ประเทศไทย";
        $tel = "081 - xxx - xxxx";
        $email = "phantakan@gmail.com";
        $fb = "Richard Baleno";
        return view('about',['address'=>$city,'tel'=>$tel,'name'=>$name,'email'=>$email,'fb'=>$fb]);
    }
}

<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function sayHello() {
        $message = array('welcome_messsage' => 'Welcome to Lumen API Rest App');
        return response()->json($message);
    }

    //
}

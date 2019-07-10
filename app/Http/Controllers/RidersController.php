<?php

namespace App\Http\Controllers;

use App\Riders;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RidersController extends Controller
{
    public function home(Request $request) {
        return view('riders-home');
    }

    public function newRider(Request $request) {
        $rider = new Riders;
        $rider->id = Uuid::generate()->string;
        $rider->firstname = $request->firstname;
        $rider->lastname = $request->lastname;
        $rider->phone_number = $request->phone_number;
        $rider->password = md5( $request->password );
        $rider->id_number = $request->id_number;
        $rider->vehicle_reg = $request->vehicle_reg;
        $rider->vehicle_type = $request->vehicle_type;
        $rider->main_location = $request->main_location;
        $saved = $rider->save();

        if( $saved ) {
            return redirect('/riders')
                ->with("success", "Rider account created")
                ->withInput();
        }else {
            return redirect('/riders')
                ->withError("Rider account not created. Try again")
                ->withInput();
        }

    }

    public function checkRider(Request $request) {
        $rider = Riders::where('phone_number', $request->phone_number)->
                            where('password', md5( $request->password ))->first();

        if( $rider != NULL ) {
            // Go to home
            echo "Karibu";
        }else {
            return redirect('/riders')
                ->withError("Rider account not found. Try again")
                ->withInput();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Users;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function registerNew(Request $request) {
        $user = new Users;
        $user->id = Uuid::generate()->string;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = md5( $request->password );
        $saved = $user->save();

        if( $saved ) {
            return redirect('/')
                ->with("success", "Account created")
                ->withInput();
        }else {
            return redirect('/')
                ->withError("Account not created. Try again")
                ->withInput();
        }
    }
}

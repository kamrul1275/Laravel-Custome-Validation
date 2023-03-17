<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contct( $var = null)
    {
       return view('contact');
    }


    public function Store(Request $request)

    {
        $request->validate([
            'name' => 'required|unique:contacts|max:6',
            'email' => 'required',

        ],

         [
            'name'=>"name is required...",
            'name.unique'=>" name is already exsit",
            'name.max'=>" name ismax character",
            'email'=>"email is required...",
         ],

        //  $contact= new User();

    );


    $contact= new Contact();
    $contact->name= $request->name;
    $contact->email= $request->email;
    $contact->save();

    //dd($contact);

    return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{

    public function Save(Request $request)
    {
    
        $message = new Message();

        $message->type = 'CONTACT_FORM';
        $message->about = "NEW_WEBSITE";
        $message->name = $request->name;
        $message->email = $request->email;
        $message->text = $request->message;

        $message->save();

        return redirect()->route('contact-us', ['code' => "SAVED"]);

    }
}

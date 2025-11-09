<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function catch(Request $request)
    {

        $request->validate([
            'email' => 'required|email'
        ]);

        $email = MailingList::firstOrCreate ([
            'email' => $request->email
        ]);

        return response()->json([
            'status' => 1,
            'email' => $email
        ]);
    }
}

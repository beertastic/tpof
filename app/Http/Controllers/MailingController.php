<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function catch(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        if ($validated) {

            $email = MailingList::firstOrCreate([
                ['email' => $request->email],
                ['ip_address' => $request->getClientIp()]
            ]);

            return response()->json([
                'status' => 1,
                'email' => $email->email,
                'ip' => $request->getClientIp()
            ]);
        } else {
            return response()->json([
                'status' => 0,
                'email' => 'invalid'
            ]);
        }
    }
}

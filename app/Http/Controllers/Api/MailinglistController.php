<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MailingList;
use Illuminate\Http\Request;

class MailinglistController extends Controller
{
    public function catch(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        if ($validated) {

            $email = MailingList::firstOrCreate(
                ['email' => $request->email],
                ['ip_address' => $request->getClientIp()]
            );

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

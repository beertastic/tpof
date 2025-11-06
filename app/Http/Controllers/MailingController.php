<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailingController extends Controller
{
    public function catch(Request $request)
    {
        return response()->json([
            'status' => 1,
            'email' => $request->email
        ]);
    }
}

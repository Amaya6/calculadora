<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaController extends Controller
{
    public function resta($n1, $n2)
    {
        $resta = $n1 - $n2;
        $message = "La resta es $resta";
        return response()->json($message, 200);
    }
}

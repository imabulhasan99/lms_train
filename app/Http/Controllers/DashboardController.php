<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

       
         switch(auth()->user()->role) {
        case "student":
            return redirect()->route("student.dashboard");
        break;
        case "instrauctor":
            return redirect()->route("instrauctor.dashboard");
        break;
        default:
            return redirect()->route("login");
    } 
}
}

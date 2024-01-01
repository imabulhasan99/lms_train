<?php

namespace App\Http\Controllers\Student;

use App\Models\User;
use App\Constants\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\StudentRegistrationService;
use App\Http\Requests\StudentRegistrationRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view("student.dashboard");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = User::pluck('country')->all();
        return view("auth.register.student-register",['countries'=>$countries]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRegistrationRequest $request, StudentRegistrationService $service)
    {
        $data = $request->validated();
        $service->register( $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

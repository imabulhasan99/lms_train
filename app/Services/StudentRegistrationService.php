<?php

namespace App\Services;

use App\Models\User;
use App\Constants\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentRegistrationService
{
    public function register(array $data){
        $user = User::create([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'phone'         => $data['phone'],
            'dob'           => $data['dob'],
            'country'       => $data['country'],
            'address_one'   => $data['address'],
            'address_two'   => $data['address2'],
            'city'          => $data['city'],
            'zip_code'      => $data['zip_code'],
            'role'          => Role::STUDENT,
       ]);
       Auth::login($user);
       return redirect()->route('dashboard');
    }
}

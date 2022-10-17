<?php

namespace App\Http\Controllers;

use App\Models\freelancer as ModelsFreelancer;
use Illuminate\Http\Request;

class ControllerFreelancer extends Controller
{

    public function createUser(Request $request)
    {
        $user = ModelsFreelancer::create([
            'freelancer_name' => $request->name,
            'freelancer_email' => $request->email,
            'freelancer_status' => $request->status,
            'freelancer_role' => $request->role,
            'freelancer_contact' => $request->contact
        ]);
    }
}

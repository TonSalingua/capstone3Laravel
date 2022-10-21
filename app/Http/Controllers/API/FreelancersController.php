<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Freelancers;

class FreelancersController extends Controller
{

    public function getFreelancers()
    {
        $freelancers = Freelancer::all();

        return response()->json([
            'status' => 200,
            'freelancers' => $freelancers,
        ]);
    }

    public function addFreelancers(Request $request)
    {
        $freelancers = new Freelancers();
        $freelancers->name = $request->input('Name');
        $freelancers->email = $request->input('Email');
        $freelancers->role = $request->input('Role');
        $freelancers->status = $request->input('Status');
        $freelancers->password_hash = $request->input('password');
        $freelancers->save();

        return response()->json([
            'status' => 200,
            'freelancers' => $freelancers,
        ]);
    }


    public function updateFreelancers(Request $request, $id)
    {
        $freelancers = Freelancers::where('idNo', $id);
        $freelancers->name = $request->input('Name');
        $freelancers->email = $request->input('Email');
        $freelancers->role = $request->input('Role');
        $freelancers->status = $request->input('Status');
        $freelancers->password_hash = $request->input('password');
        $input = $request->all();
        $freelancers->update($input);

        return response()->json([
            'status' => 200,
            'freelancers' => $freelancers,
        ]);
    }

    public function deleteFreelancers($id)
    {
        $freelancers = Freelancers::where('idNo', $id);
        $freelancers->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Freelancersrecord deleted successfully'
        ]);
    }
}

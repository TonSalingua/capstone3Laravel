<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Freelancer;

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

    public function addFreelancer(Request $request)
    {
        $freelancer = new Freelancer;
        $freelancer->name = $request->input('name');
        $freelancer->email = $request->input('email');
        $freelancer->role = $request->input('role');
        $freelancer->status = $request->input('status');
        $freelancer->password = $request->input('password');
        $freelancer->save();

        return response()->json([
            'status' => 200,
            'freelancer' => $freelancer,
        ]);
    }


    public function updateFreelancer(Request $request, $id)
    {
        $freelancer = Freelancer::where('idNo', $id);
        $freelancer->name = $request->input('name');
        $freelancer->email = $request->input('email');
        $freelancer->role = $request->input('role');
        $freelancer->status = $request->input('status');
        $freelancer->password_hash = $request->input('password');
        $input = $request->all();
        $freelancer->update($input);

        return response()->json([
            'status' => 200,
            'freelancer' => $freelancer,
        ]);
    }

    public function deleteFreelancer($id)
    {
        $freelancer = Freelancer::where('idNo', $id);
        $freelancer->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Freelancersrecord deleted successfully'
        ]);
    }
}

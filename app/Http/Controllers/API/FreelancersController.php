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
        $freelancers = new Freelancer();
        $freelancers->name = $request->input('name');
        $freelancers->email = $request->input('email');
        $freelancers->role = $request->input('role');
        $freelancers->status = $request->input('status');
        $freelancers->password_hash = $request->input('password');
        $freelancers->save();

        return response()->json([
            'status' => 200,
            'freelancers' => $freelancers,
        ]);
    }


    public function updateFreelancers(Request $request, $id)
    {
        $freelancers = Freelancer::where('idNo', $id);
        $freelancers->name = $request->input('name');
        $freelancers->email = $request->input('email');
        $freelancers->role = $request->input('role');
        $freelancers->status = $request->input('status');
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
        $freelancers = Freelancer::where('idNo', $id);
        $freelancers->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Freelancersrecord deleted successfully'
        ]);
    }
}

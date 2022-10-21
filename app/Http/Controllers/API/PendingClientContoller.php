<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pendingClient;

class pendingClientController extends Controller
{

    public function getpendingClients()
    {
        $pendingclients = pendingClient::all();

        return response()->json([
            'status' => 200,
            'clients' => $pendingclients,
        ]);
    }

    public function addpendingClient(Request $request)
    {
        $pendingclient = new pendingClient;
        $pendingclient->name = $request->input('name');
        $pendingclient->concerns = $request->input('concerns');
        $pendingclient->contactNo = $request->input('contactNo');
        $pendingclient->email = $request->input('email');
        $pendingclient->availableTime = $request->input('availableTime');
        $pendingclient->validId = $request->input('validId');
        $pendingclient->status = $request->input('status');
        $pendingclient->save();

        return response()->json([
            'status' => 200,
            'client' => $pendingclient,
        ]);
    }

    // public function editClient ($id){
    //     $client = Client::find($id);
    //     return response()->json([
    //         'status'=>200,
    //         'client'=>$client,
    //     ]);
    // }

    public function updatependingClient(Request $request, $id)
    {
        $pendingclient = pendingClient::where('idNo', $id);
        $pendingclient->name = $request->input('name');
        $pendingclient->concerns = $request->input('concerns');
        $pendingclient->contactNo = $request->input('contactNo');
        $pendingclient->email = $request->input('email');
        $pendingclient->availableTime = $request->input('availableTime');
        $pendingclient->validId = $request->input('validId');
        $pendingclient->status = $request->input('status');
        $input = $request->all();
        $pendingclient->update($input);

        return response()->json([
            'status' => 200,
            'client' => $pendingclient,
        ]);
    }

    public function deletependingClient($id)
    {
        $pendingclient = Client::where('idNo', $id);
        $pendingclient->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Client record deleted successfully'
        ]);
    }
}

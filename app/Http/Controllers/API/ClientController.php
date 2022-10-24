<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    public function getClients()
    {
        $clients = Client::all();

        return response()->json([
            'status' => 200,
            'clients' => $clients,
        ]);
    }

    public function addClient(Request $request)
    {
        $client = new Client;
        $client->name = $request->input('name');
        $client->concerns = $request->input('concerns');
        $client->contactNo = $request->input('contactNo');
        $client->email = $request->input('email');
        $client->availableTime = $request->input('availableTime');
        $client->validId = $request->input('validId');
        $client->status = $request->input('status');
        $client->isPending = $request->input('isPending');
        $client->save();

        return response()->json([
            'status' => 200,
            'client' => $client,
        ]);
    }

    // public function editClient ($id){
    //     $client = Client::find($id);
    //     return response()->json([
    //         'status'=>200,
    //         'client'=>$client,
    //     ]);
    // }

    public function updateClient(Request $request, $id)
    {
        $client = Client::where('idNo', $id);
        $client->name = $request->input('name');
        $client->concerns = $request->input('concerns');
        $client->contactNo = $request->input('contactNo');
        $client->email = $request->input('email');
        $client->availableTime = $request->input('availableTime');
        $client->validId = $request->input('validId');
        $client->status = $request->input('status');
        $client->isPending = $request->input('isPending');
        $input = $request->all();
        $client->update($input);

        return response()->json([
            'status' => 200,
            'client' => $client,
        ]);
    }

    public function deleteClient($id)
    {
        $client = Client::where('idNo', $id);
        $client->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Client record deleted successfully'
        ]);
    }
}

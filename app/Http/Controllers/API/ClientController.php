<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    public function getClients(){
        $clients = Client::all();

        return response()->json([
            'status' => 200,
            'clients'=>$clients,
        ]);
    }

    public function addClient(Request $request){
        $client = new Client;
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->project = $request->input('project');
        $client->save();

        return response()->json([
            'status' => 200,
            'message'=>'Client Added Successfully'
        ]);
    }

    public function editClient ($id){
        $client = Client::find($id);
        return response()->json([
            'status'=>200,
            'client'=>$client,
        ]);
    }

    public function updateClient (Request $request, $id){
        $client = Client::find($id);
        $client->name = $request->input('name');
        $client->course = $request->input('course');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->update();

        return response()->json([
            'status' => 200,
            'message'=>'Client Updated Successfully'
        ]);
    }

    public function deleteClient ($id){
        $client = Client::find($id);
        $client ->delete();

        return response()->json([
            'status' => 200,
            'message'=>'Client record deleted successfully'
        ]);
    }
}

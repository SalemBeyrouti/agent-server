<?php

namespace App\Http\Controllers;
use App\Http\Resources\AgentResource;
use App\Http\Resources\AgentCollection;
use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{

    public function index(){
        return new AgentCollection(Agent::all());
    }
    public function show($id)
    {$agent = Agent::findOrFail($id);
    return new AgentResource($agent);
}

}

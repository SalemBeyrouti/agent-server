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

    public function store($id): RedirectResponse

    //Agent::all retrive all the rechords from the models associatred table

    //Agent::where(you pass conditions) -> you can assign the where conditions ex: orderBy("eamil") ->get() 
    //Agent::where(...)->first(); u can use fresh()to retrieve the data
    // or refresh() to refresh the whole database in case something new came up both $flight->refresh or fresh ();

    //chunk is a method in collection soi can use Agent::chunk(10, function (Collection $agents){}) so i retreive subset of modles, first number is the records/chunk, closure passed as the 2nd arg. chunkbyid can be used with where statement

    //cursormethod complicated, check later

    //addSelect advanced filtering, u can insert multiple filtering ::select whereColukmn()-> orderBy() ->limit()

    //::find ::where ::firstWhere directly from model

    //::firstOrCreate at the top if not exist, can be used to rettrive or edit data inside, same as ::firstOrNew

    //

    
}

}

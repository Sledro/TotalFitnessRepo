<?php

namespace App\Http\Controllers;

use App\ClientManager;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\ExercisePlan;
use App\TrainerRequests;
use App\ClientExercisePlans;
class ClientManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::with('plan')->where('trainerID', '=', ''.Auth::user()->id.'')->get();
        $plansList = ExercisePlan::where('trainerID', '=', ''.Auth::user()->id.'')->pluck('name', 'id');
        return view('clientManager.viewClients')->with('clients', $clients)->with('plansList', $plansList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function show(ClientManager $clientManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientManager $clientManager)
    {
        //
    }

    /**
     * Remove the trainerID from the users table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        User::where('id', $request->clientID)->update(['trainerID' => '0']);
        $clients = User::with('plan')->where('trainerID', '=', ''.Auth::user()->id.'')->get();
        $plansList = ExercisePlan::where('trainerID', '=', ''.Auth::user()->id.'')->pluck('name', 'id');
        return view('clientManager.viewClients')->with('clients', $clients)->with('plansList', $plansList)->with('success', 'Client has been removed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientManager  $clientManager
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requests()
    {
        $requests = TrainerRequests::with('client')->where('trainerID', '=', ''.Auth::user()->id.'')->where('accepted',"=","0")->get();
        return view('clientManager.requests')->with('requests', $requests);
    }



    public function accept(Request $request)
    {

        TrainerRequests::where('id', $request->requestID)->update(['accepted' => 1]);
        User::where('id', $request->clientID)->update(['trainerID' => $request->trainerID]);
        
        return redirect()->back()->with('success', 'Successfully accepted this user as your client.');
    }



    public function updatePlan(Request $request)
    {
        //Check if user is already assigned this plan.
        if(ClientExercisePlans::where('userID', $request->clientID)->where('active', '=', '1')
        ->where('exercisePlanID','=', $request->plansList)->exists()){
            return redirect()->back()->with('error', 'This client is already currently assigned this plan.');

        }else{
            //The user is not already assigned this plan so we can proceed and assign them a new plan.
            ClientExercisePlans::where('userID', $request->clientID)->where('active', '=', '1')->update(['active' => 0]);
            $details = new ClientExercisePlans();
            $details->userID = $request->clientID;
            $details->exercisePlanID = $request->plansList;
            $details->active = '1'; 
            $details->save();
    
            return redirect()->back()->with('success', 'Successfully assigned this plan to your client.');
        }

    }

}

<?php

namespace App\Http\Controllers;

use App\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    //
    public function index(){
        $activities = Activities::all();
        return view('activities.index',compact('activities'));
    }

    public function create(){
        return view('activities.create');
    }

    public function store(){

        request()->validate([
            'Date'=>'required',
            'Activity'=>'required',
            'Type_of_Activity'=>'required',

        ]);

        Activities::create(request()->only([
            'Date','Activity','Type_of_Activity'
        ]));

        return redirect('/activities/create');
    }

    public function edit(Activities $activity){
        return view('activities.edit',compact('activity'));
    }

    public function update(Activities $activity)
	{

		request()->validate([
    		'Date' => 'required',
    		'Activity' => 'required',
    		'Type_of_Activity' => 'required',
    	]);

		$activity->update(request()->only([

			'Date','Activity','Type_of_Activity'
		]));

    	return redirect('/');
    }
    
    public function delete(Activities $activity){
        $activity->delete();
		return redirect('/');
    }
}

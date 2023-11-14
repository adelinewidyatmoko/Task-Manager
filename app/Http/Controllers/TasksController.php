<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksPostRequest;
use App\Models\Tasks; 
use App\Models\Images;
use App\Models\Users;
use Illuminate\Http\Request;


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
     $tasks = Tasks::with('image','status')->paginate(8);
    //  $tasks = Tasks::with('image','status');
    
      // return view('task.index',['task'=>$tasks]); // itu karena nama bladenya index dan ada di folder task pengganti penyampaian return view('task.index')
       //udah include return $tasks->all();

       /* 'tasks pertama dari var $tasks = new Tasks(), $tasks kedua dari book::paginate*/
       return view('task.index')->with('tasks', $tasks);
    
        //maksunya task.index itu penamaanya satu satu .. task karena folder di view task , index karena index.blade tapi gapake blade nya ambil depan doang.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('task.create'); //dimana task adalah nama folder di view dan create adalah nama file blade dalam task.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TasksPostRequest $request)
    {
       
        $validated = $request->validated();

        Tasks::create(array_merge($validated,[
            'user_id' => auth()->user()->id,
            'publish_date'=> now()
        ]));

        //return view('task.index');
        return redirect()
        ->route('task.index')
        ->with('status','Data saved succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

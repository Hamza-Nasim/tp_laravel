<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserApp;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view("thanks",["users"=>UserApp::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Users = new UserApp();
        $Users->name = $request->input("name");
        $Users->email = $request->input("email");
        $Users->message = $request->input("message");
        $Users->save();
        return redirect()->route('Users.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
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

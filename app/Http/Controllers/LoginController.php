<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function verify_data(Request $request)
    {

        $users = Login::where([
            ['email', $request->email],
            ['password', $request->password],
        ])->first();

        if ($users) {
            if ($users->role == "Reader") {
                return view('home.reader_dashboard');

            } else {
                return view('home.staff_dashboard');

            }

        }

        // !$users means koi nai bhi arhi to login krde
        // if (!$users) {
        //     return view('home.satff_dashboard');
        // }

        // $model1 = new Login();
        // if ($model1->email = $request->email && $model1->password = $request->password && $request->role = "Staff") {
        //     return view('home.satff_dashboard');
        // }
        // if ($model1->email = $request->email && $model1->password = $request->password && $request->role = "Reader") {
        //     return view('home.reader_dashboard');
        // }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
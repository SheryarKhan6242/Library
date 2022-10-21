<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Reader;
use App\Models\staffs;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index');

    }

    public function insert_data(Request $request)
    {
        $exist = Login::where('email', $request->email)->get();
        // dd($exist->all());
        if ($exist->all() != "") {

            $model = new Login();
            $model->email = $request->email;
            $model->user_name = $request->username;
            $model->password = $request->password;
            $model->role = $request->role;
            $model->save();

            //concatenation of first name and last name
            $staff1 = $request->f_name . " " . $request->l_name;

            $role_check = $request->role;
            if ($role_check == "Reader") {
                $model1 = new Reader();
                $model1->email = $request->email;
                $model1->first_name = $request->f_name;
                $model1->last_name = $request->l_name;
                $model1->phone_no = $request->phone_no;
                $model1->address = $request->address;
                $model1->save();
            }
            if ($role_check == "Staff") {
                $model2 = new staffs();
                $model2->staff_name = $staff1;
                $model2->save();
            }

            return view("login.verify");
        }
    }

    // public function login()
    // {
    //     return view('login.verify');

    // }

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
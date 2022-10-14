<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AjaxController extends Controller
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

    public function ajaxRequestPost(Request $request)
    {
        $data = $request->all();
        //$gettingbookid = $request->bookid;
        //$gettinguserid = $request->userid;

        $model = new reserve();
        $model->issue_date = date("Y-m-d");
        $model->return_date = Carbon::now()->addDays(30)->format('Y-m-d');
        $model->book_id = $request->bookid;
        $model->user_id = session('key');
        $model->save();

        // $model1 = Book::find($gettingbookid);
        // $model1->update(['status', "Reserved"]);
        // $model1->save();

        // $model1 = new Book();
        // Book::where('book_id', $gettingbookid)->update(array('status' => 'Reserved'));
        // $model1->save();

        // dd($data['name'], ['id']);
        return response()->json(['book ID' => $request->book_id, 'user ID' => session('key')]); //yeh json(k ander ka hai) ['book ID' => $gettingbookid, 'user ID' => $gettinguserid]

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
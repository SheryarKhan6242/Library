<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookController extends Controller
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

    public function publish_book(Request $request)
    {
        $model = new Book();
        $model->title = $request->book_title;
        $model->price = $request->book_price;
        $model->catogory = $request->book_category;
        $model->edition = $request->book_edition;
        $model->status = "Available";
        $model->save();

    }

    public function return_book(Request $request)
    {
        $model = Reserve::where('book_id', $request->book_id)->first();
        DB::table('reserves')->where('res_id', $model->res_id)->delete();
        Book::where('book_id', $request->book_id)->update(array('status' => 'Available'));
        return response()->json(['success' => true]);

    }

    public function extend_date(Request $request)
    {
        $model = Reserve::where('book_id', $request->book_id)->first();
        $datetime = $model->return_date;
        // dd($datetime);


        // $date = Carbon::createFromFormat('Y-m-d', $datetime)->format('Y-m-d');
        // date("Y-m-d");
        // $d = new date($datetime);
        // dd($date);
        // $formatted_date = $d->format('Y-m-d');

        // $time = new DateTime(strtotime($datetime));
        // dd($formatted_date);

        // $dda = $datetime;
        // $ddaa = Carbon::parse()->$datetime;
        // $dda = Carbon::now($datetime)->addDays(10)->format('Y-m-d');
        // dd($ddaa);
        // $datetime = new DateTime($model1->return_date);
        // $datetime = date('d-m-Y', strtotime($model1->return_date));

        // $current = Carbon::now();
        $returnDate = Carbon::parse($datetime)->addDays(5)->format('Y-m-d');
        Reserve::where('res_id', $model->res_id)->update(array('return_date' => $returnDate));
        return response()->json(['success' => true]);

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
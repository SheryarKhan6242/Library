<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reserve;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class ReaderController extends Controller
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

    public function viewBook()
    {
        // $user = Auth::user();
        // dd($user);

        // Get the currently authenticated user's ID...

        $books = Book::where('status', "Available")->get();

        $data['books'] = $books;
        return view('reader.viewbook', $data);
    }

    public function mybookings()
    {
        $users = Reserve::join('books', 'reserves.book_id', '=', 'books.book_id')
            ->where('reserves.user_id', session('key'))
            ->get(['reserves.issue_date', 'reserves.return_date', 'books.title', 'books.catogory', 'edition' , 'books.book_id']);

        $data['bookings'] = $users;

        // return response()->json(['success' => true]);
        return view('reader.viewbooking', $data);
    }

    public function popup()
    {
        $model = Reserve::where('user_id', session('key'))->first();

        $dateofreturn = $model->return_date;

        $datetime1 = new DateTime(Carbon::now()->format('Y-m-d'));
        $datetime2 = new DateTime($dateofreturn);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        if ($days > 0 && $days < 3) {
            return response()->json(['success' => true]);
        }

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
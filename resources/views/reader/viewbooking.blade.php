@extends('layouts.template')

<div class="container">

    <table>
        <tr>
            <th>Book Title</th>
            <th>Book Category</th>
            <th>Book Edition</th>
            <th>Issue Date</th>
            <th>Return Date</th>
        </tr>

        @foreach ($bookings as $book)
            <tr>
                <td> {{ $book->title }} </td>
                <td> {{ $book->catogory }} </td>
                <td> {{ $book->edition }} </td>
                <td> {{ $book->issue_date }} </td>
                <td> {{ $book->return_date }} </td>
                <td> <a href="#" onclick="extenddate( {{ $book->book_id }} )">Extend </a> </td>
                <td> <a href="#" onclick="bookreturn( {{ $book->book_id }} )">Return</a> </td>

                {{-- <td> <a href="#" id={{ $book->book_id }} onclick="getBookId( {{ $book->book_id }} )">
                        {{ $book->status }}
                    </a>
                </td> --}}

            </tr>
        @endforeach
    </table>



</div>

<script>
    function check() {
        $.ajax({
            url: "{{ route('return.popup') }}",
            method: 'get',
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                if (response.success) {
                    alert("Warning! Return date is near ")
                }
            }
        });
    }
    window.onload = check;



    function bookreturn(bookId) {
        $.ajax({
            url: "{{ route('book.return') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                book_id: bookId
            },
            success: function(response) {
                if (response.success) {
                    alert("Return booked succesfully")
                }
            }
        });
    }

    function extenddate(bookId) {
        $.ajax({
            url: "{{ route('book.extend') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                book_id: bookId
            },
            success: function(response) {
                if (response.success) {
                    alert("Date extend succesfully")
                }
            }
        });
    }
</script>


<style>
    table {
        margin: 37px 197px;
        border-spacing: 0 15px !important;
        border-collapse: separate !important;
    }

    tr {
        border-spacing: 12px;
        border-collapse: none;
    }

    th {
        color: white;
    }

    th,
    td {
        width: 200px;
    }

    h2 {
        color: #4287f5;
    }

    .btn {
        margin: 37px 197px;
        font-size: 1px;
        color: blueviolet
    }
</style>

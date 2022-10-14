@extends('layouts.template')

<table>
    <tr>
        <th>Book ID</th>
        <th>Book Title</th>
        <th>Book price</th>
        <th>Book Category</th>
        <th>Book Edition</th>
        <th>Status</th>
    </tr>

    @foreach ($books as $book)
        <tr>
            <td> {{ $book->book_id }} </td>
            <td> {{ $book->title }} </td>
            <td> {{ $book->price }} </td>
            <td> {{ $book->catogory }} </td>
            <td> {{ $book->edition }} </td>
            <td> <a href="#" onclick="getBookId( {{ $book->book_id }} )"> {{ $book->status }}
                </a>
            </td>

        </tr>
    @endforeach

    {{-- <a href="/logout">Logout</a> --}}

</table>



<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>





<!-- JS Scripts -->
<script src="{{ asset('assets-frontend/js/jQuery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets-frontend/js/main.js') }}"></script>
<script src="{{ asset('assets-frontend/Bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- SVG icons loader -->
<!-- /SVG icons loader -->
<!-- DataTables -->

<script>
    function getBookId(bookID) {
        console.log("in the book")

        $.ajax({
            url: "{{ route('ajaxRequest.post') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                //name: "shery",
                //userid: userID,
                bookid: bookID
            },
            success: function(dat) {
                var test = JSON.stringify(dat);
                alert(test);
            }

        });
    }
</script>

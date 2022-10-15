@extends('layouts.template')
<div class="container">
    <h3 style="text-align:center"> Your Bookings</h3>
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
                <td> <a href="#" id={{ $book->book_id }} onclick="getBookId( {{ $book->book_id }} )"> {{ $book->status }}
                    </a>
                </td>

            </tr>
        @endforeach
    </table>
</div>
<style>

table {
    margin: 37px 197px;
    border-spacing: 0 15px !important;
    border-collapse: separate !important;
}
tr
{
    border-spacing: 12px;
    border-collapse: none;
}
th {
    color: white;
}

th, td {
    width: 200px;
}

h2 {
  color: #4287f5;
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
        $("#"+bookID).text('Reserved');
        $("#"+bookID)
        .css('cursor', 'default')
        .css('text-decoration', 'none');

        $.ajax({
            url: "{{ route('ajaxRequest.post') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                book_id: bookID
            },
            success: function(response) {
                if(response.success)
                {
                    alert("Successfully Booked!")
                }
                else
                {
                    alert("Error!: Couldn't book")
                }
            }
        });
    }
</script>

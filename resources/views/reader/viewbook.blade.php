@extends('layouts.template')

<div class="container">

    <h3 style="text-align:center"> Your Bookings</h3>
    <table>
        <tr>
            <th>Book Title</th>
            <th>Book price</th>
            <th>Book Category</th>
            <th>Book Edition</th>
            <th>Status</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td> {{ $book->title }} </td>
                <td> {{ $book->price }} </td>
                <td> {{ $book->catogory }} </td>
                <td> {{ $book->edition }} </td>
                <td> <a href="#" id={{ $book->book_id }} onclick="getBookId( {{ $book->book_id }} )">
                        {{ $book->status }}
                    </a>
                </td>

            </tr>
        @endforeach
    </table>

    <div>
        <a class="btn" href="{{ route('view.mybookings') }}"> View your Reserved Books </a>
    </div>

</div>


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





<!-- JS Scripts -->
<script src="{{ asset('assets-frontend/js/jQuery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets-frontend/js/main.js') }}"></script>
<script src="{{ asset('assets-frontend/Bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- SVG icons loader -->
<!-- /SVG icons loader -->
<!-- DataTables -->

<script>
    // $("a").click(function(event) {
    //     if ($(this).hasClass("disabled")) {
    //         event.preventDefault();
    //     }
    //     $(this).addClass("disabled");
    // });

    function getBookId(bookID) {
        $.ajax({
            url: "{{ route('ajaxRequest.post') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                book_id: bookID
            },
            success: function(response) {
                if (response.success) {
                    $("#" + bookID).text('Reserved');
                    $("#" + bookID)
                        .css('cursor', 'default')
                        .css('text-decoration', 'none');

                    alert("Successfully Booked!")
                } else if (response.failed) {
                    alert("Booking limit reached")
                } else {
                    alert("Error!: Couldn't book")
                }
            }
        });
    }
</script>

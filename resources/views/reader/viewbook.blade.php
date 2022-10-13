<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



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
            <td> <a href="#" onclick="getBookId(123)"> {{ $book->status }} </a>
            </td>

        </tr>
    @endforeach


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
function getBookId(id) {
    console.log("in book")
    
      $.ajax({
            url: "{{ route('ajaxRequest.post') }}",
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                name: "shery",
                id: id
        },
            success: function (data) {
                    var test = JSON.stringify(data);
                    alert(test);
			      }

      });
}
       
</script>

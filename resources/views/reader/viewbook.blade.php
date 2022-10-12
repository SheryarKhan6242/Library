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
            <td> <a href="#" onclick="getBookId(book_id)"> {{ $book->status }} </a>
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

<script>
    function getBookId(book_id) {
        alert("Book Reserved");
    }
</script>

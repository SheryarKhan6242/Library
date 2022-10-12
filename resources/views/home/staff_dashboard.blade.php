<form action="{{ route('publish.book') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h1>Add Book </h1>

    <table>
        <tr>
            <td>Enter Book Title</td>
            <td> <input type="text" name="book_title" required> </td>
        </tr>
        <tr>
            <td>Enter Book price</td>
            <td> <input type="number" name="book_price" required> </td>
        </tr>
        <tr>
            <td>Enter Book Category</td>
            <td> <input type="text" name="book_category" required> </td>
        </tr>
        <tr>
            <td>Enter Book Edition</td>
            <td> <input type="text" name="book_edition" required> </td>
        </tr>

        <tr>
            <td> <input type="submit" name="btn_submit" value="Publish"> </td>
        </tr>
    </table>
</form>
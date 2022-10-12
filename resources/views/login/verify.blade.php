<html>

<head>

</head>

<body>
    <form action="{{ route('login.check') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h1>Login Page</h1>

        <table>
            <tr>
                <td>Enter Email</td>
                <td> <input type="email" name="email" required> </td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td> <input type="password" name="password" required> </td>
            </tr>


            <tr>
                <td> <input type="submit" name="btn_submit" value="Login"> </td>
            </tr>
        </table>
    </form>

</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login page</h1>

    <form action="" method="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table>
            <tr>
                <td>Enter Email</td>
                <td> <input type="email" name="email" required> </td>
            </tr>
            <tr>
                <td>Enter Password</td>
                <td> <input type="password" name="password" required> </td>
            </tr>
            <tr>
        </table>
    </form>

</body>

</html> -->
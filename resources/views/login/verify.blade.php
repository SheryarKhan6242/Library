<html>

<head>

</head>

<body>
    <form action="{{ route('verify.login') }}" method="POST">
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
                <td> <input type="submit" name="btn_submit" value="Login"> 
                    <a href= "{{route('view.register') }}"> Sign Up </a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<html>

<head>

</head>

<body style="background-color:lightslategray">
    {{-- @extends('layouts.template1') --}}
    {{-- @include('layouts.templateSignup') --}}

    <div class="container">
        <form action="{{ route('verify.login') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h1>Login Page</h1>
            <table>
                Enter Email
                <input type="email" name="email" required>

                Enter Password
                <input type="password" name="password" required>

                <input class="submit" type="submit" name="btn_submit" value="Login">
                <a href="{{ route('view.register') }}">Sign up</a>
                {{-- Dont have an account? <a href="{{ route('view.register') }}"> Sign Up </a> --}}

            </table>
        </form>
    </div>
</body>

</html>



<style>
    a {
        background-color: slateblue;
        position: relative;
        padding: 3px;
        display: block;
        width: 95%;
        padding: 10px;
        border-radius: 4px;
        margin: 2px;
        text-decoration: none;
        text-align: center;

    }

    a:hover {
        background-color: palevioletred;
        color: black;
    }

    .container {
        position: relative;
        left: 35%;
        width: 400px;
        background-color: lightblue;
        padding: 30px;
    }

    input {
        display: block;
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        margin: 2px;
    }

    .submit:hover {
        background-color: #ddd;
        color: black;
    }
</style>

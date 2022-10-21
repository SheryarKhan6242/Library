{{-- @extends('layouts.template1') --}}
<html>

<head>
</head>

<body style="background-color:lightslategray">
    {{-- @include('layouts.templateLogin') --}}

    <div class="container">
        <form action="{{ route('register.save') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h1>Register Page</h1>

            <table>

                Enter Username
                <input type="text" name="username" required>


                Enter Email
                <input type="email" name="email" required>

                Enter Password</td>
                <input type="password" name="password" required>

                Select Role
                <select name="role">
                    <option value="Staff">Staff</option>
                    <option value="Reader">Reader</option>
                </select>


                Enter First name
                <input type="text" name="f_name" required>

                Enter Last name
                <input type="text" name="l_name" required>


                Enter Phone Number
                <input type="tel" name="phone_no" required>

                Enter Address
                <input type="text" name="address" required>

                <input class="submit" type="submit" name="btn_submit" value="Register">
                <a href="{{ route('view.login') }}">Login</a>
                {{-- Already have an account ? <a href="{{ route('view.login') }}">Login</a> --}}

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

    input,
    select {
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

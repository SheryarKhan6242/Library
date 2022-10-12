<div class="container">
<form action="{{ route('register.save') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <h1>Register Page</h1>

    <table>
        <tr>
            <td>Enter Username</td>
            <td> <input type="text" name="username" required> </td>
        </tr>
        <tr>
            <td>Enter Email</td>
            <td> <input type="email" name="email" required> </td>
        </tr>
        <tr>
            <td>Enter Password</td>
            <td> <input type="password" name="password" required> </td>
        </tr>
        <tr>
            <td>Select Role</td>
            <td> <select name="role">
                    <option value="Staff">Staff</option>
                    <option value="Reader">Reader</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Enter First name</td>
            <td> <input type="text" name="f_name" required> </td>
        </tr>
        <tr>
            <td>Enter Last name</td>
            <td> <input type="text" name="l_name" required> </td>
        </tr>
        <tr>
            <td>Enter Phone Number</td>
            <td> <input type="tel" name="phone_no" required> </td>
        </tr>
        <tr>
            <td>Enter Address</td>
            <td> <input type="text" name="address" required> </td>
        </tr>
        <tr>
            <td> <input type="submit" name="btn_submit" value="Register"> 
            Already have an account ? <a href="{{route("view.login") }}">Login</a>
            </td>
        </tr>
    </table>
</form>


</div>

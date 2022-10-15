<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <!-- Theme Font -->

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets-frontend/Bootstrap/dist/css/bootstrap.css') }}"> --}}

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-frontend/css/main.css') }}">
</head>

<body>
    <div class="container">
        <a href="{{ route('session.logout') }}" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </p>
    </div>
</body>

</html>

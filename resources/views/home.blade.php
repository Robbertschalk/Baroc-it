<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

    <style>


        body{
            margin: 0 auto;
        }

        *{
            font-family: Arial;
            margin: 0 auto;
        }

       .logout_button a{
            text-decoration: none;
            border: solid 1px;
            padding: 5px;
            margin-top: 5px;
            background-color: white;
            color: black;

        }

        .logout_button{
            font-size: 20px;
            padding: 20px;
            background-color: #3d4852;
            margin-bottom: 75px;
        }

        .wrapper_main{
            text-align: center;
            display: flex;

        }

        .main_left{
            margin: 0 auto;
        }

        .main_right{
            margin: 0 auto;

        }

        th, td {
            border: 1px solid black;

        }

        .add_client_form{
            width: 321px;
            text-align: center;
            margin-left: 0px;
        }

        .main_right h3{
            font-size: 30px;
            margin-bottom: 12px;
        }

        th{
            padding: 10px;
        }

        .main_left h3{
            font-size: 30px;
            margin-bottom: 12px;
        }

        input{
            width: 300px;
            height: 30px;
        }
        .error_message{
            text-align: center;
            font-size: 20px;
            background-color: red;
            margin-bottom: 0px;
            color: white;
        }

        select{

            width: 300px;

        }
    </style>
</head>
<body>
<div class="error">

    @if (isset($error))

        @if ($error == true)
            <p class="error_message">Empty input field(s)</p>
        @endif
    @endif
</div>
<div class="logout_button">
    <a href="{{route('log.out')}}">Logout</a>
</div>
<div>
    <h3>Select your department</h3>
    <ul>
        <a href="{{route('refresh.sales')}}"><li>Sales</li></a>
        <a href=""><li>Finance</li></a>
        <a href=""><li>Development</li></a>
    </ul>
</div>
</body>
</html>

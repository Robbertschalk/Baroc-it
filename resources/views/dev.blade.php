<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Development</title>
</head>

<style>

    body{
        margin: 0 auto;
    }

    *{
        font-family: Arial;
        margin: 0 auto;
    }

    a{
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


    .main_right{
        margin: 0 auto;
        width: 40%;
    }

    th, td {
        border: 1px solid black;
        font-size: 25px;
        padding: 10px;
    }

    .main_right h3{
        font-size: 30px;
        margin-bottom: 12px;
    }

    input{
        width: 200px;
        height: 30px;
    }

</style>


<body>

<div class="logout_button">
    <a href="http://localhost:8000/home">Logout</a>
</div>
<div class="wrapper_main">
    <div class="main_right">
        <h3>Project Data</h3>
        <table>
            <tr>
                <th>Name</th>
                <th>Status</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->project_name}}</td>
                    <td>{{$d->project_status}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

</body>
</html>
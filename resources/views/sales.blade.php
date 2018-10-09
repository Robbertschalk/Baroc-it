<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        .main_left{
            margin: 0 auto;
            border: solid 1px;
            width: 40%;
        }

        .main_right{
            margin: 0 auto;
            border: solid 1px;
            width: 40%;
        }

        th, td {
            border: 1px solid black;
            font-size: 20px;
        }

        .add_client_form{
           width: 70px;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="logout_button">
        <a href="">Logout</a>
    </div>
    <div class="wrapper_main">
        <div class="main_left">
            <h3>Add Client</h3>
            <div class="add_client_form">
                <form>
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">
                    <input type="text" placeholder="test">

                </form>
            </div>
        </div>
        <div class="main_right">
            <h3>Customer Data</h3>
            <table>
                <tr>

                    <th>Name</th>
                    <th>Phonenumber</th>
                    <th>Limit</th>
                    <th>Number</th>
                    <th>Creditworthy</th>

                </tr>

                @foreach ($data as $d)
                <tr>
                    <td>{{$d->Name}}</td>
                    <td>{{$d->Tel}}</td>
                    <td>{{$d->limit}}</td>
                    <td>{{$d->Customernumber}}</td>
                    <td>{{$d->Creditworthy}}</td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>

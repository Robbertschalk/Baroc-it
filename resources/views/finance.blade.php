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
        }

        .main_right{
            margin: 0 auto;

        }

        th, td {
            border: 1px solid black;

        }

        .add_client_form{
            width: 70px;
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
            width: 200px;
            height: 30px;
        }

        .creditworthy {
            display: flex;
        }

        #CW {
            margin-top: 4px;
        }

        #credit {
            margin-left: 80%;
            width: 50px;
        }

    </style>
</head>
<body>
<div class="logout_button">
    <a href="">Logout</a>
    <a href="{{route('refresh.finance')}}">Refresh</a>
</div>
<div class="wrapper_main">
    <div class="main_left">
        <h3>Update Client</h3>
        <div class="add_client_form">
            <form action="{{route('client.add')}}"  method="post">
                @csrf
                <input type="text" name="name" placeholder="name" disabled>
                <input type="number" name="tel" placeholder="tel" disabled>
                <input type="text" name="limit" placeholder="limit" >
                <input type="text" name="customernumber" placeholder="customernumber" disabled>
                <div class="creditworthy">
                    <label id="CW" for="credit">Creditworthy</label>
                    <select id="credit" name="creditworth">
                        <option value="confirm">Yes</option>
                        <option value="decline">No</option>
                    </select>
                </div>
                <input type="text" name="contactperson" placeholder="contactperson" disabled>
                <input type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
    <div class="main_right">
        <table class="table" id="table">
            <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Phonenumber</th>
                <th class="text-center">Limit</th>
                <th class="text-center">Customernumber</th>
                <th class="text-center">Creditworthy</th>
                <th class="text-center">Prospect</th>
                <th class="text-center">Contactperson</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr class="item{{$item->id}}">
                    <td>{{$item->Name}}</td>
                    <td>{{$item->Tel}}</td>
                    <td>{{$item->limit}}</td>
                    <td>{{$item->Customernumber}}</td>
                    <td>{{$item->Creditworthy}}</td>
                    <td>{{$item->prospect}}</td>
                    <td>{{$item->Contactperson}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>


</body>
</html>

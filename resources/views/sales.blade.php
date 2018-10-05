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
            margin-top: 20px;
            font-size: 20px;
            margin-left: 20px;
            margin-bottom: 75px;
        }

        .logout_button:hover a{
            background-color: red;
            color: white;
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
                    <th>customer number</th>
                    <th>Credit Worthy</th>
                </tr>
                <tr>
                    <td>Piet</td>
                    <td>0625784896</td>
                    <td>2</td>
                    <td>245</td>
                    <td>Yes</td>


                </tr>
            </table>
        </div>
    </div>
</body>
</html>

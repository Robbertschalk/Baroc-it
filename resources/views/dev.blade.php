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

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }

    .modal-body {padding: 2px 16px;}

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
                <th>Description</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->project_name}}</td>
                    <td>{{$d->project_status}}</td>
                    <td><button id="myBtn">Description</button></td>
                </tr>
            @endforeach
        </table>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>{{$d->project_name}}</h2>
                </div>

                <div class="modal-body">
                    <h4>Description</h4>
                    <p>{{$d->project_description}}</p>

                    <p><b>Status:</b> {{$d->project_status}}</p>

                </div>
            </div>

        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </div>
</div>

</body>
</html>
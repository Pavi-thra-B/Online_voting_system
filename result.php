
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Release Result</title>

    <style>
        body {
            background-image: url("background3.jpeg");
        }

        #h {
            margin-top: 1px;
        }

        #h1 {
            margin-top: 40px;
            margin-left: 30px;

        }

        .topic1 {

            height: 50px;
            width: 1320px;
            background-color: rgb(6, 224, 240);
            padding: 10px;
            border-color: black;
            border-radius: 10px;
            margin-left: 10px;
            border-style: double;



        }


        .option {
            height: 3%;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        nav {
            flex: 1;
            text-align: right;

        }

        nav ul li {
            list-style: none;
            display: inline-block;
            font-size: 13px;
            font-weight: lighter;
        }

        .box {
            margin-left: 450px;
            margin-top: 90px;
            width: 380px;
            height: 300px;
            background-color: aqua;
            border: 2px solid darkblue;
            padding: 2px;
            border-radius: 20px;
        }

        .btn {
            width: 100px;
            height: 25px;

            background-color: lightblue;
            border: 2px solid darkblue;
            color: black;
            padding: 5px;
            border-radius: 2px;
            margin-top: 50px;
            margin-left: 120px;
        }
    </style>
</head>

<body>
    <div class="topic1">

        <h3 id="h">Online Voting System</h3>
        <div class="option">
            <nav>
                <ul>
                    <li>
                        <h3><a href="adminhome.php">Home</a></h3>
                    </li>
                    <li>
                        <h3>|</h3>
                    </li>
                    <li>
                        <h3><a href="home1.html">Logout</a></h3>
                    </li>
                </ul>
            </nav>



        </div>
    </div>
    <form action="ressuc.php" method="POST">
        <div class="box">
            <center>
                <h3>Result Release</h3>
            </center>
            <hr id="#line">
            <br><br>
            <label id="h1" for="datetime">Date & Time: </label>

            <input type="datetime-local" name="dt" id="dt">
            <br>
            <button type="submit" onclick="set()" class="btn">Set</button>

        </div>

    </form>
</body>
<script>
    function set() {


        alert("Date and time is seted successfully");

    }

</script>

</html>

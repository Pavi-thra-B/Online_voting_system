<?php
$con = mysqli_connect("localhost", "root", "", "ovs") or die(mysqli_error($con));
$query1 = "select Partyname,Principles,Symbol from party_register";
$query2 = "select Candidateid_number,Photo from candidate_register";
$result1 = mysqli_query($con, $query1);
$result2 = mysqli_query($con, $query2);
$home="voterhomepage";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate_List</title>
    <style>
        body {
            background-image: url("img1.jpg");
        }

        .head li,
        h1,
        ul {
            display: inline;
        }

        li {
            font-size: 1.5em;
        }

        nav {
            border-style: double;
            border-color: black;
            color: black;
            background-color: rgb(6, 224, 240);
            padding: 5px;
            border-radius: 10px;
        }

        .head_nav {
            margin-left: 80%;
        }

        table,
        tr,
        td,
        th {
            border: 2px solid black;
            border-collapse: collapse;
        }

        table {
            margin-top: 60px;
            border-collapse: collapse;
            width: 100%;
            padding: 3px;
            height: 100px;
            text-align: center;
            background-color: rgb(6, 224, 240);
            column-width: auto;
        }

        th {
            color: black;
            style: solid;
            background-color: blue;
            font-size: 1.2em;
        }

        td {
            vertical-align: middle;
        }

        .h {
            color: black;
            width: 300px;
            height: 30px;
            background-color: aqua;
            border: 2px solid;
            padding: 5px;
            border-radius: 10px;
            background-color: rgb(6, 224, 240);
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="head">
        <nav>
            <h1> Online Voting System</h1>
            <ul class="head_nav">
                <li class="head_list"><a  href="voterhome.php?username=<?php echo urlencode($home)?>">Home</a></li>
                <li>|</li>
                <li><a href="home1.html">Logout</a></li>
            </ul>
        </nav>
    </div>
    <center>
        <div class="h">
            <h1>Candidate List</h1>
        </div>
    </center>

    <table>
        <tr>
            <th>Party_Name</th>
            <th>Party_Description</th>
            <th>Party_Symbol</th>
            <th>Candidate_ID</th>
            <th>Candidate_pic</th>
        </tr>
        <?php
        // Fetch and display party-related data
        while ($row1 = mysqli_fetch_assoc($result1)) {
        ?>
            <tr>
                <td><?php echo $row1['Partyname'] ?></td>
                <td><?php echo $row1['Principles'] ?></td>
                <td><img src="data:image/jpeg;base64, <?php echo base64_encode($row1['Symbol']); ?>" alt="Party Symbol" width="100" height="100"></td>
                <?php
                // Fetch and display candidate-related data
                if ($row2 = mysqli_fetch_assoc($result2)) {
                ?>
                    <td><?php echo $row2['Candidateid_number'] ?></td>
                   
                    <td><img src="data:image/jpeg;base64, <?php echo base64_encode($row2['Photo']); ?>" alt="Candidate Pic" width="100" height="100"></td>
                <?php
                } else {
                    // If there are no more candidates, display empty cells
                ?>
                    <td></td>
                    <td></td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>

<?php
require_once('db.php');
//$query="Select * from candidate  order by Vote_count desc";
$query="SELECT * FROM candidate_register INNER JOIN party_register ON candidate_register.Serial_num = party_register.Serial_num order by party_register.Vote_count desc;";
$result=mysqli_query($conn,$query);
$query2="Select * from party_register";
//$query2="Select * from candidate_register INNER JOIN party_register ON candidate_register.Serial_num = party_register.Serial_num;
$res= mysqli_query($conn,$query2);
$test=array();

$count=0;
while($row=mysqli_fetch_array($res)){
    $test[$count]["label"]=$row["Partyname"];
    $test[$count]["y"]=$row["Vote_count"];
    $count=$count+1;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Result view</title>
    <style>
        body{
                   
            background-image:url(img1.jpg);
        }
        .field{
            width:400px;
            margin:auto;
            margin-top: 40px;
            margin-bottom: 40px;
            background-color:rgb(6, 224, 240);
            color:black;
            padding:10px 20px 30px;
            font-size:1.1em;  
            border-radius:10px;         
        
        
        }
        input[type=submit], input[type=button] {
                    background-color: navy;
                    border: none;
                    color: white;
                    padding: 7px 14px;
                    text-decoration: none;
                    margin: 2px 1px;
                    cursor: pointer;
                   }
        .label{
        padding: 5px;
        }
        h2{
            color:black;
            text-align: center;
        }
        h1{
          
            text-align: center;
        }
        
        div{
            margin:8px;
          
        }
        
        .inp{
            margin-left: 5px;
            width:99%;
            font-size:80%;
            border: 1px solid blue;
            padding:8px 10px;
            border-radius: 7px;
            display:block;
            box-shadow:5px;
            box-sizing: border-box;
        }
        .btn{
            text-align: center;
           padding:10px;
         
        }
        button{
            text-align:center;
            border-radius:1px;
            padding:0px;
            
        }
        nav{
            border-style:double;
            border-color:black;
            color:black;
            background-color:rgb(6, 224, 240);
            padding:5px;
            border-radius:10px;   
        
        }
        ul{
            margin-left:80%;
        }
        
        li,h1{
            display:Inline;
        }
        li{
            font-size:1.5em;
        }
        .bot{
                color:black;
                padding: 10px;
            }


        table, td, th {
               border: 3px solid black;
               /*background-color: #f2f2f2;*/
         }
         th{
            background-color: blue;
            font-weight:bold;
             color:white;
             height:55px;

         }
         h4{
            color:Blue;
         }

        table {
               border-collapse: collapse;
               width: 80%;

            }

       td {
            text-align: center;
            height:45px;
         /*background-color: powderblue;*/
          }
          tr{
            background-color: rgb(6, 224, 240);
          }
        tr:nth-child(2){
            background:#99FFFF;
            height:65px;
}
      
        </style>
       <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "blue",
	title:{
		text: "Vote Chart"
	},
	axisY: {
		title: "Vote count"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Votes",
        //indexLabelBackgroundColor: "lightblue"
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>,
        datasets: [{
                   // label: 'Your Chart Title',
                   // data: data.data,
                    backgroundColor: 'blue', // Set your custom background color here
                    borderColor: 'rgba(75, 192, 192, 1)',
                    //borderWidth: 1
                }]
        
	}
]
  
});
chart.render();
 
}
</script>         
 
</head>
<body>
    <div class="head">
        <nav>
            <h1> ONLINE VOTING SYSTEM</h1>
            
            <ul>
                <li><a href="home1.html">Logout</a></li>
            </ul>    
        </nav>     
    </div>


                         <center><h2 style="color:powderblue;">RESULT</h2></center> 
                       </div>
                       <div class="card-body">
                        <center>
                        <table >
                                <tr><h2>
                                    <th>Candidate ID</th>
                                    <th>Candidate Name</th>
			            <th>Candidate photo</th>
                                    <th>Party Name</th>
                                    <th>Party Symbol</th>
                                    <th>Principles</th>
                                    <th>Vote count</th></h2>
                                </tr>
                                <tr>
                                    <?php
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            ?>
                                              <td><?php echo $row['Candidateid_number']; ?></td>
                                              <td><?php echo $row['Firstname']; ?></td>
                                              <td>
                                                  <img src="data:image/jpeg;base64,
                                                  <?php echo base64_encode($row['Photo']);?>"
                                                  alt="img" width="100" height="100">
                                             </td>
					    <td><?php echo $row['Partyname']; ?></td>
                                              <td>
                                                  <img src="data:image/jpeg;base64,
                                                  <?php echo base64_encode($row['Symbol']);?>"
                                                  alt="img" width="100" height="100">
                                             </td>
                                              <td><?php echo $row['Principles']; ?></td>
                                              <td><?php echo $row['Vote_count']; ?></td>
                                              </tr>     
 
                                            <?php
                                        }
                                    ?>
                                
                             </table>
                        </center>
                        <br><br>
                             
                       </div>
                       <center><div id="chartContainer" style="height: 270px; width: 40%;"></div></center>
                       
                       <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    
</body>
                                    </html>

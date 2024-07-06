<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the keys exist in $_POST
    $fieldname = isset($_POST['field']) ? $_POST['field'] : '';
    $candidate_id = isset($_POST['candidate_id']) ? $_POST['candidate_id'] : '';
    $existingval = isset($_POST['old']) ? $_POST['old'] : '';
    $newval = isset($_POST['new']) ? $_POST['new'] : '';
    $proof = isset($_POST['proof']) ? $_POST['proof'] : '';



    
    if (!$fieldname || !$candidate_id || !$existingval || !$newval) {
      
    } else {
        $updateQuery = "UPDATE candidate_register SET $fieldname = '$newval' WHERE Candidateid_number = '$candidate_id' AND $fieldname = '$existingval'";
        $result2 = mysqli_query($conn, $updateQuery);

        if (!$result2) {
            die('MySQL Error: ' . mysqli_error($conn));
            echo "<script type='text/javascript'>alert('ERROR: CAN'T UPDATE THE DATA IN THE DATABASE...')</script>";
        } else {
            echo "<script type='text/javascript'>alert('SUCCESSFULLY REQUESTED AND UPDATED :)')</script>";
            header("Location: candgetdetails.php?username=" . urlencode($candidate_id));
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="app_can.js" defer></script>
    <title>Update Candidate Profile</title>
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
        .label{
        padding: 5px;
        }
        h2{
            color:black;
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
            border-radius:6px;
            padding: 10px;
            
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
        li,h1,ul{
            display:Inline;
        }
        li{
            font-size:1.5em;
        }
        .inp-grp input:focus{
    outline:0;
}

.inp-grp .error{
    color:red;
    font-size:16px;
    margin-top:5px;
    border-color:red;
   
}
.inp-grp.success input{
    border-color:green;
    border-width:2px;

}
.inp-grp.error input{
    border-color:red;
    border-width:2px;
}
        
        </style>
                

</head>
<body>
    <div class="head">
        <nav>
            <h1> Online Voting System</h1>
            <ul>
                <li ><a href="candidatehomepage.php">Home</a></li>
                <li>|</li>
                <li><a href="home1.html">Logout</a></li>
            </ul>    
        </nav>
        
         
    </div>
   
    <fieldset class="field">
        <b>
            <legend> <h2>Update Profile</h2>
               
            </legend>
        </b>
        
        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">

            <div class="inp-grp">


            <label class="label" for="field">Field name</label>
          <select id="field" class="inp" name="field" title="Select field name">
            <option selected hidden value="" >select field name</option>
                    <option>Firstname</option>
                    <option>Lastname</option>
                    <option>Candidate_ID</option>
                    <option>Party_Name</option>
                    <option>Party_Symbol</option>
                    <option>Party_Description</option>
                    <option>Aadhar_number</option>
                    <option>DOB</option>
                    <option>Age</option>
                    <option>Gender</option>
                    <option>Phone_Number</option>
                    <option>Email</option>
                    <option>Door_Number</option>
                    <option>Street</option>
                    <option>City</option>
                    <option>Pincode</option>
                    <option>Nationality</option>
                    
                </select>
                <div class="error"></div>
               
            </div >

            <div class="inp-grp">
                <label class="label" for="candidate_id">Candidate ID</label>
                <input id="candidate_id" class="inp" type="text"  name="candidate_id" placeholder="Enter Candidate_ID value">
                <div class="error"></div>
            </div>

            <div class="inp-grp">
                <label class="label"  for="old">Existing value</label>
                <input id="old" class="inp" type="text"  name="old" placeholder="Enter existing value">
                <div class="error"></div>
            </div>
            <div class="inp-grp">
                <label class="label"  for="new" >New value</label>
                <input id="new" class="inp" type="text" name="new" placeholder="Enter new value">
                <div class="error"></div>
                
            </div>
            <div class="inp-grp">
                <label class="label" for="proof">Upload proof</label>
                <input id="proof" class="inp" type="file" name="proof" >
                <div class="error"></div>
            </div>
             
            <div class="btn">
                <button  type="submit" name="submit">Update</button>
            </div>
        </form>
    </fieldset>
    
    
</body>
</html>

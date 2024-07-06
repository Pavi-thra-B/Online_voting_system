<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Send Email</title>
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
      
        </style>
                

</head>
    <body>


    <div class="head">
        <nav>
            <h1> Online Voting System</h1>
            
            <ul >
                <li ><a href="home.html">Home</a></li>
                <li>|</li>
                <li><a href="logout.html">Logout</a></li>
            </ul>    
        </nav>
        
         
    </div>
    
    <fieldset class="field">
        <b>
            <legend> <h2 text-align: center>Forget Password? </h2></legend>
         <center><legend> <h3>You can reset your password here..</h3></legend></center>  
               
            
        </b>

        <form class="form" action="send1.php" method="post">
            <div>
                <label class="label">Email:</label>
                <input class="inp" type="email" name="email" value="" placeholder="Enter your email id">
            </div>
        <!--  Email <input type="email" name="email" value=""><br>
          Subject <input type="text" name="subject" value=""><br>
          Message <input type="text" name="message" value=""><br>
       
        <center><button type="submit" name="send" >Send<br></center>-->
        <center><input type="submit" name="send" ></center>

          </form>

    </fieldset>


          

    </body>
</html>
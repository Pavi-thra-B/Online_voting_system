<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']== 'POST')
{
  $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $voterid=$_POST['voterid'];
   $Aadharnumber= $_POST['Aadharnumber'];
  $DOB= $_POST['DOB'];
  $Age=$_POST['Age'];
  $gender=$_POST['gender'];
   $phno= $_POST['phno'];
  $email= $_POST['email'];
  $dno=$_POST['dno'];
  $street=$_POST['street'];
   $city= $_POST['city'];
  $pincode= $_POST['pincode'];
  $nationality=$_POST['nationality'];
   $photo=$_POST['photo'];
  
  

  $query="insert into voter_register(Firstname,Lastname,Voterid_number,Aadhar_number,DOB,Age,Gender,Phone_number,Email,Door_number,Street,City,Pincode,Nationality,Photo,Status) 
 values('$firstname','$lastname','$voterid','$Aadharnumber','$DOB','$Age','$gender','$phno','$email','$dno','$street','$city','$pincode','$nationality','$photo',0)";
  mysqli_query($conn,$query);

  header("Location:voter_pwcreation.php");
 
}
  $home="voterhomepage";
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Registration</title>
 
    <link rel="stylesheet" href="./registration.css" />
    <style>
      * {
  margin: 0;
  padding: 0;
  font-family: "Roboto", "sams-serif";
}
body
{
  background-image: url("background3.jpeg");
}
#form 
{
  height:1500px;
  width: 600px;
  margin: 10vh auto 0 auto;
  background-color: rgb(6, 224, 240);
  border-radius: 30px;
  padding: 60px;
}
#home
{
  margin-top:40px;
}
#login
{
  margin-top:20px;
  margin-bottom:40px;
}
#topic {
      text-align:center;
      height:45px;
      width:1300px;
      background-color: rgb(6, 224, 240);
      padding:10px;
      border-color:black;
      border-radius:10px;
      margin-left:10px;
      border-style:double;
    
}
#form h2
{
  text-align: center;
  color: rgb(9, 94, 105);
}

#form button {
  background-color: blue;
  color: black;
  border: 1px solid;
  padding: 7px;
  margin: 10px 0px;
  cursor: pointer;
  border-radius: 20px;
  font-size: 20px;
  width: 50%;
  margin-left: 150px;
  margin-top: 26px;
}
.inputgroup {
  margin-bottom: 5px;
  width: 100%;
}

.inputgroup label {
  margin-left: 5%;
  margin-top: 35%;
  color: black;
}
.inputgroup.error {
  color: rgb(238, 25, 25);
}
.inputgroup.error #pw {
  color: rgb(238, 25, 25);
  margin-left: 15%;
}
.inputgroup input {
  outline: 0;
  display: flex;
  font-size: 13px;
  width: 50%;
  padding: 5px;
  margin-left: 15%;
  margin-top: 2%;
  margin-bottom: 2%;
  
}
.inputgroup input:focus {
  outline: 0;
}

.inputgroup.success input {
    
  border:2px solid rgb(11, 197, 11)
}
.inputgroup.error input {
  
  border:2px solid red;
}

#form .genderoption {
  display: flex;
  column-gap: 50px;
  margin-top: 15px;
  margin-bottom: 15px;
  margin-left: 8%;
}

#form .genderchoose {
  margin-left: 5%;
}

#form h4 {
  text-align: right;
  margin-right: 5%;
}

#address {
  margin-left: 5%;
}

.required::after {
  content: " *";
  color: red;
}

@media screen and (min-width: 780px){
  body
  {
    margin: 1em 2em;
  }
}

    </style>
    <script defer src="./registration.js"></script>
    
  </head>
  <body>
    
    <h2 id="topic">Welcome to Online Voting</h2>
    <div class="container">
      <form  method="POST" id="form" >
        <h2 >Create Your Account..</h2>
        
        <h4 id="home">
          Go to
          <a  href="voterhome.php?username=<?php echo urlencode($home)?>"
            
            target="-blank"
            >Home</a
          >
        </h4>
        <h4 id="login">
          Already have an account?
          <a
            href="voterlogin.php"
            target="-blank"
            >Login</a
          >
        </h4>

        <div class="inputgroup">
          <label class="required" for="firstname">Firstname</label>
          <input
            type="text"
            id="firstname"
            name="firstname"
            placeholder="Enter your firstname"
          />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <label class="required" for="Lastname">Lastname </label>
          <input
            type="text"
            id="lastname"
            name="lastname"
            placeholder="Enter your lastname"
          />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <label class="required" for="Voter ID number">Voter ID number </label>
          <input
            type="int"
            id="voterid"
            name="voterid"
            placeholder="Enter your voter ID number"
          />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <label class="required" for="aadhar">Aadhar number</label>
          <input
            type="int"
            id="Aadharnumber"
            name="Aadharnumber"
            placeholder="Enter your Aadhar number"
          />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <label class="required" for="DOB">DOB</label>
          <input
            type="date"
            id="dob"
            name="DOB"
            onmouseleave="getyr()" 
            placeholder="Enter your Date of birth"
          />
        </div>
        <div class="inputgroup">
          <label class="required" for="age">Age</label>
          <input type="int" id="age" name="Age" placeholder="Enter your age" value="NaN"/>
          <div class="error" id="pw"></div>
        </div>

        <div class="genderchoose">
          <label class="required" for="gender">Gender</label>
          <div class="genderoption" id="gender">
            <div class="gender">
              <input type="radio" id="male" name="gender" value="M"/>
              <label for="gender">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="female" name="gender" value="F"/>
              <label for="gender">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="others" name="gender" value="O"/>
              <label for="gender">Others</label>
            </div>
          </div>
        </div>
        <div class="inputgroup">
          <label class="required" for="phno">Phone number</label>
          <input
            type="int"
            id="phno"
            name="phno"
            placeholder="Enter your phone number"
          />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <label class="required" for="email">Email ID</label>
          <input
            type="text"
            id="email"
            name="email"
            placeholder="Enter your Email address"
          />
          <div class="error" id="pw"></div>
        </div>

        <label class="required" for="text" id="Address"> Address</label>
        <div class="inputgroup">
          <input type="text" id="dno" name="dno" placeholder="Enter door no." />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <input
            type="text"
            id="street"
            name="street"
            placeholder="Enter Street name"
          />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <input
            type="text"
            id="city"
            name="city"
            placeholder="Enter city name"
          />
          <div class="error" id="pw"></div>
        </div>
        <div class="inputgroup">
          <input
            type="int"
            id="pincode"
            name="pincode"
            placeholder="Enter pincode"
          />
          <div class="error" id="pw"></div>
        </div>

        <div class="inputgroup">
          <label class="required" for="nationality">Nationality</label>
          <input
            type="text"
            id="nationality"
            name="nationality"
            placeholder="Enter your Nationality"
          />
          <div class="error" id="pw"></div>
        </div>

        <div class="inputgroup">
          <label class="required" for="photo">Photo</label>
          <input
            type="file"
            id="photo"
            name="photo"
            
          />
          <div class="error" id="pw"></div>
        </div>
    

        <button type="submit">Register</button>
      </form>
    </div>
  </body>

  <script>
    const form = document.getElementById("form");
const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const voterid = document.getElementById("voterid");
const aadharnumber = document.getElementById("Aadharnumber");


const phno = document.getElementById("phno");
const email = document.getElementById("email");
const nationality = document.getElementById("nationality");
const gender = document.getElementById("gender");
const dno = document.getElementById("dno");
const street = document.getElementById("street");
const city = document.getElementById("city");
const pincode = document.getElementById("pincode");
const photo = document.getElementById("photo");


function getyr()
{
var inputdate=document.getElementById("dob").value;
var dateobj=new Date(inputdate);
var yr=dateobj.getFullYear();
if(yr!="")
{
  setage(yr);
}
//console.log(yr);
}
function setage(yr)
{
var a=document.getElementById("age")
var curr=new Date().getFullYear();
var AGE=curr-yr;
a.value=AGE;


}

form.addEventListener("submit", (e) => {
if (!validateInputs()) {
  e.preventDefault();
}
});

function validateInputs() {
let suc = true;
const newfns = firstname.value.trim();
const newlns = lastname.value.trim();

const voterids = voterid.value.trim();
const emails = email.value.trim();

const aadharnumbers = aadharnumber.value.trim();
const ages = age.value.trim();

//const dobs=dob.value.trim();
const phnos = phno.value.trim();
const dnos = dno.value.trim();
const streets = street.value.trim();
const citys = city.value.trim();
const pincodes = pincode.value.trim();

const nationalitys = nationality.value.trim();




if (newfns === "") {
  suc = false;
  seterror(firstname, "Firstname is required");
} else {
  setsuccess(firstname);
}
if (newlns === "") {
  suc = false;
  seterror(lastname, "Lastname is required");
} else {
  setsuccess(lastname);
}

if (voterids === "") {
  suc = false;
  seterror(voterid, "Voterid number is required");
} else if (voterids.length < 10 || voterids.length > 10) {
  suc = false;
  seterror(voterid, "Voter ID number must be 10 characters");
} else {
  setsuccess(voterid);
}

if (emails === "") {
  suc = false;
  seterror(email, "Email is required");
} else if (!valideemail(emails)) {
  suc = false;
  seterror(email, "Please enter a valid email");
} else {
  setsuccess(email);
}

if (aadharnumbers === "") {
  suc = false;
  seterror(aadharnumber, "Aadhar number is required");
} else if (aadharnumbers.length < 12 || voterids.length > 12) {
  suc = false;
  seterror(aadharnumber, "Aadhar number must be 12 numbers");
} else {
  setsuccess(aadharnumber);
}
if (phnos === "") {
  suc = false;
  seterror(phno, "Phone number is required");
} else if (phnos.length < 10 || phnos.length > 10) {
  suc = false;
  seterror(phno, "Phone number should be 10 numbers");
} else {
  setsuccess(phno);
}
if (dnos === "") {
  suc = false;
  seterror(dno, "Door no is required");
} else {
  setsuccess(dno);
}
if (streets === "") {
  suc = false;
  seterror(street, "Street name is required");
} else {
  setsuccess(street);
}
if (citys === "") {
  suc = false;
  seterror(city, "City name is required");
} else {
  setsuccess(city);
}
if (pincodes === "") {
  suc = false;
  seterror(pincode, "Pincode is required");
} else if (pincodes.length != 6) {
  suc = false;
  seterror(pincode, "Provide valid pincode");
} else {
  setsuccess(pincode);
}

/*
  if(dobs === '')
  {
      suc=false;
      seterror(dob,'DOB is required');
  }
  else
  {
      setsuccess(dob);
  }
  */
  if (ages === "NaN") {
    suc = false;
    seterror(age, "Age is required");
  } else if (ages < 18) {
    suc = false;
    seterror(age, "Age should be above 18");
  } else {
    
    setsuccess(age);
  }
if (nationalitys === "") {
  suc = false;
  seterror(nationality, "Please provide your nationality");
} else if (
  nationalitys.toLowerCase() != "indian" &&
  nationalitys.toLowerCase() != "india"
) {
  suc = false;
  seterror(nationality, "You are not eligible to vote");
} else {
  setsuccess(nationality);
}
var filepath=photo.value;
var allowedex=/(\.jpg|\.jpeg|\.png|\.gif)$/i;
if(filepath==="")
{
  suc=false;
  seterror(photo,"Photo should be required");
}
else if(!allowedex.exec(filepath))
{
  suc=false;
  seterror(photo,"Provide valid file type");
}
else{
  
  setsuccess(photo);
}


return suc;
}
function seterror(element, msg) {
const Inputgroup = element.parentElement;
const errorelement = Inputgroup.querySelector(".error");
errorelement.innerText = msg;
Inputgroup.classList.add("error");
Inputgroup.classList.remove("success");
}
function setsuccess(element) {
const Inputgroup = element.parentElement;
const errorelement = Inputgroup.querySelector(".error");
errorelement.innerText = "";
Inputgroup.classList.add("success");
Inputgroup.classList.remove("error");
}
const valideemail = (email) => {
const re =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(String(email).toLowerCase());
};

  </script>
</html>


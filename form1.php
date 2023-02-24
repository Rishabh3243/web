<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url("download.jpg");
            background-size:cover;
        }
        table{
            margin-left: 40%;
        }
        h1{
            margin-top:10%;
            margin-left: 40%;
        }
        td{
            padding:5px;
            border-radius:5%;
            /*border:3px solid;*/
        }
        .error{
            color:red;
            border: 0px solid;
        }
    </style>
</head>
<body>
<?php
    $A="";
    $B="";
if(isset($_POST["submit"]))
{
    if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
        $A='Email is invalid';
    }
    if (!preg_match("/^[0-9]{10}]*$/",$_POST["mob"]))
    {
        $B='Mobile Number is INVALID';
    }
}
?>
    <div>
    <h1> Registeration Form </h1>
    <table>
        <FORM action="<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <tr>
            <td><label for="fname">First name:</label></td>
            <td><input type="text" id="fname1" name="fname" required></td>
            <td><span class="error">*</span></td>
        </tr>
        <tr>
            <td><label for="lname">Last name:</label></td>
            <td><input type="text" id="lname1" name="lname" required></td>
            <td><span class="error">*</span></td>
        </tr>
        <tr>
            <td><label for="lname">Email:</label></td>
            <td><input type="text" id="email1" name="email" required></td>
            <td><span class="error">*<?php print($A) ?></span></td>
        </tr>
        <tr>
            <td><label for="lname">Moblie No:</label></td>
            <td><input type="text" id="mob1" name="mob" required></td>
            <td><span class="error">*<?php print($B) ?></span></td>
        </tr>
        <tr>
            <td><label for="Address">Address:</label></td>
            <td><input type="text" id="Address1" name="Address" required></td>
        </tr>
        <tr>
            <td><label for="region1">State:</label></td>
            <td><select name="region">
                <option value="Gujarat">Gujarat</option>
                <option value="Goa">Goa</option>
                <option value="Rajasthan">Rajasthan</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="date">Birth Day:</label></td>
            <td><input type="date" id="date1" name="date"></td>
        </tr>
        <tr>
            <td><label for="radio">Gender:</label></td>
            <td> Male <input type="radio" id="radio1" name="radio">
                Female <input type="radio" id="radio1" name="radio">
            </td>
        </tr>
        <tr>
            <td>
                <label for="age"> AGE:</label></td>
                <td>
                    18
                <input type="range" id="age1" name="age" min="18" max="100">100
            </td>
        </tr>
        <tr>
            <td>
            <label for="age"> VEHICAL:</label>
            </td>
            <td>
            <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
<label for="vehicle3"> I have a boat</label><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Submit"></td>
                <td>
                <input type="submit" formaction="/action_page2.php" value="Submit as Admin">
            </td>
        </tr>
        </FORM>
    </table>
    </div>
</body>
<?php
if (isset($_POST['submit']))
{
                $a=$_POST["fname"];
                $b=$_POST["lname"];
                $c=$_POST["age"];
                $e=$_POST["date"];
                $g=$_POST["region"];
                $q=$_POST['vehicle'];

                echo "<center>My name is <b>$a $b </b>and My age is <b>$c</b> <br></center>";
                echo "<center>My Date of birth is <b>$e</b> and i live in <b>$g </b>region </center>"; 
                echo"<center>I have following vehical<br></center>";
                foreach($q as $p)
                {
                    echo ("<center>$p <br></center>");
                }
}
?>
</html>
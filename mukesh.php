<?php
if(isset($_POST["submit"]))
{
    if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
        if (preg_match('/^[1-9][0-9]{10}$/',$_POST["mob"]))
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
        else
        {
            $A="Mobile Number is INVALID";
        }
    }
    else
    {
        $A="Email is invalid";
    }
}
?>
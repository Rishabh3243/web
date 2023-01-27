<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <h1> Fibonacci </h1><br>
        <label for="num">Enter the Number of thimes you want Fibonacci :</label>
        <input type="number" id="num1" name="num" required>
        <input type="submit" name="S1" value="Submit">
    </form>
    <br>
</body>
</html>
<?php
if(isset($_POST["S1"]))
{
$c=$_POST["num"];
$a=0;
$b=1;
if ($c==0 or $c>0)
    {echo "1. $a <br>";}
if ($c==1 or $c>1)
    {echo "2. $b <br>";}
if ($c>1)
{
    for ($f=3;$f<=$c;$f++)
    {
        $tem=$a+$b;
        echo "$f. $tem <br>";
        $a=$b;
        $b=$tem;
    }
}
}
?>



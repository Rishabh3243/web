<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<style>
    form{
        align-items: center;
    }
</style>
<body>
    <center>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <table>
        <tr><td colspan="2"><h1> Calculator </h1></td></tr>
        <tr><td colspan="2"><label for="num">Enter the numbers :</label></td></tr>
        <tr>
        <td><label for="start">Number 1 :</label></td>
        <td><input type="number" id="num1" name="num" required></td>
        </tr>
        <tr>
        <td><label for="end">Number 2 :</label></td>
        <td><input type="number" id="num2" name="num2" required></td>
        </tr>
        <td><label for="radio">Operation :</label></td>
        <tr>
        <td colspan="2"><input type="submit" name="S1" value="+">
        <input type="submit" name="S2" value="-">
        <input type="submit" name="S3" value="*">
        <input type="submit" name="S4" value="/">
        </td>
        </tr>
    </table>
    </form>
    </center>
    <br>
</body>
</html>
<?php
ini_set('display_errors','off');
$a=$_POST["num"];
$b=$_POST["num2"];
if(isset($_POST["S1"]))
{
    $c=$a+$b;
    echo ("<center>$c</center>");
}
if(isset($_POST["S2"]))
{
    $c=$a-$b;
    echo ("<center>$c</center>");
}
if(isset($_POST["S3"]))
{
    $c=$a*$b;
    echo ("<center>$c</center>");
}
if(isset($_POST["S4"]))
{
    $c=$a/$b;
    echo ("<center>$c</center>");
}
?>



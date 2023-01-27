<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amstrong</title>
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
        <tr><td colspan="2"><h1> Amstrong </h1></td></tr>
        <tr>
        <td><label for="start">Enter The Number :</label></td>
        <td><input type="number" id="num1" name="num" required></td>
        </tr>
        <tr>
        <tr>
        <td colspan="2"><input type="submit" name="S1" value="Submit"></td>
        </tr>
    </table>
    </form>
    </center>
    <br>
</body>
</html>
<?php
if(isset($_POST["S1"]))
{
$a=$_POST["num"];
$b=$a;
$t=0;
while ($a > 0)
{
    $t++;
    $a=$a/10;
    echo "$t";
}
echo "$t";
}
?>



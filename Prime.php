<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
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
        <tr><td colspan="2"><h1> Prime Number in a range </h1></td></tr>
        <tr><td colspan="2"><label for="num">Enter the Range :</label></td></tr>
        <tr>
        <td><label for="start">Start :</label></td>
        <td><input type="number" id="num1" name="num" required></td>
        </tr>
        <tr>
        <td><label for="end">End :</label></td>
        <td><input type="number" id="num2" name="num2" required></td>
        </tr>
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
$b=$_POST["num2"];
for ($f=$a;$f<=$b;$f++)
{
    $temp=0;
    for ($k=1;$k<$f;$k++)
    {
        if ($f%$k==0)
        {
            $temp++;
        }
    }
    if ($temp<=1)
    {
        echo "$f <br>";
    }
        
}
}
?>



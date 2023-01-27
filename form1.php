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
            border:3px solid;
        }
    </style>
</head>
<body>
    <div>
    <h1> Registeration Form </h1>
    <table>
        <FORM action="mukesh.php" method="post">
        <tr>
            <td><label for="fname">First name:</label></td>
            <td><input type="text" id="fname1" name="fname" required></td>
        </tr>
        <tr>
            <td><label for="lname">Last name:</label></td>
            <td><input type="text" id="lname1" name="lname" required></td>
        </tr>
        <tr>
            <td><label for="lname">Email:</label></td>
            <td><input type="email" id="email1" name="email" required></td>
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
                <input type="submit" value="Submit"></td>
                <td>
                <input type="submit" formaction="/action_page2.php" value="Submit as Admin">
            </td>
        </tr>
        </FORM>
    </table>
    </div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>

<h2>Student Registration form</h2>
<form action="send_to.php" method="post">
    <label for="firstname">Firstname</label>
    <input type="text" id="firstname" name="fname">
    <br>

    <label for="lastname">Lastname</label>
    <input type="text" id="lastname" name="lname">
    <br>

    <label for="D.O.B">Date of Birth</label>
    <input type="date" id="D.O.B" name="dob">
    <br>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email">
    <br>

    <input type="submit" value="Register">

</form>

</body>
</html>

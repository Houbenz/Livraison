<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="http://localhost:8000/api/drivers" method="POST">

        <Label>Firstname</Label><br/>
        <input type="text" name="firstname" id="firstname"><br/>

        <Label>Lastname</Label><br/>
        <input type="text" name="lastname" id="lastname"><br/>

        <Label>Email</Label><br/>
        <input type="email" name="email" id="email"><br/>
<!--
        <Label>Type</Label><br/>
        <input type="text" name="type" id="type"><br/>
-->

        <Label>Wilaya</Label><br/>
        <input type="text" name="wilaya" id="wilaya"><br/>

        <Label>password</Label><br/>
        <input type="password" name="password" id="password"><br/>

        <Label>confirm password</Label><br/>
        <input type="password" name="password_confirmation" id="password"><br/><br/>

        <input type="submit" value="Submit form">

    </form>

</body>
</html>

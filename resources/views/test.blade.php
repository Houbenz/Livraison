<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="http://localhost:8000/api/createClient" method="POST">

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
        <Label>password</Label><br/>
        <input type="password" name="password" id="password"><br/><br/>

        <input type="submit" value="Submit fomr">

    </form>

</body>
</html>

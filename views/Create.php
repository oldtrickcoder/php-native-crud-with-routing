<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //  var_dump($_SERVER);
    ?>
    <form action="/createUser"  
    method="POST"
    style="display:flex;flex-direction:column;row-gap:1rem;padding:1rem;"
    >
     <label for="username" method="POST">Username</label>   
    <input type="text" name="username" ></input>
     <label for="email">email</label>   
    <input type="email" name="email" ></input>
     <label for="password">password</label>   
    <input type="password" name="password" ></input>
    <button type="submit" value="Daftar" name="daftar" >submit</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sample Apps</h1>
    <a href="/create"><button>Create</button></a>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi deserunt, sed corrupti nam tenetur et dolores nihil recusandae adipisci eligendi.</p>
    <?php 
    
    include dirname(__DIR__).'/utils/db.php';
    $Query="CREATE TABLE IF NOT EXISTS USER(id INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,username VARCHAR(255),email VARCHAR(255),password VARCHAR(255),created_at TIMESTAMP)";
    $result=$db_conn->query($Query);

    $ReadQuery="SELECT * FROM USER";
    $Data=$db_conn->query($ReadQuery);
    // $DataToshow=mysqli_fetch_array($Data);
    while($DataToshow=mysqli_fetch_array($Data)){
        echo "<h1>".$DataToshow["username"]."</h1>";
        echo "<h4>".$DataToshow["email"]."</h4>";
    }

    $db_conn->close();

    ?>


</body>
</html>
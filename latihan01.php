<?php
    $usr = "";
    $ps ="";
    if (isset($_GET["$txUSER"])){
        $urs = $_GET["txUSER"];
        $ps = $_GET["txPASSKY"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <from method="GET" action="latihan01.php"></from>
        
        <div>
            User name
            <input type="text" name="txUser">
        </div>

        <div>
            Pasword
            <input type="password" name="txPASSKY">
        </div>
        
        <div>
            <button>login</button>
        </div>
    </from>
    <div>
        Isi dari from : <div>
            1. User Name : <?=$usr?><br>
            2. PAssword : <?$ps?>
    
</body>
</html>
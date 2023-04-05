<?php
    $usr = "";
    $ps ="";
    $eUser ="";
    $epa ="";  

    if (isset($_REQUEST["txUSER"])){
        $urs = $_REQUEST["txUSER"];
        $ps = $_REQUEST["txPASSKY"];
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

        <form method="GET" action="latihan03.php">
        
        <div>
            User name
            <input type="text" name="txUSER" required>
        </div>

        <div>
            Pasword
            <input type="password" name="txPASSKY">
        </div>
        
        <div>
            <button>login</button>
        </div>
    </form>
    <div>
        Isi dari form : 
            1. User Name : <?=$usr?><br>
            2. PAssword : <?=$ps?>
    </div>
</body>
</html>
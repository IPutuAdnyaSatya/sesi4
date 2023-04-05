<?php
    $usr = "";
    $ps ="";
    $eUser ="";
    $epa ="";  

    if (isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $ps = $_POST["txPASSKY"];

        if ($usr==""){
            $eUser = "<div style='color:red;font-size: 10px;'>Field User Masih Kosong</div>";
        }
        if($ps==""){
            $epa = "<div style='color:red;font-size: 10px;'>Field Password Masih Kosong</div>";
        }
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

        <form method="POST" action="latihan02.php">
            <div>
                User name
                <input type="text" name="txUSER">
                <?=$eUser;?>
            </div>

            <div>
                Pasword
                <input type="password" name="txPASSKY">
                <?=$epa;?>
            </div>
            
            <div>
                <button>login</button>
            </div>
        </form>
    <div>
        Isi dari from : <br>
            1. User Name : <?=$usr?><br>
            2. PAssword : <?=$ps?>
    </div>
</body>
</html>
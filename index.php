<?php
function getRandomPassword($length){
    $charachters ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
    $password="";

    for ($i=0; $i < $length ; $i++) { 
     $index = rand(0, strlen($charachters) -1);
     $password .=$charachters[$index];
    }
    return $password ;
}
if(isset($_GET['pwLength'])) {
    $length = $_GET['pwLength'];
    $newPassword = getRandomPassword($length);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Password generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php" method="GET">
                    <label for="passwordLength" class="form-label">Lunghezza Password</label>
                    <input type="number" class="form-control" id="pwLength" name="pwLength"
                        placeholder="Inserisci lunghezza" min="8" max="20">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mt-4">Invia</button>
            </div>
            <h3><?php echo 'La tua password è:' . $newPassword ?> </h3>
            </form>
        </div>
    </div>
    </div>

</body>

</html>
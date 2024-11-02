<?php
    include "conexion.php";
    $cn = Db();
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $sql = "INSERT INTO users(username) VALUES('$username')";
        $cn->exec($sql);
        ?>
        <div class="alert alert-success m-4">
            <strong>Guardado!</strong> <?= $username ?> ha sido registrado correctamente;
        </div>
        <?php
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 20px;">
            <div class="col-12">
                <a href="index.php" class="btn btn-success">REGRESAR</a>
            </div>
            <div class="col-4 mt-4">
                <div class="card">
                    <div class="card-header">
                       CREAR USUARIO
                    </div>
                    <div class="card-body">
                       <form action="create.php" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">USUARIO</label>
                                    <input type="text" class="form-control" name="username" id="">
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary w-100" type="submit">GUARDAR</button>
                                </div>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    include "conexion.php";
    $cn = Db();
    $id = $_GET['id'];
    $username_db = "";
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = $cn->query($sql);
        foreach($result as $row){
            $username_db = $row['username'];
        }
    }
    if(isset($_POST['username'])){
        $username_db = $_POST['username'];
        $sql = "UPDATE users SET username = '$username_db' WHERE id = $id";
        $cn->exec($sql);
        ?>
        <div class="alert alert-warning m-4">
            <strong>Actualizado!</strong> <?= $username_db ?> ha sido actualizado correctamente;
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
                       EDITAR USUARIO
                    </div>
                    <div class="card-body">
                       <form action="update.php?id=<?= $id ?>" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">USUARIO</label>
                                    <input type="text" class="form-control" name="username" value="<?= $username_db ?>" id="">
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-warning w-100" type="submit">ACTUALIZAR</button>
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
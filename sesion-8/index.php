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
                <a href="create.php" class="btn btn-success">CREAR</a>
            </div>
            <div class="col-12 mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-dark">
                            <th scope="col" class="text-white">ID</th>
                            <th scope="col" class="text-white">USUARIO</th>
                            <th scope="col" class="text-white text-center">ACCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            /**
                             * CRUD PHP
                             * C: CREATE => INSERT
                             * R: READ => SELECT
                             * U: UPDATE => UPDATE
                             * D: DELETE => DELETE
                             */
                            include "conexion.php";
                            $cn = Db();
                            $sql = "SELECT * FROM users";
                            $result = $cn->query($sql);
                            foreach($result as $row){
                            ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-primary">EDITAR</a>
                                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">ELIMINAR</a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                        ?>
                        
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
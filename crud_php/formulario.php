<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <?php
    $con = mysqli_connect("localhost", "root","","crud") or die ("error");

    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Y MYSQL</title>
    </head>
<body>
    <form method="POST" action="formulario.php">
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Escriba su nombre"><br />
        <label>Contraseña</label>
        <input type="password" name="passw" placeholder="Escriba su contraseña"> <br />
        <label>Email</label>
        <input type="email" name="email" placeholder="Escriba su mail"> <br />
        <input type="submit" name="insert" value="insertar datos">
    </form>
    <?php
        if(isset($_POST['insert'])){
            $usuario = $_POST['nombre'];
            $pass = $_POST['passw'];
            $email = $_POST['email'];
            $insertar = "INSERT INTO users (usuario, password, email) VALUES('$usuario', '$pass', '$email' )";

            $ejecutar = mysqli_query($con, $insertar);

            if($ejecutar){
                echo("<h3>Insertado correctamente</h3>");
            }
        }
    ?>
    <br/>
            <table width="500" border="2" style="background-color:#F9F9F9; ">
                <tr>
                <th>ID</th>
                <th>USUARIO</th>
                <th>PASSWORD</th>
                <th>EMAIL</th>
                <th>Editar</th>
                <th>Borrar</th>
                </tr>
            </table>
            

</body>
</html>
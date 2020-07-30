<?php 
    // $_POST = [];


    if(isset($_POST['nombre'])){
        $conexion = mysqli_connect('localhost', 'root', '@lun3wSys', 'primer_proyecto');
        $sql = 
        'select nombre, password from users where nombre = 
        "'.$_POST['nombre'].'" and password = "'.md5($_POST['pass']).'"';

        $result = mysqli_query($conexion, $sql);

        $row = mysqli_num_rows($result);

        if($row > 0){
            session_start();
            $_SESSION['user'] = $_POST['nombre'];
            header('Location: http://192.168.122.215/primer_proyecto/');
        }else{
            $_POST = [];
            session_start();
            session_unset();
            session_destroy();
            echo 'Nombre de usuario o password incorrectos';
        }
    }else{
        echo 'Escriba el nombre!';
    }
?>

<form action="#" method="POST">  
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"><br>

    <label for="nombre">Contraseña</label>
    <input type="text" name="pass">

    <button type="submit">Login</button>
</form>
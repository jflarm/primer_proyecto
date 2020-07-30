<?php
    //  3 lineas muestran errores de PHP en el browser
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    $data_title = $_POST['titulo_post'];
    $data_image = $_POST['imagen_post'];
    $data_description = $_POST['description_post'];

    $conexion = mysqli_connect('localhost', 'root', '@lun3wSys', 'primer_proyecto');

    $letra = [ 'A', 'B', 'C', 'D'];
    $id_post = rand(0,20).$letra[rand(0,3)];

    $sql = '
        INSERT INTO posts (id_usuario, id_post, titulo, fecha, comentarios, descripcion, image_preview) 
        VALUES (2, "'.$id_post.'", "'.$data_title.'", "'.date('Y-m-d H:i:s').'", 2, "'.$data_description.'", "'.$data_image.'")
        '; 
        
    $query = mysqli_query($conexion, $sql);
    mysqli_close($conexion);
    sleep(4);
    echo json_encode([
        'success'=>'ok',
        'message'=> 'Su post ha sido guardado.'
    ]);


?>

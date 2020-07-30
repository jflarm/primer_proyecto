
<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    $connection = mysqli_connect('localhost', 'root', '@lun3wSys', 'primer_proyecto');
    $sql = 'SELECT * FROM posts';
    $query = mysqli_query($connection, $sql);
    $query_result = mysqli_fetch_assoc($query);

    sleep(3);
    echo json_encode($query_result);





    // $data = mysqli_fetch_assoc($query_result);
    // echo count($data);
    // =================================
    // while($data = mysqli_fetch_assoc($query_result)){
    //     // var_dump($data);
    //     echo $data['titulo'];
    //     echo '<hr>';
    // }
    // echo 'POST: ';
    // var_dump($_POST);
    // echo '<br>GET: ';
    // var_dump($_GET);


    // =========================================
    // foreach ($data as $value) {
    //     echo $value;
    // }
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';

    // echo $data['titulo'];

?>
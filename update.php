<?php 

    require_once('helper.php');
    parse_str(file_get_contents('php://input'), $value );
    
    $Nama   = $value['Nama'];
    $id   = $value['id'];
    
    $query  = "UPDATE data_mhs SET Nama='$Nama' WHERE id='$id' ";
    $sql    = mysqli_query($db_connect, $query);
    
    if ($sql) {
        echo json_encode ( array('message' => 'updated!') );
    }else {    
        echo json_encode ( array('message' => 'error') );
}

?>
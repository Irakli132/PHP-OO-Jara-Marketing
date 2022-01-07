<?php
if(isset($_POST["name"]) && isset($_POST["surnname"]) && isset($_POST["middlename"]) && isset($_POST["address"])){
    $result = array(
        'name' => $_POST["name"],
        'surnname' => $_POST['surnname'],
        'middlename' => $_POST['middlename'],
        'address' => $_POST['address']
    );
    echo json_encode($result);
};

?>

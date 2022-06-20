<?php
require 'connexionBDD.php';
define('UPLOAD_DIR', 'uploads/');  

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'ajoutPost':
            $img = $_POST['imgBase64'];  
            $img = str_replace('data:image/png;base64,', '', $img);  
            $img = str_replace(' ', '+', $img);  
            $data = base64_decode($img);  
            $file = UPLOAD_DIR . uniqid() . '.png';  
            $success = file_put_contents($file, $data);  
            $sql = "INSERT INTO post (idOwner, description, image) VALUES (?,?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([1, 'bla bla bla', $file]);

            foreach ($conn->query('SELECT MAX(idPost) as idPost FROM `post`') as $value) {
                echo $value['idPost'];
            }
            break;
        case 'ajoutDescription':
            $description = $_POST['description'];  
            $sql = "UPDATE `post` SET `description`= ? WHERE idPost=?;";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$description,$_GET['id']]);
            break;
        default:
            # code...
            break;
    }
}

?>
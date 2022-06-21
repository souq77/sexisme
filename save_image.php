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
            $id = 1;
            foreach ($conn->query('SELECT MAX(idPost) as idPost FROM `post`') as $value) {
                $id = $value['idPost'];
            }
            echo $id;
            break;
        case 'ajoutDescription':
            $description = $_POST['description'];  
            $hashtag =$_POST['hashtag'];
            $sql = "UPDATE `post` SET `description`= ?, `hashtag`= ? WHERE idPost=?;";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$description,$hashtag,$_GET['id']]);
            var_dump($_POST);
            break;
        default:
            # code...
            break;
    }
}

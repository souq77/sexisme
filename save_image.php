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
            $sql = "INSERT INTO post (idOwner, description, hashtag, image) VALUES (?,?,?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([1, 'bla bla bla','_' ,$file]);
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
            if ($_POST['sondage']==1) {
                $sql = "INSERT INTO `sondage`(`idPost`, `rep1`, `rep2`, `rep3`, `rep4`) VALUES (?,?,?,?,?)";
                $stmt= $conn->prepare($sql);
                $stmt->execute([$_GET['id'],0,0,0,0]);
            }
            break;
        case 'getImage':
            $idImage = $_GET['idImage'];
            $sql = "SELECT * FROM `post` WHERE idPost=" . $idImage;
            foreach($conn->query($sql) as $value) {
                echo $value["image"];
            }
        default:
            # code...
            break;
    }
}

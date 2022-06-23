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
        case 'ajoutCommentaire':
            $idPost = $_GET['idPost'];
            $idConteu = $_POST['contenu'];
            $sql = "INSERT INTO `commentaire` (`idPost`, `idOwner`, `contenu`, `date`) VALUES ($idPost,1,'$idConteu',now());";
           echo $sql;
            $conn->query($sql);
            break; 
        case 'ajoutPostSuivi':
            $idPost = $_GET['idPost'];
            $sql = "INSERT INTO `postsuivi`( `IdPost`) VALUES ($idPost)";
            echo $sql;
            $conn->query($sql);
            break;
        case 'ajoutSondage':
            $idPost = $_GET['idPost'];
            $sql = "SELECT * FROM `sondage` WHERE idPost = ".$idPost.";";
            $rep1=0;
            $rep2=0;
            $rep3=0;
            $rep4=0;
            $rep5=0;
            $rep6=0;
            foreach ($conn->query($sql) as $value) {
                $rep1 = $value['rep1'];
                $rep2 = $value['rep2'];
                $rep3 = $value['rep3'];
                $rep4 = $value['rep4'];
                $rep5 = $value['rep5'];
                $rep6 = $value['rep6'];
                
            }
            switch ($_GET['choice']) {
                case 1:
                    $rep1++;
                    break;
                case 2:
                    $rep2++;

                    break;
                case 3:
                    $rep3++;
                    
                    break;
                case 4:
                    $rep4++;

                    break;
                case 5:
                    $rep5++;

                    break;
                case 6:
                    $rep6++;

                    break;
                
            }
            $sql = "UPDATE `sondage` SET`rep1`='$rep1',`rep2`='$rep2',`rep3`='$rep3',`rep4`='$rep4',`rep5`='$rep5',`rep6`='$rep6' WHERE  `idPost`='$idPost'";
            $conn->query($sql);
            echo $rep1.'-'.$rep2.'-'.$rep3.'-'.$rep4.'-'.$rep5.'-'.$rep6;
            break;   
        case 'getImage':
            $idImage = $_GET['idImage']; 
            $sql = "SELECT * FROM `post` WHERE idPost=" . $idImage;
            foreach($conn->query($sql) as $value) {
                echo $value["image"];
            }
            break;
        default:
            # code...
            break;
    }
}

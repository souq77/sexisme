<?php
require 'connexionBDD.php';
/*
var_dump($conn);
$resultat = $conn->query('SELECT * from user');
foreach($resultat as $row) {
   
}*/
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="lib/html2canvas.min.js"></script>
        <script src="lib/screenshot.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                    <!-- Btn to trigger action -->
                    <a href="#" class="btn btn-block btn-primary mb-3" id="btnDownload" onclick="btnClick()">Download</a>

            <!-- Content to capture -->
            <div id="capture" class="text-center bg-info align-middle">
                <textarea maxlength="110">Click to edit...</textarea>
            </div>
            </div>
        </div>
    </div>

</html>
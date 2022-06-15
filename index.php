<?php
require 'connexionBDD.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href=
"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src=
"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
    </script>
    <style>
        .top {
            margin-top: 20px;
        }
        
        h1 {
            color: green;
        }
        
        input {
            background-color: transparent;
            border: 0px solid;
            width: 300;
        }
        
        body {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="col-md-offset-4 col-md-4 col--md-offset-4 top">
        
       
        <div id="createImg" style="border:1px solid;">
            <h1>convert image</h1>
            <h4>save an HTML5 Canvas as an
                        image on a server</h4>
            <input type="text" value=""
    placeholder="Enter wahtaever you want " class="form-control" />
            <br/>
        </div>
        
        
        
        <button id="imgclicks" type="button"
                                    class="btn btn-primary top">
            Create Image</button>
        
    </div>
    <script>
        $(function() {
            $("#imgclicks").click(function() {
                html2canvas($("#createImg"), {
                    onrendered: function(canvas) {
                        $("#img").show();
                        var dataURL = canvas.toDataURL();
                        $.ajax({
                            type: "POST",
                            url: "save_image.php",
                            data: {
                                imgBase64: dataURL
                            }
                        }).done(function(o) {
                            console.log('saved');
                            <?php
                                $sql = "INSERT INTO post (idOwner, description, image) VALUES (?,?,?)";
                                $stmt= $conn->prepare($sql);
                                $stmt->execute([1, 'bla bla bla', 'test.png']);
                            ?>
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>

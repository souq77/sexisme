/*$("#imgclicks").click(function() {
    html2canvas($("#post"), {
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
                //insertion bdd<?php
                  //  $sql = "INSERT INTO post (idOwner, description, image) VALUES (?,?,?)";
                  //  $stmt= $conn->prepare($sql);
                   // $stmt->execute([1, 'bla bla bla', 'test.png']);
               // ?>
            });
        }
    });
});*/

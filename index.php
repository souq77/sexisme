<?php
require 'connexionBDD.php';
?>
<html>
<script type="text/javascript" src="fonction.js"></script>

<?php
    include 'head.php';
    include 'header.php';
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'feed':
                include 'bodyFeed.php';
                break;
            case 'post':
                include 'bodyPost.php';
                break;
            case 'postDescription':
                include 'bodyPostDescription.php';
                break;   
        }
    }else{

        include 'bodyFeed.php';
    }
    include 'footer.php';

?>



</html>

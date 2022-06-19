<?php
require 'connexionBDD.php';
?>
<html>
    
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
            default:
                include 'bodyFeed.php';
                break;
        }
    }
    include 'footer.php';

?>



</html>

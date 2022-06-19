<a href="?page=post"><button>Creer un post</button></a>

<?php
foreach ($conn->query('SELECT * FROM post') as $value) {
    
echo '<label>'.$value['description'].'</label>';
echo '<img src="'.$value["image"].'" />';

}
?>
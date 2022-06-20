<a href="?page=post"><button>Creer un post</button></a>

<?php
foreach ($conn->query('SELECT * FROM `post` ORDER BY `post`.`idPost` DESC ') as $value) {
echo '<div>';
echo '<label>'.$value['description'].'</label>';
echo '<img src="'.$value["image"].'" />';
echo '</div>';
}
?>
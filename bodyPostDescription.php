<textarea id="descriptionTxt" >description...</textarea>
<?php
echo '
<button onclick="ajoutDescription(\'descriptionTxt\','.$_GET['id'].')">Valider</button>
'
?>

<script>
    function ajoutDescription(textArea,id){
    txt = document.getElementById(textArea).innerHTML;
    $.ajax({
        type: "POST",
        url: "save_image.php?action=ajoutDescription&id="+id,
        data: {
            description: txt
        },
        success : function(resultat, statut)
        { 
            window.location.href = "index.php";
        },
    });
}
</script>
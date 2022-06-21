<body>
    <div class="post_principal">
    <!-- Header. -->
        <div class="post_menu">
            <img id="fermerPost" src="images/icones/croix.png" />
            <p id="creerPost">Créer un poste</p>
            <button id="publierPost" class="bouton" onclick="closeBulle('popup_titre'), closeBulle('popup_agresseur'), closeBulle('popup_victime')">Publier</button>
        </div>

        <div id="description">
            <div id="div_descriptionImg">
                <img src="uploads/62b09eb680535.png" />
            </div>
            <div id="div_descriptionTxt">
                <textarea id="descriptionTxt" placeholder="&#10;Tapez @ pour ajouter des hashtag" onkeyup="effacerFauxPlaceholder()"></textarea>
                <p id="fauxPlaceholder">Détaillez votre histoire...</p>
            </div>
        </div>

        <?php echo '<button onclick="ajoutDescription(\'descriptionTxt\','.$_GET['id'].')" class="bouton" style="margin-left: 4vw">Valider</button>' ?>
    </div>
</body>










<script>
    function ajoutDescription(textArea,id){
    txt = document.getElementById(textArea).value;
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

// Fonction faux placeholder
function effacerFauxPlaceholder (keyValue) {
    const fauxPlaceholder = document.getElementById("fauxPlaceholder");
    const vraiPlaceholder = document.getElementById("descriptionTxt");

    if (vraiPlaceholder.value != "") {
        fauxPlaceholder.style.display = "none";
    } /*else if ((vraiPlaceholder.value.split("")).length == 1 && keyValue.keyCode == "8") {
        fauxPlaceholder.style.display = "none";
    }*/ else {
        fauxPlaceholder.style.display = "block";
    }
}

</script>
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

        <jsuites-tags value="Canada,US,UK" id="tagsContent"></jsuites-tags>

        <?php echo '<button onclick="ajoutDescription(\'descriptionTxt\','.$_GET['id'].')" class="bouton" style="margin-left: 4vw">Valider</button>' ?>
    </div>

    <input type="text"/>
    <input id="rep1" type="checkbox"/>
    <input id="rep2" type="checkbox"/>
    <input id="rep3" type="checkbox"/>
    <input id="rep4" type="checkbox"/>
    
    
 
    <script>
        /**
         * $('#tagsContent[value]').val(function() {
    console.log($(this).attr("value"));
});
         */
        
    </script>
    
</body>








<script>
    function ajoutDescription(textArea,id){
    txt = document.getElementById(textArea).value;
    var hashtag;
    $('#tagsContent[value]').val(function() {
        hashtag=$(this).attr("value");
    });
    let rep1 = $("#rep1").checked;
    let rep2 = $("#rep2").checked;
    let rep3 = $("#rep3").checked;
    let rep4 = $("#rep4").checked;
    
    $.ajax({
        type: "POST",
        url: "save_image.php?action=ajoutDescription&id="+id,
        data: {
            description: txt,
            hashtag : hashtag,
            rep1 : rep1,
            rep2 : rep2,
            rep3 : rep3,
            rep4 : rep4
        },
        success : function(resultat, statut)
        { 
            console.log(resultat);
           // window.location.href = "index.php";
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
<body>
    <div class="post_principal">
    <!-- Header. -->
        <div class="post_menu">
            <img id="fermerPost" src="images/icones/croix.png" />
            <p id="creerPost">Dites nous en plus</p>
            <?php echo '<button id="publierPost" onclick="ajoutDescription(\'descriptionTxt\','.$_GET['id'].')" class="bouton" style="margin-left: 4vw">Publier</button>' ?>

            <img id="tache_rouge" src="images/icones/tache-rouge.png" />
            <img id="tache_bleue" src="images/icones/tache-bleue.png" />
        </div>
        <div id="description">
            <div id="div_descriptionImg">
                <img id="imagePost" src="uploads/62b09eb680535.png" />
            </div>
            <div id="div_descriptionTxt">
                <textarea id="descriptionTxt" placeholder="&#10;Veillez à bien rester anonyme" onkeyup="effacerFauxPlaceholder()"></textarea>
                <p id="fauxPlaceholder">Détaillez votre histoire...</p>
            </div>
        </div>
        
        <div id="post_hashtags">
            <p>Ajoutez vos hashtags</p>
            <jsuites-tags value="sexisme" id="tagsContent"></jsuites-tags>
        </div>

        <div id="display_sondage">
            <div>
                <p>Ajouter un sondage</p>
            </div>
            <div>
                <div id="display_sondage_bouton_fond" onclick="buttonSwitch()">
                    <div id="display_sondage_bouton_switch"></div>
                </div>
            </div>
        </div>

        <div id="sondage_preview">
            <div id="sondage_preview_question">
                <p>Que ferais-tu si tu étais à ma place ?</p>
            </div>
            <div id="sondage_preview_reponses">
                <div class="sondage_preview_reponse">
                    <div class="sondage_preview_reponse_key">
                        <p>A</p>
                    </div>
                    <div class="sondage_preview_reponse_value">
                        <p>Texte</p>
                    </div>
                </div>
                <div class="sondage_preview_reponse">
                    <div class="sondage_preview_reponse_key">
                        <p>B</p>
                    </div>
                    <div class="sondage_preview_reponse_value">
                        <p>Texte</p>
                    </div>
                </div>
                <div class="sondage_preview_reponse">
                    <div class="sondage_preview_reponse_key">
                        <p>C</p>
                    </div>
                    <div class="sondage_preview_reponse_value">
                        <p>Texte</p>
                    </div>
                </div>
                <div class="sondage_preview_reponse">
                    <div class="sondage_preview_reponse_key">
                        <p>D</p>
                    </div>
                    <div class="sondage_preview_reponse_value">
                        <p>Texte</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--<input type="text"/>
    <input id="rep1" type="checkbox"/>
    <input id="rep2" type="checkbox"/>
    <input id="rep3" type="checkbox"/>
    <input id="rep4" type="checkbox"/>-->
</body>

<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id');

    $.ajax({
        type: "POST",
        url: "save_image.php?action=getImage&idImage="+id,
        success : function(resultat, statut)
        {
            document.getElementById("imagePost").src = resultat;
        },
    });
    function ajoutDescription(textArea,id){
    txt = document.getElementById(textArea).value;
    var hashtag;
    $('#tagsContent[value]').val(function() {
        hashtag=$(this).attr("value");
    });
    let sondage = document.getElementById('display_sondage_bouton_fond').style.backgroundColor == "rgb(32, 41, 69)" ? 0 : 1;
    
    console.log(sondage);
    $.ajax({
        type: "POST",
        url: "save_image.php?action=ajoutDescription&id="+id,
        data: {
            description: txt,
            hashtag : hashtag,
            sondage : sondage
           
        },
        success : function(resultat, statut)
        { 
            //console.log(resultat);
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
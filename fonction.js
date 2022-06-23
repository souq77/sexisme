function reveal(type) {
    switch (type) {
        case 'Scenario':
            displayTool("post_sous_outils_scenario", "post_outils_phrase_1");
            break;
        case 'Personnage':
            displayTool("post_sous_outils_personnages", "post_outils_phrase_2");
            break;
        case 'Bulle':
            displayTool("post_sous_outils_bulles", "post_outils_phrase_3");
            break;
    }
}

function fermeOutils() {
    let tools = document.getElementsByClassName("tools");

    for (let i = 0; i < tools.length; i++) {
        const element = tools[i];
        //element.style.display = "none";        
        element.style.bottom = "0vh";       
        element.style.transition = "1s";       
    }
}

function fermePhrases() {
    let phrases = document.getElementsByClassName("post_outils_phrases");

    for (let i = 0; i < phrases.length; i++) {
        const element = phrases[i];
        //element.style.display = "none";        
        element.style.opacity = "0";       
        element.style.transition = "1s";    
    }
}

function displayTool(idDiv, idTxt) {
    let postImg = document.getElementById("post_img");
    let tool = document.getElementById(idDiv);
    let phrase = document.getElementById(idTxt);
    /*if (tool.style.bottom != "0vh") {
        fermeOutils();
        postImg.style.height = "78vh";
    } else {*/
        fermeOutils();
        fermePhrases();
        tool.style.bottom = "16vh";
        tool.style.transition = "1s";
        phrase.style.opacity = "1";
        phrase.style.transition = "1s";
        //postImg.style.height = "62vh";
    //}
}

function scenario(type) {
    let img = document.getElementById("img_couche_1");
    switch (type) {
        case "soiree":
            img.style.backgroundImage = "url('images/scenarios/soiree.png')"; 
        break;
        case "rue":
            img.style.backgroundImage = "url('images/scenarios/rue.png')";       
        break;
        case "taff":  
            img.style.backgroundImage = "url('images/scenarios/travail.png')";      
        break;
        case "residence":  
            img.style.backgroundImage = "url('images/scenarios/maison.png')";      
        break;
        case "activite": 
            img.style.backgroundImage = "url('images/scenarios/activite.png')";       
        break;
        case "ami":
            img.style.backgroundImage = "url('images/scenarios/ami.png')";        
        break;
        case "autre":
            img.style.backgroundImage = "url('images/scenarios/autre.png')";        
        break;
    }
}

function personnages(type) {
    let img = document.getElementById("img_couche_2");
    switch (type) {
        case "1":
            img.style.backgroundImage = "url('images/personnages/sifflement-personnages.png')"; 
        break;
        case "2":
            img.style.backgroundImage = "url('images/personnages/regard-personnages.png')";       
        break;
        case "3":  
            img.style.backgroundImage = "url('images/personnages/menace-personnages.png')";      
        break;
        case "4":  
            img.style.backgroundImage = "url('images/personnages/agression-personnages.png')";      
        break;
        case "5": 
            img.style.backgroundImage = "url('images/personnages/exhibition-personnages.png')";       
        break;
        case "6":
            img.style.backgroundImage = "url('images/personnages/viol-personnages.png')";        
        break;
        case "7":
            img.style.backgroundImage = "url('images/personnages/pornographie-personnages.png')";        
        break;
        case "8":
            img.style.backgroundImage = "url('images/personnages/remarque-personnages.png')";        
        break;
    }
}

function submitBulle(nom, dialogue){
    let dialogues = document.getElementById(dialogue).value;
    let img;
    let newP;
    switch (nom) {
        case "img_couche_3_titre":
            img = document.getElementById('img_couche_3_titre');
            newP = document.getElementById("p_couche_3_titre");
            img.style.backgroundImage = "url('images/bulles/bulleViergeTitre.png')";
            newP.innerText = dialogues;
            closeBulle("popup_titre");
        break;
        case "img_couche_3_agresseur":
            img = document.getElementById('img_couche_3_bulle_gauche');
            newP = document.getElementById("p_couche_3_gauche");
            img.style.backgroundImage = "url('images/bulles/bulleViergeGauche.png')";
            newP.innerText = dialogues;
            closeBulle("popup_agresseur");
        break;
        case "img_couche_3_victime":  
            img = document.getElementById('img_couche_3_bulle_droite');
            newP = document.getElementById("p_couche_3_droite");
            img.style.backgroundImage = "url('images/bulles/bulleViergeDroite.png')";
            newP.innerText = dialogues;
            closeBulle("popup_victime");
        break;

}
}

function bulles(nom) {
    let bulle = document.getElementById(nom);
    let fondGris = document.getElementsByClassName("fond_gris");
    //bulle.style.display = "block";
    bulle.style.opacity = "1";
    bulle.style.transition = "1s";
    bulle.style.zIndex = "2";
    fondGris[0].style.display = "block";
}

function closeBulle(nom){
    let bulle = document.getElementById(nom);
    let fondGris = document.getElementsByClassName("fond_gris");
    //bulle.style.display = "block";
    bulle.style.opacity = "0";
    bulle.style.transition = "1s";
    bulle.style.zIndex = "-1";
    fondGris[0].style.display = "none";
}

function selectOutil(nom) {
    let leftTool = document.getElementById("outil_gauche");
    let middleTool = document.getElementById("outil_milieu");
    let rightTool = document.getElementById("outil_droit");

    switch (nom) {
        case "outil_gauche":
            /*if (leftTool.style.opacity == "1") {
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            } else {*/
                leftTool.style.opacity = "1";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            //}
        break;
        case "outil_milieu":
            /*if (middleTool.style.opacity == "1") {
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            } else {*/
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = "1";
                rightTool.style.opacity = ".5";            
            //}
        break;
        case "outil_droit":  
        /*if (rightTool.style.opacity == "1") {
            leftTool.style.opacity = ".5";
            middleTool.style.opacity = "1";
            rightTool.style.opacity = ".5";            
        } else {*/
            leftTool.style.opacity = ".5";
            middleTool.style.opacity = ".5";
            rightTool.style.opacity = "1";            
        //}
        break;
    }
    
    /*leftTool.style.opacity = ".5";
    middleTool.style.opacity = ".5";
    rightTool.style.opacity = ".5";

    switch (nom) {
        case "outil_gauche":
            leftTool.style.opacity = "1";
        break;
        case "outil_milieu":
            middleTool.style.opacity = "1"; 
        break;
        case "outil_droit":  
        rightTool.style.opacity = "1"; 
        break;
    }*/
}

function buttonSwitch() {
    const boutonFond = document.getElementById("display_sondage_bouton_fond");
    const boutonSwitch = document.getElementById("display_sondage_bouton_switch");
    const sondagePreview = document.getElementById("sondage_preview");


    if (boutonFond.style.justifyContent == "end") {
        boutonFond.style.justifyContent = "start";
        boutonFond.style.background = "#202945";
        sondagePreview.style.marginTop = "-3vh";
        sondagePreview.style.opacity = "0";
        sondagePreview.style.transition = "1s";
    } else {
        boutonFond.style.justifyContent = "end";
        boutonFond.style.background = "#ff833e";
        sondagePreview.style.marginTop = "0vh";
        sondagePreview.style.opacity = "1";
        sondagePreview.style.transition = "1s";
    }
}
/*
document.getElementById("commentValue").addEventListener("keydown", event => {
    alert(event.keyCode);
    if (event.keyCode == 13) {
      postCommentaire();
    }
});*/

function postCommentaire() {
   
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const idPost = urlParams.get('idPost');
    const txt = document.getElementById("commentValue").value;

    if (txt != "") {
        $.ajax({
            type: "POST",
            url: "save_image.php?action=ajoutCommentaire&idPost="+idPost,
            data: {
                contenu: txt           
            },
            success : function(resultat, statut)
            { 
                location.reload();
            },
        });    
    }
}

function ajoutPostSuivi(idPost){
    $.ajax({
        type: "POST",
        url: "save_image.php?action=ajoutPostSuivi&idPost="+idPost,
        success : function(resultat, statut)
        { 
            console.log(resultat);
        },
    });
}

function feedSondagePopupClose(idPopup) {
    const closure = document.getElementById(idPopup);
    document.getElementById("Sondage"+idPopup).style.opacity=1;

    closure.style.opacity = "0";
    closure.style.transition = "1s";
    const feedSondagePopupClose = document.getElementsByClassName("feed_sondage_popup_close");
  
    for (let i = 0; i < feedSondagePopupClose.length; i++) {
        const element = feedSondagePopupClose[i];
        
        /*element.style.pointerEvents = "none";*/
    }
}

function feedSondagePopupOpen(idPopup) {
    const closure = document.getElementById(idPopup);
    document.getElementById("Sondage"+idPopup).style.opacity=0;
    closure.style.opacity = "1";
    closure.style.transition = "1s";

    for (let i = 0; i < feedSondagePopupClose.length; i++) {
        const element = feedSondagePopupClose[i];
        
        /*element.style.pointerEvents = "auto";*/
    }
}
function percentage(partialValue, totalValue) {
    return (100 * partialValue) / totalValue;
 } 

function choiceSelectSurvey(idPost,choice){
    $.ajax({
        type: "POST",
        url: "save_image.php?action=ajoutSondage&idPost="+idPost+"&choice="+choice,
        success : function(resultat, statut)
        { 
            let reponses = resultat.split('-');
            let total = 0;
            for (let i = 0; i < reponses.length; i++) {
                const element = reponses[i];
                total+=parseInt(element);
                
            }
            
            document.getElementById('repA'+idPost).innerHTML=  "Porter plainte "+parseInt(percentage(parseInt(reponses[0]),total))+"%";
            document.getElementById('progress_1'+idPost).value = parseInt(percentage(parseInt(reponses[0]),total));
            document.getElementById('repB'+idPost).innerHTML= "Dénoncer "+ parseInt(percentage(parseInt(reponses[1]),total))+"%";
            document.getElementById('progress_2'+idPost).value = parseInt(percentage(parseInt(reponses[1]),total));
            document.getElementById('repC'+idPost).innerHTML=  "En parler à un professionnel "+parseInt(percentage(parseInt(reponses[2]),total))+"%";
            document.getElementById('progress_3'+idPost).value = parseInt(percentage(parseInt(reponses[2]),total));
            document.getElementById('repD'+idPost).innerHTML=  "En parler à la personne "+parseInt(percentage(parseInt(reponses[3]),total))+"%";
            document.getElementById('progress_4'+idPost).value = parseInt(percentage(parseInt(reponses[3]),total));
            document.getElementById('repE'+idPost).innerHTML=  "En parler à ses proches "+parseInt(percentage(parseInt(reponses[4]),total))+"%";
            document.getElementById('progress_5'+idPost).value = parseInt(percentage(parseInt(reponses[4]),total));
            document.getElementById('repF'+idPost).innerHTML=  "Ne pas tenir compte "+parseInt(percentage(parseInt(reponses[5]),total))+"%";
            document.getElementById('progress_6'+idPost).value = parseInt(percentage(parseInt(reponses[5]),total));
        },
    });
}

function progressChangeValue (valeur,idProgress) {
    let valeurAttr = document.getElementById(idProgress).getAttribute(value);
    
}

function colorButtons(thisButton) {
    thisButton.style.background = "linear-gradient(100.37deg, #ff833e 3.2%, rgba(255, 186, 52, 0.31) 124.72%)";
    thisButton.style.boxShadow = "0px 4px 8px rgba(0, 0, 0, 0.07)";
    thisButton.style.color = "#b74b2d";
    
}

function colorIcone() {
    const imgGrey = document.getElementById("feed_tri_posts_pin");
    const imgColor = document.getElementById("feed_tri_posts_pin_select");

    imgGrey.setAttribute("src", "images/icones/pin_select.png");
}













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

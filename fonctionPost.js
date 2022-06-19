function reveal(type) {
    switch (type) {
        case 'Scenario':
            displayTool("post_sous_outils_scenario");
            break;
        case 'Personnage':
            displayTool("post_sous_outils_personnages");
            break;
        case 'Bulle':
            displayTool("post_sous_outils_bulles");
            break;
    }
}

function fermeOutils () {
    let tools = document.getElementsByClassName("tools");

    for (let i = 0; i < tools.length; i++) {
        const element = tools[i];
        //element.style.display = "none";        
        element.style.bottom = "0vh";        
    }
}

function displayTool(idDiv) {
    let postImg = document.getElementById("post_img");
    let tool = document.getElementById(idDiv);
    if (tool.style.bottom != "0vh") {
        fermeOutils();
        postImg.style.height = "78vh";
    } else {
        fermeOutils();
        tool.style.bottom = "16vh";
        tool.style.transition = "1s";
        postImg.style.height = "62vh";
    }
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
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";      
        break;
        case "residence":  
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";      
        break;
        case "activite": 
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";       
        break;
        case "ami":
            img.style.backgroundImage = "url('images/scenarios/jerry.png')";        
        break;
    }
}

function personnages(type) {
    let img = document.getElementById("img_couche_2");
    switch (type) {
        case "1":
            img.style.backgroundImage = "url('images/personnages/jerry.png')"; 
        break;
        case "2":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";       
        break;
        case "3":  
            img.style.backgroundImage = "url('images/personnages/jerry.png')";      
        break;
        case "4":  
            img.style.backgroundImage = "url('images/personnages/jerry.png')";      
        break;
        case "5": 
            img.style.backgroundImage = "url('images/personnages/jerry.png')";       
        break;
        case "6":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";        
        break;
        case "7":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";        
        break;
        case "8":
            img.style.backgroundImage = "url('images/personnages/jerry.png')";        
        break;
    }
}
function submitBulle(nom, dialogue){
    let dialogues = document.getElementById(dialogue).value;
    let img;
    let newP;
    switch (nom) {
        case "img_couche_3_titre":
            InsertionText('victime', document.getElementById(dialogue));
            closeBulle("popup_titre");
        break;
        case "img_couche_3_agresseur":
            InsertionText('agresseur', document.getElementById(dialogue));
            closeBulle("popup_agresseur");
        break;
        case "img_couche_3_victime":  
            InsertionText('titre', document.getElementById(dialogue));
            closeBulle("popup_victime");
        break;

}
}

function InsertionText(zoneDeText, textArea){
    let txt = textArea.value;
    switch (zoneDeText) {
        case 'victime':
            if(txt == ""){ // si la personne efface tout le texte
                document.getElementById('img_couche_3_bulle_gauche').style.opacity='0'; 
            }else{
                document.getElementById('img_couche_3_bulle_gauche').style.opacity='1'; 
                document.getElementById('p_couche_3_gauche').innerHTML=txt;
                document.getElementById('insertion_text_bulle_victime').value=txt;
            }
            break;
        case 'agresseur':
            if(txt == ""){ // si la personne efface tout le texte
                document.getElementById('img_couche_3_bulle_droite').style.opacity='0';
            }else{
                document.getElementById('img_couche_3_bulle_droite').style.opacity='1'; 
                document.getElementById('p_couche_3_droite').innerHTML=txt;
                document.getElementById('insertion_text_bulle_agresseur').value=txt;
            }
            break;
        case 'titre':
            if(txt == ""){ // si la personne efface tout le texte
                document.getElementById('img_couche_3_titre').style.opacity='0';
            }else{
                document.getElementById('img_couche_3_titre').style.opacity='1'; 
                document.getElementById('p_couche_3_titre').innerHTML=txt;
                document.getElementById('insertion_text_bulle_titre').value=txt;
            }
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
            if (leftTool.style.opacity == "1") {
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            } else {
                leftTool.style.opacity = "1";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            }
        break;
        case "outil_milieu":
            if (middleTool.style.opacity == "1") {
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = ".5";
                rightTool.style.opacity = ".5";            
            } else {
                leftTool.style.opacity = ".5";
                middleTool.style.opacity = "1";
                rightTool.style.opacity = ".5";            
            }
        break;
        case "outil_droit":  
        if (rightTool.style.opacity == "1") {
            leftTool.style.opacity = ".5";
            middleTool.style.opacity = "1";
            rightTool.style.opacity = ".5";            
        } else {
            leftTool.style.opacity = ".5";
            middleTool.style.opacity = ".5";
            rightTool.style.opacity = "1";            
        }
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



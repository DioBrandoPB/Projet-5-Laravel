class Boutons {
    constructor() {
        this.boutonsFonction();
    }

    boutonsFonction() { // fonction qui gère les evenements boutton


        boutonImage.onclick = function() {
            { // quand on démarre le timer, on clear l'interval via arretTimer(), on set les minutes et secondes dans le sessionStorage

                boutonUpload.setAttribute("style", "display : block !important");
                boutonEnvoie.setAttribute("style", "display : block !important");
            };
        }
    }


}
let BoutonsObj = new Boutons();
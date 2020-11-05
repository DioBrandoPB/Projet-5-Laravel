class RequeteProchainement {
    constructor() {
        this.appel();
    }

    appel() {
        var data = null;

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function() {
            if (this.readyState === this.DONE) {

                let resultat = JSON.parse(this.responseText);
                let resultatparser = resultat.results;
                console.log(resultatparser);
                for (let i = 0; i < 9; i++) {
                    const resultatindexer = resultatparser[i];
                    var list = document.getElementsByClassName("images");
                    list[i].src = resultatindexer.background_image;
                    let titresForm = document.getElementsByClassName("jeuxForm");
                    titresForm[i].value = resultatindexer.name;
                    var datedesortie = document.getElementsByClassName("datedesortie");
                    datedesortie[i].innerHTML = resultatindexer.released;
                }
            }
        })
        var aujourdhui = new Date();
        var jj = String(aujourdhui.getDate()).padStart(2, '0');
        var mm = String(aujourdhui.getMonth() + 1).padStart(2, '0');
        var aaaa = aujourdhui.getFullYear();
        aujourdhui = aaaa + '-' + mm + '-' + jj;
        var UnAnPlusTard = new Date();
        var jj = String(UnAnPlusTard.getDate()).padStart(2, '0');
        var mm = String(UnAnPlusTard.getMonth() + 1).padStart(2, '0');
        var aaaa = UnAnPlusTard.getFullYear() + 1;
        UnAnPlusTard = aaaa + '-' + mm + '-' + jj;
        xhr.open("GET", "https://rapidapi.p.rapidapi.com/games?dates=" + aujourdhui + "," + UnAnPlusTard + "&ordering=-added");
        xhr.setRequestHeader("x-rapidapi-host", "rawg-video-games-database.p.rapidapi.com");
        xhr.setRequestHeader("x-rapidapi-key", "7dfa8d3149msh49f46b899759d72p1207f3jsn99ba86e22259");

        xhr.send(data);
    }
}

let RequeteProchainementobj = new RequeteProchainement();
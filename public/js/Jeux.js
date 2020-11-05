class RequeteProchainement {
    constructor() {
        this.recherche();
    }

    appel() {
        var data = null;

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function() {
            if (this.readyState === this.DONE) {

                let resultat = JSON.parse(this.responseText);

                let resultatparser = resultat.results;
                console.log(resultat);

                for (let i = 0; i < 10; i++) {
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


        let url = "https://rapidapi.p.rapidapi.com/games?page_size=10&search=" + localStorage.getItem('jeux') + "&ordering=-added";
        console.log(url);
        xhr.open("GET", url);
        xhr.setRequestHeader("x-rapidapi-host", "rawg-video-games-database.p.rapidapi.com");
        xhr.setRequestHeader("x-rapidapi-key", "7dfa8d3149msh49f46b899759d72p1207f3jsn99ba86e22259");
        xhr.send(data);
    }
    recherche() {
        document.getElementById("soumettre").addEventListener("click", function(e) {
            let jeux = document.getElementById('jeux').value;
            localStorage.setItem('jeux', jeux);
            let img = document.getElementsByClassName('blocImgRecherche');
            document.querySelector(".blocImgRecherche").style.visibility = "initial";
            console.clear();
            RequeteProchainementobj.appel();

        })
    };
}

let RequeteProchainementobj = new RequeteProchainement();
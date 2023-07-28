<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portrait folio</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: Times, Times New Roman, serif;
            background-image: url('1641511042678.jpg');
            background-size : cover;
        }
        section{
            background-image: url('test.jpg');
            background-size : cover;
        }
        h1.barre-verticale {
  position: relative;
  padding-left: 15px; /* Espace pour la barre verticale */
  font-size: 24px; /* Taille de police pour le titre h1 (ajustez selon vos besoins) */
  color: transparent; /* Rendre le texte transparent pour afficher les lettres multicolores */
}

h1.barre-verticale::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%; /* Positionner la barre verticale au milieu du h1 */
  transform: translateY(-50%);
  width: 10px; /* Largeur de la barre verticale */
  height: 3rem; /* Longueur de la barre verticale */
  background-color: green; /* Couleur de la barre verticale */
}

/* Styles pour l'animation du texte */
h1.barre-verticale span.animated-text {
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap; /* Empêche le texte de se retourner à la ligne */
  background-clip: text; /* Remplir le texte avec le dégradé de couleurs */
  color: transparent; /* Rendre le texte transparent pour afficher le dégradé de couleurs */
  animation: defileTexte 5s linear infinite, colorLettres 5s linear infinite; /* Animation du texte et des couleurs des lettres */
}

@keyframes defileTexte {
  0% {
    left: 5%; /* Texte caché à droite */
  }
  100% {
    left: 1%; /* Texte caché à gauche, revenant à la position initiale */
  }
}

@keyframes colorLettres {
  0% {
    color: red; /* Couleur initiale */
  }
  25% {
    color: orange; /* Couleur à 25% de l'animation */
  }
  50% {
    color: yellow; /* Couleur à 50% de l'animation */
  }
  75% {
    color: green; /* Couleur à 75% de l'animation */
  }
  100% {
    color: blue; /* Couleur finale */
  }
}
nav ul {
    list-style-type: none;
    display : flex;
    justify-content: flex-end;
}
nav li{
    margin-right: 10px;
    margin-top: 2px;
}
nav a{
    display : block;
    text-decoration : none;
    padding : 10px;
    color : #f0ffff;
    transition : background-color 0.3s ease;
}
nav a:hover {
  background-color: #ccc;
}
img{
    border-radius : 50%;
    width : 400px;
}
.photo {
    margin-top : 2%;
}
.photo h2{
    margin-left : 9%;
    margin-top : 19%;
}
.photo h1{
    margin-top : -28%;
    justify-content : center;
    text-align : center;
    display : block;
    margin-left : 35%;
}
.texte{
    margin-top : 3%;
}
#parcours{
    margin-top : 30%;
    text-align : center;
}
#parcours p h1{
    margin-left : -10%;
}
.proverbe{
    margin-left : 17%;
    margin-right : 25%;
}
.PARCOURS{
    background-color : #f0f0f0;
    padding : 20px;
    top : 0;
    display : flex;
    justify-content : space-between;
    max-width : 12000px;
    margin-left : 0 auto;
    background-image: url('1643872889306.jpg');
    background-size : cover;
}
.SERVICES{
    background-color : #f0f0f0;
    padding : 20px;
    top : 0;
    display : flex;
    justify-content : space-between;
    max-width : 12000px;
    margin-left : 0 auto;
    background-image: url('1643872889306.jpg');
    background-size : cover;
    margin-top : 150px;
}
.CONTACTS{
    background-color : #f0f0f0;
    padding : 20px;
    top : 0;
    display : flex;
    justify-content : space-between;
    max-width : 12000px;
    margin-left : 0 auto;
    
    background-size : cover;
}
.P-List{
    background-color : #fff;
    margin : 10px;
    padding : 10px;
    flex : 1;
    text-align : center;
    position : relative;
}
.S-List{
    background-color : #fff;
    margin : 10px;
    padding : 10px;
    flex : 1;
    text-align : center;
    position : relative;
}
.C-List{
    background-color : transparent;
    margin : 10px;
    padding : 10px;
    flex : 1;
    text-align : center;
    position : relative;
    width : 15px;
}
.C-List img{
    width : 100px;
}
.CONTACTS{
    display : flex;
    justify-content : space-between;
    margin-top : 150px;
}
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem;
}

.contact{
    background-color : #fff;
    margin : 10px;
    padding : 10px;
    flex : 1;
    text-align : center;
    position : relative;
}
.cache ul li{
    margin-left : 10%;
}
.cache{
    display : none;
    background-color : #f0f0f0;
    padding : 10px;
    position : absolute;
    top : 100%;
    left : 0;
    margin-top : 100px;
    list-style-type : none;
    text-align : center;
    margin-left : 17%;
}
.P-List:hover .cache{
    display : block;
}
.parc{
    margin-top: 15x;
    text-align : center;
    margin-left : 45%;
    margin-right : 45%;
    background-image: url('1643540913061.jpg');
    background-size : cover;
}
.texte{
    margin-top : -10px;
}
.bureau{
    background-color : #f0f0f0;
    padding : 10px;
    position : absolute;
    top : 100%;
    left : 0;
    margin-top : 100px;
    list-style-type : none;
    text-align : center;
    margin-left : 17%;
    display : none;
}
.S-List:hover .bureau{
    display : block;
}
    </style>
</head>
<body>
    <section>
    <header>
        <nav>
            <h1 class="barre-verticale">
                <span class="animated-text"><span>P</span><span>o</span><span>r</span><span>t</span><span>r</span><span>a</span><span>i</span><span>t</span><span>-</span><span>F</span><span>o</span><span>l</span><span>i</span><span>o</span>
            </h1>
            <ul>
                <li><a href="#SERVICES">SERVICE</a></li>
                <li><a href="#PARCOURS">PARCOURS</a></li>
                <li><a href="#CONTACTS">CONTACTS</a></li>
            </ul>
        </nav>
    </header>
    <div class="proverbe">
        <p><marquee>L'INFORMATIQUE EST UN UNIVERS INFINI OÙ CHAQUE LIGNE DE CODE EST UNE ÉTOILE BRILLANTE DANS LE CIEL DE LA CREATIVITÉ</marquee></p>
    </div>
    <div class="photo">
        <img src="FB_IMG_16359503651306833-removebg.png" alt="Ma photo">
        <h1>
            <p>JE SUIS UN ETUDIANT PASSIONNÉ DU DEVELOPPEMENT WEB ET DE L'ADMINISTRATION EN BASE DE DONNÉES </p><br><br>
            <P>DÉTERMINER À INNOVER ET À FAÇONNER</P>
        </h1>
        <h2>SALLA NGOM</h2>
        <br><br>
    </div>
    </section>
    <div class="texte">
        <div class="PARCOURS" id="PARCOURS">
            <div class="P-List">
                <h2><a href="">ECOLES</a></h2>
                <ul class="cache">
                    <li>Ardo Sassi SOW Boulal</li>
                    <li>CEM Gade Aly Lobé NDIAYE Boulal</li>
                    <li>Lycée Seydina Limamou LAYE (LSLL)</li>
                </ul>
            </div>
            <div class="P-List">
                 <h2><a href="">DIPLOMES</a></h2>
                <ul class="cache">
                    <li>CFEE</li>
                    <li>BFEM</li>
                    <li>BAC</li>
                </ul>
            </div>
            <div class="P-List">
                <h2><a href="">UNIVERSITES</a></h2>
                <ul class="cache">
                    <li>Université Alioune DIOP de Bambey (UADB)</li>
                </ul>
            </div>
        </div>
        <div id="SERVICES" class="SERVICES">
            <div class= "S-List">
                <h2><a href="#">BUREAUTIQUES</a></h2>
                <ul class="bureau">
                    <li>WORD</li>
                    <li>EXCEL</li>
                    <li>POWER POINT</li>
                </ul>
            </div>
            <div class= "S-List">
                <h2><a href="#">DEVELOPPEMENT WEB</a></h2>
                <ul class="bureau">
                    <li>WEB DESIGN</li>
                    <li>DEVELOPPEMENT BACK-END</li>
                    <li>DEVELOPPEMENT FRONT-END</li>
                </ul>
            </div>
            <div class= "S-List">
                <h2><a href="#">MAINTENANCES</a></h2>
                <ul class="bureau">
                    <li>INSTALLATION DE SYSTEMES & LOGICIELS</li>
                </ul>
            </div>
        </div>
        <div id="CONTACTS" class="CONTACTS">
            <div class= "C-List">
                <h2><a href=""><img src="2048px-Instagram_icon.png" alt="pho"></a></h2>
            </div>
            <div class= "C-List">
                <h2><a href=""><img src="whatsapp-logo-tansparent-free-png.png" alt="pho"></a></h2>
            </div>
            <div class= "C-List">
                <h2><a href=""><img src="logo-medias-sociaux-bleu_197792-1759.jpg" alt="pho"></a></h2>
            </div>
            <div class= "C-List">
                <h2><a href=""><img src="83615-blue-icons-symbol-telephone-computer-logo.png" alt="pho"></a></h2>
            </div>
        </div>
    </div>
    <FOoter>
        <p>Tous droits réservés &copy; 2023 - DELMONTERO</p>
    </FOoter>
</body>
</html>
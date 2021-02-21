<!--
* 
* Page présentant la personnalité des serials killers
*
*/
-->

<?php include 'header.php'; ?>

    <section class="title-section title-section-perso vh-100">
        <a class="link-back" href="index.php"><img class="go-back" src="/assets/svg/white-arrow-down.svg" alt="Flèche pour revenir sur la page précédente"></img>
        </a>
        <h1 class="title-perso">Personnalité</h1>
        <span class=line-title></span>
        <span class="compteur-page">3.1</span>
        <p class="reminder">Personnalité</p>
        <a class="link-intro" href="#intro"><img class="go-down" src="/assets/svg/white-arrow-down.svg" alt="Flèche pour aller voir le reste de la page"></img>
        </a>

    </section>
    <section id="intro" class="intro-section intro-section-perso vh-100">
        <div class="container-fluid container-intro h-100 d-flex">
            <div class="question-intro question-reponse h-100 col-md-6 d-flex">
                <h3>Comment peut-on caractériser la personnalité d’un serial killer?</h3>
            </div>
            <div class="reponse-intro col-md-6 h-100 d-flex">
                <div class="container-icons-infos d-flex">
                    <img class="img-before red-trouble" src="/assets/svg/red-trouble-perso.svg" alt=""></img>
                    <img class="img-after white-trouble" src="/assets/svg/white-trouble-perso.svg" alt=""></img>
                    <p class="nb-homicide">Trouble de la personnalité antisociale</p>
                </div>
                <div class="container-icons-infos d-flex">
                    <img class="img-before red-baby" src="/assets/svg/red-baby.svg" alt=""></img>
                    <img class="img-after white-baby" src="/assets/svg/white-baby.svg" alt=""></img>
                    <p class="inter-homicide">Carence affective importante durant l'enfance</p>
                </div>
                <div class="container-icons-infos d-flex">
                    <img class="img-before red-money" src="/assets/svg/red-money.svg" alt=""></img>
                    <img class="img-after white-money" src="/assets/svg/white-money.svg" alt=""></img>
                    <p class="">Problématiques socio-économique</p>
                </div>
            </div>
        </div>
    </section>
    <section class="infos-section infos-section-perso">
        <div class="container-fluid container-infos d-flex">
            <h3>La personnalité des tueuses en série</h3>
            <p class="subtitle">Les tueuses en série représentent 12 à 15% des tueurs en série dans leur globalité et l'on constate par ailleurs que le chiffre est en augmentation.</p>
            <div class="row d-flex infos-perso">
                <div class="col-md-4 img-tueuse">
                    <img class="img-before red-profil" src="/assets/svg/red-profil.svg"></img>
                    <img class="img-after white-profil" src="/assets/svg/white-profil.svg"></img>
                </div>
                <div class="col-md-8 text-tueuse">
                    <p class="explication">Les tueuses assassinent au sein de leur entourage proche, leur foyer, leur lieu de travail</p>
                    <p class="explication">Contrairement aux hommes, les femmes n'utilisent presque jamais d'arme à feu. </p>
                    <p class="explication">Les femmes ne ressentent pas le besoin de reconnaissance que peuvent parfois ressentir les tueurs en série</p>
                </div>
            </div>
        </div>
    </section>
    <section class="killer-section killer-section-perso" id="killer-perso">
        <div class="container container-killer h-100 d-flex">
            <div class="col-md-6 portrait">
                <div class="video-portait">
                    <h3>Andreï Tchikatilo</h3>
                    <!--<img src="/assets/img/test-video.jpg"></img>-->
                    <video id="video" loop autoplay preload="auto" controls src="/assets/video/tchikatilo.mp4">Image et vidéo du serial killer Andreï Tchikatilo</video>
                </div>
            </div>
            <div class="col-md-6 bio">
                <p>Bio : Andreï Tchikatilo est un tueur en série ukrainien surnommé, entre autres, « Le monstre de Rostov » ou l'« éventreur de Rostov ». Il est classé parmi les plus grands criminels du siècle pour avoir tué 52 enfants et adolescents entre 1978 et 1990.</p>
            </div>
        </div>
        <div class="container-fluid container-intro container-intro-reponse h-100 d-flex">
            <div class="question-intro col-md-6 d-flex">
                <h3>Quels sont les traits de personnalités de Andreï Tchikatilo?</h3>
            </div>
            <div class="reponse-intro col-md-6 h-100 d-flex">
                <div class="container-icons-infos container-icons-reponse d-flex">
                    <img class="red-square" src="/assets/svg/red-square.svg" alt=""></img>
                    <img class="white-trouble-perso" src="/assets/svg/white-trouble-perso.svg" alt=""></img>
                    <p class="nb-homicide">Il souffrait d'une impuissance chronique en particulier avec les femmes</p>
                </div>
                <div class="container-icons-infos container-icons-reponse d-flex">
                    <img class="red-square" src="/assets/svg/red-square.svg" alt=""></img>
                    <img class="white-baby" src="/assets/svg/white-baby.svg" alt=""></img>
                    <p class="inter-homicide">Sa mère le battait</p>
                </div>
                <div class="container-icons-infos container-icons-reponse d-flex">
                    <img class="red-square" src="/assets/svg/red-square.svg" alt=""></img>
                    <img class="white-money" src="/assets/svg/white-money.svg" alt=""></img>
                    <p class="pulsion-homicide">Andreï n'avait pas de problème socio-économique</p>
                </div>
            </div>
            <div class="link-victimes">
                <div class="container-link-victimes position-relative">
                    <a class="btn-link" href="victimes-tchikatilo.php">Voir ses victimes</a>
                </div>
            </div>
        </div>
    </section>
    <section class="vh-100 more-section more-section-perso">
        <div class="container-fluid container-more h-100 d-flex">
            <div class="title-section">
                <h3>En savoir plus</h3>
            </div>
            <div class="col-md-6 contenu">
                <div class="position-relative illustration-contenu">
                    <img src="/assets/img/citizenx.jpg" alt="Affiche du film Citizen X"></img>
                </div>
                <span class="line-media"></span>
                <!-- <img class="white-square" src="/assets/svg/white-square.svg"></img>-->
                <a target="_blank" href="https://www.youtube.com/watch?v=XYtvCXrVsrM"><span>Site</span></a>
            </div>
            <div class="col-md-6 bio">
                <p>Le citoyen X par Chris Gerolmo
                    <br>
                    <br>Fiction sur le parcours d’Andreï Tchikatilo et le parcours d'un enquêteur soviétique dans sa traque du tueur, jusqu'à l'arrestation du tueur, près de 10 ans plus tard, après être devenu un enquêteur hors pair.</p>
            </div>
        </div>
        <div class="next-page carousel-menu">
            <a class="carousel-control-next" href="http://www.serialkiller.clairedornic.fr/typologie.php#slide-0" role="button" data-slide="next">
                <p>Typologie</p>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <?php include 'footer.php'; ?>
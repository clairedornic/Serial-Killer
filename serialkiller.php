<!--
* 
* Page présentant les serials killers en général
*
*/
-->
<?php include 'header.php'; ?>

    <section class="title-section title-section-sk vh-100">
        <!--sk : serial killer-->
        <a class="link-back" href="index.php"><img class="go-back" src="/assets/svg/white-arrow-down.svg" alt="Flèche pour revenir sur la page précédente"></img>
        </a>
        <h1>Serial Killer</h1>
        <span class=line-title></span>
        <span class="compteur-page">1.1</span>
        <p class="reminder">Serial killer</p>
        <a class="link-intro" href="#intro"><img class="go-down" src="/assets/svg/white-arrow-down.svg" alt="Flèche pour aller voir le reste de la page"></img>
        </a>

    </section>
    <section id="intro" class="intro-section intro-section-sk vh-100">
        <div class="container-fluid container-intro h-100 d-flex">
            <div class="question-intro question-reponse h-100 col-md-6 d-flex">
                <h3>Comment définissons-nous un serial killer?</h3>
            </div>
            <div class="reponse-intro col-md-6 h-100 d-flex">
                <div class="container-icons-infos d-flex">
                    <img class="img-before red-knife" src="/assets/svg/red-knife.svg" alt=""></img>
                    <img class="img-after white-knife" src="/assets/svg/white-knife.svg" alt=""></img>
                    <p class="nb-homicide">Plusieurs homicides
                        <br> (3 minimum)</p>
                </div>
                <div class="container-icons-infos d-flex">
                    <img class="img-before red-clock" src="/assets/svg/red-clock.svg" alt=""></img>
                    <img class="img-after white-clock" src="/assets/svg/white-clock.svg" alt=""></img>
                    <p class="inter-homicide">Intervalles de temps entre chaque homicide</p>
                </div>
                <div class="container-icons-infos d-flex">
                    <img class="img-before red-brain" src="/assets/svg/red-brain.svg" alt=""></img>
                    <img class="img-after white-brain" src="/assets/svg/white-brain.svg" alt=""></img>
                    <p class="pulsion-homicide">Pulsion spécifique</p>
                </div>
            </div>
        </div>
    </section>
    <section class="infos-section infos-section-sk vh-100">
        <div class="container-fluid container-infos h-100 d-flex" data-sal-duration="1200" data-sal="fade-up" data-sal-delay="300">
            <h3>Le tueur en série se différencie du tueur de masse</h3>
            <div class="row h-100 d-flex infos-serial-killer">
                <div class="men-left col-md-6 h-100 d-flex">
                    <div class="col-md-6 infos-left">
                        <ul class="list-left">
                            <li>Plusieurs homicides individuels</li>
                            <li>Lieux et moments différents</li>
                            <li>Il ne souhaite pas être trouvé</li>
                        </ul>
                    </div>
                    <div class="col-md-6 icon-right">
                        <p class="appelation">Tueur en série</p>
                        <img class="red-left-men" src="/assets/svg/red-left-men.svg" alt="Dessin minimaliste rouge d'un homme pour représenter le serial killer"></img>
                        <img class="white-left-men" src="/assets/svg/white-left-men.svg" alt="Dessin minimaliste blanc d'un homme pour représenter le serial killer"></img>
                    </div>
                </div>
                <div class="men-right col-md-6 h-100 d-flex">
                    <div class="col-md-6 icon-left">
                        <p class="appelation">Tueur de masse</p>
                        <img class="red-right-men" src="/assets/svg/red-right-men.svg" alt="Dessin minimaliste rouge d'un homme pour représenter le serial killer"></img>
                        <img class="white-right-men" src="/assets/svg/white-right-men.svg" alt="Dessin minimaliste blanc d'un homme pour représenter le serial killer"></img>
                    </div>
                    <div class="col-md-6 infos-left">
                        <ul class="list-right">
                            <li>Au moins 4 homocides commis</li>
                            <li>Fait au même endroit au même moment</li>
                            <li>Il ne cherche pas à se cacher</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="killer-section killer-section-sk" id="killer-sk">
        <div class="container container-killer h-100 d-flex">
            <div class="col-md-6 portrait">
                <div class="video-portait">
                    <h3>Jeffrey Dahmer</h3>
                    <!--<img src="/assets/img/test-video.jpg"></img>-->
                    <video id="video" loop autoplay preload="auto" controls src="/assets/video/dahmer.mp4">Image et vidéo du serial killer Jeffrey Dahmer</video>
                </div>
            </div>
            <div class="col-md-6 bio">
                <p>Bio : Jeffrey Dahmer, surnommé « le cannibale de Milwaukee » est un tueur en série américain. Meurtri par une enfance difficile, Jeffrey Dahmer a petit à petit cédé à ses pulsions meurtrières, faisant entre 1978 et 1991 17 victimes.</p>
            </div>
        </div>
        <div class="container-fluid container-intro container-intro-reponse h-100 d-flex">
            <div class="question-intro col-md-6 d-flex">
                <h3>Qu'est ce qui fait de lui un serial killer?</h3>
            </div>
            <div class="reponse-intro col-md-6 h-100 d-flex">
                <div class="container-icons-infos container-icons-reponse d-flex">
                    <img class="red-square" src="/assets/svg/red-square.svg" alt=""></img>
                    <img class="white-knife" src="/assets/svg/white-knife.svg" alt=""></img>
                    <p class="nb-homicide">17 homicides</p>
                </div>
                <div class="container-icons-infos container-icons-reponse container-icons-reponse d-flex">
                    <img class="red-square" src="/assets/svg/red-square.svg" alt=""></img>
                    <img class="white-clock" src="/assets/svg/white-clock.svg" alt=""></img>
                    <p class="inter-homicide">Période entre 1978 et 1991 (13 ans)</p>
                </div>
                <div class="container-icons-infos container-icons-reponse d-flex">
                    <img class="red-square" src="/assets/svg/red-square.svg" alt=""></img>
                    <img class="white-brain" src="/assets/svg/white-brain.svg" alt=""></img>
                    <p class="pulsion-homicide">Cannibalisme et nécrophilie</p>
                </div>
            </div>
            <div class="link-victimes">
                <div class="container-link-victimes position-relative">
                    <a class="btn-link" href="victimes-dahmer.php">Voir ses victimes</a>
                </div>
            </div>
        </div>
    </section>
    <section class="vh-100 more-section more-section-sk">
        <div class="container-fluid container-more h-100 d-flex">
            <div class="title-section">
                <h3>En savoir plus</h3>
            </div>
            <div class="col-md-7 col-lg-6 contenu">
                <div class="position-relative illustration-contenu">
                    <iframe width="560" height="315" class="media" src="https://www.youtube.com/embed/iWjYsxaBjBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <span class="line-media"></span>
                <!-- <img class="white-square" src="/assets/svg/white-square.svg"></img>-->
                <a href="https://www.youtube.com/watch?v=iWjYsxaBjBI" target="_blank"><span>Site</span></a>
            </div>
            <div class="col-md-5 bio col-lg-6">
                <p>Inside the Mind of Jeffrey Dahmer par Inside Edition
                    <br>
                    <br> Cette interview permet au spectateur de découvrir en détail la personnalité de Jeffrey Dahmer et ce qui l'a poussé à tuer. Attention cependant certains détails peuvent être choquants.</p>
            </div>
        </div>
        <div class="next-page carousel-menu">
            <a class="carousel-control-next" href="psychologie.php" role="button" data-slide="next">
                <p>Psychologie</p>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>










    <?php include 'footer.php'; ?>
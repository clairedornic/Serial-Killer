<!--
* 
* Page d'accueil ainsi que le menu
*
*/
-->

<?php include 'header.php'; ?>
    <div class="row intro vh-100 title-section">
        <img class="img-intro" src="/assets/svg/intro-profil.svg" alt="illustration d'une tête de profil pour représenter un serial killer"></img>
        <h1>Serial Killer</h1>
        <span class="line-intro"></span>
        <a class="link-intro" href="#ancre-menu"><img class="go-down" src="/assets/svg/white-arrow-down" alt="Flèche pour aller voir le reste de la page">
        </a>
    </div>
    <main class="container-fluid bkg-dark menu" id="ancre-menu">
        <div class="row vh-100">
            <div class="col align-self-center">
                <div id="leCaroussel" class="carousel slide carousel-menu" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a class="position-relative d-block link-page" href="serialkiller.php">
                                <img src="/assets/img/dahmer.jpg" class="d-block img-fluid mx-auto" alt="Jeffrey Dhamer">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Serial Killer</h1>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="position-relative d-block link-page" href="psychologie.php">
                                <img src="/assets/img/lopez.jpg" class="d-block img-fluid mx-auto" alt="Pedro Alonzo López">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Psychologie</h1>
                                </div>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a class="position-relative d-block link-page" href="personnalite.php">
                                <img src="/assets/img/tchikatilo.jpg" class="d-block img-fluid mx-auto" alt="Andreï Tchikatilo">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Personnalité</h1>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="position-relative d-block link-page" href="typologie.php">
                                <img src="/assets/img/bundy.jpg" class="d-block img-fluid mx-auto" alt="Ted Bundy">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Typologie</h1>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="position-relative d-block link-page" href="type.php">
                                <img src="/assets/img/harvey.jpg" class="d-block img-fluid mx-auto" alt="Donald Harvey">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Type</h1>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="position-relative d-block link-page" href="recherches.php">
                                <img src="/assets/img/gacy.jpg" class="d-block img-fluid mx-auto" alt="John Wayne Gacy">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Recherches</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#leCaroussel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#leCaroussel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--<button type="button" class="position-absolute fullscreen" name="fullscreen-button"></button>-->
        <span class="slide-title position-absolute text-white">0.1</span>
        <a class="world position-absolute" href="map.php">
            <img class="img-profiler img-after" src="/assets/svg/white-world.svg" alt="icon conduisant à la carte interactive"></img>
        </a>
    </main>


    <?php include 'footer.php'; ?>
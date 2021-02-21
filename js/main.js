/* eslint-env browser, jquery */
/* eslint-disable no-console */

$(document).ready(() => {

    /*Menu horizontal*/

    let inSlideTransition = false;
    /**
     * traitement du changement de slide : modification du titre et de l'url (sans affecter l'historique)
     * @param  {[int]} slideIndex         index de la slide actuel
     * @param  {[int]} previousSlideIndex index de la slide précédente (inutilisé ici)
     * @return {[void]}                    rien
     */
    function onSlideChanged(slideIndex, previousSlideIndex) {
        //Changement du titre : dans la page et sur le doc (pour l'historique)
        const title = `${slideIndex + 1}.0`;
        $('.slide-title').text(title);
        document.title = `Serial Killer - ${title}`;
        //Changement de l'url dans le navigateur sans provoquer d'ajout dans l'historique ni déclencher d'évènement popstate
        history.replaceState(undefined, undefined, `#slide-${slideIndex + 1}`);
        //Changement du titre de la page (pour l'historique)
    }

    /**
     * Change le mode d'affichage (plein écran ou non)
     * @param  {[bool]} mode mode d'écran (optionnel) true: plein écran, false: écran normal, undefined: switch
     * @return {[void]}      rien
     */
    function switchFullScreen(mode) {
        console.log(`caaaaal me ${mode}`);
        //Si mode n'est pas donné, on utilise document.fullscreenElement comme indicateur de mode plein
        //écran actif ou non. (document.fullscreenElement pointe sur l'objet DOM de la page
        //actuellement en plein écran, undefined sinon)
        if (typeof (mode) === 'undefined') {
            mode = document.fullscreenElement ? false : true;
        } else {
            mode = !!mode; //on force la conversion de mode en boolean
        }

        //Que l'on veuille activer ou désactiver le plein écran, on doit appeller une méthode sur un
        //objet du DOM dont la méthode comme l'objet, dépendent de l'action désiré
        let objetCible; // objet du DOM sur lequel appeler la méthode
        let methodeDisponible; //méthode à utiliser

        if (mode) { //On souhaite activer le plein écran
            //l'objet est document.documentElement, et la méthode est normalement 'requestFullscreen'
            //la méthode s'appelle differement pour de vieux navigateur. On va trouver celle qui existe.
            objetCible = document.documentElement;
            methodeDisponible = ['requestFullscreen', 'mozRequestFullScreen',
        'webkitRequestFullscreen', 'msRequestFullscreen'
      ].find(fct => objetCible[fct]);
        } else { //On souhaite désactiver le plein écran
            //l'objet est document, et la méthode est normalement 'exitFullscreen'
            //la méthode s'appelle differement pour de vieux navigateur. On va trouver celle qui existe.
            objetCible = document;
            methodeDisponible = ['exitFullscreen', 'mozCancelFullScreen', 'webkitExitFullscreen',
        'msExitFullscreen'
      ].find(fct => objetCible[fct]);
        }
        //On appelle la methode si elle existe, sinon on affiche un message d'erreur dans la console
        if (methodeDisponible) {
            objetCible[methodeDisponible]();
        } else {
            console.warn('Support au passage en mode plein écran impossible.');
        }
    }

    /**
     * Initialise le carousel et le titre à partir d'une lecture de l'URL du navigateur et de l'état actuel du carousel
     * @return {[void]} rien
     */
    function initCarousel() {
        //Calcul du nombre de slide max, ainsi que de l'index de la slide active courante
        const slides = $('.carousel-menu > .carousel-inner > .carousel-item');
        const nbSlides = slides.length;
        const currentSlideIndex = slides.index('.active');
        //Calcul de l'index de la slide à afficher à partir du hash de l'url ou 0 par défaut
        const hash = window.location.hash;
        let urlSlideIndex = currentSlideIndex;
        if (hash) {
            //Vérifie si le hash est dans le bon format et récupère l'index
            const slideHashPattern = /^#slide-(\d+)$/;
            const match = hash.match(slideHashPattern);
            if (match) {
                urlSlideIndex = parseInt(match[1], 10) - 1;
                //Vérifie que l'index soit valide
                if (urlSlideIndex < 0 || urlSlideIndex >= nbSlides) {
                    urlSlideIndex = currentSlideIndex;
                }
            }
        }
        // Si l'index désiré est celui de la diap
        if (urlSlideIndex === currentSlideIndex) {
            onSlideChanged(urlSlideIndex)
        } else { // sinon, déplacement sur la slide par appel de méthode au carousel
            $(".carousel-menu").carousel(urlSlideIndex);
        }
    }

    /**
     * Gestion du "scroll" de souris sur le carousel
     * @param  {[WheelEvent]} evt L'évènement du DOM
     * @return {[void]}     rien
     */
    function onCarouselWheel(evt) {
        //Inhibe la gestion de lévènement si une transition est en cours
        if (inSlideTransition) {
            return false;
        }
        // Un déplacement horizontal et prioritaire face à un déplacement vertical
        const delta = evt.originalEvent.deltaX || evt.originalEvent.deltaY;
        // Si delta < 0 : slide précédente
        if (delta < 0) {
            console.log('PREV');
            $(".carousel-menu").carousel('prev');
        } else if (delta > 0) {
            console.log('NEXT');
            $(".carousel-menu").carousel('next');
        } //On annule le bubbling et le traitement de l'évènement par défaut dans tous les cas
        return false;
    }


    // Mise en place de la gestion des transitions de slide :
    // - hook pour éviter d'afficher les scrollbars
    // - appel de l'écouteur de changement de slide
    $(".carousel-menu").on('slide.bs.carousel', (evt) => {
        //Positionnement de la classe .in-transition pour le hook visuel
        $(evt.currentTarget).addClass('in-transition');
        $(".carousel-caption h1").css("opacity", "0");
        //Indicateur interne pour l'inhibation du changement de slide par scroll
        inSlideTransition = true;
    });
    $(".carousel-menu").on('slid.bs.carousel', (evt) => {
        //Suppression de la classe .in-transition pour le hook visuel
        $(evt.currentTarget).removeClass('in-transition');
        $(".carousel-caption h1").css("opacity", "1");
        inSlideTransition = false;
        //Appel de l'écouteur de changement de slide
        onSlideChanged(evt.to, evt.from);
    });

    // Mise en place de l'écoute du scroll de souris sur le carousel
    $(".carousel-menu").on('wheel', (evt) => onCarouselWheel(evt));

    // Mise en place de l'écoute du bouttons de passage au fullscreen
    $('button.fullscreen').click(() => switchFullScreen());

    // Si l'url est changé manuellement dans la bare d'adresse, on ré-initialise le caroussel
    $(window).on('popstate', () => initCarousel());

    // initialisation des slides
    initCarousel();


    //Passage en grand écran
    //    $('#fullscreen').click(function () {
    //        if (screenfull.isEnabled && !screenfull.isFullscreen) {
    //            screenfull.request();
    //        } else if (screenfull.isFullscreen) {
    //            screenfull.exit();
    //        }
    //    })

    //Animation de ligne du titre
    var newHeight = $('.title-section').height() - 95;

    $(".line-title").animate({
        height: newHeight
    }, 1500);

    //Animation bouton svg 
    $(".link-intro").mouseover(function () {
        $(".go-down").attr("src", "/assets/svg/black-arrow-down");
    }).mouseout(function () {
        $(".go-down").attr("src", "/assets/svg/white-arrow-down");
    });

    $(".link-back").mouseover(function () {
        $(".go-back").attr("src", "/assets/svg/black-arrow-down");
    }).mouseout(function () {
        $(".go-back").attr("src", "/assets/svg/white-arrow-down");
    });

    //Animation bouton svg navigation
    $(".fp-controlArrow").mouseover(function () {
        $(this).css("background", "url(/assets/svg/black-arrow-nav) no-repeat");
    }).mouseout(function () {
        $(this).css("background", "url(/assets/svg/white-arrow-nav.svg) no-repeat");
    });


    /* Map */
    var mymap = L.map('mapid').setView([35.170, -41.799], 2);

    L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        mapId: mapid,
        accessToken: 'pk.eyJ1IjoiY2xhaXJlZG9ybmljIiwiYSI6ImNrYjNsMmk2MjBhM3EyeG85eDVvaWVpMnQifQ.PosWiuwwPm49fIoMik3u1g'
    }).addTo(mymap);

    var redIcon = L.icon({
        iconUrl: '/assets/svg/pin.svg',

        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });


    var markerDahmer = L.marker([43, -87.5], {
        icon: redIcon
    }).bindPopup("Jeffrey Dahmer" + '</br>' + '<a class="popUpLink" href="http://www.serialkiller.clairedornic.fr/serialkiller.php#slide-0">Découvrir ce serial killer</a>').addTo(mymap);

    var markerLopez = L.marker([1.324562, -77.353903], {
        icon: redIcon
    }).bindPopup("Pedro Alonso López" + '</br>' + '<a class="popUpLink" href="http://www.serialkiller.clairedornic.fr/psychologie.php#slide-0">Découvrir ce serial killer</a>').addTo(mymap);

    var markerTchika = L.marker([50.908, 34.797], {
        icon: redIcon
    }).bindPopup("Andreï Tchikatilo" + '</br>' + '<a class="popUpLink" href="http://www.serialkiller.clairedornic.fr/personnalite.php#slide-0">Découvrir ce serial killer</a>').addTo(mymap);

    var markerBundy = L.marker([44.4421, -73.0825], {
        icon: redIcon
    }).bindPopup("Ted Bundy" + '</br>' + '<a class="popUpLink" href="http://www.serialkiller.clairedornic.fr/typologie.php#slide-0">Découvrir ce serial killer</a>').addTo(mymap);

    var markerHarvey = L.marker([40.9125, -79.935], {
        icon: redIcon
    }).bindPopup("Donald Harvey" + '</br>' + '<a class="popUpLink" href="http://www.serialkiller.clairedornic.fr/type.php#slide-0">Découvrir ce serial killer</a>').addTo(mymap);

    /* var serialKiller = [
		["Jeffrey Dahmer", 43, -87.5],
		["Pedro Alonso López", 1.324562, -77.353903],
		["Andreï Tchikatilo", 50.908, 34.797],
		["Ted Bundy", 44.4421, -73.0825],
		["Donald Harvey", 40.9125, -79.935]
		];

    for (var i = 0; i < serialKiller.length; i++) {
        marker = new L.marker([serialKiller[i][1], serialKiller[i][2]], {
                icon: redIcon
            })
            .bindPopup(serialKiller[i][0] + '</br>' + '<a class="popUpLink" href="#">Découvrir ce serial killer</a>')
            .addTo(mymap);
        console.log(marker);
    }
    $(".leaflet-marker-icon").click(function () {
        var leafletId = this._leaflet_id;
        console.log(leafletId);
        if (leafletId == 44) {
            $(".leaflet-container a").removeAttr("href");
            var href = $(".leaflet-container a").attr("href", "http://www.serialkiller.clairedornic.fr/serialkiller.php#slide-0");
            console.log(href);
        } else if (leafletId == 46) {
            $(".leaflet-container a").attr("href", "http://www.serialkiller.clairedornic.fr/psychologie.php#slide-0");
        } else if (leafletId == 48) {
            $(".leaflet-container a").attr("href", "http://www.serialkiller.clairedornic.fr/personnalite.php#slide-0");
        } else if (leafletId == 50) {
            $(".leaflet-container a").attr("href", "http://www.serialkiller.clairedornic.fr/typologie.php#slide-0");
        } else {
            $(".leaflet-container a").attr("href", "http://www.serialkiller.clairedornic.fr/type.php#slide-0");
        }
    })*/

});
    function mobileFastSearch() {
        var menu = document.getElementById("mobile-fast-serach");
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");
        } else {
            menu.classList.add("hidden");
        }
    };

    let bool_promo;
    bool_promo = false;
    let bool_statut;
    bool_statut = false;
    let bool_centre;
    bool_centre = false;

    function apparition(bool_apparition, filtre) {
        console.log(bool_apparition);

        switch (bool_apparition) {
            case true:
                switch (filtre) {
                    case 'promotion':
                        liste_promo.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll hidden");
                            bool_promo = !bool_promo;
                        break;
                    case 'statut':
                        liste_statut.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll hidden");
                            bool_statut = !bool_statut;
                        break;
                    case 'centre':
                        liste_centre.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll hidden");
                            bool_centre = !bool_centre;
                        break;
                }
                break;
            case false:
                switch (filtre) {
                    case 'promotion':
                        liste_promo.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll h-24");
                            bool_promo = !bool_promo;
                        break;
                    case 'statut':
                        liste_statut.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll h-18");
                            bool_statut = !bool_statut;
                        break;
                    case 'centre':
                        liste_centre.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll h-24");
                            bool_centre = !bool_centre;
                        break;
                }
                break;
        }
    };

    let bool_promoM;
    bool_promoM = false;
    let bool_statutM;
    bool_statutM = false;
    let bool_centreM;
    bool_centreM = false;

    function apparitionM(bool_apparition, filtre) {
        console.log(bool_apparition);

        switch (bool_apparition) {
            case true:
                switch (filtre) {
                    case 'promotion':
                        liste_promoM.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll hidden");
                            bool_promoM = !bool_promoM;
                        break;
                    case 'statut':
                        liste_statutM.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll hidden");
                            bool_statutM = !bool_statutM;
                        break;
                    case 'centre':
                        liste_centreM.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll hidden");
                            bool_centreM = !bool_centreM;
                        break;
                }
                break;
            case false:
                switch (filtre) {
                    case 'promotion':
                        liste_promoM.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll h-24");
                            bool_promoM = !bool_promoM;
                        break;
                    case 'statut':
                        liste_statutM.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll h-18");
                            bool_statutM = !bool_statutM;
                        break;
                    case 'centre':
                        liste_centreM.setAttribute("class",
                            "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll h-24");
                            bool_centreM = !bool_centreM;
                        break;
                }
                break;
        }
    };
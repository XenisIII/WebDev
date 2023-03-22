{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
    </div>

    <div class="md:hidden flex justify-center mt-4">
        <button onclick="mobileFastSearch()" type="button"
            class="inline-flex items-center justify-center rounded-md bg-gray-300 p-2 text-white-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            aria-controls="mobile-fast-serach" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <p>Trier Par <i class="fa-solid fa-angle-down"></i></p>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div class="hidden lg:hidden" id="mobile-fast-serach">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page" id="mobile-menu-item">Tirer par 1</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                id="mobile-menu-item">Tirer par 2</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                id="mobile-menu-item">Tirer par 3</a>
        </div>
    </div>

    <div class="flex justify-center mt-6">
        <div class="flex flex-col max-[768px]:w-3/4 min-[768px]:w-3/5">
            <form>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Recherche ton avenir..." required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
            <div
                class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf] mt-6 rounded-md">
                <ul class="list-disc ">
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                    <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden md:block mt-[5%] ml-5 w-1/5 h-1/2 border border-[#dfdfdf] rounded-md">
            <div class="text-center">
                <p>Trier par</p>
            </div>
            <p class="mt-4 pl-2"> Promotion </p>
            <div class=" flex w-52  my-1 mb-3 cursor-pointer pl-8">
                <div class=" w-36">
                    <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                        onclick="apparition(bool_promo, 'promotion')">
                        <p id="competence " class="ml-1"> Promotion </p>
                        <p class="bg-gray-100 px-1 font-extralight"><i class="fa-solid fa-chevron-down text-base "></i>
                        </p>
                    </div>
                    <ul class="hidden" id="liste_promo">
                        <li><input type="checkbox">CPI A1</input></li>
                        <li><input type="checkbox">CPI A2</input></li>
                        <li><input type="checkbox">FISE A3</input></li>
                        <li><input type="checkbox">FISE A4</input></li>
                        <li><input type="checkbox">FISE A5</input></li>
                    </ul>
                </div>
            </div>
            <p class="mt-4 pl-2"> Statut </p>
            <div class=" flex w-52  my-1 mb-3 cursor-pointer pl-8">
                <div class=" w-36">
                    <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                        onclick="apparition(bool_statut, 'statut')">
                        <p id="competence " class="ml-1"> Statut </p>
                        <p class="bg-gray-100 px-1 font-extralight"><i class="fa-solid fa-chevron-down text-base "></i>
                        </p>
                    </div>
                    <ul class="hidden" id="liste_statut">
                        <li><input type="checkbox">Validé</input></li>
                        <li><input type="checkbox">En attente</input></li>
                        <li><input type="checkbox">En recherche</input></li>
                    </ul>
                </div>
            </div>
            <p class="mt-4 pl-2"> Centre </p>
            <div class=" flex w-52  my-1 mb-3 cursor-pointer pl-8">
                <div class=" w-36">
                    <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                        onclick="apparition(bool_centre, 'centre')">
                        <p id="competence " class="ml-1"> Centre </p>
                        <p class="bg-gray-100 px-1 font-extralight"><i class="fa-solid fa-chevron-down text-base "></i>
                        </p>
                    </div>
                    <ul class="hidden" id="liste_centre">
                        <li><input type="checkbox">Validé</input></li>
                        <li><input type="checkbox">En attente</input></li>
                        <li><input type="checkbox">En recherche</input></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




</body>

<script>
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
</script>
{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
    </div>
    <!--Bouton raccourci-->
    <div class="flex flex-row flex-wrap justify-center min-[880px]:justify-evenly content-evenly ">
        <!--Bouton Raccourci Étudiant-->
        <div class=" flex flex-col max-[880px]:w-7/12 w-3/12 mt-6">

            <div
                class="flex flex-col justify-center content-center text-center  bg-[#67ade5] border border-[#dfdfdf]  rounded-t-lg ">
                <i class="fa-solid fa-user-graduate text-2xl"></i>
                <p class="">Étudiant</p>
            </div>
            <div
                class="flex justify-between items-center bg-[#fafafa] divide-x divide-[#cccccc] max-[880px]:h-10 h-20 rounded-b-lg border border-[#dfdfdf] shrink">

                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="rechercheEtudiant/index">
                        <p class="text-center ">Gestion Étudiant</p>


                    </a>
                </div>
                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="rechercheEtudiant/index">
                        <p class="text-center ">Statut Recherche</p>
                    </a>
                </div>
            </div>
        </div>
        <!--Bouton Raccourci Offre-->
        <div class="flex flex-col max-[880px]:w-7/12 w-3/12 mt-6">

            <div
                class="flex flex-col justify-center content-center border border-[#dfdfdf] text-center bg-[#fe7171]  rounded-t-lg ">
                <i class="fa-solid fa-briefcase text-2xl"></i>
                <p class="">Offre</p>
            </div>
            <div class="flex items-center justify-around flex-wrap border border-[#dfdfdf] bg-[#fafafa]  rounded-b-lg ">
                <a href="rechercheStage/index">
                    <div class="flex items-center max-[880px]:h-10 h-20 cursor-pointer">
                        <p>Recherche Stage</p>
                    </div>
                </a>
            </div>
        </div>
        <!--Bouton Raccourci Entreprise-->
        <div class="flex flex-col max-[880px]:w-7/12  w-3/12 mt-6 ">

            <div
                class="flex flex-col justify-center content-center text-center border border-[#dfdfdf] bg-[#ffe96b] rounded-t-lg ">
                <i class="fa-solid fa-building text-2xl"></i>
                <p class="">Entreprise</p>
            </div>
            <div class="flex justify-around flex-wrap border border-[#dfdfdf] bg-[#fafafa] rounded-b-lg ">
                <!--<a href="vueEntreprise/index">-->
                    <div class="flex items-center max-[880px]:h-10 h-20 cursor-pointer">
                        <a href="rechercheEntreprise/index">
                            <p>Gestion Entreprise</p>
                        </a>
                    </div>
                <!--</a>-->
            </div>
        </div>
    </div>
    <!--Statut étudiant + statistiques -->
    <div
        class=" flex justify-evenly  max-[880px]:flex-col max-[880px]:items-center min-[880px]:items-end flex-wrap h-3/6 ">
        <!--Statut étudiant-->
        <div class="  w-8/12 min-[880px]:w-5/12 ml-5 mt-10 h-96 ">
            <div class="h-16 bg-white border border-[#dfdfdf] flex items-center justify-center ">
                <h3 class="text-center">En recherche</h3>
            </div>
            <div class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf]">
                <ul class="list-disc ">
                    {foreach $etudiant as $row}
                        <li class="flex justify-between px-3 mb-3">
                            {$row->prenom_utilisateur}
                            {$row->nom_utilisateur}
                            <div class="rounded-full bg-red-200 px-5">
                                En recherche</div>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <!--Statistiques-->
        <div
            class="flex items-center flex-col w-8/12 min-[880px]:w-5/12 ml-5 mt-10 h-96 bg-white border border-[#dfdfdf] overflow-hidden ">
            <div class="h-10 self-start mt-2">
                <p class="px-10">
                    <i class="fa-solid fa-circle-info text-2xl"></i>Statut recherches étudiants :
                </p>
            </div>
            <div class="bg-white h-32 w-10/12 divide-y mt-2">
                <div class="h-10 flex items-center justify-between">
                    <p>Stage trouvé :</p>
                    <div class="rounded-full bg-green-200 px-5"> {$stage_trouve} / {$tot_eleve} </div>
                </div>
                <div class="h-10 flex items-center justify-between">
                    <p>En attente de papier :</p>
                    <div class="rounded-full bg-orange-200 px-5"> {$stage_attente} / {$tot_eleve}</div>
                </div>
                <div class="h-10 flex items-center justify-between">
                    <p>En recherche</p>
                    <div class="rounded-full bg-red-200 px-5"> {$stage_recherche} / {$tot_eleve}</div>
                </div>
            </div>
            <div class="min-[880px]:pt-10">
                <canvas id="graph" width="100%" height="100%" style="display: block; height: 66px; width: 133px;"
                    class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        const graph = document.getElementById("graph").getContext("2d");

        let massPopChart = new Chart(graph, {
            type: "doughnut", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data: {
                datasets: [{
                    label: "Population en M ",
                    data: [{$stage_recherche}, {$stage_attente}, {$stage_trouve}],
                    // backgroundColor: "blue",
                    backgroundColor: [
                        "red",
                        "orange",
                        "green",
                    ],
                    hoverBorderWidth: 3,
                }, ],
            },
        });
    </script>
    <div>
        {include file="footer.tpl"}
    </div>
</body>

</html>
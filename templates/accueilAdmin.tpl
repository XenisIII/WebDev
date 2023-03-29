{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
        <div class="flex flex-wrap justify-between max-w-screen-xl md:ml-24 md:mr-20 ml-16 mr-8 mt-12  ">
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer"
                onclick="gestion_etudiant()">
                <div
                    class="row-span-1 bg-[#67ace6] rounded-t-xl text-6xl  flex flex-col justify-center text-center content-center ">
                    <i class=" fa-solid fa-user-graduate "></i>
                </div>
                <div
                class="flex justify-between items-center bg-[#fafafa] divide-x divide-[#cccccc] max-[880px]:h-10 h-30 rounded-b-lg border border-[#dfdfdf] shrink">

                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="/../index.php/rechercheEtudiant/index">
                        <p class="text-center text-2xl">Gestion Étudiant</p>


                    </a>
                </div>
                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="/../index.php/creationEtudiant/index">
                        <p class="text-center text-2xl">Création étudiant</p>
                    </a>
                </div>
            </div>
            </div>
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 w-full cursor-pointer border"
                onclick="gestion_offre()">
                <div
                    class="row-span-1 bg-[#fe7171] rounded-t-xl text-6xl flex flex-col justify-center text-center content-center">
                    <i class="fa-solid fa-briefcase"> </i>
                </div>
                <div
                <div
                class="flex justify-between items-center bg-[#fafafa] divide-x divide-[#cccccc] max-[880px]:h-10 h-30 rounded-b-lg border border-[#dfdfdf] shrink" >

                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="/../index.php/rechercheStage/index">
                        <p class="text-center text-2xl">Recherche stage</p>


                    </a>
                </div>
                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="/../index.php/creationOffre/index">
                        <p class="text-center text-2xl">Création offre</p>
                    </a>
                </div>
                </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-between max-w-screen-xl md:ml-24 md:mr-20 ml-16 mr-8 md:mt-12">
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer border">
                <div
                    class="row-span-1 bg-[#ffe86a] rounded-t-xl flex flex-col justify-center text-center content-center text-6xl">
                    <i class="fa-solid fa-building"></i>
                </div>
                <div
                class="flex justify-between items-center bg-[#fafafa] divide-x divide-[#cccccc] max-[880px]:h-10 h-30 rounded-b-lg border border-[#dfdfdf] shrink" >

                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="/../index.php/rechercheEntreprise/index">
                        <p class="text-center text-2xl">Gestion entreprise</p>


                    </a>
                </div>
                <div class="flex justify-center items-center max-[880px]:h-8 h-14 shrink basis-1/2 cursor-pointer">
                    <a href="/../index.php/creationEntreprise/index">
                        <p class="text-center text-2xl">Création entreprise</p>
                    </a>
                </div>
                </div>
            </div>
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer border"
                onclick="gestion_tuteur()">
                <div
                    class="row-span-1 bg-[#a4d272] rounded-t-xl flex flex-col justify-center text-center content-center text-6xl">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl flex flex-col justify-center text-center content-center text-3xl">
                    <p>Création tuteur</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function gestion_offre() {
            location.href = "/../index.php/rechercheStage"
        }

        function gestion_entreprise() {
            location.href = "/../index.php/rechercheEntreprise"
        }

        function gestion_etudiant() {
            location.href = "/../index.php/rechercheEtudiant"
        }

        function gestion_tuteur() {
            location.href = "/../index.php/creationTuteur"
        }
    </script>
{include file="footer.tpl"}
</body>

</html>
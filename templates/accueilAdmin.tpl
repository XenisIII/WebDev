{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
        <div class="flex flex-wrap justify-between max-w-screen-xl md:ml-24 md:mr-20 ml-16 mr-8 mt-12  ">
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer "
                onclick="gestion_etudiant()">
                <div
                    class="row-span-1 bg-[#67ace6] rounded-t-xl text-6xl  flex flex-col justify-center text-center content-center ">
                    <i class=" fa-solid fa-user-graduate "></i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl text-3xl flex flex-col justify-center text-center content-center">
                    <p>Gestion des étudiants</p>
                </div>
            </div>
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 w-full cursor-pointer "
                onclick="gestion_offre()">
                <div
                    class="row-span-1 bg-[#fe7171] rounded-t-xl text-6xl flex flex-col justify-center text-center content-center">
                    <i class="fa-solid fa-briefcase"> </i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl text-3xl flex flex-col justify-center text-center content-center">
                    <p>Gestion des offres</p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-between max-w-screen-xl md:ml-24 md:mr-20 ml-16 mr-8 md:mt-12 ">
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer "
                onclick="gestion_entreprise()">
                <div
                    class="row-span-1 bg-[#ffe86a] rounded-t-xl flex flex-col justify-center text-center content-center text-6xl">
                    <i class="fa-solid fa-building"></i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl flex flex-col justify-center text-center content-center text-3xl">
                    <p>Gestion des entreprises</p>
                </div>
            </div>
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer "
                onclick="gestion_tuteur()">
                <div
                    class="row-span-1 bg-[#a4d272] rounded-t-xl flex flex-col justify-center text-center content-center text-6xl">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl flex flex-col justify-center text-center content-center text-3xl">
                    <p>Gestion des tuteurs</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function gestion_offre() {
            location.href = "https://cdn-s-www.lalsace.fr/images/8F3A8E1E-8090-4BD0-B342-6172A5AA616B/FB1200/photo-1630559945.jpg"
        }

        function gestion_entreprise() {
            location.href = "https://www.santevet.com/upload/admin/images/article/Chat%202/Monty/Monty%20chat.jpg"
        }

        function gestion_etudiant() {
            location.href = "https://cdn-s-www.lalsace.fr/images/8F3A8E1E-8090-4BD0-B342-6172A5AA616B/FB1200/photo-1630559945.jpg"
        }

        function gestion_tuteur() {
            location.href = "https://cdn-s-www.lalsace.fr/images/8F3A8E1E-8090-4BD0-B342-6172A5AA616B/FB1200/photo-1630559945.jpg"
        }
    </script>
{include file="footer.tpl"}
</body>

</html>
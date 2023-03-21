{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
        <div class="flex w-[90%] bg-blue-100 mx-20 my-[2%] h-screen">
        <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap">
            <h3 class="text-base xs:text-xl mt-5 text-center content-center"> Création Entreprise </h3>
            <div class=" content-center  w-[95%] sm:w-[70%] lg:w-[50%] xl:w-[40%]">
                <form name="creation_offre" action="creation_offre.php" id="creation_offre" method="post" class="">
                    <label name="titre_offre" class="my-1"> Titre de l'offre </label>
                    <input type="text" name="titre_offre" placeholder="titre offre"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="duree" class="my-1"> Durée du stage </label>
                    <input type="text" name="duree" placeholder="Durée de stage"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="date_debut_stage" class="my-1"> Date de début du stage </label>
                    <input type="date" name="date_debut_stage" placeholder="localite"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="competence" class="my-1"> Compétences </label>
                    <input type="text" name="competence"
                        placeholder="Nombre d'anciens stagiaires venant de CESI"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">
                        <p class="my-1">Confiance du pilote</p>

                    <div class="flex  justify-evenly mt-5">
                        <button type="reset" name="reset"
                            class="border border-solid border-gray-500 p-1  rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer"> Annuler
                        </button>
                        <button type="submit" name="valider"
                            class="border border-solid border-gray-500 p-1 rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer"> Valider
                        </button>
                    </div>

                </form>
            </div>
        </div>

        </div>

    </div>
</div>

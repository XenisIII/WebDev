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
                            <select name="competence" id="simpleclick" multiple="true" size="6"
                                class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">
                                <optgroup label="multichoix">
                                <option value="1">Valeur du select multiple</option>
                                <option value="2">Valeur du select multiple</option>
                                <option value="3">Valeur du select multiple</option>
                                <option value="4">Valeur du select multiple</option>
                                <option value="5">Valeur du select multiple</option>
                                <option value="6">Valeur du select multiple</option>
                                <option value="7">Valeur du select multiple</option>
                                <option value="8">Valeur du select multiple</option>
                                <option value="9">Valeur du select multiple</option>
                                <option value="10">Valeur du select multiple</option>
                                <option value="11">Valeur du select multiple</option>
                                <option value="12">Valeur du select multiple</option>
                                <option value="13">Valeur du select multiple</option>
                                <option value="14">Valeur du select multiple</option>
                                <option value="15">Valeur du select multiple</option>
                                </optgroup>
                            </select>
                        <p class="my-1">Confiance du pilote</p>

                        <div class="flex  justify-evenly mt-5">
                            <button type="reset" name="reset"
                                class="border border-solid border-gray-500 p-1  rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Annuler
                            </button>
                            <button type="submit" name="valider"
                                class="border border-solid border-gray-500 p-1 rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Valider
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

        <script>
            var $options = document.querySelector('#simpleclick').querySelectorAll('option'),
                taille = $options.length;
            while (taille--){
                $options[taille].onmousedown = function(e) {
                    this.selected = !this.selected;
                    e.stopPropagation();
                };
                $options[taille].onclick = function(e) {
                    return false;
                };
            }
        </script>
    </div>
</body>

<?php
/* Smarty version 4.3.0, created on 2023-03-29 09:43:19
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\creationOffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423ec17b41d87_38232772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7307ac24221a15449cec7d978340c6cb634f116c' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\creationOffre.tpl',
      1 => 1679736287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_6423ec17b41d87_38232772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="flex w-[90%]  mx-20 my-[2%] h-screen">
            <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap ">
                <h3 class="text-base xs:text-xl my-5 text-center content-center"> Création Offre </h3>

                <form name="creation_offre" action="creation_offre.php" id="creation_offre" method="post" class="">
                    <div class="flex sm:justify-evenly flex-wrap">
                        <div class=" content-center  w-[70%] sm:w-[40%]  lg:content-between">
                            <label name="titre_offre" class="my-1"> Titre de l'offre </label>
                            <input type="text" name="titre_offre" placeholder="titre offre"
                                class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                            <label name="duree" class="my-1"> Durée du stage </label>
                            <input type="text" name="duree" placeholder="Durée de stage"
                                class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                            <label name="date_debut_stage" class="my-1"> Date de début du stage </label>
                            <input type="date" name="date_debut_stage" placeholder="localite"
                                class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">
                            <div class=" flex w-52  my-1 mb-3 cursor-pointer">
                                <div class=" w-36">
                                    <div class="flex justify-between border-solid border-gray-400 border rounded overflow-hidden h-6"
                                        onclick="apparition()">
                                        <p id="competence " class="ml-1"> Compétences </p>
                                        <p class="bg-gray-100 px-1 font-extralight"><i
                                                class="fa-solid fa-chevron-down text-base "></i></p>
                                    </div>
                                    <ul class="hidden" id="liste_competence">
                                        <li><input type="checkbox">compétence 1</input></li>
                                        <li><input type="checkbox">compétence 2</input></li>
                                        <li><input type="checkbox">compétence 1</input></li>
                                        <li><input type="checkbox">compétence 2</input></li>
                                        <li><input type="checkbox">compétence 1</input></li>
                                        <li><input type="checkbox">compétence 2</input></li>
                                        <li><input type="checkbox">compétence 1</input></li>
                                        <li><input type="checkbox">compétence 2</input></li>
                                    </ul>

                                </div>
                                <div
                                    class=" flex justify-end ml-2 p-1 border border-solid border-gray-400 w-auto rounded bg-gray-200 w-6 h-6">
                                    <i class=" fa-solid fa-plus self-center"></i>
                                </div>
                            </div>

                            <label name="entreprise" id="entreprise">Entreprise </label>
                            <input type="textbox" placeholder="Entreprise"
                                class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3"></input>

                        </div>
                        <div class="commentaire w-[60%] sm:w-[35%]">
                            <label name="entreprise" id="entreprise">Commentaire </label>
                            <div>
                                <textarea  name="commentaire" placeholder=""
                                    class="w-[100%] h-72 border-solid border-gray-400 border rounded my-1 mb-3"></textarea>
                                    </div>
                        </div>
                    </div>
                    <div class="flex   sm:justify-evenly mt-5">
                        <button type="reset" name="reset"
                            class="border border-solid border-gray-500 p-1  rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer ml-[2%] sm:ml-0">
                            Annuler
                        </button>
                        <button type="submit" name="valider"
                            class="border border-solid border-gray-500 p-1 rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer ml-[15%] sm:ml-0">
                            Valider
                        </button>
                    </div>

                </form>



            </div>

        </div>

    </div>

    <?php echo '<script'; ?>
>
        let bool_apparition;
        bool_apparition = false;

        function apparition() {
            bool_apparition = !bool_apparition;
            if (!bool_apparition) {
                liste_competence.setAttribute("class",
                    "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll hidden")
            } else {
                liste_competence.setAttribute("class",
                    "border-solid border-gray-400 border-l border-r border-b overflow-y-scroll h-24")
            }
        }
    <?php echo '</script'; ?>
>
    </div>
</body>

</html><?php }
}

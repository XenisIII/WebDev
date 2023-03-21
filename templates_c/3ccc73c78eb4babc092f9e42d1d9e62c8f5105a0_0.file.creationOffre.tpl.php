<?php
/* Smarty version 4.3.0, created on 2023-03-21 09:40:50
  from 'C:\Users\Léo\Documents\A2\Bloc4_Web\Project\project_git\WebDev-mvc\templates\creationOffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64196d92250db8_01504292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ccc73c78eb4babc092f9e42d1d9e62c8f5105a0' => 
    array (
      0 => 'C:\\Users\\Léo\\Documents\\A2\\Bloc4_Web\\Project\\project_git\\WebDev-mvc\\templates\\creationOffre.tpl',
      1 => 1679388048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_64196d92250db8_01504292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="flex w-[90%] bg-blue-100 mx-20 my-[2%] h-screen">
        <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap">
            <h3 class="text-base xs:text-xl mt-5 text-center content-center"> Création Entreprise </h3>
            <div class=" content-center  w-[95%] sm:w-[70%] lg:w-[50%] xl:w-[40%]">
                <form name="creation_enteprise" action="creation_entreprise.php" id="creation_entreprise" method="post" class="">
                    <label name="nom_entreprise" class="my-1"> Nom entreprise </label>
                    <input type="text" name="nom_entreprise" placeholder="Nom entreprise"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="secteur_activite" class="my-1"> Secteur d'activité </label>
                    <input type="text" name="secteur_activite" placeholder="Secteur d'activité"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="localite" class="my-1"> Localité </label>
                    <input type="text" name="localite" placeholder="localite"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="nb_ancien_stagiaire" class="my-1"> Nombre d'anciens stagiaires venant de CESI </label>
                    <input type="text" name="nb_ancien_stagiaire"
                        placeholder="Nombre d'anciens stagiaires venant de CESI"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">
                        <p class="my-1">Confiance du pilote</p>
                    <div class="">
                        <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1" onclick="star(1)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2" onclick="star(2)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3" onclick="star(3)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4" onclick="star(4)"></i>
                        <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5" onclick="star(5)"></i>
                    </div>

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
<?php }
}

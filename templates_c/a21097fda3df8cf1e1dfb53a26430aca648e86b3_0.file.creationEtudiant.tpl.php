<?php
/* Smarty version 4.3.0, created on 2023-03-23 14:56:47
  from 'C:\Users\Léo\Documents\A2\Bloc4_Web\Project\project_git\WebDev-mvc\templates\creationEtudiant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c5a9fb5a972_03749232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21097fda3df8cf1e1dfb53a26430aca648e86b3' => 
    array (
      0 => 'C:\\Users\\Léo\\Documents\\A2\\Bloc4_Web\\Project\\project_git\\WebDev-mvc\\templates\\creationEtudiant.tpl',
      1 => 1679579807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_641c5a9fb5a972_03749232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="flex w-[90%] bg-none mx-20 my-[2%] h-screen">
            <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap">
                <h3 class="text-base xs:text-xl mt-5 text-center content-center"> Création Etudiant </h3>
                <div class=" content-center  w-[95%] sm:w-[70%] lg:w-[50%] xl:w-[40%]">
                    <form name="creation_enteprise" action="creation_entreprise.php" id="creation_entreprise"
                        method="post" class="">
                        <label name="nom_étudiant" class="my-1"> Nom étudiant </label>
                        <input type="text" name="nom_étudiant" placeholder="Nom étudiant"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <label name="prenom_etudiant" class="my-1"> Prénom étudiant
                        </label>
                        <input type="text" name="prenom_etudiant" placeholder="Prénom étudiant"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-4">

                        <select id="selectCentre" name="centre" size="1" value="centre"
                            class="flex justify-between border-solid border-gray-400 border rounded mb-4 w-24"
                            onclick="selectScroll('centre')">
                            <option onclick="setValueSelect('centre')">Centre</option>
                            <option onclick="setValueSelect('Orleans')">Orléans</option>
                            <option onclick="setValueSelect('Nanterre')">Nanterre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Centre</option>
                            <option onclick="setValueSelect('Nanterre')">Orléans</option>
                            <option onclick="setValueSelect('Nanterre')">Nanterre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>
                            <option onclick="setValueSelect('Nanterre')">Autre</option>

                        </select>
                        <select id="selectPromo" name="promo" size="1" value="promo"
                            class="flex justify-between border-solid border-gray-400 border rounded mb-4 w-24"
                            onclick="selectScroll('promo')">
                            <option onclick="setValuePromo('Promo')">Promo</option>
                            <option onclick="setValuePromo('CPI A2')">CPI A2</option>
                            <option onclick="setValuePromo('CPI A3')">CPI A3</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Autre</option>
                            <option onclick="setValuePromo('Nanterre')">Centre</option>
                            <option onclick="setValuePromo('Nanterre')">Orléans</option>

                        </select>
                        <label name="login" class="my-1"> Login </label>
                        <input type="text" name="login" placeholder="login"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <label name="mdp" class="my-1"> Mot de passe
                        </label>
                        <input type="text" name="mdp" placeholder="************"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <div class="csv border-solid border-gray-400 border rounded my-1 mb-3 flex justify-between h-7">
                            <p> Ajouter des étudiants avec un fichier .csv</p>
                            <div class=" px-2 cursor-pointer bg-gray-200 overflow-hidden rounded">
                            <i class="fa-solid fa-file-import "></i>
                            </div> 
                        </div>


                        <div class="flex  justify-evenly mt-5">
                            <button type="reset" name="reset"
                                class="border border-solid border-gray-500 p-1  rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Annuler
                            </button>
                            <button type="submit" name="valider "
                                class="border border-solid border-gray-500 p-1 rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Valider
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <?php echo '<script'; ?>
>
            let boolCentre = true;
            let boolPromo = true;

            function selectScroll(stringSelect) {

                if (stringSelect === 'centre') {
                    if (boolSelect) {
                        selectCentre.setAttribute("class",
                            "flex justify-between border-solid border-gray-400 border rounded absolute mb-4 w-24");
                        selectCentre.setAttribute("size",
                            "5")
                        boolCentre = !boolCentre;
                    } else {
                        boolCentre = !boolCentre;
                    }
                } else if (stringSelect === 'promo') {
                    if (boolSelect) {
                        selectPromo.setAttribute("class",
                            "flex justify-between border-solid border-gray-400 border rounded absolute mb-4 w-24");
                        selectPromo.setAttribute("size",
                            "5")
                        boolPromo = !boolPromo;
                    } else {
                        boolPromo = !boolPromo;
                    }
                }
            }

            function setValueSelect(centre) {
                selectCentre.setAttribute("value", centre);
                selectCentre.setAttribute("size", "1");
                selectCentre.setAttribute("class", "flex justify-between border-solid border-gray-400 border rounded");
            }

            function setValuePromo(centre) {
                selectPromo.setAttribute("value", centre);
                selectPromo.setAttribute("size", "1");
                selectPromo.setAttribute("class", "flex justify-between border-solid border-gray-400 border rounded");
            }
        <?php echo '</script'; ?>
>
</div><?php }
}

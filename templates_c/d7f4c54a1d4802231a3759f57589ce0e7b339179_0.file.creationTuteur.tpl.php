<?php
/* Smarty version 4.3.0, created on 2023-03-29 09:43:33
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\creationTuteur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6423ec25291460_53361001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f4c54a1d4802231a3759f57589ce0e7b339179' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\creationTuteur.tpl',
      1 => 1679736287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6423ec25291460_53361001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="flex w-[90%] bg-none mx-20 my-[2%] ">
        <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap">
            <h3 class="text-base xs:text-xl mt-5 text-center content-center"> Création Tuteur </h3>
            <div class=" content-center  w-[95%] sm:w-[70%] lg:w-[50%] xl:w-[40%]">
                <form name="creation_enteprise" action="creation_entreprise.php" id="creation_entreprise" method="post" class="">
                    <label name="nom_entreprise" class="my-1"> Nom </label>
                    <input type="text" name="nom_entreprise" placeholder="Nom entreprise"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="secteur_activite" class="my-1"> Prénom </label>
                    <input type="text" name="secteur_activite" placeholder="Secteur d'activité"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="localite" class="my-1"> Login </label>
                    <input type="text" name="localite" placeholder="localite"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                    <label name="nb_ancien_stagiaire" class="my-1"> MDP </label>
                    <input type="text" name="nb_ancien_stagiaire"
                        placeholder="Nombre d'anciens stagiaires venant de CESI"
                        class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}

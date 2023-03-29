<?php
/* Smarty version 4.3.0, created on 2023-03-28 17:37:34
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\entreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642309be923cc9_99452267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93320233563089a694f41a75db535cde18f29356' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\entreprise.tpl',
      1 => 1680017667,
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
function content_642309be923cc9_99452267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="flex justify-center">
            <h1><b>Entreprise: </b><?php echo $_smarty_tpl->tpl_vars['nomEntreprise']->value->nom_entreprise;?>
</h1>
        </div>
        <div class="max-[768px]:block mt-10 flex justify-between">
        <div class = "max-[768px]:block flex flex-col mt-10">
        <div class="flex max-[768px]:ml-6 max-[768px]:mt-6 max-[768px]:pl-0 ml-20">
            <p>Localisation:
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['localite']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <div class="flex">
                        <span class="bg-gray-100 rounded-full px-3 ml-2 h-7"><?php echo $_smarty_tpl->tpl_vars['row']->value->localite;?>
</span>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </p>
        </div>

        <div class="max-[768px]:ml-6 max-[768px]:pl-0 ml-20">
            <p> Note de l'entreprise: 
            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['confPilote']->value->confiance_pilote >= 1) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star1" id="star1"></i>
            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['confPilote']->value->confiance_pilote >= 2) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star2" id="star2"></i>
            <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['confPilote']->value->confiance_pilote >= 3) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star3" id="star3"></i>
            <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['confPilote']->value->confiance_pilote >= 4) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star4" id="star4"></i>
            <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['confPilote']->value->confiance_pilote >= 5) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star5" id="star5"></i>
            </p>
        </div>

        <?php if (($_smarty_tpl->tpl_vars['role']->value != "Eleve")) {?>
        <div class="max-[768px]:ml-6 ml-20">
            <button class="px-10 bg-gray-300 rounded-sm" onclick="toggleHidden()">Modifier</button>
            <form method="post" action="/index.php/entreprise/delete">
            <button class="px-10 bg-gray-300 rounded-sm">Supprimer</button>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['nomEntreprise']->value->id_entreprise;?>
"></input>
            </form>
        </div>
        <form method="post" action="/index.php/entreprise/modify">
        <div class="flex flex-col max-[768px]:ml-6 ml-20 hidden" id="modif">
            <input type="text" name="nom" placeholder="Nom"></input>
            <input type="text" name="secteur" placeholder="Secteur d'activité"></input>
            <input type="number" name="nbStagiaire" placeholder="Nb stagiaire"></input>
            <input type="number" name="confiance" placeholder="Confiance pilote"></input>
            <input type="text" name="localite" placeholder="Localite"></input>
            <input type="number" name="CP" placeholder="CP"></input>
            <button class="px-10 bg-gray-300 rounded-sm">Envoyer</button>
        </div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['nomEntreprise']->value->id_entreprise;?>
"></input>

        <?php echo '<script'; ?>
>
        function toggleHidden(){
            var attribute = document.getElementById("modif");
            if(attribute.classList.contains("hidden")){
                attribute.classList.remove("hidden");  
            } else {
                attribute.classList.add("hidden");
            }
        }
        <?php echo '</script'; ?>
>
        </form>
        <?php }?>

        </div>
        <img class="max-[860px]:hidden w-[250px] mx-10" alt="Image Entreprise" src="/../img/krita.png"></img>
        </div>
        <div>
            <h3 class="max-[768px]:ml-6 mt-6 text-xl ml-20"><b>Offres</b></h3>
        </div>
        <div class="max-[768px]:ml-0 ml-20">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offres']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
            <div class="flex flex-col rounded-md border max-[768px]:my-2 max-[768px]:mx-6 min-[768px]:w-1/3">
                <p><b><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_offre;?>
</b></br>
                Durée: <?php echo $_smarty_tpl->tpl_vars['row']->value->duree_stage;?>
 mois</br>
                Rémunération: <?php echo $_smarty_tpl->tpl_vars['row']->value->remuneration;?>
€</br>
                Date de début: <?php echo $_smarty_tpl->tpl_vars['row']->value->date_debut_stage;?>
</br>
                Lieu du stage: <?php echo $_smarty_tpl->tpl_vars['row']->value->localite;?>
</p></br>
                Votre mission: </br>
                <?php echo $_smarty_tpl->tpl_vars['row']->value->informations;?>
</br>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}

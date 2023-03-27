<?php
/* Smarty version 4.3.0, created on 2023-03-27 19:31:02
  from 'C:\Users\daval\Documents\git\WebDev-mvc\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6421d2d6401153_60519463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7944b4e89d95fd52e40dedbabddbfcd503e53b3d' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\git\\WebDev-mvc\\templates\\profil.tpl',
      1 => 1679938261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_6421d2d6401153_60519463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="bg-[#f5f5f5] h-screen">
<div>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<!-- div globale-->
<div class="flex justify-center min-[880px]:h-screen">
<div class="bg-white flex flex-col max-[880px]:flex-col max-[880px]:items-center max-[880px]:justify-start rounded-[12px] border border-[#dadada] mt-10 min-[880px]:h-5/6 w-11/12 ">
<!-- div image et cv-->
    <div class="flex justify-between w-full mt-5">
        <!-- contact -->
        <div class="border rounded border-black h-fit ml-3" >
        <div class="flex items-center justify-between px-2" id="div-nom">
        <p id="p-nom"><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</p>
        <input type="text" id="text-nom" class="hidden border" onfocusout="send('nom');"></input>
        <?php if (!$_smarty_tpl->tpl_vars['isStudent']->value) {?><i class="fa-solid fa-gear cursor-pointer" id="gear-nom" onclick="modify('nom')" ></i><?php }?>
        </div>
        <div>
        <p id="p-prenom"><?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
 </p><?php if (!$_smarty_tpl->tpl_vars['isStudent']->value) {?><i class="fa-solid fa-gear cursor-pointer" id="gear-nom" onclick="modify('prenom')" ></i><?php }?>
        </div>
        <div> 
        <p id="p-mail"><?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
.<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
@viacesi.fr</p><?php if (!$_smarty_tpl->tpl_vars['isStudent']->value) {?><i class="fa-solid fa-gear cursor-pointer" id="gear-nom" onclick="modify('mail')" ></i><?php }?>
        </div>

        </div>
        <!-- CV 
        <div class="mr-3">
            <h3>CV:</h3>
        </div>-->
        
    </div>
    <!-- wishList-->
    <?php if ($_smarty_tpl->tpl_vars['isStudent']->value) {?>
    <div class="my-5 mx-5 border border-black h-full overflow-y-scroll max-h-[100%]">
        <div class="border-b border-black text-center text-2xl h-12">
        <h1>
            FAVORIS
        </h1>
        </div>
        <div>
        <div class="bg-white divide-y w-[90%] sm:w-[95%] h-[500px] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] lg:ml-[2%]">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AllOffer']->value, 'Offer');
$_smarty_tpl->tpl_vars['Offer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Offer']->value) {
$_smarty_tpl->tpl_vars['Offer']->do_else = false;
?>
        <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between 
        w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]  ">
            <a href="/index.php/Offre/index?id=<?php echo $_smarty_tpl->tpl_vars['Offer']->value->id_offre;?>
"><div class="flex flex-col grow">
                <div class=''>
                    <h2 class="mb-2 text-sm font-medium text-xl"> <?php echo $_smarty_tpl->tpl_vars['Offer']->value->nom_offre;?>
 </h2>
                </div>
                <div class="invisible sm:visible">
                    <i class="fa fa-building"></i> <?php echo $_smarty_tpl->tpl_vars['Offer']->value->nom_entreprise;?>

                    <i class="fa fa-location-dot"></i> <?php echo $_smarty_tpl->tpl_vars['Offer']->value->localite;?>

                    <i class="fa fa-clock"></i> <?php echo $_smarty_tpl->tpl_vars['Offer']->value->duree_stage;?>
 mois
                </div></a>
            </div>
            <div class="flex items-stretch self-center">
        <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['Offer']->value->confiance_pilote >= 1) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star1" id="star1"></i>
        <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['Offer']->value->confiance_pilote >= 2) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star2" id="star2"></i>
        <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['Offer']->value->confiance_pilote >= 3) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star3" id="star3"></i>
        <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['Offer']->value->confiance_pilote >= 4) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star4" id="star4"></i>
        <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['Offer']->value->confiance_pilote >= 5) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star5" id="star5"></i>
            </div>
            <div class="flex items-stretch self-center">
                <i id="heart" class="fa fa-heart m-8 text-red-500" onclick="heartv2()"></i>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
        
        </div>
        </div>
        
    

    </div>
    <?php }?>
</div>
<?php echo '<script'; ?>
 src="/script/profil.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

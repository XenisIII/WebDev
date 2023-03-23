<?php
/* Smarty version 4.3.0, created on 2023-03-23 11:49:37
  from '/home/lilian/Documents/webdev/WebDev-mvc/templates/offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c2ec1b59c33_43930072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad6f92d60e43ab509dcab22b717eafb4c799f500' => 
    array (
      0 => '/home/lilian/Documents/webdev/WebDev-mvc/templates/offre.tpl',
      1 => 1679568576,
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
function content_641c2ec1b59c33_43930072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="bg-[#f5f5f5]">
<div>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<!-- Box globale-->
<div class="bg-[#f5f5f5] flex justify-center min-[880px]:h-screen h-[100%]">
<div class="bg-white flex max-[880px]:flex-col max-[880px]:items-center max-[880px]:justify-start rounded-[12px] border border-[#dadada] mt-10 min-[880px]:h-5/6 w-11/12 ">
    <!-- Partie titre/entreprise -->
    <div class="min-[880px]:w-5/12 mx-5 my-5 flex flex-col justify-between ">
    <!-- Titre/compétence/durée-->
        <div>
            <!-- Titre -->
            <div class="mt-3 text-2xl">
                <h3>Titre offre</h3>
            </div>
            <!-- Compétences-->
            <div class="max-[880px]:w-9/12 w-full">
                <ul class="flex flex-wrap my-5">
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">CSS</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">HTML</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">Javascript</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">CSS</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">HTML</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">Javascript</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">CSS</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">HTML</li>
                    <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">Javascript</li> 
                </ul>
            </div>
            <!--durée-->
            <div class="my-2">
            <p class="text-xl">
                <i class="fa-solid fa-stopwatch"></i>
                 4 Mois
            </p>
            </div>
        </div>
        <!-- Entreprise -->
        <div class="border border-black rounded-[12px] min-w-fit w-7/12 min-[880px]:w-full bg-grey flex flex-col justify-evenly h-2/5 min-[880px]:h-1/5  mt-5 ">
            <div class="mx-2">
                <p class="text-3xl">
                <i class="fa-regular fa-building"></i>
                    Nom Entreprise
                </p>
            </div>
            <div class="ml-3">
                <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1"></i>
                <i class="fa-regular fa-star cursor-pointer " name="star2" id="star2" ></i>
                <i class="fa-regular fa-star cursor-pointer" name="star3" id="star3" ></i>
                <i class="fa-regular fa-star cursor-pointer" name="star4" id="star4" ></i>
                <i class="fa-regular fa-star cursor-pointer" name="star5" id="star5" ></i>
            </div>
            <div class="ml-2">
                <i class="fa fa-compass fa-xl"></i>
                Orléans
            </div>
        </div>
        <!-- Bouton-->
        <div class="flex justify-between max-[880px]:hidden h-1/5 items-center">
            <button class="border border-black w-3/12 h-3/5 rounded">Retour</button>
            <button class="border border-black w-3/12 h-3/5 rounded">Postuler</button>
        </div>
    </div>
    <!-- Partie informations-->
    <div class="w-7/12 pl-12 mr-5 flex flex-col min-[880px]:justify-center max-[880px]:self-start max-[880px]:w-10/12 max-[880px]:mr-5">
        <!-- titre-->
        <div class="">
            <h3>Sujet</h3>
        </div>
        <!-- information-->
        <div class="border border-black rounded min-[880px]:h-[70%] overflow-y-scroll max-h-96">
            <p class="h-full p-2 min-[880px]:p-7  text-md ">Lorem ipsum dolor sit amet, <br><br> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, <br><br> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="flex justify-between min-[880px]:hidden h-3/5 items-center min-h-12 mt-3">
            <button class="border border-black w-3/12 h-3/5 min-w-fit min-h-fit rounded max-[880px]:h-full">Retour</button>
            <button class="border border-black w-3/12 h-3/5 min-w-fit min-h-fit rounded max-[880px]:h-full">Postuler</button>
        </div>

    </div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}

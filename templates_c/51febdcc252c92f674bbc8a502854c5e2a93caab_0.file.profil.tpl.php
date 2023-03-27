<?php
/* Smarty version 4.3.0, created on 2023-03-27 13:06:33
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642178b9b52478_31006050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51febdcc252c92f674bbc8a502854c5e2a93caab' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\profil.tpl',
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
function content_642178b9b52478_31006050 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="border rounded border-black h-fit ml-3">
        <p>
        NOM
        </p>
        <p>
        Prénom
        </p>
        <p>
        prénom.nom@viacesi.fr
        </p>
        </div>
        <!-- CV -->
        <div class="mr-3">
            <h3>CV:</h3>
        </div>
    </div>
    <!-- wishList-->
    <div class="my-5 mx-5 border border-black h-full overflow-y-scroll max-h-[100%]">
        <div class="border-b border-black text-center text-2xl h-12">
        <h1>
            FAVORIS
        </h1>
        </div>
        <div>
        <div class="bg-white divide-y w-[90%] sm:w-[95%] h-[500px] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] lg:ml-[2%]">
        <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between 
        w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]  ">
            <div class="flex flex-col ">
                <div class=''>
                    <h2 class="mb-2 text-sm font-medium text-xl"> Ceci est un post </h2>
                </div>
                <div class="invisible sm:visible">
                    <i class="fa fa-building"></i> Orange
                    <i class="fa fa-location-dot"></i> Orléans
                    <i class="fa fa-clock"></i> 3 mois
                </div>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1"
                    onclick="star(1)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2" onclick="star(2)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3" onclick="star(3)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4" onclick="star(4)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5" onclick="star(5)"></i>
            </div>
            <div class="flex items-stretch self-center">
                <i id="heart" class="fa fa-heart m-8 cursor-pointer" onclick="heartv2()"></i>
            </div>
        </div>
        <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between 
        w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
            <div class="flex flex-col ">
                <div>
                    <h2 class="mb-2 text-sm font-medium text-xl"> Ceci est un post </h2>
                </div>
                <div class="invisible sm:visible">
                    <i class="fa fa-building"></i> Orange
                    <i class="fa fa-location-dot"></i> Orléans
                    <i class="fa fa-clock"></i> 3 mois
                </div>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1"
                    onclick="star(1)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2" onclick="star(2)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3" onclick="star(3)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4" onclick="star(4)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5" onclick="star(5)"></i>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-heart m-8"></i>
            </div>
        </div>
        <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between 
        w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
            <div class="flex flex-col ">
                <div>
                    <h2 class="mb-2 text-sm font-medium text-xl"> Ceci est un post </h2>
                </div>
                <div class="mb-0 invisible sm:visible">
                    <i class="fa fa-building"></i> Orange
                    <i class="fa fa-location-dot"></i> Orléans
                    <i class="fa fa-clock"></i> 3 mois
                </div>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1"
                    onclick="star(1)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2" onclick="star(2)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3" onclick="star(3)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4" onclick="star(4)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5" onclick="star(5)"></i>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-heart m-8"></i>
            </div>
        </div>
        <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between 
        w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%] ">
            <div class="flex flex-col ">
                <div>
                    <h2 class="mb-2 text-sm font-medium text-xl"> Ceci est un post </h2>
                </div>
                <div class="mb-0 invisible sm:visible">
                    <i class="fa fa-building"></i> Orange
                    <i class="fa fa-location-dot"></i> Orléans
                    <i class="fa fa-clock"></i> 3 mois
                </div>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1"
                    onclick="star(1)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2" onclick="star(2)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3" onclick="star(3)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4" onclick="star(4)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5" onclick="star(5)"></i>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-heart m-8"></i>
            </div>
        </div>
        <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between 
        w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
            <div class="flex flex-col ">
                <div>
                    <h2 class="mb-2 text-sm font-medium text-xl"> Ceci est un post </h2>
                </div>
                <div class="invisible sm:visible">
                    <i class="fa fa-building"></i> Orange
                    <i class="fa fa-location-dot"></i> Orléans
                    <i class="fa fa-clock"></i> 3 mois
                </div>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1"
                    onclick="star(1)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2" onclick="star(2)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3" onclick="star(3)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4" onclick="star(4)"></i>
                <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5" onclick="star(5)"></i>
            </div>
            <div class="flex items-stretch self-center">
                <i class="fa fa-heart m-8"></i>
                <!---text-red-500-->
            </div>
        </div>
        </div>
    

    </div>
</div>
</body>
</html><?php }
}

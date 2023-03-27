<?php
/* Smarty version 4.3.0, created on 2023-03-26 23:32:05
  from 'C:\Users\daval\Documents\git\WebDev-mvc\templates\rechercheStage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6420b9d5da7f50_22802775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd0414b749e75e8a4e41cadc60f00c993ca694c2' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\git\\WebDev-mvc\\templates\\rechercheStage.tpl',
      1 => 1679866241,
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
function content_6420b9d5da7f50_22802775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="bg-[#f5f5f5] ">
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!--bouton caché trier par-->
    <div class=" ">
        <div class="md:hidden flex justify-center mt-4 ">
            <button onclick="mobileFastSearch()" type="button"
                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                aria-controls="mobile-fast-serach" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <p>Tirer Par</p>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!--Quand on est dans un écran de tel on a l'apparition des chackboxs -->
        <div class="hidden md:hidden" id="mobile-fast-serach">
            <div class="flex space-y-1 px-2 pt-2 pb-3 sm:px-3 bg-white rounded-[12px]">
                <a href="#" class=" text-black² block rounded-md px-3 py-2 text-base font-medium" aria-current="page"
                    id="mobile-menu-item">
                    <div class="justify-center">
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Il y a 1 jour</label></br>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Il y a 2 à 7 jours</label></br>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Il y a 8 à 14 jours</label></br>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Il y a 15 à 30 jours</label></br>
                        <input type="checkbox" id="scales" name="scales" checked>
                        <label for="scales">Il y a plus de 30 jours</label></br>

                    </div>
                </a>
                <!--choix de la distance en km -->
                <a href="#" class="text-black rounded-md px-3 py-2 text-base font-medium" id="mobile-menu-item">
                    <div class="w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
                        <label for="points">Distance(Entre 0 et 100 Km):</label>
                        <input type="range" id="points" name="points" min="0" max="100" step="10"
                            onchange="AfficheRange2(this.value)" onkeyup="AfficheRange2(this.value)">
                        <span id="valBox">Valeur</span>
                        <!-- script permettant l'affichage de la la valeur choisi en fonction du curseur-->
                        <?php echo '<script'; ?>
>
                            function AfficheRange2(newVal) {
                                document.getElementById("valBox").innerHTML = "Valeur=" + newVal;
                            }
                        <?php echo '</script'; ?>
>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <!--séparation en 2 colonnes puis en ligne quand format téléphone est présent-->
    <div
        class="flex flex-col sm:flex-row sm:flex-wrap sm:justify-between lg:mr-[2%] mr-5 lg:ml-[5%] mt-5 md:ml-[10%] md:mr-[5%] sm:mx-[3%] lg:mt-0">
        <!--première grande div celle de gauche -->
        <div
            class=" w-[90%] sm:w-[80%] h-fit divide-y bg-white mr-3 rounded-[12px] border border-[#dadada] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] mr-5 flex flex-col">
            <!-- barre de recherche de tailwind -->
            <div class=" w-[90%] sm:w-[95%] h-12 mx-[5%] divide-y mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
                <form  method="get" >
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-black">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search" name="search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Recherche ton avenir..." >
                        <button type="submit" formaction="/index.php/RechercheStage/index?<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
            <div class="bg-white divide-y w-[90%] h-fit sm:w-[95%] h-[500px] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] lg:ml-[2%]">
                <!--grande div contenant les offres-->
                <?php
$_smarty_tpl->tpl_vars['nboffre'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['nboffre']->step = 1;$_smarty_tpl->tpl_vars['nboffre']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['nboffre']->step > 0 ? $_smarty_tpl->tpl_vars['TotalOffre']->value-1+1 - (0+($_smarty_tpl->tpl_vars['Thispage']->value-1)*5) : 0+($_smarty_tpl->tpl_vars['Thispage']->value-1)*5-($_smarty_tpl->tpl_vars['TotalOffre']->value-1)+1)/abs($_smarty_tpl->tpl_vars['nboffre']->step)),5);
if ($_smarty_tpl->tpl_vars['nboffre']->total > 0) {
for ($_smarty_tpl->tpl_vars['nboffre']->value = 0+($_smarty_tpl->tpl_vars['Thispage']->value-1)*5, $_smarty_tpl->tpl_vars['nboffre']->iteration = 1;$_smarty_tpl->tpl_vars['nboffre']->iteration <= $_smarty_tpl->tpl_vars['nboffre']->total;$_smarty_tpl->tpl_vars['nboffre']->value += $_smarty_tpl->tpl_vars['nboffre']->step, $_smarty_tpl->tpl_vars['nboffre']->iteration++) {
$_smarty_tpl->tpl_vars['nboffre']->first = $_smarty_tpl->tpl_vars['nboffre']->iteration === 1;$_smarty_tpl->tpl_vars['nboffre']->last = $_smarty_tpl->tpl_vars['nboffre']->iteration === $_smarty_tpl->tpl_vars['nboffre']->total;?>
                <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between                                           
                w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]  ">
                    <!--div contenant les différentes colones-->
                    <a href="/index.php/offre/index?id=<?php echo $_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->id_offre;?>
"><div class="flex flex-col cursor-pointer ">
                        <!-- Div pour séparer le titre de la location ect-->
                        <div class=''>
                            <!-- Div Pour le titre du stage-->
                            <h2 class="mb-2 text-sm font-medium text-xl"> <?php echo $_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->nom_offre;?>
</h2>
                            <!---->
                        </div>
                        <div class="invisible sm:visible">
                            <!-- Div pour la location ect qui se cache quand on est sur téléphone-->
                            <i class="fa fa-building"></i> <?php echo $_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->nom_offre;?>

                            <i class="fa fa-location-dot"></i> <?php echo $_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->localite;?>
 
                            <i class="fa fa-clock"></i> <?php echo $_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->duree_stage;?>
 mois 
                        </div>
                    </div></a>
                    <!-- Div pour les étoiles et les centrer au milieu-->
                    <div class="flex items-stretch self-center">
                <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->confiance_pilote >= 1) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star1" id="star1"></i>
                        <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->confiance_pilote >= 2) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star2" id="star2"></i>
                        <i class="fa fa-star <?php if ($_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->confiance_pilote >= 3) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star3" id="star3"></i>
                        <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->confiance_pilote >= 4) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star4" id="star4"></i>
                        <i class="fa fa-star  <?php if ($_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->confiance_pilote >= 5) {?>text-yellow-300<?php } else { ?>text-black<?php }?>" name="star5" id="star5"></i>
                    </div>
                    <div class="flex items-stretch self-center">
                        <!-- Div pour centrer le coeur -->
                        <i id="heart-<?php echo $_smarty_tpl->tpl_vars['nboffre']->value;?>
" class="fa fa-heart m-8 cursor-pointer" onclick="heartv2('heart-<?php echo $_smarty_tpl->tpl_vars['nboffre']->value;?>
',true,<?php echo $_smarty_tpl->tpl_vars['AllOffer']->value[$_smarty_tpl->tpl_vars['nboffre']->value]->id_offre;?>
)"></i>
                    </div>
                </div>
                <?php }
}
?>

                <div class="flex items-center content-end border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                    <!-- Div pour mettre la pagination de tailwind -->
                    <div class="flex flex-1 justify-between sm:hidden">
                        <a href="#"
                            class="relative inline-flex items-center content-end rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                        <a href="#"
                            class="relative ml-3 inline-flex items-center  rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                    </div>
                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium"><?php echo $_smarty_tpl->tpl_vars['nbdebut']->value;?>
</span>
                                to
                                <span class="font-medium"><?php echo $_smarty_tpl->tpl_vars['nbfin']->value;?>
</span>
                                of
                                <span class="font-medium"><?php echo $_smarty_tpl->tpl_vars['TotalOffre']->value;?>
</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
            <a href="?page=<?php if ($_smarty_tpl->tpl_vars['Thispage']->value > 1) {
echo $_smarty_tpl->tpl_vars['Thispage']->value-1;
} else { ?>1<?php }
echo $_smarty_tpl->tpl_vars['get']->value;?>
"
                                    class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                <a href="?page=1<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" aria-current="page"
                                    class="relative inline-flex items-center b px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                                <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['Pages']->value+1 - ($_smarty_tpl->tpl_vars['Thispage']->value-2) : $_smarty_tpl->tpl_vars['Thispage']->value-2-($_smarty_tpl->tpl_vars['Pages']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step)),5);
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['Thispage']->value-2, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1 && $_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['Pages']->value) {?><a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
echo $_smarty_tpl->tpl_vars['get']->value;?>
"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                                <?php }
}
}
?>
                                <?php if ($_smarty_tpl->tpl_vars['Pages']->value != 1 && $_smarty_tpl->tpl_vars['Pages']->value != 0) {?>
                                <a href="?page=<?php echo $_smarty_tpl->tpl_vars['Pages']->value;
echo $_smarty_tpl->tpl_vars['get']->value;?>
" aria-current="page"
                                class="relative inline-flex items-center b px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?php echo $_smarty_tpl->tpl_vars['Pages']->value;?>
</a><?php }?>
                                    <a href="?page=<?php if ($_smarty_tpl->tpl_vars['Thispage']->value < $_smarty_tpl->tpl_vars['Pages']->value) {
echo $_smarty_tpl->tpl_vars['Thispage']->value+1;
} else {
echo $_smarty_tpl->tpl_vars['Pages']->value;
}
echo $_smarty_tpl->tpl_vars['get']->value;?>
"
                                    class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Next</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--même chose que préscédemment mais pour la version large-->
        <div
            class=" bg-white h-fit rounded-[12px] border border-[#dadada] invisible md:visible w-[20%]  sm:w-[20%] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] ">
            <div class=" text-black block  px-3 py-2 text-base font-medium">
                <p>Trier par :</p>
            </div>
            <div class=" w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
                <label for="point">Distance(Entre 0 et 100 Km):</label>
                <input type="range" id="point" name="point" min="0" max="100" step="10"
                    onchange="AfficheRange(this.value)" onkeyup="AfficheRange(this.value)">
                <span id="val">Valeur</span>
                <?php echo '<script'; ?>
>
                    function AfficheRange(newVal2) {
                        document.getElementById("val").innerHTML = "Valeur=" + newVal2;
                    }
                <?php echo '</script'; ?>
>
            </div>
            <div class="text-black block     px-3 py-2 text-base font-medium">
                Date de mise en ligne
                <!---bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]-->
                <form metho="get">
                                    <a href="?scales=0<?php echo $_smarty_tpl->tpl_vars['SearchGet']->value;?>
"><input type="radio"  name="scales" value="0" <?php if ($_smarty_tpl->tpl_vars['ActualScale']->value == 0) {?> checked<?php }?>></a>
                <label for="a">Tous</label></br>
                <a href="?scales=1<?php echo $_smarty_tpl->tpl_vars['SearchGet']->value;?>
"><input type="radio" name="scales" value="1"<?php if ($_smarty_tpl->tpl_vars['ActualScale']->value == 1) {?> checked<?php }?>></a>
                <label for="scales">Hier</label></br>
                <a href="?scales=2<?php echo $_smarty_tpl->tpl_vars['SearchGet']->value;?>
"><input type="radio"  name="scales" value="2"<?php if ($_smarty_tpl->tpl_vars['ActualScale']->value == 2) {?> checked<?php }?>></a>
                <label for="radio">La semaine dernière</label></br>
                <a href="?scales=5<?php echo $_smarty_tpl->tpl_vars['SearchGet']->value;?>
"><input type="radio"  name="scales" value="5"<?php if ($_smarty_tpl->tpl_vars['ActualScale']->value == 5) {?> checked<?php }?>></a>
                <label for="scales"> 1 mois ou +</label></br>
                <a href="?scales=3<?php echo $_smarty_tpl->tpl_vars['SearchGet']->value;?>
"><input type="radio" class="hidden" name="scales" value="3" <?php if ($_smarty_tpl->tpl_vars['ActualScale']->value == 3) {?> checked<?php }?>></a>
                <label for="scales" class="hidden">Il y a 8 à 14 jours</label></br>
                <a href="?scales=4<?php echo $_smarty_tpl->tpl_vars['SearchGet']->value;?>
"><input type="radio" class="hidden"  name="scales" value="4"<?php if ($_smarty_tpl->tpl_vars['ActualScale']->value == 4) {?> checked<?php }?>></a>
                <label for="scales" class="hidden">Il y a 15 à 30 jours</label></br>
                
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript pour faire l'animation du coeur et le bouton trier apparaitre-->
    <?php echo '<script'; ?>
>
        function heartv2(id,bool,idoffre) {
            if(bool==true){
            document.getElementById(id).setAttribute("class", "text-red-500 fa fa-heart m-8 cursor-pointer");
            document.getElementById(id).setAttribute("onclick","heartv2('"+id+"',false)");
            document.location.href="/index.php/rechercheStage/fav?id_offre="+idoffre; 
        }
            else{
                document.getElementById(id).setAttribute("class", "fa fa-heart text-black m-8 cursor-pointer");
                document.getElementById(id).setAttribute("onclick","heartv2('"+id+"',true)");
            }
        }

        function mobileFastSearch() {
            var menu = document.getElementById("mobile-fast-serach");
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden");
            } else {
                menu.classList.add("hidden");
            }
        };
    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body><?php }
}

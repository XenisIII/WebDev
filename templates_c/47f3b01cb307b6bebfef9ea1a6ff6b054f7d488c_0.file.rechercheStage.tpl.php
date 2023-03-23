<?php
/* Smarty version 4.3.0, created on 2023-03-23 11:42:33
  from '/home/lilian/Documents/webdev/WebDev-mvc/templates/rechercheStage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c2d191dc623_11931008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f3b01cb307b6bebfef9ea1a6ff6b054f7d488c' => 
    array (
      0 => '/home/lilian/Documents/webdev/WebDev-mvc/templates/rechercheStage.tpl',
      1 => 1679568152,
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
function content_641c2d191dc623_11931008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="bg-[#f5f5f5]">
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div>
        <div class="md:hidden flex justify-center mt-4">
            <button onclick="mobileFastSearch()" type="button"
                class="inline-flex items-center justify-center rounded-md  p-2 text-white-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
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
        <div class="hidden lg:hidden" id="mobile-fast-serach">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class=" text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page" id="mobile-menu-item">
                    <div class="">
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
                <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                id="mobile-menu-item">
                <div class=" w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
                    <label for="points">Distance(Entre 0 et 100 Km):</label>
                    <input type="range" id="points" name="points" min="0" max="100" step="10"
                        onchange="AfficheRange2(this.value)" onkeyup="AfficheRange2(this.value)">
                    <span id="valBox">Valeur</span>
                    <?php echo '<script'; ?>
>
                        function AfficheRange2(newVal) {
                            document.getElementById("valBox").innerHTML = "Valeur=" + newVal;
                        }
                    <?php echo '</script'; ?>
>
                </div>
            </a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                    id="mobile-menu-item">
                    <div class="">
                        <div class="">
                            <p>Trier par :</p>
                            <input type="radio" value="Personnel">
                            <label for="personnel">Personnel</label>
                            <input type="radio" value="Professionel">
                            <label for="professionel">Professionel</label>
                        </div>
                </a>
            </div>
        </div>

    </div>
    <div
        class="flex flex-col sm:flex-row sm:flex-wrap sm:justify-between lg:mr-[2%] mr-5 lg:ml-[5%] mt-5 md:ml-[10%] md:mr-[5%] sm:mx-[3%] lg:mt-0">

        <div
            class=" w-[90%] sm:w-[80%] h-[650px] divide-y bg-white mr-3 rounded-[12px] border border-[#dadada] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] mr-5 flex flex-col">
            <div class=" w-[90%] sm:w-[95%] h-12 mx-[5%] divide-y mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
                <form>
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-black">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Recherche ton avenir..." required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
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
                <div class="flex items-center content-end border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
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
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">10</span>
                                of
                                <span class="font-medium">97</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                <a href="#"
                                    class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                    <span class="sr-only">Previous</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                <a href="#" aria-current="page"
                                    class="relative z-10 inline-flex items-center  px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                                <a href="#"
                                    class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                                <span
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                <a href="#"
                                    class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                                <a href="#"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                                <a href="#"
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

        <div
            class=" bg-white h-fit rounded-[12px] ml-3 border border-[#dadada] invisible md:visible w-[20%]  sm:w-[20%] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] ">
            <div class=" text-black block  px-3 py-2 text-base font-medium">
            <!--bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]-->
                <p>Trier par :</p>
                <input type="radio" value="Personnel">
                <label for="personnel">Personnel</label>
                <input type="radio" value="Professionel">
                <label for="professionel">Professionel</label>
            </div>
                <div class=" w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]">
                    <label for="point">Distance(Entre 0 et 100 Km):</label>
                    <input type="range" id="point" name="point" min="0" max="100" step="10"
                        onchange="AfficheRange2(this.value)" onkeyup="AfficheRange2(this.value)">
                    <span id="val">Valeur</span>
                    <?php echo '<script'; ?>
>
                        function AfficheRange2(newVal) {
                            document.getElementById("val").innerHTML = "Valeur=" + newVal;
                        }
                    <?php echo '</script'; ?>
>
                </div>
            <div class="text-black block     px-3 py-2 text-base font-medium">
                <!---bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]-->
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
        </div>
    </div>
    <?php echo '<script'; ?>
>
        function heartv2() {
            heart.setAttribute("class", "text-red-500 fa fa-heart m-8")
            console.log('test');
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

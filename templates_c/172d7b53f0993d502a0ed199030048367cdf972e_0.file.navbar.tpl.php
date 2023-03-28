<?php
/* Smarty version 4.3.0, created on 2023-03-28 21:36:06
  from 'C:\Users\daval\Documents\git\WebDev-mvc\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642341a66ef369_52846305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '172d7b53f0993d502a0ed199030048367cdf972e' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\git\\WebDev-mvc\\templates\\navbar.tpl',
      1 => 1680027818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642341a66ef369_52846305 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="bg-[#f5f5f5]">
    <div class="min-h-full">
        <nav class="bg-gray-900">
            <div class="mx-auto px-2 lg:ml-0">
                <div class="relative flex h-12 items-center justify-between">
                    <!--<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    </div>-->
                    <div class="md:hidden">
                        <button onclick="mobileMenu()" type="button"
                            class="inline-flex items-center justify-center rounded-md bg-gray-700 p-2 text-white-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex flex-1 sm:items-stretch sm:justify-start ml-2 lg:ml-0">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="block h-9 w-auto h-6" src="/../../img/krita.png" alt="Your Company">
                        </div>
                        <div class="sm:ml-6 sm:block">
                            <div class="flex space-x-4">

                                <a href="/index.php/accueil" class="text-white rounded-md px-3 py-2 text-lg font-medium"
                                    aria-current="page">InternTracker</a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" onclick="toggleMenu()"
                                class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>

                        <div id="user-menu"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                                tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
                                tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </nav>
    </div>

    <!--<div class="-mr-2 flex">-->
    <!-- Mobile menu button -->

    <!--</div>-->
    <div>
        <div class="hidden float-left md:block top-0 left-0 h-screen w-12 bg-gray-300 text-black flex justify-center">
            <!-- Contenu de la side left bar -->
            <div class="my-4 mt-0 ml-0 w-auto">
                <a href="/../index.php/accueil"><i onclick="bgChange(1)"
                        class="fas fa-tachometer-alt text-2xl py-2 px-3 hover:bg-gray-400 hover:text-white sBarItem"></i></a>
                <a href="/../index.php/profil/index"><i onclick="bgChange(2)"
                        class="fa-solid fa-street-view text-2xl py-2 px-3 hover:bg-gray-400 hover:text-white sBarItem"></i></a>
                <a href="/../index.php/rechercheStage/index"><i onclick="bgChange(3)"
                        class="fa-solid fa-briefcase text-2xl py-2 px-3 hover:bg-gray-400 hover:text-white sBarItem"></i></a>
                <a href="/../rechercheEntreprise/index"><i onclick="bgChange(4)"
                        class="fa-solid fa-building-columns text-2xl py-2 px-3 hover:bg-gray-400 hover:text-white sBarItem"></i></a>
            </div>
        </div>
        <div class="hidden lg:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/index.php/accueil" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page" id="mobile-menu-item">Dashboard</a>

                <a href="/index.php/rechercheStage/index"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                    id="mobile-menu-item">Offre</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                    id="mobile-menu-item">Projects</a>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
    function mobileMenu() {
        var menu = document.getElementById("mobile-menu");
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");
        } else {
            menu.classList.add("hidden");
        }
    };

    function toggleMenu() {
        var menu = document.getElementById("user-menu");
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");
        } else {
            menu.classList.add("hidden");
        }
    };  
<?php echo '</script'; ?>
>

</header>


<?php }
}

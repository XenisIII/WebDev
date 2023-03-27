<?php
/* Smarty version 4.3.0, created on 2023-03-26 09:05:33
  from 'C:\Users\daval\Documents\CESI\Projet\WebDev-mvc\templates\accueilAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641feebd598f86_40081905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a617b872f25898ac992f76c015fdc534acf423dc' => 
    array (
      0 => 'C:\\Users\\daval\\Documents\\CESI\\Projet\\WebDev-mvc\\templates\\accueilAdmin.tpl',
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
function content_641feebd598f86_40081905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="flex flex-wrap justify-between max-w-screen-xl md:ml-24 md:mr-20 ml-16 mr-8 mt-12  ">
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer "
                onclick="gestion_etudiant()">
                <div
                    class="row-span-1 bg-[#67ace6] rounded-t-xl text-6xl  flex flex-col justify-center text-center content-center ">
                    <i class=" fa-solid fa-user-graduate "></i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl text-3xl flex flex-col justify-center text-center content-center">
                    <p>Gestion des étudiants</p>
                </div>
            </div>
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 w-full cursor-pointer "
                onclick="gestion_offre()">
                <div
                    class="row-span-1 bg-[#fe7171] rounded-t-xl text-6xl flex flex-col justify-center text-center content-center">
                    <i class="fa-solid fa-briefcase"> </i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl text-3xl flex flex-col justify-center text-center content-center">
                    <p>Gestion des offres</p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-between max-w-screen-xl md:ml-24 md:mr-20 ml-16 mr-8 md:mt-12 ">
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer "
                onclick="gestion_entreprise()">
                <div
                    class="row-span-1 bg-[#ffe86a] rounded-t-xl flex flex-col justify-center text-center content-center text-6xl">
                    <i class="fa-solid fa-building"></i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl flex flex-col justify-center text-center content-center text-3xl">
                    <p>Gestion des entreprises</p>
                </div>
            </div>
            <div class="w-full w-[70%] h-40 md:w-[40%] md:h-52 bg-gray-300 m-1 rounded-xl grid grid-rows-2 cursor-pointer "
                onclick="gestion_tuteur()">
                <div
                    class="row-span-1 bg-[#a4d272] rounded-t-xl flex flex-col justify-center text-center content-center text-6xl">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div
                    class="row-span-1 bg-[#fafafa] rounded-b-xl flex flex-col justify-center text-center content-center text-3xl">
                    <p>Gestion des tuteurs</p>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        function gestion_offre() {
            location.href = "https://cdn-s-www.lalsace.fr/images/8F3A8E1E-8090-4BD0-B342-6172A5AA616B/FB1200/photo-1630559945.jpg"
        }

        function gestion_entreprise() {
            location.href = "https://www.santevet.com/upload/admin/images/article/Chat%202/Monty/Monty%20chat.jpg"
        }

        function gestion_etudiant() {
            location.href = "https://cdn-s-www.lalsace.fr/images/8F3A8E1E-8090-4BD0-B342-6172A5AA616B/FB1200/photo-1630559945.jpg"
        }

        function gestion_tuteur() {
            location.href = "https://cdn-s-www.lalsace.fr/images/8F3A8E1E-8090-4BD0-B342-6172A5AA616B/FB1200/photo-1630559945.jpg"
        }
    <?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}

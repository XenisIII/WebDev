<?php
/* Smarty version 4.3.0, created on 2023-03-23 14:17:09
  from 'C:\Users\aphou\Desktop\CESI\Projet\WebDev-mvc\templates\accueilEtudiant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c5155af0353_98234191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ebd5ca63381f22dc02797690a68aa6072dbdfe' => 
    array (
      0 => 'C:\\Users\\aphou\\Desktop\\CESI\\Projet\\WebDev-mvc\\templates\\accueilEtudiant.tpl',
      1 => 1679566653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_641c5155af0353_98234191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div
        class="flex sm:flex-wrap sm:justify-between lg:mr-[7%] lg:ml-[10%] mt-5 md:ml-[10%] sm:mx-[3%] md:mr-[5%] lg:mt-6 flex-col sm:flex-row">
        <div class="rounded-md w-[90%] sm:w-[30%] h-[8rem] bg-white mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] border border-[#dfdfdf]">
            <div
                class="rounded-t-md h-1/2 bg-[#67ace6] text-2xl flex flex-col justify-center text-center content-center">
                <i class=" fa-solid fa-user-graduate "></i>
                <p class="text-base">Etudiant</p>
            </div>
            <div class="rounded-b-md flex h-1/2 divide-x py-2">
                <div
                    class="rounded-bl-md border-gray-300 w-1/2 bg-[#fafafa] flex flex-col justify-center text-center content-center">
                    <p>Candidatures</p>
                </div>
                <div
                    class="rounded-br-md border-gray-300 w-1/2 bg-[#fafafa] flex flex-col justify-center text-center content-center">
                    <select id="statut" class="rounded-full bg-white text-center mx-2 us" onchange="staut(this.id)">
                        <option class="bg-white" value="Recherche">Recherche</option>
                        <option class="bg-white" value="En attente">En attente</option>
                        <option class="bg-white" value="Validé">Validé</option>
                    </select>
                </div>


            </div>
        </div>
        <div class="rounded-md w-[90%] sm:w-[30%] h-[8rem]  bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] border border-[#dfdfdf]">
            <div
                class="rounded-t-md h-1/2 sm:h-1/2 md:h-1/2 lg:h-[45] bg-[#fe7171] text-2xl flex flex-col justify-center text-center content-center ">
                <i class="fa-solid fa-briefcase"></i>
                <p class="text-base">Stage</p>
            </div>
            <div
                class="rounded-b-md h-1/2 sm:h-1/2 md:h-1/2 lg:h-[45] bg-[#fafafa] flex flex-col justify-center text-center content-center">
                <p>Parcourir les offres</p>
            </div>
        </div>
        <div class="rounded-md w-[90%] sm:w-[30%] h-[8rem]  bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] flex ">
            <div class="rounded-l-md w-1/2  flex items-center pb-2 max-[270px]:-ml-6">
                <div class="lg:pl-6 md:pl-1 sm:pl-0 pl-7 ">
                    <canvas id="graph" width="100%" height="100%"
                        class="block chartjs-render-monitor md:h-[100px] md:w-[115px] "></canvas>
                </div>
            </div>
            <div class="rounded-r-md w-1/2 lg:pr-4 md:pr-2 pr-0 pt-2 max-[270px]:w-[60%] max-[270px]:pl-1 ">
                <p class="lg:text-[15px] md:text-[12px] sm:text-[11px] text-[14px]">Vous avez postulé à</p>
                <p class="lg:text-[14px] md:text-[11px] sm:text-[10px] text-[13px] pl-3"><strong
                        class="lg:text-[15px] md:text-[14px] sm:text-[12px] text-[14px]">120</strong> offres</p>
                <p class="lg:text-[15px] md:text-[12px] sm:text-[11px] text-[14px]">Vous avez</p>
                <p class="lg:text-[14px] md:text-[11px] sm:text-[10px] text-[13px] pl-3"><strong
                        class="lg:text-[15px] md:text-[14px] sm:text-[12px] text-[14px]">30</strong> en attente</p>
                <p class="lg:text-[14px] md:text-[11px] sm:text-[10px] text-[13px] pl-3"><strong
                        class="lg:text-[15px] md:text-[14px] sm:text-[12px] text-[14px]">90</strong> refus</p>
            </div>
        </div>
    </div>
    <div
        class="flex flex-col sm:flex-row sm:flex-wrap sm:justify-between lg:mr-[7%] lg:ml-[10%] mt-5 md:ml-[10%] md:mr-[5%] sm:mx-[3%] lg:mt-0">
        <div class=" w-[90%] sm:w-[40%] h-60 bg-gray-300 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
        <div class="h-12 bg-white border border-[#dfdfdf] flex items-center justify-center ">
        <h3 class="text-center">Dernières offres</h3>
    </div>
    <div class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf]">
        <ul class="list-disc ">
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        <li class="flex justify-between px-3 mb-3">Intitulé du stage <div class="px-5">Cathégorie</div></li>
        
        </ul>
    </div>
        </div>
        <div class=" w-[90%] sm:w-[50%] h-60 bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] max-[639px]:mt-40">
        <div class="h-12 bg-white border border-[#dfdfdf] flex items-center justify-center ">
            <h3 class="text-center">Candidatures en attente</h3>
            </div>
            <div class="overflow-y-scroll bg-white min-[880px]:max-h-[100%] h-80 border border-[#dfdfdf]">
                <ul class="list-disc ">
                    <li class="flex justify-between items-center px-3">Élève 1 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 2 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 3 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 4 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 5 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 6 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 7 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 8 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 9 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 10 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 11 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                    <li class="flex justify-between items-center px-3">Élève 12 <div class="rounded-full bg-red-200 px-5 my-1"> En recherche</div></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <!-----------------------------------------------graphe----------------------------------------->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"><?php echo '</script'; ?>
>
    <!---------------------------------------------------------------------------------------------->
</body>

</html>

<?php echo '<script'; ?>
>

    const graph = document.getElementById("graph").getContext("2d");

    let massPopChart = new Chart(graph, {
        type: "doughnut", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            datasets: [
                {
                    label: "Population en M ",
                    data: [90, 30],
                    // backgroundColor: "blue",
                    backgroundColor: [
                        "red",
                        "orange",
                    ],
                    hoverBorderWidth: 3,
                },
            ],
        },
    });

    var statut = document.getElementById('statut')
    switch (statut.value) {
        case 'Recherche':
            statut.classList.add('bg-red-400');
            break;
        case 'En attente':
            statut.classList.add('bg-orange-400');
            break;
        case 'Validé':
            statut.classList.add('bg-green-400');
            break;
    };


    function staut(id) {
        var stat = document.getElementById(id);
        var bg = document.getElementById('statut');
        switch (stat.value) {
            case 'Recherche':
                if (stat.classList.contains("bg-orange-400") || stat.classList.contains("bg-green-400")) {
                    stat.classList.remove("bg-orange-400")
                    stat.classList.remove("bg-green-400")
                }
                stat.classList.add("bg-red-400")
                break;
            case 'En attente':
                if (stat.classList.contains("bg-red-400") || stat.classList.contains("bg-green-400")) {
                    stat.classList.remove("bg-red-400")
                    stat.classList.remove("bg-green-400")
                }
                stat.classList.add("bg-orange-400")
                break;
            case 'Validé':
                if (stat.classList.contains("bg-orange-400") || stat.classList.contains("bg-red-400")) {
                    stat.classList.remove("bg-orange-400")
                    stat.classList.remove("bg-red-400")
                }
                stat.classList.add("bg-green-400")
                break;
        }
    }; 
<?php echo '</script'; ?>
><?php }
}

{include file="head.tpl"}
<body class="bg-[#f5f5f5]">
<div>
{include file="navbar.tpl"}
</div>
<!-- Box globale-->
<div class="bg-[#f5f5f5] flex justify-center min-[880px]:h-screen h-[100%]">
<div class="bg-white flex max-[880px]:flex-col max-[880px]:items-center max-[880px]:justify-start rounded-[12px] border border-[#dadada] mt-10 min-[880px]:h-5/6 w-11/12 ">
    <!-- Partie titre/entreprise -->
    <div class="min-[880px]:w-5/12 mx-5 my-5 flex flex-col justify-between ">
    <!-- Titre/compétence/durée-->
        <div>
            <!-- Titre -->
            <div class="mt-3 text-2xl flex items-center">
                <h3>{$nomOffre}</h3>{if !$isStudent}<i class="fa-solid fa-gear cursor-pointer" id="gear-nom" onclick="modify('prenom')" ></i>{/if}
            </div>
            <!-- Compétences-->
            <div class="max-[880px]:w-9/12 w-full">
                <ul class="flex flex-wrap my-5">
                    {foreach $Competences as $competence}
                        <li class="rounded-full bg-gray-200 px-5 mx-2 mt-2">{$competence->competence}</li>
                    {/foreach}
                </ul>
            </div>
            <!--durée-->
            <div class="my-2">
            <p class="text-xl">
                <i class="fa-solid fa-stopwatch"></i>
                 {$Duree} Mois
            </p>
            <p>
                Date de début : {$DateDebut}
            </p>
            <p>
                Date de mise en ligne  : {$DatePoste}
            </p>
            </div>
        </div>
        <!-- Entreprise -->
        <div class="border border-black rounded-[12px] min-w-fit w-7/12 min-[880px]:w-full bg-grey flex flex-col justify-evenly h-2/5 min-[880px]:h-1/5  mt-5 ">
            <div class="mx-2">
                <p class="text-3xl">
                <i class="fa-regular fa-building"></i>
                    {$NomEntreprise}
                </p>
            </div>
            <div class="ml-3">
                <i class="fa-regular fa-star" name="star1" id="star1"></i>
                <i class="fa-regular fa-star " name="star2" id="star2" ></i>
                <i class="fa-regular fa-star " name="star3" id="star3" ></i>
                <i class="fa-regular fa-star " name="star4" id="star4" ></i>
                <i class="fa-regular fa-star " name="star5" id="star5" ></i>
                
            </div>
            <div class="ml-2">
                <i class="fa fa-compassEntreprise fa-xl"></i>
                {$Localite}
            </div>
        </div>
        <!-- Bouton-->
        <div class="flex justify-between max-[880px]:hidden h-1/5 items-center">
            <button class="border border-black w-3/12 h-3/5 rounded hover:bg-slate-50 " onclick="window.location='/index.php/rechercheStage/index'">Retour</button>
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
            <p class="h-full p-2 min-[880px]:p-7  text-md ">{$info}</p>
            </div>
        <div class="flex justify-between min-[880px]:hidden h-3/5 items-center min-h-12 mt-3">
            <button class="border border-black w-3/12 h-3/5 min-w-fit min-h-fit rounded max-[880px]:h-ful hover:bg-slate-50 " onclick="window.location='/index.php/rechercheStage/index'">Retour</button>
            <button class="border border-black w-3/12 h-3/5 min-w-fit min-h-fit rounded max-[880px]:h-full hover:bg-slate-50">Postuler</button>
        </div>

    </div>
</div>
</div>
<script>
function star(etoile){
    switch(etoile){
        case 1:
            star1.setAttribute("class", "fa fa-star text-yellow-300");
            break;
        case 2:
            star1.setAttribute("class", "fa fa-star text-yellow-300");
            star2.setAttribute("class", "fa fa-star text-yellow-300");
            break;
        case 3:
            star1.setAttribute("class", "fa fa-star text-yellow-300");
            star2.setAttribute("class", "fa fa-star text-yellow-300");
            star3.setAttribute("class", "fa fa-star text-yellow-300");
            break;
        case 4:
            star1.setAttribute("class", "fa fa-star text-yellow-300");
            star2.setAttribute("class", "fa fa-star text-yellow-300");
            star3.setAttribute("class", "fa fa-star text-yellow-300");
            star4.setAttribute("class", "fa fa-star text-yellow-300");
            break;
        case 5:
            star1.setAttribute("class", "fa fa-star text-yellow-300");
            star2.setAttribute("class", "fa fa-star text-yellow-300");
            star3.setAttribute("class", "fa fa-star text-yellow-300");
            star4.setAttribute("class", "fa fa-star text-yellow-300");
            star5.setAttribute("class", "fa fa-star text-yellow-300");
            break;
    }
}
star({$NoteTuteur})
</script>
{include file="footer.tpl"}
</body>
</html>
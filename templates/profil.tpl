{include file="head.tpl"}
<body class="bg-[#f5f5f5] h-screen">
<div>
{include file="navbar.tpl"}
</div>
<!-- div globale-->
<div class="flex justify-center min-[880px]:h-screen">
<div class="bg-white flex flex-col max-[880px]:flex-col max-[880px]:items-center max-[880px]:justify-start rounded-[12px] border border-[#dadada] mt-10 min-[880px]:h-5/6 w-11/12 ">
<!-- div image et cv-->
    <div class="flex justify-between w-full mt-5">
        <!-- contact -->
        <div class="border rounded border-black h-fit ml-3" >
        <div class="flex items-center justify-between px-2" id="div-nom">
        <p id="p-nom">{$nom}</p>
        <input type="text" id="text-nom" class="hidden border" onfocusout="send('nom');"></input>
        {if !$isStudent}<i class="fa-solid fa-gear cursor-pointer" id="gear-nom" onclick="modify('nom')" ></i>{/if}
        </div>
        <div>
        <p id="p-prenom">{$prenom} </p>{if !$isStudent}<i class="fa-solid fa-gear cursor-pointer" id="gear-nom" onclick="modify('prenom')" ></i>{/if}
            <input type="text" id="text-prenom" class="hidden border" onfocusout="send('prenom');"></input>
        </div>
        <div> 
        <p id="p-mail">{$prenom}.{$nom}@viacesi.fr</p>{if !$isStudent}<i class="fa-solid fa-gear cursor-pointer" id="gear-nom" onclick="modify('mail')" ></i>{/if}
            <input type="text" id="text-mail" class="hidden border" onfocusout="send('mail');"></input>
        </div>

        </div>
        <!-- CV 
        <div class="mr-3">
            <h3>CV:</h3>
        </div>-->
        
    </div>
    <!-- wishList-->
    {if $isStudent}
    <div class="my-5 mx-5 border border-black h-full overflow-y-scroll max-h-[100%]">
        <div class="border-b border-black text-center text-2xl h-12">
        <h1>
            FAVORIS
        </h1>
        </div>
        <div>
        <div class="bg-white divide-y w-[90%] sm:w-[95%] h-[500px] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] lg:ml-[2%]">
        {foreach $AllOffer as $Offer}
        <div class="flex flex-row sm:flex-row sm:flex-wrap sm:justify-between 
        w-[90%] sm:w-[95%] h-16 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%] lg:ml-[2%]  ">
            <a href="/index.php/Offre/index?id={$Offer->id_offre}"><div class="flex flex-col grow">
                <div class=''>
                    <h2 class="mb-2 text-sm font-medium text-xl"> {$Offer->nom_offre} </h2>
                </div>
                <div class="invisible sm:visible">
                    <i class="fa fa-building"></i> {$Offer->nom_entreprise}
                    <i class="fa fa-location-dot"></i> {$Offer->localite}
                    <i class="fa fa-clock"></i> {$Offer->duree_stage} mois
                </div></a>
            </div>
            <div class="flex items-stretch self-center">
        <i class="fa fa-star  {if $Offer->confiance_pilote >=1}text-yellow-300{else}text-black{/if}" name="star1" id="star1"></i>
        <i class="fa fa-star {if $Offer->confiance_pilote >=2}text-yellow-300{else}text-black{/if}" name="star2" id="star2"></i>
        <i class="fa fa-star {if $Offer->confiance_pilote >=3}text-yellow-300{else}text-black{/if}" name="star3" id="star3"></i>
        <i class="fa fa-star  {if $Offer->confiance_pilote >=4}text-yellow-300{else}text-black{/if}" name="star4" id="star4"></i>
        <i class="fa fa-star  {if $Offer->confiance_pilote >=5}text-yellow-300{else}text-black{/if}" name="star5" id="star5"></i>
            </div>
            <div class="flex items-stretch self-center">
                <i id="heart" class="fa fa-heart m-8 text-red-500" onclick="heartv2()"></i>
            </div>
        </div>
    {/foreach}  
        
        </div>
        </div>
        
    

    </div>
    {/if}
</div>
{include file="footer.tpl"}
<script >
function modify(id){
   var obj_p=document.getElementById("p-"+id);
   txt=obj_p.textContent;
   obj_p.style.display="none";
   var textbox=document.getElementById("text-"+id);
    textbox.style.display="inline";
    textbox.focus();
    textbox.value=txt;
}
function send(id){
   var obj_t=document.getElementById("text-"+id);
   var obj_p=document.getElementById('p-'+id);
   txt=obj_t.value;
   obj_p.textContent=txt;
   obj_t.style.display='none';
   obj_p.style.display="block";
   document.location.href="/../index.php/profil/send?id={$id_profil}&"+id+"="+txt;


}
</script>

</body>
</html>
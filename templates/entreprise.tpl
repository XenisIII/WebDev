{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
        <div class="flex justify-center">
            <h1><b>Entreprise: </b>{$nomEntreprise->nom_entreprise}</h1>
        </div>
        <div class="max-[768px]:block mt-10 flex justify-between">
        <div class = "max-[768px]:block flex flex-col mt-10">
        <div class="flex max-[768px]:ml-6 max-[768px]:mt-6 max-[768px]:pl-0 ml-20">
            <p>Localisation:
                {foreach $localite as $row}
                    <div class="flex">
                        <span class="bg-gray-100 rounded-full px-3 ml-2 h-7">{$row->localite}</span>
                    </div>
                {/foreach}
            </p>
        </div>

        <div class="max-[768px]:ml-6 max-[768px]:pl-0 ml-20">
            <p> Note de l'entreprise: 
            <i class="fa fa-star {if $confPilote->confiance_pilote >=1}text-yellow-300{else}text-black{/if}" name="star1" id="star1"></i>
            <i class="fa fa-star {if $confPilote->confiance_pilote >=2}text-yellow-300{else}text-black{/if}" name="star2" id="star2"></i>
            <i class="fa fa-star {if $confPilote->confiance_pilote >=3}text-yellow-300{else}text-black{/if}" name="star3" id="star3"></i>
            <i class="fa fa-star  {if $confPilote->confiance_pilote >=4}text-yellow-300{else}text-black{/if}" name="star4" id="star4"></i>
            <i class="fa fa-star  {if $confPilote->confiance_pilote >=5}text-yellow-300{else}text-black{/if}" name="star5" id="star5"></i>
            </p>
        </div>
        </div>
        <img class="max-[860px]:hidden w-[250px] mx-10" alt="Image Entreprise" src="/../img/krita.png"></img>
        </div>
        <div>
            <h3 class="max-[768px]:ml-6 mt-6 text-xl ml-20"><b>Offres</b></h3>
        </div>
        <div class="max-[768px]:ml-0 ml-20">
        {foreach $offres as $row}
            <div class="flex flex-col rounded-md border max-[768px]:my-2 max-[768px]:mx-6 min-[768px]:w-1/3">
                <p><b>{$row->nom_offre}</b></br>
                Durée: {$row->duree_stage} mois</br>
                Rémunération: {$row->remuneration}€</br>
                Date de début: {$row->date_debut_stage}</br>
                Lieu du stage: {$row->localite}</p></br>
                Votre mission: </br>
                {$row->informations}</br>
            </div>
        {/foreach}        
        </div>
    </div>
    {include file="footer.tpl"}
</body>
</html>
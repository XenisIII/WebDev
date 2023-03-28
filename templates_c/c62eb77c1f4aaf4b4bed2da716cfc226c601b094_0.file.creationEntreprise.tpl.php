<?php
/* Smarty version 4.3.0, created on 2023-03-28 13:34:39
  from 'C:\Users\pc\Desktop\Prosit\A2\WEB\livrable\WebDev\WebDev-mvc\templates\creationEntreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422d0cf8095d6_69306905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62eb77c1f4aaf4b4bed2da716cfc226c601b094' => 
    array (
      0 => 'C:\\Users\\pc\\Desktop\\Prosit\\A2\\WEB\\livrable\\WebDev\\WebDev-mvc\\templates\\creationEntreprise.tpl',
      1 => 1680003277,
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
function content_6422d0cf8095d6_69306905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="flex w-[90%] bg-none mx-20 my-[2%] ">
            <div class="flex rounded-md w-[95%] bg-[#fefefe] h-5/6 flex-col content-center flex-wrap">
                <h3 class="text-base xs:text-xl mt-5 text-center content-center"> Création Entreprise </h3>
                <div class=" content-center  w-[95%] sm:w-[70%] lg:w-[50%] xl:w-[40%]">
                    <form name="creation_enteprise" action="CreationEntreprise/createEntreprise"
                        id="creation_entreprise" method="post" class="">
                        <label name="nom_entreprise" class="my-1"> Nom entreprise </label>
                        <input type="text" name="nom_entreprise" placeholder="Nom entreprise"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <label name="secteur_activite" class="my-1"> Secteur d'activité </label>
                        <input type="text" name="secteur_activite" placeholder="Secteur d'activité"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">







                        <!---->

                        <label name="CP" class="my-1" id="code_postal1"> Code Postal </label>
                        <input type="number" name="CP" placeholder="CP" id="code_postal"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">


                        <!---->

                        <label class="my-1" id="pVille"> Localité </label>
                                                <select id="villeSelect" class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">
                            <option value="">Ville</option>
                        </select>




                        <label name="nb_ancien_stagiaire" class="my-1"> Nombre d'anciens stagiaires venant de CESI
                        </label>
                        <input type="text" name="nb_ancien_stagiaire"
                            placeholder="Nombre d'anciens stagiaires venant de CESI"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">
                        <p class="my-1">Confiance du pilote</p>
                        <div class="">
                            <i class="fa fa-star cursor-pointer text-yellow-300" name="star1" id="star1"
                                onclick="star(1)"></i>
                            <i class="fa fa-star cursor-pointer text-black" name="star2" id="star2"
                                onclick="star(2)"></i>
                            <i class="fa fa-star cursor-pointer text-black" name="star3" id="star3"
                                onclick="star(3)"></i>
                            <i class="fa fa-star cursor-pointer text-black" name="star4" id="star4"
                                onclick="star(4)"></i>
                            <i class="fa fa-star cursor-pointer text-black" name="star5" id="star5"
                                onclick="star(5)"></i>
                        </div>
                        <input type="hidden" name="confiance" value="1" id="confiance"
                            class="w-[100%] border-solid border-gray-400 border rounded my-1 mb-3">

                        <div class="flex  justify-evenly mt-5">
                            <button type="reset" name="reset"
                                class="border border-solid border-gray-500 p-1  rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Annuler
                            </button>
                            <button type="submit" name="valider"
                                class="border border-solid border-gray-500 p-1 rounded-sm w-16 sm:w-20 bg-[#f0f0f0] cursor-pointer">
                                Valider
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

        <?php echo '<script'; ?>
>
            $(document).ready(function() {
                $("#code_postal").change(function() {
                    Auto($("#code_postal").val());
                })
            })

            function Auto(Cp) {
                $.ajax({
                        url: "https://apicarto.ign.fr/api/codes-postaux/communes/" + Cp,
                        method: "GET",
                        dataType: "json",
                    })
                    .done(function(response) {
                        let html = ""
                        for (i in response) {
                            /*console.log(response[i].nomCommune);*/
                            html += "<option value='" + response[i].nomCommune + "' selected>" + response[i].nomCommune + "</option>";
                        }
                        document.getElementById("villeSelect").innerHTML = html
                    })
            }

            let star_value;

            function star(etoile) {
                switch (etoile) {
                    case 5:
                        star5.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star4.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star3.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        break;
                    case 4:
                        star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star4.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star3.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        break;
                    case 3:
                        star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star4.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star3.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        break;
                    case 2:
                        star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star4.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star3.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star2.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        break;
                    case 1:
                        star5.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star4.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star3.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star2.setAttribute("class", "fa fa-star text-black cursor-pointer");
                        star1.setAttribute("class", "fa fa-star text-yellow-300 cursor-pointer");
                        break;

                };
                star_value = etoile;
                confiance.setAttribute("value", star_value);
            };
        <?php echo '</script'; ?>
>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}


<div
class="flex flex-col sm:flex-row sm:flex-wrap sm:justify-between lg:mr-[2%] lg:ml-[5%] mt-5 md:ml-[10%] md:mr-[5%] sm:mx-[3%] lg:mt-0">
<div
    class=" w-[90%] sm:w-[80%] h-[650px] bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] border-r-8 flex flex-col">
    <div class="bg-red-100 w-[90%] sm:w-[95%] h-28 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">1</div>
    <div class="bg-green-100 w-[90%] sm:w-[95%] h-[500px] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%]">2</div>
</div>
<div class=" w-[20%]  sm:w-[20%] h-[400px] bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%]">
    <div>
        <p>Trier par :</p>
        <input type="radio" value="Personnel">
        <label for="personnel">Personnel</label>
        <input type="radio" value="Professionel">
        <label for="professionel">Professionel</label>
    </div>
    <div>
        <label for="points">Distance(Entre 0 et 100 Km):</label>
        <input type="range" id="points" name="points" min="0" max="100" step="10"
            onchange="AfficheRange2(this.value)" onkeyup="AfficheRange2(this.value)">
        <span id="valBox">Valeur=4</span>
        <script>
            function AfficheRange2(newVal) {
                document.getElementById("valBox").innerHTML = "Valeur=" + newVal;
            }
        </script>
    </div>
    <div>
        <div>
            <input type="checkbox" id="scales" name="scales" checked>
            <label for="scales">Dates</label></br>
            <input type="checkbox" id="scales" name="scales" checked> 
            <label for="scales">Scales</label></br>
            <input type="checkbox" id="scales" name="scales" checked>
            <label for="scales">Scales</label></br>
            <input type="checkbox" id="scales" name="scales" checked>
            <label for="scales">Scales</label></br>
        </div>
    </div>



</div>
</div>
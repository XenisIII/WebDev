{include file="head.tpl"}

<body>
    <div>
        {include file="navbar.tpl"}
        <div
            class="flex flex-col sm:flex-row sm:flex-wrap sm:justify-between lg:mr-[2%] lg:ml-[5%] mt-5 md:ml-[10%] md:mr-[5%] sm:mx-[3%] lg:mt-0">
            <div
                class=" w-[90%] sm:w-[80%] h-[650px] bg-gray-300 mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%] border-r-8 flex flex-col">
                <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                    <form>
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Recherche ton avenir..." required>
                            <button type="submit"
                                class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
                <div class="bg-green-100 w-[90%] sm:w-[95%] h-[500px] mx-[5%] my-[2%] sm:mx-[0%] sm:my[0%]">
                    <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                        2
                    </div>
                    <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                        3
                    </div>
                    <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                        4
                    </div>
                    <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                        5
                    </div>
                    <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                        6
                    </div>
                    <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                        2
                    </div>
                    <div class="bg-red-100 w-[90%] sm:w-[95%] h-12 mx-[5%] mb-[2%] sm:mx-[0%] sm:my[0%] sm:mt-[2%]">
                        2
                    </div>
                </div>
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
        </div>

    </div>
</body>
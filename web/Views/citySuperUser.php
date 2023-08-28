<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link href="../../public/css/output.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../public/img/favicon.ico.png" type="image/x-icon">
    <title>Configurações de Cidades - INSPIRERN</title>
</head>
<body class="bg-gray-50 relative">
    <section id="header" class="bg-gray-100">
        <div class="container mx-auto">
            <div class="w-full p-3.5 flex justify-between items-center">
                <div>
                    <a href="/">INSPIRERN</a>
                </div>
                <div class="space-x-5">
                    <a href="/" class="text-blue-500 hover:underline">Inicio</a>
                    <a href="/controlPanel" class="text-blue-500 hover:underline">Voltar para painel do controle</a>
                    <button onclick="showDiv(formCity)" class="text-blue-500 hover:underline">Adicionar Cidades</button>
                </div>
                <div>
                    <input type="text" id="searchCity" placeholder="Pesquise uma Cidade" class="border rounded-md p-2">
                    <input type="button" value="Pesquisar" onclick="searchCity()" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-10">
    <div class="container mx-auto pt-10">
        <?php foreach ($cities as $city): ?>
            <div id="<?= $city['cid_nome'] ?>" class="city p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200 flex items-center" data-city="<?= $city['cid_nome'] ?>" data-clima="<?= $city['cid_clima'] ?>" data-populacao="<?= $city['cid_populacao'] ?>" data-descricao="<?= $city['cid_descricao'] ?>">
                <div onclick="showDiv(formUpdateCity)">
                    <h2 class="font-semibold"><?= $city['cid_nome'] ?></h2>
                    <p><?= substr($city['cid_descricao'], 0, 400) . '...' ?></p>
                </div>
                <div class="space-y-5">
                    <button class="p-2" onclick="showDiv(formUpdateCity)"><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                    <button class="p-2" onclick="showDiv(deleteCity)"><span class="pr-2"><ion-icon name="trash-outline"></ion-icon></span></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </section>
    
    <section id="formCity" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">
        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
            <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                <h2 class="text-gray-950 text-xl font-medium py-1">Casdastro de Cidade</h2>
                <form action="/cityRegister" method="POST" class="flex flex-col space-y-3 mt-2">
                    <input type="text" name="name" id="name" placeholder="Nome" class="border rounded-md p-2">
                    <input type="text" name="population" id="population" placeholder="População" class="border rounded-md p-2">
                    <textarea name="weather" id="weather" placeholder="Clima"  rows="4" cols="50" class="border rounded-md p-2"></textarea>
                    <textarea id="drescripition" name="drescripition" placeholder="Descrição" rows="8" cols="50" class="border rounded-md p-2"></textarea>
                    <div class="py-2">
                        <button type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Salvar Alterações</button>
                        <a href="" type="button" onclick="showDiv(formCity)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="formUpdateCity" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">
        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
            <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                <h2 id="h22" class="text-gray-950 text-xl font-medium py-1">Atualizações de Cidade</h2>
                <form action="/cityUpdate" method="POST" class="flex flex-col space-y-2 mt-2">
                    <input type="hidden" name="originalCityName" id="originalCityName">
                    <label for="nameCity">Nome</label>
                    <input type="text" name="nameCity" id="nameCity" class="border rounded-md p-2">
                    <label for="populationCity">População</label>
                    <input type="text" name="populationCity" id="populationCity" placeholder="População" class="border rounded-md p-2">
                    <label for="weatherCity">Clima</label>
                    <textarea name="weatherCity" id="weatherCity" placeholder="Clima"  rows="4" cols="50" class="border rounded-md p-2"></textarea>
                    <label for="drescripitionCity">Descrição</label>
                    <textarea id="drescripitionCity" name="drescripitionCity" placeholder="Descrição" rows="8" cols="50" class="border rounded-md p-2"></textarea>
                    <div class="py-2">
                        <button type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Salvar Alterações</button>
                        <a href="" type="button" onclick="showDiv(formUpdateCity)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <section id="deleteCity" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">
        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
        <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                <h2 class="text-gray-950 text-xl font-medium py-1">Excluir Cidade</h2>
                <p>Tem certeza de que deseja excluir essa cidade? Essa ação não pode ser desfeita e as cidades são elementos fundamentais para o funcionamento do site. Caso queira confirme o nome da cidade</p>
                <form action="/cityDelete" method="POST">
                    <input type="text" name="nameCity" id="nameCity" placeholder="Nome da cidade" class="border rounded-md p-2 w-96">
                    <button type="submit" class="p-2 my-4 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-red-500 text-gray-50">Excluir</button>
                    <a href="" onclick="showDiv(deleteCity)" class="p-2 border rounded-md border-transparent bg-gray-200 text-red-500">Cancelar</a>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-gray-50 pt-36">
        <div class="bg-gray-700 p-8">
            <div class="container mx-auto text-gray-50 flex justify-between">
                    <div>
                        <h1 class="text-xl">INSPIRERN</h1>
                    </div>
                    <div class="flex space-x-2">
                        <p>SIGA</p>
                        <span class="text-xl"><ion-icon name="logo-facebook"></ion-icon></span>
                        <span class="text-xl"><ion-icon name="logo-instagram"></ion-icon></span>
                        <span class="text-xl"><ion-icon name="logo-tiktok"></ion-icon></span>
                        <span class="text-xl"><ion-icon name="logo-youtube"></ion-icon></span>
                    </div>
            </div>
        </div>
        <div class="bg-gray-800 p-8">
            <div class="container mx-auto text-gray-50 flex space-x-28">
                <div class="flex flex-col gap-1">
                    <h5 class="mb-2 font-bold">Sobre a Empresa</h5>
                    <a href="">Atendimento ao Cliente</a>
                    <a href="">Termos de Uso</a>
                    <a href="">Políticas de Privacidade</a>
                    <a href="">Blog do ViajaNet</a>
                    <a href="">Black Friday</a>
                </div>
                <div class="flex flex-col gap-1">
                    <h5 class="mb-2 font-bold">ViajaNet: Agência de Viagens Online</h5>
                    <a href="">Passagens Aéreas Internacionais</a>
                    <a href="">Passagem para São Paulo</a>
                    <a href="">Passagem para Salvador</a>
                    <a href="">Passagem para Recife</a>
                    <a href="">Passagem para Bahia</a>
                    <a href="">Passagem para Fortaleza</a>
                    <a href="">Passagem para Maceió</a>
                </div>
                <div class="flex flex-col gap-1">
                    <h5 class="mb-2 font-bold">Companhias Aéreas Internacionais</h5>
                    <a href="">Tap Air Portugal</a>
                    <a href="">Copa Airlines</a>
                    <a href="">Aerolíneas Argentinas</a>
                    <a href="">Air France</a>
                    <a href="">Iberia</a>
                </div>
                <div class="flex flex-col gap-1">
                    <h5 class="mb-2 font-bold">Companhias Aéreas Nacionais</h5>
                    <a href="">Azul</a>
                    <a href="">VoeGol</a>
                    <a href="">Latam</a>
                    <a href="">Tam</a>
                    <a href="">Iberia</a>
                    <a href="">VoePass</a>
                    <a href="">Tam</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function removeAccentsAndToLower(string) {

            const accentedChars = 'ÀÁÂÃàáâãÈÉÊèéêÌÍÎìíîÒÓÔÕòóôõÙÚÛùúû';
            const unaccentedChars = 'AAAAaaaaEEEeeeIIIiiiOOOOooooUUUuuu';

            const cleanString = string
                .split('')
                .map(char => {
                    const index = accentedChars.indexOf(char);
                    return index !== -1 ? unaccentedChars[index] : char;
                })
                .join('');

            return cleanString.toLowerCase();
        }

        function searchCity() {

            const searchInput = document.getElementById('searchCity').value;
            const cleanedSearchInput = removeAccentsAndToLower(searchInput);
            const cities = document.querySelectorAll('.city');

            cities.forEach(city => {
                const cityName = city.id;
                const cleanedCityName = removeAccentsAndToLower(cityName);
                if (cleanedCityName.includes(cleanedSearchInput)) {
                    city.style.display = 'block';
                } else {
                    city.style.display = 'none';
                }
            });
        }

        document.getElementById('searchCity').addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                searchCity();
            }
        });
    
</script>

<script>
    const deleteCity = document.querySelector('#deleteCity');
    const formUpdateCity = document.querySelector('#formUpdateCity');
    const formCity = document.querySelector('#formCity');

    let divs = [formCity, formUpdateCity, deleteCity];

    function showDiv(nameDiv)
    {
        divs.forEach(
            function(div, indice) 
            {
                if(div !== nameDiv && !div.classList.contains('hidden')) {
                    div.classList.add('hidden');
                }
            });

            if(nameDiv.classList.contains('hidden')) {
                nameDiv.classList.remove('hidden');
            }
    }
</script>
<script>
    const cityDivs = document.querySelectorAll('.city');

    cityDivs.forEach(cityDiv => {
        cityDiv.addEventListener('click', function() {
            const cityName = cityDiv.getAttribute('data-city');
            const clima = cityDiv.getAttribute('data-clima');
            const populacao = cityDiv.getAttribute('data-populacao');
            const descricao = cityDiv.getAttribute('data-descricao');
            const nameCity = document.querySelector('#nameCity');
            const populationCity = document.querySelector('#populationCity');
            const weatherCity = document.querySelector('#weatherCity');
            const drescripitionCity = document.querySelector('#drescripitionCity');
            const originalCityName = document.querySelector('#originalCityName');

            originalCityName.value = cityName;
            nameCity.value = cityName;
            populationCity.value = populacao;
            weatherCity.value = clima;
            drescripitionCity.value = descricao;

           
        });
    });
</script>
</body>
</html>
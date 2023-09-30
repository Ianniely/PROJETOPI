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
    <title>Configurações de Pontos Turísticos - INSPIRERN</title>
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
                    <button onclick="showDiv(formSight)" class="text-blue-500 hover:underline">Adicionar Ponto Turístico</button>
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
        <?php foreach ($sights as $sight): ?>
            <div id="<?= $sight['pot_nome'] ?>" class="sight p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200 flex items-center" data-sight="<?= $sight['pot_nome'] ?>" data-accessibility="<?= $sight['pot_acessibilidade'] ?>" data-classification="<?= $sight['pot_classificacao'] ?>" data-drescripition="<?= $sight['pot_descricao'] ?>" data-stret="<?= $sight['pot_rua'] ?>" data-neighborhood="<?= $sight['pot_bairro'] ?>" data-city="<?= $sight['pot_cid_codigo'] ?>">
                <div onclick="showDiv(formUpdateSight)">
                    <h2 class="font-semibold"><?= $sight['pot_nome'] ?></h2>
                    <p><?= substr($sight['pot_descricao'], 0, 400) . '...' ?></p>
                </div>
                <div class="space-y-5">
                    <button class="p-2" onclick="showDiv(formUpdateSight)"><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                    <button class="p-2" onclick="showDiv(deleteCity)"><span class="pr-2"><ion-icon name="trash-outline"></ion-icon></span></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </section>
    
    <section id="formSight" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">
        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
            <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                <h2 class="text-gray-950 text-xl font-medium py-1">Casdastro de Ponto Turístico</h2>
                <form action="/sightRegister" method="POST"  class="flex flex-col space-y-3 mt-2">
                    <input type="text" name="name" id="name" placeholder="Nome" class="border rounded-md p-2">
                    <input type="text" name="stret" id="stret" placeholder="Rua" class="border rounded-md p-2">
                    <div class="flex space-x-3">
                        <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro" class="border rounded-md p-2 w-full">
                        <input type="text" name="city" id="city" placeholder="Cidade" class="border rounded-md p-2 w-full">
                    </div>
                    <div class="flex space-x-6">
                        <div>
                            <label for="accessibility">Acessibilidade:</label>
                            <select id="accessibility" name="accessibility" class="p-1 border rounded-md">
                                <option value="disponivel">Disponível</option>
                                <option value="indisponivel">Indisponível</option>
                            </select>
                        </div>

                        <div>
                            <label for="classification">Classificação</label>
                            <select id="classification" name="classification" class="p-1 border rounded-md">
                                <option value="1 estrelha">1 estrelha</option>
                                <option value="2 estrelas">2 estrelas</option>
                                <option value="3 estrelas">3 estrelas</option>
                                <option value="4 estrelas">4 estrelas</option>
                                <option value="5 estrelas">5 estrelas</option>
                            </select>
                        </div>
                    </div>
                    <textarea id="drescripition" name="drescripition" placeholder="Descrição" rows="8" cols="50" class="border rounded-md p-2"></textarea>
                    <div class="py-2">
                        <button type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Salvar Alterações</button>
                        <a href="" type="button" onclick="showDiv(formSight)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="formUpdateSight" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">
        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
            <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                <h2 id="h22" class="text-gray-950 text-xl font-medium py-1">Atualizações de Cidade</h2>
                <form action="/sightUpdate" method="POST" class="flex flex-col space-y-2 mt-2">
                    <input type="text" name="originalSightName" id="originalSightName" class="hidden">
                    <input type="text" name="nameSight" id="nameSight" class="border rounded-md p-2">
                    <input type="text" name="stretSight" id="stretSight" class="border rounded-md p-2">
                    <div class="flex space-x-3">
                        <input type="text" name="neighborhoodSight" id="neighborhoodSight" class="border rounded-md p-2 w-full">
                        <input type="text" name="citySight" id="citySight" class="border rounded-md p-2 w-full">
                    </div>
                    <div class="flex space-x-6">
                        <div>
                            <label for="accessibilitySight">Acessibilidade:</label>
                            <select id="accessibilitySight" name="accessibilitySight" class="p-1 border rounded-md">
                                <option value="disponivel">Disponível</option>
                                <option value="indisponivel">Indisponível</option>
                            </select>
                        </div>

                        <div>
                            <label for="classificationSight">Classificação</label>
                            <select id="classificationSight" name="classificationSight" class="p-1 border rounded-md">
                                <option value="1 estrelha">1 estrelha</option>
                                <option value="2 estrelas">2 estrelas</option>
                                <option value="3 estrelas">3 estrelas</option>
                                <option value="4 estrelas">4 estrelas</option>
                                <option value="5 estrelas">5 estrelas</option>
                            </select>
                        </div>
                    </div>
                    <textarea id="drescripitionSight" name="drescripitionSight" rows="8" cols="50" class="border rounded-md p-2"></textarea>
                    <div class="py-2">
                        <button type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Salvar Alterações</button>
                        <a href="" type="button" onclick="showDiv(formUpdateSight)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <section id="deleteCity" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">
        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
        <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                <h2 class="text-gray-950 text-xl font-medium py-1">Excluir Ponto</h2>
                <p>Tem certeza de que deseja excluir esse ponto? Essa ação não pode ser desfeita e os pontos são elementos fundamentais para o funcionamento do site. Caso queira confirme o nome do ponto</p>
                <form action="/sightDelete" method="POST">
                    <input type="text" name="nameSight" id="nameSight" placeholder="Nome da Ponto Turístico" class="border rounded-md p-2 w-96">
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
            const cities = document.querySelectorAll('.sight');

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
    const formUpdateSight = document.querySelector('#formUpdateSight');
    const formSight = document.querySelector('#formSight');

    let divs = [formSight, formUpdateSight, deleteCity];

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
    const sightDivs = document.querySelectorAll('.sight');

    sightDivs.forEach(sightDiv => {
        sightDiv .addEventListener('click', function() {
            const sightName = sightDiv.getAttribute('data-sight');
            const accessibility = sightDiv.getAttribute('data-accessibility');
            const classification = sightDiv.getAttribute('data-classification');
            const drescripition = sightDiv.getAttribute('data-drescripition');
            const stret = sightDiv.getAttribute('data-stret');
            const neighborhood = sightDiv.getAttribute('data-neighborhood');
            const city = sightDiv.getAttribute('data-city');
            const name = document.querySelector('#nameSight');
            const accessibilityInput = document.querySelector('#accessibilitySight');
            const classificationInput = document.querySelector('#classificationSight');
            const drescripitionInput = document.querySelector('#drescripitionSight');
            const stretInput = document.querySelector('#stretSight');
            const neighborhoodInput = document.querySelector('#neighborhoodSight');
            const originalSightName = document.querySelector('#originalSightName');
            const citySight = document.querySelector('#citySight');

            originalSightName.value = sightName;
            name.value = sightName;
            accessibilityInput.value = accessibility;
            classificationInput.value = classification;
            drescripitionInput.value = drescripition;
            stretInput.value = stret;
            neighborhoodInput.value = neighborhood;
            citySight.value = city;

           
        });
    });
</script>
</body>
</html>
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
    <title>Configurações de Hospedagens - INSPIRERN</title>
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
                    <button onclick="showDiv(formaccommodatione)" class="text-blue-500 hover:underline">Adicionar Hospedagens</button>
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
        <?php foreach ($accommodations as $accommodation): ?>
            <div id="<?= $accommodation['hos_nome'] ?>" class="accommodation p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200 flex items-center" 
            data-accommodation="<?= $accommodation['hos_nome'] ?>" 
            data-neighborhood="<?= $accommodation['hos_bairro'] ?>"
            data-street="<?= $accommodation['hos_rua'] ?>" 
            data-streetNumber="<?= $accommodation['hos_numero'] ?>" 
            data-phoneNumber="<?= $accommodation['hos_telefone'] ?>" 
            data-email="<?= $accommodation['hos_email'] ?>" 
            data-cost="<?= $accommodation['hos_valor'] ?>" 
            data-accessibility="<?= $accommodation['hos_acessibilidade'] ?>" 
            data-classification="<?= $accommodation['hos_classificacao'] ?>"
            data-drescripition="<?= $accommodation['hos_descricao'] ?>" 
            data-city="<?= $accommodation['hos_cid_codigo'] ?>">

                <div onclick="showDiv(formUpdateaccommodation)">
                    <h2 class="font-semibold"><?= $accommodation['hos_nome'] ?></h2>
                    <p><?= substr($accommodation['hos_descricao'], 0, 400) . '...' ?></p>
                </div>
                <div class="space-y-5">
                    <button class="p-2" onclick="showDiv(formUpdateaccommodation)"><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                    <button class="p-2" onclick="showDiv(deleteaccommodation)"><span class="pr-2"><ion-icon name="trash-outline"></ion-icon></span></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </section>
    
    <section id="formaccommodatione" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">

        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">

            <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">

                <form id="etapa1" action="/accommodationsRegister" method="POST">

                    <div id="formaccommodationeEtapa1">

                        <h2 class="text-gray-950 text-xl font-medium py-1 mb-2">Casdastro de Hospedagem Etapa 1/2</h2>

                        <div class="flex flex-col space-y-3 mt-4">

                            <input type="text" name="name" id="name" placeholder="Nome da Hospedagem" class="border rounded-md p-2">

                            <label>Localização da Hospedagem</label>
                            <div class="flex space-x-3">
                                <input type="text" name="city" id="city" placeholder="Cidade" class="border rounded-md p-2 w-full">
                                <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro" class="border rounded-md p-2 w-full">
                            </div>

                            <div class="flex space-x-3">
                                <input type="text" name="street" id="street" placeholder="Rua" class="border rounded-md p-2 w-full">
                                <input type="number" name="streetNumber" id="streetNumber" placeholder="Número" class="border rounded-md p-2 w-full">
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

                            <div class="py-2">
                                <a id="etapa1Button" href="" type="button" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Proximo</a>
                                <a href="" type="button" onclick="showDiv(formaccommodationeEtapa1)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                            </div>

                        </div>

                    </div>

                    <div id="formaccommodationeEtapa2" class="hidden">

                        <h2 class="text-gray-950 text-xl font-medium py-1 mb-2">Casdastro de Hospedagem Etapa 2/2</h2>

                        <div class="flex flex-col space-y-3 mt-4">

                            <div class="flex space-x-3">
                                <input type="text" name="cost" id="cost" placeholder="Valor médio" class="border rounded-md p-2 w-1/2"> 
                                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Telefone para contato" class="border rounded-md p-2 w-1/2">
                            </div>

                            <input type="email" name="email" id="email" placeholder="Email para contato" class="border rounded-md p-2 w-full">

                            <textarea id="drescripition" name="drescripition" placeholder="Descrição" rows="8" cols="50" class="border rounded-md p-2 w-full"></textarea>

                            <div class="py-2">
                                <button id="etapa2ButtonSubmit" type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Enviar</button>
                                <a id="etapa2Button" href="" type="button" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-blue-500">Voltar</a>
                                <a href="" type="button" onclick="showDiv(formaccommodationeEtapa2)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>

    <section id="formUpdateaccommodation" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">

        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">

            <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">

                <form id="etapa1" action="/accommodationsUpdate" method="POST">

                    <div id="formaccommodationeEtapa1up">

                        <h2 class="text-gray-950 text-xl font-medium py-1 mb-2">Atualização da Hospedagem Etapa 1/2</h2>

                        <div class="flex flex-col space-y-3 mt-4">

                            <input type="text" name="originalaccommodationName" id="originalaccommodationName" class="hidden">
                            <input type="text" name="newName" id="newName" class="border rounded-md p-2">

                            <label>Localização da Hospedagem</label>
                            <div class="flex space-x-3">
                                <input type="text" name="newCity" id="newCity" placeholder="Cidade" class="border rounded-md p-2 w-full">
                                <input type="text" name="newNeighborhood" id="newNeighborhood" placeholder="Bairro" class="border rounded-md p-2 w-full">
                            </div>

                            <div class="flex space-x-3">
                                <input type="text" name="newStreet" id="newStreet" placeholder="Rua" class="border rounded-md p-2 w-full">
                                <input type="number" name="newStreetNumber" id="newStreetNumber" placeholder="Número" class="border rounded-md p-2 w-full">
                            </div>

                            <div class="flex space-x-6">

                                <div>
                                    <label for="newAccessibility">Acessibilidade:</label>
                                    <select id="newAccessibility" name="newAccessibility" class="p-1 border rounded-md">
                                        <option value="disponivel">Disponível</option>
                                        <option value="indisponivel">Indisponível</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="newClassification">Classificação</label>
                                    <select id="newClassification" name="newClassification" class="p-1 border rounded-md">
                                        <option value="1 estrelha">1 estrelha</option>
                                        <option value="2 estrelas">2 estrelas</option>
                                        <option value="3 estrelas">3 estrelas</option>
                                        <option value="4 estrelas">4 estrelas</option>
                                        <option value="5 estrelas">5 estrelas</option>
                                    </select>
                                </div>

                            </div>

                            <div class="py-2">
                                <a id="etapa1ButtonCadastro" href="" type="button" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Proximo</a>
                                <a href="" type="button" onclick="showDiv(formaccommodationeEtapa1)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                            </div>

                        </div>

                    </div>

                    <div id="formaccommodationeEtapa2up" class="hidden">

                        <h2 class="text-gray-950 text-xl font-medium py-1 mb-2">Atualizações da Hospedagem Etapa 2/2</h2>

                        <div class="flex flex-col space-y-3 mt-4">

                            <div class="flex space-x-3">
                                <input type="text" name="Newcost" id="Newcost" placeholder="Valor médio" class="border rounded-md p-2 w-1/2"> 
                                <input type="text" name="NewphoneNumber" id="NewphoneNumber" placeholder="Telefone para contato" class="border rounded-md p-2 w-1/2">
                            </div>

                            <input type="email" name="Newemail" id="Newemail" placeholder="Email para contato" class="border rounded-md p-2 w-full">
                            
                            <textarea id="newDrescripition" name="newDrescripition" placeholder="Descrição" rows="8" cols="50" class="border rounded-md p-2 w-full"></textarea>

                            <div class="py-2">
                                <button id="etapa2ButtonSubmit" type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Enviar</button>
                                <a id="etapa2ButtonCadastro" href="" type="button" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-blue-500">Voltar</a>
                                <a href="" type="button" onclick="showDiv(formaccommodationeEtapa2)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>
    
    <section id="deleteaccommodation" class="hidden z-40 fixed w-screen h-screen backdrop-blur-sm top-0 left-0">

        <div class="bg-black-gd w-screen h-screen flex items-center justify-center">

        <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">

                <h2 class="text-gray-950 text-xl font-medium py-1">Excluir Hospedagem</h2>

                <p>Tem certeza de que deseja excluir esse accommodatione? Essa ação não pode ser desfeita e os accommodatione são elementos fundamentais para o funcionamento do site. Caso queira confirme o nome do accommodatione</p>

                <form action="/accommodationsDelete" method="POST">

                    <input type="text" name="nameAccommodation" id="nameAccommodation" placeholder="Nome do accommodatione" class="border rounded-md p-2 w-96">
                    <button type="submit" class="p-2 my-4 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-red-500 text-gray-50">Excluir</button>
                    <a href="" onclick="showDiv(deleteaccommodation)" class="p-2 border rounded-md border-transparent bg-gray-200 text-red-500">Cancelar</a>
                
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
            const cities = document.querySelectorAll('.accommodation');

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
    const deleteaccommodation = document.querySelector('#deleteaccommodation');
    const formUpdateaccommodation = document.querySelector('#formUpdateaccommodation');
    const formaccommodatione = document.querySelector('#formaccommodatione');
    const etapa1 = document.querySelector('#formaccommodationeEtapa1');
    const etapa2 = document.querySelector('#formaccommodationeEtapa2');

    let divs = [formUpdateaccommodation, deleteaccommodation, formaccommodatione];

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

    const etapa1Button = document.getElementById('etapa1Button');
    const etapa2Button = document.getElementById('etapa2Button');

    etapa1Button.addEventListener('click', function (e) {
        e.preventDefault();
        etapa1.classList.add('hidden');
        etapa2.classList.remove('hidden');
    });

    etapa2Button.addEventListener('click', function (e) {
        e.preventDefault();
        etapa2.classList.add('hidden');
        etapa1.classList.remove('hidden');
    });

    const etapa1ButtonCadastro = document.getElementById('etapa1ButtonCadastro');
    const etapa2ButtonCadastro = document.getElementById('etapa2ButtonCadastro');
    const etapa1Cadastro = document.querySelector('#formaccommodationeEtapa1up');
    const etapa2Cadastro = document.querySelector('#formaccommodationeEtapa2up');

    etapa1ButtonCadastro.addEventListener('click', function (e) {
        e.preventDefault();
        etapa1Cadastro.classList.add('hidden');
        etapa2Cadastro.classList.remove('hidden');
    });

    etapa2ButtonCadastro.addEventListener('click', function (e) {
        e.preventDefault();
        etapa2Cadastro.classList.add('hidden');
        etapa1Cadastro.classList.remove('hidden');
    });

</script>
<script>
    const accommodationDivs = document.querySelectorAll('.accommodation');
    accommodationDivs.forEach(cityDiv => {
    cityDiv.addEventListener('click', function() {
        const accommodationName = cityDiv.getAttribute('data-accommodation');
        const neighborhood = cityDiv.getAttribute('data-neighborhood');
        const street = cityDiv.getAttribute('data-street');
        const streetNumber = cityDiv.getAttribute('data-streetNumber');
        const cost = cityDiv.getAttribute('data-cost');
        const phoneNumber = cityDiv.getAttribute('data-phoneNumber');
        const email = cityDiv.getAttribute('data-email');
        const classification = cityDiv.getAttribute('data-classification');
        const accessibility = cityDiv.getAttribute('data-accessibility');
        const drescripition = cityDiv.getAttribute('data-drescripition');
        const city = cityDiv.getAttribute('data-city');
        
        const nameInput = formUpdateaccommodation.querySelector('#newName');
        const neighborhoodInput = formUpdateaccommodation.querySelector('#newNeighborhood');
        const streetInput = formUpdateaccommodation.querySelector('#newStreet');
        const streetNumbeInput = formUpdateaccommodation.querySelector('#newStreetNumber');
        const costInput = formUpdateaccommodation.querySelector('#Newcost');
        const phoneNumberInput = formUpdateaccommodation.querySelector('#NewphoneNumber');
        const emailInput = formUpdateaccommodation.querySelector('#Newemail');
        const classificationInput = formUpdateaccommodation.querySelector('#newClassification');
        const accessibilityInput = formUpdateaccommodation.querySelector('#newAccessibility');
        const drescripitionInput = formUpdateaccommodation.querySelector('#newDrescripition');
        const cityInput = formUpdateaccommodation.querySelector('#newCity');
        const originalaccommodationName = formUpdateaccommodation.querySelector('#originalaccommodationName');

        nameInput.value = accommodationName;
        neighborhoodInput.value = neighborhood;
        streetInput.value = street;
        streetNumbeInput.value = streetNumber;
        costInput.value = cost;
        phoneNumberInput.value = phoneNumber;
        emailInput.value = email;
        classificationInput.value = classification;
        accessibilityInput.value = accessibility; 
        drescripitionInput.value = drescripition;
        cityInput.value = city;
        originalaccommodationName.value = accommodationName;
    });
});
</script>
</body>
</html>
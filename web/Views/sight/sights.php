<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="../../public/css/output.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../public/img/favicon.ico.png" type="image/x-icon">
    <title>Pontos Turísticos - INSPIRERN</title>
</head>
<body>

    <!--header-->

    <section class="carousel bg-[url('../img/foto_ponto_menu_1.jpg')] bg-no-repeat bg-bottom bg-cover bg-fixed">
        <div class="bg-black-gd">
          <header class="container mx-auto text-white">
                <nav class="lg:flex lg:justify-between lg:items-center h-24 text-lg">
                    <div class="flex justify-between items-center">
                        <a href="/">INSPIRERN</a>
                        <span class="text-3xl cursor-pointer lg:hidden block"><ion-icon name="menu" onclick="Menu(this)"></ion-icon></span>
                        <span class="hidden"><ion-icon name="close"></ion-icon></span>
                    </div>
                    <ul class="space-x-5 lg:flex z-[1] lg:z-auto lg:static absolute bg-gray-200 text-gray-700 lg:text-white xl:text-white lg:bg-transparent w-full left-0 lg:w-auto lg:opacity-100 opacity-0">
                        <li><a href="/">Início</a></li>
                        <li><a href="/sights">Pontos Turísticos</a></li>
                        <li><a href="/city">Cidades</a></li>
                        <li><a href="/pages">Eventos</a></li>
                        <li><a href="/accommodations">Hospedagens</a></li>
                        <li><a href="/restaurants">Restaurantes</a></li>
                        <li><a href="/pages">Roteiros</a></li>
                        <li class="relative group">
                            <a href="">Configurações</a>
                            <div class="w-36 p-1 rounded-md absolute bg-gray-200 top-full hidden text-gray-700">
                                <ul>
                                    <li class="hover:bg-gray-50 px-5 py-1.5 border rounded-md"><a href="/pages">Temas</a></li>
                                    <li class="hover:bg-gray-50 px-5 py-1.5 border rounded-md"><a href="/pages">Favorito</a></li>
                                    <li class="hover:bg-gray-50 px-5 py-1.5 border rounded-md"><a href="/pages">Editar Perfil</a></li>
                                    <li class="hover:bg-gray-50 px-5 py-1.5 border rounded-md"><a href="/pages">Ajuda</a></li>
                                    <li class="hover:bg-gray-50 px-5 py-1.5 border rounded-md"><a href="/pages">Privacidade</a></li>
                                    <li class="hover:bg-gray-50 px-5 py-1.5 border rounded-md"><a href="/logout">Sair</a></li>
                                </ul>
                            </div>
                        </li>
                        <?php 
                            if(!empty($userName)) {
                                echo "<li><a href='/controlPanel'>$userName</a></li>";
                            } else {
                                echo '<li><a href="/login">Login <span><ion-icon name="person-outline"></ion-icon></span></a></li>';
                            }
                        ?>
                    </ul>
                </nav>
                <div class="mt-12">
                    <h1 class="text-7xl mt-28 mb-7">Pontos Turísticos</h1>
                    <div>
                    <p class="text-lg pb-40 ">Explore as maravilhas naturais e culturais do Rio Grande do Norte.<br>Descubra praias deslumbrantes, locais históricos e experiências inesquecíveis que essa região tem a oferecer.</p>
                    </div>
                </div>
            </header>
        </div>
    </section>

    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-10">
            <h1 class="text-5xl mt-10 pb-12">Pontos Recomendados para Você</h1>
        <div class="flex items-center space-x-5">
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/ponto-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Morro do Careca</p>
            </div>
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/ponto-rn-1.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Praia das Tartarugas</p>
            </div>
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/ponto-rn-2.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Cachoeira da Serra</p>
            </div>
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/ponto-rn-3.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Praia de Genipabu</p>
            </div>
        </div>
    </div>
    </section>

    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-10">
            <h1 class="text-5xl mt-10 pb-12">Pontos mais Avaliados</h1>
        <div class="flex items-center space-x-5">
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/Riodofogo-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Cachoeira da Serra</p>
            </div>
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/macau-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Praia de Genipabu</p>
            </div>
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/galinhos-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Morro do Careca</p>
            </div>
            <div class="relative hover:scale-110 transform ease-in-out">
                <img src="../../public/img/touros-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Praia das Tartarugas</p>
            </div>
        </div>
    </div>
    </section>    
    
    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-10">
            <div class="bg-[url('../img/mon.jpg')] bg-no-repeat bg-top bg-cover text-gray-50 text-lg p-5 flex flex-col border rounded-md border-transparent">
                <p class="mt-16 mb-5">Aventura</p>
                <h1 class="text-5xl mb-3">Seu Por do Sol Perfeito</h1>
                <p class="mb-5">Vem conferir atividades de aventuras, trilhas e muito mais!</p>
                <button class="bg-red-400 p-1 border border-transparent rounded-md w-28 mb-16">Ver mais</button>
            </div>
        </div>
        
    </section>

    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-10">
            <h1 class="text-5xl mt-10 pb-12">Top 4 Pontos</h1>
            <div class="flex items-center space-x-5">
                <div class="relative hover:scale-110 transform ease-in-out">
                    <img src="../../public/img/Restaurante-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Praia de Genipabu</p>
                </div>
                <div class="relative hover:scale-110 transform ease-in-out">
                    <img src="../../public/img/pousada-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Praia das Tartarugas</p>
                </div>
                <div class="relative hover:scale-110 transform ease-in-out">
                    <img src="../../public/img/cidade-natal.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Morro do Careca</p>
                </div>
                <div class="relative hover:scale-110 transform ease-in-out">
                    <img src="../../public/img/ponte-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Parrachos de Maracajaú</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-50 pt-20">
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
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7aa27JvzYih3S2sfNUaIuhPFQUZiDRek&callback=initMap&libraries=places&v=weekly"
    defer
  ></script>
  <script>
        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close",list.classList.add('top-[50px]'),list.classList.add('opacity-100')) : (e.name = "menu",list.classList.remove('top-[50px]'),list.classList.remove('opacity-100')) 
        }
      
        function toggleSubMenu() {
            var submenu = document.querySelector('.group > .absolute');
            submenu.classList.toggle('hidden');
        }
    </script>
  <script>
        // Dados das cidades (substitua com suas próprias informações)
        const citiesData = [
        { name: "Natal", lat: -5.7945, lng: -35.211 },
        { name: "Mossoró", lat: -5.1879, lng: -37.3443 },
        { name: "Caicó", lat: -6.4583, lng: -37.0955 },
        { name: "São Miguel do Gostoso", lat: -5.1234, lng: -35.6358 },
        { name: "Martins", lat: -6.0826, lng: -37.9082 },
        { name: "Santa Cruz", lat: -6.2254, lng: -36.019 },
        { name: "Pipa", lat: -6.2313, lng: -35.0552 },
        { name: "Rio do Fogo", lat: -5.2725, lng: -35.3799 },
        ];

        function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -5.7945, lng: -35.211 }, // Coordenadas iniciais do mapa
            zoom: 8,
        });

        // Adicionar informações interativas para cada cidade
        citiesData.forEach((city) => {
            const cityMarker = new google.maps.Marker({
            position: { lat: city.lat, lng: city.lng },
            map: map,
            title: city.name,
            });

            // Adicionar evento mouseover para exibir informações da cidade
            cityMarker.addListener("mouseover", () => {
            const infoWindow = new google.maps.InfoWindow({
                content: city.name,
            });
            infoWindow.open(map, cityMarker);
            });

            // Adicionar evento click para redirecionar para a página da cidade
            cityMarker.addListener("click", () => {
            // Redirecionar para a página da cidade (substitua com seu próprio URL)
            window.location.href = '/city';
            });
        });
        }
  </script>
  <script>
     const divs = document.querySelectorAll('.relative');

// Adicionar um evento de clique a cada div
divs.forEach(div => {
    div.addEventListener('click', () => {
        // Obter o nome do ponto turístico a partir do elemento p dentro da div clicada
        const name = div.querySelector('p').textContent;
        
        // Redirecionar para a página /sight com o nome do ponto na URI
        window.location.href = `/sight?name=${encodeURIComponent(name)}`;
    });
});
</script>
</body>
</html>
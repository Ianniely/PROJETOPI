
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
    <style>.group:hover > .absolute {display: block;}</style>
    <title>INSPIRERN</title>
</head>
<body class="snap-none">

    <!--header-->

    <section class=" bg-[url('../img/por-do-sol-praia.jpg')] bg-no-repeat bg-center bg-cover bg-fixed">
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
                        <li><a href="/citys">Cidades</a></li>
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
                    <h1 class="text-7xl mt-28 mb-7">Conheça o Paraíso Potiguar!</h1>
                    <div>
                    <p class="text-lg pb-40 ">Bem-vindo ao portal de turismo do Rio Grande do Norte! Descubra praias paradisíacas, história rica e uma cultura vibrante.<br>Explore nossos pontos turísticos deslumbrantes, saboreie a gastronomia local e crie memórias inesquecíveis. Aventure-se no<br>paraíso potiguar e apaixone-se pelo Rio Grande do Norte.</p>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto flex  flex-col pb-10">
            <h1 class="text-5xl pb-5 mt-10">Destinos Mais Procurados!</h1>
            <p class="text-lg pb-12">Descubra os destinos mais desejados do Rio Grande do Norte! Praias paradisíacas, cultura vibrante e aventuras inesquecíveis. De Natal a Pipa, de Genipabu a São Miguel do Gostoso, aproveite a combinação perfeita de belezas naturais, gastronomia incrível e hospitalidade calorosa.</p>
            <div class="flex space-x-8">
                <div class="w-96 drop-shadow-md">
                    <div class="relative">
                        <img src="../../public/img/praia1.jpg" alt="" class="border rounded-md border-transparent">
                        <span class="absolute top-0 right-0 p-2 text-white text-lg"><ion-icon name="bookmark-outline"></ion-icon></span>
                    </div>
                    <div class="border rounded-md bg-gray-100 p-3 h-48">
                        <div class="flex justify-between">
                            <p>Natal Rio Grande do Norte</p>
                            <span class="text-yellow-400 text-lg"><ion-icon name="star-half-outline"></ion-icon></span>
                        </div>
                        <p class="pb-2 pt-2">Preço Médio: 100,00 R$ </p>
                        <p> Desfrute de vistas deslumbrantes e mergulhe na energia única deste cartão-postal do litoral potiguar.</p>
                    </div>
                </div>
                <div class="w-96 drop-shadow-md">
                    <div class="relative">
                        <img src="../../public/img/praia2.jpg" alt="" class="border rounded-md border-transparent  border-b-gray-200">
                        <span class="absolute top-0 right-0 p-2 text-white text-lg"><ion-icon name="bookmark-outline"></ion-icon></span>
                    </div>
                    <div class="border rounded-md bg-gray-100 p-3 h-48">
                        <div class="flex justify-between">
                            <p>Pipa Rio Grande do Norte</p>
                            <span class="text-yellow-400 text-lg"><ion-icon name="star-half-outline"></ion-icon></span>
                        </div>
                        <p class="pb-2 pt-2">Preço Médio: 300,00 R$</p>
                        <p>Explore suas praias deslumbrantes, desfrute de atividades emocionantes como o surf e relaxe em meio à natureza exuberante deste paraíso costeiro.</p>
                    </div>
                </div>
                <div class="w-96 drop-shadow-md">
                    <div class="relative">
                        <img src="../../public/img/praia3.jpg" alt="" class="border rounded-md border-transparent border-b-gray-200">
                        <span class="absolute top-0 right-0 p-2 text-rose-600 text-lg"><ion-icon name="bookmark-outline"></ion-icon></span>
                    </div>
                    <div class="border rounded-md bg-gray-100 p-3 h-48">
                        <div class="flex justify-between">
                            <p>São Miguel Rio Grande do Norte</p>
                            <span class="text-yellow-400 text-lg"><ion-icon name="star-half-outline"></ion-icon></span>
                        </div>
                        <p class="pb-2 pt-2"> Preço Médio: 250,00 R$</p>
                        <p>Explore suas praias serenas, saboreie delícias culinárias à base de frutos do mar e desfrute de momentos de paz e relaxamento neste refúgio litorâneo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-10">
            <h1 class="text-5xl mt-10 pb-12">Recursos em Destaque!</h1>
            <div class="grid grid-cols-3 grid-rows-2 gap-4">
                <div class="row-span-2 relative">
                    <img src="../../public/img/dunas-esporte.png" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Aventura</p>
                </div>
                <div class="relative">
                    <img src="../../public/img/festa-junina-de-sao-joao-de-caruaru-pernambuco.jpeg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2  text-gray-50 text-3xl border rounded-md border-transparent">Cultura</p>
                </div>
                <div class="relative">
                    <img src="../../public/img/camaroes-prato.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Gastronomia</p>
                </div>
                <div class="col-span-2 relative">
                    <img src="../../public/img/1918103 - Copia.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Praias</p>
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
            <h1 class="text-5xl mt-10 pb-12">Destinos Recomendados para Você</h1>
        <div class="flex items-center space-x-5">
            <div class="relative">
                <img src="../../public/img/natal.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Natal</p>
            </div>
            <div class="relative">
                <img src="../../public/img/pipa-grega.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Pipa</p>
            </div>
            <div class="relative">
                <img src="../../public/img/paramini-festa.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Parnamirim</p>
            </div>
            <div class="relative">
                <img src="../../public/img/sao-miguel-do-gostoso-esporte.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">São Miguel do Gostoso</p>
            </div>
        </div>
    </div>
    </section>
      <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-20 flex">
            <div class="bg-sky-400 border rounded-md border-transparent border-r-0 rounded-r-none p-5 px-10 drop-shadow-md flex justify-center items-center">
                <div>
                    <h2 class="text-white text-3xl mb-5">Pesquise por onde quer navegar</h2>
                    <p class="text-gray-50">Pesquise por cidades dos seus interesse, ou por pontos turisticos que mais de chama a atenção. Descubra um mundo novo aqui no INSPIRERN</p>
                    <div class="flex mt-5 space-x-1">
                        <input type="text" placeholder="Pesquise por praias incríveis, trilhas sensacionais e muito mais" class="w-full p-1 border rounded-md roun border-transparent">
                        <button class="text-gray-100 h-10 px-3 bg-sky-600 border rounded-md border-transparent">Pesquisar</button>
                    </div>
                </div>
            </div>
            <div>
                <img src="../../public/img/caption.jpg" alt="" class=" border rounded-md border-transparent border-l-0 rounded-l-none">
            </div>
        </div>
    </section>
    <section class="bg-gray-900 pt-20 pb-10">
        <div class="container mx-auto space-y-5 bg-gray-800 p-8 border rounded-md border-transparent">
            <h2 class="text-gray-50 text-4xl mb-5">Anuncie no INSPIRERN</h2>
            <p class="text-gray-50 text-lg">Promova o seu estabelecimento para os viajantes que buscam as maravilhas do Rio Grande do Norte! Anuncie conosco e faça parte do guia de destinos mais completo da região, destacando suas atrações imperdíveis, opções de hospedagem e experiências gastronômicas. Alcance um público diversificado de turistas em busca de aventuras e momentos inesquecíveis. </p>
            <div class="flex space-x-5 text-lg">
                <div class="bg-gray-50 p-5 w-1/4 text-center border rounded-md border-transparent">
                    <span class="text-yellow-400 text-3xl"><ion-icon name="balloon-outline"></ion-icon></span>
                    <h5>Eventos</h5>
                </div>
                <div class="bg-gray-50 p-5 w-1/4 text-center border rounded-md border-transparent">
                    <span class="text-yellow-400 text-3xl"><ion-icon name="bed-outline"></ion-icon></span>
                    <h5>Pousadas</h5>
                </div>
                <div class="bg-gray-50 p-5 w-1/4 text-center border rounded-md border-transparent">
                    <span class="text-yellow-400 text-3xl"><ion-icon name="restaurant-outline"></ion-icon></span>
                    <h5>Restaurantes</h5>
                </div>
                <div class="bg-gray-50 p-5 w-1/4 text-center border rounded-md border-transparent">
                    <span class="text-yellow-400 text-3xl"><ion-icon name="bicycle-outline"></ion-icon></span>
                    <h5>Atrações</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-900 pt-10">
        <div class="container mx-auto pb-10">
            <h1 class="text-5xl mt-10 pb-12 text-gray-50">Navegue por Categoria</h1>
            <div class="flex items-center space-x-5">
                <div class="relative">
                    <img src="../../public/img/Restaurante-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Restaurantes</p>
                </div>
                <div class="relative">
                    <img src="../../public/img/pousada-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Pousadas</p>
                </div>
                <div class="relative">
                    <img src="../../public/img/cidade-natal.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Cidades</p>
                </div>
                <div class="relative">
                    <img src="../../public/img/ponte-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Pontos Turisticos</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-900 pt-10">
        <div class="container mx-auto pb-20 flex">
            <div class="bg-[url('../img/praias-rj.jpg')] bg-no-repeat bg-center bg-cover text-gray-50 text-xl border rounded-md border-transparent border-r-0 rounded-r-none w-1/2">
                <div class="bg-black-gd p-10 space-y-3 text-center">
                    <h3 class="text-4xl">Monte seu Roteiro</h3>
                    <p>Explore por roteiros que satisfaz seus intereses!</p>
                    <button class="p-2 bg-blue-500 border rounded-md border-transparent">Montar Roteiro</button>
                </div>
            </div>
            <div class="bg-[url('../img/megulho.jpg')] bg-no-repeat bg-center bg-cover text-gray-50 text-lg border rounded-md border-l-0 rounded-l-none border-transparent w-1/2">
                <div class="bg-black-gd p-10 space-y-3 text-center">
                    <h3 class="text-4xl">Veja Roteiro Prontos</h3>
                    <p>Explore por roteiros prontos que satisfaz seus intereses!</p>
                    <button class="p-2 bg-blue-500 border rounded-md border-transparent">Ver Roteiros</button>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-900 pt-10 flex flex-col justify-center items-center">
        <div class="container mx-auto flex space-x-5">
            <div class="space-y-5">
                <img src="../../public/img/mapa.jpeg" alt="Mapa do RN" class="border rounded-md border-transparent">
                <img  src="../../public/img/Fortes-dos-reis-magos-panoramica.jpeg" alt="Forte dos reis magos em Natal-RN" class="border rounded-md border-transparent">
                <img src="../../public/img/paulo-cesar-panoramica.jpeg" alt="Paulo Cesár em Natal-RN" class="border rounded-md border-transparent">
            </div>
            <div class="relative w-2/3">
                <div id="pac-container" class="absolute top-0 z-10 p-2">
                    <input id="pac-input" class="pac-input w-96 text-lg p-1 border rounded-md border-transparent shadow-md" type="text" placeholder="Entre com uma localização" />
                    <div id="pac-suggestions"></div>
                </div>
                <div id="map" class="w-full h-full border rounded-md border-transparent"></div>
            </div>
        </div>
        <div id="infowindow-content">
          <span id="place-name" class="title"></span><br />
          <span id="place-address"></span>
        </div>
    </section>
    <section class="bg-gray-900 pt-10">
        <div class="bg-[url('../img/Newton_Navarro_Bridge_Natal_Brazil.jpg')] bg-no-repeat bg-center bg-cover h-full">
            <div class="bg-black-gd p-10">
            <div class="container mx-auto p-5 text-gray-50 text-lg space-y-5 w-1/2">
                <h4 class="text-4xl mb-8">Perguntas Frequentes</h4>
                <div class="bg-black-gd p-5  space-y-3 border rounded-md border-transparent">
                    <p class="font-bold text-lg">Como posso encontrar os principais pontos turísticos do Rio Grande do Norte?</p>
                    <p class="text-lg">Em nosso site, você encontrará uma seção dedicada aos "Destinos" que apresenta os pontos turísticos mais famosos da região.</p>
                </div>
                <div class="p-5 bg-black-gd space-y-3 border rounded-md border-transparent">
                    <p class="font-bold text-lg">É possível obter informações sobre hospedagem e restaurantes próximos aos pontos turísticos?</p>
                    <p class="text-lg">Sim! Além dos detalhes sobre os pontos turísticos, nosso site oferece informações sobre hospedagem, restaurantes e outras comodidades nas proximidades</p>
                </div>
                <div class="p-5 bg-black-gd space-y-3 border rounded-md border-transparent">
                    <p class="font-bold text-lg">Posso planejar meu roteiro de viagem no site?</p>
                    <p class="text-lg">Claro! Em nossa seção "Roteiros", você encontrará sugestões de itinerários para explorar o Rio Grande do Norte e aproveitar ao máximo sua viagem.</p>
                </div>
                <div class="text-center text-2xl">
                    <a href=""><span><ion-icon name="chevron-down-outline"></ion-icon></span></a>
                </div>
                <div>
                    <input type="text" placeholder="Faça uma pergunta" class="p-1 w-3/5 h-14 text-lg text-gray-900 border rounded-md border-transparent">
                    <button class="text-gray-100 h-14 w-1/5 px-3 bg-sky-600 border rounded-md border-transparent ml-0">Enviar</button>
                </div>
            </div>
        </div>
        </div>
    </section>
    <footer>
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
        function initMap() {
          const map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -5.6650231, lng: -35.9928033 },
            zoom: 8,
            mapTypeControl: false,
          });

          const inputContainer = document.getElementById("pac-container");
          const input = document.getElementById("pac-input");
          const autocomplete = new google.maps.places.Autocomplete(input);
            
          autocomplete.bindTo("bounds", map);
          let streetViewActive = false;
          
          map.addListener("click", () => {
            if (streetViewActive) {
            inputContainer.style.display = "block"; // Mostrar o campo de entrada
            streetViewActive = false;
            }
          });

          map.getStreetView().addListener("visible_changed", () => {
            streetViewActive = map.getStreetView().getVisible();
            inputContainer.style.display = streetViewActive ? "none" : "block"; // Esconder o campo de entrada quando o Street View estiver ativo
        });
    
          const infowindow = new google.maps.InfoWindow();
          const infowindowContent = document.getElementById("infowindow-content");
    
          infowindow.setContent(infowindowContent);
    
          const marker = new google.maps.Marker({
            map,
            anchorPoint: new google.maps.Point(0, -29),
          });
    
          autocomplete.addListener("place_changed", () => {
            infowindow.close();
            marker.setVisible(false);
    
            const place = autocomplete.getPlace();
    
            if (!place.geometry || !place.geometry.location) {
              window.alert("No details available for input: '" + place.name + "'");
              return;
            }
    
            if (place.geometry.viewport) {
              map.fitBounds(place.geometry.viewport);
            } else {
              map.setCenter(place.geometry.location);
              map.setZoom(17);
            }
    
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
            infowindowContent.children["place-name"].textContent = place.name;
            infowindowContent.children["place-address"].textContent =
              place.formatted_address;
            infowindow.open(map, marker);
          });
        }
      </script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7aa27JvzYih3S2sfNUaIuhPFQUZiDRek&callback=initMap&libraries=places&v=weekly"
    defer
  ></script>
</body>
</html>
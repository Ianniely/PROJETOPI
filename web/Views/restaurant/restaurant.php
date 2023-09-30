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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title><?php echo $resultQuery['res_nome'];?> - INSPIRERN</title>
</head>
<body>

    <!--header-->
    <section class="bg-[url('../img/restaurant_menu_2.jpeg')] bg-no-repeat bg-center bg-cover bg-fixed">

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

                <div class="mt-12 mx-auto">

                    <h1 class="text-7xl text-center font-semibold mt-28 mb-7"><?php echo $resultQuery['res_nome'];?></h1>
                    
                    <div>
                        <p class="text-lg text-center font-semibold pb-40 ">Descubra uma experiência culinária única em nosso restaurante. Oferecemos uma variedade de pratos deliciosos<br> que certamente agradarão seu paladar. Com um ambiente acolhedor e atendimento de alta qualidade, garantimos que sua visita seja memorável.</p>
                    </div>

                </div>

            </header>

        </div>

    </section>

    <!-- Main dishes -->
    <section class="bg-gray-50 pt-10 pb-10">

        <div class="container mx-auto">

            <div>
                <h2 class="text-5xl text-center mt-10 pb-20">Principais Pratos</h2>
            </div>

            <div class="flex space-x-2 mx-auto">

                <div class="w-1/4 p-0 m-0 bg-gray-100 border rounded-md border-transparent">

                    <div class="w-full">
                        <img src="../../public/img/restaurants/foto_principais_pratos_1.jpg" alt="Prato de Camarão" class="w-full h-full border rounded-md border-transparent">
                    </div>

                    <div class="space-y-1 p-2">

                        <h3 class="font-semibold text-lg">Camarão na Brasa</h3>

                        <div class="flex justify-between">

                            <div>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined">star</span>
                            </div>

                            <div>
                                <p>R$ 50,00</p>
                            </div>

                        </div>

                        <p>Delicie-se com nossos camarões frescos, preparados com um toque especial que combina sabores únicos.</p>

                    </div>

                </div>

                <div class="w-1/4 p-0 m-0 bg-gray-100 border rounded-md border-transparent">

                    <div class="w-full">
                        <img src="../../public/img/restaurants/foto_principais_pratos_2.jpg" alt="Prato de Frango" class="w-full h-full border rounded-md border-transparent">
                    </div>

                    <div class="space-y-1 p-2">

                        <h3 class="font-semibold text-lg">Frango Grelhado</h3>

                        <div class="flex justify-between">

                            <div>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                            </div>

                            <div>
                                <p>R$ 35,90</p>
                            </div>

                        </div>

                        <p>Experimente nosso frango grelhado, temperado com ervas frescas e servido com acompanhamentos deliciosos.</p>

                    </div>
                </div>

                <div class="w-1/4 p-0 m-0 bg-gray-100 border rounded-md border-transparent">

                    <div class="w-full">
                        <img src="../../public/img/restaurants/foto_principais_pratos_3.jpg" alt="Prato de Hambúrger" class="w-full h-full border rounded-md border-transparent">
                    </div>

                    <div class="space-y-1 p-2">

                        <h3 class="font-semibold text-lg">Hambúrguer Artesanal</h3>

                        <div class="flex justify-between">

                            <div>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                            </div>

                            <div>
                                <p>R$ 22,50</p>
                            </div>

                        </div>

                        <p>Saboreie nosso hambúrguer artesanal, feito com carne premium, ingredientes frescos e um toque caseiro.</p>

                    </div>

                </div>

                <div class="w-1/4 p-0 m-0 bg-gray-100 border rounded-md border-transparent">

                    <div class="w-full">
                        <img src="../../public/img/restaurants/foto_principais_pratos_4.jpg" alt="Prato de Pizza" class="w-full h-full border rounded-md border-transparent">
                    </div>

                    <div class="space-y-1 p-2">

                        <h3 class="font-semibold text-lg">Pizza Tradicional</h3>

                        <div class="flex justify-between">

                            <div>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                                <span class="material-symbols-outlined text-yellow-400">star</span>
                            </div>

                            <div>
                                <p>R$ 47,80</p>
                            </div>

                        </div>
                        
                        <p>Desfrute de nossa pizza tradicional, com massa fina e crocante, coberta com ingredientes frescos e molho saboroso.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>
                        
    <!-- About us -->
    <section class="bg-gray-50 pt-20 pb-24">

        <div class="container mx-auto">

            <div class="flex bg-gray-100 border rounded-md border-transparent">

                <div class="w-1/2">
                    <img src="../../public/img/restaurants/foto_sobre_nos.jpeg" alt="Foto de uma charasqueira" class="w-full border rounded-md border-transparent">
                </div>

                <div class="w-1/2 mx-auto p-10 pb-0 space-y-3">

                    <h2 class="text-5xl pb-2">Sobre Nós</h2>

                    <?php
                        $descricao = $resultQuery['res_descricao'];
                        $paragrafos = explode("\n", $descricao);
                        for ($i = 0; $i < 7; $i++) {
                            echo "<p>{$paragrafos[$i]}</p>";
                        }
                    ?>

                    <div id="readMore" class="flex space-x-1 hover:text-blue-600">
                        <a class=" hover:underline">Ler Mais</a>
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                    </div>

                </div>

            </div>

            <div id="moreText" class="hidden space-y-3 pt-6 p-10 bg-gray-100 border rounded-md border-transparent">

                <?php
                    $descricao = $resultQuery['res_descricao'];
                    $paragrafos = explode("\n", $descricao);
                    for ($i = 7; $i < count($paragrafos); $i++) {
                        echo "<p>$paragrafos[$i]</p>";
                    }
                ?>

                <div id="readLess" class="flex space-x-1 hover:text-blue-600">
                    <a class=" hover:underline">Ler Menos</a>
                    <span class="material-symbols-outlined">arrow_right_alt</span>
                </div>

            </div>

        </div>

    </section>

    <!-- Main Information about the restaurant -->
    <section class="bg-[url('../../public/img/restaurants/foto_informações_importantes.jpg')]">

        <div class="container mx-auto pt-14 pb-14">
            <h2 class="text-5xl pb-10">Informações Importantes</h2>

            <?php
                $horarioAbertura = $resultQuery['res_horario_abertura'];
                $horarioFechamento = $resultQuery['res_horario_fechamento'];
                $horaMinutosAbertura = substr($horarioAbertura, 0, 5);
                $horaMinutosFechamento = substr($horarioFechamento, 0, 5);
            ?>

            <ul class="list-disc ml-4 space-y-2 text-lg">
                <li><span class="font-semibold">Horário de Abertura:</span> <?php echo $horaMinutosAbertura;?></li>
                <li><span class="font-semibold">Horário de Fechamento:</span> <?php echo $horaMinutosFechamento;?></li>
                <li><span class="font-semibold">Classificação:</span> <?php echo $resultQuery['res_classificacao'];?></li>
                <li><span class="font-semibold">Tipo de Culinária:</span> <?php echo $resultQuery['res_tipo_culinaria'];?></li>
                <li><span class="font-semibold">Preço médio:</span> <?php echo $resultQuery['res_valor_medio'];?></li>
                <li><span class="font-semibold">Acessibilidade:</span> <?php echo $resultQuery['res_acessibilidade'];?></li>
                <li><span class="font-semibold">Localização:</span> <?php echo $resultQuery['res_numero'] . ", " . $resultQuery['res_rua'] . ", " . $resultQuery['res_bairro'];?></li>
            </ul>

        </div>

    </section>

    <!--  -->
    <section class="bg-gray-50 pt-10">

        <div class="container mx-auto pb-10">
            <h2 class="text-5xl mt-10 pb-12">Top 4 Lugares Proximos</h2>

            <div class="flex items-center space-x-5">

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/Riodofogo-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Rio do Fogo</p>
                </div>

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/macau-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Macau</p>
                </div>

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/galinhos-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Galinhos</p>
                </div>

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/touros-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Touros</p>
                </div>
                
            </div>

        </div>

    </section>

    <!--  -->
    <section class="bg-gray-50 pt-1">

        <div class="container mx-auto pb-10">
            <h2 class="text-5xl mt-10 pb-12">Hoteis Proximos</h2>

            <div class="flex items-center space-x-5">

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/Restaurante-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Restaurantes</p>
                </div>

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/pousada-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Pousadas</p>
                </div>

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/cidade-natal.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Cidades</p>
                </div>

                <div class="relative hover:scale-110 transform ease-in-out" data-url="/sight">
                    <img src="../../public/img/ponte-rn.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                    <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                    <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Pontos Turisticos</p>
                </div>

            </div>

        </div>

    </section>

   <!-- Comments Section -->
   <section class="bg-gray-50 pt-10">
       <h2 class="text-5xl text-center mt-10 pb-12">O que as Pessoas estão Falando</h2>

       <div class="bg-[url('../../public/img/restaurants/foto_comentarios.jpeg')] bg-no-repeat bg-cover">

           <div class="bg-black-gd flex justify-center p-24">

               <div style="width: 900px;" class="relative">

                   <div class="flex overflow-x-hidden">

                       <div class="flex justify-center items-center space-x-6 slide transition-transform duration-500 text-lg" id="slider-1">
                           <img src="../../public/img/restaurants/perfil_1.jpg" alt="foto de uma pessoa" class="rounded-full">
                           <p style="width: 900px !important;" class="text-gray-50 text-center">Experimentei o prato especial do dia no restaurante e fiquei impressionado! O sabor era incrível e a apresentação impecável. Com certeza vou voltar para provar mais delícias deste lugar.</p>
                       </div>

                       <div class="flex justify-center items-center space-x-6 slide transition-transform duration-500" id="slider-2">
                           <img src="../../public/img/restaurants/perfil_2.jpg" alt="foto de uma pessoa" class="rounded-full">
                           <p style="width: 900px !important;" class="text-gray-50 text-center">Este restaurante é o meu favorito absoluto. A comida é sempre fresca e deliciosa, o serviço é excelente e a atmosfera é acolhedora. Sempre que tenho a oportunidade, venho aqui para desfrutar de uma refeição incrível.</p>
                       </div>

                       <div class="flex justify-center items-center space-x-6 slide transition-transform duration-500" id="slider-3">
                           <img src="../../public/img/restaurants/perfil_3.jpg" alt="foto de uma pessoa" class="rounded-full">
                           <p style="width: 900px !important;" class="text-gray-50 text-center">O chef deste restaurante é um verdadeiro mestre na arte da culinária. Cada prato que provei aqui é uma obra-prima. A variedade de opções no menu é incrível e nunca me decepcionou.</p>
                       </div>

                   </div>

                   <div class="absolute" style="left: 50%;  transform: translateX(-50%);">
                       <input type="radio" id="slider-1-radio" name="slider-radio" class="slider-radio">
                       <input type="radio" id="slider-2-radio"  name="slider-radio" class="slider-radio">
                       <input type="radio" id="slider-3-radio"  name="slider-radio" class="slider-radio">
                   </div>

               </div>

           </div>
           
       </div>

   </section>

   <!-- Footer -->
    <footer class="bg-gray-50">

        <div class="bg-gray-700 p-8">

            <div class="container mx-auto text-gray-50 flex justify-between">

                    <div>
                        <h2 class="text-xl">INSPIRERN</h2>
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

        const sliderRadios = document.querySelectorAll('.slider-radio');
        const slides = document.querySelectorAll('.slide');

        let currentIndex = 0; 

        const intervalDuration = 5000; 

        function showSlide(index) {

            slides.forEach((slide, slideIndex) => {
                if (slideIndex === index) {
                    slide.style.display = 'flex'; 
                    sliderRadios[slideIndex].checked = true; 
                } else {
                    slide.style.display = 'none'; 
                    sliderRadios[slideIndex].checked = false; 
                }
            });

        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        sliderRadios.forEach((radio, index) => {
            radio.addEventListener('click', () => {
                currentIndex = index;
                showSlide(currentIndex);
            });
        });

        showSlide(currentIndex);

        setInterval(nextSlide, intervalDuration);

    </script>

    <script>

        const readMore = document.querySelector('#readMore');
        const moreText = document.querySelector('#moreText');
        const readLess = document.querySelector('#readLess');

        readMore.addEventListener("click", () => {
            moreText.classList.remove('hidden');
            readMore.classList.add('hidden');
        });

        readLess.addEventListener("click", () => {
            moreText.classList.add('hidden');
            readMore.classList.remove('hidden');
        });

    </script>

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
            center: { lat: -5.7945, lng: -35.211 },
            zoom: 8,
        });

        citiesData.forEach((city) => {
            const cityMarker = new google.maps.Marker({
            position: { lat: city.lat, lng: city.lng },
            map: map,
            title: city.name,
            });

            cityMarker.addListener("mouseover", () => {
            const infoWindow = new google.maps.InfoWindow({
                content: city.name,
            });
            infoWindow.open(map, cityMarker);
            });

            cityMarker.addListener("click", () => {

                window.location.href = '/city';
            });
        });
        }

  </script>

</body>
</html>
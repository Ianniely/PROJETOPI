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
    <title>Cidades - INSPIRERN</title>
</head>
<body>

    <!--header-->

    <section class="carousel bg-[url('../img/caico-rn.png')] bg-no-repeat bg-center bg-cover bg-fixed">
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
                        <li><a href="/pages">Pontos Turísticos</a></li>
                        <li><a href="/city">Cidades</a></li>
                        <li><a href="/anuciarEvento">Eventos</a></li>
                        <li><a href="/pages">Hospedagem</a></li>
                        <li><a href="/pages">Restaurantes</a></li>
                        <li><a href="/montarRoteiro">Roteiros</a></li>
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
                    <h1 class="text-7xl mt-28 mb-7">Conheça as cidades do Potiguar!</h1>
                    <div>
                    <p class="text-lg pb-40 ">Explore as cidades encantadoras do Rio Grande do Norte, cada uma com sua própria história, cultura vibrante e beleza natural única. De praias deslumbrantes a ricos patrimônios históricos, mergulhe nas experiências autênticas que cada localidade tem a oferecer. Conheça lugares incríveis, saboreie a gastronomia local e mergulhe nas tradições fascinantes que tornam o nosso estado um destino inesquecível para todos os tipos de viajantes.</p>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <script>
        const images = [
          "../../public/img/caico-rn-3.jpg",
          "../../public/img/caico-rn.png",
          "../../public/img/post-7-lugares-conhecer-serido-antes-morrer-catedral-de-santana.jpg",
        ];
      
        const carousel = document.querySelector(".carousel");
        let currentIndex = 0;

        function showNextSlide() {
            currentIndex = (currentIndex + 1) % images.length;
            carousel.style.backgroundImage = `url('${images[currentIndex]}')`;
        }

        setInterval(showNextSlide, 5000); // Change slide every 5 seconds
    </script>
</body>
</html>
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
    <title><?php echo $resultQuery['cid_nome']; ?> - INSPIRERN</title>
</head>
<body>

    <!--header-->

    <section class="bg-no-repeat bg-center bg-cover bg-fixed" style="background-image: url('../../public/img/citys/natal/foto _menu_carrocel_1.webp');">
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
                    <h1 class="text-7xl mt-28 mb-7">Conheça <?php echo $resultQuery['cid_nome']; ?></h1>
                    <div>
                    <p class="text-lg pb-40 ">Explore a beleza e os encantos desta cidade única no Rio Grande do Norte.<br>Descubra uma fusão de cultura, história e hospitalidade que tornam este destino verdadeiramente especial.</p>
                    </div>
                </div>
            </header>
        </div>
    </section>

    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto">
            <div>
                <h1 class="text-5xl mt-10 pb-12"><?php echo $resultQuery['cid_nome']; ?></h1>
                <div class="flex">
                    <div class="w-3/4 text-lg space-y-4 text-justify mr-10">
                    <?php
                        $descricao = $resultQuery['cid_descricao'];
                        $paragrafos = explode("\n", $descricao);

                        foreach ($paragrafos as $paragrafo) {
                            echo "<p>$paragrafo</p>";
                        }
                    ?>
                    </div>
                    <div class="w-1/4 space-y-12">
                        <div>
                            <span class="text-3xl"><ion-icon name="business-outline"></ion-icon></span>
                            <h3 class="text-xl font-semibold">População</h3>
                           <?php  echo ' <p class="text-lg text-black">'. $resultQuery['cid_populacao'].'</p>'; ?>
                        </div>
                        <div class="flex space-x-8">
                            <div>
                                <span class="text-3xl"><ion-icon name="partly-sunny-outline"></ion-icon></span>
                                <h3 class="text-xl font-semibold">Clima</h3>
                                <p>Tropical úmido</p>
                            </div>
                            <div>
                                <span class="text-3xl"><ion-icon name="sunny-outline"></ion-icon></span>
                                <h3 class="text-xl font-semibold">Cidade</h3>
                                <p>Praiana</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            </div>
    </section>

    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto">
            <h1 class="text-5xl mt-10 pb-12">Top 4 pontos em <?php echo $resultQuery['cid_nome'] ?></h1>
        <div class="flex items-center space-x-5">
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_pontos_1.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Ponte</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_pontos_2.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Morro do Careca</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_pontos_3.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Farol</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_pontos_4.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Reis Margos</p>
            </div>
        </div>
    </div>
    </section>

    <section class="bg-gray-50 pt-20">
        <div class="container mx-auto">
            <div class="flex">
                <div class="mr-10">
                        <img src="../../public/img/natal-rn-3.jpg" alt="cidade de natal" class="border rounded-md">
                </div>
                <div class="w-2/3 text-justify flex flex-col justify-center">
                    <div>
                        <h1 class="text-5xl pb-7 text-left">Clima</h1>
                    </div>
                    <div class="text-lg space-y-3 ">
                        <?php
                                $descricao = $resultQuery['cid_clima'];
                                $paragrafos = explode("\n", $descricao);

                                foreach ($paragrafos as $paragrafo) {
                                    echo "<p>$paragrafo</p>";
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-10">
            <h1 class="text-5xl mt-10 pb-12">Top 4 Hotéis em <?php echo $resultQuery['cid_nome'] ?></h1>
        <div class="flex items-center space-x-5">
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_hoteis_1.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">IBIS</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_hoteis_2.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Ilusion Hotel</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_hoteis_3.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Natal Dunas</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_hoteis_4.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Aquaria</p>
            </div>
        </div>
    </div>
    </section>   
    
    <section class="bg-gray-50 pt-10">
        <div class="container mx-auto pb-10">
            <h1 class="text-5xl mt-10 pb-12">Top 4 Restaurantes em <?php echo $resultQuery['cid_nome'] ?></h1>
        <div class="flex items-center space-x-5">
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_restaurantes_1.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Old Five</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_restaurantes_2.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Bandejão</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_restaurantes_3.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Camarão e Cia</p>
            </div>
            <div class="relative">
                <img src="../../public/img/citys/<?php echo $resultQuery['cid_nome'] ?>/foto_top4_restaurantes_4.jpg" alt="" class="border rounded-md border-transparent drop-shadow-md">
                <img src="../../public/img/sombra.png" alt="" class="absolute bottom-0 border rounded-md border-transparent">
                <p class="absolute bottom-0 left-0 p-2 text-gray-50 text-3xl border rounded-md border-transparent">Céu da Boca</p>
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
</body>
</html>
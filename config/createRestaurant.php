<?php
    use sql\Connection;
    use web\Models\RestaurantModel;

    // Variable created there in the file 'createCity.php' and attached to it a database connection object;
    $con; 

    $restaurants = [
        'Sabor Nordestino' => [
            'name' => 'Sabor Nordestino',
            'neighborhood' => 'Candelária',
            'street' => 'Avenida Senador Salgado Filho',
            'street number' => '123',
            'opening hours' => '11:30:00',
            'closing hours' => '22:00:00',
            'average cost' => 'R$ 60,00',
            'classification' => '4.5 estrelas',
            'type of cuisine' => 'Nordestina',
            'accessibility' => 'Disponível',
            'description' => 'O Sabor Nordestino é um restaurante encantador localizado no bairro de Candelária, em Natal, Rio Grande do Norte. Este restaurante é uma verdadeira celebração dos sabores do Nordeste do Brasil.
        
            Destaques:
            - Delícias Nordestinas: O cardápio do Sabor Nordestino apresenta uma variedade de pratos tradicionais da região, incluindo tapiocas, acarajé, carne de sol, e muito mais.
            
            - Ambiente Acolhedor: O restaurante oferece um ambiente acolhedor e autêntico, decorado com elementos que refletem a cultura nordestina.
            
            - Música ao Vivo: Às sextas e sábados, os visitantes podem desfrutar de apresentações ao vivo de músicos locais, criando uma atmosfera vibrante.
            
            - Atendimento Excepcional: A equipe do Sabor Nordestino é conhecida por seu atendimento caloroso e eficiente.
            
            Acessibilidade:
            - O restaurante é acessível a pessoas com mobilidade reduzida e possui instalações adequadas.
            
            Como Chegar:
            - O Sabor Nordestino é facilmente acessível por transporte público ou de carro. Há estacionamento disponível nas proximidades.
            
            Horário de Funcionamento:
            - Aberto para almoço e jantar, das 11:30 às 22:00, proporcionando aos visitantes a oportunidade de saborear a autêntica culinária nordestina em qualquer momento do dia.
            
            O Sabor Nordestino é uma verdadeira homenagem à rica tradição culinária do Nordeste do Brasil e uma parada obrigatória para os amantes da gastronomia regional.',
            'city' => 1,
        ],
        'Casa do Sabor Potiguar' => [
            'name' => 'Casa do Sabor Potiguar',
            'neighborhood' => 'Petrópolis',
            'street' => 'Rua Mossoró',
            'street number' => '255',
            'opening hours' => '12:00:00',
            'closing hours' => '21:00:00',
            'average cost' => 'R$ 45,00',
            'classification' => '4 estrelas',
            'type of cuisine' => 'Potiguar',
            'accessibility' => 'Disponível',
            'description' => 'A Casa do Sabor Potiguar é um tesouro gastronômico situado no bairro de Petrópolis, em Natal, Rio Grande do Norte. Este restaurante é dedicado a proporcionar uma autêntica experiência da culinária potiguar.
        
            Destaques:
            - Pratos Tradicionais: O menu da Casa do Sabor Potiguar oferece pratos tradicionais do Rio Grande do Norte, como a famosa carne de sol com macaxeira e o camarão na moranga.
            
            - Ambiente Aconchegante: O restaurante possui um ambiente aconchegante, com decoração que destaca a cultura local e suas raízes.
            
            - Coquetéis Regionais: Experimente coquetéis exclusivos preparados com frutas tropicais da região, como a cajuína.
            
            - Música ao Vivo: Desfrute de apresentações de música ao vivo nos fins de semana, criando uma atmosfera festiva.
            
            Acessibilidade:
            - A Casa do Sabor Potiguar se preocupa com a acessibilidade e oferece instalações adequadas para pessoas com mobilidade reduzida.
            
            Como Chegar:
            - O restaurante é de fácil acesso por transporte público ou carro, com estacionamento disponível nas proximidades.
            
            Horário de Funcionamento:
            - Aberto para almoço e jantar, das 12:00 às 21:00, permitindo que os visitantes desfrutem das delícias da culinária potiguar em diversos horários.
            
            Venha descobrir os sabores autênticos do Rio Grande do Norte na Casa do Sabor Potiguar, onde a tradição culinária local é celebrada.',
            'city' => 6,
            ],
            'Mangai Natal' => [
                'name' => 'Mangai Natal',
                'neighborhood' => 'Lagoa Nova',
                'street' => 'Av. Alexandre Câmara',
                'street number' => '1762',
                'opening hours' => '11:00:00',
                'closing hours' => '21:30:00',
                'average cost' => 'R$ 60,00',
                'classification' => '5 estrelas',
                'type of cuisine' => 'Nordestina',
                'accessibility' => 'Disponível',
                'description' => 'O Mangai Natal é um verdadeiro paraíso para os amantes da culinária nordestina. Localizado no bairro de Lagoa Nova, em Natal, Rio Grande do Norte, este restaurante oferece uma experiência gastronômica única.
            
            Destaques:
            - Buffet Variado: O Mangai é conhecido pelo seu variado buffet de pratos típicos do Nordeste, incluindo macaxeira, carne de sol, buchada, e uma variedade de sobremesas deliciosas.
            
            - Decoração Regional: O restaurante possui uma decoração encantadora que celebra a cultura nordestina, com elementos que remetem às festas juninas e ao sertão.
            
            - Música ao Vivo: Aprecie apresentações de música ao vivo com forró e outros ritmos nordestinos em certas noites.
            
            - Espaço Infantil: O Mangai tem um espaço dedicado às crianças, tornando-o uma opção amigável para famílias.
            
            Acessibilidade:
            - O restaurante Mangai Natal é acessível a pessoas com mobilidade reduzida.
            
            Como Chegar:
            - É fácil chegar ao Mangai de carro ou transporte público, com estacionamento disponível nas proximidades.
            
            Horário de Funcionamento:
            - Aberto para almoço e jantar, das 11:00 às 21:30, para que você possa saborear as delícias nordestinas em horários convenientes.
            
            Venha desfrutar da autêntica comida nordestina no Mangai Natal, onde a tradição e o sabor se encontram em cada prato.',
                'city' => 1,
            ],
            'Camarões Potiguar' => [
                'name' => 'Camarões Potiguar',
                'neighborhood' => 'Tirol',
                'street' => 'Rua Pedro I',
                'street number' => '500',
                'opening hours' => '11:30:00',
                'closing hours' => '22:00:00',
                'average cost' => 'R$ 70,00',
                'classification' => '4.5 estrelas',
                'type of cuisine' => 'Frutos do Mar',
                'accessibility' => 'Disponível',
                'description' => 'O Camarões Potiguar é um dos restaurantes mais renomados de Natal, localizado no bairro Tirol, Rio Grande do Norte. Este restaurante é famoso por oferecer uma experiência gastronômica excepcional com um toque regional.
            
                Destaques:
                - Frutos do Mar Frescos: O restaurante é especializado em pratos de frutos do mar, com camarões frescos sendo a estrela do cardápio. Experimente o famoso "Camarão à Potiguar".
                
                - Ambiente Aconchegante: O Camarões Potiguar oferece um ambiente aconchegante e elegante, perfeito para jantares românticos e celebrações especiais.
                
                - Carta de Vinhos: Uma seleção cuidadosa de vinhos complementa perfeitamente as opções de frutos do mar.
                
                - Variedade de Pratos: Além de camarões, o restaurante oferece uma variedade de opções de pratos, incluindo peixes frescos e carnes saborosas.
                
                Acessibilidade:
                - O restaurante Camarões Potiguar é acessível a pessoas com mobilidade reduzida.
                
                Como Chegar:
                - É fácil chegar ao restaurante de carro ou transporte público, com estacionamento disponível nas proximidades.
                
                Horário de Funcionamento:
                - Aberto para almoço e jantar, das 11:30 às 22:00, para que você possa saborear pratos de frutos do mar frescos a qualquer hora do dia.
                
                Desfrute de uma experiência culinária única no Camarões Potiguar, onde a qualidade e o sabor se destacam em cada prato.',
                'city' => 8,
            ],
            'Tábua de Carne' => [
                'name' => 'Tábua de Carne',
                'neighborhood' => 'Petrópolis',
                'street' => 'Rua Seridó',
                'street number' => '622',
                'opening hours' => '12:00:00',
                'closing hours' => '23:00:00',
                'average cost' => 'R$ 60,00',
                'classification' => '4 estrelas',
                'type of cuisine' => 'Churrascaria',
                'accessibility' => 'Disponível',
                'description' => 'A Tábua de Carne é uma churrascaria icônica localizada no bairro Petrópolis, em Natal, Rio Grande do Norte. Este restaurante é conhecido por servir deliciosas carnes grelhadas em um ambiente acolhedor.
            
                Destaques:
                - Churrasco de Qualidade: A Tábua de Carne oferece uma seleção de carnes suculentas grelhadas na hora, incluindo picanha, costelas e linguiças.
                
                - Buffet de Acompanhamentos: Além das carnes, você pode desfrutar de um buffet de acompanhamentos variados, incluindo saladas frescas, pratos quentes e muito mais.
                
                - Carta de Vinhos: Uma extensa carta de vinhos está disponível para complementar sua refeição.
                
                - Ambiente Agradável: O restaurante oferece um ambiente agradável e relaxante, perfeito para encontros familiares e jantares com amigos.
                
                Acessibilidade:
                - A Tábua de Carne é acessível a pessoas com mobilidade reduzida.
                
                Como Chegar:
                - O restaurante está convenientemente localizado e pode ser facilmente acessado de carro ou transporte público.
                
                Horário de Funcionamento:
                - Aberto para o almoço e jantar, das 12:00 às 23:00, permitindo que você desfrute de uma deliciosa refeição a qualquer momento.
                
                Venha experimentar a autêntica churrascaria da Tábua de Carne e saboreie os melhores cortes de carne grelhada em Natal!',
                'city' => 7,
            ],
    ];

    $query = "SELECT COUNT(*)  FROM tb_restaurantes";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result[0] == 0) {
        $restaurantsModel = new RestaurantModel($con);

        foreach ($restaurants as $restauranteName => $restaurantInfo) {
            $result = $restaurantsModel->find($restauranteName);

            if (!$result) {
                $restaurantsModel->save($restauranteName, $restaurantInfo['neighborhood'], $restaurantInfo['street'], $restaurantInfo['street number'], $restaurantInfo['opening hours'], $restaurantInfo['closing hours'], $restaurantInfo['average cost'], $restaurantInfo['classification'], $restaurantInfo['type of cuisine'], $restaurantInfo['accessibility'], $restaurantInfo['description'], $restaurantInfo['city']);
            }
        }
    }
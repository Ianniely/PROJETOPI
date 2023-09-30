<?php
    use sql\Connection;
    use web\Models\AccommodationModel;

    // Variable created there in the file 'createCity.php' and attached to it a database connection object;
    $con; 

    $hotels = [
        'Praia Dourada Hotel' => [
            'name' => 'Praia Dourada Hotel',
            'neighborhood' => 'Ponta Negra',
            'street' => 'Rua Beira Mar',
            'street number' => '789',
            'phone number' => '(84) 9876-1234',
            'email' => 'reservas@praiadouradahotel.com.br',
            'value' => 'R$ 250,00 a R$ 500,00',
            'accessibility' => 'Disponível',
            'classification' => '4 estrelas',
            'description' => 'O Praia Dourada Hotel é uma excelente escolha para sua estadia em Natal, Rio Grande do Norte. Localizado à beira-mar na famosa praia de Ponta Negra, oferecemos confortáveis quartos e uma vista deslumbrante do oceano.

            Destaques:
            - Vista para o Mar: A maioria dos nossos quartos oferece vista para o mar, permitindo que você relaxe com a beleza do oceano.

            - Piscina com Bar Molhado: Desfrute de nossa piscina com bar molhado, perfeita para refrescar-se enquanto toma sua bebida favorita.

            - Restaurante à Beira-Mar: Nosso restaurante à beira-mar oferece uma culinária deliciosa com frutos do mar frescos e pratos locais.

            - Academia e Spa: Mantenha-se em forma em nossa academia bem equipada ou relaxe com um tratamento no spa.

            Acessibilidade:
            - O Praia Dourada Hotel é acessível a pessoas com mobilidade reduzida.

            Como Chegar:
            - Nosso hotel está localizado a aproximadamente 40 minutos do Aeroporto Internacional de Natal.

            Horário de Funcionamento:
            - Estamos à sua disposição 24 horas por dia, 7 dias por semana, para garantir uma estadia memorável.

            Venha desfrutar de conforto, comodidade e uma vista incrível no Praia Dourada Hotel durante sua visita a Natal!',
            'city' => 1,
        ],

        'Pousada Encanto Potiguar' => [
            'name' => 'Pousada Encanto Potiguar',
            'neighborhood' => 'Praia do Amor',
            'street' => 'Rua das Palmeiras',
            'street number' => '567',
            'phone number' => '(84) 9876-1234',
            'email' => 'contato@pousadaencantopotiguar.com',
            'value' => 'R$ 150,00 a R$ 300,00',
            'accessibility' => 'Não disponível',
            'classification' => '2 estrelas',
            'description' => 'A Pousada Encanto Potiguar é uma encantadora opção de hospedagem na Praia do Amor, próximo a Pipa, Rio Grande do Norte. Oferecemos acomodações confortáveis em meio a um ambiente tranquilo e relaxante.
        
            Destaques:
            - Aconchegante e Tranquila: Nossa pousada é perfeita para quem busca um refúgio tranquilo e aconchegante.
        
            - Quartos com Varanda: Alguns de nossos quartos possuem varanda com vista para o jardim.
        
            - Café da Manhã Incluso: Oferecemos um café da manhã delicioso para começar o dia com energia.
        
            - Próximo à Praia: Estamos a uma curta caminhada da bela Praia do Amor.
        
            Acessibilidade:
            - Infelizmente, nossa pousada não é adaptada para pessoas com mobilidade reduzida.
        
            Como Chegar:
            - A pousada está a cerca de 1 hora de carro do Aeroporto Internacional de Natal.
        
            Horário de Funcionamento:
            - Estamos à disposição para atender nossos hóspedes durante o horário comercial.
        
            Se você procura um refúgio tranquilo próximo à natureza exuberante de Pipa, a Pousada Encanto Potiguar é a escolha perfeita.',
            'city' => 2,
        ],

        'Hotel Estrela do Mar' => [
            'name' => 'Hotel Estrela do Mar',
            'neighborhood' => 'Ponta Negra',
            'street' => 'Avenida Costeira',
            'street number' => '1234',
            'phone number' => '(84) 9876-5678',
            'email' => 'reservas@hotelestreladomar.com.br',
            'value' => 'R$ 200,00 a R$ 400,00',
            'accessibility' => 'Disponível',
            'classification' => '3 estrelas',
            'description' => 'O Hotel Estrela do Mar oferece uma estadia confortável e acessível em Natal, Rio Grande do Norte. Localizado na área de Ponta Negra, nosso hotel é uma ótima opção para viajantes a lazer e a negócios.
        
            Destaques:
            - Quartos Aconchegantes: Oferecemos quartos aconchegantes com comodidades modernas para garantir sua estadia confortável.
        
            - Café da Manhã: Desfrute de um delicioso café da manhã continental diariamente em nosso restaurante.
        
            - Piscina ao Ar Livre: Relaxe em nossa piscina ao ar livre em meio a um jardim tropical.
        
            - Localização Estratégica: Estamos a uma curta distância de lojas, restaurantes e da famosa Praia de Ponta Negra.
        
            Acessibilidade:
            - O Hotel Estrela do Mar é acessível a pessoas com mobilidade reduzida.
        
            Como Chegar:
            - Nosso hotel está a 45 minutos de carro do Aeroporto Internacional de Natal.
        
            Horário de Funcionamento:
            - Estamos à sua disposição 24 horas por dia, 7 dias por semana, para tornar sua estadia agradável.
        
            Venha experimentar o conforto e a conveniência do Hotel Estrela do Mar durante sua visita a Natal!',
            'city' => 1,
        ],

        'Pousada das Palmeiras' => [
            'name' => 'Pousada das Palmeiras',
            'neighborhood' => 'Ponta Negra',
            'street' => 'Rua das Palmeiras',
            'street number' => '789',
            'phone number' => '(84) 9876-5432',
            'email' => 'contato@pousadapalmeiras.com.br',
            'value' => 'R$ 150,00 a R$ 300,00',
            'accessibility' => 'Disponível',
            'classification' => '2 estrelas',
            'description' => 'A Pousada das Palmeiras oferece uma estadia acolhedora e econômica em Natal, Rio Grande do Norte. Localizada em Ponta Negra, nosso objetivo é proporcionar aos hóspedes uma experiência confortável a preços acessíveis.
        
            Destaques:
            - Acomodações Confortáveis: Oferecemos quartos limpos e confortáveis para garantir uma estadia agradável.
        
            - Café da Manhã: Desfrute de um café da manhã continental todas as manhãs em nosso refeitório.
        
            - Piscina: Relaxe em nossa piscina ao ar livre e aproveite o clima tropical.
        
            - Próximo à Praia: Estamos localizados a uma curta caminhada da famosa Praia de Ponta Negra.
        
            Acessibilidade:
            - A Pousada das Palmeiras oferece comodidades acessíveis a pessoas com mobilidade reduzida.
        
            Como Chegar:
            - Nosso estabelecimento está a 40 minutos de carro do Aeroporto Internacional de Natal.
        
            Horário de Funcionamento:
            - Estamos à disposição 24 horas por dia para atender às necessidades dos nossos hóspedes.
        
            Venha desfrutar de uma estadia econômica e aconchegante na Pousada das Palmeiras durante sua visita a Natal!',
            'city' => 1,
        ],

        'Hotel Paraíso Tropical' => [
            'name' => 'Hotel Paraíso Tropical',
            'neighborhood' => 'Praia de Ponta Negra',
            'street' => 'Avenida Beira Mar',
            'street number' => '1234',
            'phone number' => '(84) 9876-5678',
            'email' => 'reservas@hotelparaisotropical.com',
            'value' => 'R$ 250,00 a R$ 500,00',
            'accessibility' => 'Disponível',
            'classification' => '3 estrelas',
            'description' => 'O Hotel Paraíso Tropical é um oásis de conforto e lazer na Praia de Ponta Negra, Natal, Rio Grande do Norte. Nossas instalações oferecem uma estadia agradável para todos os tipos de viajantes.
        
            Destaques:
            - Piscina com Vista: Nossa piscina no terraço oferece uma vista espetacular para o mar.
        
            - Restaurante no Local: Desfrute de refeições deliciosas em nosso restaurante no hotel.
        
            - Acesso à Praia: Estamos convenientemente localizados a poucos passos da Praia de Ponta Negra.
        
            - Atividades de Lazer: Oferecemos atividades como passeios de barco e aluguel de bicicletas para diversão durante a sua estadia.
        
            Acessibilidade:
            - O Hotel Paraíso Tropical é acessível e possui instalações adequadas.
        
            Como Chegar:
            - Estamos a aproximadamente 30 minutos de carro do Aeroporto Internacional de Natal.
        
            Horário de Funcionamento:
            - Nosso hotel está aberto o ano todo, proporcionando uma estadia confortável a qualquer momento.
        
            Venha desfrutar do Paraíso Tropical e tenha uma estadia inesquecível em Natal!',
            'city' => 1,
        ],
        ];
    
    $query = "SELECT COUNT(*)  FROM tb_hospedagens";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result[0] == 0) {
        $hotelsModel = new AccommodationModel($con);

        foreach ($hotels as $hotelsName => $hotelsInfo) {
            $result = $hotelsModel->find($hotelsName);

            if (!$result) {
                $hotelsModel->save($hotelsName, $hotelsInfo['neighborhood'], $hotelsInfo['street'], $hotelsInfo['street number'], $hotelsInfo['value'], $hotelsInfo['email'], $hotelsInfo['phone number'], $hotelsInfo['classification'], $hotelsInfo['accessibility'], $hotelsInfo['description'], $hotelsInfo['city']);
            }
        }
    }
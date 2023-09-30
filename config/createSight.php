<?php
    use sql\Connection;
    use web\Models\CityModel;
    use web\Models\SightsModel;

    // Variable created there in the file 'createCity.php' and attached to it a database connection object;
    $con; 

    $sights = [
        'Morro do Careca' => [
            'name' => 'Morro do Careca',
            'neighborhood' => 'Ponta Negra',
            'street' => 'Avenida Erivan França',
            'description' =>  'O Morro do Careca é um dos principais cartões postais de Natal, localizado na praia de Ponta Negra, Rio Grande do Norte. Com uma altura impressionante de aproximadamente 120 metros, este icônico monte de dunas coberto de vegetação tropical é uma atração inigualável que atrai visitantes de todo o mundo.

            Destaques:
            - Vista panorâmica deslumbrante: Do topo do Morro do Careca, os visitantes podem desfrutar de uma vista panorâmica espetacular do oceano Atlântico e da praia de Ponta Negra.

            - Praia de areias douradas: A praia de Ponta Negra é conhecida por suas areias douradas e águas cristalinas, proporcionando um local perfeito para relaxar e nadar.

            - Esportes aquáticos: A região é ideal para esportes aquáticos como surf, windsurf e stand-up paddle. Há também opções para passeios de barco e mergulho nas proximidades.

            - Pôr do sol inesquecível: O Morro do Careca é um dos melhores lugares para apreciar o pôr do sol espetacular de Natal.

            Acessibilidade:
            - O Morro do Careca oferece facilidades para visitantes com mobilidade reduzida, incluindo rampas de acesso.

            Como Chegar:
            - O acesso ao Morro do Careca é fácil e conveniente, com opções de transporte público e estacionamento nas proximidades.

            Horário de Funcionamento:
            - O local está aberto durante todo o ano. Verifique os horários de funcionamento para planejar sua visita.

            Esta atração é verdadeiramente imperdível para quem visita Natal. Uma combinação de beleza natural e experiências emocionantes aguarda todos os que exploram o Morro do Careca.',
            'classification' => '5 estrelhas', 
            'accessibility' => 'Disponível',
            'id' => '1',
        ],
        'Praia das Tartarugas' => [
            'name' => 'Praia das Tartarugas',
            'neighborhood' => 'Bairro da Praia',
            'street' => 'Avenida da Praia',
            'description' => '
                A Praia das Tartarugas é um tesouro escondido no litoral do Rio Grande do Norte. Localizada em um bairro tranquilo, esta praia é conhecida pela sua beleza natural e pela presença frequente de tartarugas marinhas que desovam nas suas areias.
    
                Destaques:
                - Observação de tartarugas: A praia é um importante local de desova de tartarugas marinhas, oferecendo aos visitantes a oportunidade de testemunhar este incrível fenômeno.
    
                - Areias douradas: A areia dourada da Praia das Tartarugas é perfeita para relaxar e aproveitar o sol.
    
                - Mergulho com snorkel: As águas cristalinas são ideais para o mergulho com snorkel, onde você pode explorar os recifes de corais e a vida marinha local.
    
                Acessibilidade:
                - A Praia das Tartarugas oferece acesso para pessoas com mobilidade reduzida, tornando-a acessível a todos.
    
                Como Chegar:
                - O acesso à praia é fácil, com estacionamento disponível nas proximidades.
    
                Horário de Funcionamento:
                - A praia está aberta durante todo o ano. Verifique os horários de funcionamento para planejar sua visita.
    
                Descubra a beleza natural e a vida marinha fascinante da Praia das Tartarugas durante sua visita ao Rio Grande do Norte.
            ',
            'classification' => '4 estrelas',
            'accessibility' => 'Disponível',
            'id' => '1',
        ],
        'Cachoeira da Serra' => [
            'name' => 'Cachoeira da Serra',
            'neighborhood' => 'Bairro da Cachoeira',
            'street' => 'Estrada da Cachoeira',
            'description' => '
                A Cachoeira da Serra é um paraíso natural escondido no interior do Rio Grande do Norte. Esta deslumbrante queda d\'água oferece aos visitantes uma experiência única em meio à natureza intocada.
    
                Destaques:
                - Queda d\'água majestosa: A cachoeira possui uma queda impressionante que cria uma piscina natural perfeita para um mergulho revigorante.
    
                - Trilhas na floresta: Explore as trilhas circundantes para descobrir a rica biodiversidade da região.
    
                - Piqueniques e relaxamento: A área ao redor da cachoeira é ideal para piqueniques e momentos de tranquilidade em meio à natureza.
    
                Acessibilidade:
                - A Cachoeira da Serra pode ser acessada por trilha, e a caminhada pode ser moderadamente desafiadora.
    
                Como Chegar:
                - A cachoeira está localizada em uma área remota, e a melhor maneira de chegar lá é de carro.
    
                Horário de Funcionamento:
                - A cachoeira está aberta durante todo o ano, mas é recomendável verificar as condições da estrada e a segurança antes de visitar.
    
                Explore a serenidade da Cachoeira da Serra e desconecte-se do mundo em meio à beleza natural do Rio Grande do Norte.
            ',
            'classification' => '5 estrelas',
            'accessibility' => 'Indisponível',
            'id' => '8',
        ],
        'Praia de Genipabu' => [
        'name' => 'Praia de Genipabu',
        'neighborhood' => 'Genipabu',
        'street' => 'Avenida Genipabu',
        'description' => '
            A Praia de Genipabu é famosa por suas dunas de areia e passeios de buggy emocionantes. Localizada a poucos quilômetros de Natal, esta praia oferece diversão para toda a família.

            Destaques:
            - Passeios de buggy: Explore as enormes dunas de areia de Genipabu em um passeio de buggy emocionante. Prepare-se para descer pelas dunas em uma prancha de madeira em alta velocidade.

            - Passeio de dromedário: Você também pode fazer um passeio de dromedário pelas dunas, uma experiência única e divertida.

            - Lagoas de água doce: No meio das dunas, você encontrará lagoas de água doce onde pode nadar e relaxar.

            - Acesso fácil: A Praia de Genipabu é de fácil acesso a partir de Natal, tornando-a uma ótima opção para um passeio de um dia.

            Acessibilidade:
            - A praia oferece algumas facilidades de acessibilidade, mas a topografia das dunas pode ser desafiadora para cadeiras de rodas.

            Como Chegar:
            - Você pode chegar à Praia de Genipabu de carro ou contratando um passeio de buggy em Natal.

            Horário de Funcionamento:
            - A praia está aberta durante todo o ano. Verifique os horários de funcionamento das atrações locais para planejar sua visita.

            Divirta-se nas dunas e lagoas da Praia de Genipabu e experimente a emoção dos passeios de buggy.
        ',
        'classification' => '4 estrelas',
        'accessibility' => 'Disponível',
        'id' => '1',
    ],
    'Parrachos de Maracajaú' => [
        'name' => 'Parrachos de Maracajaú',
        'neighborhood' => 'Maracajaú',
        'street' => 'Estrada dos Parrachos',
        'description' => '
            Os Parrachos de Maracajaú são um paraíso subaquático no Rio Grande do Norte. Este recife de coral oferece algumas das melhores oportunidades de mergulho com snorkel e mergulho autônomo na região.

            Destaques:
            - Mergulho com snorkel: Explore as águas cristalinas e os corais coloridos dos Parrachos de Maracajaú enquanto nada com uma variedade de peixes tropicais.

            - Mergulho autônomo: Se você é um mergulhador certificado, pode explorar ainda mais as profundezas dos recifes de coral.

            - Observação da vida marinha: Os recifes são habitados por uma rica vida marinha, incluindo tartarugas marinhas, arraias e peixes-papagaio.

            - Passeios de barco: Os passeios de barco até os Parrachos de Maracajaú são uma experiência inesquecível.

            Acessibilidade:
            - Os passeios de barco podem acomodar visitantes com mobilidade reduzida, mas o mergulho em si pode ser desafiador.

            Como Chegar:
            - Os Parrachos de Maracajaú são acessíveis por passeios de barco a partir de Maracajaú.

            Horário de Funcionamento:
            - Os passeios de barco estão disponíveis durante todo o ano, mas é aconselhável verificar as condições do mar e agendar com antecedência.

            Explore a beleza subaquática dos Parrachos de Maracajaú e maravilhe-se com a vida marinha colorida.
        ',
        'classification' => '5 estrelhas',
        'accessibility' => 'Disponível',
        'id' => '1',
    ],
];

    $query = "SELECT COUNT(*)  FROM tb_pontos_turisticos";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result[0] == 0) {
        $Sights = new SightsModel($con);
        $city = new CityModel($con);

        foreach ($sights as $sightName => $sightInfo) {
            $result = $Sights->find($sightName);

            if (!$result) {
                $Sights->save($sightName, $sightInfo['description'], $sightInfo['classification'], $sightInfo['accessibility'], $sightInfo['neighborhood'], $sightInfo['street'], $sightInfo['id']);
            }
        }
    }
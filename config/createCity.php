<?php
    use sql\Connection;
    use web\Models\CityModel;
    $con = Connection::getInstance();

    $citys = [
        'Natal' => [
            'name' => 'Natal',
            'population' => 'Aproximadamente 890.480 habitantes',
            'weather' => 'Natal possui um clima tropical úmido, caracterizado por temperaturas quentes e alta umidade ao longo de praticamente todo o ano. Esse tipo de clima é influenciado principalmente pela proximidade do Oceano Atlântico, que regula as temperaturas e traz a brisa do mar para a cidade.

            As estações do ano em Natal são menos definidas do que em regiões de clima temperado. A cidade tem uma estação chuvosa e uma estação seca, mas as variações de temperatura são relativamente suaves. A temperatura média anual varia entre 25°C e 28°C.
            
            Estação Chuvosa:
            A estação chuvosa em Natal ocorre entre os meses de março a julho. Durante esse período, a cidade recebe chuvas frequentes e intensas, contribuindo para o verde exuberante da paisagem. Os dias podem alternar entre sol e pancadas de chuva, mas a umidade permanece alta.
            
            Estação Seca:
            A estação seca abrange os meses de agosto a fevereiro. Durante essa época, as chuvas são menos frequentes, e os dias costumam ser ensolarados e quentes. A brisa do mar ajuda a amenizar o calor, tornando o clima mais agradável, especialmente nas áreas litorâneas.',
            'descrepition' => 'Natal, capital do Rio Grande do Norte, é uma cidade que combina a beleza natural das praias paradisíacas com a riqueza cultural de suas tradições locais. Com um clima tropical úmido, a cidade recebe calor e sol praticamente o ano todo, tornando-se um destino turístico popular.

            A cidade é conhecida por suas extensas faixas de areia dourada, onde visitantes e moradores podem desfrutar de dias ensolarados, praticar esportes aquáticos e contemplar belos entardeceres. As praias urbanas como Ponta Negra e Praia do Forte são pontos de encontro animados.
            
            Além das belezas naturais, Natal oferece uma variedade de atrações culturais, como o Centro Histórico, onde edifícios coloniais e igrejas antigas contam a história da região. A culinária é rica em sabores do mar, com frutos do mar frescos e pratos tradicionais da região.
            
            Não deixe de explorar os mercados locais, onde artesanato, produtos típicos e lembranças estão à venda. A hospitalidade do povo natalense é calorosa e acolhedora, tornando a visita à cidade uma experiência inesquecível.',
        ],
        'Pipa' => [
            'name' => 'Pipa',
            'population' => 'Aproximadamente 10.000 habitantes',
            'weather' => 'Pipa possui um clima tropical que é influenciado pela proximidade do Oceano Atlântico. As temperaturas são geralmente amenas e agradáveis durante todo o ano, tornando-a um destino turístico popular.
    
                A cidade apresenta duas estações bem definidas: uma estação seca e uma estação chuvosa. Durante a estação chuvosa, que ocorre de março a julho, Pipa recebe chuvas regulares que mantêm a vegetação exuberante e a paisagem verdejante. Já na estação seca, de agosto a fevereiro, as chuvas diminuem significativamente, resultando em dias ensolarados e céu claro.
                
                As temperaturas médias anuais variam entre 24°C e 30°C, proporcionando um ambiente agradável para os visitantes. A água do mar também mantém uma temperatura aconchegante, variando de 26°C a 28°C durante todo o ano.
                
                O clima de Pipa é perfeito para desfrutar das praias e atividades ao ar livre, como a observação de golfinhos, passeios de barco e trilhas em meio à natureza.',
            'descrepition' => 'Localizada no litoral sul do Rio Grande do Norte, Pipa é uma charmosa vila que combina belezas naturais com uma atmosfera descontraída. A praia de Pipa é famosa por suas falésias impressionantes, areias douradas e águas cristalinas. Com um clima agradável durante todo o ano, a cidade atrai turistas em busca de relaxamento e diversão.
                
                Além das praias deslumbrantes, Pipa oferece uma vida noturna animada, com diversos bares, restaurantes e festas. A vila é conhecida por sua atmosfera boêmia e acolhedora, atraindo pessoas de todo o mundo.
                
                A região também é um paraíso para os amantes do surfe e dos esportes aquáticos, com ondas ideais para iniciantes e experientes. Além disso, é possível fazer passeios de barco para conhecer a vida marinha local e visitar a Praia do Amor, que tem esse nome devido à sua forma de coração.
                
                Pipa é um destino encantador para quem busca paisagens deslumbrantes, atividades emocionantes e momentos relaxantes à beira-mar.',
        ],
        'Rio do Fogo' => [
            'name' => 'Rio do Fogo',
            'population' => 'Aproximadamente 11.000 habitantes',
            'weather' => 'Rio do Fogo possui um clima tropical que é influenciado pela proximidade do Oceano Atlântico. As temperaturas são quentes durante todo o ano, tornando a cidade um destino convidativo para quem gosta de sol e praia.
    
                A cidade apresenta uma estação chuvosa e uma estação seca bem definidas. A estação chuvosa ocorre de março a julho, com chuvas frequentes que mantêm a paisagem verde e exuberante. Durante a estação seca, de agosto a fevereiro, as chuvas diminuem significativamente, resultando em dias ensolarados e quentes.
                
                As temperaturas médias anuais variam entre 25°C e 30°C, sendo os meses mais quentes entre dezembro e fevereiro. A água do mar também mantém uma temperatura agradável, variando entre 26°C e 28°C.
                
                O clima de Rio do Fogo é perfeito para aproveitar as praias tranquilas e praticar esportes aquáticos, como o surfe e o mergulho. A brisa do mar ameniza o calor e proporciona um ambiente relaxante e agradável.',
            'descrepition' => 'Localizada no litoral norte do Rio Grande do Norte, Rio do Fogo é uma cidade costeira que oferece belas praias e um ambiente tranquilo. A cidade é conhecida por suas extensas faixas de areia, águas cristalinas e coqueirais que emolduram a paisagem.
                
                As praias de Rio do Fogo são ideais para quem busca sossego e contato direto com a natureza. Além do banho de mar, os visitantes podem desfrutar de caminhadas à beira-mar, passeios de barco e atividades aquáticas.
                
                A cidade é também um ponto de partida para explorar outras praias próximas e áreas naturais preservadas. Com uma atmosfera relaxante, Rio do Fogo é perfeita para quem deseja escapar do agito da vida urbana e se conectar com a tranquilidade do litoral potiguar.',
        ],
        'São Miguel do Gostoso' => [
            'name' => 'São Miguel do Gostoso',
            'population' => 'Aproximadamente 9.000 habitantes',
            'weather' => 'São Miguel do Gostoso possui um clima tropical, influenciado pela proximidade do Oceano Atlântico. As temperaturas são quentes ao longo de todo o ano, tornando a cidade um destino agradável para quem gosta de sol e praia.
    
                A cidade apresenta uma estação chuvosa e uma estação seca bem definidas. Durante a estação chuvosa, de março a julho, ocorrem chuvas frequentes e intensas, mantendo a vegetação exuberante. Já a estação seca, de agosto a fevereiro, é marcada por dias ensolarados e temperaturas mais elevadas.
                
                As temperaturas médias anuais variam entre 25°C e 30°C, sendo os meses mais quentes entre dezembro e fevereiro. A água do mar mantém uma temperatura convidativa, variando entre 26°C e 28°C.
                
                O clima de São Miguel do Gostoso é perfeito para aproveitar as praias paradisíacas, praticar esportes aquáticos e desfrutar de um ambiente descontraído à beira-mar.',
            'descrepition' => 'São Miguel do Gostoso é uma encantadora cidade litorânea do Rio Grande do Norte. Conhecida por suas praias de areias claras e águas cristalinas, a cidade atrai turistas em busca de tranquilidade e belezas naturais.
                
                As praias de São Miguel do Gostoso são ideais para relaxar, tomar sol e praticar esportes como o kitesurf e o windsurf, devido aos ventos favoráveis. Além disso, a cidade oferece passeios de buggy pelas dunas e oportunidades para conhecer a cultura local.
                
                A atmosfera descontraída e o charme rústico de São Miguel do Gostoso conquistam quem busca se afastar das multidões e apreciar a simplicidade do litoral nordestino.',
        ],
        'Santa Cruz' => [
            'name' => 'Santa Cruz',
            'population' => 'Aproximadamente 40.000 habitantes',
            'weather' => 'Santa Cruz possui um clima tropical de savana, também conhecido como clima Aw. As temperaturas são elevadas ao longo do ano, com uma estação chuvosa e uma estação seca bem definidas.
    
                Durante a estação chuvosa, que ocorre de março a julho, as chuvas são frequentes e intensas, contribuindo para a vegetação da região. Já na estação seca, de agosto a fevereiro, as chuvas são mais escassas, e o calor predomina.
                
                As temperaturas médias anuais variam entre 25°C e 30°C, sendo os meses mais quentes entre dezembro e fevereiro. A brisa constante é uma característica marcante do clima de Santa Cruz, proporcionando alívio nos dias mais quentes.
                
                Esse clima tropical é ideal para quem aprecia a vida ao ar livre, aproveitando as belezas naturais da região, como as lagoas, trilhas e a rica cultura local.',
            'descrepition' => 'Santa Cruz é uma cidade localizada no interior do Rio Grande do Norte. Com um clima tropical de savana, a cidade oferece um ambiente acolhedor e a oportunidade de explorar a natureza e as tradições da região.
                
                Além das atrações naturais, Santa Cruz é conhecida por seu patrimônio religioso, como a famosa estátua de Santa Rita de Cássia, padroeira da cidade. A estátua é um importante ponto de peregrinação e oferece uma vista panorâmica da região.
                
                A cidade também é palco de festividades culturais, como o Carnaval e a Festa de Santa Rita, que reúnem moradores e visitantes para celebrar a cultura e a fé local.',
        ],
        'Mossoró' => [
            'name' => 'Mossoró',
            'population' => 'Aproximadamente 297.378 habitantes',
            'weather' => 'Mossoró possui um clima tropical semiárido, com características de um clima BSh, segundo a classificação de Köppen. Isso significa que a cidade apresenta temperaturas elevadas e baixa umidade ao longo do ano.
    
                As temperaturas em Mossoró são geralmente altas, com médias anuais variando entre 26°C e 28°C. Os meses mais quentes ocorrem entre setembro e fevereiro. A cidade também apresenta uma estação chuvosa e uma estação seca bem definidas.
                
                A estação chuvosa em Mossoró ocorre de fevereiro a maio. Nesse período, a cidade recebe chuvas moderadas, que contribuem para a vegetação local e a produção agrícola da região. A estação seca, de junho a janeiro, é caracterizada por baixos índices de chuva e umidade.
                
                A brisa constante é uma característica do clima semiárido de Mossoró, amenizando as altas temperaturas durante o dia.
                
                Apesar do clima seco, Mossoró oferece atrações naturais e culturais que tornam a cidade um local interessante para visitar e explorar.',
            'descrepition' => 'Mossoró é uma cidade localizada na região Oeste do Rio Grande do Norte. Com um clima tropical semiárido, a cidade apresenta temperaturas elevadas e uma paisagem característica do sertão nordestino.
                
                Além das belezas naturais da região, Mossoró é conhecida por suas festas e tradições culturais. O Mossoró Cidade Junina é um dos maiores eventos juninos do Nordeste, atraindo visitantes de várias partes do país.
                
                A cidade também é reconhecida por sua rica história e patrimônio, incluindo a famosa Resistência de Mossoró, evento que marcou a cidade durante a época do cangaço.',
        ],
        'Martins' => [
            'name' => 'Martins',
            'population' => 'Aproximadamente 8.000 habitantes',
            'weather' => 'Martins possui um clima tropical de altitude, com características de um clima Cwb, segundo a classificação de Köppen. Essa classificação é característica de áreas de altitude moderada, como serras e chapadas.
    
                O clima de Martins é mais ameno do que o de outras regiões do Rio Grande do Norte, devido à sua localização na Serra de Martins. A temperatura média anual varia entre 19°C e 21°C, sendo mais baixa durante o inverno.
                
                A cidade apresenta estações bem definidas, com um período chuvoso e um período seco. A estação chuvosa ocorre entre os meses de fevereiro e maio, enquanto a estação seca vai de junho a janeiro. As temperaturas são mais baixas durante o inverno, proporcionando um clima agradável e fresco.
                
                A Serra de Martins é um dos atrativos naturais da região, oferecendo um ambiente tranquilo e vistas panorâmicas. As temperaturas mais baixas e o ar puro da serra tornam Martins um destino aconchegante para quem busca um clima mais frio no Nordeste.',
            'descrepition' => 'Martins é uma cidade serrana localizada no Rio Grande do Norte. Com um clima mais ameno devido à sua altitude, a cidade oferece um refúgio fresco em meio ao calor do Nordeste.
                
                Além do clima agradável, Martins é conhecida por suas paisagens naturais, que incluem a Serra de Martins e o Portal da Serra. A cidade também possui um calendário cultural movimentado, com festivais e eventos que celebram a cultura local.
                
                A gastronomia de Martins é marcada por pratos típicos da região serrana, como fondue e chocolates artesanais. A hospitalidade dos moradores e o clima tranquilo tornam Martins um destino charmoso para quem deseja aproveitar o Nordeste de uma maneira diferente.',
        ],
        'Caicó' => [
            'name' => 'Caicó',
            'population' => 'Aproximadamente 69.000 habitantes',
            'weather' => 'Caicó possui um clima tropical semiárido, caracterizado por altas temperaturas e chuvas concentradas em determinadas épocas do ano. Esse tipo de clima é comum em grande parte do interior do Nordeste brasileiro.
    
                As temperaturas em Caicó são elevadas durante quase todo o ano. A média anual varia entre 27°C e 32°C. O mês mais quente costuma ser janeiro, enquanto julho é o mais ameno. As chuvas são mais frequentes entre os meses de fevereiro e maio, período conhecido como inverno.
                
                O clima semiárido também influencia a vegetação da região. Durante o inverno, a paisagem se torna mais verde, com o surgimento de vegetação e floração das plantas. Já no período de estiagem, a vegetação pode se tornar mais seca e adaptada às condições climáticas.
                
                Apesar do calor intenso, o clima de Caicó é amenizado pelo vento constante, que sopra durante boa parte do ano. Esse vento, conhecido como "brisa sertaneja", contribui para amenizar a sensação térmica e proporciona um alívio ao calor.',
            'descrepition' => 'Caicó é uma cidade localizada no interior do Rio Grande do Norte, conhecida por sua rica história e cultura. Com um clima semiárido, a cidade exibe paisagens que refletem as características do sertão nordestino.
                
                A cidade é famosa por seu tradicional Carnaval, que atrai visitantes de diversas regiões. Além disso, Caicó abriga diversos eventos culturais e festas populares ao longo do ano, celebrando a cultura e a religiosidade local.
                
                A gastronomia caicoense é marcada por pratos típicos da região, como carne de sol, queijo coalho e rapadura. A cidade também é um ponto de partida para quem deseja explorar as belezas naturais do Seridó, região serrana do estado.',
        ],
    ];

    $query = "SELECT COUNT(*)  FROM tb_cidades";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result[0] == 0) {
        $cityModel = new CityModel($con);

        foreach ($citys as $cityName => $cityInfo) {
            $result = $cityModel->find($cityName);

            if (!$result) {
                $cityModel->save($cityName, $cityInfo['population'], $cityInfo['weather'], $cityInfo['descrepition']);
            }
        }
    }

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
    <title>Painel de Controle - INSPIRERN</title>
</head>
<body>
    <section class="bg-gray50 relative">
    <div class="container mx-auto flex space-x-20">
        <div class="mt-10">
            <h1 class="text-gray-950 text-2xl p-4 font-medium">Configurações de Conta</h1>
            <p class="pl-4 mb-2">Este é o seu espaço de controle, onde você pode gerenciar facilmente suas configurações e interações.</p>
            <div>
                <button onclick="showDiv(divPersonalData);" class="p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="pr-2"><ion-icon name="person-outline"></ion-icon></span>Dados Pesoais</button>
            </div>
            <div>
                <button onclick="showDiv(divEmail);" class="p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="pr-2"><ion-icon name="mail-outline"></ion-icon></span>Email</button>
            </div>
            <div>
                <button onclick="showDiv(divPassword)" class="p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="pr-2"><ion-icon name="lock-closed-outline"></ion-icon></span>Senha</button>
            </div>
            <div>
                <button onclick="showDiv(divAdditionalSettings)" class="p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="pr-2"><ion-icon name="settings-outline"></ion-icon></span>Configurações Adicionais</button>
            </div>
            <div>
                <button onclick="redirect('/login')" class="p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="pr-2"><ion-icon name="person-add-outline"></ion-icon></span>Adicionar outra Conta</button>
            </div>
            <div>
                <button onclick="showDiv(cardDeleteAccount)" class="p-4 text-lg text-left w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="pr-2"><ion-icon name="trash-outline"></ion-icon></span>Apagar Contar</button>
            </div>
            <div>
                <button onclick="redirect('/logout')" class="p-4 text-lg text-left text-red-500 w-full border rounded-md border-transparent hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="pr-2"><ion-icon name="exit-outline"></ion-icon></span>Sair</button>
            </div>
        </div>
        <div id="divPersonalData" class="mt-10">
            <div>
                <h2 class="text-gray-950 text-2xl font-medium py-4">Dados Pessoais</h2>
                <p class="mb-5">Esses são Seus Dados Pessoais: Valorizamos sua privacidade e usamos essas informações para oferecer uma experiência personalizada e segura. Fique tranquilo, seus dados estão protegidos e não serão compartilhados com terceiros.</p>
                <div class="bg-gray-200 border rounded-md shadow-md p-2 my-4 flex justify-between">
                    <div>
                        <h3 class="font-semibold">Nome</h3>
                        <?php echo "<p>$userData[cli_nome]</p>"?>
                    </div>
                    <button><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                </div>
                <div class="bg-gray-200 border rounded-md shadow-md p-2 my-4 flex justify-between">
                    <div>
                        <h3 class="font-semibold">Telefone</h3>
                        <?php echo "<p>$userData[cli_telefone]</p>"?>
                    </div>
                    <button><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                </div>
                <div class="bg-gray-200 border rounded-md shadow-md p-2  my-4 flex justify-between">
                    <div>
                        <h3 class="font-semibold">Cidade</h3>
                        <?php echo "<p>$userData[cli_cidade]</p>"?>
                    </div>
                    <button><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                </div> 
                <div class="bg-gray-200 border rounded-md shadow-md p-2  my-4 flex justify-between"> 
                    <div>
                        <h3 class="font-semibold">Estado</h3>
                        <?php echo "<p>$userData[cli_estado]</p>"?>
                    </div>  
                    <button><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                </div>
                <button onclick="showDiv(cardEditeData)" class="p-2 text-lg text-left border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50"><span><ion-icon name="create-outline"></ion-icon></span> Alterar Dados</button>
            </div>
        </div>
        <div id="divEmail" class="mt-10">
            <div>
                <h2 class="text-gray-950 text-2xl font-medium py-4">Email</h2>
                <p class="mb-5">Esse é seu email: Valorizamos sua privacidade e usamos essa informação para conseguimos te indetificar. Fique tranquilo, seus dados estão protegidos e não serão compartilhados com terceiros.</p>
                <div class="bg-gray-200 border rounded-md shadow-md p-2 my-4 flex justify-between">
                    <div>
                        <h3 class="font-semibold">Email</h3>
                        <?php echo "<p>$userData[cli_email]</p>"?>
                    </div>
                    <button><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                </div>
                <button onclick="showDiv(cardEditeEmail)" class="p-2 text-lg text-left border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50"><span><ion-icon name="create-outline"></ion-icon></span> Alterar Email</button>
            </div>
        </div>
        <div id="divPassword" class="mt-10">
            <div>
                <h2 class="text-gray-950 text-2xl font-medium py-4">Senha</h2>
                <p class="mb-5">Essa é sua senha: Valorizamos sua privacidade e usamos essa informação para conseguimos te indetificar. Fique tranquilo, seus dados estão protegidos e não serão compartilhados com terceiros.</p>
                <div class="bg-gray-200 border rounded-md shadow-md p-2 my-4 flex justify-between">
                    <div>
                        <h3 class="font-semibold">Senha</h3>
                        <p>********</p>
                    </div>
                    <button><span class="p-2 mt-1"><ion-icon name="pencil-outline"></ion-icon></span></button>
                </div>
                <button onclick="showDiv(cardEditePassword)" class="p-2 text-lg text-left border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50"><span><ion-icon name="create-outline"></ion-icon></span> Alterar Senha</button>
            </div>
        </div>
        <div id="divAdditionalSettings" class="mt-10 w-full">
            <div>
                <h2 class="text-gray-950 text-2xl font-medium py-4">Configurações Adicionais</h2>
                <p class="mb-5">Navegue por outras configurações e personalize sua esperiência com o nosso site. Aqui você encontra mais suporte para resolver seus problemas.</p>
                <div class="text-lg text-blue-600 flex flex-col">
                    <a class="hover:underline" href="/pages">Temas</a>  
                    <a class="hover:underline" href="/pages">Favorito</a>   
                    <a class="hover:underline" href="/pages">Ajuda</a>  
                    <a class="hover:underline" href="/pages">Privacidade</a> 
                    
                    <?php 
                        if($_SESSION['userData']['cli_tipo'] == 'super') {
                            echo "<a class='hover:underline' href='/homeSuper'>Configurações de Cidades</a>";
                            echo "<a class='hover:underline' href='/homeSeghtsSuper'>Configurações de Pontos Turísticos</a>";
                            echo "<a class='hover:underline' href='/homeRestaurantSuper'>Configurações de Restaurantes</a>";
                            echo "<a class='hover:underline' href='/homeAccommodationSuper'>Configurações de Hospedagens</a>";
                        }
                    ?>

                </div>
            </div>
        </div>
        <a href="/" class="text-4xl mt-7 h-10 border rounded-md border-transparent hover:scale-125 transform ease-in-out hover:bg-gray-200 hover:text-gray-600"><span><ion-icon name="close-outline"></ion-icon></span></a>
    </div>
        <div id="cardEditeData" class="w-screen h-screen z-40 absolute backdrop-blur-sm top-0 left-0">
            <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
                <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                    <h2 class="text-gray-950 text-xl font-medium py-1">Edite seus dados</h2>
                    <p>Atualize seus dados para ajuda-nos a melhorar suas esperiência</p>
                    <form action="/updateUser" method="POST" class="flex flex-col space-y-1 mt-2">
                        <label for="name" class="pl-1 ">Nome</label>
                        <input type="text" name="name" id="name" placeholder="<?php echo $userData['cli_nome']; ?>" class="border rounded-md p-2">
                        <label for="city" class="pl-1 pt-2">Cidade</label>
                        <input type="text" name="city" id="city" placeholder="<?php echo $userData['cli_cidade']; ?>" class="border rounded-md p-2">
                        <label for="state" class="pl-1 pt-2">Estado</label>
                        <input type="text" name="state" id="state" placeholder="<?php echo $userData['cli_estado']; ?>" class="border rounded-md p-2">
                        <label for="phoneNumber" class="pl-1 pt-2">Telefone</label>
                        <input type="text" name="phoneNumber" id="phoneNumber" placeholder="<?php echo $userData['cli_telefone']; ?>" class="border rounded-md p-2">
                        <div class="py-2">
                            <button type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Salvar Alterações</button>
                            <a href="" type="button" onclick="showDiv(cardEditeData)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="cardEditeEmail" class="w-screen h-screen z-40 absolute backdrop-blur-sm top-0 left-0">
            <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
                <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                    <h2 class="text-gray-950 text-xl font-medium py-1">Edite seu email</h2>
                    <p>Atualize seus dados para ajuda-nos a melhorar suas esperiência</p>
                    <form action="/updateUser" method="POST" class="flex flex-col space-y-1 mt-2">
                        <label for="name" class="pl-1 ">Email</label>
                        <input type="text" name="email" id="email" placeholder="<?php echo $userData['cli_email']; ?>" class="border rounded-md p-2">
                        <div class="py-2">
                            <button type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Salvar Alterações</button>
                            <a  href="" onclick="showDiv(cardEditeEmail)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="cardDeleteAccount" class="w-screen h-screen z-40 absolute hidden backdrop-blur-sm top-0 left-0">
            <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
                <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                    <h2 class="text-gray-950 text-xl font-medium py-1">Excluir Conta</h2>
                    <p>Tem certeza de que deseja excluir sua conta? Essa ação não pode ser desfeita. Caso queira confirme seu login abaixo:</p>
                    <form action="/deleteUser" method="POST" class="flex flex-col">
                        <input type="email" name="email" id="email" placeholder="Email" class="border rounded-md p-2 my-2">
                        <input type="password" name="password" id="password" placeholder="Senha" class="border rounded-md p-2">
                        <div>
                            <button type="submit" class="p-2 my-4 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-red-500 text-gray-50">Excluir</button>
                            <a href="" onclick="showDivDeleteAccount()" class="p-2 border rounded-md border-transparent bg-gray-200 text-red-500">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="cardEditePassword" class="w-screen h-screen z-40 absolute backdrop-blur-sm top-0 left-0">
            <div class="bg-black-gd w-screen h-screen flex items-center justify-center">
                <div class="bg-gray-100 w-1/2 border rounded-md shadow-md px-10 py-5">
                    <h2 class="text-gray-950 text-xl font-medium py-1">Edite sua senha</h2>
                    <p>Atualize seus dados para ajuda-nos a melhorar suas esperiência</p>
                    <form action="/updateUser" method="POST" class="flex flex-col space-y-1 mt-2">
                        <input type="password" name="password" id="password" placeholder="Senha Atual" class="border rounded-md p-2">
                        <input type="password" name="newPassword" id="newPassword" minlength="8" placeholder="Nova Senha" class="border rounded-md p-2">
                        <input type="password" placeholder="Confirme a nova senha" minlength="8" class="border rounded-md p-2">
                        <div class="py-2">
                            <button type="submit" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-blue-600 text-gray-50">Salvar Alterações</button>
                            <a href="" onclick="showDiv(cardEditePassword)" class="p-2 border rounded-md border-transparent hover:scale-105 transform ease-in-out bg-gray-200 text-red-500">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>

        const cardEditeData = document.querySelector('#cardEditeData');
        const divPersonalData = document.querySelector('#divPersonalData');
        const divEmail = document.querySelector('#divEmail');
        const divPassword = document.querySelector('#divPassword');
        const divAdditionalSettings = document.querySelector('#divAdditionalSettings');
        const cardEditeEmail = document.querySelector('#cardEditeEmail');
        const cardDeleteAccount = document.querySelector('#cardDeleteAccount');
        const cardEditePassword = document.querySelector('#cardEditePassword');

        let divs = [cardEditeData, divPersonalData, divEmail, divPassword, divAdditionalSettings, cardDeleteAccount ,cardEditeEmail, cardEditePassword];

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

        function redirect(redirectName)
        {
            window.location.href = redirectName;
        }

        showDiv(divPersonalData)
    </script>
</body>
</html>
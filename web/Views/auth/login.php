<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../../../public/css/output.css">
    <link rel="shortcut icon" href="../../../public/img/favicon.ico.png" type="image/x-icon">
    <title>Login - INSPIRERN</title>
</head>
<body>
    <section class="bg-gray-50 flex h-screen w-screen">
        <button onclick="goBack()" class="absolute left-0 top-0 p-4 m-4 text-3xl hover:bg-gray-200 border rounded-md border-transparent hover:scale-105 transition duration-150 ease-in-out">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </button>
        <div class="m-auto">
            
                <h1 id="titulo" class="text-sky-950 text-5xl text-center pb-10">Entrar</h1>

                <!--form de login-->
                <form action="/loginController" method="POST" id="formLogin" class="flex flex-col space-y-5 ">
                    <input type="email" placeholder="Email" name="email" class="w-96 h-12 p-1 bg-gray-200 border text-lg  rounded-md hover:shadow-sm">
                    <input type="password" placeholder="Senha" name="password" class="w-96 h-12 p-1 bg-gray-200 text-lg  border rounded-md shadow-sm">
                    <?php 
                        if(!empty($incorrectLogin)) {
                            echo "<p class='text-red-500 text-sm border rounded-md border-red-500 p-2'>Ops! Email ou senha incorreto. Tente novamente!</p>";
                        }

                        if(!empty($emptyLogin)) {
                            echo "<p class='text-red-500 text-sm border rounded-md border-red-500 p-2'>Ops! Você deve digitar um email e uma senha</p>";
                        }
                    ?>
                    <div class="flex justify-between">
                        <div class="text-lg ">
                            <input type="checkbox">
                            <label>Lembrar senha</label>
                        </div>
                        <a href="/forgotPassword" class="hover:text-blue-500 text-lg  hover:underline">Esqueceu sua senha?</a>
                    </div>
                    <button type="submit" id="input_submit" class="bg-blue-500 hover:bg-blue-600 text-lg  text-gray-50 hover:scale-105 transition duration-150 ease-in-out h-12 border rounded-md shadow-sm">Entrar</button>
                    <button type="submit" id="input_submit" class="h-12 border rounded-md text-lg shadow-sm hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="mr-3"><ion-icon name="logo-google"></ion-icon></span>Entrar com Google</button>
                    <p class="text-center">Não tem uma conta? <a onclick="casdastrar()" class="text-blue-600 text-lg  hover:underline">Cadastra-se</a></p>
                </form>

                <!--form de cadastro-->
                <form action="/registerController" method="POST" id="formCasdastro" class="flex-col space-y-5 text-lg hidden">
                    <input type="text" placeholder="Nome" name="name" class="w-96 h-12 p-1 bg-gray-200 border rounded-md shadow-sm">
                    <div class="flex justify-between">
                        <input type="text" placeholder="Cidade" name="city" class="w-44 h-12 p-1 bg-gray-200 border rounded-md shadow-sm">
                        <input type="text" placeholder="Estado" name="state" class="w-48 h-12 p-1 bg-gray-200 border rounded-md shadow-sm">
                    </div>
                    <input type="text" placeholder="Telefone" name="phoneNumber" class="w-96 h-12 p-1 bg-gray-200 border rounded-md shadow-sm">
                    <input type="email" placeholder="Email" name="email" class="w-96 h-12 p-1 bg-gray-200 border rounded-md shadow-sm">
                    <input type="password" placeholder="Senha" name="password" value="" minlength="8" class="w-96 h-12 p-1 bg-gray-200 border rounded-md shadow-sm"onkeyup="validatePassword()">
                    <!--<p id="password-feedback" class="text-base">A senha deve ter 8 caracteres<br>Deve ter letras, números e  caracteres especiais.</p>-->

                    <?php 
                        if(!empty($incorrectRegister)) {
                            echo "<p class='text-red-500 text-sm border rounded-md border-red-500 p-2'>Ops! Este email não é valido.</p>";
                        }

                        if(!empty($emptyRegister)) {
                            echo "<p class='text-red-500 text-sm border rounded-md border-red-500 p-2'>Ops! Você deve digitar os dados para proseguir</p>";
                        }
                    ?>
                    <button type="submit" id="input_submit" class="bg-blue-500 hover:bg-blue-600 text-gray-50 hover:scale-105 transition duration-150 ease-in-out h-12 border rounded-md shadow-sm">Cadastra-se</button>
                    <button type="submit" id="input_submit" class="h-12 border rounded-md shadow-sm hover:scale-105 transform ease-in-out hover:bg-gray-200"><span class="mr-3"><ion-icon name="logo-google"></ion-icon></span>Entrar com Google</button>
                    <p class="text-center">Já tem uma conta? <a onclick="entrar()" class="text-blue-600 hover:underline">Fazer Login</a></p>
                </form>
            </div>
        </div>
            <div>
                <img src="../../../public/img/praia-login.jpg" alt="" class="h-full">
            </div>
    </section> 
    <script>

        const titulo = document.querySelector('#titulo');
        const formLogin = document.querySelector('#formLogin');
        const formCasdastro = document.querySelector('#formCasdastro');

        //Função para adicionar o form de entrar
        function entrar()
        {
            titulo.textContent = 'Login';
            formCasdastro.classList.add('hidden');
            formLogin.classList.remove('hidden');
            formLogin.classList.add('flex');
        }

        //Função para adicionar o form de cadastro
        function casdastrar()
        {
            titulo.textContent = 'Cadastre-se';
            formLogin.classList.add('hidden');
            formCasdastro.classList.remove('hidden');
            formCasdastro.classList.add('flex');
        }

        /**function validatePassword() {
            const password = document.getElementById('password').value;
            const feedback = document.getElementById('password-feedback');

            // Verifica critérios de complexidade
            const hasLength = password.length >= 8;
            const hasUppercase = /[A-Z]/.test(password);
            const hasLowercase = /[a-z]/.test(password);
            const hasNumber = /\d/.test(password);
            const hasSpecialChar = /[!@#$%^&*()]/.test(password);

            // Atualiza o feedback visual
            if (hasLength && hasUppercase && hasLowercase && hasNumber && hasSpecialChar) {
                feedback.classList.add('text-green-600');
            } else {
                feedback.classList.add('bg-gray-600');
            }
        }*/
    </script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
     <?php 
        if(!empty($incorrectRegister) || !empty($emptyRegister)) {
            echo "<script>casdastrar()</script>";
        }
    ?>
</body>
</html>
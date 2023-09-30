<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../../../public/css/output.css">
    <link rel="shortcut icon" href="../../../public/img/favicon.ico.png" type="image/x-icon">
    <title>Esqueceu Senha - INSPIRERN</title>
</head>
<body>
    <section class="bg-gray-50 flex h-screen w-screen">
        <button onclick="goBack()" class="absolute left-0 top-0 p-4 m-4 text-3xl hover:bg-gray-200 border rounded-md border-transparent hover:scale-105 transition duration-150 ease-in-out">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </button>
        <div class="container mx-auto flex items-center justify-center">
            <div id="formForgotPassWord" class="bg-gray-200 border rounded-md w-1/2 p-10 flex flex-col text-center items-center space-y-10">
                <h1 id="titulo" class="text-sky-950 text-5xl text-center">Recuperar senha</h1>
                <p>Para recuperar sua senha coloque o email correspodente a sua conta, enviaremos uma nova senha por email para você utilizar.</p>
                <form action="/forgotPassawordController" method="POST" class="flex mt-3">
                    <input type="email" placeholder="Email" name="email" class="w-96 h-12 p-1 bg-gray-100 border text-lg  rounded-md hover:shadow-sm">
                    <button type="submit" id="input_submit" class="bg-blue-500 w-20 hover:bg-blue-600 text-lg  text-gray-50 hover:scale-105 transition duration-150 ease-in-out h-12 border rounded-md shadow-sm">Enviar</button>
                </form>
                <?php 
                    if(!empty($send)) {
                        echo "<p class='text-red-500 text-sm border rounded-md border-red-500 p-2'>Ops! Email não encontrado na nossa base de dados</p>";
                    }
                ?>
            </div>
            <div id="passwordSend" class="bg-gray-200 border rounded-md w-1/2 p-10 flex items-center justify-center">
                <span class="text-4xl text-green-600 pt-2"><ion-icon name="checkmark-circle-outline"></ion-icon></span>
                <p class='text-green-600 text-2xl border rounded-md p-2'>A nova senha foi enviada por email!</p>
            </div>
        </div>

        <script>
            const formForgotPassWord = document.querySelector('#formForgotPassWord');
            const passwordSend = document.querySelector('#passwordSend');

            let divs = [formForgotPassWord, passwordSend];

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
        </script>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>

        <?php 
            if(!empty($result)) {
                echo "<script>showDiv(passwordSend)</script>";
            } else {
                echo "<script>showDiv(formForgotPassWord)</script>";
            }
        ?>
    </section>
</body>
</html>
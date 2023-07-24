<?php 
    if(empty($_SESSION['name'])) {
        header('location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="image_login"></div>
       <section class="login">
            <h1>Cadastre um Evento</h1>
            <form class="form_login" action="/cadastreEvent" method="POST">
                <input type="text" placeholder="Nome do Evento" name="name">
                <div class="input_address">
                    <input type="date" placeholder="Data" name="date">
                    <input type="number" placeholder="Preço" name="price">
                </div>
                <input type="text" placeholder="Local" name="local">
                <textarea rows="3" placeholder="Descrição" name="description"></textarea>
                <input type="submit" value="Enviar" id="input_submit">
            </form>
            <p>Não quer mais cadastrar? <a href="/home">Voltar</a></p>
       </section> 
    </main>
</body>
</html>
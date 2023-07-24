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
            <h1>Preencha os campos</h1>
            <form class="form_login" action="/roteiro" method="POST">
                <input type="text" placeholder="Cidade" name="city">
                <input type="date" placeholder="Data" name="date">
                <input type="text" placeholder="Tipo de Atividade que prefere" name="activityPreferences">
                <input type="submit" value="Enviar" id="input_submit">
            </form>
            <p>Não quer mas montar? <a href="/home">Voltar</a></p>
       </section> 
    </main>
</body>
</html>
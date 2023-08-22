<?php 
   
   namespace Routes;

   use Router\Router;

   Router::get('/erro404', 'web/Views/erro404.html');
   Router::get('/', 'web/Controllers/homeController.php');
   Router::get('/login', 'web/Views/login.php');
   Router::post('/loginController', 'web/Controllers/userLoginController.php');
   Router::post('/registerController', 'web/Controllers/userRegisterController.php');
   Router::get('/logout', 'web/Controllers/userLogoutController.php');
   Router::post('/deleteUser', 'web/Controllers/userDeleteController.php');
   Router::post('/updateUser', 'web/Controllers/userUpdateController.php');
   Router::get('/forgotPassword', 'web/Views/forgotPassword.php');
   Router::post('/forgotPassawordController', 'web/Controllers/userForgotPasswordController.php');
   Router::get('/controlPanel', 'web/Controllers/controlPanelController.php');
   Router::get('/city', 'web/Views/city.php');

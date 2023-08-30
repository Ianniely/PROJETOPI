<?php 
   
   namespace Routes;

   use Router\Router;

   Router::get('/erro404', 'web/Views/erro404.html');
   Router::get('/', 'web/Controllers/homeController.php');
   Router::get('/homeSuper', 'web/Controllers/city/citySuperUserController.php');
   Router::get('/login', 'web/Views/login.php');
   Router::post('/loginController', 'web/Controllers/user/userLoginController.php');
   Router::post('/registerController', 'web/Controllers/user/userRegisterController.php');
   Router::get('/logout', 'web/Controllers/user/userLogoutController.php');
   Router::post('/deleteUser', 'web/Controllers/user/userDeleteController.php');
   Router::post('/updateUser', 'web/Controllers/user/userUpdateController.php');
   Router::get('/forgotPassword', 'web/Views/forgotPassword.php');
   Router::post('/forgotPassawordController', 'web/Controllers/user/userForgotPasswordController.php');
   Router::get('/controlPanel', 'web/Controllers/user/controlPanelController.php');
   Router::get('/citys', 'web/Views/citys.php');
   Router::get('/city', 'web/Views/city.php');
   Router::post('/cityRegister', 'web/Controllers/city/cityRegisterController.php');
   Router::post('/cityUpdate', 'web/Controllers/city/cityUpdateController.php');
   Router::post('/cityDelete', 'web/Controllers/city/cityDeleteController.php');
   Router::get('/sights', 'web/Views/sights.php');
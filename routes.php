<?php 
   
   namespace Routes;

   use Router\Router;

   Router::get('/erro404', 'web/Views/erro404.html');
   Router::get('/pages', 'web/Views/pages.html');
   Router::get('/', 'web/Controllers/homeController.php');
   Router::get('/homeSuper', 'web/Controllers/city/citySuperUserController.php');
   Router::get('/homeSeghtsSuper', 'web/Controllers/sights/sightsSuperUserController.php');
   Router::get('/homeRestaurantSuper', 'web/Controllers/restaurants/restaurantsSuperUserController.php');
   Router::get('/homeAccommodationSuper', 'web/Controllers/accommodation/accommodationSuperController.php');
   Router::get('/login', 'web/Views/auth/login.php');
   Router::post('/loginController', 'web/Controllers/user/userLoginController.php');
   Router::post('/registerController', 'web/Controllers/user/userRegisterController.php');
   Router::get('/logout', 'web/Controllers/user/userLogoutController.php');
   Router::post('/deleteUser', 'web/Controllers/user/userDeleteController.php');
   Router::post('/updateUser', 'web/Controllers/user/userUpdateController.php');
   Router::get('/forgotPassword', 'web/Views/auth/forgotPassword.php');
   Router::post('/forgotPassawordController', 'web/Controllers/user/userForgotPasswordController.php');
   Router::get('/controlPanel', 'web/Controllers/user/controlPanelController.php');
   Router::get('/citys', 'web/Controllers/city/citysController.php');
   Router::get('/city', 'web/Controllers/city/cityFindController.php');
   Router::post('/cityRegister', 'web/Controllers/city/cityRegisterController.php');
   Router::post('/cityUpdate', 'web/Controllers/city/cityUpdateController.php');
   Router::post('/cityDelete', 'web/Controllers/city/cityDeleteController.php');
   Router::get('/sights', 'web/Controllers/sights/sightsController.php');
   Router::get('/sight', 'web/Controllers/sights/sightsFindController.php');
   Router::post('/sightRegister', 'web/Controllers/sights/sightsRegisterController.php');
   Router::post('/sightUpdate', 'web/Controllers/sights/sightsUpdateController.php');
   Router::post('/sightDelete', 'web/Controllers/sights/sightsDeleteController.php');
   Router::post('/restaurantRegister', 'web/Controllers/restaurants/restaurantRegisterController.php');
   Router::post('/restaurantUpdate', 'web/Controllers/restaurants/restaurantUpdateController.php');
   Router::post('/restaurantDelete', 'web/Controllers/restaurants/restaurantDeleteController.php');
   Router::get('/restaurants', 'web/Controllers/restaurants/restaurantsController.php');
   Router::get('/restaurant', 'web/Controllers/restaurants/restaurantController.php');
   Router::get('/accommodations', 'web/Controllers/accommodation/accommodationsController.php');
   Router::post('/accommodationsRegister', 'web/Controllers/accommodation/accommodationsRegisterController.php');
   Router::post('/accommodationsUpdate', 'web/Controllers/accommodation/accommodationsUpdateController.php');
   Router::post('/accommodationsDelete', 'web/Controllers/accommodation/accommodationDeleteController.php');
   Router::get('/accommodation', 'web/Controllers/accommodation/accommodationController.php');
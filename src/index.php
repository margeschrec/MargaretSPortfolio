<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';
require '../db/db.php';

$app = AppFactory::create();


$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);


// $app->get('/{image}', function (Request $request, Response $response, $args) {
//     $image = $args['image'];
//     $response->getBody()->write(
//          '<a href="https://www.google.com/search?q=' . $image . '&sxsrf=ALeKk03rwuvHtKwkbUYzYm8BFiADwy9EeQ:1617301551404&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjO49zj1d3vAhXITd8KHZWSBM4Q_AUoAXoECAEQAw&biw=2560&bih=1330"> Link to google images</a>'
//     );
//     return $response;
// });

$app->get('/{customer}', function (Request $request, Response $response, $args) {
    $cust = $args['customer'];
    $response->getBody()->write(
    '<script language="javascript">
         alert("congratualations! ' . $cust . ' you are the 1,000,000,000,000th customer!")
         </script>'
    );
    return $response;
});

// $app->get('/customer/{name}/{age: [0-9]+}', function (Request $request, Response $response, $args) {
//     $name = $args['name'];
//     $age = $args['age'];
//     $response->getBody()->write(
//         "Hello welcomel, $name
//          is this your email, $age ? "
//     );
//     return $response;
// });

// $app->get('/{num1: [0-9]+}/{num2: [0-9]+}', function (Request $request, Response $response, $args) {
//     $num1 = $args['num1'];
//     $num2 = $args['num2'];
//     $response->json_encode($args)->getBody()->write(
//         "$num1 $num2"
//     );
//     return $response;
// });

// $app->get('/user/{num1: [0-9]+}', function (Request $request, Response $response, $args) {
//     $num1 = $args['num1'];
//     if ($num1 > 5) {
//     $response->getBody()->write(
//         "Thank you for your donation"
//     );
//     }else {
//     $response->getBody()->write(
//     "wow you are cheap");
//     }
//     return $response;
// });




// $app->get('/customer/{name}/{age: [0-9]+}', function (Request $request, Response $response, $args) {
//     $newCustomer = $args['name'];
//     $response->json($newCustomer);
//     return $response;
// });

// routes files include
require 'routes.php';


$app->run();

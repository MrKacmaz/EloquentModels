<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    // Users
    $app->get('/users', \App\Controller\UserController::class . ':index');

    // Posts
    $app->get('/posts', \App\Controller\PostController::class . ':index');
    $app->get('/posts/{post_id}/comments', \App\Controller\PostController::class . ':comment');

    // Comments
    $app->get('/comments', \App\Controller\CommentController::class . ':index');

};


<?php

namespace App\Controller;

use App\Models\Comment;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CommentController
{
    public function index(Request $request, Response $response, $args)
    {
        $comments = Comment::all();
        $response->getBody()->write(json_encode($comments, JSON_PRETTY_PRINT));
        return $response->withHeader('Content-Type', 'application/json');
    }
}

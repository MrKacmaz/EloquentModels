<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class PostController
{
    public function index(Request $request, Response $response, $args)
    {
        $posts = Post::all();
        $response->getBody()->write(json_encode($posts, JSON_PRETTY_PRINT));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function comment(Request $request, Response $response, $args)
    {
        $post_id = $args['post_id'];
        $post = Post::with('comments')->find($post_id);

        if (!$post) {
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json')->write(json_encode(['error' => 'Post not found'], JSON_PRETTY_PRINT));
        }

        $response->getBody()->write(json_encode($post->comments, JSON_PRETTY_PRINT));
        return $response->withHeader('Content-Type', 'application/json');
    }
}

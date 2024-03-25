<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Display a listing of posts.
     * Retrieves all posts from the database and returns them as a JSON response.
     *
     * @return JsonResponse The posts in JSON format.
     */
    public function index(): JsonResponse
    {
        // Retrieve all posts from the database
        $posts = Post::all(); // Simplified from Post::query()->get();

        // Return the posts as a JSON response with pretty print for readability
        return response()->json($posts, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Display comments for a specific post.
     * Finds a post by its ID and returns its comments as a JSON response.
     * If the post is not found, returns a 404 response.
     *
     * @param string $post_id The ID of the post to find comments for.
     * @return JsonResponse The comments for the specified post in JSON format, or a 404 error if the post is not found.
     */
    public function comment(string $post_id): JsonResponse
    {
        // Find the post by ID and load its comments relationship in one query to optimize performance
        $post = Post::with('comments')->find($post_id);

        // Check if the post was found
        if (!$post) {
            // Return a 404 response if the post is not found
            return response()->json(['error' => 'Post not found'], 404, [], JSON_PRETTY_PRINT);
        }

        // Return the post's comments as a JSON response with pretty print for readability
        return response()->json($post->comments, 200, [], JSON_PRETTY_PRINT);
    }
}

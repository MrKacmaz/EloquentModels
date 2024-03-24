<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    /**
     * Display a listing of all comments.
     *
     * This method fetches all comments using Eloquent's `all()` method which is more concise than `query()->get()`.
     * We then return these comments as a JSON response. The `JSON_PRETTY_PRINT` option is used to format
     * the output, making it more readable when directly viewed in a browser or a REST client.
     * The HTTP status code 200 is returned to indicate a successful operation.
     *
     * @return JsonResponse The comments in a JSON-formatted response.
     */
    public function index(): JsonResponse
    {
        // Fetch all comments from the database
        $comments = Comment::all(); // Simplified method to get all records

        // Return the comments as a JSON response with HTTP status code 200
        return response()->json($comments, 200, [], JSON_PRETTY_PRINT);
    }
}

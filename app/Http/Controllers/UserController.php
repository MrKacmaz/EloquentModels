<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Retrieve all users.
     *
     * This method fetches all users from the database using the Eloquent model.
     * It returns the users in a JSON format, with HTTP status code 200 (OK).
     * The JSON_PRETTY_PRINT option is used to make the output more readable,
     * which can be particularly useful for debugging or development.
     *
     * @return JsonResponse The response containing all users in JSON format.
     */
    public function index(): JsonResponse
    {
        // Fetch all users from the database
        $users = User::query()->get();

        // Return the users as a JSON response with pretty print
        return response()->json($users, 200, [], JSON_PRETTY_PRINT);
    }
}

<?php

namespace App\Http\Controllers\Api\Quiz;

use App\Http\Controllers\Controller;
use App\QuizCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = QuizCategory::all();

        return response()->json([
            'success' => true,
            'categories' => $categories,
        ]);
    }
}

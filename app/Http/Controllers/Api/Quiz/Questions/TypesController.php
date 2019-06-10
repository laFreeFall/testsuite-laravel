<?php

namespace App\Http\Controllers\Api\Quiz\Questions;

use App\Http\Controllers\Controller;
use App\QuestionType;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function index()
    {
        $types = QuestionType::all();

        return response()->json([
            'success' => true,
            'types' => $types,
        ]);
    }
}

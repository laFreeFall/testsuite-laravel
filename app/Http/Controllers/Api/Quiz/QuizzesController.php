<?php

namespace App\Http\Controllers\Api\Quiz;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuizRequest;
use App\Quiz;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    public function store(StoreQuizRequest $request)
    {
        $quiz = auth()->user()->quizzes()->create($request->validated());

        return response()->json([
            'success' => true,
            'quiz' => $quiz,
        ]);
    }
}

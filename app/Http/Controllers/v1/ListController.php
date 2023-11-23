<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;


class ListController extends Controller
{
    // Método para obtener preguntas con sus opciones si son cerradas
    public function getQuestions()
    {
        $questions = Question::with(['options'])->get();
        return response()->json($questions);
    }

    // Método para almacenar respuestas dadas por los usuarios
    public function storeAnswers(Request $request)
    {
        $data = $request->validate([
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:questions,id',
            'answers.*.text' => 'required|string',
        ]);
        foreach ($data['answers'] as $answerData) {
            Answer::create($answerData);
        }
        return response()->json(['message' => 'Respuestas guardadas correctamente.']);
    }
}

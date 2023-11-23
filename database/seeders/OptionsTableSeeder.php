<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $questionsWithOptions = [
            "¿Cuántos libros leyó en el último año?" => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            "¿Cuál es el nivel educativo más alto que obtuvo?" => ['Primario', 'Secundario', 'Universitario', 'Posgrado'],
            "¿Sabe conducir automóviles?" => ['Sí', 'No'],
            "¿Qué puntaje le daría a nuestro hotel, si 1 es pésimo y 10 es excelente?" => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
            "¿Cada cuánto va al cine?" => ['dia', 'semana', 'mes', 'año'],
            "¿Es alérgico a algún alimento?" => ['Sí', 'No'],
            "¿Consumió alcohol en las últimas horas?" => ['Sí', 'No'],
            "¿Está usted de acuerdo o en desacuerdo con la aprobación de la nueva ley de educación?" => ['Sí', 'No'],
            "¿Prefieres trabajar solo o en equipo?" => ['En equipo', 'Solo'],
            "¿Recomendaría nuestros productos a un amigo?" => ['Sí', 'No'],
        ];

        foreach ($questionsWithOptions as $questionText => $options) {
            $question = Question::where('text', $questionText)->first();
                if (!$question) {
                    // Si la pregunta no existe, puede que desees registrarlo o manejar el error de alguna manera
                    echo "La pregunta '{$questionText}' no existe en la base de datos.\n";
                    continue; // Saltar esta iteración
                }
            foreach ($options as $optionText) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'text' => $optionText,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

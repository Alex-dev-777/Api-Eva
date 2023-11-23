<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            ['text' => "¿Por qué cree que el actual gobierno de la ciudad debería darle más importancia a la educación?", 'type' => 'open'],
            ['text' => "¿Cuáles creen que deberían ser las prioridades del recientemente electo presidente?", 'type' => 'open'],
            ['text' => "¿Por qué su equipo debería ganar el mundial de fútbol?", 'type' => 'open'],
            ['text' => "¿A qué edad considera que un niño debería tener su primer teléfono celular y por qué?", 'type' => 'open'],
            ['text' => "¿Cómo definiría la palabra discriminación?", 'type' => 'open'],
            ['text' => "¿En qué ciudad de cualquier parte del mundo le gustaría vivir y por qué?", 'type' => 'open'],
            ['text' => "¿Cómo piensa que inciden las encuestas en los votantes a la hora de elegir a sus candidatos?", 'type' => 'open'],
            ['text' => "¿Cómo cree que puede influir el contexto internacional en las próximas elecciones?", 'type' => 'open'],
            ['text' => "¿Cuál es tu disco favorito de los Beatles y por qué?", 'type' => 'open'],
            ['text' => "¿Qué le pareció el último libro de Eduardo Galeano?", 'type' => 'open'],
            ['text' => "¿Cuántos libros leyó en el último año?", 'type' => 'closed'],
            ['text' => "¿Cuál es el nivel educativo más alto que obtuvo?", 'type' => 'closed'],
            ['text' => "¿Sabe conducir automóviles?", 'type' => 'closed'],
            ['text' => "¿Qué puntaje le daría a nuestro hotel, si 1 es pésimo y 10 es excelente?", 'type' => 'closed'],
            ['text' => "¿Cada cuánto va al cine?", 'type' => 'closed'],
            ['text' => "¿Es alérgico a algún alimento?", 'type' => 'closed'],
            ['text' => "¿Consumió alcohol en las últimas horas?", 'type' => 'closed'],
            ['text' => "¿Está usted de acuerdo o en desacuerdo con la aprobación de la nueva ley de educación?", 'type' => 'closed'],
            ['text' => "¿Prefieres trabajar solo o en equipo?", 'type' => 'closed'],
            ['text' => "¿Recomendaría nuestros productos a un amigo?", 'type' => 'closed'],

        ];
        foreach ($questions as $question) {
            DB::table('questions')->insert([
                'text' => $question['text'],
                'type' => $question['type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

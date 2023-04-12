<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\Temperatura;
use App\Models\Grafico;

class TemperaturaChart extends Controller
{
    public function index()
    {
        $graficos = Grafico::all();

        $labels = $graficos->pluck('sensorE')->map(function ($label) {
            return $label . '°'; // Adicione o símbolo de graus aos valores do eixo x
        });

        $chart = new Temperatura;
        $chart->labels($labels);
        $chart->dataset('Sensor Esquerda', 'bar', $graficos->pluck('sensorE'))->options([
            'backgroundColor' => '#FF0000',
            'borderColor' => '#FF0000',
        ]);
        $chart->dataset('Sensor Direita', 'bar', $graficos->pluck('sensorD'))->options([
            'backgroundColor' => '#00FF00',
            'borderColor' => '#00FF00',
        ]);
        $chart->dataset('Diferença', 'bar', $graficos->pluck('diferenca'))->options([
            'backgroundColor' => '#0000FF',
            'borderColor' => '#0000FF',
        ]);
        $chart->dataset('Servo', 'bar', $graficos->pluck('servo'))->options([
            'backgroundColor' => '#FFFF00',
            'borderColor' => '#FFFF00',
        ]);
        $chart->loaderColor("22292F");

        return view('graficos', compact('chart'));
    }
}

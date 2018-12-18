<?php

namespace App\Http\Controllers;
use Fx3costa\LaravelChartJs\Providers\ChartjsServiceProvider;
use Illuminate\Http\Request;
use App\Requesting;
class ChartController extends Controller
{
    //
public function chart(){
    $lab1=Requesting::query()->where('venue','=','complab1')->count();
    $lab2=Requesting::query()->where('venue','=','complab2')->count();
    $lab3=Requesting::query()->where('venue','=','complab3')->count();
    $lab4=Requesting::query()->where('venue','=','complab4')->count();
    $chartjs = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 100, 'height' => 50])
        ->labels(['computer laboratory 1', 'computer laboratory 2','computer laboratory 3','computer laboratory 4'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB','#52BE80','#F4D03F'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB','#52BE80','#F4D03F'],
                'data' => [$lab1,$lab2,$lab3,$lab4]
            ]
        ])
        ->options([]);
    return view('chart', compact('chartjs'));
}

}

<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Charts;

use App\User;
use App\Galeri;

use DB;



class ChartController extends Controller

{

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function makeChart($type)

    {

        switch ($type) {

            case 'bar':

                $galeri = Galeri::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y')) 

                        ->get();

                $chart = Charts::database($galeri, 'bar', 'highcharts') 

                            ->title("Monthly new Picture") 

                            ->elementLabel("Total Picture") 

                            ->dimensions(1000, 500) 

                            ->responsive(true) 

                            ->groupByMonth(date('Y'), true);

                break;



            case 'pie':

            $galeri = Galeri::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y')) 

            ->get();

            $chart = Charts::database($galeri, 'pie', 'highcharts') 

                ->title("Monthly new Picture") 

                ->elementLabel("Total Picture") 

                ->dimensions(1000, 500) 

                ->responsive(true) 

                ->groupByMonth(date('Y'), true);

                break;



            case 'donut':   

            $galeri = Galeri::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y')) 

            ->get();

            $chart = Charts::database($galeri, 'donut', 'highcharts') 

                ->title("Monthly new Picture") 

                ->elementLabel("Total Picture") 

                ->dimensions(1000, 500) 

                ->responsive(true) 

                ->groupByMonth(date('Y'), true);

                break;



            case 'line':

            $galeri = Galeri::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y')) 

            ->get();

            $chart = Charts::database($galeri, 'line', 'highcharts') 

                ->title("Monthly new Picture") 

                ->elementLabel("Total Picture") 

                ->dimensions(1000, 500) 

                ->responsive(true) 

                ->groupByMonth(date('Y'), true);

                break;



            case 'area':

            $galeri = Galeri::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y')) 

            ->get();

            $chart = Charts::database($galeri, 'area', 'highcharts') 

                ->title("Monthly new Picture") 

                ->elementLabel("Total Picture") 

                ->dimensions(1000, 500) 

                ->responsive(true) 

                ->groupByMonth(date('Y'), true);

                break;



            case 'geo':

                $chart = Charts::create('geo', 'highcharts')

                            ->title('Laravel Chart GEO')

                            ->elementLabel('HDTuto.com Laravel GEO Chart label')

                            ->labels(['JP', 'ID', 'RU'])

                            ->colors(['#3D3D3D', '#985689'])

                            ->values([5,10,20])

                            ->dimensions(1000,500)

                            ->responsive(true);

                break;



            default:

                # code...

                break;

        }

        return view('chart', compact('chart'));

    }

}

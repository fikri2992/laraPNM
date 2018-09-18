<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Master;
use DB;

class ChartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function makeChart()
    {

      // $users = DB::select('SELECT NamaUnit, COUNT(Jml_Pinjaman) FROM `masters` GROUP BY(kodeunit)');


      //grafik 1
        // $chart = Charts::database(Master::all(),'bar','highcharts')
        //     ->responsive(true)
        //     ->title('Grafik NOA')
        //     ->groupby('NamaUnit')
        //     ->dimensions(1000, 500)
        //     ->elementLabel('jumlah noa')
        //     ->labels(['Unit Cicaheum Bdg','Unit Cijerah - Bandung','Unit Dayeuhkolot - Bandung','Unit Gegerkalong','Unit Leuwi Panjang Bdg','Unit Buahbatu - Bandung','Unit Dalem Kaum - Syariah','Unit Ciroyom','Unit Kopo','Unit Cihampelas','Unit Ciwastra','Unit Ciparay','Unit Rancaekek']);
        //grafik 2
        // $line = DB::database(Master::all(),'line', 'highcharts')
        //     ->elementLabel("Jumlah OS")
        //     ->title('Grafik OS')
        //     ->responsive(false)
        //     ->groupby('kodeunit')
        //     // ->labels(['Unit Cicaheum Bdg','Unit Cijerah - Bandung','Unit Dayeuhkolot - Bandung','Unit Gegerkalong','Unit Leuwi Panjang Bdg','Unit Buahbatu - Bandung','Unit Dalem Kaum - Syariah','Unit Ciroyom','Unit Kopo','Unit Cihampelas','Unit Ciwastra','Unit Ciparay','Unit Rancaekek']);
        //     ->labels(['AE']);

        $data = DB::table('masters')
            ->select('NamaUnit',  DB::raw('sum(OS_Pokok) as sum'))
            // ->orderBy('masters.NamaUnit')
            ->groupBy(DB::raw("NamaUnit"))
            ->get();

            $chart = Charts::database($data,'area', 'morris')
                ->responsive(true)
                ->title('Grafik OS')
                ->elementLabel('jumlah os')
                ->labels(['Unit Cicaheum Bdg','Unit Cijerah - Bandung','Unit Dayeuhkolot - Bandung','Unit Gegerkalong','Unit Leuwi Panjang Bdg','Unit Buahbatu - Bandung','Unit Dalem Kaum - Syariah','Unit Ciroyom','Unit Kopo','Unit Cihampelas','Unit Ciwastra','Unit Ciparay','Unit Rancaekek']);


            // $bar = Charts::database('area')
            // ->select('OS_Pokok', Charts::raw('sum(amount) as amount'))
            // ->groupBy('NamaUnit')
            // ->get();
            //
            // $bar = Charts::database($bar,'area', 'highcharts')
            // ->elementLabel("Total")
            // ->title('Monthly Collection')
            // ->dimensions(1000, 500)
            // ->responsive(false)
            // ->groupByDay();

        // $donut = Charts::database(Master::all(), 'donut', 'highcharts')
        //     ->title('Chart donut')
        //     ->responsive(true)
        //     ->groupby('StatusPaymentCenter')
        //     ->labels('kodeunit')
        //     ->labels(['BELUM AKTIF','AKTIF']);

        // $percentage = Charts::database(Master::all(),'percentage','justgage')
        //     ->title('Status Payment Center')
        //     ->width(0)
        //     ->height(400)
        //     ->groupby('StatusPaymentCenter')
        //     ->gaugestyle('right')
        //     ->responsive('false')
        //     ->elementLabel('total status');

                // $donut = Charts::create('list', 'highcharts')
                //             ->title('  Donut Chart')
                //             ->labels(['First', 'Second', 'Third'])
                //             ->values([5,10,20])
                //             ->dimensions(1000,500)
                //             ->responsive(true);
                //
                // $line = Charts::create('list', 'highcharts')
                //             ->title('  Line Chart')
                //             ->elementLabel('  Line Chart Lable')
                //             ->labels(['First', 'Second', 'Third'])
                //             ->values([5,10,20])
                //             ->dimensions(1000,500)
                //             ->responsive(true);
                //
                // $area = Charts::create('list', 'highcharts')
                //             ->title('  Area Chart')
                //             ->elementLabel('  Line Chart label')
                //             ->labels(['First', 'Second', 'Third'])
                //             ->values([5,10,20])
                //             ->dimensions(1000,500)
                //             ->responsive(true);
                //
                // $geo = Charts::create('list', 'highcharts')
                //             ->title('  GEO Chart')
                //             ->elementLabel('  GEO Chart label')
                //             ->labels(['ES', 'FR', 'RU'])
                //             ->colors(['#3D3D3D', '#985689'])
                //             ->values([5,10,20])
                //             ->dimensions(1000,500)
                //             ->responsive(true);

                // return view('chart', ['chart' => $chart]);

                return view('chart', compact('chart','line'));

    }
}

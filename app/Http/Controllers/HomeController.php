<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function bar()
    {
        $data['title'] = 'Bar';
        $data['chart'] = Charts::multi('bar', 'material')
        // Setup the chart settings
        ->title("My Cool Chart")
        // A dimension of 0 means it will take 100% of the space
        ->dimensions(0, 400) // Width x Height
        // This defines a preset of colors already done:)
        ->template("material")
        // You could always set them manually
        // ->colors(['#2196F3', '#F44336', '#FFC107'])
        // Setup the diferent datasets (this is a multi chart)
        ->dataset('Element 1', [5,20,100])
        ->dataset('Element 2', [15,30,80])
        ->dataset('Element 3', [25,10,40])
        // Setup what the values mean
        ->labels(['One', 'Two', 'Three']);
        return view('chart', $data);
    }

    public function line()
    {
        $data['title'] = 'Line';
        $data['chart'] = Charts::multi('line', 'highcharts')
        ->colors(['#ff0000', '#00ff00', '#0000ff'])
        ->labels(['One', 'Two', 'Three'])
        ->dataset('Test 1', [1,2,3])
        ->dataset('Test 2', [0,6,0])
        ->dataset('Test 3', [3,4,1]);
        return view('chart', $data);
    }

    public function donut()
    {
        $data['title'] = 'Donut';
        $data['chart'] = Charts::create('donut', 'highcharts')
        ->title('My nice chart')
        ->labels(['First', 'Second', 'Third'])
        ->values([5, 10, 20])
        ->dimensions(1000, 500)
        ->responsive(false);
        return view('chart', $data);
    }

    public function pie()
    {
        $data['title'] = 'Pie';
        $data['chart'] = Charts::create('pie', 'highcharts')
        ->title('My nice chart')
        ->labels(['First', 'Second', 'Third'])
        ->values([5, 10, 20])
        ->dimensions(1000, 500)
        ->responsive(false);
        return view('chart', $data);
    }

    public function area()
    {
        $data['title'] = 'Area';
        $data['chart'] = Charts::create('area', 'highcharts')
        ->title('My nice chart')
        ->elementLabel('My nice label')
        ->labels(['First', 'Second', 'Third'])
        ->values([5, 10, 20])
        ->dimensions(1000, 500)
        ->responsive(false);
        return view('chart', $data);
    }

    public function areaspline()
    {
        $data['title'] = 'Areaspline';
        $data['chart'] = Charts::multi('areaspline', 'highcharts')
        ->title('My nice chart')
        ->colors(['#ff0000', '#ffffff'])
        ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
        ->dataset('John', [3, 4, 3, 5, 4, 10, 12])
        ->dataset('Jane', [1, 3, 4, 3, 3, 5, 4]);
        return view('chart', $data);
    }

    public function percentage()
    {
        $data['title'] = 'Percentage';
        $data['chart'] = Charts::create('percentage', 'justgage')
        ->title('My nice chart')
        ->elementLabel('My nice label')
        ->values([65, 0, 100])
        ->responsive(false)
        ->height(300)
        ->width(0);
        return view('chart', $data);
    }

    public function geo()
    {
        $data['title'] = 'Geo';
        $data['chart'] = Charts::create('geo', 'highcharts')
        ->title('My nice chart')
        ->elementLabel('My nice label')
        ->labels(['ES', 'FR', 'RU', 'GB'])
        ->colors(['#C5CAE9', '#283593'])
        ->values([5, 10, 20, 15])
        ->dimensions(1000, 500)
        ->responsive(false);
        return view('chart', $data);
    }

    public function progressbar()
    {
        $data['title'] = 'Progressbar';
        $data['chart'] = Charts::create('progressbar', 'progressbarjs')
        ->values([65,0,100])
        ->responsive(false)
        ->height(50)
        ->width(0);
        return view('chart', $data);
    }
}

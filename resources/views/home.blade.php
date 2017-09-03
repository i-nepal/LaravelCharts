@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bar Chart</div>
                <div class="panel-body">
<pre>
Charts::multi('bar', 'material')
        ->title("My Cool Chart")
        ->dimensions(0, 400) // Width x Height
        ->template("material")
        ->dataset('Element 1', [5,20,100])
        ->dataset('Element 2', [15,30,80])
        ->dataset('Element 3', [25,10,40])
        // Setup what the values mean
        ->labels(['One', 'Two', 'Three']);
</pre>
                    <img src="{{ asset('images/barchart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Line Chart</div>
                <div class="panel-body">
<pre>
Charts::multi('line', 'highcharts')
        ->colors(['#ff0000', '#00ff00', '#0000ff'])
        ->labels(['One', 'Two', 'Three'])
        ->dataset('Test 1', [1,2,3])
        ->dataset('Test 2', [0,6,0])
        ->dataset('Test 3', [3,4,1]);
</pre>
                    <img src="{{ asset('images/linechart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Donut Chart</div>
                <div class="panel-body">
<pre>
Charts::create('donut', 'highcharts')
        ->title('My nice chart')
        ->labels(['First', 'Second', 'Third'])
        ->values([5, 10, 20])
        ->dimensions(1000, 500)
        ->responsive(false);
</pre>
                    <img src="{{ asset('images/donutchart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Pie Chart</div>
                <div class="panel-body">
<pre>
Charts::create('pie', 'highcharts')
        ->title('My nice chart')
        ->labels(['First', 'Second', 'Third'])
        ->values([5, 10, 20])
        ->dimensions(1000, 500)
        ->responsive(false);
</pre>
                    <img src="{{ asset('images/piechart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Area Chart</div>
                <div class="panel-body">
<pre>
Charts::create('area', 'highcharts')
        ->title('My nice chart')
        ->elementLabel('My nice label')
        ->labels(['First', 'Second', 'Third'])
        ->values([5, 10, 20])
        ->dimensions(1000, 500)
        ->responsive(false);
</pre>
                    <img src="{{ asset('images/areachart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Areaspine Chart</div>
                <div class="panel-body">
<pre>
Charts::multi('areaspline', 'highcharts')
        ->title('My nice chart')
        ->colors(['#ff0000', '#ffffff'])
        ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
        ->dataset('John', [3, 4, 3, 5, 4, 10, 12])
        ->dataset('Jane', [1, 3, 4, 3, 3, 5, 4]);
</pre>
                    <img src="{{ asset('images/areaspinechart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Geo Chart</div>
                <div class="panel-body">
<pre>
Charts::multi('areaspline', 'highcharts')
        ->title('My nice chart')
        ->colors(['#ff0000', '#ffffff'])
        ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
        ->dataset('John', [3, 4, 3, 5, 4, 10, 12])
        ->dataset('Jane', [1, 3, 4, 3, 3, 5, 4]);
</pre>
                    <img src="{{ asset('images/geochart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Percentage Chart</div>
                <div class="panel-body">
<pre>
Charts::create('percentage', 'justgage')
        ->title('My nice chart')
        ->elementLabel('My nice label')
        ->values([65, 0, 100])
        ->responsive(false)
        ->height(300)
        ->width(0);
</pre>
                    <img src="{{ asset('images/percentagechart.png') }}" class="img-responsive">
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Progress Bar Chart</div>
                <div class="panel-body">
<pre>
Charts::create('progressbar', 'progressbarjs')
        ->values([65,0,100])
        ->responsive(false)
        ->height(50)
        ->width(0);
</pre>
                    <img src="{{ asset('images/progresschart.png') }}" class="img-responsive">
                </div>
            </div>


        </div>
    </div>
</div>
@endsection

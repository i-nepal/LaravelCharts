@extends('layouts.app')

@push('stylesheets')
{!! Charts::styles() !!}
@endpush

@push('scripts')
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $title }}</div>

                <div class="panel-body">
                    {!! $chart->html() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

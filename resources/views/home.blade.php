@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Select a Report...</div>

                <div class="panel-body">
                    <div>Specify a range of dates to report awarded certificates, then click the GO link</div>
                    <div><input type="text" name="daterange" value="01/01/2015 - 01/31/2015" /> </div>
                    <a href="{{ route('certificates') }}">Go Report</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

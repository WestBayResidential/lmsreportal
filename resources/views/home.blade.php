@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Select a Report...</div>

                <div class="panel-body">
                   <form id="certdates" method="GET" action="{{ route('certificates') }}" >
                    <div>Specify a range of dates to report awarded certificates, then click the GO button</div>
                    <div><input class="datefield" type="text" name="daterange" value="01/01/2017 - 03/31/2017"  size=25 />
                        <script type="text/javascript">
                            $(function() {
                                $('input[name="daterange"]').daterangepicker();
                            });
                        </script>
                    </div>
                    <button type="submit" href="{{ route('certificates') }}">Go Report</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

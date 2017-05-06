@extends ('layouts.app')

@section ('content')

<div class="col-md-4 col-xs-12">
    <input type="text" name="daterange" value="01/01/2015 - 01/31/2015" />
    <script type="text/javascript">
        $(function() {
            $('input[name="daterange"]').daterangepicker();
        });
    </script>
</div>


@endsection



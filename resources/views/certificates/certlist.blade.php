@extends ('layouts.app')

@section ('content')
<div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <th><a href='{{ route( 'certificates' ) }}?daterange={{ $dr }}'>Name</a></th>
          <th> </th>
          <th><a href='{{ route( 'certbyloc' ) }}?daterange={{ $dr }}'>Location</a></th>
          <th>Certificate</th>
          <th>Code</th>
          <th><a href='{{ route( 'certbydate' ) }}?daterange={{ $dr }}'>Date Awarded</a></th>
        </thead>
        <tbody>
        @foreach ($certs as $cert)
          <tr>
          <td>{{ $cert->lastname }}</td>
          <td>{{ $cert->firstname }}</td>
          <td>{{ $cert->data }}</td>
          <td>{{ $cert->name }}</td>
          <td>{{ $cert->code }}</td>
          <td>{{ $cert->award }}</td>
          </tr>
        @endforeach
      </div>
      </tbody>
      </table>
@endsection

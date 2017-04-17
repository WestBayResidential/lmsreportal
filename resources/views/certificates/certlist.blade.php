@extends ('layouts.app')

@section ('content')
<div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <th>Name</th>
          <th>User</th>
          <th>Certificate</th>
          <th>Code</th>
          <th>Date Awarded</th>
        </thead>
      <tbody>
        @foreach ($certs as $cert)
          <tr>
          <td>{{ $cert->lastname }}</td>
          <td>{{ $cert->userid }}</td>
          <td>{{ $cert->name }}</td>
          <td>{{ $cert->code }}</td>
          <td>{{ $cert->award }}</td>
          </tr>
        @endforeach
      </div>
      </tbody>
      </table>
@endsection


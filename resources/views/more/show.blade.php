<!DOCTYPE html>
<html>

<head>
    <!-- Other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div id="content"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{ route('company.create') }}" class="btn btn-success mt-3 mr-auto">Create</a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-warning">Logout</button>
        </form>
    </nav>
   <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Company Email</th>
            <th>Website</th>
            <th>Employee First Name</th>
            <th>Employee Last Name</th>
            <th>Employee Email</th>
            <th>Employee phone</th>
            <th>Img</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->website }}</td>
                @foreach ($company->employees as $employee)
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
 <td>
                    @if ($employee->image)
                        <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image" width="50">
                    @else
                        No Image
                    @endif
                </td>
                  <td>
    <a class="btn btn-success" href="{{ route('companyemployee.edit', ['companyId' => $company->id, 'employeeId' => $employee->id]) }}">Edit</a>

   <form action="{{ route('company.destroy', ['companyId' => $company->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

                            </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>

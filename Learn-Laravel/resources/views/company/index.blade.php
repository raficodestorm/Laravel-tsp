@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <h2 class="mb-4">Company, Bus & Driver List</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Bus Number</th>
                <th>Driver Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->bus->bus_number ?? 'N/A' }}</td>
                    <td>{{ $company->driver->name ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

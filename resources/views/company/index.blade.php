@extends('layouts.app')

@section('title')
    Companies
@endsection

@section('content')

<table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Location</th>
            <th>Phone Number</th>
            <th>Contact</th>
            <th></th>
        </tr>

        @foreach($companies as $company)
            <tr>
                <td>{{ $company->company_id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->location }}</td>
                <td>{{ $company->phone_number }}</td>
                <td>{{ $company->contact }}</td>
                <td>
                    <a href='{{ url("/companies/$company->company_id") }}'>Edit</a>
                    <a href="javascript:void(0)" onclick="document.getElementById('company-delete-{{ $company->company_id }}').submit()">Delete</a>
                    <form action='{{ url("/companies/$company->company_id") }}' method="POST" id="company-delete-{{ $company->company_id }}">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $companies->links() }}

@endsection

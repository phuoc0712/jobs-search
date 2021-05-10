@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')

<table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Email</th>
            <th></th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->date_of_birth }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href='{{ url("/users/$user->user_id") }}'>Edit</a>
                    <a href="javascript:void(0)" onclick="document.getElementById('user-delete-{{ $user->user_id }}').submit()">Delete</a>
                    <form action='{{ url("/users/$user->user_id") }}' method="POST" id="user-delete-{{ $user->user_id }}">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

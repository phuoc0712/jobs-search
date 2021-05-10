@extends('layouts.app')

@section('content')
    <form method="POST" action='{{ url("users/$user->user_id") }}'>
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="date" name="location" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $user->date_of_birth }}">
        </div>

        <div class="form-group">
            <label for="">Gender</label>
            <input type="text" name="gender" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $user->gender }}">
        </div>

        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" name="phone_number" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $user->phone_number }}">
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $user->address }}">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="gender" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $user->email }}">
        </div>


        <button type="submit">Submit</button>
    </form>
@endsection

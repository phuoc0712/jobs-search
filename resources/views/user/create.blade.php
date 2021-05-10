@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ url('users') }}">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>


        <div class="form-group">
            <label for="">Date of Birth</label>
            <input type="date" name="date_of_birth" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Gender</label>
            <input type="text" name="gender" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" name="phone_number" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <button type="submit">Submit</button>
    </form>
@endsection

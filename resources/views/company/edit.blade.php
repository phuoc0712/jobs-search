@extends('layouts.app')

@section('content')
    <form method="POST" action='{{ url("companies/$company->company_id") }}'>
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $company->name }}">
        </div>

        <div class="form-group">
            <label for="">Location</label>
            <input type="text" name="location" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $company->location }}">
        </div>

        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" name="phone_number" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $company->phone_number }}">
        </div>

        <div class="form-group">
            <label for="">Contact</label>
            <input type="text" name="contact" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $company->contact }}">
        </div>


        <button type="submit">Submit</button>
    </form>
@endsection

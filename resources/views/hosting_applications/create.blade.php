@extends('layouts.app')

@section('content')
<h1>Apply for Hosting</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('hosting_applications.store') }}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name') }}">

    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone') }}">

    <label>Number of Cats</label>
    <input type="number" name="number_of_cats" value="{{ old('number_of_cats') }}">

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}">

    <label>Breed</label>
    <input type="text" name="breed" value="{{ old('breed') }}">

    <label>Additional Info</label>
    <textarea name="additional_info">{{ old('additional_info') }}</textarea>

    <label>Start Date</label>
    <input type="date" name="start_date" value="{{ old('start_date') }}">

    <label>End Date</label>
    <input type="date" name="end_date" value="{{ old('end_date') }}">

    <button type="submit">Submit</button>
</form>
@endsection

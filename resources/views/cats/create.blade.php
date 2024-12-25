@extends('layouts.app')

@section('content')
<h1>Add a Cat</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('cats.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}">

    <label>Age:</label>
    <input type="number" name="age" value="{{ old('age') }}">

    <label>Breed:</label>
    <input type="text" name="breed" value="{{ old('breed') }}">

    <button type="submit">Save</button>
</form>
@endsection


@extends('layouts.app')

@section('content')
<h1>Edit Cat</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('cats.update', $cat->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $cat->name) }}">

    <label>Age:</label>
    <input type="number" name="age" value="{{ old('age', $cat->age) }}">

    <label>Breed:</label>
    <input type="text" name="breed" value="{{ old('breed', $cat->breed) }}">

    <button type="submit">Update</button>
</form>
@endsection

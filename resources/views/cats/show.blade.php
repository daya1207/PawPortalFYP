
@extends('layouts.app')

@section('content')
<h1>Cat Details</h1>
<p><strong>Name:</strong> {{ $cat->name }}</p>
<p><strong>Age:</strong> {{ $cat->age }}</p>
<p><strong>Breed:</strong> {{ $cat->breed }}</p>

<a href="{{ route('cats.index') }}">Back to List</a>
@endsection

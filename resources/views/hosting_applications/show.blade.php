@extends('layouts.app')

@section('content')
<h1>Hosting Application #{{ $hostingApplication->id }}</h1>
<p><strong>Name:</strong> {{ $hostingApplication->name }}</p>
<p><strong>Phone:</strong> {{ $hostingApplication->phone }}</p>
<p><strong>Email:</strong> {{ $hostingApplication->email }}</p>
<!-- etc. for other fields -->

<a href="{{ route('hosting_applications.index') }}">Back to list</a>
@endsection

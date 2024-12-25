@extends('layouts.app')

@section('content')
<h1>All Cats</h1>
<a href="{{ route('cats.create') }}">Add a Cat</a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Breed</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->age }}</td>
            <td>{{ $cat->breed }}</td>
            <td>
                <a href="{{ route('cats.show', $cat->id) }}">View</a>
                <a href="{{ route('cats.edit', $cat->id) }}">Edit</a>
                <form action="{{ route('cats.destroy', $cat->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            onclick="return confirm('Are you sure you want to delete this cat?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@extends('layouts.app')

@section('content')
<h1>All Hosting Applications</h1>

@if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($applications as $app)
    <tr>
      <td>{{ $app->id }}</td>
      <td>{{ $app->name }}</td>
      <td>{{ $app->phone }}</td>
      <td>{{ $app->email }}</td>
      <td>
        <a href="{{ route('hosting_applications.show', $app->id) }}">View</a>
        <a href="{{ route('hosting_applications.edit', $app->id) }}">Edit</a>
        <form action="{{ route('hosting_applications.destroy', $app->id) }}" method="POST" style="display:inline">
          @csrf
          @method('DELETE')
          <button type="submit" onclick="return confirm('Delete this?')">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection

@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="text-center py-5">
    Table Laravel Controller
</h1>

<table class="table container">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($movies as $movie)
        <tr>
            <th scope="row">{{ $movie->id }}</th>
            <td colspan="2">{{ $movie->title }}</td>
            <td></td>
        </tr>
    @endforeach
    
  </tbody>
</table>

@endsection

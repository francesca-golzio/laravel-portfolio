@extends('layouts.admin')
@section('title') Handle All Projects @endsection

@section('content') 

<h2>Handle All Projects</h2>


<div class="table_wrapper">
  <table class="table table-borderless projects_table">
    <thead>
      <tr>
        <th><div>Project</div></th>
        <th><div>Client</div></th>
        <th><div>Period</div></th>
        <th colspan="3"><div>Actions</div></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td><div>{{ $project->title }}</div></td>
        <td><div>{{ $project->client }}</div></td>
        <td><div>{{ $project->period }}</div></td>
        <td><button><i class="bi bi-arrow-up-right-circle"></i></button></td>
        <td><button><i class="bi bi-pencil-square"></i></button></td>
        <td><button><i class="bi bi-trash3-fill"></i></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
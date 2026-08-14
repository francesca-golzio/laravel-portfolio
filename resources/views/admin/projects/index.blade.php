@extends('layouts.admin')
@section('title') Handle All Projects @endsection

@section('content') 

<h2>Handle All Projects</h2>


<div class="table_wrapper">
  <table class="table table-borderless projects_table">
    <thead>
      <tr>
        <th class="project_title"><div>Project</div></th>
        <th class="project_client"><div>Client</div></th>
        <th class="project_tags"><div>Tags</div></th>
        <th class="project_handlers" colspan="3"><div>Actions</div></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td class="project_title"><div>{{ $project->title }}</div></td>
        <td class="project_client"><div>{{ $project->client }}</div></td>
        <td class="project_tags"><div>{{ isset($project->tags) ? implode(', ', (array) $project->tags) : '-'}}</div></td>
        <td><button><i class="bi bi-arrow-up-right-circle"></i></button></td>
        <td><button><i class="bi bi-pencil-square"></i></button></td>
        <td><button><i class="bi bi-trash3-fill"></i></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
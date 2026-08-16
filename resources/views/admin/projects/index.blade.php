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
        <th class="type_id"><div>Type</div></th>
        <th class="project_handlers" colspan="3"><div>Actions</div></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td class="project_title"><div>{{ $project->title }}</div></td>
        <td class="project_client"><div>{{ $project->client }}</div></td>
        <td class="type_id"><div>{{ $project->type->name ?? 'N/D' }}</div></td>
        <td><x-show-button :project="$project" /></td>
        <td><x-edit-button :project="$project" /></td>
        <td><x-delete-button :project="$project" /></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@foreach ($projects as $project)
<x-delete-button-modal :project="$project" />
@endforeach

@endsection
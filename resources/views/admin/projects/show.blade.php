@extends('layouts.admin')

@section('title', $project->title)

@section('content')



<div class="table_wrapper" >
  <table class="table table-borderless projects_table">
    <thead>
      <tr class="text-center">
        <th scope="row" colspan="3">
          <div class="d-flex justify-content-between align-items-center gap-5">
            <div class="type_badge"><i class="bi bi-bookmark-fill"></i> {{ $project->type->name }}</div>
            <div class="container"><h2 class="accent_color">{{ $project->title }}</h2></div>
            <div style="white-space:nowrap">
              <x-edit-button :project="$project" />
              <x-delete-button :project="$project" />
            </div>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td scope="row"><small class="accent_color">Periodo</small></td>
        <td><div>{{ $project->period }}</div></td>
        </td>
      </tr>
      <tr class="">
        <td scope="row"><small class="accent_color">Cliente</small></td>
        <td><div>{{ $project->client }}</div></td>
      </tr>
      <tr class="">
        <td scope="row"><small class="accent_color">Descrizione</small></td>
        <td><div>{{ $project->description }}</div></td>
      </tr>
      <!-- Risorse ?? -->
      <tr class="">
        <td scope="row"><small class="accent_color">Tags</small></td>
        <td>
          <div class="d-flex gap-4 fs-5">
            @foreach ($project->tags as $tag)
            <div>
              <span class="rounded-pill fs-6 px-2 py-1 accent_border">{{ $tag }}</span>
            </div>
            @endforeach
          </div>
        </td>
      </tr>
      <tr class="">
        <td scope="row"><small class="accent_color"><i class="bi bi-lock-fill"></i> Note</small></td>
        <td><div>{{ $project->personal_note }}</div></td>
      </tr>
    </tbody>
  </table>
</div>

<x-delete-button-modal :project="$project" />

@endsection
@extends('layouts.admin')

@section('title', $project->title)

@section('content')



<div class="table-responsive" >
  <table class="table table-dark table-striped table-borderless fs-5 w100">
    <thead>
      <tr class="text-center">
        <th scope="row" colspan="3">
          <div class="d-flex justify-content-between align-items-center gap-5">
            <div class="container"><h2 class="accent_color">{{ $project->title }}</h2></div>
            <div style="white-space:nowrap">
              <button><i class="bi bi-pencil-square" title="modify"></i></button>
              <button><i class="bi bi-trash3-fill" title="delete"></i></button>
              <button><i class="bi bi-toggle-on" title="unpublish"></i></button> {{-- aggiungere render e action condizionali --}}
            </div>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td scope="row"><small class="accent_color">Periodo</small></td>
        <td><div>{{ $project->period }}</div></td>
        <td><button><i class="bi bi-pencil-square" title="modify"></i></button></td>
        </td>
      </tr>
      <tr class="">
        <td scope="row"><small class="accent_color">Cliente</small></td>
        <td><div>{{ $project->client }}</div></td>
        <td><button><i class="bi bi-pencil-square" title="modify"></i></button></td>
      </tr>
      <tr class="">
        <td scope="row"><small class="accent_color">Descrizione</small></td>
        <td><div>{{ $project->description }}</div></td>
        <td><button><i class="bi bi-pencil-square" title="modify"></i></button></td>
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
        <td><button><i class="bi bi-pencil-square" title="modify"></i></button></td>
      </tr>
      <tr class="">
        <td scope="row"><small class="accent_color"><i class="bi bi-lock-fill"></i> Note</small></td>
        <td><div>{{ $project->personal_note }}</div></td>
        <td><button><i class="bi bi-pencil-square" title="modify"></i></button></td>
      </tr>
    </tbody>
  </table>
</div>

 
  
  
  


@endsection
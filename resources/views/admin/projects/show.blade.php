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
              <button type="button" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="bi bi-trash3-fill" title="delete"></i></button>
               {{-- <button><i class="bi bi-toggle-on" title="unpublish"></i></button>aggiungere render e action condizionali --}}
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

 <!-- Modal -->
<div class="modal fade dark" id="delete_project" tabindex="-1" aria-labelledby="delete_project_label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete_project_label">Vuoi davvero eliminare il progetto?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Attenzione:<br>una volta eseguita, questa operazione non può essere annullata, non potrai tornare indietro e avrai perso il Progetto per sempre.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route('projects.destroy', $project)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn delete_project_button" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
  
  
  


@endsection
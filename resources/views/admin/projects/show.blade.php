@extends('layouts.admin')

@section('title', $project->title)

@section('content')



<div class="table-responsive" >
  <table class="table table-dark table-striped table-borderless fs-4 w100">
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
      <tr class="">
        <td scope="row"><small class="accent_color">Risorse</small></td>
        <td></td>
        <td><button><i class="bi bi-pencil-square" title="modify"></i></button></td>
      </tr>
      <tr class="">
        <td scope="row"><small class="accent_color"><i class="bi bi-lock-fill"></i> Note</small></td>
        <td><div></div></td>
        <td><button><i class="bi bi-pencil-square" title="modify"></i></button></td>
      </tr>
    </tbody>
  </table>
</div>

 
  
  
  


@endsection
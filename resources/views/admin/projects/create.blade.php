@extends('layouts.admin')

@section('title', 'Aggiungi un nuovo progetto')

@section('content')
<div class="container project_form_container">

  <form action="{{ route('projects.store') }}" method="POST" class="form p-4 rounded bg_dark_transparent accent_box_shadow">
    @csrf

    <div class="mb-4">
      <label for='title' class="form-label">Titolo</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="mb-4">
      <label for='type' class="form-label">Tipologia</label>
      <!-- <input type="text" name="type" id="type" class="form-control"> -->
      <select name="type" id="type" class="form-select">
        @foreach ($types as $type)
          <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-4">
      <label for='client' class="form-label">Cliente</label>
      <input type="text" name="client" id="client" class="form-control">
    </div>
    
    <div class="mb-4">
      <label for='period' class="form-label">Periodo</label>
      <input type="text" name="period" id="period" class="form-control">
    </div>

    <div class="mb-4">
      <label for='tags' class="form-label">Tags</label>
      <input type="text" name="tags" id="tags" class="form-control">
      <small>* Separati da virgola-spazio, es. <span class="fst-italic">Web App, Back End, Laravel</span></small>
    </div>
        
    <div class="mb-4">
      <label for='description' class="form-label">Descrizione</label>
      <textarea name="description" id="description" rows="3"class="form-control"></textarea>
    </div>

    <!-- Campo Risorse e Allegati ?? --> 

    <div class="mb-4">
      <label for='personal_note' class="form-label">Note private</label>
      <textarea name="personal_note" id="personal_note" rows="3"class="form-control"></textarea>
    </div>

    <input type="submit" value="Salva" class="btn btn-outline-light">

  </form>

</div>
@endsection
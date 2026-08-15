@props(['project'])

<!-- Modal -->
<div class="modal fade dark" id="delete_project{{ $project->id }}" tabindex="-1" aria-labelledby="delete_project_label{{ $project->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete_project_label{{ $project->id }}">Vuoi davvero eliminare il progetto?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Attenzione:<br>una volta eseguita, questa operazione non può essere annullata, non potrai tornare indietro e avrai perso il progetto "{{ $project->title }}" per sempre.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Annulla</button>
        <form action="{{route('projects.destroy', $project)}}" method="POST">
          @csrf
          @method('DELETE')
          <input type="submit" class="btn delete_forever_button" value="Elimina definitivamente">
        </form>
      </div>
    </div>
  </div>
</div>
@props(['project'])

<button type="button" data-bs-toggle="modal" data-bs-target="#delete_project{{ $project->id }}" class="btn delete_button">
    <i class="bi bi-trash3-fill" title="delete"></i>
</button>

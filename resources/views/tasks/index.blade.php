@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Mes Tâches</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Ajouter une tâche</a>

        

        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ ucfirst($task->status) }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Supprimer cette tâche ?');">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Aucune tâche disponible.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

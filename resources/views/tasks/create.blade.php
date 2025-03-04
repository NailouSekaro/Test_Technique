@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter une tâche</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            @error('title')
                <div style="color:rgba(255, 0, 0, 0.858)"> {{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            @error('description')
                <div style="color:rgba(255, 0, 0, 0.858)"> {{ $message }}</div>
            @enderror


            <div class="mb-3">
                <label for="status" class="form-label">Statut</label>
                <select class="form-control" id="status" name="status">
                    <option value="pending">En attente</option>
                    <option value="completed">Complété</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection

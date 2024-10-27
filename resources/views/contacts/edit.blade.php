@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Modifier le contact</h2>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contacts.update',$contact->id) }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Nom</label>
            <input type="text" name="name" value="{{ $contact->name }}" required class="form-control" />
        </div>
        
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $contact->email }}" required class="form-control" />
        </div>
        
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('contacts.list') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection

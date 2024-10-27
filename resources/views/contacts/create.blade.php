@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Ajouter un nouveau contact</h2>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contacts.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nom</label>
            <input type="text" name="name" placeholder="Entrer votre nom" required class="form-control" />
        </div>
        
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Entrer votre email" required class="form-control" />
        </div>
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection

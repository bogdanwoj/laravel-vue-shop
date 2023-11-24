@extends('layouts.app')

@section('content')
    <div class="container mt-10">
        <h1>Edit Contact with ID: {{$contact->id}}</h1>

        <form action="{{ route('contacts.update', ['id' => $contact->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Message</label>
                <textarea class="form-control" id="text" name="text" rows="3" required>{{ $contact->text }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection

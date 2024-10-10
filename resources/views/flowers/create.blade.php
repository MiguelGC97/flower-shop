@extends('layout')

@section('content')
    <h1>Create a New Flower</h1>
    <form method="POST" action="{{ route('flowers.store') }}">
        @csrf

        <div class="form-group">
            <label for="species"></label>
            <input type="text" name="species" class="form-control" id="species" placeholder="Enter flower species">
        </div>

        <div class="form-group">
            <label for="color"></label>
            <input type="text" name="color" class="form-control" id="color" placeholder="Enter flower color">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('flowers.index') }}">Back to the list</a>
    
@endsection
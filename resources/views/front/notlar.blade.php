
@extends('layout.app')
@section('content')
<div class="container">
    <h1>Not Girişi</h1>

    <form method="POST" action="{{ route('notformgonder') }}">
        @csrf

        <div class="form-group">
            <label for="vize1">1. Vize Notu:</label>
            <input type="text" class="form-control" id="vize1" name="vize1" placeholder="1. Vize Notu">
        </div>

        <div class="form-group">
            <label for="vize2">2. Vize Notu:</label>
            <input type="text" class="form-control" id="vize2" name="vize2" placeholder="2. Vize Notu">
        </div>

        <div class="form-group">
            <label for="final">Final Notu:</label>
            <input type="text" class="form-control" id="final" name="final" placeholder="Final Notu">
        </div>

        <button type="submit" class="btn btn-primary">Notları Kaydet</button>
    </form>
</div>
@endsection

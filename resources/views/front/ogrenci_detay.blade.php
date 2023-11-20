@extends('front.layout.app')

@section('content')
    <section id="student-details" class="content">
        <div class="container bg-white shadow-lg p-5" style="border-radius: 30px">
            <div class="section-title">
                <h2>Öğrenci Detayları</h2>
            </div>

            <div class="section">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>İsim:</strong> {{ $student->name }}</p>
                        <p><strong>Soyisim:</strong> {{ $student->surname }}</p>
                        <p><strong>E-posta:</strong> {{ $student->email }}</p>
                        <p><strong>TC Kimlik No:</strong> {{ $student->tc }}</p>
                        @if(isset($not))

                        <p><strong>1. Vize Notu:</strong> {{ $not->vize1 }}</p>
                        <p><strong>2. Vize Notu:</strong> {{ $not->vize2 }}</p>
                        <p><strong>Final Notu:</strong> {{ $not->final }}</p>
                        <form method="POST" action="{{ route('notguncelle', $not->id) }}">
                            @csrf

                            <div class="form-group">
                                <label for="vize1">1. Vize Notu:</label>
                                <input type="text" class="form-control" id="vize1" name="vize1" placeholder="1. Vize Notu" required value="{{ $not->vize1 }}">
                            </div>

                            <div class="form-group">
                                <label for="vize2">2. Vize Notu:</label>
                                <input type="text" class="form-control" id="vize2" name="vize2" placeholder="2. Vize Notu" required value="{{ $not->vize2 }}">
                            </div>

                            <div class="form-group">
                                <label for="final">Final Notu:</label>
                                <input type="text" class="form-control" id="final" name="final" placeholder="Final Notu" required value="{{ $not->final }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Notları güncelle</button>
                        </form>
                        @else
                            <div class="container">
                                <h1>Not Girişi</h1>
                                <form method="POST" action="{{ route('notformgonder', $student->id) }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="vize1">1. Vize Notu:</label>
                                        <input type="text" class="form-control" id="vize1" name="vize1" placeholder="1. Vize Notu" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="vize2">2. Vize Notu:</label>
                                        <input type="text" class="form-control" id="vize2" name="vize2" placeholder="2. Vize Notu" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="final">Final Notu:</label>
                                        <input type="text" class="form-control" id="final" name="final" placeholder="Final Notu" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Notları gir</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

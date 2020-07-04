@extends('partials.master')
@section('content')
<div class="col-sm-12">
  <h1>Pertanyaan</h1>
  <p>{{ $pertanyaan->isi }}</p>
  <h1 class="mt-3">Jawaban</h1>
  <p>{{ $pertanyaan->jawaban_benar }}</p>
  <a href="/jawaban/{{$pertanyaan->id}}/edit" class="btn btn-sm btn-info">Ganti Jawaban</a>
</div>
@endsection
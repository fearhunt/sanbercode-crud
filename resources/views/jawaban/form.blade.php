@extends('partials.master')

@section('content')
<div class="card card-primary mx-3">
  <div class="card-header">
    <h3 class="card-title">LaraHub</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/jawaban/{{$pertanyaan->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
      <label for="jawaban_benar">Edit Pertanyaan: {{ $pertanyaan->isi }}</label>
      <input name="jawaban_benar" type="text" class="form-control" id="jawaban_benar" value="{{$pertanyaan->jawaban_benar}}">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
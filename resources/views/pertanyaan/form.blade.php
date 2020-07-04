@extends('partials.master')

@section('content')
<div class="card card-primary mx-3">
  <div class="card-header">
    <h3 class="card-title">LaraHub</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/pertanyaan" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="isi">Isi Pertanyaan</label>
        <input name="isi" type="text" class="form-control" id="isi" placeholder="Pertanyaan ke forum LaraHub . . .">
      </div>
      <div class="form-group">
        <label for="jawaban_benar">Jawaban yang benar </label>
        <input name="jawaban_benar" type="text" class="form-control" id="jawaban_benar" placeholder="Jawaban yang benar . . .">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection
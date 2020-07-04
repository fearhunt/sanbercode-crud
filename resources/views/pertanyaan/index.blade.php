@extends('partials.master')

@section('content')
<div class="card mx-2">
  <div class="card-header">
      <h3 class="card-title">Data pertanyaan</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body ">
      <table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Pertanyaan</th>
                  <th>Likes</th>
                  <th>Dislikes</th>
                  <th>Votes</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($pertanyaan as $key => $data)
              <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $data->isi }} </td>
                <td> {{ $data->likes }} </td>
                <td> {{ $data->dislikes }} </td>
                <td> {{ $data->votes }} </td>
                <td> 
                  <a href="/jawaban/{{$data->id}}" class="btn btn-sm btn-info">Lihat Jawaban</a> 
                  <form action="/jawaban/{{$data->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger mt-1"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
  <!-- /.card-body -->
</div>

<div class="col-sm-12">
  <a href="/pertanyaan/create"><button class="btn btn-primary mt-2 ml-2">Buat pertanyaan baru</button></a>
</div>
@endsection
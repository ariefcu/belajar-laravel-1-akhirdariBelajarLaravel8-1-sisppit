@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
  </div>

  @if(session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-10">
    {{-- <a href="/dashboard/santris/create" class="btn btn-primary mb-3">Create new santri</a> --}}
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Tingkat</th>
          <th scope="col">Kelas</th>
          <th scope="col">Yatim</th>
          <th scope="col">Asrama</th>
          <th scope="col">AGK</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($santris as $santri)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $santri->name }}</td>
                <td>{{ $santri->kelas }}</td>
                <td>{{ $santri->kelas_paralel }}</td>
                <td>{{ $santri->yatim }}</td>
                <td>{{ $santri->asrama }}</td>
                <td>{{ $santri->agk }}</td>
                <td>
                    <a href="/dashboard/santris/{{ $santri->nisl }}" class="bagde bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/santris/{{ $santri->nisl }}/edit" class="bagde bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/santris/{{ $santri->nisl }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are your sure?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

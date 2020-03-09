@extends('admin-template.page')
@section('title', 'Kategori')
@section('activecategories', 'active')
@section('active_c_lists', 'active')
@section('content')

<!-- Page Heading -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kategori</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <div class="card-header py-3">
              <a href="{{ route('webmanager.categories.create') }}" class="btn btn-sm btn-primary btn-icon btn-icon-left">
                <span class="icon text-white-50">
                  <i class="fas fa-flag"></i>
                </span>
                <span class="text">Tambah Kategori Baru</span>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="table-1">
                  <thead>
                    <tr>
                      <th width="5%" class="text-center">#</th>
                      <th>Nama</th>
                      <th width="10%" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="5%" class="text-center">#</th>
                      <th>Nama</th>
                      <th width="10%" class="text-center">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($categories as $result => $print)
                    <tr>
                      <td align="center">{{ $result + $categories->firstitem() }}</td>
                      <td>{{ $print->name }}</td>
                      <td align="center">
                        <form method="POST" action="{{ route('webmanager.categories.destroy', $print->id) }}">
                          @csrf
                          @method('delete')
                          <a href="{{ route('webmanager.categories.edit', $print->id) }}" class="btn btn-sm btn-warning btn-icon">
                            <span class="icon text-white-50">
                              <i class="fas fa-edit"></i>
                            </span>
                          </a>
                          <button type="submit" class="btn btn-sm btn-danger btn-icon">
                            <span class="icon text-white-50">
                              <i class="fas fa-trash"></i>
                            </span>
                          </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
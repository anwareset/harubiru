@extends('admin-template.page')
@section('title', 'Accounts')
@section('activeaccounts', 'active')
@section('active_a_lists', 'active')
@section('content')

<!-- Page Heading -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Accounts</h1>
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
              <a href="{{ route('webmanager.users.create') }}" class="btn btn-sm btn-primary btn-icon btn-icon-left">
                <span class="icon text-white-50">
                  <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">Add New</span>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="table-1">
                  <thead>
                    <tr>
                      <th width="5%" class="text-center">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th class="text-center">Level</th>
                      <th width="10%" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="5%" class="text-center">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th class="text-center">Level</th>
                      <th width="10%" class="text-center">Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($users as $result => $print)
                    <tr>
                      <td align="center">{{ $result + $users->firstitem() }}</td>
                      <td>{{ $print->name }}</td>
                      <td>{{ $print->email }}</td>
                      <td align="center">
                        <h6>
                          @if($print->level)
                            <span class="badge badge-primary">Administrator</span>
                          @else
                            <span class="badge badge-info">Author</span>
                          @endif
                        </h6>
                      </td>
                      <td align="center">
                        <form method="POST" action="{{ route('webmanager.users.destroy', $print->id) }}">
                          @csrf
                          @method('delete')
                          <a href="{{ route('webmanager.users.edit', $print->id) }}" class="btn btn-sm btn-warning btn-icon">
                            <span class="icon text-white-50">
                              <i class="fas fa-user-edit"></i>
                            </span>
                          </a>
                          <button type="submit" class="btn btn-sm btn-danger btn-icon">
                            <span class="icon text-white-50">
                              <i class="fas fa-user-times"></i>
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
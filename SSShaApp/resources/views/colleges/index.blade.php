@extends('layouts.main')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Colleges</h2>
                    <div class="ml-auto">
                      <a href="{{ route('colleges.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($message = @session('message'))
                      <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    @foreach($colleges as $college)
                    <tr>
                        <td>{{ $college->name }}</td>
                        <td>{{ $college->address }}</td>
                        <td width="150">
                            <a href="{{ route('colleges.view', $college->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="View"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('colleges.destroy', $college->id) }}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                    </tr>
                    @endforeach
                </tbody>
                </table> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
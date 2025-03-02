@extends('layouts.main')

@section('content')
<main class="py-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-title">
              <strong>College Details</strong>
            </div>           
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="first_name" class="col-md-3 col-form-label">Name: </label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $college->name }}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label">Address: </label>
                    <div class="col-md-9">
                      <p class="form-control-plaintext text-muted">{{ $college->address }}</p>
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-9 offset-md-3">
                        <a href="{{ route('colleges.index') }}" class="btn btn-outline-secondary">Back to Colleges</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit College</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('colleges.editColleges', $college->id) }}" method="POST">
                    @csrf
                    @include('colleges._edit')
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> 
@endsection
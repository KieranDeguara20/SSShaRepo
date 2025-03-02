@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Students</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    @include ('students._create')
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> 
@endsection
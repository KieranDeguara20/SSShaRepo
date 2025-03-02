@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New College</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('colleges.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="address">Address: </label>
                        <input type="text" name="address" id="address">
                    </div>
                    <button type="submit">Create</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> 
@endsection
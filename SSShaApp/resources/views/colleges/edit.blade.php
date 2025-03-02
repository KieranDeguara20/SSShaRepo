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
                <form action="{{ route('colleges.editCollages', $college->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $college->name }}" required>
                    </div>
                    <div>
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" value="{{ $college->address }}" required>
                    </div>
                    <button type="submit">Save Changes</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> 
@endsection
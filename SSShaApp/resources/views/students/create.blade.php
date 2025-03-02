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
                    <div>
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="phone">Phone: </label>
                        <input type="text" name="phone" id="phone" required>
                    </div>
                    <div>
                        <label for="dob">Date of Birth: </label>
                        <input type="date" name="dob" id="dob" required>
                    </div>
                    <div>
                        <label for="college_id">College: </label>
                        <select name="college_id" id="college_id" required>
                            @foreach($colleges as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
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
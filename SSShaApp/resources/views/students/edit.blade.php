@extends('layouts.main')

@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Student</strong>
              </div>           
              <div class="card-body">
                <form action="{{ route('students.editStudents', $student->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $student->name }}" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="{{ $student->email }}" required>
                    </div>
                    <div>
                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" value="{{ $student->phone }}" required>
                    </div>
                    <div>
                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" value="{{ $student->dob }}" required>
                    </div>
                    <div>
                        <label for="college_id">College:</label>
                        <select name="college_id" id="college_id" required>
                            @foreach($colleges as $id => $name)
                                <option value="{{ $id }}" @if($student->college_id == $id) selected @endif>{{ $name }}</option>
                            @endforeach
                        </select>
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
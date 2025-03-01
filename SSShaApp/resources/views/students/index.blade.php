<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <h1>List of Students</h1>
        
        <form method="GET" action="{{ route('students.index') }}">
            <div class="form-group">
                <label for="college_id">Filter by College:</label>
                <select name="college_id" id="college_id" class="form-control">
                    @foreach($colleges as $id => $name)
                        <option value="{{ $id }}" {{ request('college_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sort">Sort by:</label>
                <select name="sort" id="sort" class="form-control">
                    <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Name (A-Z)</option>
                    <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Name (Z-A)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>College</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->college->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
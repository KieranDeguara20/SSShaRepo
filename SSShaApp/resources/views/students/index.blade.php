<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students</title>
</head>
<body>
    <div class="container">
        <h1>List of Students</h1>
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
    </div>
</body>
</html>

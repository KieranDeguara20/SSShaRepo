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
<div class="form-group row">
    <label for="name" class="col-md-3 col-form-label">Name: </label>
    <div class="col-md-9">
        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-3 col-form-label">Email: </label>
    <div class="col-md-9">
        <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="phone" class="col-md-3 col-form-label">Phone: </label>
    <div class="col-md-9">
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror">
        @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="dob" class="col-md-3 col-form-label">Date of Birth: </label>
    <div class="col-md-9">
        <input type="date" id="dob" name="dob" value="{{ old('dob') }}" class="form-control @error('dob') is-invalid @enderror">
        @error('dob')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="college_id" class="col-md-3 col-form-label">College: </label>
    <div class="col-md-9">
        <select id="college_id" name="college_id" class="form-control @error('college_id') is-invalid @enderror">
            @foreach($colleges as $id => $name)
                <option value="{{ $id }}" {{ old('college_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
        @error('college_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary">Create</button>
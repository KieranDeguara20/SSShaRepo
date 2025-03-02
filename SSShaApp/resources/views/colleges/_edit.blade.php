<div class="form-group row">
    <label for="name" class="col-md-3 col-form-label">College Name: </label>
    <div class="col-md-9">
        <input type="text" id="name" name="name" value="{{ old('name', $college->name) }}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="address" class="col-md-3 col-form-label">Address: </label>
    <div class="col-md-9">
        <input type="text" id="address" name="address" value="{{ old('address', $college->address) }}" class="form-control @error('address') is-invalid @enderror">
        @error('address')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary">Save Changes</button>
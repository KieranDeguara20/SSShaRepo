<div class="row">
    <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <label for="filter_college_id" class="mr-2">Filter: </label>
                        <select id="filter_college_id" name="college_id" class="form-control">
                            @foreach($colleges as $id => $name)
                                <option {{ $id == request('college_id') ? 'selected' : '' }} value = "{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
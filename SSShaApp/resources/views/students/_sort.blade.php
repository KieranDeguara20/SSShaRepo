<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <label for="sort" class="mr-2">Sort by:</label>
                    <select id="sort" name="sort" class="form-control">
                        <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Name (A-Z)</option>
                        <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Name (Z-A)</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

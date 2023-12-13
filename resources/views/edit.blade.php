<div class="p-2">
    <div class="form-group">
        <label for="name">Product*</label>
        <input type="text" name="name" id="name" class="form-control my-3" value="{{$data->name}}"
            placeholder="product name">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onclick="update({{$data->id}})">Update</button>
    </div>
</div>
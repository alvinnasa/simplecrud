<div class="p2">
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $data->name }}" class="form-control" placeholder="name product">
        <input type="text" name="alamat" id="alamat" value="{{ $data->alamat }}" class="form-control" placeholder="alamat product">
        <input type="text" name="email" id="email" value="{{ $data->email }}" class="form-control" placeholder="email product">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Exit</button>
    </div>
</div>

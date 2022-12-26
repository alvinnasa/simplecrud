<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->email }}</td>
            <td>
                <!-- <button type="button" class="btn btn-success" href="{{url('view')}}" >View</button> -->
                <button class="btn btn-warning" onClick="show({{ $item->id }})">Edit</button>
                <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
            </td>
        </tr>
    @endforeach
</table>

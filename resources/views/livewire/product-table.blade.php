<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
        <tr>
            <th width="2%">SR No.</th>
            <th width="10%">Image</th>
            <th width="15%">Belong Category</th>
            <th width="20%">Name</th>
            <th width="20%">Slug</th>
            <th width="15%">Price/Variations</th>
            <th width="5%">Status</th>
            <th width="2%">Sort</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td> <img src="{{ asset('web/uploads/'.$product->image) }}" width="100%" alt=""> </td>
            <td>{{ $product->subsubcategories->first()->title }} , ...</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->slug }}</td>
            @if($product->has_variation == '1')
                <td><a href="javascript:;">variations</a></td>
            @else
                <td>{{ $product->price }}/- <del>{{ $product->mrp }}/-</del></td>
            @endif
            <td>
                <div class="form-check form-switch form-switch-right form-switch-md">
                    <input wire:click="status({{ $product->id }})" {{ $product->status == '1' ? 'checked' : '' }} class="form-check-input code-switcher" type="checkbox" id="default">
                </div>
            </td>
            <td>{{ $product->sort }}</td>
            <td>
                <a href="{{ route('admin.product.edit', $product->id) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
            </td>
            <td>
                <form method="POST" action="{{ route('admin.product.destroy', $product->id) }}">
                @csrf @method('delete')
                <button type="submit" class="dropdown-item remove-item-btn">
                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
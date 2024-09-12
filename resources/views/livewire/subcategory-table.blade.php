<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
        <tr>
            <th width="2%">SR No.</th>
            <th width="10%">Image</th>
            <th width="20%">Belong Category</th>
            <th width="20%">Sub subcategory</th>
            <th width="20%">Slug</th>
            <th width="10%">Status</th>
            <th width="2%">Sort</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td> <img src="{{ asset('web/uploads/'.$subcategory->image) }}" width="100%" alt=""> </td>
            <td>{{ $subcategory->category->title }}</td>
            <td>{{ $subcategory->title }}</td>
            <td>{{ $subcategory->slug }}</td>
            <td>
                <div class="form-check form-switch form-switch-right form-switch-md">
                    <label for="default" class="form-label text-muted">Show</label>
                    <input wire:click="status({{ $subcategory->id }})" {{ $subcategory->status == '1' ? 'checked' : '' }} class="form-check-input code-switcher" type="checkbox" id="default">
                </div>
            </td>
            <td>{{ $subcategory->sort }}</td>
            <td>
                <a href="{{ route('admin.subcategory.edit', $subcategory->id) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
            </td>
            <td>
                <form method="POST" action="{{ route('admin.subcategory.destroy', $subcategory->id) }}">
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
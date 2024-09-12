<table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
    <thead>
        <tr>
            <th width="5%">SR No.</th>
            <th width="20%">Category</th>
            <th width="20%">Slug</th>
            <th width="20%">Status</th>
            <th width="10%">Sort</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->slug }}</td>
            <td>
                <div class="form-check form-switch form-switch-right form-switch-md">
                    <label for="default" class="form-label text-muted">Show</label>
                    <input wire:click="status({{ $category->id }})" {{ $category->status == '1' ? 'checked' : '' }} class="form-check-input code-switcher" type="checkbox" id="default">
                </div>
            </td>
            <td>{{ $category->sort }}</td>
            <td>
                <a href="{{ route('admin.category.edit', $category->id) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
            </td>
            <td>
                <form method="POST" action="{{ route('admin.category.destroy', $category->id) }}">
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
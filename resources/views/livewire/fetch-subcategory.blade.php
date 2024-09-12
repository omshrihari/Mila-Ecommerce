<div>
    <div>
        <label wire:init="fetchSubCats('{{ $selectcat_id }}')" class="form-label" for="manufacturer-name-input">Category</label>
        <select name="category_id" class="form-control" wire:change="fetchSubCats($event.target.value)">
            <option selected disabled>Choose One</option>
            @foreach ($categories as $cat)
                <option @selected($selectcat_id == $cat->id) value="{{ $cat->id }}">{{ $cat->title }}</option>
            @endforeach
        </select>
    </div>
    <br />
    <div>
        <label class="form-label" for="manufacturer-name-input">Sub Category</label>
        <select name="subcategory_id" class="form-control">
            <option selected disabled>Choose One</option>
            @if (isset($subcategories))
                @foreach ($subcategories as $cats)
                    <option @selected($selectsubcat_id == $cats->id) value="{{ $cats->id }}">{{ $cats->title }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>

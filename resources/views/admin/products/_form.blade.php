<form action="{{!empty($model) ? route('products.update', $model['id']) : route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(!empty($model))
        @method("PUT")
    @endif
    <div class="form-group">
        <label for="name_input">Name</label>
        <input type="text" class="form-control" name="name" id="name_input" placeholder="Category name"
               value="<?= !empty($model) ? $model['name'] : null ?>">
    </div>
    <div class="form-group">
        <label for="short_description_input">Short description</label>
        <textarea id="short_description_input" class="form-control" name="short_description"
                  placeholder="Short description"><?= !empty($model) ? $model['short_description'] : null ?></textarea>
    </div>
    <div class="form-group">
        <label for="long_description_input">Long description</label>
        <textarea id="long_description_input" class="form-control" name="long_description"
                  placeholder="Long description"><?= !empty($model) ? $model['long_description'] : null ?></textarea>
    </div>
    <div class="form-group">
        <label for="characteristics_input">Characteristics</label>
        <textarea id="characteristics_input" class="form-control" name="characteristics"
                  placeholder="Characteristics"><?= !empty($model) ? $model['characteristics'] : null ?></textarea>
    </div>
    <div class="form-group">
        <label for="price_input">Price</label>
        <input name="price" id="price_input" class="form-control" type="number" min="0.00" max="10000.00" step="1"/>
    </div>
    <div class="form-group">
        <label for="">Is available</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_available" id="is_available_yes" value="1"
               @if((!empty($model) && $model['is_available']) || !isset($model)) checked @endif>
        <label class="form-check-label" for="is_available_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_available" id="is_available_no" value="0"
               @if(!empty($model) && !$model['is_available']) checked @endif>
        <label class="form-check-label" for="is_available_no">No</label>
    </div>
    <br><br>

    <div class="form-group">
        <label class="w-100" for="imgInp">Image</label>
        <input accept="image/*" type='file' id="imgInp" name="image"
               class=""/><br>
        <img id="blah" src="#" style="max-width: 250px; max-height: 250px; object-fit: cover"/>
    </div>
    <br><br>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>


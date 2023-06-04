<form action="{{!empty($model) ? route('categories.update', $model['id']) : route('categories.store')}}" method="POST">
    @csrf
    @if(!empty($model))
        @method("PUT")
    @endif
    <div class="form-group">
        <label for="name_input">Name</label>
        <input type="text" class="form-control" name="name" id="name_input" placeholder="Category name" value="<?= !empty($model) ? $model['name'] : null ?>">
    </div>
    <div class="form-group">
        <label for="country_input">Country</label>
        <input type="text" class="form-control" name="country" id="country_input" placeholder="Country" value="<?= !empty($model) ? $model['country'] : null ?>">
    </div>
    <div class="form-group">
        <label for="">Is available</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_available" id="is_available_yes" value="1" @if((!empty($model) && $model['is_available']) || !isset($model)) checked @endif>
        <label class="form-check-label" for="is_available_yes">Yes</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_available" id="is_available_no" value="0" @if(!empty($model) && !$model['is_available']) checked @endif>
        <label class="form-check-label" for="is_available_no">No</label>
    </div>
    <br><br>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>


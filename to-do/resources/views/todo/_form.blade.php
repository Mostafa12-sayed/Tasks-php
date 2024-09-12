
<div class="form-group">
  <x-input type="text" name="title" label="Title"  placeholder="Enter task title" :value="old('title', $todo->title)" />
</div>

<div class="form-group">
  <x-textarea name="description" label="Description"  placeholder="Enter task Description" :value="old('description',$todo->description)" />
</div>

<div class="form-group">
  <label for="exampleFormControlSelect2">Complate</label>
  <select name="is_completed" id="complate"  class="form-control" id="exampleFormControlSelect2">
    <option value="1" @selected(old('complate', $todo->is_completed == 1))>True</option>
    <option value="0" @selected(old('complate', $todo->is_completed == 0))>False</option>
  </select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
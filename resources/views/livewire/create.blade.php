<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title:</label>
        <input wire:model='title' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the title">
        @error('title')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Body:</label>
        <textarea wire:model='body' class="form-control" id="exampleFormControlInput2" placeholder="Enter the Body"></textarea>
        @error('body')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <button wire:click.prevent="store()" type="submit" class="btn btn-success mt-3">Save</button>
</form>

<div wire:ignore.self class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >

                <svg  style="color:brown;font-weight:bold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <div class="modal-body">
            <div class="row mb-2">
            <div class="col-sm-4">
                        <label> Category</label>
                          <select class="form-control" wire:model="edit_category_id">
                            <option>select category</option>
                            @if($categories)
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            @endif
                          </select>
                            @error('edit_category_id') <span class="error text-danger"><b><b><b><b>{{$message}}</b></b></b></b></span> @enderror
                        </div>
                        <div class="col-sm-4">
                        <label> Name</label>
                            <input type="text" wire:model="edit_name" id="name" class="form-control" placeholder="Product Name" autocomplete="off">
                            @error('edit_name') <span class="error text-danger"><b><b><b><b>{{$message}}</b></b></b></b></span> @enderror
                        </div>

                        <div class="col-sm-4">
                        <label> Price</label>
                            <input type="number" wire:model="edit_price" id="name" class="form-control" placeholder="Product price" autocomplete="off">
                            @error('edit_price') <span class="error text-danger"><b><b><b><b>{{$message}}</b></b></b></b></span> @enderror
                        </div>
                        <div class="col-sm-4">
                        <label> Description</label>
                            <textarea type="text" wire:model="edit_description" id="name" class="form-control" placeholder="Description" autocomplete="off"></textarea>
                            @error('edit_description') <span class="error text-danger"><b><b><b><b>{{$message}}</b></b></b></b></span> @enderror
                        </div>

                        <div class="col-sm-4">
                            <label> Image</label>
                                <input type="file" wire:model="edit_image" id="name" class="form-control" placeholder="Product Name" autocomplete="off" multiple>
                                @error('edit_image') <span class="error text-danger"><b><b><b><b>{{$message}}</b></b></b></b></span> @enderror
                            </div>


                    </div>




                    <div class="row mb-2">



                  </div>

            </div>
            <div class="modal-footer">
            <button class="btn"  data-dismiss="modal" id="add_model_close"> No</button>
                <button type="button"  wire:click="update" class="btn btn-primary">save</button>
            </div>
        </div>
    </div>
</div>

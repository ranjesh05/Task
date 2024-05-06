<div class="">
    <div class="row">
        <div class="col-sm-9">
            <h4 class="mt-3"><b>All products</b></h4>
        </div>
        <div class="col-sm-3 ">
            <a><button type="button" class="btn btn-outline-primary float-right m-3" data-toggle="modal" data-target="#add">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add
                </button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">

                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-3">

                        </div>

                    </div>
                </div>
                @include('modals.admin.product.add')
                @include('modals.admin.product.edit')
                @include('modals.admin.product.view')



                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-4 text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Code</th>
                                    <th>Price</th>
                                    <th>Description</th>

                                    {{-- <th>Status</th> --}}
                                    <th colspan="4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($products) > 0)
                                @foreach ($products as $key => $product)
                                <tr>
                                    <td class="text-center">

                                        {{ $loop->index+1 }}

                                    </td>
                                    <td class="text-center">{{$product->name}}</td>
                                    <td class="text-center">
                                        @if($product->category)
                                        {{$product->category->name}}
                                        @else
                                        N/A
                                        @endif

                                    </td>
                                    <td class="text-center">{{$product->code}}</td>
                                    <td class="text-center">{{$product->price}}</td>
                                    <td class="text-center">{{$product->description}}</td>
                                    <td class="text-center">
                                                <label class="switch s-icons s-outline s-outline-success mr-2" style="margin-bottom: 0px !important">
                                                    <input type="checkbox" wire:change="status_update({{$product->id}})" id="status_{{$key}}" {{ ($product->status == 1) ? "checked" : "" }}>
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                    <td style="font-size: 20px;">

                                    <a wire:click="edit_product({{$product->id}})" style="cursor:pointer"  data-toggle="modal" data-target="#edit"><i class="far fa-edit" ></i><span class="icon-name"></span></a>
                                    </td>
                                    <td style="font-size: 20px;">

                                        <button wire:click="view({{$product->id}})" class="form-control"  data-toggle="modal" data-target="#view">View</button>
                                        </td>
                                        <td style="font-size: 20px;">

                                            <button wire:click="delete({{$product->id}})" class="form-control"  >delete</button>
                                            </td>

                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7"><b>No Record Found</b></td>
                                </tr>
                                @endif
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('openDeleteModal', event => {
        $('#deleteAdmin').modal('show');
    });
    window.addEventListener('closeDeleteModal', event => {
        $("#delete_model_close").click();
    });
    window.addEventListener('closeAddModal', event => {
        $("#add_model_close").click();
    });
    window.addEventListener('edit_model_close', event => {
        $("#edit_model_close").click();
    });

</script>

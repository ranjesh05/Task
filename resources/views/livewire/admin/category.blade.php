<div class="">
    <div class="row">
        <div class="col-sm-9">
            <h4 class="mt-3"><b>All categories</b></h4>
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
                @include('modals.admin.category.add')
                @include('modals.admin.category.edit')
              


                <div class="widget-content widget-content-area">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-4 text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    {{-- <th>Status</th> --}}
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($categories) > 0)
                                @foreach ($categories as $key => $category)
                                <tr>
                                    <td class="text-center">
                                      
                                        {{ $loop->index+1 }}
                                        
                                    </td>
                                    <td class="text-center">{{$category->name}}</td>
                                    <td class="text-center">
                                                <label class="switch s-icons s-outline s-outline-success mr-2" style="margin-bottom: 0px !important">
                                                    <input type="checkbox" wire:change="status_update({{$category->id}})" id="status_{{$key}}" {{ ($category->status == 1) ? "checked" : "" }}>
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                    <td style="font-size: 20px;">

                                    <a wire:click="edit_category({{$category->id}})" style="cursor:pointer"  data-toggle="modal" data-target="#edit"><i class="far fa-edit" ></i><span class="icon-name"></span></a>


                                        
                                    </td>
                                 
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3"><b>No Record Found</b></td>
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
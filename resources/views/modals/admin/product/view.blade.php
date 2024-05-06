<div wire:ignore.self class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <svg style="color:brown;font-weight:bold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <label> Category</label>
                        <p><b>{{$view_category_id}}</b></p>
                    </div>
                    <div class="col-sm-4">
                        <label> Name</label>
                        <p><b>{{$view_name}}</b></p>

                    </div>

                    <div class="col-sm-4">
                        <label> Price</label>
                        <p><b>{{$view_price}}</b></p>

                    </div>
                    <div class="col-sm-4">
                        <label> Description</label>
                        <p><b>{{$view_description}}</b></p>

                    </div>
@if(count($view_image)>0)
@foreach ($view_image as $key => $image)


                    <div class="col-sm-4">
                        <label> Image {{$key+1}}</label>
                      
<td class="text-center"><img src="{{  $image }}" style="height: 50px;width:50;"></td>

                    </div>
                    @endforeach
@endif

                </div>




                <div class="row mb-2">



                </div>

            </div>

        </div>
    </div>
</div>

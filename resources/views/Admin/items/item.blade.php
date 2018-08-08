<div class="card">
    {{--<img class="card-img-top" src="{{asset('upload/images/'.$item->image)}}" alt="Card image cap">--}}
    <a href=""><img src="{{asset('upload/images/'.$item->image)}}" class="img-responsive" alt=""/></a>
    <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
        <p>Price : {{$item->price}}</p>
        <p class="card-text">{{$item->description}}</p>
        <a href="#" class="btn more mt-3" data-toggle="modal" data-target="#exampleModal">Detail</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">{{$item->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="card-img-top" src="{{asset('upload/images/'.$item->image)}}" alt="Card image cap">
                        <p class="paragraph-agileits-w3layouts my-3">Price : {{$item->price}}</p>
                        <p class="paragraph-agileits-w3layouts my-3">Company : {{$item->company}}  </p>
                        <p class="paragraph-agileits-w3layouts my-3">Color : {{$item->color}}</p>
                        <p class="paragraph-agileits-w3layouts my-3">Discount : {{$item->discount}}%</p>
                        <p class="paragraph-agileits-w3layouts my-3">{{$item->description}}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-success">Update</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal -->
    </div>
</div>
@extends('dashLayout.dashApp')

@section('content')
    <div class="text-center">
        <h1><i>Add New Item</i></h1>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <!-- Forms-3 -->
            <div class="outer-w3-agile mt-3">
                <form action="/item/store" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="category" name="category">
                                @foreach($categorys as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Company</label>
                        <div class="col-sm-10">
                            <input type="company" class="form-control" id="company" name="company" placeholder="Company name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Color</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="color" name="color" placeholder="color" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Discount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="discount" name="discount" placeholder="Discount" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Type detail here." required=""></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" id="image" name="image" multiple required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--// Forms-3 -->
        </div>
        <div class="col-md-2">

        </div>
    </div>

@endsection
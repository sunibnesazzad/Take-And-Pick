@extends('dashLayout.dashApp')

@section('content')
    <div class="text-center">
        <h1><i>Create New Category</i></h1>
    </div>
    <hr>

    <div style="margin:0 auto;width:50%;text-align:left">
        <div class="">
            <form method="POST" action="/category/store">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Title"> Enter Category Name</label>
                    <input type="text" class="form-control" name="category" id="category"   placeholder="Category" required>
                </div>

                <button type="submit" class="btn btn-primary align-middle" >Create</button>

            </form>

            {{--@include('includes.errors')--}}

        </div>
    </div>





@endsection
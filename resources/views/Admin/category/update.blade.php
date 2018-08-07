@extends('dashLayout.dashApp')

@section('content')
    <div class="text-center">
        <h1><i>Create New Category</i></h1>
    </div>
    <hr>
    <div style="margin:0 auto;width:50%;text-align:left">
        <div class="">
            <form action="/category/edit/{{ $category->id }}" method="POST" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="Title"> Enter New Category Name</label>
                    <input type="text" class="form-control" name="category" id="category"  value="<?php echo $category->name; ?>">
                </div>

                <button type="submit" class="btn btn-success align-middle" >Update</button>

            </form>
            {{--@include('includes.errors')--}}
        </div>
    </div>

@endsection
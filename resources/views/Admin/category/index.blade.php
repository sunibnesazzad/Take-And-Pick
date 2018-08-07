@extends('dashLayout.dashApp')

@section('content')

    <!-- table3 -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">All Categories</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($categorys as $category)
                @include('Admin.category.category')
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>

@endsection
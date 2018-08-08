@extends('dashLayout.dashApp')

@section('content')

    <!-- main-heading -->
    <h2 class="main-title-w3layouts mb-2 text-center">All Items</h2>
    <!--// main-heading -->
    <hr>

    <section class="cards-section">
        <div class="card-columns">
            @foreach($items as $item)
                @include('Admin.items.item')
            @endforeach
        </div>
    </section>

@endsection



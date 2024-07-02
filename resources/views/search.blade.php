@extends('master')
@section('content')
    <div class="container mb-4 mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <h1>Search for: </h1>
            @foreach ($products as $item)
                <div class="col">
                    <div class="card t_product_card">
                        <a href="/detail/{{ $item['id'] }}">
                            <img src="{{ $item['gallery'] }}" class="card-img-top" alt="" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['name'] }}</h5>
                                <p class="card-text">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

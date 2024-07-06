@extends('master')
@section('content')
    <div class="container mb-4 mt-4">
        <h1 class="mb-3">Cart List</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($products as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td><img src="{{ $item->gallery }}" alt="{{ $item->name }}" width="50" /></td>
                            <td><a href="/detail/{{ $item->id }}">{{ $item->name }}</a></td>
                            <td>{{ $item->price }}</td>
                            <td><a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove From Cart</a></td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

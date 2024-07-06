@extends('master')
@section('content')
    <div class="container mb-4 mt-4">
        <h1 class="mb-3">Orders List</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Delivery Staus</th>
                        <th scope="col">Payment Staus</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($orders as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td><img src="{{ $item->gallery }}" alt="{{ $item->name }}" width="50" /></td>
                            <td><a href="/detail/{{ $item->id }}">{{ $item->name }}</a></td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->payment_status }}</td>
                            <td>{{ $item->payment_method }}</td>
                            <td>{{ $item->address }}</td>
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

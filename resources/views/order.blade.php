@extends('master')
@section('content')
    <div class="container mb-4 mt-4">
        <h1 class="mb-3">Order</h1>
        <div class="row g-4">
            <div class="col-lg-6">
                <table class="table table-striped">

                    <tbody>
                        <tr>
                            <td>Price</td>
                            <td>{{ $total }} INR</td>
                        </tr>
                        <tr>
                            <td>tax</td>
                            <td>0 INR</td>
                        </tr>
                        <tr>
                            <td>Delivery</td>
                            <td>100 INR</td>
                        </tr>
                        <tr>
                            <td>Total Amount</td>
                            <td>{{ $total + 100 }} INR</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <form action="orderplace" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Address:</label>
                        <textarea name="address" id="" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Payment Method:</label>
                        {{-- <input type="radio" class="form-control" name="payment"><span>Online Payment</span> --}}
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" value="Online Payment" checked>
                            <label class="form-check-label">Online Payment</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" value="EMI">
                            <label class="form-check-label">EMI</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="payment" value="COD">
                            <label class="form-check-label">COD</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection

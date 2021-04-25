
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Payment Gateway</div>

                    <div class="card-body">
                        <form method="post" action="{{route('pay.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="choose_payment_type">Choose Payment Type</label>
                                <select name="payment_type" id="choose_payment_type" class="form-control">
                                    <option value="credit">Credit Card</option>
                                    <option value="bank">Bank</option>
                                </select>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

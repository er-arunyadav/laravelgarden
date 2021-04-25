
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
                        <hr>
                        <h2 class="mt-1">Description</h2>
                        <p>In this section I have created multiple payment gateway architecture using singleton, interface and service container.</p>
                        <p>First I created the PayOrdercontroller, then I created a store function, In which Inject two things
                            <span class="green">OrderDetails</span><br />
                            <span class="green">PaymentGatewayContract</span>
                            <br /><br />
                            <span class="green">PaymentGatewayContract</span> is an interface which contains two abstract method <span class="green">setDiscount</span> and <span class="green">charge</span>
                        </p>
                        <p>
                            After creating Interface i created two custom class <span class="green">BankPaymentGateway</span> and <span class="green">CreditPaymentGateway</span> which implements the <span class="green">PaymentGatewayContract</span> interface.
                            which contains both method <span class="green">setDiscount</span> and <span class="green">charge</span>
                        . After created custom class, i registered my interface using singleton and bind with custom class and add condition if request has credit then instance of CreditPaymentGateway call else instance of PaymentGatewayContract call</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

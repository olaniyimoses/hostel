@extends('layouts.front')

@section('content')
    <br><br><br><br>

    <div role="main" class="main shop">
        <div class="container">
            <hr class="tall">
            <div class="row">
                <div class="col-md-12">
                    <div class="row featured-boxes login">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="featured-box featured-boxx-secundary default">
                                <div class="box-content">
                                    <form method="post" action="{!! url('cart/pay') !!}">
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form action="{!! url('cart/pay') !!}" method="POST">
                                        {!! csrf_field() !!}
                                        @if (! empty ($item))
                                        <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_qvF0YFVNxMsURn8llOB8aQxs"
                                            data-amount="{!! $total !!}"
                                            data-name="{!!  !!}"
                                            data-description="2 widgets ($20.00)"
                                            data-image="/128x128.png"
                                            data-locale="auto">
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
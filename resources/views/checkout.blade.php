@extends('layouts.front')

@section('content')
    <br><br><br><br>

    <div role="main" class="main shop">

        <div class="container">

            <hr class="tall">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="shorter"><strong>Checkout</strong></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Review & Payment
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <table cellspacing="0" class="shop_table cart">
                                        <thead>
                                        <tr>
                                            <th class="product-thumbnail">
                                                &nbsp;
                                            </th>
                                            <th class="product-name">
                                                Product
                                            </th>
                                            <th class="product-price">
                                                Price
                                            </th>
                                            <th class="product-quantity">
                                                Quantity
                                            </th>
                                            <th class="product-subtotal">
                                                Total
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (! empty($items))
                                            @foreach($items as $item)
                                                <tr class="cart_table_item">
                                                    <td class="product-thumbnail">
                                                        <a href="shop-product-sidebar.html">
                                                            <img width="100" height="100" alt="" class="img-responsive" src="{!! asset("assets/img/hostels/$item[hostel_id]/3.jpg") !!}">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">{!! $item['name']. ' ' . $item['description'] !!}</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount">&#x20A6; {!! number_format($item['price'], 2, '.', ',') !!}</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        {!! $item['quantity'] !!}
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount">&#x20A6; {!! number_format($item['subtotal'], 2, '.', ',')!!}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td>
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    &nbsp;
                                                </td>
                                                <td class="product-name">Nothing to Checkout</td>
                                                <td>
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>

                                    <hr class="tall">

                                    <h4>Cart Totals</h4>
                                    <table cellspacing="0" class="cart-totals">
                                        <tbody>
                                        <tr class="total">
                                            <th>
                                                <strong>Order Total</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount">&#x20A6; {!! isset($total) ?  number_format($total, 2, '.', ',') : ' 0' !!}</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div class="actions-continue">
                        <a href="{!! url('cart/pay') !!}" class="btn btn-lg btn-primary push-top">Place Order</a>
                    </div>--}}

                    <div class="actions-continue">
                        <form action="{!! url('cart/pay') !!}" method="POST">
                            {!! csrf_field() !!}
                            @if (! empty($items))
                                @foreach($items as $item)
                            <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="pk_test_qvF0YFVNxMsURn8llOB8aQxs"
                                    data-amount={!! $total !!}
                                    data-name="{!! Auth::user()->email !!}"
                                    data-description="{!! $item['name']. ' ' . $item['description'] !!}"
                                    data-image="{!! asset("assets/img/hostels/$item[hostel_id]/3.jpg") !!}"
                                    data-locale="auto">
                            </script>
                                @endforeach
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Cart Totals</h4>
                    <table cellspacing="0" class="cart-totals">
                        <tbody>
                        <tr class="total">
                            <th>
                                <strong>Order Total</strong>
                            </th>
                            <td>
                                <strong><span class="amount">&#x20A6; {!! isset($total) ?  number_format($total, 2, '.', ',') : ' 0' !!}</span></strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
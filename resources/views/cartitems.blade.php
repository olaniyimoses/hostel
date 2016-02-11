@extends('layouts.front')

@section('content')

    <br><br><br><br>
    <div role="main" class="main shop">

        <div class="container">

            <hr class="tall">

            <div class="row">
                <div class="col-md-12">
                    <div class="featured-boxes">
                        <div class="col-md-8">
                            <div class="featured-box featured-box-secundary featured-box-cart">
                                <div class="box-content">
                                    <form method="post" action="#">
                                        <table cellspacing="0" class="shop_table cart">
                                            <thead>
                                            <tr>
                                                <th class="product-remove">
                                                    &nbsp;
                                                </th>
                                                <th class="product-thumbnail">
                                                    &nbsp;
                                                </th>
                                                <th class="product-name">
                                                    Items
                                                </th>
                                                <th class="product-quantity">
                                                    Quantity
                                                </th>
                                                <th class="product-price">
                                                    Price
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($items as $item)
                                            <tr class="cart_table_item">
                                                <td class="product-remove">
                                                    <a title="Remove this item" class="remove" href="#">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="shop-product-sidebar.html">
                                                        <img width="100" height="100" alt="" class="img-responsive" src="#">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="shop-product-sidebar.html">{!! $item->name !!}</a>
                                                </td>
                                                <td class="product-quantity">
                                                    <form enctype="multipart/form-data" method="post" class="cart">
                                                        <div class="quantity">
                                                            <input type="number" class="form-control" value="{!! $item->quantity !!}" name="quantity"/>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">{!! $item->price !!}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td class="actions" colspan="6">
                                                    <div class="actions-continue">
                                                        <input type="submit" value="Update Cart" name="update_cart" class="btn btn-default">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="featured-boxes cart">
                        <div class="col-md-4">
                            <div class="featured-box featured-box-secundary default">
                                <div class="box-content">
                                    <h4>Cart Totals</h4>
                                    <table cellspacing="0" class="cart-totals">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>
                                                <strong>Cart Subtotal</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount">$431</span></strong>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>
                                                Shipping
                                            </th>
                                            <td>
                                                Free Shipping<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <th>
                                                <strong>Order Total</strong>
                                            </th>
                                            <td>
                                                <strong><span class="amount">$431</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row featured-boxes">
                        <div class="col-md-12">
                            <div class="actions-continue">
                                <input type="submit" value="Proceed to Checkout →" name="proceed" class="btn btn-lg btn-primary">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
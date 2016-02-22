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
                                        <tr class="cart_table_item">
                                            <td class="product-thumbnail">
                                                <a href="shop-product-sidebar.html">
                                                    <img width="100" height="100" alt="" class="img-responsive" src="img/products/product-1.jpg">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-sidebar.html">Photo Camera</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">$299</span>
                                            </td>
                                            <td class="product-quantity">
                                                1
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">$299</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_table_item">
                                            <td class="product-thumbnail">
                                                <a href="shop-product-sidebar.html">
                                                    <img width="100" height="100" alt="" class="img-responsive" src="img/products/product-2.jpg">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-sidebar.html">Golf Bag</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">$72</span>
                                            </td>
                                            <td class="product-quantity">
                                                1
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">$72</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_table_item">
                                            <td class="product-thumbnail">
                                                <a href="shop-product-sidebar.html">
                                                    <img width="100" height="100" alt="" class="img-responsive" src="img/products/product-3.jpg">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-sidebar.html">Workout</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">$60</span>
                                            </td>
                                            <td class="product-quantity">
                                                1
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">$60</span>
                                            </td>
                                        </tr>
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
                                                <strong><span class="amount">$431</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="actions-continue">
                        <input type="submit" value="Place Order" name="proceed" class="btn btn-lg btn-primary push-top">
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
                                <strong><span class="amount">$431</span></strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
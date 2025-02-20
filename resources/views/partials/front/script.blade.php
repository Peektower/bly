<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function loadCart(){
        var items = $('#cart-page-products');
        var details = $('.button-wrap')
        $.ajax({
            type: 'GET',
            url: '/get-cart',
            success: function (data){
                var cartItems = data.carts;
                items.empty();
                details.empty();
                $.each(cartItems, function (i, item){
                    console.log(item)
                    items.append(
                        $(
                            '<div class="flat-card is-auto cart-card product-container" data-product-id="">' +
                                '<ul class="cart-content">' +
                                    '<li>' +
                                        '<img src="'+ item.options.image +'" data-demo-src="'+ item.options.image +'" alt="">' +
                                            '<span class="product-info">' +
                                                    '<span>' + item.name + '</span>' +
                                            '<span>'+ item.options.category +'</span>' +
                                            '</span>' +
                                            '<span class="product-price">' +
                                                    '<span>Price</span>' +
                                            '<span>' + item.price + '</span>' +
                                            '</span>' +

                                            '<div data-trigger="spinner" class="main-cart-spinner">' +
                                                '<input class="hidden-spinner" type="hidden" value="1" data-spin="spinner" data-rule="quantity" data-min="1" data-max="99">' +
                                                    '<a class="spinner-button is-remove" onclick="decreaseItem(\'' + item.rowId + '\', ' + item.qty + ')" href="javascript:;" data-spin="down">' +
                                                        '<i class="fa fa-minus"></i>' +
                                                    '</a>' +
                                                    '<span class="spinner-value">'+ item.qty +'</span>' +
                                                    '<a class="spinner-button is-add" onclick="increaseItem(\'' + item.rowId + '\', ' + item.qty + ')" href="javascript:;" data-spin="up">' +
                                                        '<i class="fa fa-plus"></i>' +
                                                    '</a>' +
                                            '</div>' +

                                            '<span class="action">' +
                                                    '<span class="action-link is-remove has-simple-popover" data-content="Remove from Cart" data-placement="top">' +
                                                        '<a href="#" onclick="removeFromCart(\'' + item.rowId + '\')" ><i class="fa fa-trash" data-feather="trash-2"></i></a>' +
                                                    '</span>' +
                                            '</span>' +
                                    '</li>' +
                                '</ul>' +
                            '</div>'
                        )
                    )
                });

                if (data.cartQty != 0){
                    details.append(
                        $(
                            '<div class="summary-header">' +
                            '<i data-feather="shopping-cart"></i>' +
                            '<div><var id="cart-page-count">' + data.cartQty +'</var> <span>Item(s) in Cart</span></div>' +
                            '</div>' +
                            '<div class="cart-summary-list">' +
                            '<div class="summary-item">' +
                            '<span>Subtotal</span>' +
                            '<span id="cart-summary-subtotal" class="amount">' + data.subTotal + '</span>' +
                            '</div>' +
                            '<div class="summary-item is-bold">' +
                            '<span>Total</span>' +
                            '<span id="cart-summary-total" class="amount">' + data.cartTotal + '</span>' +
                            '</div>' +
                            '</div>' +
                            '<a href="{{route('checkout.one')}}" id="init-checkout" class="button is-fullwidth feather-button is-bold primary-button raised is-rounded">Checkout</a>' +
                            '<button id="update-cart-page" class="button is-fullwidth feather-button is-bold secondary-button raised is-rounded is-hidden">' +
                            'Update Cart' +
                            '</button>'
                        )
                    );
                }

            }
        })
    }

    function loadSmallCart(){
        var list = $('.shopping-cart-items');
        var count = $('.cart-action')
        $.ajax({
            type: 'GET',
            url: '/get-cart',
            success: function (data){
                var cartItems = data.carts;
                list.empty();

                count.empty();
                $.each(cartItems, function (i, item){
                    console.log(item)
                    list.append(
                        $(
                            '<li class="clearfix">' +
                                '<img src="'+ item.options.image +'" data-demo-src="'+ item.options.image +'" alt="" />' +
                                '<span class="item-meta">' +
                                '<span class="item-name">'+ item.name +'</span>' +
                                '<span class="item-price">' +
                                    '<var>' + item.price +'</var> x <span>'+ item.qty +'</span>'+
                                '</span>' +
                                '</span>' +
                                '<span class="quantity">' +
                                '<div data-trigger="spinner" class="return-spinner">' +
                                    '<input class="hidden-spinner" type="hidden" value="1" data-spin="spinner" data-rule="quantity" data-min="1" data-max="99">' +
                                    '<a class="spinner-button is-remove" onclick="decreaseItem(\'' + item.rowId + '\', ' + item.qty + ')" href="javascript:;" data-spin="down">' +
                                        '<i class="fa fa-minus"></i>' +
                                    '</a>' +
                                    '<span class="spinner-value">'+ item.qty +'</span>' +
                                        '<a class="spinner-button is-add" onclick="increaseItem(\'' + item.rowId + '\', ' + item.qty + ')" href="javascript:;" data-spin="up">' +
                                            '<i class="fa fa-plus"></i>' +
                                        '</a>' +
                                    '</div>'+
                                '</span>' +

                                '<span class="remove-item">' +
                                '<i onclick="removeFromCart(\'' + item.rowId + '\')" class="fa fa-trash" data-content="Remove from Cart" data-placement="top"></i>' +
                                '</span>' +
                            '</li>'
                        )
                    )
                });

                count.append(
                    $('<span class="cart-total">' + data.cartTotal + '</span>' +
                        '<a href="{{route('user.cart')}}" class="button view-cart-button primary-button upper-button raised is-bold">' +
                        '<span>View Cart</span>' +
                        '</a>' +
                        '<a class="button update-cart-button upper-button is-bold is-hidden">' +
                        '<span>Update</span>' +
                        '</a>')
                );

            },
        });
    }

    function addToCart(id){
        var url = '{{route('addToCart', [':id'])}}';
        url = url.replace(':id', id);
        $.ajax({
            type: 'POST',
            url: url,
            data: {id:id},
            success: function (e){
                loadSmallCart();
                loadCart()
            }
        })
    }

    function increaseItem(id, qty){
        var url = '{{route('item.increase')}}';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                id: id,
                quantity: qty
            },
            success: function (e){
                loadCart();
                loadSmallCart();
            }
        })
    }

    function decreaseItem(id, qty){
        var url = '{{route('item.decrease')}}';
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                id: id,
                quantity: qty
            },
            success: function (e){
                loadCart();
                loadSmallCart();
            }
        })
    }

    function removeFromCart(id){
        var url = '{{route('remove.item')}}'
        $.ajax({
            type: 'POST',
            url: url,
            data: {id: id},
            success: function (e){
                loadSmallCart();
                loadCart();
            }
        })
    }

    function emptyCart(){
        var url = '{{route('cart.empty')}}'
        $.ajax({
            type: 'GET',
            url: url,
            success: function (e){
                loadSmallCart();
                loadCart();
            }
        })
    }


    $(document).ready(function() {
        loadSmallCart();
        loadCart();
    });

</script>

<div id="quickview-modal-3-13" class="modal fade quickview in quickview-modal-product-details-{{$product -> id}}" tabindex="-1" role="dialog"
     style="display: none;">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" class="close" data-product-id="{{$product -> id}}" data-dismiss="modal" aria-label="Close" ><i
                        class="material-icons close">close</i></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-md-5 col-sm-5 divide-right">
                        <div class="images-container bottom_thumb">
                            <div class="product-cover">
                                <img class="js-qv-product-cover img-fluid"
                                     src="{{asset('assets/images/products/medium')}}/{{$product -> images[0] -> photo ?? ''}}"
                                     alt=""
                                     title="" style="width:100%;"
                                     itemprop="image">
                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                    <i class="fa fa-expand"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <h1 class="product-name">{{$product ->  name}}</h1>
                        <div class="product-prices">
                            <div class="product-price " itemprop="offers" itemscope=""
                                 itemtype="https://schema.org/Offer">
                                <link itemprop="availability" href="https://schema.org/InStock">
                                <meta itemprop="priceCurrency" content="EGP">
                                <div class="current-price">
                                   <span itemprop="price" class="price">
                                         @if($product->special_price_end >= $today)
                                           {{$product -> special_price ?? $product -> price }}
                                       @else
                                           {{$product -> price}}
                                       @endif
                                     </span>
                                    @if($product -> special_price && $product->special_price_end >= $today)
                                        <span class="regular-price">{{$product -> price}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="product-description-short" itemprop="description"><p><span
                                    style="font-size:10pt;font-weight:normal;font-style:normal;">{!!  $product -> description !!}</span>
                            </p></div>
                        <div class="product-actions">
                            <form action="" method="post" id="add-to-cart-or-refresh">
                                @csrf
                                <input type="hidden" name="id_product" value="{{$product -> id }}" id="product_page_product_id">
                                <div class="product-variants in_border" >
                                    <div class="product-variants-item">
                                        <span class="control-label">{{__('Color')}} : </span>
                                        <select name="option_id"
                                                class="select2 p-0 form-control ml-2">
                                            <optgroup
                                                label="{{__('admin/setting.please select color')}}">
                                                @foreach($options as $option)
                                                    @if($option->product_id === $product->id && $option->in_stock==1)
                                                        <option value="{{$option->id}}">{{$option -> name}}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-add-to-cart in_border">
                                    <div class="add">
                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart"
                                                type="submit">
                                            <div class="icon-cart">
                                                <i class="shopping-cart"></i>
                                            </div>
                                            <span wfd-id="1511">Add to cart</span>
                                        </button>
                                    </div>
                                    <a class="addToWishlist wishlistProd_6" href="#" data-rel="6">
                                        <i class="fa fa-heart"></i>
                                        <span>Add to Wishlist</span>
                                    </a>
                                    <div class="clearfix"></div>
                                    <div id="product-availability" class="info-stock mt-20">
                                        {{$product -> in_stock ? 'in stock' : 'out of stock'}}
                                    </div>
                                    <p class="product-minimal-quantity mt-20">
                                    </p>
                                </div>
                                <input class="product-refresh" data-url-update="false" name="refresh" type="submit"
                                       value="Refresh" hidden="">
                            </form>
                        </div>
                        <div class="tabs">
                            <div class="seller_info">
                                <div class="average_rating">
                                    <a href="" title="View comments about Taylor Jonson">
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                        (0)
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="dropdown social-sharing">
                            <button class="btn btn-link" type="button" id="social-sharingButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share With :</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                                <a class="dropdown-item"
                                   href=""
                                   title="Share" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                <a class="dropdown-item"
                                   href=""
                                   title="Tweet" target="_blank"><i class="fa fa-twitter"></i>Tweet</a>
                                <a class="dropdown-item"
                                   href=""
                                   title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i>Pinterest</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="categories-product">
    <div id="js-product-list">
        <div class="products  product_list grid row" data-default-view="grid">
            @isset($products)
                @foreach($products as $product)
                    <div class="item  col-lg-4 col-md-6 col-xs-12 text-center no-padding">
                        <div class="product-miniature js-product-miniature item-one"
                             data-id-product="22" data-id-product-attribute="408" itemscope=""
                             itemtype="http://schema.org/Product">
                            <div class="thumbnail-container">
                                <a href="{{route('product.details',$product -> slug)}}"
                                   class="thumbnail product-thumbnail two-image">
                                    <img class="img-fluid image-cover"
                                         src="{{asset('assets/images/products/medium')}}/{{$product -> images[0] -> photo ?? ''}}"
                                         alt=""
                                         data-full-size-image-url="{{$product -> images[0] -> photo ?? ''}}"
                                         width="600" height="600">
                                    <img class="img-fluid image-secondary"
                                         src="{{asset('assets/images/products/medium')}}/{{$product -> images[1] -> photo ?? ''}}"
                                         alt=""
                                         data-full-size-image-url="{{$product -> images[0] -> photo ?? ''}}"
                                         width="600" height="600">
                                </a>
                                <div class="product-flags new">New</div>
                            </div>
                            <div class="product-description">
                                <div class="product-groups">
                                    <div class="category-title"><a
                                            href="">Audio</a>
                                    </div>
                                    <div class="group-reviews">
                                        <div class="product-comments">
                                            <div class="star_content">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <span>0 review</span>
                                        </div>
                                        <div class="info-stock ml-auto">
                                            <label class="control-label">Availability:</label>
                                            <i class="fa fa-check-square-o"
                                               aria-hidden="true"></i>
                                            {{$product -> in_stock ? 'in stock' : 'out of stock'}}
                                        </div>
                                    </div>
                                    <div class="product-title" itemprop="name"><a
                                            href="{{route('product.details',$product -> slug)}}">{{$product -> name}}</a>
                                    </div>
                                    <div class="product-group-price">
                                        <div class="product-price-and-shipping">
                                                                    <span itemprop="price" class="price">
                                                                        @if($product->special_price_end >= $today)
                                                                            {{$product -> special_price ?? $product -> price }}
                                                                        @else
                                                                            {{$product -> price}}
                                                                        @endif
                                                                    </span>
                                            @if($product -> special_price && $product->special_price_end >= $today)
                                                <span
                                                    class="regular-price">{{$product -> price}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6 p-0">
                                        <select name="option_id"
                                                class="select2 p-0 form-control ml-2">
                                            <optgroup
                                                label="{{__('admin/setting.please select color')}}" >
                                                @foreach($options as $option)
                                                    @if($option->product_id === $product->id && $option->in_stock==1)
                                                        <option value="{{$option->id}}">{{$option -> name}}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="product-desc" itemprop="description">
                                        {!! $product -> description !!}
                                    </div>
                                </div>
                                <div class="product-buttons d-flex justify-content-center"
                                     itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    <form
                                        action=""
                                        method="post" class="formAddToCart">
                                        @csrf
                                        <input type="hidden" name="id_product"
                                               value="{{$product -> id}}">
                                        <a class="add-to-cart cart-addition"
                                           data-product-id="{{$product -> id}}"
                                           data-product-slug="{{$product -> slug}}" href="#"
                                           data-button-action="add-to-cart"><i
                                                class="novicon-cart"></i><span>Add to cart</span></a>
                                    </form>
                                    <a class="addToWishlist  wishlistProd_22" href="#"
                                       data-product-id="{{$product -> id}}">
                                        <i class="fa fa-heart"></i>
                                        <span>Add to Wishlist</span>
                                    </a>
                                    <a href="#" class="quick-view hidden-sm-down"
                                       data-product-id="{{$product -> id}}">
                                        <i class="fa fa-search"></i><span> Quick view</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('front.includes.product-details',$product)
                @endforeach
            @endisset
        </div>
    </div>
</div>
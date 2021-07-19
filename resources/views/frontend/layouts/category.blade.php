@extends('frontend.layouts.master')
@section('content')

 <main id="homepage-1" class="main_content">

 <div class="ps-page--shop" id="shop-sidebar">
    <div class="ml-60 mr-100">
        <div class="ps-layout--shop">
            <div class="ps-layout__left">
                <aside class="widget widget_shop">
                    <h4 class="widget-title">Sub Category</h4>
                    <figure>
                        <div class="ant-checkbox-group">
                            {{-- @foreach ($categories as $categor)
                            {{-- @dd($categories)
                                
                            @endforeach --}}
                            {{-- @if (optional($categories)->subCategories) --}}
                                @foreach ($subcategories as $subcategory)

                                <label class="ant-checkbox-group-item ant-checkbox-wrapper">
                                    <span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value="15" /><span class="ant-checkbox-inner"></span></span><span> {{ $subcategory->subCat_name}}</span>
                                </label>
                                    
                                @endforeach
                           {{-- @endif  --}}
                            

                        </div>
                    </figure>
                </aside>

                <aside class="widget widget_shop">
                    <h4 class="widget-title">Brands</h4>
                    <figure>
                        <div class="ant-checkbox-group">
                          
                            @foreach ($allbrand as $brand)
                            <label class="ant-checkbox-group-item ant-checkbox-wrapper">
                                <span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value="331" /><span class="ant-checkbox-inner"></span></span><span>{{$brand->name}}</span>
                            </label>
                            @endforeach
                            

                        </div>
                    </figure>
                </aside>

            </div>


            <div class="ps-layout__right">
                <div class="ps-shopping">
                    <div class="ps-shopping__header">
                        <p><strong></strong><span class="ml-1">Department wise product</span></p>
                        <div class="css-2b097c-container">
                            <div class="css-rtx4fn-control">
                                <div class="css-1hwfws3">
                                    <div class="css-1wa3eu0-placeholder">Filter Item Head</div>
                                    <div class="css-1g6gooi">
                                        <div class="" style="display: inline-block;">
                                            <input
                                                autocapitalize="none"
                                                autocomplete="off"
                                                autocorrect="off"
                                                id="react-select-2-input"
                                                spellcheck="false"
                                                tabindex="0"
                                                type="text"
                                                aria-autocomplete="list"
                                                value=""
                                                style="box-sizing: content-box; width: 2px; background: 0px center; border: 0px; font-size: inherit; opacity: 1; outline: 0px; padding: 0px; color: inherit;"
                                            />
                                            <div
                                                style="
                                                    position: absolute;
                                                    top: 0px;
                                                    left: 0px;
                                                    visibility: hidden;
                                                    height: 0px;
                                                    overflow: scroll;
                                                    white-space: pre;
                                                    font-size: 14px;
                                                    font-family: Roboto, sans-serif;
                                                    font-weight: 300;
                                                    font-style: normal;
                                                    letter-spacing: normal;
                                                    text-transform: none;
                                                "
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-1wy0on6">
                                    <span class="css-1okebmr-indicatorSeparator"></span>
                                    <div aria-hidden="true" class="css-tlfecz-indicatorContainer">
                                        <svg height="20" width="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false" class="css-19bqh2r">
                                            <path
                                                d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z"
                                            ></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-shopping__actions"></div>
                    </div>

                    <div class="ps-shopping__content">
                        <div></div>
                        <div class="infinite-scroll-component__outerdiv">
                            <div class="infinite-scroll-component" style="height: auto; overflow: auto hidden;">
                                <div class="ps-shopping-product">
                                    <div style="display: flex; flex-flow: row wrap;">
                                        <div class="mb-3" style="width: 324px; margin: auto;">
                                            <div class="ps-product ps-product--inner pre-order">
                                                <div class="ps-porduct__card_header">
                                                    <div class="left-side"></div>
                                                    <div class="right-side"></div>
                                                </div>

                                                <div class="ps-product__thumbnail">
                                                    <div class="ps-product__actions_vertically" style="display: flex; flex-direction: column;">
                                                        <div class="ml-auto mr-auto rs-content-fav" style="padding-top: 10px; flex: 1 1 0%;">
                                                            <button
                                                                style="
                                                                    background-image: url('/static/img/wish-list.png');
                                                                    background-repeat: no-repeat;
                                                                    border: none;
                                                                    align-content: center;
                                                                    height: 20px;
                                                                    width: 20px;
                                                                    background-position: center center;
                                                                    background-color: transparent;
                                                                "
                                                            ></button>
                                                        </div>
                                                        <div class="ml-auto mr-auto rs-content-view" style="flex: 1 1 0%;">
                                                            <button
                                                                style="
                                                                    background-image: url('/static/img/view.png');
                                                                    background-repeat: no-repeat;
                                                                    border: none;
                                                                    align-content: center;
                                                                    height: 20px;
                                                                    width: 20px;
                                                                    background-position: center center;
                                                                    background-color: transparent;
                                                                "
                                                            ></button>
                                                        </div>
                                                    </div>
                                                    <a>
                                                        <div class="img_opacity">
                                                            <picture>
                                                                <source
                                                                    media="(min-width: 650px)"
                                                                    srcset="
                                                                        https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/566_%5BMug%20Dal%5D%5Cdisplay_image%5C11375_%5BMasco%20Bazar%20Mug%20Dal%20%28Standard%29%20%28%201%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Mug-Dal-%28standard%29-%28500gm%29.webp
                                                                    "
                                                                />
                                                                <source
                                                                    media="(min-width: 465px)"
                                                                    srcset="
                                                                        https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/566_%5BMug%20Dal%5D%5Cdisplay_image%5C11375_%5BMasco%20Bazar%20Mug%20Dal%20%28Standard%29%20%28%201%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Mug-Dal-%28standard%29-%28500gm%29.webp
                                                                    "
                                                                />
                                                                <img
                                                                    src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/566_%5BMug%20Dal%5D%5Cdisplay_image%5C11375_%5BMasco%20Bazar%20Mug%20Dal%20%28Standard%29%20%28%201%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Mug-Dal-%28standard%29-%28500gm%29.webp"
                                                                    alt="Masco Bazar Mug Dal (standard) "
                                                                    style="display: block; margin: auto;"
                                                                />
                                                            </picture>
                                                            <div class="opacity"><p>Request Stock</p></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content">
                                                        <div class="ps-product__title">Masco Bazar Mug Dal (standard)</div>
                                                        <div class="ps-product__quantity"><p class="quantity_text">( 1 kg )</p></div>
                                                        <div class="ps-product__price"><strong class="pre">Pre Order</strong></div>
                                                    </div>
                                                    <div>
                                                        <div class="ps-porduct__add-cart"><p class="add-cart-text">ADD TO BAG</p></div>
                                                        <div class="ps-porduct__add-cart__Hover">
                                                            <figure>
                                                                <div class="add-cart-inc-dec">
                                                                    <button class="up"><i class="fa fa-plus btn-clr"></i></button><button class="down"><i class="fa fa-minus btn-clr"></i></button>
                                                                    <input class="display_quantity" type="text" placeholder="0 ITEM COUNT" disabled="" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="ps-product-card ps-product--inner--mobile pre-order">

                                             @foreach ($collection as $item)
                                                 
                                              
                                                <div class="ps-product-header" style="display: flex;">
                                                    <a>
                                                        <div class="img_opacity">
                                                            <picture>
                                                                <source
                                                                    media="(min-width: 650px)"
                                                                    srcset="
                                                                        https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/566_%5BMug%20Dal%5D%5Cdisplay_image%5C11375_%5BMasco%20Bazar%20Mug%20Dal%20%28Standard%29%20%28%201%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Mug-Dal-%28standard%29-%28500gm%29.webp
                                                                    "
                                                                />
                                                                <source
                                                                    media="(min-width: 465px)"
                                                                    srcset="
                                                                        https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/566_%5BMug%20Dal%5D%5Cdisplay_image%5C11375_%5BMasco%20Bazar%20Mug%20Dal%20%28Standard%29%20%28%201%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Mug-Dal-%28standard%29-%28500gm%29.webp
                                                                    "
                                                                />
                                                                <img
                                                                    src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/566_%5BMug%20Dal%5D%5Cdisplay_image%5C11375_%5BMasco%20Bazar%20Mug%20Dal%20%28Standard%29%20%28%201%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Mug-Dal-%28standard%29-%28500gm%29.webp"
                                                                    style="display: block; margin: auto;"
                                                                />
                                                            </picture>
                                                            <div class="opacity"><p>Request Stock</p></div>
                                                        </div>
                                                    </a>
                                                    <div class="ps-header-right">
                                                        <a class="ps-product-title" href="/product/11375">Masco Bazar Mug Dal (standard) </a>
                                                        <div class="ps-brand-gift">
                                                            <small>
                                                                SKU: <span class="text-success"><strong>( 1 kg )</strong></span>
                                                            </small>
                                                            <button
                                                                style="
                                                                    background-image: url('/static/img/wish-list.png');
                                                                    background-repeat: no-repeat;
                                                                    border: none;
                                                                    align-content: center;
                                                                    height: 20px;
                                                                    width: 20px;
                                                                    background-position: center center;
                                                                    background-color: transparent;
                                                                "
                                                            ></button>
                                                        </div>
                                                    </div>
                                                
                                                
                                                </div>
                                             
                                               
                                               
                                             @endforeach    

                                                <div class="ps-product-footer">
                                                    <div class="ps-price">
                                                        <div class="ps-product__price"><strong class="pre">Pre Order</strong></div>
                                                    </div>
                                                    <div class="ps-product-qty">
                                                        <div class="ps-porduct__add-cart__Hover">
                                                            <figure>
                                                                <div class="add-cart-inc-dec">
                                                                    <button class="up"><i class="icon-plus"></i></button><button class="down"><i class="icon-minus"></i></button>
                                                                    <input class="display_quantity" type="text" placeholder="0 ITEM COUNT" disabled="" />
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       


                                    </div>
                                </div>
                                <div
                                    style="
                                        background-image: url('/static/img/loading_infinite_scroll.gif');
                                        background-repeat: no-repeat;
                                        border: none;
                                        align-content: center;
                                        height: 200px;
                                        background-position: center center;
                                        border-radius: 0px;
                                        background-size: contain;
                                    "
                                ></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
     

  </main>

@endsection
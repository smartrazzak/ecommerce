@extends('frontend.layouts.master')
@section('content')

<div class="ps-home-banner ps-home-banner--1">
                        <div class="ps-container">
                            <div class="ps-section__left col-md-3">
                                <span>
                                    <ul class="offer_menu">
                                        <li>
                                            <a href="/special-campaign/Half-Price-Offer"><img src="static/img/favi.png" />Half price offer</a><span class="badge badge-danger ml-2">2035</span>
                                        </li>
                                        <li>
                                            <a href="/special-campaign/surprise-Offer"><img src="static/img/favi.png" />Surprise Offer</a><span class="badge badge-danger ml-2">116</span>
                                            <span class="cls-haatbar firework">
                                                <div class="before"></div>
                                                <div class="after"></div>
                                            </span>
                                        </li>
                                        <li>
                                            <a href="/special-campaign/Hot-Deal"><img src="static/img/favi.png" />Hot Deal</a>
                                        </li>
                                        <li>
                                            <a href="/special-campaign/Fresh-Fruits"><img src="static/img/favi.png" />Fresh Fruits</a>
                                        </li>
                                        <li>
                                            <a href="/special-campaign/fresh-vegetables"><img src="static/img/favi.png" />Fresh Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="/special-campaign/baby-care"><img src="static/img/favi.png" />Baby Care</a><span class="badge badge-danger badge-crash ml-2">509</span>
                                        </li>
                                        <li>
                                            <a href="/special-campaign/Qurbani-Cleaning-Essentials"><img src="static/img/favi.png" />Qurbani Cleaning Essentials</a>
                                        </li>
                                    </ul>
                                </span>
                            </div>

                            <div class="ps-section__left col-md-3">
                                <ul id="home-banner-dept" class="home-banner-dept">
                            @foreach( $categories as $category)
                                    <li>
                                        <a href="{{url('/category/'.$category->id) }}"> 
                                            <img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=dept_icon/food-groceries.png" alt="Food &amp; Groceries" /> {{ $category->category_name}} <i class="fa fa-angle-right"></i>
                                        </a>
                                      
                                        <div class="megadrop">
                                       
                                            <ul>
                                                @if ($category->subCategories)
                                                    @foreach( $category->subCategories as $subcategory)
                                                        <li>
                                                            <a href="/shop-by-section/7">{{ $subcategory->subCat_name }} <i class="fa fa-angle-right"></i></a>
                                                            
                                                            <div class="megadrop">
                                                                <ul>
                                                                   
                                                                        @foreach( $subcategory->child_categories as $childSubCategory)

                                                                        <li><a href="/shop-by-item-head/486">{{ $childSubCategory->name }}</a></li>
                                                                        
                                                                        @endforeach  
                                                                   
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        @endforeach  
                                                @endif
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach  


                                </ul>
                            </div>
                            <div class="ml-3 ps-section__middle col-md-6">
                                <div class="slick-slider ps-carousel slick-initialized" dir="ltr">
                                    <button class="slick-arrow slick-prev slick-arrow slick-prev"><i class="icon-chevron-left"></i></button>
                                    <div class="slick-list">
                                        <div class="slick-track" style="opacity: 1; transform: translate3d(-762px, 0px, 0px); width: 8382px;">
                                            <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap"><img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\mango-chemical.jpg" alt="mango_chemical_free" /></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap"><img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\Website Banner 810X370.png" alt="App" /></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap">
                                                                <img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\Web Banner 31 January 2021_Recycle.jpg" alt="Recycle" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap"><img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\veg1.jpg" alt="veg1" /></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap">
                                                                <img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\Web Banner 31 January 2021_SafePayment.jpg" alt="Payment" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap"><img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\mango-chemical.jpg" alt="mango_chemical_free" /></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap"><img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\Website Banner 810X370.png" alt="App" /></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap">
                                                                <img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\Web Banner 31 January 2021_Recycle.jpg" alt="Recycle" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap"><img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\veg1.jpg" alt="veg1" /></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="8" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap">
                                                                <img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\Web Banner 31 January 2021_SafePayment.jpg" alt="Payment" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="9" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 762px;">
                                                <div>
                                                    <div class="ps-banner">
                                                        <a href="/#">
                                                            <div class="imagewrap"><img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=slider_image/slider_image\mango-chemical.jpg" alt="mango_chemical_free" /></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="slick-arrow slick-next slick-arrow slick-next"><i class="icon-chevron-right"></i></button>
                                    <ul class="slick-dots" style="display: block;">
                                        <li class="slick-active"><button>1</button></li>
                                        <li class=""><button>2</button></li>
                                        <li class=""><button>3</button></li>
                                        <li class=""><button>4</button></li>
                                        <li class=""><button>5</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ps-container home_btn_container">
                            <div class="home_btn_list">
                                <div class="ps-block__item neon-bumper-text-off">
                                    <a><div class="ps-block__left">Bumper Deal</div></a>
                                </div>
                                <div class="ps-block__item neon-black-text-off">
                                    <a><div class="ps-block__left">Black Deal</div></a>
                                </div>
                                <div class="ps-block__item">
                                    <a><div class="ps-block__left">Most Popular Items</div></a>
                                </div>
                                <div class="ps-block__item">
                                    <a><div class="ps-block__left">Deals of the Day</div></a>
                                </div>
                                <div class="ps-block__item">
                                    <a><div class="ps-block__left">Most Discounted Products</div></a>
                                </div>
                                <div class="ps-block__item">
                                    <a><div class="ps-block__left">New Arrivals</div></a>
                                </div>
                                <div class="ps-block__item">
                                    <a><div class="ps-block__left">Our Own Products</div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_section_wrapper">
                        <div class="offer_menu">
                            <div class="bumper_deal">
                                <ul style="list-style-type: none;">
                                    <li>
                                        <div><a>Half price offer</a><span class="badge badge-danger ml-2">2035</span></div>
                                    </li>
                                    <li>
                                        <div>
                                            <a>Surprise Offer</a><span class="badge badge-danger ml-2">116</span>
                                            <span class="cls-haatbar firework">
                                                <div class="before"></div>
                                                <div class="after"></div>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div><a>Hot Deal</a></div>
                                    </li>
                                    <li>
                                        <div><a>Fresh Fruits</a></div>
                                    </li>
                                    <li>
                                        <div><a>Fresh Vegetables</a></div>
                                    </li>
                                    <li>
                                        <div><a>Baby Care</a><span class="badge badge-danger badge-crash ml-2">509</span></div>
                                    </li>
                                    <li>
                                        <div><a>Qurbani Cleaning Essentials</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="deal_wrapper">
                                <div class="wr-neon-black"><h1 class="neon-black-text-off">Black deal</h1></div>
                                <div class="wr-neon-bumper"><h1 class="neon-bumper-text-off">Bumper deal</h1></div>
                            </div>
                        </div>
                        <div class="thumb_menu">
                            <div class="ps-deal-of-day">
                                <div class="ps-container">
                                    <div class="ps-block__left small"><p>Most Popular Items</p></div>
                                    <div class="ps-section__header">
                                        <div class="ps-block--countdown-deal">
                                            <div class="ps-block__left large"><p style="margin-bottom: 0px; color: rgb(53, 53, 53); font-weight: bold; font-size: 1.6em; font-family: Roboto, Arial, sans-serif;">Most Popular Items</p></div>
                                        </div>
                                        <div class="view_btn">
                                            <span style="width: 100px; background-color: rgb(228, 228, 228); margin-right: 15px;"></span>
                                            <a href="/most-popular-products" style="color: rgb(35, 170, 74); margin-right: 10px; font-weight: bold; font-size: 1.4em; font-family: Roboto, Arial, sans-serif;">View All</a>
                                            <img height="20px" src="{{asset('frontend/static/img/category-right-arrow.png')}}" />
                                        </div>
                                    </div>
                                    <div class="ps-section__content">
                                        <div class="slick-slider ps-carousel outside slick-initialized">
                                            <div class="slick-list">
                                                <div class="slick-track" style="width: 1530px; opacity: 1; transform: translate3d(0px, 0px, 0px);">

@foreach($products as $product) 
                                                    <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        
                                                        <div>

                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div class="new">new arrival</div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">6.6667% Discount</div>
                                                                        <div class="discount_amount">- ৳7</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                

                                                                <div class="ps-product__thumbnail">
                                                                    <div class="ps-product__actions_vertically" style="display: flex; flex-direction: column;">
                                                                        <div class="ml-auto mr-auto rs-content-fav" style="padding-top: 10px; flex: 1 1 0%;">
                                                                            <button
                                                                                style="
                                                                                    background-image: url('/frontend/static/img/wish-list.png');
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
                                                                            <a href=" {{url('/single-product/'. $product->id)}}"> <button 
                                                                                style="
                                                                                    background-image: url('/frontend/static/img/view.png');
                                                                                    background-repeat: no-repeat;
                                                                                    border: none;
                                                                                    align-content: center;
                                                                                    height: 20px;
                                                                                    width: 20px;
                                                                                    background-position: center center;
                                                                                    background-color: transparent;
                                                                                "
                                                                            ></button></a>
                                                                        </div>
                                                                    </div>
                                                                    <a>
                                                                        <picture>
                                                                            <source media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2239_%5BChicken%20Egg%5D%5Cdisplay_image%5C12056%5C3%5Ccover_image%5C1_Mascobazar-egg.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2239_%5BChicken%20Egg%5D%5Cdisplay_image%5C12056%5C3%5Ccover_image%5C1_Mascobazar-egg.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2239_%5BChicken%20Egg%5D%5Cdisplay_image%5C12056%5C3%5Ccover_image%5C1_Mascobazar-egg.webp"
                                                                                alt="Masco Bazar Chicken Egg (own Farm) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>



                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="{{url('/single-product/'. $product->id)}}"> {{ $product->eng_name}}</a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">( 12 pcs )</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 98<del class="ml-2"><strong>৳</strong> 105</del>
                                                                        </div>
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
                                                      



                                                        </div>
                                                    </div>
                                                    @endforeach 
                                                    


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           
                            
                            
                        </div>
                        <div></div>
                    </div>
                    <div class="d-block d-sm-none py-5 py-sm-0"></div>

@endsection
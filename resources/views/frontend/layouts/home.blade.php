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
                                        <a href="/shop-by-department/Food-Groceries/4">
                                            <img src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=dept_icon/food-groceries.png" alt="Food &amp; Groceries" /> {{ $category->category_name}} <i class="fa fa-angle-right"></i>
                                        </a>
                                      
                                        <div class="megadrop">
                                       
                                            <ul>
                                                @if ($category->subCategories)
                                                    @foreach( $category->subCategories as $subcategory)
                                                        <li>
                                                            <a href="/shop-by-section/7">{{ $subcategory->subCat_name }} <i class="fa fa-angle-right"></i></a>
                                                            {{-- @dd() --}}
                                                            <div class="megadrop">
                                                                <ul>

                                                                    <li><a href="/shop-by-item-head/486">Sugarcandy (Tal Misri)</a></li>
                                                                    
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
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
                                                                        <a class="ps-product__title" href="/product/12056">Masco Bazar Chicken Egg (own Farm) </a>
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
                                                    <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/433_%5BPotato%20%28Alu%29%5D%5Cdisplay_image%5C205_%5BMasco%20Bazar%20Potato%20Regular%20%281%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Potato-Regular-%281-kg-%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/433_%5BPotato%20%28Alu%29%5D%5Cdisplay_image%5C205_%5BMasco%20Bazar%20Potato%20Regular%20%281%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Potato-Regular-%281-kg-%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/433_%5BPotato%20%28Alu%29%5D%5Cdisplay_image%5C205_%5BMasco%20Bazar%20Potato%20Regular%20%281%20kg%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Potato-Regular-%281-kg-%29.webp"
                                                                                alt="Masco Bazar Potato (regular) (alu) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/205">Masco Bazar Potato (regular) (alu) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">1 kg</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 20</div>
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
                                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/432_%5BOnion%20%28Peyaj%29%5D%5Cdisplay_image%5C12063%5C1%5Ccover_image%5C1_10.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/432_%5BOnion%20%28Peyaj%29%5D%5Cdisplay_image%5C12063%5C1%5Ccover_image%5C1_10.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/432_%5BOnion%20%28Peyaj%29%5D%5Cdisplay_image%5C12063%5C1%5Ccover_image%5C1_10.webp"
                                                                                alt="Masco Bazar Onion (local) (deshi Peyaj) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/12063">Masco Bazar Onion (local) (deshi Peyaj) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">( 1 kg )</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 46</div>
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
                                                    <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div class="discount">11.1111% Discount</div>
                                                                        <div class="discount_amount">- ৳10</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2283_%5BLiquid%20Milk%5D%5Cdisplay_image%5C12522%5C1%5Ccover_image%5C1_1-litre_website-product-12-27-2020.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2283_%5BLiquid%20Milk%5D%5Cdisplay_image%5C12522%5C1%5Ccover_image%5C1_1-litre_website-product-12-27-2020.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2283_%5BLiquid%20Milk%5D%5Cdisplay_image%5C12522%5C1%5Ccover_image%5C1_1-litre_website-product-12-27-2020.webp"
                                                                                alt="Masco Bazar Cow Milk ( Own Farm) (raw With Full Cream) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/12522">Masco Bazar Cow Milk ( Own Farm) (raw With Full Cream) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">1 ltr.</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 80<del class="ml-2"><strong>৳</strong> 90</del>
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
                                                    <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div class="discount">25% Discount</div>
                                                                        <div class="discount_amount">- ৳25</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/491_%5BChinigura%5D%5Cdisplay_image%5C85_%5BMasco%20Bazar%20Chinigura%20Rice%20%28Standard%29%20%281%20kg%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Chinigura-Rice-%281-kg%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/491_%5BChinigura%5D%5Cdisplay_image%5C85_%5BMasco%20Bazar%20Chinigura%20Rice%20%28Standard%29%20%281%20kg%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Chinigura-Rice-%281-kg%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/491_%5BChinigura%5D%5Cdisplay_image%5C85_%5BMasco%20Bazar%20Chinigura%20Rice%20%28Standard%29%20%281%20kg%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Chinigura-Rice-%281-kg%29.webp"
                                                                                alt="Masco Bazar Chinigura Rice (standard) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/85">Masco Bazar Chinigura Rice (standard) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">1 kg</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 75<del class="ml-2"><strong>৳</strong> 100</del>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-deal-of-day">
                                <div class="ps-container">
                                    <div class="ps-section__header">
                                        <div class="ps-block--countdown-deal">
                                            <div class="ps-block__left large"><p style="margin-bottom: 0px; color: rgb(53, 53, 53); font-weight: bold; font-size: 1.6em; font-family: Roboto, Arial, sans-serif;">Deals of the Day</p></div>
                                            <div class="ps-block__left small"><p>Deals of the Day</p></div>
                                        </div>
                                        <div class="view_btn">
                                            <span style="width: 100px; background-color: rgb(228, 228, 228); margin-right: 15px;"></span>
                                            <a href="/deal-of-the-day" style="color: rgb(35, 170, 74); margin-right: 10px; font-weight: bold; font-size: 1.4em; font-family: Roboto, Arial, sans-serif;">View All</a>
                                            <img height="20px" src="{{asset('frontend/static/img/category-right-arrow.png')}}" />
                                        </div>
                                    </div>
                                    <div class="ps-section__content">
                                        <div class="slick-slider ps-carousel outside slick-initialized">
                                            <div class="slick-list">
                                                <div class="slick-track" style="width: 1530px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                    <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">30.43% Discount</div>
                                                                        <div class="discount_amount">- ৳70</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2071_%5BFeeder%20Straw%20Cup%5D%5Cdisplay_image%5C4278%5C1%5Ccover_image%5C1_Lion-Soft-Spout-Drinking-Cup-%28Dripless%29-%281-Pc-Header-Card%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2071_%5BFeeder%20Straw%20Cup%5D%5Cdisplay_image%5C4278%5C1%5Ccover_image%5C1_Lion-Soft-Spout-Drinking-Cup-%28Dripless%29-%281-Pc-Header-Card%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2071_%5BFeeder%20Straw%20Cup%5D%5Cdisplay_image%5C4278%5C1%5Ccover_image%5C1_Lion-Soft-Spout-Drinking-Cup-%28Dripless%29-%281-Pc-Header-Card%29.webp"
                                                                                alt="Lion Soft Spout Drinking Cup (dripless) (1 Pc Header Card) (5279-50) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/4278">Lion Soft Spout Drinking Cup (dripless) (1 Pc Header Card) (5279-50) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">n/a</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 160<del class="ml-2"><strong>৳</strong> 230</del>
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
                                                    <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">22.46% Discount</div>
                                                                        <div class="discount_amount">- ৳438</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C11582%5C2%5Ccover_image%5C1_Huggies%20Diaper%20Ultra%20Belt%28xl%29%20%2811-16%20kg%29%20%28Malaysian%29%2044%20pcs.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C11582%5C2%5Ccover_image%5C1_Huggies%20Diaper%20Ultra%20Belt%28xl%29%20%2811-16%20kg%29%20%28Malaysian%29%2044%20pcs.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C11582%5C2%5Ccover_image%5C1_Huggies%20Diaper%20Ultra%20Belt%28xl%29%20%2811-16%20kg%29%20%28Malaysian%29%2044%20pcs.webp"
                                                                                alt="Huggies Diaper Ultra Belt(xl) (11-16 Kg) (malaysian) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/11582">Huggies Diaper Ultra Belt(xl) (11-16 Kg) (malaysian) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">44 pcs</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 1512<del class="ml-2"><strong>৳</strong> 1950</del>
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
                                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">40% Discount</div>
                                                                        <div class="discount_amount">- ৳46</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2652_%5BBaby%20Soap%5D%5Cdisplay_image%5C2880%5C2%5Ccover_image%5C1_Parachute%20Just%20for%20Baby%20Baby%20Soap%20125g.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2652_%5BBaby%20Soap%5D%5Cdisplay_image%5C2880%5C2%5Ccover_image%5C1_Parachute%20Just%20for%20Baby%20Baby%20Soap%20125g.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2652_%5BBaby%20Soap%5D%5Cdisplay_image%5C2880%5C2%5Ccover_image%5C1_Parachute%20Just%20for%20Baby%20Baby%20Soap%20125g.webp"
                                                                                alt="Parachute Just For Baby (baby Soap) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/2880">Parachute Just For Baby (baby Soap) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">125 gm</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 69<del class="ml-2"><strong>৳</strong> 115</del>
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
                                                    <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">25% Discount</div>
                                                                        <div class="discount_amount">- ৳190</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2094_%5BBaby%20Daily%20Care%20Set%5D%5Cdisplay_image%5C4224%5C1%5Ccover_image%5C1_29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2094_%5BBaby%20Daily%20Care%20Set%5D%5Cdisplay_image%5C4224%5C1%5Ccover_image%5C1_29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2094_%5BBaby%20Daily%20Care%20Set%5D%5Cdisplay_image%5C4224%5C1%5Ccover_image%5C1_29.webp"
                                                                                alt="Lion Feeding Set Large (Fork, Spoon, Cup &amp; Bowl Set) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/4224">Lion Feeding Set Large (Fork, Spoon, Cup &amp; Bowl Set) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">n/a</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 570<del class="ml-2"><strong>৳</strong> 760</del>
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
                                                    <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">27% Discount</div>
                                                                        <div class="discount_amount">- ৳135</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2068_%5BFeeder%5D%5Cdisplay_image%5C2664%5C1%5Ccover_image%5C1_Smart-Care-Spoon-Feeding-Bottle-Pp-%286-Oz%29-%281-pcs%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2068_%5BFeeder%5D%5Cdisplay_image%5C2664%5C1%5Ccover_image%5C1_Smart-Care-Spoon-Feeding-Bottle-Pp-%286-Oz%29-%281-pcs%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2068_%5BFeeder%5D%5Cdisplay_image%5C2664%5C1%5Ccover_image%5C1_Smart-Care-Spoon-Feeding-Bottle-Pp-%286-Oz%29-%281-pcs%29.webp"
                                                                                alt="Smart Care Spoon Feeding Bottle Pp (6 Oz) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/2664">Smart Care Spoon Feeding Bottle Pp (6 Oz) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">1 pcs</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 365<del class="ml-2"><strong>৳</strong> 500</del>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-deal-of-day">
                                <div class="ps-container">
                                    <div class="ps-section__header">
                                        <div class="ps-block--countdown-deal">
                                            <div class="ps-block__left large">
                                                <p style="margin-bottom: 0px; color: rgb(53, 53, 53); font-weight: bold; font-size: 1.6em; font-family: Roboto, Arial, sans-serif;">Most Discounted Products</p>
                                            </div>
                                            <div class="ps-block__left small"><p>Most Discounted Products</p></div>
                                        </div>
                                        <div class="view_btn">
                                            <span style="width: 100px; background-color: rgb(228, 228, 228); margin-right: 15px;"></span>
                                            <a href="/most-discounted" style="color: rgb(35, 170, 74); margin-right: 10px; font-weight: bold; font-size: 1.4em; font-family: Roboto, Arial, sans-serif;">View All</a>
                                            <img height="20px" src="{{asset('frontend/static/img/category-right-arrow.png')}}" />
                                        </div>
                                    </div>
                                    <div class="ps-section__content">
                                        <div class="slick-slider ps-carousel outside slick-initialized">
                                            <div class="slick-list">
                                                <div class="slick-track" style="width: 1530px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                    <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">44.78% Discount</div>
                                                                        <div class="discount_amount">- ৳1500</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12282%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%287%29%20%2817%20Plus%20Kg%29%20%28uk%29%2048%20pcs.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12282%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%287%29%20%2817%20Plus%20Kg%29%20%28uk%29%2048%20pcs.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12282%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%287%29%20%2817%20Plus%20Kg%29%20%28uk%29%2048%20pcs.webp"
                                                                                alt="Pampers Dry Baby Diaper-nappy Pants (7) (17 Plus Kg) (uk) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/12282">Pampers Dry Baby Diaper-nappy Pants (7) (17 Plus Kg) (uk) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">48 pcs</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 1850<del class="ml-2"><strong>৳</strong> 3350</del>
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
                                                    <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">44.78% Discount</div>
                                                                        <div class="discount_amount">- ৳1500</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12281%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%285%29%20%2812-17%20Kg%29%20%28UK%29%2060%20pcs.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12281%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%285%29%20%2812-17%20Kg%29%20%28UK%29%2060%20pcs.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12281%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%285%29%20%2812-17%20Kg%29%20%28UK%29%2060%20pcs.webp"
                                                                                alt="Pampers Dry Baby Diaper-nappy Pants (5) (12-17 Kg) (uk) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/12281">Pampers Dry Baby Diaper-nappy Pants (5) (12-17 Kg) (uk) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">60 pcs</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 1850<del class="ml-2"><strong>৳</strong> 3350</del>
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
                                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">44.78% Discount</div>
                                                                        <div class="discount_amount">- ৳1500</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12288%5C2%5Ccover_image%5C1_Pampers-Dry-Baby-Diaper-nappy-Pants-%286%29-%2815-Plus-Kg%29-%28uk%29%C2%A052-pcs.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12288%5C2%5Ccover_image%5C1_Pampers-Dry-Baby-Diaper-nappy-Pants-%286%29-%2815-Plus-Kg%29-%28uk%29%C2%A052-pcs.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12288%5C2%5Ccover_image%5C1_Pampers-Dry-Baby-Diaper-nappy-Pants-%286%29-%2815-Plus-Kg%29-%28uk%29%C2%A052-pcs.webp"
                                                                                alt="Pampers Dry Baby Diaper-nappy Pants (6) (15 Plus Kg) (uk) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/12288">Pampers Dry Baby Diaper-nappy Pants (6) (15 Plus Kg) (uk) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">52 pcs</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 1850<del class="ml-2"><strong>৳</strong> 3350</del>
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
                                                    <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">44.78% Discount</div>
                                                                        <div class="discount_amount">- ৳1500</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12279%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%284%29%20%289-15%20Kg%29%20%28UK%29%2074%20pcs.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12279%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%284%29%20%289-15%20Kg%29%20%28UK%29%2074%20pcs.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12279%5C3%5Ccover_image%5C1_Pampers%20Dry%20Baby%20Diaper-nappy%20Pants%20%284%29%20%289-15%20Kg%29%20%28UK%29%2074%20pcs.webp"
                                                                                alt="Pampers Dry Baby Diaper-nappy Pants (4) (9-15 Kg) (uk) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/12279">Pampers Dry Baby Diaper-nappy Pants (4) (9-15 Kg) (uk) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">74 pcs</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 1850<del class="ml-2"><strong>৳</strong> 3350</del>
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
                                                    <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">40.32% Discount</div>
                                                                        <div class="discount_amount">- ৳1250</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12284%5C1%5Ccover_image%5C1_Pampers-Dry-Baby-Diaper-belt-%285-Plus%29-%2812-17-Kg%29-%28uk%29-68-pcs.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12284%5C1%5Ccover_image%5C1_Pampers-Dry-Baby-Diaper-belt-%285-Plus%29-%2812-17-Kg%29-%28uk%29-68-pcs.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2615_%5BDiaper%5D%5Cdisplay_image%5C12284%5C1%5Ccover_image%5C1_Pampers-Dry-Baby-Diaper-belt-%285-Plus%29-%2812-17-Kg%29-%28uk%29-68-pcs.webp"
                                                                                alt="Pampers Dry Baby Diaper-belt (5 Plus) (12-17 Kg) (uk) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/12284">Pampers Dry Baby Diaper-belt (5 Plus) (12-17 Kg) (uk) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">68 pcs</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 1850<del class="ml-2"><strong>৳</strong> 3100</del>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-deal-of-day">
                                <div class="ps-container">
                                    <div class="ps-section__header">
                                        <div class="ps-block--countdown-deal">
                                            <div class="ps-block__left large"><p style="margin-bottom: 0px; color: rgb(53, 53, 53); font-weight: bold; font-size: 1.6em; font-family: Roboto, Arial, sans-serif;">New Arrivals</p></div>
                                            <div class="ps-block__left small"><p>New Arrivals</p></div>
                                        </div>
                                        <div class="view_btn">
                                            <span style="width: 100px; background-color: rgb(228, 228, 228); margin-right: 15px;"></span>
                                            <a href="/new-arrival" style="color: rgb(35, 170, 74); margin-right: 10px; font-weight: bold; font-size: 1.4em; font-family: Roboto, Arial, sans-serif;">View All</a>
                                            <img height="20px" src="{{asset('frontend/static/img/category-right-arrow.png')}}" />
                                        </div>
                                    </div>
                                    <div class="ps-section__content">
                                        <div class="slick-slider ps-carousel outside slick-initialized">
                                            <div class="slick-list">
                                                <div class="slick-track" style="width: 1530px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
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
                                                                        <a class="ps-product__title" href="/product/12056">Masco Bazar Chicken Egg (own Farm) </a>
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
                                                    <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15747%5C1%5Ccover_image%5C1_Mula%20%28radish%29%20%28%C2%B1%2050%20Gm%29%20500%20gm.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15747%5C1%5Ccover_image%5C1_Mula%20%28radish%29%20%28%C2%B1%2050%20Gm%29%20500%20gm.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15747%5C1%5Ccover_image%5C1_Mula%20%28radish%29%20%28%C2%B1%2050%20Gm%29%20500%20gm.webp"
                                                                                alt="Mula (radish) (± 50 Gm) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/15747">Mula (radish) (± 50 Gm) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">500 gm</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 20</div>
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
                                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15750%5C2%5Ccover_image%5C1_300.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15750%5C2%5Ccover_image%5C1_300.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15750%5C2%5Ccover_image%5C1_300.webp"
                                                                                alt="Tomato (long) (± 50 Gm) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/15750">Tomato (long) (± 50 Gm) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">500 gm</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 48</div>
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
                                                    <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15733%5C1%5Ccover_image%5C1_Pudinapata%20%28Mint%20Leaf%29%20100%20gm.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15733%5C1%5Ccover_image%5C1_Pudinapata%20%28Mint%20Leaf%29%20100%20gm.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15733%5C1%5Ccover_image%5C1_Pudinapata%20%28Mint%20Leaf%29%20100%20gm.webp"
                                                                                alt="Pudinapata (mint Leaf) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/15733">Pudinapata (mint Leaf) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">100 gm</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 13</div>
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
                                                    <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15814%5C1%5Ccover_image%5C1_Paka%20Mishtikumra%20%28sweet%20Pumpkin%29%20%28%C2%B1%2050%20Gm%29%201%20kg.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15814%5C1%5Ccover_image%5C1_Paka%20Mishtikumra%20%28sweet%20Pumpkin%29%20%28%C2%B1%2050%20Gm%29%201%20kg.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/2984_%5BVegetable%5D%5Cdisplay_image%5C15814%5C1%5Ccover_image%5C1_Paka%20Mishtikumra%20%28sweet%20Pumpkin%29%20%28%C2%B1%2050%20Gm%29%201%20kg.webp"
                                                                                alt="Paka Mishtikumra (sweet Pumpkin) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/15814">Paka Mishtikumra (sweet Pumpkin) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">1 pc</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 50</div>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-deal-of-day">
                                <div class="ps-container">
                                    <div class="ps-section__header">
                                        <div class="ps-block--countdown-deal">
                                            <div class="ps-block__left large"><p style="margin-bottom: 0px; color: rgb(53, 53, 53); font-weight: bold; font-size: 1.6em; font-family: Roboto, Arial, sans-serif;">Our Own Products</p></div>
                                            <div class="ps-block__left small"><p>Our Own Products</p></div>
                                        </div>
                                        <div class="view_btn">
                                            <span style="width: 100px; background-color: rgb(228, 228, 228); margin-right: 15px;"></span>
                                            <a href="/masco-bazar-products" style="color: rgb(35, 170, 74); margin-right: 10px; font-weight: bold; font-size: 1.4em; font-family: Roboto, Arial, sans-serif;">View All</a>
                                            <img height="20px" src="{{asset('frontend/static/img/category-right-arrow.png')}}" />
                                        </div>
                                    </div>
                                    <div class="ps-section__content">
                                        <div class="slick-slider ps-carousel outside slick-initialized">
                                            <div class="slick-list">
                                                <div class="slick-track" style="width: 1530px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                    <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">34.78% Discount</div>
                                                                        <div class="discount_amount">- ৳16</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/476_%5BAlmond%20%28Kath%20Badam%29%5D%5Cdisplay_image%5C10784_%5BMasco%20Bazar%20Almond%20%28Kathbadam%29%20%2850%20gm%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Almond-%28kathbadam%29-%28-50-Gm-%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/476_%5BAlmond%20%28Kath%20Badam%29%5D%5Cdisplay_image%5C10784_%5BMasco%20Bazar%20Almond%20%28Kathbadam%29%20%2850%20gm%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Almond-%28kathbadam%29-%28-50-Gm-%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/476_%5BAlmond%20%28Kath%20Badam%29%5D%5Cdisplay_image%5C10784_%5BMasco%20Bazar%20Almond%20%28Kathbadam%29%20%2850%20gm%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Almond-%28kathbadam%29-%28-50-Gm-%29.webp"
                                                                                alt="Masco Bazar Almond (kathbadam) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/10784">Masco Bazar Almond (kathbadam) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">( 50 gm )</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 30<del class="ml-2"><strong>৳</strong> 46</del>
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
                                                    <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div class="discount">38.46% Discount</div>
                                                                        <div class="discount_amount">- ৳100</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/485_%5BDates%20%28khejur%29%5D%5Cdisplay_image%5C3906_%5BMasco%20Bazar%20Red%20Dates%20%28gold%29%20%28lal%20Khurma%29%20%28%201%20Kg%20%29%5D%5C1%5Ccover_image%5C1_Red-Dates-%28gold%29-%281-kg%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/485_%5BDates%20%28khejur%29%5D%5Cdisplay_image%5C3906_%5BMasco%20Bazar%20Red%20Dates%20%28gold%29%20%28lal%20Khurma%29%20%28%201%20Kg%20%29%5D%5C1%5Ccover_image%5C1_Red-Dates-%28gold%29-%281-kg%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/485_%5BDates%20%28khejur%29%5D%5Cdisplay_image%5C3906_%5BMasco%20Bazar%20Red%20Dates%20%28gold%29%20%28lal%20Khurma%29%20%28%201%20Kg%20%29%5D%5C1%5Ccover_image%5C1_Red-Dates-%28gold%29-%281-kg%29.webp"
                                                                                alt="Masco Bazar Red Dates (Gold) (Lal Khurma) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/3906">Masco Bazar Red Dates (Gold) (Lal Khurma) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">( 1 kg )</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 160<del class="ml-2"><strong>৳</strong> 260</del>
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
                                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
                                                        <div>
                                                            <div class="ps-product ps-product--inner">
                                                                <div class="ps-porduct__card_header">
                                                                    <div class="left-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="right-side">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/533_%5BDried%20Chili%20%28Shukna%20Morich%29%5D%5Cdisplay_image%5C244_%5BMasco%20Bazar%20Dried%20Chilli%20%28shukno%20Morich%29%20%28imported%29%20%28%20100%20Gm%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Dried-Chilli-%28imported%29-%28100-gm%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/533_%5BDried%20Chili%20%28Shukna%20Morich%29%5D%5Cdisplay_image%5C244_%5BMasco%20Bazar%20Dried%20Chilli%20%28shukno%20Morich%29%20%28imported%29%20%28%20100%20Gm%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Dried-Chilli-%28imported%29-%28100-gm%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/533_%5BDried%20Chili%20%28Shukna%20Morich%29%5D%5Cdisplay_image%5C244_%5BMasco%20Bazar%20Dried%20Chilli%20%28shukno%20Morich%29%20%28imported%29%20%28%20100%20Gm%20%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Dried-Chilli-%28imported%29-%28100-gm%29.webp"
                                                                                alt="Masco Bazar Dried Chilli (Shukno Morich) (Imported) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/244">Masco Bazar Dried Chilli (Shukno Morich) (Imported) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">( 100 gm )</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 35</div>
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
                                                    <div data-index="3" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/565_%5BMoshur%20Dal%5D%5Cdisplay_image%5C7414_%5BMasco%20Bazar%20Moshur%20Dal%20%28standard%29%20%28deshi%29%20%28500%20gm%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Moshur-Dal-%28standard%29-%28deshi%29-500-Gm.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/565_%5BMoshur%20Dal%5D%5Cdisplay_image%5C7414_%5BMasco%20Bazar%20Moshur%20Dal%20%28standard%29%20%28deshi%29%20%28500%20gm%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Moshur-Dal-%28standard%29-%28deshi%29-500-Gm.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/565_%5BMoshur%20Dal%5D%5Cdisplay_image%5C7414_%5BMasco%20Bazar%20Moshur%20Dal%20%28standard%29%20%28deshi%29%20%28500%20gm%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Moshur-Dal-%28standard%29-%28deshi%29-500-Gm.webp"
                                                                                alt="Masco Bazar Moshur Dal (Standard) (Deshi) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/7414">Masco Bazar Moshur Dal (Standard) (Deshi) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">500 gm</p></div>
                                                                        <div class="ps-product__price"><strong>৳</strong> 53</div>
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
                                                    <div data-index="4" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 306px;">
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
                                                                        <div class="discount">25% Discount</div>
                                                                        <div class="discount_amount">- ৳25</div>
                                                                    </div>
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
                                                                        <picture>
                                                                            <source
                                                                                media="(min-width: 650px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/491_%5BChinigura%5D%5Cdisplay_image%5C85_%5BMasco%20Bazar%20Chinigura%20Rice%20%28Standard%29%20%281%20kg%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Chinigura-Rice-%281-kg%29.webp
                                                                                "
                                                                            />
                                                                            <source
                                                                                media="(min-width: 465px)"
                                                                                srcset="
                                                                                    https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/491_%5BChinigura%5D%5Cdisplay_image%5C85_%5BMasco%20Bazar%20Chinigura%20Rice%20%28Standard%29%20%281%20kg%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Chinigura-Rice-%281-kg%29.webp
                                                                                "
                                                                            />
                                                                            <img
                                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=1&amp;imgPath=head_display/491_%5BChinigura%5D%5Cdisplay_image%5C85_%5BMasco%20Bazar%20Chinigura%20Rice%20%28Standard%29%20%281%20kg%29%5D%5C1%5Ccover_image%5C1_Masco-Bazar-Chinigura-Rice-%281-kg%29.webp"
                                                                                alt="Masco Bazar Chinigura Rice (standard) "
                                                                                style="display: block; margin: auto;"
                                                                            />
                                                                        </picture>
                                                                    </a>
                                                                    <span class="ps-product__actions"><a data-toggle="tooltip" data-placement="top" title="View Details">View Details</a></span>
                                                                </div>
                                                                <div class="ps-product__container">
                                                                    <div class="ps-product__content">
                                                                        <a class="ps-product__title" href="/product/85">Masco Bazar Chinigura Rice (standard) </a>
                                                                        <div class="ps-product__quantity"><p class="quantity_text">1 kg</p></div>
                                                                        <div class="ps-product__price sale">
                                                                            <strong>৳</strong> 75<del class="ml-2"><strong>৳</strong> 100</del>
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
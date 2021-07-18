@extends('frontend.layouts.master')
@section('content')

 <main id="homepage-1" class="main_content">
 <div class="ps-page--product pt-5">
    <div class="ps-container">
        <div class="ps-page__container">
            <div class="ps-page__left full-details-view">
                <div class="ps-product--detail ps-product--fullwidth">
                    <div class="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ps-product__thumbnail" data-vertical="true">
                                    <figure>
                                        <div class="ps-wrapper">
                                            <div class="slick-slider ps-product__gallery ps-carousel inside slick-initialized">
                                                <div class="slick-list">
                                                    <div class="slick-track" style="width: 335px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                                        <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 335px;">
                                                            <div>
                                                                <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                                    <a href="#">
                                                                        <img
                                                                            src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=head_display/2239_%5BChicken%20Egg%5D%5Cdisplay_image%5C12056%5C3%5Ccover_image%5C1_Mascobazar-egg.jpg"
                                                                            alt="martfury"
                                                                        />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="slick-slider ps-product__variants slick-vertical slick-initialized">
                                        <div class="slick-list">
                                            <div class="slick-track" style="opacity: 1; transform: translate3d(0px, 0px, 0px); height: 198px;">
                                                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 60px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <img
                                                                src="https://cdn.mascobazar.com/api/v1/ImgProcessing?webp=0&amp;imgPath=head_display/2239_%5BChicken%20Egg%5D%5Cdisplay_image%5C12056%5C3%5Cthumbnail_image%5C1_Mascobazar-egg.jpg"
                                                                alt="martfury"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="ps-product__info">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="ps-product ps-product--inner border_none">
                                                <div class="ps-porduct__card_header row">
                                                    <div class="left-side">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div class="sticker-view-detail-5">5.7143% Discount</div>
                                                        <div class="sticker-view-detail-6">- ৳6</div>
                                                    </div>
                                                    <div class="ps-product__DefaultFunctionality d-none d-sm-block">
                                                        <figure>
                                                            <div class="add-cart-inc-dec-qty">
                                                                <button class="up"><i class="icon-plus btn-clr"></i></button><button class="down"><i class="icon-minus btn-clr-deep-gray"></i></button>
                                                                <input class="display_quantity_details" type="text" placeholder="0 ITEM COUNT" disabled="" />
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 ps-product__desc">
                                            <div class="ps-product__title">
                                                <h1><span>Masco Bazar Chicken Egg (own Farm) </span>( 12 pcs )</h1>
                                                <h1><span>মাসকো বাজার মুরগীর ডিম (নিজস্ব ফার্ম) </span>( ১২ পিস )</h1>
                                            </div>
                                            <hr />
                                            <div class="ps-price__action">
                                                <div class="ps-brand">
                                                    <span>Brand : </span><span style="color: rgb(65, 155, 53);"><a href="/shop-by-brand/1">Masco Bazar</a></span>
                                                </div>
                                                <div class="ps-price">
                                                    <h4 class="ps-product__price">
                                                        <span class="ps-discounted__price"> ৳&nbsp;99</span>&nbsp;&nbsp;<span class="ps-mrp__price">৳ &nbsp;<img class="cross-price-icon" src="{{asset('frontend/static/img/cross-icon.png')}}" />105</span>
                                                    </h4>
                                                </div>
                                                <div class="ps-product__DefaultFunctionality d-block d-sm-none">
                                                    <figure>
                                                        <div class="add-cart-inc-dec-qty">
                                                            <button class="up"><i class="icon-plus btn-clr"></i></button><button class="down"><i class="icon-minus btn-clr-deep-gray"></i></button>
                                                            <input class="display_quantity_details" type="text" placeholder="0 ITEM COUNT" disabled="" />
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="action-div-default-functionality">
                                                    <div> <a href="{{url('/account/cart')}}"><button class="ps-btn add-cart">ADD TO CART</button> </a></div>
                                                    <div> <a href="{{url('/')}}"> <button class="ps-btn buy-now">CONTINUE SHOPPING</button> </a></div>
                                                    <div> <a href="{{url('/account/checkout')}}"> <button class="ps-btn buy-now">CHECKOUT</button> </a> </div>
                                                    <div class="ps-product__actions">
                                                        <a href="#">
                                                            <i><img src="{{asset('frontend/static/img/HomeIcon/wish.png')}}" alt="Soudapati" /></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="action-div-default-functionality d-flex d-sm-none mobile">
                                                    <div><button class="ps-btn add-cart p-0">ADD TO CART</button></div>
                                                    <div><button class="ps-btn buy-now">BUY NOW</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ps-product__content ps-tab-root">
                            <div class="ant-tabs ant-tabs-top ant-tabs-line">
                                <div role="tablist" class="ant-tabs-bar ant-tabs-top-bar" tabindex="0">
                                    <div class="ant-tabs-nav-container">
                                        <span unselectable="unselectable" class="ant-tabs-tab-prev ant-tabs-tab-btn-disabled">
                                            <span class="ant-tabs-tab-prev-icon">
                                                <i aria-label="icon: left" class="anticon anticon-left ant-tabs-tab-prev-icon-target">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="left" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 0 0 0 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"
                                                        ></path>
                                                    </svg>
                                                </i>
                                            </span>
                                        </span>
                                        <span unselectable="unselectable" class="ant-tabs-tab-next ant-tabs-tab-btn-disabled">
                                            <span class="ant-tabs-tab-next-icon">
                                                <i aria-label="icon: right" class="anticon anticon-right ant-tabs-tab-next-icon-target">
                                                    <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="right" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M765.7 486.8L314.9 134.7A7.97 7.97 0 0 0 302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 0 0 0-50.4z"
                                                        ></path>
                                                    </svg>
                                                </i>
                                            </span>
                                        </span>
                                        <div class="ant-tabs-nav-wrap">
                                            <div class="ant-tabs-nav-scroll">
                                                <div class="ant-tabs-nav ant-tabs-nav-animated">
                                                    <div>
                                                        <div role="tab" aria-disabled="false" aria-selected="false" class="ant-tabs-tab">Description</div>
                                                        <div role="tab" aria-disabled="false" aria-selected="false" class="ant-tabs-tab">Product Specification</div>
                                                        <div role="tab" aria-disabled="false" aria-selected="false" class="ant-tabs-tab">Health Benefit</div>
                                                        <div role="tab" aria-disabled="false" aria-selected="false" class="ant-tabs-tab">Usage Restriction</div>
                                                        <div role="tab" aria-disabled="false" aria-selected="true" class="ant-tabs-tab-active ant-tabs-tab">Reviews</div>
                                                        <div role="tab" aria-disabled="false" aria-selected="false" class="ant-tabs-tab">Q &amp; A</div>
                                                    </div>
                                                    <div class="ant-tabs-ink-bar ant-tabs-ink-bar-animated" style="display: block; transform: translate3d(905px, 0px, 0px); width: 118px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div tabindex="0" role="presentation" style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
                                <div class="ant-tabs-content ant-tabs-content-animated ant-tabs-top-content" style="margin-left: -400%;">
                                    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
                                    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
                                    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
                                    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
                                    <div role="tabpanel" aria-hidden="false" class="ant-tabs-tabpane ant-tabs-tabpane-active">
                                        <div tabindex="0" role="presentation" style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="ps-block--average-rating">
                                                    <div class="ps-block__header">
                                                        <h3>5</h3>
                                                        <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                    <div class="ant-rate-star-first">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                    <div class="ant-rate-star-second">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                    <div class="ant-rate-star-first">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                    <div class="ant-rate-star-second">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                    <div class="ant-rate-star-first">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                    <div class="ant-rate-star-second">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                    <div class="ant-rate-star-first">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                    <div class="ant-rate-star-second">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                    <div class="ant-rate-star-first">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                    <div class="ant-rate-star-second">
                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                <path
                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                ></path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <span> 19 Review</span>
                                                    </div>
                                                    <div class="ps-block__star">
                                                        <span>5 Star</span>
                                                        <div class="ps-progress" data-value="100"><span style="width: 100%;"></span></div>
                                                        <span>100%</span>
                                                    </div>
                                                    <div class="ps-block__star">
                                                        <span>4 Star</span>
                                                        <div class="ps-progress" data-value="0"><span style="width: 0%;"></span></div>
                                                        <span>0%</span>
                                                    </div>
                                                    <div class="ps-block__star">
                                                        <span>3 Star</span>
                                                        <div class="ps-progress" data-value="0"><span style="width: 0%;"></span></div>
                                                        <span>0%</span>
                                                    </div>
                                                    <div class="ps-block__star">
                                                        <span>2 Star</span>
                                                        <div class="ps-progress" data-value="0"><span style="width: 0%;"></span></div>
                                                        <span>0%</span>
                                                    </div>
                                                    <div class="ps-block__star">
                                                        <span>1 Star</span>
                                                        <div class="ps-progress" data-value="0"><span style="width: 0%;"></span></div>
                                                        <span>0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <form class="ant-form ant-form-horizontal ps-form--review">
                                                    <div class="ant-row ant-form-item">
                                                        <div class="ant-col ant-form-item-control-wrapper">
                                                            <div class="ant-form-item-control has-success">
                                                                <span class="ant-form-item-children"> <input type="hidden" id="review_id" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input" value="0" /> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ant-row ant-form-item">
                                                        <div class="ant-col ant-form-item-control-wrapper">
                                                            <div class="ant-form-item-control has-success">
                                                                <span class="ant-form-item-children">
                                                                    <input type="hidden" id="user_accounts_id" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input" value="0" />
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ant-row ant-form-item">
                                                        <div class="ant-col ant-form-item-control-wrapper">
                                                            <div class="ant-form-item-control has-success">
                                                                <span class="ant-form-item-children">
                                                                    <input type="hidden" id="item_display_id" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input" value="12056" />
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <h4 class="mt-5"><span class="review-head">SUBMIT YOUR REVIEW</span></h4>
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control has-success">
                                                                    <span class="ant-form-item-children">
                                                                        <ul class="ant-rate" tabindex="0" role="radiogroup">
                                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                                <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                                    <div class="ant-rate-star-first">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                    <div class="ant-rate-star-second">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                                <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                                    <div class="ant-rate-star-first">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                    <div class="ant-rate-star-second">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                                <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                                    <div class="ant-rate-star-first">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                    <div class="ant-rate-star-second">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                                <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                                    <div class="ant-rate-star-first">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                    <div class="ant-rate-star-second">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="ant-rate-star ant-rate-star-full">
                                                                                <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                                    <div class="ant-rate-star-first">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                    <div class="ant-rate-star-second">
                                                                                        <i aria-label="icon: star" class="anticon anticon-star">
                                                                                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                                <path
                                                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                                                ></path>
                                                                                            </svg>
                                                                                        </i>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <textarea
                                                                            rows="6"
                                                                            placeholder="Write your review here"
                                                                            id="review_description"
                                                                            data-__meta="[object Object]"
                                                                            data-__field="[object Object]"
                                                                            class="ant-input"
                                                                        ></textarea>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="ant-row ant-form-item">
                                                                    <div class="ant-col ant-form-item-control-wrapper">
                                                                        <div class="ant-form-item-control">
                                                                            <span class="ant-form-item-children">
                                                                                <input
                                                                                    class="ant-input ant-input-disabled form-control"
                                                                                    disabled=""
                                                                                    type="text"
                                                                                    placeholder="Your Name"
                                                                                    id="user_name"
                                                                                    data-__meta="[object Object]"
                                                                                    data-__field="[object Object]"
                                                                                    value=""
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="ant-row ant-form-item">
                                                                    <div class="ant-col ant-form-item-control-wrapper">
                                                                        <div class="ant-form-item-control">
                                                                            <span class="ant-form-item-children">
                                                                                <input
                                                                                    class="ant-input ant-input-disabled form-control"
                                                                                    disabled=""
                                                                                    type="email"
                                                                                    placeholder="Your Email"
                                                                                    id="user_email"
                                                                                    data-__meta="[object Object]"
                                                                                    data-__field="[object Object]"
                                                                                    value=""
                                                                                />
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group submit text-center"><button class="ps-btn review-btn">Submit Review</button></div>
                                                </form>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Really Nice.........</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Really Nice.........</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Really Nice.........</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Really Nice.........</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>fhffjfjh</p>
                                                </div>
                                                <div>
                                                    <h3>osman</h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Large sized eggs</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>nice</p>
                                                </div>
                                                <div>
                                                    <h3>Arman</h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>large and clean eggs</p>
                                                </div>
                                                <div>
                                                    <h3>Sharif</h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>SUCH EGG REALLY MAKES A CHICKEN PROUD....NICE PACKAGING...IT FEELS FARM FRESH..BEST CHICKEN EGG IN TOWN...</p>
                                                </div>
                                                <div>
                                                    <h3>Ayan</h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Large sized eggs, relatively not found on other e -commerce order.</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        new arrival 16% Discount - ৳16 3 ITEM COUNT Masco Bazar Chicken Egg (own Farm) ( 12 pcs ) মাসকো বাজার মুরগীর ডিম (নিজস্ব ফার্ম) ( ১২ পিস ) Brand: Masco Bazar ৳ 84 ৳ 100 ADD TO CART
                                                        CONTINUE SHOPPING CHECKOUT Soudapati DescriptionProduct SpecificationHealth BenefitUsage RestrictionReviewsQ &amp; A 5 8 Review 5 Star 100% 4 Star 0% 3 Star 0% 2 Star 0% 1 Star 0%
                                                        SUBMIT YOUR REVIEW Write your review here Required Review Content md Tonmoi Your Email Submit Review 16% Discount - ৳16 1 ITEM COUNT Masco Bazar Chicken Egg (own Farm) ( 12 pcs ) মাসকো
                                                        বাজার মুরগীর ডিম (নিজস্ব ফার্ম) ( ১২ পিস ) Tonmoi Sagor Concept knitting limited Concept knitting Ltd Tilargati. Concept Knitting Ltd MAZED canchon knitting MAZED 01515641769 MAZED
                                                        0151
                                                    </p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>
                                                        16% Discount - ৳16 1 ITEM COUNT Masco Bazar Chicken Egg (own Farm) ( 12 pcs ) মাসকো বাজার মুরগীর ডিম (নিজস্ব ফার্ম) ( ১২ পিস )
                                                    </p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Tonmoi Sagor</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Concept knitting limited</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Concept knitting Ltd Tilargati.</p>
                                                </div>
                                                <div>
                                                    <h3></h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>Concept Knitting Ltd</p>
                                                </div>
                                                <div>
                                                    <h3>MAZED</h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>canchon knitting</p>
                                                </div>
                                                <div>
                                                    <h3>MAZED</h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>01515641769</p>
                                                </div>
                                                <div>
                                                    <h3>MAZED</h3>
                                                    <ul class="ant-rate ant-rate-disabled" tabindex="-1" role="radiogroup">
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="1" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="2" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="3" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="4" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="ant-rate-star ant-rate-star-full">
                                                            <div role="radio" aria-checked="true" aria-posinset="5" aria-setsize="5" tabindex="0">
                                                                <div class="ant-rate-star-first">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                                <div class="ant-rate-star-second">
                                                                    <i aria-label="icon: star" class="anticon anticon-star">
                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="star" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                            <path
                                                                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z"
                                                                            ></path>
                                                                        </svg>
                                                                    </i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <p>0151</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div tabindex="0" role="presentation" style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
                                    </div>
                                    <div role="tabpanel" aria-hidden="true" class="ant-tabs-tabpane ant-tabs-tabpane-inactive"></div>
                                </div>
                                <div tabindex="0" role="presentation" style="width: 0px; height: 0px; overflow: hidden; position: absolute;"></div>
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
@extends('frontend.layouts.master')
@section('content')

 <main id="homepage-1" class="main_content">

 <div class="ps-page--simple">
    <div class="ps-checkout ps-section--shopping">
        <div class="container">
            <div class="ps-section__content">
                <div>
                    <form class="ant-form ant-form-horizontal ps-form--checkout">
                        <div class="ps-form__content">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                    <div class="ps-form__billing-info">
                                        <h4 class="ps-form__heading">CHECKOUT INFORMATION</h4>
                                        <div class="ps-checkout__form-block">
                                            <div class="ps-checkout__login">
                                                <div class="d-flex flex-row">
                                                    <div class="p-2"><img src="{{asset('frontend/static/img/return-customer.png')}}" />Returning Customer?</div>
                                                    <div class="p-2"><span>Click here to login</span></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <label class="ps-form__block-text">Mobile No:<span style="color: red;">*</span></label>
                                                    <div>
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <input
                                                                            class="ant-input form-control"
                                                                            autocomplete="off"
                                                                            type="text"
                                                                            placeholder="Phone number"
                                                                            id="mobile"
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
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <label class="ps-form__block-text">OTP:<span style="color: red;">*</span></label>
                                                    <div class="form-group m-0">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <div class="input-group mb-3" id="otp" data-__meta="[object Object]" data-__field="[object Object]">
                                                                            <input type="text" autocomplete="off" class="form-control" placeholder="Enter SMS Verification Code...." aria-label="enter otp" aria-describedby="basic-addon2" />
                                                                            <div class="input-group-append"><button class="btn btn-outline" type="button">Send OTP</button></div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="ps-form__block-text">Full Name<span style="color: red;">*</span></label>
                                                    <div class="form-group m-0">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <input
                                                                            class="ant-input form-control"
                                                                            type="text"
                                                                            placeholder="Enter Your Full Name..."
                                                                            id="user_fullname"
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
                                                <div class="col-md-6 col-sm-12 col-12">
                                                    <label class="ps-form__block-text">Email:</label>
                                                    <div class="form-group m-0">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <input class="ant-input form-control" type="text" placeholder="Email" id="email" data-__meta="[object Object]" data-__field="[object Object]" value="" />
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-0">
                                                <div class="ant-row ant-form-item">
                                                    <div class="ant-col ant-form-item-control-wrapper">
                                                        <div class="ant-form-item-control">
                                                            <span class="ant-form-item-children">
                                                                <div class="ant-radio-group ant-radio-group-outline" id="address_of">
                                                                    <label class="ant-radio-wrapper">
                                                                        <span class="ant-radio"><input type="radio" class="ant-radio-input" value="Home" /><span class="ant-radio-inner"></span></span><span>Home Address</span>
                                                                    </label>
                                                                    <label class="ant-radio-wrapper">
                                                                        <span class="ant-radio"><input type="radio" class="ant-radio-input" value="Office" /><span class="ant-radio-inner"></span></span><span>Office Address</span>
                                                                    </label>
                                                                    <label class="ant-radio-wrapper">
                                                                        <span class="ant-radio"><input type="radio" class="ant-radio-input" value="Other" /><span class="ant-radio-inner"></span></span><span>Other Address</span>
                                                                    </label>
                                                                    <label class="ant-radio-wrapper">
                                                                        <span class="ant-radio"><input type="radio" class="ant-radio-input" value="localPickup" /><span class="ant-radio-inner"></span></span><span>Pickup from Mall</span>
                                                                    </label>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-0" style="display: none; text-align: center; border: 1px solid rgb(204, 204, 204);">
                                                <h4 style="padding-top: 8px;">Mall Address:</h4>
                                                <p><strong>House #50. Road #6/c, Sector #12, Uttara, Dhaka -1230</strong></p>
                                            </div>
                                            <div class="row" style="display: flex;">
                                                <div class="col-md-4 col-sm-12 col-12">
                                                    <label class="ps-form__block-text">Area<span style="color: red;">*</span></label>
                                                    <div class="form-group">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <div id="delivery_area_id" class="ant-select ant-select-enabled">
                                                                            <div
                                                                                class="ant-select-selection ant-select-selection--single"
                                                                                role="combobox"
                                                                                aria-autocomplete="list"
                                                                                aria-haspopup="true"
                                                                                aria-controls="2f77155a-03f2-485b-f774-460a87b899e9"
                                                                                aria-expanded="false"
                                                                                data-__meta="[object Object]"
                                                                                data-__field="[object Object]"
                                                                                tabindex="0"
                                                                            >
                                                                                <div class="ant-select-selection__rendered">
                                                                                    <div unselectable="on" class="ant-select-selection__placeholder" style="display: none; user-select: none;">Select a area</div>
                                                                                    <div class="ant-select-selection-selected-value" title="" style="display: block; opacity: 1;"></div>
                                                                                    <div class="ant-select-search ant-select-search--inline" style="display: none;">
                                                                                        <div class="ant-select-search__field__wrap">
                                                                                            <input id="delivery_area_id" autocomplete="off" class="ant-select-search__field" value="" />
                                                                                            <span class="ant-select-search__field__mirror">&nbsp;</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="ant-select-arrow" unselectable="on" style="user-select: none;">
                                                                                    <i aria-label="icon: down" class="anticon anticon-down ant-select-arrow-icon">
                                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                            <path
                                                                                                d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-12 col-12">
                                                    <label class="ps-form__block-text">Full Address<span style="color: red;">*</span></label>
                                                    <div class="form-group m-0">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <input class="ant-input form-control" type="text" placeholder="Address" id="others_address" data-__meta="[object Object]" data-__field="[object Object]" value="" />
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="display: flex;">
                                                <div class="col-md-8 col-sm-12 col-12 row">
                                                    <div class="checkbox form-group m-0 col-md-4 col-sm-12 col-12">
                                                        <div name="checkbox" class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control">
                                                                    <span class="ant-form-item-children">
                                                                        <label class="ps-checkbox ant-checkbox-wrapper">
                                                                            <span class="ant-checkbox">
                                                                                <input id="order_receiver" type="checkbox" class="ant-checkbox-input" data-__meta="[object Object]" data-__field="[object Object]" value="" />
                                                                                <span class="ant-checkbox-inner"></span>
                                                                            </span>
                                                                            <span>Order Receiver</span>
                                                                        </label>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-0 col-md-6 col-sm-12 col-12"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-12 row">
                                                    <label class="col-md-12 col-sm-12 col-12 ps-form__block-text">Delivery Date</label>
                                                    <div class="form-group col-md-8 m-0">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control has-success">
                                                                    <span class="ant-form-item-children">
                                                                        <div id="customer_delivery_date" class="ant-select ant-select-enabled">
                                                                            <div
                                                                                class="ant-select-selection ant-select-selection--single"
                                                                                role="combobox"
                                                                                aria-autocomplete="list"
                                                                                aria-haspopup="true"
                                                                                aria-controls="5a69e090-8fdf-4e58-95dc-00101a007a36"
                                                                                aria-expanded="false"
                                                                                data-__meta="[object Object]"
                                                                                data-__field="[object Object]"
                                                                                tabindex="0"
                                                                            >
                                                                                <div class="ant-select-selection__rendered">
                                                                                    <div unselectable="on" class="ant-select-selection__placeholder" style="display: none; user-select: none;">Delivery Date</div>
                                                                                    <div class="ant-select-selection-selected-value" title="2021-07-13" style="display: block; opacity: 1;">2021-07-13</div>
                                                                                    <div class="ant-select-search ant-select-search--inline" style="display: none;">
                                                                                        <div class="ant-select-search__field__wrap">
                                                                                            <input id="customer_delivery_date" autocomplete="off" class="ant-select-search__field" value="" />
                                                                                            <span class="ant-select-search__field__mirror">&nbsp;</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="ant-select-arrow" unselectable="on" style="user-select: none;">
                                                                                    <i aria-label="icon: down" class="anticon anticon-down ant-select-arrow-icon">
                                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                            <path
                                                                                                d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-12">
                                                    <label class="ps-form__block-text">Time Slot </label>
                                                    <div class="form-group m-0">
                                                        <div class="ant-row ant-form-item">
                                                            <div class="ant-col ant-form-item-control-wrapper">
                                                                <div class="ant-form-item-control has-success">
                                                                    <span class="ant-form-item-children">
                                                                        <div id="delivery_slot_detail_id" class="ant-select ant-select-enabled">
                                                                            <div
                                                                                class="ant-select-selection ant-select-selection--single"
                                                                                role="combobox"
                                                                                aria-autocomplete="list"
                                                                                aria-haspopup="true"
                                                                                aria-controls="138daab0-6d33-4c90-ee73-86f5847dda14"
                                                                                aria-expanded="false"
                                                                                data-__meta="[object Object]"
                                                                                data-__field="[object Object]"
                                                                                tabindex="0"
                                                                            >
                                                                                <div class="ant-select-selection__rendered">
                                                                                    <div unselectable="on" class="ant-select-selection__placeholder" style="display: none; user-select: none;">Time Slot</div>
                                                                                    <div class="ant-select-selection-selected-value" title="11:00 AM to 2:00 PM" style="display: block; opacity: 1;">11:00 AM to 2:00 PM</div>
                                                                                    <div class="ant-select-search ant-select-search--inline" style="display: none;">
                                                                                        <div class="ant-select-search__field__wrap">
                                                                                            <input id="delivery_slot_detail_id" autocomplete="off" class="ant-select-search__field" value="" />
                                                                                            <span class="ant-select-search__field__mirror">&nbsp;</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <span class="ant-select-arrow" unselectable="on" style="user-select: none;">
                                                                                    <i aria-label="icon: down" class="anticon anticon-down ant-select-arrow-icon">
                                                                                        <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                            <path
                                                                                                d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"
                                                                                            ></path>
                                                                                        </svg>
                                                                                    </i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-0">
                                                <label class="ps-form__block-text">Order Note (optional)</label>
                                                <div class="ant-row ant-form-item">
                                                    <div class="ant-col ant-form-item-control-wrapper">
                                                        <div class="ant-form-item-control">
                                                            <span class="ant-form-item-children">
                                                                <textarea rows="2" placeholder="Write note about your order" id="order_note" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input"></textarea>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ps-form__submit ps-return__cart">
                                            <div class="ps-block__footer">
                                                <a href="/account/shopping-cart"><img src="{{asset('frontend/static/img/left-arrow.png')}}" />Return to shopping cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ps-block--checkout-order">
                                    <div class="ps-form__orders">
                                        <h3>ORDER SUMMARY</h3>
                                        <div class="ps-block--checkout-order">
                                            <div class="ps-block__content">
                                                <figure class="ps-block__items--count">
                                                    <figcaption>
                                                        <span> <span>Items in Cart</span></span>
                                                    </figcaption>
                                                </figure>
                                                <figure class="ps-block__items"></figure>
                                                <figure class="ps-block__items--cost sc-cost">
                                                    <div class="Collapsible">
                                                        <span class="Collapsible__trigger is-open">Wrapping/Packaging</span>
                                                        <div class="Collapsible__contentOuter" style="height: auto; transition: none 0s ease 0s; overflow: hidden;"><div class="Collapsible__contentInner"></div></div>
                                                    </div>
                                                </figure>
                                                <figure>
                                                    <figcaption class="ps-block__items--cost">
                                                        <span><b>Payable Total</b></span><small>৳</small>
                                                    </figcaption>
                                                </figure>
                                                <figure class="ps-block__shipping"></figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-form__submit--fullwidth">
                                        <label class="ps-checkbox ant-checkbox-wrapper">
                                            <span class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input" value="" /><span class="ant-checkbox-inner"></span></span>
                                            <span>
                                                <span style="color: green;">
                                                    I agree to the <a href="/page/terms-and-condition">terms and conditions, </a><a href="/page/refund-and-return-policy">Refund Policy</a> and
                                                    <a href="/page/privacy-policy">Privacy Policy</a>
                                                </span>
                                            </span>
                                        </label>
                                        <div class="ps-block__footer"><button disabled="" class="ps-btn" style="background-color: rgb(204, 204, 204);">Confirm Order</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="ant-row ant-form-item">
                        <div class="ant-col ant-form-item-control-wrapper">
                            <div class="ant-form-item-control has-success">
                                <span class="ant-form-item-children"> <input type="hidden" id="user_accounts_id" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input" value="0" /> </span>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item">
                        <div class="ant-col ant-form-item-control-wrapper">
                            <div class="ant-form-item-control has-success">
                                <span class="ant-form-item-children"> <input type="hidden" id="customer_type_id" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input" value="0" /> </span>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item">
                        <div class="ant-col ant-form-item-control-wrapper">
                            <div class="ant-form-item-control has-success">
                                <span class="ant-form-item-children"> <input type="hidden" id="address_book_id" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input" value="0" /> </span>
                            </div>
                        </div>
                    </div>
                    <div class="ant-row ant-form-item">
                        <div class="ant-col ant-form-item-control-wrapper">
                            <div class="ant-form-item-control has-success">
                                <span class="ant-form-item-children"> <input type="hidden" id="order_type" data-__meta="[object Object]" data-__field="[object Object]" class="ant-input" value="Online" /> </span>
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
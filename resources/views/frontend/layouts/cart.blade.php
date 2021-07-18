@extends('frontend.layouts.master')
@section('content')

 <main id="homepage-1" class="main_content">

 <div class="ps-page--simple">
					<div class="ps-shopping-cart ps-section--shopping">
						<div class="container">
							<div class="ps-section__content">
								<div class="ps-form__content">
									<div class="row">
										<div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
											<div class="ps-section__header d-flex justify-content-center ps-cart-header"><div>SHOPPING CART</div></div>
											<div class="form-group col-sm-12 table-responsive mb-2">
												<div class="ps-block-colhead row">
													<div class="fontsize col-sm-6 col-6">PRODUCT &amp; PRICE</div>
													<div class="center fontsize col-sm-2 col-2">QUANTITY</div>
													<div class="center fontsize col-sm-2 col-2">DISCOUNT</div>
													<div class="cart-subtotal fontsize col-sm-2 col-2">MRP Value</div>
												</div>
												<div class="cart-border web"></div>
												<div class="cart-border mobile"><h4 class="">PRODUCT</h4></div>
											</div>
											<div class="form-group row clearfix m-0">
												<div class="ps-section__cart-actions">
													<a class="cart-back-arrow" href="/"><span class="fa fa-long-arrow-left"></span>Add / Update Cart</a><a class="cart-back-arrow"><span class="fa fa-times"></span>Clear Cart</a>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 ps-block--checkout-order">
											<div class="ps-form__orders">
												<h3 style="margin-bottom: 0px;">CART SUMMARY</h3>
												<div class="ps-block--checkout-order">
													<div class="ps-block__content m-0">
														<figure>
															<figcaption class="ps-block__items--cost sc-cost"><span>Total MRP Value:</span><small>৳</small></figcaption>
															<figcaption class="ps-block__items--cost sc-cost"><span>&nbsp;&nbsp;&nbsp;(+)Shipping Charge:</span><small>৳0.00</small></figcaption>
															<figcaption class="ps-block__items--cost sc-cost"><span>Total Payable:</span><small>৳</small></figcaption>
															<figcaption class="ps-block__items--cost sc-cost"><span>&nbsp;&nbsp;&nbsp;(-)Product Discount:</span><small>৳0.00</small></figcaption>
															<figcaption class="ps-block__items--cost sc-cost">
																<span><b>Net Payable:</b></span><b>৳0.00</b>
															</figcaption>
															<figcaption class="ps-block__items--cost sc-cost">
																<div class="Collapsible">
																	<span class="Collapsible__trigger is-open">Apply Promotional Code</span>
																	<div class="Collapsible__contentOuter" style="height: auto; transition: none 0s ease 0s; overflow: hidden;">
																		<div class="Collapsible__contentInner">
																			<div class="col-sm-12">
																				<select class="form-control" name="promo_id" style="background-color: white; height: 25px; width: 60%; display: inline;">
																					<option value="0">Select Promo Code</option>
																				</select>
																				<input type="button" class="check" value="Check" /><input type="button" class="apply" value="Apply" />
																			</div>
																		</div>
																	</div>
																</div>
															</figcaption>
															<figcaption class="ps-block__items--cost sc-cost">
																<div class="Collapsible">
																	<span class="Collapsible__trigger is-open">Apply Coupon Code</span>
																	<div class="Collapsible__contentOuter" style="height: auto; transition: none 0s ease 0s; overflow: hidden;">
																		<div class="Collapsible__contentInner">
																			<div class="col-sm-12">
																				<select class="form-control" name="coupon_id" style="background-color: white; height: 25px; width: 60%; display: inline;">
																					<option value="0">Select Coupon Code</option>
																				</select>
																				<input type="button" class="check" value="Check" /><input type="button" class="apply" value="Apply" />
																			</div>
																		</div>
																	</div>
																</div>
															</figcaption>
															<figcaption class="ps-block__items--cost sc-cost">
																<div class="Collapsible">
																	<span class="Collapsible__trigger is-open">Gift Voucher</span>
																	<div class="Collapsible__contentOuter" style="height: auto; transition: none 0s ease 0s; overflow: hidden;">
																		<div class="Collapsible__contentInner">
																			<div class="col-sm-12">
																				<select class="form-control" name="gift_voucher_id" style="background-color: white; height: 25px; width: 60%; display: inline;">
																					<option value="0">Select Gift Voucher</option>
																				</select>
																				<input type="button" class="check" value="Check" /><input type="button" class="apply" value="Apply" />
																			</div>
																		</div>
																	</div>
																</div>
															</figcaption>
															<figcaption class="ps-block__items--cost sc-cost">
																<div class="Collapsible">
																	<span class="Collapsible__trigger is-open">Wrapping/Packaging</span>
																	<div class="Collapsible__contentOuter" style="height: auto; transition: none 0s ease 0s; overflow: hidden;"><div class="Collapsible__contentInner"></div></div>
																</div>
															</figcaption>
														</figure>
													</div>
												</div>
											</div>
											<a class="ps-btn ps-btn--fullwidth btn-cart-proceed py-3" href="{{url('/')}}">Proceed to checkout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


  </main>

@endsection
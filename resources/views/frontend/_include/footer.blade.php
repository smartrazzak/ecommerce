@php

$siteInfo = \App\Model\Siteconfig::first();

@endphp
<footer class="footer_bottom pt-5">
                    <div class="ml-60 mr-60">
                        <div class="footer_container">
                            <aside class="f_col">
                                <div class="f_info">
                                    <p class="f_title mr-5">Shop</p>
                                    <div class="line_icon"></div>
                                </div>
                                <ul class="link_item">
                                    <li><a href="/most-popular-products">Most Popular Item</a></li>
                                    <li><a href="/deal-of-the-day">Deal of the Day</a></li>
                                    <li><a href="/most-discounted">Most Discounted Product</a></li>
                                    <li><a href="/new-arrival">New Arrival Product</a></li>
                                    <li><a href="/masco-bazar-products">Our Own Product</a></li>
                                </ul>
                                <a href="{{url('/')}}"><img class="logo_img" src="{{asset('uploads/siteConfig/'.$siteInfo->logo)}}" " alt="Masco Bazar" /></a>
                                <p class="copy_text">
                                    © Copyright <span>2021</span> | MASCOBAZAR LIMITED.<br />
                                    Developed By <a href="#" target="_blank">MasMinu Systems Limited.</a>
                                </p>
                            </aside>
                            <aside class="f_col">
                                <div class="f_info">
                                    <p class="f_title mr-5">For Customers</p>
                                    <div class="line_icon"></div>
                                </div>
                                <ul class="link_item">
                                    <li><a href="{{url('about')}}">About Ourselves</a></li>
                                    <li><a href="/page/how-to-order">How to Order</a></li>
                                    <li><a href="/page/product-related-policy">Product Related Policy</a></li>
                                    <li><a href="/page/terms-and-condition">Terms &amp; Conditions</a></li>
                                    <li><a href="/page/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/page/refund-and-return-policy">Return,Refund And Exchange Policy</a></li>
                                    <li><a href="/#">CSR Activities</a></li>
                                    <li><a href="/#">Touch n Feel Mall</a></li>
                                </ul>
                                <div class="icon mt-5">
                                    <div class="icon_wrap">
                                        <a href="#"><img class="imagevisa opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_visa.png')}}" alt="visa" /></a>
                                        <a href="#"><img class="imagemaster opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_mastercard.png')}}" alt="mastercard" /></a>
                                        <a href="#"><img class="imagemx opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_MX-card.png')}}" alt="amex" /></a>
                                        <a href="#"><img class="imagenexus opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_nexus-pay.png')}}" alt="nexus" /></a>
                                    </div>
                                    <div class="icon_wrap">
                                        <a href="#"><img class="imagebkash opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_bkash.png')}}" alt="bkash" /></a>
                                        <a href="#"><img class="imagerocket opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_rocket.png')}}" alt="rocket" /></a>
                                        <a href="#"><img class="imagenogod opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_nagad.png')}}" alt="nagad" /></a>
                                        <a href="#"><img class="imagessl opacityImg" src="{{asset('frontend/static/img/HomeIcon/mb_sslcommerz.png')}}" alt="sslcommerz" /></a>
                                    </div>
                                    <p>We Are Using Safe Payment</p>
                                </div>
                            </aside>
                            <aside class="f_col">
                                <div class="f_info">
                                    <p class="f_title mr-5">Contact</p>
                                    <div style="width: 100px; height: 2px; border-style: solid; border-color: white; background-color: white;"></div>
                                </div>

                                <div class="widget_content">
                                    <div class="w_text mb-3">
                                        <img src="{{asset('frontend/static/img/HomeIcon/phone.png')}}" alt="Call" /><span>Call us 24/7</span>
                                        <div class="w_info">
                                        {{ $siteInfo->mobile }}
                                            
                                        </div>
                                    </div>
                                    <div class="w_text mb-3">
                                        <img src="{{asset('frontend/static/img/HomeIcon/email.png')}}" alt="Email" style="height: 10px;" /><span>Email</span>
                                        <div class="w_info"><a href="mailto:help@mascobazar.com">{{ $siteInfo->email }}</a></div>
                                    </div>
                                    <div class="w_text mb-3">
                                        <img src="{{asset('frontend/static/img/HomeIcon/location.png')}}" alt="Location" /><span>Head Office</span>
                                        <div class="w_info"><div> {{ $siteInfo->address }} </div></div>
                                    </div>
                                    <div class="w_text mb-3">
                                        <img src="{{asset('frontend/static/img/HomeIcon/location.png')}}" alt="Location" /><span>TnF Mall</span>
                                        <div class="w_info"><div>House# 50, Road# 6/c, Sector# 12, Uttara, Dhaka-1230, Bangladesh</div></div>
                                    </div>
                                </div>
                                <div class="icon mt-5">
                                    <div class="icon_wrap">
                                        <a href="https://www.facebook.com/Mascobazarcom" target="_blank"><img class="social_icon" src="{{asset('frontend/static/img/HomeIcon/facebook-hover.png')}}" alt="facebook" /></a>
                                        <a href="https://www.instagram.com/mascobazarcom/" target="_blank"><img class="social_icon" src="{{asset('frontend/static/img/HomeIcon/instagram.png')}}" alt="Instagram" /></a>
                                        <a href="https://www.youtube.com/channel/UCuqw5GrKaDroY5R1Dp72pHg" target="_blank"><img class="social_icon" src="{{asset('frontend/static/img/HomeIcon/youtube-hover.png')}}" alt="YouTube" /></a>
                                        <a href="https://www.linkedin.com/company/masco-bazar-limited" target="_blank"><img class="social_icon" src="{{asset('frontend/static/img/HomeIcon/linkedin-hover.png')}}" alt="linkedin" /></a>
                                        <a href="https://twitter.com/mascobazarcom" target="_blank"><img class="social_icon" src="{{asset('frontend/static/img/HomeIcon/twitter-hover.png')}}" alt="twitter" /></a>
                                        <a href="#" target="_blank"><img class="social_icon" src="{{asset('frontend/static/img/HomeIcon/mascobazar.png')}}" alt="mascobazar" /></a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </footer>
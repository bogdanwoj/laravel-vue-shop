@extends('layouts.frontend')
@section('styles')
@endsection

@section('content')

<!--====== SLIDER PART START ======-->

<section id="home" class="slider-area pt-100">
    <div class="container-fluid position-relative">
        <div class="slider-active">
            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center ">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="assets/images/slider/1.jpg" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>-50% <br> OFF</p>
                                </div>
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>There are many variations of passages of Lorem Ipsum</span></h1>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                            </div> <!-- slider product content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="assets/images/slider/3.jpg" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>-20% <br> OFF</p>
                                </div>
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Lorem Ipsum</span> established fact that a reader <span>Here</span></h1>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                            </div> <!-- slider product content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="assets/images/slider/2.jpg" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>FREE<br> QUOTE</p>
                                </div>
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Get</span> a Free <span>Quote</span></h1>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                <a class="main-btn" href="#contact" data-animation="fadeInUp" data-delay="1.5s">Contact Us <i class="lni-chevron-right"></i></a>
                            </div> <!-- slider product content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- slider active -->

    </div> <!-- container fluid -->
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== DISCOUNT PRODUCT PART START ======-->

<section id="discount-product" class="discount-product pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-discount-product mt-30">
                    <div class="product-image">
                        <img src="assets/images/discount-product/product-1.jpg" alt="Product">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">High-quality furnitures <br> For your home</h4>
                        <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
            <div class="col-lg-6">
                <div class="single-discount-product mt-30">
                    <div class="product-image">
                        <img src="assets/images/discount-product/product-2.jpg" alt="Product">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">Hot Offer <br> Discount up to 80%</h4>
                        <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DISCOUNT PRODUCT PART ENDS ======-->

<!--====== PRODUCT PART START ======-->

<section id="product" class="product-area pt-100 pb-130">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                        <div class="product-items mt-30">
                            <div class="row product-items-active">
                                @if(isset($products))
                                    @foreach($products as $product)
                                        <div class="col-md-4 ">
                                            <div class="single-product-items">
                                                <div class="product-item-image">
                                                    <a href="#"><img src="{{$product->image_name}}" alt="Product" ></a>

                                                    <div class="product-discount-tag">
                                                        <p>-$50</p>
                                                    </div>
                                                </div>
                                                <div class="product-item-content text-center mt-30">
                                                    <h5 class="product-title"><a href="#">{{$product->name}}</a></h5>
                                                    <ul class="rating">
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                        <li><i class="lni-star-filled"></i></li>
                                                    </ul>
                                                    <span class="regular-price">{{$product->sale_price}}</span>

                                                    <span class="discount-price">{{$product->price}}</span>
                                                    <add-to-cart product-id="{{$product->id}}" user-id="{{auth()->user()->id ?? 0}}"/>
                                                </div>

                                            </div> <!-- single product items -->
                                        </div>
                                    @endforeach
                                @endif
                            </div> <!-- row -->
                        </div> <!-- product items -->
                    </div> <!-- tab pane -->


                </div> <!-- tab content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<!--====== FOOTER PART START ======-->

<section id="footer" class="footer-area">
    <div class="container">
        <div class="footer-widget pt-75 pb-120">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-7">
                    <div class="footer-logo mt-40">
                        <a href="#">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a>
                        <p class="mt-10">Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id elit.</p>
                        <ul class="footer-social mt-25">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer logo -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-link mt-50">
                        <h5 class="f-title">Services</h5>
                        <ul>
                            <li><a href="#">Architechture Design</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Autocad Services</a></li>
                            <li><a href="#">Lighting Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer-link mt-50">
                        <h5 class="f-title">Help</h5>
                        <ul>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-4 col-md-5 col-sm-7">
                    <div class="footer-info mt-50">
                        <h5 class="f-title">Contact Info</h5>
                        <ul>
                            <li>
                                <div class="single-footer-info mt-20">
                                    <span>Phone :</span>
                                    <div class="footer-info-content">
                                        <p>+88123 4567 890</p>
                                        <p>+88123 4567 890</p>
                                    </div>
                                </div> <!-- single footer info -->
                            </li>
                            <li>
                                <div class="single-footer-info mt-20">
                                    <span>Email :</span>
                                    <div class="footer-info-content">
                                        <p>contact@yourmail.com</p>
                                        <p>support@yourmail.com</p>
                                    </div>
                                </div> <!-- single footer info -->
                            </li>
                            <li>
                                <div class="single-footer-info mt-20">
                                    <span>Address :</span>
                                    <div class="footer-info-content">
                                        <p>5078 Jensen Key, Port Kaya, WV 73505</p>
                                    </div>
                                </div> <!-- single footer info -->
                            </li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
    </div> <!-- container -->
</section>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TO TOP PART ENDS ======-->

@endsection

@section('scripts')

@endsection


<script>
    import AddToCart from "../js/components/AddToCart";
    export default {
        components: {AddToCart}
    }
</script>

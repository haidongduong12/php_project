   <!-- Products Start -->
   <div class="container-fluid pt-5 pb-3">
       <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured
               Products</span></h2>
       <div class="row px-xl-5">
           @if (isset($products) && count($products) > 0)
               @foreach ($products as $index => $product)
                   <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                       <div class="product-item bg-light mb-4">
                           <div class="product-img position-relative overflow-hidden">
                               <img class="img-fluid w-100" src="{{ Storage::url('images/' . $product->product_image) }}"
                                   alt="anh">
                               <div class="product-action">
                                   <a href="{{ route('productDetails', ['id' => $product->id]) }}>{{ $product->product_name }}"
                                       class="btn btn-outline-dark btn-square" href=""><i class="far fa-eye"></i>
                                       </i></a>
                                   <a class="btn btn-outline-dark btn-square" href=""><i
                                           class="far fa-heart"></i></a>

                                   <a class="btn btn-outline-dark btn-square" href=""><i
                                           class="fa fa-search"></i></a>
                               </div>
                           </div>
                           <div class="text-center py-4">
                               <a class="h6 text-decoration-none text-truncate"
                                   href="{{ route('productDetails', ['id' => $product->id]) }}">{{ $product->product_name }}</a>
                               <div class="d-flex align-items-center justify-content-center mt-2">
                                   <h5>{{ number_format($product->product_price, 0, ',', '.') }} VND</h5>
                                   <h6 class="text-muted ml-2">
                                       <del>{{ number_format($product->product_price * 1.2, 0, ',', '.') }}</del>
                                   </h6>
                               </div>
                               <div class="d-flex align-items-center justify-content-center mb-1">
                                   <small class="fa fa-star text-primary mr-1"></small>
                                   <small class="fa fa-star text-primary mr-1"></small>
                                   <small class="fa fa-star text-primary mr-1"></small>
                                   <small class="fa fa-star text-primary mr-1"></small>
                                   <small class="fa fa-star text-primary mr-1"></small>
                                   <small>({{ $product['rating'] }})</small>
                               </div>
                           </div>
                       </div>
                   </div>
                   @if (($index + 1) % 4 == 0)
                       <div class="w-100"></div><!-- Force next items to break into new line -->
                   @endif
               @endforeach
           @endif
       </div>
   </div>
   <!-- Products End -->
   <br>
   <hr>
   <div class="pagination justify-content-center">
       @if ($products->onFirstPage())
           <button class="btn btn-secondary disabled" aria-disabled="true">&laquo;</button>
       @else
           <a href="{{ $products->previousPageUrl() }}" class="btn btn-secondary" rel="prev">&laquo;</a>
       @endif

       @for ($i = 1; $i <= $products->lastPage(); $i++)
           <a href="{{ $products->url($i) }}"
               @if ($products->currentPage() == $i) class="btn btn-primary" @else class="btn btn-none" @endif>{{ $i }}</a>
       @endfor

       @if ($products->hasMorePages())
           <a href="{{ $products->nextPageUrl() }}" class="btn btn-secondary" rel="next">&raquo;</a>
       @else
           <button class="btn btn-secondary disabled" aria-disabled="true">&raquo;</button>
       @endif
   </div>

   <!-- Offer Start -->
   <div class="container-fluid pt-5 pb-3">
       <div class="row px-xl-5">
           <div class="col-md-6">
               <div class="product-offer mb-30" style="height: 300px;">
                   <img class="img-fluid" src="{{ asset('online-shop-website-template') }}/img/offer-1.jpg"
                       alt="">
                   <div class="offer-text">
                       <h6 class="text-white text-uppercase">Save 20%</h6>
                       <h3 class="text-white mb-3">Special Offer</h3>
                       <a href="" class="btn btn-primary">Shop Now</a>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
               <div class="product-offer mb-30" style="height: 300px;">
                   <img class="img-fluid" src="{{ asset('online-shop-website-template') }}/img/offer-2.jpg"
                       alt="">
                   <div class="offer-text">
                       <h6 class="text-white text-uppercase">Save 20%</h6>
                       <h3 class="text-white mb-3">Special Offer</h3>
                       <a href="" class="btn btn-primary">Shop Now</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Offer End -->


   <!-- Products Start -->
   <div class="container-fluid pt-5 pb-3">
       <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent
               Products</span></h2>
       <div class="row px-xl-5">
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100" src="{{ asset('online-shop-website-template') }}/img/product-1.jpg"
                           alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100"
                           src="{{ asset('online-shop-website-template') }}/img/product-2.jpg" alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star-half-alt text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100"
                           src="{{ asset('online-shop-website-template') }}/img/product-3.jpg" alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star-half-alt text-primary mr-1"></small>
                           <small class="far fa-star text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100"
                           src="{{ asset('online-shop-website-template') }}/img/product-4.jpg" alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="far fa-star text-primary mr-1"></small>
                           <small class="far fa-star text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100"
                           src="{{ asset('online-shop-website-template') }}/img/product-5.jpg" alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100"
                           src="{{ asset('online-shop-website-template') }}/img/product-6.jpg" alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star-half-alt text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100"
                           src="{{ asset('online-shop-website-template') }}/img/product-7.jpg" alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star-half-alt text-primary mr-1"></small>
                           <small class="far fa-star text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
               <div class="product-item bg-light mb-4">
                   <div class="product-img position-relative overflow-hidden">
                       <img class="img-fluid w-100"
                           src="{{ asset('online-shop-website-template') }}/img/product-8.jpg" alt="">
                       <div class="product-action">
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-shopping-cart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i
                                   class="fa fa-sync-alt"></i></a>
                           <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                       </div>
                   </div>
                   <div class="text-center py-4">
                       <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                       <div class="d-flex align-items-center justify-content-center mt-2">
                           <h5>$123.00</h5>
                           <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                       </div>
                       <div class="d-flex align-items-center justify-content-center mb-1">
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="fa fa-star text-primary mr-1"></small>
                           <small class="far fa-star text-primary mr-1"></small>
                           <small class="far fa-star text-primary mr-1"></small>
                           <small>(99)</small>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Products End -->

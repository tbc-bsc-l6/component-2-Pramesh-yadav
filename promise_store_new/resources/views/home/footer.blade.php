<footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> Sanepa 2 , Lalitpur</p>
                        <p><strong>TELEPHONE:</strong> +977 9801326496</p>
                        <p><strong>EMAIL:</strong> yadavpramesh118@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="{{url('/') }}">Home</a></li>
                           <li><a href="{{url('about-us') }}">About</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Shopping</h3>
                        <ul>
                           <li><a href="{{url('show_order')}}">Order</a></li>
                           <li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>
                           <li><a href="{{url('products') }}">All Products</a></li>
                        </ul>
                     </div>
                  </div>   
                  <div class="col-md-5">
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
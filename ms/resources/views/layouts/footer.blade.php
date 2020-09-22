<footer>
    <div class="wrap-footer">
        <div class="box-container">
            <div class="cover-bg-color-op-footer"></div>
            <div class="footer-box ">
    

                <div class="contact-form-container">
                    <h1 class="h-1">GET IN TOUCH</h1>
                    <div class="contact-form">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                      @else
                        <form action="/home" method="POST">
                            @csrf
                      
                          <label for="name">Name <span>*</span></label>
                          <input type="text" id="name" required name="name" placeholder="Enter your name..">
                      
                          <label for="email">E-mail <span>*</span></label>
                          <input type="email" id="email" required name="email" placeholder="Enetr your e- mail">
                      
                          <label for="subject">Subject <span>*</span></label>
                          <input type="text" id="subject" required name="subject" placeholder="Enter your name..">
                      
                          <label for="message">Your Message <span>*</span></label>
                          <textarea id="message" required name="message" placeholder="Enetr your message..." ></textarea>
                      
                          <input type="submit" value="Send" class="btn-send" id="sendMessage">
                        
                        </form>
                        @endif
                    </div>
                </div>

            </div>
            <div class="footer-box">
                <div class="footer-small-box">
                   <h1>Also you can send an e-mail.</h1>
                   <ul>
                       <li> <a href="https://www.google.co.uk/maps/place/Plymouth/@50.3885326,-4.1826094,12z/data=!3m1!4b1!4m5!3m4!1s0x486c8d530e95ea3d:0x3b282cb5cef58593!8m2!3d50.3754565!4d-4.1426565"><span class="font-awesome"><i class="far fa-map"></i></span>  I live in Plymouth</a> </li>
                       <li><a href="mailto:szelag.maciej@gmail.com"><span class="font-awesome"><i class="far fa-envelope"></i></span>szelag.maciej@gmail.com</a></li>
                       <li></li>
                   </ul>
                </div>
                <div class="footer-small-box">
                    <ul class="ul-row">
                        <li><a href="https://www.facebook.com/szelag.maciej"><span class="scial-icon fb"><i class="fab fa-facebook"></i></span></a></li>
                        <li><a href=""><span class="scial-icon inst"><i class="fab fa-instagram"></i></span></a></li>
                        <li><a href=""><span class="scial-icon twit"><i class="fab fa-twitter"></i></span></a></li>
                    
                    </ul>
                </div>

            </div>
        </div>
        <div class="rights-box">
            <p><span>&copy;</span> {{date('Y')}} Maciej Szelag. All Rights Reserved. <a href="#">Privacy Policy</a></p>
        </div>




    </div>

</footer>

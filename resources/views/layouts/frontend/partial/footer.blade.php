<div class="auto-container">
  <!--Widgets Section-->
  <div class="widgets-section">
    <div class="row clearfix">

      <!--Column-->
      <div class="column col-lg-4 col-md-6 col-sm-12">
        <div class="footer-widget logo-widget">
          <div class="widget-content">
            <div class="footer-logo">
              <a href="index.html">
				        <img src="{{ asset('frontend/images/footer-logo.png') }}" data-src="{{ asset('frontend/images/footer-logo.png') }}">
			        </a>
            </div>
            <div class="text text-justify">
              {{ setting('meta_description') ?? old('meta_description') }}
            </div>
            <ul class="social-links clearfix">
              @if(!empty(setting('facebook')))
              <li>
                <a href="{{ setting('facebook') ?? old('facebook') }}" target="_blank"><span class="fab fa-facebook-f"></span></a>
              </li>
              @endif
              @if(!empty(setting('twiiter')))
              <li>
                <a href="{{ setting('twiiter') ?? old('twiiter') }}" target="_blank"><span class="fab fa-twitter"></span></a>
              </li>
              @endif
              @if(!empty(setting('linkedin')))
              <li>
                <a href="{{ setting('linkedin') ?? old('linkedin') }}" target="_blank"><span class="fab fa-linkedin"></span></a>
              </li>
              @endif
              @if(!empty(setting('instagram')))
              <li>
                <a href="{{ setting('instagram') ?? old('instagram') }}" target="_blank"><span class="fab fa-instagram"></span></a>
              </li>
              @endif
              @if(!empty(setting('youtube')))
              <li>
                <a href="{{ setting('youtube') ?? old('youtube') }}" target="_blank"><span class="fab fa-youtube"></span></a>
              </li>
              @endif
              @if(!empty(setting('pinterest')))
              <li>
                <a href="{{ setting('pinterest') ?? old('pinterest') }}" target="_blank"><span class="fab fa-pinterest"></span></a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </div>

      <!--Column-->
      <div class="column col-lg-4 col-md-6 col-sm-12">
        <div class="footer-widget info-widget">
          <div class="widget-content">
            <h3>Contacts</h3>
            <ul class="contact-info">
              <li>{{ setting('address') ?? old('address') }}</li>
              <li><a href="tel:{{ setting('telephone') ?? old('telephone') }}">{{ setting('telephone') ?? old('telephone') }}</a></li>
              <li><a href="mailto:{{ setting('email') ?? old('email') }}">{{ setting('email') ?? old('email') }}</a></li>
            </ul>
          </div> 
        </div>
      </div>

      <!--Column-->
      <div class="column col-lg-4 col-md-6 col-sm-12">
        <div class="footer-widget links-widget">
          <div class="widget-content">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="{{ route('donate') }}">Donate</a></li>
              <li><a href="{{ route('about') }}">About Us</a></li>
              <li><a href="#">What We Do</a></li>
              <li><a href="#">Our Partners</a></li>
            </ul>
          </div>  
        </div>
      </div>

    </div>
  </div>
</div>
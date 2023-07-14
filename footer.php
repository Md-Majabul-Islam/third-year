<footer class="page-footer" style="margin-top: 120px; box-shadow: 0px 0px 2px white; background-color: rgb(17,17,17)">
  <div class="row wide-container">
    <div class="col s3">
      <h4 class="white-text bold underline">Majebul Tech PC Electronics Shop</h4>
      <p class="grey-text text-lighten-4">Your favorite online PC Shop.</p>
    </div>
    <div class="col s2">
      <h5 class="white-text bold"  style=' text-decoration: underline'>Support</h5>
      <p><a class='dropdown-trigger white-text bold' href='#' data-target='dropdown1'>Customer Care 
        <i class='material-icons' style=' text-decoration: none !important; display: inline-flex; vertical-align: top;'>arrow_drop_down</i>
      </a></p>
      <ul id='dropdown1' class='dropdown-content white'>
        <li><a href='aboutUs.php' class='black-text bold'>About Us</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='contactUs.php' class='black-text bold'>Contact Us</a></li>
      </ul>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Find Us</h5>
      <p class="bold">
        Monday to Sunday : <br> 11.00am to 8.00pm
      </p>
      <p class="bold">
        GL-Road,Gonapara<br>
        Gopalganj Sadar <br> Dhaka, Bangladesh
      </p>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Social</h5>


      <a class="waves-effect waves-light pink lighten-1 btn" style="margin-top: 11px;" class="link-button" target="_blank" href="https://www.facebook.com/profile.php?id=100023389028639">Facebook</a>

      <a  class="waves-effect waves-light pink lighten-1 btn" style="margin-top: 7px;" class="link-button" target="_blank" href="https://www.linkedin.com/in/md-majabul-islam-5ab138249/">linkedin</a><br>

      <a  class="waves-effect waves-light pink lighten-1 btn" style="margin-top: 7px;" class="link-button" target="_blank" href="https://myaccount.google.com/">G-mail</a>
      

    </div>
    <div class="col s3">
      <h5 class="white-text bold ">Our Partners</h5>
      <img src="static/images/Partners.png" />
    </div>
  </div>
  <div class="footer-copyright" style="padding-bottom: 20px;">
    <div class="wide-container underline">© 2023 Majebul Tech PC Electronics Shop All rights reserved.</div>
  </div>

  <script>
    $(document).ready(function() {
      $('.dropdown-trigger').dropdown({
        coverTrigger: false
      });

      $('#pagination').pageMe({
        pagerSelector:'#myPager',
        activeColor: 'blue',
        prevText:'Previous',
        nextText:'Next',
        showPrevNext:true,
        hidePageNumbers:false,
        perPage:5
      });
      
    })
  </script>

</footer>
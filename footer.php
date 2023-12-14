<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="footer.css">

</html>
<footer class="page-footer" style="margin-top: 60px; box-shadow: 0px 0px 0px white; background-color: rgb(17,17,17)">
  <div class="row wide-container">
    <div class="col s3">
      <h4 class="white-text bold">LPA</h4>
      <p class="grey-text text-lighten-4">Your unique and favorite online store that deliver the best price.</p>
    </div>
    <div class="col s4">
      <h5 class="white-text bold">Support</h5>
      <p><a class='dropdown-trigger white-text bold' href='#' data-target='dropdown1'>Customer Care 
        <i class='material-icons' style=' text-decoration: none !important; display: inline-flex; vertical-align: top;'>arrow_drop_down</i>
      </a></p>
      <ul id='dropdown1' class='dropdown-content white'>
        <li><a href='aboutUs.php' class='black-text bold'>About Us</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='warranty_page.php' class='black-text bold'>Warranty</a></li>
        <li class='divider' tabindex='-1'></li>
        <li><a href='contactUs.php' class='black-text bold'>Contact Us</a></li>
      </ul>
    </div>
    <div class="col s2">
      <h5 class="white-text bold">Find Us</h5>
      <p class="bold">
        Monday to Sunday : <br> 10.00am to 8.00pm
      </p>
      <p class="bold">
         <br>
        Unit 2, 2 Wills Street
        North Lakes <br> QLD 4509, Australia
      </p>
    </div>
  <div class="footer-copyright" style="padding-bottom: 20px;">
    <div class="wide-container underline">© 2023 LPA OT Tech All rights reserved.</div>
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
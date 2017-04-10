

      <!-- Instagram Feed -->
      <div class="instagram-feed text-center">
        <h3 class="heading uppercase">Instagram</h3>
        <h5 class="heading uppercase mb-30">follow @ampdemo</h5>
        <ul id="instafeed-row"></ul>
      </div>


      <div class="widget-social">
        <div class="social-icons text-center">
          <a href="#">
            <i class="fa fa-instagram"></i>
            <span>instagram</span>
          </a>
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span>facebook</span>
          </a>
          <a href="#">
            <i class="fa fa-twitter"></i>
            <span>twitter</span>
          </a>
          <a href="#">
            <i class="fa fa-pinterest-p"></i>
            <span>pinterest</span>
          </a>
          <a href="#">
            <i class="fa fa-rss"></i>
            <span>rss</span>
          </a>
        </div>
      </div>


      <!-- Footer Type-1 -->
      <footer class="footer footer-type-1 bg-dark">
        <div class="bottom-footer">
          <div class="container">
            <div class="row">

              <div class="col-sm-12 copyright text-center">
                <span>
                  © 2017 AMP Demo 
                </span>
              </div>

            </div>
          </div>
        </div>
      </footer> <!-- end footer -->


      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </div> <!-- end main wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

  <!-- Instafeed -->
  <script type="text/javascript">
    $(window).load(function() {

      var InstafeedRow = new Instafeed({
          target: 'instafeed-row',
          get: 'user',
          userId: '3562688430',
          accessToken: '3562688430.ceddd6d.c54fa5142fa847f89827e5cf9b19d885',
          resolution: 'low_resolution',
          limit: '6',
          template: '<li class="instagram-item"><a target="_blank" href="{{link}}"><img class="instagram-img" alt="Instagram Image" src="{{image}}"/></a></li>'
      });

      InstafeedRow.run();

    });
  </script>
    
</body>
</html>
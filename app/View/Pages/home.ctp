<? 
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

// echo $this->element('header');
App::uses('Debugger', 'Utility');

// December 5th 
// 
?>
<div id="main" class="container-fluid drop" style="z-index:100;">
 <div class='row opaque'>
    <div class='col-sm-12 drop'>
      <div class='carousel slide' data-ride='carousel' id='homepageCarousel'>
       <!--  <ol class='carousel-indicators'>
          <li class='active' data-slide-to='0' data-target='#homepageCarousel'></li>
          <li class='active' data-slide-to='1' data-target='#homepageCarousel'></li>
          <li class='active' data-slide-to='2' data-target='#homepageCarousel'></li>
        </ol> -->
        <div style="width:auto; height:100%" class='carousel-inner'>
          <div class='item active'>
            <img alt='' src='/img/slideshow/lt220.jpg'>
            <div class='carousel-caption'>
              <h3 class="">Friday, Feb 20th 2015</h3>
            </div>
          </div>
          <div class='item'>
            <img alt='' src='/img/slideshow/ltdrinks.jpg'>
            <div class='carousel-caption'>
            </div>
          </div>
          <div class='item'>
            <img alt='' src='/img/slideshow/ltparty.jpg'>
          </div>
          <div class='item'>
            <img alt='' src='/img/slideshow/ltfooddrink.jpg'>
          </div>
          <div class='item'>
            <img alt='' src='/img/slideshow/ltfacebook.jpg'>
          </div>
          <div class='item'>
            <img alt='' src='/img/slideshow/ltsushi.jpg'>
          </div>
          <div class='item'>
            <img alt='' src='/img/slideshow/lttoon.jpg'>
          </div>
        </div>
      </div>
        <a class='left carousel-control' data-slide='prev' href='#homepageCarousel' role='button'>
          <span class='glyphicon glyphicon-chevron-left'></span>
        </a>
        <a class='right carousel-control' data-slide='next' href='#homepageCarousel' role='button'>
          <span class='glyphicon glyphicon-chevron-right'></span>
        </a> 
    </div> 								
  </div>
</div>
<!-- //red2-bg -->
<div>
  <div class="container drop bg-paper">
  	<div class="row padv50">
      <div class="col-sm-8">
          
         <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#specials" role="tab" data-toggle="tab">Specials</a></li>
            <li><a href="#reviews" role="tab" data-toggle="tab">Testimonials</a></li> 
         </ul>   
         <div class="tab-content">
            <div class="tab-pane active" id="specials">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h2 class="uline">Specials @ Little Tokyo Lounge</h2>
                  <hr />
                  <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                      <ul>
                        <li><h3>Monday</h3></li>
                        <ul>
                          <li>
                            <strong>$4.99 Chicken or Veggies</strong> <br />
                            Dine in only (HWY 52 location only) <br />
                            Delivery all night, Open until 12:00am
                          </li>
                        </ul>
                        <li><h3>Tuesday</h3></li>
                        <ul>
                          <li>
                            <strong>Half Off Select Sushi</strong> <br />
                            <i> (Changes monthly)</i> <br />
                            1/2 off select Sushi 4:00pm-9:00pm <br />
                            Dine in only (HWY 52 location only) <br />
                            Delivery all night, Open until 12:00am
                          </li>
                        </ul>
                          <li><h3>Wednesday</h3></li>
                        <ul>
                          <li>
                          <strong>Jumbo Wings 50 cents & $10 domestic buckets </strong> <br />
                            Dine in only (HWY 52 location only) <br />
                            Free poker, win prizes <br />
                            Delivery all night, Open until 2:00 am
                          </li>
                        </ul>
                        <li><h3>Thursday</h3></li>
                        <ul>
                          <li>
                            <strong>Half Off Select Sushi</strong> <br />
                            <i> (Changes monthly)</i> <br />
                            1/2 off select Sushi 4:00pm-9:00pm <br />
                            Dine in only (HWY 52 location only) <br />
                            Delivery all night, Open until 12:00am
                          </li>
                          </li>
                        </ul>
                        <li><h3>Friday</h3></li>
                        <ul>
                          <li>
                            <strong>Awesome Rotating Drink Specials</strong> <br />
                            DJ or live band & Drink specials <br />
                            Dine in only (HWY 52 location only) <br />
                            Delivery all night, Open until 2:00am
                          </li>
                        </ul>
                        <li><h3>Saturday</h3></li>
                        <ul>
                          <li>
                            <strong>Awesome Rotating Drink Specials</strong> <br />
                            DJ or live band & Drink specials <br />
                            Dine in only (HWY 52 location only) <br />
                            Delivery all night, Open until 2:00am
                          </li>
                        </ul>
                        <li><h3>Sunday</h3></li>
                        <ul>
                          <li>
                          <strong>Jumbo Wings 50 cents & $10 domestic buckets </strong> <br />
                            Dine in only (HWY 52 location only) <br />
                            Free poker, win prizes <br />
                            Delivery all night, Open until 2:00 am
                          </li>
                        </ul>
                      </ul>
                    </div>    
                  </div>
                </div>
              </div>
          </div>
          <div class="tab-pane" id="reviews">
            <div class="panel panel-default">
              <div class="panel-body">
                <h2>Reviews</h2>
                <blockquote>Little Tokyo is the best restaurant ever!</blockquote>
                <blockquote>I never want to eat anywhere else!</blockquote>
                <blockquote>They have the best dancing on the weekends!</blockquote>
                <blockquote>Being in college is tough, but coming to Litle Tokyo always feels like home!</blockquote>
              </div>
            </div>
          </div>
             
        </div>
      </div>


      <div class="col-sm-4">
         <a class="twitter-timeline"  href="https://twitter.com/LittleTokyo1"  data-widget-id="385932566923984897">Tweets by @LittleTokyo1</a>
         <!--  <div id="fb-root"></div>
          <div class="fb-like-box" data-href="https://www.facebook.com/littletokyo1" data-width="360" data-height="450" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false">
          </div> -->

      </div>
    </div>
  </div>
</div>
    <script type="text/javascript">
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}
    (document,"script","twitter-wjs");
  </script>
  <script type="text/javascript">
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</div>

<? 
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

// echo $this->element('header');
App::uses('Debugger', 'Utility');

// December 5th 
// 
?>
<div id="main" class="container-fluid bg-circles drop" style="z-index:100;">
 <div class='row opaque'>
    <div class='col-sm-12 drop'>
      <div class='carousel slide' data-ride='carousel' id='homepageCarousel'>
        <ol class='carousel-indicators'>
          <li class='active' data-slide-to='0' data-target='#homepageCarousel'></li>
          <li class='active' data-slide-to='1' data-target='#homepageCarousel'></li>
          <li class='active' data-slide-to='2' data-target='#homepageCarousel'></li>
        </ol>
        <div style="height:auto;" class='carousel-inner'>
          <div class='item active'>
            <img alt='' src='/img/pano.png'>
            <div class='carousel-caption'>
              <h3>Little Tokyo near Walmart</h3>
            </div>
          </div>
          <div class='item'>
           <!--  <img alt='' src='img/image_2.png'> -->
            <img alt='' src='https://scontent-a.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10689827_853324391365839_4446574699432796339_n.jpg?oh=842066b2933c60b5b79b5e84f50af284&oe=551AEE4E'>
            <div class='carousel-caption'>
              <h3></h3>
            </div>
          </div>
           <div class='item'>
            <img alt='' src='https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xfa1/t31.0-8/s960x960/10818489_856151924416419_8623894306244354937_o.jpg'>
            <div class='carousel-caption'>
              <h3></h3>
            </div>
          </div>
          <div class='item'>
            <img alt='' src='https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/1655976_857088407656104_5538640408031701386_n.jpg?oh=31d010cd2c9a81a8bfe284f5b3fd621c&oe=551E1989&__gda__=1428066484_a9dffbd78e479e404253632de6d2c7c3'>
            <div class='carousel-caption'>
              <h3></h3>
            </div>
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
<div class="bg-pink">
  <div class="container drop bg-white">
  	<div class="row padv50">
      <div class="col-sm-8">
          
         <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#specials" role="tab" data-toggle="tab">Specials</a></li>
            <li><a href="#events" role="tab" data-toggle="tab">Upcoming Events</a></li>
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
                            <h3> </h3>
                            <strong>$4.99 Chicken or Vegetable Soba </strong> <br /><i>Dine in only</i>
                          </li>
                        </ul>
                        <li><h3>Tuesday</h3></li>
                        <ul>
                          <li><strong>Half Off Select Sushi</strong></li>
                        </ul>
                        <li><h3>Wednesday</h3></li>
                        <ul>
                          <li><strong>Jumbo Wings 50 cents</strong></li>
                        </ul>
                        <li><h3>Thursday</h3></li>
                        <ul>
                          <li><strong>Half Off Select Sushi</strong></li>
                        </ul>
                        <li><h3>Friday - Sunday</h3></li>
                        <ul>
                          <li><strong>Awesome Rotating Drink Specials</strong></li>
                        </ul>
                      </ul>
                    </div>    
                  </div>
                </div>
              </div>
          </div>
          <div class="tab-pane" id="events">
            <div class="panel panel-default">
              <div class="panel-body">
                <h2>Calendar</h2>
               <iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=j5p27jhc2tb69a2ku99g9l73ks%40group.calendar.google.com&amp;color=%2342104A&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
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

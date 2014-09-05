<? 
if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

// echo $this->element('header');
App::uses('Debugger', 'Utility');
?>
<div class="container-fluid">
 <div class='row opaque'>
    <div class='col-sm-12'>
      <div class='carousel slide' data-ride='carousel' id='homepageCarousel'>
        <ol class='carousel-indicators'>
          <li class='active' data-slide-to='0' data-target='#homepageCarousel'></li>
          <li class='active' data-slide-to='1' data-target='#homepageCarousel'></li>
          <li class='active' data-slide-to='2' data-target='#homepageCarousel'></li>
        </ol>
        <div class='carousel-inner'>
          <div class='item active'>
            <img alt='' src='http://placehold.it/960x400'>
            <div class='carousel-caption'>
              <h3>Just saying hello</h3>
            </div>
          </div>
          <div class='item'>
            <img alt='' src='http://placehold.it/960x400'>
            <div class='carousel-caption'>
              <h3>Hello Hello hellllooooooo</h3>
            </div>
          </div>
          <div class='item'>
            <img alt='' src='http://placehold.it/960x400'>
            <div class='carousel-caption'>
              <h3>Say goodbye i say hello</h3>
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
  <div class="container">
  	<div class="row mtop">
	    <div class="col-sm-4">
	    	<h2>Lorem ipsum Voluptate tempor eu mollit consequat laborum.</h2>
	    	<p>Lorem ipsum In qui ut minim consequat aute deserunt enim in esse in fugiat dolor do sunt laborum commodo labore dolor Duis laborum amet ut do commodo do Duis dolor minim in adipisicing ullamco in culpa.</p>
	    </div>
	    <div class="col-sm-4">
	    	<h2>Lorem ipsum Sit anim ex tempor.</h2>
	    	<p>Lorem ipsum Sunt Ut ut tempor in adipisicing incididunt amet do voluptate occaecat dolor non dolore dolore veniam cupidatat ullamco reprehenderit eu culpa velit.</p>
	    </div>
	    <div class="col-sm-4">
	    	<h2>Lorem ipsum Adipisicing laboris officia.</h2>
	    	<p>Lorem ipsum Officia ea nulla Duis voluptate in occaecat Ut non est adipisicing velit pariatur officia ut cupidatat amet adipisicing labore Ut officia amet quis enim ut nulla et culpa anim Ut anim.</p>
	    </div>
  	</div>
  </div>
</div>
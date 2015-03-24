
<div id="carousel-example-generic" class="carousel slide home-carousel" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spring_2015_slides/spring_2015_feature.jpg" alt="...">
      <div class="carousel-caption">
Feature
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spring_2015_slides/spring_2015_recipes.jpg" alt="...">
      <div class="carousel-caption">
Recipes
      </div>
    </div>
 <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spring_2015_slides/spring_2015_dist_list.jpg" alt="...">
      <div class="carousel-caption">
Distibution
      </div>
    </div>
  <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spring_2015_slides/spring_2015_advertise.jpg" alt="...">
      <div class="carousel-caption">
Advertise
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
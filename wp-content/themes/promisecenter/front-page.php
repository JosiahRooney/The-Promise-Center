<?php get_header(); ?>

  <div class="hero">

    <div class="hero__message">

      <div class="container">

        <h2>Real People, Real Promises</h2>

      </div>

    </div>

    <div class="hero__footer">

      <div class="social-icons">

        <div class="social-icon">
          <a href="#">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
          </a>
        </div>

        <div class="social-icon">
          <a href="#">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>

        <div class="social-icon">
          <a href="#">
            <i class="fa fa-vimeo-square" aria-hidden="true"></i>
          </a>
        </div>

        <div class="social-icon social-icon-phone">
          <a href="#">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </a>
        </div>

        <div class="social-icon">
          <a href="#">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </a>
        </div>

      </div> <!-- social-icons -->

    </div> <!-- hero__footer -->

  </div> <!-- hero -->

  <div class="services">

    <div class="container">

      <div class="row">

        <h2 class="service-times-title text-center">New Here?</h2>

        <div class="service-times">

          <p class="lead text-center">Service times &mdash; Every Sunday</p>

          <div class="col-md-6">
            <div class="service-time">
              8:45 am
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-time">
              11:15 am
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-time">
              10 am
            </div>
          </div>

          <div class="col-md-6">
            <div class="service-time">
              12:30 pm
            </div>
          </div>

        </div> <!-- service-times -->

      </div> <!-- row -->

    </div> <!-- container -->

  </div> <!-- services -->

  <div class="sermons">

    <div class="container">

      <div class="row">

        <h2 class="sermons-title text-center">Last Week</h2>

        <div class="sermon text-center">

          <div class="responsive-iframe-container">

            <iframe src="https://player.vimeo.com/video/227808508" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

          </div>

          <p class="sermon-caption lead">Sometimes, the storms in your life lead you towards what you’re running from.</p>

        </div> <!-- sermon -->

        <div class="more-sermons text-center">

          <a href="#"><button class="btn btn-lg btn-info" type="button" name="button">More Sermons <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>

        </div> <!-- more-sermons -->

      </div> <!-- row -->

    </div> <!-- container -->

  </div> <!-- sermons -->

  <div class="events">

    <div class="container">

      <div class="row">

        <h2 class="events-title text-center">Coming Up <small><?php echo date("F jS, Y");?></small></h2>

        <div class="event well">

          <div class="event-date text-center col-sm-3">

            <i class="fa fa-calendar-o" aria-hidden="true"></i>

            <div class="event-date-inner">

              <div class="event-date-number">13</div>

              <div class="event-date-month">Aug</div>

            </div>

          </div>

          <div class="event-info col-sm-9">

            <img class="event-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/growth-track.jpg" alt="">

            <h3 class="event-title">Growth Track &mdash; Step One</h3>

            <p>Sunday | 12:30 pm </p>

            <p class="event-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <a href="#"><button class="btn btn-lg btn-success" type="button" name="button">More Info <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>

          </div>

          <div class="clearfix"></div>

        </div>

        <div class="event well">

          <div class="event-date event-date-smaller text-center col-sm-3">

            <i class="fa fa-calendar-o" aria-hidden="true"></i>

            <div class="event-date-inner">

              <div class="event-date-number">20</div>

              <div class="event-date-month">Aug</div>

            </div>

          </div>

          <div class="event-info col-sm-6">

            <h3 class="event-title">Growth Track &mdash; Step Two <small>Sunday | 12:30 pm</small></h3>

            <p class="event-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

          </div>

          <div class="col-sm-3">

            <a href="#"><button class="btn btn-success" type="button" name="button">More Info <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>

          </div>

          <div class="clearfix"></div>

        </div>

        <div class="event well">

          <div class="event-date event-date-smaller text-center col-sm-3">

            <i class="fa fa-calendar-o" aria-hidden="true"></i>

            <div class="event-date-inner">

              <div class="event-date-number">27</div>

              <div class="event-date-month">Aug</div>

            </div>

          </div>

          <div class="event-info col-sm-6">

            <h3 class="event-title">Growth Track &mdash; Step Three <small>Sunday | 12:30 pm</small></h3>

            <p class="event-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

          </div>

          <div class="col-sm-3">

            <a href="#"><button class="btn btn-success" type="button" name="button">More Info <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>

          </div>

          <div class="clearfix"></div>

        </div>

        <div class="more-events text-center">

          <a href="#"><button class="btn btn-lg btn-danger" type="button" name="button">More Events <i class="fa fa-caret-right" aria-hidden="true"></i></button></a>

        </div> <!-- more-sermons -->

      </div>

    </div>

  </div> <!-- events -->

  <div class="groups">

    <div class="container">

      <div class="row">

        <h2 class="groups-title text-center">Groups</h2>

        <p class="lead text-center">We are not a church that has small groups, we are a church of small groups.</p>

        <div class="groups-grid">

          <div class="groups-action col-md-4">

            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/unsplash/get-info.jpg" alt=""></a>

            <a class="btn btn-lg btn-success btn-block" href="#">Get Info</a>

          </div>

          <div class="groups-action col-md-4">

            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/small-groups.jpg" alt=""></a>

            <a class="btn btn-lg btn-success btn-block" href="#">Join</a>

          </div>

          <div class="groups-action col-md-4">

            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lead.jpg" alt=""></a>

            <a class="btn btn-lg btn-success btn-block" href="#">Lead</a>

          </div>

        </div>

      </div>

    </div>

  </div> <!-- groups -->

  <div class="give">

    <div class="container">

      <div class="row">

      </div>

    </div>

  </div> <!-- give -->

  <div class="app">

    <div class="container">

      <div class="row">

      </div>

    </div>

  </div> <!-- app -->

  <div class="about">

    <div class="container">

      <div class="row">

      </div>

    </div>

  </div> <!-- about -->

  <div class="footer">

    <div class="container">

      <div class="row">

      </div>

    </div>

  </div> <!-- footer -->

<?php get_footer(); ?>

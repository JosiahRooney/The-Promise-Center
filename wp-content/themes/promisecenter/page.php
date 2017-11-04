<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section id="content" class="content" role="main">

    <header class="header">

      <div class="overlay">

        <div class="container">

          <div class="row">

            <h1 class="entry-title"><?php the_title(); ?></h1> <?php # edit_post_link(); ?>

          </div>

        </div>

      </div>

    </header>

    <div class="banner">

      <div class="container">

        <div class="row">

          <div class="video-placeholder col-md-6 col-md-offset-3">



          </div>

        </div>

      </div>

    </div>

    <div class="container">

      <div class="row">

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>

          <section class="entry-content">

            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

            <?php the_content(); ?>

            <div class="entry-links"><?php wp_link_pages(); ?></div>

          </section>

        </article>

      </div>

      <?php if ( ! post_password_required() ) comments_template( '', true ); ?>

    </div>

  </section>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

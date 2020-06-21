
<?php get_header( ); ?>

<div id="primary" class="content-area">
    <h1><?php single_post_title( 'Post: ' ); ?>
      
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content' ); ?>

    <?php endwhile; else: ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>


<p>Template: index.php</p>

    </main>

<?php get_sidebar(); ?>

<?php get_footer( ); ?>

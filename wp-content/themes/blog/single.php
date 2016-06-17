<?php get_header(); ?>
    <div class="bg-slider">
        <div class="container">
            <?php the_title('<h1 class="title">', '</h1>'); ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row bg-white single-padding">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_post_thumbnail('large', array('class' => 'img-responsive img-rounded')); ?>
                    <?php the_content(); ?>
                    <?php endwhile; else : ?>
                    <p><?php _e( 'Przepraszamy, w tej chwili nie ma żadnych wpisów na stronie.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
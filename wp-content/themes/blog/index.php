<?php get_header(); ?>
<!--SLIDER-->
<div class="bg-slider">
    <div class="container">
        <h1 class="title"><?php single_cat_title('', true); ?>
        </h1>
    </div>
</div>
</div>
<!--CONTENT-->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="row bg-white">
                <div class="col-sm-5">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large', array('class' => 'img-responsive img-rounded')); ?>
                    </a>
                </div>
                <div class="col-sm-7">
                    <a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>'); ?></a>
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-default btn-home-more" role="button">Czytaj więcej</a></p>
                </div>
            </div>
            <?php endwhile; else : ?>
            <p><?php _e( 'Przepraszamy, w tej chwili nie ma żadnych wpisów na stronie.' ); ?></p>
            <?php endif; ?>
        </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
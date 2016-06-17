<?php get_header(); ?>
    <div class="bg-slider">
        <div class="container">
            <div class="flexslider">
                <ul class="slides">
                    <?php $posts = query_posts('cat=1&showposts=2'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <li>
                        <div class="row">
                            <div class="col-md-6">
                                <?php the_title('<h1>', '</h1>'); ?>
                                <p><?php the_excerpt(); ?></p>
                                <button type="button" class="btn btn-default btn-lg"><a href="<?php the_permalink(); ?>">Zobacz więcej</a></button>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <?php the_post_thumbnail('large', array('class' => 'img-responsive img-thumbnail')); ?>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; else : ?>
                    <p><?php _e( 'Przepraszamy, w tej chwili nie ma żadnych wpisów na stronie.' ); ?></p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php $posts = query_posts('cat=1'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row bg-white">
                        <div class="col-sm-5">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', array('class' => 'img-responsive img-rounded')); ?>
                            </a>
                        </div>
                        <div class="col-sm-7">
                            <a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' ); ?>
                            </a>
                            <?php the_excerpt(); ?>
                            <p><a href="<?php the_permalink(); ?>" class="btn btn-default btn-home-more" role="button">Czytaj więcej</a> </p>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                <p><?php _e( 'Przepraszamy, w tej chwili nie ma żadnych wpisów na stronie.' ); ?></p>
                <?php endif; ?>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
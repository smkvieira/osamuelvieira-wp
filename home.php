<?php get_header(); ?>
<!-- Listagem de posts -->

<section>
    <div class="container corpo-pagina">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post-container">
        <div class="post-img-destaque">
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>">
            </a>
        </div>
        <div class="post-content">
            <div class="post-meta-info">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <h1 class="post-titulo texto-g cor-c9"><?php the_title(); ?></h1>
                </a>
                <p class="post-data texto-s cor-c7">Publicado em <?php echo get_the_date(); ?></p>
                <p class="post-excerpt texto-m cor-c7"><?php the_excerpt(); ?></p>
            </div>
        </div>
    </div>
    
    <?php endwhile; else: ?>
        <div class="conteudo-pagina texto-m cor-c7">
            <p>Não há nada para exibir.</p>
        </div>
    <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
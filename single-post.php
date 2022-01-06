<?php get_header(); ?>
<!-- Post único -->


<section>
    <div class="corpo-pagina">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="post-header">
        <div class="post-faturedimage" style="background: linear-gradient(rgba(255,255,255,1), rgba(0,0,0,0.7)), url('<?php echo get_the_post_thumbnail_url(); ?>');background-size: cover;background-position: center;">
            <div class="post-header-meta">
                <p class="post-data texto-s cor-c1">Publicado em <?php echo get_the_date(); ?></p>
                <h1 class="texto-xg cor-c1 post-header-titulo"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="conteudo-pagina texto-m cor-c7 container">
        <?php the_content(); ?>
    </div>
    
        
    <?php endwhile; else: ?>
        <div class="conteudo-pagina texto-m cor-c7">
            <p>Não há nada para exibir.</p>
        </div>
    <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
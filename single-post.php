<?php get_header(); ?>
Usando single-post

<section>
    <div class="container corpo-pagina">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="titulo-pagina">
        <h1 class="texto-xg cor-c9"><?php the_title(); ?></h1>
    </div>
    <div class="conteudo-pagina texto-m cor-c7">
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
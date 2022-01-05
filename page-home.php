<?php
    //Template Name: Homepage
?>

<?php get_header(); ?>
<section class="hero">
<div class="hero container" id="perfil">
    <div class="hero-perfil">
    <img src="<?php the_field('imagem') ?>">
    </div>
    <div class="hero-info">
    <div class="hero-info-icons">
        <a href="http://instagra.com/speixoto_" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/instagram.svg" alt="instagram" class="hero-info-icon"></a>
        <a href="https://www.linkedin.com/in/samuel-p-vieira/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/linkedin.svg" alt="linkedin" class="hero-info-icon"></a>
        <a href="https://twitter.com/speixoto_" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/twitter.svg" alt="Twiter" class="hero-info-icon"></a>
        <a href="https://github.com/smkvieira" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/github.svg" alt="github" class="hero-info-icon"></a>
        <a href="https://dribbble.com/smkvieira" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/dribble.svg" alt="dribble" class="hero-info-icon"></a>
        <a href="https://www.behance.net/speixoto_" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/behance.svg" alt="behance" class="hero-info-icon"></a>
    </div>
    <div class="hero-info-main">
        <h1 class="texto-xxg cor-c9"><?php the_field('headline') ?></h1>
        <span class="texto-g cor-c7"><?php the_field('localizacao') ?></span>
    </div>
    </div>
</div>
</section>

<section id="experiencias" class="padding">
    <div class="experiencias container">
        <div class="section-title">
            <h2 class="texto-categoria cor-d1"><?php the_field('experiencia_titulo') ?></h2>
        </div>
        <div class="section-body texto-g cor-c7">
            <div class="linha">
                <p><?php the_field('experiencia_descricao') ?></p>
            </div>
            <ul class="experiencias-cards">
                <?php
                    $experiencias = get_field('experiencias');
                    if (isset($experiencias)) { foreach ($experiencias as $experiencia) {?>
                    <li class="experiencias-card-item">
                        <div class="experiencias-meta">
                            <div class="experiencias-meta-empresa">
                                <h3 class="texto-g-b cor-c7"><?php echo $experiencia['empresa']; ?></h3>
                                <p class="texto-g-b cor-c4"><?php echo $experiencia['cargo']; ?></p>
                            </div>
                            <div class="texto-m cor-c4 experiencias-meta-ano">
                                <p><?php echo $experiencia['ano']; ?></p>
                            </div>
                        </div>
                        <div class="texto-m cor-c7 experiencias-content">
                            <p><?php echo $experiencia['atribuicoes']; ?></p>
                        </div>
                    </li>
                <?php } } ?>
            </ul>
        </div>
    </div>
</section>

<section id="formacao" class="dark-bg padding">
    <div class="container formacao">
        <div class="section-title">
            <h2 class="texto-categoria cor-d1"><?php the_field('formacao_titulo') ?></h2>
        </div>
        <div class="section-body">
            <ul class="formacao-cards">
            <?php
                $formacoes = get_field('formacoes');
                if (isset($formacoes)) { foreach ($formacoes as $formacao) {?>
                <li class="formacao-cards-item">
                    <h3 class="texto-m-2 cor-c7 nome"><?php echo $formacao['area']; ?></h3>
                    <p class="texto-m cor-c5 local"><?php echo $formacao['instituicao']; ?></p>
                    <p class="texto-g-b cor-c6 tipo"><?php echo $formacao['tipo']; ?></p>
                </li>
                <?php } } ?>
            </ul>
            <div class="formacao-cursos">
                <h3 class="texto-g-b cor-c1">Cursos</h3>
                <ul class="texto-m cor-c2">
                <?php
                    $cursos = get_field('cursos');
                    if (isset($cursos)) { foreach ($cursos as $curso) {?>
                    <li class="<?php echo $curso['status'] ?>"><?php echo $curso['nome']; ?></li>
                    <?php } } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="contato" class="padding">
<div class="contato container">
    <div class="section-title">
    <h2 class="texto-categoria cor-d1">Fale comigo</h2>
    </div>
    <div class="section-body">
    <p class="texto-xg-b cor-c7">Caso queira falar comigo, pode me mandar um e-mail que te respondo ;)</p>
    <p class="texto-xg cor-c7"><a href="mailto:samuelpeixotovieira@gmail.com">samuelpeixotovieira<wbr>@gmail.com</a></p>
    <div class="hero-info">
        <div class="hero-info-icons">
        <a href="http://instagra.com/speixoto_" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/instagram.svg" alt="instagram" class="hero-info-icon"></a>
        <a href="https://www.linkedin.com/in/samuel-p-vieira/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/linkedin.svg" alt="linkedin" class="hero-info-icon"></a>
        <a href="https://twitter.com/speixoto_" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/twitter.svg" alt="Twiter" class="hero-info-icon"></a>
        <a href="https://github.com/smkvieira" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/github.svg" alt="github" class="hero-info-icon"></a>
        <a href="https://dribbble.com/smkvieira" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/dribble.svg" alt="dribble" class="hero-info-icon"></a>
        <a href="https://www.behance.net/speixoto_" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/behance.svg" alt="behance" class="hero-info-icon"></a>
        </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>
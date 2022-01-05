<?php
    //Template Name: Homepage
?>

<?php get_header(); ?>
Usando Template Home
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
            <h2 class="texto-categoria cor-d1">Experiências</h2>
        </div>
        <div class="section-body texto-g cor-c7">
            <div class="linha">
                <p>Analista Sênior de <strong>SEO técnico</strong> aprendendo mais sobre o mundo de desenolvimento <strong>front end.</strong></p>
            </div>

    <?php $experiencias = get_field('experiencias');  ?>
        <?php if (isset($experiencias)) { ?>
            <ul class="experiencias-cards">
            <?php foreach ($experiencias as $experiencia){ ?>
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
                    <p><?php echo $experiencia['descricao']; ?></p>
                </div>
            </li>
            <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>

<section id="formacao" class="dark-bg padding">
<div class="container formacao">
    <div class="section-title">
    <h2 class="texto-categoria cor-d1">Formação</h2>
    </div>
    <div class="section-body">
    <ul class="formacao-cards">
        <li class="formacao-cards-item">
        <h3 class="texto-m-2 cor-c7 nome">Análise e Desenvolvimento de Sistemas</h3>
        <p class="texto-m cor-c5 local">Universidade Estácio de Sá</p>
        <p class="texto-g-b cor-c6 tipo">Graduação</p>
        </li>
        <li class="formacao-cards-item">
        <div class="formacao-cards-item-meta">
            <h3 class="texto-m-2 cor-c7 nome">Análise e Desenvolvimento de Sistemas</h3>
            <p class="texto-m cor-c5 local">Fundação Instituto Tecnológico de Osasco</p>
        </div>
        <p class="texto-g-b cor-c6 tipo">Ensino Técnico</p>
        </li>
    </ul>
    <div class="formacao-cursos">
        <h3 class="texto-g-b cor-c1">Cursos</h3>
        <ul class="texto-m cor-c2">
        <li class="andamento">UI/UX Design e Front End - Origamid</li>
        <li class="andamento">Fullstack - B7Web</li>
        <li class="concluido">Curso de SEO - Consultoria Digital</li>
        <li class="concluido">Checklist SEO - Rafael Rez</li>
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
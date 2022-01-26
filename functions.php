<?php

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );

    //Limitando o tamanho do excerpt
    function custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length');

    /***********************************************************************
    *                                                                      *
    *                                                                      *
    *             FUNÇÕES DO PLUGIN DE CUSTOM FIELDS CMB2 *                *
    *                                                                      *
    *                                                                      *
    ************************************************************************/

    require_once(get_template_directory() . '/includes/tgmpa/tgmpa-configuration.php');

    function get_field($key, $page_id = 0){
        $id = $page_id !== 0 ? $page_id : get_the_ID(); //Se $page_id for diferente de 0, pega o page ID que a pessoa passou na função get_field
        return get_post_meta($id, $key, true);
    }

    function the_field($key, $page_id = 0){
        echo get_field ($key, $page_id);
    }

    /************************************
     *                                  *
     * HOMEPAGE                         *
     *                                  *
    *************************************/
    // ************** PERFIL
    add_action('cmb2_admin_init', 'cmb2_fields_home');
    // array('item1', 'item2') === ['item1', 'item2']
    function cmb2_fields_home() {
        // Adiciona um bloco
        $cmb_perfil = new_cmb2_box([
            'id' => 'box_home_perfil', // id deve ser único
            'title' => 'Área de Perfil',
            'object_types' => ['page'], // tipo de post
            'show_on' => [
                'key' => 'page-template',
                'value' => 'page-home.php',
            ], // modelo de página
        ]);

        // Adiciona um campo ao bloco criado
        $cmb_perfil->add_field([
            'name' => 'Imagem',
            'desc' => 'Tamanho recomendado: 360x360px',
            'id' => 'imagem',
            'type' => 'file',
            'options' => [
                'url' => false,
            ],
        ]);
        $cmb_perfil->add_field([
            'name' => 'Headline',
            'desc' => 'Frase de destaque',
            'id' => 'headline',
            'type' => 'text',
        ]);
        $cmb_perfil->add_field([
            'name' => 'Localização',
            'id' => 'localizacao',
            'type' => 'text',
        ]);





        // ************** EXPERIÊNCIAS
        $cmb_experiencias = new_cmb2_box([
            'id' => 'box_home_experiencias', // id deve ser único
            'title' => 'Área de Experiências',
            'object_types' => ['page'], // tipo de post
            'show_on' => [
                'key' => 'page-template',
                'value' => 'page-home.php',
            ], // modelo de página
        ]);

        $cmb_experiencias->add_field([
            'name' => 'Título',
            'id' => 'experiencia_titulo',
            'type' => 'text',
        ]);

        $cmb_experiencias->add_field([
            'name' => 'Descrição',
            'id' => 'experiencia_descricao',
            'type' => 'text',
        ]);

        $experiencias = $cmb_experiencias->add_field([
            'name' => 'Experiências',
            'id' => 'experiencias',
            'type' => 'group',
            'repeatable' => true,
            'options' => [
                'group_title' => 'Experiência {#}',
                'add_button' => 'Adicionar nova experiência',
                'remove_button' => 'Remover experiência',
                'sortable' => true,
            ],
        ]);

        $cmb_experiencias->add_group_field($experiencias,[
            'name' => 'Empresa',
            'id' => 'empresa',
            'type' => 'text',
        ]);
        $cmb_experiencias->add_group_field($experiencias,[
            'name' => 'Cargo',
            'id' => 'cargo',
            'type' => 'text',
        ]);
        $cmb_experiencias->add_group_field($experiencias,[
            'name' => 'Ano',
            'id' => 'ano',
            'type' => 'text_small',
        ]);
        $cmb_experiencias->add_group_field($experiencias,[
            'name' => 'Descrição das atribuições',
            'id' => 'atribuicoes',
            'type' => 'textarea',
        ]);





        // ************** Formação
        $cmb_formacao = new_cmb2_box([
            'id' => 'box_home_formacao', // id deve ser único
            'title' => 'Área de Formação',
            'object_types' => ['page'], // tipo de post
            'show_on' => [
                'key' => 'page-template',
                'value' => 'page-home.php',
            ], // modelo de página
        ]);

        $cmb_formacao->add_field([
            'name' => 'Título',
            'id' => 'formacao_titulo',
            'type' => 'text',
        ]);

        $formacoes = $cmb_formacao->add_field([
            'name' => 'Formações',
            'id' => 'formacoes',
            'type' => 'group',
            'repeatable' => true,
            'options' => [
                'group_title' => 'Formação {#}',
                'add_button' => 'Adicionar nova formação',
                'remove_button' => 'Remover formação',
                'sortable' => true,
            ],
        ]);

        $cmb_formacao->add_group_field($formacoes,[
            'name' => 'Área',
            'id' => 'area',
            'type' => 'text',
        ]);
        $cmb_formacao->add_group_field($formacoes,[
            'name' => 'Instituição',
            'id' => 'instituicao',
            'type' => 'text',
        ]);
        $cmb_formacao->add_group_field($formacoes,[
            'name' => 'Tipo de formação',
            'id' => 'tipo',
            'type' => 'text',
        ]);





        // ************** Cursos
        $cmb_cursos = new_cmb2_box([
            'id' => 'box_home_cursos', // id deve ser único
            'title' => 'Área de Cursos',
            'object_types' => ['page'], // tipo de post
            'show_on' => [
                'key' => 'page-template',
                'value' => 'page-home.php',
            ], // modelo de página
        ]);
        $cursos = $cmb_cursos->add_field([
            'name' => 'Cursos',
            'id' => 'cursos',
            'type' => 'group',
            'repeatable' => true,
            'options' => [
                'group_title' => 'Curso {#}',
                'add_button' => 'Adicionar novo curso',
                'remove_button' => 'Remover curso',
                'sortable' => true,
            ],
        ]);
        $cmb_cursos->add_group_field($cursos,[
            'name' => 'Nome',
            'id' => 'nome',
            'type' => 'text',
        ]);
        $cmb_cursos->add_group_field($cursos,[
            'name' => 'Status',
            'id' => 'status',
            'type' => 'select',
            'options' => [
                'concluido' => __( 'Concluído', 'cmb2' ),
                'andamento' => __( 'Em andamento', 'cmb2' ),
            ],
        ]);
    }

    /***********************************************************************
    *                                                                      *
    *                                                                      *
    *        FIM DAS FUNÇÕES DO PLUGIN DE CUSTOM FIELDS CMB2 *             *
    *                                                                      *
    *                                                                      *
    ************************************************************************/


    //Pagination function copied from WP Beginner.
    //Credits: https://www.wpbeginner.com/wp-themes/how-to-add-numeric-pagination-in-your-wordpress-theme/
    function wpbeginner_numeric_posts_nav() {
 
        if( is_singular() )
            return;
     
        global $wp_query;
     
        /** Stop execution if there's only 1 page */
        if( $wp_query->max_num_pages <= 1 )
            return;
     
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );
     
        /** Add current page to the array */
        if ( $paged >= 1 )
            $links[] = $paged;
     
        /** Add the pages around the current page to the array */
        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }
     
        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }
     
        echo '<div class="navigation"><ul>' . "\n";
     
        /** Previous Post Link */
        if ( get_previous_posts_link() )
            printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
     
        /** Link to first page, plus ellipses if necessary */
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="active"' : '';
     
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
     
            if ( ! in_array( 2, $links ) )
                echo '<li>…</li>';
        }
     
        /** Link to current page, plus 2 pages in either direction if necessary */
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }
     
        /** Link to last page, plus ellipses if necessary */
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li>…</li>' . "\n";
     
            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }
     
        /** Next Post Link */
        if ( get_next_posts_link() )
            printf( '<li>%s</li>' . "\n", get_next_posts_link() );
     
        echo '</ul></div>' . "\n";
    }    


?>


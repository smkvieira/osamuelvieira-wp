<?php

/***********************************************************************
*                                                                      *
*                                                                      *
*             FUNÇÕES DO PLUGIN DE CUSTOM FIELDS CMB2 *                *
*                                                                      *
*                                                                      *
************************************************************************/

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
    'title' => 'Perfil',
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
    'title' => 'Experiências',
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
}

/***********************************************************************
*                                                                      *
*                                                                      *
*        FIM DAS FUNÇÕES DO PLUGIN DE CUSTOM FIELDS CMB2 *             *
*                                                                      *
*                                                                      *
************************************************************************/

?>


<?php get_header(); ?>

    <?php 
    
    $page_slugs = array('destaque', 'destaque', 'slug3'); // Substitua pelos slugs das páginas que você deseja incluir

    // Argumentos da consulta para recuperar páginas específicas pelo slug
    $args = array(
        'post_type' => 'page', // Define o tipo de post para páginas
        'pagename__in' => $page_slugs, // Inclui apenas páginas com slugs específicos
        'orderby' => 'post_name__in' // Ordenar as páginas na ordem em que os slugs foram especificados
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
    ?>
            <?php the_content(); ?>
    <?php
        endwhile;
        wp_reset_postdata(); // Restaura os dados globais do post
    else :
        echo '<p>Nenhuma página encontrada.</p>';
    endif;
    ?>

<?php get_footer(); ?>

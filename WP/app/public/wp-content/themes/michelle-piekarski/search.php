<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <?php if ( have_posts() ) : ?>
                        <header class="header">
                            <h1 class="entry-title" itemprop="name"><?php printf( esc_html__( 'Resultados da busca por: %s', 'michelle_piekarski' ), get_search_query() ); ?></h1>
                        </header>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'entry' ); ?>
                        <?php endwhile; ?>
                        <?php get_template_part( 'nav', 'below' ); ?>
                    <?php else : ?>
                        <article id="post-0" class="post no-results not-found">
                            <header class="header">
                                <h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nada Encontrado', 'michelle_piekarski' ); ?></h1>
                            </header>
                            <div class="entry-content" itemprop="mainContentOfPage">
                                <p><?php esc_html_e( 'Desculpe, nada correspondeu à sua busca. Por favor, tente novamente.', 'michelle_piekarski' ); ?></p>
                                <?php get_search_form(); ?>
                            </div>
                        </article>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

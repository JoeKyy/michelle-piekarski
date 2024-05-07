<?php
add_action("after_setup_theme", "michelle_piekarski_setup");
function michelle_piekarski_setup()
{
    load_theme_textdomain(
        "michelle_piekarski",
        get_template_directory() . "/languages"
    );
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("responsive-embeds");
    add_theme_support("automatic-feed-links");
    add_theme_support("html5", ["search-form", "navigation-widgets"]);
    add_theme_support("woocommerce");
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus([
        "main-menu" => esc_html__("Menu Principal", "michelle_piekarski"),
    ]);
}
add_action("admin_notices", "michelle_piekarski_notice");
function michelle_piekarski_notice()
{
    $user_id = get_current_user_id();
    $admin_url =
        (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on"
            ? "https"
            : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $param = count($_GET) ? "&" : "?";
    if (
        !get_user_meta($user_id, "michelle_piekarski_notice_dismissed_10") &&
        current_user_can("manage_options")
    ) {
        echo '<div class="notice notice-info"><p><a href="' .
        esc_url($admin_url),
            esc_html($param) .
                'dismiss" class="alignright" style="text-decoration:none"><big>' .
                esc_html__("Ⓧ", "michelle_piekarski") .
                "</big></a>" .
                wp_kses_post(
                    __(
                        "<big><strong>🏆 Obrigado por usar michelle_piekarski!</strong></big>",
                        "michelle_piekarski"
                    )
                ) .
                "<p>" .
                esc_html__(
                    "Alimentando mais de 10 mil sites! Compre-me um sanduíche! 🥪",
                    "michelle_piekarski"
                ) .
                '</p><a href="https://github.com/bhadaway/michelle_piekarski/issues/57" class="button-primary" target="_blank"><strong>' .
                esc_html__(
                    "Como você usa michelle_piekarski?",
                    "michelle_piekarski"
                ) .
                '</strong></a> <a href="https://opencollective.com/michelle_piekarski" class="button-primary" style="background-color:green;border-color:green" target="_blank"><strong>' .
                esc_html__("Doar", "michelle_piekarski") .
                '</strong></a> <a href="https://wordpress.org/support/theme/michelle_piekarski/reviews/#new-post" class="button-primary" style="background-color:purple;border-color:purple" target="_blank"><strong>' .
                esc_html__("Revisão", "michelle_piekarski") .
                '</strong></a> <a href="https://github.com/bhadaway/michelle_piekarski/issues" class="button-primary" style="background-color:orange;border-color:orange" target="_blank"><strong>' .
                esc_html__("Suporte", "michelle_piekarski") .
                "</strong></a></p></div>";
    }
}
add_action("admin_init", "michelle_piekarski_notice_dismissed");
function michelle_piekarski_notice_dismissed()
{
    $user_id = get_current_user_id();
    if (isset($_GET["dismiss"])) {
        add_user_meta(
            $user_id,
            "michelle_piekarski_notice_dismissed_10",
            "true",
            true
        );
    }
}
add_action("wp_enqueue_scripts", "michelle_piekarski_enqueue");
function michelle_piekarski_enqueue()
{
    wp_enqueue_script("jquery");
}
add_action("wp_footer", "michelle_piekarski_footer");
function michelle_piekarski_footer()
{
    ?>
<script>
jQuery(document).ready(function($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (deviceAgent.match(/(Android)/)) {
$("html").addClass("android");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter(
    "document_title_separator",
    "michelle_piekarski_document_title_separator"
);
function michelle_piekarski_document_title_separator($sep)
{
    $sep = esc_html("|");
    return $sep;
}
add_filter("the_title", "michelle_piekarski_title");
function michelle_piekarski_title($title)
{
    if ($title == "") {
        return esc_html("...");
    } else {
        return wp_kses_post($title);
    }
}
function michelle_piekarski_schema_type()
{
    $schema = "https://schema.org/";
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = "ProfilePage";
    } elseif (is_search()) {
        $type = "SearchResultsPage";
    } else {
        $type = "WebPage";
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}
add_filter("nav_menu_link_attributes", "michelle_piekarski_schema_url", 10);
function michelle_piekarski_schema_url($atts)
{
    $atts["itemprop"] = "url";
    return $atts;
}
if (!function_exists("michelle_piekarski_wp_body_open")) {
    function michelle_piekarski_wp_body_open()
    {
        do_action("wp_body_open");
    }
}
add_action("wp_body_open", "michelle_piekarski_skip_link", 5);
function michelle_piekarski_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' .
        esc_html__("Ir para o conteúdo", "michelle_piekarski") .
        "</a>";
}
add_filter("the_content_more_link", "michelle_piekarski_read_more_link");
function michelle_piekarski_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' .
            esc_url(get_permalink()) .
            '" class="more-link">' .
            sprintf(
                __("...%s", "michelle_piekarski"),
                '<span class="screen-reader-text">  ' .
                    esc_html(get_the_title()) .
                    "</span>"
            ) .
            "</a>";
    }
}
add_filter("excerpt_more", "michelle_piekarski_excerpt_read_more_link");
function michelle_piekarski_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' .
            esc_url(get_permalink($post->ID)) .
            '" class="more-link">' .
            sprintf(
                __("...%s", "michelle_piekarski"),
                '<span class="screen-reader-text">  ' .
                    esc_html(get_the_title()) .
                    "</span>"
            ) .
            "</a>";
    }
}
add_filter("big_image_size_threshold", "__return_false");
add_filter(
    "intermediate_image_sizes_advanced",
    "michelle_piekarski_image_insert_override"
);
function michelle_piekarski_image_insert_override($sizes)
{
    unset($sizes["medium_large"]);
    unset($sizes["1536x1536"]);
    unset($sizes["2048x2048"]);
    return $sizes;
}
add_action("widgets_init", "michelle_piekarski_widgets_init");
function michelle_piekarski_widgets_init()
{
    register_sidebar([
        "name" => esc_html__("Área de Widget da Barra Lateral", "michelle_piekarski"),
        "id" => "primary-widget-area",
        "before_widget" => '<li id="%1$s" class="widget-container %2$s">',
        "after_widget" => "</li>",
        "before_title" => '<h3 class="widget-title">',
        "after_title" => "</h3>",
    ]);
}
add_action("wp_head", "michelle_piekarski_pingback_header");
function michelle_piekarski_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf(
            '<link rel="pingback" href="%s">' . "\n",
            esc_url(get_bloginfo("pingback_url"))
        );
    }
}
add_action(
    "comment_form_before",
    "michelle_piekarski_enqueue_comment_reply_script"
);
function michelle_piekarski_enqueue_comment_reply_script()
{
    if (get_option("thread_comments")) {
        wp_enqueue_script("comment-reply");
    }
}
function michelle_piekarski_custom_pings($comment)
{
    ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?></li>
<?php
}
add_filter("get_comments_number", "michelle_piekarski_comment_count", 0);
function michelle_piekarski_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments("status=approve&post_id=" . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type["comment"]);
    } else {
        return $count;
    }
}

function redirect_all_except_home_and_pages() {
    // Verifica se não é a página inicial, não é uma página, e não é a área de administração
    if (!is_front_page() && !is_page() && !is_admin()) {
        // Redireciona para a página inicial
        wp_redirect(home_url(), 301); 
        exit;
    }
}
add_action('template_redirect', 'redirect_all_except_home_and_pages');


// Desativa suporte a comentários em todos os tipos de post
function disable_comments_support() {
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
    remove_post_type_support('attachment', 'comments');
    remove_post_type_support('custom_post_type', 'comments'); // Adicione suporte para outros tipos de post conforme necessário
}
add_action('admin_init', 'disable_comments_support');

// Redireciona qualquer usuário tentando acessar a página de comentários
function redirect_comment_link() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url()); exit;
    }
}
add_action('admin_init', 'redirect_comment_link');

// Remove a seção de comentários do dashboard
function remove_comments_from_dashboard() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'remove_comments_from_dashboard');


?>

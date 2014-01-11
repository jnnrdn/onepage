<?php
  get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div id="container">
        <a name="top"></a>
        <?php
        $args = array(
          'sort_order' => 'ASC',
          'sort_column' => 'menu_order', //post_title
          'hierarchical' => 1,
          'exclude' => '',
          'child_of' => 0,
          'parent' => -1,
          'exclude_tree' => '',
          'number' => '',
          'offset' => 0,
          'post_type' => 'page',
          'post_status' => 'publish'
        );
        $pages = get_pages($args);
        //start loop
        foreach ($pages as $page_data) {
            $content = apply_filters('the_content', $page_data->post_content);
            $title = $page_data->post_title;
            $slug = $page_data->post_name;
        ?>
        <div class='page' id='<?php echo "$slug" ?>'>
              <h2 class="page-title"><?php echo "$title" ?></h2>
              <?php echo "$content" ?>
        </div>

        <?php
        }
        ?>
      </div><!-- #container -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>




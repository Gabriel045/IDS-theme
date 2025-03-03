<?php get_header(); ?>
<?php
$s = get_search_query();
$args = array(
    's' => $s
);
// The Query
$the_query = new WP_Query($args); ?>

<main>
    <section>
        <div class="block_content py-[80px]">
            <?php

            if ($the_query->have_posts()) {
                _e("<h1 class='pb-[50px]' style='font-weight:bold;color:#000'>Search <span style='color: #e59b24;'>Results</span>  For: " . get_query_var('s') . "</h1>");

                echo "<ul id='search-results'>";
                while ($the_query->have_posts()) {
                    $the_query->the_post();
            ?>
                    <li class="text-[20px] lg:text-[24px] font-[700] mb-[10px]">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php
                }
            } else {
                ?>
                <h1 style='font-weight:bold;color:#000'>Nothing Found</h1>
                <div class="alert alert-info">
                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                </div>
            <?php }
            echo "</ul>";
            ?>

        </div>
    </section>
</main>
<?php get_footer(); ?>
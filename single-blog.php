<?php
/*
Template Name: Blog Post
*/

get_header(); ?>

<main>
    <div class="container max-w-6xl mx-auto">
        <!-- Banner Image -->
        <div class="py-8">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bannerImage.jpg" alt="Banner" class="w-full h-[75vh]">
        </div>

        <!-- Category Tags -->
        <div class="flex text-[#007db5] uppercase">
            <?php
            // Display categories assigned to the post
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    echo '<p class="font-bold">' . esc_html( $category->name ) . ',&nbsp;</p>';
                }
            }
            ?>
        </div>

        <!-- Blog Post Title and Date -->
        <div class="pt-2">
            <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
            <div class="flex items-center pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p class="pl-1 font-bold"><?php echo get_the_date(); ?></p>
            </div>
        </div>

        <!-- Dynamic Gutenberg Content -->
        <div class="py-4">
            <?php
            // Display content edited in Gutenberg
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>

        <!-- Authored By Section -->
        <div class="-space-y-1">
            <p class="font-bold">Authored by <span class="text-[#007db5] italic"><?php the_author(); ?></span></p>
            <p class="font-bold text-[#007db5]">Diet and healthy lifestyle</p>
            <p class="font-bold"><?php echo get_the_date(); ?></p>
        </div>
    </div>

    <?php get_footer(); ?>
</main>

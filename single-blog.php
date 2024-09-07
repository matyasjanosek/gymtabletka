<?php
/*
 Template Name: Single Blog Page
*/

get_header(); ?>

<main>
    <div class="bg-[#F0F2F5] py-4">
        <div class="container flex justify-between max-w-5xl mx-auto">
            <div class="flex items-center space-x-4">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
                        <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                        <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                        <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                    </svg>
                </div>
                <div>
                    <div class="-space-y-1">
                        <p class="text-lg font-bold">Free delivery</p>
                        <p>on orders over 150€</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
                        <path fill-rule="evenodd" d="M11.99 2.243a4.49 4.49 0 0 0-3.398 1.55 4.49 4.49 0 0 0-3.497 1.306 4.491 4.491 0 0 0-1.307 3.498 4.491 4.491 0 0 0-1.548 3.397c0 1.357.6 2.573 1.548 3.397a4.491 4.491 0 0 0 1.307 3.498 4.49 4.49 0 0 0 3.498 1.307 4.49 4.49 0 0 0 3.397 1.549 4.49 4.49 0 0 0 3.397-1.549 4.49 4.49 0 0 0 3.497-1.307 4.491 4.491 0 0 0 1.306-3.497 4.491 4.491 0 0 0 1.55-3.398c0-1.357-.601-2.573-1.549-3.397a4.491 4.491 0 0 0-1.307-3.498 4.49 4.49 0 0 0-3.498-1.307 4.49 4.49 0 0 0-3.396-1.549Zm3.53 7.28a.75.75 0 0 0-1.06-1.06l-6 6a.75.75 0 1 0 1.06 1.06l6-6Zm-5.78-.905a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm4.5 4.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <div class="-space-y-1">
                        <p class="text-lg font-bold">Get 10% Off</p>
                        <p>for registration</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/moneyBack.png" alt="moneyBackGuarantee" class="h-14">
                </div>
                <div>
                    <div class="-space-y-1">
                        <p class="text-lg font-bold">14-day money back</p>
                        <p>guarantee on all clothing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Sellers -->
    <div>
        <div class="flex justify-center pt-24 pb-8">
            <h2 class="text-3xl font-bold">Our top sellers</h2>
        </div>
        <div class="container flex justify-between max-w-6xl mx-auto h-[16rem]">
            <div class="bg-[#F0F2F5] flex justify-between items-center rounded-lg p-8 w-full mr-4 h-full">
                <div class="max-w-[50%]">
                    <h3 class="text-3xl font-bold">Protein</h3>
                    <p>Short description of the most popular category, Short description of the most popular category, Short description of the most popular category.</p>
                </div>
                <div class="flex items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/moneyBack.png" alt="category-image" class="h-40">
                </div>
            </div>
            <div class="w-full">
                <div class="bg-[#F0F2F5] justify-between items-center flex rounded-lg h-[7.5rem] p-8 mb-4">
                    <div class="max-w-[50%]">
                        <h3 class="text-2xl font-bold">Protein</h3>
                        <p>Short description of the most popular category</p>
                    </div>
                    <div class="flex items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/moneyBack.png" alt="category-image" class="h-28">
                    </div>
                </div>
                <div class="bg-[#F0F2F5] justify-between items-center flex rounded-lg h-[7.5rem] p-8 mt-4">
                    <div class="max-w-[50%]">
                        <h3 class="text-2xl font-bold">Protein</h3>
                        <p>Short description of the most popular category</p>
                    </div>
                    <div class="flex items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/moneyBack.png" alt="category-image" class="h-28">
                    </div>
                </div>
            </div>          
        </div>
    </div>

    <!-- Shop by Categories -->
    <div>
        <div class="pt-24 pb-8 text-center">
            <h3 class="text-3xl font-bold">Shop by categories</h3>
        </div>
        <div class="container flex justify-between max-w-6xl mx-auto space-x-4 flex-nowrap">
            <?php
            $categories = array('Proteins', 'Vitamins', 'Supplements', 'Health Foods', 'Fitness Gear', 'Accessories');
            foreach ($categories as $category) : ?>
                <div class="text-center">
                    <div class="bg-[#F0F2F5] rounded-lg w-44 h-44 flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/moneyBack.png" alt="<?php echo esc_attr($category); ?>" class="w-auto h-auto max-w-full max-h-full">
                    </div>
                    <h4 class="pt-6 text-xl font-bold"><?php echo esc_html($category); ?></h4>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Discover our Blog -->
    <div class="pb-8">
        <div>
            <h3 class="pt-24 pb-8 text-3xl font-bold text-center">Discover our blog</h3>
        </div>
        <div>
            <div class="container flex max-w-6xl mx-auto space-x-4">
                <?php
                $blog_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ));
                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <div>
                            <div class="bg-[#F0F2F5] rounded-lg flex items-center justify-center">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'w-auto h-auto max-w-full max-h-full')); ?>
                                <?php endif; ?>
                            </div>
                            <h3 class="py-4 text-lg font-bold"><?php the_title(); ?></h3>
                            <p class="pb-4"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="bg-[#1D6EC1] text-white rounded-lg px-5 py-3">Read More</a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No blog posts found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

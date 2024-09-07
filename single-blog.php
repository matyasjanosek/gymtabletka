<?php

get_header(); ?>

<main>
    <div class="container max-w-6xl mx-auto">
        <!-- Banner Image -->
        <div class="py-8">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bannerImage.jpg" alt="Banner" class="w-full h-[75vh]">
        </div>

        <!-- Category Tags -->
        <div class="flex text-[#007db5] uppercase">
            <p class="font-bold">Fitness,&nbsp;</p>
            <p class="font-bold">Wellness,&nbsp;</p>
            <p class="font-bold">Healthy Lifestyle</p>
        </div>

        <!-- Blog Post Title and Date -->
        <div class="pt-2">
            <h1 class="text-4xl font-bold">Staying Fit and Healthy After Summer: Top Tips for the Cooler Months</h1>
            <div class="flex items-center pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p class="pl-1 font-bold"><?php echo get_the_date(); ?></p>
            </div>
        </div>

        <!-- Blog Content -->
        <div class="py-4">
            <h2 class="text-2xl font-bold">Introduction</h2>
            <p class="text-lg">
                As summer ends and the cooler months approach, maintaining your fitness routine can be challenging. However, staying active and healthy year-round is essential for your overall well-being. This blog post is designed for those who want to stay fit and healthy after summer, with practical tips and strategies to help you stay on track.
            </p>
        </div>

        <div class="py-4 text-lg">
            <h3 class="text-2xl font-bold">Set New Fitness Goals</h3>
            <p class="text-lg">
                Why Set New Goals? Transitioning into a new season is a great time to set fresh fitness goals. Clear goals keep you motivated and focused.
            </p>
            <p class="pt-2">How to set goals?</p>
            <ul>
                <li>- Be Specific: Define exactly what you want to achieve</li>
                <li>- Make Them Measurable: Use metrics to track your progress</li>
                <li>- Set Achievable Targets: Ensure your goals are realistic</li>
                <li>- Stay Relevant: Align your goals with your overall fitness objectives</li>
                <li>- Time-Bound: Set deadlines to keep yourself accountable</li>
            </ul>
        </div>

        <!-- Continue with the rest of the content -->

        <!-- Authored By Section -->
        <div class="-space-y-1">
            <p class="font-bold">Authored by <span class="text-[#007db5] italic">Patrik Borec Ševčík</span></p>
            <p class="font-bold text-[#007db5]">Diet and healthy lifestyle</p>
            <p class="font-bold"><?php echo get_the_date(); ?></p>
        </div>
    </div>

    <?php get_footer(); ?>
</main>
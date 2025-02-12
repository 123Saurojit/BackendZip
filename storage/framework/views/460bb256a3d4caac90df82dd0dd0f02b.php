
    <div data-theme-key="three-columns-block-container" class="css-w9tso1 emk51de1">

        <?php $__currentLoopData = $posts->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div data-theme-key="block-column" class="css-19z6se emk51de0">
                <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $url = route('blog', ['slug' => $post->slug]);
                        $title = Str::title($post->title);
                        $image = $post->thumbnail;
                    ?>


                    <a data-theme-key="custom-item" label="" data-vars-cta="3 Column Block 8"
                        data-vars-ga-position="9"
                        data-vars-ga-call-to-action="Donald Trump Is the Next President of the U.S."
                        data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a62805049/donald-trump-wins-presidential-election-2024/"
                        href="<?php echo e($url); ?>" class="ee4ms352 css-viqse1 e1c1bym14">
                        <div data-vars-cta="3 Column Block 8" data-vars-ga-position="9"
                            data-vars-ga-call-to-action="Donald Trump Is the Next President of the U.S."
                            data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a62805049/donald-trump-wins-presidential-election-2024/"
                            class="css-ftsoqv ee4ms351">
                            <img src="<?php echo e($image); ?>"
                                alt="republican presidential nominee donald trump campaigns in pennsylvania"
                                title="Republican Presidential Nominee Donald Trump Campaigns In Pennsylvania"
                                width="100%" height="auto" decoding="async" loading="lazy"
                                style="aspect-ratio: 1/1 ; object-position: top; object-fit: cover ;">
                        </div>
                        <div data-theme-key="custom-item-content" class="css-ztgqyu ee4ms350">
                            <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6"><span
                                    aria-hidden="true" data-theme-key="title-design-element-before"
                                    class="css-0 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                    class="css-1aj0fuk e10ip9lg5">
                                    <?php echo e($title); ?>

                                </span><span aria-hidden="true" data-theme-key="title-design-element-after"
                                    class="css-0 eagam8p1"></span></h2>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




    </div>


<?php /**PATH C:\Users\DESKTOP\Desktop\Elle Laravel Blog\resources\views/components/long-card.blade.php ENDPATH**/ ?>
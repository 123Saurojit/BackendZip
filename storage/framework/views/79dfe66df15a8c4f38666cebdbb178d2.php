    <div data-theme-key="four-across-layout" class="css-3ioj3p ezpcz1b1">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $url = route('blog', ['slug' => $post->slug]);
                                $title = Str::title($post->title);

                                $image = $post->thumbnail;
                                $description = $post->description;

                                $date = $post->created_at->format('d.m.y');
                                $author = $post->author?->name;
                                $cat = $post->category->category;
                                $catUrl = route('category', ['category' => $cat]);
                            ?>
            <a data-theme-key="custom-item" label="" data-vars-cta="4 Across Block 0"
                data-vars-ga-position="1"
                data-vars-ga-call-to-action="Travis Kelce’s Plans for Taylor Swift’s Birthday"
                data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a63117665/taylor-swift-birthday-travis-kelce-plans/"
                data-vars-ga-ux-element="Transporter"
                href="<?php echo e($url); ?>"
                class="ee4ms352 css-1pxdqsn e1c1bym14">
                <div class="css-ftsoqv ee4ms351">
                    <img
                     src="<?php echo e($image); ?>"
                        alt="celebrity sightings in new york city october 11, 2024"
                        title="<?php echo e($title); ?>" width="100%"
                        height="auto" decoding="async" loading="lazy" 
                        style="aspect-ratio: 1/1 ; object-position: top; object-fit: cover ;"

                        />
                </div>
                <div data-theme-key="custom-item-content" class="css-1dc3fjj ee4ms350">
                    <p data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                            class="css-m39hn e10ip9lg5">
                        <?php echo e($title); ?>

                        </span><span aria-hidden="true"
                            data-theme-key="title-design-element-after" class="css-0 eagam8p1"></span>
                    </p>
                </div>
            </a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php /**PATH C:\Users\DESKTOP\Desktop\Elle Laravel Blog\resources\views/components/short-card.blade.php ENDPATH**/ ?>
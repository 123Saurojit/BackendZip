<div data-testid="RowWrapper" id="celebrity-style" data-journey-hook="row-content"
    class="BaseWrap-sc-gjQpdd RowWrapper-UmqTg iUEiRd HEhan MultiPackageBaseRow-gSnwPR MultiPackageRow-cnuYUr knBfzx iCuvFm">
    <div data-testid="RowWrapper"
        class="BaseWrap-sc-gjQpdd RowWrapper-UmqTg iUEiRd HEhan FeaturesRow-fFHjAg ebZYGG verso-features">
        <div
            class="GridWrapper-cAzTTK jXvsWG grid grid-margins grid-items-0 SummaryCollectionGridComponent-ktyEog bdTTVU summary-collection-grid summary-collection-grid--four-columns summary-collection-grid--TextBelowLeft">

            <div class="GridItem-buujkM kHPPIF grid--item">
                <div class="SummaryCollectionGridContent-eVUpRm flthaR">
                    <div class="SectionTitleRoot-dBGvdq hyzdIa SummaryCollectionGridSectionTitle-fCmYwG KhyPp"
                        data-testid="SectionTitle">
                        <h2 class="BaseWrap-sc-gjQpdd BaseText-ewhhUZ SectionTitleHed-dKqZet dxqEAa eGcRPm gbguXG">
                            <?php echo e($cat); ?></h2>
                    </div>
                    <div class="SummaryCollectionGridItems-DZShR bViCVq hide-read-more-ad"
                        data-testid="SummaryCollectionGridItems">

                        
                        <?php $__currentLoopData = $posts->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
                                $url = route('blog', ['slug' => $post->slug]);
                                $title = Str::title($post->title);

                                $image = $post->thumbnail;
                                $desc = $post->description;

                                $date = $post->created_at->format('d.m.y');
                                $author = $post->author?->name;
                                $cat = $post->category->category;
                                $catUrl = route('category', ['category' => $cat]);

                            ?>

                        <div data-section-title="Celebrity Style 1"
                            class="SummaryItemWrapper-iwvBff juTBkb summary-item summary-item--no-icon summary-item--text-align-left summary-item--layout-placement-text-below summary-item--layout-position-image-left summary-item--layout-proportions-50-50 summary-item--side-by-side-align-center summary-item--side-by-side-image-right-mobile-false summary-item--standard SummaryCollectionGridSummaryItem-WColm kMvGcN"
                            data-item="{" dangeroushed":"kendall="" jenner="" embraces="" swaddling=""
                            in="" her="" model-off-duty=""
                            style","id":"67a657e9d4f6970cb89c7e08","index":0,"contenttype":"venue","hotellink":"=""
                            article=""
                            kendall-jenner-model-off-duty-style-nyfw-fall-2025","layout":"gridfourcolumns"}"=""
                            role="button" tabindex="0">
                            <div class="SummaryItemAssetContainer-gwhFFH ogpYq summary-item__asset-container">
                                <a
                                    class="SummaryItemImageLink-dshqxb cPpCwE summary-item__image-link summary-item-tracking__image-link"
                                    href="<?php echo e($url); ?>"
                                    aria-hidden="true" tabindex="-1" data-component-title=""
                                    data-component-type="recirc-river" data-recirc-pattern="summary-item"
                                    target="_self"><span
                                        class="SpanWrapper-umhxW kGxnNB responsive-asset SummaryItemResponsiveAsset-hjGIGg gPGLdl summary-item__image">
                                        <div data-testid="aspect-ratio-container"
                                            class="AspectRatioContainer-bJHpJz jgsWEn">
                                            <div class="aspect-ratio--overlay-container">
                                                <picture
                                                    class="ResponsiveImagePicture-cWuUZO dUOtEa SummaryItemResponsiveAsset-hjGIGg gPGLdl summary-item__image responsive-image">
                                                        <img
                                                        alt="Kendall Jenner Embraces Swaddling in Her Model-Off-Duty Style"
                                                        class="ResponsiveImageContainer-eybHBd fptoWY responsive-image__image"
                                                        src="<?php echo e($image); ?>"
                                                        style="aspect-ratio: 4/3; object-fit: cover ; object-position: top ;"

                                                        />
                                                </picture>
                                            </div>
                                        </div>
                                    </span></a></div>
                            <div class="SummaryItemContent-eiDYMl dogWHS summary-item__content">
                                <div class="SummaryItemRubricWrapper-jjNbqu bsjkmD">
                                    <div
                                        class="RubricWrapper-dKmCNX eIRXId rubric SummaryItemRubric-dguGKN lapGFj summary-item__rubric">
                                        <a class="RubricLink-gRWSOU fTtYjx rubric__link"
                                            href="<?php echo e($catUrl); ?>"><span
                                                class="RubricName-fVtemz cLxcNi rubric__name"><?php echo e($cat); ?></span></a>
                                    </div>
                                </div><a
                                    class="SummaryItemHedLink-civMjp dVrbhU summary-item-tracking__hed-link summary-item__hed-link"
                                    data-component-title="" data-component-type="recirc-river"
                                    data-recirc-pattern="summary-item"
                                    href="<?php echo e($url); ?>" target="_self">
                                    <h3 class="SummaryItemHedBase-hiFYpQ gXMLHo summary-item__hed"
                                        data-testid="SummaryItemHed">
                                    <?php echo e($title); ?>

                                    </h3>
                                </a>
                                <div class="SummaryItemBylineWrapper-boCfbi hYsZi summary-item__byline-date-icon">
                                    <div class="SummaryItemBaseByline-fFbXkY bNdTsY summary-item__byline">
                                        <div class="summary-item__byline__content">
                                            <div data-testid="BylinesWrapper"
                                                class="BylinesWrapper-KIudk cdSbAY bylines"><span
                                                    class="BylineWrapper-jWHrLH dZRkHN byline bylines__byline"
                                                    data-testid="BylineWrapper" itemprop="author"
                                                    itemtype="http://schema.org/Person"><span itemprop="name"
                                                        class="BylineNamesWrapper-jbHncj fuDQVo"><span
                                                            data-testid="BylineName"
                                                            class="BylineName-kwmrLn cYaBcc byline__name"><span
                                                                class="BaseWrap-sc-gjQpdd BaseText-ewhhUZ BylinePreamble-iJolpQ iUEiRd fvctoH gnILss byline__preamble">By
                                                            </span><?php echo e($author); ?></span></span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                    <div class="SummaryCollectionGridToActionWrapper-gnReGN eGayfk"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\DESKTOP\Desktop\Vogue Laravel\resources\views/components/short-card.blade.php ENDPATH**/ ?>
<div class="PersistentTopWrapper-ecjesM eGhrbv persistent-top" data-testid="PersistentTop"
    data-journey-hook="persistent-top">
    <header data-testid="StackedNavigationHeader"
        class="StackedNavigationHeader-iAMZwH gkLobt stacked-navigation--fixed-header-layout stacked-navigation--theme-standard site-navigation">
        <div class="ConsumerMarketingUnitThemedWrapper-iUTMTf jssHut consumer-marketing-unit consumer-marketing-unit--cm-banner"
            role="presentation" aria-hidden="true">
            <div class="consumer-marketing-unit__slot consumer-marketing-unit__slot--cm-banner"></div>
            <div class="journey-unit"></div>
        </div>
        <div class="StackedNavigationGrid-ckOxrQ SGGVk">
            <div class="StackedNavigationTop-htUgxX fcinmf">
                <div class="StackedNavigationSectionCmUnitNavLeft-eMnrQD fbMai">
                    <div class="ConsumerMarketingUnitThemedWrapper-iUTMTf jssHut consumer-marketing-unit consumer-marketing-unit--nav-left"
                        role="presentation" aria-hidden="true">
                        <div class="consumer-marketing-unit__slot consumer-marketing-unit__slot--nav-left"></div>
                        <div class="journey-unit"></div>
                    </div>
                </div>
                <div class="StackedNavigationSectionLogoSize-eWLQhf mYCVx stacked-navigation__section--xlarge-logo"><a
                        href="/" data-testid="Logo" class="StackedNavigationLogoLink-byNqXP dmvHfj">
                        <picture class="ResponsiveImagePicture-cWuUZO dUOtEa responsive-image"><img alt="Vogue"
                                class="ResponsiveImageContainer-eybHBd fptoWY responsive-image__image"
                                src="/images/logo.svg" srcset="" sizes="100vw"></picture>
                    </a></div>
                <div class="StackedNavigationSectionUtilityLinks-kGMcBq gaiZhi">
                    <nav aria-label="Utility" class="NavigationWrapper-bFftAs fKSZRK" data-testid="navigation">
                        <ul class="NavigationListWrapper-gWXLVS hSzfcS navigation__list" data-testid="navigation__list">
                        </ul>
                    </nav><span class="NavigationDivider-fEDnwq ixXXMs navigation__divider"></span>
                    <div class="StackedNavigationConsumerMarketingUnitWrapper-epSkjf eqsNVO">
                        <div class="ConsumerMarketingUnitThemedWrapper-iUTMTf jssHut consumer-marketing-unit consumer-marketing-unit--nav-cta"
                            role="presentation" aria-hidden="true">
                            <div class="consumer-marketing-unit__slot consumer-marketing-unit__slot--nav-cta"></div>
                            <div class="journey-unit"></div>
                        </div>
                        <div class="ConsumerMarketingUnitThemedWrapper-iUTMTf jssHut consumer-marketing-unit consumer-marketing-unit--nav-rollover"
                            role="presentation">
                            <div class="consumer-marketing-unit__slot consumer-marketing-unit__slot--nav-rollover">
                            </div>
                            <div class="journey-unit"></div>
                        </div>
                        <div class="ConsumerMarketingUnitThemedWrapper-iUTMTf jssHut consumer-marketing-unit consumer-marketing-unit--nav-dialog"
                            role="presentation" aria-hidden="true">
                            <div class="consumer-marketing-unit__slot consumer-marketing-unit__slot--nav-dialog"></div>
                            <div class="journey-unit"></div>
                        </div>
                    </div>
                    <div
                        class="standard-navigation-account standard-navigation-account-with-avatar StackedNavigationSectionUtilityLinksLogin-hBhQdZ TYhvD">
                    </div><a href="/search"
                        class="BaseButton-bLlsy ButtonWrapper-xCepQ cRxydS ctfXNv button button--utility StackedNavigationSearch-lFFwq feGD"
                        data-event-click="{" element":"button","outgoingurl":"="" search"}"="" data-testid="Button"
                        type=""><span class="ButtonLabel-cjAuJN bBWXSg button__label">Search</span>
                        <div class="ButtonIconWrapper-gFdzAL bPDyTT button__icon-container"><svg
                                class="ButtonIcon-YqaGo iwlhuX button-icon icon icon-search" focusable="false"
                                viewBox="0 0 16 16" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                data-testid="iconSearch">
                                <title>Search</title>
                                <path fill="#000" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 7A5 5 0 1 1 2 7a5 5 0 0 1 10 0Zm-1.126 4.582a6 6 0 1 1 .707-.707l3.773 3.771-.707.708-3.773-3.772Z">
                                </path>
                            </svg></div>
                    </a>
                </div>
            </div>
            <div data-testid="StackedNavigationScrollingSection" class="StackedNavigationScrollingSection-xWrqc huwbm">
                <div class="ScrollingNavigationNavWrapper-ACpyo bDnjfs">
                    <div data-testid="ScrollingNavigation" class="NavWrapper-ifJrDf dJaWon">
                        <nav aria-label="Primary" class="NavListWrapper-dyFqHh aSgdF">
                            <div class="NavListDefault-gJHGwl gaTwPQ">
                                <ul class="NavList-jfGeFC kRKxYt">

                                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php

                                            $title = Str::title($cat->category);
                                            $url = route('category', ['category' => $cat->category]);
                                        ?>


                                    <li class="NavListItem-eSvUmn eroYMi"><a tabindex="0" role="link"
                                            href="<?php echo e($url); ?>" data-testid="ScrollingNavigationLink"
                                            class="BaseWrap-sc-gjQpdd BaseText-ewhhUZ BaseLink-eNWuiM NavLink-pAjkY iUEiRd erEiqA cjryJz ePXfkO"><span><?php echo e($title); ?></span></a>
                                    </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                   
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>



            <div class="StackedNavigationBottom-dpcakX jtnCUl">
                <div class="StackedNavigationDrawer-jtJcEj edsvEF"><button
                        class="BaseButton-bLlsy ButtonWrapper-xCepQ cRxydS cIDtfH button button--utility StackedNavigationDrawerToggle-cycUFN dyPXlo"
                        data-event-click="{" element":"button"}"="" data-testid="Button" role="button"
                        type="button"><span class="ButtonLabel-cjAuJN bBWXSg button__label">Open Navigation
                            Menu</span>

                        <div class="ButtonIconWrapper-gFdzAL bPDyTT button__icon-container">

                            <svg class="ButtonIcon-YqaGo iwlhuX button-icon icon icon-menu" focusable="false"
                                viewBox="0 0 16 16" width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                id="open-btn">
                                <title>Menu</title>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1 2.5h14v1H1v-1Zm0 5h14v1H1v-1Zm14 5H1v1h14v-1Z" fill="#000"></path>

                            </svg>

                            <svg class="ButtonIcon-YqaGo iwlhuX button-icon icon icon-close" focusable="false"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" id="close-btn" style="display: none;">
                                <title>Close</title>
                                <g clip-path="url(#a)" stroke="#000">
                                    <path d="m1 1 14 14M15 1 1 15"></path>
                                </g>
                            </svg>

                        </div>

                        <script>
                            const openBtn = document.getElementById("open-btn");
                            const closeBtn = document.getElementById("close-btn");

                            openBtn.addEventListener("click", function() {
                                setTimeout(() => {
                                    openBtn.style.display = 'none';
                                    closeBtn.style.display = 'block';
                                }, 700);

                            });

                            closeBtn.addEventListener("click", function() {
                                setTimeout(() => {
                                    openBtn.style.display = 'block';
                                    closeBtn.style.display = 'none';
                                }, 700);

                            });
                        </script>





                    </button></div>
                <div class="StackedNavigationSectionLogo-gMsxSu iVsezV"><a href="/"
                        class="StackedNavigationLogoLink-byNqXP dmvHfj">
                        <picture class="ResponsiveImagePicture-cWuUZO dUOtEa responsive-image"><img alt="Vogue"
                                class="ResponsiveImageContainer-eybHBd fptoWY responsive-image__image"
                                src="/images/logo-header.svg" srcset="" sizes="100vw"></picture>
                    </a></div>
                <div class="StackedNavigationSectionMobileOption-iaaAJG eKqLqR">
                    <div
                        class="standard-navigation-account standard-navigation-account-with-avatar StackedNavigationSectionUtilityLinksLogin-hBhQdZ TYhvD">
                    </div>
                    <div class="ConsumerMarketingUnitThemedWrapper-iUTMTf jssHut consumer-marketing-unit consumer-marketing-unit--mob-nav-cta"
                        role="presentation" aria-hidden="true">
                        <div class="consumer-marketing-unit__slot consumer-marketing-unit__slot--mob-nav-cta"></div>
                        <div class="journey-unit"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="modal-container"></div>
</div>
<?php /**PATH C:\Users\DESKTOP\Desktop\Vogue Laravel\resources\views/pages/layouts/header.blade.php ENDPATH**/ ?>
<style>

    .css-kl1vg0.open {
        transform: translateX(0px);
        visibility: visible;
        content-visibility: auto;
    }

    .css-kl1vg0 {
        visibility: visible;
        content-visibility: auto;
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        width: 20rem;
        max-width: 20rem;
        height: 100%;
        overflow: hidden scroll;
        position: fixed;
        top: 0rem;
        z-index: 8000000;
        transition: transform 0.2s linear;
        transform: translateX(-20rem);
    }
</style>



<section data-lazy-id="P0-3">
    <nav id="sidepanel" role="dialog" aria-label="Sidebar Menu" class="new-sidepanel-menu hidden css-16ximrz e13srmb716  
    ">
        <div data-focus-lock-disabled="disabled">
            <a data-theme-key="base-link" href="/search/" class="css-1kkonqv e1c1bym14"><img
                    src="/images/search.f1c199c.svg" alt="Search" title="Search" width="16" height="16"
                    decoding="async" loading="lazy" class="css-fpbvzc e13srmb70" /><span
                    class="css-1na6dr9 e13srmb715">Search</span></a><button data-theme-key="button-primary"
                aria-label="Close Sidepanel" class="css-o3kmfn e12nq69g1" id="closeBtn">
                <img src="/images/close.38e3324.svg" alt="Close" title="Close" width="100%" height="auto"
                    decoding="async" loading="lazy" role="img" class="css-1lgifh3 e13srmb714" />
            </button>
            <hr class="css-xwjhf9 e13srmb713" />
            <ul class="css-lr5w6x e13srmb712">
                

                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php

                    $title = Str::title($cat->category);
                    $url = route('category', ['category' => $cat->category]);
                ?>

                <li data-id="9" class="nav-item css-1fqyieb e13srmb710">
                    <a target="_blank" rel="nofollow noopener" data-theme-key="base-link"
                        href="<?php echo e($url); ?>" class="css-75z2gz e1c1bym14"><?php echo e($title); ?></a>
                </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          

                
            </ul>
            
            
        </div>

    </nav>

</section>
<span tabindex="0"></span><a data-theme-key="base-link" href="#main-content"
    class="ez54tv90 css-1joeej0 e1c1bym14">Skip to Content</a>

<nav data-tracking-id="topNav" class="css-1o2meyd e1rbq3om6">
    <div class="nav-bar-container css-40dj9l e1rbq3om5">
        <button data-theme-key="button-primary" aria-label="Sidepanel Button" title="Side Panel"
            class="css-1fj2vwy e12nq69g1" id="openBtn">
            <svg data-dynamic-svg="true">
                <use href="/images/menu.cf1782e.svg#icon"></use>
            </svg></button><a data-theme-key="base-link" href="/" aria-label="ELLE"
            class="nav-logo css-1z0ns1o e1c1bym14">
            <img data-dynamic-svg="true" src="/images/logos/logo.png"
                fetchpriority="high" data-testid="dynamic-svg-base" height="auto" width="auto" alt="Logo"
                style="width: 80px;"
                class="css-0 e1qdlatq0" 
                /></a>
        <div style="scrollbar-width: none; margin-right: 0.5rem" data-lazy-id="P0-4" class="css-1m67141 e1rbq3om2">
            <ul class="css-1cr3k5e e1rbq3om1">

                <?php $__currentLoopData = $allCategory->slice(0,6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php

                    $title = Str::title($cat->category);
                    $url = route('category', ['category' => $cat->category]);
                ?>

                <li class="css-jloo3l e1rbq3om0">
                    <a data-theme-key="base-link" href="<?php echo e($url); ?>" aria-current="false"
                        class="e1c1bym11 css-1fkzqk5 e1c1bym14"><?php echo e($title); ?></a>
                </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            </ul>
        </div>
        <a data-theme-key="base-link"
            href="https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_topnav"
            class="css-kcunsj e1c1bym14">Subscribe</a>
        
    </div>
</nav>


<script>
    const menu = document.getElementById("sidepanel");
    const openBtn = document.getElementById("openBtn") ;
    const closeBtn = document.getElementById("closeBtn") ;

    openBtn.addEventListener('click',()=>{

        menu.classList.remove("hidden","css-16ximrz");

        menu.classList.add("visible","open","css-kl1vg0");
      
    });

    closeBtn.addEventListener('click',()=>{


        menu.classList.remove("visible","open","css-kl1vg0");

        menu.classList.add("hidden","css-16ximrz");

        
    });


    //new-sidepanel-menu visible open c e13srmb716

</script><?php /**PATH C:\Users\DESKTOP\Desktop\Elle Laravel Blog\resources\views/pages/layouts/header.blade.php ENDPATH**/ ?>
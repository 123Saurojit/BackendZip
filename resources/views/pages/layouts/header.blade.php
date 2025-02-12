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
                {{-- <li data-id="1" class="nav-item css-1fqyieb e13srmb710">
                    <a data-theme-key="base-link"
                        href="https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_panelnav"
                        class="css-75z2gz e1c1bym14">Subscribe</a>
                </li> --}}

                @foreach ($allCategory as $cat)

                @php

                    $title = Str::title($cat->category);
                    $url = route('category', ['category' => $cat->category]);
                @endphp

                <li data-id="9" class="nav-item css-1fqyieb e13srmb710">
                    <a target="_blank" rel="nofollow noopener" data-theme-key="base-link"
                        href="{{ $url }}" class="css-75z2gz e1c1bym14">{{ $title }}</a>
                </li>

                @endforeach

          

                {{-- <li data-id="9" class="nav-item css-1fqyieb e13srmb710">
                    <a target="_blank" rel="nofollow noopener" data-theme-key="base-link"
                        href="https://www.elle.com/email/elle-newsletter" class="css-75z2gz e1c1bym14">Newsletter</a>
                </li>
                <li data-id="10" class="nav-item has-children has-submenu submenu-closed css-1fqyieb e13srmb710">
                    <a data-theme-key="base-link" href="#" class="css-75z2gz e1c1bym14">Follow</a><button
                        role="button" tabindex="0" aria-expanded="false" aria-controls="follow"
                        aria-label="Follow" class="css-pjjyzu e13srmb78"></button>
                </li> --}}
            </ul>
            {{-- <ul class="css-njpu5j e13srmb77">
                <li data-id="1" class="nav-item has-children has-submenu submenu-closed css-1vjstyg e13srmb76">
                    <a data-theme-key="base-link" href="/" class="css-tm0o7j e1c1bym14">Other
                        Editions</a><button role="button" tabindex="0" aria-expanded="false"
                        aria-controls="othereditions" aria-label="Other Editions"
                        class="css-pjjyzu e13srmb78"></button>
                </li>
                <li hidden=""></li>
            </ul> --}}
            {{-- <div class="css-bbrknr e13srmb74"></div>
            <footer class="sidepanel-footer-container css-sfww4i e13srmb73">
                <a target="_blank" rel="noopener" data-theme-key="base-link"
                    href="https://www.hearst.com/-/us-magazines-privacy-notice" class="css-1j48blf e1c1bym14">Privacy
                    Notice</a><a target="_blank" rel="noopener" data-theme-key="base-link"
                    href="https://www.hearst.com/-/us-magazines-terms-of-use" class="css-1j48blf e1c1bym14">Terms Of
                    Use</a>
            </footer> --}}
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

                @foreach ($allCategory->slice(0,6) as $cat)

                @php

                    $title = Str::title($cat->category);
                    $url = route('category', ['category' => $cat->category]);
                @endphp

                <li class="css-jloo3l e1rbq3om0">
                    <a data-theme-key="base-link" href="{{ $url }}" aria-current="false"
                        class="e1c1bym11 css-1fkzqk5 e1c1bym14">{{ $title }}</a>
                </li>

                @endforeach

            
            </ul>
        </div>
        <a data-theme-key="base-link"
            href="https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_topnav"
            class="css-kcunsj e1c1bym14">Subscribe</a>
        {{-- <div class="css-1ba3ot6 eqsjh7f1">
            <a rel="nofollow" data-theme-key="base-link"
                href="/auth/csrf?action=login&return_url=https://www.elle.com/" class="css-vz4ldn e1c1bym14"><span
                    class="css-spe6hg eqsjh7f2">sign in</span></a>
        </div> --}}
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

</script>
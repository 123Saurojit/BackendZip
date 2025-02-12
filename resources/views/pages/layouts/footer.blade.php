<footer data-lazy-id="P0-7" class="footer css-10ftiau eqtscwt0">
    <div class="css-1ss7lvu eluqz9n10">
        <div class="css-iz4391 eluqz9n9"><a data-theme-key="base-link" href="/" aria-label="ELLE"
                class="css-1gtkda7 e1c1bym14"><img data-dynamic-svg="true" src="/images/logo.2856426_1.svg"
                    loading="lazy" data-testid="dynamic-svg-base" height="auto" width="auto" alt="Logo"
                    class="css-0 e1qdlatq0"></a>
            <div class="css-6uae8g eznjit40">
                <div class="css-70qvj9 eznjit44"><a data-theme-key="base-link"
                        href="https://twitter.com/ElleMagazine" aria-label="x" class="css-n9en60 e1c1bym14"><img
                            data-dynamic-svg="true" src="/images/x.3361b6d.svg" loading="lazy"
                            data-testid="dynamic-svg-base" height="auto" width="auto" alt="x"
                            class="css-jmxdxt eznjit42"></a></div>
                <div class="css-70qvj9 eznjit44"><a data-theme-key="base-link"
                        href="https://www.tiktok.com/@ellemagazine?lang=en" aria-label="tiktok"
                        class="css-n9en60 e1c1bym14"><img data-dynamic-svg="true"
                            src="/images/tiktok.603c377.svg" loading="lazy" data-testid="dynamic-svg-base"
                            height="auto" width="auto" alt="tiktok" class="css-jmxdxt eznjit42"></a></div>
                <div class="css-70qvj9 eznjit44"><a data-theme-key="base-link"
                        href="https://www.youtube.com/c/elle?sub_confirmation=1" aria-label="youtube"
                        class="css-n9en60 e1c1bym14"><img data-dynamic-svg="true"
                            src="/images/youtube.ce3e1ae.svg" loading="lazy" data-testid="dynamic-svg-base"
                            height="auto" width="auto" alt="youtube" class="css-jmxdxt eznjit42"></a></div>
                <div class="css-70qvj9 eznjit44"><a data-theme-key="base-link"
                        href="https://www.facebook.com/ellemagazine" aria-label="facebook"
                        class="css-n9en60 e1c1bym14"><img data-dynamic-svg="true"
                            src="/images/facebook.a5a3a69.svg" loading="lazy" data-testid="dynamic-svg-base"
                            height="auto" width="auto" alt="facebook" class="css-jmxdxt eznjit42"></a></div>
                <div class="css-70qvj9 eznjit44"><a data-theme-key="base-link"
                        href="http://instagram.com/elleusa" aria-label="instagram"
                        class="css-n9en60 e1c1bym14"><img data-dynamic-svg="true"
                            src="/images/instagram.f282b14.svg" loading="lazy" data-testid="dynamic-svg-base"
                            height="auto" width="auto" alt="instagram" class="css-jmxdxt eznjit42"></a></div>
                <div class="css-70qvj9 eznjit44"><a data-theme-key="base-link"
                        href="http://www.pinterest.com/elle/?auto_follow=1" aria-label="pinterest"
                        class="css-n9en60 e1c1bym14"><img data-dynamic-svg="true"
                            src="/images/pinterest.e8cf655.svg" loading="lazy" data-testid="dynamic-svg-base"
                            height="auto" width="auto" alt="pinterest" class="css-jmxdxt eznjit42"></a></div>
            </div>
        </div>
        <nav data-track-type="footer-menu" role="navigation" aria-label="Footer" class="css-kzigki eluqz9n8">
       
            @foreach ($allCategory as $cat)

            @php

                $title = Str::title($cat->category);
                $url = route('category', ['category' => $cat->category]);
            @endphp

            <a target="_blank" rel="noopener"
                data-theme-key="base-link" href="{{ $url }}"
                class="css-1vc4yu1 e1c1bym14">{{ $title }}
            </a>

            @endforeach
            
            </nav>
            <img data-dynamic-svg="true"
            src="/images/network-logo.242fea1.svg" loading="lazy" data-testid="dynamic-svg-base" height="55"
            width="192" alt="Hearst Fashion and Luxury Collection - A Part of Hearst Digital Media"
            class="css-15si9rg eluqz9n7">
        <p class="css-j307y1 eluqz9n6">A Part of Hearst Digital Media</p>
        <p class="css-i7117i eluqz9n5">We may earn commission from links on this page, but we only recommend
            products we back.</p>
        <p class="css-j307y1 eluqz9n3">©2025 Hearst Magazine Media, Inc. All Rights Reserved.</p>

        <div data-track-type="legal-footer-menu" class="css-lqx6q4 eluqz9n2">

            @foreach ($allStatic as $pg)

            @php

                $title = Str::title($pg->title);
                $url = route('static-page', ['slug' => $pg->slug]);
            @endphp


            <a target="_blank" rel="noopener"
                data-theme-key="base-link" href="{{ $url }}"
                class="css-r7fsoq e1c1bym14">{{ $title }}
            </a>

            @endforeach

            

        </div>

        <div class="css-5tjtfu eluqz9n1"></div>
        <div class="css-0 eluqz9n0"><a data-theme-key="base-link" href="#" title="Cookies Choices"
                data-track-type="cookie-choices"
                class="ot-sdk-show-settings e1f7ykkd1 css-vq806a e1c1bym14">Cookies Choices</a></div>
    </div>
</footer>
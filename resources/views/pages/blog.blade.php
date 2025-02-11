<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" class="js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="/images/logos/logo-sq.png" type="image/jpeg">




    <script>
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>

    <!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
    <title>{{ Str::title($post->title) }} - {{ env('APP_NAME') }}</title>
    <meta name="description"
        content="{{ $post->title }}">
   
    <meta property="og:title"
        content="{{ $post->title }}">
   
    <meta name="twitter:title"
        content="{{ $post->title }}">


    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
    <link href="https://fonts.gstatic.com" crossorigin="" rel="preconnect">

 
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/dubaimag.ae\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel="stylesheet" id="sbi_styles-css" href="/css/sbi-styles.min.css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="/css/frontend-lite.min.css" media="all">
    <link rel="stylesheet" id="swiper-css" href="/css/swiper.min.css" media="all">
    <link rel="stylesheet" id="fox-elementor-css" href="/css/framework.css" media="all">
    <style id="wp-emoji-styles-inline-css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="/css/style.min.css" media="all">
    <style id="rank-math-toc-block-style-inline-css">
        .wp-block-rank-math-toc-block nav ol {
            counter-reset: item
        }

        .wp-block-rank-math-toc-block nav ol li {
            display: block
        }

        .wp-block-rank-math-toc-block nav ol li:before {
            content: counters(item, ".") ". ";
            counter-increment: item
        }
    </style>
    <style id="classic-theme-styles-inline-css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="global-styles-inline-css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="/css/styles.css" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="/css/elementor-icons.min.css" media="all">
    <link rel="stylesheet" id="elementor-post-6-css" href="/css/post-6.css" media="all">
    <link rel="stylesheet" id="sbistyles-css" href="/css/sbi-styles.min.css" media="all">
    <link rel="stylesheet" id="elementor-global-css" href="/css/global.css" media="all">
    <link rel="stylesheet" id="elementor-post-64-css" href="/css/post-64.css" media="all">
    <link rel="stylesheet" id="elementor-post-283-css" href="/css/post-283.css" media="all">
    <link rel="stylesheet" id="elementor-post-331-css" href="/css/post-331.css" media="all">
    <link rel="stylesheet" id="woocommerce-layout-css" href="/css/woocommerce-layout.css" media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="/css/woocommerce-smallscreen.css"
        media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="/css/woocommerce.css" media="all">
    <style id="woocommerce-inline-inline-css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="wi-fonts-css"
        href="https://fonts.googleapis.com/css?family=Noto+Serif%3A400%7CMontserrat%3A300%2C500%2C800%7CBodoni+Moda%3A400&amp;display=auto&amp;ver=5.5.4.1"
        media="all">
    <link rel="stylesheet" id="style-css" href="/css/style.min_1.css" media="all">
    <style id="style-inline-css">
        .color-accent,
        .social-list.style-plain:not(.style-text_color) a:hover,
        .wi-mainnav ul.menu ul>li:hover>a,
        .wi-mainnav ul.menu ul li.current-menu-item>a,
        .wi-mainnav ul.menu ul li.current-menu-ancestor>a,
        .related-title a:hover,
        .pagination-1 a.page-numbers:hover,
        .pagination-4 a.page-numbers:hover,
        .page-links>a:hover,
        .reading-progress-wrapper,
        .widget_archive a:hover,
        .widget_nav_menu a:hover,
        .widget_meta a:hover,
        .widget_recent_entries a:hover,
        .widget_categories a:hover,
        .widget_product_categories a:hover,
        .tagcloud a:hover,
        .header-cart a:hover,
        .woocommerce .star-rating span:before,
        .null-instagram-feed .clear a:hover,
        .widget a.readmore:hover {
            color: #e0c296
        }

        .bg-accent,
        html .mejs-controls .mejs-time-rail .mejs-time-current,
        .fox-btn.btn-primary,
        button.btn-primary,
        input.btn-primary[type="button"],
        input.btn-primary[type="reset"],
        input.btn-primary[type="submit"],
        .social-list.style-black a:hover,
        .style--slider-nav-text .flex-direction-nav a:hover,
        .style--slider-nav-text .slick-nav:hover,
        .header-cart-icon .num,
        .post-item-thumbnail:hover .video-indicator-solid,
        a.more-link:hover,
        .post-newspaper .related-thumbnail,
        .pagination-4 span.page-numbers:not(.dots),
        .review-item.overall .review-score,
        #respond #submit:hover,
        .dropcap-color,
        .style--dropcap-color .enable-dropcap .dropcap-content>p:first-of-type:first-letter,
        .style--dropcap-color p.has-drop-cap:not(:focus):first-letter,
        .style--list-widget-3 .fox-post-count,
        .style--tagcloud-3 .tagcloud a:hover,
        .blog-widget-small .thumbnail-index,
        .foxmc-button-primary input[type="submit"],
        #footer-search .submit:hover,
        .wpcf7-submit:hover,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce span.onsale,
        .woocommerce ul.products li.product .onsale,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce a.add_to_cart_button:hover,
        .woocommerce #review_form #respond .form-submit input:hover {
            background-color: #e0c296
        }

        .review-item.overall .review-score,
        .partial-content,
        .style--tagcloud-3 .tagcloud a:hover,
        .null-instagram-feed .clear a:hover {
            border-color: #e0c296
        }

        .reading-progress-wrapper::-webkit-progress-value {
            background-color: #e0c296
        }

        .reading-progress-wrapper::-moz-progress-value {
            background-color: #e0c296
        }

        #backtotop.backtotop-circle,
        #backtotop.backtotop-square {
            border-width: 0px
        }

        #backtotop {
            color: #ffffff;
            background-color: #dddddd
        }

        #backtotop:hover {
            color: #ffffff;
            background-color: #ddc39b
        }

        body {
            color: #404040
        }

        a {
            color: #e0c296
        }

        a:hover {
            color: #e0b069
        }

        .post-item-title a:hover {
            color: #e0c296
        }

        .post-item-meta {
            color: #777777
        }

        .post-item-meta a {
            color: #333333
        }

        .post-item-meta a:hover {
            color: #e0c296
        }

        @media (min-width: 1200px) {

            .container,
            .cool-thumbnail-size-big .post-thumbnail {
                width: 1080px
            }

            body.layout-boxed .wi-wrapper {
                width: 1140px
            }
        }

        @media (min-width:1024px) {

            .secondary,
            .section-secondary {
                width: 265px
            }

            .has-sidebar .primary,
            .section-has-sidebar .section-primary,
            .section-sep {
                width: calc(100% - 265px)
            }
        }

        body,
        .font-body,
        .post-item-subtitle,
        body.single:not(.elementor-page) .entry-content,
        body.page:not(.elementor-page) .entry-content,.fox-input,input[type="color"],
        input[type="date"],
        input[type="datetime"],
        input[type="datetime-local"],
        input[type="email"],
        input[type="month"],
        input[type="number"],
        input[type="password"],
        input[type="search"],
        input[type="tel"],
        input[type="text"],
        input[type="time"],
        input[type="url"],
        input[type="week"],
        input:not([type]),
        textarea,
        blockquote,
        .wi-dropcap,
        .enable-dropcap .dropcap-content>p:first-of-type:first-letter,
        p.has-drop-cap:not(:focus):first-letter,
        .wp-caption-text,
        .post-thumbnail-standard figcaption,
        .wp-block-image figcaption,
        .blocks-gallery-caption,
        .footer-copyright {
            font-family: "Noto Serif", serif
        }

        .font-heading,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .wp-block-quote.is-large cite,
        .wp-block-quote.is-style-large cite,.fox-btn,button,input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .fox-term-list,
        .wp-block-cover-text,
        .title-label,
        .thumbnail-view,
        .post-item-meta,
        .standalone-categories,
        .readmore,
        a.more-link,
        .post-big a.more-link,
        .style--slider-navtext .flex-direction-nav a,
        .min-logo-text,
        .page-links-container,
        .authorbox-nav,
        .post-navigation .post-title,
        .review-criterion,
        .review-score,
        .review-text,
        .commentlist .fn,
        .reply a,
        .widget_archive,
        .widget_nav_menu,
        .widget_meta,
        .widget_recent_entries,
        .widget_categories,
        .widget_product_categories,
        .widget_rss>ul a.rsswidget,
        .widget_rss>ul>li>cite,
        .widget_recent_comments,
        #backtotop,
        .view-count,
        .tagcloud,
        .woocommerce span.onsale,
        .woocommerce ul.products li.product .onsale,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce a.added_to_cart,
        .woocommerce nav.woocommerce-pagination ul,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce div.product .woocommerce-tabs ul.tabs li a,
        .woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,
        .woocommerce table.shop_table th,
        .woocommerce table.shop_table td.product-name a,
        .fox-logo,
        .mobile-logo-text,
        .slogan,
        .archive-title,
        .single .post-item-title.post-title,
        .page-title,
        .single-heading,
        .widget-title,
        .section-heading h2,
        .fox-heading .heading-title-main,
        .article-big .readmore {
            font-family: "Montserrat", sans-serif
        }

        .wi-mainnav ul.menu>li>a,
        .footer-bottom .widget_nav_menu,
        #footernav,
        .offcanvas-nav,
        .wi-mainnav ul.menu ul,
        .header-builder .widget_nav_menu ul.menu ul,
        .footer-bottom .widget_nav_menu a,
        #footernav a {
            font-family: "Helvetica Neue", sans-serif
        }

        .post-item-title {
            font-family: "Bodoni Moda", serif
        }

        body,
        .font-body {
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            text-transform: none;
            letter-spacing: 0px;
            line-height: 1.5
        }

        h2,
        h1,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 800;
            text-transform: none;
            line-height: 1.3
        }

        h2 {
            font-size: 2.0625em;
            font-style: normal
        }

        h3 {
            font-size: 1.625em;
            font-style: normal
        }

        h4 {
            font-size: 1.25em;
            font-style: normal
        }

        .fox-logo,
        .min-logo-text,
        .mobile-logo-text {
            font-size: 60px;
            font-weight: 400;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 0px;
            line-height: 1.1
        }

        .slogan {
            font-size: 0.8125em;
            font-weight: 400;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 6px;
            line-height: 1.1
        }

        .wi-mainnav ul.menu>li>a,
        .footer-bottom .widget_nav_menu,
        #footernav,
        .offcanvas-nav {
            font-size: 16px;
            text-transform: none;
            letter-spacing: 0px
        }

        .wi-mainnav ul.menu ul,
        .header-builder .widget_nav_menu ul.menu ul {
            font-style: normal
        }

        .post-item-title {
            font-weight: 400;
            font-style: normal;
            text-transform: none;
            letter-spacing: 0px
        }

        .post-item-meta {
            font-size: 12px;
            font-weight: 500;
            font-style: normal;
            text-transform: uppercase
        }

        .standalone-categories {
            font-style: normal
        }

        .archive-title {
            font-style: normal
        }

        .single .post-item-title.post-title,
        .page-title {
            font-style: normal
        }

        .post-item-subtitle {
            font-style: normal
        }

        body.single:not(.elementor-page) .entry-content,
        body.page:not(.elementor-page) .entry-content {
            font-style: normal
        }

        .single-heading {
            font-size: 1.5em;
            font-weight: 400;
            font-style: normal
        }

        .widget-title {
            font-style: normal
        }

        .section-heading h2,
        .fox-heading .heading-title-main {
            font-style: normal
        }

        .fox-btn,
        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .article-big .readmore {
            font-style: normal
        }

        .fox-input,
        input[type="color"],
        input[type="date"],
        input[type="datetime"],
        input[type="datetime-local"],
        input[type="email"],
        input[type="month"],
        input[type="number"],
        input[type="password"],
        input[type="search"],
        input[type="tel"],
        input[type="text"],
        input[type="time"],
        input[type="url"],
        input[type="week"],
        input:not([type]),
        textarea {
            font-style: normal
        }

        blockquote {
            font-style: normal
        }

        .wi-dropcap,
        .enable-dropcap .dropcap-content>p:first-of-type:first-letter,
        p.has-drop-cap:not(:focus):first-letter {
            font-style: normal
        }

        .wp-caption-text,
        .post-thumbnail-standard figcaption,
        .wp-block-image figcaption,
        .blocks-gallery-caption {
            font-style: normal
        }

        .footer-copyright {
            font-style: normal
        }

        .footer-bottom .widget_nav_menu a,
        #footernav a {
            font-size: 11px;
            font-style: normal;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        .offcanvas-nav {
            font-style: normal
        }

        @media only screen and (max-width: 1023px) {

            .fox-logo,
            .min-logo-text,
            .mobile-logo-text {
                font-size: 40px
            }
        }

        @media only screen and (max-width: 567px) {

            body,
            .font-body {
                font-size: 14px
            }

            .fox-logo,
            .min-logo-text,
            .mobile-logo-text {
                font-size: 20px
            }
        }
    </style>
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNiramit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CWork+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.6.1"
        media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="/css/fontawesome.min.css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="/css/solid.min.css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-regular-css" href="/css/regular.min.css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="/css/brands.min.css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script src="/js/jquery.min.js" id="jquery-core-js"></script>
    <script src="/js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script src="/js/jquery.blockUI.min.js" id="jquery-blockui-js" defer="" data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/dubaimag.ae\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
    </script>
    <script src="/js/add-to-cart.min.js" id="wc-add-to-cart-js" defer="" data-wp-strategy="defer"></script>
    <script src="/js/js.cookie.min.js" id="js-cookie-js" defer="" data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
    </script>
    <script src="/js/woocommerce.min.js" id="woocommerce-js" defer="" data-wp-strategy="defer"></script>

    <!-- Google tag (gtag.js) snippet added by Site Kit -->


    <!-- End Google tag (gtag.js) snippet added by Site Kit -->


    <!-- Google AdSense meta tags added by Site Kit -->
    <meta name="google-adsense-platform-account" content="ca-host-pub-2644536267352236">
    <meta name="google-adsense-platform-domain" content="sitekit.withgoogle.com">
    <!-- End Google AdSense meta tags added by Site Kit -->
    <meta name="generator"
        content="Elementor 3.23.4; features: e_optimized_css_loading, additional_custom_breakpoints, e_lazyload; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>

    <!-- Google AdSense snippet added by Site Kit -->

    <!-- End Google AdSense snippet added by Site Kit -->
    <style id="wp-fonts-local">
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('fonts/Inter-VariableFont_slnt%2Cwght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>


    <style id="color-preview"></style>

    <style id="wpforms-css-vars-root">
        :root {
            --wpforms-field-border-radius: 3px;
            --wpforms-field-border-style: solid;
            --wpforms-field-border-size: 1px;
            --wpforms-field-background-color: #ffffff;
            --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
            --wpforms-field-border-color-spare: rgba(0, 0, 0, 0.25);
            --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
            --wpforms-field-menu-color: #ffffff;
            --wpforms-label-color: rgba(0, 0, 0, 0.85);
            --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
            --wpforms-label-error-color: #d63637;
            --wpforms-button-border-radius: 3px;
            --wpforms-button-border-style: none;
            --wpforms-button-border-size: 1px;
            --wpforms-button-background-color: #066aab;
            --wpforms-button-border-color: #066aab;
            --wpforms-button-text-color: #ffffff;
            --wpforms-page-break-color: #066aab;
            --wpforms-background-image: none;
            --wpforms-background-position: center center;
            --wpforms-background-repeat: no-repeat;
            --wpforms-background-size: cover;
            --wpforms-background-width: 100px;
            --wpforms-background-height: 100px;
            --wpforms-background-color: rgba(0, 0, 0, 0);
            --wpforms-background-url: none;
            --wpforms-container-padding: 0px;
            --wpforms-container-border-style: none;
            --wpforms-container-border-width: 1px;
            --wpforms-container-border-color: #000000;
            --wpforms-container-border-radius: 3px;
            --wpforms-field-size-input-height: 43px;
            --wpforms-field-size-input-spacing: 15px;
            --wpforms-field-size-font-size: 16px;
            --wpforms-field-size-line-height: 19px;
            --wpforms-field-size-padding-h: 14px;
            --wpforms-field-size-checkbox-size: 16px;
            --wpforms-field-size-sublabel-spacing: 5px;
            --wpforms-field-size-icon-size: 1;
            --wpforms-label-size-font-size: 16px;
            --wpforms-label-size-line-height: 19px;
            --wpforms-label-size-sublabel-font-size: 14px;
            --wpforms-label-size-sublabel-line-height: 17px;
            --wpforms-button-size-font-size: 17px;
            --wpforms-button-size-height: 41px;
            --wpforms-button-size-padding-h: 15px;
            --wpforms-button-size-margin-top: 10px;
            --wpforms-container-shadow-size-box-shadow: none;

        }
    </style>
    <script src="/js/wp-emoji-release.min.js" defer=""></script>
</head>

<body
    class="post-template-default single single-post postid-2921 single-format-standard theme-fox woocommerce-js masthead-mobile-fixed fox-theme lightmode layout-wide style--dropcap-default dropcap-style-default style--dropcap-font-body style--tag-block style--list-widget-1 style--tagcloud-1 style--blockquote-has-icon style--blockquote-icon-4 style--blockquote-icon-position-overlap style--single-heading-border_top elementor-default elementor-kit-6"
    itemscope="" itemtype="https://schema.org/WebPage">



    <div id="wi-all" class="fox-outer-wrapper fox-all wi-all">


        <div id="wi-wrapper" class="fox-wrapper wi-wrapper">

            <div class="wi-container">

                {{-- header --}}
                @include('pages.layout.header')

                <div id="masthead-height"></div>

                <div id="wi-main" class="wi-main fox-main">
                    <div class="single-builder">

                        <div class="container2">

                            <div data-elementor-type="wp-post" data-elementor-id="331"
                                class="elementor elementor-331">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-8b11ee4 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                    data-id="8b11ee4" data-element_type="section" data-settings="{"
                                    background_background":"classic"}"="">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f2a053"
                                            data-id="4f2a053" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-04f3b0e elementor-widget__width-inherit align-center elementor-widget elementor-widget-fox_single_meta"
                                                    data-id="04f3b0e" data-element_type="widget"
                                                    data-widget_type="fox_single_meta.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="el-single-meta style-link-underline-none">

                                                            <div
                                                                class="entry-categories meta-categories categories-plain">

                                                                <a href="{{ route('category',['category'=>$categoryName]) }}"
                                                                    rel="tag">{{ $categoryName }}</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6874bcb align-center elementor-widget elementor-widget-fox_single_title"
                                                    data-id="6874bcb" data-element_type="widget"
                                                    data-widget_type="fox_single_title.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="el-single-title">

                                                            <h1 class="el-title-tag">{{ $post->title }}</h1>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9287b12 align-center elementor-widget elementor-widget-fox_single_subtitle"
                                                    data-id="9287b12" data-element_type="widget"
                                                    data-widget_type="fox_single_subtitle.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="el-single-subtitle">

                                                            {{ $post->description }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d3dbd00 elementor-widget__width-inherit align-center elementor-widget elementor-widget-fox_single_meta"
                                                    data-id="d3dbd00" data-element_type="widget"
                                                    data-widget_type="fox_single_meta.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="el-single-meta style-link-underline-none">
                                                            <div class="fox-meta-author entry-author meta-author"
                                                                itemprop="author" itemscope=""
                                                                itemtype="https://schema.org/Person"><a
                                                                    class="meta-author-avatar" itemprop="url"
                                                                    rel="author"
                                                                    href=""><img
                                                                        alt=""
                                                                       src="{{ $post?->author?->image }}"
                                                                         decoding="async"></a><span
                                                                    class="byline"> by <a class="url fn"
                                                                        itemprop="url" rel="author"
                                                                        href="">{{ $post?->author?->name }}
                                                                        </a></span></div><span
                                                                class="sep">·</span>
                                                            <div class="entry-date meta-time"><time class="published"
                                                                    itemprop="datePublished"
                                                                    datetime="">{{ $post->created_at->format('F j , Y') }}</time></div><span class="sep">·</span>
                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ec887a1 elementor-widget elementor-widget-fox_single_thumbnail"
                                                    data-id="ec887a1" data-element_type="widget"
                                                    data-widget_type="fox_single_thumbnail.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="el-single-thumbnail">

                                                            <div class="elementor-thumbnail">
                                                                <figure
                                                                    class="fox-figure post-thumbnail post-thumbnail-standard hover-none thumbnail-acute"
                                                                    itemscope=""
                                                                    itemtype="https://schema.org/ImageObject">
                                                                    <div class="image-element thumbnail-inner">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="{{ $post->thumbnail }}"
                                                                            class="attachment-medium_large size-medium_large"
                                                                            alt="{{ $post->title }}"
                                                                            decoding="async"
                                                                            style="width: 100%; max-width: 720px; height: auto;"
                                                                        >
                                                                    </div>
                                                                    <figcaption class="fox-figcaption" style="text-align: center ; color : gray ;">{{$post->image_caption}}</figcaption>
                                                                   
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-56f5059 align-center elementor-widget elementor-widget-fox_btn"
                                                    data-id="56f5059" data-element_type="widget"
                                                    data-widget_type="fox_btn.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="el-button">

                                                            <a class="el-btn btn-flexible">


                                                                <span class="btn-text">SAVE ARTICLE</span>

                                                                <span class="btn-icon"><i
                                                                        class="far fa-bookmark"></i></span>


                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-5f61878 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="5f61878" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c08114a"
                                            data-id="c08114a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e3ec2d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="e3ec2d8" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1f5224e"
                                                            data-id="1f5224e" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-43a4dca elementor-widget elementor-widget-fox_single_content"
                                                                    data-id="43a4dca" data-element_type="widget"
                                                                    data-widget_type="fox_single_content.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div
                                                                            class="el-single-content allow-stretch-full allow-stretch-bigger">

                                                                            <div class="article-content">
                                                                                {!! $post->blog !!}

                                                                            </div><!-- .article-content -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-834eb41 align-center elementor-widget elementor-widget-fox_taxonomy"
                                                                    data-id="834eb41" data-element_type="widget"
                                                                    data-widget_type="fox_taxonomy.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="el-tax">




                                                                            {{-- <ul class="tax-inner">
                                                                                <li><a
                                                                                        href="https://dubaimag.ae/tag/abu-dhabi/"><span
                                                                                            class="tax-item-name">Abu
                                                                                            Dhabi</span></a></li>
                                                                                <li><a
                                                                                        href="https://dubaimag.ae/tag/phytomer/"><span
                                                                                            class="tax-item-name">Phytomer</span></a>
                                                                                </li>
                                                                                <li><a
                                                                                        href="https://dubaimag.ae/tag/zayna-spa/"><span
                                                                                            class="tax-item-name">Zayna
                                                                                            Spa</span></a></li>
                                                                            </ul> --}}


                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="elementor-element elementor-element-5690b44 align-center elementor-widget elementor-widget-heading"
                                                                    data-id="5690b44" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="fox-heading">


                                                                            <div class="heading-section heading-title">

                                                                                <h4
                                                                                    class="heading-title-main size-large text-uppercase">
                                                                                    Share This</h4>
                                                                            </div><!-- .heading-title -->


                                                                        </div><!-- .fox-heading -->
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-0d4728d align-center elementor-widget elementor-widget-fox_share"
                                                                    data-id="0d4728d" data-element_type="widget"
                                                                    data-widget_type="fox_share.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="el-share">

                                                                            @php
                                                                                $url = route('blog',['slug'=>$post->slug]) ;
                                                                                $text = $post->title ;
                                                                            @endphp
                                                                            <ul>


                                                                                <li class="li-share-facebook">

                                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}"
                                                                                        title="Facebook"
                                                                                        class="share share-facebook">

                                                                                        <i
                                                                                            class="fab fa-facebook-f"></i>
                                                                                        <span>Facebook</span>

                                                                                    </a>

                                                                                </li>


                                                                                <li class="li-share-twitter">

                                                                                    <a href="https://twitter.com/intent/tweet?url={{ $url }}&amp;text={{ $text }}&amp;via=withemes"
                                                                                        title="Twitter"
                                                                                        class="share share-twitter">

                                                                                        <i class="fab fa-twitter"></i>
                                                                                        <span>Twitter</span>

                                                                                    </a>

                                                                                </li>


                                                                                <li class="li-share-pinterest">

                                                                                    <a href="https://pinterest.com/pin/create/button/?url={{ $url }}&amp;description={{ $text }}"
                                                                                        title="Pinterest"
                                                                                        class="share share-pinterest">

                                                                                        <i
                                                                                            class="fab fa-pinterest-p"></i>
                                                                                        <span>Pinterest</span>

                                                                                    </a>

                                                                                </li>


                                                                                <li class="li-share-linkedin">

                                                                                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ $url }}&amp;title={{ $text }}"
                                                                                        title="Linkedin"
                                                                                        class="share share-linkedin">

                                                                                        <i
                                                                                            class="fab fa-linkedin-in"></i>
                                                                                        <span>Linkedin</span>

                                                                                    </a>

                                                                                </li>


                                                                                <li class="li-share-whatsapp">

                                                                                    <a href="https://api.whatsapp.com/send?phone=&amp;text={{ $url }}"
                                                                                        title="Whatsapp"
                                                                                        class="share share-whatsapp">

                                                                                        <i class="fab fa-whatsapp"></i>
                                                                                        <span>Whatsapp</span>

                                                                                    </a>

                                                                                </li>


                                                                                <li class="li-share-reddit">

                                                                                    <a href="https://www.reddit.com/submit?url={{ $url }}&amp;title={{ $text }}"
                                                                                        title="Reddit"
                                                                                        class="share share-reddit">

                                                                                        <i
                                                                                            class="fab fa-reddit-alien"></i>
                                                                                        <span>Reddit</span>

                                                                                    </a>

                                                                                </li>


                                                                                <li class="li-share-email">

                                                                                    <a href="mailto:?subject={{ $text }}&amp;body={{ $url }}"
                                                                                        title="Email"
                                                                                        class="email-share">

                                                                                        <i class="feather-mail"></i>
                                                                                        <span>Email</span>

                                                                                    </a>

                                                                                </li>


                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="elementor-element elementor-element-d1a7220 align-center align-left elementor-widget elementor-widget-authors"
                                                                    data-id="d1a7220" data-element_type="widget"
                                                                    data-widget_type="authors.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="fox-authors-wrapper">

                                                                            <div
                                                                                class="fox-authors fox-users fox-authors-grid column-1 has-border">

                                                                                <div
                                                                                    class="fox-user-item fox-author fox-user">


                                                                                    <div
                                                                                        class="user-item-avatar avatar-circle">

                                                                                      

                                                                                            <img alt=""
                                                                                                src="{{ $post?->author?->image }}"
                                                                                                style=" width : 90px !important ; height : 90px !important ; object-fit : cover " 
                                                                                                decoding="async">
                                                                               

                                                                                    </div><!-- .user-item-avatar -->


                                                                                    <div class="user-item-body">


                                                                                        <div class="user-item-header">

                                                                                            <div
                                                                                                class="user-item-name-wrapper">

                                                                                                <h3
                                                                                                    class="user-item-name">

                                                                                                    {{ $post?->author?->name }}

                                                                                                </h3>

                                                                                            </div>
                                                                                            <!-- .user-item-name-wrapper -->

                                                                                        </div><!-- .user-item-header -->



                                                                                        <!-- .user-item-description -->
                                                                                        <div class="user-item-description">

                                                                                            <p>{{ $post?->author?->bio }}</p>
                                                                            
                                                                                        </div><!-- .user-item-description -->
                                                                            



                                                                                       




                                                                                    </div><!-- .user-item-body -->

                                                                         
                                                                                </div><!-- .fox-user-item -->



                                                                            </div><!-- .fox-authors -->

                                                                        </div><!-- .fox-authors-wrapper -->
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-a15aef2 elementor-widget elementor-widget-fox_single_comments"
                                                                    data-id="a15aef2" data-element_type="widget"
                                                                    data-widget_type="fox_single_comments.default">
                                                                    <div class="elementor-widget-container">

                                                                        {{-- <div class="el-single-comments">


                                                                            <div id="comments"
                                                                                class="comments-area single-section single-component">



                                                                                <div id="respond"
                                                                                    class="comment-respond">
                                                                                    <h3 id="reply-title"
                                                                                        class="comment-reply-title single-heading">
                                                                                        <span>Leave a Reply</span>
                                                                                        <small><a rel="nofollow"
                                                                                                id="cancel-comment-reply-link"
                                                                                                href="/lifestyle/zayna-spa-and-phytomer-team-up-to-bring-new-facials-to-abu-dhabi/#respond"
                                                                                                style="display:none;">Cancel
                                                                                                reply</a></small></h3>
                                                                                    <form
                                                                                        action="https://dubaimag.ae/wp-comments-post.php"
                                                                                        method="post"
                                                                                        id="commentform"
                                                                                        class="comment-form"
                                                                                        novalidate="">
                                                                                        <p class="comment-notes">Your
                                                                                            email address will not be
                                                                                            published.</p>
                                                                                        <p
                                                                                            class="comment-form-comment">
                                                                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"
                                                                                                placeholder="Write your comment..."></textarea>
                                                                                        </p>
                                                                                        <p
                                                                                            class="comment-form-author">
                                                                                            <input id="author"
                                                                                                name="author"
                                                                                                type="text"
                                                                                                value=""
                                                                                                size="30"
                                                                                                placeholder="Name">
                                                                                        </p>
                                                                                        <p class="comment-form-email">
                                                                                            <input id="email"
                                                                                                name="email"
                                                                                                type="email"
                                                                                                value=""
                                                                                                size="30"
                                                                                                placeholder="Email">
                                                                                        </p>
                                                                                        <p class="comment-form-url">
                                                                                            <input id="url"
                                                                                                name="url"
                                                                                                type="url"
                                                                                                value=""
                                                                                                size="30"
                                                                                                placeholder="Website">
                                                                                        </p>
                                                                                        <p
                                                                                            class="comment-form-cookies-consent">
                                                                                            <input
                                                                                                id="wp-comment-cookies-consent"
                                                                                                name="wp-comment-cookies-consent"
                                                                                                type="checkbox"
                                                                                                value="yes"> <label
                                                                                                for="wp-comment-cookies-consent">Save
                                                                                                my name, email, and
                                                                                                website in this browser
                                                                                                for the next time I
                                                                                                comment.</label></p>
                                                                                        <p class="form-submit"><input
                                                                                                name="submit"
                                                                                                type="submit"
                                                                                                id="submit"
                                                                                                class="submit"
                                                                                                value="Post Comment">
                                                                                            <input type="hidden"
                                                                                                name="comment_post_ID"
                                                                                                value="2921"
                                                                                                id="comment_post_ID">
                                                                                            <input type="hidden"
                                                                                                name="comment_parent"
                                                                                                id="comment_parent"
                                                                                                value="0">
                                                                                        </p>
                                                                                    </form>
                                                                                </div><!-- #respond -->

                                                                            </div><!-- #comments .comments-area -->
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                 
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-7bdd5933 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="7bdd5933" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70c858bc"
                                            data-id="70c858bc" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
           

                                                <div class="elementor-element elementor-element-1385e05 align-left elementor-widget elementor-widget-heading"
                                                    data-id="1385e05" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="fox-heading heading-line-wave">



                                                                @if (count($relatedPosts) > 0)
                                                                    

                                                                <div class="" style="display:  flex ; align-items: center ; gap : 20px ">
                                                                    
                                                                    <div>
                                                                        <h3 class="heading-title-main size-large">RELATED
                                                                        </h3>
                                                                    </div>
                                                                    <div style="background-color: black ; width : 100% ; height : 3px">
                                                                        
                                                                    </div>
                                                                    
                                                                </div><!-- .heading-title -->

                                                                @endif
                                                                


                                                        </div><!-- .fox-heading -->
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5909d034 align-left pagination-align-center elementor-widget elementor-widget-post-grid"
                                                    data-id="5909d034" data-element_type="widget"
                                                    data-widget_type="post-grid.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="blog-container blog-container-grid">

                                                            <div
                                                                class="wi-blog fox-blog blog-grid fox-grid blog-card-has-shadow column-4 spacing-custom">

                                                            @foreach ( $relatedPosts as $post )
                                                                
                                                                <article
                                                                    class="wi-post post-item post-grid fox-grid-item style-title-hover-none post-2875 post type-post status-publish format-standard has-post-thumbnail hentry category-lifestyle tag-dubai tag-uae tag-uae-fuel-prices has-sidebar sidebar-right style--link-2"
                                                                    itemscope=""
                                                                    itemtype="https://schema.org/CreativeWork">

                                                                    <div
                                                                        class="post-item-inner grid-inner post-grid-inner">


                                                                        <figure
                                                                            class="wi-thumbnail fox-thumbnail post-item-thumbnail fox-figure grid-thumbnail thumbnail-acute ratio-landscape hover-zoomin"
                                                                            itemscope=""
                                                                            itemtype="https://schema.org/ImageObject">

                                                                            <div class="thumbnail-inner">


                                                                                <a href="{{route('blog',['slug'=>$post->slug])}}"
                                                                                    class="post-link">


                                                                                    <span class="image-element">

                                                                                        <img loading="lazy"
                                                                                           style="aspect-ratio : 4/3  !important ;
                                                                                           object-fit : cover !important"
                                                                                            src="{{ $post->thumbnail }}"
                                                                                            class="attachment-thumbnail-medium size-thumbnail-medium"
                                                                                            alt="{{ $post->title }}"
                                                                                            decoding="async">
                                                                                    </span><!-- .image-element -->




                                                                                </a>


                                                                            </div><!-- .thumbnail-inner -->


                                                                        </figure><!-- .fox-thumbnail -->


                                                                        <div
                                                                            class="post-body post-item-body grid-body post-grid-body">
                                                                            <div class="post-body-inner">
                                                                                <div class="post-item-header">
                                                                                    <div
                                                                                        class="entry-categories meta-categories categories-plain standalone-categories post-header-section">

                                                                                        <a href="{{ route('category',['category'=>$categoryName]) }}"
                                                                                            rel="tag">{{ $categoryName }}</a>
                                                                                    </div>


                                                                                    <h2 class="post-item-title wi-post-title fox-post-title post-header-section size-normal"
                                                                                        itemprop="headline">
                                                                                        <a href="{{route('blog',['slug'=>$post->slug])}}"
                                                                                            rel="bookmark">
                                                                                           {{$post->title}}
                                                                                        </a>

                                                                                    </h2>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- .post-item-body -->


                                                                    </div><!-- .post-item-inner -->

                                                                </article><!-- .post-item -->
                                                            @endforeach
                                                            

                                                            </div><!-- .fox-blog -->


                                                        </div><!-- .fox-blog-container -->

                                                    </div>
                                                </div>

                                                @php
                                                    $categories = [
                                                        'Leadership' => $leadershipPosts->slice(0,4),
                                                        'Lifestyle ' => $lifestylePosts->slice(0,4) ,
                                                    ];
                                                @endphp

                        @foreach($categories as $categoryName => $categoryPosts)

                        @if( isset($categoryPosts) && $categoryPosts->count())
                                                <div class="elementor-element elementor-element-8670c0b align-left elementor-widget elementor-widget-heading"
                                                    data-id="8670c0b" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="fox-heading heading-line-wave">


                                                            <div class="" style="display:  flex ; align-items: center ; gap : 20px ">
                                                                    
                                                                <div>
                                                                    <h3 class="heading-title-main size-large">{!! $categoryName !!}
                                                                    </h3>
                                                                </div>
                                                                <div style="background-color: black ; width : 100% ; height : 3px">
                                                                    
                                                                </div>
                                                                
                                                            </div><!-- .heading-title -->


                                                        </div><!-- .fox-heading -->
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8e09780 align-left pagination-align-center elementor-widget elementor-widget-post-grid"
                                                    data-id="8e09780" data-element_type="widget"
                                                    data-widget_type="post-grid.default">
                                                    <div class="elementor-widget-container">

                                                        <div class="blog-container blog-container-grid">

                                                            <div
                                                                class="wi-blog fox-blog blog-grid fox-grid blog-card-has-shadow column-4 spacing-custom">

                                                            @foreach ( $categoryPosts as  $post)
                                                                
                                                                <article
                                                                    class="wi-post post-item post-grid fox-grid-item style-title-hover-none post-2760 post type-post status-publish format-standard has-post-thumbnail hentry category-luxury has-sidebar sidebar-right style--link-2"
                                                                    itemscope=""
                                                                    itemtype="https://schema.org/CreativeWork">

                                                                    <div
                                                                        class="post-item-inner grid-inner post-grid-inner">


                                                                        <figure
                                                                            class="wi-thumbnail fox-thumbnail post-item-thumbnail fox-figure grid-thumbnail thumbnail-acute ratio-landscape hover-zoomin"
                                                                            itemscope=""
                                                                            itemtype="https://schema.org/ImageObject">

                                                                            <div class="thumbnail-inner">


                                                                                <a href="{{ route('blog',['slug' => $post->slug ]) }}"
                                                                                    class="post-link">


                                                                                    <span class="image-element">

                                                                                        <img loading="lazy"
                                                                                              style="aspect-ratio : 4/3  !important ; object-fit : cover !important"
                                                                                            src="{{ $post->thumbnail }}"
                                                                                            class="attachment-thumbnail-medium size-thumbnail-medium"
                                                                                            alt=""
                                                                                            decoding="async">
                                                                                    </span><!-- .image-element -->




                                                                                </a>


                                                                            </div><!-- .thumbnail-inner -->


                                                                        </figure><!-- .fox-thumbnail -->


                                                                        <div
                                                                            class="post-body post-item-body grid-body post-grid-body">
                                                                            <div class="post-body-inner">
                                                                                <div class="post-item-header">
                                                                                    <div
                                                                                        class="entry-categories meta-categories categories-plain standalone-categories post-header-section">

                                                                                        <a href="{{ route('category',['category'=>$post->category->category]) }}"

                                                                                            rel="tag">{{ $post->category->category }}</a>
                                                                                    </div>


                                                                                    <h2 class="post-item-title wi-post-title fox-post-title post-header-section size-normal"
                                                                                        itemprop="headline">
                                                                                        <a href="{{ route('blog',['slug' => $post->slug ]) }}"

                                                                                            rel="bookmark">
                                                                                           {{ $post->title }}
                                                                                        </a>

                                                                                    </h2>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- .post-item-body -->


                                                                    </div><!-- .post-item-inner -->

                                                                </article><!-- .post-item -->
                                                      
                                                            @endforeach
                                                              

                                                            </div><!-- .fox-blog -->


                                                        </div><!-- .fox-blog-container -->

                                                    </div>
                                                </div>
                                       
                        @endif
                        @endforeach                        
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>

                    </div><!-- .single-builder -->

                </div><!-- #wi-main -->






            </div><!-- .wi-container -->

            <div class="wrapper-bg-element"></div>

            <div class="wrapper-border-top hand-border-h wrapper-border"></div>
            <div class="wrapper-border-bottom hand-border-h wrapper-border"></div>
            <div class="wrapper-border-left hand-border-v wrapper-border"></div>
            <div class="wrapper-border-right hand-border-v wrapper-border"></div>

        </div><!-- #wi-wrapper -->

    </div><!-- #wi-all -->


    <div id="offcanvas" class="offcanvas offcanvas-light">

        <div class="offcanvas-inner">



            <div class="offcanvas-search offcanvas-element">
                <div class="searchform">

                    <form role="search" method="get" action="https://dubaimag.ae/" itemprop="potentialAction"
                        itemscope="" itemtype="https://schema.org/SearchAction" class="form">

                        <input type="text" name="s" class="s search-field" value=""
                            placeholder="Type &amp; hit enter">

                        <button class="submit" role="button" title="Go">

                            <i class="fa fa-search"></i>
                        </button>

                    </form><!-- .form -->

                </div><!-- .searchform -->
            </div>








        </div><!-- .offcanvas-inner -->

    </div><!-- #offcanvas -->

    <div id="offcanvas-bg" class="offcanvas-bg"></div>
    <div class="offcanvas-overlay" id="offcanvas-overlay"></div>

    <span data-foxframework-version="2.1"></span>
    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }

            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();
    </script><!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://dubaimag.ae/wp-admin/admin-ajax.php";
    </script>
    <div id="backtotop" class="backtotop fox-backtotop scrollup backtotop-circle backtotop-icon">

        <span class="btt-icon"><i class="feather-chevron-up"></i></span>
    </div><!-- #backtotop -->


    <progress value="0" class="reading-progress-wrapper position-top">

        <div class="progress-container">
            <span class="reading-progress-bar"></span>
        </div>

    </progress>

    <span data-fox_version="5.5.4.1" data-fox_framework_version="2.1" data-demo="sophia"></span>
    <script type="text/javascript">
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel="stylesheet" id="wc-blocks-style-css" href="/css/wc-blocks.css" media="all">
    <link rel="stylesheet" id="elementor-post-296-css" href="/css/post-296.css" media="all">
    <link rel="stylesheet" id="elementor-post-300-css" href="/css/post-300.css" media="all">
    <script src="/js/fox-elementor.js" id="fox-elementor-js"></script>
    <script src="/js/hooks.min.js" id="wp-hooks-js"></script>
    <script src="/js/i18n.min.js" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script src="/js/index.js" id="swv-js"></script>
    <script id="contact-form-7-js-extra">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/dubaimag.ae\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            },
            "cached": "1"
        };
    </script>
    <script src="/js/index_1.js" id="contact-form-7-js"></script>
    <script src="/js/comment-reply.min.js" id="comment-reply-js" async="" data-wp-strategy="async"></script>
    <script id="mediaelement-core-js-before">
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script src="/js/mediaelement-and-player.min.js" id="mediaelement-core-js"></script>
    <script src="/js/mediaelement-migrate.min.js" id="mediaelement-migrate-js"></script>
    <script id="mediaelement-js-extra">
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
    </script>
    <script src="/js/wp-mediaelement.min.js" id="wp-mediaelement-js"></script>
    <script id="wi-main-js-extra">
        var WITHEMES = {
            "l10n": {
                "prev": "Previous",
                "next": "Next",
                "loading": "Loading.."
            },
            "enable_sticky_sidebar": "",
            "enable_sticky_header": "1",
            "ajaxurl": "https:\/\/dubaimag.ae\/wp-admin\/admin-ajax.php",
            "siteurl": "https:\/\/dubaimag.ae",
            "nonce": "9a5c4bd5a4",
            "resturl_v2": "https:\/\/dubaimag.ae\/wp-json\/wp\/v2\/",
            "resturl_v2_posts": "https:\/\/dubaimag.ae\/wp-json\/wp\/v2\/posts\/",
            "tablet_breakpoint": "840",
            "enable_lightbox": "1"
        };
    </script>
    <script src="/js/theme.min.js" id="wi-main-js"></script>
    <script src="/js/sourcebuster.min.js" id="sourcebuster-js-js"></script>
    <script id="wc-order-attribution-js-extra">
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "base64": false,
                "ajaxurl": "https:\/\/dubaimag.ae\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "utm_source_platform": "current.plt",
                "utm_creative_format": "current.fmt",
                "utm_marketing_tactic": "current.tct",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
    </script>
    <script src="/js/order-attribution.min.js" id="wc-order-attribution-js"></script>
    <script id="sbi_scripts-js-extra">
        var sb_instagram_js_options = {
            "font_method": "svg",
            "resized_url": "https:\/\/dubaimag.ae\/wp-content\/uploads\/sb-instagram-feed-images\/",
            "placeholder": "https:\/\/dubaimag.ae\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png",
            "ajax_url": "https:\/\/dubaimag.ae\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script src="/js/sbi-scripts.min.js" id="sbi_scripts-js"></script>
    <script defer="" src="/js/forms.js" id="mc4wp-forms-api-js"></script>
    <script src="/js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
    <script src="/js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
    <script src="/js/waypoints.min.js" id="elementor-waypoints-js"></script>
    <script src="/js/core.min.js" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.23.4",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_css_loading": true,
                "additional_custom_breakpoints": true,
                "container_grid": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_onboarding": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "e_lazyload": true
            },
            "urls": {
                "assets": "https:\/\/dubaimag.ae\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/dubaimag.ae\/wp-admin\/admin-ajax.php"
            },
            "nonces": {
                "floatingButtonsClickTracking": "ff9b86d102"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 2921,
                "title": "Zayna%20Spa%20and%20Phytomer%20Team%20Up%20to%20Bring%20New%20Facials%20to%20Abu%20Dhabi%20-%20Dubai%20Magazine",
                "excerpt": "",
                "featuredImage": "https:\/\/dubaimag.ae\/wp-content\/uploads\/2024\/09\/image-10.png"
            }
        };
    </script>
    <script src="/js/frontend.min.js" id="elementor-frontend-js"></script>

{{-- footer --}}
@include('pages.layout.footer')


</body>

</html><!-- Page cached by LiteSpeed Cache 6.5.0.2 on 2024-09-09 10:23:58 -->

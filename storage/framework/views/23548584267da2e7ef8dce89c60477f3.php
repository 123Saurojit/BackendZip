<!DOCTYPE html>
<html lang="en-US" class="no-mobile no-tablet no-touch">

<head>
    <meta charset="utf-8" data-next-head="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" data-next-head="" />
    <meta name="X-UA-Compatible" http-equiv="X-UA-Compatible" content="IE=edge" data-next-head="" />
    <meta name="msapplication-tap-highlight" content="no" data-next-head="" />
    <title data-next-head="">
        Fashion Magazine - Beauty Tips, Fashion Trends, & Celebrity News -
        ELLE
    </title>
    <?php echo $__env->make('pages.layouts.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script id="settings" data-nscript="beforeInteractive">
        (window.__FRE = { env: "production", ver: "0.12.190", cdn: true }),
            (window.__SITE = {
                brand: "elle",
                domain: "https://www.elle.com",
                dk: "aHR0cHM6Ly93d3cuZWxsZS5jb::20=",
                force_www: true,
                id: "530bacd4-96b2-4cfe-a9a6-1fbd7c749e22",
                locale: "en-us",
                locale_path: "",
                trailing_slash: true,
                assetPrefix: "/_assets/fre/scopes/hdm",
            }),
            Object.defineProperties(window, {
                ADSFREE: { value: false, writable: !1 },
                GDPR: { value: true, writable: !1 },
            });
    </script>
    <script id="device-detect" data-nscript="beforeInteractive">
        (() => {
            const o =
                "ontouchstart" in window ||
                !!navigator.maxTouchPoints ||
                window.location.search.includes("__touch"),
                t = window.matchMedia(
                    "only screen and (max-width: 767px)"
                ).matches,
                n = o && t,
                i = o && !t,
                e = [
                    n ? "mobile" : "no-mobile",
                    i ? "tablet" : "no-tablet",
                    o ? "touch" : "no-touch",
                ];
            (window.touch = o),
                (window.tablet = i),
                (window.mobile = n),
                (window.desktop = !(n || i)),
                document.documentElement.classList.add(...e);
        })();
    </script>
    <script id="journey-info" data-nscript="beforeInteractive">
        (() => {
            if (window.JOURNEY_INFO) return;
            const e = new RegExp(
                ["Publication-Access-for-Facebook", "adwallet"].join("|"),
                "i"
            ).test(navigator.userAgent);
            window.JOURNEY_INFO = { status: "pending", isBot: e };
            const i = Number.parseInt("null", 10);
            Number.isNaN(i) ||
                (window.JOURNEY_INFO.previewBlockerSlidePosition = i);
        })();
    </script>
    <script id="lux" data-nscript="beforeInteractive">
        LUX = (function () {
            const a =
                typeof LUX !== "undefined" &&
                    typeof LUX.gaMarks !== "undefined"
                    ? LUX.gaMarks
                    : [];
            const d =
                typeof LUX !== "undefined" &&
                    typeof LUX.gaMeasures !== "undefined"
                    ? LUX.gaMeasures
                    : [];
            const j = "LUX_start";
            const k = window.performance;
            let l =
                typeof LUX !== "undefined" && LUX.ns
                    ? LUX.ns
                    : Date.now
                        ? Date.now()
                        : +new Date();
            if (k && k.timing && k.timing.navigationStart) {
                l = k.timing.navigationStart;
            }
            function f() {
                if (k && k.now) {
                    return k.now();
                }
                const o = Date.now ? Date.now() : +new Date();
                return o - l;
            }
            function b(n) {
                if (k) {
                    if (k.mark) {
                        return k.mark(n);
                    }
                    if (k.webkitMark) {
                        return k.webkitMark(n);
                    }
                }
                a.push({
                    name: n,
                    entryType: "mark",
                    startTime: f(),
                    duration: 0,
                });
            }
            function m(p, t, n) {
                if (typeof t === "undefined" && h(j)) {
                    t = j;
                }
                if (k) {
                    if (k.measure) {
                        if (t) {
                            if (n) {
                                return k.measure(p, t, n);
                            }
                            return k.measure(p, t);
                        }
                        return k.measure(p);
                    }
                    if (k.webkitMeasure) {
                        return k.webkitMeasure(p, t, n);
                    }
                }
                let r = 0;
                let o = f();
                if (t) {
                    const s = h(t);
                    if (s) {
                        r = s.startTime;
                    } else if (k && k.timing && k.timing[t]) {
                        r = k.timing[t] - k.timing.navigationStart;
                    } else {
                        return;
                    }
                }
                if (n) {
                    const q = h(n);
                    if (q) {
                        o = q.startTime;
                    } else if (k && k.timing && k.timing[n]) {
                        o = k.timing[n] - k.timing.navigationStart;
                    } else {
                        return;
                    }
                }
                d.push({
                    name: p,
                    entryType: "measure",
                    startTime: r,
                    duration: o - r,
                });
            }
            function h(n) {
                return c(n, g());
            }
            function c(p, o) {
                for (i = o.length - 1; i >= 0; i--) {
                    const n = o[i];
                    if (p === n.name) {
                        return n;
                    }
                }
                return undefined;
            }
            function g() {
                if (k) {
                    if (k.getEntriesByType) {
                        return k.getEntriesByType("mark");
                    }
                    if (k.webkitGetEntriesByType) {
                        return k.webkitGetEntriesByType("mark");
                    }
                }
                return a;
            }
            return { mark: b, measure: m, gaMarks: a, gaMeasures: d };
        })();
        LUX.ns = Date.now ? Date.now() : +new Date();
        LUX.ac = [];
        LUX.cmd = function (a) {
            LUX.ac.push(a);
        };
        LUX.init = function () {
            LUX.cmd(["init"]);
        };
        LUX.send = function () {
            LUX.cmd(["send"]);
        };
        LUX.addData = function (a, b) {
            LUX.cmd(["addData", a, b]);
        };
        LUX_ae = [];
        window.addEventListener("error", function (a) {
            LUX_ae.push(a);
        });
        LUX_al = [];
        if (
            typeof PerformanceObserver === "function" &&
            typeof PerformanceLongTaskTiming === "function"
        ) {
            const LongTaskObserver = new PerformanceObserver(function (c) {
                const b = c.getEntries();
                for (let a = 0; a < b.length; a++) {
                    const d = b[a];
                    LUX_al.push(d);
                }
            });
            try {
                LongTaskObserver.observe({ type: ["longtask"] });
            } catch (e) { }
        }
        LUX.label = "section";
    </script>
    <noscript data-n-css=""></noscript>
    <script defer="" nomodule="" src="js/polyfills-42372ed130431b0a.js"></script>
    <script id="onetrust-script" src="js/otSDKStub.js" async="" fetchpriority="high"
        data-domain-script="e435627f-2ac9-4bec-82c7-15e57b0250a3" data-document-language="true"
        data-nscript="beforeInteractive"></script>
    <script id="moapt-data-bundle" src="js/moapt-data.js" async="" fetchpriority="high"
        data-nscript="beforeInteractive"></script>
    <script id="moapt-bundle" src="js/moapt-bundle-hdm.js" async="" fetchpriority="high"
        data-nscript="beforeInteractive"></script>

    <link rel="preload" href="/_assets/design-tokens/elle/static/fonts/Saol-Display-Regular.1a09c0e.woff2" as="font"
        type="font/woff2" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/styles.css" media="none" onload="media='all'" />
    <style type="text/css" id="deferred-fonts" media="all">
        @font-face {
            font-family: "NeueHaasUnica";
            src: url("fonts/16eece37-9438-4888-8270-f6e32bc95fad.75b69ee.woff2") format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: "Inter";
            src: url("fonts/inter-v3-latin-regular.c8ad008.woff2") format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: "SaolText";
            src: url("fonts/Saol-Text-Regular.269d6f7.woff2") format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
        }
    </style>
    
    <style data-emotion="css-global k5cj40">
        body {
            --nav-height: 96px;
            --mobile-sticky-header-height: 96px;
        }
    </style>
    <style data-emotion="css-global y17bjk">
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        main {
            display: block;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
        }

        abbr[title] {
            border-bottom: none;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        img {
            border-style: none;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        [type='button']::-moz-focus-inner,
        [type='reset']::-moz-focus-inner,
        [type='submit']::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focusring,
        [type='button']:-moz-focusring,
        [type='reset']:-moz-focusring,
        [type='submit']:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type='checkbox'],
        [type='radio'] {
            box-sizing: border-box;
            padding: 0;
        }

        [type='number']::-webkit-inner-spin-button,
        [type='number']::-webkit-outer-spin-button {
            height: auto;
        }

        [type='search'] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type='search']::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details {
            display: block;
        }

        summary {
            display: -webkit-box;
            display: -webkit-list-item;
            display: -ms-list-itembox;
            display: list-item;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none;
        }

        * {
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            scroll-behavior: smooth;
            overflow-x: hidden;
            overflow-y: auto;
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                -webkit-animation-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
                -webkit-animation-iteration-count: 1 !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }

        html.no-scroll {
            overflow: hidden;
        }

        html.no-scroll body {
            overflow: scroll;
        }

        html.touch.no-scroll,
        html.touch body.no-scroll {
            overflow: hidden;
        }

        body {
            min-height: 100vh;
            min-height: -webkit-fill-available;
        }

        a {
            color: inherit;
        }

        a:focus-visible {
            outline: 0.125rem dotted;
            outline-offset: 0.313rem;
        }

        button {
            color: inherit;
        }

        img:-moz-loading {
            color: transparent;
        }

        .__resp-container {
            position: relative;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .__resp-container:before {
            content: '';
            color: transparent;
            display: block;
            width: 100%;
            height: 0;
            padding-bottom: var(--aspect-ratio, 100%);
        }

        .__resp-container img:not(.video-items-box img):not(.filmstrip-image-wrapper img):not([data-dynamic-svg]):not(.video-player img),
        .__resp-container video {
            position: absolute;
            top: var(--top, 0);
            left: var(--left, 0);
            width: var(--width, 100%);
            min-width: var(--min-width, 100%);
            height: var(--height, auto);
            max-height: var(--max-height, 100%);
            object-fit: var(--object-fit, cover);
        }

        .__resp-container .video-player video {
            object-fit: contain;
        }

        .__resp-container .video-player {
            position: absolute;
            top: 0;
        }

        .__resp-container.lqip img[importance=auto] {
            -webkit-transition: opacity 0.3s linear;
            transition: opacity 0.3s linear;
            opacity: 0;
        }

        .__resp-container.lqip img[importance=auto].lazyloaded {
            opacity: 1;
        }

        .screen-reader-only {
            position: absolute;
            left: -10000px, width:1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .lqip {
            -webkit-background-size: cover;
            background-size: cover;
            -webkit-background-position: center;
            background-position: center;
        }

        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>
    <style data-emotion="css-global jp827b">
        @font-face {
            font-family: "SaolDisplay";
            src: url("fonts/Saol-Display-Regular.1a09c0e.woff2") format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: "NeueHaasUnica-fallback";
            size-adjust: 103;
            src: local("Roboto");
        }

        @font-face {
            font-family: "SaolDisplay-fallback";
            size-adjust: 94;
            src: local("Roboto");
        }

        @font-face {
            font-family: "SaolText-fallback";
            size-adjust: 96.39999999999998;
            src: local("Roboto");
        }

        @font-face {
            font-family: "NeueHaasUnica-roboto";
            src: local("Roboto");
            size-adjust: 102.57%;
            ascent-override: 93.5%;
            descent-override: 26.81%;
        }

        @font-face {
            font-family: "NeueHaasUnica-local";
            src: local("Arial");
            size-adjust: 102.88%;
            ascent-override: 93.22%;
            descent-override: 26.73%;
        }

        @font-face {
            font-family: "NeueHaasUnica-upcase-roboto";
            src: local("Roboto");
            size-adjust: 104.04%;
            ascent-override: 92.17%;
            descent-override: 26.43%;
        }

        @font-face {
            font-family: "NeueHaasUnica-upcase-local";
            src: local("Arial");
            size-adjust: 96.4%;
            ascent-override: 99.48%;
            descent-override: 28.53%;
        }

        @font-face {
            font-family: "Inter-roboto";
            src: local("Roboto");
            size-adjust: 107.32%;
            ascent-override: 90.27%;
            descent-override: 22.5%;
        }

        @font-face {
            font-family: "Inter-local";
            src: local("Arial");
            size-adjust: 107.64%;
            ascent-override: 90%;
            descent-override: 22.43%;
        }

        @font-face {
            font-family: "SaolDisplay-roboto";
            src: local("Roboto");
            size-adjust: 94.13%;
            ascent-override: 79.68%;
            descent-override: 26.56%;
            line-gap-override: 32.93%;
        }

        @font-face {
            font-family: "SaolDisplay-local";
            src: local("Georgia");
            size-adjust: 95.04%;
            ascent-override: 78.92%;
            descent-override: 26.31%;
            line-gap-override: 32.62%;
        }

        @font-face {
            font-family: "SaolText-roboto";
            src: local("Roboto");
            size-adjust: 96.61%;
            ascent-override: 77.63%;
            descent-override: 25.88%;
            line-gap-override: 32.09%;
        }

        @font-face {
            font-family: "SaolText-local";
            src: local("Georgia");
            size-adjust: 97.54%;
            ascent-override: 76.89%;
            descent-override: 25.63%;
            line-gap-override: 31.78%;
        }

        @font-face {
            font-family: "SaolText-upcase-roboto";
            src: local("Roboto");
            size-adjust: 100.45%;
            ascent-override: 74.67%;
            descent-override: 24.89%;
            line-gap-override: 30.86%;
        }

        @font-face {
            font-family: "SaolText-upcase-local";
            src: local("Georgia");
            size-adjust: 93.59%;
            ascent-override: 80.13%;
            descent-override: 26.71%;
            line-gap-override: 33.12%;
        }
    </style>
    <style
        data-emotion="css 16ximrz 1kkonqv fpbvzc 1na6dr9 o3kmfn 1lgifh3 xwjhf9 lr5w6x 1fqyieb 75z2gz pjjyzu njpu5j 1vjstyg tm0o7j bbrknr sfww4i 1j48blf 1yhciq3 1joeej0 1o2meyd 40dj9l 1fj2vwy 1z0ns1o 0 1m67141 1cr3k5e jloo3l j0tz68 1fkzqk5 kcunsj 1ba3ot6 vz4ldn spe6hg 1cd8suq 1y3x20e rk6tbh 1cjybzt oa9wak 1nabglw 15fa8f5 1hpb4i6 2e1l8j 9j0y42 17nzgrb 1dmjnw1 hnknpq ha23m7 cs4uhs y4yi8 3jfnbc om4gqg 1sr6p3x 1e39s00 15nifei as5r5l 1fv2c70 rhj3ne 1qat9tq 1tddtcr 3ioj3p 1my0a2m 1pxdqsn ftsoqv 1dc3fjj m39hn 1c7d8p3 1nkb8av 1njatnj 5svtne 1o1ws1x 7wg99c 1bibe0b 1woa0je 1er9154 14flyc1 ly8qyl 1tgeyd0 hhmn3a 1xuh9pl 1m44p8r 1a613ux 8x9owz gouovr 1eedjog 17bsprv wgm1ip 1ow0w5y 1fld8nl 1qzwinz 19r2tia 1aroxpo hoj2rk q3yz31 13mc9rd 1fctiym w9tso1 19z6se 13iaw20 108bbug 1aq4sl if1pks viqse1 ztgqyu 1aj0fuk 1ui7hop guxj2g 1d3dqod 19szzr8 ovd4yx 157wciq g939jb 98w5c6 q9rv51 10ftiau 1ss7lvu iz4391 1gtkda7 6uae8g 70qvj9 n9en60 jmxdxt kzigki 1vc4yu1 15si9rg j307y1 i7117i lqx6q4 r7fsoq 5tjtfu 15y864j vq806a 1wohilq 6bu6ey 1o9hvj q82q9a">
        .css-16ximrz {
            visibility: hidden;
            content-visibility: hidden;
            background-color: #ffffff;
            color: #000;
            width: 20rem;
            max-width: 20rem;
            height: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
            position: fixed;
            top: 0rem;
            z-index: 8000000;
            -webkit-transition: -webkit-transform 0.2s linear;
            transition: transform 0.2s linear;
            -webkit-transform: translateX(-20rem);
            -moz-transform: translateX(-20rem);
            -ms-transform: translateX(-20rem);
            transform: translateX(-20rem);
        }

        .css-16ximrz>div {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 100%;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .css-16ximrz~.sidepanelToggleable {
            -webkit-transform: initial;
            -moz-transform: initial;
            -ms-transform: initial;
            transform: initial;
            -webkit-transition: -webkit-transform 0.2s linear;
            transition: transform 0.2s linear;
        }

        .css-16ximrz.open {
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
            visibility: visible;
            content-visibility: auto;
        }

        .css-16ximrz.open~.sidepanelToggleable {
            -webkit-transform: translateX(20rem);
            -moz-transform: translateX(20rem);
            -ms-transform: translateX(20rem);
            transform: translateX(20rem);
        }

        @media (min-width: 90rem) {
            .css-16ximrz.open~.sidepanelToggleable {
                -webkit-transform: translateX(7rem);
                -moz-transform: translateX(7rem);
                -ms-transform: translateX(7rem);
                transform: translateX(7rem);
            }
        }

        .css-1kkonqv {
            margin: 1rem 1rem 0 1rem;
            padding: 0 0.6rem;
            width: auto;
            height: 2.1875rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            margin-right: 6rem;
        }

        .css-1kkonqv svg {
            fill: #000000;
        }

        .css-fpbvzc {
            height: 1rem;
            width: 1rem;
        }

        .css-1na6dr9 {
            padding: 1rem;
            color: #000000;
            font-family: NeueHaasUnica, NeueHaasUnica-fallback,
                NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-size: 0.875rem;
            line-height: 2;
        }

        .css-o3kmfn {
            background-color: #000000;
            border: 0;
            color: #ffffff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.625rem 1.25rem;
            margin-top: 0rem;
            margin-bottom: 0rem;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-transform: uppercase;
            -webkit-transition: background 0.3s ease-in-out,
                color 0.3s ease-in-out;
            transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            right: 1.0625rem;
            top: 1rem;
            position: absolute;
        }

        .css-o3kmfn:hover {
            background-color: #525252;
            color: #fff;
            cursor: pointer;
            background: inherit;
        }

        .css-o3kmfn:disabled {
            background-color: #f3f4f6;
            color: #a3a3a3;
            cursor: not-allowed;
        }

        .css-o3kmfn {
            position: absolute;
            padding: 0.6rem;
            border-radius: 0;
            margin: 0rem;
            background: inherit;
            right: 1.0625rem;
        }

        .css-o3kmfn:focus-visible {
            outline: 0.125rem dotted;
            outline-offset: 0.313rem;
        }

        .css-1lgifh3 {
            width: 1rem;
            height: 1rem;
            fill: #000000;
        }

        .css-xwjhf9 {
            margin: 0.5rem 1rem 0.125rem;
            padding: 0rem;
            opacity: 35%;
            height: 0.0625rem;
            border: 0;
            width: auto;
            background-color: #000000;
            color: #fff;
        }

        .css-lr5w6x {
            position: relative;
            list-style: none;
            margin: 0rem;
            padding: 0.6rem;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            font-family: NeueHaasUnica, NeueHaasUnica-fallback,
                NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-size: 0.875rem;
            line-height: 2;
        }

        .css-lr5w6x a {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .css-1fqyieb {
            -webkit-transition: background-color 0.2s linear;
            transition: background-color 0.2s linear;
            padding: 0 1rem;
        }

        .css-1fqyieb.has-submenu {
            position: relative;
            padding: 0.5rem 1rem;
            color: #000000;
            -webkit-transition: padding 0.3s linear,
                background-color 0.2s linear;
            transition: padding 0.3s linear, background-color 0.2s linear;
        }

        .css-1fqyieb.has-submenu.submenu-open {
            padding: 0.5rem 1rem 0;
            background-color: #ffffff;
            color: #000;
        }

        .css-1fqyieb:focus {
            outline: 0.0625rem solid black;
        }

        @media (any-hover: hover) {
            .css-1fqyieb:hover {
                background-color: #ffffff;
                color: #000;
            }
        }

        .css-75z2gz {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            width: 100%;
            height: 2.875rem;
            color: #000000;
            -webkit-transition: color 0.2s linear;
            transition: color 0.2s linear;
        }

        .has-submenu .css-75z2gz {
            height: unset;
            display: inline;
            -webkit-align-items: unset;
            -webkit-box-align: unset;
            -ms-flex-align: unset;
            align-items: unset;
            padding: 0.5rem 0;
        }

        @media (any-hover: hover) {
            .css-75z2gz:hover {
                color: side-panel-menu-link;
            }
        }

        .css-pjjyzu {
            position: absolute;
            right: 1.4rem;
            top: 1.2rem;
            border-color: #000000;
            border-style: solid;
            border-width: 0 0.0625rem 0.0625rem 0;
            padding: 0.2rem;
            -webkit-transition: -webkit-transform 0.25s ease-in-out;
            transition: transform 0.25s ease-in-out;
            cursor: pointer;
            background-color: transparent;
            color: #fff;
        }

        .submenu-open .css-pjjyzu {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .submenu-closed .css-pjjyzu {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .css-njpu5j {
            position: relative;
            list-style: none;
            margin: 1.5625rem 0 0.5rem 1rem;
            padding: 0rem;
            max-width: 50%;
        }

        .css-njpu5j a {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .css-njpu5j:before {
            content: "";
            position: absolute;
            top: 0.5rem;
            width: 1rem;
            height: 1rem;
            background-color: #000000;
            color: #fff;
        }

        .visible .css-njpu5j:before {
            -webkit-mask: url(images/globe.3f172dc.svg);
            mask: url(images/globe.3f172dc.svg);
        }

        .css-1vjstyg {
            padding-left: 1.1875rem;
            position: relative;
        }

        .css-1vjstyg.has-submenu {
            cursor: pointer;
            position: relative;
        }

        .css-1vjstyg.has-submenu>button {
            top: 0.8rem;
            right: 0rem;
        }

        .css-tm0o7j {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            pointer-events: none;
            font-family: NeueHaasUnica, NeueHaasUnica-fallback,
                NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-size: 0.875rem;
            line-height: 2;
        }

        .css-bbrknr {
            margin: 0 auto;
            margin-left: 1.1rem;
        }

        .css-bbrknr .e1f7ykkd1 {
            border: 0.0625rem solid #000000;
        }

        .css-sfww4i {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            height: 3.125rem;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding-left: 1rem;
        }

        .css-1j48blf {
            -webkit-text-decoration: none;
            text-decoration: none;
            margin-right: 1rem;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 2rem;
            text-transform: uppercase;
            -webkit-transition: opacity 0.2 linear;
            transition: opacity 0.2 linear;
        }

        .css-1j48blf:last-of-type {
            margin-right: 0rem;
        }

        .css-1j48blf:hover {
            color: activside-panel-sub-menu-hover;
        }

        .css-1yhciq3 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: absolute;
            left: 1rem;
            top: 1rem;
            z-index: 12000000;
            text-align: center;
            opacity: 0;
            -webkit-transform: translateY(calc(-100% - 2.5rem));
            -moz-transform: translateY(calc(-100% - 2.5rem));
            -ms-transform: translateY(calc(-100% - 2.5rem));
            transform: translateY(calc(-100% - 2.5rem));
            -webkit-text-decoration: none;
            text-decoration: none;
            border: medium solid white;
            box-shadow: 0 0 0 3px #55adff;
            background-color: #000000;
            color: #fff;
            border-radius: 1.875rem;
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial,
                Sans-serif;
            font-size: 0.875rem;
            line-height: 1;
            font-weight: bold;
            padding: 0.625rem 1.25rem;
            width: auto;
        }

        .css-1yhciq3:focus {
            opacity: 1;
            -webkit-transform: translateY(0%);
            -moz-transform: translateY(0%);
            -ms-transform: translateY(0%);
            transform: translateY(0%);
        }

        .css-1yhciq3:focus-visible {
            outline: none;
        }

        .css-1joeej0 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: absolute;
            left: 1rem;
            top: 1rem;
            z-index: 12000000;
            text-align: center;
            opacity: 0;
            -webkit-transform: translateY(calc(-100% - 2.5rem));
            -moz-transform: translateY(calc(-100% - 2.5rem));
            -ms-transform: translateY(calc(-100% - 2.5rem));
            transform: translateY(calc(-100% - 2.5rem));
            -webkit-text-decoration: none;
            text-decoration: none;
            border: medium solid white;
            box-shadow: 0 0 0 3px #55adff;
            background-color: #000000;
            color: #fff;
            border-radius: 1.875rem;
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial,
                Sans-serif;
            font-size: 0.875rem;
            line-height: 1;
            font-weight: bold;
            padding: 0.625rem 1.25rem;
            width: auto;
        }

        .css-1joeej0:focus {
            opacity: 1;
            -webkit-transform: translateY(0%);
            -moz-transform: translateY(0%);
            -ms-transform: translateY(0%);
            transform: translateY(0%);
        }

        .css-1joeej0:focus-visible {
            outline: none;
        }

        .css-1o2meyd {
            position: -webkit-sticky;
            position: sticky;
            z-index: 6000000;
            top: var(--nav-offset, 0);
            background-color: #ffffff;
            color: #000;
        }

        @media (max-width: 73.75rem) {
            .css-1o2meyd {
                height: 96px;
            }
        }

        @media (min-width: 64rem) {
            .css-1o2meyd {
                height: 48px;
                position: -webkit-sticky;
                position: sticky;
                top: var(--nav-offset, 0);
            }
        }

        @media print {
            .css-1o2meyd {
                display: none;
            }
        }

        .css-40dj9l {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-box-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 auto;
            max-width: 75rem;
            padding-left: 0;
            padding-right: 0;
            width: 100%;
            z-index: 0;
        }

        @media (max-width: 64rem) {
            .css-40dj9l {
                background: inherit;
            }
        }

        @media (min-width: 64rem) {
            .css-40dj9l {
                -webkit-box-flex-wrap: nowrap;
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }
        }

        .css-1fj2vwy {
            background-color: inherit;
            border: none;
            color: #ffffff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.625rem 1.25rem;
            margin-top: 0rem;
            margin-bottom: 0rem;
            -webkit-text-decoration: none;
            text-decoration: none;
            text-transform: uppercase;
            -webkit-transition: background 0.3s ease-in-out,
                color 0.3s ease-in-out;
            transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            margin-left: 0.9375rem;
            border-radius: 0;
            line-height: 0.7;
        }

        @media (max-width: 64rem) {
            .css-1fj2vwy {
                padding: 0.5rem 0.25rem 0.5rem 0.625rem;
            }
        }

        @media (min-width: 20rem) {
            .css-1fj2vwy {
                padding: 0.5rem 0.25rem 0.5rem 0;
            }

            .css-1fj2vwy svg {
                fill: #000000;
                -webkit-transition: fill 0.3s ease-in-out;
                transition: fill 0.3s ease-in-out;
            }

            .css-1fj2vwy svg:hover {
                fill: #525252;
            }
        }

        @media (min-width: 40.625rem) and (max-width: 90rem) {
            .css-1fj2vwy {
                margin-left: 2.5rem;
            }
        }

        @media (min-width: 48rem) {
            .css-1fj2vwy {
                padding: 0.5rem 0.625rem 0.5rem 0.625rem;
            }
        }

        @media (min-width: 90rem) {
            .css-1fj2vwy {
                margin-left: 0rem;
            }
        }

        .css-1fj2vwy:hover {
            background-color: #525252;
            color: #fff;
            cursor: pointer;
            background: inherit;
        }

        .css-1fj2vwy:disabled {
            background-color: #f3f4f6;
            color: #a3a3a3;
            cursor: not-allowed;
        }

        .css-1fj2vwy:focus-visible {
            outline: 0.125rem dotted;
            outline-offset: 0.313rem;
            outline-color: #000000;
        }

        .css-1fj2vwy img {
            height: 1.875rem;
            width: 1.875rem;
        }

        .css-1fj2vwy svg {
            height: 1.875rem;
            width: 1.875rem;
        }

        .css-1z0ns1o {
            line-height: 0;
            margin-right: auto;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin-bottom: 0.125rem;
        }

        @media (max-width: 48rem) {
            .css-1z0ns1o {
                width: 3.463rem;
            }
        }

        @media (min-width: 48rem) {
            .css-1z0ns1o {
                height: 1.563rem;
                width: 4.329rem;
            }
        }

        @media (min-width: 64rem) {
            .css-1z0ns1o {
                margin-right: 0.3125rem;
            }
        }

        .css-1m67141 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
            overflow-x: auto;
            overflow-y: hidden;
            width: 100%;
            border-bottom: thin solid #f5f5f5;
            border-top: thin solid #f5f5f5;
        }

        @media (min-width: 61.25rem) {
            .css-1m67141 {
                border-bottom: 0;
                border-top: 0;
            }
        }

        @media (min-width: 64rem) {
            .css-1m67141 {
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                width: auto;
            }
        }

        .css-1m67141::-webkit-scrollbar {
            height: 0rem;
        }

        .css-1cr3k5e {
            list-style: none;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            margin: 0rem;
            padding-left: 1.125rem;
            -webkit-transform: translateX(undefinedpx);
            -moz-transform: translateX(undefinedpx);
            -ms-transform: translateX(undefinedpx);
            transform: translateX(undefinedpx);
        }

        @media (min-width: 40.625rem) and (max-width: 61.25rem) {
            .css-1cr3k5e {
                padding-left: 2.625rem;
            }
        }

        @media (min-width: 48rem) {
            .css-1cr3k5e {
                padding-left: 3.125rem;
            }
        }

        @media (min-width: 64rem) {
            .css-1cr3k5e {
                padding-left: 0rem;
            }
        }

        .css-jloo3l {
            white-space: nowrap;
            padding: 0 1.875rem 0 1.25rem;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.75rem;
            line-height: 2rem;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        @media (min-width: 64rem) {
            .css-jloo3l {
                padding: 0 1.25rem 0 1.25rem;
            }
        }

        .css-j0tz68 {
            display: inline-block;
            min-height: 3rem;
            min-width: 3rem;
            padding: 0.5rem 0 0.5rem 0;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: outline 0.3s ease-in-out,
                outline-offset 0.3s ease-in-out;
            transition: outline 0.3s ease-in-out,
                outline-offset 0.3s ease-in-out;
            color: inherit;
            line-height: 2.58918;
        }

        @media (min-width: 61.25rem) {
            .css-j0tz68 {
                color: inherit;
            }
        }

        .css-j0tz68:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        .css-1fkzqk5 {
            display: inline-block;
            min-height: 3rem;
            min-width: 3rem;
            padding: 0.5rem 0 0.5rem 0;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: outline 0.3s ease-in-out,
                outline-offset 0.3s ease-in-out;
            transition: outline 0.3s ease-in-out,
                outline-offset 0.3s ease-in-out;
            color: inherit;
            line-height: 2.58918;
        }

        @media (min-width: 61.25rem) {
            .css-1fkzqk5 {
                color: inherit;
            }
        }

        .css-1fkzqk5:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        .css-kcunsj {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 1.875rem;
            margin: 0 0 0 auto;
            padding-left: 1.05rem;
            padding-right: 1.05rem;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #000000;
            border: 0.0625rem solid black;
            border-radius: 0;
            color: #ffffff;
            font-family: NeueHaasUnica, NeueHaasUnica-fallback,
                NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-size: 0.875rem;
            line-height: 1.1;
            letter-spacing: 0rem;
            text-transform: none;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            width: auto;
        }

        @media (any-hover: hover) {
            .css-kcunsj {
                -webkit-transition: box-shadow 0.2s linear,
                    background 0.2s linear;
                transition: box-shadow 0.2s linear, background 0.2s linear;
            }

            .css-kcunsj:hover {
                box-shadow: nav-subscribe-link.hover;
                background-color: nav-subscribe-link.hover-bg;
            }
        }

        .css-kcunsj:focus-visible {
            outline-color: #000000;
        }

        .css-kcunsj:focus {
            outline: 0.125rem dotted #000000;
            outline-offset: 0.25rem;
        }

        .css-kcunsj:hover {
            background-color: #ffffff;
            color: #000;
            border: 0.0625rem solid black;
        }

        .css-kcunsj:hover svg>path,
        .css-kcunsj:hover svg {
            fill: #000000;
            stroke: #000000;
        }

        .css-1ba3ot6 {
            position: relative;
            padding-right: 0;
        }

        @media (min-width: 40.625rem) and (max-width: 90rem) {
            .css-1ba3ot6 {
                padding-right: 2.5rem;
            }
        }

        @media (min-width: 64rem) {
            .css-1ba3ot6 {
                padding-right: 0rem;
            }
        }

        @media (min-width: 90rem) {
            .css-1ba3ot6 {
                padding-right: 0;
            }
        }

        .css-vz4ldn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-left: 0.3125rem;
            -webkit-text-decoration: none;
            text-decoration: none;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.75rem;
            line-height: 2rem;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        @media (min-width: 48rem) {
            .css-vz4ldn {
                margin-left: 0.9375rem;
            }
        }

        .css-spe6hg {
            white-space: nowrap;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.75rem;
            line-height: 2rem;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        .css-1cd8suq {
            z-index: 6000000;
            position: -webkit-sticky;
            position: sticky;
            top: calc(var(--mobile-sticky-header-height, 0px));
            width: 100%;
        }

        .css-1y3x20e {
            position: -webkit-sticky;
            position: sticky;
            top: var(--nav-height, 0);
            z-index: 6000000;
        }

        .css-rk6tbh {
            position: relative;
            background-color: bg-primary;
        }

        @media (min-width: 64rem) {
            .css-rk6tbh {
                margin-right: var(--sponsor-panel-width, auto);
            }
        }

        .css-1cjybzt {
            padding: 0.9375rem 0;
            min-width: 45.5rem;
            text-align: center;
            z-index: 2000000;
            position: relative;
            display: none;
            background-color: #e5e5e5;
            color: #000;
            width: 100%;
        }

        @media (max-width: 40.625rem) {
            .css-1cjybzt {
                position: -webkit-sticky;
                position: sticky;
                top: calc(var(--mobile-sticky-header-height, 0px) + var(--sticky-secondary-header-height, 0px));
                padding-bottom: 0.9375rem;
            }
        }

        @media (min-width: 48rem) {
            .css-1cjybzt {
                min-height: 121px;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1cjybzt {
                display: block;
            }
        }

        @media print {
            .css-1cjybzt {
                display: none !important;
            }
        }

        .css-oa9wak {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-big-story;
        }

        @media (max-width: 48rem) {
            .css-oa9wak {
                padding-top: 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-oa9wak {
                padding-top: 0.625rem;
            }
        }

        @media (min-width: 48rem) {
            .css-oa9wak {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-oa9wak {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header" "content";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: minmax(auto, 75rem);
            }
        }

        @media (min-width: 64rem) {
            .css-oa9wak {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-oa9wak {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header rgut" "lgut content rgut";
                grid-template-columns: 1fr minmax(auto, 75rem) 1fr;
            }
        }

        .css-1nabglw {
            -webkit-text-decoration: none;
            text-decoration: none;
            grid-area: content;
            display: block;
        }

        .css-1nabglw h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1nabglw h2 span:hover {
            color: #808080;
        }

        .css-15fa8f5 {
            grid-area: content;
            display: block;
            -webkit-text-decoration: none;
            text-decoration: none;
            grid-area: content;
            display: block;
        }

        .css-15fa8f5 h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-15fa8f5 h2 span:hover {
            color: #808080;
        }

        .css-1hpb4i6 {
            display: block;
            width: 100vw;
            position: relative;
            left: -0.938rem;
            margin-bottom: 0;
        }

        @media (min-width: 40.625rem) {
            .css-1hpb4i6 {
                width: 100%;
                left: 0rem;
            }
        }

        .css-1hpb4i6 img {
            vertical-align: top;
        }

        .css-2e1l8j {
            background-color: bg-block-content-big-story-under;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-2e1l8j {
                padding: 1.5625rem 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-2e1l8j {
                padding: 1.5625rem 0 0;
            }
        }

        @media (min-width: 64rem) {
            .css-2e1l8j {
                padding: 1.875rem 0 0;
            }
        }

        .css-9j0y42 {
            display: inline-block;
            margin-bottom: 0.625rem;
            background-color: none;
            border-bottom: 0.0625rem solid black;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-weight: bold;
            padding: 0.3125rem 0;
            text-transform: uppercase;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        @media (max-width: 48rem) {
            .css-9j0y42 {
                -webkit-text-stroke: 0.015rem;
                font-size: 0.75rem;
                line-height: 1;
                letter-spacing: 0.15rem;
                padding-bottom: 0.1875rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-9j0y42 {
                -webkit-text-stroke: 0;
                font-size: 0.70028rem;
                line-height: 1;
                letter-spacing: 0.075rem;
                padding-bottom: 0.125rem;
            }
        }

        @media (min-width: 64rem) {
            .css-9j0y42 {
                padding-bottom: 0.25rem;
            }
        }

        .css-17nzgrb {
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: SaolDisplay, SaolDisplay-fallback,
                SaolDisplay-roboto, SaolDisplay-local, Georgia, Times, serif;
            font-weight: normal;
        }

        @media (max-width: 48rem) {
            .css-17nzgrb {
                font-size: 2.125rem;
                line-height: 1.1;
            }
        }

        @media (min-width: 40.625rem) {
            .css-17nzgrb {
                font-size: 2.125rem;
                line-height: 1.2;
            }
        }

        @media (min-width: 64rem) {
            .css-17nzgrb {
                font-size: 2.25rem;
                line-height: 1.1;
            }
        }

        @media (min-width: 73.75rem) {
            .css-17nzgrb {
                font-size: 2.375rem;
                line-height: 1.2;
            }
        }

        .css-1dmjnw1 {
            position: relative;
        }

        .css-1dmjnw1:before {
            content: "";
            position: absolute;
        }

        .css-hnknpq {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: SaolDisplay, SaolDisplay-fallback,
                SaolDisplay-roboto, SaolDisplay-local, Georgia, Times, serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media (max-width: 48rem) {
            .css-hnknpq {
                font-size: 2.125rem;
                line-height: 1.1;
            }
        }

        @media (min-width: 40.625rem) {
            .css-hnknpq {
                font-size: 2.125rem;
                line-height: 1.2;
            }
        }

        @media (min-width: 64rem) {
            .css-hnknpq {
                font-size: 2.25rem;
                line-height: 1.1;
            }
        }

        @media (min-width: 73.75rem) {
            .css-hnknpq {
                font-size: 2.375rem;
                line-height: 1.2;
            }
        }

        @media (any-hover: hover) {
            .css-hnknpq {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-hnknpq:hover {
                color: link-hover;
            }
        }

        .css-ha23m7 {
            position: relative;
        }

        .css-ha23m7:after {
            content: "";
            position: absolute;
        }

        .css-cs4uhs {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-big-story;
        }

        @media (max-width: 48rem) {
            .css-cs4uhs {
                padding-top: 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-cs4uhs {
                padding-top: 0.625rem;
            }
        }

        @media (min-width: 48rem) {
            .css-cs4uhs {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-cs4uhs {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header header header" "content content ad";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: auto auto auto;
            }
        }

        @media (min-width: 64rem) {
            .css-cs4uhs {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-cs4uhs {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header header header rgut" "lgut content content ad rgut";
                grid-template-columns: 1fr repeat(3, minmax(auto, 25rem)) 1fr;
            }
        }

        .css-y4yi8 {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            text-align: center;
            width: calc(100% + (0.938rem * 2));
            margin-top: 1.25rem;
            margin-bottom: 0.875rem;
            margin-left: -0.938rem;
            min-height: 523px;
        }

        @media (max-width: 40.625rem) {
            .css-y4yi8 {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: start;
                justify-content: start;
                position: relative;
            }
        }

        @media (max-width: 61.25rem) {
            .css-y4yi8 {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width: 48rem) {
            .css-y4yi8 {
                width: calc(100% + (2.5rem * 2));
                margin-left: -2.5rem;
                min-height: 138px;
            }
        }

        @media (min-width: 61.25rem) {
            .css-y4yi8 {
                top: 4rem;
                width: unset;
                margin: 0rem;
                margin-left: 0rem;
                position: -webkit-sticky;
                position: sticky;
                -webkit-align-self: flex-start;
                -ms-flex-item-align: flex-start;
                align-self: flex-start;
                grid-area: ad;
            }
        }

        .css-y4yi8:after {
            content: "";
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: static;
            margin: 0.9375rem 0.938rem 0;
        }

        @media (max-width: 40.625rem) {
            .css-y4yi8:after {
                position: absolute;
                bottom: 0rem;
                width: -webkit-fill-available;
            }
        }

        @media (max-width: 61.25rem) {
            .css-y4yi8:after {
                border-bottom: thin solid #e5e5e5;
            }
        }

        @media (min-width: 48rem) {
            .css-y4yi8:after {
                margin: 0.9375rem 2.5rem 0;
            }
        }

        @media (min-width: 61.25rem) {
            .css-y4yi8:after {
                visibility: hidden;
            }
        }

        @media (min-width: 75rem) {
            .css-y4yi8:after {
                margin: 0.9375rem 0 0;
            }
        }

        .css-3jfnbc {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            margin: 0 0.938rem;
            line-height: 2rem;
            text-transform: none;
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial,
                Sans-serif;
            font-size: 0.70028rem;
        }

        @media (min-width: 48rem) {
            .css-3jfnbc {
                margin: 0 2.5rem;
            }
        }

        @media (min-width: 75rem) {
            .css-3jfnbc {
                margin: 0rem;
            }
        }

        .css-3jfnbc:after {
            margin: 0 0 0 0.625rem;
        }

        .css-3jfnbc:before {
            margin: 0 0.625rem 0 0;
        }

        .css-3jfnbc:before,
        .css-3jfnbc:after {
            background-color: #e5e5e5;
            color: inherit;
            content: "";
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            height: 0.0625rem;
            position: relative;
            top: 1rem;
        }

        @media (min-width: 61.25rem) {

            .css-3jfnbc,
            .css-3jfnbc:after,
            .css-3jfnbc:before {
                display: none;
            }
        }

        .css-3jfnbc a {
            color: inherit;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-color: inherit;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-3jfnbc a:hover {
            color: #808080;
            text-decoration-color: border-link-body-hover;
        }

        .css-om4gqg {
            min-width: 18.75rem;
            text-align: center;
            z-index: 2000000;
            position: relative;
            width: 100%;
        }

        @media (max-width: 40.625rem) {
            .css-om4gqg {
                position: -webkit-sticky;
                position: sticky;
                top: calc(var(--mobile-sticky-header-height, 0px) + var(--sticky-secondary-header-height, 0px));
                padding-bottom: 0.9375rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-om4gqg {
                left: unset;
            }
        }

        .css-1sr6p3x {
            position: relative;
            grid-area: header;
            contain: layout;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-1sr6p3x {
                border-top: 0.0625rem solid #0000001a;
                margin-top: 0.625rem;
                padding: 2.3125rem 0 0.625rem;
            }
        }

        @media (max-width: 73.75rem) {
            .css-1sr6p3x {
                margin-bottom: 1.25rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1sr6p3x {
                border-bottom: 0.0625rem solid #d4d4d4;
                border-top: 0.0625rem solid #d4d4d4;
                padding: 2rem 0 1.25rem;
            }
        }

        @media (min-width: 64rem) {
            .css-1sr6p3x {
                margin-bottom: 0.3125rem;
                padding: 2.5rem 0 1.5rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1sr6p3x {
                margin-bottom: 0.625rem;
            }
        }

        .css-1e39s00 {
            margin: 0rem;
            font-family: SaolDisplay, SaolDisplay-fallback,
                SaolDisplay-roboto, SaolDisplay-local, Georgia, Times, serif;
            font-weight: normal;
            letter-spacing: -0.015rem;
        }

        @media (max-width: 48rem) {
            .css-1e39s00 {
                font-size: 2.8125rem;
                line-height: 0.8;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1e39s00 {
                font-size: 2.8125rem;
                line-height: 0.8;
            }
        }

        @media (min-width: 64rem) {
            .css-1e39s00 {
                font-size: 5.3125rem;
                line-height: 0.8;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1e39s00 {
                font-size: 5.49999rem;
                line-height: 1;
            }
        }

        .css-1e39s00 a,
        .css-1e39s00 span {
            overflow: hidden;
        }

        .css-1e39s00 a {
            color: link-block-header;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
            z-index: 0;
        }

        @media (max-width: 73.75rem) {
            .css-1e39s00 a:hover {
                color: #808080;
            }
        }

        @media (min-width: 64rem) {
            .css-1e39s00 a:hover {
                color: #000000;
                font-style: italic;
            }
        }

        .css-1e39s00 span:before {
            z-index: -2000000;
        }

        .css-15nifei {
            background-color: bg-block-content-big-story-under-ad;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-15nifei {
                padding: 1.5625rem 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-15nifei {
                padding: 1.5625rem 0 0;
            }
        }

        @media (min-width: 64rem) {
            .css-15nifei {
                padding: 1.25rem 0.9375rem;
            }
        }

        .css-as5r5l {
            font-family: SaolText, SaolText-fallback, SaolText-roboto,
                SaolText-local, Georgia, Times, serif;
            letter-spacing: 0.0225rem;
        }

        @media (max-width: 48rem) {
            .css-as5r5l {
                font-size: 1.125rem;
                line-height: 1.5;
                padding-bottom: 0.45rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-as5r5l {
                font-size: 0.9375rem;
                line-height: 1.5;
            }
        }

        @media (min-width: 64rem) {
            .css-as5r5l {
                font-size: 1.0625rem;
                line-height: 1.5;
                margin-bottom: 0.9375rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-as5r5l {
                font-size: 1.125rem;
                line-height: 1.5;
            }
        }

        .css-as5r5l p {
            margin-bottom: 0rem;
            margin-top: 0rem;
        }

        .css-1fv2c70 {
            position: relative;
            padding-right: 0.3125rem;
        }

        .css-rhj3ne {
            font-style: normal;
            display: inline-block;
            padding-right: 0.3125rem;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 1.6;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        .css-1qat9tq {
            display: inline-block;
            padding-right: 0.3125rem;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 1.6;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        .css-1tddtcr {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-four-across;
        }

        @media (max-width: 48rem) {
            .css-1tddtcr {
                padding-top: 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1tddtcr {
                padding-top: 0.625rem;
            }
        }

        @media (min-width: 48rem) {
            .css-1tddtcr {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1tddtcr {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header" "content";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: minmax(auto, 75rem);
            }
        }

        @media (min-width: 64rem) {
            .css-1tddtcr {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1tddtcr {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header rgut" "lgut content rgut";
                grid-template-columns: 1fr minmax(auto, 75rem) 1fr;
            }
        }

        .css-3ioj3p {
            contain: layout;
            display: grid;
            grid-area: content;
            grid-gap: 1rem;
            grid-template-columns: repeat(2, 1fr);
        }

        @media (min-width: 40.625rem) {
            .css-3ioj3p {
                grid-gap: 0.9375rem;
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (min-width: 48rem) {
            .css-3ioj3p {
                grid-gap: 0.9375rem;
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (min-width: 64rem) {
            .css-3ioj3p {
                grid-gap: 1.5625rem;
            }
        }

        .css-1my0a2m {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .css-1my0a2m h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1my0a2m h2 span:hover {
            color: #808080;
        }

        .css-1pxdqsn {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .css-1pxdqsn h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1pxdqsn h2 span:hover {
            color: #808080;
        }

        .css-ftsoqv {
            display: block;
            margin-bottom: 0.625rem;
        }

        .css-ftsoqv img {
            vertical-align: top;
        }

        .css-1dc3fjj {
            background-color: bg-block-content-four-across;
        }

        .css-m39hn {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: NeueHaasUnica, NeueHaasUnica-fallback,
                NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media (max-width: 48rem) {
            .css-m39hn {
                font-size: 1rem;
                line-height: 1.3;
                letter-spacing: -0.0225rem;
                margin: 0.75rem 0 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-m39hn {
                font-size: 1rem;
                line-height: 1.3;
                letter-spacing: 0.0225rem;
                margin: 0.9375rem 0 0;
            }
        }

        @media (min-width: 64rem) {
            .css-m39hn {
                font-size: 1rem;
                line-height: 1.4;
                margin: 0.9375rem 0 0.625rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-m39hn {
                font-size: 1rem;
                line-height: 1.4;
            }
        }

        @media (any-hover: hover) {
            .css-m39hn {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-m39hn:hover {
                color: link-hover;
            }
        }

        .css-1c7d8p3 {
            margin: 1.25rem 0;
            clear: both;
            color: #000000;
            text-align: center;
            position: static;
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            min-height: 523px;
        }

        @media (max-width: 40.625rem) {
            .css-1c7d8p3 {
                position: -webkit-sticky;
                position: sticky;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: start;
                justify-content: start;
            }
        }

        @media (min-width: 48rem) {
            .css-1c7d8p3 {
                min-height: 138px;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1c7d8p3 {
                margin: 1.25rem auto;
            }
        }

        @media (min-width: 64rem) {
            .css-1c7d8p3 {
                max-width: 75rem;
            }
        }

        .css-1c7d8p3.clearfix {
            clear: both;
        }

        .css-1c7d8p3:after {
            content: "";
            border-bottom: thin solid #e5e5e5;
            margin: 0.9375rem 0.938rem 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: static;
        }

        @media (max-width: 40.625rem) {
            .css-1c7d8p3:after {
                position: absolute;
                bottom: 0rem;
                width: -webkit-fill-available;
            }
        }

        @media (min-width: 48rem) {
            .css-1c7d8p3:after {
                margin: 0.9375rem 2.5rem 0;
            }
        }

        @media (min-width: 75rem) {
            .css-1c7d8p3:after {
                margin: 0.9375rem 0 0;
            }
        }

        .css-1c7d8p3 #gpt-ad-leaderboard-bottom {
            position: -webkit-sticky;
            position: sticky;
            margin: 0 calc(50% - 50vw);
        }

        @media (min-width: 48rem) {
            .css-1c7d8p3 #gpt-ad-leaderboard-bottom {
                position: relative;
            }
        }

        .css-1nkb8av {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            margin: 0 0.938rem;
            line-height: 2rem;
            text-transform: none;
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial,
                Sans-serif;
            font-size: 0.70028rem;
        }

        @media (min-width: 48rem) {
            .css-1nkb8av {
                margin: 0 2.5rem;
            }
        }

        @media (min-width: 75rem) {
            .css-1nkb8av {
                margin: 0rem;
            }
        }

        .css-1nkb8av:after {
            margin: 0 0 0 0.625rem;
            margin-right: 0rem;
        }

        .css-1nkb8av:before {
            margin: 0 0.625rem 0 0;
            margin-left: 0rem;
        }

        .css-1nkb8av:before,
        .css-1nkb8av:after {
            background-color: #e5e5e5;
            color: inherit;
            content: "";
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            height: 0.0625rem;
            position: relative;
            top: 1rem;
        }

        .css-1nkb8av a {
            color: inherit;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-color: inherit;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1nkb8av a:hover {
            color: #808080;
            text-decoration-color: border-link-body-hover;
        }

        .css-1njatnj {
            min-width: 18.75rem;
            text-align: center;
            z-index: 2000000;
            position: relative;
            margin: 0rem;
        }

        @media (max-width: 40.625rem) {
            .css-1njatnj {
                position: -webkit-sticky;
                position: sticky;
                top: calc(var(--mobile-sticky-header-height, 0px) + var(--sticky-secondary-header-height, 0px));
                padding-bottom: 0.9375rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1njatnj {
                margin: 0 calc((100vw - 75rem) / -2);
            }
        }

        .css-5svtne {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-big-story-feed;
        }

        @media (max-width: 48rem) {
            .css-5svtne {
                padding-top: 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-5svtne {
                padding-top: 0.625rem;
            }
        }

        @media (min-width: 48rem) {
            .css-5svtne {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-5svtne {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header" "content";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: minmax(auto, 75rem);
            }
        }

        @media (min-width: 64rem) {
            .css-5svtne {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-5svtne {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header rgut" "lgut content rgut";
                grid-template-columns: 1fr minmax(auto, 75rem) 1fr;
            }
        }

        .css-1o1ws1x {
            contain: layout;
            grid-area: content;
        }

        @media (min-width: 61.25rem) {
            .css-1o1ws1x {
                display: grid;
                grid-template-columns: 2fr 1fr;
                grid-gap: 1.25rem;
            }
        }

        .css-7wg99c {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            padding: 0rem;
            text-align: center;
        }

        .css-7wg99c h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-7wg99c h2 span:hover {
            color: #808080;
        }

        .css-1bibe0b {
            display: block;
            padding: 0rem;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            padding: 0rem;
            text-align: center;
        }

        .css-1bibe0b h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1bibe0b h2 span:hover {
            color: #808080;
        }

        @media (min-width: 73.75rem) {
            .css-1woa0je {
                --aspect-ratio: 50%;
            }
        }

        @media (min-width: 64rem) and (max-width: 75rem) {
            .css-1woa0je {
                --aspect-ratio: 50%;
            }
        }

        @media (min-width: 61.25rem) and (max-width: 73.75rem) {
            .css-1woa0je {
                --aspect-ratio: 50%;
            }
        }

        @media (min-width: 40.625rem) and (max-width: 61.25rem) {
            .css-1woa0je {
                --aspect-ratio: 50%;
            }
        }

        .css-1er9154 {
            display: block;
            position: relative;
            left: -0.938rem;
            width: 100vw;
            margin-bottom: 0;
        }

        @media (min-width: 40.625rem) {
            .css-1er9154 {
                left: 0rem;
                width: 100%;
            }
        }

        .css-1er9154 img {
            vertical-align: top;
        }

        @media (min-width: 73.75rem) {
            .css-1er9154 {
                --aspect-ratio: 50%;
            }
        }

        @media (min-width: 64rem) and (max-width: 75rem) {
            .css-1er9154 {
                --aspect-ratio: 50%;
            }
        }

        @media (min-width: 61.25rem) and (max-width: 73.75rem) {
            .css-1er9154 {
                --aspect-ratio: 50%;
            }
        }

        @media (min-width: 40.625rem) and (max-width: 61.25rem) {
            .css-1er9154 {
                --aspect-ratio: 50%;
            }
        }

        .css-14flyc1 {
            background-color: bg-block-content-big-story-feed-colright-feature;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-14flyc1 {
                padding: 1.5625rem 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-14flyc1 {
                padding: 1.5625rem 1.875rem 1.25rem;
            }
        }

        @media (min-width: 64rem) {
            .css-14flyc1 {
                padding: 1.25rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-14flyc1 {
                padding: 1.875rem 4rem;
            }
        }

        .css-ly8qyl {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0;
            font-family: SaolDisplay, SaolDisplay-fallback,
                SaolDisplay-roboto, SaolDisplay-local, Georgia, Times, serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media (max-width: 48rem) {
            .css-ly8qyl {
                font-size: 2.125rem;
                line-height: 1.2;
            }
        }

        @media (min-width: 40.625rem) {
            .css-ly8qyl {
                font-size: 2.125rem;
                line-height: 1.2;
            }
        }

        @media (min-width: 64rem) {
            .css-ly8qyl {
                font-size: 2rem;
                line-height: 1.2;
                margin-bottom: 0.9375rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-ly8qyl {
                font-size: 2rem;
                line-height: 1.2;
            }
        }

        @media (any-hover: hover) {
            .css-ly8qyl {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-ly8qyl:hover {
                color: link-hover;
            }
        }

        .css-1tgeyd0 {
            font-family: SaolText, SaolText-fallback, SaolText-roboto,
                SaolText-local, Georgia, Times, serif;
            letter-spacing: 0.0225rem;
            padding-top: 0.3125rem;
        }

        @media (max-width: 48rem) {
            .css-1tgeyd0 {
                font-size: 1.125rem;
                line-height: 1.5;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1tgeyd0 {
                font-size: 0.9375rem;
                line-height: 1.5;
            }
        }

        @media (min-width: 48rem) {
            .css-1tgeyd0 {
                padding-top: 0.625rem;
            }
        }

        @media (min-width: 64rem) {
            .css-1tgeyd0 {
                font-size: 1.0625rem;
                line-height: 1.5;
                margin-bottom: 0.9375rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1tgeyd0 {
                font-size: 1.125rem;
                line-height: 1.5;
            }
        }

        .css-1tgeyd0 p {
            margin-bottom: 0rem;
            margin-top: 0rem;
        }

        @media (min-width: 40.625rem) and (max-width: 61.25rem) {
            .css-hhmn3a {
                display: grid;
                grid-gap: 1.25rem;
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (min-width: 61.25rem) {
            .css-hhmn3a {
                display: block;
            }
        }

        .css-1xuh9pl {
            -webkit-text-decoration: none;
            text-decoration: none;
            grid-template-columns: repeat(2, 1fr);
            display: grid;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (max-width: 48rem) {
            .css-1xuh9pl {
                grid-template-columns: 35% 1fr;
                border-top: 0.0625rem solid #d4d4d4;
                padding: 1.25rem 0 0.625rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1xuh9pl {
                grid-template-columns: repeat(1, 1fr);
                grid-gap: 0rem;
                -webkit-align-content: start;
                -ms-flex-line-pack: start;
                align-content: start;
                -webkit-align-items: start;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: start;
                border: 0 solid transparent;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1xuh9pl {
                grid-template-columns: 35% 1fr;
                grid-gap: 0.9375rem;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        @media (min-width: 64rem) {
            .css-1xuh9pl {
                grid-template-columns: 30% 1fr;
            }
        }

        .css-1xuh9pl h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1xuh9pl h2 span:hover {
            color: #808080;
        }

        .css-1m44p8r {
            grid-template-columns: repeat(2, 1fr);
            display: grid;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            grid-template-columns: repeat(2, 1fr);
            display: grid;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (max-width: 48rem) {
            .css-1m44p8r {
                grid-template-columns: 35% 1fr;
                border-top: 0.0625rem solid #d4d4d4;
                padding: 1.25rem 0 0.625rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1m44p8r {
                grid-template-columns: repeat(1, 1fr);
                grid-gap: 0rem;
                -webkit-align-content: start;
                -ms-flex-line-pack: start;
                align-content: start;
                -webkit-align-items: start;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: start;
                border: 0 solid transparent;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1m44p8r {
                grid-template-columns: 35% 1fr;
                grid-gap: 0.9375rem;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        @media (min-width: 64rem) {
            .css-1m44p8r {
                grid-template-columns: 30% 1fr;
            }
        }

        @media (max-width: 48rem) {
            .css-1m44p8r {
                grid-template-columns: 35% 1fr;
                border-top: 0.0625rem solid #d4d4d4;
                padding: 1.25rem 0 0.625rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1m44p8r {
                grid-template-columns: repeat(1, 1fr);
                grid-gap: 0rem;
                -webkit-align-content: start;
                -ms-flex-line-pack: start;
                align-content: start;
                -webkit-align-items: start;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: start;
                border: 0 solid transparent;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1m44p8r {
                grid-template-columns: 35% 1fr;
                grid-gap: 0.9375rem;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        @media (min-width: 64rem) {
            .css-1m44p8r {
                grid-template-columns: 30% 1fr;
            }
        }

        .css-1m44p8r h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1m44p8r h2 span:hover {
            color: #808080;
        }

        .css-1a613ux {
            background-color: bg-block-content-big-story-feed-colright-basefeed;
        }

        @media (min-width: 64rem) {
            .css-1a613ux {
                padding-left: 0.3125rem;
            }
        }

        .css-8x9owz {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: SaolText, SaolText-fallback, SaolText-roboto,
                SaolText-local, Georgia, Times, serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media (max-width: 48rem) {
            .css-8x9owz {
                font-size: 1.1875rem;
                line-height: 1.4;
            }
        }

        @media (min-width: 40.625rem) {
            .css-8x9owz {
                font-size: 1.125rem;
                line-height: 1.4;
            }
        }

        @media (min-width: 64rem) {
            .css-8x9owz {
                font-size: 1.125rem;
                line-height: 1.4;
            }
        }

        @media (min-width: 73.75rem) {
            .css-8x9owz {
                font-size: 1.1875rem;
                line-height: 1.4;
            }
        }

        @media (any-hover: hover) {
            .css-8x9owz {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-8x9owz:hover {
                color: link-hover;
            }
        }

        .css-gouovr {
            font-style: normal;
            display: block;
            padding-right: 0.3125rem;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 1.6;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
            margin: 0.625rem 0 0.3125rem;
        }

        .css-1eedjog {
            display: block;
            padding-right: 0.3125rem;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 1.6;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
            margin: 0.625rem 0 0.3125rem;
        }

        .css-17bsprv {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-big-story-feed;
        }

        @media (max-width: 48rem) {
            .css-17bsprv {
                padding-top: 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-17bsprv {
                padding-top: 0.625rem;
            }
        }

        @media (min-width: 48rem) {
            .css-17bsprv {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-17bsprv {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header header header" "content content ad";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: auto auto auto;
            }
        }

        @media (min-width: 64rem) {
            .css-17bsprv {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-17bsprv {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header header header rgut" "lgut content content ad rgut";
                grid-template-columns: 1fr repeat(3, minmax(auto, 25rem)) 1fr;
            }
        }

        .css-wgm1ip {
            contain: layout;
            grid-area: content;
        }

        .css-1ow0w5y {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0.9375rem;
        }

        @media (min-width: 40.625rem) {
            .css-1ow0w5y {
                grid-template-columns: repeat(4, 1fr);
                grid-column-gap: 0.9375rem;
            }
        }

        @media (min-width: 48rem) {
            .css-1ow0w5y {
                margin: 0 auto;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1ow0w5y {
                grid-gap: 1.25rem;
            }
        }

        .css-1fld8nl {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: NeueHaasUnica, NeueHaasUnica-fallback,
                NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media (max-width: 48rem) {
            .css-1fld8nl {
                font-size: 1rem;
                line-height: 1.3;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1fld8nl {
                font-size: 1rem;
                line-height: 1.3;
            }
        }

        @media (min-width: 64rem) {
            .css-1fld8nl {
                font-size: 1rem;
                line-height: 1.3;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1fld8nl {
                font-size: 1rem;
                line-height: 1.3;
            }
        }

        @media (any-hover: hover) {
            .css-1fld8nl {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-1fld8nl:hover {
                color: link-hover;
            }
        }

        .css-1qzwinz {
            -webkit-text-decoration: none;
            text-decoration: none;
            grid-area: content;
            background-color: bg-block-content-big-story-imageright;
        }

        @media (min-width: 40.625rem) {
            .css-1qzwinz {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-areas: "item_content item_image";
            }
        }

        .css-1qzwinz h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1qzwinz h2 span:hover {
            color: #808080;
        }

        .css-19r2tia {
            grid-area: content;
            background-color: bg-block-content-big-story-imageright;
            -webkit-text-decoration: none;
            text-decoration: none;
            grid-area: content;
            background-color: bg-block-content-big-story-imageright;
        }

        @media (min-width: 40.625rem) {
            .css-19r2tia {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-areas: "item_content item_image";
            }
        }

        @media (min-width: 40.625rem) {
            .css-19r2tia {
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-areas: "item_content item_image";
            }
        }

        .css-19r2tia h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-19r2tia h2 span:hover {
            color: #808080;
        }

        .css-1aroxpo {
            display: block;
            width: 100vw;
            position: relative;
            left: -0.938rem;
            grid-area: item_image;
            margin-bottom: 0;
        }

        @media (min-width: 40.625rem) {
            .css-1aroxpo {
                width: 100%;
                left: 0rem;
            }
        }

        .css-1aroxpo img {
            vertical-align: top;
            height: 100%;
        }

        .css-hoj2rk {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;
            background-color: bg-block-content-big-story-imageright;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-hoj2rk {
                padding: 1.5625rem 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-hoj2rk {
                padding: 0 2rem;
            }
        }

        @media (min-width: 64rem) {
            .css-hoj2rk {
                padding: 0 3rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-hoj2rk {
                padding: 0 6rem;
            }
        }

        .css-q3yz31 {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: SaolDisplay, SaolDisplay-fallback,
                SaolDisplay-roboto, SaolDisplay-local, Georgia, Times, serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media (max-width: 48rem) {
            .css-q3yz31 {
                font-size: 2.125rem;
                line-height: 1.1;
            }
        }

        @media (min-width: 40.625rem) {
            .css-q3yz31 {
                font-size: 2rem;
                line-height: 1.2;
                letter-spacing: -0.0225rem;
            }
        }

        @media (min-width: 64rem) {
            .css-q3yz31 {
                font-size: 2.625rem;
                line-height: 1.1;
            }
        }

        @media (min-width: 73.75rem) {
            .css-q3yz31 {
                font-size: 3rem;
                line-height: 1.2;
            }
        }

        @media (any-hover: hover) {
            .css-q3yz31 {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-q3yz31:hover {
                color: link-hover;
            }
        }

        .css-13mc9rd {
            font-family: SaolText, SaolText-fallback, SaolText-roboto,
                SaolText-local, Georgia, Times, serif;
            letter-spacing: 0.0225rem;
        }

        @media (max-width: 48rem) {
            .css-13mc9rd {
                font-size: 1.125rem;
                line-height: 1.5;
                padding: 0.3125rem 0 0.45rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-13mc9rd {
                font-size: 0.9375rem;
                line-height: 1.5;
                padding: 0.625rem 0 0.9375rem;
            }
        }

        @media (min-width: 64rem) {
            .css-13mc9rd {
                font-size: 1.0625rem;
                line-height: 1.5;
                margin-bottom: 0;
            }
        }

        @media (min-width: 73.75rem) {
            .css-13mc9rd {
                font-size: 1.125rem;
                line-height: 1.5;
            }
        }

        .css-13mc9rd p {
            margin-bottom: 0rem;
            margin-top: 0rem;
        }

        .css-1fctiym {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-three-col;
        }

        @media (max-width: 48rem) {
            .css-1fctiym {
                padding-top: 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1fctiym {
                padding-top: 0.625rem;
            }
        }

        @media (min-width: 48rem) {
            .css-1fctiym {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-1fctiym {
                display: grid;
                grid-gap: 1.25rem;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header" "content";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: minmax(auto, 75rem);
            }
        }

        @media (min-width: 64rem) {
            .css-1fctiym {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1fctiym {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header rgut" "lgut content rgut";
                grid-template-columns: 1fr minmax(auto, 75rem) 1fr;
            }
        }

        .css-w9tso1 {
            contain: layout;
            grid-area: content;
        }

        @media (min-width: 48rem) {
            .css-w9tso1 {
                display: grid;
                grid-column-gap: 1.25rem;
                grid-auto-columns: 1fr;
                grid-auto-flow: column;
            }
        }

        .css-19z6se {
            position: relative;
        }

        @media (max-width: 48rem) {
            .css-19z6se {
                padding-bottom: 2.5rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-19z6se {
                padding-bottom: 0;
            }
        }

        .css-13iaw20 {
            position: relative;
            grid-area: header;
            contain: layout;
            border-top: 0 solid transparent;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-13iaw20 {
                margin-top: 0.625rem;
                padding: 0rem;
            }
        }

        @media (max-width: 73.75rem) {
            .css-13iaw20 {
                margin-bottom: 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-13iaw20 {
                border-bottom: 0.0625rem solid #d4d4d4;
                padding: 0rem;
                border: 0 solid transparent;
            }
        }

        @media (min-width: 64rem) {
            .css-13iaw20 {
                margin-bottom: 0.3125rem;
                padding: 0rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-13iaw20 {
                margin-bottom: 0.3125rem;
                padding: 0rem;
            }
        }

        .css-108bbug {
            margin: 0rem;
            font-family: SaolText, SaolText-upcase-roboto,
                SaolText-upcase-local, Georgia, Times, serif;
            font-weight: normal;
            letter-spacing: 0.015rem;
            padding: 1rem 0.2rem 0.375rem;
            text-transform: uppercase;
        }

        @media (max-width: 48rem) {
            .css-108bbug {
                font-size: 1.875rem;
                line-height: 1;
                border-top: 1.1875rem solid #000000;
                margin-bottom: 0.625rem;
                text-align: center;
            }
        }

        @media (min-width: 40.625rem) {
            .css-108bbug {
                font-size: 1.5rem;
                line-height: 1;
                border-top: 1.5rem solid #000000;
                margin-bottom: 0.625rem;
                text-align: left;
            }
        }

        @media (min-width: 64rem) {
            .css-108bbug {
                font-size: 1.5rem;
                line-height: 1;
                margin-bottom: 0;
            }
        }

        @media (min-width: 73.75rem) {
            .css-108bbug {
                font-size: 1.5rem;
                line-height: 1;
            }
        }

        .css-108bbug a,
        .css-108bbug span {
            overflow: hidden;
        }

        .css-108bbug a {
            color: link-three-column-heading;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
            z-index: 0;
        }

        @media (max-width: 73.75rem) {
            .css-108bbug a:hover {
                color: #808080;
            }
        }

        @media (min-width: 64rem) {
            .css-108bbug a:hover {
                color: #000000;
                font-style: italic;
            }
        }

        @media (any-hover: hover) {
            .css-108bbug a {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-108bbug a:hover {
                color: #000000;
            }
        }

        .css-108bbug span:before {
            z-index: -2000000;
        }

        .css-108bbug:before,
        .css-108bbug:after {
            visibility: hidden;
        }

        .css-1aq4sl:before,
        .css-1aq4sl:after {
            visibility: hidden;
        }

        .css-if1pks {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: grid;
            grid-template-columns: 50% 1fr;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        .css-if1pks h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-if1pks h2 span:hover {
            color: #808080;
        }

        .css-viqse1 {
            display: grid;
            grid-template-columns: 50% 1fr;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            -webkit-text-decoration: none;
            text-decoration: none;
            display: grid;
            grid-template-columns: 50% 1fr;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        .css-viqse1 h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-viqse1 h2 span:hover {
            color: #808080;
        }

        .css-ztgqyu {
            background-color: bg-block-content-three-col;
        }

        .css-1aj0fuk {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: SaolText, SaolText-fallback, SaolText-roboto,
                SaolText-local, Georgia, Times, serif;
            font-weight: normal;
            letter-spacing: 0.0225rem;
            word-break: break-word;
        }

        @media (max-width: 48rem) {
            .css-1aj0fuk {
                font-size: 1.0625rem;
                line-height: 1.4;
                padding-right: 0.9375rem;
            }
        }

        @media (min-width: 40.625rem) {
            .css-1aj0fuk {
                font-size: 1rem;
                line-height: 1.3;
                padding-right: 2rem;
            }
        }

        @media (min-width: 64rem) {
            .css-1aj0fuk {
                font-size: 1rem;
                line-height: 1.4;
                padding-right: 2rem;
            }
        }

        @media (min-width: 73.75rem) {
            .css-1aj0fuk {
                font-size: 1rem;
                line-height: 1.4;
            }
        }

        @media (any-hover: hover) {
            .css-1aj0fuk {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-1aj0fuk:hover {
                color: link-hover;
            }
        }

        .css-1ui7hop {
            margin-bottom: 0.9375rem;
            --aspect-ratio: 56.25%;
        }

        .css-guxj2g {
            width: 100%;
            height: 100%;
        }

        .css-guxj2g video {
            height: 100%;
            width: 100%;
        }

        .css-guxj2g .hpc-sticky video {
            position: relative;
        }

        .css-guxj2g .video-player-wrapper {
            background: #ffffff;
        }

        .css-guxj2g .video-player-wrapper:not(.hpc-sticky) {
            position: absolute;
            top: 0rem;
            width: 100%;
            height: 100%;
            z-index: 2000000;
        }

        .css-guxj2g .video-player-wrapper.hpc-sticky {
            z-index: 4000000;
        }

        .css-1d3dqod {
            height: 100%;
            width: 100%;
            position: relative;
            z-index: 2000000;
            visibility: visible;
            overflow: hidden;
        }

        .css-19szzr8 {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 1;
            stroke: #ffffff;
            cursor: pointer;
            height: 3.75rem;
            width: 3.75rem;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.4);
            color: #fff;
            border: 0.1875rem solid white;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        @media (min-width: 48rem) {
            .css-19szzr8 {
                height: 5.625rem;
                width: 5.625rem;
                border: 0.28125rem solid white;
            }
        }

        .e7hrar04:hover .css-19szzr8 {
            background-color: rgba(33, 150, 245, 0.8);
            color: #ffffff;
        }

        .css-ovd4yx {
            vertical-align: middle;
            width: 1.45rem;
            height: 1.4rem;
            margin-right: 0rem;
        }

        @media (min-width: 48rem) {
            .css-ovd4yx {
                width: 2.3125rem;
                height: 3rem;
                margin-right: 0.25rem;
            }
        }

        .css-157wciq {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }

        .css-g939jb {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }

        .css-98w5c6 {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: inherit;
            background-color: bg-block-content-big-story-under;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-98w5c6 {
                padding: 1.5625rem 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-98w5c6 {
                padding: 1.5625rem 0 0;
            }
        }

        @media (min-width: 64rem) {
            .css-98w5c6 {
                padding: 1.875rem 0 0;
            }
        }

        .css-q9rv51 {
            background-color: bg-block-content-big-story-under;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            display: inherit;
            background-color: bg-block-content-big-story-under;
            text-align: center;
        }

        @media (max-width: 48rem) {
            .css-q9rv51 {
                padding: 1.5625rem 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-q9rv51 {
                padding: 1.5625rem 0 0;
            }
        }

        @media (min-width: 64rem) {
            .css-q9rv51 {
                padding: 1.875rem 0 0;
            }
        }

        @media (max-width: 48rem) {
            .css-q9rv51 {
                padding: 1.5625rem 0;
            }
        }

        @media (min-width: 40.625rem) {
            .css-q9rv51 {
                padding: 1.5625rem 0 0;
            }
        }

        @media (min-width: 64rem) {
            .css-q9rv51 {
                padding: 1.875rem 0 0;
            }
        }

        .css-10ftiau {
            position: relative;
            padding-top: 1.875rem;
            padding-bottom: 1.875rem;
            background-color: #000000;
            color: #fff;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 1.4;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        @media (min-width: 64rem) {
            .css-10ftiau {
                margin-right: var(--sponsor-panel-width, auto);
            }
        }

        @media print {
            .css-10ftiau {
                display: none;
            }
        }

        body:has(#page-settings[data-has-sponsor]) .css-10ftiau {
            margin-top: 25vh;
            top: -25vh;
        }

        @media (min-width: 64rem) {
            body:has(#page-settings[data-has-sponsor]) .css-10ftiau {
                margin-top: auto;
                top: auto;
            }
        }

        .css-1ss7lvu {
            padding: 0 0.938rem;
            margin: 0 auto;
            max-width: 75rem;
        }

        @media (min-width: 40.625rem) {
            .css-1ss7lvu {
                padding: 0 2.5rem;
            }
        }

        .css-iz4391 {
            display: grid;
            grid-gap: 0.5rem;
            grid-template-rows: 1fr 1fr;
            line-height: 1;
        }

        @media (min-width: 48rem) {
            .css-iz4391 {
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                grid-gap: 10%;
                grid-template-columns: auto 1fr;
                grid-template-rows: 1fr;
            }
        }

        .css-1gtkda7 {
            display: block;
            height: 2.125rem;
            max-height: 1.4375rem;
            width: 5.375rem;
        }

        .css-6uae8g {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: grid;
            margin-left: -1.25rem;
            grid-auto-columns: minmax(3rem, 3rem);
            grid-auto-flow: column;
        }

        @media (min-width: 48rem) {
            .css-6uae8g {
                margin-left: 0rem;
            }
        }

        @media (min-width: 61.25rem) {
            .css-6uae8g {
                top: 2.5rem;
            }
        }

        .css-70qvj9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .css-n9en60 {
            padding: 0.8125rem 1rem;
        }

        .css-jmxdxt {
            height: 1.063rem;
            width: 1.063rem;
        }

        .css-jmxdxt path {
            fill: #ffffff;
        }

        .css-kzigki {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            margin-top: 0.5rem;
            margin-bottom: 0.875rem;
        }

        @media (min-width: 48rem) {
            .css-kzigki {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .css-1vc4yu1 {
            padding: 0.6rem 0;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        @media (any-hover: hover) {
            .css-1vc4yu1 {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-1vc4yu1:hover {
                -webkit-text-decoration: underline;
                text-decoration: underline;
            }
        }

        .css-15si9rg {
            max-width: 12rem;
            padding-bottom: 0.3125rem;
        }

        .css-j307y1 {
            padding-top: 0.9375rem;
            margin: 0.3125rem 0;
        }

        .css-i7117i {
            padding-top: 0.9375rem;
            margin: 0.3125rem 0;
            line-height: 1.4;
        }

        .css-i7117i span {
            display: block;
            margin-top: 1rem;
        }

        .css-lqx6q4 {
            padding-top: 0.9375rem;
            line-height: 2;
        }

        .css-r7fsoq {
            padding: 0.625rem 0.625rem 0.625rem 0;
            -webkit-text-decoration: none;
            text-decoration: none;
            padding-right: 1.25rem;
        }

        @media (any-hover: hover) {
            .css-r7fsoq {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-r7fsoq:hover {
                -webkit-text-decoration: underline;
                text-decoration: underline;
            }
        }

        .css-5tjtfu {
            display: inline-block;
            margin: 1.875rem 0.9375rem 1.25rem 0;
        }

        .css-15y864j {
            display: inline-block;
            gap: 0px;
            -webkit-text-decoration: none;
            text-decoration: none;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            border: thin solid white;
            font-size: 0.70028rem;
            line-height: 1.4;
            padding: 0.625rem;
            text-transform: uppercase;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            -webkit-transition: background 0.3s ease-in-out;
            transition: background 0.3s ease-in-out;
        }

        @media (max-width: 48rem) {
            .css-15y864j {
                text-align: left;
            }
        }

        @media (min-width: 48rem) {
            .css-15y864j {
                text-align: center;
            }
        }

        .css-15y864j:hover {
            background-color: #d4d4d4;
            color: #000;
        }

        .css-vq806a {
            display: inline-block;
            gap: 0px;
            -webkit-text-decoration: none;
            text-decoration: none;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            border: thin solid white;
            font-size: 0.70028rem;
            line-height: 1.4;
            padding: 0.625rem;
            text-transform: uppercase;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto,
                NeueHaasUnica-upcase-local, Arial, sans-serif;
            -webkit-transition: background 0.3s ease-in-out;
            transition: background 0.3s ease-in-out;
        }

        @media (max-width: 48rem) {
            .css-vq806a {
                text-align: left;
            }
        }

        @media (min-width: 48rem) {
            .css-vq806a {
                text-align: center;
            }
        }

        .css-vq806a:hover {
            background-color: #d4d4d4;
            color: #000;
        }

        .css-1wohilq {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 10000000;
            background-color: #e5e5e5;
            color: #000000;
            text-align: center;
        }

        @media (min-width: 61.25rem) {
            .css-1wohilq {
                display: none;
            }
        }

        .css-6bu6ey {
            min-width: 18.75rem;
            text-align: center;
            z-index: 2000000;
            position: relative;
        }

        .css-1o9hvj {
            visibility: hidden;
            position: absolute;
            right: 0.625rem;
            bottom: auto;
            top: -0.7rem;
            padding: 0rem;
            margin: 0rem;
            -webkit-text-decoration: none;
            text-decoration: none;
            z-index: 2000000;
            box-sizing: content-box;
            width: 1.4rem;
            height: 1.4rem;
            border: 2px solid white;
            border-radius: 1em;
            color: #000000;
            text-overflow: clip;
            cursor: pointer;
            background-color: #000000;
            box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, 0.2);
        }

        .css-1o9hvj::before {
            display: inline-block;
            box-sizing: content-box;
            width: 0.75rem;
            height: 0.1rem;
            position: absolute;
            content: "";
            border: none;
            color: #000000;
            text-overflow: clip;
            background-color: #ffffff;
            text-shadow: none;
            inset: 0;
            margin: auto;
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
            -ms-transform: rotateZ(45deg);
            transform: rotateZ(45deg);
        }

        .css-1o9hvj::after {
            display: inline-block;
            box-sizing: content-box;
            width: 0.75rem;
            height: 0.1rem;
            position: absolute;
            content: "";
            border: none;
            color: #000000;
            text-overflow: clip;
            background-color: #ffffff;
            text-shadow: none;
            inset: 0;
            margin: auto;
            -webkit-transform: rotateZ(-45deg);
            -moz-transform: rotateZ(-45deg);
            -ms-transform: rotateZ(-45deg);
            transform: rotateZ(-45deg);
        }

        .css-q82q9a {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial,
                Sans-serif;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            background-color: #000000;
            color: #fff;
            min-width: unset;
            margin: auto;
            bottom: 0px;
            width: 100%;
            box-shadow: 0 -5px 12px rgba(0, 0, 0, 0.2),
                0 -10px 20px rgba(0, 0, 0, 0.12),
                0 -20px 40px rgba(0, 0, 0, 0.14);
            border-top: 0;
            z-index: 14000001;
        }

        @media (min-width: 20rem) and (max-width: 100rem) {
            .css-q82q9a {
                padding: 24px max(16px, 50% - 1200px / 2);
            }
        }

        @media (min-width: 40.625rem) {
            .css-q82q9a {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }
        }

        @media (min-width: 64rem) {
            .css-q82q9a {
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }

        .css-q82q9a [data-theme-key="button-primary"]:hover {
            background-color: transparent;
            color: #fff;
        }
    </style>
</head>

<body>
    <template id="page-settings" data-nav-height="96"></template>
    <div id="__next">
    
        <?php echo $__env->make('pages.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="css-1cd8suq ex7z30p0"></div>
        <div id="journey-topnav" class="css-1y3x20e ei7rc5z0"></div>
        <div class="oop-ad css-0 e7hrg971">
            <div id="gpt-ad-oop-1" class="ad-container css-0 e7hrg970"></div>
        </div>
        <main id="main-content" class="css-rk6tbh ewq0ot90">
            <div id="gpt-leaderboard-ad" class="css-1cjybzt ewg5wdb1"></div>

            <?php if($firstPost): ?>

            <?php
                $post = $firstPost;
                $url = route('blog', ['slug' => $post->slug]);
                $title = Str::title($post->title);

                $image = $post->thumbnail;
                $description = $post->description;

                $date = $post->created_at->format('d.m.y');
                $author = $post->author?->name;
                $cat = $post->category->category;
                $catUrl = route('category', ['category' => $cat]);
            ?>
                
            <section aria-label="CELEBRITY STYLE" data-vars-block-curation="curated"
                data-vars-block-type="Big Story Block" data-vars-block-slot="1"
                data-vars-block-id="6d374412-e845-43b9-9722-bccc60fbe1d7" data-vars-block-heading=""
                id="31ab7f5a-49f1-4e28-8452-0d60793230a6" data-lazy-id="P0-6" class="css-oa9wak e1smmp0v0">
                <a data-theme-key="custom-item" label="CELEBRITY STYLE" data-vars-cta="Big Story Block 0"
                    data-vars-ga-position="1" data-vars-ga-call-to-action="See Margaret Qualley’s Critics Choice Dress"
                    data-vars-ga-outbound-link="https://www.elle.com/fashion/celebrity-style/a63706888/margaret-qualley-getting-ready-diary-critics-choice-awards-2025/"
                    href="<?php echo e($url); ?>"
                    class="ee4ms352 css-15fa8f5 e1c1bym14">
                    <div data-vars-cta="Big Story Block 0" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="See Margaret Qualley’s Critics Choice Dress"
                        data-vars-ga-outbound-link="https://www.elle.com/fashion/celebrity-style/a63706888/margaret-qualley-getting-ready-diary-critics-choice-awards-2025/"
                        class="css-1hpb4i6 ee4ms351">
                        <img alt="an elegant figure wearing a stylish sheer blouse with an intricate necklace in a garden setting"
                            title="an elegant figure wearing a stylish sheer blouse with an intricate necklace in a garden setting"
                            fetchpriority="high" width="3600" height="2413" decoding="async" data-nimg="1" 
                            style="
                                    color: transparent;
                                    width: 100%;
                                    max-height:800px; object-fit:cover ; object-position:top;
                                "
                                src="<?php echo e($image); ?>"
                                class="css-0 e1g79fud0" />
                    </div>
                    <div data-theme-key="custom-item-content" class="css-2e1l8j ee4ms350">
                        <div data-theme-key="custom-item-label" class="css-9j0y42 e10ip9lg0">
                            <?php echo e($cat); ?>

                        </div>
                        <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                            <span aria-hidden="true" data-theme-key="title-design-element-before"
                                class="css-1dmjnw1 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                class="css-hnknpq e10ip9lg5">
                            <?php echo e($title); ?>

                            </span><span aria-hidden="true"
                                data-theme-key="title-design-element-after" class="css-ha23m7 eagam8p1"></span>
                        </h2>
                    </div>
                </a>
            </section>

            <?php endif; ?>


            <?php $__currentLoopData = $fashionPosts->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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

            <section aria-label="" data-vars-block-curation="curated" data-vars-block-type="Big Story Block"
                data-vars-block-slot="2" data-vars-block-id="e5f03e5a-4150-4aba-8634-aef88f75b881"
                data-vars-block-heading="FASHION" id="6e7b7bfb-b6ce-4e3d-8ba3-de62b4bf9bba" data-lazy-id="P0-7"
                class="css-cs4uhs e1smmp0v0">
                <div class="css-y4yi8 e19qkiag2">
                    <div class="ad-disclaimer no-print css-3jfnbc e1caqep90">
                        Advertisement - Continue Reading Below
                    </div>
                    <div id="gpt-ad-vertical-top" class="ad-container css-om4gqg ewg5wdb1"></div>
                </div>
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><a data-theme-key="base-link"
                            href="/category/fashion" class="css-0 e1c1bym14">FASHION</a><span
                            aria-hidden="true" data-theme-key="title-design-element-after"
                            class="css-0 eagam8p1"></span>
                    </h2>
                </div>

                <a data-theme-key="custom-item" label="" data-vars-cta="FASHION" data-vars-ga-position="1"
                    data-vars-ga-call-to-action="Zara Taps Style Not Com for New Capsule Collection"
                    data-vars-ga-outbound-link="https://www.elle.com/fashion/shopping/a63665364/zara-style-not-com-capsule-collection-beka-gvishiani-interview-2025/"
                    href="<?php echo e($url); ?>"
                    class="ee4ms352 css-15fa8f5 e1c1bym14">
                    <div data-vars-cta="FASHION" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="Zara Taps Style Not Com for New Capsule Collection"
                        data-vars-ga-outbound-link="https://www.elle.com/fashion/shopping/a63665364/zara-style-not-com-capsule-collection-beka-gvishiani-interview-2025/"
                        class="css-1hpb4i6 ee4ms351">
                        <img alt="style not com zara" title="style not com zara" loading="lazy" width="1992"
                            height="2500" decoding="async" data-nimg="1" style="
                                    color: transparent;
                                    width: 100%;
                                    height: auto;
                                    max-height:500px ; object-position: top; object-fit: cover ;
                                " 
                             src="<?php echo e($image); ?>"


                            class="css-0 e1g79fud0" />
                    </div>
                    <div data-theme-key="custom-item-content" class="css-15nifei ee4ms350">
                        <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                            <span aria-hidden="true" data-theme-key="title-design-element-before"
                                class="css-1dmjnw1 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                class="css-hnknpq e10ip9lg5"><?php echo e($title); ?></span><span aria-hidden="true" data-theme-key="title-design-element-after"
                                class="css-ha23m7 eagam8p1"></span>
                        </h2>
                        <div data-theme-key="custom-item-dek" class="css-as5r5l e10ip9lg4">
                            <p>
                                <?php echo e($description); ?>

                            </p>
                        </div>
                        <span class="css-1fv2c70 e10ip9lg2">
                            <section data-lazy-parent="P0-7">
                                <address class="css-rhj3ne e1v8cotw2">
                                    <span data-theme-key="by-line-name" class="css-1qat9tq e1v8cotw1"><span>By <?php echo e($author); ?></span></span>
                                </address>
                            </section>
                        </span>
                    </div>
                </a>

            </section>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <section data-vars-block-curation="curated" data-vars-block-type="4 Across Block" data-vars-block-slot="3"
                data-vars-block-id="e3d40b38-3abe-468a-8810-6d57d81224b7" data-vars-block-heading="SHOPPING"
                id="ad72c3b2-ce30-4ed6-9237-99176c8e7144" data-lazy-id="P0-8" class="css-1tddtcr ezpcz1b0">
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><a data-theme-key="base-link"
                            href="/category/Elle Brillante/" class="css-0 e1c1bym14" style="text"><?php echo e(strtoupper('Elle Brillante')); ?></a><span
                            aria-hidden="true" data-theme-key="title-design-element-after"
                            class="css-0 eagam8p1"></span>
                    </h2>
                </div>
                
                <?php if (isset($component)) { $__componentOriginal0da6ced423325ca9ce0718e725d53c70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0da6ced423325ca9ce0718e725d53c70 = $attributes; } ?>
<?php $component = App\View\Components\ShortCard::resolve(['posts' => $ellePosts->slice(0,4)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('short-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ShortCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $attributes = $__attributesOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $component = $__componentOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__componentOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>


            </section>

            <div data-journey-unblur="true" class="gpt-breaker-container breaker-ad e1dxcrh10 css-1c7d8p3 e1spmc110">
                <div class="ad-disclaimer no-print css-1nkb8av e1caqep90">
                    Advertisement - Continue Reading Below
                </div>
                <div id="gpt-ad-feed-leaderboard-3" class="ad-container css-1njatnj ewg5wdb1"></div>
            </div>
            <section data-vars-block-curation="curated" data-vars-block-type="Big Story Feed Block"
                data-vars-block-slot="4" data-vars-block-id="96055fed-cd39-4729-84ae-0e463ad070f8"
                data-vars-block-heading="BEAUTY" id="d74ae64c-371d-42f8-a169-e996b1f588cb" data-lazy-id="P0-9"
                class="css-5svtne eq9yxe30">
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><a data-theme-key="base-link"
                            href="/category/beauty" class="css-0 e1c1bym14">BEAUTY</a><span
                            aria-hidden="true" data-theme-key="title-design-element-after"
                            class="css-0 eagam8p1"></span>
                    </h2>
                </div>
                <div data-theme-key="big-story-feed-block-container" class="css-1o1ws1x eq9yxe32">

                    <?php $__currentLoopData = $beautyPosts->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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

                    <a data-theme-key="custom-item" label="" data-vars-cta="BEAUTY" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="Cynthia Erivo’s Dewy Critics Choice Makeup Look"
                        data-vars-ga-outbound-link="https://www.elle.com/beauty/makeup-skin-care/a63709383/cynthia-erivo-beauty-look-critics-choice-awards-2025/"
                        href="<?php echo e($url); ?>"
                        class="ee4ms352 css-1bibe0b e1c1bym14">
                        <div data-vars-cta="BEAUTY" data-vars-ga-position="1"
                            data-vars-ga-call-to-action="Cynthia Erivo’s Dewy Critics Choice Makeup Look"
                            data-vars-ga-outbound-link="https://www.elle.com/beauty/makeup-skin-care/a63709383/cynthia-erivo-beauty-look-critics-choice-awards-2025/"
                            class="__resp-container css-1er9154 ee4ms351">
                            <picture class="css-0 e1i0vlu30">
                                
                                <img src="<?php echo e($image); ?>"
                                    alt="cynthia erivo" title="cynthia erivo" width="920" height="1386" decoding="async"
                                    loading="lazy" sizes="100vw" />
                            </picture>
                        </div>
                        <div data-theme-key="custom-item-content" class="css-14flyc1 ee4ms350">
                            <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                                <span aria-hidden="true" data-theme-key="title-design-element-before"
                                    class="css-0 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                    class="css-ly8qyl e10ip9lg5">
                                <?php echo e($title); ?>

                                </span><span aria-hidden="true"
                                    data-theme-key="title-design-element-after" class="css-0 eagam8p1"></span>
                            </h2>
                            <div data-theme-key="custom-item-dek" class="css-1tgeyd0 e10ip9lg4">
                                <p>
                                    <?php echo e($description); ?>

                                </p>
                            </div>
                            <span class="css-1fv2c70 e10ip9lg2">
                                <section data-lazy-parent="P0-9">
                                    <address class="css-rhj3ne e1v8cotw2">
                                        <span data-theme-key="by-line-name" class="css-1qat9tq e1v8cotw1"><span>By <?php echo e($author); ?></span></span>
                                    </address>
                                </section>
                            </span>
                        </div>
                    </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div>
                        <div data-theme-key="big-story-feed-basefeed-container" class="css-hhmn3a eq9yxe33">

                            <?php $__currentLoopData = $beautyPosts->slice(1,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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
                                
                            <a data-theme-key="custom-item" label="" data-vars-cta="BEAUTY" data-vars-ga-position="2"
                                data-vars-ga-call-to-action="Finding the Beauty in Sports "
                                data-vars-ga-outbound-link="https://www.elle.com/beauty/makeup-skin-care/a63634396/beauty-brands-investing-sports-explained/"
                                href="<?php echo e($url); ?>"
                                class="ee4ms352 css-1m44p8r e1c1bym14">
                                <div data-vars-cta="BEAUTY" data-vars-ga-position="2"
                                    data-vars-ga-call-to-action="Finding the Beauty in Sports "
                                    data-vars-ga-outbound-link="https://www.elle.com/beauty/makeup-skin-care/a63634396/beauty-brands-investing-sports-explained/"
                                    class="css-ftsoqv ee4ms351">
                                    <img alt="afc wild card playoffs miami dolphins v kansas city chiefs"
                                        title="AFC Wild Card Playoffs - Miami Dolphins v Kansas City Chiefs"
                                        loading="lazy" width="3000" height="1999" decoding="async" data-nimg="1" style="
                                                color: transparent;
                                                width: 100%;
                                                height: auto;
                                                aspect-ratio: 1/1 ; object-position: top; object-fit: cover ;
                                            " 
                                            src="<?php echo e($image); ?>"
                                        class="css-0 e1g79fud0" />
                                </div>
                                <div data-theme-key="custom-item-content" class="css-1a613ux ee4ms350">
                                    <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                                            class="css-0 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                            class="css-8x9owz e10ip9lg5"><?php echo e($title); ?></span><span
                                            aria-hidden="true" data-theme-key="title-design-element-after"
                                            class="css-0 eagam8p1"></span>
                                    </h2>
                                    <span class="css-1fv2c70 e10ip9lg2">
                                        <section data-lazy-parent="P0-9">
                                            <address class="css-gouovr e1v8cotw2">
                                                <span data-theme-key="by-line-name"
                                                    class="css-1eedjog e1v8cotw1"><span>By <?php echo e($author); ?></span></span>
                                            </address>
                                        </section>
                                    </span>
                                </div>
                            </a>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>
                </div>
            </section>
            <section data-vars-block-curation="curated" data-vars-block-type="Big Story Feed Block"
                data-vars-block-slot="5" data-vars-block-id="0cfd9893-42b4-4c75-b49d-7f7622860880"
                data-vars-block-heading="CULTURE" id="4684e307-46cc-4e30-ab01-d9e54fa237f3" data-lazy-id="P0-10"
                class="css-17bsprv eq9yxe30">
                <div class="css-y4yi8 e19qkiag2">
                    <div class="ad-disclaimer no-print css-3jfnbc e1caqep90">
                        Advertisement - Continue Reading Below
                    </div>
                    <div id="gpt-ad-feed-vertical-5" class="ad-container css-om4gqg ewg5wdb1"></div>
                </div>
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><a data-theme-key="base-link"
                            href="/category/culture/" class="css-0 e1c1bym14">CULTURE</a><span
                            aria-hidden="true" data-theme-key="title-design-element-after"
                            class="css-0 eagam8p1"></span>
                    </h2>
                </div>
                <div data-theme-key="big-story-feed-block-container" class="css-wgm1ip eq9yxe32">
                    
                    <?php $__currentLoopData = $cultPosts->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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

                    <a data-theme-key="custom-item" label="" data-vars-cta="BEAUTY" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="Cynthia Erivo’s Dewy Critics Choice Makeup Look"
                        data-vars-ga-outbound-link="https://www.elle.com/beauty/makeup-skin-care/a63709383/cynthia-erivo-beauty-look-critics-choice-awards-2025/"
                        href="<?php echo e($url); ?>"
                        class="ee4ms352 css-1bibe0b e1c1bym14">
                        <div data-vars-cta="BEAUTY" data-vars-ga-position="1"
                            data-vars-ga-call-to-action="Cynthia Erivo’s Dewy Critics Choice Makeup Look"
                            data-vars-ga-outbound-link="https://www.elle.com/beauty/makeup-skin-care/a63709383/cynthia-erivo-beauty-look-critics-choice-awards-2025/"
                            class="__resp-container css-1er9154 ee4ms351">
                            <picture class="css-0 e1i0vlu30">
                                
                                <img src="<?php echo e($image); ?>"
                                    alt="cynthia erivo" title="cynthia erivo" width="920" height="1386" decoding="async"
                                    loading="lazy" sizes="100vw" />
                            </picture>
                        </div>
                        <div data-theme-key="custom-item-content" class="css-14flyc1 ee4ms350">
                            <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                                <span aria-hidden="true" data-theme-key="title-design-element-before"
                                    class="css-0 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                    class="css-ly8qyl e10ip9lg5">
                                <?php echo e($title); ?>

                                </span><span aria-hidden="true"
                                    data-theme-key="title-design-element-after" class="css-0 eagam8p1"></span>
                            </h2>
                            <div data-theme-key="custom-item-dek" class="css-1tgeyd0 e10ip9lg4">
                                <p>
                                    <?php echo e($description); ?>

                                </p>
                            </div>
                            <span class="css-1fv2c70 e10ip9lg2">
                                <section data-lazy-parent="P0-9">
                                    <address class="css-rhj3ne e1v8cotw2">
                                        <span data-theme-key="by-line-name" class="css-1qat9tq e1v8cotw1"><span>By <?php echo e($author); ?></span></span>
                                    </address>
                                </section>
                            </span>
                        </div>
                    </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div>
                        <div data-theme-key="big-story-feed-basefeed-container" class="css-1ow0w5y eq9yxe33">

                            <?php $__currentLoopData = $cultPosts->slice(1,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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
                            <a data-theme-key="custom-item" label="" data-vars-cta="CULTURE" data-vars-ga-position="2"
                                data-vars-ga-call-to-action="Anitta Is Ready to Show Her True Self"
                                data-vars-ga-outbound-link="https://www.elle.com/culture/music/a63668759/anitta-true-religion-documentary-shakira-interview/"
                                href="<?php echo e($url); ?>"
                                class="ee4ms352 css-1pxdqsn e1c1bym14">
                                <div data-vars-cta="CULTURE" data-vars-ga-position="2"
                                    data-vars-ga-call-to-action="Anitta Is Ready to Show Her True Self"
                                    data-vars-ga-outbound-link="https://www.elle.com/culture/music/a63668759/anitta-true-religion-documentary-shakira-interview/"
                                    class="css-ftsoqv ee4ms351">
                                    <img alt="anitta stars in true religion campaign"
                                        title="anitta stars in true religion campaign" loading="lazy" width="2000"
                                        height="3000" decoding="async" data-nimg="1" style="
                                                color: transparent;
                                                width: 100%;
                                                height: auto;
                                                aspect-ratio: 1/1 ; object-position: top; object-fit: cover ;

                                            " 
                                         src="<?php echo e($image); ?>"
                                        class="css-0 e1g79fud0" />
                                </div>
                                <div data-theme-key="custom-item-content" class="css-0 ee4ms350">
                                    <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                                            class="css-0 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                            class="css-1fld8nl e10ip9lg5"><?php echo e($title); ?></span><span aria-hidden="true"
                                            data-theme-key="title-design-element-after" class="css-0 eagam8p1"></span>
                                    </h2>
                                    <span class="css-1fv2c70 e10ip9lg2">
                                        <section data-lazy-parent="P0-10">
                                            <address class="css-gouovr e1v8cotw2">
                                                <span data-theme-key="by-line-name"
                                                    class="css-1eedjog e1v8cotw1"><span>By <?php echo e($author); ?></span></span>
                                            </address>
                                        </section>
                                    </span>
                                </div>
                            </a>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section data-vars-block-curation="curated" data-vars-block-type="4 Across Block" data-vars-block-slot="6"
                data-vars-block-id="9113f9c8-56c8-47e6-b15e-0439b1a7d4ad" data-vars-block-heading="HOROSCOPES"
                id="1950b8ad-9618-4af9-973c-9f4116026428" data-lazy-id="P0-11" class="css-1tddtcr ezpcz1b0">
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><a data-theme-key="base-link"
                            href="/category/horoscopes/" class="css-0 e1c1bym14">HOROSCOPES</a><span
                            aria-hidden="true" data-theme-key="title-design-element-after"
                            class="css-0 eagam8p1"></span>
                    </h2>
                </div>
                <?php if (isset($component)) { $__componentOriginal0da6ced423325ca9ce0718e725d53c70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0da6ced423325ca9ce0718e725d53c70 = $attributes; } ?>
<?php $component = App\View\Components\ShortCard::resolve(['posts' => $horoPosts->slice(0,4)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('short-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ShortCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $attributes = $__attributesOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $component = $__componentOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__componentOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>

            </section>

            <?php $__currentLoopData = $polPosts->slice(0,1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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

            <section aria-label="" data-vars-block-curation="curated" data-vars-block-type="Big Story Block"
                data-vars-block-slot="7" data-vars-block-id="c5528930-1eb5-4222-a35a-298a7f18de1e"
                data-vars-block-heading="NEWS & POLITICS" id="01926976-216e-468a-a020-428a53240839" data-lazy-id="P0-12"
                class="css-oa9wak e1smmp0v0">
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><a data-theme-key="base-link"
                            href="/category/news & politics/" class="css-0 e1c1bym14">NEWS &
                            POLITICS</a><span aria-hidden="true" data-theme-key="title-design-element-after"
                            class="css-0 eagam8p1"></span>
                    </h2>
                </div>
                <a data-theme-key="custom-item" label="" data-vars-cta="NEWS & POLITICS" data-vars-ga-position="1"
                    data-vars-ga-call-to-action="Norah O’Donnell Signs Off"
                    data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a63542366/norah-odonnell-signs-off-cbs-evening-news/"
                    href="<?php echo e($url); ?>"
                    class="ee4ms352 css-19r2tia e1c1bym14">
                    <div data-vars-cta="NEWS & POLITICS" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="Norah O’Donnell Signs Off"
                        data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a63542366/norah-odonnell-signs-off-cbs-evening-news/"
                        class="css-1aroxpo ee4ms351">
                        <img alt="news studio setting during an election broadcast"
                            title="news studio setting during an election broadcast" loading="lazy" width="7665"
                            height="5112" decoding="async" data-nimg="1" style="
                                    color: transparent;
                                    width: 100%;
                                    height: auto;
                                    max-height:500px ; object-position: top; object-fit: cover ;

                                "
                                src="<?php echo e($image); ?>"
                                 class="css-0 e1g79fud0" />
                    </div>
                    <div data-theme-key="custom-item-content" class="css-hoj2rk ee4ms350">
                        <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                            <span aria-hidden="true" data-theme-key="title-design-element-before"
                                class="css-1dmjnw1 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                class="css-q3yz31 e10ip9lg5"><?php echo e($title); ?> </span><span aria-hidden="true" data-theme-key="title-design-element-after"
                                class="css-ha23m7 eagam8p1"></span>
                        </h2>
                        <div data-theme-key="custom-item-dek" class="css-13mc9rd e10ip9lg4">
                            <p>
                              <?php echo e($description); ?>

                            </p>
                        </div>
                        <span class="css-1fv2c70 e10ip9lg2">
                            <section data-lazy-parent="P0-12">
                                <address class="css-rhj3ne e1v8cotw2">
                                    <span data-theme-key="by-line-name" class="css-1qat9tq e1v8cotw1"><span>By <?php echo e($author); ?></span></span>
                                </address>
                            </section>
                        </span>
                    </div>
                </a>
            </section>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <div data-journey-unblur="true" class="gpt-breaker-container breaker-ad e1dxcrh10 css-1c7d8p3 e1spmc110">
                <div class="ad-disclaimer no-print css-1nkb8av e1caqep90">
                    Advertisement - Continue Reading Below
                </div>
                <div id="gpt-ad-feed-leaderboard-7" class="ad-container css-1njatnj ewg5wdb1"></div>
            </div>

            <section data-vars-block-curation="curated" data-vars-block-type="4 Across Block" data-vars-block-slot="8"
                data-vars-block-id="2adeed54-51bc-4234-ad3d-3ca5198bc418" data-vars-block-heading="COVER STORIES"
                id="f276e944-88b5-469d-9ec5-85d0472b9b47" data-lazy-id="P0-13" class="css-1tddtcr ezpcz1b0">
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><span>COVER STORIES</span><span aria-hidden="true"
                            data-theme-key="title-design-element-after" class="css-0 eagam8p1"></span>
                    </h2>
                </div>

                <?php if (isset($component)) { $__componentOriginal0da6ced423325ca9ce0718e725d53c70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0da6ced423325ca9ce0718e725d53c70 = $attributes; } ?>
<?php $component = App\View\Components\ShortCard::resolve(['posts' => $randomPosts->slice(0,4)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('short-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ShortCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $attributes = $__attributesOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $component = $__componentOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__componentOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>

                
            </section>

            


            <section data-vars-block-curation="collection" data-vars-block-type="3 Column Block"
                data-vars-block-slot="10" data-vars-block-id="b54d6a9d-7d74-425f-aa3c-d78059dcb863"
                data-vars-block-heading="" id="a52d949c-f17a-4619-91bc-cf0afb264736" data-lazy-id="P0-15"
                class="css-1fctiym emk51de2">
                <div data-theme-key="three-columns-block-container" class="css-w9tso1 emk51de1">
                    <div data-theme-key="block-column" class="css-19z6se emk51de0">
                        <div data-theme-key="block-header" class="css-13iaw20 eqz7u0o2">
                            <h2 data-theme-key="block-heading" class="css-108bbug eqz7u0o1">
                                <span aria-hidden="true" data-theme-key="title-design-element-before"
                                    class="css-1aq4sl eagam8p0"></span><a data-theme-key="base-link"
                                    href="/category/food" class="css-0 e1c1bym14">Food
                                    </a><span aria-hidden="true" data-theme-key="title-design-element-after"
                                    class="css-1aq4sl eagam8p1"></span>
                            </h2>
                        </div>

                        <?php $__currentLoopData = $foodPosts->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                            <span class="css-1fv2c70 e10ip9lg2">
                                                <section data-lazy-parent="P0-15">
                                                    <address class="css-gouovr e1v8cotw2">
                                                        <span data-theme-key="by-line-name" class="css-1eedjog e1v8cotw1"><span>By
                                                                <?php echo e($author); ?></span></span>
                                                    </address>
                                                </section>
                                            </span>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                     
                        
                    </div>
                    <div data-theme-key="block-column" class="css-19z6se emk51de0">
                        <div data-theme-key="block-header" class="css-13iaw20 eqz7u0o2">
                            <h2 data-theme-key="block-heading" class="css-108bbug eqz7u0o1">
                                <span aria-hidden="true" data-theme-key="title-design-element-before"
                                    class="css-1aq4sl eagam8p0"></span><a data-theme-key="base-link"
                                    href="#" class="css-0 e1c1bym14">Trending</a><span aria-hidden="true" data-theme-key="title-design-element-after"
                                    class="css-1aq4sl eagam8p1"></span>
                            </h2>
                        </div>
                        
                        <?php $__currentLoopData = $trendingPosts->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                            <span class="css-1fv2c70 e10ip9lg2">
                                                <section data-lazy-parent="P0-15">
                                                    <address class="css-gouovr e1v8cotw2">
                                                        <span data-theme-key="by-line-name" class="css-1eedjog e1v8cotw1"><span>By
                                                                <?php echo e($author); ?></span></span>
                                                    </address>
                                                </section>
                                            </span>
                                </div>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div data-theme-key="block-column" class="css-19z6se emk51de0">
                        <div data-theme-key="block-header" class="css-13iaw20 eqz7u0o2">
                            <h2 data-theme-key="block-heading" class="css-108bbug eqz7u0o1">
                                <span aria-hidden="true" data-theme-key="title-design-element-before"
                                    class="css-1aq4sl eagam8p0"></span><a data-theme-key="base-link"
                                    href="/category/travel" class="css-0 e1c1bym14">Travel</a><span aria-hidden="true" data-theme-key="title-design-element-after"
                                    class="css-1aq4sl eagam8p1"></span>
                            </h2>
                        </div>
                        
                        <?php $__currentLoopData = $travPosts->slice(0,4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                        <span class="css-1fv2c70 e10ip9lg2">
                                            <section data-lazy-parent="P0-15">
                                                <address class="css-gouovr e1v8cotw2">
                                                    <span data-theme-key="by-line-name" class="css-1eedjog e1v8cotw1"><span>By
                                                            <?php echo e($author); ?></span></span>
                                                </address>
                                            </section>
                                        </span>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </section>
            <div data-journey-unblur="true" class="gpt-breaker-container breaker-ad e1dxcrh10 css-1c7d8p3 e1spmc110">
                <div class="ad-disclaimer no-print css-1nkb8av e1caqep90">
                    Advertisement - Continue Reading Below
                </div>
                <div id="gpt-ad-feed-leaderboard-10" class="ad-container css-1njatnj ewg5wdb1"></div>
            </div>


            <?php if(isset($recentPosts[0])): ?>

            <?php
                $post = $recentPosts[0];
                $url = route('blog', ['slug' => $post->slug]);
                $title = Str::title($post->title);

                $image = $post->thumbnail;
                $description = $post->description;

                $date = $post->created_at->format('d.m.y');
                $author = $post->author?->name;
                $cat = $post->category->category;
                $catUrl = route('category', ['category' => $cat]);
            ?>
                
            <section aria-label="CELEBRITY STYLE" data-vars-block-curation="curated"
                data-vars-block-type="Big Story Block" data-vars-block-slot="1"
                data-vars-block-id="6d374412-e845-43b9-9722-bccc60fbe1d7" data-vars-block-heading=""
                id="31ab7f5a-49f1-4e28-8452-0d60793230a6" data-lazy-id="P0-6" class="css-oa9wak e1smmp0v0">
                <a data-theme-key="custom-item" label="CELEBRITY STYLE" data-vars-cta="Big Story Block 0"
                    data-vars-ga-position="1" data-vars-ga-call-to-action="See Margaret Qualley’s Critics Choice Dress"
                    data-vars-ga-outbound-link="https://www.elle.com/fashion/celebrity-style/a63706888/margaret-qualley-getting-ready-diary-critics-choice-awards-2025/"
                    href="<?php echo e($url); ?>"
                    class="ee4ms352 css-15fa8f5 e1c1bym14">
                    <div data-vars-cta="Big Story Block 0" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="See Margaret Qualley’s Critics Choice Dress"
                        data-vars-ga-outbound-link="https://www.elle.com/fashion/celebrity-style/a63706888/margaret-qualley-getting-ready-diary-critics-choice-awards-2025/"
                        class="css-1hpb4i6 ee4ms351">
                        <img alt="an elegant figure wearing a stylish sheer blouse with an intricate necklace in a garden setting"
                            title="an elegant figure wearing a stylish sheer blouse with an intricate necklace in a garden setting"
                            fetchpriority="high" width="3600" height="2413" decoding="async" data-nimg="1" 
                            style="
                                    color: transparent;
                                    width: 100%;
                                    max-height:800px; object-fit:cover ; object-position:top;
                                "
                                src="<?php echo e($image); ?>"
                                class="css-0 e1g79fud0" />
                    </div>
                    <div data-theme-key="custom-item-content" class="css-2e1l8j ee4ms350">
                        <div data-theme-key="custom-item-label" class="css-9j0y42 e10ip9lg0">
                            <?php echo e($cat); ?>

                        </div>
                        <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6">
                            <span aria-hidden="true" data-theme-key="title-design-element-before"
                                class="css-1dmjnw1 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                class="css-hnknpq e10ip9lg5">
                            <?php echo e($title); ?>

                            </span><span aria-hidden="true"
                                data-theme-key="title-design-element-after" class="css-ha23m7 eagam8p1"></span>
                        </h2>
                    </div>
                </a>
            </section>

            <?php endif; ?>


           

            <section data-vars-block-curation="site" data-vars-block-type="Page Content Block" data-vars-block-slot="12"
                data-vars-block-id="5a3b8c75-19b0-44ea-bc91-be99a16b683f" data-vars-block-heading="THE LATEST"
                id="0c15a9b4-d07d-45c0-9024-9815472a1d45" data-lazy-id="P0-17" class="css-1tddtcr ezpcz1b0">
                <div data-theme-key="block-header" class="css-1sr6p3x eqz7u0o2">
                    <h2 data-theme-key="block-heading" class="css-1e39s00 eqz7u0o1">
                        <span aria-hidden="true" data-theme-key="title-design-element-before"
                            class="css-0 eagam8p0"></span><span>THE LATEST</span><span aria-hidden="true"
                            data-theme-key="title-design-element-after" class="css-0 eagam8p1"></span>
                    </h2>
                </div>
                
                <?php if (isset($component)) { $__componentOriginal0da6ced423325ca9ce0718e725d53c70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0da6ced423325ca9ce0718e725d53c70 = $attributes; } ?>
<?php $component = App\View\Components\ShortCard::resolve(['posts' => $recentPosts->slice(1,12)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('short-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ShortCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $attributes = $__attributesOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__attributesOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0da6ced423325ca9ce0718e725d53c70)): ?>
<?php $component = $__componentOriginal0da6ced423325ca9ce0718e725d53c70; ?>
<?php unset($__componentOriginal0da6ced423325ca9ce0718e725d53c70); ?>
<?php endif; ?>


            </section>
        </main>
        
        <?php echo $__env->make('pages.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <div class="mobile-adhesion-unit open css-1wohilq e1kh6tol1">
            <div id="adAdhesion" class="css-6bu6ey ewg5wdb0"></div>
            <div aria-label="Close" class="mobile-adhesion-unit-close-button css-1o9hvj e1kh6tol0"></div>
        </div>
        <section data-lazy-id="P0-19"></section>
    </div>
    <script id="__HRST_DATA__" type="application/json">
            {
                "landing": {
                    "header": "standard",
                    "layout": "Custom",
                    "type": "Homepage",
                    "value": { "name": "Homepage", "url": "default" }
                },
                "site": {
                    "cds-paywall": true,
                    "icxSiteId": "10051",
                    "jam-journey-enabled": true,
                    "jam-journey-modals-enabled": true,
                    "jam-journey-meters-enabled": true,
                    "jam-journey-registration-modals-enabled": false,
                    "name": "ELLE",
                    "new-nav": true,
                    "piano-paywall": false,
                    "prefix": "elle",
                    "sso": true,
                    "video": {
                        "gaVideoDiagTracking": "true",
                        "gaVideoBrandName": "Elle",
                        "icxVideoDomainId": "7303"
                    }
                },
                "flags": {
                    "custom-feeds.image-block": 1,
                    "fre.commerce.affiliate.trackonomics": 1,
                    "fre.location-choice.display-generic-title": 1,
                    "custom-feeds.getty-collection-images": 1,
                    "retailer.site.specific-ecpc": 1,
                    "top-pathing": 1,
                    "content-editor.toggles.paywall": 1,
                    "enable-microsoft-quick-auth": 1,
                    "gallery-display-type-custom": 1,
                    "fre.next-ad-placements": 1,
                    "product.draft.enabled": 1,
                    "fre.enable-recirculation-module": 1,
                    "fre.commerce.use-affiliate_url": 1,
                    "gallery-display-type-timeline": 1,
                    "custom-feeds.media-modal-search-tab": 1,
                    "fre.enable-userinfo-auth-route": 1,
                    "commerce.magento.affiliate.enabled": 1,
                    "paywall.schema": 1,
                    "product.content-product.smart-swap.out-of-stock": 1,
                    "custom-feeds.add-collection-to-block": 1,
                    "fre.jam-journey.enable-modals": 1,
                    "fre.do-not-sell-link": 1,
                    "gallery-1x1-mobile-lede-crops": 1,
                    "fre.jam-journey.enable-billboard": 1,
                    "content-editor.enable-repositioned-disclaimer": 1,
                    "video.watch-next-in-body": 1,
                    "author-bios": 1,
                    "enable-google-one-tap": 1,
                    "enable-avatar-menu": 1,
                    "product.content-product.couponing": 1,
                    "fre.jam-journey.enable-email-captures": 1,
                    "custom-promo-lead-videos": 1,
                    "mobile-adhesion-unit": 1,
                    "custom-feeds.composite-image-block": 1,
                    "syndy.hreflang.version_of_us_uk_locales": 1,
                    "fre.enable-query-split": 1,
                    "fre.commerce.product-summary-view": 1,
                    "fre.use-onetrust": 1,
                    "content-editor.1x1-lead-image-crop": 1,
                    "custom-feeds.curated-products.4-across": 1,
                    "cover-stories": 1,
                    "video.sticky-player-mobile": 1,
                    "product.badging.automate-sale-badging-organic": 1,
                    "content-editor.key-features-product-specs": 1,
                    "enable-sso": 1,
                    "concorde.fre.autocomplete": 1,
                    "seo.display-publish-date-timezone": 1,
                    "content-editor.enable-custom-header": 1,
                    "self-hosted-ads": 1,
                    "location-choice": 1,
                    "content-editor.toggles.hide-affiliate-disclaimer": 1,
                    "seo.syndicated-content.no-noindex": 1,
                    "recirculation.end-of-content": 1,
                    "commerce.reordering.enable": 1,
                    "fre.render-dek-on-search-page": 1,
                    "gallery-display-type-product-roundup": 1,
                    "video.use-social-image": 1,
                    "video-hub": 1,
                    "self-hosted.affiliate.enabled": 1,
                    "fre.enable-author-flyout": 1,
                    "video.sticky-player": 1,
                    "fre.seogra.breadcrumbs-with-collections": 1,
                    "video.enable-glimmer": 1,
                    "seo.block-meta-ai-crawler": 1,
                    "fre.enable-jam-journey": 1,
                    "vader.commerce.use-afflinks_link": 1,
                    "custom-feeds.default-blocks": 1,
                    "display-search": 1,
                    "product.content-product.smart-swap.out-of-stock.service-api": 1,
                    "add-introduction-h2s-in-listicle-toc": 1,
                    "fre.jam-journey.enable-meters": 1,
                    "video.sticky-player-lead": 1,
                    "fre.cds.enable-paywall": 1,
                    "fre.font-fallbacks": 1,
                    "video.use-video-player-two": 1,
                    "fre.seogra.breadcrumbs": 1,
                    "fre.products.gallery.new-product-styling": 1,
                    "gallery-display-type-event-roundup": 1,
                    "new-nav": 1,
                    "fre.piano.enable-templates": 1,
                    "new-tablet-gallery": 1,
                    "product.content-product.smarter-swap": 1,
                    "fre.commerce.simplified-psv": 1,
                    "fre.content.enable-privacy-disclaimer": 1,
                    "video.mms-media-convert": 1,
                    "custom-feeds.text-block": 1,
                    "content-editor.gallery.multi-retailer.enabled": 1,
                    "mason-custom-feeds": 1,
                    "product.badging.automate-sale-badging": 1,
                    "fre.jam-journey.enable-top-slim-banner": 1,
                    "product-links-enabled": 1,
                    "fre.commerce.use-list-price-strikethrough": 1,
                    "top-pathing.content": 1,
                    "enable-listicle-toc": 1,
                    "fre.enable-my-stuff": 1,
                    "fre.enable-my-stuff-tooltip": 1,
                    "syndy.hreflang.version_of_all_locales": 1
                },
                "article": {
                    "canonicalUrl": "https://www.elle.com/",
                    "modifiedDate": {
                        "year": "2025",
                        "month": "02",
                        "day": "09",
                        "hour": "11",
                        "minute": "20"
                    },
                    "publishDate": {
                        "year": "2025",
                        "month": "02",
                        "day": "09",
                        "hour": "11",
                        "minute": "20"
                    },
                    "id": "elle.section.9663881",
                    "display": "Homepage",
                    "template": "Homepage",
                    "hideAffiliates": false,
                    "metadata": { "hideWatchNextPlayer": false },
                    "noAffiliateUrl": false
                },
                "metadata": {
                    "contentId": "b4af5224-cea2-4fdd-82bc-0a974e3a5d61",
                    "keywords": "",
                    "ogTitle": "",
                    "hreflangCount": 9
                },
                "datalayer": {},
                "adConfig": {
                    "bu": "HDM",
                    "site": "elle",
                    "zone": "/36117602/hdm-elle/",
                    "bidders": {
                        "IX": {
                            "d": {
                                "ga": "670278",
                                "gb": "670282",
                                "la": "670277",
                                "lb": "670283",
                                "brk": "670280",
                                "garb": "670279",
                                "brkrr": "670281"
                            },
                            "m": {
                                "ga": "670284",
                                "gb": "670285",
                                "lb": "670287",
                                "adh": "670288",
                                "brk": "670286"
                            },
                            "v": "942443"
                        },
                        "APN": {
                            "d": {
                                "ga": "24604090",
                                "gb": "10583083",
                                "la": "24604099",
                                "lb": "10583085",
                                "brk": "24604100",
                                "garb": "14355601",
                                "brkrr": "24604095"
                            },
                            "m": {
                                "ga": "24604091",
                                "gb": "10583090",
                                "lb": "10583091",
                                "adh": "16120603",
                                "brk": "24604096"
                            },
                            "v": "14734335"
                        },
                        "KAR": {
                            "m": {
                                "gb": "_nMF2QdH1ml",
                                "lb": "_p7Ko2RIbMA",
                                "adh": "_zOZgxfrDJu",
                                "gabrk": "_jK-TsZqW2LI"
                            },
                            "v": "_wDGMy7ldvI"
                        },
                        "MAG": {
                            "d": {
                                "ga": "2040208",
                                "gb": "2040218",
                                "la": "2040206",
                                "lb": "2040220",
                                "brk": "2040212",
                                "garb": "2040210",
                                "brkrr": "2040216"
                            },
                            "m": {
                                "ga": "2040222",
                                "gb": "2040224",
                                "lb": "2040230",
                                "adh": "2040232",
                                "brk": "2040226"
                            },
                            "v": "2731458",
                            "siteId": "369868",
                            "accountId": "11636"
                        },
                        "TDS": {
                            "d": { "tdsArt": "112030", "tdsBrk": "112029" },
                            "m": { "tdsArt": "112029" },
                            "pageId": "103512",
                            "pageIdDesktop300": "113863"
                        },
                        "TPL": {
                            "d": {
                                "ga": "elle_templated_300x400_atf_PB",
                                "gb": "elle_templated_300x400_btf_PB",
                                "lb": "elle_970x250_btf_PB",
                                "brkrr": "elle_templated_300x400_breaker_PB",
                                "la728": "elle_728x90_HDX_PB",
                                "la970": "elle_970x250_PB"
                            },
                            "m": {
                                "ga": "elle_templated_300x250_flex_atf_m_PB",
                                "lb": "elle_templated_300x250_flex_btf_m_PB",
                                "adh": "Elle_320x50_HDX_PB",
                                "brk": "elle_templated_300x250_flex_breaker_m_PB"
                            }
                        },
                        "TTD": {
                            "d": { "ttd": "desktop" },
                            "m": { "ttd": "mobile" },
                            "v": "video",
                            "siteId": "hdm-elle",
                            "supplySourceId": "hearstmagazines"
                        },
                        "AMZN": "3049",
                        "APNhdmuk": {
                            "d": {
                                "ga": "23458937",
                                "gb": "23458938",
                                "la": "23458939",
                                "lb": "23458940",
                                "brk": "23458944",
                                "brkrr": "23458945"
                            },
                            "m": {
                                "ga": "23458941",
                                "gb": "23458942",
                                "lb": "23458943",
                                "brk": "23458946"
                            },
                            "v": "23458947"
                        }
                    },
                    "modules": {
                        "ias": { "pubId": "931694" },
                        "sst": { "server": "www-sst.elle.com" },
                        "meta": { "id": "690796760981964", "cur": "USD" },
                        "optable": {
                            "slug": "prod-elle-com",
                            "geoWhitelist": ["US"]
                        },
                        "parsely": { "siteId": "elle.com" },
                        "actionIQ": {
                            "writeKey": "mediaos-elle-prod",
                            "cnameRecord": "https://aiq-in.elle.com",
                            "geoWhitelist": ["US"]
                        },
                        "comscore": { "c2": 6035258 },
                        "oneTrust": {
                            "doNotSellUrlOverride": "/about/a42158564/do-not-sell-my-personal-information/"
                        },
                        "sailthru": {
                            "ids": {
                                "production": "2494399497a47e76bde000b4823d9a5a"
                            }
                        },
                        "truedata": {
                            "ep": "td.elle.com",
                            "cid": "10458",
                            "scid": "107"
                        },
                        "permutive": {
                            "apiKey": "7d237500-e85c-4846-9eb8-5635df7b050c",
                            "locale": "US",
                            "currency": "USD",
                            "workspaceId": "eb036676-52ea-47b5-a2f6-fcfb4ece9c00",
                            "geoWhitelist": "US"
                        },
                        "optimizely": {
                            "webSnippetId": "21018620252",
                            "webSnippetKey": "us_elle"
                        },
                        "trueAnthem": "hearst",
                        "blockthrough": { "id": "6316821519007744" },
                        "brandMetrics": {
                            "siteId": "elle.com",
                            "accountId": "a6a45799-d06f-4cce-9dd7-4a947f7e7816"
                        },
                        "googleAnalytics": { "measurementId": "G-BTTN4BQHSS" }
                    },
                    "adBundle": [],
                    "settings": {
                        "mobileStickyAds": true,
                        "enableVerityTags": true
                    },
                    "siteList": ["www.elle.com"]
                },
                "commerce": {
                    "cons": "Cons",
                    "pros": "Pros",
                    "affiliate": {
                        "url": "https://assets.hearstapps.com/commerce/release/affiliate-bundle.master.js",
                        "amazon": {
                            "market": "HMG-US",
                            "default": {
                                "sem": "elle-lift-20",
                                "tag": "elle_auto-append-20",
                                "icxId": "10051",
                                "social": "elle-soc-lift-20"
                            }
                        },
                        "skimlinks": {
                            "market": "HMG-US",
                            "default": {
                                "url": "//s.skimresources.com/js/74968X1525074.skimlinks.js"
                            }
                        },
                        "trackonomics": { "cipd2": "ell" }
                    },
                    "flags": {
                        "site": {
                            "commerce.magento.affiliate.enabled": true,
                            "commerce.vader.render-afflinks-redirect": false,
                            "commerce.self-hosted.affiliate.render-afflinks-redirect": false,
                            "custom-feeds.sponsorship": false,
                            "fre.commerce.affiliate.trackonomics": true,
                            "fre.commerce.block-affiliate-tags": false,
                            "fre.commerce.use-affiliate_url": true,
                            "fre.enable-sponsored-content-to-content": false,
                            "self-hosted.affiliate.enabled": true
                        }
                    },
                    "hasProduct": false
                },
                "viewability": {
                    "/36117602/hdm-elle.dnt/atf|d": 25,
                    "/36117602/hdmuk-elle/homepage/atf|t": 20,
                    "/36117602/hdm-elle/homepage/atf|m": 15,
                    "/36117602/hdmuk-elle/homepage/atf|m": 10,
                    "/36117602/hdm-elle/homepage/atf|d": 25,
                    "/36117602/hdm-elle.gdpr/atf|d": 25,
                    "/36117602/hdm-elle.dnt/atf|m": 20,
                    "/36117602/hdm-elle.gdpr/atf|m": 20,
                    "/36117602/hdm-elle/homepage/atf|t": 25,
                    "/36117602/hdmuk-elle/homepage/breaker|t": 25,
                    "/36117602/hdm-elle/homepage/breaker|d": 35,
                    "/36117602/hdm-elle/homepage/breaker|t": 30,
                    "/36117602/hdm-elle.gdpr/atf|t": 30,
                    "/36117602/hdm-elle.dnt/atf|t": 30,
                    "/36117602/hdm-elle.gdpr/breaker|m": 35,
                    "/36117602/hdm-elle.gdpr/breaker|d": 35,
                    "/36117602/hdmuk-elle/homepage/atf|d": 35,
                    "/36117602/hdm-elle/homepage/breaker|m": 35,
                    "/36117602/hdm-elle.mgu/homepage/atf|m": 40,
                    "/36117602/hdm-elle.dnt/breaker|d": 60,
                    "/36117602/hdm-elle.mgu/homepage/atf|t": 100,
                    "/36117602/hdm-elle.mgu/homepage/atf|d": 55,
                    "/36117602/hdm-elle.dnt/breaker|t": 60,
                    "/36117602/hdm-elle.dnt/breaker|m": 45,
                    "/36117602/hdmuk-elle/homepage/breaker|m": 50,
                    "/36117602/hdm-elle.gdpr/breaker|t": 40,
                    "/36117602/hdmuk-elle/homepage/breaker|d": 40
                },
                "abTestingFullStack": [],
                "app": {
                    "fontFallbacks": [
                        "NeueHaasUnica",
                        "Inter",
                        "SaolDisplay",
                        "SaolText"
                    ]
                }
            }
        </script>
    <script id="__HRST">
        (window.HRST =
            window.HRST || JSON.parse(window.__HRST_DATA__.textContent)),
            window.dispatchEvent(new CustomEvent("HRST"));
    </script>
    <script id="__NEXT_DATA__" type="application/json">
            {
                "props": {
                    "pageProps": {
                        "alternates": [
                            {
                                "href": "https://www.elle.com/",
                                "language": "x-default"
                            },
                            {
                                "href": "https://www.elle.com/",
                                "language": "en-us"
                            },
                            {
                                "href": "https://www.elle.com/uk/",
                                "language": "en-gb"
                            },
                            {
                                "href": "https://www.elle.com/uk/",
                                "language": "en-ie"
                            },
                            {
                                "href": "https://www.elle.com/es/",
                                "language": "es-es"
                            },
                            {
                                "href": "https://www.elle.com/it/",
                                "language": "it-it"
                            },
                            {
                                "href": "https://www.elle.com/jp/",
                                "language": "ja-jp"
                            },
                            {
                                "href": "https://www.elle.com/nl/",
                                "language": "nl-nl"
                            },
                            {
                                "href": "https://www.elle.com/tw/",
                                "language": "zh-tw"
                            }
                        ],
                        "data": {
                            "feedInfo": [
                                {
                                    "title": "Home",
                                    "body": "",
                                    "slug": "default",
                                    "display_id": 9663881,
                                    "id": "b4af5224-cea2-4fdd-82bc-0a974e3a5d61",
                                    "blocks": [
                                        {
                                            "id": "31ab7f5a-49f1-4e28-8452-0d60793230a6",
                                            "type": "big-story",
                                            "heading": "",
                                            "subheading": "",
                                            "label": "CELEBRITY STYLE",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": false,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "text-under"
                                            },
                                            "text": "",
                                            "feeds": [
                                                {
                                                    "id": "6d374412-e845-43b9-9722-bccc60fbe1d7",
                                                    "source_type": "curated",
                                                    "heading_url": "",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "3000c615-1eeb-410b-8d2f-5effe83be7c9",
                                                            "display_id": 63706888,
                                                            "slug": "margaret-qualley-getting-ready-diary-critics-choice-awards-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T22:34:08.095297Z",
                                                            "publish_from": "2025-02-08T22:30:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                {
                                                                    "role": 2,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "role": 3,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "id": "89a47d93-1d80-4c75-9308-c5bb0d892586",
                                                                    "image_id": "89a47d93-1d80-4c75-9308-c5bb0d892586",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/img-2752-67a7c5bf6d982.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 2413,
                                                                    "role": 12,
                                                                    "pathname": "/images/img-2752-67a7c5bf6d982.jpg",
                                                                    "media_type": "image",
                                                                    "width": 3600,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.671xw:1.00xh;0.165xw,0",
                                                                            "2x1": "1.00xw:0.749xh;0,0.108xh",
                                                                            "3x1": "1xw:0.49730625777041026xh;center,top",
                                                                            "4x3": "0.8937037037037038xw:1xh;center,top",
                                                                            "4x6": "0.4468518518518519xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29838375466224615xh;center,top",
                                                                            "6x4": "1xw:0.9946125155408205xh;center,top",
                                                                            "8x1": "1xw:0.18648984666390386xh;center,top",
                                                                            "10x2": "1xw:0.29838375466224615xh;center,top",
                                                                            "10x3": "1xw:0.44757563199336925xh;center,top",
                                                                            "10x5": "1xw:0.7459593866556155xh;center,top",
                                                                            "16x9": "1xw:0.8392043099875673xh;center,top",
                                                                            "8x10": "0.5362222222222223xw:1xh;center,top",
                                                                            "9x16": "0.37703125xw:1xh;center,top",
                                                                            "18x11": "1xw:0.9117281392457521xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "an elegant figure wearing a stylish sheer blouse with an intricate necklace in a garden setting"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe actress celebrated her Best Supporting Actress nod in Chanel.\u003c/p\u003e",
                                                                "short_title": "See Margaret Qualley’s Critics Choice Dress",
                                                                "index_title": "Margaret Qualley’s Critics Choice Dress Took 500 Hours To Create",
                                                                "social_dek": "\u003cp\u003eThe actress celebrated her Best Supporting Actress nod in Chanel.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrity-style"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "6e7b7bfb-b6ce-4e3d-8ba3-de62b4bf9bba",
                                            "type": "big-story",
                                            "heading": "FASHION",
                                            "subheading": "",
                                            "label": "",
                                            "settings": {
                                                "show_dek": true,
                                                "show_byline": true,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "text-under"
                                            },
                                            "feeds": [
                                                {
                                                    "id": "e5f03e5a-4150-4aba-8634-aef88f75b881",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.elle.com/fashion/",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "8a41996c-2761-4931-9b62-5b1443374fd0",
                                                            "display_id": 63665364,
                                                            "slug": "zara-style-not-com-capsule-collection-beka-gvishiani-interview-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-07T16:34:05.035225Z",
                                                            "publish_from": "2025-02-07T15:32:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Tasha Nicole Smith"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                {
                                                                    "role": 2,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "role": 3,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "id": "81fa2dbd-96d0-4a17-b9bd-6b34b86f3170",
                                                                    "image_id": "81fa2dbd-96d0-4a17-b9bd-6b34b86f3170",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/25005-zaraxnotcom-ed-shot-03-0030-dig-67a2631d51805.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 2500,
                                                                    "role": 12,
                                                                    "pathname": "/images/25005-zaraxnotcom-ed-shot-03-0030-dig-67a2631d51805.jpg",
                                                                    "media_type": "image",
                                                                    "width": 1992,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1xw:0.7968xh;center,top",
                                                                            "2x1": "1xw:0.3984xh;center,top",
                                                                            "3x1": "1xw:0.2656xh;center,top",
                                                                            "4x3": "1xw:0.5976xh;center,top",
                                                                            "4x6": "0.8366800535475235xw:1xh;center,top",
                                                                            "5x1": "1xw:0.15936xh;center,top",
                                                                            "6x4": "1xw:0.5312xh;center,top",
                                                                            "8x1": "1xw:0.0996xh;center,top",
                                                                            "10x2": "1xw:0.15936xh;center,top",
                                                                            "10x3": "1xw:0.23904xh;center,top",
                                                                            "10x5": "1xw:0.3984xh;center,top",
                                                                            "16x9": "1xw:0.4482xh;center,top",
                                                                            "8x10": "1xw:0.996xh;center,top",
                                                                            "9x16": "0.7059487951807228xw:1xh;center,top",
                                                                            "18x11": "1xw:0.48693333333333333xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "style not com zara"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eBeka Gvishiani brings his viral blue Instagram page to life.\u003c/p\u003e",
                                                                "short_title": "Zara Taps Style Not Com for New Capsule Collection",
                                                                "index_title": "Zara Taps Style Not Com for New Capsule Collection",
                                                                "social_dek": "\u003cp\u003eBeka Gvishiani brings his viral blue Instagram page to life.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "shopping"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "ad72c3b2-ce30-4ed6-9237-99176c8e7144",
                                            "type": "4-across",
                                            "heading": "SHOPPING",
                                            "subheading": "",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": false,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "image-stacked"
                                            },
                                            "feeds": [
                                                {
                                                    "id": "e3d40b38-3abe-468a-8810-6d57d81224b7",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.elle.com/fashion/shopping/",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "72e234ae-1a44-481d-9bb8-4c8a1214fe9b",
                                                            "display_id": 63625383,
                                                            "slug": "best-western-accessories-spring-2025",
                                                            "display_type": {
                                                                "title": "Listicle"
                                                            },
                                                            "edited_at": "2025-01-31T20:40:30.037823Z",
                                                            "publish_from": "2025-02-03T14:00:00Z",
                                                            "authors": [{}, {}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "ac572c5d-dd72-470a-a4de-1b48ec393c21",
                                                                    "image_id": "ac572c5d-dd72-470a-a4de-1b48ec393c21",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elm020125fobaccessories-002-679cfc08f13ba.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 4125,
                                                                    "role": 12,
                                                                    "pathname": "/images/elm020125fobaccessories-002-679cfc08f13ba.jpg",
                                                                    "media_type": "image",
                                                                    "width": 3300,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.801xh;0,0",
                                                                            "2x1": "1.00xw:0.401xh;0,0.172xh",
                                                                            "3x1": "1xw:0.26666666666666666xh;center,top",
                                                                            "4x3": "1xw:0.6xh;center,top",
                                                                            "4x6": "0.8333333333333334xw:1xh;center,top",
                                                                            "5x1": "1xw:0.16xh;center,top",
                                                                            "6x4": "1xw:0.5333333333333333xh;center,top",
                                                                            "8x1": "1xw:0.1xh;center,top",
                                                                            "10x2": "1xw:0.16xh;center,top",
                                                                            "10x3": "1xw:0.24xh;center,top",
                                                                            "10x5": "1xw:0.4xh;center,top",
                                                                            "16x9": "1xw:0.45xh;center,top",
                                                                            "8x10": "1xw:1xh;center,top",
                                                                            "9x16": "0.703125xw:1xh;center,top",
                                                                            "18x11": "1xw:0.48888888888888893xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "hermes"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003e Giddy up.\u003c/p\u003e",
                                                                "short_title": "The Best Western Accessories to Shop for Spring",
                                                                "index_title": "This Is the Fashion Girl Way to Take on the Western Trend for Spring",
                                                                "social_dek": "\u003cp\u003e Giddy up.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "shopping"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "42908bd1-c122-4ba2-bc20-648a1f53a755",
                                                            "display_id": 63446279,
                                                            "slug": "spring-2025-cool-girl-accessories",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-03T17:13:59.050983Z",
                                                            "publish_from": "2025-02-04T14:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "0e295532-33e1-44cb-90a9-d6ba37d249d5",
                                                                    "image_id": "0e295532-33e1-44cb-90a9-d6ba37d249d5",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/sophia-geiss-wears-cow-print-cropped-jacket-with-a-zipper-news-photo-1738338245.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 681,
                                                                    "role": 12,
                                                                    "pathname": "/images/sophia-geiss-wears-cow-print-cropped-jacket-with-a-zipper-news-photo-1738338245.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 1024,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.665xw:1.00xh;0.168xw,0",
                                                                            "2x1": "1.00xw:0.754xh;0,0.0699xh",
                                                                            "3x1": "1xw:0.50122xh;center,top",
                                                                            "4x3": "0.88672xw:1xh;center,top",
                                                                            "4x6": "0.44336xw:1xh;center,top",
                                                                            "5x1": "1xw:0.30073xh;center,top",
                                                                            "6x4": "0.99756xw:1xh;center,top",
                                                                            "8x1": "1xw:0.18796xh;center,top",
                                                                            "10x2": "1xw:0.30073xh;center,top",
                                                                            "10x3": "1xw:0.4511xh;center,top",
                                                                            "10x5": "1xw:0.75184xh;center,top",
                                                                            "16x9": "1xw:0.84581xh;center,top",
                                                                            "8x10": "0.53203xw:1xh;center,top",
                                                                            "9x16": "0.37408xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91891xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Day 4 - Street Style - Copenhagen Fashion Week AW25",
                                                                        "seo_meta_description": "day 4 street style copenhagen fashion week aw25"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eJen Brill, Laila Gohar, Anna Weyant and more tell us what they’re eyeing. \u003c/p\u003e",
                                                                "short_title": "Cool Girl-Approved Accessories to Shop This Spring",
                                                                "index_title": "The Accessories Cool Girls Are Adding to Their Wish Lists This Spring ",
                                                                "social_dek": "\u003cp\u003eJen Brill, Laila Gohar, Anna Weyant and more tell us what they’re eyeing. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "shopping"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "cdc9254c-a4ef-4fae-b19e-832841d1e69b",
                                                            "display_id": 63624448,
                                                            "slug": "best-valentines-day-jewelry",
                                                            "display_type": {
                                                                "title": "Listicle"
                                                            },
                                                            "edited_at": "2025-02-03T17:36:54.190946Z",
                                                            "publish_from": "2025-02-03T17:36:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "6aaf6f10-37e7-491a-8206-5af636d527a3",
                                                                    "image_id": "6aaf6f10-37e7-491a-8206-5af636d527a3",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/musexmuse-29199-679befe1c1900.jpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 8256,
                                                                    "role": 12,
                                                                    "pathname": "/images/musexmuse-29199-679befe1c1900.jpeg",
                                                                    "media_type": "image",
                                                                    "width": 5504,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.668xh;0,0.0491xh",
                                                                            "2x1": "1.00xw:0.334xh;0,0.105xh",
                                                                            "3x1": "1xw:0.22222222222222224xh;center,top",
                                                                            "4x3": "1xw:0.5xh;center,top",
                                                                            "4x6": "1xw:1xh;center,top",
                                                                            "5x1": "1xw:0.13333333333333333xh;center,top",
                                                                            "6x4": "1xw:0.4444444444444445xh;center,top",
                                                                            "8x1": "1xw:0.08333333333333333xh;center,top",
                                                                            "10x2": "1xw:0.13333333333333333xh;center,top",
                                                                            "10x3": "1xw:0.2xh;center,top",
                                                                            "10x5": "1xw:0.3333333333333333xh;center,top",
                                                                            "16x9": "1xw:0.375xh;center,top",
                                                                            "8x10": "1xw:0.8333333333333334xh;center,top",
                                                                            "9x16": "0.84375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.40740740740740744xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "beck necklaces"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eIt’s love at first sight.\u003c/p\u003e",
                                                                "short_title": "The 10 Best Valentine’s Day Pieces to Gift in 2025",
                                                                "index_title": "These Valentine’s Day Jewelry Gifts Will Bring a Sparkle to Anyone’s Eye",
                                                                "social_dek": "\u003cp\u003eIt’s love at first sight.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "shopping"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "fbcde393-fdfb-4300-a541-bda8743fd491",
                                                            "display_id": 63547748,
                                                            "slug": "best-balaclavas",
                                                            "display_type": {
                                                                "title": "Listicle"
                                                            },
                                                            "edited_at": "2025-01-29T21:39:48.451828Z",
                                                            "publish_from": "2025-01-29T21:39:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "86e644cb-072c-4476-bd21-5347ca0a8eeb",
                                                                    "image_id": "86e644cb-072c-4476-bd21-5347ca0a8eeb",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/courtesy-the-row-6794123c9cc80.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1800,
                                                                    "role": 12,
                                                                    "pathname": "/images/courtesy-the-row-6794123c9cc80.jpg",
                                                                    "media_type": "image",
                                                                    "width": 1200,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.668xh;0,0.0160xh",
                                                                            "2x1": "1.00xw:0.334xh;0,0.0513xh",
                                                                            "3x1": "1xw:0.2222222222222222xh;center,top",
                                                                            "4x3": "1xw:0.5xh;center,top",
                                                                            "4x6": "1xw:1xh;center,top",
                                                                            "5x1": "1xw:0.13333333333333333xh;center,top",
                                                                            "6x4": "1xw:0.4444444444444444xh;center,top",
                                                                            "8x1": "1xw:0.08333333333333333xh;center,top",
                                                                            "10x2": "1xw:0.13333333333333333xh;center,top",
                                                                            "10x3": "1xw:0.2xh;center,top",
                                                                            "10x5": "1xw:0.3333333333333333xh;center,top",
                                                                            "16x9": "1xw:0.375xh;center,top",
                                                                            "8x10": "1xw:0.8333333333333334xh;center,top",
                                                                            "9x16": "0.84375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.40740740740740744xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "best balaclavas",
                                                                        "seo_meta_description": "best balaclavas"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eA fashion trend that’s actually practical. \u003c/p\u003e",
                                                                "short_title": "Why You Should Buy a Balaclava",
                                                                "index_title": "Balaclavas Are This Winter’s Most Stylish Accessory",
                                                                "social_dek": "\u003cp\u003eA fashion trend that’s actually practical. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "shopping"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "d74ae64c-371d-42f8-a169-e996b1f588cb",
                                            "type": "big-story-feed",
                                            "heading": "BEAUTY",
                                            "subheading": "",
                                            "sub_label": "",
                                            "label": "",
                                            "settings": {
                                                "show_dek": true,
                                                "show_byline": true,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "column-right"
                                            },
                                            "feeds": [
                                                {
                                                    "id": "96055fed-cd39-4729-84ae-0e463ad070f8",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.elle.com/beauty/",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "d8f50c0a-5119-40b6-968c-da6403006394",
                                                            "display_id": 63709383,
                                                            "slug": "cynthia-erivo-beauty-look-critics-choice-awards-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T22:07:12.285331Z",
                                                            "publish_from": "2025-02-08T22:06:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Tasha Nicole Smith"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                {
                                                                    "role": 2,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "role": 3,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "id": "94ddf4bb-8a47-47af-8212-afe6f3683fc2",
                                                                    "image_id": "94ddf4bb-8a47-47af-8212-afe6f3683fc2",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/screenshot-2025-02-08-at-8-43-01-am-67a75f8caeee1.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1386,
                                                                    "role": 12,
                                                                    "pathname": "/images/screenshot-2025-02-08-at-8-43-01-am-67a75f8caeee1.png",
                                                                    "media_type": "image",
                                                                    "width": 920,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.666xh;0,0.167xh",
                                                                            "2x1": "1.00xw:0.333xh;0,0.206xh",
                                                                            "3x1": "1xw:0.22126022126022127xh;center,top",
                                                                            "4x3": "1xw:0.49783549783549785xh;center,top",
                                                                            "4x6": "1xw:0.9956709956709957xh;center,top",
                                                                            "5x1": "1xw:0.13275613275613277xh;center,top",
                                                                            "6x4": "1xw:0.44252044252044254xh;center,top",
                                                                            "8x1": "1xw:0.08297258297258298xh;center,top",
                                                                            "10x2": "1xw:0.13275613275613277xh;center,top",
                                                                            "10x3": "1xw:0.19913419913419914xh;center,top",
                                                                            "10x5": "1xw:0.3318903318903319xh;center,top",
                                                                            "16x9": "1xw:0.37337662337662336xh;center,top",
                                                                            "8x10": "1xw:0.8297258297258298xh;center,top",
                                                                            "9x16": "0.8474184782608696xw:1xh;center,top",
                                                                            "18x11": "1xw:0.4056437389770723xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "cynthia erivo"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eHer makeup artist, Joanna Simkin, tells us how to get the look.\u003c/p\u003e",
                                                                "short_title": "Cynthia Erivo’s Dewy Critics Choice Makeup Look",
                                                                "index_title": "How to Get Cynthia Erivo’s Dewy Critics Choice Makeup Look",
                                                                "social_dek": "\u003cp\u003eHer longtime makeup artist, Joanna Simkin, tells us the difference between sweaty and dewy.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "760f7385-0a44-4e35-b351-8a9c462174e4",
                                                            "display_id": 63634396,
                                                            "slug": "beauty-brands-investing-sports-explained",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-07T17:59:39.469148Z",
                                                            "publish_from": "2025-02-07T14:00:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Katie Berohn"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "23cb4fdc-db59-428e-a0c6-5994ba2b5f2c",
                                                                    "image_id": "23cb4fdc-db59-428e-a0c6-5994ba2b5f2c",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/taylor-swift-celebrates-with-fans-during-the-afc-wild-card-news-photo-1738350474.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1999,
                                                                    "role": 12,
                                                                    "pathname": "/images/taylor-swift-celebrates-with-fans-during-the-afc-wild-card-news-photo-1738350474.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 3000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.66633xw:1xh;center,top",
                                                                            "2x1": "1xw:0.75038xh;center,top",
                                                                            "3x1": "1xw:0.50025xh;center,top",
                                                                            "4x3": "0.88844xw:1xh;center,top",
                                                                            "4x6": "0.44422xw:1xh;center,top",
                                                                            "5x1": "1xw:0.30015xh;center,top",
                                                                            "6x4": "0.9995xw:1xh;center,top",
                                                                            "8x1": "1xw:0.18759xh;center,top",
                                                                            "10x2": "1xw:0.30015xh;center,top",
                                                                            "10x3": "1xw:0.45023xh;center,top",
                                                                            "10x5": "1xw:0.75038xh;center,top",
                                                                            "16x9": "1xw:0.84417xh;center,top",
                                                                            "8x10": "0.53307xw:1xh;center,top",
                                                                            "9x16": "0.37481xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91713xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "AFC Wild Card Playoffs - Miami Dolphins v Kansas City Chiefs",
                                                                        "seo_meta_description": "afc wild card playoffs miami dolphins v kansas city chiefs"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eMove over Bud Light, it’s time for a lip gloss ad.\u003c/p\u003e",
                                                                "short_title": "Finding the Beauty in Sports ",
                                                                "index_title": "Finding the Beauty in Sports ",
                                                                "social_dek": "\u003cp\u003eMove over Bud Light, it’s time for a lip gloss ad.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "455a670c-9028-4415-9f45-276a68a4dd72",
                                                            "display_id": 63621264,
                                                            "slug": "neurae-harmonie-oil-review",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-31T18:51:51.688094Z",
                                                            "publish_from": "2025-02-06T14:00:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Katie Berohn"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "ca79560f-f078-44f2-903e-e17e6cbaa017",
                                                                    "image_id": "ca79560f-f078-44f2-903e-e17e6cbaa017",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/harmonie-oil-visual-679baf25a87e8.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1490,
                                                                    "role": 12,
                                                                    "pathname": "/images/harmonie-oil-visual-679baf25a87e8.jpg",
                                                                    "media_type": "image",
                                                                    "width": 1987,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.752xw:1.00xh;0.125xw,0",
                                                                            "2x1": "1.00xw:0.669xh;0,0.0876xh",
                                                                            "3x1": "1xw:0.4445190156599553xh;center,top",
                                                                            "4x3": "0.9998322429122631xw:1xh;center,top",
                                                                            "4x6": "0.49991612145613157xw:1xh;center,top",
                                                                            "5x1": "1xw:0.26671140939597315xh;center,top",
                                                                            "6x4": "1xw:0.8890380313199105xh;center,top",
                                                                            "8x1": "1xw:0.16669463087248323xh;center,top",
                                                                            "10x2": "1xw:0.26671140939597315xh;center,top",
                                                                            "10x3": "1xw:0.40006711409395973xh;center,top",
                                                                            "10x5": "1xw:0.6667785234899329xh;center,top",
                                                                            "16x9": "1xw:0.7501258389261745xh;center,top",
                                                                            "8x10": "0.5998993457473578xw:1xh;center,top",
                                                                            "9x16": "0.42180422747861096xw:1xh;center,top",
                                                                            "18x11": "1xw:0.814951528709918xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "bottle of facial oil with dropper cap reflecting on glossy surface"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eNeuroactive ingredients make it a mood-booster. \u003c/p\u003e",
                                                                "short_title": "This Face Oil Is Like Zoloft for Your Skin",
                                                                "index_title": "This Face Oil Is Like Zoloft for Your Skin",
                                                                "social_dek": "\u003cp\u003eNeuroactive ingredients make it a mood-booster.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "9fbbaa9d-805e-46eb-80ce-b05c46182c0d",
                                                            "display_id": 63634735,
                                                            "slug": "best-red-lipstick-valentines-day",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-04T20:03:26.519988Z",
                                                            "publish_from": "2025-02-04T20:03:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Katie Berohn"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "7af55b74-4848-4b3e-847e-702de5f00dfc",
                                                                    "image_id": "7af55b74-4848-4b3e-847e-702de5f00dfc",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/9maegxptbbikh3lz1cuixlg-hguggm2z-1-679d3485dd50c.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 512,
                                                                    "role": 12,
                                                                    "pathname": "/images/9maegxptbbikh3lz1cuixlg-hguggm2z-1-679d3485dd50c.jpg",
                                                                    "media_type": "image",
                                                                    "width": 409,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.800xh;0,0.168xh",
                                                                            "2x1": "1.00xw:0.401xh;0,0.492xh",
                                                                            "3x1": "1xw:0.2662760416666667xh;center,top",
                                                                            "4x3": "1xw:0.59912109375xh;center,top",
                                                                            "4x6": "0.8345558272208639xw:1xh;center,top",
                                                                            "5x1": "1xw:0.159765625xh;center,top",
                                                                            "6x4": "1xw:0.5325520833333334xh;center,top",
                                                                            "8x1": "1xw:0.099853515625xh;center,top",
                                                                            "10x2": "1xw:0.159765625xh;center,top",
                                                                            "10x3": "1xw:0.2396484375xh;center,top",
                                                                            "10x5": "1xw:0.3994140625xh;center,top",
                                                                            "16x9": "1xw:0.4493408203125xh;center,top",
                                                                            "8x10": "1xw:0.99853515625xh;center,top",
                                                                            "9x16": "0.7041564792176039xw:1xh;center,top",
                                                                            "18x11": "1xw:0.4881727430555556xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "closeup view of a persons facial features with an obscured area"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eMwah.\u003c/p\u003e",
                                                                "short_title": "The Universal Red Lipsticks ELLE Editors Swear By",
                                                                "index_title": "ELLE Beauty Editors Recommend Their Favorite Red Lipsticks Ahead of Valentine’s Day",
                                                                "social_dek": "\u003cp\u003eMwah.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "ab73baa4-631f-4803-a06c-c36ea9d248d6",
                                                            "display_id": 63592075,
                                                            "slug": "facelifts-women-in-their-40s-explained",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-04T18:44:54.250308Z",
                                                            "publish_from": "2025-02-04T18:44:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Diana Tsui"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "f462c8a1-c892-4c8b-80d3-a92f116d2312",
                                                                    "image_id": "f462c8a1-c892-4c8b-80d3-a92f116d2312",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/gettyimages-1064136816-679923f7bf9b8.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1535,
                                                                    "role": 12,
                                                                    "pathname": "/images/gettyimages-1064136816-679923f7bf9b8.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2300,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.167xw,0",
                                                                            "2x1": "1.00xw:0.751xh;0,0.0791xh",
                                                                            "3x1": "1xw:0.499457111834962xh;center,top",
                                                                            "4x3": "0.8898550724637682xw:1xh;center,top",
                                                                            "4x6": "0.4449275362318841xw:1xh;center,top",
                                                                            "5x1": "1xw:0.2996742671009772xh;center,top",
                                                                            "6x4": "1xw:0.998914223669924xh;center,top",
                                                                            "8x1": "1xw:0.18729641693811075xh;center,top",
                                                                            "10x2": "1xw:0.2996742671009772xh;center,top",
                                                                            "10x3": "1xw:0.4495114006514658xh;center,top",
                                                                            "10x5": "1xw:0.749185667752443xh;center,top",
                                                                            "16x9": "1xw:0.8428338762214984xh;center,top",
                                                                            "8x10": "0.5339130434782609xw:1xh;center,top",
                                                                            "9x16": "0.37540760869565215xw:1xh;center,top",
                                                                            "18x11": "1xw:0.9156713716974304xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "a closeup of a person with their hands near their chin showcasing posture and skin tone"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "9 Women on Getting a Facelift in Their 40s",
                                                                "index_title": "‘Why Wait?’: 9 Women on Getting a Facelift in Their 40s",
                                                                "social_dek": "\u003cp\u003eFrom how they told their friends to recovering in an aftercare facility and experiencing full-face numbness.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "4684e307-46cc-4e30-ab01-d9e54fa237f3",
                                            "type": "big-story-feed",
                                            "heading": "CULTURE",
                                            "subheading": "",
                                            "label": "",
                                            "settings": {
                                                "show_dek": true,
                                                "show_byline": true,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "column-right"
                                            },
                                            "feeds": [
                                                {
                                                    "id": "0cfd9893-42b4-4c75-b49d-7f7622860880",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.elle.com/culture/",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "22b01ebf-f833-4890-9c3b-3509c8973e43",
                                                            "display_id": 63692051,
                                                            "slug": "kendrick-lamar-super-bowl-halftime-show-guest-stars",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-07T19:26:52.151009Z",
                                                            "publish_from": "2025-02-07T15:34:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Erica Gonzales"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                {
                                                                    "role": 2,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "role": 3,
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "id": "72fd5078-befe-4a23-944b-94f63b0827e6",
                                                                    "image_id": "72fd5078-befe-4a23-944b-94f63b0827e6",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/kendrick-lamar-performs-in-the-pepsi-halftime-show-during-news-photo-1738873669.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 683,
                                                                    "role": 12,
                                                                    "pathname": "/images/kendrick-lamar-performs-in-the-pepsi-halftime-show-during-news-photo-1738873669.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 1024,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.216xw,0",
                                                                            "2x1": "1xw:0.74963xh;center,top",
                                                                            "3x1": "1xw:0.49976xh;center,top",
                                                                            "4x3": "0.88932xw:1xh;center,top",
                                                                            "4x6": "0.44466xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29985xh;center,top",
                                                                            "6x4": "1xw:0.99951xh;center,top",
                                                                            "8x1": "1xw:0.18741xh;center,top",
                                                                            "10x2": "1xw:0.29985xh;center,top",
                                                                            "10x3": "1xw:0.44978xh;center,top",
                                                                            "10x5": "1xw:0.74963xh;center,top",
                                                                            "16x9": "1xw:0.84334xh;center,top",
                                                                            "8x10": "0.53359xw:1xh;center,top",
                                                                            "9x16": "0.37518xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91622xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Super Bowl LVI - Los Angeles Rams v Cincinnati Bengals",
                                                                        "seo_meta_description": "super bowl lvi los angeles rams v cincinnati bengals"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe Grammy-winning rapper is set to take the stage in New Orleans this Sunday. Will anyone join him?\u003c/p\u003e",
                                                                "short_title": "Who Is Kendrick Bringing Out at the Super Bowl?",
                                                                "index_title": "Who Will Be Kendrick Lamar’s Super Bowl Guest Stars? Here’s What We Know",
                                                                "social_dek": "\u003cp\u003eThe Grammy-winning rapper is set to take the stage in New Orleans this Sunday. Will anyone join him?\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "music"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "2463c49c-a6c1-466c-8bc2-db18799a9b25",
                                                            "display_id": 63668759,
                                                            "slug": "anitta-true-religion-documentary-shakira-interview",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-06T13:43:38.697167Z",
                                                            "publish_from": "2025-02-06T13:30:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Erica Gonzales"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "436d1b86-cae9-4b47-8928-4cacf159da1e",
                                                                    "image_id": "436d1b86-cae9-4b47-8928-4cacf159da1e",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/261124-hero-talent-look-01-5268-67a3bec77c285.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 3000,
                                                                    "role": 12,
                                                                    "pathname": "/images/261124-hero-talent-look-01-5268-67a3bec77c285.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.672xh;0,0.141xh",
                                                                            "2x1": "1.00xw:0.336xh;0,0.188xh",
                                                                            "3x1": "1xw:0.2222222222222222xh;center,top",
                                                                            "4x3": "1xw:0.5xh;center,top",
                                                                            "4x6": "1xw:1xh;center,top",
                                                                            "5x1": "1xw:0.13333333333333333xh;center,top",
                                                                            "6x4": "1xw:0.4444444444444444xh;center,top",
                                                                            "8x1": "1xw:0.08333333333333333xh;center,top",
                                                                            "10x2": "1xw:0.13333333333333333xh;center,top",
                                                                            "10x3": "1xw:0.2xh;center,top",
                                                                            "10x5": "1xw:0.3333333333333333xh;center,top",
                                                                            "16x9": "1xw:0.375xh;center,top",
                                                                            "8x10": "1xw:0.8333333333333334xh;center,top",
                                                                            "9x16": "0.84375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.4074074074074074xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "anitta stars in true religion campaign"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe Brazilian superstar talks starring in True Religion’s new campaign, her upcoming Netflix documentary, and her new single, “Romeo.”\u003c/p\u003e",
                                                                "short_title": "Anitta Is Ready to Show Her True Self",
                                                                "index_title": "Anitta Is Ready to Show Her True Self—and Have a Girls’ Day with Shakira",
                                                                "social_dek": "\u003cp\u003eThe Brazilian superstar talks starring in True Religion’s new campaign, her upcoming Netflix documentary, and her new single, “Romeo.”\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "music"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "881d9da5-d378-4bdd-b131-afd7c665e728",
                                                            "display_id": 63680347,
                                                            "slug": "apple-cider-vinegar-belle-gibson-true-story-explained",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-06T17:22:58.947883Z",
                                                            "publish_from": "2025-02-06T21:00:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Radhika Menon"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "b4522ee8-df75-4553-8826-500411c27cd1",
                                                                    "image_id": "b4522ee8-df75-4553-8826-500411c27cd1",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/applecidervinegar-netflix-23-11-15-benking-0061-67a4e28a1c53a.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 2000,
                                                                    "role": 12,
                                                                    "pathname": "/images/applecidervinegar-netflix-23-11-15-benking-0061-67a4e28a1c53a.jpg",
                                                                    "media_type": "image",
                                                                    "width": 3000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.0425xw,0",
                                                                            "2x1": "1xw:0.75xh;center,top",
                                                                            "3x1": "1xw:0.5xh;center,top",
                                                                            "4x3": "0.8888888888888888xw:1xh;center,top",
                                                                            "4x6": "0.4444444444444444xw:1xh;center,top",
                                                                            "5x1": "1xw:0.3xh;center,top",
                                                                            "6x4": "1xw:1xh;center,top",
                                                                            "8x1": "1xw:0.1875xh;center,top",
                                                                            "10x2": "1xw:0.3xh;center,top",
                                                                            "10x3": "1xw:0.45xh;center,top",
                                                                            "10x5": "1xw:0.75xh;center,top",
                                                                            "16x9": "1xw:0.84375xh;center,top",
                                                                            "8x10": "0.5333333333333333xw:1xh;center,top",
                                                                            "9x16": "0.375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.9166666666666666xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "apple cider vinegar kaitlyn dever as belle in apple cider vinegar cr courtesy of netflix"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe new series is inspired by a scandal involving real-life wellness influencer Belle Gibson.\u003c/p\u003e",
                                                                "short_title": "The True Story of \u003ci\u003eApple Cider Vinegar\u003c/i\u003e",
                                                                "index_title": "The True Stories (and Blatant Lies) Behind Netflix’s \u003ci\u003eApple Cider Vinegar\u003c/i\u003e",
                                                                "social_dek": "\u003cp\u003eThe new series is inspired by a scandal involving real-life wellness influencer Belle Gibson.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "movies-tv"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "477873ca-a1a9-42c0-a79e-aed4179791cb",
                                                            "display_id": 63654770,
                                                            "slug": "best-movies-sundance-film-festival-2025",
                                                            "display_type": {
                                                                "title": "Listicle"
                                                            },
                                                            "edited_at": "2025-02-04T17:54:08.024605Z",
                                                            "publish_from": "2025-02-04T17:54:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Christine Jean-Baptiste"
                                                                    }
                                                                },
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Erica Gonzales"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "5a9d27af-4df5-456b-bd98-9b874f175658",
                                                                    "image_id": "5a9d27af-4df5-456b-bd98-9b874f175658",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-sundance-movies-lead-67a2541b60dea.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 980,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-sundance-movies-lead-67a2541b60dea.jpg",
                                                                    "media_type": "image",
                                                                    "width": 1960,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.502xw:1.00xh;0.250xw,0",
                                                                            "2x1": "1.00xw:1.00xh;0,0",
                                                                            "3x1": "1xw:0.6666666666666667xh;center,top",
                                                                            "4x3": "0.6666666666666667xw:1xh;center,top",
                                                                            "4x6": "0.33333333333333337xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.8888888888888888xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818182xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "best films at sundance 2025"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eFrom Alison Brie and Dave Franco’s body horror movie to an award-winning Dylan O’Brien performance.\u003c/p\u003e",
                                                                "short_title": "The Best Films of Sundance 2025",
                                                                "index_title": "The Best Sundance Films to Look Out for in 2025",
                                                                "social_dek": "\u003cp\u003eFrom Alison Brie and Dave Franco’s body horror movie to an award-winning Dylan O’Brien performance.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "movies-tv"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "5a136b3c-be30-4765-a352-fe009db51824",
                                                            "display_id": 63445166,
                                                            "slug": "2025-book-publishing-trends-influencer-predictions-explained",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2025-01-27T22:19:17.520370Z",
                                                            "publish_from": "2025-01-27T17:30:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Lauren Puckett-Pope"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                {},
                                                                { "role": 3 },
                                                                {
                                                                    "id": "8ddd98e7-67cc-4672-a482-f54989139406",
                                                                    "image_id": "8ddd98e7-67cc-4672-a482-f54989139406",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/book-influencers-index-67893cd30ec29.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 900,
                                                                    "role": 12,
                                                                    "pathname": "/images/book-influencers-index-67893cd30ec29.png",
                                                                    "media_type": "image",
                                                                    "width": 1800,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.502xw:1.00xh;0.109xw,0",
                                                                            "2x1": "1.00xw:1.00xh;0,0",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.8888888888888888xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818182xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "azanta thakur, cree myles, morgan menzies, naomi darling, seth betzler, chinelo ikem, and brittany pham"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eContent creators have become an essential part of the publishing ecosystem. But as they undergo significant upheaval, they’re reassessing what comes next.  \u003c/p\u003e",
                                                                "short_title": "Can Book Influencers Predict What Comes Next?",
                                                                "index_title": "Can Influencers Predict the Next Big Thing in Books?",
                                                                "social_dek": "\u003cp\u003eContent creators have become an essential part of the publishing ecosystem. But as they undergo significant upheaval, they’re reassessing what comes next.  \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "books"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "1950b8ad-9618-4af9-973c-9f4116026428",
                                            "type": "4-across",
                                            "heading": "HOROSCOPES",
                                            "subheading": "",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": false,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "image-stacked"
                                            },
                                            "feeds": [
                                                {
                                                    "id": "9113f9c8-56c8-47e6-b15e-0439b1a7d4ad",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.elle.com/horoscopes/",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "e22a13f7-e37b-410d-b4b6-b643e6fd52a8",
                                                            "display_id": 63284474,
                                                            "slug": "2025-horoscope-predictions",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2024-12-26T20:57:10.864466Z",
                                                            "publish_from": "2024-12-30T14:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "ade2fc33-815c-4c19-8915-577a3e87a414",
                                                                    "image_id": "ade2fc33-815c-4c19-8915-577a3e87a414",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-astro-2025-predictions-lead-676d7ec06903b.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1100,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-astro-2025-predictions-lead-676d7ec06903b.jpg",
                                                                    "media_type": "image",
                                                                    "width": 1100,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:1.00xh;0,0",
                                                                            "2x1": "1.00xw:0.503xh;0,0.133xh",
                                                                            "3x1": "1xw:0.33333333333333337xh;center,top",
                                                                            "4x3": "1xw:0.75xh;center,top",
                                                                            "4x6": "0.6666666666666667xw:1xh;center,top",
                                                                            "5x1": "1xw:0.2xh;center,top",
                                                                            "6x4": "1xw:0.6666666666666667xh;center,top",
                                                                            "8x1": "1xw:0.125xh;center,top",
                                                                            "10x2": "1xw:0.2xh;center,top",
                                                                            "10x3": "1xw:0.3xh;center,top",
                                                                            "10x5": "1xw:0.5xh;center,top",
                                                                            "16x9": "1xw:0.5625xh;center,top",
                                                                            "8x10": "0.8xw:1xh;center,top",
                                                                            "9x16": "0.5625xw:1xh;center,top",
                                                                            "18x11": "1xw:0.611111111111111xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "a fortune teller machine surrounded by flowers and a decorative vase"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eELLE’s resident astrologers, the AstroTwins, share their predictions for the coming year.\u003c/p\u003e",
                                                                "short_title": "Here’s Your Complete 2025 Horoscope",
                                                                "index_title": "Here’s Your Complete 2025 Horoscope",
                                                                "social_dek": "\u003cp\u003eELLE’s resident astrologers, the AstroTwins, share their predictions for the coming year.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "horoscopes"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "8f3d7e90-dbdf-4881-a9a4-e24239ba3ffd",
                                                            "display_id": 63633939,
                                                            "slug": "manifestation-astrology-explained",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-31T19:48:02.237731Z",
                                                            "publish_from": "2025-01-31T19:47:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "90c2ece0-da19-45b7-81bc-bee8a8c377cf",
                                                                    "image_id": "90c2ece0-da19-45b7-81bc-bee8a8c377cf",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/manifesting-with-astrology-2-679d0de5794ad.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/manifesting-with-astrology-2-679d0de5794ad.png",
                                                                    "media_type": "image",
                                                                    "width": 1000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:1.00xh;0,0",
                                                                            "2x1": "1.00xw:0.502xh;0,0.127xh",
                                                                            "3x1": "1xw:0.3333333333333333xh;center,top",
                                                                            "4x3": "1xw:0.75xh;center,top",
                                                                            "4x6": "0.6666666666666666xw:1xh;center,top",
                                                                            "5x1": "1xw:0.2xh;center,top",
                                                                            "6x4": "1xw:0.6666666666666666xh;center,top",
                                                                            "8x1": "1xw:0.125xh;center,top",
                                                                            "10x2": "1xw:0.2xh;center,top",
                                                                            "10x3": "1xw:0.3xh;center,top",
                                                                            "10x5": "1xw:0.5xh;center,top",
                                                                            "16x9": "1xw:0.5625xh;center,top",
                                                                            "8x10": "0.8xw:1xh;center,top",
                                                                            "9x16": "0.5625xw:1xh;center,top",
                                                                            "18x11": "1xw:0.611111111111111xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "a striped chair, a necklace, a flower, a hand mirror, and a coin on a gray starry background"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Manifest Your Dream Life Using Astrology",
                                                                "index_title": "Manifest Your Dream Life Using Astrology",
                                                                "social_dek": "\u003cp\u003eTurns out, there are key dates each month for attracting what you want.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "horoscopes"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "bf2170c6-3657-4af8-93b1-f7bc313c422d",
                                                            "display_id": 63578132,
                                                            "slug": "lunar-new-year-2025-horoscope-explained",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-28T22:59:29.395474Z",
                                                            "publish_from": "2025-01-28T22:59:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "26f36c05-b600-42d9-9bf4-bb74f3d353da",
                                                                    "image_id": "26f36c05-b600-42d9-9bf4-bb74f3d353da",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/lunar-new-year-horoscope-67995e751c157.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/lunar-new-year-horoscope-67995e751c157.png",
                                                                    "media_type": "image",
                                                                    "width": 1000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:1.00xh;0,0",
                                                                            "2x1": "1.00xw:0.502xh;0,0.184xh",
                                                                            "3x1": "1xw:0.3333333333333333xh;center,top",
                                                                            "4x3": "1xw:0.75xh;center,top",
                                                                            "4x6": "0.6666666666666666xw:1xh;center,top",
                                                                            "5x1": "1xw:0.2xh;center,top",
                                                                            "6x4": "1xw:0.6666666666666666xh;center,top",
                                                                            "8x1": "1xw:0.125xh;center,top",
                                                                            "10x2": "1xw:0.2xh;center,top",
                                                                            "10x3": "1xw:0.3xh;center,top",
                                                                            "10x5": "1xw:0.5xh;center,top",
                                                                            "16x9": "1xw:0.5625xh;center,top",
                                                                            "8x10": "0.8xw:1xh;center,top",
                                                                            "9x16": "0.5625xw:1xh;center,top",
                                                                            "18x11": "1xw:0.611111111111111xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "surreal composition featuring a red poppy a golden snake golden bangles a crescent moon and a butterfly"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Lunar New Year Is Bringing a Different Vibe",
                                                                "index_title": "Lunar New Year Is Bringing a Different Vibe",
                                                                "social_dek": "\u003cp\u003eIt might seem like someone pulled the emergency brake on a speeding train.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "horoscopes"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "85f2b114-54bd-4a0e-8b9e-f2dceae0a6f4",
                                                            "display_id": 63494432,
                                                            "slug": "aquarius-season-2025-horoscope",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-22T16:59:57.822156Z",
                                                            "publish_from": "2025-01-22T16:59:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "8167f1ae-32f1-4e94-9a2c-1c5a7f7b19cf",
                                                                    "image_id": "8167f1ae-32f1-4e94-9a2c-1c5a7f7b19cf",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/aquarius-season-horoscope-67900c8e90a2d.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/aquarius-season-horoscope-67900c8e90a2d.png",
                                                                    "media_type": "image",
                                                                    "width": 1000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:1.00xh;0,0",
                                                                            "2x1": "1.00xw:0.503xh;0,0.163xh",
                                                                            "3x1": "1xw:0.3333333333333333xh;center,top",
                                                                            "4x3": "1xw:0.75xh;center,top",
                                                                            "4x6": "0.6666666666666666xw:1xh;center,top",
                                                                            "5x1": "1xw:0.2xh;center,top",
                                                                            "6x4": "1xw:0.6666666666666666xh;center,top",
                                                                            "8x1": "1xw:0.125xh;center,top",
                                                                            "10x2": "1xw:0.2xh;center,top",
                                                                            "10x3": "1xw:0.3xh;center,top",
                                                                            "10x5": "1xw:0.5xh;center,top",
                                                                            "16x9": "1xw:0.5625xh;center,top",
                                                                            "8x10": "0.8xw:1xh;center,top",
                                                                            "9x16": "0.5625xw:1xh;center,top",
                                                                            "18x11": "1xw:0.611111111111111xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "silver pitcher tarot card labeled the lovers and lilac flowers against a dark backdrop"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Channel Harry Styles This Aquarius Season",
                                                                "index_title": "Channel Your Inner Harry Styles This Aquarius Season",
                                                                "social_dek": "\u003cp\u003eNow’s the time to reveal a hidden dimension of yourself—and leave a few jaws on the ground.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "horoscopes"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "01926976-216e-468a-a020-428a53240839",
                                            "type": "big-story",
                                            "heading": "NEWS \u0026 POLITICS",
                                            "subheading": "",
                                            "label": "",
                                            "settings": {
                                                "show_dek": true,
                                                "show_byline": true,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "image-right"
                                            },
                                            "feeds": [
                                                {
                                                    "id": "c5528930-1eb5-4222-a35a-298a7f18de1e",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.elle.com/culture/career-politics/",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "a1eb36da-8676-45da-b7a1-e5900abd3d04",
                                                            "display_id": 63542366,
                                                            "slug": "norah-odonnell-signs-off-cbs-evening-news",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2025-01-27T21:38:53.379213Z",
                                                            "publish_from": "2025-01-27T13:00:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Mattie Kahn"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "b67ac0a3-2e1a-4ca8-9674-8dd707727fcd",
                                                                    "image_id": "b67ac0a3-2e1a-4ca8-9674-8dd707727fcd",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/norahelectionnight24-jpg-6793b08e8efec.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 5112,
                                                                    "role": 12,
                                                                    "pathname": "/images/norahelectionnight24-jpg-6793b08e8efec.jpg",
                                                                    "media_type": "image",
                                                                    "width": 7665,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.670xw:1.00xh;0.163xw,0",
                                                                            "2x1": "0.950xw:0.712xh;0.0353xw,0.180xh",
                                                                            "3x1": "1xw:0.4998043818466354xh;center,top",
                                                                            "4x3": "0.8892367906066536xw:1xh;center,top",
                                                                            "4x6": "0.4446183953033268xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29988262910798125xh;center,top",
                                                                            "6x4": "1xw:0.9996087636932708xh;center,top",
                                                                            "8x1": "1xw:0.18742664319248825xh;center,top",
                                                                            "10x2": "1xw:0.29988262910798125xh;center,top",
                                                                            "10x3": "1xw:0.4498239436619718xh;center,top",
                                                                            "10x5": "1xw:0.749706572769953xh;center,top",
                                                                            "16x9": "1xw:0.8434198943661971xh;center,top",
                                                                            "8x10": "0.5335420743639921xw:1xh;center,top",
                                                                            "9x16": "0.37514677103718197xw:1xh;center,top",
                                                                            "18x11": "1xw:0.9163080333854983xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "news studio setting during an election broadcast"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eAs the CBS Evening News anchor says goodbye, she reflects on industry upheaval, sexism in media, and what comes next. \u003c/p\u003e",
                                                                "short_title": "Norah O’Donnell Signs Off",
                                                                "index_title": "Norah O’Donnell Says Goodbye to CBS Evening News ",
                                                                "social_dek": "\u003cp\u003eAs the CBS Evening News anchor signs off, she reflects on her time in the famed anchor seat. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "career-politics"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "f276e944-88b5-469d-9ec5-85d0472b9b47",
                                            "type": "4-across",
                                            "heading": "COVER STORIES",
                                            "subheading": "",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": false,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "image-stacked"
                                            },
                                            "text": "",
                                            "feeds": [
                                                {
                                                    "id": "2adeed54-51bc-4234-ad3d-3ca5198bc418",
                                                    "source_type": "curated",
                                                    "heading_url": "",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "a0c5bacf-7afc-4433-9b1a-cf773a7e19a9",
                                                            "display_id": 63324386,
                                                            "slug": "lady-gaga-mayhem-interview-2025",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2025-01-28T00:24:06.863296Z",
                                                            "publish_from": "2025-01-28T11:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                {
                                                                    "id": "d15f289a-26c8-45d0-9c82-234ddb64c749",
                                                                    "image_id": "d15f289a-26c8-45d0-9c82-234ddb64c749",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elm020125fobcover-002-67803a64ceb6d.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 4400,
                                                                    "role": 12,
                                                                    "pathname": "/images/elm020125fobcover-002-67803a64ceb6d.jpg",
                                                                    "media_type": "image",
                                                                    "width": 3300,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.752xh;0,0.0264xh",
                                                                            "2x1": "1.00xw:0.377xh;0,0.314xh",
                                                                            "3x1": "1xw:0.25xh;center,top",
                                                                            "4x3": "1xw:0.5625xh;center,top",
                                                                            "4x6": "0.888888888888889xw:1xh;center,top",
                                                                            "5x1": "1xw:0.15xh;center,top",
                                                                            "6x4": "1xw:0.5xh;center,top",
                                                                            "8x1": "1xw:0.09375xh;center,top",
                                                                            "10x2": "1xw:0.15xh;center,top",
                                                                            "10x3": "1xw:0.225xh;center,top",
                                                                            "10x5": "1xw:0.375xh;center,top",
                                                                            "16x9": "1xw:0.421875xh;center,top",
                                                                            "8x10": "1xw:0.9375xh;center,top",
                                                                            "9x16": "0.75xw:1xh;center,top",
                                                                            "18x11": "1xw:0.45833333333333337xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "fashionable attire with intricate details"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eHer highly anticipated new album channels pure musical chaos. But at home with fiancé Michael Polansky, Mother Monster has found a new sense of calm and normalcy.\u003cem\u003e\u003c/em\u003e\u003c/p\u003e",
                                                                "custom_editors": "['Photographed by Gray Sorrenti. Styled by Pau Avia.']",
                                                                "short_title": "Lady Gaga Makes Some \u003ci\u003eMayhem\u003c/i\u003e",
                                                                "index_title": "Lady Gaga Makes Some \u003ci\u003eMayhem\u003c/i\u003e",
                                                                "social_dek": "\u003cp\u003eHer highly anticipated new release channels pure musical chaos. But at home with fiancé Michael Polansky, Mother Monster has found a new sense of calm and normalcy.\u003cem\u003e\u003c/em\u003e\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "music"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "f1211960-89c8-4991-917d-853d9b81ab28",
                                                            "display_id": 63499189,
                                                            "slug": "pamela-anderson-martha-stewart-interview-2025",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2025-02-04T18:26:01.611450Z",
                                                            "publish_from": "2025-01-24T13:00:00Z",
                                                            "sponsor": {},
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "5429217b-84e1-44fb-ad9e-85edfa6f640e",
                                                                    "image_id": "5429217b-84e1-44fb-ad9e-85edfa6f640e",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/r328-ara-05-250118-elle-adrienneraquel-pa-0256-fnl-67914ba0a38c6.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 4402,
                                                                    "role": 12,
                                                                    "pathname": "/images/r328-ara-05-250118-elle-adrienneraquel-pa-0256-fnl-67914ba0a38c6.jpg",
                                                                    "media_type": "image",
                                                                    "width": 6600,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.0625xw,0",
                                                                            "2x1": "1.00xw:0.753xh;0,0.0791xh",
                                                                            "3x1": "1xw:0.49977283053157656xh;center,top",
                                                                            "4x3": "0.8892929292929292xw:1xh;center,top",
                                                                            "4x6": "0.4446464646464646xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29986369831894594xh;center,top",
                                                                            "6x4": "1xw:0.9995456610631531xh;center,top",
                                                                            "8x1": "1xw:0.18741481144934122xh;center,top",
                                                                            "10x2": "1xw:0.29986369831894594xh;center,top",
                                                                            "10x3": "1xw:0.4497955474784189xh;center,top",
                                                                            "10x5": "1xw:0.7496592457973649xh;center,top",
                                                                            "16x9": "1xw:0.8433666515220355xh;center,top",
                                                                            "8x10": "0.5335757575757576xw:1xh;center,top",
                                                                            "9x16": "0.37517045454545456xw:1xh;center,top",
                                                                            "18x11": "1xw:0.9162501893078904xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "A woman in a vintage outfit poses on a modern chaise lounge"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThis year’s awards darling and enduring sex symbol sits down to discuss her Oscar snub, aging gracefully, and nightmarish men with the original influencer.\u003c/p\u003e",
                                                                "custom_editors": "['Martha Stewart. Introduction by Claire Stern Milch. Photographed by Adrienne Raquel. Styled by Jan-Michael Quammie.']",
                                                                "short_title": "Pamela Anderson and Martha Stewart in Conversation",
                                                                "index_title": "Pamela Anderson Gets Her Flowers—From Martha Stewart",
                                                                "social_dek": "\u003cp\u003eThis year’s awards darling and enduring sex symbol sits down to discuss her Oscar snub, aging gracefully, and nightmarish men with the original influencer.\u003c/p\u003e",
                                                                "editor_attribution": "Interview by",
                                                                "sponsor": {
                                                                    "type": "1"
                                                                }
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "movies-tv"
                                                            }
                                                        },
                                                        {
                                                            "type": "Collection",
                                                            "id": "edde7131-fc72-493d-9c4d-81e460897a89",
                                                            "title": "ELLE’s 2024 Women in Hollywood",
                                                            "slug": "women-in-hollywood-2024",
                                                            "display_id": 62503300,
                                                            "display_type": {
                                                                "title": "Custom"
                                                            },
                                                            "media": [
                                                                {
                                                                    "id": "3f43095b-6f3b-42ed-b70c-5dd22263b79b",
                                                                    "image_id": "3f43095b-6f3b-42ed-b70c-5dd22263b79b",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elm120124wl-emiliaperez-008-wide-sm-6735f7ef3d1e7.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 2542,
                                                                    "role": 12,
                                                                    "pathname": "/images/elm120124wl-emiliaperez-008-wide-sm-6735f7ef3d1e7.jpg",
                                                                    "media_type": "image",
                                                                    "width": 4417,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.576xw:1xh;0.212xw,0xh",
                                                                            "2x1": "1xw:0.869xh;0xw,0xh",
                                                                            "3x1": "1xw:0.579xh;0xw,0xh",
                                                                            "4x3": "0.767xw:1xh;0.116xw,0xh",
                                                                            "4x6": "0.384xw:1xh;0.308xw,0xh",
                                                                            "5x1": "1xw:0.348xh;0xw,0xh",
                                                                            "6x4": "0.863xw:1xh;0.068xw,0xh",
                                                                            "8x1": "1xw:0.217xh;0xw,0xh",
                                                                            "10x2": "1xw:0.348xh;0xw,0xh",
                                                                            "10x3": "1xw:0.521xh;0xw,0xh",
                                                                            "10x5": "1xw:0.869xh;0xw,0xh",
                                                                            "16x9": "1xw:0.977xh;0xw,0xh",
                                                                            "8x10": "0.46xw:1xh;0.27xw,0xh",
                                                                            "9x16": "0.324xw:1xh;0.338xw,0xh",
                                                                            "18x11": "0.942xw:1xh;0.029xw,0xh"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "elle’s women in hollywood 2024 interviews, photoshoots, and more"
                                                                    },
                                                                    "source": {}
                                                                },
                                                                {}
                                                            ]
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "28d4f07f-1bd4-49ad-9f9a-7c41b7b40159",
                                                            "display_id": 62567965,
                                                            "slug": "kylie-jenner-khy-fashion-interview-2024",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2024-10-22T14:42:43.673953Z",
                                                            "publish_from": "2024-10-23T12:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                {
                                                                    "id": "1f83a407-7fae-4c21-9fd3-128a7c89f3d2",
                                                                    "image_id": "1f83a407-7fae-4c21-9fd3-128a7c89f3d2",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-kyliejenner-shot4-0177-v6-qc-r300-magcrop1-670d4b6670bea.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 5965,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-kyliejenner-shot4-0177-v6-qc-r300-magcrop1-670d4b6670bea.jpg",
                                                                    "media_type": "image",
                                                                    "width": 4388,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.737xh;0,0.0300xh",
                                                                            "2x1": "1.00xw:0.369xh;0,0.0924xh",
                                                                            "3x1": "1xw:0.24520815870354848xh;center,top",
                                                                            "4x3": "1xw:0.5517183570829841xh;center,top",
                                                                            "4x6": "0.9062594955940443xw:1xh;center,top",
                                                                            "5x1": "1xw:0.1471248952221291xh;center,top",
                                                                            "6x4": "1xw:0.49041631740709696xh;center,top",
                                                                            "8x1": "1xw:0.09195305951383068xh;center,top",
                                                                            "10x2": "1xw:0.1471248952221291xh;center,top",
                                                                            "10x3": "1xw:0.22068734283319363xh;center,top",
                                                                            "10x5": "1xw:0.3678122380553227xh;center,top",
                                                                            "16x9": "1xw:0.41378876781223806xh;center,top",
                                                                            "8x10": "1xw:0.9195305951383068xh;center,top",
                                                                            "9x16": "0.7646564494074749xw:1xh;center,top",
                                                                            "18x11": "1xw:0.44954829095650556xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "kylie jenner"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe front-row fixture and budding designer expands her growing empire.\u003c/p\u003e",
                                                                "custom_editors": "['Photographed by Carin Backoff. Styled by Alex White.']",
                                                                "short_title": "Welcome to Kylie Jenner’s World",
                                                                "index_title": "It’s Kylie Jenner’s World. We’re Just Living in It.",
                                                                "social_dek": "\u003cp\u003eThe front-row fixture and budding designer expands her growing empire.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "e5cef27b-3213-46dc-a3ed-014628287381",
                                            "type": "4-across",
                                            "heading": "FEATURES",
                                            "subheading": "",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": false,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "image-stacked"
                                            },
                                            "text": "",
                                            "feeds": [
                                                {
                                                    "id": "e2c8c941-dad4-4f15-9815-054094fa3ad5",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.elle.com/long-reads/",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "9a224b91-d3df-4115-aba0-8563daa3ff0a",
                                                            "display_id": 61679901,
                                                            "slug": "chef-chloe-coscarelli-interview-2024",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2024-07-24T12:05:28.918601Z",
                                                            "publish_from": "2024-07-24T12:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                {
                                                                    "id": "95ca5e2b-f8a7-428b-afc6-c3e656568dcb",
                                                                    "image_id": "95ca5e2b-f8a7-428b-afc6-c3e656568dcb",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/chloecoscarelli-563edit-66a060ee6da72.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 6132,
                                                                    "role": 12,
                                                                    "pathname": "/images/chloecoscarelli-563edit-66a060ee6da72.jpg",
                                                                    "media_type": "image",
                                                                    "width": 4088,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.669xh;0,0.219xh",
                                                                            "2x1": "1.00xw:0.334xh;0,0.255xh",
                                                                            "3x1": "1xw:0.22222222222222224xh;center,top",
                                                                            "4x3": "1xw:0.5xh;center,top",
                                                                            "4x6": "1xw:1xh;center,top",
                                                                            "5x1": "1xw:0.13333333333333333xh;center,top",
                                                                            "6x4": "1xw:0.4444444444444445xh;center,top",
                                                                            "8x1": "1xw:0.08333333333333333xh;center,top",
                                                                            "10x2": "1xw:0.13333333333333333xh;center,top",
                                                                            "10x3": "1xw:0.2xh;center,top",
                                                                            "10x5": "1xw:0.3333333333333333xh;center,top",
                                                                            "16x9": "1xw:0.375xh;center,top",
                                                                            "8x10": "1xw:0.8333333333333334xh;center,top",
                                                                            "9x16": "0.84375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.4074074074074074xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "a woman sitting on a step"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe celebrity chef built a vegan restaurant empire on her personal brand—then lost control of it. Now she’s finally back in the kitchen.\u003c/p\u003e",
                                                                "short_title": "Chloe Coscarelli Is Reclaiming Her Name",
                                                                "index_title": "Chloe Coscarelli Is Reclaiming Her Name",
                                                                "social_dek": "\u003cp\u003eThe celebrity chef built a vegan restaurant empire on her personal brand—then lost control of it. Now she’s finally back in the kitchen.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "5e09a577-e714-433c-a9b5-204631356617",
                                                            "display_id": 62470735,
                                                            "slug": "kesha-new-album-interview-2024",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2024-10-22T21:07:51.623539Z",
                                                            "publish_from": "2024-10-03T12:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                {
                                                                    "id": "6ba0cf76-a78d-4725-88a4-73b586e23c68",
                                                                    "image_id": "6ba0cf76-a78d-4725-88a4-73b586e23c68",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elm110124ppkesha-004-66fc364ace973.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 4950,
                                                                    "role": 12,
                                                                    "pathname": "/images/elm110124ppkesha-004-66fc364ace973.jpg",
                                                                    "media_type": "image",
                                                                    "width": 3300,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.668xh;0,0.191xh",
                                                                            "2x1": "1.00xw:0.334xh;0,0.291xh",
                                                                            "3x1": "1xw:0.2222222222222222xh;center,top",
                                                                            "4x3": "1xw:0.5xh;center,top",
                                                                            "4x6": "1xw:1xh;center,top",
                                                                            "5x1": "1xw:0.13333333333333333xh;center,top",
                                                                            "6x4": "1xw:0.4444444444444444xh;center,top",
                                                                            "8x1": "1xw:0.08333333333333333xh;center,top",
                                                                            "10x2": "1xw:0.13333333333333333xh;center,top",
                                                                            "10x3": "1xw:0.2xh;center,top",
                                                                            "10x5": "1xw:0.3333333333333333xh;center,top",
                                                                            "16x9": "1xw:0.375xh;center,top",
                                                                            "8x10": "1xw:0.8333333333333334xh;center,top",
                                                                            "9x16": "0.84375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.40740740740740744xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "kesha"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eWith a new album, her own record label, and a 10-year plan to upend the industry, the liberated pop star says anyone with \u003cem\u003e“deep, dark secrets \u003c/em\u003ebetter run.”\u003cem\u003e\u003c/em\u003e\u003c/p\u003e",
                                                                "custom_editors": "['Photographed by Ruben Chamorro. Styled by Christopher Campbell. ']",
                                                                "short_title": "Kesha Freed Herself. Now She’s Saving Music.",
                                                                "index_title": "Kesha Freed Herself. Now She’s Saving Music.",
                                                                "social_dek": "\u003cp\u003eWith a new album, her own record label, and a 10-year plan to upend the industry, the liberated pop star says anyone with \u003cem\u003e“deep, dark secrets \u003c/em\u003ebetter run.”\u003cem\u003e\u003c/em\u003e\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "0c9f44f7-c821-453b-992e-d957e6b39171",
                                                            "display_id": 62651089,
                                                            "slug": "shiori-ito-sexual-assault-black-box-diaries-interview-2024",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2024-11-12T19:14:51.304677Z",
                                                            "publish_from": "2024-10-22T12:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "b67730ed-36a7-45c1-9507-fd07630d0d2f",
                                                                    "image_id": "b67730ed-36a7-45c1-9507-fd07630d0d2f",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/director-shiori-ito-1-photo-by-oliver-abraham-jpg-67164967a64a7.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1479,
                                                                    "role": 12,
                                                                    "pathname": "/images/director-shiori-ito-1-photo-by-oliver-abraham-jpg-67164967a64a7.jpg",
                                                                    "media_type": "image",
                                                                    "width": 1181,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.800xh;0,0",
                                                                            "2x1": "1.00xw:0.399xh;0,0.282xh",
                                                                            "3x1": "1xw:0.2661708361505522xh;center,top",
                                                                            "4x3": "1xw:0.5988843813387424xh;center,top",
                                                                            "4x6": "0.8348856900931414xw:1xh;center,top",
                                                                            "5x1": "1xw:0.1597025016903313xh;center,top",
                                                                            "6x4": "1xw:0.5323416723011044xh;center,top",
                                                                            "8x1": "1xw:0.09981406355645707xh;center,top",
                                                                            "10x2": "1xw:0.1597025016903313xh;center,top",
                                                                            "10x3": "1xw:0.23955375253549696xh;center,top",
                                                                            "10x5": "1xw:0.3992562542258283xh;center,top",
                                                                            "16x9": "1xw:0.4491632860040568xh;center,top",
                                                                            "8x10": "1xw:0.9981406355645707xh;center,top",
                                                                            "9x16": "0.704434801016088xw:1xh;center,top",
                                                                            "18x11": "1xw:0.4879798662760123xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "shiori ito with one arm bent and the chin resting on the hand"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eWhen Shiori Ito’s case was dropped, she turned the camera on herself to find justice.\u003c/p\u003e",
                                                                "short_title": "This Japanese Filmmaker Investigated Her Assault",
                                                                "index_title": "How a Japanese Filmmaker Investigated Her Own Sexual Assault ",
                                                                "social_dek": "\u003cp\u003eWhen Shiori Ito’s case was dropped, she turned the camera on herself to find justice.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "movies-tv"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "237a7df4-b466-41a2-94a3-44114e7b11c9",
                                                            "display_id": 62246059,
                                                            "slug": "rebecca-minkoff-rhony-interview-2024",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2024-09-23T16:34:43.158772Z",
                                                            "publish_from": "2024-09-23T12:00:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                {
                                                                    "id": "b2b21d0f-3e7b-47d3-93d5-21f53d9e8812",
                                                                    "image_id": "b2b21d0f-3e7b-47d3-93d5-21f53d9e8812",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elm080124-dig-rebecca-minkoff-003-66e9d15ea079d.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 4950,
                                                                    "role": 12,
                                                                    "pathname": "/images/elm080124-dig-rebecca-minkoff-003-66e9d15ea079d.jpg",
                                                                    "media_type": "image",
                                                                    "width": 3300,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.668xh;0,0.0267xh",
                                                                            "2x1": "1.00xw:0.334xh;0,0.0427xh",
                                                                            "3x1": "1xw:0.2222222222222222xh;center,top",
                                                                            "4x3": "1xw:0.5xh;center,top",
                                                                            "4x6": "1xw:1xh;center,top",
                                                                            "5x1": "1xw:0.13333333333333333xh;center,top",
                                                                            "6x4": "1xw:0.4444444444444444xh;center,top",
                                                                            "8x1": "1xw:0.08333333333333333xh;center,top",
                                                                            "10x2": "1xw:0.13333333333333333xh;center,top",
                                                                            "10x3": "1xw:0.2xh;center,top",
                                                                            "10x5": "1xw:0.3333333333333333xh;center,top",
                                                                            "16x9": "1xw:0.375xh;center,top",
                                                                            "8x10": "1xw:0.8333333333333334xh;center,top",
                                                                            "9x16": "0.84375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.40740740740740744xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "rebecca minkoff"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eFor the fashion maven, doing reality TV is just good business—and a chance to bring her eponymous label “back to its glory.”\u003cbr\u003e\u003c/p\u003e",
                                                                "custom_editors": "['Photographed by Ruben Chamorro']",
                                                                "short_title": "Rebecca Minkoff Is Ready for \u003ci\u003eRHONY\u003c/i\u003e",
                                                                "index_title": "Rebecca Minkoff Is Ready for \u003ci\u003eRHONY\u003c/i\u003e. Is \u003ci\u003eRHONY\u003c/i\u003e Ready for Her?",
                                                                "social_dek": "\u003cp\u003eFor the fashion maven, doing reality TV is just good business—and a chance to bring her eponymous label “back to its glory.”\u003cbr\u003e\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "a52d949c-f17a-4619-91bc-cf0afb264736",
                                            "type": "3-column",
                                            "heading": "",
                                            "subheading": "",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": true,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "image-left",
                                                "single_source": false
                                            },
                                            "feeds": [
                                                {
                                                    "id": "b54d6a9d-7d74-425f-aa3c-d78059dcb863",
                                                    "source_type": "collection",
                                                    "heading_url": "https://www.elle.com/style-points/",
                                                    "heading": "Style Points",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "e4bdf1e3-3404-4bd5-82ae-516bea35e9de",
                                                            "display_id": 63677989,
                                                            "slug": "lingua-franca-fall-2025-review-rachelle-hruska-interview",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-06T18:50:28.902449Z",
                                                            "publish_from": "2025-02-06T18:50:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Véronique Hyland"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "8e5f6ce5-0ddc-48f3-8d45-b8121d7c88e5",
                                                                    "image_id": "8e5f6ce5-0ddc-48f3-8d45-b8121d7c88e5",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/stylepoints-lingua-franca-lead-67a3ac6dafd07.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/stylepoints-lingua-franca-lead-67a3ac6dafd07.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.5xw:1xh;center,top",
                                                                            "2x1": "1xw:1xh;center,top",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "lingua franca fall 2025 ",
                                                                        "seo_meta_description": "fashion designs featuring social messages in text on garments"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eLingua Franca designer Rachelle Hruska became famous for her message sweaters. Now, she’s finding a new path to fashion activism. \u003c/p\u003e",
                                                                "short_title": "Can a Fashion Brand Still Resist in 2025?",
                                                                "index_title": "Can a Fashion Brand Still Resist in 2025?",
                                                                "social_dek": "\u003cp\u003eLingua Franca designer Rachelle Hruska became famous for her message sweaters. Now, she’s finding a new path to fashion activism. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "d05fd770-f6c7-4b39-ae67-4317bf66fc81",
                                                            "display_id": 63569321,
                                                            "slug": "lanvin-fall-2025-collection-review",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-27T18:08:47.672698Z",
                                                            "publish_from": "2025-01-27T18:08:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Véronique Hyland"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "da170b54-e03d-4228-adf7-b8369a64299b",
                                                                    "image_id": "da170b54-e03d-4228-adf7-b8369a64299b",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-stylepoints-lanvin-lead-6797b7c8b2476.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-stylepoints-lanvin-lead-6797b7c8b2476.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.5xw:1xh;center,top",
                                                                            "2x1": "1xw:1xh;center,top",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Lanvin fall 2025",
                                                                        "seo_meta_description": "lanvin fall 2025"
                                                                    },
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003ePeter Copping’s new era at Lanvin was an archival homage that never felt bogged down by history. \u003c/p\u003e",
                                                                "short_title": "Freshening Up a 136-Year-Old Fashion House",
                                                                "index_title": "How Do You Make a 136-Year-Old Fashion House Feel Fresh?",
                                                                "social_dek": "\u003cp\u003ePeter Copping’s new era at Lanvin was an archival homage that never felt bogged down by history. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "8228c154-541a-4b2f-9d94-c8a8e82fc55d",
                                                            "display_id": 63424453,
                                                            "slug": "tiktok-fashion-impact-explained",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-16T18:43:01.966074Z",
                                                            "publish_from": "2025-01-16T18:42:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Véronique Hyland"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "7608bdaf-11a8-435d-b2db-b8cd099bdd5f",
                                                                    "image_id": "7608bdaf-11a8-435d-b2db-b8cd099bdd5f",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/stylepoints-tiktok-fashion-lead-678828e706e04.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/stylepoints-tiktok-fashion-lead-678828e706e04.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.5xw:1xh;center,top",
                                                                            "2x1": "1xw:1xh;center,top",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "tiktok and fashion",
                                                                        "seo_meta_description": "fashion runway and street style featuring models in various outfits"
                                                                    },
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eFrom microtrends to megainfluencers—plus what might replace the clock app in the industry’s heart.\u003c/p\u003e",
                                                                "short_title": "What TikTok Gave Fashion and What It Took Away",
                                                                "index_title": "What TikTok Gave Fashion and What It Took Away",
                                                                "social_dek": "\u003cp\u003eFrom microtrends to megainfluencers—plus what might replace the clock app in the industry’s heart. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "279a5706-f1a0-4091-9dd4-1bc371e37e30",
                                                            "display_id": 63226961,
                                                            "slug": "giuseppe-zanotti-30th-anniversary-interview",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2024-12-21T17:04:51.681125Z",
                                                            "publish_from": "2024-12-23T13:00:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Véronique Hyland"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "8da44e34-0956-42b9-bacd-186264bd1333",
                                                                    "image_id": "8da44e34-0956-42b9-bacd-186264bd1333",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/stylepoints-giuseppe-zanotti-lead-67646cbfd1289.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/stylepoints-giuseppe-zanotti-lead-67646cbfd1289.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.5xw:1xh;center,top",
                                                                            "2x1": "1xw:1xh;center,top",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "giuseppe zanotti 30th anniversary",
                                                                        "seo_meta_description": "a collage featuring various fashion moments and celebrities at events"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eGiuseppe Zanotti reflects on 30 years in business, dressing Taylor Swift, and what comes after the luxury sneaker. \u003c/p\u003e",
                                                                "short_title": "How Giuseppe Zanotti Became a Pop Star Staple ",
                                                                "index_title": "He Took Shoes To Dizzying Heights. Now, He's Bringing Them Down to Earth. ",
                                                                "social_dek": "\u003cp\u003eGiuseppe Zanotti reflects on 30 years in business, dressing Taylor Swift, and what comes after the luxury sneaker. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            }
                                                        }
                                                    ]
                                                },
                                                {
                                                    "source_type": "collection",
                                                    "heading_url": "https://www.elle.com/office-hours/",
                                                    "heading": "Office Hours",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "5d25310b-aa45-4d37-837f-5d2dda9ebe87",
                                                            "display_id": 63575069,
                                                            "slug": "erin-andrews-career-interview-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-03T22:40:38.373171Z",
                                                            "publish_from": "2025-02-03T22:03:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Meg Donohue"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "fed8edcb-91f2-46c8-b305-63343d8dcfbc",
                                                                    "image_id": "fed8edcb-91f2-46c8-b305-63343d8dcfbc",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/office-hours-index-679bdd7f97bc6.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/office-hours-index-679bdd7f97bc6.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.502xw:1.00xh;0.498xw,0",
                                                                            "2x1": "1.00xw:1.00xh;0,0",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "text displaying office hours alongside a person wearing an nflthemed polo shirt"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eAhead of the Super Bowl, the Fox Sports broadcaster talks Taylor Swift, succeeding in a male-dominated field, and launching a viral clothing brand. \u003c/p\u003e",
                                                                "short_title": "Don’t Come for Erin Andrews’s Job ",
                                                                "index_title": "Don’t Come for Erin Andrews’s Job ",
                                                                "social_dek": "\u003cp\u003eAhead of the Super Bowl, the Fox Sports broadcaster talks Taylor Swift, succeeding in a male-dominated field, and launching a viral clothing brand.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "shopping"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "285d0edc-7668-4f0d-93b0-930856733ef9",
                                                            "display_id": 63606457,
                                                            "slug": "autumne-west-nordstrom-beauty-director-interview-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-30T19:24:30.404526Z",
                                                            "publish_from": "2025-01-30T19:24:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Kathleen Hou"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                {
                                                                    "id": "c959010e-41a2-4c6e-8f1f-6ba95a64f69f",
                                                                    "image_id": "c959010e-41a2-4c6e-8f1f-6ba95a64f69f",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/office-hours-index-1-679bcd0084cd8.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/office-hours-index-1-679bcd0084cd8.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.497xw:0.990xh;0.450xw,0",
                                                                            "2x1": "0.989xw:0.990xh;0,0",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "the office hours logo on the left and autumne west headshot on the right"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003ePlus, her tried-and-true travel beauty routine.\u003c/p\u003e",
                                                                "short_title": " Nordstrom’s Autumne West on Her Inbox Tricks",
                                                                "index_title": " Nordstrom’s Beauty Director Autumne West Has a Virgo-Approved Inbox Strategy",
                                                                "social_dek": "\u003cp\u003ePlus, her tried-and-true travel beauty routine.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "efe26898-c993-4e1b-8759-ea229114d024",
                                                            "display_id": 63325560,
                                                            "slug": "jenna-perry-hair-career-interview-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-08T15:26:45.876834Z",
                                                            "publish_from": "2025-01-07T22:56:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Carol Lee"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "b0e52961-8da1-4c05-b9fe-9c0a6bb235a0",
                                                                    "image_id": "b0e52961-8da1-4c05-b9fe-9c0a6bb235a0",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/office-hours-index-677d5f0dd3bd0.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/office-hours-index-677d5f0dd3bd0.png",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.502xw:1.00xh;0.498xw,0",
                                                                            "2x1": "1.00xw:1.00xh;0,0",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "office hours jenna perry"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eAnd how she pulled off Kendall Jenner’s blonde transformation in just three days.\u003c/p\u003e",
                                                                "short_title": "How Jenna Perry Became It Girls’ Go-to Colorist",
                                                                "index_title": "How Jenna Perry Became the Go-to Colorist for NYC’s It Girls",
                                                                "social_dek": "\u003cp\u003eAnd how she pulled off Kendall Jenner’s blonde transformation in just three days.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "hair"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "a7d1fcf2-c456-4534-87c8-3cd00f8b9d38",
                                                            "display_id": 63265579,
                                                            "slug": "cindy-crawford-meaningful-beauty-interview-2024",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-02T19:05:41.121355Z",
                                                            "publish_from": "2025-01-02T19:05:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Kathleen Hou"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                {
                                                                    "id": "312dd1db-f182-471b-91b2-4728b85ad8b6",
                                                                    "image_id": "312dd1db-f182-471b-91b2-4728b85ad8b6",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/office-hours-index-6772e1a3d879f.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1000,
                                                                    "role": 12,
                                                                    "pathname": "/images/office-hours-index-6772e1a3d879f.jpg",
                                                                    "media_type": "image",
                                                                    "width": 2000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.495xw:0.994xh;0.505xw,0",
                                                                            "2x1": "1.00xw:1.00xh;0,0",
                                                                            "3x1": "1xw:0.6666666666666666xh;center,top",
                                                                            "4x3": "0.6666666666666666xw:1xh;center,top",
                                                                            "4x6": "0.3333333333333333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.4xh;center,top",
                                                                            "6x4": "0.75xw:1xh;center,top",
                                                                            "8x1": "1xw:0.25xh;center,top",
                                                                            "10x2": "1xw:0.4xh;center,top",
                                                                            "10x3": "1xw:0.6xh;center,top",
                                                                            "10x5": "1xw:1xh;center,top",
                                                                            "16x9": "0.888888888888889xw:1xh;center,top",
                                                                            "8x10": "0.4xw:1xh;center,top",
                                                                            "9x16": "0.28125xw:1xh;center,top",
                                                                            "18x11": "0.8181818181818181xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "office hours cindy crawford"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eHow the supermodel created her brand.\u003c/p\u003e",
                                                                "short_title": "How Cindy Crawford Created Her Brand",
                                                                "index_title": "How Cindy Crawford Created Her Brand",
                                                                "social_dek": "\u003cp\u003e“I have a team of people that I work with. But in the end, I did realize that I’m the world’s No. 1 authority on [me].”\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        }
                                                    ]
                                                },
                                                {
                                                    "source_type": "collection",
                                                    "heading_url": "https://www.elle.com/slow-beauty/",
                                                    "heading": "Slow Beauty",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "ef2836eb-e1c3-4d17-803f-16cfd88c05f6",
                                                            "display_id": 63633059,
                                                            "slug": "tatcha-the-brightening-eye-cream-review",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2025-01-31T21:01:30.299480Z",
                                                            "publish_from": "2025-01-31T21:01:00Z",
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "a0b62733-2b32-4694-82f3-43015b466973",
                                                                    "image_id": "a0b62733-2b32-4694-82f3-43015b466973",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-slow-beauty-tatcha-lead-679d129b5de29.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1688,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-slow-beauty-tatcha-lead-679d129b5de29.png",
                                                                    "media_type": "image",
                                                                    "width": 3000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.566xw:1.00xh;0.218xw,0",
                                                                            "2x1": "1xw:0.8886255924170616xh;center,top",
                                                                            "3x1": "1xw:0.5924170616113744xh;center,top",
                                                                            "4x3": "0.7502222222222221xw:1xh;center,top",
                                                                            "4x6": "0.37511111111111106xw:1xh;center,top",
                                                                            "5x1": "1xw:0.35545023696682465xh;center,top",
                                                                            "6x4": "0.844xw:1xh;center,top",
                                                                            "8x1": "1xw:0.2221563981042654xh;center,top",
                                                                            "10x2": "1xw:0.35545023696682465xh;center,top",
                                                                            "10x3": "1xw:0.533175355450237xh;center,top",
                                                                            "10x5": "1xw:0.8886255924170616xh;center,top",
                                                                            "16x9": "1xw:0.9997037914691943xh;center,top",
                                                                            "8x10": "0.4501333333333334xw:1xh;center,top",
                                                                            "9x16": "0.3165xw:1xh;center,top",
                                                                            "18x11": "0.9207272727272727xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "slow beauty tatcha"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eWhen I heard this product was also supposed to de-puff and firm up the under-eye area, I had to investigate.\u003c/p\u003e",
                                                                "custom_editors": "['Veronica Hilbring']",
                                                                "short_title": "This Eye Cream Actually Brightened My Dark Circles",
                                                                "index_title": "This Eye Cream Helped My Dark Circles and Puffiness in Just 12 Weeks",
                                                                "social_dek": "\u003cp\u003ePlus, it’s actually worth the price.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "fc52e668-063c-4f3f-891b-e485c5c09bf4",
                                                            "display_id": 63163007,
                                                            "slug": "sable-labs-skin-care-review",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2024-12-16T17:11:04.730568Z",
                                                            "publish_from": "2024-12-16T17:10:00Z",
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "b3d65bbc-8ab3-4f3d-be33-cbd013c7f5ca",
                                                                    "image_id": "b3d65bbc-8ab3-4f3d-be33-cbd013c7f5ca",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-slow-beauty-lead3-675b10105ca43.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1688,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-slow-beauty-lead3-675b10105ca43.png",
                                                                    "media_type": "image",
                                                                    "width": 3000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.566xw:1.00xh;0.218xw,0",
                                                                            "2x1": "1xw:0.8886255924170616xh;center,top",
                                                                            "3x1": "1xw:0.5924170616113744xh;center,top",
                                                                            "4x3": "0.7502222222222221xw:1xh;center,top",
                                                                            "4x6": "0.37511111111111106xw:1xh;center,top",
                                                                            "5x1": "1xw:0.35545023696682465xh;center,top",
                                                                            "6x4": "0.844xw:1xh;center,top",
                                                                            "8x1": "1xw:0.2221563981042654xh;center,top",
                                                                            "10x2": "1xw:0.35545023696682465xh;center,top",
                                                                            "10x3": "1xw:0.533175355450237xh;center,top",
                                                                            "10x5": "1xw:0.8886255924170616xh;center,top",
                                                                            "16x9": "1xw:0.9997037914691943xh;center,top",
                                                                            "8x10": "0.4501333333333334xw:1xh;center,top",
                                                                            "9x16": "0.3165xw:1xh;center,top",
                                                                            "18x11": "0.9207272727272727xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "sable labs slow beauty"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eI tested S’able Labs for three months—here are my honest thoughts.\u003c/p\u003e",
                                                                "custom_editors": "['Neimra Coulibaly']",
                                                                "short_title": "I Tried Sabrina Elba’s Skin Care Line for 12 Weeks",
                                                                "index_title": "I Tried Sabrina and Idris Elba’s Skin Care Line, and I’m So Impressed",
                                                                "social_dek": "\u003cp\u003eI tested S’able Labs for three months—here are my honest thoughts.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "fd795ae6-7a70-45c9-8f80-618bd12d0a64",
                                                            "display_id": 62951407,
                                                            "slug": "medik8-total-moisture-daily-facial-cream",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2025-01-22T23:35:31.359464Z",
                                                            "publish_from": "2024-11-24T14:00:00Z",
                                                            "authors": [
                                                                {
                                                                    "profile": {
                                                                        "display_name": "Sharlyn Pierre"
                                                                    }
                                                                }
                                                            ],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "7bc60c4c-163e-4c98-b1f4-31a6d9f0c6df",
                                                                    "image_id": "7bc60c4c-163e-4c98-b1f4-31a6d9f0c6df",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-slow-beauty-lead4-673cc43d7fc96.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1688,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-slow-beauty-lead4-673cc43d7fc96.png",
                                                                    "media_type": "image",
                                                                    "width": 3000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.566xw:1.00xh;0.218xw,0",
                                                                            "2x1": "1xw:0.8886255924170616xh;center,top",
                                                                            "3x1": "1xw:0.5924170616113744xh;center,top",
                                                                            "4x3": "0.7502222222222221xw:1xh;center,top",
                                                                            "4x6": "0.37511111111111106xw:1xh;center,top",
                                                                            "5x1": "1xw:0.35545023696682465xh;center,top",
                                                                            "6x4": "0.844xw:1xh;center,top",
                                                                            "8x1": "1xw:0.2221563981042654xh;center,top",
                                                                            "10x2": "1xw:0.35545023696682465xh;center,top",
                                                                            "10x3": "1xw:0.533175355450237xh;center,top",
                                                                            "10x5": "1xw:0.8886255924170616xh;center,top",
                                                                            "16x9": "1xw:0.9997037914691943xh;center,top",
                                                                            "8x10": "0.4501333333333334xw:1xh;center,top",
                                                                            "9x16": "0.3165xw:1xh;center,top",
                                                                            "18x11": "0.9207272727272727xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "slow beauty medik8"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eI used the Medik8 Total Moisture Daily Facial Cream for three months—here’s the lowdown.\u003c/p\u003e",
                                                                "short_title": "Face Cream Improved My Skin Texture in 12 Weeks",
                                                                "index_title": "I Tried This Peptide Face Cream for 12 Weeks, And I Can’t Stop Recommending It",
                                                                "social_dek": "\u003cp\u003eI used the Medik8 Total Moisture Daily Facial Cream for three months—here’s the lowdown.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "ca974aa7-a9bf-49e3-aabc-6f759df4c06a",
                                                            "display_id": 62709874,
                                                            "slug": "olaplex-bond-maintenance-shampoo-conditioner-review",
                                                            "display_type": {
                                                                "title": "Long Form Article"
                                                            },
                                                            "edited_at": "2025-01-22T23:28:51.016286Z",
                                                            "publish_from": "2024-10-25T16:59:00Z",
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "06300a43-6a35-4e7c-b513-d36662b54976",
                                                                    "image_id": "06300a43-6a35-4e7c-b513-d36662b54976",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/elle-slow-beauty-lead5-671abfb31d551.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1688,
                                                                    "role": 12,
                                                                    "pathname": "/images/elle-slow-beauty-lead5-671abfb31d551.png",
                                                                    "media_type": "image",
                                                                    "width": 3000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.566xw:1.00xh;0.218xw,0",
                                                                            "2x1": "1xw:0.8886255924170616xh;center,top",
                                                                            "3x1": "1xw:0.5924170616113744xh;center,top",
                                                                            "4x3": "0.7502222222222221xw:1xh;center,top",
                                                                            "4x6": "0.37511111111111106xw:1xh;center,top",
                                                                            "5x1": "1xw:0.35545023696682465xh;center,top",
                                                                            "6x4": "0.844xw:1xh;center,top",
                                                                            "8x1": "1xw:0.2221563981042654xh;center,top",
                                                                            "10x2": "1xw:0.35545023696682465xh;center,top",
                                                                            "10x3": "1xw:0.533175355450237xh;center,top",
                                                                            "10x5": "1xw:0.8886255924170616xh;center,top",
                                                                            "16x9": "1xw:0.9997037914691943xh;center,top",
                                                                            "8x10": "0.4501333333333334xw:1xh;center,top",
                                                                            "9x16": "0.3165xw:1xh;center,top",
                                                                            "18x11": "0.9207272727272727xw:1xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "slow beauty olaplex"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe shampoo-and-conditioner duo is a miracle in a bottle. \u003c/p\u003e",
                                                                "custom_editors": "['Jennifer Barthole']",
                                                                "short_title": "This Duo Saved My Damaged Hair in 12 Weeks",
                                                                "index_title": "This Shampoo and Conditioner Saved My Color-Treated Strands in Just 12 Weeks ",
                                                                "social_dek": "\u003cp\u003eOlaplex Bond Maintenance is basically a miracle in a bottle.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "fdcb45f0-815d-443d-9d0b-3ef687bb0f4c",
                                            "type": "big-story",
                                            "heading": "",
                                            "subheading": "",
                                            "label": "ASK ME ANYTHING",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": false,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": "text-under"
                                            },
                                            "feeds": [
                                                {
                                                    "id": "4084779e-2706-47cb-bd84-35046c7c7126",
                                                    "source_type": "curated",
                                                    "heading_url": "https://www.youtube.com/results?search_query=%23SongAssociation",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "00e37264-736a-4f05-8f7e-aacaa463f80c",
                                                            "display_id": 63585550,
                                                            "slug": "lady-gaga-mayhem-ask-me-anything",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-01-28T11:14:18.503896Z",
                                                            "publish_from": "2025-01-28T11:08:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                {
                                                                    "media_type": "image"
                                                                },
                                                                {
                                                                    "adsDisabled": false,
                                                                    "croppedPreviewImage": "https://hips.hearstapps.com/vidthumb/images/elle-askmeanything-kingg-ak-v1-6797e89e5bb97.jpg?crop=1.00xw:1.00xh;0,0",
                                                                    "media_type": "video",
                                                                    "title": "Lady Gaga Reveals ‘Mayhem’ is Sonically Hard-Hitting and Poetic | Ask Me Anything | ELLE",
                                                                    "role": 3,
                                                                    "metadata": {
                                                                        "videoEmbedId": "83cdfa45-37dc-49f7-8b2f-bbb431d42116",
                                                                        "options": {
                                                                            "embedAdsDisabled": "0"
                                                                        }
                                                                    }
                                                                },
                                                                {}
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Lady Gaga Says \u003ci\u003eMayhem\u003c/i\u003e Is Poetic",
                                                                "index_title": "Lady Gaga Says That Her New Album \u003ci\u003eMayhem\u003c/i\u003e Is Sonically Hard-Hitting and Poetic",
                                                                "social_dek": "\u003cp\u003e The multi-Grammy-winning artist gets candid with ELLE.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "music"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        },
                                        {
                                            "id": "0c15a9b4-d07d-45c0-9024-9815472a1d45",
                                            "type": "page-content",
                                            "heading": "THE LATEST",
                                            "subheading": "",
                                            "settings": {
                                                "show_dek": false,
                                                "show_byline": false,
                                                "show_date": false,
                                                "group_next": false,
                                                "layout": ""
                                            },
                                            "feeds": [
                                                {
                                                    "id": "5a3b8c75-19b0-44ea-bc91-be99a16b683f",
                                                    "source_type": "site",
                                                    "heading_url": "",
                                                    "resources": [
                                                        {
                                                            "type": "Content",
                                                            "id": "6ef3db9b-be14-4adc-83c8-4fa6814c7007",
                                                            "display_id": 63667725,
                                                            "slug": "nyfw-fall-winter-2025-after-parties-celebs-photos",
                                                            "display_type": {
                                                                "title": "Listicle"
                                                            },
                                                            "edited_at": "2025-02-09T02:29:12.050335Z",
                                                            "publish_from": "2025-02-09T02:21:00Z",
                                                            "authors": [{}, {}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "7f7e6f7e-a29c-4d70-9b6a-d62d5f6a4627",
                                                                    "image_id": "7f7e6f7e-a29c-4d70-9b6a-d62d5f6a4627",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/paloma-gabbriette-gettyimages-2197495483-67a688c8d21bb.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 4286,
                                                                    "role": 12,
                                                                    "pathname": "/images/paloma-gabbriette-gettyimages-2197495483-67a688c8d21bb.jpg",
                                                                    "media_type": "image",
                                                                    "width": 6000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.716xw:1.00xh;0.111xw,0",
                                                                            "2x1": "1.00xw:0.702xh;0,0.0291xh",
                                                                            "3x1": "1xw:0.4666355576294914xh;center,top",
                                                                            "4x3": "0.9524444444444445xw:1xh;center,top",
                                                                            "4x6": "0.47622222222222227xw:1xh;center,top",
                                                                            "5x1": "1xw:0.2799813345776948xh;center,top",
                                                                            "6x4": "1xw:0.9332711152589828xh;center,top",
                                                                            "8x1": "1xw:0.17498833411105927xh;center,top",
                                                                            "10x2": "1xw:0.2799813345776948xh;center,top",
                                                                            "10x3": "1xw:0.4199720018665422xh;center,top",
                                                                            "10x5": "1xw:0.6999533364442371xh;center,top",
                                                                            "16x9": "1xw:0.7874475034997667xh;center,top",
                                                                            "8x10": "0.5714666666666667xw:1xh;center,top",
                                                                            "9x16": "0.4018125xw:1xh;center,top",
                                                                            "18x11": "1xw:0.8554985223207341xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "Two women posing closely together showcasing their outfits and tattoos"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "The Best Parties at New York Fashion Week",
                                                                "index_title": "The Best Parties at New York Fashion Week Fall 2025",
                                                                "social_dek": "\u003cp\u003eMarc Jacobs kicked off the festivities three days before the official start of shows.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrity-style"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "3000c615-1eeb-410b-8d2f-5effe83be7c9",
                                                            "display_id": 63706888,
                                                            "slug": "margaret-qualley-getting-ready-diary-critics-choice-awards-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T22:34:08.095297Z",
                                                            "publish_from": "2025-02-08T22:30:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "89a47d93-1d80-4c75-9308-c5bb0d892586",
                                                                    "image_id": "89a47d93-1d80-4c75-9308-c5bb0d892586",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/img-2752-67a7c5bf6d982.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 2413,
                                                                    "role": 12,
                                                                    "pathname": "/images/img-2752-67a7c5bf6d982.jpg",
                                                                    "media_type": "image",
                                                                    "width": 3600,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.671xw:1.00xh;0.165xw,0",
                                                                            "2x1": "1.00xw:0.749xh;0,0.108xh",
                                                                            "3x1": "1xw:0.49730625777041026xh;center,top",
                                                                            "4x3": "0.8937037037037038xw:1xh;center,top",
                                                                            "4x6": "0.4468518518518519xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29838375466224615xh;center,top",
                                                                            "6x4": "1xw:0.9946125155408205xh;center,top",
                                                                            "8x1": "1xw:0.18648984666390386xh;center,top",
                                                                            "10x2": "1xw:0.29838375466224615xh;center,top",
                                                                            "10x3": "1xw:0.44757563199336925xh;center,top",
                                                                            "10x5": "1xw:0.7459593866556155xh;center,top",
                                                                            "16x9": "1xw:0.8392043099875673xh;center,top",
                                                                            "8x10": "0.5362222222222223xw:1xh;center,top",
                                                                            "9x16": "0.37703125xw:1xh;center,top",
                                                                            "18x11": "1xw:0.9117281392457521xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "an elegant figure wearing a stylish sheer blouse with an intricate necklace in a garden setting"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eThe actress celebrated her Best Supporting Actress nod in Chanel.\u003c/p\u003e",
                                                                "short_title": "See Margaret Qualley’s Critics Choice Dress",
                                                                "index_title": "Margaret Qualley’s Critics Choice Dress Took 500 Hours To Create",
                                                                "social_dek": "\u003cp\u003eThe actress celebrated her Best Supporting Actress nod in Chanel.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrity-style"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "d8f50c0a-5119-40b6-968c-da6403006394",
                                                            "display_id": 63709383,
                                                            "slug": "cynthia-erivo-beauty-look-critics-choice-awards-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T22:07:12.285331Z",
                                                            "publish_from": "2025-02-08T22:06:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "94ddf4bb-8a47-47af-8212-afe6f3683fc2",
                                                                    "image_id": "94ddf4bb-8a47-47af-8212-afe6f3683fc2",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/screenshot-2025-02-08-at-8-43-01-am-67a75f8caeee1.png",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1386,
                                                                    "role": 12,
                                                                    "pathname": "/images/screenshot-2025-02-08-at-8-43-01-am-67a75f8caeee1.png",
                                                                    "media_type": "image",
                                                                    "width": 920,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.666xh;0,0.167xh",
                                                                            "2x1": "1.00xw:0.333xh;0,0.206xh",
                                                                            "3x1": "1xw:0.22126022126022127xh;center,top",
                                                                            "4x3": "1xw:0.49783549783549785xh;center,top",
                                                                            "4x6": "1xw:0.9956709956709957xh;center,top",
                                                                            "5x1": "1xw:0.13275613275613277xh;center,top",
                                                                            "6x4": "1xw:0.44252044252044254xh;center,top",
                                                                            "8x1": "1xw:0.08297258297258298xh;center,top",
                                                                            "10x2": "1xw:0.13275613275613277xh;center,top",
                                                                            "10x3": "1xw:0.19913419913419914xh;center,top",
                                                                            "10x5": "1xw:0.3318903318903319xh;center,top",
                                                                            "16x9": "1xw:0.37337662337662336xh;center,top",
                                                                            "8x10": "1xw:0.8297258297258298xh;center,top",
                                                                            "9x16": "0.8474184782608696xw:1xh;center,top",
                                                                            "18x11": "1xw:0.4056437389770723xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_description": "cynthia erivo"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "dek": "\u003cp\u003eHer makeup artist, Joanna Simkin, tells us how to get the look.\u003c/p\u003e",
                                                                "short_title": "Cynthia Erivo’s Dewy Critics Choice Makeup Look",
                                                                "index_title": "How to Get Cynthia Erivo’s Dewy Critics Choice Makeup Look",
                                                                "social_dek": "\u003cp\u003eHer longtime makeup artist, Joanna Simkin, tells us the difference between sweaty and dewy.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "beauty"
                                                            },
                                                            "subsection": {
                                                                "slug": "makeup-skin-care"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "ad561628-78d1-423c-9722-0c4e52404cc9",
                                                            "display_id": 63717032,
                                                            "slug": "angelina-jolie-shiloh-jolie-no-interest-in-fame",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T20:41:15.787347Z",
                                                            "publish_from": "2025-02-08T20:41:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "e2331f4e-f711-4ba2-97d9-8b1671b70802",
                                                                    "image_id": "e2331f4e-f711-4ba2-97d9-8b1671b70802",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/angelina-jolie-and-shiloh-jolie-pitt-seen-attending-the-news-photo-1739043845.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 3000,
                                                                    "role": 12,
                                                                    "pathname": "/images/angelina-jolie-and-shiloh-jolie-pitt-seen-attending-the-news-photo-1739043845.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 2400,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.801xh;0,0.0897xh",
                                                                            "2x1": "1.00xw:0.401xh;0,0.113xh",
                                                                            "3x1": "1xw:0.26667xh;center,top",
                                                                            "4x3": "1xw:0.6xh;center,top",
                                                                            "4x6": "0.83333xw:1xh;center,top",
                                                                            "5x1": "1xw:0.16xh;center,top",
                                                                            "6x4": "1xw:0.53333xh;center,top",
                                                                            "8x1": "1xw:0.1xh;center,top",
                                                                            "10x2": "1xw:0.16xh;center,top",
                                                                            "10x3": "1xw:0.24xh;center,top",
                                                                            "10x5": "1xw:0.4xh;center,top",
                                                                            "16x9": "1xw:0.45xh;center,top",
                                                                            "8x10": "1xw:1xh;center,top",
                                                                            "9x16": "0.70313xw:1xh;center,top",
                                                                            "18x11": "1xw:0.48889xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "London Celebrity Sightings - October 27, 2021",
                                                                        "seo_meta_description": "london celebrity sightings october 27, 2021"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Angelina Jolie Explains Her Kids’ Interest in Fame",
                                                                "index_title": "Angelina Jolie Explains Why Shiloh Jolie Has 'No Interest' in Fame",
                                                                "social_dek": "\u003cp\u003eThe star reflected that the attention her kids have received is “not a normal thing.”\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "44ccab39-148b-470c-a594-d41593fd2ef6",
                                                            "display_id": 63716547,
                                                            "slug": "meghan-markle-prince-harry-kiss-2025-invictus-games",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T19:30:06.113352Z",
                                                            "publish_from": "2025-02-08T19:30:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "ad2438be-58c9-49a4-8495-6619cc0db33c",
                                                                    "image_id": "ad2438be-58c9-49a4-8495-6619cc0db33c",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/prince-harry-duke-of-sussex-meghan-duchess-of-sussex-aurora-news-photo-1739040533.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 684,
                                                                    "role": 12,
                                                                    "pathname": "/images/prince-harry-duke-of-sussex-meghan-duchess-of-sussex-aurora-news-photo-1739040533.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 1024,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.574xw:0.859xh;0.213xw,0",
                                                                            "2x1": "0.628xw:0.470xh;0.179xw,0.0432xh",
                                                                            "3x1": "1xw:0.49903xh;center,top",
                                                                            "4x3": "0.89063xw:1xh;center,top",
                                                                            "4x6": "0.44531xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29942xh;center,top",
                                                                            "6x4": "1xw:0.99805xh;center,top",
                                                                            "8x1": "1xw:0.18713xh;center,top",
                                                                            "10x2": "1xw:0.29942xh;center,top",
                                                                            "10x3": "1xw:0.44912xh;center,top",
                                                                            "10x5": "1xw:0.74854xh;center,top",
                                                                            "16x9": "1xw:0.84211xh;center,top",
                                                                            "8x10": "0.53438xw:1xh;center,top",
                                                                            "9x16": "0.37573xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91488xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Prince Harry and Meghan visit Colombia",
                                                                        "seo_meta_description": "prince harry and meghan visit colombia"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Meghan Markle and Prince Harry Share Warm Kiss ",
                                                                "index_title": "Meghan Markle and Prince Harry Share Warm Kiss on Stage at 2025 Invictus Games",
                                                                "social_dek": "\u003cp\u003eThe Duchess also revealed details of her home life with Harry, Archie, and Lilibet.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "6b9b2258-c57e-46ce-b213-e9dee973e49a",
                                                            "display_id": 63716061,
                                                            "slug": "blake-lively-not-with-taylor-swift-2025-super-bowl",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T21:21:18.223918Z",
                                                            "publish_from": "2025-02-08T18:07:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "bf1eec9d-693f-43d6-ab63-6a57b7bbf958",
                                                                    "image_id": "bf1eec9d-693f-43d6-ab63-6a57b7bbf958",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/rapper-ice-spice-singer-taylor-swift-and-actress-blake-news-photo-1739032346.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 2000,
                                                                    "role": 12,
                                                                    "pathname": "/images/rapper-ice-spice-singer-taylor-swift-and-actress-blake-news-photo-1739032346.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 3000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.484xw:0.726xh;0.455xw,0.0192xh",
                                                                            "2x1": "0.585xw:0.440xh;0.415xw,0.0264xh",
                                                                            "3x1": "1xw:0.5xh;center,top",
                                                                            "4x3": "0.88889xw:1xh;center,top",
                                                                            "4x6": "0.44444xw:1xh;center,top",
                                                                            "5x1": "1xw:0.3xh;center,top",
                                                                            "6x4": "1xw:1xh;center,top",
                                                                            "8x1": "1xw:0.1875xh;center,top",
                                                                            "10x2": "1xw:0.3xh;center,top",
                                                                            "10x3": "1xw:0.45xh;center,top",
                                                                            "10x5": "1xw:0.75xh;center,top",
                                                                            "16x9": "1xw:0.84375xh;center,top",
                                                                            "8x10": "0.53333xw:1xh;center,top",
                                                                            "9x16": "0.375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91667xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Super Bowl LVIII - San Francisco 49ers v Kansas City Chiefs",
                                                                        "seo_meta_description": "super bowl lviii san francisco 49ers v kansas city chiefs"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Why Blake Lively Won't Be at 2025 Super Bowl ",
                                                                "index_title": "Why Blake Lively Won't Be Joining Taylor Swift at the 2025 Super Bowl ",
                                                                "social_dek": "\u003cp\u003eLively was by Swift’s side last year for Travis Kelce’s big win.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "09bb4e0c-299e-401e-af91-09b6a36a06da",
                                                            "display_id": 63715740,
                                                            "slug": "megan-fox-healing-after-machine-gun-kelly-split",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T16:26:52.836490Z",
                                                            "publish_from": "2025-02-08T16:26:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "474e632f-6f12-462f-8dde-ba1553a4d21c",
                                                                    "image_id": "474e632f-6f12-462f-8dde-ba1553a4d21c",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/megan-fox-at-the-nylon-house-event-held-during-the-news-photo-1739030490.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 1024,
                                                                    "role": 12,
                                                                    "pathname": "/images/megan-fox-at-the-nylon-house-event-held-during-the-news-photo-1739030490.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 731,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "1.00xw:0.715xh;0,0.0435xh",
                                                                            "2x1": "1.00xw:0.358xh;0,0.0767xh",
                                                                            "3x1": "1xw:0.23796xh;center,top",
                                                                            "4x3": "1xw:0.5354xh;center,top",
                                                                            "4x6": "0.93388xw:1xh;center,top",
                                                                            "5x1": "1xw:0.14277xh;center,top",
                                                                            "6x4": "1xw:0.47591xh;center,top",
                                                                            "8x1": "1xw:0.08923xh;center,top",
                                                                            "10x2": "1xw:0.14277xh;center,top",
                                                                            "10x3": "1xw:0.21416xh;center,top",
                                                                            "10x5": "1xw:0.35693xh;center,top",
                                                                            "16x9": "1xw:0.40155xh;center,top",
                                                                            "8x10": "1xw:0.89233xh;center,top",
                                                                            "9x16": "0.78796xw:1xh;center,top",
                                                                            "18x11": "1xw:0.43625xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Nylon House",
                                                                        "seo_meta_description": "nylon house"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Megan Fox Is Focused on 'Healing' After MGK Split",
                                                                "index_title": "Megan Fox Is Focused on 'Healing' After Machine Gun Kelly Split",
                                                                "social_dek": "\u003cp\u003eShe's not interested in “revisiting the past.” \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "6b6ebb34-0cc5-4800-94b0-59b9e7fd9dee",
                                                            "display_id": 63715602,
                                                            "slug": "adam-brody-kisses-leighton-meester-critics-choice-awards",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T15:47:20.596551Z",
                                                            "publish_from": "2025-02-08T15:47:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "ffda08a6-af79-483a-8162-da2f223fa2fc",
                                                                    "image_id": "ffda08a6-af79-483a-8162-da2f223fa2fc",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/singer-and-actress-leighton-meester-and-us-actor-adam-brody-news-photo-1739027288.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 683,
                                                                    "role": 12,
                                                                    "pathname": "/images/singer-and-actress-leighton-meester-and-us-actor-adam-brody-news-photo-1739027288.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 1024,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.183xw,0",
                                                                            "2x1": "0.883xw:0.662xh;0.0417xw,0.0384xh",
                                                                            "3x1": "1xw:0.49976xh;center,top",
                                                                            "4x3": "0.88932xw:1xh;center,top",
                                                                            "4x6": "0.44466xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29985xh;center,top",
                                                                            "6x4": "1xw:0.99951xh;center,top",
                                                                            "8x1": "1xw:0.18741xh;center,top",
                                                                            "10x2": "1xw:0.29985xh;center,top",
                                                                            "10x3": "1xw:0.44978xh;center,top",
                                                                            "10x5": "1xw:0.74963xh;center,top",
                                                                            "16x9": "1xw:0.84334xh;center,top",
                                                                            "8x10": "0.53359xw:1xh;center,top",
                                                                            "9x16": "0.37518xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91622xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "US-ENTERTAINMENT-FILM-AWARD-CRITICSCHOICE",
                                                                        "seo_meta_description": "us entertainment film award criticschoice"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Adam Brody Kissed ‘Darling’ Wife Leighton Meester",
                                                                "index_title": "Adam Brody Kissed His ‘Darling’ Wife Leighton Meester at Critics Choice Awards",
                                                                "social_dek": "\u003cp\u003eThey are so cute.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "fbf356c3-336d-43c4-a9d7-386e012a016b",
                                                            "display_id": 63715504,
                                                            "slug": "taylor-swift-little-black-dress-new-orleans-date-travis-kelce",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T18:41:53.247055Z",
                                                            "publish_from": "2025-02-08T15:02:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "6bdef8bb-7003-4303-ba42-866a932f881f",
                                                                    "image_id": "6bdef8bb-7003-4303-ba42-866a932f881f",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/tight-end-travis-kelce-of-the-kansas-city-chiefs-celebrates-news-photo-1739024046.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 683,
                                                                    "role": 12,
                                                                    "pathname": "/images/tight-end-travis-kelce-of-the-kansas-city-chiefs-celebrates-news-photo-1739024046.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 1024,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.208xw,0",
                                                                            "2x1": "0.811xw:0.607xh;0.135xw,0.0336xh",
                                                                            "3x1": "1xw:0.49976xh;center,top",
                                                                            "4x3": "0.88932xw:1xh;center,top",
                                                                            "4x6": "0.44466xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29985xh;center,top",
                                                                            "6x4": "1xw:0.99951xh;center,top",
                                                                            "8x1": "1xw:0.18741xh;center,top",
                                                                            "10x2": "1xw:0.29985xh;center,top",
                                                                            "10x3": "1xw:0.44978xh;center,top",
                                                                            "10x5": "1xw:0.74963xh;center,top",
                                                                            "16x9": "1xw:0.84334xh;center,top",
                                                                            "8x10": "0.53359xw:1xh;center,top",
                                                                            "9x16": "0.37518xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91622xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "AFC Championship Game: Buffalo Bills v Kansas City Chiefs",
                                                                        "seo_meta_description": "afc championship game buffalo bills v kansas city chiefs"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Taylor Swift Stepped Out in a Little Black Dress",
                                                                "index_title": "Taylor Swift Stepped Out in a Little Black Dress for New Orleans Date With Travis Kelce",
                                                                "social_dek": "\u003cp\u003eHe was so sweet with her.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "5a46bf0f-380b-4adc-881d-c48fd83479cf",
                                                            "display_id": 63401317,
                                                            "slug": "mikey-madison-red-carpet-photos-critics-choice-awards-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T01:38:34.360578Z",
                                                            "publish_from": "2025-02-08T01:38:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "c35fe27f-66bb-4888-8a97-762a9ee7a3f0",
                                                                    "image_id": "c35fe27f-66bb-4888-8a97-762a9ee7a3f0",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/mikey-madison-gettyimages-2197640012-67a6b55a5e6b6.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 4000,
                                                                    "role": 12,
                                                                    "pathname": "/images/mikey-madison-gettyimages-2197640012-67a6b55a5e6b6.jpg",
                                                                    "media_type": "image",
                                                                    "width": 6000,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.131xw,0",
                                                                            "2x1": "1.00xw:0.753xh;0,0.110xh",
                                                                            "3x1": "1xw:0.5xh;center,top",
                                                                            "4x3": "0.8888888888888888xw:1xh;center,top",
                                                                            "4x6": "0.4444444444444444xw:1xh;center,top",
                                                                            "5x1": "1xw:0.3xh;center,top",
                                                                            "6x4": "1xw:1xh;center,top",
                                                                            "8x1": "1xw:0.1875xh;center,top",
                                                                            "10x2": "1xw:0.3xh;center,top",
                                                                            "10x3": "1xw:0.45xh;center,top",
                                                                            "10x5": "1xw:0.75xh;center,top",
                                                                            "16x9": "1xw:0.84375xh;center,top",
                                                                            "8x10": "0.5333333333333333xw:1xh;center,top",
                                                                            "9x16": "0.375xw:1xh;center,top",
                                                                            "18x11": "1xw:0.9166666666666666xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Mikey Madison",
                                                                        "seo_meta_description": "mikey madison"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Mikey Madison Is Radiant at Critics Choice Awards",
                                                                "index_title": "Mikey Madison Epitomizes Glamour in a Vintage Armani Gown at the Critics Choice Awards",
                                                                "social_dek": "\u003cp\u003eThe \u003cem\u003eAnora \u003c/em\u003eactress went into the archive for her debut at the L.A. ceremony.\u003cem\u003e\u003c/em\u003e\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "768cf955-583f-4dc2-9f2f-5f146fae2829",
                                                            "display_id": 63706765,
                                                            "slug": "best-dressed-red-carpet-photos-critics-choice-awards-2025",
                                                            "display_type": {
                                                                "title": "Listicle"
                                                            },
                                                            "edited_at": "2025-02-08T02:00:24.591074Z",
                                                            "publish_from": "2025-02-08T01:09:00Z",
                                                            "authors": [{}, {}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "f886bfcc-b887-4f27-88a0-7aadc3b0b858",
                                                                    "image_id": "f886bfcc-b887-4f27-88a0-7aadc3b0b858",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/nicole-kidman-attends-the-30th-annual-critics-choice-awards-news-photo-1738974737.pjpeg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 683,
                                                                    "role": 12,
                                                                    "pathname": "/images/nicole-kidman-attends-the-30th-annual-critics-choice-awards-news-photo-1738974737.pjpeg",
                                                                    "media_type": "image",
                                                                    "width": 1024,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.668xw:1.00xh;0.197xw,0",
                                                                            "2x1": "1.00xw:0.753xh;0,0.0336xh",
                                                                            "3x1": "1xw:0.49976xh;center,top",
                                                                            "4x3": "0.88932xw:1xh;center,top",
                                                                            "4x6": "0.44466xw:1xh;center,top",
                                                                            "5x1": "1xw:0.29985xh;center,top",
                                                                            "6x4": "1xw:0.99951xh;center,top",
                                                                            "8x1": "1xw:0.18741xh;center,top",
                                                                            "10x2": "1xw:0.29985xh;center,top",
                                                                            "10x3": "1xw:0.44978xh;center,top",
                                                                            "10x5": "1xw:0.74963xh;center,top",
                                                                            "16x9": "1xw:0.84334xh;center,top",
                                                                            "8x10": "0.53359xw:1xh;center,top",
                                                                            "9x16": "0.37518xw:1xh;center,top",
                                                                            "18x11": "1xw:0.91622xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "30th Annual Critics Choice Awards - Arrivals",
                                                                        "seo_meta_description": "30th annual critics choice awards arrivals"
                                                                    },
                                                                    "photographer": {},
                                                                    "source": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "The Best-Dressed Stars at Critics Choice Awards",
                                                                "index_title": "The 10 Best-Dressed Celebrities at the 2025 Critics Choice Awards",
                                                                "social_dek": "\u003cp\u003eThese stars knew how to make a lasting impression on the red carpet. \u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "fashion"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrity-style"
                                                            }
                                                        },
                                                        {
                                                            "type": "Content",
                                                            "id": "f36e884e-16b0-4eb0-8a97-f0ef7afe596c",
                                                            "display_id": 63680874,
                                                            "slug": "why-zendaya-skipped-critics-choice-awards-2025",
                                                            "display_type": {
                                                                "title": "Standard Article"
                                                            },
                                                            "edited_at": "2025-02-08T00:56:22.364451Z",
                                                            "publish_from": "2025-02-08T00:56:00Z",
                                                            "authors": [{}],
                                                            "media": [
                                                                { "role": 2 },
                                                                { "role": 3 },
                                                                {
                                                                    "id": "e7b34700-827b-4a2b-a43d-0b9978374dab",
                                                                    "image_id": "e7b34700-827b-4a2b-a43d-0b9978374dab",
                                                                    "hips_url": "https://hips.hearstapps.com/hmg-prod/images/gettyimages-2163685592-1-67a6aa929fac7.jpg",
                                                                    "hips_prefix": "hmg-prod",
                                                                    "height": 6637,
                                                                    "role": 12,
                                                                    "pathname": "/images/gettyimages-2163685592-1-67a6aa929fac7.jpg",
                                                                    "media_type": "image",
                                                                    "width": 4981,
                                                                    "metadata": {
                                                                        "crops": {
                                                                            "1x1": "0.675xw:0.507xh;0.168xw,0.111xh",
                                                                            "2x1": "0.857xw:0.322xh;0.0901xw,0.123xh",
                                                                            "3x1": "1xw:0.25016322635728994xh;center,top",
                                                                            "4x3": "1xw:0.5628672593039024xh;center,top",
                                                                            "4x6": "0.8883089071806197xw:1xh;center,top",
                                                                            "5x1": "1xw:0.15009793581437397xh;center,top",
                                                                            "6x4": "1xw:0.5003264527145799xh;center,top",
                                                                            "8x1": "1xw:0.09381120988398373xh;center,top",
                                                                            "10x2": "1xw:0.15009793581437397xh;center,top",
                                                                            "10x3": "1xw:0.22514690372156093xh;center,top",
                                                                            "10x5": "1xw:0.3752448395359349xh;center,top",
                                                                            "16x9": "1xw:0.42215044447792677xh;center,top",
                                                                            "8x10": "1xw:0.9381120988398373xh;center,top",
                                                                            "9x16": "0.7495106404336479xw:1xh;center,top",
                                                                            "18x11": "1xw:0.45863258165503157xh;center,top"
                                                                        }
                                                                    },
                                                                    "image_metadata": {
                                                                        "seo_meta_title": "Zendaya",
                                                                        "seo_meta_description": "zendaya"
                                                                    },
                                                                    "photographer": {}
                                                                }
                                                            ],
                                                            "metadata": {
                                                                "short_title": "Why Zendaya Skipped the 2025 Critics Choice Awards",
                                                                "index_title": "Why Zendaya Skipped the 2025 Critics Choice Awards",
                                                                "social_dek": "\u003cp\u003eTwo of her films are nominated.\u003c/p\u003e",
                                                                "editor_attribution": "By",
                                                                "sponsor": {}
                                                            },
                                                            "section": {
                                                                "slug": "culture"
                                                            },
                                                            "subsection": {
                                                                "slug": "celebrities"
                                                            }
                                                        }
                                                    ]
                                                }
                                            ],
                                            "summary": [],
                                            "textDom": {
                                                "children": [],
                                                "type": "root"
                                            }
                                        }
                                    ],
                                    "metadata": {
                                        "seo_meta_title": "Fashion Magazine - Beauty Tips, Fashion Trends, \u0026 Celebrity News - ELLE",
                                        "seo_meta_description": "Watch runway shows from the hottest fashion designers, scope out the best-dressed celebrities on the red carpet, discover the latest and greatest beauty products to maintain a healthy glow, and get a sneak peek at our celebrity cover shoots.",
                                        "marquee_type": "cover_story_marquee"
                                    },
                                    "theme": {
                                        "borderWidths": {
                                            "border-lg": "0.625rem",
                                            "border-m": "0.3125rem",
                                            "border-ml": "0.375rem",
                                            "border-mlg": "0.5rem",
                                            "border-none": "0",
                                            "border-s": "0.19rem",
                                            "border-xs": "0.125rem",
                                            "border-xxs": "0.0625rem",
                                            "medium": "0.19rem",
                                            "thick": "0.3125rem",
                                            "thin": "0.0625rem"
                                        },
                                        "borders": {
                                            "body-cta-btn-link-focus": "black",
                                            "border-avatar": "{*borderWidths.border-xxs} solid {*colors.black}",
                                            "border-button-outline": "{*borderWidths.border-xxs} solid {*colors.black}",
                                            "border-button-outline-hover": "{*borderWidths.border-xxs} solid {*colors.greyDark}",
                                            "border-discount": "{*borderWidths.border-xxs} solid {*colors.globalColorDiscount}",
                                            "border-dropdown": "{*borderWidths.border-xxs} solid {*colors.greyLight}",
                                            "border-error": "{*borderWidths.border-xxs} solid {*colors.globalColorError}",
                                            "border-form-checkbox-disabled": "{*borderWidths.border-xxs}  solid {*colors.grey}",
                                            "border-form-checkbox-error": "{*borderWidths.border-xxs}  solid {*colors.globalColorError}",
                                            "border-form-checkbox-resting": "{*borderWidths.border-xxs}  solid {*colors.black}",
                                            "border-form-input-disabled": "{*borderWidths.border-xxs}  solid {*colors.grey}",
                                            "border-form-input-error": "{*borderWidths.border-xxs}  solid {*colors.globalColorError}",
                                            "border-form-input-resting": "{*borderWidths.border-xxs}  solid {*colors.greyDark}",
                                            "border-form-input-selected": "{*borderWidths.border-xxs}  solid {*colors.black}",
                                            "border-form-radio-disabled": "{*borderWidths.border-xxs} solid {*colors.grey}",
                                            "border-form-radio-error": "{*borderWidths.border-xxs} solid {*colors.globalColorError}",
                                            "border-form-radio-resting": "{*borderWidths.border-xxs} solid {*colors.black}",
                                            "border-form-select-disabled": "{*borderWidths.border-xxs}  solid {*colors.grey}",
                                            "border-form-select-error": "{*borderWidths.border-xxs} solid {*colors.globalColorError}",
                                            "border-form-select-resting": "{*borderWidths.border-xxs}  solid {*colors.greyDark}",
                                            "border-form-select-selected": "{*borderWidths.border-xxs} solid {*colors.black}",
                                            "border-form-textarea-disabled": "{*borderWidths.border-xxs} solid {*colors.grey}",
                                            "border-form-textarea-error": "{*borderWidths.border-xxs} solid {*colors.globalColorError}",
                                            "border-form-textarea-resting": "{*borderWidths.border-xxs} solid {*colors.greyDark}",
                                            "border-form-textarea-selected": "{*borderWidths.border-xxs} solid {*colors.black}",
                                            "border-informative": "{*borderWidths.border-xxs} solid {*colors.greyLight}",
                                            "border-large-greyXlight": "0.6rem solid {*colors.greyXlight}",
                                            "border-large-transparent": "0.6rem solid transparent",
                                            "border-lg-black": "{*borderWidths.border-lg} solid black",
                                            "border-lg-greyXlight": "{*borderWidths.border-lg} solid {*colors.greyXlight}",
                                            "border-lg-transparent": "{*borderWidths.border-lg} solid transparent",
                                            "border-lg-white": "{*borderWidths.border-lg} solid white",
                                            "border-link-body-hover": "border-xxs-greyXXdark",
                                            "border-m-black": "{*borderWidths.border-m} solid black",
                                            "border-m-white": "{*borderWidths.border-m} solid white",
                                            "border-med-black": "1.1875rem solid {*colors.black}",
                                            "border-medium-black": "medium solid black",
                                            "border-medium-grey": "medium solid {*colors.grey}",
                                            "border-medium-greyLight": "{*borderWidths.border-m} solid {*colors.greyLight}",
                                            "border-medium-white": "medium solid white",
                                            "border-ml-black": "{*borderWidths.border-ml} solid black",
                                            "border-mlg-black": "{*borderWidths.border-mlg} solid black",
                                            "border-mlg-grey": "{*borderWidths.border-mlg} solid {*colors.grey}",
                                            "border-none-transparent": "{*borderWidths.border-none} solid transparent",
                                            "border-rating": "{*borderWidths.border-xxs} solid {*colors.globalColorRating}",
                                            "border-s-black": "{*borderWidths.border-s} solid black",
                                            "border-s-white": "{*borderWidths.border-s} solid white",
                                            "border-thick-black": "1.5rem solid {*colors.black}",
                                            "border-thin-black": "thin solid black",
                                            "border-thin-dashed-black": "thin dashed black",
                                            "border-thin-grey": "thin solid {*colors.grey}",
                                            "border-thin-greyDark": "thin solid {*colors.greyDark}",
                                            "border-thin-greyLight": "thin solid {*colors.greyLight}",
                                            "border-thin-greyXXXdark": "thin solid {*colors.greyXXXdark}",
                                            "border-thin-greyXXdark": "thin solid {*colors.greyXXdark}",
                                            "border-thin-greyXdark": "thin solid {*colors.greyXdark}",
                                            "border-thin-greyXlight": "thin solid {*colors.greyXlight}",
                                            "border-thin-transparent": "thin solid transparent",
                                            "border-thin-white": "thin solid white",
                                            "border-xs-black": "{*borderWidths.border-xs} solid black",
                                            "border-xs-grey": "{*borderWidths.border-xs} solid {*colors.grey}",
                                            "border-xs-greyXlight": "{*borderWidths.border-xs} solid {*colors.greyXlight}",
                                            "border-xs-transparent": "{*borderWidths.border-xs} solid transparent",
                                            "border-xs-white": "{*borderWidths.border-xs} solid white",
                                            "border-xxs-black": "{*borderWidths.border-xxs} solid black",
                                            "border-xxs-brand-quaternary": "{*borderWidths.border-xxs} solid {*colors.brandColorQuaternary}",
                                            "border-xxs-dotted-black": "{*borderWidths.border-xxs} dotted black",
                                            "border-xxs-grey": "{*borderWidths.border-xxs} solid {*colors.grey}",
                                            "border-xxs-greyDark": "{*borderWidths.border-xxs} solid {*colors.greyDark}",
                                            "border-xxs-greyLight": "{*borderWidths.border-xxs} solid {*colors.greyLight}",
                                            "border-xxs-greyXXXdark": "{*borderWidths.border-xxs} solid {*colors.greyXXXdark}",
                                            "border-xxs-greyXXdark": "{*borderWidths.border-xxs} solid {*colors.greyXXdark}",
                                            "border-xxs-greyXdark": "{*borderWidths.border-xxs} solid {*colors.greyXdark}",
                                            "border-xxs-greyXlight": "{*borderWidths.border-xxs} solid {*colors.greyXlight}",
                                            "border-xxs-transparent": "{*borderWidths.border-xxs} solid transparent",
                                            "border-xxs-white": "{*borderWidths.border-xxs} solid white",
                                            "button-border-thin": "thin solid"
                                        },
                                        "colors": {
                                            "amber-100": "#FEF3C7",
                                            "amber-200": "#FDE68A",
                                            "amber-300": "#FCD34D",
                                            "amber-400": "#FBBF24",
                                            "amber-50": "#FFFBEB",
                                            "amber-500": "#F59E0B",
                                            "amber-600": "#D97706",
                                            "amber-700": "#B45309",
                                            "amber-800": "#92400E",
                                            "amber-900": "#78350F",
                                            "amber-950": "#431407",
                                            "bg-avatar": "white",
                                            "bg-avatar-hover": "black",
                                            "bg-block-big-story": "",
                                            "bg-block-big-story-feed": "",
                                            "bg-block-content-big-story": "",
                                            "bg-block-content-big-story-feed": "",
                                            "bg-block-content-big-story-feed-colright-basefeed": "",
                                            "bg-block-content-big-story-feed-colright-feature": "",
                                            "bg-block-content-big-story-feed-noimage-basefeed": "",
                                            "bg-block-content-big-story-feed-noimage-feature": "",
                                            "bg-block-content-big-story-feed-stacked-basefeed": "",
                                            "bg-block-content-big-story-feed-stacked-feature": "",
                                            "bg-block-content-big-story-imageright": "",
                                            "bg-block-content-big-story-imageright-ad": "",
                                            "bg-block-content-big-story-noimage": "",
                                            "bg-block-content-big-story-noimage-ad": "",
                                            "bg-block-content-big-story-under": "",
                                            "bg-block-content-big-story-under-ad": "",
                                            "bg-block-content-four-across": "",
                                            "bg-block-content-text": "",
                                            "bg-block-content-three-col": "",
                                            "bg-block-four-across": "",
                                            "bg-block-three-col": "",
                                            "bg-chip-base": "greyXlight",
                                            "bg-chip-base-disabled": "greyLight",
                                            "bg-chip-button": "black",
                                            "bg-chip-button-hover": "greyXdark",
                                            "bg-color-do-not-sell-hover": "grey",
                                            "bg-color-poll-bar": "greyLight",
                                            "bg-discount": "globalColorDiscount",
                                            "bg-discount-onDark": "globalColorDiscount-OnDark",
                                            "bg-droppdown-list": "white",
                                            "bg-droppdown-list-first": "greyLight",
                                            "bg-droppdown-list-hover": "white",
                                            "bg-error": "globalColorError",
                                            "bg-error-onDark": "globalColorError-OnDark",
                                            "bg-form-check-disabled": "greyXlight",
                                            "bg-form-check-resting": "white",
                                            "bg-form-check-selected": "black",
                                            "bg-form-input-disabled": "greyXlight",
                                            "bg-form-input-resting": "white",
                                            "bg-form-input-selected": "white",
                                            "bg-informative": "greyLight",
                                            "bg-informative-onDark": "greyXXXdark",
                                            "bg-legal": "greyLight",
                                            "bg-legal-onDark": "greyXXXdark",
                                            "bg-rating": "globalColorRating",
                                            "bg-rating-onDark": "globalColorRating-OnDark",
                                            "black": "#000000",
                                            "blue-100": "#DBEAFE",
                                            "blue-200": "#BFDBFE",
                                            "blue-300": "#93C5FD",
                                            "blue-400": "#60A5FA",
                                            "blue-50": "#EFF6FF",
                                            "blue-500": "#3B82F6",
                                            "blue-600": "#2563EB",
                                            "blue-700": "#1D4ED8",
                                            "blue-800": "#1E40AF",
                                            "blue-900": "#1E3A8A",
                                            "blue-950": "#172554",
                                            "brandColorPrimary": "black",
                                            "brandColorQuaternary": "#0000001A",
                                            "brandColorSecondary": "#CCCCCC",
                                            "brandColorTertiary": "#808080",
                                            "breaker-ad-border": "greyLight",
                                            "color-link-body-hover": "link-hover-item-title-primary",
                                            "color-rating-default": "#F3B032",
                                            "color-star-rating-default": "#F3B032",
                                            "cyan-100": "#CFFAFE",
                                            "cyan-200": "#A5F3FC",
                                            "cyan-300": "#67E8F9",
                                            "cyan-400": "#22D3EE",
                                            "cyan-50": "#ECFEFF",
                                            "cyan-500": "#06B6D4",
                                            "cyan-600": "#0891B2",
                                            "cyan-700": "#0E7490",
                                            "cyan-800": "#155E75",
                                            "cyan-900": "#164E63",
                                            "cyan-950": "#083344",
                                            "emerald-100": "#D1FAE5",
                                            "emerald-200": "#A7F3D0",
                                            "emerald-300": "#6EE7B7",
                                            "emerald-400": "#34D399",
                                            "emerald-50": "#ECFDF5",
                                            "emerald-500": "#10B981",
                                            "emerald-600": "#059669",
                                            "emerald-700": "#047857",
                                            "emerald-800": "#065F46",
                                            "emerald-900": "#064E3B",
                                            "emerald-950": "#022C22",
                                            "fg-discount": "globalColorDiscount",
                                            "fg-discount-onDark": "globalColorDiscount-OnDark",
                                            "fg-error": "globalColorError",
                                            "fg-error-onDark": "globalColorError-OnDark",
                                            "footer-fill": "white",
                                            "footer-network-fill": "white",
                                            "footerbgColor": "black",
                                            "fuchsia-100": "#FAE8FF",
                                            "fuchsia-200": "#F5D0FE",
                                            "fuchsia-300": "#F0ABFC",
                                            "fuchsia-400": "#E879F9",
                                            "fuchsia-50": "#FDF4FF",
                                            "fuchsia-500": "#D946EF",
                                            "fuchsia-600": "#C026D3",
                                            "fuchsia-700": "#A21CAF",
                                            "fuchsia-800": "#86198F",
                                            "fuchsia-900": "#701A75",
                                            "fuchsia-950": "#4A044E",
                                            "globalColorDiscount": "greenDark",
                                            "globalColorDiscount-OnDark": "greenLight",
                                            "globalColorError": "red",
                                            "globalColorError-OnDark": "redLight",
                                            "globalColorFocus": "black",
                                            "globalColorFocus-OnDark": "white",
                                            "globalColorInformative": "greyXXXdark",
                                            "globalColorInformative-OnDark": "greyXlight",
                                            "globalColorLegal": "greyXXXdark",
                                            "globalColorLegal-OnDark": "greyXlight",
                                            "globalColorRating": "yellow",
                                            "globalColorRating-OnDark": "yellowLight",
                                            "gray-100": "#F3F4F6",
                                            "gray-200": "#E5E7EB",
                                            "gray-300": "#D1D5DB",
                                            "gray-400": "#9CA3AF",
                                            "gray-50": "#F9FAFB",
                                            "gray-500": "#6B7280",
                                            "gray-600": "#4B5563",
                                            "gray-700": "#374151",
                                            "gray-800": "#1F2937",
                                            "gray-900": "#111827",
                                            "gray-950": "#030712",
                                            "green-100": "#DCFCE7",
                                            "green-200": "#BBF7D0",
                                            "green-300": "#86EFAC",
                                            "green-400": "#4ADE80",
                                            "green-50": "#F0FDF4",
                                            "green-500": "#22C55E",
                                            "green-600": "#16A34A",
                                            "green-700": "#15803D",
                                            "green-800": "#166534",
                                            "green-900": "#14532D",
                                            "green-950": "#052E16",
                                            "greenDark": "#006603",
                                            "greenLight": "#75C278",
                                            "grey": "neutral-300",
                                            "greyDark": "neutral-400",
                                            "greyLight": "neutral-200",
                                            "greyXXXdark": "neutral-800",
                                            "greyXXdark": "neutral-600",
                                            "greyXdark": "neutral-500",
                                            "greyXlight": "neutral-100",
                                            "indigo-100": "#E0E7FF",
                                            "indigo-200": "#C7D2FE",
                                            "indigo-300": "#A5B4FC",
                                            "indigo-400": "#818CF8",
                                            "indigo-50": "#EEF2FF",
                                            "indigo-500": "#6366F1",
                                            "indigo-600": "#4F46E5",
                                            "indigo-700": "#4338CA",
                                            "indigo-800": "#3730A3",
                                            "indigo-900": "#312E81",
                                            "indigo-950": "#1E1B4B",
                                            "lime-100": "#ECFCCB",
                                            "lime-200": "#D9F99D",
                                            "lime-300": "#BEF264",
                                            "lime-400": "#A3E635",
                                            "lime-50": "#F7FEE7",
                                            "lime-500": "#84CC16",
                                            "lime-600": "#65A30D",
                                            "lime-700": "#4D7C0F",
                                            "lime-800": "#3F6212",
                                            "lime-900": "#365314",
                                            "lime-950": "#1A2E05",
                                            "link-hover-item-title-primary": "brandColorTertiary",
                                            "link-hover-item-title-secondary": "grey",
                                            "link-hover-three-column-heading": "brandColorPrimary",
                                            "location-choice-menu-bg": "black",
                                            "nav-subscribe-link-focus": "black",
                                            "neutral-100": "#F5F5F5",
                                            "neutral-200": "#E5E5E5",
                                            "neutral-300": "#D4D4D4",
                                            "neutral-400": "#A3A3A3",
                                            "neutral-50": "#FAFAFA",
                                            "neutral-500": "#737373",
                                            "neutral-600": "#525252",
                                            "neutral-700": "#404040",
                                            "neutral-800": "#262626",
                                            "neutral-900": "#171717",
                                            "neutral-950": "#0A0A0A",
                                            "orange-100": "#FFEDD5",
                                            "orange-200": "#FED7AA",
                                            "orange-300": "#FDBA74",
                                            "orange-400": "#FB923C",
                                            "orange-50": "#FFF7ED",
                                            "orange-500": "#F97316",
                                            "orange-600": "#EA580C",
                                            "orange-700": "#C2410C",
                                            "orange-800": "#9A3412",
                                            "orange-900": "#7C2D12",
                                            "orange-950": "#431407",
                                            "pink-100": "#FCE7F3",
                                            "pink-200": "#FBCFE8",
                                            "pink-300": "#F9A8D4",
                                            "pink-400": "#F472B6",
                                            "pink-50": "#FDF2F8",
                                            "pink-500": "#EC4899",
                                            "pink-600": "#DB2777",
                                            "pink-700": "#BE185D",
                                            "pink-800": "#9D174D",
                                            "pink-900": "#831843",
                                            "pink-950": "#500724",
                                            "purple-100": "#F3E8FF",
                                            "purple-200": "#E9D5FF",
                                            "purple-300": "#D8B4FE",
                                            "purple-400": "#C084FC",
                                            "purple-50": "#FAF5FF",
                                            "purple-500": "#A855F7",
                                            "purple-600": "#9333EA",
                                            "purple-700": "#7E22CE",
                                            "purple-800": "#6B21A8",
                                            "purple-900": "#581C87",
                                            "purple-950": "#3B0764",
                                            "red": "#AA0703",
                                            "red-100": "#FEE2E2",
                                            "red-200": "#FECACA",
                                            "red-300": "#FCA5A5",
                                            "red-400": "#F87171",
                                            "red-50": "#FEF2F2",
                                            "red-500": "#EF4444",
                                            "red-600": "#DC2626",
                                            "red-700": "#B91C1C",
                                            "red-800": "#991B1B",
                                            "red-900": "#7F1D1D",
                                            "red-950": "#450A0A",
                                            "redLight": "#F0908E",
                                            "rose-100": "#FFE4E6",
                                            "rose-200": "#FECDD3",
                                            "rose-300": "#FDA4AF",
                                            "rose-400": "#FB7185",
                                            "rose-50": "#FFF1F2",
                                            "rose-500": "#F43F5E",
                                            "rose-600": "#E11D48",
                                            "rose-700": "#BE123C",
                                            "rose-800": "#9F1239",
                                            "rose-900": "#881337",
                                            "rose-950": "#4C0519",
                                            "saved-menu-panel-focus-link-bg": "greyXlight",
                                            "side-panel-menu-bg": "white",
                                            "side-panel-sub-menu-bg": "greyXlight",
                                            "side-panel-sub-menu-focus": "black",
                                            "side-panel-sub-menu-hover": "greyDark",
                                            "sidePanelLinkColor": "brandColorPrimary",
                                            "sidePanelLinkColor-hover": "greyXXdark",
                                            "sidepanel-bg": "white",
                                            "sidepanel-text": "black",
                                            "sky-100": "#E0F2FE",
                                            "sky-200": "#BAE6FD",
                                            "sky-300": "#7DD3FC",
                                            "sky-400": "#38BDF8",
                                            "sky-50": "#F0F9FF",
                                            "sky-500": "#0EA5E9",
                                            "sky-600": "#0284C7",
                                            "sky-700": "#0369A1",
                                            "sky-800": "#075985",
                                            "sky-900": "#0C4A6E",
                                            "sky-950": "#082F49",
                                            "slate-100": "#F1F5F9",
                                            "slate-200": "#E2E8F0",
                                            "slate-300": "#CBD5E1",
                                            "slate-400": "#94A3B8",
                                            "slate-50": "#F8FAFC",
                                            "slate-500": "#64748B",
                                            "slate-600": "#475569",
                                            "slate-700": "#334155",
                                            "slate-800": "#1E293B",
                                            "slate-900": "#0F172A",
                                            "slate-950": "#020617",
                                            "sponsor-bar-bg": "white",
                                            "stone-100": "#F5F5F4",
                                            "stone-200": "#E7E5E4",
                                            "stone-300": "#D6D3D1",
                                            "stone-400": "#A8A29E",
                                            "stone-50": "#FAFAF9",
                                            "stone-500": "#78716C",
                                            "stone-600": "#57534E",
                                            "stone-700": "#44403C",
                                            "stone-800": "#292524",
                                            "stone-900": "#1C1917",
                                            "stone-950": "#0C0A09",
                                            "teal-100": "#CCFBF1",
                                            "teal-200": "#99F6E4",
                                            "teal-300": "#5EEAD4",
                                            "teal-400": "#2DD4BF",
                                            "teal-50": "#F0FDFA",
                                            "teal-500": "#14B8A6",
                                            "teal-600": "#0D9488",
                                            "teal-700": "#0F766E",
                                            "teal-800": "#115E59",
                                            "teal-900": "#134E4A",
                                            "teal-950": "#042F2E",
                                            "text-avatar": "black",
                                            "text-avatar-hover": "white",
                                            "text-chip-label": "black",
                                            "text-chip-label-disabled": "greyDark",
                                            "text-discount": "globalColorDiscount",
                                            "text-discount-onDark": "globalColorDiscount-OnDark",
                                            "text-droppdown-list": "black",
                                            "text-droppdown-list-first": "black",
                                            "text-droppdown-list-hover": "black",
                                            "text-error": "globalColorError",
                                            "text-error-onDark": "globalColorError-OnDark",
                                            "text-form-disabled": "greyDark",
                                            "text-form-error": "globalColorError",
                                            "text-form-helper": "greyXdark",
                                            "text-form-label": "greyXXXdark",
                                            "text-form-placeholder": "greyXXXdark",
                                            "text-informative": "greyXXXdark",
                                            "text-informative-onDark": "white",
                                            "text-legal": "greyXXXdark",
                                            "text-legal-onDark": "white",
                                            "text-rating": "greyXXXdark",
                                            "text-rating-onDark": "greyLight",
                                            "textFillColor": "black",
                                            "violet-100": "#EDE9FE",
                                            "violet-200": "#DDD6FE",
                                            "violet-300": "#C4B5FD",
                                            "violet-400": "#A78BFA",
                                            "violet-50": "#F5F3FF",
                                            "violet-500": "#8B5CF6",
                                            "violet-600": "#7C3AED",
                                            "violet-700": "#6D28D9",
                                            "violet-800": "#5B21B6",
                                            "violet-900": "#4C1D95",
                                            "violet-950": "#2E1065",
                                            "white": "#ffffff",
                                            "yellow": "#F3B032",
                                            "yellow-100": "#FEF9C3",
                                            "yellow-200": "#FEF08A",
                                            "yellow-300": "#FDE047",
                                            "yellow-400": "#FACC15",
                                            "yellow-50": "#FEFCE8",
                                            "yellow-500": "#EAB308",
                                            "yellow-600": "#CA8A04",
                                            "yellow-700": "#A16207",
                                            "yellow-800": "#854D0E",
                                            "yellow-900": "#713F12",
                                            "yellow-950": "#422006",
                                            "yellowLight": "#F9D187",
                                            "zinc-100": "#F4F4F5",
                                            "zinc-200": "#E4E4E7",
                                            "zinc-300": "#D4D4D8",
                                            "zinc-400": "#A1A1AA",
                                            "zinc-50": "#FAFAFA",
                                            "zinc-500": "#71717A",
                                            "zinc-600": "#52525B",
                                            "zinc-700": "#3F3F46",
                                            "zinc-800": "#27272A",
                                            "zinc-900": "#18181B",
                                            "zinc-950": "#09090B"
                                        },
                                        "elevation": {
                                            "base": "0",
                                            "drawer": "8000000",
                                            "floating": "12000000",
                                            "gate": "14000000",
                                            "nav": "6000000",
                                            "overlay": "10000000",
                                            "raised": "2000000",
                                            "subnav": "4000000",
                                            "sunken": "-2000000"
                                        },
                                        "fontFamilies": {
                                            "Charter": {
                                                "src": [
                                                    "static/fonts/e38fddd1-89a4-4995-9f7f-3c701b2e62f1.woff2",
                                                    { "defaults": false }
                                                ],
                                                "variants": {
                                                    "style:italic": {
                                                        "src": "static/fonts/e4fc2e26-0ce1-4e6c-bb35-330c133f041c.woff2"
                                                    },
                                                    "weight:bold": {
                                                        "src": "static/fonts/74c2aebb-af4a-4c7d-a7f5-2db2c73334eb.woff2"
                                                    }
                                                }
                                            },
                                            "CharterBold": {
                                                "src": [
                                                    "static/fonts/74c2aebb-af4a-4c7d-a7f5-2db2c73334eb.woff2",
                                                    { "defaults": false }
                                                ],
                                                "variants": {
                                                    "style:italic": {
                                                        "src": "static/fonts/8d8c24cd-7112-47d5-9f8d-a9063ad51341.woff2"
                                                    }
                                                }
                                            },
                                            "Inter": {
                                                "src": [
                                                    "static/fonts/inter-v3-latin-regular.woff2",
                                                    { "defaults": false }
                                                ],
                                                "variants": {
                                                    "weight:700": {
                                                        "src": "static/fonts/inter-v3-latin-700.woff2"
                                                    }
                                                }
                                            },
                                            "NeueHaasUnica": {
                                                "src": [
                                                    "static/fonts/16eece37-9438-4888-8270-f6e32bc95fad.woff2",
                                                    { "defaults": false }
                                                ]
                                            },
                                            "NeueHaasUnica-fallback": {
                                                "src": [
                                                    "local('Roboto')",
                                                    { "size-adjust": "103" }
                                                ]
                                            },
                                            "SaolDisplay": {
                                                "src": [
                                                    "static/fonts/Saol-Display-Regular.woff2",
                                                    { "defaults": false }
                                                ],
                                                "variants": {
                                                    "style:italic": {
                                                        "src": "static/fonts/Saol-Display-Regular-Italic.woff2"
                                                    }
                                                }
                                            },
                                            "SaolDisplay-fallback": {
                                                "src": [
                                                    "local('Roboto')",
                                                    { "size-adjust": "94" }
                                                ]
                                            },
                                            "SaolText": {
                                                "src": [
                                                    "static/fonts/Saol-Text-Regular.woff2",
                                                    { "defaults": false }
                                                ],
                                                "variants": {
                                                    "style:italic": {
                                                        "src": "static/fonts/Saol-Text-Regular-Italic.woff2"
                                                    }
                                                }
                                            },
                                            "SaolText-fallback": {
                                                "src": [
                                                    "local('Roboto')",
                                                    {
                                                        "size-adjust": "96.39999999999998"
                                                    }
                                                ]
                                            }
                                        },
                                        "fontSettings": { "base": "0.7" },
                                        "fontSizes": {
                                            "font-size-11": "0.001",
                                            "font-size-112": "5.67887",
                                            "font-size-12": "0.170157",
                                            "font-size-13": "0.36758",
                                            "font-size-14": "0.55034",
                                            "font-size-15": "0.72049",
                                            "font-size-16": "0.879669",
                                            "font-size-17": "1.02919",
                                            "font-size-18": "1.17016",
                                            "font-size-19": "1.3035",
                                            "font-size-20": "1.43",
                                            "font-size-21": "1.55034",
                                            "font-size-22": "1.66507",
                                            "font-size-23": "1.7747",
                                            "font-size-24": "1.87967",
                                            "font-size-25": "1.98035",
                                            "font-size-26": "2.07708",
                                            "font-size-27": "2.17016",
                                            "font-size-28": "2.25985",
                                            "font-size-29": "2.3464",
                                            "font-size-30": "2.43001",
                                            "font-size-31": "2.51088",
                                            "font-size-32": "2.58918",
                                            "font-size-33": "2.66507",
                                            "font-size-34": "2.7387",
                                            "font-size-35": "2.81019",
                                            "font-size-36": "2.87967",
                                            "font-size-37": "2.94724",
                                            "font-size-38": "3.01301",
                                            "font-size-39": "3.07708",
                                            "font-size-40": "3.13952",
                                            "font-size-41": "3.20042",
                                            "font-size-42": "3.25985",
                                            "font-size-43": "3.31788",
                                            "font-size-44": "3.37458",
                                            "font-size-45": "3.43001",
                                            "font-size-46": "3.48422",
                                            "font-size-47": "3.53726",
                                            "font-size-48": "3.58918",
                                            "font-size-49": "3.64003",
                                            "font-size-50": "3.68986",
                                            "font-size-52": "3.78659",
                                            "font-size-54": "3.87967",
                                            "font-size-56": "3.96936",
                                            "font-size-58": "4.05591",
                                            "font-size-60": "4.13952",
                                            "font-size-62": "4.22039",
                                            "font-size-64": "4.29869",
                                            "font-size-70": "4.5197",
                                            "font-size-80": "4.84903",
                                            "font-size-96": "5.29869"
                                        },
                                        "fontWeights": {
                                            "font-weight-bold": "bold",
                                            "font-weight-normal": "normal",
                                            "font-weight-regular": "normal"
                                        },
                                        "fonts": {
                                            "AdTextPrimary": "Inter, Helvetica, Arial, Sans-serif",
                                            "AdTextSecondary": "BylinePrimary",
                                            "BodyPrimary": "Charter, Georgia, Times, Serif",
                                            "BodySanSerif": "Inter, Helvetica, Arial, Sans-serif",
                                            "BodySecondary": "CharterBold, Georgia, Times, Serif",
                                            "BodyTertiary": "CharterItalic, Georgia, Times, Serif",
                                            "BylinePrimary": "primary",
                                            "BylineSecondary": "primary",
                                            "DekPrimary": "secondary",
                                            "DekSecondary": "primary",
                                            "HeadlinePrimary": "tertiary",
                                            "HeadlineSecondary": "primary",
                                            "LabelPrimary": "primary",
                                            "LabelSecondary": "primary",
                                            "MenuPrimary": "primary",
                                            "MenuSecondary": "primary",
                                            "SubheadlinePrimary": "secondary",
                                            "SubheadlineSecondary": "primary",
                                            "TitlePrimary": "tertiary",
                                            "TitleSecondary": "primary",
                                            "primary": "NeueHaasUnica, NeueHaasUnica-fallback, Arial, sans-serif",
                                            "secondary": "SaolText, SaolText-fallback, Georgia, Times, serif",
                                            "tertiary": "SaolDisplay, SaolDisplay-fallback, Georgia, Times, serif"
                                        },
                                        "letterSpacings": {
                                            "letter-spacing-1": "0.0075rem",
                                            "letter-spacing-10": "0.075rem",
                                            "letter-spacing-2": "0.015rem",
                                            "letter-spacing-20": "0.15rem",
                                            "letter-spacing-3": "0.0225rem",
                                            "letter-spacing-30": "0.3rem",
                                            "letter-spacing-4": "0.03rem",
                                            "letter-spacing-40": "0.4rem",
                                            "letter-spacing-5": "0.0375rem",
                                            "letter-spacing-6": "0.045rem",
                                            "letter-spacing-8": "0.06rem",
                                            "letter-spacing-base": "0",
                                            "letter-spacing-n1": "-0.0075rem",
                                            "letter-spacing-n10": "-0.075rem",
                                            "letter-spacing-n2": "-0.015rem",
                                            "letter-spacing-n3": "-0.0225rem",
                                            "letter-spacing-n4": "-0.03rem",
                                            "letter-spacing-n48": "-0.15rem",
                                            "letter-spacing-n5": "-0.0375rem",
                                            "letter-spacing-n6": "-0.045rem",
                                            "letter-spacing-n60": "-0.188rem",
                                            "letter-spacing-n8": "-0.06rem",
                                            "letter-spacing-n80": "-0.25rem"
                                        },
                                        "lineHeights": {
                                            "large": "1.5",
                                            "lg": "1.4",
                                            "lineheight-base": "1",
                                            "lineheight-lg": "1.4",
                                            "lineheight-max": "2",
                                            "lineheight-md": "1.3",
                                            "lineheight-sm": "1.2",
                                            "lineheight-xlg": "1.5",
                                            "lineheight-xs": "1.1",
                                            "lineheight-xsmall": "0.9",
                                            "lineheight-xxlg": "1.6",
                                            "lineheight-xxsmall": "0.8",
                                            "lineheight-xxxlg": "1.8",
                                            "md": "1.3",
                                            "medium": "1.3",
                                            "normal": {
                                                "minLinePadding": "5",
                                                "roundToNearestHalfLine": "false",
                                                "size": "10"
                                            },
                                            "sm": "1.2",
                                            "small": "1.2",
                                            "xlg": "1.5",
                                            "xs": "1.1",
                                            "xxs": "1"
                                        },
                                        "outlines": {
                                            "outline-focus-black": "{*sizes.outlineWidths.outline-xs} dotted {*colors.black}",
                                            "outline-focus-transparent": "{*sizes.outlineWidths.outline-xs} dotted transparent",
                                            "outline-focus-white": "{*sizes.outlineWidths.outline-xs} dotted {*colors.white}"
                                        },
                                        "radii": {
                                            "l": "1.875rem",
                                            "m": "1.25rem",
                                            "s": "0.9375rem",
                                            "xl": "4.375rem",
                                            "xs": "0.625rem",
                                            "xxs": "0.3125rem",
                                            "xxxs": "0.25rem"
                                        },
                                        "scaleRatio": 1.5,
                                        "shadows": {
                                            "shadow-grey": "0 0.188rem 0.188rem rgba(0, 0, 0, 0.2)",
                                            "shadow-greyXdark": "0 0.063rem 0.063rem rgba(0, 0, 0, 0.25)",
                                            "shadow-modal": "0 0.2rem 0.6rem rgba(0, 0, 0, 0.1)"
                                        },
                                        "sizes": {
                                            "footer-network-logo": {
                                                "height": "55",
                                                "width": "192"
                                            },
                                            "iconSize": {
                                                "l": "1.875rem",
                                                "m": "1.5rem",
                                                "s": "1.25rem",
                                                "xl": "2.5rem",
                                                "xs": "1.063rem",
                                                "xxl": "3.125rem",
                                                "xxs": "1rem",
                                                "xxxl": "3.75rem",
                                                "xxxs": "0.5rem",
                                                "xxxxl": "4.6rem",
                                                "xxxxxl": "5rem"
                                            },
                                            "maxContentWidth": "75rem",
                                            "navHeight": "3.375rem",
                                            "outlineOffset": {
                                                "outline-offset-lg": "0.5rem",
                                                "outline-offset-m": "0.375rem",
                                                "outline-offset-none": "0",
                                                "outline-offset-s": "0.25rem",
                                                "outline-offset-xs": "0.125rem",
                                                "outline-offset-xxs": "0.0625rem"
                                            },
                                            "outlineWidths": {
                                                "outline-lg": "0.625rem",
                                                "outline-m": "0.3125rem",
                                                "outline-none": "0",
                                                "outline-s": "0.19rem",
                                                "outline-xs": "0.125rem",
                                                "outline-xxs": "0.0625rem"
                                            },
                                            "primitive-0": "0rem",
                                            "primitive-1": "0.0625rem",
                                            "primitive-10": "0.625rem",
                                            "primitive-1024": "64rem",
                                            "primitive-11": "0.6875rem",
                                            "primitive-112": "7rem",
                                            "primitive-12": "0.75rem",
                                            "primitive-128": "8rem",
                                            "primitive-1280": "80rem",
                                            "primitive-13": "0.8125rem",
                                            "primitive-14": "0.875rem",
                                            "primitive-15": "0.9375rem",
                                            "primitive-16": "1rem",
                                            "primitive-160": "10rem",
                                            "primitive-1600": "100rem",
                                            "primitive-17": "1.0625rem",
                                            "primitive-18": "1.125rem",
                                            "primitive-19": "1.188rem",
                                            "primitive-192": "12rem",
                                            "primitive-1920": "120rem",
                                            "primitive-2": "0.125rem",
                                            "primitive-20": "1.25rem",
                                            "primitive-22": "1.375rem",
                                            "primitive-224": "14rem",
                                            "primitive-24": "1.5rem",
                                            "primitive-256": "16rem",
                                            "primitive-28": "1.75rem",
                                            "primitive-32": "2rem",
                                            "primitive-320": "20rem",
                                            "primitive-36": "2.25rem",
                                            "primitive-384": "24rem",
                                            "primitive-4": "0.25rem",
                                            "primitive-40": "2.5rem",
                                            "primitive-44": "2.75rem",
                                            "primitive-448": "28rem",
                                            "primitive-48": "3rem",
                                            "primitive-512": "32rem",
                                            "primitive-52": "3.25rem",
                                            "primitive-56": "3.5rem",
                                            "primitive-6": "0.375rem",
                                            "primitive-60": "3.75rem",
                                            "primitive-64": "4rem",
                                            "primitive-640": "40rem",
                                            "primitive-72": "4.5rem",
                                            "primitive-768": "48rem",
                                            "primitive-8": "0.5rem",
                                            "primitive-80": "5rem",
                                            "primitive-96": "6rem"
                                        },
                                        "space": {
                                            "center": "0 auto",
                                            "contentWidth": "75rem",
                                            "l": "1.875rem",
                                            "m": "1.25rem",
                                            "maxContentWidth": "75rem",
                                            "maxContentWidthAd": "25rem",
                                            "mobile-gutter": "0.938rem",
                                            "mobileOuterGutter": "0.938rem",
                                            "s": "0.9375rem",
                                            "tablet-gutter": "2.5rem",
                                            "tabletOuterGutter": "2.5rem",
                                            "xl": "4.375rem",
                                            "xs": "0.625rem",
                                            "xxs": "0.3125rem",
                                            "xxxs": "0.25rem"
                                        },
                                        "styles": {
                                            "404-error-link": {
                                                "variant": "body-primary"
                                            },
                                            "404-error-title": {
                                                "variant": "headline-primary"
                                            },
                                            "accordion-wrapper": {
                                                "borderBottom": "border-thin-grey"
                                            },
                                            "account-dropdown-container": {
                                                "pr": {
                                                    "_": "0",
                                                    "sm:xxlg": "2.5rem",
                                                    "xxxlg\u003e": "0"
                                                }
                                            },
                                            "account-dropdown-links": {
                                                "\u0026:hover": {
                                                    "textDecoration": "underline",
                                                    "textDecorationThickness": "0.0625rem",
                                                    "textUnderlineOffset": "0.25rem"
                                                },
                                                "bg": "white",
                                                "transition": "outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out",
                                                "variant": "button-secondary"
                                            },
                                            "account-dropdown-menu": {
                                                "border": "border-thin-greyXXXdark",
                                                "boxShadow": "0 10px 16px -4px rgba(0, 0, 0, 0.24)"
                                            },
                                            "affiliate-bar": {
                                                "variant": "ad-text-primary"
                                            },
                                            "author-bio-bio": {
                                                "\u0026 p": { "margin": "0" },
                                                "variant": "body-secondary"
                                            },
                                            "author-bio-bio-job-title-wrapper": {},
                                            "author-bio-job-title": {
                                                "marginTop": "xs",
                                                "variant": "byline-primary"
                                            },
                                            "author-bio-label": {
                                                "color": "greyXdark",
                                                "marginRight": "xxs",
                                                "variant": "byline-primary"
                                            },
                                            "author-bio-letter-mark-icon": {},
                                            "author-bio-name": {
                                                "variant": "byline-primary"
                                            },
                                            "author-bio-name-job-title-container": {
                                                "alignItems": "baseline"
                                            },
                                            "author-bio-read-more": {
                                                "\u0026:hover": {
                                                    "backgroundSize": "0 0",
                                                    "color": "greyXXdark"
                                                },
                                                "backgroundImage": "linear-gradient( to bottom, #F5F5F5, #F5F5F5)",
                                                "backgroundPosition": "0 100%",
                                                "backgroundRepeat": "repeat-x",
                                                "backgroundSize": "0 0",
                                                "color": "brandColorPrimary",
                                                "fontSize": "font-size-16",
                                                "pb": "0.05rem",
                                                "pt": "0.05rem",
                                                "variant": "body-secondary"
                                            },
                                            "authors-bio-wrapper": {
                                                "borderTop": "border-thin-greyXXdark",
                                                "marginTop": "l"
                                            },
                                            "big-story-block": {
                                                "bg": "bg-block-big-story",
                                                "pb": {
                                                    "lg": "2.5rem",
                                                    "md": "1.5625rem"
                                                },
                                                "pt": {
                                                    "\u003csm": "0",
                                                    "lg": "m",
                                                    "md": "1.5625rem",
                                                    "sm": "xs"
                                                }
                                            },
                                            "big-story-feed-block": {
                                                "bg": "bg-block-big-story-feed",
                                                "pb": {
                                                    "lg": "2.5rem",
                                                    "md": "1.5625rem"
                                                },
                                                "pt": {
                                                    "\u003csm": "0",
                                                    "lg": "m",
                                                    "md": "1.5625rem",
                                                    "sm": "xs"
                                                }
                                            },
                                            "block-header": {
                                                "borderBottom": {
                                                    "sm": "border-xxs-grey"
                                                },
                                                "borderTop": {
                                                    "\u003csm": "border-xxs-brand-quaternary",
                                                    "sm": "border-xxs-grey"
                                                },
                                                "mb": {
                                                    "\u003clg": "m",
                                                    "lg": "xxs",
                                                    "xlg": "xs"
                                                },
                                                "mt": { "\u003csm": "xs" },
                                                "p": {
                                                    "\u003csm": "2.3125rem 0 {xs}",
                                                    "lg": "2.5rem 0 1.5rem",
                                                    "sm": "2rem 0 {m}"
                                                },
                                                "textAlign": "center"
                                            },
                                            "block-heading": {
                                                "variant": "headline-primary"
                                            },
                                            "block-subheading": {
                                                "variant": "subheadline-primary"
                                            },
                                            "body-cta-btn-link": {
                                                "fontWeight": "normal"
                                            },
                                            "body-h2": {
                                                "\u0026 b, strong": {
                                                    "fontFamily": "inherit",
                                                    "fontWeight": "bold"
                                                },
                                                "\u0026 em, i": {
                                                    "fontFamily": "inherit",
                                                    "fontStyle": "italic"
                                                },
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-30",
                                                    "lg": "font-size-40",
                                                    "md": "font-size-38"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "md": "lineheight-xs"
                                                },
                                                "textAlign": "center",
                                                "variant": "headline-tertiary"
                                            },
                                            "body-h3": {
                                                "\u0026 b, strong": {
                                                    "fontFamily": "inherit",
                                                    "fontWeight": "bold"
                                                },
                                                "\u0026 em, i": {
                                                    "fontFamily": "inherit",
                                                    "fontStyle": "italic"
                                                },
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-28",
                                                    "lg": "font-size-38",
                                                    "md": "font-size-30"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "md": "lineheight-xs"
                                                },
                                                "textAlign": "center",
                                                "variant": "title-tertiary"
                                            },
                                            "body-h4": {
                                                "\u0026 b, strong": {
                                                    "fontFamily": "inherit",
                                                    "fontWeight": "bold"
                                                },
                                                "\u0026 em, i": {
                                                    "fontFamily": "inherit",
                                                    "fontStyle": "italic"
                                                },
                                                "bg": "greyXlight",
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-18",
                                                "lineHeight": "lineheight-base",
                                                "p": "{s} {m}",
                                                "width": "fit-content"
                                            },
                                            "body-image-caption": {
                                                "\u0026 em, i": {
                                                    "fontFamily": "inherit",
                                                    "fontStyle": "italic"
                                                },
                                                "variant": "body-tertiary"
                                            },
                                            "body-loop-caption": {
                                                "\u0026 em, i": {
                                                    "fontFamily": "inherit",
                                                    "fontStyle": "italic"
                                                },
                                                "variant": "body-tertiary"
                                            },
                                            "body-ol": {
                                                "\u0026 b, strong": {
                                                    "fontFamily": "inherit",
                                                    "fontWeight": "bold"
                                                },
                                                "\u0026 em, i": {
                                                    "fontFamily": "inherit",
                                                    "fontStyle": "italic"
                                                },
                                                "margin": {
                                                    "_": "{s} 0 0 {xs}",
                                                    "md": "{s} 0"
                                                },
                                                "variant": "body-primary"
                                            },
                                            "body-text": {
                                                "variant": "body-primary"
                                            },
                                            "body-ul": {
                                                "\u0026 b, strong": {
                                                    "fontFamily": "inherit",
                                                    "fontWeight": "bold"
                                                },
                                                "\u0026 em, i": {
                                                    "fontFamily": "inherit",
                                                    "fontStyle": "italic"
                                                },
                                                "margin": {
                                                    "_": "{s} 0 0 {xs}",
                                                    "md": "{s} 0"
                                                },
                                                "variant": "body-primary"
                                            },
                                            "breadcrumbs-link": {
                                                "variant": "breadcrumbs-link-primary"
                                            },
                                            "breadcrumbs-link-section": {
                                                "variant": "breadcrumbs-link-primary"
                                            },
                                            "breadcrumbs-list": {
                                                "variant": "breadcrumbs-primary"
                                            },
                                            "breadcrumbs-list-section": {
                                                "marginBottom": "m",
                                                "marginTop": "-{m}",
                                                "textAlign": "center",
                                                "variant": "breadcrumbs-primary"
                                            },
                                            "breaker-ad-text": {
                                                "lineHeight": "lineheight-base",
                                                "textTransform": "uppercase",
                                                "variant": "ad-text-primary"
                                            },
                                            "by-line": {
                                                "pr": "xxs",
                                                "variant": "byline-primary"
                                            },
                                            "by-line-name": {
                                                "pr": "xxs",
                                                "variant": "byline-primary"
                                            },
                                            "byline-enhanced-author-job-title": {
                                                "color": "greyXdark",
                                                "marginLeft": {
                                                    "\u003csm": "xxs",
                                                    "sm": "xs"
                                                },
                                                "paddingLeft": {
                                                    "\u003csm": "xxs",
                                                    "sm": "xxs"
                                                },
                                                "variant": "byline-uppercase-primary"
                                            },
                                            "byline-enhanced-author-name": {
                                                "variant": "byline-uppercase-primary"
                                            },
                                            "byline-enhanced-container": {},
                                            "byline-enhanced-icon": {
                                                "primary": "greyXXdark"
                                            },
                                            "byline-enhanced-label": {
                                                "variant": "byline-uppercase-primary"
                                            },
                                            "byline-enhanced-wrapper": {
                                                "alignItems": "center",
                                                "display": "flex",
                                                "flexWrap": "wrap",
                                                "justifyContent": "center",
                                                "marginTop": "0",
                                                "span": { "display": "inherit" }
                                            },
                                            "checkbox-error-text": {
                                                "variant": "small-specs-error-text-primary"
                                            },
                                            "checkbox-label-text": {
                                                "variant": "overlay-item-text"
                                            },
                                            "collapsible-header": {
                                                "\u0026 strong": {
                                                    "fontFamily": "inherit"
                                                },
                                                "variant": "label-header-primary"
                                            },
                                            "collapsible-header-button": {
                                                "bg": "white",
                                                "border": "0",
                                                "borderBottom": "none",
                                                "borderTop": "border-thin-grey",
                                                "paddingBottom": "xxs",
                                                "paddingTop": "xxs",
                                                "textAlign": "left",
                                                "width": "100%"
                                            },
                                            "collapsible-icon-wrapper": {
                                                "border": "border-thin-greyXdark",
                                                "borderRadius": "50%",
                                                "height": "iconSize.l",
                                                "marginRight": "xs",
                                                "padding": "0.4rem",
                                                "width": "iconSize.l"
                                            },
                                            "collapsible-section": {
                                                "marginBottom": "0"
                                            },
                                            "collapsible-section-text": {
                                                "\u003e p": {
                                                    "marginTop": "0"
                                                },
                                                "variant": "body-primary",
                                                "width": "100%"
                                            },
                                            "content-header-by-line-container": {
                                                "mb": "xs",
                                                "pr": "xxs",
                                                "span": {
                                                    "display": "inline-block",
                                                    "lineHeight": "lineheight-xxlg"
                                                },
                                                "variant": "byline-primary"
                                            },
                                            "content-header-dek": {
                                                "fontFamily": "DekPrimary",
                                                "fontSize": "font-size-20",
                                                "fontStyle": "italic",
                                                "fontWeight": "normal",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "md": "lineheight-sm"
                                                },
                                                "mb": "xs"
                                            },
                                            "content-header-dek-left-right": {
                                                "fontFamily": "DekPrimary",
                                                "fontSize": "font-size-20",
                                                "fontStyle": "italic",
                                                "fontWeight": "normal",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "md": "lineheight-sm"
                                                }
                                            },
                                            "content-header-left-right-byline-enhanced-container": {
                                                "m": "0",
                                                "maxWidth": "none"
                                            },
                                            "content-header-publish-date": {
                                                "ml": "xs",
                                                "pl": "xs"
                                            },
                                            "content-header-text-left-right-container": {
                                                "textAlign": { "md": "center" }
                                            },
                                            "content-header-title": {
                                                "marginY": "s",
                                                "variant": "headline-tertiary"
                                            },
                                            "content-header-title-left-right": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-40",
                                                    "lg": "font-size-48",
                                                    "md": "font-size-29",
                                                    "xlg": "font-size-52"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "md": "lineheight-xs",
                                                    "xlg": "lineheight-xs"
                                                },
                                                "variant": "headline-tertiary"
                                            },
                                            "custom-item-dek": {
                                                "variant": "dek-primary"
                                            },
                                            "custom-item-image": {
                                                "mb": "xs",
                                                "text-overflow": "ellipsis"
                                            },
                                            "custom-item-label": {
                                                "display": "inline-block",
                                                "marginBottom": "xs",
                                                "variant": "label-tag-primary"
                                            },
                                            "custom-item-label-big-story-feed": {
                                                "display": "block",
                                                "m": "auto auto {xs}",
                                                "variant": "label-tag-primary"
                                            },
                                            "custom-item-meta": { "pr": "xxs" },
                                            "custom-item-publish-date": {
                                                "bps": [
                                                    {
                                                        "options": {
                                                            "size": "sm"
                                                        },
                                                        "value": {
                                                            "\u0026:before": {
                                                                "content": "'|'",
                                                                "display": "inline-block",
                                                                "fontFamily": "primary",
                                                                "fontSize": "font-size-11",
                                                                "p": "0 {xxxs}"
                                                            }
                                                        }
                                                    }
                                                ],
                                                "pr": "xxs",
                                                "variant": "byline-primary"
                                            },
                                            "custom-item-title": {
                                                "my": "0",
                                                "variant": "title-primary"
                                            },
                                            "custom-item-title-text": {
                                                "my": "0",
                                                "variant": "title-primary"
                                            },
                                            "dim-overlay": {
                                                "elevation": "sunken"
                                            },
                                            "do-not-sell": {
                                                "border": "border-thin-white",
                                                "fontSize": "font-size-11",
                                                "lineHeight": "lineheight-lg",
                                                "padding": "xs",
                                                "textAlign": {
                                                    "\u003csm": "left",
                                                    "md": "center"
                                                },
                                                "textTransform": "capitalize",
                                                "variant": "menu-secondary"
                                            },
                                            "dropdown-contentdropdown-content": {
                                                "border": "border-dropdown"
                                            },
                                            "dropdown-label-headline": {
                                                "variant": "dropdown-text-primary"
                                            },
                                            "dropdown-link-list-collapsed": {
                                                "variant": "specs-item-primary"
                                            },
                                            "dropdown-menu-item": {
                                                "\u0026:hover": {
                                                    "bg": "bg-droppdown-list-hover"
                                                },
                                                "background": "bg-droppdown-list",
                                                "border": "border-dropdown",
                                                "variant": "dropdown-text-primary"
                                            },
                                            "dropdown-menu-item-arrow-button": {
                                                "transition": "all 0.3s ease-in-out"
                                            },
                                            "dropdown-menu-item-link": {
                                                "\u0026:hover": {
                                                    "color": "greyXXXdark"
                                                },
                                                "borderBottom": "none",
                                                "textTransform": "capitalize"
                                            },
                                            "dropdown-menu-label-item": {
                                                "fontWeight": "normal"
                                            },
                                            "dropdown-menu-label-item-username": {
                                                "borderBottom": "none",
                                                "fontWeight": "bold"
                                            },
                                            "embedded-product-price-text": {
                                                "fontFamily": "MenuPrimary"
                                            },
                                            "error-text": {
                                                "variant": "small-specs-error-text-primary"
                                            },
                                            "feed-body-label": {
                                                "variant": "label-tag-primary"
                                            },
                                            "feed-product-button": {
                                                "mb": "0",
                                                "variant": "button-primary"
                                            },
                                            "feed-product-button-container": {
                                                "marginY": "xs"
                                            },
                                            "feed-product-custom-tag": {
                                                "variant": "label-tag-primary"
                                            },
                                            "feed-product-description": {
                                                "variant": "dek-primary"
                                            },
                                            "feed-product-info-details": {
                                                "margin": {
                                                    "_": "xs",
                                                    "xlg": "m"
                                                },
                                                "textAlign": "center"
                                            },
                                            "feed-product-title": {
                                                "variant": "title-secondary"
                                            },
                                            "field-message-container": {
                                                "variant": "overlay-item-text"
                                            },
                                            "footer": {
                                                "variant": "menu-tertiary"
                                            },
                                            "footer-affiliate-disclosure": {
                                                "lineHeight": "lineheight-lg"
                                            },
                                            "footer-fixed": {
                                                "bg": "greyXlight",
                                                "boxShadow": "0 0 40px rgb(0 0 0, 0.2)"
                                            },
                                            "footer-fixed-button": {
                                                "variant": "button-text"
                                            },
                                            "footer-fixed-button-collapsed": {
                                                "color": "black"
                                            },
                                            "footer-fixed-button-open": {
                                                "color": "black"
                                            },
                                            "footer-fixed-content": {
                                                "variant": "body-primary"
                                            },
                                            "footer-legal-menu": {
                                                "lineHeight": "lineheight-max"
                                            },
                                            "footer-legal-menu-item-link": {
                                                "paddingRight": "m"
                                            },
                                            "footer-logo": {
                                                "height": "2.125rem",
                                                "maxHeight": "1.4375rem",
                                                "width": "5.375rem"
                                            },
                                            "footer-social-button": {
                                                "height": "iconSize.xs",
                                                "primary": "white",
                                                "width": "iconSize.xs"
                                            },
                                            "form-input-field": {
                                                "\u0026::placeholder": {
                                                    "color": "greyXXXdark"
                                                },
                                                "variant": "overlay-item-text"
                                            },
                                            "form-input-label": {
                                                "variant": "overlay-item-text"
                                            },
                                            "form-input-required": {
                                                "color": "globalColorError",
                                                "variant": "overlay-item-text"
                                            },
                                            "form-select": {
                                                "variant": "overlay-item-text"
                                            },
                                            "form-select-label": {
                                                "variant": "overlay-item-text"
                                            },
                                            "form-select-multi-value": {
                                                "bg": "greyLight",
                                                "marginY": "0",
                                                "p": "0.2rem",
                                                "variant": "specs-item-primary"
                                            },
                                            "form-select-option": {
                                                "variant": "overlay-item-text"
                                            },
                                            "form-select-placeholder": {
                                                "lineHeight": "lineheight-max",
                                                "p": "0",
                                                "variant": "overlay-item-text"
                                            },
                                            "form-select-required": {
                                                "variant": "overlay-item-text"
                                            },
                                            "form-select-single-value": {
                                                "variant": "overlay-item-text"
                                            },
                                            "form-text-area-field": {
                                                "variant": "overlay-item-text"
                                            },
                                            "four-across-block": {
                                                "bg": "bg-block-four-across",
                                                "pb": {
                                                    "lg": "2.5rem",
                                                    "md": "1.5625rem"
                                                },
                                                "pt": {
                                                    "\u003csm": "0",
                                                    "lg": "m",
                                                    "md": "1.5625rem",
                                                    "sm": "xs"
                                                }
                                            },
                                            "item-author-container-carousel-block": {
                                                "[data-theme-key='card-body']": {
                                                    "paddingTop": {
                                                        "md": "{*sizes.primitive-12}"
                                                    }
                                                }
                                            },
                                            "item-author-image-carousel-block": {
                                                "img": { "borderRadius": "50%" }
                                            },
                                            "item-author-wrapper-grouped-carousel-block": {
                                                "[data-theme-key='carousel-inner-wrapper']": {
                                                    "gap": { "md": "0" }
                                                }
                                            },
                                            "item-button-carousel-block": {
                                                "variant": "button-contained"
                                            },
                                            "item-button-statement-block": {
                                                "variant": "button-contained"
                                            },
                                            "item-button-text-statement-block": {
                                                "variant": "button-text"
                                            },
                                            "item-container-grouped-carousel-block": {
                                                "border": "border-none-transparent"
                                            },
                                            "item-container-grouped-statement-block": {
                                                "border": "border-none-transparent"
                                            },
                                            "item-dek-statement-block": {
                                                "\u0026 ul,li": {
                                                    "textAlign": "left"
                                                },
                                                "fontFamily": "DekPrimary",
                                                "fontSize": "font-size-14",
                                                "letterSpacing": "letter-spacing-4",
                                                "lineHeight": "lineheight-lg"
                                            },
                                            "item-image-grouped-statement-block": {
                                                "maxWidth": "25rem"
                                            },
                                            "item-title-statement-block": {
                                                "fontFamily": "HeadlinePrimary",
                                                "fontSize": "font-size-20",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "legal-menu-link": {
                                                "variant": "menu-secondary"
                                            },
                                            "link-body-primary": {
                                                "fontWeight": "bold"
                                            },
                                            "link-body-secondary": {
                                                "fontWeight": "bold"
                                            },
                                            "list-item-link": {
                                                "fontFamily": "MenuPrimary"
                                            },
                                            "load-more-button": {
                                                "variant": "button-load-more-primary"
                                            },
                                            "load-more-button-author": {
                                                "variant": "button-load-more-primary"
                                            },
                                            "load-more-button-listicle": {
                                                "variant": "button-load-more-primary"
                                            },
                                            "load-more-button-overlay": {
                                                "variant": "button-load-more-primary"
                                            },
                                            "load-more-button-product-summary-view": {
                                                "variant": "button-load-more-primary"
                                            },
                                            "load-more-button-saved": {
                                                "variant": "button-load-more-primary"
                                            },
                                            "location-choice-menu-item-link": {
                                                "variant": "menu-primary"
                                            },
                                            "location-choice-sub-menu-item-link": {
                                                "variant": "menu-primary"
                                            },
                                            "marquee-body-text": {
                                                "\u0026 p": {
                                                    "margin": {
                                                        "_": "0 auto {s}",
                                                        "xlg": "0 auto"
                                                    }
                                                },
                                                "margin": "0 auto",
                                                "padding": {
                                                    "_": "0 {mobileOuterGutter}",
                                                    "md": "0 {tabletOuterGutter} {s}",
                                                    "xlg": "0 0 {l}"
                                                },
                                                "variant": "body-primary"
                                            },
                                            "marquee-content": {
                                                "textAlign": "center",
                                                "width": {
                                                    "smd": "34rem",
                                                    "xlg": "40rem"
                                                }
                                            },
                                            "marquee-logo": {
                                                "img": {
                                                    "height": { "lg": "auto" },
                                                    "maxHeight": {
                                                        "_": "5.625rem",
                                                        "lg": "8rem",
                                                        "md": "6.25rem",
                                                        "sm": "5.625rem",
                                                        "xlg": "9rem"
                                                    },
                                                    "transform": "translate3d(0,0,0)",
                                                    "width": "auto"
                                                },
                                                "textAlign": "center"
                                            },
                                            "media-poster-play-button": {
                                                "primary": "white"
                                            },
                                            "nav": {
                                                "bg": "white",
                                                "height": {
                                                    "\u003clg": "96px",
                                                    "lg": "48px"
                                                }
                                            },
                                            "nav-bar": {
                                                "alignItems": "center",
                                                "display": "flex",
                                                "height": "100%",
                                                "m": "0 auto",
                                                "maxWidth": "75rem",
                                                "px": "0",
                                                "width": "100%"
                                            },
                                            "nav-bar-link": {
                                                "variant": "button-secondary"
                                            },
                                            "nav-bar-login-text": {
                                                "variant": "button-secondary"
                                            },
                                            "nav-bar-top-list-container": {
                                                "borderBottom": {
                                                    "_": "border-thin-greyXlight",
                                                    "smd\u003e": "0"
                                                },
                                                "borderTop": {
                                                    "_": "border-thin-greyXlight",
                                                    "smd\u003e": "0"
                                                }
                                            },
                                            "nav-bar-top-list-item": {
                                                "padding": {
                                                    "_": "0 {l} 0 {m}",
                                                    "lg\u003e": "0 {m} 0 {m}"
                                                },
                                                "variant": "button-secondary"
                                            },
                                            "nav-bar-top-list-link": {
                                                "\u0026:hover": {
                                                    "textDecoration": "underline",
                                                    "textDecorationThickness": "0.0625rem",
                                                    "textUnderlineOffset": "0.25rem"
                                                },
                                                "color": {
                                                    "_": "inherit",
                                                    "smd\u003e": "inherit"
                                                },
                                                "lineHeight": "2.58918",
                                                "transition": "outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out"
                                            },
                                            "nav-bar-top-list-link-highlight": {
                                                "textDecoration": "underline",
                                                "textDecorationThickness": "0.0625rem",
                                                "textUnderlineOffset": "0.25rem"
                                            },
                                            "nav-header-title": {
                                                "variant": "ad-text-primary"
                                            },
                                            "nav-logo": {
                                                "height": { "md": "1.563rem" },
                                                "lineHeight": "0",
                                                "marginBottom": "0.125rem",
                                                "marginRight": {
                                                    "_": "auto",
                                                    "lg\u003e": "xxs"
                                                },
                                                "width": {
                                                    "\u003csm": "3.463rem",
                                                    "md": "4.329rem"
                                                }
                                            },
                                            "nav-search-button": {
                                                "margin": "xxs",
                                                "padding": {
                                                    "\u003csm": "0",
                                                    "sm": "xxs"
                                                }
                                            },
                                            "nav-side-panel-button": {
                                                "\u0026 img": {
                                                    "height": "iconSize.l",
                                                    "width": "iconSize.l"
                                                },
                                                "\u0026 svg": {
                                                    "height": "iconSize.l",
                                                    "width": "iconSize.l"
                                                },
                                                "\u0026:focus-visible": {
                                                    "outlineColor": "black"
                                                },
                                                "padding": {
                                                    "\u003cmd": "0.5rem {xxxs} 0.5rem {xs}",
                                                    "md": "0.5rem {xs} 0.5rem {xs}",
                                                    "xxs": "0.5rem {xxxs} 0.5rem 0"
                                                }
                                            },
                                            "nav-subscribe-link": {
                                                "\u0026:focus-visible": {
                                                    "outlineColor": "nav-subscribe-link-focus"
                                                },
                                                "variant": "button-contained"
                                            },
                                            "newsletter-content-back-button": {
                                                "p": "0.75rem {xl}",
                                                "variant": "button-contained"
                                            },
                                            "newsletter-content-button": {
                                                "flexShrink": "0",
                                                "p": "0.75rem {xl}",
                                                "variant": "button-contained"
                                            },
                                            "newsletter-content-email-icon": {
                                                "primary": "greyXXXdark"
                                            },
                                            "newsletter-content-footer-terms-of-use": {
                                                "margin": "{xs} {m} {m} 0",
                                                "textAlign": "left",
                                                "variant": "ad-text-primary"
                                            },
                                            "newsletter-content-headline": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-30",
                                                    "lg": "font-size-40",
                                                    "md": "font-size-38"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "md": "lineheight-xs"
                                                }
                                            },
                                            "newsletter-content-sub-headline": {
                                                "fontFamily": "DekPrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-18",
                                                    "lg": "font-size-20"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-md",
                                                    "lg": "lineheight-sm"
                                                }
                                            },
                                            "newsletter-content-wrapper": {
                                                "background": "white",
                                                "padding": {
                                                    "\u003cmd": "l",
                                                    "md\u003e": "3rem {l}"
                                                }
                                            },
                                            "newsletter-feedpage-container": {
                                                "margin": "center",
                                                "maxWidth": "75rem",
                                                "padding": {
                                                    "lg": "0",
                                                    "md": "tablet-gutter",
                                                    "xxs": "mobile-gutter"
                                                }
                                            },
                                            "newsletter-feedpage-email-wrapper": {
                                                "alignItems": {
                                                    "\u003csm": "center",
                                                    "sm\u003e": "flex-end"
                                                },
                                                "columnGap": "1rem",
                                                "flexDirection": {
                                                    "_": "column",
                                                    "sm": "row"
                                                }
                                            },
                                            "newsletter-feedpage-wrapper": {
                                                "form": {
                                                    "\u003e div": {
                                                        "alignItems": {
                                                            "\u003csm": "center",
                                                            "sm": "flex-start"
                                                        }
                                                    },
                                                    "alignItems": "flex-start"
                                                },
                                                "py": "2.5rem",
                                                "width": "100%"
                                            },
                                            "newsletter-wrapper": {
                                                "backgroundImage": "url('/_assets/design-tokens/PR-143/1a74f8d/fre/static/images/marketing/bg-newsletter.jpg')"
                                            },
                                            "photo-credit-copyright": {
                                                "pr": "xxs",
                                                "variant": "byline-secondary"
                                            },
                                            "photo-credit-creditor": {
                                                "pr": "xxs",
                                                "variant": "byline-secondary"
                                            },
                                            "photo-credit-divider": {
                                                "pr": "xxs",
                                                "variant": "byline-secondary"
                                            },
                                            "photo-credit-figcaption-lead-image": {
                                                "paddingLeft": {
                                                    "\u003clg": "s",
                                                    "lg": "0"
                                                }
                                            },
                                            "popover-avatar-button": {
                                                "bg": "bg-avatar",
                                                "border": "border-avatar",
                                                "color": "text-avatar",
                                                "variant": "dropdown-text-primary"
                                            },
                                            "popover-label-headline": {
                                                "variant": "dropdown-text-primary"
                                            },
                                            "popover-trigger": {
                                                "background": "white",
                                                "border": "border-dropdown",
                                                "variant": "dropdown-text-primary"
                                            },
                                            "privacy-disclosure-content-wrapper": {
                                                "[data-theme-key='button-primary']": {
                                                    "\u0026:hover": {
                                                        "bg": "transparent"
                                                    }
                                                },
                                                "bg": "black"
                                            },
                                            "search-input-button": {
                                                "marginLeft": "xxs",
                                                "marginTop": "0",
                                                "variant": "button-contained"
                                            },
                                            "search-input-button-icon": {
                                                "primary": ["white", "black"]
                                            },
                                            "search-input-container": {},
                                            "search-input-field": {
                                                "bg": "greyXlight",
                                                "border": "none",
                                                "borderBottom": "border-thin-greyDark",
                                                "height": "2.6rem",
                                                "variant": "overlay-item-text"
                                            },
                                            "search-nav-button-icon": {
                                                "\u0026:hover": {
                                                    "border": "0"
                                                },
                                                "border": "0"
                                            },
                                            "search-nav-container": {
                                                "borderBottom": "border-xs-black",
                                                "div": {
                                                    "\u0026:focus-within": {
                                                        "outline": "0"
                                                    },
                                                    "border": "0",
                                                    "borderBottom": "border-none-transparent"
                                                },
                                                "top": {
                                                    "lg": "3rem",
                                                    "xxs:md": "3.5rem"
                                                }
                                            },
                                            "search-nav-input-field": {
                                                "variant": "button-secondary"
                                            },
                                            "search-overlay-list-container": {
                                                "boxShadow": "shadow-modal"
                                            },
                                            "search-overlay-list-item": {
                                                "variant": "overlay-item-text"
                                            },
                                            "search-overlay-list-item-selected": {
                                                "paddingX": "xxxs",
                                                "variant": "overlay-item-text"
                                            },
                                            "search-results-count": {
                                                "variant": "body-primary"
                                            },
                                            "share-social-button": {
                                                "\u0026img": {
                                                    "primary": "white"
                                                }
                                            },
                                            "side-panel-menu": {
                                                "variant": "menu-primary"
                                            },
                                            "side-panel-search-button": {
                                                "height": "iconSize.xxs",
                                                "width": "iconSize.xxs"
                                            },
                                            "side-panel-search-text": {
                                                "color": "sidepanel-text",
                                                "variant": "menu-primary"
                                            },
                                            "side-panel-sub-menu": {
                                                "variant": "menu-primary"
                                            },
                                            "sidepanel-close-btn": {
                                                "border": "0"
                                            },
                                            "skip-to-content-link": {
                                                "border": "border-medium-white",
                                                "boxShadow": "0 0 0 3px #55adff",
                                                "variant": "button-quaternary"
                                            },
                                            "skip-to-section-link-anchor": {
                                                "a": {
                                                    "transition": "color 0.3s ease-in-out"
                                                },
                                                "a:hover": {
                                                    "color": "greyXdark"
                                                },
                                                "variant": "button-secondary"
                                            },
                                            "skip-to-section-link-nav-container": {
                                                "borderBottom": "border-thin-grey",
                                                "borderTop": "border-thin-grey"
                                            },
                                            "sponsor-bar": {
                                                "variant": "ad-text-primary"
                                            },
                                            "sponsor-label": {
                                                "mb": "xxs",
                                                "textTransform": "none",
                                                "variant": "ad-text-primary"
                                            },
                                            "sponsor-logo-separator": {
                                                "color": "greyXXXdark",
                                                "p": "0 {xs} 0 {s}",
                                                "variant": "ad-text-primary"
                                            },
                                            "spotlight-details": {
                                                "alignSelf": "flex-end",
                                                "background": "transparent",
                                                "m": {
                                                    "_": "0 {xs} {s}",
                                                    "md": "0 0 {m}"
                                                },
                                                "px": { "_": "s", "md": "xl" },
                                                "textAlign": "center"
                                            },
                                            "spotlight-hed": {
                                                "\u0026:hover": {
                                                    "color": "brandColorPrimary",
                                                    "transition": "color 0.3s ease-in-out"
                                                },
                                                "p": "0.6rem {m}",
                                                "variant": "subheadline-secondary"
                                            },
                                            "spotlight-label": {
                                                "variant": "label-secondary"
                                            },
                                            "spotlight-logo": {
                                                "\u0026 img": {
                                                    "height": "1.6rem"
                                                }
                                            },
                                            "statement-block": {
                                                "paddingY": {
                                                    "\u003csm": "{*sizes.primitive-32}",
                                                    "md": "{*sizes.primitive-32}"
                                                }
                                            },
                                            "syndicated-link-link": {
                                                "variant": "body-primary"
                                            },
                                            "syndicated-link-text": {
                                                "variant": "body-primary"
                                            },
                                            "text-block-container": {
                                                "bg": "bg-block-content-text",
                                                "p": "0 {s}"
                                            },
                                            "three-column": {
                                                "bg": "bg-block-three-col",
                                                "pb": {
                                                    "lg": "2.5rem",
                                                    "md": "1.5625rem"
                                                },
                                                "pt": {
                                                    "\u003csm": "0",
                                                    "lg": "m",
                                                    "md": "1.5625rem",
                                                    "sm": "xs"
                                                }
                                            },
                                            "vertical-playlist-item-title": {
                                                "fontFamily": "BylinePrimary",
                                                "fontSize": "font-size-18",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "vertical-playlist-title": {
                                                "display": "block",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": "font-size-15",
                                                "letterSpacing": "letter-spacing-6",
                                                "lineHeight": "lineheight-base",
                                                "textTransform": "uppercase"
                                            },
                                            "video-hub-byline": {
                                                "variant": "byline-primary"
                                            },
                                            "video-hub-title": {
                                                "variant": "item-title-stacked-feature-big-story-feed"
                                            },
                                            "watch-next-player-title": {
                                                "variant": "label-primary"
                                            },
                                            "watch-next-player-video-title": {
                                                "variant": "title-tertiary"
                                            },
                                            "watch-next-player-wrapper": {
                                                "my": "l"
                                            },
                                            "wide-marquee-content": {
                                                "bottom": "initial",
                                                "height": "100%",
                                                "m": "0",
                                                "width": "100%"
                                            },
                                            "wide-marquee-label": {
                                                "margin": "{xs} auto",
                                                "variant": "label-tag-primary"
                                            },
                                            "wide-marquee-label-container": {},
                                            "wide-marquee-title": {
                                                "bg": "white",
                                                "bottom": "0",
                                                "color": "black",
                                                "display": "unset",
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-45",
                                                    "lg": "font-size-60",
                                                    "sm": "font-size-45"
                                                },
                                                "fontWeight": "normal",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-base",
                                                    "sm": "lineheight-base"
                                                },
                                                "mb": {
                                                    "\u003csm": "m",
                                                    "lg": "2.5rem",
                                                    "sm": "l"
                                                },
                                                "p": {
                                                    "\u003csm": "{l} {l} {m}",
                                                    "_": "{xs}",
                                                    "lg": "2.3rem {l} 1.5rem",
                                                    "sm": "{l} {l} {m}"
                                                },
                                                "position": "absolute",
                                                "textAlign": "left",
                                                "variant": "headline-secondary"
                                            },
                                            "wide-marquee-title-only": {
                                                "variant": "headline-secondary"
                                            }
                                        },
                                        "variants": {
                                            "ad-leaderboard-wrapper": {
                                                "minHeight": { "md": "121px" }
                                            },
                                            "ad-text-primary": {
                                                "a": {
                                                    "\u0026:hover": {
                                                        "color": "color-link-body-hover",
                                                        "textDecorationColor": "border-link-body-hover"
                                                    },
                                                    "color": "inherit",
                                                    "textDecoration": "underline",
                                                    "textDecorationColor": "inherit",
                                                    "textDecorationThickness": "0.0625rem",
                                                    "textUnderlineOffset": "0.25rem",
                                                    "transition": "color 0.3s ease-in-out"
                                                },
                                                "fontFamily": "AdTextPrimary",
                                                "fontSize": "font-size-11",
                                                "lineHeight": "lineheight-md",
                                                "textTransform": "none"
                                            },
                                            "ad-wrapper": {
                                                "minHeight": {
                                                    "_": "523px",
                                                    "md": "138px"
                                                }
                                            },
                                            "body-2xl": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-60",
                                                    "lg": "font-size-80",
                                                    "md": "font-size-60"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-base",
                                                    "lg": "lineheight-base",
                                                    "md": "lineheight-base"
                                                }
                                            },
                                            "body-2xs": {
                                                "fontSize": "font-size-14",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "body-3xl": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-60",
                                                    "lg": "font-size-96",
                                                    "md": "font-size-60"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-base",
                                                    "lg": "lineheight-base",
                                                    "md": "lineheight-base"
                                                }
                                            },
                                            "body-3xs": {
                                                "fontSize": "font-size-12",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "body-4xs": {
                                                "fontSize": "font-size-11",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "body-l": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-22",
                                                    "lg": "font-size-24",
                                                    "md": "font-size-22"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-xs"
                                                }
                                            },
                                            "body-m": {
                                                "fontSize": "font-size-19",
                                                "lineHeight": "lineheight-xxlg"
                                            },
                                            "body-primary": {
                                                "\u0026 em": {
                                                    "fontFamily": "BodyPrimary",
                                                    "fontStyle": "italic"
                                                },
                                                "\u0026 strong": {
                                                    "fontFamily": "BodyPrimary",
                                                    "fontWeight": "bold"
                                                },
                                                "fontFamily": "BodyPrimary",
                                                "fontSize": "font-size-19",
                                                "lineHeight": "lineheight-xxlg"
                                            },
                                            "body-s": {
                                                "fontSize": "font-size-18",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "body-secondary": {
                                                "\u0026 em": {
                                                    "fontFamily": "BodyTertiary",
                                                    "fontStyle": "italic"
                                                },
                                                "fontFamily": "BodyPrimary",
                                                "fontSize": "font-size-16",
                                                "lineHeight": "lineheight-lg"
                                            },
                                            "body-tertiary": {
                                                "fontFamily": "DekPrimary",
                                                "fontSize": "font-size-16",
                                                "lineHeight": "lineheight-lg"
                                            },
                                            "body-xl": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-28",
                                                    "lg": "font-size-36",
                                                    "md": "font-size-28"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "md": "lineheight-xs"
                                                }
                                            },
                                            "body-xs": {
                                                "fontSize": "font-size-16",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "breadcrumbs-link-primary": {
                                                "\u0026:hover": {
                                                    "color": "black",
                                                    "textDecoration": "underline",
                                                    "textDecorationThickness": "0.0625rem",
                                                    "textUnderlineOffset": "0.25rem"
                                                },
                                                "textDecoration": "underline",
                                                "textDecorationThickness": "0.0625rem",
                                                "textUnderlineOffset": "0.25rem",
                                                "transition": "all 0.3s ease-in-out"
                                            },
                                            "breadcrumbs-primary": {
                                                "color": "greyXXdark",
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-11",
                                                "lineHeight": "lineheight-md"
                                            },
                                            "button-contained": {
                                                "\u0026:focus": {
                                                    "outline": "outline-focus-black",
                                                    "outlineOffset": "{*sizes.outlineOffset.outline-offset-s}"
                                                },
                                                "\u0026:hover": {
                                                    "bg": "white",
                                                    "border": "border-xxs-black",
                                                    "svg \u003e path , svg": {
                                                        "fill": "black",
                                                        "stroke": "black"
                                                    }
                                                },
                                                "bg": "brandColorPrimary",
                                                "border": "border-xxs-black",
                                                "borderRadius": "0",
                                                "color": "white",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": "font-size-14",
                                                "letterSpacing": "letter-spacing-base",
                                                "lineHeight": "lineheight-xs",
                                                "textDecoration": "none",
                                                "textTransform": "none",
                                                "transition": "all 0.3s ease-in-out",
                                                "width": "auto"
                                            },
                                            "button-discount-contained": {
                                                "\u0026:hover": {
                                                    "bg": "bg-discount",
                                                    "border": "unset"
                                                },
                                                "bg": "bg-discount",
                                                "border": "unset",
                                                "fontFamily": "LabelPrimary",
                                                "outline": "0.125rem dotted {*colors.greenDark}",
                                                "textTransform": "uppercase"
                                            },
                                            "button-discount-contained-OnDark": {
                                                "\u0026:hover": {
                                                    "bg": "bg-discount-onDark",
                                                    "border": "unset"
                                                },
                                                "bg": "bg-discount-onDark",
                                                "border": "unset",
                                                "fontFamily": "LabelPrimary",
                                                "outline": "0.125rem dotted {*colors.greenLight}",
                                                "textTransform": "uppercase"
                                            },
                                            "button-discount-outline": {
                                                "\u0026:hover": {
                                                    "bg": "bg-discount",
                                                    "border": "unset"
                                                },
                                                "bg": "unset",
                                                "border": "unset",
                                                "color": "text-discount",
                                                "fontFamily": "LabelPrimary",
                                                "outline": "0.125rem dotted {*colors.greenDark}",
                                                "textTransform": "uppercase"
                                            },
                                            "button-discount-outline-OnDark": {
                                                "\u0026:hover": {
                                                    "bg": "bg-discount-onDark",
                                                    "border": "unset"
                                                },
                                                "bg": "unset",
                                                "border": "unset",
                                                "color": "text-discount-onDark",
                                                "fontFamily": "LabelPrimary",
                                                "outline": "0.125rem dotted {*colors.greenLight}",
                                                "textTransform": "uppercase"
                                            },
                                            "button-load-more-primary": {
                                                "\u0026:hover": {
                                                    "bg": "greyLight"
                                                },
                                                "bg": "white",
                                                "border": "border-thin-black",
                                                "borderRadius": "xxxs",
                                                "color": "black",
                                                "fontFamily": "LabelPrimary",
                                                "textTransform": "uppercase",
                                                "transition": "all 0.3s ease-in-out",
                                                "width": "100%"
                                            },
                                            "button-outline": {
                                                "\u0026:focus": {
                                                    "outline": "outline-focus-black",
                                                    "outlineOffset": "{*sizes.outlineOffset.outline-offset-s}"
                                                },
                                                "\u0026:hover": {
                                                    "bg": "greyLight",
                                                    "border": "border-xxs-black",
                                                    "color": "black"
                                                },
                                                "bg": "white",
                                                "border": "border-xxs-black",
                                                "borderRadius": "0",
                                                "color": "black",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": "font-size-14",
                                                "letterSpacing": "letter-spacing-base",
                                                "lineHeight": "lineheight-xs",
                                                "svg \u003e path": {
                                                    "fill": "black"
                                                },
                                                "textDecoration": "none",
                                                "textTransform": "none",
                                                "transition": "all 0.3s ease-in-out",
                                                "width": "auto"
                                            },
                                            "button-primary": {
                                                "\u0026:focus": {
                                                    "outline": "outline-focus-black"
                                                },
                                                "\u0026:hover": {
                                                    "bg": "white"
                                                },
                                                "bg": "brandColorPrimary",
                                                "border": "border-xxs-black",
                                                "borderRadius": "0",
                                                "color": "white",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": "font-size-14",
                                                "letterSpacing": "letter-spacing-base",
                                                "lineHeight": "lineheight-xs",
                                                "mt": "xs",
                                                "p": {
                                                    "\u003csm": "{xs} 1rem",
                                                    "lg": "0.75rem 1.5625rem",
                                                    "md": "0.75rem 1.5625rem"
                                                },
                                                "textTransform": "none",
                                                "transition": "all 0.3s ease-in-out",
                                                "width": "auto"
                                            },
                                            "button-quaternary": {
                                                "bg": "black",
                                                "borderRadius": "l",
                                                "fontFamily": "AdTextPrimary",
                                                "fontSize": "font-size-14",
                                                "fontWeight": "bold",
                                                "lineHeight": "lineheight-base",
                                                "p": "{xs} {m}",
                                                "width": "auto"
                                            },
                                            "button-secondary": {
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-12",
                                                "letterSpacing": "letter-spacing-10",
                                                "textTransform": "uppercase"
                                            },
                                            "button-text": {
                                                "\u0026:focus": {
                                                    "outline": "outline-focus-black",
                                                    "outlineOffset": "{*sizes.outlineOffset.outline-offset-s}"
                                                },
                                                "\u0026:hover": {
                                                    "background": "none",
                                                    "border": "border-none-transparent",
                                                    "color": "greyXXdark",
                                                    "textDecorationColor": "greyXXdark"
                                                },
                                                "bg": "white",
                                                "border": "border-none-transparent",
                                                "color": "black",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": "font-size-14",
                                                "letterSpacing": "letter-spacing-base",
                                                "lineHeight": "lineheight-xs",
                                                "textDecoration": "underline",
                                                "textDecorationThickness": "0.0625rem",
                                                "textTransform": "none",
                                                "textUnderlineOffset": "0.25rem",
                                                "transition": "all 0.3s ease-in-out",
                                                "width": "auto"
                                            },
                                            "button-text-onDark": {
                                                "\u0026:focus": {
                                                    "outline": "outline-focus-white"
                                                },
                                                "\u0026:hover": {
                                                    "color": "neutral-300",
                                                    "textDecorationColor": "neutral-300"
                                                },
                                                "color": "white",
                                                "fontSize": "font-size-11",
                                                "lineHeight": "lineheight-sm",
                                                "variant": "button-text"
                                            },
                                            "byline-capitalize-primary": {
                                                "fontFamily": "BylinePrimary",
                                                "fontSize": "font-size-12",
                                                "lineHeight": "lineheight-md",
                                                "textTransform": "capitalize"
                                            },
                                            "byline-link-primary": {
                                                "\u0026:hover": {
                                                    "color": "black",
                                                    "textDecoration": "underline",
                                                    "textDecorationThickness": "0.0625rem",
                                                    "textUnderlineOffset": "0.25rem"
                                                },
                                                "textDecoration": "underline",
                                                "textDecorationThickness": "0.0625rem",
                                                "textUnderlineOffset": "0.25rem",
                                                "transition": "all 0.3s ease-in-out"
                                            },
                                            "byline-lowercase-primary": {
                                                "fontFamily": "BylinePrimary",
                                                "fontSize": "font-size-12",
                                                "lineHeight": "lineheight-md",
                                                "textTransform": "lowercase"
                                            },
                                            "byline-primary": {
                                                "fontFamily": "BylinePrimary",
                                                "fontSize": "font-size-11",
                                                "letterSpacing": "letter-spacing-10",
                                                "lineHeight": "lineheight-xxlg",
                                                "textTransform": "uppercase"
                                            },
                                            "byline-secondary": {
                                                "color": "greyXdark",
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-11",
                                                "fontWeight": "500",
                                                "lineHeight": "lineheight-sm",
                                                "textTransform": "uppercase"
                                            },
                                            "byline-transform-none-primary": {
                                                "fontFamily": "BylinePrimary",
                                                "fontSize": "font-size-12",
                                                "lineHeight": "lineheight-md",
                                                "textTransform": "none"
                                            },
                                            "byline-uppercase-primary": {
                                                "fontFamily": "BylinePrimary",
                                                "fontSize": "font-size-11",
                                                "letterSpacing": "letter-spacing-10",
                                                "lineHeight": "lineheight-md",
                                                "textTransform": "uppercase"
                                            },
                                            "chip-label": {
                                                "fontFamily": "",
                                                "fontSize": "font-size-11",
                                                "lineHeight": "lineheight-base"
                                            },
                                            "content-header-byline-image-left-right-name": {
                                                "a": {
                                                    "textDecoration": {
                                                        "md": "none"
                                                    }
                                                },
                                                "a:hover": {
                                                    "color": { "md": "grey" }
                                                }
                                            },
                                            "dek-primary": {
                                                "fontFamily": "DekPrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-18",
                                                    "lg": "font-size-17",
                                                    "sm": "font-size-15",
                                                    "xlg": "font-size-18"
                                                },
                                                "letterSpacing": "letter-spacing-3",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xlg",
                                                    "lg": "lineheight-xlg",
                                                    "sm": "lineheight-xlg",
                                                    "xlg": "lineheight-xlg"
                                                },
                                                "mb": { "lg": "s" }
                                            },
                                            "dropdown-text-primary": {
                                                "fontFamily": "MenuPrimary",
                                                "fontSize": "font-size-14",
                                                "lineHeight": "lineheight-max",
                                                "textTransform": "capitalize"
                                            },
                                            "four-across-block-content-ad": {
                                                "bps": [
                                                    {
                                                        "options": {
                                                            "size": "sm"
                                                        },
                                                        "value": {
                                                            "gridGap": "m"
                                                        }
                                                    },
                                                    {
                                                        "options": {
                                                            "size": "md"
                                                        },
                                                        "value": {
                                                            "gridGap": "m"
                                                        }
                                                    },
                                                    {
                                                        "options": {
                                                            "size": "lg"
                                                        },
                                                        "value": {
                                                            "gridGap": "1.5625rem"
                                                        }
                                                    }
                                                ]
                                            },
                                            "four-across-block-content-no-ad": {
                                                "bps": [
                                                    {
                                                        "options": {
                                                            "size": "sm"
                                                        },
                                                        "value": {
                                                            "gridGap": "s",
                                                            "gridTemplateColumns": "repeat(4, 1fr)"
                                                        }
                                                    },
                                                    {
                                                        "options": {
                                                            "size": "md"
                                                        },
                                                        "value": {
                                                            "gridGap": "s"
                                                        }
                                                    },
                                                    {
                                                        "options": {
                                                            "size": "lg"
                                                        },
                                                        "value": {
                                                            "gridGap": "1.5625rem"
                                                        }
                                                    }
                                                ]
                                            },
                                            "headline-2xl": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-36",
                                                    "lg": "font-size-48",
                                                    "md": "font-size-36"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-xs"
                                                }
                                            },
                                            "headline-2xs": {
                                                "fontSize": "font-size-16",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "headline-3xl": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-48",
                                                    "lg": "font-size-60",
                                                    "md": "font-size-48"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-sm"
                                                }
                                            },
                                            "headline-3xs": {
                                                "fontSize": "font-size-14",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "headline-l": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-24",
                                                    "lg": "font-size-28",
                                                    "md": "font-size-24"
                                                },
                                                "fontWeight": "bold",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "md": "lineheight-xs"
                                                }
                                            },
                                            "headline-m": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-22",
                                                    "lg": "font-size-24",
                                                    "md": "font-size-22"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-xs"
                                                }
                                            },
                                            "headline-primary": {
                                                "a": {
                                                    "\u0026:hover": {
                                                        "color": {
                                                            "\u003clg": "brandColorTertiary",
                                                            "lg": "black"
                                                        },
                                                        "fontStyle": {
                                                            "lg": "italic"
                                                        }
                                                    }
                                                },
                                                "fontFamily": "HeadlinePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-45",
                                                    "lg": "4.99855",
                                                    "sm": "font-size-45",
                                                    "xlg": "5.08409"
                                                },
                                                "fontWeight": "normal",
                                                "letterSpacing": "letter-spacing-n2",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xxsmall",
                                                    "lg": "lineheight-xxsmall",
                                                    "sm": "lineheight-xxsmall",
                                                    "xlg": "lineheight-base"
                                                }
                                            },
                                            "headline-quaternary": {
                                                "borderBottom": "border-xxs-grey",
                                                "borderTop": "border-xxs-grey",
                                                "fontFamily": "primary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-12",
                                                    "sm": "font-size-14"
                                                },
                                                "letterSpacing": {
                                                    "\u003csm": "letter-spacing-20",
                                                    "sm": "letter-spacing-10"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-lg",
                                                    "sm": "lineheight-lg"
                                                },
                                                "mt": "revert",
                                                "py": "l",
                                                "textTransform": "uppercase"
                                            },
                                            "headline-quinary": {
                                                "fontFamily": "secondary",
                                                "fontSize": "font-size-20",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "headline-s": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-20",
                                                    "lg": "font-size-22",
                                                    "md": "font-size-20"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-sm"
                                                }
                                            },
                                            "headline-secondary": {
                                                "fontFamily": "TitlePrimary",
                                                "textTransform": "uppercase"
                                            },
                                            "headline-senary": {
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003cmd": "font-size-38",
                                                    "lg": "font-size-48",
                                                    "md": "font-size-38",
                                                    "xlg": "font-size-48"
                                                },
                                                "fontWeight": "normal",
                                                "letterSpacing": {
                                                    "lg": "letter-spacing-n3"
                                                },
                                                "lineHeight": {
                                                    "\u003cmd": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-sm",
                                                    "xlg": "lineheight-sm"
                                                }
                                            },
                                            "headline-septenary": {
                                                "fontFamily": "tertiary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-40",
                                                    "lg": "font-size-60",
                                                    "md": "font-size-48"
                                                },
                                                "fontWeight": "400",
                                                "letterSpacing": "letter-spacing-1",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-base",
                                                    "lg": "lineheight-base",
                                                    "md": "lineheight-base"
                                                },
                                                "textTransform": "uppercase"
                                            },
                                            "headline-tertiary": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-38",
                                                    "lg": "font-size-48",
                                                    "md": "font-size-38",
                                                    "xlg": "font-size-48"
                                                },
                                                "fontWeight": "normal",
                                                "letterSpacing": {
                                                    "lg": "letter-spacing-n3"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-sm",
                                                    "xlg": "lineheight-sm"
                                                }
                                            },
                                            "headline-xl": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-28",
                                                    "lg": "font-size-36",
                                                    "md": "font-size-28"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "md": "lineheight-xs"
                                                }
                                            },
                                            "headline-xs": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-18",
                                                    "lg": "font-size-20",
                                                    "md": "font-size-18"
                                                },
                                                "fontWeight": "bold",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-sm"
                                                }
                                            },
                                            "item-ad-three-column": {
                                                "gridTemplateColumns": "40% 1fr",
                                                "p": {
                                                    "\u003csm": "{m} 0 {xs}",
                                                    "lg": "{m} 0 {xs}",
                                                    "sm": "{s} 0 {xxs}"
                                                }
                                            },
                                            "item-big-story-feed": {
                                                "p": "0",
                                                "textAlign": "center"
                                            },
                                            "item-byline-ad-three-column": {
                                                "display": "block",
                                                "m": "{xs} 0 {xxs}"
                                            },
                                            "item-byline-column-big-story-feed": {
                                                "display": "block",
                                                "m": "{xs} 0 {xxs}"
                                            },
                                            "item-byline-four-across": {
                                                "display": "block",
                                                "m": "{xs} 0 {xxs}"
                                            },
                                            "item-byline-noimage-basefeed-big-story-feed": {
                                                "display": {
                                                    "lg": "inline-block",
                                                    "sm": "block"
                                                },
                                                "m": {
                                                    "\u003csm": "{xs} 0 {xxs}",
                                                    "sm": "0 0 {xxxs}"
                                                }
                                            },
                                            "item-byline-noimage-feature-big-story-feed": {
                                                "display": {
                                                    "lg": "inline-block",
                                                    "sm": "block"
                                                },
                                                "m": {
                                                    "\u003csm": "{xxs} 0",
                                                    "sm": "{xxxs} 0"
                                                }
                                            },
                                            "item-byline-stacked-basefeed-big-story-feed": {
                                                "display": "block",
                                                "m": "{xs} 0 {xxxs}"
                                            },
                                            "item-byline-three-column": {
                                                "display": "block",
                                                "m": "{xs} 0 {xxs}"
                                            },
                                            "item-column-right-basefeed-big-story-feed": {
                                                "bps": [
                                                    {
                                                        "options": {
                                                            "size": "\u003csm"
                                                        },
                                                        "value": {
                                                            "borderTop": "border-xxs-grey",
                                                            "gridTemplateColumns": "35% 1fr",
                                                            "p": "{m} 0 {xs}"
                                                        }
                                                    },
                                                    {
                                                        "options": {
                                                            "size": "sm"
                                                        },
                                                        "value": {
                                                            "border": "border-none-transparent"
                                                        }
                                                    },
                                                    {
                                                        "options": {
                                                            "size": "lg"
                                                        },
                                                        "value": {
                                                            "gridTemplateColumns": "30% 1fr"
                                                        }
                                                    },
                                                    { "value": { "p": "0" } },
                                                    {
                                                        "value": {
                                                            "gridTemplateColumns": "35% 1fr"
                                                        }
                                                    },
                                                    {
                                                        "value": {
                                                            "p": "0 0 {xs}"
                                                        }
                                                    }
                                                ]
                                            },
                                            "item-content-big-story-feed": {
                                                "bg": "bg-block-content-big-story-feed-colright-feature",
                                                "p": {
                                                    "\u003csm": "1.5625rem 0",
                                                    "lg": "m",
                                                    "sm": "1.5625rem {l} {m}",
                                                    "xlg": "{l} 4rem"
                                                },
                                                "textAlign": "center"
                                            },
                                            "item-content-column-right-basefeed-big-story-feed": {
                                                "bg": "bg-block-content-big-story-feed-colright-basefeed",
                                                "pl": { "lg": "xxs" }
                                            },
                                            "item-content-four-across": {
                                                "bg": "bg-block-content-four-across"
                                            },
                                            "item-content-imageright-ad-big-story": {
                                                "bg": "bg-block-content-big-story-imageright-ad",
                                                "p": {
                                                    "\u003csm": "1.5625rem {xs}",
                                                    "lg": "{l} {s}",
                                                    "sm": "0 2rem"
                                                },
                                                "textAlign": "center"
                                            },
                                            "item-content-imageright-big-story": {
                                                "bg": "bg-block-content-big-story-imageright",
                                                "p": {
                                                    "\u003csm": "1.5625rem 0",
                                                    "lg": "0 3rem",
                                                    "sm": "0 2rem",
                                                    "xlg": "0 6rem"
                                                },
                                                "textAlign": "center"
                                            },
                                            "item-content-noimage-ad-big-story": {
                                                "bg": "bg-block-content-big-story-noimage-ad"
                                            },
                                            "item-content-noimage-basefeed-big-story-feed": {
                                                "bg": "bg-block-content-big-story-feed-noimage-basefeed",
                                                "borderBottom": "border-xxs-grey",
                                                "p": {
                                                    "\u003csm": "{s} 0 {xxs}",
                                                    "lg": "{xxs} 0",
                                                    "sm": "{s} 0 {xxs}"
                                                },
                                                "textAlign": "center"
                                            },
                                            "item-content-noimage-big-story": {
                                                "bg": "black",
                                                "h2 span": {
                                                    "\u0026:hover": {
                                                        "color": "link-hover-item-title-secondary"
                                                    }
                                                },
                                                "ml": {
                                                    "\u003csm": "-0.938rem",
                                                    "sm": "0"
                                                },
                                                "p": {
                                                    "\u003csm": "3.125rem 0.938rem 2rem",
                                                    "lg": "2.5rem 6rem 1rem",
                                                    "sm": "2.5rem 2.5rem 1.5rem",
                                                    "xlg": "3.5rem 7rem 1.5rem"
                                                },
                                                "textAlign": "center",
                                                "width": {
                                                    "\u003csm": "100vw",
                                                    "sm": "100%"
                                                }
                                            },
                                            "item-content-noimage-feature-big-story-feed": {
                                                "bg": "bg-block-content-big-story-feed-noimage-feature",
                                                "textAlign": "center"
                                            },
                                            "item-content-stacked-basefeed-big-story-feed": {
                                                "bg": "bg-block-content-big-story-feed-stacked-basefeed"
                                            },
                                            "item-content-stacked-feature-big-story-feed": {
                                                "bg": "bg-block-content-big-story-feed-stacked-feature",
                                                "p": {
                                                    "\u003csm": "1.5625rem 0",
                                                    "lg": "{l} 0",
                                                    "sm": "1.5625rem 0 {m}",
                                                    "xlg": "{l} 0"
                                                },
                                                "textAlign": "center"
                                            },
                                            "item-content-three-column": {
                                                "bg": "bg-block-content-three-col"
                                            },
                                            "item-content-under-ad-big-story": {
                                                "bg": "bg-block-content-big-story-under-ad",
                                                "p": {
                                                    "\u003csm": "1.5625rem 0",
                                                    "lg": "{m} {s}",
                                                    "sm": "1.5625rem 0 0"
                                                },
                                                "textAlign": "center"
                                            },
                                            "item-content-under-big-story": {
                                                "bg": "bg-block-content-big-story-under",
                                                "p": {
                                                    "\u003csm": "1.5625rem 0",
                                                    "lg": "{l} 0 0",
                                                    "sm": "1.5625rem 0 0"
                                                },
                                                "textAlign": "center"
                                            },
                                            "item-dek-column-right-feature-ad-big-story-feed": {
                                                "paddingTop": {
                                                    "_": "xxs",
                                                    "md": "xs"
                                                }
                                            },
                                            "item-dek-column-right-feature-big-story-feed": {
                                                "paddingTop": {
                                                    "_": "xxs",
                                                    "md": "xs"
                                                }
                                            },
                                            "item-dek-four-across": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-16",
                                                    "lg": "font-size-15",
                                                    "sm": "font-size-15",
                                                    "xlg": "font-size-15"
                                                },
                                                "letterSpacing": "letter-spacing-2",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-lg",
                                                    "lg": "lineheight-lg",
                                                    "sm": "lineheight-lg",
                                                    "xlg": "lineheight-lg"
                                                },
                                                "m": {
                                                    "\u003csm": "{xs} 0",
                                                    "lg": "0 0 {s}",
                                                    "sm": "{xs} 0 {s}",
                                                    "xlg": "0.75rem 0 {s}"
                                                }
                                            },
                                            "item-dek-imageright-ad-big-story": {
                                                "pb": { "\u003csm": "0.45rem" }
                                            },
                                            "item-dek-imageright-big-story": {
                                                "mb": { "lg": "0" },
                                                "p": {
                                                    "\u003csm": "{xxs} 0 0.45rem",
                                                    "sm": "{xs} 0 {s}"
                                                }
                                            },
                                            "item-dek-noimage-feature-ad-big-story-feed": {
                                                "paddingTop": {
                                                    "_": "xxs",
                                                    "md": "xs"
                                                }
                                            },
                                            "item-dek-noimage-feature-big-story-feed": {
                                                "paddingTop": {
                                                    "_": "xxs",
                                                    "md": "xs"
                                                }
                                            },
                                            "item-dek-stacked-feature-ad-big-story-feed": {
                                                "paddingTop": {
                                                    "_": "xxs",
                                                    "md": "xs"
                                                }
                                            },
                                            "item-dek-stacked-feature-big-story-feed": {
                                                "paddingTop": {
                                                    "_": "xxs",
                                                    "md": "xs"
                                                }
                                            },
                                            "item-dek-under-ad-big-story": {
                                                "pb": { "\u003csm": "0.45rem" }
                                            },
                                            "item-dek-under-big-story": {
                                                "pb": { "\u003csm": "0.45rem" }
                                            },
                                            "item-header-three-column": {
                                                "border": {
                                                    "sm": "border-none-transparent"
                                                },
                                                "borderTop": "border-none-transparent",
                                                "mb": {
                                                    "\u003clg": "0",
                                                    "lg": "xxs",
                                                    "xlg": "xxs"
                                                },
                                                "p": {
                                                    "\u003csm": "0",
                                                    "lg": "0",
                                                    "sm": "0",
                                                    "xlg": "0"
                                                }
                                            },
                                            "item-heading-three-column": {
                                                "borderTop": {
                                                    "\u003csm": "border-med-black",
                                                    "sm": "border-thick-black"
                                                },
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-30",
                                                    "lg": "font-size-24",
                                                    "sm": "font-size-24",
                                                    "xlg": "font-size-24"
                                                },
                                                "letterSpacing": "letter-spacing-2",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-base",
                                                    "lg": "lineheight-base",
                                                    "sm": "lineheight-base"
                                                },
                                                "mb": {
                                                    "\u003csm": "xs",
                                                    "lg": "0",
                                                    "sm": "xs"
                                                },
                                                "p": "1rem 0.2rem 0.375rem",
                                                "textAlign": {
                                                    "\u003csm": "center",
                                                    "sm": "left"
                                                },
                                                "textTransform": "uppercase"
                                            },
                                            "item-image-link-big-story": {
                                                "mb": "0"
                                            },
                                            "item-image-link-big-story-feed": {
                                                "marginBottom": "0"
                                            },
                                            "item-imagelink-imageright-ad-big-story": {
                                                "img": { "height": "100%" },
                                                "mb": "0"
                                            },
                                            "item-imagelink-imageright-big-story": {
                                                "img": { "height": "100%" },
                                                "mb": "0"
                                            },
                                            "item-imageright-ad-big-story": {
                                                "bg": "bg-block-content-big-story-imageright-ad"
                                            },
                                            "item-imageright-big-story": {
                                                "bg": "bg-block-content-big-story-imageright"
                                            },
                                            "item-label-big-story-feed": {
                                                "mb": { "lg": "1.5625rem" }
                                            },
                                            "item-label-noimage-big-story": {
                                                "borderBottom": "border-xxs-white"
                                            },
                                            "item-publish-date-ad-three-column": {
                                                "\u0026:before": {
                                                    "content": "''",
                                                    "display": "block"
                                                }
                                            },
                                            "item-publish-date-column-right-basefeed-big-story-feed": {
                                                "\u0026:before": {
                                                    "content": "''",
                                                    "display": "block"
                                                }
                                            },
                                            "item-publish-date-four-across": {
                                                "\u0026:before": {
                                                    "content": "''",
                                                    "display": "block"
                                                }
                                            },
                                            "item-publish-date-noimage-basefeed-big-story-feed": {
                                                "display": {
                                                    "lg": "inline-block",
                                                    "sm": "block"
                                                }
                                            },
                                            "item-publish-date-noimage-feature-big-story-feed": {
                                                "color": "greyXXdark",
                                                "display": {
                                                    "lg": "inline-block",
                                                    "sm": "block"
                                                }
                                            },
                                            "item-publish-date-stacked-basefeed-big-story-feed": {
                                                "\u0026:before": {
                                                    "content": "''",
                                                    "display": "block"
                                                }
                                            },
                                            "item-publish-date-three-column": {
                                                "\u0026:before": {
                                                    "content": "''",
                                                    "display": "block"
                                                }
                                            },
                                            "item-stacked-basefeed-big-story-feed": {
                                                "bps": [
                                                    {
                                                        "options": {
                                                            "size": "lg"
                                                        },
                                                        "value": {
                                                            "\u0026:not(:first-of-type)": {
                                                                "pl": "xxs"
                                                            }
                                                        }
                                                    }
                                                ]
                                            },
                                            "item-stacked-feature-big-story-feed": {
                                                "textAlign": "center"
                                            },
                                            "item-three-column": {
                                                "gridTemplateColumns": "40% 1fr",
                                                "p": {
                                                    "\u003csm": "{m} 0 0",
                                                    "lg": "{m} 0 {xs}",
                                                    "sm": "{s} 0 {xxs}"
                                                }
                                            },
                                            "item-title-ad-three-column": {
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-17",
                                                    "lg": "font-size-16",
                                                    "sm": "font-size-16",
                                                    "xlg": "font-size-16"
                                                },
                                                "letterSpacing": "letter-spacing-3",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-md",
                                                    "lg": "lineheight-lg",
                                                    "sm": "lineheight-md",
                                                    "xlg": "lineheight-lg"
                                                },
                                                "pr": {
                                                    "\u003csm": "s",
                                                    "lg": "2rem",
                                                    "sm": "2rem"
                                                }
                                            },
                                            "item-title-big-story-feed": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-34",
                                                    "lg": "font-size-32",
                                                    "sm": "font-size-34",
                                                    "xlg": "font-size-32"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "sm": "lineheight-sm",
                                                    "xlg": "lineheight-sm"
                                                },
                                                "mb": { "lg": "s" }
                                            },
                                            "item-title-column-right-basefeed-ad-big-story-feed": {
                                                "fontFamily": "primary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-16",
                                                    "lg": "font-size-16",
                                                    "sm": "font-size-16",
                                                    "xlg": "font-size-16"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-md",
                                                    "lg": "lineheight-md",
                                                    "sm": "lineheight-md",
                                                    "xlg": "lineheight-md"
                                                }
                                            },
                                            "item-title-column-right-basefeed-big-story-feed": {
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-19",
                                                    "lg": "font-size-18",
                                                    "sm": "font-size-18",
                                                    "xlg": "font-size-19"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-lg",
                                                    "lg": "lineheight-lg",
                                                    "sm": "lineheight-lg",
                                                    "xlg": "lineheight-lg"
                                                }
                                            },
                                            "item-title-four-across": {
                                                "fontFamily": "primary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-16",
                                                    "lg": "font-size-16",
                                                    "sm": "font-size-16",
                                                    "xlg": "font-size-16"
                                                },
                                                "letterSpacing": {
                                                    "\u003csm": "letter-spacing-n3",
                                                    "sm": "letter-spacing-3"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-md",
                                                    "lg": "lineheight-lg",
                                                    "sm": "lineheight-md",
                                                    "xlg": "lineheight-lg"
                                                },
                                                "m": {
                                                    "\u003csm": "0.75rem 0 0",
                                                    "lg": "{s} 0 {xs}",
                                                    "sm": "{s} 0 0"
                                                }
                                            },
                                            "item-title-imageright-big-story": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-34",
                                                    "lg": "font-size-42",
                                                    "sm": "font-size-32",
                                                    "xlg": "font-size-48"
                                                },
                                                "letterSpacing": {
                                                    "sm": "letter-spacing-n3"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "sm": "lineheight-sm",
                                                    "xlg": "lineheight-sm"
                                                }
                                            },
                                            "item-title-noimage-basefeed-big-story-feed": {
                                                "display": {
                                                    "\u003clg": "block",
                                                    "lg": "inline-block"
                                                },
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-17",
                                                    "lg": "font-size-24",
                                                    "sm": "font-size-19",
                                                    "xlg": "font-size-26"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-md",
                                                    "lg": "lineheight-sm",
                                                    "sm": "lineheight-md",
                                                    "xlg": "lineheight-sm"
                                                }
                                            },
                                            "item-title-noimage-big-story": {
                                                "fontFamily": "tertiary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-44",
                                                    "lg": "font-size-70",
                                                    "sm": "font-size-56",
                                                    "xlg": "font-size-96"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-xs",
                                                    "sm": "lineheight-xs",
                                                    "xlg": "lineheight-base"
                                                }
                                            },
                                            "item-title-noimage-feature-big-story-feed": {
                                                "display": {
                                                    "lg": "inline-block"
                                                },
                                                "fontFamily": "secondary"
                                            },
                                            "item-title-stacked-basefeed-big-story-feed": {
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-19",
                                                    "lg": "font-size-19",
                                                    "sm": "font-size-18",
                                                    "xlg": "font-size-19"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-lg",
                                                    "lg": "lineheight-lg",
                                                    "sm": "lineheight-lg",
                                                    "xlg": "lineheight-lg"
                                                },
                                                "m": {
                                                    "\u003csm": "0.75rem 0 0",
                                                    "lg": "{s} 0 {xs}",
                                                    "sm": "{s} 0 0"
                                                }
                                            },
                                            "item-title-stacked-feature-big-story-feed": {
                                                "fontSize": {
                                                    "\u003csm": "font-size-34",
                                                    "lg": "font-size-37",
                                                    "sm": "font-size-34",
                                                    "xlg": "font-size-38"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "sm": "lineheight-sm",
                                                    "xlg": "lineheight-sm"
                                                },
                                                "mb": { "lg": "s" }
                                            },
                                            "item-title-three-column": {
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-17",
                                                    "lg": "font-size-16",
                                                    "sm": "font-size-16",
                                                    "xlg": "font-size-16"
                                                },
                                                "letterSpacing": "letter-spacing-3",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-lg",
                                                    "lg": "lineheight-lg",
                                                    "sm": "lineheight-md",
                                                    "xlg": "lineheight-lg"
                                                },
                                                "pr": {
                                                    "\u003csm": "s",
                                                    "lg": "2rem",
                                                    "sm": "2rem"
                                                }
                                            },
                                            "label-2xs": {
                                                "fontSize": "font-size-13",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "label-3xs": {
                                                "fontSize": "font-size-12",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "label-4xs": {
                                                "fontSize": "font-size-11",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "label-header-primary": {
                                                "fontFamily": "primary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-22",
                                                    "lg": "font-size-18",
                                                    "md": "font-size-18"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-md",
                                                    "lg": "lineheight-md",
                                                    "md": "lineheight-md"
                                                }
                                            },
                                            "label-primary": {
                                                "WebkitTextStroke": {
                                                    "\u003csm": "0.015rem",
                                                    "sm": "0"
                                                },
                                                "borderBottom": "border-xxs-black",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-12",
                                                    "sm": "font-size-11"
                                                },
                                                "letterSpacing": {
                                                    "\u003csm": "letter-spacing-20",
                                                    "sm": "letter-spacing-10"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-base",
                                                    "sm": "lineheight-base"
                                                },
                                                "m": {
                                                    "\u003csm": "0 auto {m}",
                                                    "lg": "0 auto 2rem",
                                                    "sm": "0 auto {m}"
                                                },
                                                "pb": {
                                                    "\u003csm": "0.1875rem",
                                                    "lg": "xxxs",
                                                    "sm": "0.125rem"
                                                },
                                                "textTransform": "uppercase",
                                                "width": "fit-content"
                                            },
                                            "label-quaternary": {
                                                "display": "inline-block",
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-12",
                                                "fontWeight": "500",
                                                "letterSpacing": "letter-spacing-20",
                                                "lineHeight": "lineheight-sm",
                                                "textTransform": "uppercase"
                                            },
                                            "label-quinary": {
                                                "fontFamily": "secondary",
                                                "fontSize": "font-size-13",
                                                "letterSpacing": "letter-spacing-10",
                                                "textTransform": "uppercase"
                                            },
                                            "label-secondary": {
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-11",
                                                "letterSpacing": "letter-spacing-10",
                                                "lineHeight": "inherit",
                                                "p": {
                                                    "\u003csm": "0.4375rem {s}",
                                                    "sm": "{xxxs} {xs} 0.2rem"
                                                },
                                                "width": "fit-content"
                                            },
                                            "label-tag-primary": {
                                                "WebkitTextStroke": {
                                                    "\u003csm": "0.015rem",
                                                    "sm": "0"
                                                },
                                                "bg": "none",
                                                "borderBottom": "border-xxs-black",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-12",
                                                    "sm": "font-size-11"
                                                },
                                                "fontWeight": "bold",
                                                "letterSpacing": {
                                                    "\u003csm": "letter-spacing-20",
                                                    "sm": "letter-spacing-10"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-base",
                                                    "sm": "lineheight-base"
                                                },
                                                "padding": "{xxs} 0",
                                                "pb": {
                                                    "\u003csm": "0.1875rem",
                                                    "lg": "xxxs",
                                                    "sm": "0.125rem"
                                                },
                                                "textTransform": "uppercase",
                                                "width": "fit-content"
                                            },
                                            "label-tag-primary-darkbg": {
                                                "bg": "greyXXXdark",
                                                "color": "white",
                                                "fontFamily": "LabelPrimary",
                                                "fontSize": "font-size-13",
                                                "fontWeight": "bold",
                                                "lineHeight": "lineheight-max",
                                                "padding": "{xxxs} {xs}",
                                                "textAlign": "center",
                                                "textTransform": "uppercase",
                                                "width": "fit-content"
                                            },
                                            "label-tertiary": {
                                                "fontFamily": "secondary",
                                                "fontSize": "font-size-16",
                                                "letterSpacing": "letter-spacing-10",
                                                "textTransform": "uppercase"
                                            },
                                            "label-xs": {
                                                "fontSize": "font-size-14",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "menu-primary": {
                                                "fontFamily": "MenuPrimary",
                                                "fontSize": "font-size-14",
                                                "lineHeight": "lineheight-max"
                                            },
                                            "menu-secondary": {
                                                "fontFamily": "MenuPrimary",
                                                "fontSize": "font-size-11",
                                                "textTransform": "uppercase"
                                            },
                                            "menu-tertiary": {
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-11",
                                                "letterSpacing": "letter-spacing-10",
                                                "lineHeight": "lineheight-lg",
                                                "textTransform": "uppercase"
                                            },
                                            "nav-with-sponsor": {
                                                "bg": "white",
                                                "borderBottom": "border-thin-grey"
                                            },
                                            "overlay-item-text": {
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-14",
                                                "lineHeight": "lineheight-md"
                                            },
                                            "saved-headline-dek": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": "font-size-19",
                                                "lineHeight": "lineheight-sm"
                                            },
                                            "saved-headline-primary": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-24",
                                                    "lg": "font-size-28"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-sm"
                                                }
                                            },
                                            "saved-headline-title": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-24",
                                                    "lg": "font-size-28"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-sm",
                                                    "lg": "lineheight-sm",
                                                    "md": "lineheight-sm"
                                                }
                                            },
                                            "small-specs-error-text-primary": {
                                                "color": "globalColorError",
                                                "fontFamily": "Inter, Helvetica, Arial, Sans-serif",
                                                "fontSize": "font-size-11",
                                                "fontWeight": "normal",
                                                "letterSpacing": "letter-spacing-6",
                                                "lineHeight": "lineheight-xs"
                                            },
                                            "small-specs-label-text-primary": {
                                                "color": "greyXXdark",
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-11",
                                                "fontWeight": "normal",
                                                "letterSpacing": "letter-spacing-6",
                                                "lineHeight": "lineheight-xs",
                                                "textTransform": "none"
                                            },
                                            "small-specs-label-text-secondary": {
                                                "color": "greyXXdark",
                                                "fontFamily": "Inter, Helvetica, Arial, Sans-serif",
                                                "fontSize": "font-size-11",
                                                "fontWeight": "normal",
                                                "letterSpacing": "letter-spacing-6",
                                                "lineHeight": "lineheight-xs",
                                                "textTransform": "none"
                                            },
                                            "specs-item-primary": {
                                                "fontFamily": "primary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-16",
                                                    "lg": "font-size-14",
                                                    "md": "font-size-16"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-lg",
                                                    "lg": "lineheight-lg",
                                                    "md": "lineheight-lg"
                                                }
                                            },
                                            "spotlight-hed-dark": {
                                                "bg": "white"
                                            },
                                            "spotlight-hed-light": {
                                                "\u0026:hover": {
                                                    "color": "grey"
                                                },
                                                "bg": "black"
                                            },
                                            "spotlight-label-dark": {
                                                "bg": "black"
                                            },
                                            "spotlight-label-light": {
                                                "bg": "white"
                                            },
                                            "subheadline-primary": {
                                                "fontFamily": "SubheadlinePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-24",
                                                    "lg": "2.18836",
                                                    "sm": "font-size-22"
                                                },
                                                "fontStyle": "italic",
                                                "letterSpacing": {
                                                    "lg": "letter-spacing-n3"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xxs",
                                                    "lg": "lineheight-xxsmall",
                                                    "sm": "lineheight-sm"
                                                },
                                                "p": {
                                                    "\u003csm": "0.1875rem 0 {xxs}",
                                                    "lg": "{xxs} 0 0.5rem",
                                                    "sm": "{xxs} 0 0",
                                                    "xlg": "0 0 1rem"
                                                }
                                            },
                                            "subheadline-secondary": {
                                                "fontFamily": "secondary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-29",
                                                    "lg": "font-size-29",
                                                    "sm": "font-size-29"
                                                },
                                                "fontWeight": "normal",
                                                "letterSpacing": "letter-spacing-3",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "sm": "lineheight-xs"
                                                },
                                                "m": {
                                                    "\u003csm": "0 auto {xxs}",
                                                    "lg": "0 auto {m}",
                                                    "sm": "0 auto {xxs}"
                                                },
                                                "p": {
                                                    "\u003csm": "{s} {m} 0.8125rem",
                                                    "lg": "{m} 1.5rem {s}",
                                                    "sm": "{m} 1.5rem {s}"
                                                },
                                                "width": "fit-content"
                                            },
                                            "three-column-block-column": {
                                                "pb": {
                                                    "\u003csm": "2.5rem",
                                                    "sm": "0"
                                                }
                                            },
                                            "title-primary": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-34",
                                                    "lg": "font-size-36",
                                                    "sm": "font-size-34",
                                                    "xlg": "font-size-38"
                                                },
                                                "fontWeight": "normal",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-xs",
                                                    "lg": "lineheight-xs",
                                                    "sm": "lineheight-sm",
                                                    "xlg": "lineheight-sm"
                                                },
                                                "mb": "xxs"
                                            },
                                            "title-quaternary": {
                                                "fontFamily": "TitlePrimary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-18",
                                                    "lg": "font-size-18",
                                                    "md": "font-size-18"
                                                },
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-md",
                                                    "lg": "lineheight-md",
                                                    "md": "lineheight-md"
                                                }
                                            },
                                            "title-secondary": {
                                                "fontFamily": "primary",
                                                "fontSize": {
                                                    "\u003csm": "font-size-16",
                                                    "lg": "font-size-15",
                                                    "sm": "font-size-15",
                                                    "xlg": "font-size-15"
                                                },
                                                "fontWeight": "normal",
                                                "lineHeight": {
                                                    "\u003csm": "lineheight-lg",
                                                    "lg": "lineheight-lg",
                                                    "sm": "lineheight-lg",
                                                    "xlg": "lineheight-lg"
                                                },
                                                "m": {
                                                    "\u003csm": "0.75rem 0 0",
                                                    "lg": "{s} 0 {xs}",
                                                    "sm": "{s} 0 0"
                                                }
                                            },
                                            "title-tertiary": {
                                                "fontFamily": "primary",
                                                "fontSize": "font-size-22",
                                                "lineHeight": "lineheight-lg"
                                            }
                                        }
                                    }
                                }
                            ]
                        },
                        "isHomePage": true,
                        "layoutContextProps": {
                            "siteData": {
                                "metadata": {
                                    "adConfig": {
                                        "bu": "HDM",
                                        "site": "elle",
                                        "zone": "/36117602/hdm-elle/",
                                        "bidders": {
                                            "IX": {
                                                "d": {
                                                    "ga": "670278",
                                                    "gb": "670282",
                                                    "la": "670277",
                                                    "lb": "670283",
                                                    "brk": "670280",
                                                    "garb": "670279",
                                                    "brkrr": "670281"
                                                },
                                                "m": {
                                                    "ga": "670284",
                                                    "gb": "670285",
                                                    "lb": "670287",
                                                    "adh": "670288",
                                                    "brk": "670286"
                                                },
                                                "v": "942443"
                                            },
                                            "APN": {
                                                "d": {
                                                    "ga": "24604090",
                                                    "gb": "10583083",
                                                    "la": "24604099",
                                                    "lb": "10583085",
                                                    "brk": "24604100",
                                                    "garb": "14355601",
                                                    "brkrr": "24604095"
                                                },
                                                "m": {
                                                    "ga": "24604091",
                                                    "gb": "10583090",
                                                    "lb": "10583091",
                                                    "adh": "16120603",
                                                    "brk": "24604096"
                                                },
                                                "v": "14734335"
                                            },
                                            "KAR": {
                                                "m": {
                                                    "gb": "_nMF2QdH1ml",
                                                    "lb": "_p7Ko2RIbMA",
                                                    "adh": "_zOZgxfrDJu",
                                                    "gabrk": "_jK-TsZqW2LI"
                                                },
                                                "v": "_wDGMy7ldvI"
                                            },
                                            "MAG": {
                                                "d": {
                                                    "ga": "2040208",
                                                    "gb": "2040218",
                                                    "la": "2040206",
                                                    "lb": "2040220",
                                                    "brk": "2040212",
                                                    "garb": "2040210",
                                                    "brkrr": "2040216"
                                                },
                                                "m": {
                                                    "ga": "2040222",
                                                    "gb": "2040224",
                                                    "lb": "2040230",
                                                    "adh": "2040232",
                                                    "brk": "2040226"
                                                },
                                                "v": "2731458",
                                                "siteId": "369868",
                                                "accountId": "11636"
                                            },
                                            "TDS": {
                                                "d": {
                                                    "tdsArt": "112030",
                                                    "tdsBrk": "112029"
                                                },
                                                "m": { "tdsArt": "112029" },
                                                "pageId": "103512",
                                                "pageIdDesktop300": "113863"
                                            },
                                            "TPL": {
                                                "d": {
                                                    "ga": "elle_templated_300x400_atf_PB",
                                                    "gb": "elle_templated_300x400_btf_PB",
                                                    "lb": "elle_970x250_btf_PB",
                                                    "brkrr": "elle_templated_300x400_breaker_PB",
                                                    "la728": "elle_728x90_HDX_PB",
                                                    "la970": "elle_970x250_PB"
                                                },
                                                "m": {
                                                    "ga": "elle_templated_300x250_flex_atf_m_PB",
                                                    "lb": "elle_templated_300x250_flex_btf_m_PB",
                                                    "adh": "Elle_320x50_HDX_PB",
                                                    "brk": "elle_templated_300x250_flex_breaker_m_PB"
                                                }
                                            },
                                            "TTD": {
                                                "d": { "ttd": "desktop" },
                                                "m": { "ttd": "mobile" },
                                                "v": "video",
                                                "siteId": "hdm-elle",
                                                "supplySourceId": "hearstmagazines"
                                            },
                                            "AMZN": "3049",
                                            "APNhdmuk": {
                                                "d": {
                                                    "ga": "23458937",
                                                    "gb": "23458938",
                                                    "la": "23458939",
                                                    "lb": "23458940",
                                                    "brk": "23458944",
                                                    "brkrr": "23458945"
                                                },
                                                "m": {
                                                    "ga": "23458941",
                                                    "gb": "23458942",
                                                    "lb": "23458943",
                                                    "brk": "23458946"
                                                },
                                                "v": "23458947"
                                            }
                                        },
                                        "modules": {
                                            "ias": { "pubId": "931694" },
                                            "sst": {
                                                "server": "www-sst.elle.com"
                                            },
                                            "meta": {
                                                "id": "690796760981964",
                                                "cur": "USD"
                                            },
                                            "optable": {
                                                "slug": "prod-elle-com",
                                                "geoWhitelist": ["US"]
                                            },
                                            "parsely": { "siteId": "elle.com" },
                                            "actionIQ": {
                                                "writeKey": "mediaos-elle-prod",
                                                "cnameRecord": "https://aiq-in.elle.com",
                                                "geoWhitelist": ["US"]
                                            },
                                            "comscore": { "c2": 6035258 },
                                            "oneTrust": {
                                                "doNotSellUrlOverride": "/about/a42158564/do-not-sell-my-personal-information/"
                                            },
                                            "sailthru": {
                                                "ids": {
                                                    "production": "2494399497a47e76bde000b4823d9a5a"
                                                }
                                            },
                                            "truedata": {
                                                "ep": "td.elle.com",
                                                "cid": "10458",
                                                "scid": "107"
                                            },
                                            "permutive": {
                                                "apiKey": "7d237500-e85c-4846-9eb8-5635df7b050c",
                                                "locale": "US",
                                                "currency": "USD",
                                                "workspaceId": "eb036676-52ea-47b5-a2f6-fcfb4ece9c00",
                                                "geoWhitelist": "US"
                                            },
                                            "optimizely": {
                                                "webSnippetId": "21018620252",
                                                "webSnippetKey": "us_elle"
                                            },
                                            "trueAnthem": "hearst",
                                            "blockthrough": {
                                                "id": "6316821519007744"
                                            },
                                            "brandMetrics": {
                                                "siteId": "elle.com",
                                                "accountId": "a6a45799-d06f-4cce-9dd7-4a947f7e7816"
                                            },
                                            "googleAnalytics": {
                                                "measurementId": "G-BTTN4BQHSS"
                                            }
                                        },
                                        "adBundle": [],
                                        "settings": {
                                            "mobileStickyAds": true,
                                            "enableVerityTags": true
                                        },
                                        "siteList": ["www.elle.com"]
                                    },
                                    "commerce": {
                                        "cons": "Cons",
                                        "pros": "Pros",
                                        "affiliate": {
                                            "url": "https://assets.hearstapps.com/commerce/release/affiliate-bundle.master.js",
                                            "amazon": {
                                                "market": "HMG-US",
                                                "default": {
                                                    "sem": "elle-lift-20",
                                                    "tag": "elle_auto-append-20",
                                                    "icxId": "10051",
                                                    "social": "elle-soc-lift-20"
                                                }
                                            },
                                            "skimlinks": {
                                                "market": "HMG-US",
                                                "default": {
                                                    "url": "//s.skimresources.com/js/74968X1525074.skimlinks.js"
                                                }
                                            },
                                            "trackonomics": { "cipd2": "ell" }
                                        }
                                    },
                                    "ciam": {
                                        "clientId": "2e2g0m0g4ingh5rkear3fldeb5",
                                        "loginURL": "https://www.mylo.id"
                                    },
                                    "copyright": "Hearst Magazine Media, Inc. All Rights Reserved.",
                                    "defaults": {
                                        "config_ds": {
                                            "recircConfig": [
                                                {
                                                    "heading": "What to Read Next"
                                                },
                                                {
                                                    "sections": ["culture"],
                                                    "displayTypes": [
                                                        "standard-article",
                                                        "longform-article",
                                                        "listicle"
                                                    ]
                                                }
                                            ]
                                        },
                                        "siteAddress": {},
                                        "parentOrganization": {}
                                    },
                                    "icxSiteId": "10051",
                                    "networkName": "Hearst Fashion and Luxury Collection",
                                    "networkTagLine": "A Part of Hearst Digital Media",
                                    "oneTrustDomainId": "e435627f-2ac9-4bec-82c7-15e57b0250a3",
                                    "optimizely": {
                                        "webSnippetId": "21018620252",
                                        "webSnippetKey": "us_elle"
                                    },
                                    "social": {
                                        "networks": {
                                            "x": {
                                                "socialUrl": "https://twitter.com/ElleMagazine"
                                            },
                                            "line": [],
                                            "qzone": [],
                                            "weibo": [],
                                            "douyin": [],
                                            "tiktok": {
                                                "socialUrl": "https://www.tiktok.com/@ellemagazine?lang=en"
                                            },
                                            "tumblr": {
                                                "socialUrl": "http://elle.tumblr.com/"
                                            },
                                            "twitter": {
                                                "handle": "@ELLEmagazine",
                                                "socialUrl": "https://twitter.com/ElleMagazine"
                                            },
                                            "youtube": {
                                                "socialUrl": "https://www.youtube.com/c/elle?sub_confirmation=1"
                                            },
                                            "facebook": {
                                                "appId": "364664413547847",
                                                "iaAppId": "31911516300",
                                                "socialUrl": "https://www.facebook.com/ellemagazine"
                                            },
                                            "instagram": {
                                                "socialUrl": "http://instagram.com/elleusa"
                                            },
                                            "pinterest": {
                                                "socialUrl": "http://www.pinterest.com/elle/?auto_follow=1"
                                            },
                                            "wikipedia": {
                                                "socialUrl": "https://en.wikipedia.org/wiki/Elle_(magazine)"
                                            },
                                            "googleplus": {
                                                "socialUrl": "https://plus.google.com/+ELLE/posts",
                                                "webmasterTools": "W6SOBCzCmb2sA5l3z9YK1yO7I7bPYArVQCP09_e2zck"
                                            }
                                        }
                                    }
                                },
                                "brand": { "name": "ELLE", "slug": "elle" },
                                "bookmarksConfig": {
                                    "accountMenuLabel": "My Bookmarks"
                                },
                                "locale": {
                                    "country": "US",
                                    "name": "United States",
                                    "language": "en"
                                }
                            },
                            "canonicalUrl": "https://www.elle.com/",
                            "isAdsFree": false,
                            "isCDN": true,
                            "isGDPR": true,
                            "isHomePage": true,
                            "isLoggedIn": false,
                            "isUSUserLocation": false,
                            "menuItems": [
                                {
                                    "title": "Countries-Panel",
                                    "children": [
                                        {
                                            "id": "1a900d72-3c7b-4cd1-b8ea-8c6cb2ac7ff6",
                                            "title": "US",
                                            "url": "/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "d426d07c-c4e6-4f09-ac57-18390a6eda2e",
                                            "title": "UK",
                                            "url": "/uk/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "e1824256-f33a-48f1-b3ab-264449c495aa",
                                            "title": "España",
                                            "url": "/es/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "097cc1ce-9d51-495b-bc03-2bfa59b5bbc3",
                                            "title": "Italia",
                                            "url": "/it/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "61dcdea5-3791-470f-996c-1efec95b3b59",
                                            "title": "Nederland",
                                            "url": "/nl/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "0ba9eac9-7e50-44a2-ac05-93ab1fd00222",
                                            "title": "China",
                                            "url": "https://www.ellechina.com/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "23738702-9591-4d79-a2e0-e9c7e8836d2e",
                                            "title": "Taiwan",
                                            "url": "/tw/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "9f3feb43-7403-4848-8f3f-2df9a16a15cf",
                                            "title": "Japan",
                                            "url": "/jp/",
                                            "new_tab": false,
                                            "nofollow": false
                                        }
                                    ]
                                },
                                {
                                    "title": "Footer",
                                    "children": [
                                        {
                                            "id": "ea78626b-3b17-4af1-a293-dfe8f2212a5f",
                                            "title": "Newsletter",
                                            "url": "/email/elle-newsletter",
                                            "new_tab": false,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "60d79393-27b8-4dfe-8015-f61d470f05b5",
                                            "title": "Contact Us",
                                            "url": "/about/a39561967/about-us-contact-information-masthead/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "0b4486d6-da9d-4ebb-833a-df680d7db066",
                                            "title": "Media Kit",
                                            "url": "http://www.ellemediakit.com/r5/home.asp",
                                            "new_tab": true,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "652eac18-7028-4a79-a138-7beb0151e2a2",
                                            "title": "Press Room",
                                            "url": "https://www.hearst.com/news",
                                            "new_tab": true,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "6d24e342-7f16-463f-b03b-590563646c78",
                                            "title": "Site Map",
                                            "url": "/sitemap/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "886c0b85-7053-415c-bbac-82a0ff96218f",
                                            "title": "Community Guidelines",
                                            "url": "/about/community-guidelines/",
                                            "new_tab": false,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "f5785685-6c53-4cf8-9887-11e07ffd5266",
                                            "title": "Advertise Online",
                                            "url": "/about/advertise-online/",
                                            "new_tab": false,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "d7acf8d1-b435-4302-a517-f3a4e52d511f",
                                            "title": "Customer Service",
                                            "url": "/about/a62753332/customer-service-subscriptions/",
                                            "new_tab": true,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "ffc18c54-a12c-40e4-95cb-1963ca132dbb",
                                            "title": "Subscribe",
                                            "url": "https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_footer",
                                            "new_tab": true,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "4472947b-b0dd-46e1-84e4-6f0cad888e15",
                                            "title": "Events \u0026 Promotions",
                                            "url": "/elleextra/",
                                            "new_tab": false,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "475d39d7-e5ed-47c0-b72a-7ae9cc919e0c",
                                            "title": "Other Hearst Subscriptions",
                                            "url": "https://w1.buysub.com/pubs/HR/A14/Hearst_Subscription_FAQs.jsp?cds_mag_code=A14\u0026cds_page_id=265990",
                                            "new_tab": true,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "e3d824dc-8ac2-40d6-b34e-2d90a03dc9ef",
                                            "title": "Giveaways",
                                            "url": "/sweepstakes/",
                                            "new_tab": true,
                                            "nofollow": true
                                        }
                                    ]
                                },
                                {
                                    "title": "Footer-Legal",
                                    "children": [
                                        {
                                            "id": "a9e3d002-cddf-4174-9d29-5b6bc6dbb8e7",
                                            "title": "Privacy Notice",
                                            "url": "https://www.hearst.com/-/us-magazines-privacy-notice",
                                            "new_tab": true,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "658c1fa2-12f0-4a96-aadd-22f73113109d",
                                            "title": "CA Notice at Collection",
                                            "url": "https://www.hearst.com/-/us-magazines-privacy-notice#_ADDITIONAL_INFO",
                                            "new_tab": true,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "b3f5e0dc-2f5d-4fe7-ab6c-359f4681f1fc",
                                            "title": "Your CA Privacy Rights/Shine the Light",
                                            "url": "https://www.hearst.com/-/us-magazines-privacy-notice#_ADDITIONAL_INFO",
                                            "new_tab": true,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "216342a9-9c4b-49b3-8787-c1f46fbac274",
                                            "title": "DAA Industry Opt Out",
                                            "url": "https://www.hearst.com/-/us-magazines-privacy-notice#_OPT_OUTS",
                                            "new_tab": true,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "9940feb8-5b1b-4cc7-be05-a32504e364c8",
                                            "title": "Terms of Use",
                                            "url": "https://www.hearst.com/-/us-magazines-terms-of-use",
                                            "new_tab": true,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "96f599e7-7627-47c2-b561-7313c2269c64",
                                            "title": "Site Map",
                                            "url": "/sitemap/",
                                            "new_tab": false,
                                            "nofollow": false
                                        }
                                    ]
                                },
                                {
                                    "title": "Panel",
                                    "children": [
                                        {
                                            "id": "dd097861-e75a-46ae-a224-e0efc12a8e1d",
                                            "title": "Subscribe",
                                            "url": "https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_panelnav",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "517a6be5-f0c1-4867-8f6d-718c91fccaae",
                                            "title": "Fashion",
                                            "url": "/fashion/",
                                            "new_tab": false,
                                            "nofollow": false,
                                            "children": [
                                                {
                                                    "id": "e8669e47-41e2-424a-9408-95be260c430e",
                                                    "title": "Trends",
                                                    "url": "/fashion/trend-reports/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "c8956635-78e0-48f3-bf58-0f3b09877904",
                                                    "title": "Celebrity Style",
                                                    "url": "/fashion/celebrity-style/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "5d42281a-9828-4d8b-8d3a-5594063590c9",
                                                    "title": "Designers",
                                                    "url": "/fashion-designers/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "5353e1f7-1066-4ddf-a607-1961cf2a2ee3",
                                                    "title": "Street Style",
                                                    "url": "/fashion/street-style/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "8078050f-d093-4375-9792-c43709a8b521",
                                                    "title": "Runway",
                                                    "url": "/runway/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "423f5572-697f-40c0-b828-21a83c192d46",
                                                    "title": "Accessories",
                                                    "url": "/fashion/accessories/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                }
                                            ]
                                        },
                                        {
                                            "id": "08995921-8958-4592-a505-63679f0cf27c",
                                            "title": "Beauty",
                                            "url": "/beauty/",
                                            "new_tab": false,
                                            "nofollow": false,
                                            "children": [
                                                {
                                                    "id": "3e397838-64e5-49e6-88cf-ffe1c33e8e72",
                                                    "title": "Hair",
                                                    "url": "/beauty/hair/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "b6a9cad7-3ca9-49e1-8867-a7a516046264",
                                                    "title": "Makeup \u0026 Skin Care",
                                                    "url": "/beauty/makeup-skin-care/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "c688cea9-444d-4a6e-9f09-8862da37ae54",
                                                    "title": "Health \u0026 Fitness",
                                                    "url": "/beauty/health-fitness/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "70a501ab-59d0-4f27-b0bd-5c3847af2869",
                                                    "title": "Perfumes \u0026 Fragrances",
                                                    "url": "/perfumes-fragrances/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                }
                                            ]
                                        },
                                        {
                                            "id": "ace20d59-e685-4c9b-ada7-c6aaeba09259",
                                            "title": "Culture",
                                            "url": "/culture/",
                                            "new_tab": false,
                                            "nofollow": false,
                                            "children": [
                                                {
                                                    "id": "e1c426a3-0e4e-4284-8699-5c44cd4198f6",
                                                    "title": "Celebrity",
                                                    "url": "/culture/celebrities/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "e52f9f59-b21c-4fee-9d5d-75d1b6275735",
                                                    "title": "Movies \u0026 TV",
                                                    "url": "/culture/movies-tv/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "f4560437-1751-49e0-a6dd-fc3954ac228c",
                                                    "title": "Music",
                                                    "url": "/culture/music/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "bc1c11b9-25d7-4def-ba7d-14cb6f7b7d82",
                                                    "title": "Books",
                                                    "url": "/culture/books/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "5fe378a1-6e87-4d7e-bd1c-cec21d4f4aa4",
                                                    "title": "Travel \u0026 Food",
                                                    "url": "/culture/travel-food/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "b56d4b3c-00e8-4dbf-a2b3-08216aef3543",
                                                    "title": "Art \u0026 Design",
                                                    "url": "/culture/art-design/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                }
                                            ]
                                        },
                                        {
                                            "id": "f12d672f-37dc-4805-823c-e65ab60879a6",
                                            "title": "Horoscopes",
                                            "url": "/horoscopes/",
                                            "new_tab": false,
                                            "nofollow": false,
                                            "children": [
                                                {
                                                    "id": "5c65a52b-a847-4b35-9d95-ba2f43c94865",
                                                    "title": "Daily Horoscopes",
                                                    "url": "/horoscopes/daily/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "8dac34bc-8f92-4172-818f-50fba789e3bc",
                                                    "title": "Weekly Horoscopes",
                                                    "url": "/horoscopes/weekly/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "0408a32e-c4ff-48e7-9725-986112768961",
                                                    "title": "Monthly Horoscopes",
                                                    "url": "/horoscopes/monthly/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "dc33f95c-61f8-447e-bfda-330c19a9070f",
                                                    "title": "Astrological Profiles",
                                                    "url": "/horoscopes/profile/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "cefaa56a-e8bd-4097-bfef-96b9c2a7b144",
                                                    "title": "Love Matches",
                                                    "url": "/horoscopes/love/",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                }
                                            ]
                                        },
                                        {
                                            "id": "9cc95521-a80e-411e-b434-222c7d35e84a",
                                            "title": "News \u0026 Politics",
                                            "url": "/culture/career-politics/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "980e4a19-78f5-4fe6-8b57-8cb770d69992",
                                            "title": "In the Magazine",
                                            "url": "/in-the-mag/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "8cc2d907-ebb7-4aee-b015-f3b6025ddff7",
                                            "title": "Weddings",
                                            "url": "/weddings/",
                                            "new_tab": false,
                                            "nofollow": false
                                        },
                                        {
                                            "id": "c7c3a9c1-0e53-45e3-ab7a-0ec9e357462d",
                                            "title": "Newsletter",
                                            "url": "https://www.elle.com/email/elle-newsletter",
                                            "new_tab": true,
                                            "nofollow": true
                                        },
                                        {
                                            "id": "caa61f07-e98c-4c1f-a460-081962305c6e",
                                            "title": "Follow",
                                            "url": "#",
                                            "new_tab": false,
                                            "nofollow": false,
                                            "children": [
                                                {
                                                    "id": "3bde0974-3222-452f-9cd7-e778e25cc319",
                                                    "title": "Facebook",
                                                    "url": "https://www.facebook.com/ellemagazine",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "84296151-6e42-4cb5-bb43-1a8cb97bb0dc",
                                                    "title": "X",
                                                    "url": "https://x.com/ElleMagazine",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "e9288c4b-ab7b-4b4f-855a-8366a59fba92",
                                                    "title": "Instagram",
                                                    "url": "http://instagram.com/elleusa",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                },
                                                {
                                                    "id": "f1386579-053b-4a68-8dba-67e5e565de27",
                                                    "title": "YouTube",
                                                    "url": "https://www.youtube.com/c/elle?sub_confirmation=1",
                                                    "new_tab": false,
                                                    "nofollow": false
                                                }
                                            ]
                                        }
                                    ]
                                },
                                {
                                    "title": "Subscribe",
                                    "children": [
                                        {
                                            "title": "Subscribe",
                                            "url": "https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_topnav",
                                            "new_tab": false,
                                            "nofollow": false
                                        }
                                    ]
                                },
                                {}
                            ],
                            "menuLinks": {
                                "Top": [
                                    {
                                        "id": "f8a40a66-a7dc-46cf-9a36-7b03161fb1b3",
                                        "title": "Fashion",
                                        "url": "/fashion/",
                                        "new_tab": false,
                                        "aria-current": false
                                    },
                                    {
                                        "id": "1c6f9edd-1fd5-478a-8bdc-9e2d89424431",
                                        "title": "Beauty",
                                        "url": "/beauty/",
                                        "new_tab": false,
                                        "aria-current": false
                                    },
                                    {
                                        "id": "bac3951d-7616-4d14-8d34-4b0e659dee02",
                                        "title": "Culture",
                                        "url": "/culture/",
                                        "new_tab": false,
                                        "aria-current": false
                                    },
                                    {
                                        "id": "a338e3c6-c48b-4be1-85d8-4d47e04ac4b0",
                                        "title": "Horoscopes",
                                        "url": "/horoscopes/",
                                        "new_tab": false,
                                        "aria-current": false
                                    },
                                    {
                                        "id": "034fe53d-c630-4dba-92b7-12b8ccd52475",
                                        "title": "News \u0026 Politics",
                                        "url": "/culture/career-politics/",
                                        "new_tab": false,
                                        "aria-current": false
                                    },
                                    {
                                        "id": "e28180fd-670b-4630-a4bd-fa707d017bdd",
                                        "title": "In the Magazine",
                                        "url": "/in-the-mag/",
                                        "new_tab": false,
                                        "aria-current": false
                                    }
                                ]
                            },
                            "pageId": "b4af5224-cea2-4fdd-82bc-0a974e3a5d61",
                            "pageType": "section",
                            "selfHostedAffiliateEnabled": true,
                            "siteId": "530bacd4-96b2-4cfe-a9a6-1fbd7c749e22",
                            "tagManager": {
                                "dev": "mag-dev",
                                "default": "mag"
                            },
                            "tagOptions": {},
                            "video": {
                                "gaVideoDiagTracking": "true",
                                "gaVideoBrandName": "Elle",
                                "icxVideoDomainId": "7303"
                            }
                        },
                        "template": {
                            "overrideVideoClickToPlay": true,
                            "display": "section"
                        }
                    },
                    "__N_SSP": true,
                    "appProps": {
                        "providerData": {
                            "scopeManager": {
                                "scopes": {
                                    "@site": "elle_en-us",
                                    "@locale": "en-us",
                                    "@brand": "elle",
                                    "@client": "hdm",
                                    "@app": "fre"
                                },
                                "asset": "/_assets/design-tokens",
                                "media": "/design-tokens",
                                "selected": {
                                    "865286506872020891": {
                                        "scope": "elle",
                                        "hash": "bf092aa",
                                        "metadata": {}
                                    },
                                    "10793083781296108510": {
                                        "scope": "elle",
                                        "hash": "0dd915e",
                                        "metadata": {}
                                    },
                                    "294021650101657": {
                                        "scope": "fre",
                                        "hash": "433da0a",
                                        "metadata": {}
                                    },
                                    "7945971511296108510": {
                                        "scope": "(NOT_SET)"
                                    },
                                    "16210375671296108510": {
                                        "scope": "(NOT_SET)"
                                    },
                                    "948601947872020891": {
                                        "scope": "fre",
                                        "hash": "f1c199c",
                                        "metadata": {}
                                    },
                                    "622986035872020891": {
                                        "scope": "fre",
                                        "hash": "1ceaaeb",
                                        "metadata": {}
                                    },
                                    "17452905571296108510": {
                                        "scope": "elle",
                                        "hash": "75b69ee",
                                        "metadata": {
                                            "fallbacks": {
                                                "mobile": {
                                                    "fallbackFont": "Roboto",
                                                    "sizeAdjust": [
                                                        "102.57%",
                                                        "104.04%"
                                                    ],
                                                    "ascentOverride": [
                                                        "93.50%",
                                                        "92.17%"
                                                    ],
                                                    "descentOverride": [
                                                        "26.81%",
                                                        "26.43%"
                                                    ]
                                                },
                                                "sansSerif": {
                                                    "fallbackFont": "Arial",
                                                    "sizeAdjust": [
                                                        "102.88%",
                                                        "96.40%"
                                                    ],
                                                    "ascentOverride": [
                                                        "93.22%",
                                                        "99.48%"
                                                    ],
                                                    "descentOverride": [
                                                        "26.73%",
                                                        "28.53%"
                                                    ]
                                                },
                                                "serif": {
                                                    "fallbackFont": "Georgia",
                                                    "sizeAdjust": [
                                                        "103.56%",
                                                        "96.95%"
                                                    ],
                                                    "ascentOverride": [
                                                        "92.61%",
                                                        "98.92%"
                                                    ],
                                                    "descentOverride": [
                                                        "26.56%",
                                                        "28.37%"
                                                    ]
                                                }
                                            }
                                        }
                                    },
                                    "2141149703872020891": {
                                        "scope": "fre",
                                        "hash": "38e3324",
                                        "metadata": {}
                                    },
                                    "1280396420872020891": {
                                        "scope": "fre",
                                        "hash": "3f172dc",
                                        "metadata": {}
                                    },
                                    "3505127971296108510": {
                                        "scope": "fre",
                                        "hash": "c8ad008",
                                        "metadata": {
                                            "fallbacks": {
                                                "mobile": {
                                                    "fallbackFont": "Roboto",
                                                    "sizeAdjust": [
                                                        "107.32%",
                                                        "106.36%"
                                                    ],
                                                    "ascentOverride": [
                                                        "90.27%",
                                                        "91.08%"
                                                    ],
                                                    "descentOverride": [
                                                        "22.50%",
                                                        "22.70%"
                                                    ]
                                                },
                                                "sansSerif": {
                                                    "fallbackFont": "Arial",
                                                    "sizeAdjust": [
                                                        "107.64%",
                                                        "98.55%"
                                                    ],
                                                    "ascentOverride": [
                                                        "90.00%",
                                                        "98.30%"
                                                    ],
                                                    "descentOverride": [
                                                        "22.43%",
                                                        "24.50%"
                                                    ]
                                                },
                                                "serif": {
                                                    "fallbackFont": "Georgia",
                                                    "sizeAdjust": [
                                                        "108.35%",
                                                        "99.11%"
                                                    ],
                                                    "ascentOverride": [
                                                        "89.41%",
                                                        "97.75%"
                                                    ],
                                                    "descentOverride": [
                                                        "22.29%",
                                                        "24.37%"
                                                    ]
                                                }
                                            }
                                        }
                                    },
                                    "588148124872020891": {
                                        "scope": "fre",
                                        "hash": "cf1782e",
                                        "metadata": {}
                                    },
                                    "14425694531021153286": {
                                        "scope": "elle",
                                        "hash": "2856426",
                                        "metadata": {}
                                    },
                                    "8533254961296108510": {
                                        "scope": "elle",
                                        "hash": "1a09c0e",
                                        "metadata": {
                                            "fallbacks": {
                                                "mobile": {
                                                    "fallbackFont": "Roboto",
                                                    "sizeAdjust": [
                                                        "94.13%",
                                                        "98.44%"
                                                    ],
                                                    "ascentOverride": [
                                                        "79.68%",
                                                        "76.19%"
                                                    ],
                                                    "descentOverride": [
                                                        "26.56%",
                                                        "25.40%"
                                                    ],
                                                    "lineGapOverride": [
                                                        "32.93%",
                                                        "31.49%"
                                                    ]
                                                },
                                                "sansSerif": {
                                                    "fallbackFont": "Arial",
                                                    "sizeAdjust": [
                                                        "94.41%",
                                                        "91.21%"
                                                    ],
                                                    "ascentOverride": [
                                                        "79.44%",
                                                        "82.23%"
                                                    ],
                                                    "descentOverride": [
                                                        "26.48%",
                                                        "27.41%"
                                                    ],
                                                    "lineGapOverride": [
                                                        "32.83%",
                                                        "33.99%"
                                                    ]
                                                },
                                                "serif": {
                                                    "fallbackFont": "Georgia",
                                                    "sizeAdjust": [
                                                        "95.04%",
                                                        "91.73%"
                                                    ],
                                                    "ascentOverride": [
                                                        "78.92%",
                                                        "81.76%"
                                                    ],
                                                    "descentOverride": [
                                                        "26.31%",
                                                        "27.25%"
                                                    ],
                                                    "lineGapOverride": [
                                                        "32.62%",
                                                        "33.80%"
                                                    ]
                                                }
                                            }
                                        }
                                    },
                                    "1699537151296108510": {
                                        "scope": "elle",
                                        "hash": "269d6f7",
                                        "metadata": {
                                            "fallbacks": {
                                                "mobile": {
                                                    "fallbackFont": "Roboto",
                                                    "sizeAdjust": [
                                                        "96.61%",
                                                        "100.45%"
                                                    ],
                                                    "ascentOverride": [
                                                        "77.63%",
                                                        "74.67%"
                                                    ],
                                                    "descentOverride": [
                                                        "25.88%",
                                                        "24.89%"
                                                    ],
                                                    "lineGapOverride": [
                                                        "32.09%",
                                                        "30.86%"
                                                    ]
                                                },
                                                "sansSerif": {
                                                    "fallbackFont": "Arial",
                                                    "sizeAdjust": [
                                                        "96.90%",
                                                        "93.07%"
                                                    ],
                                                    "ascentOverride": [
                                                        "77.40%",
                                                        "80.59%"
                                                    ],
                                                    "descentOverride": [
                                                        "25.80%",
                                                        "26.86%"
                                                    ],
                                                    "lineGapOverride": [
                                                        "31.99%",
                                                        "33.31%"
                                                    ]
                                                },
                                                "serif": {
                                                    "fallbackFont": "Georgia",
                                                    "sizeAdjust": [
                                                        "97.54%",
                                                        "93.59%"
                                                    ],
                                                    "ascentOverride": [
                                                        "76.89%",
                                                        "80.13%"
                                                    ],
                                                    "descentOverride": [
                                                        "25.63%",
                                                        "26.71%"
                                                    ],
                                                    "lineGapOverride": [
                                                        "31.78%",
                                                        "33.12%"
                                                    ]
                                                }
                                            }
                                        }
                                    },
                                    "1191363023101657": {
                                        "scope": "fre",
                                        "hash": "046027b",
                                        "metadata": {}
                                    },
                                    "1224281871872020891": {
                                        "scope": "fre",
                                        "hash": "db7c035",
                                        "metadata": {}
                                    },
                                    "20259639833116128": {
                                        "scope": "elle",
                                        "hash": "45f08cd",
                                        "metadata": {}
                                    },
                                    "7380371641296108510": {
                                        "scope": "elle",
                                        "hash": "242fea1",
                                        "metadata": {}
                                    },
                                    "1221623699101657": {
                                        "scope": "fre",
                                        "hash": "3361b6d",
                                        "metadata": {}
                                    },
                                    "820672235101657": {
                                        "scope": "fre",
                                        "hash": "603c377",
                                        "metadata": {}
                                    },
                                    "1976414978101657": {
                                        "scope": "fre",
                                        "hash": "ce3e1ae",
                                        "metadata": {}
                                    },
                                    "914434039101657": {
                                        "scope": "fre",
                                        "hash": "a5a3a69",
                                        "metadata": {}
                                    },
                                    "628614349101657": {
                                        "scope": "fre",
                                        "hash": "f282b14",
                                        "metadata": {}
                                    },
                                    "750460747101657": {
                                        "scope": "fre",
                                        "hash": "e8cf655",
                                        "metadata": {}
                                    }
                                },
                                "manifestUrl": "https://static-assets.hearstapps.com/design-tokens/manifest.json"
                            },
                            "flags": {
                                "fre.seogra.breadcrumbs": 1,
                                "fre.content.enable-privacy-disclaimer": 1,
                                "cover-stories": 1,
                                "ecommerce.enable-embedded-experience": "(NOT_SET)",
                                "seo.syndicated-content.no-noindex": 1,
                                "seo.block-meta-ai-crawler": 1,
                                "ecommerce.load-pulse-script": "(NOT_SET)",
                                "fre.piano.int": "(NOT_SET)",
                                "content-pass.enable": 0,
                                "enable-sso": 1,
                                "enable-google-one-tap": 1,
                                "enable-microsoft-quick-auth": 1,
                                "fre.notifications.batch": 0,
                                "fre.notifications.appier": "(NOT_SET)",
                                "display-search": 1,
                                "fre.show-magnifying-glass-icon-only": "(NOT_SET)",
                                "location-choice": 1,
                                "fre.location-choice.display-generic-title": 1,
                                "fre.do-not-sell-link": 1,
                                "search.fre.display-top-navigation": 0,
                                "fre.top-navigation.gift-lab": "(NOT_SET)",
                                "fre.enable-my-stuff": 1,
                                "enable-avatar-menu": 1,
                                "enable-google-one-tap-tooltip": "(NOT_SET)",
                                "fre.enable-jam-journey": 1,
                                "fre.jam-journey.enable-top-slim-banner": 1,
                                "fre.commerce.use-affiliate_url": 1,
                                "seo.feed-page-pagination": 0,
                                "custom-feeds.short-heds": 0,
                                "video.priority-to-use-preview-image": "(NOT_SET)",
                                "fre.enable-fastly-image": 0,
                                "fre.enable-home-page-newsletter": 0,
                                "custom-feeds.block-head-image": 0,
                                "content-editor.disable-author-photo": "(NOT_SET)",
                                "fre.enable-author-flyout": 1,
                                "fre.piano.hosted-content-module": "(NOT_SET)",
                                "new-nav": 1,
                                "fre.cds.enable-paywall": 1,
                                "fre.piano.enable-paywall": 0,
                                "fre.jam-journey.enable-modals": 1,
                                "fre.jam-journey.enable-meters": 1,
                                "fre.jam-journey.enable-post-registration-modals": 0,
                                "mobile-adhesion-unit": 1,
                                "content-editor.content-body.preview-blocker": 0
                            },
                            "lazy": {
                                "P0-0": [[6314]],
                                "P0-2": [[30554], 2],
                                "P0-3": [[14210]],
                                "P0-4": [[60999]],
                                "P0-6": [[92848, 15265]],
                                "P0-7": [[92848, 6979, 15265, 64512]],
                                "P0-8": [[16382, 15017, 15265]],
                                "P0-9": [[54715, 15265, 64512]],
                                "P0-10": [[54715, 6979, 15265, 64512]],
                                "P0-11": [[16382, 15017, 15265]],
                                "P0-12": [[92848, 15265, 64512]],
                                "P0-13": [[16382, 15017, 15265]],
                                "P0-14": [[16382, 15017, 15265]],
                                "P0-15": [[22367, 15265, 64512]],
                                "P0-16": [
                                    [92848, 5599, 38768, 40588, 56131, 95445],
                                    1
                                ],
                                "P0-17": [[16382, 15017, 15265]],
                                "P0-18": [[33532]],
                                "P0-19": [[39669]]
                            },
                            "translations": {
                                "app": {
                                    "ad-breaker-text-main": "Advertisement - Continue Reading Below"
                                },
                                "common": {
                                    "account": "account",
                                    "and": "and",
                                    "close": "Close",
                                    "cookie_choices": "Cookies Choices",
                                    "do_not_sell_info_footer": "Your Privacy Choices: Opt Out of Sale/Targeted Ads",
                                    "do_not_sell_info_sidepanel": "Your Privacy Choices",
                                    "login": "sign in",
                                    "other_editions": "Other Editions",
                                    "privacyNotice": "Privacy Notice",
                                    "sidepanel": "Side Panel",
                                    "search": "Search",
                                    "skipToContent": "Skip to Content",
                                    "termsOfUse": "Terms Of Use"
                                },
                                "content": {
                                    "affiliate-disclosure-footer": "We may earn commission from links on this page, but we only recommend products we back.",
                                    "image": {
                                        "fallback-alt": "This is an image",
                                        "no-longer-available": "Image no longer available"
                                    },
                                    "why-trust-us": "Why Trust Us?"
                                },
                                "date": { "format": "" }
                            }
                        }
                    }
                },
                "page": "/_templates/feed",
                "query": {},
                "buildId": "1797c57357",
                "assetPrefix": "/_assets/fre/scopes/hdm",
                "runtimeConfig": {
                    "APP_ENVIRONMENT": "production",
                    "APP_VERSION": "0.12.190",
                    "DEFAULT_FETCH_TIMEOUT": "2000",
                    "RUNTIME_INSURANCE_PUBLISHER_KEY": "dGVk90VVSURz",
                    "RUNTIME_INSURANCE_ADUNIT_KEY": "jAgnNJlb",
                    "RUNTIME_TRADE_TOOL_APP_URL": "https://app.blackbookinformation.com",
                    "RUNTIME_USE_SENTRY": "1",
                    "RUNTIME_RESIN_ASSETS_URL": "https://cdsshopprod-assets.resin.com",
                    "RUNTIME_ENABLE_RECAPTCHA": "true",
                    "RUNTIME_OPEN_WEB_ENABLED": "1",
                    "RUNTIME_PUBLIC_IMAGE_HOSTNAME": "https://hips.hearstapps.com/hmg-prod",
                    "RUNTIME_MICROSOFT_AUTH_CLIENT_ID": "952b8b0a-eccb-4fa4-90ca-13796e19166f",
                    "RUNTIME_GLIMMER_BUNDLE_FILE": "player.js",
                    "RUNTIME_GRAPHQL_TIMEOUT": "12000",
                    "RUNTIME_SPEEDCURVE_URL": "https://cdn.speedcurve.com/js/lux.js?id=231332287",
                    "RUNTIME_PAYMENT_CAPTURE_SCRIPT_URL": "https://paymentcapture.resin.com/v1/payment-capture.js",
                    "RUNTIME_RECAPTCHA_KEY": "6LcygTohAAAAALJc9PUf8gwQA5bdSdXK34HDB_5l",
                    "RUNTIME_SLIDES_PER_PAGE_OVERLAY": "10",
                    "RUNTIME_NITEHAWK_URL": "https://nitehawk.hearst.io",
                    "RUNTIME_INSURANCE_API_URL": "https://api.trvmarketplace.com/click/v1/auto",
                    "RUNTIME_TRADE_TOOL_SCRIPT_URL": "https://app.blackbookinformation.com/app/shopping-tools-js/v1.js",
                    "RUNTIME_GRAPHQL_URL": "https://heimdall.hearstapps.com",
                    "RUNTIME_SLIDES_PER_PAGE_LIST": "30",
                    "RUNTIME_ORDER_INTAKE_URL": "https://api.resin.com/orders",
                    "RUNTIME_TCF_API_TIMEOUT": "2000",
                    "RUNTIME_BUY_SUB_URL": "https://optout.hearstmags.com/servlet/OrdersGateway?cds_mag_code=A99\u0026amp;cds_page_id=246801",
                    "RUNTIME_PUBLIC_FILE_HOSTNAME": "https://hmg-h-cdn.hearstapps.com",
                    "RUNTIME_CIAM_AUTH_URLS": "https://auth.mylo.id",
                    "RUNTIME_GLIMMER_BUNDLE_PATH": "8.91.0",
                    "RUNTIME_RUFUS_HOSTNAME": "https://preferencecenter.hearstmags.com",
                    "RUNTIME_JOKER_URL": "https://joker.hearstgames.com",
                    "RUNTIME_INSURANCE_LICENSE_KEY": "afb7f38f-6470-445f-b583-28ae8e1ed325",
                    "RUNTIME_TRADE_TOOL_DEALER_ID": "0441002",
                    "RUNTIME_CIAM_UI_URLS": "https://www.mylo.id",
                    "RUNTIME_GLIMMER_BUNDLE_PREFIX": "/_assets/glimmer",
                    "RUNTIME_VIDEO_PLAYER_URL": "https://glimmer.hearstapps.com",
                    "RUNTIME_CIAM_DATA_URL": "https://ciam-data.kubeprod.hearstapps.com/graphql",
                    "RUNTIME_GRAPHQL_TIMEOUT_FEED": "20000",
                    "RUNTIME_TRUECAR_SHOPPING_URL": "https://shopping.caranddriver.com",
                    "RUNTIME_RIDDLER_GAME_URL": "https://riddler.hearstgames.com",
                    "RUNTIME_GOOGLE_AUTH_CLIENT_ID": "966691262229-s6tftim27cpahri78teloejj82ms26hh.apps.googleusercontent.com",
                    "RUNTIME_SLIDES_PER_PAGE_GRID": "5",
                    "RUNTIME_JAM_SCRIPT_URL": "https://jam.hearstapps.com",
                    "RUNTIME_PRODUCTS_TIMEOUT": "30000",
                    "RUNTIME_CUSTOM_EVENT_DISPATCHER_URL": "https://oply.hearstapps.com/v1/events",
                    "RUNTIME_PUBLIC_IMAGE_DOMAIN": "https://hips.hearstapps.com",
                    "RUNTIME_MEDIA_GATEWAY_URL": "https://media.hearstapps.com",
                    "RUNTIME_INSURANCE_PANEL_ADUNIT_KEY": "DuS9oM6s",
                    "RUNTIME_PRODUCTS_URL": "https://products.hearstapps.com",
                    "RUNTIME_CONCORDE_URL": "https://search.hearstapps.com",
                    "RUNTIME_GRAPHQL_TOKEN": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6Imp3dF9zZWNyZXRfZnJlIn0.e30.wlF-prqbR7gQ28qeFJrGOTKcct5p5jzNfrO6NBcc7C8",
                    "RUNTIME_AFFILIATE_BUNDLE_VERSION": "8.4.4",
                    "RUNTIME_CARS_FOR_SALE_MODULE_URL": "/inventory",
                    "RUNTIME_LIVE_STREAM_URL": "https://player.vimeo.com/video/",
                    "RUNTIME_LIVE_STREAM_CHAT": "https://vimeo.com/live-chat/",
                    "RUNTIME_VIMEO_STREAM_URL": "https://vimeo.com/event/",
                    "RUNTIME_THEME_SLUG": "",
                    "RUNTIME_NEXT_LAZY": ""
                },
                "isFallback": false,
                "isExperimentalCompile": false,
                "dynamicIds": [35261, 13231, 92688, 10020],
                "gssp": true,
                "scriptLoader": []
            }
        </script>
    <script id="build-manifest">
        window.__BUILD_MANIFEST_CB = function () {
            return new Promise((e, n) => {
                document.body.appendChild(
                    Object.assign(document.createElement("script"), {
                        src: "/_assets/fre/scopes/hdm/_next/static/1797c57357/_buildManifest.js",
                        onload: e,
                        onerror: n,
                    })
                );
            });
        };
    </script>
    <script type="text/javascript" id="font-loader">
        (() => {
            const e = navigator?.connection?.effectiveType;
            if (e && "4g" !== e) return;
            const { search: n } = window.location;
            if (n.includes("disableFonts")) return;
            const t = document,
                o = () => {
                    const e = t.getElementById("deferred-fonts");
                    e && (e.media = "all");
                };
            "interactive" === document.readyState
                ? o()
                : window.addEventListener("DOMContentLoaded", o);
        })();
    </script>
</body>

</html><?php /**PATH C:\Users\DESKTOP\Desktop\Elle Laravel Blog\resources\views/pages/home.blade.php ENDPATH**/ ?>
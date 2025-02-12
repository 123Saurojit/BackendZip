<!DOCTYPE html>
<html lang="en-US" class="no-mobile no-tablet no-touch">

<head>
    <meta charset="utf-8" data-next-head="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" data-next-head="">
    <meta name="X-UA-Compatible" http-equiv="X-UA-Compatible" content="IE=edge" data-next-head="">
    <meta name="msapplication-tap-highlight" content="no" data-next-head="">
    <title data-next-head="">{{ Str::title($category) }}  | {{ env('APP_NAME') }}</title>

    @include('pages.layouts.seo')

    <script id="settings"
        data-nscript="beforeInteractive">window.__FRE = { env: "production", ver: "0.12.190", cdn: true }, window.__SITE = { brand: "elle", domain: "https://www.elle.com", dk: "aHR0cHM6Ly93d3cuZWxsZS5jb::20=", force_www: true, id: "530bacd4-96b2-4cfe-a9a6-1fbd7c749e22", locale: "en-us", locale_path: "", trailing_slash: true, assetPrefix: "/_assets/fre/scopes/hdm" }, Object.defineProperties(window, { ADSFREE: { value: false, writable: !1 }, GDPR: { value: true, writable: !1 } });</script>
    <script id="device-detect"
        data-nscript="beforeInteractive">(() => { const o = "ontouchstart" in window || !!navigator.maxTouchPoints || window.location.search.includes("__touch"), t = window.matchMedia("only screen and (max-width: 767px)").matches, n = o && t, i = o && !t, e = [n ? "mobile" : "no-mobile", i ? "tablet" : "no-tablet", o ? "touch" : "no-touch"]; window.touch = o, window.tablet = i, window.mobile = n, window.desktop = !(n || i), document.documentElement.classList.add(...e) })();</script>
    <script id="journey-info"
        data-nscript="beforeInteractive">(() => { if (window.JOURNEY_INFO) return; const e = new RegExp(["Publication-Access-for-Facebook", "adwallet"].join("|"), "i").test(navigator.userAgent); window.JOURNEY_INFO = { status: "pending", isBot: e }; const i = Number.parseInt("null", 10); Number.isNaN(i) || (window.JOURNEY_INFO.previewBlockerSlidePosition = i) })();</script>
    <script id="lux"
        data-nscript="beforeInteractive">LUX = (function () { const a = (typeof (LUX) !== "undefined" && typeof (LUX.gaMarks) !== "undefined" ? LUX.gaMarks : []); const d = (typeof (LUX) !== "undefined" && typeof (LUX.gaMeasures) !== "undefined" ? LUX.gaMeasures : []); const j = "LUX_start"; const k = window.performance; let l = (typeof (LUX) !== "undefined" && LUX.ns ? LUX.ns : (Date.now ? Date.now() : +(new Date()))); if (k && k.timing && k.timing.navigationStart) { l = k.timing.navigationStart } function f() { if (k && k.now) { return k.now() } const o = Date.now ? Date.now() : +(new Date()); return o - l } function b(n) { if (k) { if (k.mark) { return k.mark(n) } if (k.webkitMark) { return k.webkitMark(n) } } a.push({ name: n, entryType: "mark", startTime: f(), duration: 0 }); } function m(p, t, n) { if (typeof (t) === "undefined" && h(j)) { t = j } if (k) { if (k.measure) { if (t) { if (n) { return k.measure(p, t, n) } return k.measure(p, t) } return k.measure(p) } if (k.webkitMeasure) { return k.webkitMeasure(p, t, n) } } let r = 0; let o = f(); if (t) { const s = h(t); if (s) { r = s.startTime } else if (k && k.timing && k.timing[t]) { r = k.timing[t] - k.timing.navigationStart } else { return } } if (n) { const q = h(n); if (q) { o = q.startTime } else if (k && k.timing && k.timing[n]) { o = k.timing[n] - k.timing.navigationStart } else { return } } d.push({ name: p, entryType: "measure", startTime: r, duration: (o - r) }); } function h(n) { return c(n, g()) } function c(p, o) { for (i = o.length - 1; i >= 0; i--) { const n = o[i]; if (p === n.name) { return n } } return undefined } function g() { if (k) { if (k.getEntriesByType) { return k.getEntriesByType("mark") } if (k.webkitGetEntriesByType) { return k.webkitGetEntriesByType("mark") } } return a } return { mark: b, measure: m, gaMarks: a, gaMeasures: d } })(); LUX.ns = (Date.now ? Date.now() : +(new Date())); LUX.ac = []; LUX.cmd = function (a) { LUX.ac.push(a) }; LUX.init = function () { LUX.cmd(["init"]) }; LUX.send = function () { LUX.cmd(["send"]) }; LUX.addData = function (a, b) { LUX.cmd(["addData", a, b]) }; LUX_ae = []; window.addEventListener("error", function (a) { LUX_ae.push(a) }); LUX_al = []; if (typeof (PerformanceObserver) === "function" && typeof (PerformanceLongTaskTiming) === "function") { const LongTaskObserver = new PerformanceObserver(function (c) { const b = c.getEntries(); for (let a = 0; a < b.length; a++) { const d = b[a]; LUX_al.push(d) } }); try { LongTaskObserver.observe({ type: ["longtask"] }) } catch (e) { } }; LUX.label = "subsection";</script>
    <noscript data-n-css=""></noscript>
    <script defer="" nomodule="" src="js/polyfills-42372ed130431b0a.js"></script>
    <script id="onetrust-script" src="js/otSDKStub.js" async="" fetchpriority="high"
        data-domain-script="e435627f-2ac9-4bec-82c7-15e57b0250a3" data-document-language="true"
        data-nscript="beforeInteractive"></script>
    <script id="moapt-data-bundle" src="js/moapt-data.js" async="" fetchpriority="high"
        data-nscript="beforeInteractive"></script>
    <script id="moapt-bundle" src="js/moapt-bundle-hdm.js" async="" fetchpriority="high"
        data-nscript="beforeInteractive"></script>
  
    <link rel="stylesheet" href="/css/styles.css" media="none" onload="media='all'">
    <style type="text/css" id="deferred-fonts" media="all">
        @font-face {
            font-family: 'NeueHaasUnica';
            src: url('fonts/16eece37-9438-4888-8270-f6e32bc95fad.75b69ee.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'Inter';
            src: url('fonts/inter-v3-latin-regular.c8ad008.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'SaolDisplay';
            src: url('fonts/Saol-Display-Regular.1a09c0e.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: fallback;
        }

        @font-face {
            font-family: 'SaolText';
            src: url('fonts/Saol-Text-Regular.269d6f7.woff2') format('woff2');
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
    <style data-emotion="css-global 1gp7lbu">
        @font-face {
            font-family: "NeueHaasUnica-fallback";
            size-adjust: 103;
            src: local('Roboto');
        }

        @font-face {
            font-family: "SaolDisplay-fallback";
            size-adjust: 94;
            src: local('Roboto');
        }

        @font-face {
            font-family: "SaolText-fallback";
            size-adjust: 96.39999999999998;
            src: local('Roboto');
        }

        @font-face {
            font-family: "NeueHaasUnica-roboto";
            src: local('Roboto');
            size-adjust: 102.57%;
            ascent-override: 93.50%;
            descent-override: 26.81%;
        }

        @font-face {
            font-family: "NeueHaasUnica-local";
            src: local('Arial');
            size-adjust: 102.88%;
            ascent-override: 93.22%;
            descent-override: 26.73%;
        }

        @font-face {
            font-family: "NeueHaasUnica-upcase-roboto";
            src: local('Roboto');
            size-adjust: 104.04%;
            ascent-override: 92.17%;
            descent-override: 26.43%;
        }

        @font-face {
            font-family: "NeueHaasUnica-upcase-local";
            src: local('Arial');
            size-adjust: 96.40%;
            ascent-override: 99.48%;
            descent-override: 28.53%;
        }

        @font-face {
            font-family: "Inter-roboto";
            src: local('Roboto');
            size-adjust: 107.32%;
            ascent-override: 90.27%;
            descent-override: 22.50%;
        }

        @font-face {
            font-family: "Inter-local";
            src: local('Arial');
            size-adjust: 107.64%;
            ascent-override: 90.00%;
            descent-override: 22.43%;
        }

        @font-face {
            font-family: "SaolDisplay-upcase-roboto";
            src: local('Roboto');
            size-adjust: 98.44%;
            ascent-override: 76.19%;
            descent-override: 25.40%;
            line-gap-override: 31.49%;
        }

        @font-face {
            font-family: "SaolDisplay-upcase-local";
            src: local('Georgia');
            size-adjust: 91.73%;
            ascent-override: 81.76%;
            descent-override: 27.25%;
            line-gap-override: 33.80%;
        }

        @font-face {
            font-family: "SaolDisplay-roboto";
            src: local('Roboto');
            size-adjust: 94.13%;
            ascent-override: 79.68%;
            descent-override: 26.56%;
            line-gap-override: 32.93%;
        }

        @font-face {
            font-family: "SaolDisplay-local";
            src: local('Georgia');
            size-adjust: 95.04%;
            ascent-override: 78.92%;
            descent-override: 26.31%;
            line-gap-override: 32.62%;
        }

        @font-face {
            font-family: "SaolText-roboto";
            src: local('Roboto');
            size-adjust: 96.61%;
            ascent-override: 77.63%;
            descent-override: 25.88%;
            line-gap-override: 32.09%;
        }

        @font-face {
            font-family: "SaolText-local";
            src: local('Georgia');
            size-adjust: 97.54%;
            ascent-override: 76.89%;
            descent-override: 25.63%;
            line-gap-override: 31.78%;
        }
    </style>
    <style
        data-emotion="css 16ximrz 1kkonqv fpbvzc 1na6dr9 o3kmfn 1lgifh3 xwjhf9 lr5w6x 1fqyieb 75z2gz pjjyzu njpu5j 1vjstyg tm0o7j bbrknr sfww4i 1j48blf 1yhciq3 1joeej0 1o2meyd 40dj9l 1fj2vwy 1z0ns1o 0 1m67141 1cr3k5e jloo3l j0tz68 1fkzqk5 22doht ltkaau kcunsj 1ba3ot6 vz4ldn spe6hg 1cd8suq 1y3x20e rk6tbh 1ldw07e egbktm 15d0m0c 1bi1xk0 1uvix1y zxq36b 100k4td 1c9979j 1cjybzt oa9wak 1nabglw 15fa8f5 1hpb4i6 2e1l8j 17nzgrb 1dmjnw1 hnknpq ha23m7 hlnwb5 9p2aje 1my0a2m 1pxdqsn ftsoqv 1dc3fjj m39hn y4yi8 3jfnbc om4gqg 1fctiym w9tso1 19z6se if1pks viqse1 ztgqyu 1aj0fuk 1c7d8p3 1nkb8av 1njatnj 1tddtcr 3ioj3p 1gki4z3 1pqlqch 1yh8icf d5ojda 10ftiau 1ss7lvu iz4391 1gtkda7 6uae8g 70qvj9 n9en60 jmxdxt kzigki 1vc4yu1 15si9rg j307y1 i7117i lqx6q4 r7fsoq 5tjtfu 15y864j vq806a 1wohilq 6bu6ey 1o9hvj q82q9a">
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

        @media(min-width: 90rem) {
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
            font-family: NeueHaasUnica, NeueHaasUnica-fallback, NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
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
            -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
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
            background-color: #F3F4F6;
            color: #A3A3A3;
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
            font-family: NeueHaasUnica, NeueHaasUnica-fallback, NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
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
            -webkit-transition: padding 0.3s linear, background-color 0.2s linear;
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
            -webkit-mask: url(/images/globe.3f172dc.svg);
            mask: url(/images/globe.3f172dc.svg);
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
            font-family: NeueHaasUnica, NeueHaasUnica-fallback, NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
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
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto, NeueHaasUnica-upcase-local, Arial, sans-serif;
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
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial, Sans-serif;
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
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial, Sans-serif;
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

        @media(max-width: 73.75rem) {
            .css-1o2meyd {
                height: 96px;
            }
        }

        @media(min-width: 64rem) {
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

        @media(max-width: 64rem) {
            .css-40dj9l {
                background: inherit;
            }
        }

        @media(min-width: 64rem) {
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
            -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
            transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            margin-left: 0.9375rem;
            border-radius: 0;
            line-height: 0.7;
        }

        @media(max-width: 64rem) {
            .css-1fj2vwy {
                padding: 0.5rem 0.25rem 0.5rem 0.625rem;
            }
        }

        @media(min-width: 20rem) {
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

        @media(min-width: 40.625rem) and (max-width: 90rem) {
            .css-1fj2vwy {
                margin-left: 2.5rem;
            }
        }

        @media(min-width: 48rem) {
            .css-1fj2vwy {
                padding: 0.5rem 0.625rem 0.5rem 0.625rem;
            }
        }

        @media(min-width: 90rem) {
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
            background-color: #F3F4F6;
            color: #A3A3A3;
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

        @media(max-width: 48rem) {
            .css-1z0ns1o {
                width: 3.463rem;
            }
        }

        @media(min-width: 48rem) {
            .css-1z0ns1o {
                height: 1.563rem;
                width: 4.329rem;
            }
        }

        @media(min-width: 64rem) {
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
            border-bottom: thin solid #F5F5F5;
            border-top: thin solid #F5F5F5;
        }

        @media(min-width: 61.25rem) {
            .css-1m67141 {
                border-bottom: 0;
                border-top: 0;
            }
        }

        @media(min-width: 64rem) {
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

        @media(min-width: 40.625rem) and (max-width: 61.25rem) {
            .css-1cr3k5e {
                padding-left: 2.625rem;
            }
        }

        @media(min-width: 48rem) {
            .css-1cr3k5e {
                padding-left: 3.125rem;
            }
        }

        @media(min-width: 64rem) {
            .css-1cr3k5e {
                padding-left: 0rem;
            }
        }

        .css-jloo3l {
            white-space: nowrap;
            padding: 0 1.875rem 0 1.25rem;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto, NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.75rem;
            line-height: 2rem;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        @media(min-width: 64rem) {
            .css-jloo3l {
                padding: 0 1.25rem 0 1.25rem;
            }
        }

        .css-j0tz68 {
            display: inline-block;
            min-height: 3rem;
            min-width: 3rem;
            padding: .5rem 0 .5rem 0;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            color: inherit;
            line-height: 2.58918;
        }

        @media(min-width: 61.25rem) {
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
            padding: .5rem 0 .5rem 0;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            color: inherit;
            line-height: 2.58918;
        }

        @media(min-width: 61.25rem) {
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

        .css-22doht {
            display: inline-block;
            min-height: 3rem;
            min-width: 3rem;
            padding: .5rem 0 .5rem 0;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            color: inherit;
            line-height: 2.58918;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        @media(min-width: 61.25rem) {
            .css-22doht {
                color: inherit;
            }
        }

        .css-22doht:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        .css-ltkaau {
            display: inline-block;
            min-height: 3rem;
            min-width: 3rem;
            padding: .5rem 0 .5rem 0;
            text-align: center;
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            transition: outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out;
            color: inherit;
            line-height: 2.58918;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        @media(min-width: 61.25rem) {
            .css-ltkaau {
                color: inherit;
            }
        }

        .css-ltkaau:hover {
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
            font-family: NeueHaasUnica, NeueHaasUnica-fallback, NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
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
                -webkit-transition: box-shadow 0.2s linear, background 0.2s linear;
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

        @media(min-width: 40.625rem) and (max-width: 90rem) {
            .css-1ba3ot6 {
                padding-right: 2.5rem;
            }
        }

        @media(min-width: 64rem) {
            .css-1ba3ot6 {
                padding-right: 0rem;
            }
        }

        @media(min-width: 90rem) {
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
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto, NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.75rem;
            line-height: 2rem;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        @media(min-width: 48rem) {
            .css-vz4ldn {
                margin-left: 0.9375rem;
            }
        }

        .css-spe6hg {
            white-space: nowrap;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto, NeueHaasUnica-upcase-local, Arial, sans-serif;
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

        @media(min-width: 64rem) {
            .css-rk6tbh {
                margin-right: var(--sponsor-panel-width, auto);
            }
        }

        .css-1ldw07e {
            position: relative;
            overflow: hidden;
            display: grid;
            width: 100%;
            padding-bottom: 100%;
            margin-bottom: 0.9375rem;
        }

        @media(min-width: 40.625rem) {
            .css-1ldw07e {
                padding-bottom: 50%;
            }
        }

        @media(min-width: 61.25rem) and (max-width: 100rem) {
            .css-1ldw07e {
                padding-bottom: 30%;
            }
        }

        @media(min-width: 64rem) {
            .css-1ldw07e {
                margin-bottom: 1.25rem;
            }
        }

        @media(min-width: 100rem) {
            .css-1ldw07e {
                padding-bottom: 20%;
            }
        }

        .css-egbktm {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0rem;
        }

        .css-egbktm img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .css-15d0m0c {
            position: absolute;
            padding: 0 0.938rem;
            width: 100%;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            bottom: initial;
            height: 100%;
            margin: 0rem;
        }

        @media(min-width: 40.625rem) {
            .css-15d0m0c {
                padding: 0 2.5rem;
            }
        }

        .css-1bi1xk0 {
            text-align: left;
            background-color: #ffffff;
            bottom: 0;
            color: #000000;
            display: -webkit-box;
            display: -webkit-unset;
            display: -ms-unsetbox;
            display: unset;
            font-family: SaolDisplay, SaolDisplay-upcase-roboto, SaolDisplay-upcase-local, Georgia, Times, serif;
            font-weight: normal;
            padding: 0.625rem;
            position: absolute;
            text-transform: uppercase;
        }

        @media(max-width: 48rem) {
            .css-1bi1xk0 {
                font-size: 2.8125rem;
                line-height: 1.1;
                margin-bottom: 1.25rem;
                padding: 1.875rem 1.875rem 1.25rem;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1bi1xk0 {
                font-size: 2.8125rem;
                line-height: 1;
                margin-bottom: 1.875rem;
                padding: 1.875rem 1.875rem 1.25rem;
            }
        }

        @media(min-width: 64rem) {
            .css-1bi1xk0 {
                font-size: 3.75rem;
                line-height: 1;
                margin-bottom: 2.5rem;
                padding: 2.3rem 1.875rem 1.5rem;
            }
        }

        .css-1uvix1y {
            list-style: none;
            margin: 0 auto;
            max-width: 75rem;
            padding: 1.25rem 1.25rem 0 1.6875rem;
            margin-bottom: 1.25rem;
            margin-top: -1.25rem;
            text-align: center;
            color: #525252;
            font-family: NeueHaasUnica, NeueHaasUnica-fallback, NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 1.3;
        }

        @media(min-width: 40.625rem) {
            .css-1uvix1y {
                padding: 1.25rem 2.5rem 0 3.3125rem;
            }
        }

        @media(min-width: 90rem) {
            .css-1uvix1y {
                padding: 1.25rem 0 0 0.8125rem;
            }
        }

        .css-zxq36b {
            display: inline;
        }

        .css-zxq36b+li:before {
            padding: 0.25rem;
            content: ">";
        }

        .css-100k4td {
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .css-100k4td:hover {
            color: #000000;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        .css-1c9979j {
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .css-1c9979j:hover {
            color: #000000;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        .css-1c9979j:hover {
            color: #000000;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            text-decoration-thickness: 0.0625rem;
            text-underline-offset: 0.25rem;
        }

        .css-1cjybzt {
            padding: 0.9375rem 0;
            min-width: 45.5rem;
            text-align: center;
            z-index: 2000000;
            position: relative;
            display: none;
            background-color: #E5E5E5;
            color: #000;
            width: 100%;
        }

        @media(max-width: 40.625rem) {
            .css-1cjybzt {
                position: -webkit-sticky;
                position: sticky;
                top: calc(var(--mobile-sticky-header-height, 0px) + var(--sticky-secondary-header-height, 0px));
                padding-bottom: 0.9375rem;
            }
        }

        @media(min-width: 48rem) {
            .css-1cjybzt {
                min-height: 121px;
            }
        }

        @media(min-width: 61.25rem) {
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

        @media(max-width: 48rem) {
            .css-oa9wak {
                padding-top: 0;
            }
        }

        @media(min-width: 40.625rem) {
            .css-oa9wak {
                padding-top: 0.625rem;
            }
        }

        @media(min-width: 48rem) {
            .css-oa9wak {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media(min-width: 61.25rem) {
            .css-oa9wak {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header" "content";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: minmax(auto, 75rem);
            }
        }

        @media(min-width: 64rem) {
            .css-oa9wak {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media(min-width: 73.75rem) {
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

        @media(min-width: 40.625rem) {
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

        @media(max-width: 48rem) {
            .css-2e1l8j {
                padding: 1.5625rem 0;
            }
        }

        @media(min-width: 40.625rem) {
            .css-2e1l8j {
                padding: 1.5625rem 0 0;
            }
        }

        @media(min-width: 64rem) {
            .css-2e1l8j {
                padding: 1.875rem 0 0;
            }
        }

        .css-17nzgrb {
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: SaolDisplay, SaolDisplay-fallback, SaolDisplay-roboto, SaolDisplay-local, Georgia, Times, serif;
            font-weight: normal;
        }

        @media(max-width: 48rem) {
            .css-17nzgrb {
                font-size: 2.125rem;
                line-height: 1.1;
            }
        }

        @media(min-width: 40.625rem) {
            .css-17nzgrb {
                font-size: 2.125rem;
                line-height: 1.2;
            }
        }

        @media(min-width: 64rem) {
            .css-17nzgrb {
                font-size: 2.25rem;
                line-height: 1.1;
            }
        }

        @media(min-width: 73.75rem) {
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
            font-family: SaolDisplay, SaolDisplay-fallback, SaolDisplay-roboto, SaolDisplay-local, Georgia, Times, serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media(max-width: 48rem) {
            .css-hnknpq {
                font-size: 2.125rem;
                line-height: 1.1;
            }
        }

        @media(min-width: 40.625rem) {
            .css-hnknpq {
                font-size: 2.125rem;
                line-height: 1.2;
            }
        }

        @media(min-width: 64rem) {
            .css-hnknpq {
                font-size: 2.25rem;
                line-height: 1.1;
            }
        }

        @media(min-width: 73.75rem) {
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

        .css-hlnwb5 {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-four-across;
        }

        @media(max-width: 48rem) {
            .css-hlnwb5 {
                padding-top: 0;
            }
        }

        @media(min-width: 40.625rem) {
            .css-hlnwb5 {
                padding-top: 0.625rem;
            }
        }

        @media(min-width: 48rem) {
            .css-hlnwb5 {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media(min-width: 61.25rem) {
            .css-hlnwb5 {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header header header" "content content ad";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: auto auto auto;
            }
        }

        @media(min-width: 64rem) {
            .css-hlnwb5 {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media(min-width: 73.75rem) {
            .css-hlnwb5 {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header header header rgut" "lgut content content ad rgut";
                grid-template-columns: 1fr repeat(3, minmax(auto, 25rem)) 1fr;
            }
        }

        .css-9p2aje {
            contain: layout;
            display: grid;
            grid-area: content;
            grid-gap: 1rem;
            grid-template-columns: repeat(2, 1fr);
        }

        @media(min-width: 40.625rem) {
            .css-9p2aje {
                grid-gap: 1.25rem;
            }
        }

        @media(min-width: 48rem) {
            .css-9p2aje {
                grid-gap: 1.25rem;
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(min-width: 64rem) {
            .css-9p2aje {
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
            font-family: NeueHaasUnica, NeueHaasUnica-fallback, NeueHaasUnica-roboto, NeueHaasUnica-local, Arial, sans-serif;
            font-weight: normal;
            word-break: break-word;
        }

        @media(max-width: 48rem) {
            .css-m39hn {
                font-size: 1rem;
                line-height: 1.3;
                letter-spacing: -0.0225rem;
                margin: 0.75rem 0 0;
            }
        }

        @media(min-width: 40.625rem) {
            .css-m39hn {
                font-size: 1rem;
                line-height: 1.3;
                letter-spacing: 0.0225rem;
                margin: 0.9375rem 0 0;
            }
        }

        @media(min-width: 64rem) {
            .css-m39hn {
                font-size: 1rem;
                line-height: 1.4;
                margin: 0.9375rem 0 0.625rem;
            }
        }

        @media(min-width: 73.75rem) {
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

        @media(max-width: 40.625rem) {
            .css-y4yi8 {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: start;
                justify-content: start;
                position: relative;
            }
        }

        @media(max-width: 61.25rem) {
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

        @media(min-width: 48rem) {
            .css-y4yi8 {
                width: calc(100% + (2.5rem * 2));
                margin-left: -2.5rem;
                min-height: 138px;
            }
        }

        @media(min-width: 61.25rem) {
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

        @media(max-width: 40.625rem) {
            .css-y4yi8:after {
                position: absolute;
                bottom: 0rem;
                width: -webkit-fill-available;
            }
        }

        @media(max-width: 61.25rem) {
            .css-y4yi8:after {
                border-bottom: thin solid #E5E5E5;
            }
        }

        @media(min-width: 48rem) {
            .css-y4yi8:after {
                margin: 0.9375rem 2.5rem 0;
            }
        }

        @media(min-width: 61.25rem) {
            .css-y4yi8:after {
                visibility: hidden;
            }
        }

        @media(min-width: 75rem) {
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
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial, Sans-serif;
            font-size: 0.70028rem;
        }

        @media(min-width: 48rem) {
            .css-3jfnbc {
                margin: 0 2.5rem;
            }
        }

        @media(min-width: 75rem) {
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
            background-color: #E5E5E5;
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

        @media(min-width: 61.25rem) {

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

        @media(max-width: 40.625rem) {
            .css-om4gqg {
                position: -webkit-sticky;
                position: sticky;
                top: calc(var(--mobile-sticky-header-height, 0px) + var(--sticky-secondary-header-height, 0px));
                padding-bottom: 0.9375rem;
            }
        }

        @media(min-width: 61.25rem) {
            .css-om4gqg {
                left: unset;
            }
        }

        .css-1fctiym {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-three-col;
        }

        @media(max-width: 48rem) {
            .css-1fctiym {
                padding-top: 0;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1fctiym {
                padding-top: 0.625rem;
            }
        }

        @media(min-width: 48rem) {
            .css-1fctiym {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media(min-width: 61.25rem) {
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

        @media(min-width: 64rem) {
            .css-1fctiym {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media(min-width: 73.75rem) {
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

        @media(min-width: 48rem) {
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

        @media(max-width: 48rem) {
            .css-19z6se {
                padding-bottom: 2.5rem;
            }
        }

        @media(min-width: 40.625rem) {
            .css-19z6se {
                padding-bottom: 0;
            }
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
            font-family: SaolText, SaolText-fallback, SaolText-roboto, SaolText-local, Georgia, Times, serif;
            font-weight: normal;
            letter-spacing: 0.0225rem;
            word-break: break-word;
        }

        @media(max-width: 48rem) {
            .css-1aj0fuk {
                font-size: 1.0625rem;
                line-height: 1.4;
                padding-right: 0.9375rem;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1aj0fuk {
                font-size: 1rem;
                line-height: 1.3;
                padding-right: 2rem;
            }
        }

        @media(min-width: 64rem) {
            .css-1aj0fuk {
                font-size: 1rem;
                line-height: 1.4;
                padding-right: 2rem;
            }
        }

        @media(min-width: 73.75rem) {
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

        @media(max-width: 40.625rem) {
            .css-1c7d8p3 {
                position: -webkit-sticky;
                position: sticky;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                -webkit-justify-content: start;
                justify-content: start;
            }
        }

        @media(min-width: 48rem) {
            .css-1c7d8p3 {
                min-height: 138px;
            }
        }

        @media(min-width: 61.25rem) {
            .css-1c7d8p3 {
                margin: 1.25rem auto;
            }
        }

        @media(min-width: 64rem) {
            .css-1c7d8p3 {
                max-width: 75rem;
            }
        }

        .css-1c7d8p3.clearfix {
            clear: both;
        }

        .css-1c7d8p3:after {
            content: "";
            border-bottom: thin solid #E5E5E5;
            margin: 0.9375rem 0.938rem 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: static;
        }

        @media(max-width: 40.625rem) {
            .css-1c7d8p3:after {
                position: absolute;
                bottom: 0rem;
                width: -webkit-fill-available;
            }
        }

        @media(min-width: 48rem) {
            .css-1c7d8p3:after {
                margin: 0.9375rem 2.5rem 0;
            }
        }

        @media(min-width: 75rem) {
            .css-1c7d8p3:after {
                margin: 0.9375rem 0 0;
            }
        }

        .css-1c7d8p3 #gpt-ad-leaderboard-bottom {
            position: -webkit-sticky;
            position: sticky;
            margin: 0 calc(50% - 50vw);
        }

        @media(min-width: 48rem) {
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
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial, Sans-serif;
            font-size: 0.70028rem;
        }

        @media(min-width: 48rem) {
            .css-1nkb8av {
                margin: 0 2.5rem;
            }
        }

        @media(min-width: 75rem) {
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
            background-color: #E5E5E5;
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

        @media(max-width: 40.625rem) {
            .css-1njatnj {
                position: -webkit-sticky;
                position: sticky;
                top: calc(var(--mobile-sticky-header-height, 0px) + var(--sticky-secondary-header-height, 0px));
                padding-bottom: 0.9375rem;
            }
        }

        @media(min-width: 73.75rem) {
            .css-1njatnj {
                margin: 0 calc((100vw - 75rem) / -2);
            }
        }

        .css-1tddtcr {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-four-across;
        }

        @media(max-width: 48rem) {
            .css-1tddtcr {
                padding-top: 0;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1tddtcr {
                padding-top: 0.625rem;
            }
        }

        @media(min-width: 48rem) {
            .css-1tddtcr {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media(min-width: 61.25rem) {
            .css-1tddtcr {
                display: grid;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header" "content";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: minmax(auto, 75rem);
            }
        }

        @media(min-width: 64rem) {
            .css-1tddtcr {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media(min-width: 73.75rem) {
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

        @media(min-width: 40.625rem) {
            .css-3ioj3p {
                grid-gap: 0.9375rem;
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media(min-width: 48rem) {
            .css-3ioj3p {
                grid-gap: 0.9375rem;
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media(min-width: 64rem) {
            .css-3ioj3p {
                grid-gap: 1.5625rem;
            }
        }

        .css-1gki4z3 {
            padding: 0 0.938rem 1.25rem 0.938rem;
            background-color: bg-block-three-col;
        }

        @media(max-width: 48rem) {
            .css-1gki4z3 {
                padding-top: 0;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1gki4z3 {
                padding-top: 0.625rem;
            }
        }

        @media(min-width: 48rem) {
            .css-1gki4z3 {
                padding: 0 2.5rem 1.875rem 2.5rem;
                padding-bottom: 1.5625rem;
                padding-top: 1.5625rem;
            }
        }

        @media(min-width: 61.25rem) {
            .css-1gki4z3 {
                display: grid;
                grid-gap: 1.25rem;
                grid-row-gap: 1.25rem;
                grid-column-gap: 1.25rem;
                grid-template-areas: "header header header" "content content ad";
                grid-template-rows: repeat(2, auto);
                grid-template-columns: auto auto auto;
            }
        }

        @media(min-width: 64rem) {
            .css-1gki4z3 {
                margin: 0 auto;
                padding-bottom: 2.5rem;
                padding-top: 1.25rem;
            }
        }

        @media(min-width: 73.75rem) {
            .css-1gki4z3 {
                grid-column-gap: 0rem;
                grid-template-areas: "lgut header header header rgut" "lgut content content ad rgut";
                grid-template-columns: 1fr repeat(3, minmax(auto, 25rem)) 1fr;
            }
        }

        .css-1pqlqch {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: grid;
            grid-template-columns: 40% 1fr;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        @media(max-width: 48rem) {
            .css-1pqlqch {
                padding: 1.25rem 0 0.625rem;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1pqlqch {
                padding: 0.9375rem 0 0.3125rem;
            }
        }

        @media(min-width: 64rem) {
            .css-1pqlqch {
                padding: 1.25rem 0 0.625rem;
            }
        }

        .css-1pqlqch h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1pqlqch h2 span:hover {
            color: #808080;
        }

        .css-1yh8icf {
            display: grid;
            grid-template-columns: 40% 1fr;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            -webkit-text-decoration: none;
            text-decoration: none;
            display: grid;
            grid-template-columns: 40% 1fr;
            grid-gap: 0.9375rem;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        @media(max-width: 48rem) {
            .css-1yh8icf {
                padding: 1.25rem 0 0.625rem;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1yh8icf {
                padding: 0.9375rem 0 0.3125rem;
            }
        }

        @media(min-width: 64rem) {
            .css-1yh8icf {
                padding: 1.25rem 0 0.625rem;
            }
        }

        @media(max-width: 48rem) {
            .css-1yh8icf {
                padding: 1.25rem 0 0.625rem;
            }
        }

        @media(min-width: 40.625rem) {
            .css-1yh8icf {
                padding: 0.9375rem 0 0.3125rem;
            }
        }

        @media(min-width: 64rem) {
            .css-1yh8icf {
                padding: 1.25rem 0 0.625rem;
            }
        }

        .css-1yh8icf h2 span {
            -webkit-transition: color 0.3s ease-in-out;
            transition: color 0.3s ease-in-out;
        }

        .css-1yh8icf h2 span:hover {
            color: #808080;
        }

        .css-d5ojda {
            -webkit-text-decoration: none;
            text-decoration: none;
            display: block;
            margin-top: 0;
            margin-bottom: 0.3125rem;
            font-family: SaolText, SaolText-fallback, SaolText-roboto, SaolText-local, Georgia, Times, serif;
            font-weight: normal;
            letter-spacing: 0.0225rem;
            word-break: break-word;
        }

        @media(max-width: 48rem) {
            .css-d5ojda {
                font-size: 1.0625rem;
                line-height: 1.3;
                padding-right: 0.9375rem;
            }
        }

        @media(min-width: 40.625rem) {
            .css-d5ojda {
                font-size: 1rem;
                line-height: 1.3;
                padding-right: 2rem;
            }
        }

        @media(min-width: 64rem) {
            .css-d5ojda {
                font-size: 1rem;
                line-height: 1.4;
                padding-right: 2rem;
            }
        }

        @media(min-width: 73.75rem) {
            .css-d5ojda {
                font-size: 1rem;
                line-height: 1.4;
            }
        }

        @media (any-hover: hover) {
            .css-d5ojda {
                -webkit-transition: color 0.3s ease-in-out;
                transition: color 0.3s ease-in-out;
            }

            .css-d5ojda:hover {
                color: link-hover;
            }
        }

        .css-10ftiau {
            position: relative;
            padding-top: 1.875rem;
            padding-bottom: 1.875rem;
            background-color: #000000;
            color: #fff;
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto, NeueHaasUnica-upcase-local, Arial, sans-serif;
            font-size: 0.70028rem;
            line-height: 1.4;
            letter-spacing: 0.075rem;
            text-transform: uppercase;
        }

        @media(min-width: 64rem) {
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

        @media(min-width: 64rem) {
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

        @media(min-width: 40.625rem) {
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

        @media(min-width: 48rem) {
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

        @media(min-width: 48rem) {
            .css-6uae8g {
                margin-left: 0rem;
            }
        }

        @media(min-width: 61.25rem) {
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

        @media(min-width: 48rem) {
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
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto, NeueHaasUnica-upcase-local, Arial, sans-serif;
            -webkit-transition: background 0.3s ease-in-out;
            transition: background 0.3s ease-in-out;
        }

        @media(max-width: 48rem) {
            .css-15y864j {
                text-align: left;
            }
        }

        @media(min-width: 48rem) {
            .css-15y864j {
                text-align: center;
            }
        }

        .css-15y864j:hover {
            background-color: #D4D4D4;
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
            font-family: NeueHaasUnica, NeueHaasUnica-upcase-roboto, NeueHaasUnica-upcase-local, Arial, sans-serif;
            -webkit-transition: background 0.3s ease-in-out;
            transition: background 0.3s ease-in-out;
        }

        @media(max-width: 48rem) {
            .css-vq806a {
                text-align: left;
            }
        }

        @media(min-width: 48rem) {
            .css-vq806a {
                text-align: center;
            }
        }

        .css-vq806a:hover {
            background-color: #D4D4D4;
            color: #000;
        }

        .css-1wohilq {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 10000000;
            background-color: #E5E5E5;
            color: #000000;
            text-align: center;
        }

        @media(min-width: 61.25rem) {
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
            font-family: Inter, Inter-roboto, Inter-local, Helvetica, Arial, Sans-serif;
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
            box-shadow: 0 -5px 12px rgba(0, 0, 0, 0.2), 0 -10px 20px rgba(0, 0, 0, 0.12), 0 -20px 40px rgba(0, 0, 0, 0.14);
            border-top: 0;
            z-index: 14000001;
        }

        @media(min-width: 20rem) and (max-width: 100rem) {
            .css-q82q9a {
                padding: 24px max(16px, 50% - 1200px / 2);
            }
        }

        @media(min-width: 40.625rem) {
            .css-q82q9a {
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
            }
        }

        @media(min-width: 64rem) {
            .css-q82q9a {
                padding-top: 40px;
                padding-bottom: 40px;
            }
        }

        .css-q82q9a [data-theme-key='button-primary']:hover {
            background-color: transparent;
            color: #fff;
        }
    </style>
</head>

<body><template id="page-settings" data-nav-height="96"></template>
    <div id="__next">
     
        @include('pages.layouts.header')

        @php
            $catile = Str::title($category) ;
        @endphp

        <div class="css-1cd8suq ex7z30p0"></div>
        <div id="journey-topnav" class="css-1y3x20e ei7rc5z0"></div>
        <div class="oop-ad css-0 e7hrg971">
            <div id="gpt-ad-oop-1" class="ad-container css-0 e7hrg970"></div>
        </div>
        <main id="main-content" class="css-rk6tbh ewq0ot90">
            <header class="css-1ldw07e e19s4qyo3">
                <picture class="css-egbktm e1i0vlu30">
                    <source srcset="/images/elm110123wlzoey-012-668d8f69b560f_3.png" media="(min-width: 100rem)">
                    <source srcset="/images/elm110123wlzoey-012-668d8f69b560f_2.png" media="(min-width: 61.25rem)">
                    <source srcset="/images/elm110123wlzoey-012-668d8f69b560f_1.png" media="(min-width: 40.625rem)">
                    <source srcset="/images/elm110123wlzoey-012-668d8f69b560f.png" media="(max-width: 48rem)"><img
                        src="/images/elm110123wlzoey-012-668d8f69b560f.png"
                        alt="sweater, skirt, sandals, handbag, bottega veneta"
                        title="sweater, skirt, sandals, handbag, bottega veneta" width="1900" height="1425"
                        decoding="async" fetchpriority="high" sizes="100vw">
                </picture>
                <div class="css-15d0m0c e1ctoqpg5">
                    <h1 class="css-1bi1xk0 e1ctoqpg3">{{ $catile }}</h1>
                </div>
            </header>
            <nav aria-label="breadcrumbs" data-lazy-id="P0-5" class="css-0 e3morl63">
                <ol itemscope="" itemtype="https://schema.org/BreadcrumbList" class="css-1uvix1y e3morl62">
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"
                        class="css-zxq36b e3morl61"><a data-theme-key="base-link" itemprop="item" href="/category/{{ $category }}"
                            data-vars-ga-ux-element="Breadcrumbs" data-vars-ga-call-to-action="Culture"
                            data-vars-ga-outbound-link="https://www.elle.com/culture/"
                            class="e3morl60 css-1c9979j e1c1bym14"><span itemprop="name">{{ $catile }}</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    
                </ol>
            </nav>
            <div id="gpt-leaderboard-ad" class="css-1cjybzt ewg5wdb1"></div>

            @foreach ($posts->slice(0, 1) as $post)
                            @php
                                $url = route('blog', ['slug' => $post->slug]);
                                $title = Str::title($post->title);

                                $image = $post->thumbnail;
                                $description = $post->description;

                                $date = $post->created_at->format('d.m.y');
                                $author = $post->author?->name;
                                $cat = $post->category->category;
                                $catUrl = route('category', ['category' => $cat]);
                            @endphp

            <section data-vars-block-curation="subsection" data-vars-block-type="Big Story Block"
                data-vars-block-slot="1" data-vars-block-id="0cafcbcd-9f82-4af8-b5fa-6038e066bd56"
                data-vars-block-heading="" id="b8fc0fb6-f34e-428e-b76a-d31dc7ae2ef5" data-lazy-id="P0-7"
                class="css-oa9wak e1smmp0v0">
                <a data-theme-key="custom-item" data-vars-cta="Big Story Block 0"
                    data-vars-ga-position="1"
                    data-vars-ga-call-to-action="Lady Gaga on Fighting for the LGBTQ+ Community"
                    data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a63592257/lady-gaga-fight-for-lgbtq-community-trump-quote/"
                    href="{{ $url }}"
                    class="ee4ms352 css-15fa8f5 e1c1bym14">
                    <div data-vars-cta="Big Story Block 0" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="Lady Gaga on Fighting for the LGBTQ+ Community"
                        data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a63592257/lady-gaga-fight-for-lgbtq-community-trump-quote/"
                        class="css-1hpb4i6 ee4ms351">
                        <img
                            alt="a figure wearing a draped black fabric garment stands in a minimalist indoor space"
                            title="a figure wearing a draped black fabric garment stands in a minimalist indoor space"
                            fetchpriority="high" width="3300" height="4400" decoding="async" data-nimg="1"
                            style="color:transparent;width:100%;max-height:800px; object-fit:cover ; object-position:top" sizes="100vw"
                            src="{{ $image }}" class="css-0 e1g79fud0"></div>
                    <div data-theme-key="custom-item-content" class="css-2e1l8j ee4ms350">
                        <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6"><span aria-hidden="true"
                                data-theme-key="title-design-element-before" class="css-1dmjnw1 eagam8p0"></span><span
                                data-theme-key="custom-item-title-text" class="css-hnknpq e10ip9lg5">
                                {{ $title }}
                                </span><span
                                aria-hidden="true" data-theme-key="title-design-element-after"
                                class="css-ha23m7 eagam8p1"></span></h2>
                    </div>
                </a>
            </section>

            @endforeach

            <section data-vars-block-curation="subsection" data-vars-block-type="4 Across Block"
                data-vars-block-slot="2" data-vars-block-id="04c848e5-9f92-4e6e-8c92-e563a342c1f1"
                data-vars-block-heading="" id="ea5ee630-4ed1-4588-a208-ee94769e638a" data-lazy-id="P0-8"
                class="css-hlnwb5 ezpcz1b0">
                <div data-theme-key="four-across-layout" class="css-9p2aje ezpcz1b1">

                    @foreach ($posts->slice(1, 4) as $post)
                            @php
                                $url = route('blog', ['slug' => $post->slug]);
                                $title = Str::title($post->title);

                                $image = $post->thumbnail;
                                $description = $post->description;

                                $date = $post->created_at->format('d.m.y');
                                $author = $post->author?->name;
                                $cat = $post->category->category;
                                $catUrl = route('category', ['category' => $cat]);
                            @endphp
                    <a data-theme-key="custom-item"
                        label="" data-vars-cta="4 Across Block 0" data-vars-ga-position="1"
                        data-vars-ga-call-to-action="Norah O’Donnell Signs Off"
                        data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a63542366/norah-odonnell-signs-off-cbs-evening-news/"
                        href="{{ $url }}"
                        class="ee4ms352 css-1pxdqsn e1c1bym14">
                        <div data-vars-cta="4 Across Block 0" data-vars-ga-position="1"
                            data-vars-ga-call-to-action="Norah O’Donnell Signs Off"
                            data-vars-ga-outbound-link="https://www.elle.com/culture/career-politics/a63542366/norah-odonnell-signs-off-cbs-evening-news/"
                            class="css-ftsoqv ee4ms351">
                            <img src="{{ $image }}"
                                alt="news studio setting during an election broadcast"
                                title="news studio setting during an election broadcast" width="100%" height="auto"
                                decoding="async" loading="lazy"
                                style="aspect-ratio: 1/1 ; object-position: top; object-fit: cover ;"

                                ></div>
                        <div data-theme-key="custom-item-content" class="css-1dc3fjj ee4ms350">
                            <h2 data-theme-key="custom-item-title" class="css-17nzgrb e10ip9lg6"><span
                                    aria-hidden="true" data-theme-key="title-design-element-before"
                                    class="css-0 eagam8p0"></span><span data-theme-key="custom-item-title-text"
                                    class="css-m39hn e10ip9lg5">
                                            {{$title}}
                                    </span><span aria-hidden="true"
                                    data-theme-key="title-design-element-after" class="css-0 eagam8p1"></span></h2>
                        </div>
                    </a>

                    @endforeach

                </div>
                <div class="css-y4yi8 e19qkiag2">
                    <div class="ad-disclaimer no-print css-3jfnbc e1caqep90">Advertisement - Continue Reading Below
                    </div>
                    <div id="gpt-ad-vertical-top" class="ad-container css-om4gqg ewg5wdb1"></div>
                </div>
            </section>

            <section data-vars-block-curation="subsection" data-vars-block-type="3 Column Block" data-vars-block-slot="3"
                data-vars-block-id="f36657bb-0750-4f64-9815-ab62db041b36" data-vars-block-heading=""
                id="2b35e3d7-e4d8-4517-88c8-4cd48b1d86bf" data-lazy-id="P0-9" class="css-1fctiym emk51de2">

            <x-long-card :posts="$posts->slice(5,12)"/>

            </section>

            <div data-journey-unblur="true" class="gpt-breaker-container breaker-ad e1dxcrh10 css-1c7d8p3 e1spmc110">
                <div class="ad-disclaimer no-print css-1nkb8av e1caqep90">Advertisement - Continue Reading Below</div>
                <div id="gpt-ad-feed-leaderboard-3" class="ad-container css-1njatnj ewg5wdb1"></div>
            </div>

            <section data-vars-block-curation="subsection" data-vars-block-type="4 Across Block"
                data-vars-block-slot="4" data-vars-block-id="cb8d018d-0612-4555-a42b-23ae197a59c0"
                data-vars-block-heading="" id="de90c2b6-88e1-4ee1-94ca-f2c536c5f027" data-lazy-id="P0-10"
                class="css-1tddtcr ezpcz1b0">
                
                <x-short-card :posts="$posts->slice(17,4)" />

            </section>

            
            <section data-vars-block-curation="subsection" data-vars-block-type="3 Column Block"
                data-vars-block-slot="5" data-vars-block-id="a3e2ddb6-dbf2-411c-89e4-b871e0e4a5fc"
                data-vars-block-heading="" id="46b7dae1-21fe-4f81-83c5-cd5957234e8d" data-lazy-id="P0-11"
                class="css-1gki4z3 emk51de2">
                <div class="css-y4yi8 e19qkiag2">
                    <div class="ad-disclaimer no-print css-3jfnbc e1caqep90">Advertisement - Continue Reading Below
                    </div>
                    <div id="gpt-ad-feed-vertical-5" class="ad-container css-om4gqg ewg5wdb1"></div>
                </div>

                <x-long-card :posts="$posts->slice(21,8)"/>

                
                
            </section>

            <section data-vars-block-curation="subsection" data-vars-block-type="4 Across Block"
            data-vars-block-slot="4" data-vars-block-id="cb8d018d-0612-4555-a42b-23ae197a59c0"
            data-vars-block-heading="" id="de90c2b6-88e1-4ee1-94ca-f2c536c5f027" data-lazy-id="P0-10"
            class="css-1tddtcr ezpcz1b0">
            
                <x-short-card :posts="$posts->slice(29,4)" />

            </section>

            <section data-vars-block-curation="subsection" data-vars-block-type="3 Column Block" data-vars-block-slot="3"
                data-vars-block-id="f36657bb-0750-4f64-9815-ab62db041b36" data-vars-block-heading=""
                id="2b35e3d7-e4d8-4517-88c8-4cd48b1d86bf" data-lazy-id="P0-9" class="css-1fctiym emk51de2">

            <x-long-card :posts="$posts->slice(33,12)"/>

            </section>

        </main>
        @include('pages.layouts.footer')

        <div class="mobile-adhesion-unit open css-1wohilq e1kh6tol1">
            <div id="adAdhesion" class="css-6bu6ey ewg5wdb0"></div>
            <div aria-label="Close" class="mobile-adhesion-unit-close-button css-1o9hvj e1kh6tol0"></div>
        </div>
        <section data-lazy-id="P0-15"></section>
    </div>
    <script id="__HRST_DATA__"
        type="application/json">{"landing":{"header":"standard","layout":"Custom","type":"Section","value":{"name":"Section","url":"career-politics"}},"site":{"cds-paywall":true,"icxSiteId":"10051","jam-journey-enabled":true,"jam-journey-modals-enabled":true,"jam-journey-meters-enabled":true,"jam-journey-registration-modals-enabled":false,"name":"ELLE","new-nav":true,"piano-paywall":false,"prefix":"elle","sso":true,"video":{"gaVideoDiagTracking":"true","gaVideoBrandName":"Elle","icxVideoDomainId":"7303"}},"flags":{"fre.enable-recirculation-module":1,"fre.commerce.use-list-price-strikethrough":1,"custom-feeds.media-modal-search-tab":1,"fre.jam-journey.enable-email-captures":1,"fre.do-not-sell-link":1,"display-search":1,"enable-google-one-tap":1,"gallery-display-type-custom":1,"add-introduction-h2s-in-listicle-toc":1,"fre.content.enable-privacy-disclaimer":1,"video.mms-media-convert":1,"enable-sso":1,"custom-feeds.curated-products.4-across":1,"recirculation.end-of-content":1,"top-pathing.content":1,"fre.enable-userinfo-auth-route":1,"fre.jam-journey.enable-meters":1,"fre.commerce.product-summary-view":1,"product-links-enabled":1,"fre.enable-jam-journey":1,"fre.jam-journey.enable-top-slim-banner":1,"product.content-product.smart-swap.out-of-stock":1,"fre.use-onetrust":1,"content-editor.toggles.hide-affiliate-disclaimer":1,"fre.font-fallbacks":1,"enable-avatar-menu":1,"product.badging.automate-sale-badging-organic":1,"fre.enable-my-stuff":1,"fre.seogra.breadcrumbs":1,"fre.enable-query-split":1,"content-editor.toggles.paywall":1,"fre.piano.enable-templates":1,"retailer.site.specific-ecpc":1,"enable-microsoft-quick-auth":1,"seo.display-publish-date-timezone":1,"seo.block-meta-ai-crawler":1,"new-nav":1,"location-choice":1,"video.sticky-player":1,"custom-feeds.add-collection-to-block":1,"custom-feeds.getty-collection-/images":1,"fre.cds.enable-paywall":1,"fre.enable-author-flyout":1,"commerce.reordering.enable":1,"fre.location-choice.display-generic-title":1,"author-bios":1,"mason-custom-feeds":1,"video.use-social-image":1,"fre.jam-journey.enable-modals":1,"fre.enable-my-stuff-tooltip":1,"gallery-display-type-event-roundup":1,"self-hosted-ads":1,"new-tablet-gallery":1,"concorde.fre.autocomplete":1,"custom-promo-lead-videos":1,"video.sticky-player-mobile":1,"custom-feeds.default-blocks":1,"enable-listicle-toc":1,"content-editor.gallery.multi-retailer.enabled":1,"gallery-1x1-mobile-lede-crops":1,"gallery-display-type-product-roundup":1,"fre.commerce.affiliate.trackonomics":1,"mobile-adhesion-unit":1,"custom-feeds.composite-image-block":1,"content-editor.enable-repositioned-disclaimer":1,"video.use-video-player-two":1,"product.content-product.smarter-swap":1,"video-hub":1,"video.watch-next-in-body":1,"product.badging.automate-sale-badging":1,"vader.commerce.use-afflinks_link":1,"syndy.hreflang.version_of_all_locales":1,"fre.jam-journey.enable-billboard":1,"paywall.schema":1,"custom-feeds.image-block":1,"fre.seogra.breadcrumbs-with-collections":1,"fre.commerce.use-affiliate_url":1,"video.enable-glimmer":1,"custom-feeds.text-block":1,"fre.render-dek-on-search-page":1,"content-editor.1x1-lead-image-crop":1,"product.content-product.smart-swap.out-of-stock.service-api":1,"product.draft.enabled":1,"syndy.hreflang.version_of_us_uk_locales":1,"top-pathing":1,"fre.next-ad-placements":1,"content-editor.key-features-product-specs":1,"video.sticky-player-lead":1,"product.content-product.couponing":1,"fre.products.gallery.new-product-styling":1,"commerce.magento.affiliate.enabled":1,"self-hosted.affiliate.enabled":1,"cover-stories":1,"seo.syndicated-content.no-noindex":1,"content-editor.enable-custom-header":1,"gallery-display-type-timeline":1,"fre.commerce.simplified-psv":1},"article":{"canonicalUrl":"https://www.elle.com/culture/career-politics/","modifiedDate":{"year":"2025","month":"02","day":"09","hour":"11","minute":"45"},"publishDate":{"year":"2025","month":"02","day":"09","hour":"11","minute":"45"},"id":"elle.subsection.9663920","display":"Section","template":"Section","hideAffiliates":false,"metadata":{"hideWatchNextPlayer":false},"noAffiliateUrl":false,"section":{"name":"Culture","prefix":"culture"},"subSection":{"name":"News & Politics","prefix":"career-politics"}},"metadata":{"contentId":"d9953fe4-ffd3-4736-8852-7b8880704e8d","keywords":"","ogTitle":"","hreflangCount":3},"datalayer":{},"adConfig":{"bu":"HDM","site":"elle","zone":"/36117602/hdm-elle/","bidders":{"IX":{"d":{"ga":"670278","gb":"670282","la":"670277","lb":"670283","brk":"670280","garb":"670279","brkrr":"670281"},"m":{"ga":"670284","gb":"670285","lb":"670287","adh":"670288","brk":"670286"},"v":"942443"},"APN":{"d":{"ga":"24604090","gb":"10583083","la":"24604099","lb":"10583085","brk":"24604100","garb":"14355601","brkrr":"24604095"},"m":{"ga":"24604091","gb":"10583090","lb":"10583091","adh":"16120603","brk":"24604096"},"v":"14734335"},"KAR":{"m":{"gb":"_nMF2QdH1ml","lb":"_p7Ko2RIbMA","adh":"_zOZgxfrDJu","gabrk":"_jK-TsZqW2LI"},"v":"_wDGMy7ldvI"},"MAG":{"d":{"ga":"2040208","gb":"2040218","la":"2040206","lb":"2040220","brk":"2040212","garb":"2040210","brkrr":"2040216"},"m":{"ga":"2040222","gb":"2040224","lb":"2040230","adh":"2040232","brk":"2040226"},"v":"2731458","siteId":"369868","accountId":"11636"},"TDS":{"d":{"tdsArt":"112030","tdsBrk":"112029"},"m":{"tdsArt":"112029"},"pageId":"103512","pageIdDesktop300":"113863"},"TPL":{"d":{"ga":"elle_templated_300x400_atf_PB","gb":"elle_templated_300x400_btf_PB","lb":"elle_970x250_btf_PB","brkrr":"elle_templated_300x400_breaker_PB","la728":"elle_728x90_HDX_PB","la970":"elle_970x250_PB"},"m":{"ga":"elle_templated_300x250_flex_atf_m_PB","lb":"elle_templated_300x250_flex_btf_m_PB","adh":"Elle_320x50_HDX_PB","brk":"elle_templated_300x250_flex_breaker_m_PB"}},"TTD":{"d":{"ttd":"desktop"},"m":{"ttd":"mobile"},"v":"video","siteId":"hdm-elle","supplySourceId":"hearstmagazines"},"AMZN":"3049","APNhdmuk":{"d":{"ga":"23458937","gb":"23458938","la":"23458939","lb":"23458940","brk":"23458944","brkrr":"23458945"},"m":{"ga":"23458941","gb":"23458942","lb":"23458943","brk":"23458946"},"v":"23458947"}},"modules":{"ias":{"pubId":"931694"},"sst":{"server":"www-sst.elle.com"},"meta":{"id":"690796760981964","cur":"USD"},"optable":{"slug":"prod-elle-com","geoWhitelist":["US"]},"parsely":{"siteId":"elle.com"},"actionIQ":{"writeKey":"mediaos-elle-prod","cnameRecord":"https://aiq-in.elle.com","geoWhitelist":["US"]},"comscore":{"c2":6035258},"oneTrust":{"doNotSellUrlOverride":"/about/a42158564/do-not-sell-my-personal-information/"},"sailthru":{"ids":{"production":"2494399497a47e76bde000b4823d9a5a"}},"truedata":{"ep":"td.elle.com","cid":"10458","scid":"107"},"permutive":{"apiKey":"7d237500-e85c-4846-9eb8-5635df7b050c","locale":"US","currency":"USD","workspaceId":"eb036676-52ea-47b5-a2f6-fcfb4ece9c00","geoWhitelist":"US"},"optimizely":{"webSnippetId":"21018620252","webSnippetKey":"us_elle"},"trueAnthem":"hearst","blockthrough":{"id":"6316821519007744"},"brandMetrics":{"siteId":"elle.com","accountId":"a6a45799-d06f-4cce-9dd7-4a947f7e7816"},"googleAnalytics":{"measurementId":"G-BTTN4BQHSS"}},"adBundle":[],"settings":{"mobileStickyAds":true,"enableVerityTags":true},"siteList":["www.elle.com"]},"commerce":{"cons":"Cons","pros":"Pros","affiliate":{"url":"https://assets.hearstapps.com/commerce/release/affiliate-bundle.master.js","amazon":{"market":"HMG-US","default":{"sem":"elle-lift-20","tag":"elle_auto-append-20","icxId":"10051","social":"elle-soc-lift-20"}},"skimlinks":{"market":"HMG-US","default":{"url":"//s.skimresources.com/js/74968X1525074.skimlinks.js"}},"trackonomics":{"cipd2":"ell"}},"flags":{"site":{"commerce.magento.affiliate.enabled":true,"commerce.vader.render-afflinks-redirect":false,"commerce.self-hosted.affiliate.render-afflinks-redirect":false,"custom-feeds.sponsorship":false,"fre.commerce.affiliate.trackonomics":true,"fre.commerce.block-affiliate-tags":false,"fre.commerce.use-affiliate_url":true,"fre.enable-sponsored-content-to-content":false,"self-hosted.affiliate.enabled":true}},"hasProduct":false},"viewability":{"/36117602/hdm-elle.gdpr/atf|m":20,"/36117602/hdm-elle.gdpr/breaker|d":5,"/36117602/hdm-elle/culture/breaker|d":30,"/36117602/hdm-elle.mgu/culture/atf|m":25,"/36117602/hdm-elle/culture/atf|m":25,"/36117602/hdm-elle/culture/breaker|m":20,"/36117602/hdm-elle/culture/atf|d":35,"/36117602/hdmuk-elle/culture/atf|d":75,"/36117602/hdm-elle.mgu/culture/adhesion|m":80,"/36117602/hdm-elle.mgu/culture/breaker|d":65,"/36117602/hdm-elle.gdpr/atf|d":70,"/36117602/hdmuk-elle/culture/breaker|d":55,"/36117602/hdm-elle.mgu/culture/atf|d":60,"/36117602/hdm-elle/culture/atf|t":40,"/36117602/hdm-elle/culture/breaker|t":55},"abTestingFullStack":[],"app":{"fontFallbacks":["NeueHaasUnica","Inter","SaolDisplay","SaolText"]}}</script>
    <script
        id="__HRST">window.HRST = window.HRST || JSON.parse(window.__HRST_DATA__.textContent), window.dispatchEvent(new CustomEvent("HRST"));</script>
    <script id="__NEXT_DATA__"
        type="application/json">{"props":{"pageProps":{"alternates":[{"href":"https://www.elle.com/culture/career-politics/","language":"en-us"},{"href":"https://www.elle.com/nl/carriere-en-geld/","language":"nl-nl"},{"href":"https://www.elle.com/tw/lovelife/office/","language":"zh-tw"}],"data":{"feedInfo":[{"display_id":9663920,"title":"News \u0026 Politics","body":"","media":[{"media_type":"image","id":"f860de23-6ef4-4276-b086-53a80e5797d4","media_metadata":{},"image_id":"f860de23-6ef4-4276-b086-53a80e5797d4","hips_url":"https://hips.hearstapps.com/hmg-prod//images/elm110123wlzoey-012-668d8f69b560f.png","hips_prefix":"hmg-prod","height":1425,"role":5,"pathname":"//images/elm110123wlzoey-012-668d8f69b560f.png","width":1900,"metadata":{"crops":{"1x1":"0.752xw:1.00xh;0.125xw,0","2x1":"1xw:0.6666666666666666xh;center,top","3x1":"1xw:0.4444444444444445xh;center,top","4x3":"1xw:1xh;center,top","4x6":"0.5xw:1xh;center,top","5x1":"1xw:0.26666666666666666xh;center,top","6x4":"1xw:0.888888888888889xh;center,top","8x1":"1xw:0.16666666666666666xh;center,top","10x2":"1.00xw:0.269xh;0,0.397xh","10x3":"1.00xw:0.402xh;0,0.284xh","10x5":"1.00xw:0.669xh;0,0.150xh","16x9":"1xw:0.75xh;center,top","8x10":"0.6xw:1xh;center,top","9x16":"0.421875xw:1xh;center,top","18x11":"1xw:0.8148148148148148xh;center,top"}},"image_metadata":{"seo_meta_description":"sweater, skirt, sandals, handbag, bottega veneta"},"photographer":{}}],"created_at":"2017-05-17T00:14:35.867343Z","updated_at":"2024-07-09T19:29:17.219576Z","slug":"career-politics","id":"d9953fe4-ffd3-4736-8852-7b8880704e8d","blocks":[{"id":"b8fc0fb6-f34e-428e-b76a-d31dc7ae2ef5","type":"big-story","heading":"","subheading":"","settings":{"show_dek":false,"show_byline":false,"show_date":false,"layout":"text-under"},"feeds":[{"id":"0cafcbcd-9f82-4af8-b5fa-6038e066bd56","source_type":"subsection","heading_url":"","resources":[{"type":"Content","id":"eb8084ea-666a-40ba-bde8-da43456beceb","display_id":63592257,"edited_at":"2025-01-28T20:00:57.253231Z","publish_from":"2025-01-28T20:00:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"lady-gaga-fight-for-lgbtq-community-trump-quote","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2,"media_type":"image"},{"role":3,"media_type":"image"},{"id":"18899f2a-b73c-4af4-b4f6-20bb49ceaa1b","image_id":"18899f2a-b73c-4af4-b4f6-20bb49ceaa1b","hips_url":"https://hips.hearstapps.com/hmg-prod//images/elm020125wlgaga-007-67803aab84d2f.jpg","hips_prefix":"hmg-prod","height":4400,"role":12,"pathname":"//images/elm020125wlgaga-007-67803aab84d2f.jpg","media_type":"image","width":3300,"metadata":{"crops":{"1x1":"1.00xw:0.751xh;0,0.196xh","2x1":"0.770xw:0.290xh;0.156xw,0.231xh","3x1":"1xw:0.25xh;center,top","4x3":"1xw:0.5625xh;center,top","4x6":"0.888888888888889xw:1xh;center,top","5x1":"1xw:0.15xh;center,top","6x4":"1xw:0.5xh;center,top","8x1":"1xw:0.09375xh;center,top","10x2":"1xw:0.15xh;center,top","10x3":"1xw:0.225xh;center,top","10x5":"1xw:0.375xh;center,top","16x9":"1xw:0.421875xh;center,top","8x10":"1xw:0.9375xh;center,top","9x16":"0.75xw:1xh;center,top","18x11":"1xw:0.45833333333333337xh;center,top"}},"image_metadata":{"seo_meta_description":"a figure wearing a draped black fabric garment stands in a minimalist indoor space"},"photographer":{}}],"metadata":{"short_title":"Lady Gaga on Fighting for the LGBTQ+ Community","index_title":"Lady Gaga Says She Is ‘One of Many’ Who Will Fight for the LGBTQ+ Community During Trump Years","social_dek":"\u003cp\u003e“It’s going to be hard, but I’m up for it. We’re up for it.”\u003c/p\u003e","editor_attribution":"By","sponsor":{}}}]}],"textDom":{"children":[],"type":"root"}},{"id":"ea5ee630-4ed1-4588-a208-ee94769e638a","type":"4-across","heading":"","subheading":"","settings":{"show_dek":false,"show_byline":false,"show_date":false,"layout":"image-stacked"},"feeds":[{"id":"04c848e5-9f92-4e6e-8c92-e563a342c1f1","source_type":"subsection","heading_url":"","resources":[{"type":"Content","id":"a1eb36da-8676-45da-b7a1-e5900abd3d04","display_id":63542366,"edited_at":"2025-01-27T21:38:53.379213Z","publish_from":"2025-01-27T13:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"norah-odonnell-signs-off-cbs-evening-news","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"b67ac0a3-2e1a-4ca8-9674-8dd707727fcd","image_id":"b67ac0a3-2e1a-4ca8-9674-8dd707727fcd","hips_url":"https://hips.hearstapps.com/hmg-prod//images/norahelectionnight24-jpg-6793b08e8efec.jpg","hips_prefix":"hmg-prod","height":5112,"role":12,"pathname":"//images/norahelectionnight24-jpg-6793b08e8efec.jpg","media_type":"image","width":7665,"metadata":{"crops":{"1x1":"0.670xw:1.00xh;0.163xw,0","2x1":"0.950xw:0.712xh;0.0353xw,0.180xh","3x1":"1xw:0.4998043818466354xh;center,top","4x3":"0.8892367906066536xw:1xh;center,top","4x6":"0.4446183953033268xw:1xh;center,top","5x1":"1xw:0.29988262910798125xh;center,top","6x4":"1xw:0.9996087636932708xh;center,top","8x1":"1xw:0.18742664319248825xh;center,top","10x2":"1xw:0.29988262910798125xh;center,top","10x3":"1xw:0.4498239436619718xh;center,top","10x5":"1xw:0.749706572769953xh;center,top","16x9":"1xw:0.8434198943661971xh;center,top","8x10":"0.5335420743639921xw:1xh;center,top","9x16":"0.37514677103718197xw:1xh;center,top","18x11":"1xw:0.9163080333854983xh;center,top"}},"image_metadata":{"seo_meta_description":"news studio setting during an election broadcast"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eAs the CBS Evening News anchor says goodbye, she reflects on industry upheaval, sexism in media, and what comes next. \u003c/p\u003e","short_title":"Norah O’Donnell Signs Off","index_title":"Norah O’Donnell Says Goodbye to CBS Evening News ","social_dek":"\u003cp\u003eAs the CBS Evening News anchor signs off, she reflects on her time in the famed anchor seat. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"700516ae-c1b6-4dd0-9e29-c4a1eca67436","display_id":63413445,"edited_at":"2025-01-14T15:41:20.717843Z","publish_from":"2025-01-14T01:11:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"eva-longoria-los-angeles-fires-donation","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"cc6b4663-f060-4114-827b-4dac34a2edd1","image_id":"cc6b4663-f060-4114-827b-4dac34a2edd1","hips_url":"https://hips.hearstapps.com/hmg-prod//images/eva-longoria-accepts-the-courage-and-civility-award-on-news-photo-1736813207.pjpeg","hips_prefix":"hmg-prod","height":3840,"role":12,"pathname":"//images/eva-longoria-accepts-the-courage-and-civility-award-on-news-photo-1736813207.pjpeg","media_type":"image","width":6000,"metadata":{"crops":{"1x1":"0.641xw:1.00xh;0.207xw,0","2x1":"1xw:0.78125xh;center,top","3x1":"1xw:0.52083xh;center,top","4x3":"0.85333xw:1xh;center,top","4x6":"0.42667xw:1xh;center,top","5x1":"1xw:0.3125xh;center,top","6x4":"0.96xw:1xh;center,top","8x1":"1xw:0.19531xh;center,top","10x2":"1xw:0.3125xh;center,top","10x3":"1xw:0.46875xh;center,top","10x5":"1xw:0.78125xh;center,top","16x9":"1xw:0.87891xh;center,top","8x10":"0.512xw:1xh;center,top","9x16":"0.36xw:1xh;center,top","18x11":"1xw:0.95486xh;center,top"}},"image_metadata":{"seo_meta_title":"2024 Bezos Courage and Civility Awards","seo_meta_description":"2024 bezos courage and civility awards"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eWith support from the Courage and Civility Award, the funds will be distributed to the Latino Community Foundation and the California Community Foundation.\u003c/p\u003e","short_title":"Eva Longoria Donates $1 Million to Wildfire Relief","index_title":"Eva Longoria Donates $1 Million to Los Angeles Wildfire Relief","social_dek":"\u003cp\u003eWith support from the Courage and Civility Award, the funds will be distributed to the Latino Community Foundation and the California Community Foundation.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"a83986a8-0d77-413f-8bad-1073e868477d","display_id":63373619,"edited_at":"2025-01-09T16:18:57.313881Z","publish_from":"2025-01-09T16:13:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"los-angeles-fires-how-to-help-explained","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"8de9e070-9a45-4d27-8690-5051bb7b8505","image_id":"8de9e070-9a45-4d27-8690-5051bb7b8505","hips_url":"https://hips.hearstapps.com/hmg-prod//images/getty/images-2192362109-677e914bb8c64.jpg","hips_prefix":"hmg-prod","height":2000,"role":12,"pathname":"//images/getty/images-2192362109-677e914bb8c64.jpg","media_type":"image","width":3000,"metadata":{"crops":{"1x1":"0.670xw:1.00xh;0.0192xw,0","2x1":"1.00xw:0.752xh;0,0.0481xh","3x1":"1xw:0.5xh;center,top","4x3":"0.8888888888888888xw:1xh;center,top","4x6":"0.4444444444444444xw:1xh;center,top","5x1":"1xw:0.3xh;center,top","6x4":"1xw:1xh;center,top","8x1":"1xw:0.1875xh;center,top","10x2":"1xw:0.3xh;center,top","10x3":"1xw:0.45xh;center,top","10x5":"1xw:0.75xh;center,top","16x9":"1xw:0.84375xh;center,top","8x10":"0.5333333333333333xw:1xh;center,top","9x16":"0.375xw:1xh;center,top","18x11":"1xw:0.9166666666666666xh;center,top"}},"image_metadata":{"seo_meta_title":"1489710-ME-0108-palisades-fire-WJS","seo_meta_description":"malibu, california january 8, 2025 the palisades fire approaches the pacific ocean along pch in malibu tuesday wally skalijlos angeles times via getty /images"},"source":{}}],"metadata":{"dek":"\u003cp\u003eMultiple fires—fueled by dry vegetation and extreme winds—have forced tens of thousands to evacuate.\u003c/p\u003e","short_title":"How to Help Those Affected by the L.A. Wildfires","index_title":"How to Help Those Affected by the Wildfires in Los Angeles","social_dek":"\u003cp\u003eMultiple fires—fueled by dry vegetation and extreme winds—have forced tens of thousands to evacuate.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"a764b9e0-5803-4985-8e61-9083e945d673","display_id":63162664,"edited_at":"2024-12-17T16:17:38.438389Z","publish_from":"2024-12-17T13:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"miki-agrawal-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"1fbf926e-33ad-4a74-8be9-5932066b7a40","image_id":"1fbf926e-33ad-4a74-8be9-5932066b7a40","hips_url":"https://hips.hearstapps.com/hmg-prod//images/elle-miki-agrawal-dig-003-675ca9c1d7d5b.jpg","hips_prefix":"hmg-prod","height":2300,"role":12,"pathname":"//images/elle-miki-agrawal-dig-003-675ca9c1d7d5b.jpg","media_type":"image","width":1876,"metadata":{"crops":{"1x1":"1.00xw:0.817xh;0,0.183xh","2x1":"1.00xw:0.409xh;0,0.303xh","3x1":"1xw:0.2718840579710145xh;center,top","4x3":"1xw:0.6117391304347826xh;center,top","4x6":"0.8173418621179814xw:1xh;center,top","5x1":"1xw:0.1631304347826087xh;center,top","6x4":"1xw:0.543768115942029xh;center,top","8x1":"1xw:0.10195652173913043xh;center,top","10x2":"1xw:0.1631304347826087xh;center,top","10x3":"1xw:0.24469565217391304xh;center,top","10x5":"1xw:0.4078260869565217xh;center,top","16x9":"1xw:0.458804347826087xh;center,top","8x10":"0.9808102345415778xw:1xh;center,top","9x16":"0.689632196162047xw:1xh;center,top","18x11":"1xw:0.4984541062801932xh;center,top"}},"image_metadata":{"seo_meta_description":"person wearing a large red hat and a brown leather jacket sitting with hands on their face"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eWith the launch of Hiro Technologies, the serial entrepreneur is moving beyond a controversial past and finding hope in fungus.\u003c/p\u003e","short_title":"For Miki Agrawal, the Future Is in Mushrooms","index_title":"From Period Underwear to Plastic-Eating Mushrooms: Miki Agrawal’s Life After Thinx","social_dek":"\u003cp\u003eWith the launch of Hiro Technologies, the serial entrepreneur is moving beyond a controversial past and finding hope in fungus.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}}]}],"textDom":{"children":[],"type":"root"}},{"id":"2b35e3d7-e4d8-4517-88c8-4cd48b1d86bf","type":"3-column","heading":"","subheading":"","settings":{"show_dek":false,"show_byline":false,"show_date":false,"layout":"image-left","single_source":true},"feeds":[{"id":"f36657bb-0750-4f64-9815-ab62db041b36","heading":"","source_type":"subsection","heading_url":"","resources":[{"type":"Content","id":"19d1a6bf-776b-464c-901c-904d8c8c2101","display_id":63117665,"edited_at":"2024-12-06T20:10:49.453931Z","publish_from":"2024-12-06T20:10:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"taylor-swift-birthday-travis-kelce-plans","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"4bc6ba16-d858-4e08-a66f-ec4c8b999fa5","image_id":"4bc6ba16-d858-4e08-a66f-ec4c8b999fa5","hips_url":"https://hips.hearstapps.com/hmg-prod//images/taylor-swift-and-travis-kelce-are-seen-in-soho-on-october-news-photo-1733506809.jpg","hips_prefix":"hmg-prod","height":2000,"role":12,"pathname":"//images/taylor-swift-and-travis-kelce-are-seen-in-soho-on-october-news-photo-1733506809.jpg","media_type":"image","width":3000,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.167xw,0","2x1":"1.00xw:0.752xh;0,0.0120xh","3x1":"1xw:0.5xh;center,top","4x3":"0.88889xw:1xh;center,top","4x6":"0.44444xw:1xh;center,top","5x1":"1xw:0.3xh;center,top","6x4":"1xw:1xh;center,top","8x1":"1xw:0.1875xh;center,top","10x2":"1xw:0.3xh;center,top","10x3":"1xw:0.45xh;center,top","10x5":"1xw:0.75xh;center,top","16x9":"1xw:0.84375xh;center,top","8x10":"0.53333xw:1xh;center,top","9x16":"0.375xw:1xh;center,top","18x11":"1xw:0.91667xh;center,top"}},"image_metadata":{"seo_meta_title":"Celebrity Sightings In New York City - October 11, 2024","seo_meta_description":"celebrity sightings in new york city october 11, 2024"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eThey’ve both been busy, but Kelce reportedly has a few surprises up his sleeve. \u003c/p\u003e","short_title":"Travis Kelce’s Plans for Taylor Swift’s Birthday","index_title":"Travis Kelce Hopes to Make Taylor Swift’s Milestone Birthday ‘Extra Special’ This Year","social_dek":"\u003cp\u003eThey’ve both been busy, but Kelce reportedly has a few surprises up his sleeve. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"b73f88b9-3780-4627-b257-430a72471993","display_id":63072589,"edited_at":"2024-12-11T17:53:50.726527Z","publish_from":"2024-12-05T14:00:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"ralph-lauren-center-for-cancer-prevention-usc-norris","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"0fb95eab-7077-4adc-894e-a5b9c8516879","image_id":"0fb95eab-7077-4adc-894e-a5b9c8516879","hips_url":"https://hips.hearstapps.com/hmg-prod//images/rlc-ribbon-cutting-674e11d37355b.jpeg","hips_prefix":"hmg-prod","height":1365,"role":12,"pathname":"//images/rlc-ribbon-cutting-674e11d37355b.jpeg","media_type":"image","width":2048,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.197xw,0","2x1":"1xw:0.7501831501831502xh;center,top","3x1":"1xw:0.5001221001221001xh;center,top","4x3":"0.888671875xw:1xh;center,top","4x6":"0.4443359375xw:1xh;center,top","5x1":"1xw:0.3000732600732601xh;center,top","6x4":"0.999755859375xw:1xh;center,top","8x1":"1xw:0.18754578754578755xh;center,top","10x2":"1xw:0.3000732600732601xh;center,top","10x3":"1xw:0.4501098901098901xh;center,top","10x5":"1xw:0.7501831501831502xh;center,top","16x9":"1xw:0.843956043956044xh;center,top","8x10":"0.533203125xw:1xh;center,top","9x16":"0.374908447265625xw:1xh;center,top","18x11":"1xw:0.9168905168905169xh;center,top"}},"image_metadata":{"seo_meta_description":"a ribboncutting ceremony at the ralph lauren center for cancer prevention"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eThe treatment center opened this fall at USC Norris.\u003c/p\u003e","short_title":"What to Know About Ralph Lauren‘s Cancer Center","index_title":"With the Ralph Lauren Center for Cancer Prevention, the Brand Continues Its Search for a Cure","social_dek":"\u003cp\u003eThe treatment center opened this fall at USC Norris.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"eca08c06-cc4b-40f0-9c98-3a3c616f0ce3","display_id":63073965,"edited_at":"2024-12-09T17:30:08.161395Z","publish_from":"2024-12-03T13:00:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"gift-ideas-that-give-back","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"2130526e-2220-4d3e-846c-07fecd87fdb1","image_id":"2130526e-2220-4d3e-846c-07fecd87fdb1","hips_url":"https://hips.hearstapps.com/hmg-prod//images/holiday-savings-jar-filled-with-coins-and-christmas-royalty-free-image-1733294899.jpg","hips_prefix":"hmg-prod","height":1494,"role":12,"pathname":"//images/holiday-savings-jar-filled-with-coins-and-christmas-royalty-free-image-1733294899.jpg","media_type":"image","width":2012,"metadata":{"crops":{"1x1":"0.745xw:1.00xh;0,0","2x1":"1.00xw:0.676xh;0,0.268xh","3x1":"1xw:0.44891xh;center,top","4x3":"0.99006xw:1xh;center,top","4x6":"0.49503xw:1xh;center,top","5x1":"1xw:0.26934xh;center,top","6x4":"1xw:0.89781xh;center,top","8x1":"1xw:0.16834xh;center,top","10x2":"1xw:0.26934xh;center,top","10x3":"1xw:0.40402xh;center,top","10x5":"1xw:0.67336xh;center,top","16x9":"1xw:0.75753xh;center,top","8x10":"0.59404xw:1xh;center,top","9x16":"0.41768xw:1xh;center,top","18x11":"1xw:0.823xh;center,top"}},"image_metadata":{"seo_meta_title":"Holiday Savings Jar Filled with Coins and Christmas Ribbon and Bow","seo_meta_description":"holiday savings jar filled with coins and christmas ribbon and bow"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eSometimes, the best thing to give is to give back.\u003c/p\u003e","short_title":"5 Ways to Make a Difference This Holiday Season","index_title":"5 Causes to Support During the Holiday Season","social_dek":"\u003cp\u003eSometimes, the best thing to give is to give back.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"f9ad3f38-ab5f-4dd3-bad1-2ba36db9f01f","display_id":62842385,"edited_at":"2024-11-08T21:30:21.532210Z","publish_from":"2024-11-08T21:30:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"planned-parenthood-president-alexis-mcgill-johnson-2024-election-essay","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"3b103f13-6e3b-494c-99b9-766e7e98794a","image_id":"3b103f13-6e3b-494c-99b9-766e7e98794a","hips_url":"https://hips.hearstapps.com/hmg-prod//images/pro-abortion-rights-activist-holds-a-sign-during-the-annual-news-photo-1731095295.jpg","hips_prefix":"hmg-prod","height":2475,"role":12,"pathname":"//images/pro-abortion-rights-activist-holds-a-sign-during-the-annual-news-photo-1731095295.jpg","media_type":"image","width":4337,"metadata":{"crops":{"1x1":"0.574xw:1.00xh;0.216xw,0","2x1":"0.918xw:0.801xh;0.0337xw,0.0952xh","3x1":"1xw:0.58411xh;center,top","4x3":"0.76089xw:1xh;center,top","4x6":"0.38045xw:1xh;center,top","5x1":"1xw:0.35046xh;center,top","6x4":"0.85601xw:1xh;center,top","8x1":"1xw:0.21904xh;center,top","10x2":"1xw:0.35046xh;center,top","10x3":"1xw:0.5257xh;center,top","10x5":"1xw:0.87616xh;center,top","16x9":"1xw:0.98568xh;center,top","8x10":"0.45654xw:1xh;center,top","9x16":"0.321xw:1xh;center,top","18x11":"0.93383xw:1xh;center,top"}},"image_metadata":{"seo_meta_title":"US-ABORTION-PROTEST","seo_meta_description":"us abortion protest"},"photographer":{},"source":{}}],"metadata":{"short_title":"Alexis McGill Johnson Reflects Post-Election","index_title":"‘What I Know to Be True’: Planned Parenthood’s Alexis McGill Johnson Reflects Post-Election","social_dek":"\u003cp\u003eThe president and CEO of Planned Parenthood Action Fund delivers her message to a divided country.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"cc3c60aa-0873-4a81-a242-f479a3ad5ebf","display_id":62831564,"edited_at":"2024-11-06T22:43:50.883466Z","publish_from":"2024-11-07T13:00:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"chatgpt-scripting-dream-life-explained","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"db9ee1bd-6dae-48d4-8737-6f8418a2c7a4","image_id":"db9ee1bd-6dae-48d4-8737-6f8418a2c7a4","hips_url":"https://hips.hearstapps.com/hmg-prod//images/van-herpen-hc-po-s23-004-672bd81c14d71.jpg","hips_prefix":"hmg-prod","height":1980,"role":12,"pathname":"//images/van-herpen-hc-po-s23-004-672bd81c14d71.jpg","media_type":"image","width":1322,"metadata":{"crops":{"1x1":"1.00xw:0.671xh;0,0.261xh","2x1":"1.00xw:0.335xh;0,0.362xh","3x1":"1xw:0.22255892255892257xh;center,top","4x3":"1xw:0.5007575757575757xh;center,top","4x6":"0.9984871406959153xw:1xh;center,top","5x1":"1xw:0.13353535353535353xh;center,top","6x4":"1xw:0.44511784511784513xh;center,top","8x1":"1xw:0.08345959595959596xh;center,top","10x2":"1xw:0.13353535353535353xh;center,top","10x3":"1xw:0.20030303030303032xh;center,top","10x5":"1xw:0.3338383838383838xh;center,top","16x9":"1xw:0.3755681818181818xh;center,top","8x10":"1xw:0.8345959595959596xh;center,top","9x16":"0.8424735249621785xw:1xh;center,top","18x11":"1xw:0.4080246913580247xh;center,top"}},"image_metadata":{"seo_meta_description":"a person submerged in water wearing flowing blue fabric"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eAs reality gets harder, people are using AI for escapism. But at what cost?\u003c/p\u003e","short_title":"How ChatGPT Can Help Create Your Dream Life","index_title":"In Times of Uncertainty, ChatGPT Can Help Create Your Dream Life","social_dek":"\u003cp\u003eAs reality gets harder, people are using AI for escapism. But at what cost?\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"6653ff11-c83b-4d22-bb49-7b1bcc9cc0df","display_id":62829833,"edited_at":"2024-11-06T22:19:55.119302Z","publish_from":"2024-11-06T21:53:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"vice-president-kamala-harris-concession-speech-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"46247d32-e1d7-40b5-be0e-03b52c7ba649","image_id":"46247d32-e1d7-40b5-be0e-03b52c7ba649","hips_url":"https://hips.hearstapps.com/hmg-prod//images/democratic-presidential-nominee-u-s-vice-president-kamala-news-photo-1730929289.jpg","hips_prefix":"hmg-prod","height":2383,"role":12,"pathname":"//images/democratic-presidential-nominee-u-s-vice-president-kamala-news-photo-1730929289.jpg","media_type":"image","width":3575,"metadata":{"crops":{"1x1":"0.673xw:1.00xh;0.114xw,0","2x1":"0.873xw:0.656xh;0.0673xw,0.113xh","3x1":"1xw:0.50007xh;center,top","4x3":"0.88876xw:1xh;center,top","4x6":"0.44438xw:1xh;center,top","5x1":"1xw:0.30004xh;center,top","6x4":"0.99986xw:1xh;center,top","8x1":"1xw:0.18753xh;center,top","10x2":"1xw:0.30004xh;center,top","10x3":"1xw:0.45006xh;center,top","10x5":"1xw:0.7501xh;center,top","16x9":"1xw:0.84387xh;center,top","8x10":"0.53326xw:1xh;center,top","9x16":"0.37495xw:1xh;center,top","18x11":"1xw:0.91679xh;center,top"}},"image_metadata":{"seo_meta_title":"Vice President And Presidential Nominee Kamala Harris Delivers Concession Speech At Howard University","seo_meta_description":"vice president and presidential nominee kamala harris delivers concession speech at howard university"},"photographer":{},"source":{}}],"metadata":{"short_title":"Read VP Kamala Harris’s Concession Speech","index_title":"Kamala Harris Delivers a Message of Hope After Election Loss: ‘Don’t Ever Give Up’","social_dek":"\u003cp\u003eHarris gave remarks at Howard University after officially conceding the 2024 election to President-elect Donald Trump.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"4f99c7a0-1335-4dfc-829c-1ea5b4ba5be8","display_id":62829331,"edited_at":"2024-11-06T22:17:03.287134Z","publish_from":"2024-11-06T20:51:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"abortion-rights-ballot-2024-election","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"200bcfb3-89be-47e8-8f74-e8e0d534e7c3","image_id":"200bcfb3-89be-47e8-8f74-e8e0d534e7c3","hips_url":"https://hips.hearstapps.com/hmg-prod//images/supporter-wears-a-hat-that-reads-abortion-is-on-the-ballot-news-photo-1730919669.jpg","hips_prefix":"hmg-prod","height":683,"role":12,"pathname":"//images/supporter-wears-a-hat-that-reads-abortion-is-on-the-ballot-news-photo-1730919669.jpg","media_type":"image","width":1024,"metadata":{"crops":{"1x1":"0.351xw:0.523xh;0.409xw,0.477xh","2x1":"0.620xw:0.463xh;0.282xw,0.537xh","3x1":"1xw:0.49976xh;center,top","4x3":"0.88932xw:1xh;center,top","4x6":"0.44466xw:1xh;center,top","5x1":"1xw:0.29985xh;center,top","6x4":"1xw:0.99951xh;center,top","8x1":"1xw:0.18741xh;center,top","10x2":"1xw:0.29985xh;center,top","10x3":"1xw:0.44978xh;center,top","10x5":"1xw:0.74963xh;center,top","16x9":"1xw:0.84334xh;center,top","8x10":"0.53359xw:1xh;center,top","9x16":"0.37518xw:1xh;center,top","18x11":"1xw:0.91622xh;center,top"}},"image_metadata":{"seo_meta_title":"US-VOTE-POLITICS-HARRIS","seo_meta_description":"us vote politics harris"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eSome good news: Seven states, including Missouri and Montana, voted in favor of reproductive rights. \u003c/p\u003e","short_title":"All the Ways Abortion Rights Won on the Ballot","index_title":"All the Ways Abortion Rights Won This Election","social_dek":"\u003cp\u003eThe future of reproductive rights feels uncertain—so these victories mean everything.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"c68b5e4e-fff3-479b-930e-65668109545b","display_id":62708099,"edited_at":"2024-11-06T22:16:16.164414Z","publish_from":"2024-11-06T16:47:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"first-time-voters-growing-up-president-donald-trump","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"b7dcaf66-4794-4f6f-8f6c-e8dbf323c6a3","image_id":"b7dcaf66-4794-4f6f-8f6c-e8dbf323c6a3","hips_url":"https://hips.hearstapps.com/hmg-prod//images/getty/images-1169369061-6722ac47bcc39.jpg","hips_prefix":"hmg-prod","height":3600,"role":12,"pathname":"//images/getty/images-1169369061-6722ac47bcc39.jpg","media_type":"image","width":5400,"metadata":{"crops":{"1x1":"0.670xw:1.00xh;0.167xw,0","2x1":"0.995xw:0.748xh;0.00481xw,0.197xh","3x1":"1xw:0.5xh;center,top","4x3":"0.8888888888888888xw:1xh;center,top","4x6":"0.4444444444444444xw:1xh;center,top","5x1":"1xw:0.3xh;center,top","6x4":"1xw:1xh;center,top","8x1":"1xw:0.1875xh;center,top","10x2":"1xw:0.3xh;center,top","10x3":"1xw:0.45xh;center,top","10x5":"1xw:0.75xh;center,top","16x9":"1xw:0.84375xh;center,top","8x10":"0.5333333333333333xw:1xh;center,top","9x16":"0.375xw:1xh;center,top","18x11":"1xw:0.9166666666666666xh;center,top"}},"image_metadata":{"seo_meta_title":"donald trump","seo_meta_description":"donald trump"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eThis election, the youngest female voters were just 10 years old when Trump first became president. Here, they share how coming of age during that contentious and chaotic era shaped their political psyche.\u003c/p\u003e","short_title":"Growing Up in Donald Trump’s America","index_title":"Growing Up in Donald Trump’s America","social_dek":"\u003cp\u003eThis election, the youngest female voters were just 10 years old when Trump first became president. Here, they share how coming of age during that contentious and chaotic era shaped their political psyche.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"c24a79a5-af81-4ec5-b353-5cf3f8a4a998","display_id":62805049,"edited_at":"2024-11-06T12:23:18.164441Z","publish_from":"2024-11-06T12:23:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"donald-trump-wins-presidential-election-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"b46775a9-597d-4504-8ee3-2ca4a6587ef1","image_id":"b46775a9-597d-4504-8ee3-2ca4a6587ef1","hips_url":"https://hips.hearstapps.com/hmg-prod//images/republican-presidential-nominee-former-u-s-president-donald-news-photo-1730741393.jpg","hips_prefix":"hmg-prod","height":4000,"role":12,"pathname":"//images/republican-presidential-nominee-former-u-s-president-donald-news-photo-1730741393.jpg","media_type":"image","width":6000,"metadata":{"crops":{"1x1":"0.669xw:1.00xh;0.310xw,0","2x1":"1xw:0.75xh;center,top","3x1":"1xw:0.5xh;center,top","4x3":"0.88889xw:1xh;center,top","4x6":"0.44444xw:1xh;center,top","5x1":"1xw:0.3xh;center,top","6x4":"1xw:1xh;center,top","8x1":"1xw:0.1875xh;center,top","10x2":"1xw:0.3xh;center,top","10x3":"1xw:0.45xh;center,top","10x5":"1xw:0.75xh;center,top","16x9":"1xw:0.84375xh;center,top","8x10":"0.53333xw:1xh;center,top","9x16":"0.375xw:1xh;center,top","18x11":"1xw:0.91667xh;center,top"}},"image_metadata":{"seo_meta_title":"Republican Presidential Nominee Donald Trump Campaigns In Pennsylvania","seo_meta_description":"republican presidential nominee donald trump campaigns in pennsylvania"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eAfter a long, exhausting race, the nation finally has its answer.\u003c/p\u003e","short_title":"Donald Trump Is the Next President of the U.S.","index_title":"Donald Trump Is the Next President of the United States","social_dek":"\u003cp\u003eAfter a long, exhausting race, the nation finally has its answer.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"389f4a9a-ff58-4f76-b84c-a3079d988202","display_id":62371825,"edited_at":"2024-11-06T03:15:21.859471Z","publish_from":"2024-11-06T03:13:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"angela-alsobrooks-lisa-blunt-rochester-senate-race-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"e9eb1cda-d69e-4f13-9043-1e15f621fe15","image_id":"e9eb1cda-d69e-4f13-9043-1e15f621fe15","hips_url":"https://hips.hearstapps.com/hmg-prod//images/1-angela-alsobrooks-lisa-blunt-rochester-67059ab6d5700.jpg","hips_prefix":"hmg-prod","height":1000,"role":12,"pathname":"//images/1-angela-alsobrooks-lisa-blunt-rochester-67059ab6d5700.jpg","media_type":"image","width":1000,"metadata":{"crops":{"1x1":"1.00xw:1.00xh;0,0","2x1":"1.00xw:0.504xh;0,0.151xh","3x1":"1xw:0.3333333333333333xh;center,top","4x3":"1xw:0.75xh;center,top","4x6":"0.6666666666666666xw:1xh;center,top","5x1":"1xw:0.2xh;center,top","6x4":"1xw:0.6666666666666666xh;center,top","8x1":"1xw:0.125xh;center,top","10x2":"1xw:0.2xh;center,top","10x3":"1xw:0.3xh;center,top","10x5":"1xw:0.5xh;center,top","16x9":"1xw:0.5625xh;center,top","8x10":"0.8xw:1xh;center,top","9x16":"0.5625xw:1xh;center,top","18x11":"1xw:0.611111111111111xh;center,top"}},"image_metadata":{"seo_meta_description":"angela alsobrooks and lisa blunt rochester"},"source":{}}],"metadata":{"dek":"\u003cp\u003eThey’ll make history as the fourth and fifth Black women to serve in the U.S. Senate—and the only two to serve together at the same time.\u003c/p\u003e","short_title":"The ‘Sister Senators’","index_title":"Lisa Blunt Rochester and Angela Alsobrooks on Becoming ‘Sister Senators’","social_dek":"\u003cp\u003eThey’ll make history as the fourth and fifth Black women to serve in the U.S. Senate—and the only two to serve together at the same time.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"f3667e8a-1265-4078-ac5d-34b8236dd01b","display_id":62157044,"edited_at":"2024-11-06T03:02:43.226306Z","publish_from":"2024-11-06T03:02:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"sarah-mcbride-congress-delaware-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"7c216306-35fb-4f44-a318-030a01213bdd","image_id":"7c216306-35fb-4f44-a318-030a01213bdd","hips_url":"https://hips.hearstapps.com/hmg-prod//images/sarah-mcbride-gh23-39072-2-66e1e386e2a38.jpg","hips_prefix":"hmg-prod","height":4480,"role":12,"pathname":"//images/sarah-mcbride-gh23-39072-2-66e1e386e2a38.jpg","media_type":"image","width":6720,"metadata":{"crops":{"1x1":"0.670xw:1.00xh;0.268xw,0","2x1":"1.00xw:0.755xh;0,0.0986xh","3x1":"1xw:0.5xh;center,top","4x3":"0.8888888888888888xw:1xh;center,top","4x6":"0.4444444444444444xw:1xh;center,top","5x1":"1xw:0.3xh;center,top","6x4":"1xw:1xh;center,top","8x1":"1xw:0.1875xh;center,top","10x2":"1xw:0.3xh;center,top","10x3":"1xw:0.45xh;center,top","10x5":"1xw:0.75xh;center,top","16x9":"1xw:0.84375xh;center,top","8x10":"0.5333333333333333xw:1xh;center,top","9x16":"0.375xw:1xh;center,top","18x11":"1xw:0.9166666666666667xh;center,top"}},"image_metadata":{"seo_meta_description":"sarah mcbride"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eThe 34-year-old is now the first-ever openly transgender person elected to Congress.\u003c/p\u003e","short_title":"Sarah McBride on Making Political History","index_title":"Trans Lawmaker Sarah McBride on the Privilege—and Pressure—of Making Political History","social_dek":"\u003cp\u003eThe 34-year-old is now the first-ever openly transgender person elected to Congress.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"9485635f-8314-4ec5-bc48-dc0da1b2176f","display_id":62764391,"edited_at":"2024-11-06T19:27:45.089133Z","publish_from":"2024-11-04T20:15:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"angela-ferrell-zabala-moms-demand-action-career-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"1a088608-73b8-4489-9d24-d92c0458e22d","image_id":"1a088608-73b8-4489-9d24-d92c0458e22d","hips_url":"https://hips.hearstapps.com/hmg-prod//images/office-hours-angela-index-6728de531a5ff.png","hips_prefix":"hmg-prod","height":1000,"role":12,"pathname":"//images/office-hours-angela-index-6728de531a5ff.png","media_type":"image","width":2000,"metadata":{"crops":{"1x1":"0.495xw:0.990xh;0.505xw,0","2x1":"1.00xw:1.00xh;0,0","3x1":"1xw:0.6666666666666666xh;center,top","4x3":"0.6666666666666666xw:1xh;center,top","4x6":"0.3333333333333333xw:1xh;center,top","5x1":"1xw:0.4xh;center,top","6x4":"0.75xw:1xh;center,top","8x1":"1xw:0.25xh;center,top","10x2":"1xw:0.4xh;center,top","10x3":"1xw:0.6xh;center,top","10x5":"1xw:1xh;center,top","16x9":"0.888888888888889xw:1xh;center,top","8x10":"0.4xw:1xh;center,top","9x16":"0.28125xw:1xh;center,top","18x11":"0.8181818181818181xw:1xh;center,top"}},"image_metadata":{"seo_meta_description":"office hours logo next to a photo of angela ferrell zabala"},"photographer":{}}],"metadata":{"short_title":"Angela Ferrell-Zabala on Resilience","index_title":"How This ﻿Gun Violence Prevention Leader Talks to People Who Disagree With ﻿Her","social_dek":"\u003cp\u003e“The goal isn’t to convince someone,” says Angela Ferrell-Zabala, the executive director of Moms Demand Action. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}}]}],"textDom":{"children":[],"type":"root"}},{"id":"de90c2b6-88e1-4ee1-94ca-f2c536c5f027","type":"4-across","heading":"","subheading":"","settings":{"show_dek":false,"show_byline":false,"show_date":false,"layout":"image-stacked"},"feeds":[{"id":"cb8d018d-0612-4555-a42b-23ae197a59c0","source_type":"subsection","heading_url":"","resources":[{"type":"Content","id":"eac0cc58-90cd-45fc-b0a7-98769aad1f3e","display_id":62742816,"edited_at":"2024-11-01T02:25:53.510948Z","publish_from":"2024-10-31T20:08:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"opal-vadhan-kamala-harris-hillary-clinton-career-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"23a298ff-a874-416f-84d2-0d478f0e4cef","image_id":"23a298ff-a874-416f-84d2-0d478f0e4cef","hips_url":"https://hips.hearstapps.com/hmg-prod//images/office-hours-opal-v-index-6722869181bf5.png","hips_prefix":"hmg-prod","height":1000,"role":12,"pathname":"//images/office-hours-opal-v-index-6722869181bf5.png","media_type":"image","width":2000,"metadata":{"crops":{"1x1":"0.494xw:0.987xh;0.505xw,0.00641xh","2x1":"1.00xw:1.00xh;0,0","3x1":"1xw:0.6666666666666666xh;center,top","4x3":"0.6666666666666666xw:1xh;center,top","4x6":"0.3333333333333333xw:1xh;center,top","5x1":"1xw:0.4xh;center,top","6x4":"0.75xw:1xh;center,top","8x1":"1xw:0.25xh;center,top","10x2":"1xw:0.4xh;center,top","10x3":"1xw:0.6xh;center,top","10x5":"1xw:1xh;center,top","16x9":"0.888888888888889xw:1xh;center,top","8x10":"0.4xw:1xh;center,top","9x16":"0.28125xw:1xh;center,top","18x11":"0.8181818181818181xw:1xh;center,top"}},"image_metadata":{"seo_meta_description":"sign for office hours beside a professional portrait of opal vadhan"},"photographer":{}}],"metadata":{"short_title":"Opal Vadhan on Working in the White House","index_title":"How Opal Vadhan Went From White House Intern to Kamala Harris’s Personal Aide","social_dek":"\u003cp\u003e“I don’t come from this world,” she says about landing the coveted internship. “Getting to do that changed it all.”\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"c723c68e-31cd-4998-a370-e2969453c958","display_id":62706254,"edited_at":"2024-11-04T17:59:05.831584Z","publish_from":"2024-10-30T12:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"indigenous-horseback-ride-election-polls","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"a3b4cb56-e566-4a86-b819-eb57b04b1e52","image_id":"a3b4cb56-e566-4a86-b819-eb57b04b1e52","hips_url":"https://hips.hearstapps.com/hmg-prod//images/copy-of-dsc06873-1-jpg-6720ffbd9bbd6.jpg","hips_prefix":"hmg-prod","height":4244,"role":12,"pathname":"//images/copy-of-dsc06873-1-jpg-6720ffbd9bbd6.jpg","media_type":"image","width":7546,"metadata":{"crops":{"1x1":"0.471xw:0.835xh;0.272xw,0.165xh","2x1":"0.769xw:0.684xh;0.131xw,0.316xh","3x1":"1xw:0.5926798617656299xh;center,top","4x3":"0.7498895662160968xw:1xh;center,top","4x6":"0.3749447831080484xw:1xh;center,top","5x1":"1xw:0.35560791705937794xh;center,top","6x4":"0.8436257619931089xw:1xh;center,top","8x1":"1xw:0.22225494816211122xh;center,top","10x2":"1xw:0.35560791705937794xh;center,top","10x3":"1xw:0.533411875589067xh;center,top","10x5":"1xw:0.8890197926484449xh;center,top","16x9":"0.9998527549547958xw:1xh;center,top","8x10":"0.44993373972965806xw:1xh;center,top","9x16":"0.31635966074741584xw:1xh;center,top","18x11":"0.9203190130833916xw:1xh;center,top"}},"image_metadata":{"seo_meta_description":"person on horseback wearing traditional attire in a desert setting"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eAllie Redhorse Young is on a mission to cement her place in the story of the American West. \u003c/p\u003e","short_title":"Why I’m Riding on Horseback to the Polls","index_title":"I’m Riding on Horseback to the Polls to Reclaim Indigenous Cowgirl Culture","social_dek":"\u003cp\u003eAllie Redhorse Young is on a mission to cement her place in the story of the American West. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"0d99d89b-900c-4334-a84c-edb1b08110d3","display_id":62741144,"edited_at":"2024-11-03T22:06:11.751675Z","publish_from":"2024-10-30T12:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"female-chiefs-of-staff-house-of-representatives-washington-culture-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{},{"id":"7c31cfa0-be93-4f24-a8f0-97e5e9cdff8b","image_id":"7c31cfa0-be93-4f24-a8f0-97e5e9cdff8b","hips_url":"https://hips.hearstapps.com/hmg-prod//images/young-chief-index-6720f1f3f11f3.jpg","hips_prefix":"hmg-prod","height":1580,"role":12,"pathname":"//images/young-chief-index-6720f1f3f11f3.jpg","media_type":"image","width":2400,"metadata":{"crops":{"1x1":"0.659xw:1.00xh;0,0","2x1":"1.00xw:0.762xh;0,0","3x1":"1xw:0.5063291139240507xh;center,top","4x3":"0.8777777777777778xw:1xh;center,top","4x6":"0.4388888888888889xw:1xh;center,top","5x1":"1xw:0.3037974683544304xh;center,top","6x4":"0.9875xw:1xh;center,top","8x1":"1xw:0.189873417721519xh;center,top","10x2":"1xw:0.3037974683544304xh;center,top","10x3":"1xw:0.45569620253164556xh;center,top","10x5":"1xw:0.759493670886076xh;center,top","16x9":"1xw:0.8544303797468354xh;center,top","8x10":"0.5266666666666666xw:1xh;center,top","9x16":"0.3703125xw:1xh;center,top","18x11":"1xw:0.9282700421940929xh;center,top"}},"image_metadata":{"seo_meta_description":"young chiefs"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eFor the increasing numbers of young women helping run the House of Representatives, serving as chief of staff means being mistaken for the intern, having your outfits go viral, dating in “the cesspool”—and changing the face of Capitol Hill.\u003c/p\u003e","short_title":"The Group Chat That Secretly Runs Congress","index_title":"The Group Chat That Secretly Runs Congress","social_dek":"\u003cp\u003eFor the increasing numbers of young women helping run the House of Representatives, serving as chief of staff means being mistaken for the intern, having your outfits go viral, dating in “the cesspool”—and changing the face of Capitol Hill.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"b2dc7d67-e147-4b95-85cd-0e532fd922be","display_id":62719834,"edited_at":"2024-11-06T22:16:57.382221Z","publish_from":"2024-10-28T12:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"who-is-house-inhabit-jessica-reed-kraus","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"70360e55-58e0-4aa2-9415-844221dd94e8","image_id":"70360e55-58e0-4aa2-9415-844221dd94e8","hips_url":"https://hips.hearstapps.com/hmg-prod//images/elle-esquire3242-671bf57aacf72.jpg","hips_prefix":"hmg-prod","height":1467,"role":12,"pathname":"//images/elle-esquire3242-671bf57aacf72.jpg","media_type":"image","width":2200,"metadata":{"crops":{"1x1":"0.670xw:1.00xh;0.277xw,0","2x1":"0.667xw:0.500xh;0.311xw,0.0192xh","3x1":"1xw:0.49988638945694164xh;center,top","4x3":"0.889090909090909xw:1xh;center,top","4x6":"0.4445454545454545xw:1xh;center,top","5x1":"1xw:0.299931833674165xh;center,top","6x4":"1xw:0.9997727789138833xh;center,top","8x1":"1xw:0.18745739604635311xh;center,top","10x2":"1xw:0.299931833674165xh;center,top","10x3":"1xw:0.4498977505112474xh;center,top","10x5":"1xw:0.7498295841854125xh;center,top","16x9":"1xw:0.843558282208589xh;center,top","8x10":"0.5334545454545454xw:1xh;center,top","9x16":"0.37508522727272725xw:1xh;center,top","18x11":"1xw:0.9164583806710596xh;center,top"}},"image_metadata":{"seo_meta_description":"a person is depicted in profile, with long, straight hair gently cascading over their shoulder they are wearing a light colored button up shirt with a collar the background is softly neutral providing a minimalistic contrast to the subject the overall mood suggests a serene and contemplative atmosphere"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eThe woman behind House Inhabit claims to offer an “independent perspective on the campaign trail.” But in 2024, what does that even mean?\u003c/p\u003e","short_title":"Meet Jessica Reed Kraus, MAGA’s Secret Weapon","index_title":"From Mommy Blogger to MAGA’s Most Powerful Weapon","social_dek":"\u003cp\u003eJessica Reed Kraus, the woman behind House Inhabit, claims to offer an “independent perspective.” But in 2024, what does that even mean?\u003c/p\u003e","editor_attribution":"By","sponsor":{}}}]}],"textDom":{"children":[],"type":"root"}},{"id":"46b7dae1-21fe-4f81-83c5-cd5957234e8d","type":"3-column","heading":"","subheading":"","settings":{"show_dek":false,"show_byline":false,"show_date":false,"layout":"image-left","single_source":true},"feeds":[{"id":"a3e2ddb6-dbf2-411c-89e4-b871e0e4a5fc","heading":"","source_type":"subsection","heading_url":"","resources":[{"type":"Content","id":"8cbef4cb-3401-4ad5-8cfb-22f85e876a25","display_id":62683306,"edited_at":"2024-10-22T20:39:40.813368Z","publish_from":"2024-10-23T13:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"sabrina-ionescu-wnba-finals-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"5ffb5b13-9d62-4e52-a8ee-ad4715250fcb","image_id":"5ffb5b13-9d62-4e52-a8ee-ad4715250fcb","hips_url":"https://hips.hearstapps.com/hmg-prod//images/sabrina-ionescu-getty/images-2179886601-6717f57918e3e.jpg","hips_prefix":"hmg-prod","height":3569,"role":12,"pathname":"//images/sabrina-ionescu-getty/images-2179886601-6717f57918e3e.jpg","media_type":"image","width":5353,"metadata":{"crops":{"1x1":"0.670xw:1.00xh;0.215xw,0","2x1":"0.883xw:0.661xh;0.117xw,0.147xh","3x1":"1xw:0.4999533015784066xh;center,top","4x3":"0.8889719160595305xw:1xh;center,top","4x6":"0.44448595802976526xw:1xh;center,top","5x1":"1xw:0.29997198094704397xh;center,top","6x4":"1xw:0.9999066031568132xh;center,top","8x1":"1xw:0.1874824880919025xh;center,top","10x2":"1xw:0.29997198094704397xh;center,top","10x3":"1xw:0.449957971420566xh;center,top","10x5":"1xw:0.74992995236761xh;center,top","16x9":"1xw:0.8436711964135613xh;center,top","8x10":"0.5333831496357182xw:1xh;center,top","9x16":"0.37503502708761444xw:1xh;center,top","18x11":"1xw:0.9165810528937456xh;center,top"}},"image_metadata":{"seo_meta_title":"2024 WNBA Finals - Game Five","seo_meta_description":"new york, new york october 20 sabrina ionescu 20 of the new york liberty celebrates with the wnba championship trophy after defeating the minnesota lynx to win game five of the wnba finals at barclays center on october 20, 2024 in new york city photo by elsagetty /images"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eThe point guard opens up to ELLE about securing the franchise’s first-ever championship ring—and the last-second three-point shot that helped her team get there.\u003c/p\u003e","short_title":"Sabrina Ionescu on Her History-Making WNBA Win","index_title":"Sabrina Ionescu on Her Championship Win, Growing the WNBA, and *That* Shot ","social_dek":"\u003cp\u003eThe New York Liberty point guard talks with ELLE about bringing home the franchise’s first-ever championship ring.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"0c8ec6a5-bf5a-49c4-b802-fbd16f25710d","display_id":62640872,"edited_at":"2024-10-22T17:08:21.668416Z","publish_from":"2024-10-18T16:51:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"voting-secret-ballot-explained","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"d7f25445-be64-4249-8f71-2e983215e8a5","image_id":"d7f25445-be64-4249-8f71-2e983215e8a5","hips_url":"https://hips.hearstapps.com/hmg-prod//images/getty/images-138711411-671169198cec6.jpg","hips_prefix":"hmg-prod","height":3433,"role":12,"pathname":"//images/getty/images-138711411-671169198cec6.jpg","media_type":"image","width":5150,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.167xw,0","2x1":"1.00xw:0.752xh;0,0","3x1":"1xw:0.5000485484027576xh;center,top","4x3":"0.8888025889967637xw:1xh;center,top","4x6":"0.44440129449838184xw:1xh;center,top","5x1":"1xw:0.3000291290416545xh;center,top","6x4":"0.9999029126213592xw:1xh;center,top","8x1":"1xw:0.18751820565103408xh;center,top","10x2":"1xw:0.3000291290416545xh;center,top","10x3":"1xw:0.4500436935624818xh;center,top","10x5":"1xw:0.7500728226041363xh;center,top","16x9":"1xw:0.8438319254296534xh;center,top","8x10":"0.5332815533980583xw:1xh;center,top","9x16":"0.37496359223300973xw:1xh;center,top","18x11":"1xw:0.9167556720717221xh;center,top"}},"image_metadata":{"seo_meta_description":"two individuals stand behind voting booths"},"source":{}}],"metadata":{"dek":"\u003cp\u003eNo one can find out who you vote for unless you tell them. But if you’re planning to keep the decision private, here are a few strategies to keep in mind.\u003c/p\u003e","short_title":"When You Vote, Is Your Ballot a Secret?","index_title":"When You Vote, Is Your Ballot a Secret?","social_dek":"\u003cp\u003eNo one can find out who you vote for unless you tell them. But if you’re planning to keep the decision private, here are a few strategies to keep in mind.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"e89011c9-19be-44a2-a4d2-7aab3db0ea39","display_id":62670723,"edited_at":"2024-10-22T19:53:32.516405Z","publish_from":"2024-10-18T13:00:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"elle-argent-when-we-all-vote-vital-voices-event-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"64772b83-0dd6-4df5-9757-4fc8ed420ed0","image_id":"64772b83-0dd6-4df5-9757-4fc8ed420ed0","hips_url":"https://hips.hearstapps.com/hmg-prod//images/54074917907-f23340e0e4-o-6716b956b6feb.jpg","hips_prefix":"hmg-prod","height":3757,"role":12,"pathname":"//images/54074917907-f23340e0e4-o-6716b956b6feb.jpg","media_type":"image","width":5760,"metadata":{"crops":{"1x1":"0.657xw:1.00xh;0.0304xw,0","2x1":"1.00xw:0.770xh;0,0.194xh","3x1":"1xw:0.5110460473782273xh;center,top","4x3":"0.8696759259259259xw:1xh;center,top","4x6":"0.43483796296296295xw:1xh;center,top","5x1":"1xw:0.30662762842693636xh;center,top","6x4":"0.9783854166666667xw:1xh;center,top","8x1":"1xw:0.19164226776683524xh;center,top","10x2":"1xw:0.30662762842693636xh;center,top","10x3":"1xw:0.4599414426404046xh;center,top","10x5":"1xw:0.766569071067341xh;center,top","16x9":"1xw:0.8623902049507586xh;center,top","8x10":"0.5218055555555555xw:1xh;center,top","9x16":"0.36689453125xw:1xh;center,top","18x11":"1xw:0.9369177535267501xh;center,top"}},"image_metadata":{"seo_meta_description":"elle argent panel"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eELLE teamed up with Argent, When We All Vote, and Vital Voices to get out the vote this year.\u003c/p\u003e","short_title":"Inside ELLE’s Get Out the Vote Event","index_title":"Women’s Votes Matter More Than Ever. ELLE Joined Activists to Talk About Why","social_dek":"\u003cp\u003eELLE teamed up with Argent, When We All Vote, and Vital Voices to get out the vote this year.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"6bdcc23d-8bc7-4010-9eca-c7d60637be70","display_id":62415375,"edited_at":"2024-10-14T18:19:26.094583Z","publish_from":"2024-10-14T18:19:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"project-2025-explained","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"8631d890-966c-434c-b051-761f53a9dba8","image_id":"8631d890-966c-434c-b051-761f53a9dba8","hips_url":"https://hips.hearstapps.com/hmg-prod//images/project-2025-reuters-rts16388w-66fc14da499b3.jpg","hips_prefix":"hmg-prod","height":1533,"role":12,"pathname":"//images/project-2025-reuters-rts16388w-66fc14da499b3.jpg","media_type":"image","width":2300,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.167xw,0","2x1":"1xw:0.7501630789302022xh;center,top","3x1":"1xw:0.5001087192868015xh;center,top","4x3":"0.888695652173913xw:1xh;center,top","4x6":"0.4443478260869565xw:1xh;center,top","5x1":"1xw:0.30006523157208087xh;center,top","6x4":"0.9997826086956522xw:1xh;center,top","8x1":"1xw:0.18754076973255054xh;center,top","10x2":"1xw:0.30006523157208087xh;center,top","10x3":"1xw:0.4500978473581213xh;center,top","10x5":"1xw:0.7501630789302022xh;center,top","16x9":"1xw:0.8439334637964775xh;center,top","8x10":"0.5332173913043479xw:1xh;center,top","9x16":"0.37491847826086955xw:1xh;center,top","18x11":"1xw:0.9168659853591361xh;center,top"}},"image_metadata":{"seo_meta_description":"a man holds a large book"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eThe recommendations for Trump’s potential second presidency have become major talking points for both parties.\u003cbr\u003e\u003c/p\u003e","short_title":"What to Know About Project 2025","index_title":"What to Know About Project 2025, the Controversial Conservative Playbook","social_dek":"\u003cp\u003eThe recommendations for Trump’s potential second presidency have become major talking points for both parties.\u003cbr\u003e\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"d31ee02b-99c6-412c-9e11-13fb34ae2858","display_id":62571280,"edited_at":"2024-10-11T17:00:17.578444Z","publish_from":"2024-10-11T00:10:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"bcrf-nina-garcia-breast-cancer-panel","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"4397bc0e-2a13-469c-a289-fb7131db92b6","image_id":"4397bc0e-2a13-469c-a289-fb7131db92b6","hips_url":"https://hips.hearstapps.com/hmg-prod//images/llp06259-67084296a1ddb.jpg","hips_prefix":"hmg-prod","height":1333,"role":12,"pathname":"//images/llp06259-67084296a1ddb.jpg","media_type":"image","width":2000,"metadata":{"crops":{"1x1":"0.6665xw:1xh;center,top","2x1":"1xw:0.7501875468867217xh;center,top","3x1":"1xw:0.5001250312578144xh;center,top","4x3":"0.8886666666666666xw:1xh;center,top","4x6":"0.4443333333333333xw:1xh;center,top","5x1":"1xw:0.30007501875468867xh;center,top","6x4":"0.99975xw:1xh;center,top","8x1":"1xw:0.18754688672168043xh;center,top","10x2":"1xw:0.30007501875468867xh;center,top","10x3":"1xw:0.450112528132033xh;center,top","10x5":"1xw:0.7501875468867217xh;center,top","16x9":"1xw:0.8439609902475619xh;center,top","8x10":"0.5332xw:1xh;center,top","9x16":"0.37490625xw:1xh;center,top","18x11":"1xw:0.9168958906393264xh;center,top"}},"image_metadata":{"seo_meta_description":"five women on a breast cancer panel"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eELLE’s editor-in-chief joined the \u003cem\u003eFrasier \u003c/em\u003eactress, Rebecca Porter, and \u003cem\u003e\u003c/em\u003eDr. Elizabeth Comen for a panel moderated by Hearst Magazines editorial director Lucy Kaylin. \u003c/p\u003e","short_title":"A Candid Conversation About Breast Cancer","index_title":"A Candid Conversation About Breast Cancer With Nina Garcia, Toks Olagundoye, and More","social_dek":"\u003cp\u003eELLE’s editor-in-chief joined the \u003cem\u003eFrasier \u003c/em\u003eactress, Rebecca Porter, and \u003cem\u003e\u003c/em\u003eDr. Elizabeth Comen for a panel moderated by Hearst Magazines editorial director Lucy Kaylin. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"72122aa9-475e-4eba-aebe-4b288739c055","display_id":62533030,"edited_at":"2024-10-07T19:01:02.003952Z","publish_from":"2024-09-30T21:00:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"how-to-help-hurricane-helene-victims","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"df15deb7-db75-4f06-a235-acde1ae39141","image_id":"df15deb7-db75-4f06-a235-acde1ae39141","hips_url":"https://hips.hearstapps.com/hmg-prod//images/flood-waters-inundate-the-main-street-after-hurricane-news-photo-1727712333.jpg","hips_prefix":"hmg-prod","height":576,"role":12,"pathname":"//images/flood-waters-inundate-the-main-street-after-hurricane-news-photo-1727712333.jpg","media_type":"image","width":1024,"metadata":{"crops":{"1x1":"0.564xw:1.00xh;0.199xw,0","2x1":"1.00xw:0.892xh;0,0.0684xh","3x1":"1xw:0.59259xh;center,top","4x3":"0.75xw:1xh;center,top","4x6":"0.375xw:1xh;center,top","5x1":"1xw:0.35556xh;center,top","6x4":"0.84375xw:1xh;center,top","8x1":"1xw:0.22222xh;center,top","10x2":"1xw:0.35556xh;center,top","10x3":"1xw:0.53333xh;center,top","10x5":"1xw:0.88889xh;center,top","16x9":"1xw:1xh;center,top","8x10":"0.45xw:1xh;center,top","9x16":"0.31641xw:1xh;center,top","18x11":"0.92045xw:1xh;center,top"}},"image_metadata":{"seo_meta_title":"Hurricane Helene Hits Gulf Coast Of Florida","seo_meta_description":"hurricane helene hits gulf coast of florida"},"source":{}}],"metadata":{"dek":"\u003cp\u003eDisaster relief organizations and blood drives are great places to start. \u003c/p\u003e","short_title":"How to Help Those Affected by Hurricane Helene","index_title":"How to Help the Communities Affected by Hurricane Helene","social_dek":"\u003cp\u003eDisaster relief organizations and blood drives are great places to start. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"d05db67e-9cdf-4c83-95a6-44b70327cb7b","display_id":62353576,"edited_at":"2024-09-24T20:22:20.370251Z","publish_from":"2024-09-24T20:22:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"womens-soccer-gotham-white-house-biden","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"e0a92ce3-3f4b-48bb-8329-ccaa109e7323","image_id":"e0a92ce3-3f4b-48bb-8329-ccaa109e7323","hips_url":"https://hips.hearstapps.com/hmg-prod//images/usatsi-24306834-66f306c8d79e0.jpg","hips_prefix":"hmg-prod","height":3000,"role":12,"pathname":"//images/usatsi-24306834-66f306c8d79e0.jpg","media_type":"image","width":4500,"metadata":{"crops":{"1x1":"0.585xw:0.875xh;0.314xw,0.110xh","2x1":"1.00xw:0.752xh;0,0.0294xh","3x1":"1xw:0.5xh;center,top","4x3":"0.8888888888888888xw:1xh;center,top","4x6":"0.4444444444444444xw:1xh;center,top","5x1":"1xw:0.3xh;center,top","6x4":"1xw:1xh;center,top","8x1":"1xw:0.1875xh;center,top","10x2":"1xw:0.3xh;center,top","10x3":"1xw:0.45xh;center,top","10x5":"1xw:0.75xh;center,top","16x9":"1xw:0.84375xh;center,top","8x10":"0.5333333333333333xw:1xh;center,top","9x16":"0.375xw:1xh;center,top","18x11":"1xw:0.9166666666666666xh;center,top"}},"image_metadata":{"seo_meta_title":"News: NWSL team Gotham FC to visit White House","seo_meta_description":"usa gotham fc"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eMonday marked the first time a National Women’s Soccer League team was received at the presidential residence. \u003c/p\u003e","short_title":"Women’s Soccer Makes History at the White House","index_title":"Women’s Soccer Makes History at the White House","social_dek":"\u003cp\u003eMonday marked the first time a National Women’s Soccer League team was received at the presidential residence.\u003cbr\u003e\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"a0c74e12-3296-4e17-8ad9-1409c258ff56","display_id":62246202,"edited_at":"2024-09-24T16:04:44.902871Z","publish_from":"2024-09-24T16:04:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"melissa-skeet-indigenous-skater-journey","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"e4ec474d-ae19-4750-afff-f3ac1bf3f0a4","image_id":"e4ec474d-ae19-4750-afff-f3ac1bf3f0a4","hips_url":"https://hips.hearstapps.com/hmg-prod//images/melissa-skeet-7-66f1a2379e9bf.jpg","hips_prefix":"hmg-prod","height":4000,"role":12,"pathname":"//images/melissa-skeet-7-66f1a2379e9bf.jpg","media_type":"image","width":3000,"metadata":{"crops":{"1x1":"1.00xw:0.752xh;0,0","2x1":"1.00xw:0.377xh;0,0.230xh","3x1":"1xw:0.25xh;center,top","4x3":"1xw:0.5625xh;center,top","4x6":"0.8888888888888888xw:1xh;center,top","5x1":"1xw:0.15xh;center,top","6x4":"1xw:0.5xh;center,top","8x1":"1xw:0.09375xh;center,top","10x2":"1xw:0.15xh;center,top","10x3":"1xw:0.225xh;center,top","10x5":"1xw:0.375xh;center,top","16x9":"1xw:0.421875xh;center,top","8x10":"1xw:0.9375xh;center,top","9x16":"0.75xw:1xh;center,top","18x11":"1xw:0.4583333333333333xh;center,top"}},"image_metadata":{"seo_meta_description":"melissa skeet on roller skates"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eRoller derby athlete Melissa Skeet has been skating across the country for months to foster hope and healing.\u003c/p\u003e","short_title":"She’s Roller-Skating to Help Heal Indian Country","index_title":"She’s on a Roller-Skating Mission to Honor Missing and Murdered Indigenous Women","social_dek":"\u003cp\u003eRoller derby athlete Melissa Skeet has been skating across the country for months to foster hope and healing.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","display_id":62267372,"edited_at":"2024-09-24T16:42:17.687816Z","display_type":{"title":"Long Form Article"},"slug":"debbie-mucarsel-powell-florida-senate-race-abortion-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"metadata":{"index_title":"Will the Fight for Abortion Care Help Debbie Mucarsel-Powell Win in Florida?"}},{"type":"Content","display_id":62057394,"edited_at":"2024-09-23T20:37:13.459449Z","display_type":{"title":"Long Form Article"},"slug":"ellie-elephant-new-york-liberty","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"metadata":{"index_title":"Your New Fashion Icon Is a Telfar-Carrying, Twerking Elephant "}},{"type":"Content","display_id":62177726,"edited_at":"2024-12-10T20:48:21.648011Z","display_type":{"title":"Standard Article"},"slug":"basma-hameed-career-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"metadata":{"index_title":"How Burn Survivor Basma Hameed Built Her Inclusive Beauty Brand "}},{"type":"Content","display_id":61915492,"edited_at":"2024-09-06T17:19:09.644928Z","display_type":{"title":"Long Form Article"},"slug":"tiktok-psychopaths-sociopaths-explained","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"metadata":{"index_title":"The Psychopaths of TikTok"}}]}],"textDom":{"children":[],"type":"root"}},{"id":"2d79160b-4e9d-45b0-ac26-fc5b8ecde492","type":"4-across","heading":"","subheading":"","settings":{"show_dek":false,"show_byline":false,"show_date":false,"layout":"image-stacked"},"feeds":[{"id":"3a740511-fac7-42b3-9cf1-a36dcb61d617","source_type":"subsection","heading_url":"","resources":[{"type":"Content","id":"833643cb-9889-4b76-b125-ac9e73caffbf","display_id":62018006,"edited_at":"2024-09-24T16:42:48.592094Z","publish_from":"2024-09-04T19:02:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"dana-bash-biden-trump-debate-cnn-interview","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"d0f2901a-a392-485b-90b7-10e5664ab938","image_id":"d0f2901a-a392-485b-90b7-10e5664ab938","hips_url":"https://hips.hearstapps.com/hmg-prod//images/cnn3-66d767ef1cbbd.jpg","hips_prefix":"hmg-prod","height":7234,"role":12,"pathname":"//images/cnn3-66d767ef1cbbd.jpg","media_type":"image","width":4823,"metadata":{"crops":{"1x1":"1.00xw:0.669xh;0,0.103xh","2x1":"1.00xw:0.334xh;0,0.120xh","3x1":"1xw:0.22223758178969683xh;center,top","4x3":"1xw:0.5000345590268178xh;center,top","4x6":"0.9999308867233396xw:1xh;center,top","5x1":"1xw:0.1333425490738181xh;center,top","6x4":"1xw:0.44447516357939365xh;center,top","8x1":"1xw:0.0833390931711363xh;center,top","10x2":"1xw:0.1333425490738181xh;center,top","10x3":"1xw:0.20001382361072714xh;center,top","10x5":"1xw:0.3333563726845452xh;center,top","16x9":"1xw:0.37502591927011336xh;center,top","8x10":"1xw:0.833390931711363xh;center,top","9x16":"0.8436916856728177xw:1xh;center,top","18x11":"1xw:0.40743556661444413xh;center,top"}},"image_metadata":{"seo_meta_description":"dana bash"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003e\u003c/p\u003e\u003cp\u003eThe network’s chief political correspondent tells ELLE.com what it was like to have a front-row seat to one of the most influential showdowns in recent political history.\u003c/p\u003e\u003cp\u003e\u003c/p\u003e","short_title":"Dana Bash on the Trump-Biden Debate","index_title":"Dana Bash Wouldn’t Have Done ‘Anything Differently’ in the Trump-Biden Debate","social_dek":"\u003cp\u003e“What we saw on the debate stage was very illuminating for voters,” the CNN anchor tells ELLE.com. “That was our job.”\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"388a9267-b1fe-4848-8598-5d787ebe0083","display_id":61963411,"edited_at":"2024-08-28T21:35:09.991252Z","publish_from":"2024-08-28T21:35:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"ghia-melanie-masarin-career-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"836b8be6-00dd-4167-b882-e9463302bcec","image_id":"836b8be6-00dd-4167-b882-e9463302bcec","hips_url":"https://hips.hearstapps.com/hmg-prod//images/office-hours-ghia-index-66ce0fdac9263.png","hips_prefix":"hmg-prod","height":1000,"role":12,"pathname":"//images/office-hours-ghia-index-66ce0fdac9263.png","media_type":"image","width":2000,"metadata":{"crops":{"1x1":"0.490xw:0.981xh;0.506xw,0.00962xh","2x1":"1.00xw:1.00xh;0,0","3x1":"1xw:0.6666666666666666xh;center,top","4x3":"0.6666666666666666xw:1xh;center,top","4x6":"0.3333333333333333xw:1xh;center,top","5x1":"1xw:0.4xh;center,top","6x4":"0.75xw:1xh;center,top","8x1":"1xw:0.25xh;center,top","10x2":"1xw:0.4xh;center,top","10x3":"1xw:0.6xh;center,top","10x5":"1xw:1xh;center,top","16x9":"0.888888888888889xw:1xh;center,top","8x10":"0.4xw:1xh;center,top","9x16":"0.28125xw:1xh;center,top","18x11":"0.8181818181818181xw:1xh;center,top"}},"image_metadata":{"seo_meta_description":"a photo of melanie masarin next to the office hours logo"},"photographer":{}}],"metadata":{"short_title":"Ghia’s Mélanie Masarin on Rebranding Your 20s","index_title":"How ﻿Mélanie Masarin Went From Dig Inn to Glossier to Starting Ghia","social_dek":"\u003cp\u003eThe CEO of Ghia, the nonalcoholic aperitif brand, shares the recipe for her career.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"7bc2d627-23b3-455a-9fb0-10d5946859be","display_id":61752660,"edited_at":"2024-08-23T03:43:28.471102Z","publish_from":"2024-08-23T03:41:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"kamala-harris-dnc-speech-presidential-nominee","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"49a4276f-ad77-4e21-98bc-c8fb9e874559","image_id":"49a4276f-ad77-4e21-98bc-c8fb9e874559","hips_url":"https://hips.hearstapps.com/hmg-prod//images/getty/images-2167179651-66c80033a1bd5.jpg","hips_prefix":"hmg-prod","height":683,"role":12,"pathname":"//images/getty/images-2167179651-66c80033a1bd5.jpg","media_type":"image","width":1024,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.167xw,0","2x1":"1.00xw:0.753xh;0,0","3x1":"1xw:0.49975597852611026xh;center,top","4x3":"0.8893229166666666xw:1xh;center,top","4x6":"0.4446614583333333xw:1xh;center,top","5x1":"1xw:0.2998535871156662xh;center,top","6x4":"1xw:0.9995119570522205xh;center,top","8x1":"1xw:0.18740849194729137xh;center,top","10x2":"1xw:0.2998535871156662xh;center,top","10x3":"1xw:0.44978038067349924xh;center,top","10x5":"1xw:0.7496339677891655xh;center,top","16x9":"1xw:0.8433382137628112xh;center,top","8x10":"0.53359375xw:1xh;center,top","9x16":"0.37518310546875xw:1xh;center,top","18x11":"1xw:0.9162192939645356xh;center,top"}},"image_metadata":{"seo_meta_title":"US-VOTE-POLITICS-DEMOCRATIC-CONVENTION","seo_meta_description":"us vice president and 2024 democratic presidential candidate kamala harris speaks on the fourth and last day of the democratic national convention dnc at the united center in chicago, illinois, on august 22, 2024 photo by saul loeb  afp photo by saul loebafp via getty /images"},"photographer":{}}],"metadata":{"short_title":"Kamala Harris Makes History as Democratic Nominee","index_title":"Kamala Harris Is the First Black Woman to Lead a Major Party’s Presidential Ticket","social_dek":"\u003cp\u003eThe current vice president just accepted the nomination for president, saying: “Let us write the next great chapter in the greatest story ever told.” \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"1225aca4-6775-4d74-b9c3-a7faaa32cfe5","display_id":61879420,"edited_at":"2024-08-22T13:46:10.561276Z","publish_from":"2024-08-22T12:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"maui-fires-women-survival","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"30df0c91-1365-4d5d-a421-71742fb4ad07","image_id":"30df0c91-1365-4d5d-a421-71742fb4ad07","hips_url":"https://hips.hearstapps.com/hmg-prod//images/adri-haia-and-lahaina-photos-by-portia-marcelo-dsc01441-66c64acff2588.jpg","hips_prefix":"hmg-prod","height":3984,"role":12,"pathname":"//images/adri-haia-and-lahaina-photos-by-portia-marcelo-dsc01441-66c64acff2588.jpg","media_type":"image","width":2656,"metadata":{"crops":{"1x1":"0.772xw:0.515xh;0.0291xw,0.0194xh","2x1":"1.00xw:0.333xh;0,0.0344xh","3x1":"1xw:0.22222222222222224xh;center,top","4x3":"1xw:0.5xh;center,top","4x6":"1xw:1xh;center,top","5x1":"1xw:0.13333333333333333xh;center,top","6x4":"1xw:0.4444444444444445xh;center,top","8x1":"1xw:0.08333333333333333xh;center,top","10x2":"1xw:0.13333333333333333xh;center,top","10x3":"1xw:0.19999999999999998xh;center,top","10x5":"1xw:0.3333333333333333xh;center,top","16x9":"1xw:0.375xh;center,top","8x10":"1xw:0.8333333333333334xh;center,top","9x16":"0.84375xw:1xh;center,top","18x11":"1xw:0.4074074074074074xh;center,top"}},"image_metadata":{"seo_meta_description":"woman sitting for a portrait"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eWhen Adri Haia’s hometown was decimated last year, she made it her mission to bring Lahaina back to life. \u003c/p\u003e","short_title":"The Woman Helping Maui Heal After the Wildfires","index_title":"The Woman Helping Maui Heal After the Wildfires","social_dek":"\u003cp\u003eWhen Adri Haia’s community burned down, she made it her mission to bring the island back to life. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}}]}],"textDom":{"children":[],"type":"root"}},{"id":"1331b9ca-c8b8-49d6-b9fb-b11416836742","type":"3-column","heading":"","subheading":"","settings":{"show_dek":false,"show_byline":false,"show_date":false,"layout":"image-left","single_source":true},"feeds":[{"id":"4f682029-10db-4a92-bcfa-c4b7d0d4cc20","heading":"","source_type":"subsection","heading_url":"","resources":[{"type":"Content","id":"784d27db-af44-4a69-acf2-9c0791996ff3","display_id":61678735,"edited_at":"2024-08-21T22:30:09.352213Z","publish_from":"2024-08-21T21:56:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"kamala-harris-stepchildren-ella-cole-emhoff","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"2c070c37-6243-47b5-9324-f5522d5d1cd4","image_id":"2c070c37-6243-47b5-9324-f5522d5d1cd4","hips_url":"https://hips.hearstapps.com/hmg-prod//images/vice-president-elect-kamala-harris-greets-stepchildren-cole-news-photo-1721762144.jpg","hips_prefix":"hmg-prod","height":1899,"role":12,"pathname":"//images/vice-president-elect-kamala-harris-greets-stepchildren-cole-news-photo-1721762144.jpg","media_type":"image","width":2848,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.205xw,0","2x1":"1.00xw:0.752xh;0,0.0288xh","3x1":"1xw:0.49991xh;center,top","4x3":"0.88904xw:1xh;center,top","4x6":"0.44452xw:1xh;center,top","5x1":"1xw:0.29995xh;center,top","6x4":"1xw:0.99982xh;center,top","8x1":"1xw:0.18747xh;center,top","10x2":"1xw:0.29995xh;center,top","10x3":"1xw:0.44992xh;center,top","10x5":"1xw:0.74987xh;center,top","16x9":"1xw:0.8436xh;center,top","8x10":"0.53343xw:1xh;center,top","9x16":"0.37507xw:1xh;center,top","18x11":"1xw:0.91651xh;center,top"}},"image_metadata":{"seo_meta_title":"US-POLITICS-INAUGURATION","seo_meta_description":"kamala harris hugging her step children at the swearing in ceremony"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eThe vice president is known as Momala to her husband Doug Emhoff’s two children.\u003c/p\u003e","short_title":"Who Are Kamala Harris' Stepchildren Cole \u0026 Ella?","index_title":"What to Know About Kamala Harris’ Stepchildren, Ella and Cole Emhoff","social_dek":"\u003cp\u003eThe vice president is known as Momala to her husband Doug Emhoff’s two children.  \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"09f252f5-859a-4226-9bb5-0f0cf1b4e198","display_id":61916283,"edited_at":"2024-09-24T16:59:53.053303Z","publish_from":"2024-08-21T16:33:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"kamala-harris-abortion-rights-views-explained","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"08162bbb-3abe-4088-befa-4bdcbe132117","image_id":"08162bbb-3abe-4088-befa-4bdcbe132117","hips_url":"https://hips.hearstapps.com/hmg-prod//images/getty/images-2166319457-1-66c39fcec2eca.jpg","hips_prefix":"hmg-prod","height":683,"role":12,"pathname":"//images/getty/images-2166319457-1-66c39fcec2eca.jpg","media_type":"image","width":1024,"metadata":{"crops":{"1x1":"0.670xw:1.00xh;0.167xw,0","2x1":"0.660xw:0.494xh;0.197xw,0.0719xh","3x1":"1xw:0.49975597852611026xh;center,top","4x3":"0.8893229166666666xw:1xh;center,top","4x6":"0.4446614583333333xw:1xh;center,top","5x1":"1xw:0.2998535871156662xh;center,top","6x4":"1xw:0.9995119570522205xh;center,top","8x1":"1xw:0.18740849194729137xh;center,top","10x2":"1xw:0.2998535871156662xh;center,top","10x3":"1xw:0.44978038067349924xh;center,top","10x5":"1xw:0.7496339677891655xh;center,top","16x9":"1xw:0.8433382137628112xh;center,top","8x10":"0.53359375xw:1xh;center,top","9x16":"0.37518310546875xw:1xh;center,top","18x11":"1xw:0.9162192939645356xh;center,top"}},"image_metadata":{"seo_meta_title":"Kamala Harris Campaigns For President In Raleigh, North Carolina","seo_meta_description":"raleigh, north carolina august 16 democratic us presidential candidate vice president kamala harris speaks on her policy platform, including improving the cost of living for all americans, at the hendrick center for automotive excellence on august 16, 2024 in raleigh, north carolina this is the candidates first major policy speech since accepting the democratic party nominationphoto by grant baldwingetty /images"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eAbortion rights are already front and center of her presidential campaign. \u003c/p\u003e","short_title":"Where Kamala Harris Stands on Abortion","index_title":"Where Kamala Harris Stands on Abortion","social_dek":"\u003cp\u003eAbortion rights will be one of the biggest priorities in her presidential campaign. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"ec544482-3b56-4e40-86e7-b28349b9da4d","display_id":61929606,"edited_at":"2024-09-24T16:59:58.704655Z","publish_from":"2024-08-21T16:32:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"trump-abortion-stances","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"bea35382-a409-4d57-8b73-0599c4fcfee1","image_id":"bea35382-a409-4d57-8b73-0599c4fcfee1","hips_url":"https://hips.hearstapps.com/hmg-prod//images/getty/images-2166789664-66c5201b5f177.jpg","hips_prefix":"hmg-prod","height":683,"role":12,"pathname":"//images/getty/images-2166789664-66c5201b5f177.jpg","media_type":"image","width":1024,"metadata":{"crops":{"1x1":"0.6669921875xw:1xh;center,top","2x1":"1xw:0.7496339677891655xh;center,top","3x1":"1xw:0.49975597852611026xh;center,top","4x3":"0.8893229166666666xw:1xh;center,top","4x6":"0.4446614583333333xw:1xh;center,top","5x1":"1xw:0.2998535871156662xh;center,top","6x4":"1xw:0.9995119570522205xh;center,top","8x1":"1xw:0.18740849194729137xh;center,top","10x2":"1xw:0.2998535871156662xh;center,top","10x3":"1xw:0.44978038067349924xh;center,top","10x5":"1xw:0.7496339677891655xh;center,top","16x9":"1xw:0.8433382137628112xh;center,top","8x10":"0.53359375xw:1xh;center,top","9x16":"0.37518310546875xw:1xh;center,top","18x11":"1xw:0.9162192939645356xh;center,top"}},"image_metadata":{"seo_meta_title":"Republican Presidential Candidate Donald Trump Holds Rally In York, Pennsylvania","seo_meta_description":"york, pennsylvania august 19 republican presidential nominee, former president donald j trump remarks during a campaign event at precision custom components on august 19, 2024 in york, pennsylvania coinciding with the start of the democratic national convention, trump held the event in the key battleground state of pennsylvania, a swing state in the 2024 presidential election against democratic presidential candidate us vice president kamala harris photo by tierney l crossgetty /images"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003ePost-\u003cem\u003eDobbs\u003c/em\u003e, the former president’s views have changed.\u003c/p\u003e","short_title":"Trump’s Abortion Stances","index_title":"Trump’s Abortion Stances: A Timeline of His Many Position Shifts Over Time","social_dek":"\u003cp\u003e“For 54 years they were trying to get \u003cem\u003eRoe v. Wade\u003c/em\u003e terminated, and I did it. And I’m proud to have done it.”\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"7f5817f4-4d21-4739-9665-bc9ad3673315","display_id":61752679,"edited_at":"2024-08-06T16:44:13.817534Z","publish_from":"2024-08-06T15:39:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"kamala-harris-tim-walz-vice-president","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"cdb9966b-5a54-4d22-9d1a-6b1fa05f1cdd","image_id":"cdb9966b-5a54-4d22-9d1a-6b1fa05f1cdd","hips_url":"https://hips.hearstapps.com/hmg-prod//images/vice-president-kamala-harris-speaks-to-the-media-after-news-photo-1722951355.jpg","hips_prefix":"hmg-prod","height":2800,"role":12,"pathname":"//images/vice-president-kamala-harris-speaks-to-the-media-after-news-photo-1722951355.jpg","media_type":"image","width":4200,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.0449xw,0","2x1":"0.801xw:0.601xh;0,0.209xh","3x1":"1xw:0.5xh;center,top","4x3":"0.88889xw:1xh;center,top","4x6":"0.44444xw:1xh;center,top","5x1":"1xw:0.3xh;center,top","6x4":"1xw:1xh;center,top","8x1":"1xw:0.1875xh;center,top","10x2":"1xw:0.3xh;center,top","10x3":"1xw:0.45xh;center,top","10x5":"1xw:0.75xh;center,top","16x9":"1xw:0.84375xh;center,top","8x10":"0.53333xw:1xh;center,top","9x16":"0.375xw:1xh;center,top","18x11":"1xw:0.91667xh;center,top"}},"image_metadata":{"seo_meta_title":"kamala harris tim walz","seo_meta_description":"kamala harris tim walz"},"photographer":{},"source":{}}],"metadata":{"short_title":"Kamala Harris Chooses Gov. Tim Walz as Her VP Pick","index_title":"Kamala Harris Chooses Gov. Tim Walz as Her Running Mate","social_dek":"\u003cp\u003eWalz, a veteran and former high school teacher, has been governor of Minnesota since 2019.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"19f87c74-18ce-48f1-ac95-e5060833a9ba","display_id":61627712,"edited_at":"2024-08-07T16:26:40.704881Z","publish_from":"2024-08-06T12:00:00Z","authors":[{}],"display_type":{"title":"Long Form Article"},"slug":"obria-antiabortion-clinics-dawn-hughes-interview-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"id":"038e89a7-91ec-486e-b424-7c72162bf94c","image_id":"038e89a7-91ec-486e-b424-7c72162bf94c","hips_url":"https://hips.hearstapps.com/hmg-prod//images/elle-final2-669939889ecbe.jpg","hips_prefix":"hmg-prod","height":2500,"role":12,"pathname":"//images/elle-final2-669939889ecbe.jpg","media_type":"image","width":2000,"metadata":{"crops":{"1x1":"1.00xw:0.800xh;0,0.123xh","2x1":"1.00xw:0.401xh;0,0.151xh","3x1":"1xw:0.26666666666666666xh;center,top","4x3":"1xw:0.6xh;center,top","4x6":"0.8333333333333334xw:1xh;center,top","5x1":"1xw:0.16xh;center,top","6x4":"1xw:0.5333333333333333xh;center,top","8x1":"1xw:0.1xh;center,top","10x2":"1xw:0.16xh;center,top","10x3":"1xw:0.24xh;center,top","10x5":"1xw:0.4xh;center,top","16x9":"1xw:0.45xh;center,top","8x10":"1xw:1xh;center,top","9x16":"0.703125xw:1xh;center,top","18x11":"1xw:0.4888888888888889xh;center,top"}},"image_metadata":{"seo_meta_description":"lia kantrowitz illustration"},"photographer":{}}],"metadata":{"dek":"\u003cp\u003eObria Group, the crisis pregnancy center network that wants to be the pro-life answer to Planned Parenthood, said its clinics would provide women’s health care to millions. Its former CEO says that wasn’t the full story.\u003c/p\u003e","short_title":"The Former CEO Exposing an Antiabortion Clinic","index_title":"This CEO Helped Lead Antiabortion Clinics. Now She’s Exposing Them.","social_dek":"\u003cp\u003eObria Group, the crisis pregnancy center network that wants to be the pro-life answer to Planned Parenthood, said its clinics would provide women’s health care to millions. Its former CEO says that wasn’t the full story.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"7cdfe7b7-7426-4e54-833f-df65b588c35b","display_id":61792013,"edited_at":"2024-08-05T18:28:52.880552Z","publish_from":"2024-08-05T18:28:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"girlympics-2024-paris-olympics","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"33bd05b8-1a5c-4f29-a6ef-d4ddaf24eb31","image_id":"33bd05b8-1a5c-4f29-a6ef-d4ddaf24eb31","hips_url":"https://hips.hearstapps.com/hmg-prod//images/gold-medalist-rebeca-andrade-of-team-brazil-silver-medalist-news-photo-1722879575.jpg","hips_prefix":"hmg-prod","height":674,"role":12,"pathname":"//images/gold-medalist-rebeca-andrade-of-team-brazil-silver-medalist-news-photo-1722879575.jpg","media_type":"image","width":1024,"metadata":{"crops":{"1x1":"0.662xw:1.00xh;0.0417xw,0","2x1":"1.00xw:0.762xh;0,0.0973xh","3x1":"1xw:0.50643xh;center,top","4x3":"0.8776xw:1xh;center,top","4x6":"0.4388xw:1xh;center,top","5x1":"1xw:0.30386xh;center,top","6x4":"0.9873xw:1xh;center,top","8x1":"1xw:0.18991xh;center,top","10x2":"1xw:0.30386xh;center,top","10x3":"1xw:0.45579xh;center,top","10x5":"1xw:0.75964xh;center,top","16x9":"1xw:0.8546xh;center,top","8x10":"0.52656xw:1xh;center,top","9x16":"0.37024xw:1xh;center,top","18x11":"1xw:0.92845xh;center,top"}},"image_metadata":{"seo_meta_title":"Artistic Gymnastics - Olympic Games Paris 2024: Day 10","seo_meta_description":"artistic gymnastics olympic games paris 2024 day 10"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eWomen supporting women at the 2024 Paris Olympics is a femininomenon. \u003c/p\u003e","short_title":"At the Girlympics, Everyone’s a Winner","index_title":"At the Girlympics, Everyone’s a Winner","social_dek":"\u003cp\u003eWomen supporting women at the 2024 Paris Olympics is a femininomenon.  \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"388d56b0-69f3-4fab-b4db-32ee47cffb94","display_id":61677985,"edited_at":"2024-08-01T20:02:21.340397Z","publish_from":"2024-08-01T20:02:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"simone-biles-teammates-react-gold-medal-win","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"201874bf-7cb6-4874-af51-40fe8270f22c","image_id":"201874bf-7cb6-4874-af51-40fe8270f22c","hips_url":"https://hips.hearstapps.com/hmg-prod//images/gold-medalist-simone-biles-of-team-united-states-celebrates-news-photo-1722539349.jpg","hips_prefix":"hmg-prod","height":3289,"role":12,"pathname":"//images/gold-medalist-simone-biles-of-team-united-states-celebrates-news-photo-1722539349.jpg","media_type":"image","width":4433,"metadata":{"crops":{"1x1":"0.743xw:1.00xh;0.130xw,0","2x1":"1.00xw:0.676xh;0,0.0984xh","3x1":"1xw:0.44928xh;center,top","4x3":"0.98925xw:1xh;center,top","4x6":"0.49462xw:1xh;center,top","5x1":"1xw:0.26957xh;center,top","6x4":"1xw:0.89855xh;center,top","8x1":"1xw:0.16848xh;center,top","10x2":"1xw:0.26957xh;center,top","10x3":"1xw:0.40435xh;center,top","10x5":"1xw:0.67391xh;center,top","16x9":"1xw:0.75815xh;center,top","8x10":"0.59355xw:1xh;center,top","9x16":"0.41734xw:1xh;center,top","18x11":"1xw:0.82367xh;center,top"}},"image_metadata":{"seo_meta_title":"Artistic Gymnastics - Olympic Games Paris 2024: Day 6","seo_meta_description":"artistic gymnastics olympic games paris 2024 day 6"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eTalk about having a good support system.\u003c/p\u003e","short_title":"Simone Biles and Suni Lee’s Teammates React ","index_title":"How Suni Lee and Simone Biles’ Teammates Reacted to Their Wins","social_dek":"\u003cp\u003eTalk about a good support system.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"33c3f783-30b1-492a-8f73-9f49a39c3ef7","display_id":61678191,"edited_at":"2024-08-01T19:29:56.072058Z","publish_from":"2024-08-01T19:29:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"jonathan-owens-reacts-simone-biles-gold-medal","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"8be601ac-fe70-4ca9-b8a9-685ea355a540","image_id":"8be601ac-fe70-4ca9-b8a9-685ea355a540","hips_url":"https://hips.hearstapps.com/hmg-prod//images/simone-biles-and-jonathan-owens-attend-a-game-between-the-news-photo-1722540473.jpg","hips_prefix":"hmg-prod","height":2387,"role":12,"pathname":"//images/simone-biles-and-jonathan-owens-attend-a-game-between-the-news-photo-1722540473.jpg","media_type":"image","width":3342,"metadata":{"crops":{"1x1":"0.719xw:1.00xh;0.101xw,0","2x1":"1.00xw:0.702xh;0,0.0512xh","3x1":"1xw:0.46669xh;center,top","4x3":"0.95232xw:1xh;center,top","4x6":"0.47616xw:1xh;center,top","5x1":"1xw:0.28002xh;center,top","6x4":"1xw:0.93339xh;center,top","8x1":"1xw:0.17501xh;center,top","10x2":"1xw:0.28002xh;center,top","10x3":"1xw:0.42003xh;center,top","10x5":"1xw:0.70004xh;center,top","16x9":"1xw:0.78755xh;center,top","8x10":"0.57139xw:1xh;center,top","9x16":"0.40176xw:1xh;center,top","18x11":"1xw:0.85561xh;center,top"}},"image_metadata":{"seo_meta_title":"Los Angeles Lakers v Houston Rockets","seo_meta_description":"los angeles lakers v houston rockets"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eThe gymnast previously told ELLE that her husband is “always rooting” for her.\u003c/p\u003e","short_title":"Jonathan Owens Racts to Simone Biles’ Gold Medal","index_title":"See Jonathan Owens’ Sweet Reaction After Simone Biles Won a Gold Medal","social_dek":"\u003cp\u003eThe gymnast previously told ELLE that her husband is “always rooting” for her.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"ee3838b0-9445-43c8-ab47-2aaeb4adc842","display_id":61677097,"edited_at":"2024-08-01T19:04:41.662823Z","publish_from":"2024-08-01T18:50:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"watch-simone-biles-floor-routine-gold-medal","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"7ab1d4cf-a111-44a5-b285-bba7ba496e30","image_id":"7ab1d4cf-a111-44a5-b285-bba7ba496e30","hips_url":"https://hips.hearstapps.com/hmg-prod//images/gold-medalist-simone-biles-of-team-united-states-celebrates-news-photo-1722538022.jpg","hips_prefix":"hmg-prod","height":683,"role":12,"pathname":"//images/gold-medalist-simone-biles-of-team-united-states-celebrates-news-photo-1722538022.jpg","media_type":"image","width":1024,"metadata":{"crops":{"1x1":"0.671xw:1.00xh;0.0731xw,0","2x1":"1.00xw:0.751xh;0,0.0945xh","3x1":"1xw:0.49976xh;center,top","4x3":"0.88932xw:1xh;center,top","4x6":"0.44466xw:1xh;center,top","5x1":"1xw:0.29985xh;center,top","6x4":"1xw:0.99951xh;center,top","8x1":"1xw:0.18741xh;center,top","10x2":"1xw:0.29985xh;center,top","10x3":"1xw:0.44978xh;center,top","10x5":"1xw:0.74963xh;center,top","16x9":"1xw:0.84334xh;center,top","8x10":"0.53359xw:1xh;center,top","9x16":"0.37518xw:1xh;center,top","18x11":"1xw:0.91622xh;center,top"}},"image_metadata":{"seo_meta_title":"Artistic Gymnastics - Olympic Games Paris 2024: Day 6","seo_meta_description":"artistic gymnastics olympic games paris 2024 day 6"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eThe #GOAT does it again.\u003c/p\u003e","short_title":"Simone Biles Wins the Individual All-Around","index_title":"Watch Simone Biles’ Gold-Medal Winning Individual All-Around Floor Routine ","social_dek":"\u003cp\u003eThe #GOAT does it again. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"e94f3aa1-5515-42e1-926b-2bbdf5a28587","display_id":61677696,"edited_at":"2024-07-30T19:02:46.700574Z","publish_from":"2024-07-30T18:34:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"watch-2024-olympics-gymnastics-win-team-all-around","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"b263101d-cd80-48aa-864c-6501f51055ea","image_id":"b263101d-cd80-48aa-864c-6501f51055ea","hips_url":"https://hips.hearstapps.com/hmg-prod//images/gold-medalist-simone-biles-reacts-with-team-united-states-news-photo-1722365473.jpg","hips_prefix":"hmg-prod","height":1559,"role":12,"pathname":"//images/gold-medalist-simone-biles-reacts-with-team-united-states-news-photo-1722365473.jpg","media_type":"image","width":2337,"metadata":{"crops":{"1x1":"0.668xw:1.00xh;0.167xw,0","2x1":"0.702xw:0.525xh;0.298xw,0.0480xh","3x1":"1xw:0.49968xh;center,top","4x3":"0.88946xw:1xh;center,top","4x6":"0.44473xw:1xh;center,top","5x1":"1xw:0.29981xh;center,top","6x4":"1xw:0.99936xh;center,top","8x1":"1xw:0.18738xh;center,top","10x2":"1xw:0.29981xh;center,top","10x3":"1xw:0.44971xh;center,top","10x5":"1xw:0.74952xh;center,top","16x9":"1xw:0.84321xh;center,top","8x10":"0.53368xw:1xh;center,top","9x16":"0.37524xw:1xh;center,top","18x11":"1xw:0.91608xh;center,top"}},"image_metadata":{"seo_meta_title":"Artistic Gymnastics - Olympic Games Paris 2024: Day 4","seo_meta_description":"artistic gymnastics olympic games paris 2024 day 4"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eSimone Biles, Suni Lee, Jordan Chiles, Jade Carey, and Hezly Rivera just made history.\u003c/p\u003e","short_title":"Team USA Gymnastics Wins the Team All-Around ","index_title":"See the U.S. Gymnasts Receive the Team All-Around Gold Medal","social_dek":"\u003cp\u003eSimone Biles, Suni Lee, Jordan Chiles, Jade Carey, and Hezly Rivera just made history.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"5bb263a0-cf47-4e44-a72b-05421a8af303","display_id":61711831,"edited_at":"2024-07-27T17:35:44.007204Z","publish_from":"2024-07-27T17:35:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"womens-soccer-team-roster-2024-paris-olympics","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"5474c6ce-30a2-4d1f-825d-5cf562362b2a","image_id":"5474c6ce-30a2-4d1f-825d-5cf562362b2a","hips_url":"https://hips.hearstapps.com/hmg-prod//images/trinity-rodman-of-the-united-states-heads-the-ball-during-news-photo-1722037415.jpg","hips_prefix":"hmg-prod","height":3062,"role":12,"pathname":"//images/trinity-rodman-of-the-united-states-heads-the-ball-during-news-photo-1722037415.jpg","media_type":"image","width":2041,"metadata":{"crops":{"1x1":"1.00xw:0.670xh;0,0.0983xh","2x1":"1.00xw:0.334xh;0,0.100xh","3x1":"1xw:0.22219xh;center,top","4x3":"1xw:0.49992xh;center,top","4x6":"1xw:0.99984xh;center,top","5x1":"1xw:0.13331xh;center,top","6x4":"1xw:0.44437xh;center,top","8x1":"1xw:0.08332xh;center,top","10x2":"1xw:0.13331xh;center,top","10x3":"1xw:0.19997xh;center,top","10x5":"1xw:0.33328xh;center,top","16x9":"1xw:0.37494xh;center,top","8x10":"1xw:0.8332xh;center,top","9x16":"0.84389xw:1xh;center,top","18x11":"1xw:0.40734xh;center,top"}},"image_metadata":{"seo_meta_title":"United States v Zambia: Women's Football - Olympic Games Paris 2024: Day -1","seo_meta_description":"united states v zambia women's football olympic games paris 2024 day 1"},"photographer":{},"source":{}}],"metadata":{"dek":"\u003cp\u003eThis year’s squad features young players eager to prove themselves on the Olympic stage. \u003c/p\u003e","short_title":"Meet the New Stars of Women’s Soccer","index_title":"Meet the New Stars of Women’s Soccer ","social_dek":"\u003cp\u003eThis year’s squad features young players eager to prove themselves on the Olympic stage. \u003c/p\u003e","editor_attribution":"By","sponsor":{}}},{"type":"Content","id":"337591b4-1eba-4b90-a62e-9685f24ca37f","display_id":61715961,"edited_at":"2024-07-27T17:53:22.336326Z","publish_from":"2024-07-27T17:09:00Z","authors":[{}],"display_type":{"title":"Standard Article"},"slug":"aly-raisman-getting-ready-diary-olympics-opening-ceremony-2024","section":{"slug":"culture"},"subsection":{"slug":"career-politics"},"media":[{"role":2},{"role":3},{"id":"f1791fc8-64aa-4019-8b4d-879f4a22f3a4","image_id":"f1791fc8-64aa-4019-8b4d-879f4a22f3a4","hips_url":"https://hips.hearstapps.com/hmg-prod//images/5-66a523df325b5.jpg","hips_prefix":"hmg-prod","height":3600,"role":12,"pathname":"//images/5-66a523df325b5.jpg","media_type":"image","width":2401,"metadata":{"crops":{"1x1":"1.00xw:0.669xh;0,0.163xh","2x1":"1.00xw:0.334xh;0,0.213xh","3x1":"1xw:0.22231481481481483xh;center,top","4x3":"1xw:0.5002083333333334xh;center,top","4x6":"0.9995835068721366xw:1xh;center,top","5x1":"1xw:0.1333888888888889xh;center,top","6x4":"1xw:0.44462962962962965xh;center,top","8x1":"1xw:0.08336805555555556xh;center,top","10x2":"1xw:0.1333888888888889xh;center,top","10x3":"1xw:0.2000833333333333xh;center,top","10x5":"1xw:0.3334722222222222xh;center,top","16x9":"1xw:0.37515625xh;center,top","8x10":"1xw:0.8336805555555555xh;center,top","9x16":"0.8433985839233653xw:1xh;center,top","18x11":"1xw:0.4075771604938272xh;center,top"}},"image_metadata":{"seo_meta_description":"a woman sitting on a stool"},"photographer":{}}],"metadata":{"short_title":"How Aly Raisman Got Ready for the 2024 Olympics","index_title":"How Aly Raisman Got Ready for the 2024 Olympics Opening Ceremony","social_dek":"\u003cp\u003eHer Swarovski-studded heels shone bright like the City of Light.\u003c/p\u003e","editor_attribution":"By","sponsor":{}}}]}],"textDom":{"children":[],"type":"root"}}],"section":[{"title":"Culture","slug":"culture"}],"metadata":{"seo_meta_title":"Politics and News - National and International Political Issues","seo_meta_description":"From social justice reform to healthcare to climate change, find the news that most impacts your life.","show_marquee_header":"1","marquee":{"media_type":"image"},"sponsor":{}},"theme":{"borderWidths":{"border-lg":"0.625rem","border-m":"0.3125rem","border-ml":"0.375rem","border-mlg":"0.5rem","border-none":"0","border-s":"0.19rem","border-xs":"0.125rem","border-xxs":"0.0625rem","medium":"0.19rem","thick":"0.3125rem","thin":"0.0625rem"},"borders":{"body-cta-btn-link-focus":"black","border-avatar":"{*borderWidths.border-xxs} solid {*colors.black}","border-button-outline":"{*borderWidths.border-xxs} solid {*colors.black}","border-button-outline-hover":"{*borderWidths.border-xxs} solid {*colors.greyDark}","border-discount":"{*borderWidths.border-xxs} solid {*colors.globalColorDiscount}","border-dropdown":"{*borderWidths.border-xxs} solid {*colors.greyLight}","border-error":"{*borderWidths.border-xxs} solid {*colors.globalColorError}","border-form-checkbox-disabled":"{*borderWidths.border-xxs}  solid {*colors.grey}","border-form-checkbox-error":"{*borderWidths.border-xxs}  solid {*colors.globalColorError}","border-form-checkbox-resting":"{*borderWidths.border-xxs}  solid {*colors.black}","border-form-input-disabled":"{*borderWidths.border-xxs}  solid {*colors.grey}","border-form-input-error":"{*borderWidths.border-xxs}  solid {*colors.globalColorError}","border-form-input-resting":"{*borderWidths.border-xxs}  solid {*colors.greyDark}","border-form-input-selected":"{*borderWidths.border-xxs}  solid {*colors.black}","border-form-radio-disabled":"{*borderWidths.border-xxs} solid {*colors.grey}","border-form-radio-error":"{*borderWidths.border-xxs} solid {*colors.globalColorError}","border-form-radio-resting":"{*borderWidths.border-xxs} solid {*colors.black}","border-form-select-disabled":"{*borderWidths.border-xxs}  solid {*colors.grey}","border-form-select-error":"{*borderWidths.border-xxs} solid {*colors.globalColorError}","border-form-select-resting":"{*borderWidths.border-xxs}  solid {*colors.greyDark}","border-form-select-selected":"{*borderWidths.border-xxs} solid {*colors.black}","border-form-textarea-disabled":"{*borderWidths.border-xxs} solid {*colors.grey}","border-form-textarea-error":"{*borderWidths.border-xxs} solid {*colors.globalColorError}","border-form-textarea-resting":"{*borderWidths.border-xxs} solid {*colors.greyDark}","border-form-textarea-selected":"{*borderWidths.border-xxs} solid {*colors.black}","border-informative":"{*borderWidths.border-xxs} solid {*colors.greyLight}","border-large-greyXlight":"0.6rem solid {*colors.greyXlight}","border-large-transparent":"0.6rem solid transparent","border-lg-black":"{*borderWidths.border-lg} solid black","border-lg-greyXlight":"{*borderWidths.border-lg} solid {*colors.greyXlight}","border-lg-transparent":"{*borderWidths.border-lg} solid transparent","border-lg-white":"{*borderWidths.border-lg} solid white","border-link-body-hover":"border-xxs-greyXXdark","border-m-black":"{*borderWidths.border-m} solid black","border-m-white":"{*borderWidths.border-m} solid white","border-med-black":"1.1875rem solid {*colors.black}","border-medium-black":"medium solid black","border-medium-grey":"medium solid {*colors.grey}","border-medium-greyLight":"{*borderWidths.border-m} solid {*colors.greyLight}","border-medium-white":"medium solid white","border-ml-black":"{*borderWidths.border-ml} solid black","border-mlg-black":"{*borderWidths.border-mlg} solid black","border-mlg-grey":"{*borderWidths.border-mlg} solid {*colors.grey}","border-none-transparent":"{*borderWidths.border-none} solid transparent","border-rating":"{*borderWidths.border-xxs} solid {*colors.globalColorRating}","border-s-black":"{*borderWidths.border-s} solid black","border-s-white":"{*borderWidths.border-s} solid white","border-thick-black":"1.5rem solid {*colors.black}","border-thin-black":"thin solid black","border-thin-dashed-black":"thin dashed black","border-thin-grey":"thin solid {*colors.grey}","border-thin-greyDark":"thin solid {*colors.greyDark}","border-thin-greyLight":"thin solid {*colors.greyLight}","border-thin-greyXXXdark":"thin solid {*colors.greyXXXdark}","border-thin-greyXXdark":"thin solid {*colors.greyXXdark}","border-thin-greyXdark":"thin solid {*colors.greyXdark}","border-thin-greyXlight":"thin solid {*colors.greyXlight}","border-thin-transparent":"thin solid transparent","border-thin-white":"thin solid white","border-xs-black":"{*borderWidths.border-xs} solid black","border-xs-grey":"{*borderWidths.border-xs} solid {*colors.grey}","border-xs-greyXlight":"{*borderWidths.border-xs} solid {*colors.greyXlight}","border-xs-transparent":"{*borderWidths.border-xs} solid transparent","border-xs-white":"{*borderWidths.border-xs} solid white","border-xxs-black":"{*borderWidths.border-xxs} solid black","border-xxs-brand-quaternary":"{*borderWidths.border-xxs} solid {*colors.brandColorQuaternary}","border-xxs-dotted-black":"{*borderWidths.border-xxs} dotted black","border-xxs-grey":"{*borderWidths.border-xxs} solid {*colors.grey}","border-xxs-greyDark":"{*borderWidths.border-xxs} solid {*colors.greyDark}","border-xxs-greyLight":"{*borderWidths.border-xxs} solid {*colors.greyLight}","border-xxs-greyXXXdark":"{*borderWidths.border-xxs} solid {*colors.greyXXXdark}","border-xxs-greyXXdark":"{*borderWidths.border-xxs} solid {*colors.greyXXdark}","border-xxs-greyXdark":"{*borderWidths.border-xxs} solid {*colors.greyXdark}","border-xxs-greyXlight":"{*borderWidths.border-xxs} solid {*colors.greyXlight}","border-xxs-transparent":"{*borderWidths.border-xxs} solid transparent","border-xxs-white":"{*borderWidths.border-xxs} solid white","button-border-thin":"thin solid"},"colors":{"amber-100":"#FEF3C7","amber-200":"#FDE68A","amber-300":"#FCD34D","amber-400":"#FBBF24","amber-50":"#FFFBEB","amber-500":"#F59E0B","amber-600":"#D97706","amber-700":"#B45309","amber-800":"#92400E","amber-900":"#78350F","amber-950":"#431407","bg-avatar":"white","bg-avatar-hover":"black","bg-block-big-story":"","bg-block-big-story-feed":"","bg-block-content-big-story":"","bg-block-content-big-story-feed":"","bg-block-content-big-story-feed-colright-basefeed":"","bg-block-content-big-story-feed-colright-feature":"","bg-block-content-big-story-feed-noimage-basefeed":"","bg-block-content-big-story-feed-noimage-feature":"","bg-block-content-big-story-feed-stacked-basefeed":"","bg-block-content-big-story-feed-stacked-feature":"","bg-block-content-big-story-imageright":"","bg-block-content-big-story-imageright-ad":"","bg-block-content-big-story-noimage":"","bg-block-content-big-story-noimage-ad":"","bg-block-content-big-story-under":"","bg-block-content-big-story-under-ad":"","bg-block-content-four-across":"","bg-block-content-text":"","bg-block-content-three-col":"","bg-block-four-across":"","bg-block-three-col":"","bg-chip-base":"greyXlight","bg-chip-base-disabled":"greyLight","bg-chip-button":"black","bg-chip-button-hover":"greyXdark","bg-color-do-not-sell-hover":"grey","bg-color-poll-bar":"greyLight","bg-discount":"globalColorDiscount","bg-discount-onDark":"globalColorDiscount-OnDark","bg-droppdown-list":"white","bg-droppdown-list-first":"greyLight","bg-droppdown-list-hover":"white","bg-error":"globalColorError","bg-error-onDark":"globalColorError-OnDark","bg-form-check-disabled":"greyXlight","bg-form-check-resting":"white","bg-form-check-selected":"black","bg-form-input-disabled":"greyXlight","bg-form-input-resting":"white","bg-form-input-selected":"white","bg-informative":"greyLight","bg-informative-onDark":"greyXXXdark","bg-legal":"greyLight","bg-legal-onDark":"greyXXXdark","bg-rating":"globalColorRating","bg-rating-onDark":"globalColorRating-OnDark","black":"#000000","blue-100":"#DBEAFE","blue-200":"#BFDBFE","blue-300":"#93C5FD","blue-400":"#60A5FA","blue-50":"#EFF6FF","blue-500":"#3B82F6","blue-600":"#2563EB","blue-700":"#1D4ED8","blue-800":"#1E40AF","blue-900":"#1E3A8A","blue-950":"#172554","brandColorPrimary":"black","brandColorQuaternary":"#0000001A","brandColorSecondary":"#CCCCCC","brandColorTertiary":"#808080","breaker-ad-border":"greyLight","color-link-body-hover":"link-hover-item-title-primary","color-rating-default":"#F3B032","color-star-rating-default":"#F3B032","cyan-100":"#CFFAFE","cyan-200":"#A5F3FC","cyan-300":"#67E8F9","cyan-400":"#22D3EE","cyan-50":"#ECFEFF","cyan-500":"#06B6D4","cyan-600":"#0891B2","cyan-700":"#0E7490","cyan-800":"#155E75","cyan-900":"#164E63","cyan-950":"#083344","emerald-100":"#D1FAE5","emerald-200":"#A7F3D0","emerald-300":"#6EE7B7","emerald-400":"#34D399","emerald-50":"#ECFDF5","emerald-500":"#10B981","emerald-600":"#059669","emerald-700":"#047857","emerald-800":"#065F46","emerald-900":"#064E3B","emerald-950":"#022C22","fg-discount":"globalColorDiscount","fg-discount-onDark":"globalColorDiscount-OnDark","fg-error":"globalColorError","fg-error-onDark":"globalColorError-OnDark","footer-fill":"white","footer-network-fill":"white","footerbgColor":"black","fuchsia-100":"#FAE8FF","fuchsia-200":"#F5D0FE","fuchsia-300":"#F0ABFC","fuchsia-400":"#E879F9","fuchsia-50":"#FDF4FF","fuchsia-500":"#D946EF","fuchsia-600":"#C026D3","fuchsia-700":"#A21CAF","fuchsia-800":"#86198F","fuchsia-900":"#701A75","fuchsia-950":"#4A044E","globalColorDiscount":"greenDark","globalColorDiscount-OnDark":"greenLight","globalColorError":"red","globalColorError-OnDark":"redLight","globalColorFocus":"black","globalColorFocus-OnDark":"white","globalColorInformative":"greyXXXdark","globalColorInformative-OnDark":"greyXlight","globalColorLegal":"greyXXXdark","globalColorLegal-OnDark":"greyXlight","globalColorRating":"yellow","globalColorRating-OnDark":"yellowLight","gray-100":"#F3F4F6","gray-200":"#E5E7EB","gray-300":"#D1D5DB","gray-400":"#9CA3AF","gray-50":"#F9FAFB","gray-500":"#6B7280","gray-600":"#4B5563","gray-700":"#374151","gray-800":"#1F2937","gray-900":"#111827","gray-950":"#030712","green-100":"#DCFCE7","green-200":"#BBF7D0","green-300":"#86EFAC","green-400":"#4ADE80","green-50":"#F0FDF4","green-500":"#22C55E","green-600":"#16A34A","green-700":"#15803D","green-800":"#166534","green-900":"#14532D","green-950":"#052E16","greenDark":"#006603","greenLight":"#75C278","grey":"neutral-300","greyDark":"neutral-400","greyLight":"neutral-200","greyXXXdark":"neutral-800","greyXXdark":"neutral-600","greyXdark":"neutral-500","greyXlight":"neutral-100","indigo-100":"#E0E7FF","indigo-200":"#C7D2FE","indigo-300":"#A5B4FC","indigo-400":"#818CF8","indigo-50":"#EEF2FF","indigo-500":"#6366F1","indigo-600":"#4F46E5","indigo-700":"#4338CA","indigo-800":"#3730A3","indigo-900":"#312E81","indigo-950":"#1E1B4B","lime-100":"#ECFCCB","lime-200":"#D9F99D","lime-300":"#BEF264","lime-400":"#A3E635","lime-50":"#F7FEE7","lime-500":"#84CC16","lime-600":"#65A30D","lime-700":"#4D7C0F","lime-800":"#3F6212","lime-900":"#365314","lime-950":"#1A2E05","link-hover-item-title-primary":"brandColorTertiary","link-hover-item-title-secondary":"grey","link-hover-three-column-heading":"brandColorPrimary","location-choice-menu-bg":"black","nav-subscribe-link-focus":"black","neutral-100":"#F5F5F5","neutral-200":"#E5E5E5","neutral-300":"#D4D4D4","neutral-400":"#A3A3A3","neutral-50":"#FAFAFA","neutral-500":"#737373","neutral-600":"#525252","neutral-700":"#404040","neutral-800":"#262626","neutral-900":"#171717","neutral-950":"#0A0A0A","orange-100":"#FFEDD5","orange-200":"#FED7AA","orange-300":"#FDBA74","orange-400":"#FB923C","orange-50":"#FFF7ED","orange-500":"#F97316","orange-600":"#EA580C","orange-700":"#C2410C","orange-800":"#9A3412","orange-900":"#7C2D12","orange-950":"#431407","pink-100":"#FCE7F3","pink-200":"#FBCFE8","pink-300":"#F9A8D4","pink-400":"#F472B6","pink-50":"#FDF2F8","pink-500":"#EC4899","pink-600":"#DB2777","pink-700":"#BE185D","pink-800":"#9D174D","pink-900":"#831843","pink-950":"#500724","purple-100":"#F3E8FF","purple-200":"#E9D5FF","purple-300":"#D8B4FE","purple-400":"#C084FC","purple-50":"#FAF5FF","purple-500":"#A855F7","purple-600":"#9333EA","purple-700":"#7E22CE","purple-800":"#6B21A8","purple-900":"#581C87","purple-950":"#3B0764","red":"#AA0703","red-100":"#FEE2E2","red-200":"#FECACA","red-300":"#FCA5A5","red-400":"#F87171","red-50":"#FEF2F2","red-500":"#EF4444","red-600":"#DC2626","red-700":"#B91C1C","red-800":"#991B1B","red-900":"#7F1D1D","red-950":"#450A0A","redLight":"#F0908E","rose-100":"#FFE4E6","rose-200":"#FECDD3","rose-300":"#FDA4AF","rose-400":"#FB7185","rose-50":"#FFF1F2","rose-500":"#F43F5E","rose-600":"#E11D48","rose-700":"#BE123C","rose-800":"#9F1239","rose-900":"#881337","rose-950":"#4C0519","saved-menu-panel-focus-link-bg":"greyXlight","side-panel-menu-bg":"white","side-panel-sub-menu-bg":"greyXlight","side-panel-sub-menu-focus":"black","side-panel-sub-menu-hover":"greyDark","sidePanelLinkColor":"brandColorPrimary","sidePanelLinkColor-hover":"greyXXdark","sidepanel-bg":"white","sidepanel-text":"black","sky-100":"#E0F2FE","sky-200":"#BAE6FD","sky-300":"#7DD3FC","sky-400":"#38BDF8","sky-50":"#F0F9FF","sky-500":"#0EA5E9","sky-600":"#0284C7","sky-700":"#0369A1","sky-800":"#075985","sky-900":"#0C4A6E","sky-950":"#082F49","slate-100":"#F1F5F9","slate-200":"#E2E8F0","slate-300":"#CBD5E1","slate-400":"#94A3B8","slate-50":"#F8FAFC","slate-500":"#64748B","slate-600":"#475569","slate-700":"#334155","slate-800":"#1E293B","slate-900":"#0F172A","slate-950":"#020617","sponsor-bar-bg":"white","stone-100":"#F5F5F4","stone-200":"#E7E5E4","stone-300":"#D6D3D1","stone-400":"#A8A29E","stone-50":"#FAFAF9","stone-500":"#78716C","stone-600":"#57534E","stone-700":"#44403C","stone-800":"#292524","stone-900":"#1C1917","stone-950":"#0C0A09","teal-100":"#CCFBF1","teal-200":"#99F6E4","teal-300":"#5EEAD4","teal-400":"#2DD4BF","teal-50":"#F0FDFA","teal-500":"#14B8A6","teal-600":"#0D9488","teal-700":"#0F766E","teal-800":"#115E59","teal-900":"#134E4A","teal-950":"#042F2E","text-avatar":"black","text-avatar-hover":"white","text-chip-label":"black","text-chip-label-disabled":"greyDark","text-discount":"globalColorDiscount","text-discount-onDark":"globalColorDiscount-OnDark","text-droppdown-list":"black","text-droppdown-list-first":"black","text-droppdown-list-hover":"black","text-error":"globalColorError","text-error-onDark":"globalColorError-OnDark","text-form-disabled":"greyDark","text-form-error":"globalColorError","text-form-helper":"greyXdark","text-form-label":"greyXXXdark","text-form-placeholder":"greyXXXdark","text-informative":"greyXXXdark","text-informative-onDark":"white","text-legal":"greyXXXdark","text-legal-onDark":"white","text-rating":"greyXXXdark","text-rating-onDark":"greyLight","textFillColor":"black","violet-100":"#EDE9FE","violet-200":"#DDD6FE","violet-300":"#C4B5FD","violet-400":"#A78BFA","violet-50":"#F5F3FF","violet-500":"#8B5CF6","violet-600":"#7C3AED","violet-700":"#6D28D9","violet-800":"#5B21B6","violet-900":"#4C1D95","violet-950":"#2E1065","white":"#ffffff","yellow":"#F3B032","yellow-100":"#FEF9C3","yellow-200":"#FEF08A","yellow-300":"#FDE047","yellow-400":"#FACC15","yellow-50":"#FEFCE8","yellow-500":"#EAB308","yellow-600":"#CA8A04","yellow-700":"#A16207","yellow-800":"#854D0E","yellow-900":"#713F12","yellow-950":"#422006","yellowLight":"#F9D187","zinc-100":"#F4F4F5","zinc-200":"#E4E4E7","zinc-300":"#D4D4D8","zinc-400":"#A1A1AA","zinc-50":"#FAFAFA","zinc-500":"#71717A","zinc-600":"#52525B","zinc-700":"#3F3F46","zinc-800":"#27272A","zinc-900":"#18181B","zinc-950":"#09090B"},"elevation":{"base":"0","drawer":"8000000","floating":"12000000","gate":"14000000","nav":"6000000","overlay":"10000000","raised":"2000000","subnav":"4000000","sunken":"-2000000"},"fontFamilies":{"Charter":{"src":["static/fonts/e38fddd1-89a4-4995-9f7f-3c701b2e62f1.woff2",{"defaults":false}],"variants":{"style:italic":{"src":"static/fonts/e4fc2e26-0ce1-4e6c-bb35-330c133f041c.woff2"},"weight:bold":{"src":"static/fonts/74c2aebb-af4a-4c7d-a7f5-2db2c73334eb.woff2"}}},"CharterBold":{"src":["static/fonts/74c2aebb-af4a-4c7d-a7f5-2db2c73334eb.woff2",{"defaults":false}],"variants":{"style:italic":{"src":"static/fonts/8d8c24cd-7112-47d5-9f8d-a9063ad51341.woff2"}}},"Inter":{"src":["static/fonts/inter-v3-latin-regular.woff2",{"defaults":false}],"variants":{"weight:700":{"src":"static/fonts/inter-v3-latin-700.woff2"}}},"NeueHaasUnica":{"src":["static/fonts/16eece37-9438-4888-8270-f6e32bc95fad.woff2",{"defaults":false}]},"NeueHaasUnica-fallback":{"src":["local('Roboto')",{"size-adjust":"103"}]},"SaolDisplay":{"src":["static/fonts/Saol-Display-Regular.woff2",{"defaults":false}],"variants":{"style:italic":{"src":"static/fonts/Saol-Display-Regular-Italic.woff2"}}},"SaolDisplay-fallback":{"src":["local('Roboto')",{"size-adjust":"94"}]},"SaolText":{"src":["static/fonts/Saol-Text-Regular.woff2",{"defaults":false}],"variants":{"style:italic":{"src":"static/fonts/Saol-Text-Regular-Italic.woff2"}}},"SaolText-fallback":{"src":["local('Roboto')",{"size-adjust":"96.39999999999998"}]}},"fontSettings":{"base":"0.7"},"fontSizes":{"font-size-11":"0.001","font-size-112":"5.67887","font-size-12":"0.170157","font-size-13":"0.36758","font-size-14":"0.55034","font-size-15":"0.72049","font-size-16":"0.879669","font-size-17":"1.02919","font-size-18":"1.17016","font-size-19":"1.3035","font-size-20":"1.43","font-size-21":"1.55034","font-size-22":"1.66507","font-size-23":"1.7747","font-size-24":"1.87967","font-size-25":"1.98035","font-size-26":"2.07708","font-size-27":"2.17016","font-size-28":"2.25985","font-size-29":"2.3464","font-size-30":"2.43001","font-size-31":"2.51088","font-size-32":"2.58918","font-size-33":"2.66507","font-size-34":"2.7387","font-size-35":"2.81019","font-size-36":"2.87967","font-size-37":"2.94724","font-size-38":"3.01301","font-size-39":"3.07708","font-size-40":"3.13952","font-size-41":"3.20042","font-size-42":"3.25985","font-size-43":"3.31788","font-size-44":"3.37458","font-size-45":"3.43001","font-size-46":"3.48422","font-size-47":"3.53726","font-size-48":"3.58918","font-size-49":"3.64003","font-size-50":"3.68986","font-size-52":"3.78659","font-size-54":"3.87967","font-size-56":"3.96936","font-size-58":"4.05591","font-size-60":"4.13952","font-size-62":"4.22039","font-size-64":"4.29869","font-size-70":"4.5197","font-size-80":"4.84903","font-size-96":"5.29869"},"fontWeights":{"font-weight-bold":"bold","font-weight-normal":"normal","font-weight-regular":"normal"},"fonts":{"AdTextPrimary":"Inter, Helvetica, Arial, Sans-serif","AdTextSecondary":"BylinePrimary","BodyPrimary":"Charter, Georgia, Times, Serif","BodySanSerif":"Inter, Helvetica, Arial, Sans-serif","BodySecondary":"CharterBold, Georgia, Times, Serif","BodyTertiary":"CharterItalic, Georgia, Times, Serif","BylinePrimary":"primary","BylineSecondary":"primary","DekPrimary":"secondary","DekSecondary":"primary","HeadlinePrimary":"tertiary","HeadlineSecondary":"primary","LabelPrimary":"primary","LabelSecondary":"primary","MenuPrimary":"primary","MenuSecondary":"primary","SubheadlinePrimary":"secondary","SubheadlineSecondary":"primary","TitlePrimary":"tertiary","TitleSecondary":"primary","primary":"NeueHaasUnica, NeueHaasUnica-fallback, Arial, sans-serif","secondary":"SaolText, SaolText-fallback, Georgia, Times, serif","tertiary":"SaolDisplay, SaolDisplay-fallback, Georgia, Times, serif"},"letterSpacings":{"letter-spacing-1":"0.0075rem","letter-spacing-10":"0.075rem","letter-spacing-2":"0.015rem","letter-spacing-20":"0.15rem","letter-spacing-3":"0.0225rem","letter-spacing-30":"0.3rem","letter-spacing-4":"0.03rem","letter-spacing-40":"0.4rem","letter-spacing-5":"0.0375rem","letter-spacing-6":"0.045rem","letter-spacing-8":"0.06rem","letter-spacing-base":"0","letter-spacing-n1":"-0.0075rem","letter-spacing-n10":"-0.075rem","letter-spacing-n2":"-0.015rem","letter-spacing-n3":"-0.0225rem","letter-spacing-n4":"-0.03rem","letter-spacing-n48":"-0.15rem","letter-spacing-n5":"-0.0375rem","letter-spacing-n6":"-0.045rem","letter-spacing-n60":"-0.188rem","letter-spacing-n8":"-0.06rem","letter-spacing-n80":"-0.25rem"},"lineHeights":{"large":"1.5","lg":"1.4","lineheight-base":"1","lineheight-lg":"1.4","lineheight-max":"2","lineheight-md":"1.3","lineheight-sm":"1.2","lineheight-xlg":"1.5","lineheight-xs":"1.1","lineheight-xsmall":"0.9","lineheight-xxlg":"1.6","lineheight-xxsmall":"0.8","lineheight-xxxlg":"1.8","md":"1.3","medium":"1.3","normal":{"minLinePadding":"5","roundToNearestHalfLine":"false","size":"10"},"sm":"1.2","small":"1.2","xlg":"1.5","xs":"1.1","xxs":"1"},"outlines":{"outline-focus-black":"{*sizes.outlineWidths.outline-xs} dotted {*colors.black}","outline-focus-transparent":"{*sizes.outlineWidths.outline-xs} dotted transparent","outline-focus-white":"{*sizes.outlineWidths.outline-xs} dotted {*colors.white}"},"radii":{"l":"1.875rem","m":"1.25rem","s":"0.9375rem","xl":"4.375rem","xs":"0.625rem","xxs":"0.3125rem","xxxs":"0.25rem"},"scaleRatio":1.5,"shadows":{"shadow-grey":"0 0.188rem 0.188rem rgba(0, 0, 0, 0.2)","shadow-greyXdark":"0 0.063rem 0.063rem rgba(0, 0, 0, 0.25)","shadow-modal":"0 0.2rem 0.6rem rgba(0, 0, 0, 0.1)"},"sizes":{"footer-network-logo":{"height":"55","width":"192"},"iconSize":{"l":"1.875rem","m":"1.5rem","s":"1.25rem","xl":"2.5rem","xs":"1.063rem","xxl":"3.125rem","xxs":"1rem","xxxl":"3.75rem","xxxs":"0.5rem","xxxxl":"4.6rem","xxxxxl":"5rem"},"maxContentWidth":"75rem","navHeight":"3.375rem","outlineOffset":{"outline-offset-lg":"0.5rem","outline-offset-m":"0.375rem","outline-offset-none":"0","outline-offset-s":"0.25rem","outline-offset-xs":"0.125rem","outline-offset-xxs":"0.0625rem"},"outlineWidths":{"outline-lg":"0.625rem","outline-m":"0.3125rem","outline-none":"0","outline-s":"0.19rem","outline-xs":"0.125rem","outline-xxs":"0.0625rem"},"primitive-0":"0rem","primitive-1":"0.0625rem","primitive-10":"0.625rem","primitive-1024":"64rem","primitive-11":"0.6875rem","primitive-112":"7rem","primitive-12":"0.75rem","primitive-128":"8rem","primitive-1280":"80rem","primitive-13":"0.8125rem","primitive-14":"0.875rem","primitive-15":"0.9375rem","primitive-16":"1rem","primitive-160":"10rem","primitive-1600":"100rem","primitive-17":"1.0625rem","primitive-18":"1.125rem","primitive-19":"1.188rem","primitive-192":"12rem","primitive-1920":"120rem","primitive-2":"0.125rem","primitive-20":"1.25rem","primitive-22":"1.375rem","primitive-224":"14rem","primitive-24":"1.5rem","primitive-256":"16rem","primitive-28":"1.75rem","primitive-32":"2rem","primitive-320":"20rem","primitive-36":"2.25rem","primitive-384":"24rem","primitive-4":"0.25rem","primitive-40":"2.5rem","primitive-44":"2.75rem","primitive-448":"28rem","primitive-48":"3rem","primitive-512":"32rem","primitive-52":"3.25rem","primitive-56":"3.5rem","primitive-6":"0.375rem","primitive-60":"3.75rem","primitive-64":"4rem","primitive-640":"40rem","primitive-72":"4.5rem","primitive-768":"48rem","primitive-8":"0.5rem","primitive-80":"5rem","primitive-96":"6rem"},"space":{"center":"0 auto","contentWidth":"75rem","l":"1.875rem","m":"1.25rem","maxContentWidth":"75rem","maxContentWidthAd":"25rem","mobile-gutter":"0.938rem","mobileOuterGutter":"0.938rem","s":"0.9375rem","tablet-gutter":"2.5rem","tabletOuterGutter":"2.5rem","xl":"4.375rem","xs":"0.625rem","xxs":"0.3125rem","xxxs":"0.25rem"},"styles":{"404-error-link":{"variant":"body-primary"},"404-error-title":{"variant":"headline-primary"},"accordion-wrapper":{"borderBottom":"border-thin-grey"},"account-dropdown-container":{"pr":{"_":"0","sm:xxlg":"2.5rem","xxxlg\u003e":"0"}},"account-dropdown-links":{"\u0026:hover":{"textDecoration":"underline","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem"},"bg":"white","transition":"outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out","variant":"button-secondary"},"account-dropdown-menu":{"border":"border-thin-greyXXXdark","boxShadow":"0 10px 16px -4px rgba(0, 0, 0, 0.24)"},"affiliate-bar":{"variant":"ad-text-primary"},"author-bio-bio":{"\u0026 p":{"margin":"0"},"variant":"body-secondary"},"author-bio-bio-job-title-wrapper":{},"author-bio-job-title":{"marginTop":"xs","variant":"byline-primary"},"author-bio-label":{"color":"greyXdark","marginRight":"xxs","variant":"byline-primary"},"author-bio-letter-mark-icon":{},"author-bio-name":{"variant":"byline-primary"},"author-bio-name-job-title-container":{"alignItems":"baseline"},"author-bio-read-more":{"\u0026:hover":{"backgroundSize":"0 0","color":"greyXXdark"},"backgroundImage":"linear-gradient( to bottom, #F5F5F5, #F5F5F5)","backgroundPosition":"0 100%","backgroundRepeat":"repeat-x","backgroundSize":"0 0","color":"brandColorPrimary","fontSize":"font-size-16","pb":"0.05rem","pt":"0.05rem","variant":"body-secondary"},"authors-bio-wrapper":{"borderTop":"border-thin-greyXXdark","marginTop":"l"},"big-story-block":{"bg":"bg-block-big-story","pb":{"lg":"2.5rem","md":"1.5625rem"},"pt":{"\u003csm":"0","lg":"m","md":"1.5625rem","sm":"xs"}},"big-story-feed-block":{"bg":"bg-block-big-story-feed","pb":{"lg":"2.5rem","md":"1.5625rem"},"pt":{"\u003csm":"0","lg":"m","md":"1.5625rem","sm":"xs"}},"block-header":{"borderBottom":{"sm":"border-xxs-grey"},"borderTop":{"\u003csm":"border-xxs-brand-quaternary","sm":"border-xxs-grey"},"mb":{"\u003clg":"m","lg":"xxs","xlg":"xs"},"mt":{"\u003csm":"xs"},"p":{"\u003csm":"2.3125rem 0 {xs}","lg":"2.5rem 0 1.5rem","sm":"2rem 0 {m}"},"textAlign":"center"},"block-heading":{"variant":"headline-primary"},"block-subheading":{"variant":"subheadline-primary"},"body-cta-btn-link":{"fontWeight":"normal"},"body-h2":{"\u0026 b, strong":{"fontFamily":"inherit","fontWeight":"bold"},"\u0026 em, i":{"fontFamily":"inherit","fontStyle":"italic"},"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-30","lg":"font-size-40","md":"font-size-38"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","md":"lineheight-xs"},"textAlign":"center","variant":"headline-tertiary"},"body-h3":{"\u0026 b, strong":{"fontFamily":"inherit","fontWeight":"bold"},"\u0026 em, i":{"fontFamily":"inherit","fontStyle":"italic"},"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-28","lg":"font-size-38","md":"font-size-30"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","md":"lineheight-xs"},"textAlign":"center","variant":"title-tertiary"},"body-h4":{"\u0026 b, strong":{"fontFamily":"inherit","fontWeight":"bold"},"\u0026 em, i":{"fontFamily":"inherit","fontStyle":"italic"},"bg":"greyXlight","fontFamily":"primary","fontSize":"font-size-18","lineHeight":"lineheight-base","p":"{s} {m}","width":"fit-content"},"body-image-caption":{"\u0026 em, i":{"fontFamily":"inherit","fontStyle":"italic"},"variant":"body-tertiary"},"body-loop-caption":{"\u0026 em, i":{"fontFamily":"inherit","fontStyle":"italic"},"variant":"body-tertiary"},"body-ol":{"\u0026 b, strong":{"fontFamily":"inherit","fontWeight":"bold"},"\u0026 em, i":{"fontFamily":"inherit","fontStyle":"italic"},"margin":{"_":"{s} 0 0 {xs}","md":"{s} 0"},"variant":"body-primary"},"body-text":{"variant":"body-primary"},"body-ul":{"\u0026 b, strong":{"fontFamily":"inherit","fontWeight":"bold"},"\u0026 em, i":{"fontFamily":"inherit","fontStyle":"italic"},"margin":{"_":"{s} 0 0 {xs}","md":"{s} 0"},"variant":"body-primary"},"breadcrumbs-link":{"variant":"breadcrumbs-link-primary"},"breadcrumbs-link-section":{"variant":"breadcrumbs-link-primary"},"breadcrumbs-list":{"variant":"breadcrumbs-primary"},"breadcrumbs-list-section":{"marginBottom":"m","marginTop":"-{m}","textAlign":"center","variant":"breadcrumbs-primary"},"breaker-ad-text":{"lineHeight":"lineheight-base","textTransform":"uppercase","variant":"ad-text-primary"},"by-line":{"pr":"xxs","variant":"byline-primary"},"by-line-name":{"pr":"xxs","variant":"byline-primary"},"byline-enhanced-author-job-title":{"color":"greyXdark","marginLeft":{"\u003csm":"xxs","sm":"xs"},"paddingLeft":{"\u003csm":"xxs","sm":"xxs"},"variant":"byline-uppercase-primary"},"byline-enhanced-author-name":{"variant":"byline-uppercase-primary"},"byline-enhanced-container":{},"byline-enhanced-icon":{"primary":"greyXXdark"},"byline-enhanced-label":{"variant":"byline-uppercase-primary"},"byline-enhanced-wrapper":{"alignItems":"center","display":"flex","flexWrap":"wrap","justifyContent":"center","marginTop":"0","span":{"display":"inherit"}},"checkbox-error-text":{"variant":"small-specs-error-text-primary"},"checkbox-label-text":{"variant":"overlay-item-text"},"collapsible-header":{"\u0026 strong":{"fontFamily":"inherit"},"variant":"label-header-primary"},"collapsible-header-button":{"bg":"white","border":"0","borderBottom":"none","borderTop":"border-thin-grey","paddingBottom":"xxs","paddingTop":"xxs","textAlign":"left","width":"100%"},"collapsible-icon-wrapper":{"border":"border-thin-greyXdark","borderRadius":"50%","height":"iconSize.l","marginRight":"xs","padding":"0.4rem","width":"iconSize.l"},"collapsible-section":{"marginBottom":"0"},"collapsible-section-text":{"\u003e p":{"marginTop":"0"},"variant":"body-primary","width":"100%"},"content-header-by-line-container":{"mb":"xs","pr":"xxs","span":{"display":"inline-block","lineHeight":"lineheight-xxlg"},"variant":"byline-primary"},"content-header-dek":{"fontFamily":"DekPrimary","fontSize":"font-size-20","fontStyle":"italic","fontWeight":"normal","lineHeight":{"\u003csm":"lineheight-sm","md":"lineheight-sm"},"mb":"xs"},"content-header-dek-left-right":{"fontFamily":"DekPrimary","fontSize":"font-size-20","fontStyle":"italic","fontWeight":"normal","lineHeight":{"\u003csm":"lineheight-sm","md":"lineheight-sm"}},"content-header-left-right-byline-enhanced-container":{"m":"0","maxWidth":"none"},"content-header-publish-date":{"ml":"xs","pl":"xs"},"content-header-text-left-right-container":{"textAlign":{"md":"center"}},"content-header-title":{"marginY":"s","variant":"headline-tertiary"},"content-header-title-left-right":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-40","lg":"font-size-48","md":"font-size-29","xlg":"font-size-52"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","md":"lineheight-xs","xlg":"lineheight-xs"},"variant":"headline-tertiary"},"custom-item-dek":{"variant":"dek-primary"},"custom-item-image":{"mb":"xs","text-overflow":"ellipsis"},"custom-item-label":{"display":"inline-block","marginBottom":"xs","variant":"label-tag-primary"},"custom-item-label-big-story-feed":{"display":"block","m":"auto auto {xs}","variant":"label-tag-primary"},"custom-item-meta":{"pr":"xxs"},"custom-item-publish-date":{"bps":[{"options":{"size":"sm"},"value":{"\u0026:before":{"content":"'|'","display":"inline-block","fontFamily":"primary","fontSize":"font-size-11","p":"0 {xxxs}"}}}],"pr":"xxs","variant":"byline-primary"},"custom-item-title":{"my":"0","variant":"title-primary"},"custom-item-title-text":{"my":"0","variant":"title-primary"},"dim-overlay":{"elevation":"sunken"},"do-not-sell":{"border":"border-thin-white","fontSize":"font-size-11","lineHeight":"lineheight-lg","padding":"xs","textAlign":{"\u003csm":"left","md":"center"},"textTransform":"capitalize","variant":"menu-secondary"},"dropdown-contentdropdown-content":{"border":"border-dropdown"},"dropdown-label-headline":{"variant":"dropdown-text-primary"},"dropdown-link-list-collapsed":{"variant":"specs-item-primary"},"dropdown-menu-item":{"\u0026:hover":{"bg":"bg-droppdown-list-hover"},"background":"bg-droppdown-list","border":"border-dropdown","variant":"dropdown-text-primary"},"dropdown-menu-item-arrow-button":{"transition":"all 0.3s ease-in-out"},"dropdown-menu-item-link":{"\u0026:hover":{"color":"greyXXXdark"},"borderBottom":"none","textTransform":"capitalize"},"dropdown-menu-label-item":{"fontWeight":"normal"},"dropdown-menu-label-item-username":{"borderBottom":"none","fontWeight":"bold"},"embedded-product-price-text":{"fontFamily":"MenuPrimary"},"error-text":{"variant":"small-specs-error-text-primary"},"feed-body-label":{"variant":"label-tag-primary"},"feed-product-button":{"mb":"0","variant":"button-primary"},"feed-product-button-container":{"marginY":"xs"},"feed-product-custom-tag":{"variant":"label-tag-primary"},"feed-product-description":{"variant":"dek-primary"},"feed-product-info-details":{"margin":{"_":"xs","xlg":"m"},"textAlign":"center"},"feed-product-title":{"variant":"title-secondary"},"field-message-container":{"variant":"overlay-item-text"},"footer":{"variant":"menu-tertiary"},"footer-affiliate-disclosure":{"lineHeight":"lineheight-lg"},"footer-fixed":{"bg":"greyXlight","boxShadow":"0 0 40px rgb(0 0 0, 0.2)"},"footer-fixed-button":{"variant":"button-text"},"footer-fixed-button-collapsed":{"color":"black"},"footer-fixed-button-open":{"color":"black"},"footer-fixed-content":{"variant":"body-primary"},"footer-legal-menu":{"lineHeight":"lineheight-max"},"footer-legal-menu-item-link":{"paddingRight":"m"},"footer-logo":{"height":"2.125rem","maxHeight":"1.4375rem","width":"5.375rem"},"footer-social-button":{"height":"iconSize.xs","primary":"white","width":"iconSize.xs"},"form-input-field":{"\u0026::placeholder":{"color":"greyXXXdark"},"variant":"overlay-item-text"},"form-input-label":{"variant":"overlay-item-text"},"form-input-required":{"color":"globalColorError","variant":"overlay-item-text"},"form-select":{"variant":"overlay-item-text"},"form-select-label":{"variant":"overlay-item-text"},"form-select-multi-value":{"bg":"greyLight","marginY":"0","p":"0.2rem","variant":"specs-item-primary"},"form-select-option":{"variant":"overlay-item-text"},"form-select-placeholder":{"lineHeight":"lineheight-max","p":"0","variant":"overlay-item-text"},"form-select-required":{"variant":"overlay-item-text"},"form-select-single-value":{"variant":"overlay-item-text"},"form-text-area-field":{"variant":"overlay-item-text"},"four-across-block":{"bg":"bg-block-four-across","pb":{"lg":"2.5rem","md":"1.5625rem"},"pt":{"\u003csm":"0","lg":"m","md":"1.5625rem","sm":"xs"}},"item-author-container-carousel-block":{"[data-theme-key='card-body']":{"paddingTop":{"md":"{*sizes.primitive-12}"}}},"item-author-image-carousel-block":{"img":{"borderRadius":"50%"}},"item-author-wrapper-grouped-carousel-block":{"[data-theme-key='carousel-inner-wrapper']":{"gap":{"md":"0"}}},"item-button-carousel-block":{"variant":"button-contained"},"item-button-statement-block":{"variant":"button-contained"},"item-button-text-statement-block":{"variant":"button-text"},"item-container-grouped-carousel-block":{"border":"border-none-transparent"},"item-container-grouped-statement-block":{"border":"border-none-transparent"},"item-dek-statement-block":{"\u0026 ul,li":{"textAlign":"left"},"fontFamily":"DekPrimary","fontSize":"font-size-14","letterSpacing":"letter-spacing-4","lineHeight":"lineheight-lg"},"item-image-grouped-statement-block":{"maxWidth":"25rem"},"item-title-statement-block":{"fontFamily":"HeadlinePrimary","fontSize":"font-size-20","lineHeight":"lineheight-sm"},"legal-menu-link":{"variant":"menu-secondary"},"link-body-primary":{"fontWeight":"bold"},"link-body-secondary":{"fontWeight":"bold"},"list-item-link":{"fontFamily":"MenuPrimary"},"load-more-button":{"variant":"button-load-more-primary"},"load-more-button-author":{"variant":"button-load-more-primary"},"load-more-button-listicle":{"variant":"button-load-more-primary"},"load-more-button-overlay":{"variant":"button-load-more-primary"},"load-more-button-product-summary-view":{"variant":"button-load-more-primary"},"load-more-button-saved":{"variant":"button-load-more-primary"},"location-choice-menu-item-link":{"variant":"menu-primary"},"location-choice-sub-menu-item-link":{"variant":"menu-primary"},"marquee-body-text":{"\u0026 p":{"margin":{"_":"0 auto {s}","xlg":"0 auto"}},"margin":"0 auto","padding":{"_":"0 {mobileOuterGutter}","md":"0 {tabletOuterGutter} {s}","xlg":"0 0 {l}"},"variant":"body-primary"},"marquee-content":{"textAlign":"center","width":{"smd":"34rem","xlg":"40rem"}},"marquee-logo":{"img":{"height":{"lg":"auto"},"maxHeight":{"_":"5.625rem","lg":"8rem","md":"6.25rem","sm":"5.625rem","xlg":"9rem"},"transform":"translate3d(0,0,0)","width":"auto"},"textAlign":"center"},"media-poster-play-button":{"primary":"white"},"nav":{"bg":"white","height":{"\u003clg":"96px","lg":"48px"}},"nav-bar":{"alignItems":"center","display":"flex","height":"100%","m":"0 auto","maxWidth":"75rem","px":"0","width":"100%"},"nav-bar-link":{"variant":"button-secondary"},"nav-bar-login-text":{"variant":"button-secondary"},"nav-bar-top-list-container":{"borderBottom":{"_":"border-thin-greyXlight","smd\u003e":"0"},"borderTop":{"_":"border-thin-greyXlight","smd\u003e":"0"}},"nav-bar-top-list-item":{"padding":{"_":"0 {l} 0 {m}","lg\u003e":"0 {m} 0 {m}"},"variant":"button-secondary"},"nav-bar-top-list-link":{"\u0026:hover":{"textDecoration":"underline","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem"},"color":{"_":"inherit","smd\u003e":"inherit"},"lineHeight":"2.58918","transition":"outline 0.3s ease-in-out, outline-offset 0.3s ease-in-out"},"nav-bar-top-list-link-highlight":{"textDecoration":"underline","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem"},"nav-header-title":{"variant":"ad-text-primary"},"nav-logo":{"height":{"md":"1.563rem"},"lineHeight":"0","marginBottom":"0.125rem","marginRight":{"_":"auto","lg\u003e":"xxs"},"width":{"\u003csm":"3.463rem","md":"4.329rem"}},"nav-search-button":{"margin":"xxs","padding":{"\u003csm":"0","sm":"xxs"}},"nav-side-panel-button":{"\u0026 img":{"height":"iconSize.l","width":"iconSize.l"},"\u0026 svg":{"height":"iconSize.l","width":"iconSize.l"},"\u0026:focus-visible":{"outlineColor":"black"},"padding":{"\u003cmd":"0.5rem {xxxs} 0.5rem {xs}","md":"0.5rem {xs} 0.5rem {xs}","xxs":"0.5rem {xxxs} 0.5rem 0"}},"nav-subscribe-link":{"\u0026:focus-visible":{"outlineColor":"nav-subscribe-link-focus"},"variant":"button-contained"},"newsletter-content-back-button":{"p":"0.75rem {xl}","variant":"button-contained"},"newsletter-content-button":{"flexShrink":"0","p":"0.75rem {xl}","variant":"button-contained"},"newsletter-content-email-icon":{"primary":"greyXXXdark"},"newsletter-content-footer-terms-of-use":{"margin":"{xs} {m} {m} 0","textAlign":"left","variant":"ad-text-primary"},"newsletter-content-headline":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-30","lg":"font-size-40","md":"font-size-38"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","md":"lineheight-xs"}},"newsletter-content-sub-headline":{"fontFamily":"DekPrimary","fontSize":{"\u003csm":"font-size-18","lg":"font-size-20"},"lineHeight":{"\u003csm":"lineheight-md","lg":"lineheight-sm"}},"newsletter-content-wrapper":{"background":"white","padding":{"\u003cmd":"l","md\u003e":"3rem {l}"}},"newsletter-feedpage-container":{"margin":"center","maxWidth":"75rem","padding":{"lg":"0","md":"tablet-gutter","xxs":"mobile-gutter"}},"newsletter-feedpage-email-wrapper":{"alignItems":{"\u003csm":"center","sm\u003e":"flex-end"},"columnGap":"1rem","flexDirection":{"_":"column","sm":"row"}},"newsletter-feedpage-wrapper":{"form":{"\u003e div":{"alignItems":{"\u003csm":"center","sm":"flex-start"}},"alignItems":"flex-start"},"py":"2.5rem","width":"100%"},"newsletter-wrapper":{"backgroundImage":"url('/_assets/design-tokens/PR-143/1a74f8d/fre/static//images/marketing/bg-newsletter.jpg')"},"photo-credit-copyright":{"pr":"xxs","variant":"byline-secondary"},"photo-credit-creditor":{"pr":"xxs","variant":"byline-secondary"},"photo-credit-divider":{"pr":"xxs","variant":"byline-secondary"},"photo-credit-figcaption-lead-image":{"paddingLeft":{"\u003clg":"s","lg":"0"}},"popover-avatar-button":{"bg":"bg-avatar","border":"border-avatar","color":"text-avatar","variant":"dropdown-text-primary"},"popover-label-headline":{"variant":"dropdown-text-primary"},"popover-trigger":{"background":"white","border":"border-dropdown","variant":"dropdown-text-primary"},"privacy-disclosure-content-wrapper":{"[data-theme-key='button-primary']":{"\u0026:hover":{"bg":"transparent"}},"bg":"black"},"search-input-button":{"marginLeft":"xxs","marginTop":"0","variant":"button-contained"},"search-input-button-icon":{"primary":["white","black"]},"search-input-container":{},"search-input-field":{"bg":"greyXlight","border":"none","borderBottom":"border-thin-greyDark","height":"2.6rem","variant":"overlay-item-text"},"search-nav-button-icon":{"\u0026:hover":{"border":"0"},"border":"0"},"search-nav-container":{"borderBottom":"border-xs-black","div":{"\u0026:focus-within":{"outline":"0"},"border":"0","borderBottom":"border-none-transparent"},"top":{"lg":"3rem","xxs:md":"3.5rem"}},"search-nav-input-field":{"variant":"button-secondary"},"search-overlay-list-container":{"boxShadow":"shadow-modal"},"search-overlay-list-item":{"variant":"overlay-item-text"},"search-overlay-list-item-selected":{"paddingX":"xxxs","variant":"overlay-item-text"},"search-results-count":{"variant":"body-primary"},"share-social-button":{"\u0026img":{"primary":"white"}},"side-panel-menu":{"variant":"menu-primary"},"side-panel-search-button":{"height":"iconSize.xxs","width":"iconSize.xxs"},"side-panel-search-text":{"color":"sidepanel-text","variant":"menu-primary"},"side-panel-sub-menu":{"variant":"menu-primary"},"sidepanel-close-btn":{"border":"0"},"skip-to-content-link":{"border":"border-medium-white","boxShadow":"0 0 0 3px #55adff","variant":"button-quaternary"},"skip-to-section-link-anchor":{"a":{"transition":"color 0.3s ease-in-out"},"a:hover":{"color":"greyXdark"},"variant":"button-secondary"},"skip-to-section-link-nav-container":{"borderBottom":"border-thin-grey","borderTop":"border-thin-grey"},"sponsor-bar":{"variant":"ad-text-primary"},"sponsor-label":{"mb":"xxs","textTransform":"none","variant":"ad-text-primary"},"sponsor-logo-separator":{"color":"greyXXXdark","p":"0 {xs} 0 {s}","variant":"ad-text-primary"},"spotlight-details":{"alignSelf":"flex-end","background":"transparent","m":{"_":"0 {xs} {s}","md":"0 0 {m}"},"px":{"_":"s","md":"xl"},"textAlign":"center"},"spotlight-hed":{"\u0026:hover":{"color":"brandColorPrimary","transition":"color 0.3s ease-in-out"},"p":"0.6rem {m}","variant":"subheadline-secondary"},"spotlight-label":{"variant":"label-secondary"},"spotlight-logo":{"\u0026 img":{"height":"1.6rem"}},"statement-block":{"paddingY":{"\u003csm":"{*sizes.primitive-32}","md":"{*sizes.primitive-32}"}},"syndicated-link-link":{"variant":"body-primary"},"syndicated-link-text":{"variant":"body-primary"},"text-block-container":{"bg":"bg-block-content-text","p":"0 {s}"},"three-column":{"bg":"bg-block-three-col","pb":{"lg":"2.5rem","md":"1.5625rem"},"pt":{"\u003csm":"0","lg":"m","md":"1.5625rem","sm":"xs"}},"vertical-playlist-item-title":{"fontFamily":"BylinePrimary","fontSize":"font-size-18","lineHeight":"lineheight-sm"},"vertical-playlist-title":{"display":"block","fontFamily":"LabelPrimary","fontSize":"font-size-15","letterSpacing":"letter-spacing-6","lineHeight":"lineheight-base","textTransform":"uppercase"},"video-hub-byline":{"variant":"byline-primary"},"video-hub-title":{"variant":"item-title-stacked-feature-big-story-feed"},"watch-next-player-title":{"variant":"label-primary"},"watch-next-player-video-title":{"variant":"title-tertiary"},"watch-next-player-wrapper":{"my":"l"},"wide-marquee-content":{"bottom":"initial","height":"100%","m":"0","width":"100%"},"wide-marquee-label":{"margin":"{xs} auto","variant":"label-tag-primary"},"wide-marquee-label-container":{},"wide-marquee-title":{"bg":"white","bottom":"0","color":"black","display":"unset","fontFamily":"secondary","fontSize":{"\u003csm":"font-size-45","lg":"font-size-60","sm":"font-size-45"},"fontWeight":"normal","lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-base","sm":"lineheight-base"},"mb":{"\u003csm":"m","lg":"2.5rem","sm":"l"},"p":{"\u003csm":"{l} {l} {m}","_":"{xs}","lg":"2.3rem {l} 1.5rem","sm":"{l} {l} {m}"},"position":"absolute","textAlign":"left","variant":"headline-secondary"},"wide-marquee-title-only":{"variant":"headline-secondary"}},"variants":{"ad-leaderboard-wrapper":{"minHeight":{"md":"121px"}},"ad-text-primary":{"a":{"\u0026:hover":{"color":"color-link-body-hover","textDecorationColor":"border-link-body-hover"},"color":"inherit","textDecoration":"underline","textDecorationColor":"inherit","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem","transition":"color 0.3s ease-in-out"},"fontFamily":"AdTextPrimary","fontSize":"font-size-11","lineHeight":"lineheight-md","textTransform":"none"},"ad-wrapper":{"minHeight":{"_":"523px","md":"138px"}},"body-2xl":{"fontSize":{"\u003csm":"font-size-60","lg":"font-size-80","md":"font-size-60"},"lineHeight":{"\u003csm":"lineheight-base","lg":"lineheight-base","md":"lineheight-base"}},"body-2xs":{"fontSize":"font-size-14","lineHeight":"lineheight-sm"},"body-3xl":{"fontSize":{"\u003csm":"font-size-60","lg":"font-size-96","md":"font-size-60"},"lineHeight":{"\u003csm":"lineheight-base","lg":"lineheight-base","md":"lineheight-base"}},"body-3xs":{"fontSize":"font-size-12","lineHeight":"lineheight-sm"},"body-4xs":{"fontSize":"font-size-11","lineHeight":"lineheight-sm"},"body-l":{"fontSize":{"\u003csm":"font-size-22","lg":"font-size-24","md":"font-size-22"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-sm","md":"lineheight-xs"}},"body-m":{"fontSize":"font-size-19","lineHeight":"lineheight-xxlg"},"body-primary":{"\u0026 em":{"fontFamily":"BodyPrimary","fontStyle":"italic"},"\u0026 strong":{"fontFamily":"BodyPrimary","fontWeight":"bold"},"fontFamily":"BodyPrimary","fontSize":"font-size-19","lineHeight":"lineheight-xxlg"},"body-s":{"fontSize":"font-size-18","lineHeight":"lineheight-sm"},"body-secondary":{"\u0026 em":{"fontFamily":"BodyTertiary","fontStyle":"italic"},"fontFamily":"BodyPrimary","fontSize":"font-size-16","lineHeight":"lineheight-lg"},"body-tertiary":{"fontFamily":"DekPrimary","fontSize":"font-size-16","lineHeight":"lineheight-lg"},"body-xl":{"fontSize":{"\u003csm":"font-size-28","lg":"font-size-36","md":"font-size-28"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","md":"lineheight-xs"}},"body-xs":{"fontSize":"font-size-16","lineHeight":"lineheight-sm"},"breadcrumbs-link-primary":{"\u0026:hover":{"color":"black","textDecoration":"underline","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem"},"textDecoration":"underline","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem","transition":"all 0.3s ease-in-out"},"breadcrumbs-primary":{"color":"greyXXdark","fontFamily":"primary","fontSize":"font-size-11","lineHeight":"lineheight-md"},"button-contained":{"\u0026:focus":{"outline":"outline-focus-black","outlineOffset":"{*sizes.outlineOffset.outline-offset-s}"},"\u0026:hover":{"bg":"white","border":"border-xxs-black","svg \u003e path , svg":{"fill":"black","stroke":"black"}},"bg":"brandColorPrimary","border":"border-xxs-black","borderRadius":"0","color":"white","fontFamily":"LabelPrimary","fontSize":"font-size-14","letterSpacing":"letter-spacing-base","lineHeight":"lineheight-xs","textDecoration":"none","textTransform":"none","transition":"all 0.3s ease-in-out","width":"auto"},"button-discount-contained":{"\u0026:hover":{"bg":"bg-discount","border":"unset"},"bg":"bg-discount","border":"unset","fontFamily":"LabelPrimary","outline":"0.125rem dotted {*colors.greenDark}","textTransform":"uppercase"},"button-discount-contained-OnDark":{"\u0026:hover":{"bg":"bg-discount-onDark","border":"unset"},"bg":"bg-discount-onDark","border":"unset","fontFamily":"LabelPrimary","outline":"0.125rem dotted {*colors.greenLight}","textTransform":"uppercase"},"button-discount-outline":{"\u0026:hover":{"bg":"bg-discount","border":"unset"},"bg":"unset","border":"unset","color":"text-discount","fontFamily":"LabelPrimary","outline":"0.125rem dotted {*colors.greenDark}","textTransform":"uppercase"},"button-discount-outline-OnDark":{"\u0026:hover":{"bg":"bg-discount-onDark","border":"unset"},"bg":"unset","border":"unset","color":"text-discount-onDark","fontFamily":"LabelPrimary","outline":"0.125rem dotted {*colors.greenLight}","textTransform":"uppercase"},"button-load-more-primary":{"\u0026:hover":{"bg":"greyLight"},"bg":"white","border":"border-thin-black","borderRadius":"xxxs","color":"black","fontFamily":"LabelPrimary","textTransform":"uppercase","transition":"all 0.3s ease-in-out","width":"100%"},"button-outline":{"\u0026:focus":{"outline":"outline-focus-black","outlineOffset":"{*sizes.outlineOffset.outline-offset-s}"},"\u0026:hover":{"bg":"greyLight","border":"border-xxs-black","color":"black"},"bg":"white","border":"border-xxs-black","borderRadius":"0","color":"black","fontFamily":"LabelPrimary","fontSize":"font-size-14","letterSpacing":"letter-spacing-base","lineHeight":"lineheight-xs","svg \u003e path":{"fill":"black"},"textDecoration":"none","textTransform":"none","transition":"all 0.3s ease-in-out","width":"auto"},"button-primary":{"\u0026:focus":{"outline":"outline-focus-black"},"\u0026:hover":{"bg":"white"},"bg":"brandColorPrimary","border":"border-xxs-black","borderRadius":"0","color":"white","fontFamily":"LabelPrimary","fontSize":"font-size-14","letterSpacing":"letter-spacing-base","lineHeight":"lineheight-xs","mt":"xs","p":{"\u003csm":"{xs} 1rem","lg":"0.75rem 1.5625rem","md":"0.75rem 1.5625rem"},"textTransform":"none","transition":"all 0.3s ease-in-out","width":"auto"},"button-quaternary":{"bg":"black","borderRadius":"l","fontFamily":"AdTextPrimary","fontSize":"font-size-14","fontWeight":"bold","lineHeight":"lineheight-base","p":"{xs} {m}","width":"auto"},"button-secondary":{"fontFamily":"primary","fontSize":"font-size-12","letterSpacing":"letter-spacing-10","textTransform":"uppercase"},"button-text":{"\u0026:focus":{"outline":"outline-focus-black","outlineOffset":"{*sizes.outlineOffset.outline-offset-s}"},"\u0026:hover":{"background":"none","border":"border-none-transparent","color":"greyXXdark","textDecorationColor":"greyXXdark"},"bg":"white","border":"border-none-transparent","color":"black","fontFamily":"LabelPrimary","fontSize":"font-size-14","letterSpacing":"letter-spacing-base","lineHeight":"lineheight-xs","textDecoration":"underline","textDecorationThickness":"0.0625rem","textTransform":"none","textUnderlineOffset":"0.25rem","transition":"all 0.3s ease-in-out","width":"auto"},"button-text-onDark":{"\u0026:focus":{"outline":"outline-focus-white"},"\u0026:hover":{"color":"neutral-300","textDecorationColor":"neutral-300"},"color":"white","fontSize":"font-size-11","lineHeight":"lineheight-sm","variant":"button-text"},"byline-capitalize-primary":{"fontFamily":"BylinePrimary","fontSize":"font-size-12","lineHeight":"lineheight-md","textTransform":"capitalize"},"byline-link-primary":{"\u0026:hover":{"color":"black","textDecoration":"underline","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem"},"textDecoration":"underline","textDecorationThickness":"0.0625rem","textUnderlineOffset":"0.25rem","transition":"all 0.3s ease-in-out"},"byline-lowercase-primary":{"fontFamily":"BylinePrimary","fontSize":"font-size-12","lineHeight":"lineheight-md","textTransform":"lowercase"},"byline-primary":{"fontFamily":"BylinePrimary","fontSize":"font-size-11","letterSpacing":"letter-spacing-10","lineHeight":"lineheight-xxlg","textTransform":"uppercase"},"byline-secondary":{"color":"greyXdark","fontFamily":"primary","fontSize":"font-size-11","fontWeight":"500","lineHeight":"lineheight-sm","textTransform":"uppercase"},"byline-transform-none-primary":{"fontFamily":"BylinePrimary","fontSize":"font-size-12","lineHeight":"lineheight-md","textTransform":"none"},"byline-uppercase-primary":{"fontFamily":"BylinePrimary","fontSize":"font-size-11","letterSpacing":"letter-spacing-10","lineHeight":"lineheight-md","textTransform":"uppercase"},"chip-label":{"fontFamily":"","fontSize":"font-size-11","lineHeight":"lineheight-base"},"content-header-byline-image-left-right-name":{"a":{"textDecoration":{"md":"none"}},"a:hover":{"color":{"md":"grey"}}},"dek-primary":{"fontFamily":"DekPrimary","fontSize":{"\u003csm":"font-size-18","lg":"font-size-17","sm":"font-size-15","xlg":"font-size-18"},"letterSpacing":"letter-spacing-3","lineHeight":{"\u003csm":"lineheight-xlg","lg":"lineheight-xlg","sm":"lineheight-xlg","xlg":"lineheight-xlg"},"mb":{"lg":"s"}},"dropdown-text-primary":{"fontFamily":"MenuPrimary","fontSize":"font-size-14","lineHeight":"lineheight-max","textTransform":"capitalize"},"four-across-block-content-ad":{"bps":[{"options":{"size":"sm"},"value":{"gridGap":"m"}},{"options":{"size":"md"},"value":{"gridGap":"m"}},{"options":{"size":"lg"},"value":{"gridGap":"1.5625rem"}}]},"four-across-block-content-no-ad":{"bps":[{"options":{"size":"sm"},"value":{"gridGap":"s","gridTemplateColumns":"repeat(4, 1fr)"}},{"options":{"size":"md"},"value":{"gridGap":"s"}},{"options":{"size":"lg"},"value":{"gridGap":"1.5625rem"}}]},"headline-2xl":{"fontSize":{"\u003csm":"font-size-36","lg":"font-size-48","md":"font-size-36"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-sm","md":"lineheight-xs"}},"headline-2xs":{"fontSize":"font-size-16","lineHeight":"lineheight-sm"},"headline-3xl":{"fontSize":{"\u003csm":"font-size-48","lg":"font-size-60","md":"font-size-48"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","md":"lineheight-sm"}},"headline-3xs":{"fontSize":"font-size-14","lineHeight":"lineheight-sm"},"headline-l":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-24","lg":"font-size-28","md":"font-size-24"},"fontWeight":"bold","lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","md":"lineheight-xs"}},"headline-m":{"fontSize":{"\u003csm":"font-size-22","lg":"font-size-24","md":"font-size-22"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-sm","md":"lineheight-xs"}},"headline-primary":{"a":{"\u0026:hover":{"color":{"\u003clg":"brandColorTertiary","lg":"black"},"fontStyle":{"lg":"italic"}}},"fontFamily":"HeadlinePrimary","fontSize":{"\u003csm":"font-size-45","lg":"4.99855","sm":"font-size-45","xlg":"5.08409"},"fontWeight":"normal","letterSpacing":"letter-spacing-n2","lineHeight":{"\u003csm":"lineheight-xxsmall","lg":"lineheight-xxsmall","sm":"lineheight-xxsmall","xlg":"lineheight-base"}},"headline-quaternary":{"borderBottom":"border-xxs-grey","borderTop":"border-xxs-grey","fontFamily":"primary","fontSize":{"\u003csm":"font-size-12","sm":"font-size-14"},"letterSpacing":{"\u003csm":"letter-spacing-20","sm":"letter-spacing-10"},"lineHeight":{"\u003csm":"lineheight-lg","sm":"lineheight-lg"},"mt":"revert","py":"l","textTransform":"uppercase"},"headline-quinary":{"fontFamily":"secondary","fontSize":"font-size-20","lineHeight":"lineheight-sm"},"headline-s":{"fontSize":{"\u003csm":"font-size-20","lg":"font-size-22","md":"font-size-20"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","md":"lineheight-sm"}},"headline-secondary":{"fontFamily":"TitlePrimary","textTransform":"uppercase"},"headline-senary":{"fontFamily":"secondary","fontSize":{"\u003cmd":"font-size-38","lg":"font-size-48","md":"font-size-38","xlg":"font-size-48"},"fontWeight":"normal","letterSpacing":{"lg":"letter-spacing-n3"},"lineHeight":{"\u003cmd":"lineheight-sm","lg":"lineheight-sm","md":"lineheight-sm","xlg":"lineheight-sm"}},"headline-septenary":{"fontFamily":"tertiary","fontSize":{"\u003csm":"font-size-40","lg":"font-size-60","md":"font-size-48"},"fontWeight":"400","letterSpacing":"letter-spacing-1","lineHeight":{"\u003csm":"lineheight-base","lg":"lineheight-base","md":"lineheight-base"},"textTransform":"uppercase"},"headline-tertiary":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-38","lg":"font-size-48","md":"font-size-38","xlg":"font-size-48"},"fontWeight":"normal","letterSpacing":{"lg":"letter-spacing-n3"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","md":"lineheight-sm","xlg":"lineheight-sm"}},"headline-xl":{"fontSize":{"\u003csm":"font-size-28","lg":"font-size-36","md":"font-size-28"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","md":"lineheight-xs"}},"headline-xs":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-18","lg":"font-size-20","md":"font-size-18"},"fontWeight":"bold","lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","md":"lineheight-sm"}},"item-ad-three-column":{"gridTemplateColumns":"40% 1fr","p":{"\u003csm":"{m} 0 {xs}","lg":"{m} 0 {xs}","sm":"{s} 0 {xxs}"}},"item-big-story-feed":{"p":"0","textAlign":"center"},"item-byline-ad-three-column":{"display":"block","m":"{xs} 0 {xxs}"},"item-byline-column-big-story-feed":{"display":"block","m":"{xs} 0 {xxs}"},"item-byline-four-across":{"display":"block","m":"{xs} 0 {xxs}"},"item-byline-noimage-basefeed-big-story-feed":{"display":{"lg":"inline-block","sm":"block"},"m":{"\u003csm":"{xs} 0 {xxs}","sm":"0 0 {xxxs}"}},"item-byline-noimage-feature-big-story-feed":{"display":{"lg":"inline-block","sm":"block"},"m":{"\u003csm":"{xxs} 0","sm":"{xxxs} 0"}},"item-byline-stacked-basefeed-big-story-feed":{"display":"block","m":"{xs} 0 {xxxs}"},"item-byline-three-column":{"display":"block","m":"{xs} 0 {xxs}"},"item-column-right-basefeed-big-story-feed":{"bps":[{"options":{"size":"\u003csm"},"value":{"borderTop":"border-xxs-grey","gridTemplateColumns":"35% 1fr","p":"{m} 0 {xs}"}},{"options":{"size":"sm"},"value":{"border":"border-none-transparent"}},{"options":{"size":"lg"},"value":{"gridTemplateColumns":"30% 1fr"}},{"value":{"p":"0"}},{"value":{"gridTemplateColumns":"35% 1fr"}},{"value":{"p":"0 0 {xs}"}}]},"item-content-big-story-feed":{"bg":"bg-block-content-big-story-feed-colright-feature","p":{"\u003csm":"1.5625rem 0","lg":"m","sm":"1.5625rem {l} {m}","xlg":"{l} 4rem"},"textAlign":"center"},"item-content-column-right-basefeed-big-story-feed":{"bg":"bg-block-content-big-story-feed-colright-basefeed","pl":{"lg":"xxs"}},"item-content-four-across":{"bg":"bg-block-content-four-across"},"item-content-imageright-ad-big-story":{"bg":"bg-block-content-big-story-imageright-ad","p":{"\u003csm":"1.5625rem {xs}","lg":"{l} {s}","sm":"0 2rem"},"textAlign":"center"},"item-content-imageright-big-story":{"bg":"bg-block-content-big-story-imageright","p":{"\u003csm":"1.5625rem 0","lg":"0 3rem","sm":"0 2rem","xlg":"0 6rem"},"textAlign":"center"},"item-content-noimage-ad-big-story":{"bg":"bg-block-content-big-story-noimage-ad"},"item-content-noimage-basefeed-big-story-feed":{"bg":"bg-block-content-big-story-feed-noimage-basefeed","borderBottom":"border-xxs-grey","p":{"\u003csm":"{s} 0 {xxs}","lg":"{xxs} 0","sm":"{s} 0 {xxs}"},"textAlign":"center"},"item-content-noimage-big-story":{"bg":"black","h2 span":{"\u0026:hover":{"color":"link-hover-item-title-secondary"}},"ml":{"\u003csm":"-0.938rem","sm":"0"},"p":{"\u003csm":"3.125rem 0.938rem 2rem","lg":"2.5rem 6rem 1rem","sm":"2.5rem 2.5rem 1.5rem","xlg":"3.5rem 7rem 1.5rem"},"textAlign":"center","width":{"\u003csm":"100vw","sm":"100%"}},"item-content-noimage-feature-big-story-feed":{"bg":"bg-block-content-big-story-feed-noimage-feature","textAlign":"center"},"item-content-stacked-basefeed-big-story-feed":{"bg":"bg-block-content-big-story-feed-stacked-basefeed"},"item-content-stacked-feature-big-story-feed":{"bg":"bg-block-content-big-story-feed-stacked-feature","p":{"\u003csm":"1.5625rem 0","lg":"{l} 0","sm":"1.5625rem 0 {m}","xlg":"{l} 0"},"textAlign":"center"},"item-content-three-column":{"bg":"bg-block-content-three-col"},"item-content-under-ad-big-story":{"bg":"bg-block-content-big-story-under-ad","p":{"\u003csm":"1.5625rem 0","lg":"{m} {s}","sm":"1.5625rem 0 0"},"textAlign":"center"},"item-content-under-big-story":{"bg":"bg-block-content-big-story-under","p":{"\u003csm":"1.5625rem 0","lg":"{l} 0 0","sm":"1.5625rem 0 0"},"textAlign":"center"},"item-dek-column-right-feature-ad-big-story-feed":{"paddingTop":{"_":"xxs","md":"xs"}},"item-dek-column-right-feature-big-story-feed":{"paddingTop":{"_":"xxs","md":"xs"}},"item-dek-four-across":{"fontSize":{"\u003csm":"font-size-16","lg":"font-size-15","sm":"font-size-15","xlg":"font-size-15"},"letterSpacing":"letter-spacing-2","lineHeight":{"\u003csm":"lineheight-lg","lg":"lineheight-lg","sm":"lineheight-lg","xlg":"lineheight-lg"},"m":{"\u003csm":"{xs} 0","lg":"0 0 {s}","sm":"{xs} 0 {s}","xlg":"0.75rem 0 {s}"}},"item-dek-imageright-ad-big-story":{"pb":{"\u003csm":"0.45rem"}},"item-dek-imageright-big-story":{"mb":{"lg":"0"},"p":{"\u003csm":"{xxs} 0 0.45rem","sm":"{xs} 0 {s}"}},"item-dek-noimage-feature-ad-big-story-feed":{"paddingTop":{"_":"xxs","md":"xs"}},"item-dek-noimage-feature-big-story-feed":{"paddingTop":{"_":"xxs","md":"xs"}},"item-dek-stacked-feature-ad-big-story-feed":{"paddingTop":{"_":"xxs","md":"xs"}},"item-dek-stacked-feature-big-story-feed":{"paddingTop":{"_":"xxs","md":"xs"}},"item-dek-under-ad-big-story":{"pb":{"\u003csm":"0.45rem"}},"item-dek-under-big-story":{"pb":{"\u003csm":"0.45rem"}},"item-header-three-column":{"border":{"sm":"border-none-transparent"},"borderTop":"border-none-transparent","mb":{"\u003clg":"0","lg":"xxs","xlg":"xxs"},"p":{"\u003csm":"0","lg":"0","sm":"0","xlg":"0"}},"item-heading-three-column":{"borderTop":{"\u003csm":"border-med-black","sm":"border-thick-black"},"fontFamily":"secondary","fontSize":{"\u003csm":"font-size-30","lg":"font-size-24","sm":"font-size-24","xlg":"font-size-24"},"letterSpacing":"letter-spacing-2","lineHeight":{"\u003csm":"lineheight-base","lg":"lineheight-base","sm":"lineheight-base"},"mb":{"\u003csm":"xs","lg":"0","sm":"xs"},"p":"1rem 0.2rem 0.375rem","textAlign":{"\u003csm":"center","sm":"left"},"textTransform":"uppercase"},"item-image-link-big-story":{"mb":"0"},"item-image-link-big-story-feed":{"marginBottom":"0"},"item-imagelink-imageright-ad-big-story":{"img":{"height":"100%"},"mb":"0"},"item-imagelink-imageright-big-story":{"img":{"height":"100%"},"mb":"0"},"item-imageright-ad-big-story":{"bg":"bg-block-content-big-story-imageright-ad"},"item-imageright-big-story":{"bg":"bg-block-content-big-story-imageright"},"item-label-big-story-feed":{"mb":{"lg":"1.5625rem"}},"item-label-noimage-big-story":{"borderBottom":"border-xxs-white"},"item-publish-date-ad-three-column":{"\u0026:before":{"content":"''","display":"block"}},"item-publish-date-column-right-basefeed-big-story-feed":{"\u0026:before":{"content":"''","display":"block"}},"item-publish-date-four-across":{"\u0026:before":{"content":"''","display":"block"}},"item-publish-date-noimage-basefeed-big-story-feed":{"display":{"lg":"inline-block","sm":"block"}},"item-publish-date-noimage-feature-big-story-feed":{"color":"greyXXdark","display":{"lg":"inline-block","sm":"block"}},"item-publish-date-stacked-basefeed-big-story-feed":{"\u0026:before":{"content":"''","display":"block"}},"item-publish-date-three-column":{"\u0026:before":{"content":"''","display":"block"}},"item-stacked-basefeed-big-story-feed":{"bps":[{"options":{"size":"lg"},"value":{"\u0026:not(:first-of-type)":{"pl":"xxs"}}}]},"item-stacked-feature-big-story-feed":{"textAlign":"center"},"item-three-column":{"gridTemplateColumns":"40% 1fr","p":{"\u003csm":"{m} 0 0","lg":"{m} 0 {xs}","sm":"{s} 0 {xxs}"}},"item-title-ad-three-column":{"fontFamily":"secondary","fontSize":{"\u003csm":"font-size-17","lg":"font-size-16","sm":"font-size-16","xlg":"font-size-16"},"letterSpacing":"letter-spacing-3","lineHeight":{"\u003csm":"lineheight-md","lg":"lineheight-lg","sm":"lineheight-md","xlg":"lineheight-lg"},"pr":{"\u003csm":"s","lg":"2rem","sm":"2rem"}},"item-title-big-story-feed":{"fontSize":{"\u003csm":"font-size-34","lg":"font-size-32","sm":"font-size-34","xlg":"font-size-32"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","sm":"lineheight-sm","xlg":"lineheight-sm"},"mb":{"lg":"s"}},"item-title-column-right-basefeed-ad-big-story-feed":{"fontFamily":"primary","fontSize":{"\u003csm":"font-size-16","lg":"font-size-16","sm":"font-size-16","xlg":"font-size-16"},"lineHeight":{"\u003csm":"lineheight-md","lg":"lineheight-md","sm":"lineheight-md","xlg":"lineheight-md"}},"item-title-column-right-basefeed-big-story-feed":{"fontFamily":"secondary","fontSize":{"\u003csm":"font-size-19","lg":"font-size-18","sm":"font-size-18","xlg":"font-size-19"},"lineHeight":{"\u003csm":"lineheight-lg","lg":"lineheight-lg","sm":"lineheight-lg","xlg":"lineheight-lg"}},"item-title-four-across":{"fontFamily":"primary","fontSize":{"\u003csm":"font-size-16","lg":"font-size-16","sm":"font-size-16","xlg":"font-size-16"},"letterSpacing":{"\u003csm":"letter-spacing-n3","sm":"letter-spacing-3"},"lineHeight":{"\u003csm":"lineheight-md","lg":"lineheight-lg","sm":"lineheight-md","xlg":"lineheight-lg"},"m":{"\u003csm":"0.75rem 0 0","lg":"{s} 0 {xs}","sm":"{s} 0 0"}},"item-title-imageright-big-story":{"fontSize":{"\u003csm":"font-size-34","lg":"font-size-42","sm":"font-size-32","xlg":"font-size-48"},"letterSpacing":{"sm":"letter-spacing-n3"},"lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","sm":"lineheight-sm","xlg":"lineheight-sm"}},"item-title-noimage-basefeed-big-story-feed":{"display":{"\u003clg":"block","lg":"inline-block"},"fontFamily":"secondary","fontSize":{"\u003csm":"font-size-17","lg":"font-size-24","sm":"font-size-19","xlg":"font-size-26"},"lineHeight":{"\u003csm":"lineheight-md","lg":"lineheight-sm","sm":"lineheight-md","xlg":"lineheight-sm"}},"item-title-noimage-big-story":{"fontFamily":"tertiary","fontSize":{"\u003csm":"font-size-44","lg":"font-size-70","sm":"font-size-56","xlg":"font-size-96"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-xs","sm":"lineheight-xs","xlg":"lineheight-base"}},"item-title-noimage-feature-big-story-feed":{"display":{"lg":"inline-block"},"fontFamily":"secondary"},"item-title-stacked-basefeed-big-story-feed":{"fontFamily":"secondary","fontSize":{"\u003csm":"font-size-19","lg":"font-size-19","sm":"font-size-18","xlg":"font-size-19"},"lineHeight":{"\u003csm":"lineheight-lg","lg":"lineheight-lg","sm":"lineheight-lg","xlg":"lineheight-lg"},"m":{"\u003csm":"0.75rem 0 0","lg":"{s} 0 {xs}","sm":"{s} 0 0"}},"item-title-stacked-feature-big-story-feed":{"fontSize":{"\u003csm":"font-size-34","lg":"font-size-37","sm":"font-size-34","xlg":"font-size-38"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","sm":"lineheight-sm","xlg":"lineheight-sm"},"mb":{"lg":"s"}},"item-title-three-column":{"fontFamily":"secondary","fontSize":{"\u003csm":"font-size-17","lg":"font-size-16","sm":"font-size-16","xlg":"font-size-16"},"letterSpacing":"letter-spacing-3","lineHeight":{"\u003csm":"lineheight-lg","lg":"lineheight-lg","sm":"lineheight-md","xlg":"lineheight-lg"},"pr":{"\u003csm":"s","lg":"2rem","sm":"2rem"}},"label-2xs":{"fontSize":"font-size-13","lineHeight":"lineheight-sm"},"label-3xs":{"fontSize":"font-size-12","lineHeight":"lineheight-sm"},"label-4xs":{"fontSize":"font-size-11","lineHeight":"lineheight-sm"},"label-header-primary":{"fontFamily":"primary","fontSize":{"\u003csm":"font-size-22","lg":"font-size-18","md":"font-size-18"},"lineHeight":{"\u003csm":"lineheight-md","lg":"lineheight-md","md":"lineheight-md"}},"label-primary":{"WebkitTextStroke":{"\u003csm":"0.015rem","sm":"0"},"borderBottom":"border-xxs-black","fontFamily":"LabelPrimary","fontSize":{"\u003csm":"font-size-12","sm":"font-size-11"},"letterSpacing":{"\u003csm":"letter-spacing-20","sm":"letter-spacing-10"},"lineHeight":{"\u003csm":"lineheight-base","sm":"lineheight-base"},"m":{"\u003csm":"0 auto {m}","lg":"0 auto 2rem","sm":"0 auto {m}"},"pb":{"\u003csm":"0.1875rem","lg":"xxxs","sm":"0.125rem"},"textTransform":"uppercase","width":"fit-content"},"label-quaternary":{"display":"inline-block","fontFamily":"primary","fontSize":"font-size-12","fontWeight":"500","letterSpacing":"letter-spacing-20","lineHeight":"lineheight-sm","textTransform":"uppercase"},"label-quinary":{"fontFamily":"secondary","fontSize":"font-size-13","letterSpacing":"letter-spacing-10","textTransform":"uppercase"},"label-secondary":{"fontFamily":"primary","fontSize":"font-size-11","letterSpacing":"letter-spacing-10","lineHeight":"inherit","p":{"\u003csm":"0.4375rem {s}","sm":"{xxxs} {xs} 0.2rem"},"width":"fit-content"},"label-tag-primary":{"WebkitTextStroke":{"\u003csm":"0.015rem","sm":"0"},"bg":"none","borderBottom":"border-xxs-black","fontFamily":"LabelPrimary","fontSize":{"\u003csm":"font-size-12","sm":"font-size-11"},"fontWeight":"bold","letterSpacing":{"\u003csm":"letter-spacing-20","sm":"letter-spacing-10"},"lineHeight":{"\u003csm":"lineheight-base","sm":"lineheight-base"},"padding":"{xxs} 0","pb":{"\u003csm":"0.1875rem","lg":"xxxs","sm":"0.125rem"},"textTransform":"uppercase","width":"fit-content"},"label-tag-primary-darkbg":{"bg":"greyXXXdark","color":"white","fontFamily":"LabelPrimary","fontSize":"font-size-13","fontWeight":"bold","lineHeight":"lineheight-max","padding":"{xxxs} {xs}","textAlign":"center","textTransform":"uppercase","width":"fit-content"},"label-tertiary":{"fontFamily":"secondary","fontSize":"font-size-16","letterSpacing":"letter-spacing-10","textTransform":"uppercase"},"label-xs":{"fontSize":"font-size-14","lineHeight":"lineheight-sm"},"menu-primary":{"fontFamily":"MenuPrimary","fontSize":"font-size-14","lineHeight":"lineheight-max"},"menu-secondary":{"fontFamily":"MenuPrimary","fontSize":"font-size-11","textTransform":"uppercase"},"menu-tertiary":{"fontFamily":"primary","fontSize":"font-size-11","letterSpacing":"letter-spacing-10","lineHeight":"lineheight-lg","textTransform":"uppercase"},"nav-with-sponsor":{"bg":"white","borderBottom":"border-thin-grey"},"overlay-item-text":{"fontFamily":"primary","fontSize":"font-size-14","lineHeight":"lineheight-md"},"saved-headline-dek":{"fontFamily":"TitlePrimary","fontSize":"font-size-19","lineHeight":"lineheight-sm"},"saved-headline-primary":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-24","lg":"font-size-28"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","md":"lineheight-sm"}},"saved-headline-title":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-24","lg":"font-size-28"},"lineHeight":{"\u003csm":"lineheight-sm","lg":"lineheight-sm","md":"lineheight-sm"}},"small-specs-error-text-primary":{"color":"globalColorError","fontFamily":"Inter, Helvetica, Arial, Sans-serif","fontSize":"font-size-11","fontWeight":"normal","letterSpacing":"letter-spacing-6","lineHeight":"lineheight-xs"},"small-specs-label-text-primary":{"color":"greyXXdark","fontFamily":"primary","fontSize":"font-size-11","fontWeight":"normal","letterSpacing":"letter-spacing-6","lineHeight":"lineheight-xs","textTransform":"none"},"small-specs-label-text-secondary":{"color":"greyXXdark","fontFamily":"Inter, Helvetica, Arial, Sans-serif","fontSize":"font-size-11","fontWeight":"normal","letterSpacing":"letter-spacing-6","lineHeight":"lineheight-xs","textTransform":"none"},"specs-item-primary":{"fontFamily":"primary","fontSize":{"\u003csm":"font-size-16","lg":"font-size-14","md":"font-size-16"},"lineHeight":{"\u003csm":"lineheight-lg","lg":"lineheight-lg","md":"lineheight-lg"}},"spotlight-hed-dark":{"bg":"white"},"spotlight-hed-light":{"\u0026:hover":{"color":"grey"},"bg":"black"},"spotlight-label-dark":{"bg":"black"},"spotlight-label-light":{"bg":"white"},"subheadline-primary":{"fontFamily":"SubheadlinePrimary","fontSize":{"\u003csm":"font-size-24","lg":"2.18836","sm":"font-size-22"},"fontStyle":"italic","letterSpacing":{"lg":"letter-spacing-n3"},"lineHeight":{"\u003csm":"lineheight-xxs","lg":"lineheight-xxsmall","sm":"lineheight-sm"},"p":{"\u003csm":"0.1875rem 0 {xxs}","lg":"{xxs} 0 0.5rem","sm":"{xxs} 0 0","xlg":"0 0 1rem"}},"subheadline-secondary":{"fontFamily":"secondary","fontSize":{"\u003csm":"font-size-29","lg":"font-size-29","sm":"font-size-29"},"fontWeight":"normal","letterSpacing":"letter-spacing-3","lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","sm":"lineheight-xs"},"m":{"\u003csm":"0 auto {xxs}","lg":"0 auto {m}","sm":"0 auto {xxs}"},"p":{"\u003csm":"{s} {m} 0.8125rem","lg":"{m} 1.5rem {s}","sm":"{m} 1.5rem {s}"},"width":"fit-content"},"three-column-block-column":{"pb":{"\u003csm":"2.5rem","sm":"0"}},"title-primary":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-34","lg":"font-size-36","sm":"font-size-34","xlg":"font-size-38"},"fontWeight":"normal","lineHeight":{"\u003csm":"lineheight-xs","lg":"lineheight-xs","sm":"lineheight-sm","xlg":"lineheight-sm"},"mb":"xxs"},"title-quaternary":{"fontFamily":"TitlePrimary","fontSize":{"\u003csm":"font-size-18","lg":"font-size-18","md":"font-size-18"},"lineHeight":{"\u003csm":"lineheight-md","lg":"lineheight-md","md":"lineheight-md"}},"title-secondary":{"fontFamily":"primary","fontSize":{"\u003csm":"font-size-16","lg":"font-size-15","sm":"font-size-15","xlg":"font-size-15"},"fontWeight":"normal","lineHeight":{"\u003csm":"lineheight-lg","lg":"lineheight-lg","sm":"lineheight-lg","xlg":"lineheight-lg"},"m":{"\u003csm":"0.75rem 0 0","lg":"{s} 0 {xs}","sm":"{s} 0 0"}},"title-tertiary":{"fontFamily":"primary","fontSize":"font-size-22","lineHeight":"lineheight-lg"}}}}]},"isHomePage":false,"layoutContextProps":{"siteData":{"metadata":{"adConfig":{"bu":"HDM","site":"elle","zone":"/36117602/hdm-elle/","bidders":{"IX":{"d":{"ga":"670278","gb":"670282","la":"670277","lb":"670283","brk":"670280","garb":"670279","brkrr":"670281"},"m":{"ga":"670284","gb":"670285","lb":"670287","adh":"670288","brk":"670286"},"v":"942443"},"APN":{"d":{"ga":"24604090","gb":"10583083","la":"24604099","lb":"10583085","brk":"24604100","garb":"14355601","brkrr":"24604095"},"m":{"ga":"24604091","gb":"10583090","lb":"10583091","adh":"16120603","brk":"24604096"},"v":"14734335"},"KAR":{"m":{"gb":"_nMF2QdH1ml","lb":"_p7Ko2RIbMA","adh":"_zOZgxfrDJu","gabrk":"_jK-TsZqW2LI"},"v":"_wDGMy7ldvI"},"MAG":{"d":{"ga":"2040208","gb":"2040218","la":"2040206","lb":"2040220","brk":"2040212","garb":"2040210","brkrr":"2040216"},"m":{"ga":"2040222","gb":"2040224","lb":"2040230","adh":"2040232","brk":"2040226"},"v":"2731458","siteId":"369868","accountId":"11636"},"TDS":{"d":{"tdsArt":"112030","tdsBrk":"112029"},"m":{"tdsArt":"112029"},"pageId":"103512","pageIdDesktop300":"113863"},"TPL":{"d":{"ga":"elle_templated_300x400_atf_PB","gb":"elle_templated_300x400_btf_PB","lb":"elle_970x250_btf_PB","brkrr":"elle_templated_300x400_breaker_PB","la728":"elle_728x90_HDX_PB","la970":"elle_970x250_PB"},"m":{"ga":"elle_templated_300x250_flex_atf_m_PB","lb":"elle_templated_300x250_flex_btf_m_PB","adh":"Elle_320x50_HDX_PB","brk":"elle_templated_300x250_flex_breaker_m_PB"}},"TTD":{"d":{"ttd":"desktop"},"m":{"ttd":"mobile"},"v":"video","siteId":"hdm-elle","supplySourceId":"hearstmagazines"},"AMZN":"3049","APNhdmuk":{"d":{"ga":"23458937","gb":"23458938","la":"23458939","lb":"23458940","brk":"23458944","brkrr":"23458945"},"m":{"ga":"23458941","gb":"23458942","lb":"23458943","brk":"23458946"},"v":"23458947"}},"modules":{"ias":{"pubId":"931694"},"sst":{"server":"www-sst.elle.com"},"meta":{"id":"690796760981964","cur":"USD"},"optable":{"slug":"prod-elle-com","geoWhitelist":["US"]},"parsely":{"siteId":"elle.com"},"actionIQ":{"writeKey":"mediaos-elle-prod","cnameRecord":"https://aiq-in.elle.com","geoWhitelist":["US"]},"comscore":{"c2":6035258},"oneTrust":{"doNotSellUrlOverride":"/about/a42158564/do-not-sell-my-personal-information/"},"sailthru":{"ids":{"production":"2494399497a47e76bde000b4823d9a5a"}},"truedata":{"ep":"td.elle.com","cid":"10458","scid":"107"},"permutive":{"apiKey":"7d237500-e85c-4846-9eb8-5635df7b050c","locale":"US","currency":"USD","workspaceId":"eb036676-52ea-47b5-a2f6-fcfb4ece9c00","geoWhitelist":"US"},"optimizely":{"webSnippetId":"21018620252","webSnippetKey":"us_elle"},"trueAnthem":"hearst","blockthrough":{"id":"6316821519007744"},"brandMetrics":{"siteId":"elle.com","accountId":"a6a45799-d06f-4cce-9dd7-4a947f7e7816"},"googleAnalytics":{"measurementId":"G-BTTN4BQHSS"}},"adBundle":[],"settings":{"mobileStickyAds":true,"enableVerityTags":true},"siteList":["www.elle.com"]},"commerce":{"cons":"Cons","pros":"Pros","affiliate":{"url":"https://assets.hearstapps.com/commerce/release/affiliate-bundle.master.js","amazon":{"market":"HMG-US","default":{"sem":"elle-lift-20","tag":"elle_auto-append-20","icxId":"10051","social":"elle-soc-lift-20"}},"skimlinks":{"market":"HMG-US","default":{"url":"//s.skimresources.com/js/74968X1525074.skimlinks.js"}},"trackonomics":{"cipd2":"ell"}}},"ciam":{"clientId":"2e2g0m0g4ingh5rkear3fldeb5","loginURL":"https://www.mylo.id"},"copyright":"Hearst Magazine Media, Inc. All Rights Reserved.","defaults":{"config_ds":{"recircConfig":[{"heading":"What to Read Next"},{"sections":["culture"],"displayTypes":["standard-article","longform-article","listicle"]}]},"siteAddress":{"postalCode":"10019","addressRegion":"NY","streetAddress":"300 W 57th Street","addressCountry":"US","addressLocality":"New York"},"parentOrganization":{"url":"https://www.hearst.com/magazines","sameAs":["https://en.wikipedia.org/wiki/Hearst_Magazines","https://www.instagram.com/hearstmagazines/","https://www.linkedin.com/company/hearst-magazines/posts/"],"parentOrgAddress":{"postalCode":"10019","addressRegion":"NY","streetAddress":"300 W 57th Street","addressCountry":"US","addressLocality":"New York"}}},"icxSiteId":"10051","networkName":"Hearst Fashion and Luxury Collection","networkTagLine":"A Part of Hearst Digital Media","oneTrustDomainId":"e435627f-2ac9-4bec-82c7-15e57b0250a3","optimizely":{"webSnippetId":"21018620252","webSnippetKey":"us_elle"},"siteAcronym":"ELL","social":{"networks":{"x":{"socialUrl":"https://twitter.com/ElleMagazine"},"line":[],"qzone":[],"weibo":[],"douyin":[],"tiktok":{"socialUrl":"https://www.tiktok.com/@ellemagazine?lang=en"},"tumblr":{"socialUrl":"http://elle.tumblr.com/"},"twitter":{"handle":"@ELLEmagazine","socialUrl":"https://twitter.com/ElleMagazine"},"youtube":{"socialUrl":"https://www.youtube.com/c/elle?sub_confirmation=1"},"facebook":{"appId":"364664413547847","iaAppId":"31911516300","socialUrl":"https://www.facebook.com/ellemagazine"},"instagram":{"socialUrl":"http://instagram.com/elleusa"},"pinterest":{"socialUrl":"http://www.pinterest.com/elle/?auto_follow=1"},"wikipedia":{"socialUrl":"https://en.wikipedia.org/wiki/Elle_(magazine)"},"googleplus":{"socialUrl":"https://plus.google.com/+ELLE/posts","webmasterTools":"W6SOBCzCmb2sA5l3z9YK1yO7I7bPYArVQCP09_e2zck"}}}},"brand":{"name":"ELLE","slug":"elle"},"bookmarksConfig":{"accountMenuLabel":"My Bookmarks"},"locale":{"country":"US","name":"United States","language":"en"}},"canonicalUrl":"https://www.elle.com/culture/career-politics/","isAdsFree":false,"isCDN":true,"isGDPR":true,"isHomePage":false,"isLoggedIn":false,"isUSUserLocation":false,"menuItems":[{"title":"Countries-Panel","children":[{"id":"1a900d72-3c7b-4cd1-b8ea-8c6cb2ac7ff6","title":"US","url":"/","new_tab":false,"nofollow":false},{"id":"d426d07c-c4e6-4f09-ac57-18390a6eda2e","title":"UK","url":"/uk/","new_tab":false,"nofollow":false},{"id":"e1824256-f33a-48f1-b3ab-264449c495aa","title":"España","url":"/es/","new_tab":false,"nofollow":false},{"id":"097cc1ce-9d51-495b-bc03-2bfa59b5bbc3","title":"Italia","url":"/it/","new_tab":false,"nofollow":false},{"id":"61dcdea5-3791-470f-996c-1efec95b3b59","title":"Nederland","url":"/nl/","new_tab":false,"nofollow":false},{"id":"0ba9eac9-7e50-44a2-ac05-93ab1fd00222","title":"China","url":"https://www.ellechina.com/","new_tab":false,"nofollow":false},{"id":"23738702-9591-4d79-a2e0-e9c7e8836d2e","title":"Taiwan","url":"/tw/","new_tab":false,"nofollow":false},{"id":"9f3feb43-7403-4848-8f3f-2df9a16a15cf","title":"Japan","url":"/jp/","new_tab":false,"nofollow":false}]},{"title":"Footer","children":[{"id":"ea78626b-3b17-4af1-a293-dfe8f2212a5f","title":"Newsletter","url":"/email/elle-newsletter","new_tab":false,"nofollow":true},{"id":"60d79393-27b8-4dfe-8015-f61d470f05b5","title":"Contact Us","url":"/about/a39561967/about-us-contact-information-masthead/","new_tab":false,"nofollow":false},{"id":"0b4486d6-da9d-4ebb-833a-df680d7db066","title":"Media Kit","url":"http://www.ellemediakit.com/r5/home.asp","new_tab":true,"nofollow":false},{"id":"652eac18-7028-4a79-a138-7beb0151e2a2","title":"Press Room","url":"https://www.hearst.com/news","new_tab":true,"nofollow":true},{"id":"6d24e342-7f16-463f-b03b-590563646c78","title":"Site Map","url":"/sitemap/","new_tab":false,"nofollow":false},{"id":"886c0b85-7053-415c-bbac-82a0ff96218f","title":"Community Guidelines","url":"/about/community-guidelines/","new_tab":false,"nofollow":true},{"id":"f5785685-6c53-4cf8-9887-11e07ffd5266","title":"Advertise Online","url":"/about/advertise-online/","new_tab":false,"nofollow":true},{"id":"d7acf8d1-b435-4302-a517-f3a4e52d511f","title":"Customer Service","url":"/about/a62753332/customer-service-subscriptions/","new_tab":true,"nofollow":true},{"id":"ffc18c54-a12c-40e4-95cb-1963ca132dbb","title":"Subscribe","url":"https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_footer","new_tab":true,"nofollow":false},{"id":"4472947b-b0dd-46e1-84e4-6f0cad888e15","title":"Events \u0026 Promotions","url":"/elleextra/","new_tab":false,"nofollow":true},{"id":"475d39d7-e5ed-47c0-b72a-7ae9cc919e0c","title":"Other Hearst Subscriptions","url":"https://w1.buysub.com/pubs/HR/A14/Hearst_Subscription_FAQs.jsp?cds_mag_code=A14\u0026cds_page_id=265990","new_tab":true,"nofollow":true},{"id":"e3d824dc-8ac2-40d6-b34e-2d90a03dc9ef","title":"Giveaways","url":"/sweepstakes/","new_tab":true,"nofollow":true}]},{"title":"Footer-Legal","children":[{"id":"a9e3d002-cddf-4174-9d29-5b6bc6dbb8e7","title":"Privacy Notice","url":"https://www.hearst.com/-/us-magazines-privacy-notice","new_tab":true,"nofollow":false},{"id":"658c1fa2-12f0-4a96-aadd-22f73113109d","title":"CA Notice at Collection","url":"https://www.hearst.com/-/us-magazines-privacy-notice#_ADDITIONAL_INFO","new_tab":true,"nofollow":false},{"id":"b3f5e0dc-2f5d-4fe7-ab6c-359f4681f1fc","title":"Your CA Privacy Rights/Shine the Light","url":"https://www.hearst.com/-/us-magazines-privacy-notice#_ADDITIONAL_INFO","new_tab":true,"nofollow":false},{"id":"216342a9-9c4b-49b3-8787-c1f46fbac274","title":"DAA Industry Opt Out","url":"https://www.hearst.com/-/us-magazines-privacy-notice#_OPT_OUTS","new_tab":true,"nofollow":false},{"id":"9940feb8-5b1b-4cc7-be05-a32504e364c8","title":"Terms of Use","url":"https://www.hearst.com/-/us-magazines-terms-of-use","new_tab":true,"nofollow":false},{"id":"96f599e7-7627-47c2-b561-7313c2269c64","title":"Site Map","url":"/sitemap/","new_tab":false,"nofollow":false}]},{"title":"Panel","children":[{"id":"dd097861-e75a-46ae-a224-e0efc12a8e1d","title":"Subscribe","url":"https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_panelnav","new_tab":false,"nofollow":false},{"id":"517a6be5-f0c1-4867-8f6d-718c91fccaae","title":"Fashion","url":"/fashion/","new_tab":false,"nofollow":false,"children":[{"id":"e8669e47-41e2-424a-9408-95be260c430e","title":"Trends","url":"/fashion/trend-reports/","new_tab":false,"nofollow":false},{"id":"c8956635-78e0-48f3-bf58-0f3b09877904","title":"Celebrity Style","url":"/fashion/celebrity-style/","new_tab":false,"nofollow":false},{"id":"5d42281a-9828-4d8b-8d3a-5594063590c9","title":"Designers","url":"/fashion-designers/","new_tab":false,"nofollow":false},{"id":"5353e1f7-1066-4ddf-a607-1961cf2a2ee3","title":"Street Style","url":"/fashion/street-style/","new_tab":false,"nofollow":false},{"id":"8078050f-d093-4375-9792-c43709a8b521","title":"Runway","url":"/runway/","new_tab":false,"nofollow":false},{"id":"423f5572-697f-40c0-b828-21a83c192d46","title":"Accessories","url":"/fashion/accessories/","new_tab":false,"nofollow":false}]},{"id":"08995921-8958-4592-a505-63679f0cf27c","title":"Beauty","url":"/beauty/","new_tab":false,"nofollow":false,"children":[{"id":"3e397838-64e5-49e6-88cf-ffe1c33e8e72","title":"Hair","url":"/beauty/hair/","new_tab":false,"nofollow":false},{"id":"b6a9cad7-3ca9-49e1-8867-a7a516046264","title":"Makeup \u0026 Skin Care","url":"/beauty/makeup-skin-care/","new_tab":false,"nofollow":false},{"id":"c688cea9-444d-4a6e-9f09-8862da37ae54","title":"Health \u0026 Fitness","url":"/beauty/health-fitness/","new_tab":false,"nofollow":false},{"id":"70a501ab-59d0-4f27-b0bd-5c3847af2869","title":"Perfumes \u0026 Fragrances","url":"/perfumes-fragrances/","new_tab":false,"nofollow":false}]},{"id":"ace20d59-e685-4c9b-ada7-c6aaeba09259","title":"Culture","url":"/culture/","new_tab":false,"nofollow":false,"children":[{"id":"e1c426a3-0e4e-4284-8699-5c44cd4198f6","title":"Celebrity","url":"/culture/celebrities/","new_tab":false,"nofollow":false},{"id":"e52f9f59-b21c-4fee-9d5d-75d1b6275735","title":"Movies \u0026 TV","url":"/culture/movies-tv/","new_tab":false,"nofollow":false},{"id":"f4560437-1751-49e0-a6dd-fc3954ac228c","title":"Music","url":"/culture/music/","new_tab":false,"nofollow":false},{"id":"bc1c11b9-25d7-4def-ba7d-14cb6f7b7d82","title":"Books","url":"/culture/books/","new_tab":false,"nofollow":false},{"id":"5fe378a1-6e87-4d7e-bd1c-cec21d4f4aa4","title":"Travel \u0026 Food","url":"/culture/travel-food/","new_tab":false,"nofollow":false},{"id":"b56d4b3c-00e8-4dbf-a2b3-08216aef3543","title":"Art \u0026 Design","url":"/culture/art-design/","new_tab":false,"nofollow":false}]},{"id":"f12d672f-37dc-4805-823c-e65ab60879a6","title":"Horoscopes","url":"/horoscopes/","new_tab":false,"nofollow":false,"children":[{"id":"5c65a52b-a847-4b35-9d95-ba2f43c94865","title":"Daily Horoscopes","url":"/horoscopes/daily/","new_tab":false,"nofollow":false},{"id":"8dac34bc-8f92-4172-818f-50fba789e3bc","title":"Weekly Horoscopes","url":"/horoscopes/weekly/","new_tab":false,"nofollow":false},{"id":"0408a32e-c4ff-48e7-9725-986112768961","title":"Monthly Horoscopes","url":"/horoscopes/monthly/","new_tab":false,"nofollow":false},{"id":"dc33f95c-61f8-447e-bfda-330c19a9070f","title":"Astrological Profiles","url":"/horoscopes/profile/","new_tab":false,"nofollow":false},{"id":"cefaa56a-e8bd-4097-bfef-96b9c2a7b144","title":"Love Matches","url":"/horoscopes/love/","new_tab":false,"nofollow":false}]},{"id":"9cc95521-a80e-411e-b434-222c7d35e84a","title":"News \u0026 Politics","url":"/culture/career-politics/","new_tab":false,"nofollow":false},{"id":"980e4a19-78f5-4fe6-8b57-8cb770d69992","title":"In the Magazine","url":"/in-the-mag/","new_tab":false,"nofollow":false},{"id":"8cc2d907-ebb7-4aee-b015-f3b6025ddff7","title":"Weddings","url":"/weddings/","new_tab":false,"nofollow":false},{"id":"c7c3a9c1-0e53-45e3-ab7a-0ec9e357462d","title":"Newsletter","url":"https://www.elle.com/email/elle-newsletter","new_tab":true,"nofollow":true},{"id":"caa61f07-e98c-4c1f-a460-081962305c6e","title":"Follow","url":"#","new_tab":false,"nofollow":false,"children":[{"id":"3bde0974-3222-452f-9cd7-e778e25cc319","title":"Facebook","url":"https://www.facebook.com/ellemagazine","new_tab":false,"nofollow":false},{"id":"84296151-6e42-4cb5-bb43-1a8cb97bb0dc","title":"X","url":"https://x.com/ElleMagazine","new_tab":false,"nofollow":false},{"id":"e9288c4b-ab7b-4b4f-855a-8366a59fba92","title":"Instagram","url":"http://instagram.com/elleusa","new_tab":false,"nofollow":false},{"id":"f1386579-053b-4a68-8dba-67e5e565de27","title":"YouTube","url":"https://www.youtube.com/c/elle?sub_confirmation=1","new_tab":false,"nofollow":false}]}]},{"title":"Subscribe","children":[{"title":"Subscribe","url":"https://shop.elle.com/elle-all-access-membership-1.html?cds_tracking_code=elm_topnav","new_tab":false,"nofollow":false}]},{}],"menuLinks":{"Top":[{"id":"f8a40a66-a7dc-46cf-9a36-7b03161fb1b3","title":"Fashion","url":"/fashion/","new_tab":false,"aria-current":false},{"id":"1c6f9edd-1fd5-478a-8bdc-9e2d89424431","title":"Beauty","url":"/beauty/","new_tab":false,"aria-current":false},{"id":"bac3951d-7616-4d14-8d34-4b0e659dee02","title":"Culture","url":"/culture/","new_tab":false,"aria-current":false},{"id":"a338e3c6-c48b-4be1-85d8-4d47e04ac4b0","title":"Horoscopes","url":"/horoscopes/","new_tab":false,"aria-current":false},{"id":"034fe53d-c630-4dba-92b7-12b8ccd52475","title":"News \u0026 Politics","url":"/culture/career-politics/","new_tab":false,"aria-current":true},{"id":"e28180fd-670b-4630-a4bd-fa707d017bdd","title":"In the Magazine","url":"/in-the-mag/","new_tab":false,"aria-current":false}]},"pageId":"d9953fe4-ffd3-4736-8852-7b8880704e8d","pageType":"subsection","selfHostedAffiliateEnabled":true,"siteId":"530bacd4-96b2-4cfe-a9a6-1fbd7c749e22","tagManager":{"dev":"mag-dev","default":"mag"},"tagOptions":{},"video":{"gaVideoDiagTracking":"true","gaVideoBrandName":"Elle","icxVideoDomainId":"7303"}},"template":{"display":"subsection"}},"__N_SSP":true,"appProps":{"providerData":{"scopeManager":{"scopes":{"@site":"elle_en-us","@locale":"en-us","@brand":"elle","@client":"hdm","@app":"fre"},"asset":"/_assets/design-tokens","media":"/design-tokens","selected":{"865286506872020891":{"scope":"elle","hash":"bf092aa","metadata":{}},"10793083781296108510":{"scope":"elle","hash":"0dd915e","metadata":{}},"294021650101657":{"scope":"fre","hash":"433da0a","metadata":{}},"7945971511296108510":{"scope":"(NOT_SET)"},"16210375671296108510":{"scope":"(NOT_SET)"},"948601947872020891":{"scope":"fre","hash":"f1c199c","metadata":{}},"622986035872020891":{"scope":"fre","hash":"1ceaaeb","metadata":{}},"17452905571296108510":{"scope":"elle","hash":"75b69ee","metadata":{"fallbacks":{"mobile":{"fallbackFont":"Roboto","sizeAdjust":["102.57%","104.04%"],"ascentOverride":["93.50%","92.17%"],"descentOverride":["26.81%","26.43%"]},"sansSerif":{"fallbackFont":"Arial","sizeAdjust":["102.88%","96.40%"],"ascentOverride":["93.22%","99.48%"],"descentOverride":["26.73%","28.53%"]},"serif":{"fallbackFont":"Georgia","sizeAdjust":["103.56%","96.95%"],"ascentOverride":["92.61%","98.92%"],"descentOverride":["26.56%","28.37%"]}}}},"2141149703872020891":{"scope":"fre","hash":"38e3324","metadata":{}},"1280396420872020891":{"scope":"fre","hash":"3f172dc","metadata":{}},"3505127971296108510":{"scope":"fre","hash":"c8ad008","metadata":{"fallbacks":{"mobile":{"fallbackFont":"Roboto","sizeAdjust":["107.32%","106.36%"],"ascentOverride":["90.27%","91.08%"],"descentOverride":["22.50%","22.70%"]},"sansSerif":{"fallbackFont":"Arial","sizeAdjust":["107.64%","98.55%"],"ascentOverride":["90.00%","98.30%"],"descentOverride":["22.43%","24.50%"]},"serif":{"fallbackFont":"Georgia","sizeAdjust":["108.35%","99.11%"],"ascentOverride":["89.41%","97.75%"],"descentOverride":["22.29%","24.37%"]}}}},"588148124872020891":{"scope":"fre","hash":"cf1782e","metadata":{}},"14425694531021153286":{"scope":"elle","hash":"2856426","metadata":{}},"8533254961296108510":{"scope":"elle","hash":"1a09c0e","metadata":{"fallbacks":{"mobile":{"fallbackFont":"Roboto","sizeAdjust":["94.13%","98.44%"],"ascentOverride":["79.68%","76.19%"],"descentOverride":["26.56%","25.40%"],"lineGapOverride":["32.93%","31.49%"]},"sansSerif":{"fallbackFont":"Arial","sizeAdjust":["94.41%","91.21%"],"ascentOverride":["79.44%","82.23%"],"descentOverride":["26.48%","27.41%"],"lineGapOverride":["32.83%","33.99%"]},"serif":{"fallbackFont":"Georgia","sizeAdjust":["95.04%","91.73%"],"ascentOverride":["78.92%","81.76%"],"descentOverride":["26.31%","27.25%"],"lineGapOverride":["32.62%","33.80%"]}}}},"1699537151296108510":{"scope":"elle","hash":"269d6f7","metadata":{"fallbacks":{"mobile":{"fallbackFont":"Roboto","sizeAdjust":["96.61%","100.45%"],"ascentOverride":["77.63%","74.67%"],"descentOverride":["25.88%","24.89%"],"lineGapOverride":["32.09%","30.86%"]},"sansSerif":{"fallbackFont":"Arial","sizeAdjust":["96.90%","93.07%"],"ascentOverride":["77.40%","80.59%"],"descentOverride":["25.80%","26.86%"],"lineGapOverride":["31.99%","33.31%"]},"serif":{"fallbackFont":"Georgia","sizeAdjust":["97.54%","93.59%"],"ascentOverride":["76.89%","80.13%"],"descentOverride":["25.63%","26.71%"],"lineGapOverride":["31.78%","33.12%"]}}}},"20259639833116128":{"scope":"elle","hash":"45f08cd","metadata":{}},"7380371641296108510":{"scope":"elle","hash":"242fea1","metadata":{}},"1221623699101657":{"scope":"fre","hash":"3361b6d","metadata":{}},"820672235101657":{"scope":"fre","hash":"603c377","metadata":{}},"1976414978101657":{"scope":"fre","hash":"ce3e1ae","metadata":{}},"914434039101657":{"scope":"fre","hash":"a5a3a69","metadata":{}},"628614349101657":{"scope":"fre","hash":"f282b14","metadata":{}},"750460747101657":{"scope":"fre","hash":"e8cf655","metadata":{}}},"manifestUrl":"https://static-assets.hearstapps.com/design-tokens/manifest.json"},"flags":{"fre.seogra.breadcrumbs":1,"fre.content.enable-privacy-disclaimer":1,"cover-stories":1,"ecommerce.enable-embedded-experience":"(NOT_SET)","seo.syndicated-content.no-noindex":1,"seo.block-meta-ai-crawler":1,"ecommerce.load-pulse-script":"(NOT_SET)","fre.piano.int":"(NOT_SET)","content-pass.enable":0,"enable-sso":1,"enable-google-one-tap":1,"enable-microsoft-quick-auth":1,"fre.notifications.batch":0,"fre.notifications.appier":"(NOT_SET)","display-search":1,"fre.show-magnifying-glass-icon-only":"(NOT_SET)","location-choice":1,"fre.location-choice.display-generic-title":1,"fre.do-not-sell-link":1,"search.fre.display-top-navigation":0,"fre.top-navigation.gift-lab":"(NOT_SET)","fre.enable-my-stuff":1,"enable-avatar-menu":1,"enable-google-one-tap-tooltip":"(NOT_SET)","fre.enable-jam-journey":1,"fre.jam-journey.enable-top-slim-banner":1,"fre.seogra.breadcrumbs-with-collections":1,"fre.commerce.use-affiliate_url":1,"seo.feed-page-pagination":0,"custom-feeds.short-heds":0,"video.priority-to-use-preview-image":"(NOT_SET)","fre.enable-fastly-image":0,"fre.enable-home-page-newsletter":0,"fre.piano.hosted-content-module":"(NOT_SET)","new-nav":1,"fre.cds.enable-paywall":1,"fre.piano.enable-paywall":0,"fre.jam-journey.enable-modals":1,"fre.jam-journey.enable-meters":1,"fre.jam-journey.enable-post-registration-modals":0,"mobile-adhesion-unit":1,"content-editor.content-body.preview-blocker":0},"lazy":{"P0-0":[[6314]],"P0-2":[[30554],2],"P0-3":[[14210]],"P0-4":[[60999]],"P0-5":[[16217]],"P0-7":[[92848,15265]],"P0-8":[[16382,15017,15265,6979]],"P0-9":[[22367,15265]],"P0-10":[[16382,15017,15265]],"P0-11":[[22367,6979,15265]],"P0-12":[[16382,15017,15265]],"P0-13":[[22367,15265]],"P0-14":[[33532]],"P0-15":[[39669]]},"translations":{"app":{"ad-breaker-text-main":"Advertisement - Continue Reading Below"},"common":{"account":"account","close":"Close","cookie_choices":"Cookies Choices","do_not_sell_info_footer":"Your Privacy Choices: Opt Out of Sale/Targeted Ads","do_not_sell_info_sidepanel":"Your Privacy Choices","login":"sign in","other_editions":"Other Editions","privacyNotice":"Privacy Notice","sidepanel":"Side Panel","search":"Search","skipToContent":"Skip to Content","termsOfUse":"Terms Of Use"},"content":{"affiliate-disclosure-footer":"We may earn commission from links on this page, but we only recommend products we back.","image":{"fallback-alt":"This is an image","no-longer-available":"Image no longer available"},"why-trust-us":"Why Trust Us?"},"date":{"format":""}}}}},"page":"/_templates/feed","query":{},"buildId":"1797c57357","assetPrefix":"/_assets/fre/scopes/hdm","runtimeConfig":{"APP_ENVIRONMENT":"production","APP_VERSION":"0.12.190","DEFAULT_FETCH_TIMEOUT":"2000","RUNTIME_INSURANCE_PUBLISHER_KEY":"dGVk90VVSURz","RUNTIME_INSURANCE_ADUNIT_KEY":"jAgnNJlb","RUNTIME_TRADE_TOOL_APP_URL":"https://app.blackbookinformation.com","RUNTIME_USE_SENTRY":"1","RUNTIME_RESIN_ASSETS_URL":"https://cdsshopprod-assets.resin.com","RUNTIME_ENABLE_RECAPTCHA":"true","RUNTIME_OPEN_WEB_ENABLED":"1","RUNTIME_PUBLIC_IMAGE_HOSTNAME":"https://hips.hearstapps.com/hmg-prod","RUNTIME_MICROSOFT_AUTH_CLIENT_ID":"952b8b0a-eccb-4fa4-90ca-13796e19166f","RUNTIME_GLIMMER_BUNDLE_FILE":"player.js","RUNTIME_GRAPHQL_TIMEOUT":"12000","RUNTIME_SPEEDCURVE_URL":"https://cdn.speedcurve.com/js/lux.js?id=231332287","RUNTIME_PAYMENT_CAPTURE_SCRIPT_URL":"https://paymentcapture.resin.com/v1/payment-capture.js","RUNTIME_RECAPTCHA_KEY":"6LcygTohAAAAALJc9PUf8gwQA5bdSdXK34HDB_5l","RUNTIME_SLIDES_PER_PAGE_OVERLAY":"10","RUNTIME_NITEHAWK_URL":"https://nitehawk.hearst.io","RUNTIME_INSURANCE_API_URL":"https://api.trvmarketplace.com/click/v1/auto","RUNTIME_TRADE_TOOL_SCRIPT_URL":"https://app.blackbookinformation.com/app/shopping-tools-js/v1.js","RUNTIME_GRAPHQL_URL":"https://heimdall.hearstapps.com","RUNTIME_SLIDES_PER_PAGE_LIST":"30","RUNTIME_ORDER_INTAKE_URL":"https://api.resin.com/orders","RUNTIME_TCF_API_TIMEOUT":"2000","RUNTIME_BUY_SUB_URL":"https://optout.hearstmags.com/servlet/OrdersGateway?cds_mag_code=A99\u0026amp;cds_page_id=246801","RUNTIME_PUBLIC_FILE_HOSTNAME":"https://hmg-h-cdn.hearstapps.com","RUNTIME_CIAM_AUTH_URLS":"https://auth.mylo.id","RUNTIME_GLIMMER_BUNDLE_PATH":"8.91.0","RUNTIME_RUFUS_HOSTNAME":"https://preferencecenter.hearstmags.com","RUNTIME_JOKER_URL":"https://joker.hearstgames.com","RUNTIME_INSURANCE_LICENSE_KEY":"afb7f38f-6470-445f-b583-28ae8e1ed325","RUNTIME_TRADE_TOOL_DEALER_ID":"0441002","RUNTIME_CIAM_UI_URLS":"https://www.mylo.id","RUNTIME_GLIMMER_BUNDLE_PREFIX":"/_assets/glimmer","RUNTIME_VIDEO_PLAYER_URL":"https://glimmer.hearstapps.com","RUNTIME_CIAM_DATA_URL":"https://ciam-data.kubeprod.hearstapps.com/graphql","RUNTIME_GRAPHQL_TIMEOUT_FEED":"20000","RUNTIME_TRUECAR_SHOPPING_URL":"https://shopping.caranddriver.com","RUNTIME_RIDDLER_GAME_URL":"https://riddler.hearstgames.com","RUNTIME_GOOGLE_AUTH_CLIENT_ID":"966691262229-s6tftim27cpahri78teloejj82ms26hh.apps.googleusercontent.com","RUNTIME_SLIDES_PER_PAGE_GRID":"5","RUNTIME_JAM_SCRIPT_URL":"https://jam.hearstapps.com","RUNTIME_PRODUCTS_TIMEOUT":"30000","RUNTIME_CUSTOM_EVENT_DISPATCHER_URL":"https://oply.hearstapps.com/v1/events","RUNTIME_PUBLIC_IMAGE_DOMAIN":"https://hips.hearstapps.com","RUNTIME_MEDIA_GATEWAY_URL":"https://media.hearstapps.com","RUNTIME_INSURANCE_PANEL_ADUNIT_KEY":"DuS9oM6s","RUNTIME_PRODUCTS_URL":"https://products.hearstapps.com","RUNTIME_CONCORDE_URL":"https://search.hearstapps.com","RUNTIME_GRAPHQL_TOKEN":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6Imp3dF9zZWNyZXRfZnJlIn0.e30.wlF-prqbR7gQ28qeFJrGOTKcct5p5jzNfrO6NBcc7C8","RUNTIME_AFFILIATE_BUNDLE_VERSION":"8.4.4","RUNTIME_CARS_FOR_SALE_MODULE_URL":"/inventory","RUNTIME_LIVE_STREAM_URL":"https://player.vimeo.com/video/","RUNTIME_LIVE_STREAM_CHAT":"https://vimeo.com/live-chat/","RUNTIME_VIMEO_STREAM_URL":"https://vimeo.com/event/","RUNTIME_THEME_SLUG":"","RUNTIME_NEXT_LAZY":""},"isFallback":false,"isExperimentalCompile":false,"dynamicIds":[35261,13231,92688,10020],"gssp":true,"scriptLoader":[]}</script>
    <script
        id="build-manifest">window.__BUILD_MANIFEST_CB = function () { return new Promise(((e, n) => { document.body.appendChild(Object.assign(document.createElement("script"), { src: "/_assets/fre/scopes/hdm/_next/static/1797c57357/_buildManifest.js", onload: e, onerror: n })) })) };</script>
    <script type="text/javascript"
        id="font-loader">(() => { const e = navigator?.connection?.effectiveType; if (e && "4g" !== e) return; const { search: n } = window.location; if (n.includes("disableFonts")) return; const t = document, o = () => { const e = t.getElementById("deferred-fonts"); e && (e.media = "all") }; "interactive" === document.readyState ? o() : window.addEventListener("DOMContentLoaded", o) })();</script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="/resources/js/app.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="">
    <link href="
    https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.2.6/dist/css/datepicker.min.css"
        rel="stylesheet">
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }

        ::after,
        ::before {
            --tw-content: "";
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal;
        }

        body {
            margin: 0;
            line-height: inherit;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px;
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco,
                Consolas, "Liberation Mono", "Courier New", monospace;
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

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0;
        }

        button,
        select {
            text-transform: none;
        }

        [type="button"],
        [type="reset"],
        [type="submit"],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
        }

        :-moz-focusring {
            outline: auto;
        }

        :-moz-ui-invalid {
            box-shadow: none;
        }

        progress {
            vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        summary {
            display: list-item;
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        textarea {
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        [role="button"],
        button {
            cursor: pointer;
        }

        :disabled {
            cursor: default;
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        [hidden] {
            display: none;
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        .relative {
            position: relative;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .ml-4 {
            margin-left: 1rem;
        }

        .mt-16 {
            margin-top: 4rem;
        }

        .mt-6 {
            margin-top: 1.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .-mt-px {
            margin-top: -1px;
        }

        .mr-1 {
            margin-right: 0.25rem;
        }

        .flex {
            display: flex;
        }

        .inline-flex {
            display: inline-flex;
        }

        .grid {
            display: grid;
        }

        .h-16 {
            height: 4rem;
        }

        .h-7 {
            height: 1.75rem;
        }

        .h-6 {
            height: 1.5rem;
        }

        .h-5 {
            height: 1.25rem;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .w-auto {
            width: auto;
        }

        .w-16 {
            width: 4rem;
        }

        .w-7 {
            width: 1.75rem;
        }

        .w-6 {
            width: 1.5rem;
        }

        .w-5 {
            width: 1.25rem;
        }

        .max-w-7xl {
            max-width: 80rem;
        }

        .shrink-0 {
            flex-shrink: 0;
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x),
                    var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .gap-6 {
            gap: 1.5rem;
        }

        .gap-4 {
            gap: 1rem;
        }

        .self-center {
            align-self: center;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity));
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from),
                var(--tw-gradient-to);
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent,
                var(--tw-gradient-to);
        }

        .bg-center {
            background-position: center;
        }

        .stroke-red-500 {
            stroke: #ef4444;
        }

        .stroke-gray-400 {
            stroke: #9ca3af;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .font-semibold {
            font-weight: 600;
        }

        .leading-relaxed {
            line-height: 1.625;
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity));
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline;
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored);
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem;
        }

        .focus\:outline:focus {
            outline-style: solid;
        }

        .focus\:outline-2:focus {
            outline-width: 2px;
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444;
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563;
        }

        .z-10 {
            z-index: 10;
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x),
                        var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5);
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2);
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left,
                        var(--tw-gradient-stops));
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563;
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity));
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow),
                    var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset;
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05);
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af;
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed;
            }

            .sm\:top-0 {
                top: 0px;
            }

            .sm\:right-0 {
                right: 0px;
            }

            .sm\:ml-0 {
                margin-left: 0px;
            }

            .sm\:flex {
                display: flex;
            }

            .sm\:items-center {
                align-items: center;
            }

            .sm\:justify-center {
                justify-content: center;
            }

            .sm\:justify-between {
                justify-content: space-between;
            }

            .sm\:text-left {
                text-align: left;
            }

            .sm\:text-right {
                text-align: right;
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem;
            }

            .lg\:p-8 {
                padding: 2rem;
            }
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif @endauth
                </div>
            @endif

            @auth
                <div class="grid grid-cols-3 gap-8 w-full mx-10">
                    <div class="bg-red-300 col-span-2">
                        Testing 1

                        <form class="mx-5 py-3">

                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                    address</label>

                                <label for="category_label"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Label</label>
                                <select id="category_label"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Choose a ...</option>
                                    <option value="project">Project</option>
                                    <option value="meeting">Meeting</option>
                                    <option value="unproductive">Unproductive</option>
                                </select>

                            </div>
                            <div class="mb-6">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea style="resize: none" id="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="•••••••••" required>
                            </textarea>
                            </div>
                            <div class="mb-6">

                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-orientation="bottom right" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date" id="datepickerId">
                                </div>

                            </div>

                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>

                    </div>
                    <div class="bg-red-300 col-span-1">Testing 2</div>
                </div>
            @else
                <div
                    class="w-50 p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-96 mb-5 m-auto">
                        <img src="{{ asset('images/wongko.svg') }}" alt="wonki" class="h-auto w-full">
                    </div>
                    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Hola!</h5>
                    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Welcome to Employee Activity Tracker.
                        Please <a href="{{ route('register') }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">register</a> or <a
                            href="{{ route('login') }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">login</a> to
                        continue
                    </p>
                    {{-- <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                        <a href="#"
                            class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="currentColor"
                                    d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                                </path>
                            </svg>
                            <div class="text-left rtl:text-right">
                                <div class="mb-1 text-xs">Download on the</div>
                                <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
                            </div>
                        </a>
                        <a href="#"
                            class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                            <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                                data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                                </path>
                            </svg>
                            <div class="text-left rtl:text-right">
                                <div class="mb-1 text-xs">Get in on</div>
                                <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                            </div>
                        </a>
                    </div> --}}
                </div>
            @endauth

        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="
            https://cdn.jsdelivr.net/npm/flowbite-datepicker@1.2.6/dist/js/datepicker-full.min.js
            "></script>
    <script>
        const datepickerEl = document.getElementById('datepickerId');
        const today = new Date();
        const minDay = new Date();
        switch (today.getDay()) {
            case 1:
                minDay.setDate(today.getDate() - 3);
                break;

            default:
                minDay.setDate(today.getDate() - 1);

                break;
        }
        new Datepicker(datepickerEl, {
            maxDate: today,
            minDate: minDay

        });
        // console.log(today.getDay());
    </script>

    </html>

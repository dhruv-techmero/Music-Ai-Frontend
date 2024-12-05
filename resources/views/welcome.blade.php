<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('website-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/embeded.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/style.css') }}">
</head>
<style>
  
</style>
<body>
<div id="__next">
    <main class="md:h-[100vh] lg:h-[100vh]">
        <div class="hidden lg:block h-full bg-black border-r border-gray-900 fixed cursor-default z-20 w-[80px]" style="transition: width 0.3s ease-in-out;">
            <div class="h-full py-3 sticky top-0 z-10 bg-transparent flex flex-col justify-between gap-2 overflow-y-auto overflow-x-hidden">
                <div>
                    <a class="w-full py-2 px-4 border-l-4 border-transparent text-left hover:bg-white/15 transition duration-500 flex items-center gap-2" href="/">
                        <span class="w-8 h-8 rounded-xl inline-flex items-center justify-center">
                            <span>
                                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-8 fill-[#d946ef]" preserveAspectRatio="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M513 456.8c-31.1 0-56.4 25.2-56.4 56.4s25.2 56.4 56.4 56.4 56.4-25.3 56.4-56.4c0-31.2-25.2-56.4-56.4-56.4z"></path>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M513 405.3c-59.5 0-107.9 48.4-107.9 107.8 0 59.5 48.4 107.9 107.9 107.9 59.5 0 107.9-48.4 107.9-107.9 0-59.4-48.4-107.8-107.9-107.8z m0 176.7c-38 0-68.8-30.9-68.8-68.8s30.9-68.8 68.8-68.8c38 0 68.8 30.9 68.8 68.8S550.9 582 513 582zM589.6 420.5l188.2-226.7c-14.2-11.8-29.2-22.6-44.9-32.4L576.4 411.2c4.6 2.8 9.1 5.9 13.2 9.3zM436.1 605.5L246.5 831c14.3 12 29.4 23 45.2 33l157.4-249.1c-4.5-2.8-8.9-5.9-13-9.4z"
                                    ></path>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M392.7 513.2c0-66.3 53.9-120.3 120.3-120.3 19.7 0 38.3 4.8 54.7 13.3l132-263.5C643.5 114.3 580.1 98.2 513 98.2c-228.8 0-415 186.2-415 415 0 50.1 8.9 98.2 25.3 142.8l276.9-101.3c-4.7-13-7.5-26.9-7.5-41.5zM903.2 372l-277.6 99.5c4.8 13 7.6 27 7.6 41.7 0 66.3-54 120.3-120.3 120.3-19.9 0-38.6-4.9-55.2-13.5l-135 261.9c57 29.6 121.7 46.4 190.2 46.4 228.8 0 415-186.2 415-415 0.1-49.7-8.6-97.2-24.7-141.3z"
                                    ></path>
                                </svg>
                            </span>
                        </span>
                    </a>
                    <div class="w-full mt-6 text-sm text-neutral-50 flex flex-col items-start">
                        <a class="w-full py-2 px-4 border-l-4 flex items-center gap-2 border-[#d946ef] bg-white/15 text-[#d946ef]" href="/app">
                            <span class="w-8 h-8 rounded-xl bg-[#d946ef] inline-flex items-center justify-center">
                                <span>
                                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-800" preserveAspectRatio="none">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M316.416 952.32c-46.08 0-92.16-10.24-135.168-30.72-75.776-35.84-133.12-99.328-160.768-178.176-27.648-78.848-23.552-163.84 12.288-239.616C107.52 348.16 294.912 281.6 451.584 355.328c61.44 29.696 111.616 77.824 143.36 138.24L708.608 256c37.888-78.848 132.096-112.64 210.944-74.752l61.44 29.696c25.6 12.288 36.864 43.008 24.576 69.632-25.6 53.248-60.416 73.728-84.992 80.896-31.744 10.24-67.584 6.144-103.424-11.264l-1.024-1.024c-4.096-2.048-8.192-1.024-10.24-1.024-2.048 1.024-5.12 2.048-7.168 7.168 0 0-197.632 413.696-199.68 418.816-35.84 75.776-99.328 133.12-178.176 160.768-33.792 11.264-69.632 17.408-104.448 17.408z m0-571.392c-96.256 0-188.416 54.272-232.448 146.432-29.696 62.464-33.792 132.096-10.24 196.608S143.36 841.728 205.824 871.424c62.464 29.696 132.096 32.768 196.608 10.24 64.512-22.528 116.736-69.632 146.432-132.096 2.048-4.096 199.68-418.816 199.68-418.816 8.192-16.384 22.528-29.696 39.936-35.84 17.408-6.144 36.864-5.12 53.248 3.072h1.024c15.36 7.168 39.936 15.36 62.464 8.192 19.456-6.144 35.84-22.528 49.152-48.128l-58.368-27.648c-51.2-24.576-112.64-3.072-136.192 48.128L638.976 532.48c-8.192 17.408-24.576 27.648-44.032 27.648s-35.84-11.264-44.032-28.672c-24.576-54.272-68.608-99.328-122.88-124.928-36.864-17.408-73.728-25.6-111.616-25.6z"
                                        ></path>
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M311.296 758.784c-61.44 0-111.616-50.176-111.616-111.616s50.176-111.616 111.616-111.616 111.616 50.176 111.616 111.616-50.176 111.616-111.616 111.616z m0-167.936c-30.72 0-56.32 25.6-56.32 56.32s25.6 56.32 56.32 56.32 56.32-25.6 56.32-56.32c-1.024-30.72-25.6-56.32-56.32-56.32z"
                                        ></path>
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <a class="w-full py-2 px-4 border-l-4 flex items-center gap-2 border-transparent" href="/sound-effect">
                            <span class="w-8 h-8 rounded-xl bg-white/70 inline-flex items-center justify-center">
                                <span>
                                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-800" preserveAspectRatio="none">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M683.652 232.318l197.262-93.506c18.689-9.223 26.362-31.851 17.139-50.54-9.018-18.272-30.912-26.085-49.46-17.65L629.762 174.353a37.732 37.732 0 0 0-21.569 34.095V490.64a173.916 173.916 0 0 0-99.467-31.152c-96.455 0-174.933 78.471-174.933 174.933 0 96.455 78.471 174.927 174.933 174.927 96.455 0 174.926-78.471 174.926-174.927V232.318zM508.719 733.894c-54.852 0-99.474-44.621-99.474-99.468 0-54.846 44.621-99.468 99.474-99.468s99.474 44.615 99.474 99.461c0 54.848-44.621 99.475-99.474 99.475zM349.142 481.39c14.337-6.213 20.921-22.877 14.702-37.214s-22.877-20.927-37.214-14.702c-38.868 16.853-68.85 47.828-84.413 87.237-15.57 39.408-14.859 82.514 2 121.382 6.221 14.335 22.88 20.918 37.22 14.708 14.338-6.218 20.92-22.882 14.702-37.22a101.372 101.372 0 0 1-1.283-78.075 101.276 101.276 0 0 1 54.286-56.116z m-91.732-91.331c14.338-6.218 20.92-22.882 14.702-37.22-6.218-14.338-22.882-20.92-37.22-14.702-120.024 52.061-175.33 192.062-123.282 312.092 6.221 14.335 22.88 20.918 37.22 14.708 14.338-6.218 20.92-22.882 14.702-37.22-39.635-91.399 2.478-198.01 93.878-237.658z m538.11 251.7c-5.123-14.767-21.246-22.585-36.013-17.462-14.767 5.122-22.585 21.246-17.462 36.013 18.437 53.148-9.803 111.384-62.945 129.827-14.829 4.932-22.853 20.952-17.92 35.781s20.952 22.853 35.781 17.92c0.231-0.077 0.461-0.156 0.689-0.239 82.621-28.668 126.526-119.213 97.87-201.84z m129.305 5.76c-5.495-14.638-21.815-22.05-36.453-16.555-14.119 5.3-21.605 20.738-17.022 35.105 15.821 45.59 12.935 94.619-8.124 138.046-21.059 43.427-57.764 76.056-103.36 91.865-14.767 5.122-22.585 21.246-17.462 36.013 5.122 14.767 21.246 22.585 36.013 17.462 59.877-20.77 108.082-63.618 135.732-120.659 27.648-57.021 31.44-121.4 10.676-181.277z"
                                        ></path>
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <a class="w-full py-2 px-4 border-l-4 flex items-center gap-2 border-transparent" href="/library">
                            <span class="w-8 h-8 rounded-xl bg-white/70 inline-flex items-center justify-center">
                                <span>
                                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-800" preserveAspectRatio="none">
                                        <path
                                            fill="evenodd"
                                            clip-rule="evenodd"
                                            d="M885.333333 256H138.666667a53.393333 53.393333 0 0 0-53.333334 53.333333v576a53.393333 53.393333 0 0 0 53.333334 53.333334h746.666666a53.393333 53.393333 0 0 0 53.333334-53.333334V309.333333a53.393333 53.393333 0 0 0-53.333334-53.333333zM624.84 596.42a21.333333 21.333333 0 0 1-26.593333-14.246667C593.333333 566 586.18 552 577.513333 541.8a64.24 64.24 0 0 0-13.333333-12 21.473333 21.473333 0 0 1-2.953333-2.366667q-3.38-3.233333-6.586667-6.813333V725.333333c0 23.626667-12.22 46.34-33.526667 62.32C501.333333 802.493333 475.38 810.666667 448 810.666667s-53.333333-8.173333-73.14-23.013334c-21.333333-16-33.526667-38.666667-33.526667-62.32s12.22-46.34 33.526667-62.32C394.666667 648.173333 420.62 640 448 640c23.333333 0 45.666667 5.946667 64 16.893333V405.333333a21.333333 21.333333 0 0 1 20.773333-21.333333h0.56a21.333333 21.333333 0 0 1 21.333334 20.22c0.74 14.14 3.52 35.473333 12.553333 56.78 5.833333 13.753333 13.546667 25.613333 22.36 34.42a107.46 107.46 0 0 1 20.493333 18.78c12.6 14.853333 22.373333 33.573333 29.04 55.626667a21.333333 21.333333 0 0 1-14.273333 26.593333zM512 725.333333c0 23.126667-29.333333 42.666667-64 42.666667s-64-19.54-64-42.666667 29.333333-42.666667 64-42.666666 64 19.54 64 42.666666zM170.666667 106.666667a21.333333 21.333333 0 0 1 21.333333-21.333334h640a21.333333 21.333333 0 0 1 0 42.666667H192a21.333333 21.333333 0 0 1-21.333333-21.333333z m-42.666667 85.333333a21.333333 21.333333 0 0 1 21.333333-21.333333h725.333334a21.333333 21.333333 0 0 1 0 42.666666H149.333333a21.333333 21.333333 0 0 1-21.333333-21.333333z"
                                        ></path>
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <span class="w-full h-[1px] my-4 bg-neutral-900"></span>
                        <a class="w-full py-2 px-4 border-l-4 border-transparent flex items-center gap-2 hover:bg-white/15 text-amber-500 transition duration-500 flex items-center gap-2" href="/pricing">
                            <span class="w-8 h-8 rounded-xl inline-flex items-center justify-center">
                                <span>
                                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-amber-500" preserveAspectRatio="none">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M805.4 928.9H218.6c-42.5 0-78.8-30.2-85.5-72.2L70.1 486c-6.1-37.9 11.8-74.2 46.1-91.6 34.3-17.4 74.2-11.8 101.4 15.9l82.9 82.9L470 332.9l-41-40.4c-43.5-45.6-43-118.8 1.5-163.3s117.8-45.6 163.3-1.5l0.5 0.5c22 22 34.3 51.2 34.3 82.4S616.3 271 594.3 293L554 333.4l169.5 160.3 82.9-82.9c27.1-27.1 67.1-33.8 101.4-15.9 34.3 17.4 52.2 53.8 46.1 91.6l-63 371.2c-6.7 40.4-43 71.2-85.5 71.2z"
                                        ></path>
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <div class="w-full">
                            <button class="w-full py-2 px-4 border-l-4 border-transparent text-left hover:bg-white/15 transition duration-500 flex items-center gap-2" fdprocessedid="6hxhj8">
                                <span class="w-8 h-8 rounded-xl inline-flex items-center justify-center">
                                    <span>
                                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-300" preserveAspectRatio="none">
                                            <path
                                                fill="evenodd"
                                                clip-rule="evenodd"
                                                d="M512 80c238.587 0 432 193.413 432 432S750.587 944 512 944c-102.428 0-199.432-35.805-276.496-100.062-13.573-11.318-15.402-31.497-4.084-45.07 11.318-13.574 31.496-15.403 45.07-4.085C342.154 849.535 424.69 880 512 880c203.24 0 368-164.76 368-368S715.24 144 512 144c-87.31 0-169.846 30.465-235.51 85.217-13.574 11.318-33.752 9.489-45.07-4.085-11.318-13.573-9.49-33.752 4.084-45.07C312.568 115.805 409.572 80 512 80z"
                                            ></path>
                                            <path
                                                fill="evenodd"
                                                clip-rule="evenodd"
                                                d="M728.333 489.373c12.372 12.371 12.496 32.353 0.371 44.877l-0.371 0.377-169.706 169.706c-12.496 12.497-32.758 12.497-45.254 0-12.372-12.372-12.496-32.354-0.372-44.878l0.372-0.377L660.45 512 513.373 364.922C501 352.55 500.877 332.568 513 320.044l0.372-0.377c12.371-12.372 32.353-12.496 44.877-0.371l0.377 0.371 169.706 169.706z"
                                            ></path>
                                            <path fill="evenodd" clip-rule="evenodd" d="M96 480h566c17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32H96c-17.673 0-32-14.327-32-32 0-17.673 14.327-32 32-32z"></path>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:hidden block w-full px-4 py-2 bg-black fixed top-0 left-0 cursor-default z-20">
            <div class="w-full flex items-center justify-between gap-2">
                <a aria-label="Home" class="p-2 flex items-center gap-2" href="/">
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-8 fill-[#d946ef]" preserveAspectRatio="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M513 456.8c-31.1 0-56.4 25.2-56.4 56.4s25.2 56.4 56.4 56.4 56.4-25.3 56.4-56.4c0-31.2-25.2-56.4-56.4-56.4z"></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M513 405.3c-59.5 0-107.9 48.4-107.9 107.8 0 59.5 48.4 107.9 107.9 107.9 59.5 0 107.9-48.4 107.9-107.9 0-59.4-48.4-107.8-107.9-107.8z m0 176.7c-38 0-68.8-30.9-68.8-68.8s30.9-68.8 68.8-68.8c38 0 68.8 30.9 68.8 68.8S550.9 582 513 582zM589.6 420.5l188.2-226.7c-14.2-11.8-29.2-22.6-44.9-32.4L576.4 411.2c4.6 2.8 9.1 5.9 13.2 9.3zM436.1 605.5L246.5 831c14.3 12 29.4 23 45.2 33l157.4-249.1c-4.5-2.8-8.9-5.9-13-9.4z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M392.7 513.2c0-66.3 53.9-120.3 120.3-120.3 19.7 0 38.3 4.8 54.7 13.3l132-263.5C643.5 114.3 580.1 98.2 513 98.2c-228.8 0-415 186.2-415 415 0 50.1 8.9 98.2 25.3 142.8l276.9-101.3c-4.7-13-7.5-26.9-7.5-41.5zM903.2 372l-277.6 99.5c4.8 13 7.6 27 7.6 41.7 0 66.3-54 120.3-120.3 120.3-19.9 0-38.6-4.9-55.2-13.5l-135 261.9c57 29.6 121.7 46.4 190.2 46.4 228.8 0 415-186.2 415-415 0.1-49.7-8.6-97.2-24.7-141.3z"
                            ></path>
                        </svg>
                    </span>
                    <span class="text-xl font-extrabold bg-clip-text text-transparent bg-gradient-to-tr from-[#d946ef] to-emerald-400 truncate">Song Generator</span>
                </a>
                <div class="w-fit">
                    <button class="text-sm font-medium text-neutral-300 inline-flex items-center justify-center gap-1 cursor-pointer">
                        <span>
                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-300" preserveAspectRatio="none">
                                <path
                                    fill="evenodd"
                                    clip-rule="evenodd"
                                    d="M512 80c238.587 0 432 193.413 432 432S750.587 944 512 944c-102.428 0-199.432-35.805-276.496-100.062-13.573-11.318-15.402-31.497-4.084-45.07 11.318-13.574 31.496-15.403 45.07-4.085C342.154 849.535 424.69 880 512 880c203.24 0 368-164.76 368-368S715.24 144 512 144c-87.31 0-169.846 30.465-235.51 85.217-13.574 11.318-33.752 9.489-45.07-4.085-11.318-13.573-9.49-33.752 4.084-45.07C312.568 115.805 409.572 80 512 80z"
                                ></path>
                                <path
                                    fill="evenodd"
                                    clip-rule="evenodd"
                                    d="M728.333 489.373c12.372 12.371 12.496 32.353 0.371 44.877l-0.371 0.377-169.706 169.706c-12.496 12.497-32.758 12.497-45.254 0-12.372-12.372-12.496-32.354-0.372-44.878l0.372-0.377L660.45 512 513.373 364.922C501 352.55 500.877 332.568 513 320.044l0.372-0.377c12.371-12.372 32.353-12.496 44.877-0.371l0.377 0.371 169.706 169.706z"
                                ></path>
                                <path fill="evenodd" clip-rule="evenodd" d="M96 480h566c17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32H96c-17.673 0-32-14.327-32-32 0-17.673 14.327-32 32-32z"></path>
                            </svg>
                        </span>
                        Sign In
                    </button>
                </div>
            </div>
            <div class="w-full bg-transparent text-sm text-[#d946ef] flex items-center overflow-x-auto">
                <a class="w-full py-2 px-4 flex items-center gap-2 text-[#d946ef]" href="/app">
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-[#d946ef]" preserveAspectRatio="none">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M316.416 952.32c-46.08 0-92.16-10.24-135.168-30.72-75.776-35.84-133.12-99.328-160.768-178.176-27.648-78.848-23.552-163.84 12.288-239.616C107.52 348.16 294.912 281.6 451.584 355.328c61.44 29.696 111.616 77.824 143.36 138.24L708.608 256c37.888-78.848 132.096-112.64 210.944-74.752l61.44 29.696c25.6 12.288 36.864 43.008 24.576 69.632-25.6 53.248-60.416 73.728-84.992 80.896-31.744 10.24-67.584 6.144-103.424-11.264l-1.024-1.024c-4.096-2.048-8.192-1.024-10.24-1.024-2.048 1.024-5.12 2.048-7.168 7.168 0 0-197.632 413.696-199.68 418.816-35.84 75.776-99.328 133.12-178.176 160.768-33.792 11.264-69.632 17.408-104.448 17.408z m0-571.392c-96.256 0-188.416 54.272-232.448 146.432-29.696 62.464-33.792 132.096-10.24 196.608S143.36 841.728 205.824 871.424c62.464 29.696 132.096 32.768 196.608 10.24 64.512-22.528 116.736-69.632 146.432-132.096 2.048-4.096 199.68-418.816 199.68-418.816 8.192-16.384 22.528-29.696 39.936-35.84 17.408-6.144 36.864-5.12 53.248 3.072h1.024c15.36 7.168 39.936 15.36 62.464 8.192 19.456-6.144 35.84-22.528 49.152-48.128l-58.368-27.648c-51.2-24.576-112.64-3.072-136.192 48.128L638.976 532.48c-8.192 17.408-24.576 27.648-44.032 27.648s-35.84-11.264-44.032-28.672c-24.576-54.272-68.608-99.328-122.88-124.928-36.864-17.408-73.728-25.6-111.616-25.6z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M311.296 758.784c-61.44 0-111.616-50.176-111.616-111.616s50.176-111.616 111.616-111.616 111.616 50.176 111.616 111.616-50.176 111.616-111.616 111.616z m0-167.936c-30.72 0-56.32 25.6-56.32 56.32s25.6 56.32 56.32 56.32 56.32-25.6 56.32-56.32c-1.024-30.72-25.6-56.32-56.32-56.32z"
                            ></path>
                        </svg>
                    </span>
                    <span class="flex-1 truncate">Music generator</span>
                </a>
                <a class="w-full py-2 px-4 flex items-center gap-2 text-neutral-50" href="/sound-effect">
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-50" preserveAspectRatio="none">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M683.652 232.318l197.262-93.506c18.689-9.223 26.362-31.851 17.139-50.54-9.018-18.272-30.912-26.085-49.46-17.65L629.762 174.353a37.732 37.732 0 0 0-21.569 34.095V490.64a173.916 173.916 0 0 0-99.467-31.152c-96.455 0-174.933 78.471-174.933 174.933 0 96.455 78.471 174.927 174.933 174.927 96.455 0 174.926-78.471 174.926-174.927V232.318zM508.719 733.894c-54.852 0-99.474-44.621-99.474-99.468 0-54.846 44.621-99.468 99.474-99.468s99.474 44.615 99.474 99.461c0 54.848-44.621 99.475-99.474 99.475zM349.142 481.39c14.337-6.213 20.921-22.877 14.702-37.214s-22.877-20.927-37.214-14.702c-38.868 16.853-68.85 47.828-84.413 87.237-15.57 39.408-14.859 82.514 2 121.382 6.221 14.335 22.88 20.918 37.22 14.708 14.338-6.218 20.92-22.882 14.702-37.22a101.372 101.372 0 0 1-1.283-78.075 101.276 101.276 0 0 1 54.286-56.116z m-91.732-91.331c14.338-6.218 20.92-22.882 14.702-37.22-6.218-14.338-22.882-20.92-37.22-14.702-120.024 52.061-175.33 192.062-123.282 312.092 6.221 14.335 22.88 20.918 37.22 14.708 14.338-6.218 20.92-22.882 14.702-37.22-39.635-91.399 2.478-198.01 93.878-237.658z m538.11 251.7c-5.123-14.767-21.246-22.585-36.013-17.462-14.767 5.122-22.585 21.246-17.462 36.013 18.437 53.148-9.803 111.384-62.945 129.827-14.829 4.932-22.853 20.952-17.92 35.781s20.952 22.853 35.781 17.92c0.231-0.077 0.461-0.156 0.689-0.239 82.621-28.668 126.526-119.213 97.87-201.84z m129.305 5.76c-5.495-14.638-21.815-22.05-36.453-16.555-14.119 5.3-21.605 20.738-17.022 35.105 15.821 45.59 12.935 94.619-8.124 138.046-21.059 43.427-57.764 76.056-103.36 91.865-14.767 5.122-22.585 21.246-17.462 36.013 5.122 14.767 21.246 22.585 36.013 17.462 59.877-20.77 108.082-63.618 135.732-120.659 27.648-57.021 31.44-121.4 10.676-181.277z"
                            ></path>
                        </svg>
                    </span>
                    <span class="flex-1 truncate">Sound effect generator</span>
                </a>
                <a class="w-full py-2 px-4 flex items-center gap-2 text-neutral-50" href="/library">
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-50" preserveAspectRatio="none">
                            <path
                                fill="evenodd"
                                clip-rule="evenodd"
                                d="M885.333333 256H138.666667a53.393333 53.393333 0 0 0-53.333334 53.333333v576a53.393333 53.393333 0 0 0 53.333334 53.333334h746.666666a53.393333 53.393333 0 0 0 53.333334-53.333334V309.333333a53.393333 53.393333 0 0 0-53.333334-53.333333zM624.84 596.42a21.333333 21.333333 0 0 1-26.593333-14.246667C593.333333 566 586.18 552 577.513333 541.8a64.24 64.24 0 0 0-13.333333-12 21.473333 21.473333 0 0 1-2.953333-2.366667q-3.38-3.233333-6.586667-6.813333V725.333333c0 23.626667-12.22 46.34-33.526667 62.32C501.333333 802.493333 475.38 810.666667 448 810.666667s-53.333333-8.173333-73.14-23.013334c-21.333333-16-33.526667-38.666667-33.526667-62.32s12.22-46.34 33.526667-62.32C394.666667 648.173333 420.62 640 448 640c23.333333 0 45.666667 5.946667 64 16.893333V405.333333a21.333333 21.333333 0 0 1 20.773333-21.333333h0.56a21.333333 21.333333 0 0 1 21.333334 20.22c0.74 14.14 3.52 35.473333 12.553333 56.78 5.833333 13.753333 13.546667 25.613333 22.36 34.42a107.46 107.46 0 0 1 20.493333 18.78c12.6 14.853333 22.373333 33.573333 29.04 55.626667a21.333333 21.333333 0 0 1-14.273333 26.593333zM512 725.333333c0 23.126667-29.333333 42.666667-64 42.666667s-64-19.54-64-42.666667 29.333333-42.666667 64-42.666666 64 19.54 64 42.666666zM170.666667 106.666667a21.333333 21.333333 0 0 1 21.333333-21.333334h640a21.333333 21.333333 0 0 1 0 42.666667H192a21.333333 21.333333 0 0 1-21.333333-21.333333z m-42.666667 85.333333a21.333333 21.333333 0 0 1 21.333333-21.333333h725.333334a21.333333 21.333333 0 0 1 0 42.666666H149.333333a21.333333 21.333333 0 0 1-21.333333-21.333333z"
                            ></path>
                        </svg>
                    </span>
                    <span class="flex-1 truncate">Library</span>
                </a>
                <a class="w-full py-2 px-4 hover:bg-white/15 hover:text-amber-500 transition duration-500 flex items-center gap-2" href="/pricing">
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-amber-500" preserveAspectRatio="none">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M805.4 928.9H218.6c-42.5 0-78.8-30.2-85.5-72.2L70.1 486c-6.1-37.9 11.8-74.2 46.1-91.6 34.3-17.4 74.2-11.8 101.4 15.9l82.9 82.9L470 332.9l-41-40.4c-43.5-45.6-43-118.8 1.5-163.3s117.8-45.6 163.3-1.5l0.5 0.5c22 22 34.3 51.2 34.3 82.4S616.3 271 594.3 293L554 333.4l169.5 160.3 82.9-82.9c27.1-27.1 67.1-33.8 101.4-15.9 34.3 17.4 52.2 53.8 46.1 91.6l-63 371.2c-6.7 40.4-43 71.2-85.5 71.2z"
                            ></path>
                        </svg>
                    </span>
                    <span class="flex-1 truncate text-neutral-50">Upgrade now</span>
                </a>
            </div>
        </div>
        <section id="app" class="w-full h-full cursor-default pt-24 lg:pt-0 lg:pl-[80px]">
            <div class="w-full px-4 py-2 bg-black flex items-center justify-between gap-2 lg:hidden fixed top-0 left-0 z-10">
                <div class="w-[80%] flex items-center justify-end"><button class="text-sm font-semibold leading-6 text-gray-200 transition duration-200 hover:text-gray-50 inline-flex items-center cursor-pointer">Sign In</button></div>
            </div>
            <div class="w-full lg:h-full pt-2 pb-24 lg:py-0 flex bg-black items-start">
                <div class="hidden lg:flex w-full lg:w-72 h-full p-2 md:overflow-y-auto lg:overflow-y-auto bg-white/5 relative flex-col items-start gap-4">
                    <div class="w-full h-[94%] pr-2 overflow-y-auto">
                        <div class="w-full flex flex-col rounded-xl">
                            <div class="w-full mx-auto px-2 mb-2 grid grid-cols-1 gap-2">
                                <div class="w-full flex flex-col items-start gap-4">
                                    <div class="w-full flex flex-col items-start gap-2">
                                          <!-- Custom Mode Toggle -->
                                          <div class="w-full p-2 bg-white/10 rounded-lg flex items-center justify-between">
                                            <button
                                                type="button"
                                                role="switch"
                                                aria-checked="false"
                                                data-state="unchecked"
                                                value="on"
                                                class="peer inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input"
                                                id="custom-mode"
                                            >
                                                <span
                                                    data-state="unchecked"
                                                    class="pointer-events-none block h-4 w-4 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-4 data-[state=unchecked]:translate-x-0"
                                                ></span>
                                            </button>
                                            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-300" for="custom-mode">
                                                Custom Mode
                                            </label>
                                        </div>
                                        <!-- Description section (always visible) -->
                                        <div class="w-full flex flex-col items-start gap-2">
                                            <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm px-2 inline-flex items-center gap-1 text-gray-300" for="song-description">
                                                Song Description
                                                <button data-state="closed">
                                                    <span>
                                                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-gray-300" preserveAspectRatio="none">
                                                            <path
                                                                fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </label>
                                            <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-white/10 relative">
                                                <textarea
                                                    placeholder="Describe the style of music and the topic you want, AI will generate lyrics for you. "
                                                    class="w-full h-40 p-1 bg-transparent border-none text-sm text-white outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"
                                                ></textarea>
                                                <div class="w-full text-xs text-gray-400 text-right">0/199</div>
                                            </div>
                                        </div>

                                      

                                        <!-- Additional fields (hidden by default) -->
                                        <div class="w-full flex flex-col items-start gap-6 custom-fields" style="display: none;">
                                            <!-- Title Input -->
                                            <div class="w-full flex flex-col items-start gap-2">
                                                <label for="suno-title-music" class="text-sm px-2 inline-flex items-center gap-1 text-gray-300">
                                                    Title
                                                </label>
                                                <input 
                                                    type="text" 
                                                    name="suno-title-music" 
                                                    id="suno-title-music" 
                                                    class="w-full p-2 rounded-md border border-gray-500/20 bg-white/10 text-gray-100 text-sm shadow-sm ring-1 ring-inset ring-gray-500/20 placeholder:text-gray-400 focus:outline-none" 
                                                    placeholder="Enter a title"
                                                >
                                            </div>

                                            <!-- Style of Music Input -->
                                            <div class="relative w-full flex flex-col items-start gap-2">
                                                <label for="style-of-music" class="text-sm px-2 inline-flex items-center gap-1 text-gray-300">
                                                    Style of Music
                                                    <button type="button" data-state="closed">
                                                        <span>
                                                            <svg 
                                                                aria-hidden="true" 
                                                                viewBox="0 0 1024 1024" 
                                                                class="w-4 fill-gray-300" 
                                                                preserveAspectRatio="none"
                                                            >
                                                                <path 
                                                                    fill-rule="evenodd" 
                                                                    clip-rule="evenodd" 
                                                                    d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"
                                                                ></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </label>
                                                <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-white/10 relative">
                                                    <textarea 
                                                        id="style-of-music" 
                                                        placeholder="Enter style of music" 
                                                        class="w-full h-40 p-1 bg-transparent border-none text-sm text-white outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"
                                                    ></textarea>
                                                    <div class="absolute bottom-14 right-2 text-xs text-gray-400 text-right">
                                                        0/120
                                                    </div>
                                                    <div class="absolute bottom-2 left-2 max-w-full overflow-x-auto whitespace-nowrap">
                                                        <div class="pb-1 flex space-x-1 overflow-x-auto mr-4">
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">ethereal</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">funk</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">dreamy</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">male voice</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">anthemic</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">violin</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">intense</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">electric guitar</button>
                                                            <button class="font-sans text-white text-xs rounded-full px-3 py-1.5 bg-gray-400/20">pop</button>
                                                            <!-- Add more tags as needed -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Instrumental Toggle -->
                                            <div class="w-full flex flex-col items-start gap-2">
                                                <div class="w-full p-2 bg-white/10 rounded-lg flex items-center justify-between">
                                                    <button
                                                        type="button"
                                                        role="switch"
                                                        aria-checked="false"
                                                        data-state="unchecked"
                                                        value="on"
                                                        class="peer inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input"
                                                        id="instrumental"
                                                    >
                                                        <span
                                                            data-state="unchecked"
                                                            class="pointer-events-none block h-4 w-4 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-4 data-[state=unchecked]:translate-x-0"
                                                        ></span>
                                                    </button>
                                                    <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-300" for="instrumental">
                                                        Instrumental
                                                        <button data-state="closed">
                                                            <span>
                                                                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-gray-300" preserveAspectRatio="none">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"
                                                                        ></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-2">
                                <button aria-label="Create" class="w-full p-3 text-white rounded-lg font-medium bg-fuchsia-500 transition duration-500 hover:bg-fuchsia-600 flex items-center justify-center gap-1" fdprocessedid="2fu14">
                                    Generate Music
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full lg:flex-1">
    <div class="w-full h-auto lg:h-full flex flex-col lg:flex-row items-start">
        <div class="w-full lg:h-full relative overflow-hidden">
            <div class="w-full h-[400px] lg:h-[90%] p-4 pb-32 lg:p-10 overflow-y-auto">
                <div class="w-full">
                    <img
                        alt="cover"
                        loading="lazy"
                        width="100"
                        height="100"
                        decoding="async"
                        data-nimg="1"
                        class="w-full h-full object-cover blur-xl opacity-50 absolute top-0 left-0 z-[-1]"
                        src="https://tempfile.aiquickdraw.com/m/1733300491_ad3db66f530541aca56b83bd714b3bbe.png"
                        style="color: transparent;"
                    />
                    <div class="w-1/2 lg:w-1/3 mx-auto">
                        <div class="w-full aspect-square rounded-lg relative overflow-hidden">
                            <div class="w-full aspect-square relative">
                                <img
                                    alt="cover"
                                    loading="lazy"
                                    width="100"
                                    height="100"
                                    decoding="async"
                                    data-nimg="1"
                                    class="w-full h-full object-cover rounded-lg"
                                    src="https://tempfile.aiquickdraw.com/m/1733300491_ad3db66f530541aca56b83bd714b3bbe.png"
                                    style="color: transparent;"
                                />
                            </div>
                            <div class="w-full p-2 bg-black/35 text-gray-50 flex items-center justify-between gap-2 absolute bottom-0 left-0">
                                <div class="w-[80%] flex flex-col items-start gap-0.5">
                                    <p class="w-full font-semibold truncate">Mosaic of Harmony</p>
                                    <p class="text-xs text-gray-200 truncate">traditional, ethereal, indian classical, transcendent</p>
                                </div>
                                <p
                                    class="w-8 h-8 rounded-lg bg-black/40 hover:bg-fuchsia-600 inline-flex items-center justify-center cursor-pointer transform duration-500"
                                    type="button"
                                    aria-haspopup="dialog"
                                    aria-expanded="false"
                                    aria-controls="radix-:r6:"
                                    data-state="closed"
                                >
                                    <span>
                                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-white" preserveAspectRatio="none">
                                            <path
                                                fill="evenodd"
                                                clip-rule="evenodd"
                                                d="M214.016 200.192c-12.288-11.776-32.256-11.776-44.544 0-12.288 11.776-12.288 30.72 0 42.496l44.544 42.496c12.288 11.776 32.256 11.776 44.544 0 12.288-11.776 12.288-30.72 0-42.496l-44.544-42.496z m595.968 0l-44.544 42.496c-12.288 11.776-12.288 30.72 0 42.496 12.288 11.776 32.256 11.776 44.544 0l44.544-42.496c12.288-11.776 12.288-30.72 0-42.496-12.288-11.776-32.256-11.776-44.544 0zM135.168 437.248H72.704c-17.408 0-31.232 13.312-31.232 29.696 0 16.384 13.824 30.208 31.232 30.208h62.976c17.408 0 31.232-13.312 31.232-30.208 0-16.384-14.336-29.696-31.744-29.696z m816.128 0h-62.976c-17.408 0-31.232 13.312-31.232 29.696 0 16.384 13.824 30.208 31.232 30.208h62.976c17.408 0 31.232-13.312 31.232-30.208 0-16.384-13.824-29.696-31.232-29.696zM480.768 92.672v59.904c0 16.384 13.824 29.696 31.232 29.696 17.408 0 31.232-13.312 31.232-29.696V92.672c0-16.384-13.824-29.696-31.232-29.696-17.408-0.512-31.232 13.312-31.232 29.696zM229.376 512c0 148.992 126.464 269.824 282.624 269.824s282.624-120.832 282.624-269.824-126.464-269.824-282.624-269.824S229.376 363.008 229.376 512z m219.648 419.328c0 16.384 13.824 30.208 31.232 30.208h62.976c17.408 0 31.232-13.312 31.232-30.208 0-16.384-13.824-30.208-31.232-30.208H480.768c-17.408 0.512-31.744 13.824-31.744 30.208z m-62.464-89.6c0 16.384 13.824 30.208 31.232 30.208h188.416c17.408 0 31.232-13.312 31.232-30.208 0-16.384-13.824-30.208-31.232-30.208H417.792c-17.408 0-31.232 13.312-31.232 30.208z"
                                            ></path>
                                        </svg>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="w-full my-4 mx-auto flex items-center justify-between gap-2">
                            <div class="w-full text-gray-300 text-sm break-words whitespace-pre-line flex flex-col items-start gap-4">
                                [Verse] Dusk falls in the temple's light Chimes of bells take flight Veena's strings sing a tale In the moon's silvered pale [Verse 2] Rhythm of the tabla's dance Cascades of a soul's trance Echoes blend in
                                sacred halls As the ancient raga calls [Chorus] In the heart's deepest tone Lost in worlds we’ve never known Melodies that cleanse the air Find enlightenment in prayer [Bridge] Wings of sitar’s gentle hum
                                Past and present become one Timeless ties that bind our song Where tradition makes us strong [Verse 3] Voices rise in a silken thread Stories of the living and the dead Nature’s whispers join the choir Mystic
                                fire spirits inspire [Chorus] In the heart's deepest tone Lost in worlds we’ve never known Melodies that cleanse the air Find enlightenment in prayer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-20 bg-black/5 backdrop-blur-sm flex items-center justify-center absolute bottom-0 left-0">
                    <div role="group" tabindex="0" aria-label="Audio player" class="rhap_container rhap_loop--off rhap_play-status--paused w-full !py-6 !shadow-none">
                        <audio src="https://tempfile.aiquickdraw.com/s/021c8ae4ba8f414e892e4e74bf68a466.mp3" preload="auto"></audio>
                        <div class="rhap_main rhap_horizontal">
                            <div class="rhap_progress-section">
                                <div class="rhap_main-controls">
                                    <button aria-label="Rewind" class="rhap_button-clear rhap_main-controls-button rhap_rewind-button" type="button" fdprocessedid="xf6r3s">
                                        <span>
                                            <svg class="w-6 h-6 fill-gray-100" fill="none">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M6.22 11.03a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM3 6.75l-.53-.53a.75.75 0 0 0 0 1.06L3 6.75Zm4.28-3.22a.75.75 0 0 0-1.06-1.06l1.06 1.06ZM13.5 18a.75.75 0 0 0 0 1.5V18ZM7.28 9.97 3.53 6.22 2.47 7.28l3.75 3.75 1.06-1.06ZM3.53 7.28l3.75-3.75-1.06-1.06-3.75 3.75 1.06 1.06Zm16.72 5.47c0 2.9-2.35 5.25-5.25 5.25v1.5a6.75 6.75 0 0 0 6.75-6.75h-1.5ZM15 7.5c2.9 0 5.25 2.35 5.25 5.25h1.5A6.75 6.75 0 0 0 15 6v1.5ZM15 6H3v1.5h12V6Zm0 12h-1.5v1.5H15V18Z"
                                                ></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3 15.75h.75V21"></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M9 16.5A.75.75 0 0 0 9 15v1.5Zm-2.25-.75V15a.75.75 0 0 0-.75.75h.75Zm0 2.25H6c0 .414.336.75.75.75V18Zm0 2.25a.75.75 0 0 0 0 1.5v-1.5ZM9 15H6.75v1.5H9V15Zm-3 .75V18h1.5v-2.25H6Zm.75 3h1.5v-1.5h-1.5v1.5Zm1.5 1.5h-1.5v1.5h1.5v-1.5ZM9 19.5a.75.75 0 0 1-.75.75v1.5a2.25 2.25 0 0 0 2.25-2.25H9Zm-.75-.75a.75.75 0 0 1 .75.75h1.5a2.25 2.25 0 0 0-2.25-2.25v1.5Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button aria-label="Play" class="rhap_button-clear rhap_main-controls-button rhap_play-pause-button" type="button" fdprocessedid="xmznf9">
                                        <span>
                                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 h-6 fill-gray-100" preserveAspectRatio="none">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M385.237333 228.266667l350.933334 210.56c55.253333 33.152 55.253333 113.194667 0 146.346666L385.28 795.733333c-40.789333 24.490667-89.6 10.325333-113.92-24.149333l-0.042667 0.042667a42.666667 42.666667 0 1 0-73.216 43.946666l-0.085333 0.042667c47.36 72.533333 147.626667 103.424 231.168 53.333333l350.933333-210.602666c110.506667-66.304 110.506667-226.389333 0-292.693334l-350.933333-210.56C315.392 86.826667 170.666667 168.746667 170.666667 301.44V640a42.666667 42.666667 0 1 0 85.333333 0V301.44C256 235.093333 328.362667 194.133333 385.237333 228.266667z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button aria-label="Forward" class="rhap_button-clear rhap_main-controls-button rhap_forward-button" type="button" fdprocessedid="ncdmo8">
                                        <span>
                                            <svg class="w-6 h-6 fill-gray-100" fill="none">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M16.72 9.97a.75.75 0 1 0 1.06 1.06l-1.06-1.06ZM21 6.75l.53.53a.75.75 0 0 0 0-1.06l-.53.53Zm-3.22-4.28a.75.75 0 1 0-1.06 1.06l1.06-1.06ZM10.5 19.5a.75.75 0 0 0 0-1.5v1.5Zm3.75-4.5a.75.75 0 0 0 0 1.5V15Zm.75.75h.75A.75.75 0 0 0 15 15v.75ZM14.25 21a.75.75 0 0 0 1.5 0h-1.5Zm6-4.5a.75.75 0 0 0 0-1.5v1.5ZM18 15.75V15a.75.75 0 0 0-.75.75H18ZM18 18h-.75c0 .414.336.75.75.75V18Zm0 2.25a.75.75 0 0 0 0 1.5v-1.5Zm-.22-9.22 3.75-3.75-1.06-1.06-3.75 3.75 1.06 1.06Zm3.75-4.81-3.75-3.75-1.06 1.06 3.75 3.75 1.06-1.06ZM2.25 12.75A6.75 6.75 0 0 0 9 19.5V18a5.25 5.25 0 0 1-5.25-5.25h-1.5ZM9 6a6.75 6.75 0 0 0-6.75 6.75h1.5C3.75 9.85 6.1 7.5 9 7.5V6Zm0 1.5h12V6H9v1.5Zm0 12h1.5V18H9v1.5Zm5.25-3H15V15h-.75v1.5Zm0-.75V21h1.5v-5.25h-1.5Zm6-.75H18v1.5h2.25V15Zm-3 .75V18h1.5v-2.25h-1.5Zm.75 3h1.5v-1.5H18v1.5Zm1.5 1.5H18v1.5h1.5v-1.5Zm.75-.75a.75.75 0 0 1-.75.75v1.5a2.25 2.25 0 0 0 2.25-2.25h-1.5Zm-.75-.75a.75.75 0 0 1 .75.75h1.5a2.25 2.25 0 0 0-2.25-2.25v1.5Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div id="rhap_current-time" class="rhap_time rhap_current-time">00:00</div>
                                <div class="rhap_progress-container" aria-label="Audio progress control" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" tabindex="0">
                                    <div class="rhap_progress-bar rhap_progress-bar-show-download">
                                        <div class="rhap_progress-indicator" style="left: 0%;"></div>
                                        <div class="rhap_progress-filled" style="width: 0%;"></div>
                                        <div class="rhap_download-progress" style="left: 0%; width: 83%; transition-duration: 0s;"></div>
                                    </div>
                                </div>
                                <div class="rhap_time rhap_total-time">02:44</div>
                            </div>
                            <div class="rhap_controls-section">
                                <div class="rhap_volume-container">
                                    <button aria-label="Mute" type="button" class="rhap_button-clear rhap_volume-button" fdprocessedid="aktpg9">
                                        <span>
                                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 h-4 lg:w-5 lg:h-5 fill-gray-100" preserveAspectRatio="none">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M143.36 737.28a81.92 81.92 0 0 1-81.92-81.92V368.64a81.92 81.92 0 0 1 81.92-81.92h163.84l171.6224-148.74624A81.92 81.92 0 0 1 614.4 199.8848v624.2304a81.92 81.92 0 0 1-135.5776 61.91104L307.2 737.28H143.36z m684.83072-515.4816A358.07232 358.07232 0 0 1 962.56 501.76a358.07232 358.07232 0 0 1-134.36928 279.9616 30.72 30.72 0 0 1-38.46144-47.9232 296.63232 296.63232 0 0 0 111.4112-232.0384c0-91.40224-41.472-175.9232-111.4112-232.0384a30.72 30.72 0 1 1 38.46144-47.9232z m-114.9952 121.18016C772.7104 382.09536 808.96 444.14976 808.96 512c0 67.85024-36.2496 129.90464-95.76448 169.02144a30.72 30.72 0 1 1-33.75104-51.32288C722.3296 601.4976 747.52 558.32576 747.52 512s-25.21088-89.51808-68.07552-117.69856a30.72 30.72 0 1 1 33.75104-51.32288z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <div role="progressbar" aria-label="Volume control" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" tabindex="0" class="rhap_volume-bar-area">
                                        <div class="rhap_volume-bar"><div class="rhap_volume-indicator" style="left: 100%; transition-duration: 0s;"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 py-1 transition duration-300 group inline-flex items-center justify-center gap-2">
                        <span>
                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 transition duration-300 fill-white cursor-pointer group-hover:fill-[#d946ef]' : 'fill-neutral-500'" preserveAspectRatio="none">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M908.8 214.4c-9.6-12.8-19.2-22.4-28.8-32-112-115.2-230.4-105.6-342.4-16-9.6 6.4-19.2 16-28.8 25.6-9.6-9.6-19.2-16-28.8-25.6-112-86.4-230.4-99.2-342.4 16-9.6 9.6-19.2 19.2-25.6 32-134.4 195.2-60.8 387.2 137.6 560 44.8 38.4 89.6 73.6 137.6 102.4 16 9.6 32 19.2 44.8 28.8 9.6 6.4 12.8 9.6 19.2 9.6 3.2 3.2 6.4 3.2 12.8 6.4 3.2 3.2 9.6 3.2 16 6.4 25.6 6.4 64 3.2 89.6-12.8 3.2 0 9.6-3.2 16-9.6 12.8-6.4 28.8-16 44.8-28.8 48-28.8 92.8-64 137.6-102.4C969.6 598.4 1043.2 406.4 908.8 214.4zM736 732.8c-41.6 35.2-86.4 70.4-131.2 99.2-16 9.6-28.8 19.2-44.8 25.6-6.4 3.2-12.8 6.4-16 9.6-6.4 3.2-16 6.4-25.6 9.6-3.2 0-6.4 0-9.6 0-6.4 0-12.8 0-16 0-3.2 0-3.2 0-3.2 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0-3.2 0-3.2-3.2-3.2 0-6.4-3.2-9.6-3.2-3.2-3.2-9.6-6.4-16-9.6-12.8-6.4-28.8-16-44.8-25.6-44.8-28.8-89.6-60.8-131.2-99.2-179.2-160-243.2-323.2-131.2-489.6 6.4-9.6 16-16 22.4-25.6 89.6-96 182.4-86.4 275.2-12.8 9.6 6.4 16 12.8 22.4 19.2 0 0 0 0 0 0l28.8 32c3.2 3.2 3.2 3.2 6.4 6.4 0 0 0 0 0 0l0 0c3.2-3.2 9.6-9.6 16-16 12.8-12.8 25.6-25.6 41.6-38.4 92.8-73.6 185.6-83.2 275.2 12.8 6.4 9.6 16 16 22.4 25.6C982.4 406.4 918.4 572.8 736 732.8z"
                                ></path>
                            </svg>
                        </span>
                    </div>
                    <div class="px-2 py-1 transition duration-300 group inline-flex items-center justify-center gap-2 text-white hover:text-emerald-500 cursor-pointer">
                        <span>
                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 transition duration-300 fill-white group-hover:fill-[#d946ef]" preserveAspectRatio="none">
                                <path
                                    d="M874.666667 544c-17.066667 0-32 14.933333-32 32v256c0 6.4-4.266667 10.666667-10.666667 10.666667H192c-6.4 0-10.666667-4.266667-10.666667-10.666667V192c0-6.4 4.266667-10.666667 10.666667-10.666667h256c17.066667 0 32-14.933333 32-32s-14.933333-32-32-32H192C151.466667 117.333333 117.333333 151.466667 117.333333 192v640c0 40.533333 34.133333 74.666667 74.666667 74.666667h640c40.533333 0 74.666667-34.133333 74.666667-74.666667V576c0-17.066667-14.933333-32-32-32z"
                                    p-id="4223"
                                ></path>
                                <path
                                    d="M874.666667 117.333333H640c-17.066667 0-32 14.933333-32 32s14.933333 32 32 32h157.866667L509.866667 467.2c-12.8 12.8-12.8 32 0 44.8 6.4 6.4 14.933333 8.533333 23.466666 8.533333s17.066667-2.133333 23.466667-8.533333l285.866667-285.866667V384c0 17.066667 14.933333 32 32 32s32-14.933333 32-32V149.333333c0-17.066667-14.933333-32-32-32z"
                                    p-id="4224"
                                ></path>
                            </svg>
                        </span>
                    </div>
                    <div class="px-2 py-1 hover:text-emerald-500 cursor-pointer transition duration-300 group inline-flex items-center justify-center gap-2">
                        <span>
                            <svg aria-hidden="true" viewBox="0 0 1077 1024" class="w-[18px] fill-white transition duration-300 group-hover:fill-[#d946ef]" preserveAspectRatio="none">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M269.473684 0a53.894737 53.894737 0 0 1 6.305684 107.412211L269.473684 107.789474H161.684211a53.894737 53.894737 0 0 0-53.517474 47.589052L107.789474 161.684211v700.631578a53.894737 53.894737 0 0 0 47.589052 53.517474L161.684211 916.210526h754.526315a53.894737 53.894737 0 0 0 53.517474-47.589052L970.105263 862.315789V161.684211a53.894737 53.894737 0 0 0-47.589052-53.517474L916.210526 107.789474h-107.789473a53.894737 53.894737 0 0 1-6.305685-107.412211L808.421053 0h107.789473a161.684211 161.684211 0 0 1 161.414737 152.198737L1077.894737 161.684211v700.631578a161.684211 161.684211 0 0 1-152.198737 161.414737L916.210526 1024H161.684211a161.684211 161.684211 0 0 1-161.414737-152.198737L0 862.315789V161.684211A161.684211 161.684211 0 0 1 152.198737 0.269474L161.684211 0h107.789473z m269.473684 0a53.894737 53.894737 0 0 1 53.894737 53.894737v570.421895l123.580632-123.472843a53.894737 53.894737 0 0 1 71.141052-4.473263l5.066106 4.473263a53.894737 53.894737 0 0 1 4.473263 71.141053l-4.473263 5.066105-215.578948 215.578948a53.894737 53.894737 0 0 1-76.207158 0l-215.578947-215.578948a53.894737 53.894737 0 0 1 71.141053-80.680421l5.066105 4.473263L485.052632 624.424421V53.894737a53.894737 53.894737 0 0 1 53.894736-53.894737z"
                                ></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-auto lg:w-[420px] lg:h-full pb-10 lg:pb-4 lg:overflow-y-auto box-border relative flex flex-col items-start">
            <div class="w-full h-16 p-3.5 bg-gradient-to-t from-zinc-950/50 to-zinc-950 flex items-center justify-center">
                <div class="w-[80%] lg:w-full px-3 text-sm text-neutral-300 bg-white/10 rounded-full flex items-center justify-between overflow-hidden">
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-neutral-300" preserveAspectRatio="none">
                            <path
                                fill="evenodd"
                                clip-rule="evenodd"
                                d="M953.474215 908.234504l-152.576516-163.241391c61.92508-74.48211 95.81186-167.36973 95.81186-265.073744 0-229.294809-186.63531-415.930119-416.102133-415.930119-229.294809 0-415.930119 186.63531-415.930119 415.930119s186.63531 415.930119 415.930119 415.930119c60.032925 0 118.00168-12.55703 172.186125-37.327062 16.169326-7.396607 23.221905-26.318159 15.825298-42.315471-7.396607-16.169326-26.318159-23.221905-42.315471-15.825298-45.927768 20.813707-94.951789 31.478582-145.695952 31.478582-194.031917 0-351.94087-157.908953-351.94087-351.94087 0-194.031917 157.908953-351.94087 351.94087-351.94087 194.031917 0 351.94087 157.908953 351.94087 351.94087 0 91.339493-34.918864 177.86259-98.048043 243.743995-12.213002 12.729044-11.868974 33.026709 0.860071 45.239711 1.032085 0.860071 2.236183 1.204099 3.268268 2.064169 0.860071 1.204099 1.376113 2.752226 2.408198 3.956325l165.477574 177.00252c6.192508 6.70855 14.793214 10.148833 23.393919 10.148833 7.912649 0 15.653284-2.92424 21.845792-8.600706C964.827146 941.433227 965.515202 921.135562 953.474215 908.234504z"
                            ></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Search Music" class="w-[92%] p-2 bg-transparent border-none outline-none placeholder:text-neutral-500" value="" fdprocessedid="r1s1e" />
                </div>
            </div>
            <div class="w-full h-[calc(100%-64px)] overflow-y-auto">
                <div class="w-full px-3 py-2 text-xs text-neutral-300 rounded bg-white/5 backdrop-blur-md flex items-center gap-2">
                    <div class="flex-1 flex items-start gap-2">
                        <span>
                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-yellow-500" preserveAspectRatio="none">
                                <path
                                    fill="evenodd"
                                    clip-rule="evenodd"
                                    d="M512 0C373.76 0 245.76 51.2 148.48 148.48 56.32 245.76 0 373.76 0 506.88 0 793.6 225.28 1024 506.88 1024c286.72 0 517.12-225.28 517.12-506.88C1024 230.4 798.72 0 512 0z m0 957.44c-250.88 0-450.56-199.68-445.44-450.56 0-245.76 199.68-445.44 445.44-440.32 245.76 0 445.44 199.68 445.44 445.44 0 250.88-194.56 445.44-445.44 445.44zM460.8 424.96v163.84c0 35.84 20.48 46.08 56.32 46.08 35.84 0 35.84-20.48 35.84-46.08 5.12-97.28 5.12-194.56 10.24-291.84 5.12-35.84 0-61.44-51.2-61.44S455.68 256 455.68 296.96L460.8 424.96z m117.76 337.92c-5.12 40.96-30.72 61.44-66.56 61.44-35.84 0-61.44-20.48-66.56-56.32-5.12-40.96 20.48-61.44 61.44-61.44 40.96-5.12 61.44 20.48 71.68 56.32z"
                                ></path>
                            </svg>
                        </span>
                        <p>Music files are saved for 7 days on the free tier. Upgrade or share to keep them forever!<a class="text-yellow-500 underline ml-1" href="/pricing">Upgrade</a></p>
                    </div>
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-2.5 fill-neutral-500 transition duration-500 hover:fill-neutral-300 cursor-pointer" preserveAspectRatio="none">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M587.19 506.246l397.116-397.263a52.029 52.029 0 0 0 0-73.143l-2.194-2.194a51.98 51.98 0 0 0-73.143 0l-397.068 397.8-397.068-397.8a51.98 51.98 0 0 0-73.143 0l-2.146 2.194a51.054 51.054 0 0 0 0 73.143l397.069 397.263L39.544 903.461a52.029 52.029 0 0 0 0 73.142l2.146 2.195a51.98 51.98 0 0 0 73.143 0L511.9 581.583l397.068 397.215a51.98 51.98 0 0 0 73.143 0l2.194-2.146a52.029 52.029 0 0 0 0-73.143L587.19 506.246z"
                            ></path>
                        </svg>
                    </span>
                </div>
                <div class="relative w-full p-2 border-b border-gray-500/20 last:border-none transition duration-500 group hover:bg-white/10 cursor-pointer flex items-center justify-between gap-2 bg-white/10">
                    <div class="w-16 h-16 rounded-md relative transition duration-500 group cursor-pointer overflow-hidden">
                        <div class="w-full h-full rounded-md relative">
                            <img
                                alt="cover"
                                loading="lazy"
                                width="100"
                                height="100"
                                decoding="async"
                                data-nimg="1"
                                class="w-full h-full rounded-md object-cover"
                                src="https://tempfile.aiquickdraw.com/m/1733300491_ad3db66f530541aca56b83bd714b3bbe.png"
                                style="color: transparent;"
                            />
                        </div>
                        <div class="w-full h-full absolute top-0 left-0 bg-white/50 rounded-md transition duration-500 inline-flex items-center justify-center">
                            <span>
                                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-gray-700" preserveAspectRatio="none">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M780.8 475.733333L285.866667 168.533333c-27.733333-17.066667-64 4.266667-64 36.266667v614.4c0 32 36.266667 53.333333 64 36.266667l492.8-307.2c29.866667-14.933333 29.866667-57.6 2.133333-72.533334z"
                                    ></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="w-[70%] flex flex-1 flex-col items-start">
                        <p class="w-full font-semibold text-sm transition duration-500 group-hover:text-fuchsia-500 truncate text-fuchsia-500">Mosaic of Harmony</p>
                        <p class="w-full text-xs text-gray-300 truncate">traditional, ethereal, indian classical, transcendent</p>
                        <div class="w-full mt-1 flex items-center justify-between gap-2"><p class="w-full text-gray-400 text-xs flex items-center gap-1">2024-12-04 16:20:33</p></div>
                    </div>
                    <div class="w-10 h-full flex items-center justify-center">
                        <div class="w-full flex flex-col items-end" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r3:" data-state="closed">
                            <span>
                                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-gray-500 group-hover:fill-gray-300" preserveAspectRatio="none">
                                    <path
                                        fill="evenodd"
                                        clip-rule="evenodd"
                                        d="M203.1 599.3c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5-0.1 48.9-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.6 88.5-88.6 88.5z"
                                    ></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="relative w-full p-2 border-b border-gray-500/20 last:border-none transition duration-500 group hover:bg-white/10 cursor-pointer flex items-center justify-between gap-2">
                    <div class="w-16 h-16 rounded-md relative transition duration-500 group cursor-pointer overflow-hidden">
                        <div class="w-full h-full rounded-md relative">
                            <img
                                alt="cover"
                                loading="lazy"
                                width="100"
                                height="100"
                                decoding="async"
                                data-nimg="1"
                                class="w-full h-full rounded-md object-cover"
                                src="https://tempfile.aiquickdraw.com/m/1733300513_5d618aa537694c4e96d92c773e098c59.png"
                                style="color: transparent;"
                            />
                        </div>
                        <div class="w-full h-full absolute top-0 left-0 bg-white/50 rounded-md transition duration-500 opacity-0 group-hover:opacity-100 inline-flex items-center justify-center">
                            <span>
                                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-gray-700" preserveAspectRatio="none">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M780.8 475.733333L285.866667 168.533333c-27.733333-17.066667-64 4.266667-64 36.266667v614.4c0 32 36.266667 53.333333 64 36.266667l492.8-307.2c29.866667-14.933333 29.866667-57.6 2.133333-72.533334z"
                                    ></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="w-[70%] flex flex-1 flex-col items-start">
                        <p class="w-full font-semibold text-sm transition duration-500 group-hover:text-fuchsia-500 truncate text-gray-100">Mosaic of Harmony</p>
                        <p class="w-full text-xs text-gray-300 truncate">traditional, ethereal, indian classical, transcendent</p>
                        <div class="w-full mt-1 flex items-center justify-between gap-2"><p class="w-full text-gray-400 text-xs flex items-center gap-1">2024-12-04 16:20:33</p></div>
                    </div>
                    <div class="w-10 h-full flex items-center justify-center">
                        <div class="w-full flex flex-col items-end" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r4:" data-state="closed">
                            <span>
                                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-gray-500 group-hover:fill-gray-300" preserveAspectRatio="none">
                                    <path
                                        fill="evenodd"
                                        clip-rule="evenodd"
                                        d="M203.1 599.3c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5-0.1 48.9-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.6 88.5-88.6 88.5z"
                                    ></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="relative w-full p-2 border-b border-gray-500/20 last:border-none transition duration-500 group hover:bg-white/10 cursor-pointer flex items-center justify-between gap-2">
                    <div class="w-16 h-16 rounded-md relative transition duration-500 group cursor-pointer">
                        <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full object-cover" src="/_next/static/media/music_failed.1b2229ec.svg" style="color: transparent;" />
                    </div>
                    <div class="w-[60%] flex flex-col items-start">
                        <p class="w-full font-semibold text-sm transition duration-500 truncate text-red-600">indain classical</p>
                        <p class="w-full text-xs text-red-500 truncate">Sorry, generation failed for some reason.</p>
                        <p class="text-gray-400 text-xs inline-flex items-center gap-1">2024-12-04 15:30:11</p>
                    </div>
                    <div class="w-10 h-full flex items-center justify-center">
                        <div class="w-full flex flex-col items-end" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r5:" data-state="closed">
                            <span>
                                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-gray-500 group-hover:fill-gray-300" preserveAspectRatio="none">
                                    <path
                                        fill="evenodd"
                                        clip-rule="evenodd"
                                        d="M203.1 599.3c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5-0.1 48.9-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.6 88.5-88.6 88.5z"
                                    ></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-3.5 py-2 block lg:hidden"></div>
        </div>
    </div>
</div>

            </div>
        </section>
        <div id="cf-turnstile" style="width: 0px; height: 0px; overflow: hidden;">
            <div>
                <input
                    type="hidden"
                    name="cf-turnstile-response"
                    id="cf-chl-widget-lozvv_response"
                    value="0.zB2dhcl8X5mI-5QaEfl39VHdDtK_7nyDeoXdoJifKpP5-kzf0HqcBFNgB5PTXt2-eev9lqpxx8vZEHNDs2TFyQU7Go8t6vj60dSqY23FxlTbkQoTNUlwt-ggEDSeDcRsBshTaQ8-ogei7t5CsRexgg8DEHQ5f9VTVOAAzxvYEPlpwwjYnSJONu1ARdtNPN5liJZnttk5h3kdX8K0pqFV_WimPHk0YxUa6islhxPZ8NWc8AobljkvqZP51pR1ilNNORlgOTWFfT90Zj_P7-1bWwYZSEej9K3-2eYUTfJ9iGzICVTBc6gDfki03pU_T_u7UIJnssqVL2rW_-KAju5Fv1FWzIU5rl99YIQX8ykynnofYaRqWNPeoWn5zT4q0en-o3VznZnbdLl_JZ74fp3Tb84pY0GmjSPEFhpENXIkBRABCslk8_pnNOYSsEZZ-WOuYBzgI7cnl77TbjNlNLc3fR6ZferoOuCuO35k9vyhwkOMXT1Wl89aGqXM4Xt13hH2ooRASF6wtMPzOfx1uIX5x_Agkag1UKVnsmx55XJjsvRvLd5GdnDoIL6hfZTHlPGU1HZEniZQaq6D5tyqfV2tQrxag2nzFx-0aitwOuSpL_6RhMPJWW5b9rt4NydonBliPOSLER5rpeL2PMWehnbstgTscwBYY5_1usb7-Xb4HVhtklVLIBr1nhuGItXq6zbopsA7TPxGHJAbkwTwXx2yCTlzudY6saP6K1ixwpa6FEHrRNpE3D6u6PmQ4zRymDFk.WNSrLRW0ZdfpmlJnE2bE1A.e968d3ef75a1c80df8e1f0b66e0d966224c84a634e19280a238552a704c8f17a"
                />
            </div>
        </div>
        <div class="w-full px-2 pt-2 pb-6 bg-black/60 backdrop-blur-md fixed bottom-0 left-0 flex lg:hidden items-center justify-center">
            <button
                type="button"
                id="open-drawer"
                aria-haspopup="dialog"
                aria-expanded="false"
                aria-controls="radix-:ra:"
                data-state="closed"
                class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500 via-purple-500 to-fuchsia-500 inline-flex items-center justify-center"
            >
                <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-8 fill-white" preserveAspectRatio="none">
                        <path
                            fill="evenodd"
                            clip-rule="evenodd"
                            d="M396.955152 729.05697c-59.004121 49.586424-51.448242 86.450424-96.830061 127.131151 54.458182 26.701576 180.037818 19.083636 223.899151-19.083636 45.397333-38.120727 45.397333-87.707152 45.397334-87.707152l-68.080485-58.492121s-69.60097 8.905697-104.385939 38.136243z"
                        ></path>
                        <path fill="evenodd" clip-rule="evenodd" d="M729.491394 356.770909L914.618182 541.913212 635.236848 821.294545 450.094545 636.152242z"></path>
                        <path fill="evenodd" clip-rule="evenodd" d="M670.099394 697.235394l-31.573333 34.195394-119.296-110.11103 31.573333-34.21091z"></path>
                        <path
                            fill="evenodd"
                            clip-rule="evenodd"
                            d="M277.659152 420.258909l12.38109 117.077333c-0.263758 2.420364 0.155152 5.275152 0.775758 7.245576 0.884364 13.575758-9.728 32.643879-28.035879 45.707637-23.58303 17.066667-50.874182 18.866424-61.657212 4.654545-10.72097-14.320485 0.558545-40.106667 23.489939-57.142303 19.114667-13.560242 40.199758-17.873455 53.573819-11.279515L262.128485 377.018182l1.396363-0.062061 8.719516-1.132606 110.359272-11.046788 8.021334-1.241212 2.435878 0.170667 17.733819 161.000727c-0.015515 2.730667-0.03103 5.461333 0.372363 7.323152 1.303273 14.227394-9.464242 32.504242-27.725575 45.831757-23.536485 17.330424-51.153455 19.021576-61.812364 4.840727-10.348606-14.429091 0.651636-40.075636 23.970909-57.468121 18.866424-12.877576 39.998061-17.687273 53.356606-11.093333l-10.922667-104.92897-110.374787 11.046788z m-11.108849-13.808485l1.086061 11.527758 108.078545-13.017212-1.396364-11.620849-107.768242 13.125818zM298.356364 277.302303c-10.581333 14.118788-22.031515 21.938424-23.505455 22.49697a77.575758 77.575758 0 0 1-3.072 1.334303l-3.754667-1.706667s15.080727-8.688485 25.53794-24.715636c19.145697-31.247515-26.499879-89.475879-27.275637-88.389818l-3.025454 6.128484-41.580606 84.247273c-0.853333 1.706667-1.50497 3.258182-2.606546 5.08897-5.213091 10.24-19.828364 17.795879-37.577697 19.176727-22.698667 1.892848-40.897939-8.595394-41.921939-22.807273-0.465455-14.242909 17.764848-27.384242 40.122182-28.842666 17.935515-1.396364 33.388606 5.383758 39.346424 14.956606l53.72897-108.854303 7.136969-14.165334 7.509334 4.421819c-10.255515 22.590061 8.22303 51.355152 15.173818 70.640484 6.485333 19.331879 9.122909 42.666667-4.220121 60.990061M77.575758 911.266909h837.818181V930.909091H77.575758zM77.575758 865.450667h163.638303v19.642181H77.575758zM77.575758 819.634424h189.812363v19.642182H77.575758zM77.575758 773.818182h216.001939v19.642182H77.575758zM77.575758 728.001939h242.176v19.642182H77.575758z"
                        ></path>
                        <path
                            fill="evenodd"
                            clip-rule="evenodd"
                            d="M561.943273 760.040727c0 6.17503-39.284364 105.068606-124.369455 98.878061-56.723394-4.111515-93.820121-6.17503-111.274666-6.17503 74.798545 0.99297 129.349818-9.309091 163.638303-30.906182 39.268848-24.715636 47.522909-83.393939 52.363636-80.337455 19.642182 12.365576 19.642182 12.365576 19.642182 18.540606z"
                        ></path>
                    </svg>
                </span>
            </button>
        </div>
    </main>
    <div class="Toastify"></div>

    <div
    role="dialog"
    id="drawer"
    aria-describedby="radix-:R7kmH2:"
    aria-labelledby="radix-:R7kmH1:"
    data-state="open"
    vaul-drawer-direction="bottom"
    vaul-drawer-visible="true"
    class="fixed inset-x-0 bottom-0 z-50 mt-24 flex h-auto flex-col rounded-t-[10px] border bg-background hidden"
    tabindex="-1"
    style="pointer-events: auto;"
>
    <div class="mx-auto mt-4 h-2 w-[100px] rounded-full bg-muted"></div>
    <div class="mx-auto w-full max-w-sm">
        <div class="grid gap-1.5 p-4 text-center sm:text-left">
            <h2 id="radix-:R7kmH1:" class="font-semibold tracking-tight text-black text-sm flex flex-col items-center justify-center gap-1">
                <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-zinc-800" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M513 456.8c-31.1 0-56.4 25.2-56.4 56.4s25.2 56.4 56.4 56.4 56.4-25.3 56.4-56.4c0-31.2-25.2-56.4-56.4-56.4z"></path>
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M513 405.3c-59.5 0-107.9 48.4-107.9 107.8 0 59.5 48.4 107.9 107.9 107.9 59.5 0 107.9-48.4 107.9-107.9 0-59.4-48.4-107.8-107.9-107.8z m0 176.7c-38 0-68.8-30.9-68.8-68.8s30.9-68.8 68.8-68.8c38 0 68.8 30.9 68.8 68.8S550.9 582 513 582zM589.6 420.5l188.2-226.7c-14.2-11.8-29.2-22.6-44.9-32.4L576.4 411.2c4.6 2.8 9.1 5.9 13.2 9.3zM436.1 605.5L246.5 831c14.3 12 29.4 23 45.2 33l157.4-249.1c-4.5-2.8-8.9-5.9-13-9.4z"
                        ></path>
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M392.7 513.2c0-66.3 53.9-120.3 120.3-120.3 19.7 0 38.3 4.8 54.7 13.3l132-263.5C643.5 114.3 580.1 98.2 513 98.2c-228.8 0-415 186.2-415 415 0 50.1 8.9 98.2 25.3 142.8l276.9-101.3c-4.7-13-7.5-26.9-7.5-41.5zM903.2 372l-277.6 99.5c4.8 13 7.6 27 7.6 41.7 0 66.3-54 120.3-120.3 120.3-19.9 0-38.6-4.9-55.2-13.5l-135 261.9c57 29.6 121.7 46.4 190.2 46.4 228.8 0 415-186.2 415-415 0.1-49.7-8.6-97.2-24.7-141.3z"
                        ></path>
                    </svg>
                </span>
                AI Song Generator
            </h2>
        </div>
        <div class="w-full max-h-[360px] pr-2 overflow-y-auto">
            <div class="w-full mx-auto px-2 mb-2 grid grid-cols-1 gap-2">
                <div class="w-full flex flex-col items-start gap-4">
                    <div class="w-full p-2 bg-gray-500/5 rounded-lg flex items-center justify-between">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-600 vaul-scrollable" for="custom-mode">Custom Mode</label>
                        <button
                            type="button"
                            role="switch"
                            aria-checked="false"
                            data-state="unchecked"
                            value="on"
                            class="peer inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input"
                            id="custom-mode"
                            fdprocessedid="gshz7s"
                        >
                            <span
                                data-state="unchecked"
                                class="pointer-events-none block h-4 w-4 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-4 data-[state=unchecked]:translate-x-0"
                            ></span>
                        </button>
                    </div>
                    <div class="w-full flex flex-col items-start space-y-2">
                        <div class="w-full flex flex-col items-start gap-2">
                            <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm px-2 inline-flex items-center gap-1 text-gray-600" for="song-description">
                                Song Description
                                <span type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r7:" data-state="closed">
                                    <span>
                                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-gray-300" preserveAspectRatio="none">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"
                                            ></path>
                                        </svg>
                                    </span>
                                </span>
                            </label>
                            <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-gray-500/5 relative">
                                <textarea
                                    placeholder="Describe the style of music and the topic you want, AI will generate lyrics for you. "
                                    class="w-full h-24 p-1 bg-transparent border-none text-sm text-gray-600 outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"
                                ></textarea>
                                <div class="w-full text-xs text-gray-400 text-right">0/199</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-2 bg-gray-500/5 rounded-lg flex items-center justify-between">
                        <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-600" for="instrumental">
                            Instrumental
                            <span type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r8:" data-state="closed">
                                <span>
                                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-gray-300" preserveAspectRatio="none">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"
                                        ></path>
                                    </svg>
                                </span>
                            </span>
                        </label>
                        <button
                            type="button"
                            role="switch"
                            aria-checked="false"
                            data-state="unchecked"
                            value="on"
                            class="peer inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input"
                            id="instrumental"
                            fdprocessedid="h8llmy"
                        >
                            <span
                                data-state="unchecked"
                                class="pointer-events-none block h-4 w-4 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-4 data-[state=unchecked]:translate-x-0"
                            ></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-auto flex flex-col gap-2 p-4">
                <button aria-label="Create" class="w-full p-3 text-white rounded-lg font-medium bg-fuchsia-500 transition duration-500 hover:bg-fuchsia-600 flex items-center justify-center gap-1" fdprocessedid="71wl1">
                    Generate Music
                    <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 h-4 fill-white" preserveAspectRatio="none">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M839.8 64c-70.71 0.78-169.12 46.32-236.88 69.2-46.6 15.73-92.32 38.38-140.56 48.83-41.74 9-82.08 5-123.85 10.9-15 2.13-24.41 19.25-25 32.85-3 68.09 14.54 140.18 26.67 207.8-2.68 49.21-6.9 98.4-14.56 148-5.5 35.65-11.13 70.83-4.43 103.84a381.35 381.35 0 0 0-62.92 11.39c-57.61 15.4-117.48 38.31-140.19 98.42-6.42 17-8.07 32.75-6.44 47.32 2.9 53.95 43.24 104.38 108.7 114.9 105.45 16.95 259.74-52.53 251-175.55-3.38-47.39-27.07-73.67-59.35-86.8 9.16-46.45-2.33-115-4.16-139.08-3.87-51-13.07-104.6-20.15-158.29 146.72-2.09 286.82-89.37 430.54-106.87a44 44 0 0 0 10.11-2.53c-8.75 111.27-7.82 233.35-31.33 341.9a160.55 160.55 0 0 1-16.33-1.81c-14.2-2.2-27.69-1.59-42-0.74-36.26 2.16-74.24 11.55-105.32 30.69-112.76 69.42-75.56 228.92 55.54 241.35s220.56-105.33 165.8-211.06c21.71-27.3 16.61-107.71 19-128.68 10-87.75 16-175.91 23.39-263.92C902.63 229.7 952.84 62.76 839.8 64zM701.17 834.71q-68.95-137.57 37.44-134.85a179.65 179.65 0 0 1 50 2.7c8.58 13.74 16 28.09 21.33 43.65q-23.52 86.18-108.77 88.5z m-300.66-67.25c7.3 0.55 12.1-3.06 14.94-8 22.54 38.86-9.6 94.7-43.3 115.37-22.86 14-54 25.82-84.36 32.12 7.32-17.88 13.4-36.18 17.23-55.18 0.78-3.88-5.15-5.56-6-1.65a262.52 262.52 0 0 1-19.73 58.48 199.25 199.25 0 0 1-35.72 3.26 109.82 109.82 0 0 1-21.86-2.67c0.24-46 33.64-90.91 52.21-130.84 2.53-5.43-5.55-10.2-8.09-4.73-19.42 41.77-52.93 84.92-56.31 132.32-0.64-0.21-1.35-0.3-2-0.53 3.81-9.12 2.2-20-9.6-26.5-1.46-0.81-2.6-1.68-4-2.51 8-38.4 23.13-77.56 47.27-107.64 3.89-4.84-2.6-11.76-7-7-25.15 27.39-44.37 67.49-52.4 106-45.32-37.88-7.9-89.13 45.1-109.74a375 375 0 0 1 38.83-12.42 10.07 10.07 0 0 0 6.17 2.59c17.54 1.15 34.08 6.33 51 10.42a2.86 2.86 0 0 0 2.58 3.72l9.64 0.44a4.69 4.69 0 0 0 3-0.93c20.65 3.57 41.62 4.04 62.4 5.62z m435.88-540.29c-6.91-4.54-16-6.66-27.42-4.33-146.11 30-277.25 119.28-425 145.17-4.18-37.26-6.65-74.37-4.8-110.52 34-1.4 67.12-0.32 101.54-9 59.74-15.15 116.45-41.42 175.19-59.85 31.27-9.81 147.7-63.62 175.59-51.51 14.64 6.34 10.39 51.75 4.9 90.04z"
                            ></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Custom Mode Toggle
    $('#custom-mode').on('click', function() {
        const isChecked = $(this).attr('aria-checked') === 'true';
        
        // Toggle aria-checked
        $(this).attr('aria-checked', !isChecked);
        
        // Toggle the switch appearance
        const switchKnob = $(this).find('span[data-state]');
        switchKnob.attr('data-state', !isChecked ? 'checked' : 'unchecked');
        
        // Show/hide custom input fields with animation
        if (!isChecked) {
            $(this).addClass('bg-brand-primary');
            $('.custom-fields').slideDown(300);
        } else {
            $('.custom-fields').slideUp(300);
        }
    });

    // Instrumental Toggle
    $('#instrumental').on('click', function() {
        const isChecked = $(this).attr('aria-checked') === 'true';
        
        // Toggle aria-checked
        $(this).attr('aria-checked', !isChecked);
        
        // Toggle the switch appearance
        const switchKnob = $(this).find('span[data-state]');
        switchKnob.attr('data-state', !isChecked ? 'checked' : 'unchecked');
        
        // Additional logic for instrumental mode
        if (!isChecked) {
            // Enable instrumental mode
            $('#style-of-music').attr('placeholder', 'Enter instrumental style');
            // Add any other instrumental-specific changes
        } else {
            // Disable instrumental mode
            $('#style-of-music').attr('placeholder', 'Enter style of music');
            // Reset any instrumental-specific changes
        }
    });
    $('#open-drawer').on('click', function() {
        
        $('#drawer').removeClass('hidden');
    });

  
});

</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('website-assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/embeded.css') }}">
    <link rel="stylesheet" href="{{ asset('website-assets/css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <style>
    /* Add preloader styles */
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }
    
    .preloader.fade-out {
      opacity: 0;
      visibility: hidden;
      transition: all 0.5s ease;
    }

    .loader {
      width: 50px;
      height: 50px;
      border: 5px solid #d946ef;
      border-radius: 50%;
      border-top-color: transparent;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      100% { transform: rotate(360deg); }
    }
  </style>
  
  <body>
    <!-- Add preloader HTML -->
    <div class="preloader">
      <div class="loader"></div>
    </div>

    <div id="__next">
      <main class="md:h-[100vh] lg:h-[100vh]">
       @include('templates.sidebar')
        <div class="lg:hidden block w-full px-4 py-2 bg-black fixed top-0 left-0 cursor-default z-20">
          <div class="w-full flex items-center justify-between gap-2">
            <a aria-label="Home" class="p-2 flex items-center gap-2" href="/">
              <span>
                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-8 fill-[#0096FF]" preserveAspectRatio="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M513 456.8c-31.1 0-56.4 25.2-56.4 56.4s25.2 56.4 56.4 56.4 56.4-25.3 56.4-56.4c0-31.2-25.2-56.4-56.4-56.4z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M513 405.3c-59.5 0-107.9 48.4-107.9 107.8 0 59.5 48.4 107.9 107.9 107.9 59.5 0 107.9-48.4 107.9-107.9 0-59.4-48.4-107.8-107.9-107.8z m0 176.7c-38 0-68.8-30.9-68.8-68.8s30.9-68.8 68.8-68.8c38 0 68.8 30.9 68.8 68.8S550.9 582 513 582zM589.6 420.5l188.2-226.7c-14.2-11.8-29.2-22.6-44.9-32.4L576.4 411.2c4.6 2.8 9.1 5.9 13.2 9.3zM436.1 605.5L246.5 831c14.3 12 29.4 23 45.2 33l157.4-249.1c-4.5-2.8-8.9-5.9-13-9.4z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M392.7 513.2c0-66.3 53.9-120.3 120.3-120.3 19.7 0 38.3 4.8 54.7 13.3l132-263.5C643.5 114.3 580.1 98.2 513 98.2c-228.8 0-415 186.2-415 415 0 50.1 8.9 98.2 25.3 142.8l276.9-101.3c-4.7-13-7.5-26.9-7.5-41.5zM903.2 372l-277.6 99.5c4.8 13 7.6 27 7.6 41.7 0 66.3-54 120.3-120.3 120.3-19.9 0-38.6-4.9-55.2-13.5l-135 261.9c57 29.6 121.7 46.4 190.2 46.4 228.8 0 415-186.2 415-415 0.1-49.7-8.6-97.2-24.7-141.3z"></path>
                </svg>
              </span>
              <span class="text-xl font-extrabold bg-clip-text text-transparent bg-gradient-to-tr from-[#d946ef] to-emerald-400 truncate">Music AI</span>
            </a>
            <div class="w-fit">
              <a href="{{ route('logout') }}" class="text-sm font-medium text-neutral-300 inline-flex items-center justify-center gap-1 cursor-pointer">
                <span>
                <svg aria-hidden="true" viewBox="0 0 24 24" class="w-6 fill-neutral-300">
                          <path d="M16 17v-3H9v-4h7V7l5 5-5 5M14 2a2 2 0 012 2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2h9z"/>
                        </svg>
                </span> Log out 
              </a>
            </div>
          </div>
          <div class="w-full bg-transparent text-sm text-[#d946ef] flex items-center overflow-x-auto">
            <a class="w-full py-2 px-4 flex items-center gap-2 text-[#d946ef]" href="javascript:void(0)">
              <span>
                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-[#0096FF]" preserveAspectRatio="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M316.416 952.32c-46.08 0-92.16-10.24-135.168-30.72-75.776-35.84-133.12-99.328-160.768-178.176-27.648-78.848-23.552-163.84 12.288-239.616C107.52 348.16 294.912 281.6 451.584 355.328c61.44 29.696 111.616 77.824 143.36 138.24L708.608 256c37.888-78.848 132.096-112.64 210.944-74.752l61.44 29.696c25.6 12.288 36.864 43.008 24.576 69.632-25.6 53.248-60.416 73.728-84.992 80.896-31.744 10.24-67.584 6.144-103.424-11.264l-1.024-1.024c-4.096-2.048-8.192-1.024-10.24-1.024-2.048 1.024-5.12 2.048-7.168 7.168 0 0-197.632 413.696-199.68 418.816-35.84 75.776-99.328 133.12-178.176 160.768-33.792 11.264-69.632 17.408-104.448 17.408z m0-571.392c-96.256 0-188.416 54.272-232.448 146.432-29.696 62.464-33.792 132.096-10.24 196.608S143.36 841.728 205.824 871.424c62.464 29.696 132.096 32.768 196.608 10.24 64.512-22.528 116.736-69.632 146.432-132.096 2.048-4.096 199.68-418.816 199.68-418.816 8.192-16.384 22.528-29.696 39.936-35.84 17.408-6.144 36.864-5.12 53.248 3.072h1.024c15.36 7.168 39.936 15.36 62.464 8.192 19.456-6.144 35.84-22.528 49.152-48.128l-58.368-27.648c-51.2-24.576-112.64-3.072-136.192 48.128L638.976 532.48c-8.192 17.408-24.576 27.648-44.032 27.648s-35.84-11.264-44.032-28.672c-24.576-54.272-68.608-99.328-122.88-124.928-36.864-17.408-73.728-25.6-111.616-25.6z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M311.296 758.784c-61.44 0-111.616-50.176-111.616-111.616s50.176-111.616 111.616-111.616 111.616 50.176 111.616 111.616-50.176 111.616-111.616 111.616z m0-167.936c-30.72 0-56.32 25.6-56.32 56.32s25.6 56.32 56.32 56.32 56.32-25.6 56.32-56.32c-1.024-30.72-25.6-56.32-56.32-56.32z"></path>
                </svg>
              </span>
              <span class="flex-1 truncate">Music generator</span>
            </a>
            <!-- <a class="w-full py-2 px-4 flex items-center gap-2 text-neutral-50" href="/sound-effect">
              <span>
                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-50" preserveAspectRatio="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M683.652 232.318l197.262-93.506c18.689-9.223 26.362-31.851 17.139-50.54-9.018-18.272-30.912-26.085-49.46-17.65L629.762 174.353a37.732 37.732 0 0 0-21.569 34.095V490.64a173.916 173.916 0 0 0-99.467-31.152c-96.455 0-174.933 78.471-174.933 174.933 0 96.455 78.471 174.927 174.933 174.927 96.455 0 174.926-78.471 174.926-174.927V232.318zM508.719 733.894c-54.852 0-99.474-44.621-99.474-99.468 0-54.846 44.621-99.468 99.474-99.468s99.474 44.615 99.474 99.461c0 54.848-44.621 99.475-99.474 99.475zM349.142 481.39c14.337-6.213 20.921-22.877 14.702-37.214s-22.877-20.927-37.214-14.702c-38.868 16.853-68.85 47.828-84.413 87.237-15.57 39.408-14.859 82.514 2 121.382 6.221 14.335 22.88 20.918 37.22 14.708 14.338-6.218 20.92-22.882 14.702-37.22a101.372 101.372 0 0 1-1.283-78.075 101.276 101.276 0 0 1 54.286-56.116z m-91.732-91.331c14.338-6.218 20.92-22.882 14.702-37.22-6.218-14.338-22.882-20.92-37.22-14.702-120.024 52.061-175.33 192.062-123.282 312.092 6.221 14.335 22.88 20.918 37.22 14.708 14.338-6.218 20.92-22.882 14.702-37.22-39.635-91.399 2.478-198.01 93.878-237.658z m538.11 251.7c-5.123-14.767-21.246-22.585-36.013-17.462-14.767 5.122-22.585 21.246-17.462 36.013 18.437 53.148-9.803 111.384-62.945 129.827-14.829 4.932-22.853 20.952-17.92 35.781s20.952 22.853 35.781 17.92c0.231-0.077 0.461-0.156 0.689-0.239 82.621-28.668 126.526-119.213 97.87-201.84z m129.305 5.76c-5.495-14.638-21.815-22.05-36.453-16.555-14.119 5.3-21.605 20.738-17.022 35.105 15.821 45.59 12.935 94.619-8.124 138.046-21.059 43.427-57.764 76.056-103.36 91.865-14.767 5.122-22.585 21.246-17.462 36.013 5.122 14.767 21.246 22.585 36.013 17.462 59.877-20.77 108.082-63.618 135.732-120.659 27.648-57.021 31.44-121.4 10.676-181.277z"></path>
                </svg>
              </span>
              <span class="flex-1 truncate">Sound effect generator</span>
            </a>
            <a class="w-full py-2 px-4 flex items-center gap-2 text-neutral-50" href="/library">
              <span>
                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-50" preserveAspectRatio="none">
                  <path fill="evenodd" clip-rule="evenodd" d="M885.333333 256H138.666667a53.393333 53.393333 0 0 0-53.333334 53.333333v576a53.393333 53.393333 0 0 0 53.333334 53.333334h746.666666a53.393333 53.393333 0 0 0 53.333334-53.333334V309.333333a53.393333 53.393333 0 0 0-53.333334-53.333333zM624.84 596.42a21.333333 21.333333 0 0 1-26.593333-14.246667C593.333333 566 586.18 552 577.513333 541.8a64.24 64.24 0 0 0-13.333333-12 21.473333 21.473333 0 0 1-2.953333-2.366667q-3.38-3.233333-6.586667-6.813333V725.333333c0 23.626667-12.22 46.34-33.526667 62.32C501.333333 802.493333 475.38 810.666667 448 810.666667s-53.333333-8.173333-73.14-23.013334c-21.333333-16-33.526667-38.666667-33.526667-62.32s12.22-46.34 33.526667-62.32C394.666667 648.173333 420.62 640 448 640c23.333333 0 45.666667 5.946667 64 16.893333V405.333333a21.333333 21.333333 0 0 1 20.773333-21.333333h0.56a21.333333 21.333333 0 0 1 21.333334 20.22c0.74 14.14 3.52 35.473333 12.553333 56.78 5.833333 13.753333 13.546667 25.613333 22.36 34.42a107.46 107.46 0 0 1 20.493333 18.78c12.6 14.853333 22.373333 33.573333 29.04 55.626667a21.333333 21.333333 0 0 1-14.273333 26.593333zM512 725.333333c0 23.126667-29.333333 42.666667-64 42.666667s-64-19.54-64-42.666667 29.333333-42.666667 64-42.666666 64 19.54 64 42.666666zM170.666667 106.666667a21.333333 21.333333 0 0 1 21.333333-21.333334h640a21.333333 21.333333 0 0 1 0 42.666667H192a21.333333 21.333333 0 0 1-21.333333-21.333333z m-42.666667 85.333333a21.333333 21.333333 0 0 1 21.333333-21.333333h725.333334a21.333333 21.333333 0 0 1 0 42.666666H149.333333a21.333333 21.333333 0 0 1-21.333333-21.333333z"></path>
                </svg>
              </span>
              <span class="flex-1 truncate">Library</span>
            </a>
            <a class="w-full py-2 px-4 hover:bg-white/15 hover:text-amber-500 transition duration-500 flex items-center gap-2" href="/pricing">
              <span>
                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-amber-500" preserveAspectRatio="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M805.4 928.9H218.6c-42.5 0-78.8-30.2-85.5-72.2L70.1 486c-6.1-37.9 11.8-74.2 46.1-91.6 34.3-17.4 74.2-11.8 101.4 15.9l82.9 82.9L470 332.9l-41-40.4c-43.5-45.6-43-118.8 1.5-163.3s117.8-45.6 163.3-1.5l0.5 0.5c22 22 34.3 51.2 34.3 82.4S616.3 271 594.3 293L554 333.4l169.5 160.3 82.9-82.9c27.1-27.1 67.1-33.8 101.4-15.9 34.3 17.4 52.2 53.8 46.1 91.6l-63 371.2c-6.7 40.4-43 71.2-85.5 71.2z"></path>
                </svg>
              </span>
              <span class="flex-1 truncate text-neutral-50">Upgrade now</span>
            </a> -->
          </div>
        </div>
        <section id="app" class="w-full h-full cursor-default pt-24 lg:pt-0 lg:pl-[80px]">
          <div class="w-full px-4 py-2 bg-black flex items-center justify-between gap-2 lg:hidden fixed top-0 left-0 z-10">
            <div class="w-[80%] flex items-center justify-end">
              <button class="text-sm font-semibold leading-6 text-gray-200 transition duration-200 hover:text-gray-50 inline-flex items-center cursor-pointer">Sign In</button>
            </div>
          </div>
          <div class="w-full lg:h-full pt-2 pb-24 lg:py-0 flex bg-black items-start">
           @include('templates.prompt')
            <div class="w-full h-full lg:flex-1">
              <div class="w-full h-auto lg:h-full flex flex-col lg:flex-row items-start">
                <div class="w-full lg:h-full relative overflow-hidden" style="z-index:1;">
                 @include('templates.song')
                </div>
               @include('templates.right-sidebar')
              </div>
            </div>
          </div>
        </section>
        <div id="cf-turnstile" style="width: 0px; height: 0px; overflow: hidden;">
          <div>
            <input type="hidden" name="cf-turnstile-response" id="cf-chl-widget-lozvv_response" value="0.zB2dhcl8X5mI-5QaEfl39VHdDtK_7nyDeoXdoJifKpP5-kzf0HqcBFNgB5PTXt2-eev9lqpxx8vZEHNDs2TFyQU7Go8t6vj60dSqY23FxlTbkQoTNUlwt-ggEDSeDcRsBshTaQ8-ogei7t5CsRexgg8DEHQ5f9VTVOAAzxvYEPlpwwjYnSJONu1ARdtNPN5liJZnttk5h3kdX8K0pqFV_WimPHk0YxUa6islhxPZ8NWc8AobljkvqZP51pR1ilNNORlgOTWFfT90Zj_P7-1bWwYZSEej9K3-2eYUTfJ9iGzICVTBc6gDfki03pU_T_u7UIJnssqVL2rW_-KAju5Fv1FWzIU5rl99YIQX8ykynnofYaRqWNPeoWn5zT4q0en-o3VznZnbdLl_JZ74fp3Tb84pY0GmjSPEFhpENXIkBRABCslk8_pnNOYSsEZZ-WOuYBzgI7cnl77TbjNlNLc3fR6ZferoOuCuO35k9vyhwkOMXT1Wl89aGqXM4Xt13hH2ooRASF6wtMPzOfx1uIX5x_Agkag1UKVnsmx55XJjsvRvLd5GdnDoIL6hfZTHlPGU1HZEniZQaq6D5tyqfV2tQrxag2nzFx-0aitwOuSpL_6RhMPJWW5b9rt4NydonBliPOSLER5rpeL2PMWehnbstgTscwBYY5_1usb7-Xb4HVhtklVLIBr1nhuGItXq6zbopsA7TPxGHJAbkwTwXx2yCTlzudY6saP6K1ixwpa6FEHrRNpE3D6u6PmQ4zRymDFk.WNSrLRW0ZdfpmlJnE2bE1A.e968d3ef75a1c80df8e1f0b66e0d966224c84a634e19280a238552a704c8f17a" />
          </div>
        </div>
        <div class="w-full px-2 pt-2 pb-6 bg-black/60 backdrop-blur-md fixed bottom-0 left-0 flex lg:hidden items-center justify-center">
          <button type="button" id="open-drawer" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:ra:" data-state="closed" class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500 via-purple-500 to-fuchsia-500 inline-flex items-center justify-center">
            <span>
              <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-8 fill-white" preserveAspectRatio="none">
                <path fill="evenodd" clip-rule="evenodd" d="M396.955152 729.05697c-59.004121 49.586424-51.448242 86.450424-96.830061 127.131151 54.458182 26.701576 180.037818 19.083636 223.899151-19.083636 45.397333-38.120727 45.397333-87.707152 45.397334-87.707152l-68.080485-58.492121s-69.60097 8.905697-104.385939 38.136243z"></path>
                <path fill="evenodd" clip-rule="evenodd" d="M729.491394 356.770909L914.618182 541.913212 635.236848 821.294545 450.094545 636.152242z"></path>
                <path fill="evenodd" clip-rule="evenodd" d="M670.099394 697.235394l-31.573333 34.195394-119.296-110.11103 31.573333-34.21091z"></path>
                <path fill="evenodd" clip-rule="evenodd" d="M277.659152 420.258909l12.38109 117.077333c-0.263758 2.420364 0.155152 5.275152 0.775758 7.245576 0.884364 13.575758-9.728 32.643879-28.035879 45.707637-23.58303 17.066667-50.874182 18.866424-61.657212 4.654545-10.72097-14.320485 0.558545-40.106667 23.489939-57.142303 19.114667-13.560242 40.199758-17.873455 53.573819-11.279515L262.128485 377.018182l1.396363-0.062061 8.719516-1.132606 110.359272-11.046788 8.021334-1.241212 2.435878 0.170667 17.733819 161.000727c-0.015515 2.730667-0.03103 5.461333 0.372363 7.323152 1.303273 14.227394-9.464242 32.504242-27.725575 45.831757-23.536485 17.330424-51.153455 19.021576-61.812364 4.840727-10.348606-14.429091 0.651636-40.075636 23.970909-57.468121 18.866424-12.877576 39.998061-17.687273 53.356606-11.093333l-10.922667-104.92897-110.374787 11.046788z m-11.108849-13.808485l1.086061 11.527758 108.078545-13.017212-1.396364-11.620849-107.768242 13.125818zM298.356364 277.302303c-10.581333 14.118788-22.031515 21.938424-23.505455 22.49697a77.575758 77.575758 0 0 1-3.072 1.334303l-3.754667-1.706667s15.080727-8.688485 25.53794-24.715636c19.145697-31.247515-26.499879-89.475879-27.275637-88.389818l-3.025454 6.128484-41.580606 84.247273c-0.853333 1.706667-1.50497 3.258182-2.606546 5.08897-5.213091 10.24-19.828364 17.795879-37.577697 19.176727-22.698667 1.892848-40.897939-8.595394-41.921939-22.807273-0.465455-14.242909 17.764848-27.384242 40.122182-28.842666 17.935515-1.396364 33.388606 5.383758 39.346424 14.956606l53.72897-108.854303 7.136969-14.165334 7.509334 4.421819c-10.255515 22.590061 8.22303 51.355152 15.173818 70.640484 6.485333 19.331879 9.122909 42.666667-4.220121 60.990061M77.575758 911.266909h837.818181V930.909091H77.575758zM77.575758 865.450667h163.638303v19.642181H77.575758zM77.575758 819.634424h189.812363v19.642182H77.575758zM77.575758 773.818182h216.001939v19.642182H77.575758zM77.575758 728.001939h242.176v19.642182H77.575758z"></path>
                <path fill="evenodd" clip-rule="evenodd" d="M561.943273 760.040727c0 6.17503-39.284364 105.068606-124.369455 98.878061-56.723394-4.111515-93.820121-6.17503-111.274666-6.17503 74.798545 0.99297 129.349818-9.309091 163.638303-30.906182 39.268848-24.715636 47.522909-83.393939 52.363636-80.337455 19.642182 12.365576 19.642182 12.365576 19.642182 18.540606z"></path>
              </svg>
            </span>
          </button>
        </div>
      </main>
      <div class="Toastify"></div>
     @include('templates.dialog')
 

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('website-assets/js/main.js') }}"></script>
    <script>
      // Add preloader script
      window.addEventListener('load', function() {
        const preloader = document.querySelector('.preloader');
        preloader.classList.add('fade-out');
        
        // Use a shorter timeout and ensure the preloader is hidden
        setTimeout(() => {
          preloader.style.display = 'none';
        }, 500); // 500 milliseconds (0.5 seconds)
      });
     
    </script>
  </body>
</html>
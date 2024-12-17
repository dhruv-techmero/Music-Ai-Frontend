<header x-data="{ open: false }" class="w-full bg-black/5 backdrop-blur-sm fixed top-0 left-0 z-10 flex items-center">
  <nav class="w-full mx-auto px-6 py-4 lg:px-8 flex items-center justify-between" aria-label="Global">
    <div class="flex items-center gap-x-12">
      <a aria-label="Home" class="p-1.5 font-bold text-lg flex items-center gap-2" href="/">
        <!-- <img alt="songgenerator.io" loading="lazy" width="50" height="50" decoding="async" data-nimg="1" class="w-6 h-6 sm:w-8 sm:h-8" style="color:transparent" src="website-assets/images/logo.webp"> -->
        <span class="font-medium text-xs sm:text-sm bg-clip-text text-transparent bg-gradient-to-tr from-fuchsia-400 via-pink-300 to-purple-500">
          <span class="font-bold text-base sm:text-lg">Music</span> AI </span>
      </a>
      <div class="hidden lg:flex lg:gap-x-8">
        <a class="text-sm font-semibold leading-6 text-gray-100 transition duration-200 hover:text-fuchsia-500" href="{{ route('home') }}">Home</a>
      </div>
      <div hidden="" style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></div>
    </div>
    <div class="flex flex-1 items-center justify-end gap-4">
    
      @if (!auth()->check())
      <button id="loginButton" class="text-sm font-semibold leading-6 text-gray-200 transition duration-200 hover:text-fuchsia-400 inline-flex items-center cursor-pointer"> 
          Log In 
      </button>
      @else
      <a href="{{ route('logout') }}" class="text-sm font-semibold leading-6 text-gray-200 transition duration-200 hover:text-fuchsia-400 inline-flex items-center cursor-pointer"> 
          Log Out 
      </a>
      @endif
      <div class="flex lg:hidden">
        <button type="button" @click="open = !open" class="inline-flex items-center justify-center rounded-md px-2 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-6 h-6">
            <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>
  <div hidden="" style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></div>
</header>
<!-- Login Modal -->
<div id="loginModal" style="padding:3rem" class="fixed left-1/2 top-1/2 z-50 grid w-[95%] sm:w-full max-w-md transform -translate-x-1/2 -translate-y-1/2 gap-6 rounded-lg border border-gray-200 bg-white p-6 shadow-lg transition-opacity duration-300 hidden">
  <div class="flex flex-col items-center text-center space-y-6">
    <!-- Header -->
    <h2 class="text-3xl font-bold text-gray-800">Welcome Back</h2>
    <p class="text-sm text-gray-500">Sign in to continue to your account</p>

    <!-- Google Login Button -->
    <button style="margin-top:27px" onclick="handleGoogleLogin()"
      class="w-full flex items-center justify-center gap-3 px-6 py-3 text-gray-700 bg-white border border-gray-300 rounded-md shadow-md hover:shadow-lg hover:bg-gray-50 transition-all duration-200">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05" />
        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
      </svg>
      Sign in with Google
    </button>
  </div>

  <!-- Close Button -->
  <button id="closeLoginModal" type="button" class="absolute right-4 top-4 p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none">
    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15">
      <path d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z" fill="currentColor" />
    </svg>
    <span class="sr-only">Close</span>
  </button>
</div>


<!-- Backdrop -->
<div 
    id="modalBackdrop"
    class="fixed inset-0 bg-black/50 z-40 hidden"
    style="display: none;">
</div>

<!-- Add this mobile menu right after the nav element -->
<div 
    x-show="open" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="lg:hidden" 
    role="dialog" 
    aria-modal="true"
    style="display: none;"
>
  <!-- Background backdrop -->
  <div 
    class="fixed inset-0 z-50 bg-black/30" 
    @click="open = false"
  ></div>
  <div 
    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-black px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
    x-transition:enter="transform transition ease-in-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transform transition ease-in-out duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
  >
    <div class="flex items-center justify-between">
      <a href="/" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="website-assets/images/logo.webp" alt="">
      </a>
      <button type="button" @click="open = false" class="rounded-md text-gray-100 hover:text-fuchsia-500">
        <span class="sr-only">Close menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="mt-6 flow-root">
      <div class="-my-6 divide-y divide-gray-500/10">
        <div class="space-y-2 py-6">
          <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:text-fuchsia-500">Home</a>
          <a href="/tags" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:text-fuchsia-500">Music by Tags</a>
          <a href="/pricing" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:text-fuchsia-500">Pricing</a>
          <a href="/article" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:text-fuchsia-500">Blog</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('#loginButton').click(function() {
        $('#loginModal, #modalBackdrop').fadeIn(300);
    });

    // Close modals
    $('#modalBackdrop, #loginModal button[type="button"]').click(function() {
        $('#loginModal, #modalBackdrop').fadeOut(300);
    });

    // Close on escape key
    $(document).keydown(function(e) {
        if (e.key === "Escape") {
            $('#loginModal, #modalBackdrop').fadeOut(300);
        }
    });
});

// Add new function to handle Google login
function handleGoogleLogin() {
    // Store the current URL to redirect back after auth
    sessionStorage.setItem('redirectUrl', window.location.href);
    
    // Redirect to Google OAuth endpoint
    window.location.href = 'http://localhost:8000/google';
}

// Check for auth token on page load
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const token = urlParams.get('token');
    
    if (token) {
        // Store token in session storage
        sessionStorage.setItem('auth_token', token);
        
        // Get and clear redirect URL
        const redirectUrl = sessionStorage.getItem('redirectUrl');
        sessionStorage.removeItem('redirectUrl');
        
        // Redirect to song generator page
        window.location.href = '/song-generator';
    }
});
</script>
<div role="dialog" id="drawer" aria-describedby="radix-:R7kmH2:" aria-labelledby="radix-:R7kmH1:" data-state="open" vaul-drawer-direction="bottom" vaul-drawer-visible="true" class="fixed inset-x-0 bottom-0 z-50 mt-24 flex h-auto flex-col rounded-t-[10px] border bg-background hidden" tabindex="-1" style="pointer-events: auto;">
  <div class="mx-auto mt-4 h-2 w-[100px] rounded-full bg-muted"></div>
  <div class="mx-auto w-full max-w-sm">
    <div class="grid gap-1.5 p-4 text-center sm:text-left relative">
      <button id="close-drawer" class="absolute top-2 right-2 p-2 rounded-full hover:bg-gray-100">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
      <h2 id="radix-:R7kmH1:" class="font-semibold tracking-tight text-black text-sm flex flex-col items-center justify-center gap-1">
        <span>
          <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-zinc-800" preserveAspectRatio="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M513 456.8c-31.1 0-56.4 25.2-56.4 56.4s25.2 56.4 56.4 56.4 56.4-25.3 56.4-56.4c0-31.2-25.2-56.4-56.4-56.4z"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M513 405.3c-59.5 0-107.9 48.4-107.9 107.8 0 59.5 48.4 107.9 107.9 107.9 59.5 0 107.9-48.4 107.9-107.9 0-59.4-48.4-107.8-107.9-107.8z m0 176.7c-38 0-68.8-30.9-68.8-68.8s30.9-68.8 68.8-68.8c38 0 68.8 30.9 68.8 68.8S550.9 582 513 582zM589.6 420.5l188.2-226.7c-14.2-11.8-29.2-22.6-44.9-32.4L576.4 411.2c4.6 2.8 9.1 5.9 13.2 9.3zM436.1 605.5L246.5 831c14.3 12 29.4 23 45.2 33l157.4-249.1c-4.5-2.8-8.9-5.9-13-9.4z"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M392.7 513.2c0-66.3 53.9-120.3 120.3-120.3 19.7 0 38.3 4.8 54.7 13.3l132-263.5C643.5 114.3 580.1 98.2 513 98.2c-228.8 0-415 186.2-415 415 0 50.1 8.9 98.2 25.3 142.8l276.9-101.3c-4.7-13-7.5-26.9-7.5-41.5zM903.2 372l-277.6 99.5c4.8 13 7.6 27 7.6 41.7 0 66.3-54 120.3-120.3 120.3-19.9 0-38.6-4.9-55.2-13.5l-135 261.9c57 29.6 121.7 46.4 190.2 46.4 228.8 0 415-186.2 415-415 0.1-49.7-8.6-97.2-24.7-141.3z"></path>
          </svg>
        </span> AI Song Generator
      </h2>
    </div>
    <div class="w-full max-h-[360px] pr-2 overflow-y-auto">
      <div class="w-full mx-auto px-2 mb-2 grid grid-cols-1 gap-2">
        <div class="drawer-content-container w-full flex flex-col items-start gap-4">
          <!-- <div class="w-full p-2 bg-gray-500/5 rounded-lg flex items-center justify-between">
            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-600" for="drawer-custom-mode">Custom Mode</label>
            <button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on" class="drawer-toggle peer inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input" id="drawer-custom-mode">
              <span class="drawer-toggle-knob pointer-events-none block h-4 w-4 rounded-full bg-background shadow-lg ring-0 transition-transform duration-200"></span>
            </button>
          </div> -->
          <div class="drawer-description-section w-full flex flex-col items-start space-y-2">
            <div class="w-full flex flex-col items-start gap-2">
              <label class="text-sm px-2 inline-flex items-center gap-1 text-gray-600" for="song-description">Song Description</label>
              <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-gray-500/5 relative">
                <textarea placeholder="Describe the style of music and the topic you want, AI will generate lyrics for you." class="w-full h-24 p-1 bg-transparent border-none text-sm text-gray-600 outline-none resize-none overflow-y-auto dialog-description"></textarea>
                <div class="w-full text-xs text-gray-400 text-right">0/199</div>
              </div>
            </div>
          </div>
          <div class="drawer-custom-fields w-full flex flex-col items-start gap-6 hidden">
            <div class="w-full flex flex-col items-start gap-2">
              <label for="suno-title-music" class="text-sm px-2 inline-flex items-center gap-1 text-gray-600">Title</label>
              <input type="text" name="suno-title-music" id="suno-title-music" class="w-full p-2 rounded-md border border-gray-500/20 bg-gray-500/5 text-gray-600" placeholder="Enter a title">
            </div>
            <div class="w-full flex flex-col items-start gap-2">
              <label for="style-of-music" class="text-sm px-2 inline-flex items-center gap-1 text-gray-600">Style of Music <span type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rq:" data-state="closed">
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-gray-300" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"></path>
                    </svg>
                  </span>
                </span>
              </label>
              <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-gray-500/5 relative">
                <textarea placeholder="Enter style of music" class="w-full h-24 p-1 bg-transparent border-none text-sm text-gray-600 outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"></textarea>
                <div class="absolute bottom-14 right-2 text-xs text-gray-400 text-right">0/120</div>
                <div class="absolute bottom-2 left-2 max-w-full overflow-x-auto whitespace-nowrap">
                  <div class="pb-1 flex space-x-1 overflow-x-auto mr-4">
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75" fdprocessedid="j6akue">ethereal</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75" fdprocessedid="86kbcs">funk</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75" fdprocessedid="zle5oj">dreamy</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75" fdprocessedid="n6o6bc">male voice</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75" fdprocessedid="denvpq">anthemic</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75" fdprocessedid="n59hs">violin</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">intense</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">electric guitar</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">pop</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">dreamy</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">synth</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">atmospheric</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">ambient</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">japanese</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">male vocals</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">catchy</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">psychedelic</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">soul</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">groovy</button>
                    <button class="font-sans text-gray-600 text-xs rounded-full px-3 py-1.5 bg-gray-400/20 bg-opacity-75">hard rock</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full p-2 bg-gray-500/5 rounded-lg flex items-center justify-between">
            <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-600" for="instrumental"> Instrumental <span type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r8:" data-state="closed">
                <span>
                  <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-gray-300" preserveAspectRatio="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"></path>
                  </svg>
                </span>
              </span>
            </label>
            <button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on" class="peer inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input" id="instrumental" fdprocessedid="h8llmy">
              <span data-state="unchecked" class="pointer-events-none block h-4 w-4 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-4 data-[state=unchecked]:translate-x-0"></span>
            </button>
          </div>
          <!-- <div class="w-full flex flex-col items-start space-y-2">
            <div class="w-full flex flex-col items-start gap-2">
              <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm px-2 inline-flex items-center gap-1 text-gray-600" for="Lyrics">Lyrics <span type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:rc:" data-state="closed">
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-gray-300" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"></path>
                    </svg>
                  </span>
                </span>
              </label>
              <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-gray-500/5 relative">
                <textarea placeholder="Write your own lyrics, two verses (8 lines) for the best result" class="w-full h-20 p-1 bg-transparent border-none text-sm text-gray-600 outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"></textarea>
                <div class="w-full text-xs text-gray-400 text-right">0/2999</div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <div class="mt-auto flex flex-col gap-2 p-4">
        <button  id="" aria-label="Create" class="generate-music-btnw-full p-3 text-white rounded-lg font-medium bg-fuchsia-500 transition duration-500 hover:bg-fuchsia-600 flex items-center justify-center gap-1" fdprocessedid="71wl1" type="button"> Generate Music <span>
            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 h-4 fill-white" preserveAspectRatio="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M839.8 64c-70.71 0.78-169.12 46.32-236.88 69.2-46.6 15.73-92.32 38.38-140.56 48.83-41.74 9-82.08 5-123.85 10.9-15 2.13-24.41 19.25-25 32.85-3 68.09 14.54 140.18 26.67 207.8-2.68 49.21-6.9 98.4-14.56 148-5.5 35.65-11.13 70.83-4.43 103.84a381.35 381.35 0 0 0-62.92 11.39c-57.61 15.4-117.48 38.31-140.19 98.42-6.42 17-8.07 32.75-6.44 47.32 2.9 53.95 43.24 104.38 108.7 114.9 105.45 16.95 259.74-52.53 251-175.55-3.38-47.39-27.07-73.67-59.35-86.8 9.16-46.45-2.33-115-4.16-139.08-3.87-51-13.07-104.6-20.15-158.29 146.72-2.09 286.82-89.37 430.54-106.87a44 44 0 0 0 10.11-2.53c-8.75 111.27-7.82 233.35-31.33 341.9a160.55 160.55 0 0 1-16.33-1.81c-14.2-2.2-27.69-1.59-42-0.74-36.26 2.16-74.24 11.55-105.32 30.69-112.76 69.42-75.56 228.92 55.54 241.35s220.56-105.33 165.8-211.06c21.71-27.3 16.61-107.71 19-128.68 10-87.75 16-175.91 23.39-263.92C902.63 229.7 952.84 62.76 839.8 64zM701.17 834.71q-68.95-137.57 37.44-134.85a179.65 179.65 0 0 1 50 2.7c8.58 13.74 16 28.09 21.33 43.65q-23.52 86.18-108.77 88.5z m-300.66-67.25c7.3 0.55 12.1-3.06 14.94-8 22.54 38.86-9.6 94.7-43.3 115.37-22.86 14-54 25.82-84.36 32.12 7.32-17.88 13.4-36.18 17.23-55.18 0.78-3.88-5.15-5.56-6-1.65a262.52 262.52 0 0 1-19.73 58.48 199.25 199.25 0 0 1-35.72 3.26 109.82 109.82 0 0 1-21.86-2.67c0.24-46 33.64-90.91 52.21-130.84 2.53-5.43-5.55-10.2-8.09-4.73-19.42 41.77-52.93 84.92-56.31 132.32-0.64-0.21-1.35-0.3-2-0.53 3.81-9.12 2.2-20-9.6-26.5-1.46-0.81-2.6-1.68-4-2.51 8-38.4 23.13-77.56 47.27-107.64 3.89-4.84-2.6-11.76-7-7-25.15 27.39-44.37 67.49-52.4 106-45.32-37.88-7.9-89.13 45.1-109.74a375 375 0 0 1 38.83-12.42 10.07 10.07 0 0 0 6.17 2.59c17.54 1.15 34.08 6.33 51 10.42a2.86 2.86 0 0 0 2.58 3.72l9.64 0.44a4.69 4.69 0 0 0 3-0.93c20.65 3.57 41.62 4.04 62.4 5.62z m435.88-540.29c-6.91-4.54-16-6.66-27.42-4.33-146.11 30-277.25 119.28-425 145.17-4.18-37.26-6.65-74.37-4.8-110.52 34-1.4 67.12-0.32 101.54-9 59.74-15.15 116.45-41.42 175.19-59.85 31.27-9.81 147.7-63.62 175.59-51.51 14.64 6.34 10.39 51.75 4.9 90.04z"></path>
            </svg>
          </span>
        </button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    // Close Drawer Function
    function closeDrawer() {
      $('#drawer').addClass('hidden');
      // Optional: If you want to reset any states
      $('#drawer').attr('data-state', 'closed');
    }

    // Custom Mode Toggle
    $(document).on('click', '#drawer-custom-mode', function() {
      const $switch = $(this);
      const $knob = $switch.find('.drawer-toggle-knob');
      const $container = $switch.closest('.drawer-content-container');
      const $description = $container.find('.drawer-description-section');
      const $customFields = $container.find('.drawer-custom-fields');
      const isChecked = $switch.attr('aria-checked') === 'true';
      
      if (!isChecked) {
        // Switch ON
        $switch.attr('aria-checked', 'true')
               .removeClass('data-[state=unchecked]:bg-input')
               .addClass('data-[state=checked]:bg-primary');
        $knob.attr('data-state', 'checked')
             .css('transform', 'translateX(16px)');
        
        $description.slideUp(300);
        $customFields.removeClass('hidden')
                     .css('display', 'flex')
                     .hide()
                     .slideDown(300);
      } else {
        // Switch OFF
        $switch.attr('aria-checked', 'false')
               .removeClass('data-[state=checked]:bg-primary')
               .addClass('data-[state=unchecked]:bg-input');
        $knob.attr('data-state', 'unchecked')
             .css('transform', 'translateX(0)');
        
        $customFields.slideUp(300, function() {
          $(this).addClass('hidden');
          $description.slideDown(300);
        });
      }
    });

    // Generate Music Button
    $('.generate-music-btnw-full').on('click', function() {
      const $button = $(this);
      // Show loader
      $button.html('<span class="loader"></span>');
      $button.prop('disabled', true);

      const description = $('.dialog-description').val();
      // alert(description);
      const isCustomMode = $('#drawer-custom-mode').attr('aria-checked') === 'true';
      const isInstrumental = $('#instrumental').attr('aria-checked') === 'true';
      console.log(description);
      if (!isCustomMode) {
        const token = $('meta[name="csrf-token"]').attr('content');
        
        $.ajax({
          url: '{{ env('LOCAL_URL') }}website/song/web-prompt-mode',
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': token
          },
          data: JSON.stringify({
            gpt_description_prompt: description,
            make_instrumental: isInstrumental,
            mv: 'chirp-v3-5',
            prompt: 'vocal female'
          }),
          success: function(data) {
            // Trigger song loading and playback
            loadSongs(); // Assuming this function exists
            window.dispatchEvent(new CustomEvent('playSong', { 
              detail: data.data 
            }));

            // Close the drawer after successful generation
            closeDrawer();
          },
          error: function(xhr, status, error) {
            console.error('Error:', error);
            // Optionally show an error message
            alert('Failed to generate music. Please try again.');
          },
          complete: function() {
            // Reset button
            $button.html('Generate Music');
            $button.prop('disabled', false);
            $('textarea[placeholder*="Describe the style of music"]').val('');
          }
        });
      }
    });

    // Style Tag Buttons
    $('.pb-1.flex.space-x-1 button').on('click', function() {
      const $textarea = $('#style-of-music');
      const tag = $(this).text().trim();
      
      const currentTags = $textarea.val().split(' ').map(t => t.trim()).filter(t => t);
      
      if (currentTags.includes(tag)) return;
      
      const cursorPos = $textarea[0].selectionStart;
      const textBefore = $textarea.val().substring(0, cursorPos);
      const textAfter = $textarea.val().substring(cursorPos);
      
      const separator = textBefore.length > 0 && !textBefore.endsWith(' ') ? ' ' : '';
      $textarea.val(textBefore + separator + tag + ' ' + textAfter);
      
      const newPosition = cursorPos + separator.length + tag.length + 1;
      $textarea[0].setSelectionRange(newPosition, newPosition);
      $textarea.focus();
    });

    // Close Drawer Button
    $('#close-drawer').on('click', function() {
      closeDrawer();
    });
  });
</script>
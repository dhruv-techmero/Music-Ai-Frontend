<div class="hidden lg:flex w-full lg:w-72 h-full p-2 md:overflow-y-auto lg:overflow-y-auto bg-white/5 relative flex-col items-start gap-4">
  <div class="w-full h-[94%] pr-2 overflow-y-auto">
    <div class="w-full flex flex-col rounded-xl">
      <div class="w-full mx-auto px-2 mb-2 grid grid-cols-1 gap-2">
        <div class="w-full flex flex-col items-start gap-4">
          <div class="w-full flex flex-col items-start gap-2">
            <!-- Custom Mode Toggle -->
            <div class="w-full p-2 bg-white/10 rounded-lg flex items-center justify-between">
              <button type="button" class="toggle-switch toggle-off bg-gray-300" role="switch" id="custom-mode" aria-checked="false">
                <span class="toggle-knob bg-white shadow-sm"></span>
              </button>
              <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-300" for="custom-mode"> Custom Mode </label>
            </div>
            <!-- Description section (always visible) -->
            <div class="w-full flex flex-col items-start gap-2" id="prompt-description">
              <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm px-2 inline-flex items-center gap-1 text-gray-300" for="song-description"> Song Description <button data-state="closed">
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-gray-300" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"></path>
                    </svg>
                  </span>
                </button>
              </label>
              <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-white/10 relative">
                <textarea placeholder="Describe the style of music and the topic you want, AI will generate lyrics for you. " class="w-full h-40 p-1 bg-transparent border-none text-sm text-white outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"></textarea>
                <div class="w-full text-xs text-gray-400 text-right">0/199</div>
              </div>
            </div>
            <!-- Additional fields (hidden by default) -->
            <div class="w-full flex flex-col items-start gap-6 custom-fields" style="display: none;" id="custom-fields">
              <!-- Title Input -->
              <div class="w-full flex flex-col items-start gap-2">
                <label for="suno-title-music" class="text-sm px-2 inline-flex items-center gap-1 text-gray-300"> Title </label>
                <input type="text" name="suno-title-music" id="suno-title-music" class="w-full p-2 rounded-md border border-gray-500/20 bg-white/10 text-gray-100 text-sm shadow-sm ring-1 ring-inset ring-gray-500/20 placeholder:text-gray-400 focus:outline-none" placeholder="Enter a title">
              </div>
              <!-- Style of Music Input -->
              <div class="relative w-full flex flex-col items-start gap-2">
                <label for="style-of-music" class="text-sm px-2 inline-flex items-center gap-1 text-gray-300"> Style of Music <button type="button" data-state="closed">
                    <span>
                      <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-gray-300" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"></path>
                      </svg>
                    </span>
                  </button>
                </label>
                <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-white/10 relative">
                  <textarea id="style-of-music" placeholder="Enter style of music" class="w-full h-40 p-1 bg-transparent border-none text-sm text-white outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"></textarea>
                  <div class="absolute bottom-14 right-2 text-xs text-gray-400 text-right"> 0/120 </div>
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
                  <button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on" class="peer inline-flex h-5 w-9 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input" id="instrumental">
                    <span data-state="unchecked" class="pointer-events-none block h-4 w-4 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-4 data-[state=unchecked]:translate-x-0"></span>
                  </button>
                  <label class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 px-2 inline-flex items-center gap-1 text-gray-300" for="instrumental"> Instrumental <button data-state="closed">
                      <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-gray-300" preserveAspectRatio="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"></path>
                        </svg>
                      </span>
                    </button>
                  </label>
                </div>
              </div>
              <div class="w-full flex flex-col items-start space-y-2">
                <div class="w-full flex flex-col items-start gap-2">
                  <label class="font-medium peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm px-2 inline-flex items-center gap-1 text-gray-300" for="Lyrics">Lyrics <button data-state="closed" fdprocessedid="sexw0e">
                      <span>
                        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-gray-300" preserveAspectRatio="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M512 77C271.8 77 77 271.8 77 512s194.8 435 435 435 435-194.8 435-435S752.2 77 512 77z m-2.8 739.4c-35.4 0-64.2-28.2-64.2-62.9s28.7-62.9 64.2-62.9c35.4 0 64.2 28.2 64.2 62.9s-28.7 62.9-64.2 62.9z m172.4-355.9c-12.6 19.8-39.3 46.7-80.3 80.8-21.2 17.6-34.4 31.8-39.5 42.6-5.1 10.7-7.5 29.9-7 57.6h-91.4c-0.2-13.1-0.4-21.1-0.4-24 0-29.6 4.9-53.9 14.7-73 9.8-19.1 29.4-40.6 58.7-64.4 29.3-23.9 46.9-39.5 52.6-46.9 8.8-11.7 13.3-24.6 13.3-38.6 0-19.5-7.9-36.2-23.5-50.2-15.6-13.9-36.8-20.9-63.3-20.9-25.6 0-47 7.3-64.2 21.8-17.2 14.5-32 46.5-35.5 66.3-3.3 18.7-93.4 26.6-92.3-11.3 1.1-37.9 20.8-79 54.6-108.8 33.8-29.8 78.2-44.7 133.1-44.7 57.8 0 103.7 15.1 137.9 45.3 34.2 30.2 51.2 65.3 51.2 105.4 0.1 22.2-6.2 43.2-18.7 63z"></path>
                        </svg>
                      </span>
                    </button>
                  </label>
                  <div class="w-full px-2 py-1 rounded-md border border-gray-500/20 bg-white/10 relative">
                    <textarea placeholder="Write your own lyrics, two verses (8 lines) for the best result" class="w-full h-40 p-1 bg-transparent border-none text-sm text-white outline-none resize-none overflow-y-auto disabled:cursor-not-allowed disabled:text-gray-1000 disabled:ring-gray-200"></textarea>
                    <div class="w-full text-xs text-gray-400 text-right">0/2999</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full p-2">
        <button id="generate-music-btn" aria-label="Create" class="w-full p-3 text-white rounded-lg font-medium bg-fuchsia-500 transition duration-500 hover:bg-fuchsia-600 flex items-center justify-center gap-1"> Generate Music </button>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('generate-music-btn').addEventListener('click', function() {
    const button = this;
    // Show loader
    button.innerHTML = '<span class="loader"></span>'; // Add loader HTML
    button.disabled = true; // Disable button to prevent multiple clicks

    const description = document.querySelector('textarea[placeholder*="Describe the style"]').value;
    const isCustomMode = document.getElementById('custom-mode').getAttribute('aria-checked') === 'true';
    
    if (!isCustomMode) {
      const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      const url = "{{ env('ROUTE_URL').'website/song/web-prompt-mode' }}";
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({
          gpt_description_prompt: null,
          make_instrumental: false,
          mv: 'chirp-v3-5',
          prompt: 'vocal female'
        })
      }).then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      }).then(data => {
        loadSongs(); // Assuming loadSongs is defined elsewhere
        const event = new CustomEvent('playSong', { 
                          detail: data.data 
                      });
                      window.dispatchEvent(event);
        // Use the song_id from the response
      }).catch(error => {
        console.error('Error:', error);
      }).finally(() => {
        // Remove loader and reset button
        button.innerHTML = 'Generate Music'; // Reset button text
        button.disabled = false; // Re-enable button
        document.querySelector('textarea[placeholder*="Describe the style"]').value = ''; // Clear input
      });
    }else{
      const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      const url = "{{ env('ROUTE_URL').'website/song/custom-mode' }}";
      
      // Get values from custom fields
      const title = document.getElementById('suno-title-music').value;
      const tags = document.getElementById('style-of-music').value;
      const prompt = document.querySelector('textarea[placeholder*="Write your own lyrics"]').value;
      const isInstrumental = document.getElementById('instrumental').getAttribute('aria-checked') === 'true';
      
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({
          title: title,
          gpt_description_prompt: null,
          tags: tags,
          make_instrumental: isInstrumental,
          mv: 'chirp-v3-5',
          prompt: prompt
        })
      }).then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      }).then(data => {
        loadSongs();
        const event = new CustomEvent('playSong', { 
          detail: data.data 
        });
        window.dispatchEvent(event);
      }).catch(error => {
        console.error('Error:', error);
      }).finally(() => {
        // Reset form and button
        button.innerHTML = 'Generate Music';
        button.disabled = false;
        document.getElementById('suno-title-music').value = '';
        document.getElementById('style-of-music').value = '';
        document.querySelector('textarea[placeholder*="Write your own lyrics"]').value = '';
      });
    }
  });
  // Add event listener for custom mode toggle
  document.getElementById('custom-mode').addEventListener('click', function() {
    const currentState = this.getAttribute('aria-checked') === 'true';
    const newState = !currentState;
    this.setAttribute('aria-checked', newState);
    // Get the elements to toggle using IDs
    const descriptionSection = document.getElementById('prompt-description');
    const customFields = document.getElementById('custom-fields');
    if (newState) {
      // alert('ON');
      // Custom mode is ON - hide description, show custom fields
      descriptionSection.style.display = 'none';
      descriptionSection.text = '';
      customFields.style.display = 'flex';
      customFields.classList.remove('hidden'); // Remove hidden class if present
      // $('#custom-mode').removeClass('toggle-on');
      // $('#custom-mode').addClass('toggle-off');
      $('#custom-mode').addClass('toggle-on');
      $('#custom-mode').removeClass('toggle-off');
    } else {
      // alert('OFF');
      // Custom mode is OFF - show description, hide custom fields
      descriptionSection.style.display = 'flex';
      customFields.style.display = 'none';
      customFields.classList.add('hidden'); // Add hidden class back
      // $('#custom-mode').addClass('toggle-on');
      // $('#custom-mode').removeClass('toggle-off');
      $('#custom-mode').removeClass('toggle-on');
      $('#custom-mode').addClass('toggle-off');
    }
  });
  // Add click handlers for style tag buttons
  document.querySelectorAll('.pb-1.flex.space-x-1 button').forEach(button => {
    button.addEventListener('click', function() {
      const textarea = document.getElementById('style-of-music');
      const tag = this.textContent.trim();
      // Check if tag already exists in textarea
      const currentTags = textarea.value.split(' ').map(t => t.trim()).filter(t => t);
      if (currentTags.includes(tag)) {
        return; // Skip if tag already exists
      }
      // Get current cursor position
      const cursorPos = textarea.selectionStart;
      const textBefore = textarea.value.substring(0, cursorPos);
      const textAfter = textarea.value.substring(cursorPos);
      // Insert tag with spacing logic
      const separator = textBefore.length > 0 && !textBefore.endsWith(' ') ? ' ' : '';
      textarea.value = textBefore + separator + tag + ' ' + textAfter;
      // Update cursor position after tag
      const newPosition = cursorPos + separator.length + tag.length + 1;
      textarea.setSelectionRange(newPosition, newPosition);
      // Focus back on textarea
      textarea.focus();
    });
  });
</script>
<style>
  /* Toggle Switch Styles */
  .toggle-switch {
    position: relative;
    width: 36px;
    height: 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .toggle-knob {
    position: absolute;
    top: 2px;
    left: 2px;
    width: 16px;
    height: 16px;
    background-color: white;
    border-radius: 50%;
    transition: transform 0.3s ease;
    background-color: #0096FF;
  }

  .toggle-on .toggle-knob {
    transform: translateX(16px);
  }

  /* Optional: Add focus styles */
  .toggle-switch:focus {
    outline: 2px solid #4f46e5;
    outline-offset: 2px;
  }

  .loader {
    border: 2px solid transparent;
    border-top: 2px solid white;
    border-radius: 50%;
    width: 16px;
    height: 16px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>
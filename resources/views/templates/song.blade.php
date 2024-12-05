<div id="songContainer"></div>

<script>
const songTemplate = `
  <div class="w-full h-[400px] lg:h-[90%] p-4 pb-32 lg:p-10 overflow-y-auto">
    <div class="w-full">
      <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full object-cover blur-xl opacity-50 absolute top-0 left-0 z-[-1]" src="" style="color: transparent;" />
      <div class="w-1/2 lg:w-1/3 mx-auto">
        <div class="w-full aspect-square rounded-lg relative overflow-hidden">
          <div class="w-full aspect-square relative">
            <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full object-cover rounded-lg" src="" style="color: transparent;" />
          </div>
          <div class="w-full p-2 bg-black/35 text-gray-50 flex items-center justify-between gap-2 absolute bottom-0 left-0">
            <div class="w-[80%] flex flex-col items-start gap-0.5">
              <p class="w-full font-semibold truncate"></p>
              <p class="text-xs text-gray-200 truncate"></p>
            </div>
            <p class="w-8 h-8 rounded-lg bg-black/40 hover:bg-fuchsia-600 inline-flex items-center justify-center cursor-pointer transform duration-500" type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r6:" data-state="closed">
              <span>
                <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-white" preserveAspectRatio="none">
                  <path fill="evenodd" clip-rule="evenodd" d="M214.016 200.192c-12.288-11.776-32.256-11.776-44.544 0-12.288 11.776-12.288 30.72 0 42.496l44.544 42.496c12.288 11.776 32.256 11.776 44.544 0 12.288-11.776 12.288-30.72 0-42.496l-44.544-42.496z m595.968 0l-44.544 42.496c-12.288 11.776-12.288 30.72 0 42.496 12.288 11.776 32.256 11.776 44.544 0l44.544-42.496c12.288-11.776 12.288-30.72 0-42.496-12.288-11.776-32.256-11.776-44.544 0zM135.168 437.248H72.704c-17.408 0-31.232 13.312-31.232 29.696 0 16.384 13.824 30.208 31.232 30.208h62.976c17.408 0 31.232-13.312 31.232-30.208 0-16.384-14.336-29.696-31.744-29.696z m816.128 0h-62.976c-17.408 0-31.232 13.312-31.232 29.696 0 16.384 13.824 30.208 31.232 30.208h62.976c17.408 0 31.232-13.312 31.232-30.208 0-16.384-13.824-29.696-31.232-29.696zM480.768 92.672v59.904c0 16.384 13.824 29.696 31.232 29.696 17.408 0 31.232-13.312 31.232-29.696V92.672c0-16.384-13.824-29.696-31.232-29.696-17.408-0.512-31.232 13.312-31.232 29.696zM229.376 512c0 148.992 126.464 269.824 282.624 269.824s282.624-120.832 282.624-269.824-126.464-269.824-282.624-269.824S229.376 363.008 229.376 512z m219.648 419.328c0 16.384 13.824 30.208 31.232 30.208h62.976c17.408 0 31.232-13.312 31.232-30.208 0-16.384-13.824-30.208-31.232-30.208H480.768c-17.408 0.512-31.744 13.824-31.744 30.208z m-62.464-89.6c0 16.384 13.824 30.208 31.232 30.208h188.416c17.408 0 31.232-13.312 31.232-30.208 0-16.384-13.824-30.208-31.232-30.208H417.792c-17.408 0-31.232 13.312-31.232 30.208z"></path>
                </svg>
              </span>
            </p>
          </div>
        </div>
        <div class="w-full my-4 mx-auto flex items-center justify-between gap-2">
          <div class="w-full text-gray-300 text-sm break-words whitespace-pre-line flex flex-col items-start gap-4">
          </div>
        </div>
      </div>
    </div>
    <div class="w-full h-20 bg-black/5 backdrop-blur-sm flex items-center justify-center absolute bottom-0 left-0">
      <div role="group" tabindex="0" aria-label="Audio player" class="rhap_container rhap_loop--off rhap_play-status--paused w-full !py-6 !shadow-none">
        <audio src="" preload="auto"></audio>
        <div class="rhap_main rhap_horizontal">
          <div class="rhap_progress-section">
            <div class="rhap_main-controls">
              <button aria-label="Rewind" class="rhap_button-clear rhap_main-controls-button rhap_rewind-button" type="button" fdprocessedid="xf6r3s">
                <span>
                  <svg class="w-6 h-6 fill-gray-100" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22 11.03a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM3 6.75l-.53-.53a.75.75 0 0 0 0 1.06L3 6.75Zm4.28-3.22a.75.75 0 0 0-1.06-1.06l1.06 1.06ZM13.5 18a.75.75 0 0 0 0 1.5V18ZM7.28 9.97 3.53 6.22 2.47 7.28l3.75 3.75 1.06-1.06ZM3.53 7.28l3.75-3.75-1.06-1.06-3.75 3.75 1.06 1.06Zm16.72 5.47c0 2.9-2.35 5.25-5.25 5.25v1.5a6.75 6.75 0 0 0 6.75-6.75h-1.5ZM15 7.5c2.9 0 5.25 2.35 5.25 5.25h1.5A6.75 6.75 0 0 0 15 6v1.5ZM15 6H3v1.5h12V6Zm0 12h-1.5v1.5H15V18Z"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 15.75h.75V21"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 16.5A.75.75 0 0 0 9 15v1.5Zm-2.25-.75V15a.75.75 0 0 0-.75.75h.75Zm0 2.25H6c0 .414.336.75.75.75V18Zm0 2.25a.75.75 0 0 0 0 1.5v-1.5ZM9 15H6.75v1.5H9V15Zm-3 .75V18h1.5v-2.25H6Zm.75 3h1.5v-1.5h-1.5v1.5Zm1.5 1.5h-1.5v1.5h1.5v-1.5ZM9 19.5a.75.75 0 0 1-.75.75v1.5a2.25 2.25 0 0 0 2.25-2.25H9Zm-.75-.75a.75.75 0 0 1 .75.75h1.5a2.25 2.25 0 0 0-2.25-2.25v1.5Z"></path>
                  </svg>
                </span>
              </button>
              <button aria-label="Play" class="rhap_button-clear rhap_main-controls-button rhap_play-pause-button" type="button" fdprocessedid="xmznf9">
                <span>
                  <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 h-6 fill-gray-100" preserveAspectRatio="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M385.237333 228.266667l350.933334 210.56c55.253333 33.152 55.253333 113.194667 0 146.346666L385.28 795.733333c-40.789333 24.490667-89.6 10.325333-113.92-24.149333l-0.042667 0.042667a42.666667 42.666667 0 1 0-73.216 43.946666l-0.085333 0.042667c47.36 72.533333 147.626667 103.424 231.168 53.333333l350.933333-210.602666c110.506667-66.304 110.506667-226.389333 0-292.693334l-350.933333-210.56C315.392 86.826667 170.666667 168.746667 170.666667 301.44V640a42.666667 42.666667 0 1 0 85.333333 0V301.44C256 235.093333 328.362667 194.133333 385.237333 228.266667z"></path>
                  </svg>
                </span>
              </button>
              <button aria-label="Forward" class="rhap_button-clear rhap_main-controls-button rhap_forward-button" type="button" fdprocessedid="ncdmo8">
                <span>
                  <svg class="w-6 h-6 fill-gray-100" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.72 9.97a.75.75 0 1 0 1.06 1.06l-1.06-1.06ZM21 6.75l.53.53a.75.75 0 0 0 0-1.06l-.53.53Zm-3.22-4.28a.75.75 0 1 0-1.06 1.06l1.06-1.06ZM10.5 19.5a.75.75 0 0 0 0-1.5v1.5Zm3.75-4.5a.75.75 0 0 0 0 1.5V15Zm.75.75h.75A.75.75 0 0 0 15 15v.75ZM14.25 21a.75.75 0 0 0 1.5 0h-1.5Zm6-4.5a.75.75 0 0 0 0-1.5v1.5ZM18 15.75V15a.75.75 0 0 0-.75.75H18ZM18 18h-.75c0 .414.336.75.75.75V18Zm0 2.25a.75.75 0 0 0 0 1.5v-1.5Zm-.22-9.22 3.75-3.75-1.06-1.06-3.75 3.75 1.06 1.06Zm3.75-4.81-3.75-3.75-1.06 1.06 3.75 3.75 1.06-1.06ZM2.25 12.75A6.75 6.75 0 0 0 9 19.5V18a5.25 5.25 0 0 1-5.25-5.25h-1.5ZM9 6a6.75 6.75 0 0 0-6.75 6.75h1.5C3.75 9.85 6.1 7.5 9 7.5V6Zm0 1.5h12V6H9v1.5Zm0 12h1.5V18H9v1.5Zm5.25-3H15V15h-.75v1.5Zm0-.75V21h1.5v-5.25h-1.5Zm6-.75H18v1.5h2.25V15Zm-3 .75V18h1.5v-2.25h-1.5Zm.75 3h1.5v-1.5H18v1.5Zm1.5 1.5H18v1.5h1.5v-1.5Zm.75-.75a.75.75 0 0 1-.75.75v1.5a2.25 2.25 0 0 0 2.25-2.25h-1.5Zm-.75-.75a.75.75 0 0 1 .75.75h1.5a2.25 2.25 0 0 0-2.25-2.25v1.5Z"></path>
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
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M143.36 737.28a81.92 81.92 0 0 1-81.92-81.92V368.64a81.92 81.92 0 0 1 81.92-81.92h163.84l171.6224-148.74624A81.92 81.92 0 0 1 614.4 199.8848v624.2304a81.92 81.92 0 0 1-135.5776 61.91104L307.2 737.28H143.36z m684.83072-515.4816A358.07232 358.07232 0 0 1 962.56 501.76a358.07232 358.07232 0 0 1-134.36928 279.9616 30.72 30.72 0 0 1-38.46144-47.9232 296.63232 296.63232 0 0 0 111.4112-232.0384c0-91.40224-41.472-175.9232-111.4112-232.0384a30.72 30.72 0 1 1 38.46144-47.9232z m-114.9952 121.18016C772.7104 382.09536 808.96 444.14976 808.96 512c0 67.85024-36.2496 129.90464-95.76448 169.02144a30.72 30.72 0 1 1-33.75104-51.32288C722.3296 601.4976 747.52 558.32576 747.52 512s-25.21088-89.51808-68.07552-117.69856a30.72 30.72 0 1 1 33.75104-51.32288z"></path>
                  </svg>
                </span>
              </button>
              <div role="progressbar" aria-label="Volume control" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" tabindex="0" class="rhap_volume-bar-area">
                <div class="rhap_volume-bar">
                  <div class="rhap_volume-indicator" style="left: 100%; transition-duration: 0s;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-2 py-1 transition duration-300 group inline-flex items-center justify-center gap-2">
        <span>
          <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 transition duration-300 fill-white cursor-pointer group-hover:fill-[#d946ef]' : 'fill-neutral-500'" preserveAspectRatio="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M908.8 214.4c-9.6-12.8-19.2-22.4-28.8-32-112-115.2-230.4-105.6-342.4-16-9.6 6.4-19.2 16-28.8 25.6-9.6-9.6-19.2-16-28.8-25.6-112-86.4-230.4-99.2-342.4 16-9.6 9.6-19.2 19.2-25.6 32-134.4 195.2-60.8 387.2 137.6 560 44.8 38.4 89.6 73.6 137.6 102.4 16 9.6 32 19.2 44.8 28.8 9.6 6.4 12.8 9.6 19.2 9.6 3.2 3.2 6.4 3.2 12.8 6.4 3.2 3.2 9.6 3.2 16 6.4 25.6 6.4 64 3.2 89.6-12.8 3.2 0 9.6-3.2 16-9.6 12.8-6.4 28.8-16 44.8-28.8 48-28.8 92.8-64 137.6-102.4C969.6 598.4 1043.2 406.4 908.8 214.4zM736 732.8c-41.6 35.2-86.4 70.4-131.2 99.2-16 9.6-28.8 19.2-44.8 25.6-6.4 3.2-12.8 6.4-16 9.6-6.4 3.2-16 6.4-25.6 9.6-3.2 0-6.4 0-9.6 0-6.4 0-12.8 0-16 0-3.2 0-3.2 0-3.2 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0-3.2 0-3.2-3.2-3.2 0-6.4-3.2-9.6-3.2-3.2-3.2-9.6-6.4-16-9.6-12.8-6.4-28.8-16-44.8-25.6-44.8-28.8-89.6-60.8-131.2-99.2-179.2-160-243.2-323.2-131.2-489.6 6.4-9.6 16-16 22.4-25.6 89.6-96 182.4-86.4 275.2-12.8 9.6 6.4 16 12.8 22.4 19.2 0 0 0 0 0 0l28.8 32c3.2 3.2 3.2 3.2 6.4 6.4 0 0 0 0 0 0l0 0c3.2-3.2 9.6-9.6 16-16 12.8-12.8 25.6-25.6 41.6-38.4 92.8-73.6 185.6-83.2 275.2 12.8 6.4 9.6 16 16 22.4 25.6C982.4 406.4 918.4 572.8 736 732.8z"></path>
          </svg>
        </span>
      </div>
      <div class="px-2 py-1 transition duration-300 group inline-flex items-center justify-center gap-2 text-white hover:text-emerald-500 cursor-pointer">
        <span>
          <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 transition duration-300 fill-white group-hover:fill-[#d946ef]" preserveAspectRatio="none">
            <path d="M874.666667 544c-17.066667 0-32 14.933333-32 32v256c0 6.4-4.266667 10.666667-10.666667 10.666667H192c-6.4 0-10.666667-4.266667-10.666667-10.666667V192c0-6.4 4.266667-10.666667 10.666667-10.666667h256c17.066667 0 32-14.933333 32-32s-14.933333-32-32-32H192C151.466667 117.333333 117.333333 151.466667 117.333333 192v640c0 40.533333 34.133333 74.666667 74.666667 74.666667h640c40.533333 0 74.666667-34.133333 74.666667-74.666667V576c0-17.066667-14.933333-32-32-32z" p-id="4223"></path>
            <path d="M874.666667 117.333333H640c-17.066667 0-32 14.933333-32 32s14.933333 32 32 32h157.866667L509.866667 467.2c-12.8 12.8-12.8 32 0 44.8 6.4 6.4 14.933333 8.533333 23.466666 8.533333s17.066667-2.133333 23.466667-8.533333l285.866667-285.866667V384c0 17.066667 14.933333 32 32 32s32-14.933333 32-32V149.333333c0-17.066667-14.933333-32-32-32z" p-id="4224"></path>
          </svg>
        </span>
      </div>
      <div class="px-2 py-1 hover:text-emerald-500 cursor-pointer transition duration-300 group inline-flex items-center justify-center gap-2">
        <span>
          <svg aria-hidden="true" viewBox="0 0 1077 1024" class="w-[18px] fill-white transition duration-300 group-hover:fill-[#d946ef]" preserveAspectRatio="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M269.473684 0a53.894737 53.894737 0 0 1 6.305684 107.412211L269.473684 107.789474H161.684211a53.894737 53.894737 0 0 0-53.517474 47.589052L107.789474 161.684211v700.631578a53.894737 53.894737 0 0 0 47.589052 53.517474L161.684211 916.210526h754.526315a53.894737 53.894737 0 0 0 53.517474-47.589052L970.105263 862.315789V161.684211a53.894737 53.894737 0 0 0-47.589052-53.517474L916.210526 107.789474h-107.789473a53.894737 53.894737 0 0 1-6.305685-107.412211L808.421053 0h107.789473a161.684211 161.684211 0 0 1 161.414737 152.198737L1077.894737 161.684211v700.631578a161.684211 161.684211 0 0 1-152.198737 161.414737L916.210526 1024H161.684211a161.684211 161.684211 0 0 1-161.414737-152.198737L0 862.315789V161.684211A161.684211 161.684211 0 0 1 152.198737 0.269474L161.684211 0h107.789473z m269.473684 0a53.894737 53.894737 0 0 1 53.894737 53.894737v570.421895l123.580632-123.472843a53.894737 53.894737 0 0 1 71.141052-4.473263l5.066106 4.473263a53.894737 53.894737 0 0 1 4.473263 71.141053l-4.473263 5.066105-215.578948 215.578948a53.894737 53.894737 0 0 1-76.207158 0l-215.578947-215.578948a53.894737 53.894737 0 0 1 71.141053-80.680421l5.066105 4.473263L485.052632 624.424421V53.894737a53.894737 53.894737 0 0 1 53.894736-53.894737z"></path>
          </svg>
        </span>
      </div>
    </div>
  </div>
`;

// Add the template to the container when page loads
document.getElementById('songContainer').innerHTML = songTemplate;

// Update the playSong event listener
window.addEventListener('playSong', function(event) {
    const songData = event.detail;
    console.log('Song Data:', songData); // Debug log to check the data

    // Update both cover images (blur background and main image)
    const coverImages = document.querySelectorAll('#songContainer img[alt="cover"]');
    coverImages.forEach(img => {
        if (songData.image_url) {
            img.src = songData.image_url;
            // Remove any error-related classes and ensure image is visible
            img.style.display = 'block';
            img.onerror = function() {
                console.error('Failed to load image:', songData.image_url);
                // Optionally set a fallback image
                this.src = '/path/to/fallback-image.jpg';
            };
        }
    });

    // Update song title and tags
    const titleElement = document.querySelector('.font-semibold.truncate');
    const tagsElement = document.querySelector('.text-xs.text-gray-200.truncate');
    if (titleElement) titleElement.textContent = songData.title;
    if (tagsElement) tagsElement.textContent = songData.tags;

    // Update audio source and setup player
    const audioElement = document.querySelector('audio');
    const playButton = document.querySelector('.rhap_play-pause-button');
    
    if (audioElement && playButton) {
        console.log('Audio URL:', songData.audio_url);
        audioElement.src = songData.audio_url;
        
        // Attempt to play the audio
        audioElement.play().catch(error => {
            console.error('Error playing audio:', error);
        });
        
        // Update play button icon based on play state
        const updatePlayButtonIcon = () => {
            const isPlaying = !audioElement.paused;
            playButton.innerHTML = `
                <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 h-6 fill-gray-100" preserveAspectRatio="none">
                        ${isPlaying ? 
                            // Pause icon
                            '<path d="M682.667 170.667c37.547 0 68 30.453 68 68v546.666c0 37.547-30.453 68-68 68s-68-30.453-68-68V238.667c0-37.547 30.453-68 68-68z m-341.334 0c37.547 0 68 30.453 68 68v546.666c0 37.547-30.453 68-68 68s-68-30.453-68-68V238.667c0-37.547 30.453-68 68-68z"></path>' :
                            // Play icon
                            '<path fill-rule="evenodd" clip-rule="evenodd" d="M385.237333 228.266667l350.933334 210.56c55.253333 33.152 55.253333 113.194667 0 146.346666L385.28 795.733333c-40.789333 24.490667-89.6 10.325333-113.92-24.149333l-0.042667 0.042667a42.666667 42.666667 0 1 0-73.216 43.946666l-0.085333 0.042667c47.36 72.533333 147.626667 103.424 231.168 53.333333l350.933333-210.602666c110.506667-66.304 110.506667-226.389333 0-292.693334l-350.933333-210.56C315.392 86.826667 170.666667 168.746667 170.666667 301.44V640a42.666667 42.666667 0 1 0 85.333333 0V301.44C256 235.093333 328.362667 194.133333 385.237333 228.266667z"></path>'
                        }
                    </svg>
                </span>
            `;
        };

        // Add play/pause click handler
        playButton.addEventListener('click', () => {
            if (audioElement.paused) {
                audioElement.play();
            } else {
                audioElement.pause();
            }
        });

        // Update button state when play/pause state changes
        audioElement.addEventListener('play', updatePlayButtonIcon);
        audioElement.addEventListener('pause', updatePlayButtonIcon);
        
        // Initial button state
        updatePlayButtonIcon();

        // Progress bar functionality
        const progressContainer = document.querySelector('.rhap_progress-container');
        const progressBar = document.querySelector('.rhap_progress-filled');
        const progressIndicator = document.querySelector('.rhap_progress-indicator');
        const currentTimeDisplay = document.querySelector('.rhap_current-time');
        const totalTimeDisplay = document.querySelector('.rhap_total-time');

        // Update progress bar and time displays
        audioElement.addEventListener('timeupdate', () => {
            const progress = (audioElement.currentTime / audioElement.duration) * 100;
            progressBar.style.width = `${progress}%`;
            progressIndicator.style.left = `${progress}%`;
            
            // Update time displays
            currentTimeDisplay.textContent = formatTime(audioElement.currentTime);
            totalTimeDisplay.textContent = formatTime(audioElement.duration);
        });

        // Click handling for progress bar
        progressContainer.addEventListener('click', (e) => {
            const rect = progressContainer.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            audioElement.currentTime = pos * audioElement.duration;
        });

        // Volume control functionality
        const volumeButton = document.querySelector('.rhap_volume-button');
        const volumeBar = document.querySelector('.rhap_volume-bar');
        const volumeIndicator = document.querySelector('.rhap_volume-indicator');

        // Update volume on click
        volumeBar.addEventListener('click', (e) => {
            const rect = volumeBar.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            audioElement.volume = Math.max(0, Math.min(1, pos));
            volumeIndicator.style.left = `${pos * 100}%`;
            updateVolumeIcon();
        });

        // Mute/unmute on volume button click
        let previousVolume = 1;
        volumeButton.addEventListener('click', () => {
            if (audioElement.volume > 0) {
                previousVolume = audioElement.volume;
                audioElement.volume = 0;
            } else {
                audioElement.volume = previousVolume;
            }
            volumeIndicator.style.left = `${audioElement.volume * 100}%`;
            updateVolumeIcon();
        });

        // Update volume icon based on current volume
        const updateVolumeIcon = () => {
            const volume = audioElement.volume;
            volumeButton.innerHTML = `
                <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 h-4 lg:w-5 lg:h-5 fill-gray-100" preserveAspectRatio="none">
                        ${volume === 0 ? 
                            // Muted icon
                            '<path d="M512 128v768h-64V128h64z m256 0v768h-64V128h64z"></path>' :
                            // Volume icon (existing path)
                            '<path fill-rule="evenodd" clip-rule="evenodd" d="M143.36 737.28a81.92 81.92 0 0 1-81.92-81.92V368.64a81.92 81.92 0 0 1 81.92-81.92h163.84l171.6224-148.74624A81.92 81.92 0 0 1 614.4 199.8848v624.2304a81.92 81.92 0 0 1-135.5776 61.91104L307.2 737.28H143.36z m684.83072-515.4816A358.07232 358.07232 0 0 1 962.56 501.76a358.07232 358.07232 0 0 1-134.36928 279.9616 30.72 30.72 0 0 1-38.46144-47.9232 296.63232 296.63232 0 0 0 111.4112-232.0384c0-91.40224-41.472-175.9232-111.4112-232.0384a30.72 30.72 0 1 1 38.46144-47.9232z"></path>'
                        }
                    </svg>
                </span>
            `;
        };

        // Helper function to format time
        const formatTime = (seconds) => {
            if (isNaN(seconds)) return '00:00';
            const minutes = Math.floor(seconds / 60);
            seconds = Math.floor(seconds % 60);
            return `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        };

        // Initial volume icon state
        updateVolumeIcon();
    }

    // Update lyrics if present
    const lyricsElement = document.querySelector('.text-gray-300.text-sm.break-words');
    if (lyricsElement && songData.lyrics) {
        lyricsElement.textContent = songData.lyrics;
    }

    
});
</script>
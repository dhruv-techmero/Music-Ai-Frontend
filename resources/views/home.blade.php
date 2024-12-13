@extends('home-layout.layout')

@section('content')
      <main>
        <div class="w-full pt-24 pb-10 md:pb-14 lg:pt-32 overflow-hidden relative">
          <section class="relative">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
              <div class="flex flex-col items-center justify-center gap-8">
                <h1 class="w-full lg:max-w-4xl mx-auto text-4xl text-center font-semibold md:text-6xl !leading-[120%]">AI Song Generator Free Online</h1>
                <p class="w-full lg:max-w-3xl mx-auto text-base text-center text-fuchsia-300">Create high-quality, royalty-free music in seconds with the AI song generator. Enjoy free online access and generate unique songs for any project.</p>
                <div class="w-full mt-6 flex items-center justify-center">
                  <a class="px-6 py-3 tracking-wide rounded-full uppercase text-zinc-800 text-lg border border-fuchsia-300/10 bg-fuchsia-400 backdrop-blur-md shadow-xl shadow-fuchsia-500/10 font-semibold overflow-hidden flex items-center gap-2 relative z-0 transition duration-500
                                before:absolute before:inset-0 before:-z-10 before:translate-x-[150%] before:translate-y-[150%] before:scale-[2.5] before:rounded-[100%] before:bg-fuchsia-300 before:transition-transform before:duration-1000 before:content-[&quot;&quot;]
                                hover:scale-105 hover:text-neutral-900 hover:before:translate-x-[0%] hover:before:translate-y-[0%] active:scale-95" href="{{ route('song-generate-view') }}">Create Your Song Now</a>
                </div>
              </div>
            </div>
          </section>
          <section class="mt-10 lg:mt-14">
            
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div class="w-full h-full md:max-h-[630px] rounded-lg bg-zinc-900/20 backdrop-blur-md border border-gray-800 md:flex items-stretch">
                <div class="w-full p-4 md:flex-[40_1_0%]">
                  <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4">
                    @foreach ($songs as $song)  
                    <div class="w-full p-2 rounded-lg bg-white/5 backdrop-blur-md shadow-lg shadow-fuchsia-500/5 border hover:bg-fuchsia-500/5 transition duration-500 group flex items-start justify-between gap-2 border-fuchsia-500">
                      <div class="w-16 h-16 rounded-md relative transition duration-500 group cursor-pointer play-button" data-audio-url="{{ $song['audio_url'] }}">
                        <div class="w-full h-full rounded-md relative">
                          <img alt="{{ $song['title'] }}" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full rounded-md object-cover" src="{{ $song['image_url'] }}" onerror="this.onerror=null; this.src='{{ asset('images/default-song.png') }}'">
                        </div>
                        <div class="w-full h-full absolute top-0 left-0 text-gray-100 bg-white/40 rounded-md transition duration-500 inline-flex items-center justify-center">
                          <span>
                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-gray-700" preserveAspectRatio="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M780.8 475.733333L285.866667 168.533333c-27.733333-17.066667-64 4.266667-64 36.266667v614.4c0 32 36.266667 53.333333 64 36.266667l492.8-307.2c29.866667-14.933333 29.866667-57.6 2.133333-72.533334z"></path>
                            </svg>
                          </span>
                        </div>
                      </div>
                      <div class="flex flex-1 flex-col items-start gap-1">
                        <div class="w-full flex flex-col items-start">
                          <div class="w-full flex items-start justify-between">
                            <p class="w-[90%] font-semibold transition duration-500 hover:text-emerald-600 line-clamp-1">{{ $song['title'] }}</p>
                            <span title="Collect">
                              <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 mt-0.5 fill-white group-hover:fill-rose-500 transition duration-500" preserveAspectRatio="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M908.8 214.4c-9.6-12.8-19.2-22.4-28.8-32-112-115.2-230.4-105.6-342.4-16-9.6 6.4-19.2 16-28.8 25.6-9.6-9.6-19.2-16-28.8-25.6-112-86.4-230.4-99.2-342.4 16-9.6 9.6-19.2 19.2-25.6 32-134.4 195.2-60.8 387.2 137.6 560 44.8 38.4 89.6 73.6 137.6 102.4 16 9.6 32 19.2 44.8 28.8 9.6 6.4 12.8 9.6 19.2 9.6 3.2 3.2 6.4 3.2 12.8 6.4 3.2 3.2 9.6 3.2 16 6.4 25.6 6.4 64 3.2 89.6-12.8 3.2 0 9.6-3.2 16-9.6 12.8-6.4 28.8-16 44.8-28.8 48-28.8 92.8-64 137.6-102.4C969.6 598.4 1043.2 406.4 908.8 214.4zM736 732.8c-41.6 35.2-86.4 70.4-131.2 99.2-16 9.6-28.8 19.2-44.8 25.6-6.4 3.2-12.8 6.4-16 9.6-6.4 3.2-16 6.4-25.6 9.6-3.2 0-6.4 0-9.6 0-6.4 0-12.8 0-16 0-3.2 0-3.2 0-3.2 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0-3.2 0-3.2-3.2-3.2 0-6.4-3.2-9.6-3.2-3.2-3.2-9.6-6.4-16-9.6-12.8-6.4-28.8-16-44.8-25.6-44.8-28.8-89.6-60.8-131.2-99.2-179.2-160-243.2-323.2-131.2-489.6 6.4-9.6 16-16 22.4-25.6 89.6-96 182.4-86.4 275.2-12.8 9.6 6.4 16 12.8 22.4 19.2 0 0 0 0 0l28.8 32c3.2 3.2 3.2 3.2 6.4 6.4 0 0 0 0 0 0l0 0c3.2-3.2 9.6-9.6 16-16 12.8-12.8 25.6-25.6 41.6-38.4 92.8-73.6 185.6-83.2 275.2 12.8 6.4 9.6 16 16 22.4 25.6C982.4 406.4 918.4 572.8 736 732.8z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M908.8 214.4c-9.6-12.8-19.2-22.4-28.8-32-112-115.2-230.4-105.6-342.4-16-9.6 6.4-19.2 16-28.8 25.6-9.6-9.6-19.2-16-28.8-25.6-112-86.4-230.4-99.2-342.4 16-9.6 9.6-19.2 19.2-25.6 32-134.4 195.2-60.8 387.2 137.6 560 44.8 38.4 89.6 73.6 137.6 102.4 16 9.6 32 19.2 44.8 28.8 9.6 6.4 12.8 9.6 19.2 9.6 3.2 3.2 6.4 3.2 12.8 6.4 3.2 3.2 9.6 3.2 16 6.4 25.6 6.4 64 3.2 89.6-12.8 3.2 0 9.6-3.2 16-9.6 12.8-6.4 28.8-16 44.8-28.8 48-28.8 92.8-64 137.6-102.4C969.6 598.4 1043.2 406.4 908.8 214.4zM736 732.8c-41.6 35.2-86.4 70.4-131.2 99.2-16 9.6-28.8 19.2-44.8 25.6-6.4 3.2-12.8 6.4-16 9.6-6.4 3.2-16 6.4-25.6 9.6-3.2 0-6.4 0-9.6 0-6.4 0-12.8 0-16 0-3.2 0-3.2 0-3.2 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0-3.2 0-3.2-3.2-3.2 0-6.4-3.2-9.6-3.2-3.2-3.2-9.6-6.4-16-9.6-12.8-6.4-28.8-16-44.8-25.6-44.8-28.8-89.6-60.8-131.2-99.2-179.2-160-243.2-323.2-131.2-489.6 6.4-9.6 16-16 22.4-25.6 89.6-96 182.4-86.4 275.2-12.8 9.6 6.4 16 12.8 22.4 19.2 0 0 0 0 0l28.8 32c3.2 3.2 3.2 3.2 6.4 6.4 0 0 0 0 0 0l0 0c3.2-3.2 9.6-9.6 16-16 12.8-12.8 25.6-25.6 41.6-38.4 92.8-73.6 185.6-83.2 275.2 12.8 6.4 9.6 16 16 22.4 25.6C982.4 406.4 918.4 572.8 736 732.8z"></path>
                              </svg>
                            </span>
                            
                          </div>
                        </div>
                        
                        {{-- Add username and date --}}
                        <div class="w-full flex items-center justify-between text-xs text-gray-400 mt-1">
                            <span class="truncate">{{ $song->users->name ?? 'Anonymous' }}</span>
                            <span>{{ \Carbon\Carbon::parse($song['created_at'])->diffForHumans() }}</span>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              
              </div>
            </div>
          </section>
          <div class="w-full fixed bottom-0 left-1/2 -translate-x-1/2 z-50 flex items-center justify-center">
            <div id="audioPlayer" class="w-full lg:px-4 p-2 bg-zinc-900 border-t border-gray-900 inline-flex items-center justify-center gap-2 relative" style="display: none;">
              <div role="group" tabindex="0" aria-label="Audio player" class="rhap_container rhap_loop--off rhap_play-status--paused w-full lg:max-w-7xl !py-6 !shadow-none">
                <audio src="https://tempfile.aiquickdraw.com/s/2e1228bd34474d839f6dda54644e537a.mp3" preload="auto"></audio>
                <div class="rhap_main rhap_horizontal">
                  <div class="rhap_progress-section">
                    <div class="rhap_main-controls">
                      <button aria-label="Rewind" class="rhap_button-clear rhap_main-controls-button rhap_rewind-button" type="button">
                        <span>
                          <svg class="w-6 h-6 fill-gray-200" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22 11.03a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM3 6.75l-.53-.53a.75.75 0 0 0 0 1.06L3 6.75Zm4.28-3.22a.75.75 0 0 0-1.06-1.06l1.06 1.06ZM13.5 18a.75.75 0 0 0 0 1.5V18ZM7.28 9.97 3.53 6.22 2.47 7.28l3.75 3.75 1.06-1.06ZM3.53 7.28l3.75-3.75-1.06-1.06-3.75 3.75 1.06 1.06Zm16.72 5.47c0 2.9-2.35 5.25-5.25 5.25v1.5a6.75 6.75 0 0 0 6.75-6.75h-1.5ZM15 7.5c2.9 0 5.25 2.35 5.25 5.25h1.5A6.75 6.75 0 0 0 15 6v1.5ZM15 6H3v1.5h12V6Zm0 12h-1.5v1.5H15V18Z"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 15.75h.75V21"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 16.5A.75.75 0 0 0 9 15v1.5Zm-2.25-.75V15a.75.75 0 0 0-.75.75h.75Zm0 2.25H6c0 .414.336.75.75.75V18Zm0 2.25a.75.75 0 0 0 0 1.5v-1.5ZM9 15H6.75v1.5H9V15Zm-3 .75V18h1.5v-2.25H6Zm.75 3h1.5v-1.5h-1.5v1.5Zm1.5 1.5h-1.5v1.5h1.5v-1.5ZM9 19.5a.75.75 0 0 1-.75.75v1.5a2.25 2.25 0 0 0 2.25-2.25H9Zm-.75-.75a.75.75 0 0 1 .75.75h1.5a2.25 2.25 0 0 0-2.25-2.25v1.5Z"></path>
                          </svg>
                        </span>
                      </button>
                      <button aria-label="Play" class="rhap_button-clear rhap_main-controls-button rhap_play-pause-button" type="button">
                        <span>
                          <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 h-6 fill-gray-200" preserveAspectRatio="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M385.237333 228.266667l350.933334 210.56c55.253333 33.152 55.253333 113.194667 0 146.346666L385.28 795.733333c-40.789333 24.490667-89.6 10.325333-113.92-24.149333l-0.042667 0.042667a42.666667 42.666667 0 1 0-73.216 43.946666l-0.085333 0.042667c47.36 72.533333 147.626667 103.424 231.168 53.333333l350.933333-210.602666c110.506667-66.304 110.506667-226.389333 0-292.693334l-350.933333-210.56C315.392 86.826667 170.666667 168.746667 170.666667 301.44V640a42.666667 42.666667 0 1 0 85.333333 0V301.44C256 235.093333 328.362667 194.133333 385.237333 228.266667z"></path>
                          </svg>
                        </span>
                      </button>
                      <button aria-label="Forward" class="rhap_button-clear rhap_main-controls-button rhap_forward-button" type="button">
                        <span>
                          <svg class="w-6 h-6 fill-gray-200" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.72 9.97a.75.75 0 1 0 1.06 1.06l-1.06-1.06ZM21 6.75l.53.53a.75.75 0 0 0 0-1.06l-.53.53Zm-3.22-4.28a.75.75 0 1 0-1.06 1.06l1.06-1.06ZM10.5 19.5a.75.75 0 0 0 0-1.5v1.5Zm3.75-4.5a.75.75 0 0 0 0 1.5V15Zm.75.75h.75A.75.75 0 0 0 15 15v.75ZM14.25 21a.75.75 0 0 0 1.5 0h-1.5Zm6-4.5a.75.75 0 0 0 0-1.5v1.5ZM18 15.75V15a.75.75 0 0 0-.75.75H18ZM18 18h-.75c0 .414.336.75.75.75V18Zm0 2.25a.75.75 0 0 0 0 1.5v-1.5Zm-.22-9.22 3.75-3.75-1.06-1.06-3.75 3.75 1.06 1.06Zm3.75-4.81-3.75-3.75-1.06 1.06 3.75 3.75 1.06-1.06ZM2.25 12.75A6.75 6.75 0 0 0 9 19.5V18a5.25 5.25 0 0 1-5.25-5.25h-1.5ZM9 6a6.75 6.75 0 0 0-6.75 6.75h1.5C3.75 9.85 6.1 7.5 9 7.5V6Zm0 1.5h12V6H9v1.5Zm0 12h1.5V18H9v1.5Zm5.25-3H15V15h-.75v1.5Zm0-.75V21h1.5v-5.25h-1.5Zm6-.75H18v1.5h2.25V15Zm-3 .75V18h1.5v-2.25H6Zm.75 3h1.5v-1.5H18v1.5Zm1.5 1.5H18v1.5h1.5v-1.5Zm.75-.75a.75.75 0 0 1-.75.75v1.5a2.25 2.25 0 0 0 2.25-2.25h-1.5Zm-.75-.75a.75.75 0 0 1 .75.75h1.5a2.25 2.25 0 0 0-2.25-2.25v1.5Z"></path>
                          </svg>
                        </span>
                      </button>
                    </div>
                    <div id="rhap_current-time" class="rhap_time rhap_current-time">00:05</div>
                    <div class="rhap_progress-container" aria-label="Audio progress control" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="4.1" tabindex="0">
                      <div class="rhap_progress-bar rhap_progress-bar-show-download">
                        <div class="rhap_progress-indicator" style="left: 4.1%;"></div>
                        <div class="rhap_progress-filled" style="width: 4.1%;"></div>
                        <div class="rhap_download-progress" style="left: 0%; width: 96%; transition-duration: 0s;"></div>
                      </div>
                    </div>
                    <div class="rhap_time rhap_total-time">02:23</div>
                  </div>
                  <div class="rhap_controls-section">
                    <div class="rhap_volume-container">
                      <button aria-label="Mute" type="button" class="rhap_button-clear rhap_volume-button">
                        <span>
                          <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 h-4 lg:w-5 lg:h-5 fill-gray-200" preserveAspectRatio="none">
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
              <span class="w-6 h-6 rounded-full bg-gray-200/20 transition duration-500 group cursor-pointer inline-flex items-center justify-center absolute -top-2 right-0">
                <span>
                  <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-3 fill-gray-400 transition duration-500 group-hover:fill-gray-50" preserveAspectRatio="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M587.19 506.246l397.116-397.263a52.029 52.029 0 0 0 0-73.143l-2.194-2.194a51.98 51.98 0 0 0-73.143 0l-397.068 397.8-397.068-397.8a51.98 51.98 0 0 0-73.143 0l-2.146 2.194a51.054 51.054 0 0 0 0 73.143l397.069 397.263L39.544 903.461a52.029 52.029 0 0 0 0 73.142l2.146 2.195a51.98 51.98 0 0 0 73.143 0L511.9 581.583l397.068 397.215a51.98 51.98 0 0 0 73.143 0l2.194-2.146a52.029 52.029 0 0 0 0-73.143L587.19 506.246z"></path>
                  </svg>
                </span>
              </span>
            </div>
          </div>
          <span>
            <svg class="opacity-40 absolute -top-20 left-20 z-[-1]" aria-hidden="true" preserveAspectRatio="none" width="1769" height="1080" viewBox="0 0 1769 1080" fill="none">
              <path d="M881.5 -92C881.5 141.839 684.56 331.5 441.5 331.5C198.44 331.5 1.5 141.839 1.5 -92C1.5 -325.839 198.44 -515.5 441.5 -515.5C684.56 -515.5 881.5 -325.839 881.5 -92Z" stroke="#FD83E2" stroke-width="3"></path>
              <path d="M2258.5 903.5C2258.5 1098.44 2098.24 1256.5 1900.5 1256.5C1702.76 1256.5 1542.5 1098.44 1542.5 903.5C1542.5 708.563 1702.76 550.5 1900.5 550.5C2098.24 550.5 2258.5 708.563 2258.5 903.5Z" stroke="#FD83E2" stroke-width="3"></path>
              <path d="M1422.5 903.5C1422.5 1128.74 1227.84 1311.5 987.5 1311.5C747.164 1311.5 552.5 1128.74 552.5 903.5C552.5 678.257 747.164 495.5 987.5 495.5C1227.84 495.5 1422.5 678.257 1422.5 903.5Z" stroke="#FD83E2" stroke-width="3"></path>
              <path d="M1835.5 140.5C1835.5 340.393 1669.43 502.5 1464.5 502.5C1259.57 502.5 1093.5 340.393 1093.5 140.5C1093.5 -59.3927 1259.57 -221.5 1464.5 -221.5C1669.43 -221.5 1835.5 -59.3927 1835.5 140.5Z" stroke="#FD83E2" stroke-width="3"></path>
            </svg>
          </span>
        </div>
        <section class="py-10 md:py-16 relative overflow-hidden">
          <span>
            <svg class="opacity-30 absolute top-0 -left-40 z-[-1] -rotate-90" aria-hidden="true" preserveAspectRatio="none" width="521" height="336" viewBox="0 0 521 336" fill="none">
              <path d="M304.386 -118.529C423.476 -86.6185 494.15 35.7913 462.239 154.881C430.329 273.972 307.919 344.645 188.829 312.735C69.7391 280.825 -0.934237 158.415 30.9759 39.3248C62.886 -79.7654 185.296 -150.439 304.386 -118.529Z" stroke="url(#paint0_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M301.365 -107.255C414.229 -77.0136 481.208 38.9967 450.966 151.861C420.724 264.725 304.714 331.704 191.85 301.462C78.9857 271.22 12.0071 155.21 42.2489 42.3454C72.4908 -70.5187 188.501 -137.497 301.365 -107.255Z" stroke="url(#paint1_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M298.344 -95.9779C404.979 -67.4049 468.262 42.2034 439.689 148.839C411.116 255.475 301.507 318.757 194.872 290.184C88.2361 261.611 24.9537 152.003 53.5267 45.3672C82.0996 -61.2684 191.708 -124.551 298.344 -95.9779Z" stroke="url(#paint2_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M295.323 -84.7046C395.733 -57.7999 455.32 45.4088 428.415 145.818C401.511 246.228 298.302 305.816 197.892 278.911C97.4828 252.006 37.8953 148.798 64.8 48.3879C91.7046 -52.0217 194.913 -111.609 295.323 -84.7046Z" stroke="url(#paint3_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M292.301 -73.4271C386.482 -48.1913 442.373 48.6154 417.138 142.797C391.902 236.978 295.095 292.869 200.914 267.633C106.733 242.398 50.8414 145.591 76.0772 51.4097C101.313 -42.7715 198.12 -98.6629 292.301 -73.4271Z" stroke="url(#paint4_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M289.281 -62.1539C377.236 -38.5864 429.432 51.8207 405.865 139.776C382.297 227.731 291.89 279.928 203.935 256.36C115.98 232.793 63.7832 142.386 87.3508 54.4303C110.918 -33.5249 201.325 -85.7215 289.281 -62.1539Z" stroke="url(#paint5_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M286.26 -50.8807C367.989 -28.9814 416.491 55.0261 394.591 136.755C372.692 218.484 288.685 266.986 206.955 245.087C125.226 223.188 76.7245 139.18 98.6238 57.451C120.523 -24.2782 204.531 -72.7799 286.26 -50.8807Z" stroke="url(#paint6_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M283.238 -39.6031C358.739 -19.3727 403.544 58.2327 383.314 133.733C363.084 209.234 285.478 254.04 209.977 233.809C134.477 213.579 89.6712 135.974 109.902 60.4728C130.132 -15.028 207.737 -59.8335 283.238 -39.6031Z" stroke="url(#paint7_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M280.217 -28.3299C349.492 -9.76777 390.603 61.4381 372.041 130.713C353.479 199.988 282.273 241.098 212.998 222.536C143.723 203.974 102.613 132.768 121.175 63.4934C139.737 -5.78129 210.943 -46.892 280.217 -28.3299Z" stroke="url(#paint8_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M277.197 -17.0567C340.245 -0.162821 377.661 64.6435 360.767 127.692C343.874 190.741 279.067 228.157 216.019 211.263C152.97 194.369 115.554 129.563 132.448 66.5141C149.342 3.46541 214.148 -33.9505 277.197 -17.0567Z" stroke="url(#paint9_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M274.175 -5.77912C330.995 9.44584 364.715 67.85 349.49 124.67C334.265 181.491 275.861 215.21 219.04 199.985C162.22 184.76 128.5 126.356 143.725 69.5359C158.95 12.7156 217.354 -21.0041 274.175 -5.77912Z" stroke="url(#paint10_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M271.154 5.49415C321.749 19.0508 351.773 71.0554 338.217 121.65C324.66 172.244 272.655 202.269 222.061 188.712C171.467 175.155 141.442 123.151 154.999 72.5566C168.555 21.9623 220.56 -8.06254 271.154 5.49415Z" stroke="url(#paint11_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M268.132 16.7717C312.498 28.6595 338.827 74.2621 326.939 118.628C315.051 162.994 269.449 189.322 225.083 177.435C180.717 165.547 154.388 119.944 166.276 75.5784C178.164 31.2126 223.767 4.88388 268.132 16.7717Z" stroke="url(#paint12_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M265.112 28.0449C303.252 38.2644 325.886 77.4674 315.666 115.607C305.446 153.747 266.243 176.381 228.104 166.161C189.964 155.942 167.33 116.739 177.55 78.5991C187.769 40.4593 226.972 17.8254 265.112 28.0449Z" stroke="url(#paint13_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M262.091 39.3181C294.005 47.8694 312.944 80.6728 304.393 112.587C295.841 144.5 263.038 163.439 231.124 154.888C199.21 146.337 180.271 113.533 188.823 81.6197C197.374 49.7059 230.177 30.7668 262.091 39.3181Z" stroke="url(#paint14_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M259.069 50.5956C284.755 57.478 299.997 83.8794 293.115 109.565C286.233 135.25 259.831 150.493 234.146 143.611C208.461 136.728 193.218 110.327 200.1 84.6415C206.982 58.9561 233.384 43.7133 259.069 50.5956Z" stroke="url(#paint15_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M256.048 61.8689C275.508 67.083 287.056 87.0848 281.842 106.544C276.627 126.003 256.626 137.552 237.166 132.337C217.707 127.123 206.159 107.122 211.373 87.6622C216.587 68.2029 236.589 56.6548 256.048 61.8689Z" stroke="url(#paint16_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M253.028 73.1421C266.261 76.688 274.115 90.2902 270.569 103.523C267.023 116.757 253.421 124.61 240.187 121.064C226.954 117.518 219.101 103.916 222.647 90.6828C226.193 77.4495 239.795 69.5963 253.028 73.1421Z" stroke="url(#paint17_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <defs>
                <linearGradient id="paint0_linear_1_774" x1="188.829" y1="312.735" x2="304.386" y2="-118.529" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint1_linear_1_774" x1="191.85" y1="301.462" x2="301.365" y2="-107.255" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint2_linear_1_774" x1="194.872" y1="290.184" x2="298.344" y2="-95.9779" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint3_linear_1_774" x1="197.892" y1="278.911" x2="295.323" y2="-84.7046" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint4_linear_1_774" x1="200.914" y1="267.633" x2="292.301" y2="-73.4271" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint5_linear_1_774" x1="203.935" y1="256.36" x2="289.281" y2="-62.1539" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint6_linear_1_774" x1="206.955" y1="245.087" x2="286.26" y2="-50.8807" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint7_linear_1_774" x1="209.977" y1="233.809" x2="283.238" y2="-39.6031" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint8_linear_1_774" x1="212.998" y1="222.536" x2="280.217" y2="-28.3299" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint9_linear_1_774" x1="216.019" y1="211.263" x2="277.197" y2="-17.0567" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint10_linear_1_774" x1="219.04" y1="199.985" x2="274.175" y2="-5.77912" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint11_linear_1_774" x1="222.061" y1="188.712" x2="271.154" y2="5.49415" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint12_linear_1_774" x1="225.083" y1="177.435" x2="268.132" y2="16.7717" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint13_linear_1_774" x1="228.104" y1="166.161" x2="265.112" y2="28.0449" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint14_linear_1_774" x1="231.124" y1="154.888" x2="262.091" y2="39.3181" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint15_linear_1_774" x1="234.146" y1="143.611" x2="259.069" y2="50.5956" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint16_linear_1_774" x1="237.166" y1="132.337" x2="256.048" y2="61.8689" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint17_linear_1_774" x1="240.187" y1="121.064" x2="253.028" y2="73.1421" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
              </defs>
            </svg>
          </span>
          <div style="opacity: 1; transform: none;">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
              <h2 class="text-xl font-semibold md:text-3xl text-center">How to Create AI Song Generator with SongGenerator.io</h2>
              <ul class="w-full mt-6 md:mt-14 lg:mt-16 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 lg:gap-12">
                <li class="w-full flex flex-col items-center justify-center gap-1.5">
                  <span class="w-12 h-12 rounded-full bg-gradient-to-tl from-fuchsia-400 to-gray-900 text-xl font-medium shadow-xl shadow-fuchsia-500/30 inline-flex items-center justify-center">0
                    <!-- -->1
                  </span>
                  <h3 class="font-medium text-xl flex items-center gap-1.5">Input Your Song Description</h3>
                  <p class="w-full mt-3 text-base text-zinc-300 whitespace-pre-line">Begin by entering the details of your song. Describe the song's style and elements, or directly input lyrics and musical style to generate a customized track using the AI song generator.</p>
                </li>
                <li class="w-full flex flex-col items-center justify-center gap-1.5">
                  <span class="w-12 h-12 rounded-full bg-gradient-to-tl from-fuchsia-400 to-gray-900 text-xl font-medium shadow-xl shadow-fuchsia-500/30 inline-flex items-center justify-center">0
                    <!-- -->2
                  </span>
                  <h3 class="font-medium text-xl flex items-center gap-1.5">Listen and Optimize</h3>
                  <p class="w-full mt-3 text-base text-zinc-300 whitespace-pre-line">In just a minute, the AI song generator will create your song. Listen to the generated song. If you are not satisfied, adjust your descriptions to further refine the track.</p>
                </li>
                <li class="w-full flex flex-col items-center justify-center gap-1.5">
                  <span class="w-12 h-12 rounded-full bg-gradient-to-tl from-fuchsia-400 to-gray-900 text-xl font-medium shadow-xl shadow-fuchsia-500/30 inline-flex items-center justify-center">0
                    <!-- -->3
                  </span>
                  <h3 class="font-medium text-xl flex items-center gap-1.5">Download Your Song</h3>
                  <p class="w-full mt-3 text-base text-zinc-300 whitespace-pre-line">After finalizing your song, use the AI song generator free online feature to download your completed track. Your professional-quality song is now ready for use in any project.</p>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="py-10 md:py-16 relative overflow-hidden">
          <span>
            <svg class="opacity-30 absolute bottom-0 -right-40 z-[-1] rotate-180" aria-hidden="true" preserveAspectRatio="none" width="521" height="336" viewBox="0 0 521 336" fill="none">
              <path d="M304.386 -118.529C423.476 -86.6185 494.15 35.7913 462.239 154.881C430.329 273.972 307.919 344.645 188.829 312.735C69.7391 280.825 -0.934237 158.415 30.9759 39.3248C62.886 -79.7654 185.296 -150.439 304.386 -118.529Z" stroke="url(#paint0_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M301.365 -107.255C414.229 -77.0136 481.208 38.9967 450.966 151.861C420.724 264.725 304.714 331.704 191.85 301.462C78.9857 271.22 12.0071 155.21 42.2489 42.3454C72.4908 -70.5187 188.501 -137.497 301.365 -107.255Z" stroke="url(#paint1_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M298.344 -95.9779C404.979 -67.4049 468.262 42.2034 439.689 148.839C411.116 255.475 301.507 318.757 194.872 290.184C88.2361 261.611 24.9537 152.003 53.5267 45.3672C82.0996 -61.2684 191.708 -124.551 298.344 -95.9779Z" stroke="url(#paint2_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M295.323 -84.7046C395.733 -57.7999 455.32 45.4088 428.415 145.818C401.511 246.228 298.302 305.816 197.892 278.911C97.4828 252.006 37.8953 148.798 64.8 48.3879C91.7046 -52.0217 194.913 -111.609 295.323 -84.7046Z" stroke="url(#paint3_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M292.301 -73.4271C386.482 -48.1913 442.373 48.6154 417.138 142.797C391.902 236.978 295.095 292.869 200.914 267.633C106.733 242.398 50.8414 145.591 76.0772 51.4097C101.313 -42.7715 198.12 -98.6629 292.301 -73.4271Z" stroke="url(#paint4_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M289.281 -62.1539C377.236 -38.5864 429.432 51.8207 405.865 139.776C382.297 227.731 291.89 279.928 203.935 256.36C115.98 232.793 63.7832 142.386 87.3508 54.4303C110.918 -33.5249 201.325 -85.7215 289.281 -62.1539Z" stroke="url(#paint5_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M286.26 -50.8807C367.989 -28.9814 416.491 55.0261 394.591 136.755C372.692 218.484 288.685 266.986 206.955 245.087C125.226 223.188 76.7245 139.18 98.6238 57.451C120.523 -24.2782 204.531 -72.7799 286.26 -50.8807Z" stroke="url(#paint6_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M283.238 -39.6031C358.739 -19.3727 403.544 58.2327 383.314 133.733C363.084 209.234 285.478 254.04 209.977 233.809C134.477 213.579 89.6712 135.974 109.902 60.4728C130.132 -15.028 207.737 -59.8335 283.238 -39.6031Z" stroke="url(#paint7_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M280.217 -28.3299C349.492 -9.76777 390.603 61.4381 372.041 130.713C353.479 199.988 282.273 241.098 212.998 222.536C143.723 203.974 102.613 132.768 121.175 63.4934C139.737 -5.78129 210.943 -46.892 280.217 -28.3299Z" stroke="url(#paint8_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M277.197 -17.0567C340.245 -0.162821 377.661 64.6435 360.767 127.692C343.874 190.741 279.067 228.157 216.019 211.263C152.97 194.369 115.554 129.563 132.448 66.5141C149.342 3.46541 214.148 -33.9505 277.197 -17.0567Z" stroke="url(#paint9_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M274.175 -5.77912C330.995 9.44584 364.715 67.85 349.49 124.67C334.265 181.491 275.861 215.21 219.04 199.985C162.22 184.76 128.5 126.356 143.725 69.5359C158.95 12.7156 217.354 -21.0041 274.175 -5.77912Z" stroke="url(#paint10_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M271.154 5.49415C321.749 19.0508 351.773 71.0554 338.217 121.65C324.66 172.244 272.655 202.269 222.061 188.712C171.467 175.155 141.442 123.151 154.999 72.5566C168.555 21.9623 220.56 -8.06254 271.154 5.49415Z" stroke="url(#paint11_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M268.132 16.7717C312.498 28.6595 338.827 74.2621 326.939 118.628C315.051 162.994 269.449 189.322 225.083 177.435C180.717 165.547 154.388 119.944 166.276 75.5784C178.164 31.2126 223.767 4.88388 268.132 16.7717Z" stroke="url(#paint12_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M265.112 28.0449C303.252 38.2644 325.886 77.4674 315.666 115.607C305.446 153.747 266.243 176.381 228.104 166.161C189.964 155.942 167.33 116.739 177.55 78.5991C187.769 40.4593 226.972 17.8254 265.112 28.0449Z" stroke="url(#paint13_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M262.091 39.3181C294.005 47.8694 312.944 80.6728 304.393 112.587C295.841 144.5 263.038 163.439 231.124 154.888C199.21 146.337 180.271 113.533 188.823 81.6197C197.374 49.7059 230.177 30.7668 262.091 39.3181Z" stroke="url(#paint14_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M259.069 50.5956C284.755 57.478 299.997 83.8794 293.115 109.565C286.233 135.25 259.831 150.493 234.146 143.611C208.461 136.728 193.218 110.327 200.1 84.6415C206.982 58.9561 233.384 43.7133 259.069 50.5956Z" stroke="url(#paint15_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M256.048 61.8689C275.508 67.083 287.056 87.0848 281.842 106.544C276.627 126.003 256.626 137.552 237.166 132.337C217.707 127.123 206.159 107.122 211.373 87.6622C216.587 68.2029 236.589 56.6548 256.048 61.8689Z" stroke="url(#paint16_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <path d="M253.028 73.1421C266.261 76.688 274.115 90.2902 270.569 103.523C267.023 116.757 253.421 124.61 240.187 121.064C226.954 117.518 219.101 103.916 222.647 90.6828C226.193 77.4495 239.795 69.5963 253.028 73.1421Z" stroke="url(#paint17_linear_1_774)" stroke-width="2.31193" stroke-miterlimit="10"></path>
              <defs>
                <linearGradient id="paint0_linear_1_774" x1="188.829" y1="312.735" x2="304.386" y2="-118.529" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint1_linear_1_774" x1="191.85" y1="301.462" x2="301.365" y2="-107.255" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint2_linear_1_774" x1="194.872" y1="290.184" x2="298.344" y2="-95.9779" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint3_linear_1_774" x1="197.892" y1="278.911" x2="295.323" y2="-84.7046" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint4_linear_1_774" x1="200.914" y1="267.633" x2="292.301" y2="-73.4271" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint5_linear_1_774" x1="203.935" y1="256.36" x2="289.281" y2="-62.1539" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint6_linear_1_774" x1="206.955" y1="245.087" x2="286.26" y2="-50.8807" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint7_linear_1_774" x1="209.977" y1="233.809" x2="283.238" y2="-39.6031" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint8_linear_1_774" x1="212.998" y1="222.536" x2="280.217" y2="-28.3299" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint9_linear_1_774" x1="216.019" y1="211.263" x2="277.197" y2="-17.0567" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint10_linear_1_774" x1="219.04" y1="199.985" x2="274.175" y2="-5.77912" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint11_linear_1_774" x1="222.061" y1="188.712" x2="271.154" y2="5.49415" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint12_linear_1_774" x1="225.083" y1="177.435" x2="268.132" y2="16.7717" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint13_linear_1_774" x1="228.104" y1="166.161" x2="265.112" y2="28.0449" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint14_linear_1_774" x1="231.124" y1="154.888" x2="262.091" y2="39.3181" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint15_linear_1_774" x1="234.146" y1="143.611" x2="259.069" y2="50.5956" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint16_linear_1_774" x1="237.166" y1="132.337" x2="256.048" y2="61.8689" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
                <linearGradient id="paint17_linear_1_774" x1="240.187" y1="121.064" x2="253.028" y2="73.1421" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#38A3A5"></stop>
                  <stop offset="1" stop-color="#D946EF"></stop>
                </linearGradient>
              </defs>
            </svg>
          </span>
          <div style="opacity: 1; transform: none;">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
              <div class="mx-auto">
                <h2 class="text-xl font-semibold md:text-3xl text-center">Key Features of the AI Song Generator</h2>
              </div>
              <ul class="w-full mt-6 md:mt-10 lg:mt-14 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-12">
                <li class="w-full p-4 md:p-8 bg-slate-800/20 backdrop-blur-md rounded-2xl border border-gray-500/10 flex flex-col items-start gap-4 relative overflow-hidden">
                  <h3 class="font-medium text-xl text-fuchsia-300 flex items-start gap-1">
                    <span>
                      <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 mt-0.5 fill-fuchsia-300" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M751.31039 165.018119c-153.58358 49.655893-130.42502-10.538118-216.874319-25.338189-122.600492-21.004473-87.399237 123.589353-87.399237 123.589352l84.824307 314.277713c-18.781057-20.368343-57.124042-33.761142-90.776933-33.761142C346.458868 543.78707 269.175688 622.90323 269.175688 715.69559c0 92.752222 76.542446 171.835541 171.167787 171.835541 94.586419 0 173.314576-79.331447 173.314575-172.083669 0-4.333716-0.493822-0.845336-0.670187 0.248128 5.354201-30.556163-78.551792-423.913547-78.551792-423.913547s87.750751 47.009201 152.133737 3.169706c74.042927-50.430683 69.81503-131.591462 64.740582-129.93363z m0 0"></path>
                      </svg>
                    </span>AI Text to Music
                  </h3>
                  <p class="text-base text-zinc-300 whitespace-pre-line">The AI song generator from text allows you to create high-quality music by simply providing text descriptions. Describe the mood, style, and elements you want, and the AI Song Generator will craft a unique song.</p>
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-1/4 fill-fuchsia-400/10 absolute bottom-1 right-2 z-[-1]" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M555.897263 0C600.926316 0 654.821053 132.042105 633.263158 226.357895 618.889432 289.236884 585.657937 336.842105 538.947368 385.347368c12.573642 57.489516 19.7632 90.721011 21.557895 99.705264 72.757895-10.778947 150.905263 51.2 150.905263 134.736842 0 55.689432-28.742063 99.705263-86.231579 132.042105 16.168421 68.268463 24.252632 118.568421 24.252632 150.905263 0 48.505263-38.507789 105.094737-110.484211 115.873684s-143.112084-38.459284-140.126315-86.231579c2.985768-47.772295 45.810526-64.673684 75.452631-56.589473s51.2 40.421053 40.421053 64.673684-35.969347 31.151158-26.947369 40.421053c9.021979 9.269895 33.862063 10.946021 67.368421 0 50.262232-16.421726 59.284211-70.063158 56.589474-107.789474-1.794695-25.152674-8.084211-58.384168-18.863158-99.705263-143.721095 8.984253-231.747368-31.4368-264.08421-121.263158-48.505263-134.736842 40.421053-231.747368 164.378947-331.452632-13.020968-30.8224-28.812126-94.542147-32.336842-150.905263-5.389474-86.231579 50.068211-169.768421 95.097263-169.768421zM514.694737 409.6c-53.894737 44.910484-90.721011 87.131621-110.484211 126.652632-29.642105 59.284211 8.084211 164.378947 67.368421 183.242105 39.521011 12.573642 76.352674 14.373726 110.484211 5.389474L544.336842 560.505263c-34.131537 14.373726-51.2 38.626358-51.2 72.757895s17.963116 58.384168 53.894737 72.757895c-67.222905-12.573642-101.995789-43.115789-104.313263-91.621053-2.317474-48.505263 27.065937-88.926316 88.144842-121.263158z m59.28421 142.821053l37.726316 161.68421c43.115789-21.557895 60.184253-52.994695 51.2-94.315789-8.984253-41.321095-38.626358-63.773642-88.926316-67.368421z m-53.894736-414.989474c-20.264421 49.976589-19.364379 108.366147-2.694737 164.378947 54.784-58.718316 80.836716-109.018274 83.536842-156.294737 4.052884-70.914695-50.445474-83.051789-80.842105-8.08421z"></path>
                    </svg>
                  </span>
                </li>
                <li class="w-full p-4 md:p-8 bg-slate-800/20 backdrop-blur-md rounded-2xl border border-gray-500/10 flex flex-col items-start gap-4 relative overflow-hidden">
                  <h3 class="font-medium text-xl text-fuchsia-300 flex items-start gap-1">
                    <span>
                      <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 mt-0.5 fill-fuchsia-300" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M751.31039 165.018119c-153.58358 49.655893-130.42502-10.538118-216.874319-25.338189-122.600492-21.004473-87.399237 123.589353-87.399237 123.589352l84.824307 314.277713c-18.781057-20.368343-57.124042-33.761142-90.776933-33.761142C346.458868 543.78707 269.175688 622.90323 269.175688 715.69559c0 92.752222 76.542446 171.835541 171.167787 171.835541 94.586419 0 173.314576-79.331447 173.314575-172.083669 0-4.333716-0.493822-0.845336-0.670187 0.248128 5.354201-30.556163-78.551792-423.913547-78.551792-423.913547s87.750751 47.009201 152.133737 3.169706c74.042927-50.430683 69.81503-131.591462 64.740582-129.93363z m0 0"></path>
                      </svg>
                    </span>Free Online Access
                  </h3>
                  <p class="text-base text-zinc-300 whitespace-pre-line">Access the AI song generator free online for a convenient and seamless way to create and download your music without any cost. This feature makes professional music production accessible to everyone.</p>
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-1/4 fill-fuchsia-400/10 absolute bottom-1 right-2 z-[-1]" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M689.3315 202.659744l-111.608734-64.43298a131.434267 131.434267 0 0 0-131.423003 0l-111.619998 64.43298c-20.388757 11.77141-12.030493 42.9403 11.512326 42.9403h331.638347c23.542819 0 31.901084-31.168891 11.501062-42.9403z"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M511.994368 1023.988735a178.272086 178.272086 0 0 1-89.147308-23.801903L133.788548 833.291898A178.778989 178.778989 0 0 1 44.641241 678.889302V345.099433a178.778989 178.778989 0 0 1 89.147307-154.402596L422.84706 23.801903a178.812783 178.812783 0 0 1 178.294615 0l289.058512 166.894934a178.778989 178.778989 0 0 1 89.147308 154.402596v333.789869a178.778989 178.778989 0 0 1-89.147308 154.402596L601.141675 1000.186832a178.272086 178.272086 0 0 1-89.147307 23.801903z m0-967.699994a121.960816 121.960816 0 0 0-60.986041 16.288477L161.949816 239.472152A122.298751 122.298751 0 0 0 100.963775 345.099433v333.789869a122.298751 122.298751 0 0 0 60.986041 105.627281l289.058511 166.894935a122.310016 122.310016 0 0 0 121.972081 0l289.058512-166.894935a122.298751 122.298751 0 0 0 60.98604-105.627281V345.099433a122.298751 122.298751 0 0 0-60.98604-105.627281L572.980408 72.577218a121.960816 121.960816 0 0 0-60.98604-16.288477z"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M202.862505 619.739376q-24.297541 0-24.297542-24.297541V428.546901q0-24.297541 24.297542-24.297542h88.798108q24.297541 0 24.297541 21.402563 0 21.69544-24.297541 21.695441h-59.870854a1.284154 1.284154 0 0 0-1.453122 1.441857v44.258247a1.284154 1.284154 0 0 0 1.453122 1.453122h57.674275q24.297541 0 24.297541 21.402563 0 21.69544-24.297541 21.69544h-57.674275a1.272889 1.272889 0 0 0-1.408064 1.430592v56.401386q0 24.297541-24.297541 24.297542zM365.127727 619.739376q-24.297541 0-24.297542-24.297541V428.546901q0-24.297541 24.297542-24.297542h54.666652q84.17966 0 84.168395 67.970035 0 44.844002-35.573312 61.616853c-0.968748 0.382993-1.25036 0.968748-0.867368 1.734734l33.556967 59.589241q13.866608 24.579154-14.463627 24.579154h-9.011606q-20.546461 0-30.087498-18.225972l-27.721951-53.472614a7.502162 7.502162 0 0 0-6.938937-4.043958h-18.800462a1.272889 1.272889 0 0 0-1.453121 1.441857v50.036939q0 24.297541-24.297541 24.297542z m27.462868-118.018239a1.284154 1.284154 0 0 0 1.453121 1.453122h21.69544q37.882537 0 37.882537-30.954865 0-14.756504-9.833915-21.109686-8.955283-5.801221-28.048622-5.789957h-21.684176a1.284154 1.284154 0 0 0-1.464385 1.453122zM557.480447 619.739376q-24.297541 0-24.297542-24.297541V428.546901q0-24.297541 24.297542-24.297542h92.898388q24.297541 0 24.297541 21.402563 0 21.69544-24.297541 21.695441h-63.982399a1.272889 1.272889 0 0 0-1.441857 1.441857v37.026434a1.272889 1.272889 0 0 0 1.441857 1.441857h64.939882q24.297541 0 24.297542 21.69544t-24.297542 21.69544h-64.939882a1.284154 1.284154 0 0 0-1.441857 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441857 1.441857h62.191342q24.297541 0 24.297542 21.69544t-24.297542 21.69544h-64.939882a1.284154 1.284154 0 0 0-1.441857 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441857 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544zM727.259095 619.739376q-24.297541 0-24.297542-24.297541V428.546901q0-24.297541 24.297542-24.297542h92.909653q24.297541 0 24.297541 21.402563 0 21.69544-24.297541 21.695441h-63.9824a1.272889 1.272889 0 0 0-1.441856 1.441857v37.026434a1.272889 1.272889 0 0 0 1.441856 1.441857h64.939883q24.297541-0.045058 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544h-64.939883a1.272889 1.272889 0 0 0-1.441856 1.453122v42.805126a1.272889 1.272889 0 0 0 1.441856 1.441857h62.202608q24.297541 0 24.297541 21.69544t-24.297541 21.69544z"></path>
                    </svg>
                  </span>
                </li>
                <li class="w-full p-4 md:p-8 bg-slate-800/20 backdrop-blur-md rounded-2xl border border-gray-500/10 flex flex-col items-start gap-4 relative overflow-hidden">
                  <h3 class="font-medium text-xl text-fuchsia-300 flex items-start gap-1">
                    <span>
                      <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 mt-0.5 fill-fuchsia-300" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M751.31039 165.018119c-153.58358 49.655893-130.42502-10.538118-216.874319-25.338189-122.600492-21.004473-87.399237 123.589353-87.399237 123.589352l84.824307 314.277713c-18.781057-20.368343-57.124042-33.761142-90.776933-33.761142C346.458868 543.78707 269.175688 622.90323 269.175688 715.69559c0 92.752222 76.542446 171.835541 171.167787 171.835541 94.586419 0 173.314576-79.331447 173.314575-172.083669 0-4.333716-0.493822-0.845336-0.670187 0.248128 5.354201-30.556163-78.551792-423.913547-78.551792-423.913547s87.750751 47.009201 152.133737 3.169706c74.042927-50.430683 69.81503-131.591462 64.740582-129.93363z m0 0"></path>
                      </svg>
                    </span>AI Song Generator with Vocals
                  </h3>
                  <p class="text-base text-zinc-300 whitespace-pre-line">Our AI song generator with vocals feature has multiple realistic vocals to match different song styles and emotions. Enhance your tracks with realistic vocal performances.</p>
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1137 1024" class="w-1/4 fill-fuchsia-400/10 absolute bottom-1 right-2 z-[-1]" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1015.883852 609.583407v-162.550518a447.032889 447.032889 0 0 0-893.989926 0v162.550518A121.931852 121.931852 0 0 0 0 731.477333v162.512593a121.931852 121.931852 0 0 0 121.893926 121.931852H284.444444a40.580741 40.580741 0 0 0 40.618667-40.656593v-325.063111A40.580741 40.580741 0 0 0 284.444444 609.583407H203.169185v-162.550518c0-201.652148 164.067556-365.719704 365.719704-365.719704 201.652148 0 365.719704 164.067556 365.719704 365.719704v162.550518H853.333333a40.580741 40.580741 0 0 0-40.618666 40.618667v325.063111a40.580741 40.580741 0 0 0 40.618666 40.656593h162.550519A121.931852 121.931852 0 0 0 1137.777778 893.989926v-162.512593a121.931852 121.931852 0 0 0-121.893926-121.893926zM243.825778 690.820741v243.825778H121.893926a40.77037 40.77037 0 0 1-40.618667-40.656593v-162.512593c0.075852-22.414222 18.204444-40.580741 40.618667-40.656592H243.863704z m812.676741 203.169185a40.77037 40.77037 0 0 1-40.618667 40.656593H893.914074v-243.825778h121.931852c22.376296 0.075852 40.580741 18.204444 40.618667 40.656592v162.512593z"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M772.058074 833.080889h-81.313185a20.100741 20.100741 0 0 0-18.014815 11.07437l-19.835259 38.456889-65.991111-198.162963a20.29037 20.29037 0 0 0-37.432889-2.541037l-74.562371 151.172741h-15.511703l-35.043556-70.087111a20.366222 20.366222 0 1 0-36.484741 18.128592l40.656593 81.27526c3.451259 6.826667 10.467556 11.150222 18.166519 11.150222h40.656592c7.736889 0 14.791111-4.361481 18.280296-11.264l58.102519-118.101333 65.649778 196.835555c2.578963 7.774815 9.595259 13.236148 17.787259 13.805037h1.517037a20.100741 20.100741 0 0 0 17.976889-11.07437l36.181333-70.238815h69.214815a20.252444 20.252444 0 0 0 0-40.504889v0.075852z"></path>
                    </svg>
                  </span>
                </li>
                <li class="w-full p-4 md:p-8 bg-slate-800/20 backdrop-blur-md rounded-2xl border border-gray-500/10 flex flex-col items-start gap-4 relative overflow-hidden">
                  <h3 class="font-medium text-xl text-fuchsia-300 flex items-start gap-1">
                    <span>
                      <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 mt-0.5 fill-fuchsia-300" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M751.31039 165.018119c-153.58358 49.655893-130.42502-10.538118-216.874319-25.338189-122.600492-21.004473-87.399237 123.589353-87.399237 123.589352l84.824307 314.277713c-18.781057-20.368343-57.124042-33.761142-90.776933-33.761142C346.458868 543.78707 269.175688 622.90323 269.175688 715.69559c0 92.752222 76.542446 171.835541 171.167787 171.835541 94.586419 0 173.314576-79.331447 173.314575-172.083669 0-4.333716-0.493822-0.845336-0.670187 0.248128 5.354201-30.556163-78.551792-423.913547-78.551792-423.913547s87.750751 47.009201 152.133737 3.169706c74.042927-50.430683 69.81503-131.591462 64.740582-129.93363z m0 0"></path>
                      </svg>
                    </span>AI Song Generator from Lyrics
                  </h3>
                  <p class="text-base text-zinc-300 whitespace-pre-line">The AI song generator from lyrics feature transforms your written lyrics into complete songs, including vocal elements. You can also create instrumental tracks without lyrics.</p>
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-1/4 fill-fuchsia-400/10 absolute bottom-1 right-2 z-[-1]" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M554.666667 853.333333a42.666667 42.666667 0 0 1 0 85.333334H213.333333a42.666667 42.666667 0 0 1 0-85.333334h341.333334z m384-256a42.666667 42.666667 0 0 1 0 85.333334H85.333333a42.666667 42.666667 0 0 1 0-85.333334h853.333334z m0-256a42.666667 42.666667 0 0 1 0 85.333334H85.333333a42.666667 42.666667 0 0 1 0-85.333334h853.333334z m-128-256a42.666667 42.666667 0 0 1 0 85.333334H213.333333a42.666667 42.666667 0 1 1 0-85.333334h597.333334z"></path>
                    </svg>
                  </span>
                </li>
                <li class="w-full p-4 md:p-8 bg-slate-800/20 backdrop-blur-md rounded-2xl border border-gray-500/10 flex flex-col items-start gap-4 relative overflow-hidden">
                  <h3 class="font-medium text-xl text-fuchsia-300 flex items-start gap-1">
                    <span>
                      <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 mt-0.5 fill-fuchsia-300" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M751.31039 165.018119c-153.58358 49.655893-130.42502-10.538118-216.874319-25.338189-122.600492-21.004473-87.399237 123.589353-87.399237 123.589352l84.824307 314.277713c-18.781057-20.368343-57.124042-33.761142-90.776933-33.761142C346.458868 543.78707 269.175688 622.90323 269.175688 715.69559c0 92.752222 76.542446 171.835541 171.167787 171.835541 94.586419 0 173.314576-79.331447 173.314575-172.083669 0-4.333716-0.493822-0.845336-0.670187 0.248128 5.354201-30.556163-78.551792-423.913547-78.551792-423.913547s87.750751 47.009201 152.133737 3.169706c74.042927-50.430683 69.81503-131.591462 64.740582-129.93363z m0 0"></path>
                      </svg>
                    </span>Covers Multiple Styles and Genres
                  </h3>
                  <p class="text-base text-zinc-300 whitespace-pre-line">The song generator AI supports a wide range of musical styles and genres. Whether you prefer classical, pop, rock, or electronic, the AI can generate music that fits your specific preferences.</p>
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-1/4 fill-fuchsia-400/10 absolute bottom-1 right-2 z-[-1]" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M342.5 115.1H160.6c-34.6 0-62.7 28.1-62.7 62.7v199.1c0 70 57 127 127 127H424c34.6 0 62.7-28.1 62.7-62.7V259.3c0-79.5-64.7-144.2-144.2-144.2zM424 441.2H224.9c-35.4 0-64.2-28.8-64.2-64.2V177.8h181.9c44.9 0 81.5 36.5 81.5 81.5v181.9zM420.8 535.5H244.3c-82.5 0-149.5 67.1-149.5 149.5v176.5c0 34.6 28.1 62.7 62.7 62.7h203.4c67.6 0 122.7-55 122.7-122.7V598.2c0-34.6-28.2-62.7-62.8-62.7z m0 266.1c0 33-26.9 59.9-59.9 59.9H157.5V685c0-47.9 38.9-86.8 86.8-86.8h176.5v203.4zM882.2 676.7H772.4V576.3c0-17.3-14-31.4-31.4-31.4s-31.4 14-31.4 31.4v100.4H599.9c-17.3 0-31.4 14-31.4 31.4s14 31.4 31.4 31.4h109.8V890c0 17.3 14 31.4 31.4 31.4s31.4-14 31.4-31.4V739.4h109.8c17.3 0 31.4-14 31.4-31.4s-14.1-31.3-31.5-31.3zM869.7 111.9H606.4c-34.6 0-62.7 28.1-62.7 62.7V438c0 34.6 28.1 62.7 62.7 62.7h263.3c34.6 0 62.7-26.9 62.7-59.9v-48.1c0-17.3-14-31.4-31.4-31.4-17.3 0-31.4 14-31.4 31.4V438H606.4V174.7h263.3v28.2c0 17.3 14 31.4 31.4 31.4 17.3 0 31.4-14 31.4-31.4v-31.7c-0.1-32.7-28.2-59.3-62.8-59.3z"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M901.1 297.1m-31.4 0a31.4 31.4 0 1 0 62.8 0 31.4 31.4 0 1 0-62.8 0Z"></path>
                    </svg>
                  </span>
                </li>
                <li class="w-full p-4 md:p-8 bg-slate-800/20 backdrop-blur-md rounded-2xl border border-gray-500/10 flex flex-col items-start gap-4 relative overflow-hidden">
                  <h3 class="font-medium text-xl text-fuchsia-300 flex items-start gap-1">
                    <span>
                      <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 mt-0.5 fill-fuchsia-300" preserveAspectRatio="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M751.31039 165.018119c-153.58358 49.655893-130.42502-10.538118-216.874319-25.338189-122.600492-21.004473-87.399237 123.589353-87.399237 123.589352l84.824307 314.277713c-18.781057-20.368343-57.124042-33.761142-90.776933-33.761142C346.458868 543.78707 269.175688 622.90323 269.175688 715.69559c0 92.752222 76.542446 171.835541 171.167787 171.835541 94.586419 0 173.314576-79.331447 173.314575-172.083669 0-4.333716-0.493822-0.845336-0.670187 0.248128 5.354201-30.556163-78.551792-423.913547-78.551792-423.913547s87.750751 47.009201 152.133737 3.169706c74.042927-50.430683 69.81503-131.591462 64.740582-129.93363z m0 0"></path>
                      </svg>
                    </span>Rapid Song Creation
                  </h3>
                  <p class="text-base text-zinc-300 whitespace-pre-line">Generate music in about a minute, providing you with rich inspiration and speeding up your creative process. The AI song generator ensures a fast turnaround for your musical ideas.</p>
                  <span>
                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-1/4 fill-fuchsia-400/10 absolute bottom-1 right-2 z-[-1]" preserveAspectRatio="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M422.4 1002.666667c-8.533333 0-17.066667-4.266667-21.333333-8.533334-8.533333-8.533333-12.8-17.066667-8.533334-29.866666l64-332.8H153.6c-12.8 0-25.6-8.533333-29.866667-17.066667s-4.266667-25.6 4.266667-34.133333L576 34.133333c8.533333-12.8 25.6-17.066667 38.4-8.533333 12.8 4.266667 21.333333 21.333333 17.066667 34.133333l-64 332.8h302.933333c12.8 0 25.6 8.533333 29.866667 17.066667 4.266667 12.8 4.266667 25.6-4.266667 34.133333L448 989.866667c-4.266667 8.533333-12.8 12.8-25.6 12.8 4.266667 0 0 0 0 0zM221.866667 567.466667h273.066666c8.533333 0 17.066667 4.266667 25.6 12.8s8.533333 17.066667 8.533334 25.6L477.866667 853.333333l324.266666-396.8h-273.066666c-8.533333 0-17.066667-4.266667-25.6-12.8-4.266667-8.533333-8.533333-17.066667-8.533334-25.6L546.133333 170.666667l-324.266666 396.8z"></path>
                    </svg>
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="py-10 md:py-16 overflow-hidden relative">
          <img alt="plate" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full object-cover absolute top-0 left-0 opacity-10" src="{{ asset('images/bg-plate-1.webp') }}" onerror="this.onerror=null; this.src='{{ asset('images/default-background.png') }}'">
          <div style="opacity: 1; transform: none;">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
              <div class="w-full mx-auto text-center">
                <h2 class="text-2xl font-semibold md:text-4xl !leading-[120%]">Royalty-Free Commercial Use with AI Song Generator</h2>
                <p class="w-full mt-6 lg:mt-10 mx-auto text-sm text-gray-200">The AI song generator offers high-quality, royalty-free music tracks that are perfect for commercial use. All tracks generated are ethically sourced, ensuring you can use them in your projects without legal concerns. Whether you are creating music for videos, podcasts, games, advertisements, or other creative ventures, The AI song generator provides you with the flexibility to produce and use your content with ease. Enjoy the peace of mind that comes with knowing your songs are unique, ethically compliant, and free from copyright issues, allowing you to focus on creativity and innovation in your work.</p>
              </div>
            </div>
          </div>
        </section>
      </main>

<!-- Add this script section at the bottom of your file, before closing </body> tag -->
<script>
$(document).ready(function() {
  let currentAudio = null;
  let currentPlayButton = null;
  let isAudioPlayerVisible = false;

  $('.play-button').click(function() {
    const audioUrl = $(this).data('audio-url');
    const audioPlayer = $('#audioPlayer');
    const audioElement = $('audio')[0];
    
    // Show audio player if hidden
    if (!isAudioPlayerVisible) {
      audioPlayer.css('display', 'flex').hide().fadeIn(300);
      isAudioPlayerVisible = true;
    }

    // If clicking the same song that's currently playing
    if (currentPlayButton === this) {
      if (audioElement.paused) {
        audioElement.play();
        updatePlayIcon($(this), true);
      } else {
        audioElement.pause();
        updatePlayIcon($(this), false);
      }
      return;
    }

    // If playing a different song
    if (currentPlayButton) {
      updatePlayIcon($(currentPlayButton), false);
    }

    // Update audio source and play
    audioElement.src = audioUrl;
  audioElement.play();
  
  currentAudio = audioElement;
  currentPlayButton = this;
  updatePlayIcon($(this), true);
  
  });

  // Add event listener for audio progress
  $('audio').on('timeupdate', function() {
    const progressBar = $('.rhap_progress-indicator');
    const totalDuration = this.duration;
    const currentTime = this.currentTime;
    const progressPercentage = (currentTime / totalDuration) * 100;

    // Update the progress bar's left position and color based on progress percentage
    progressBar.css({
        left: `${progressPercentage}%`,
        backgroundColor: getColorForProgress(progressPercentage) // Set color based on progress
    });
    $('.rhap_time.rhythm_total-time').text(formatTime(totalDuration)); // Update total time
    $('.rhap_time.rhythm_current-time').text(formatTime(currentTime)); // Update current time
  });

  // Function to determine color based on progress percentage
  function getColorForProgress(percentage) {
    if (percentage < 50) {
      return '#D946EF'; // Color for less than 50%
    } else if (percentage < 100) {
      return '#38A3A5'; // Color for 50% to 99%
    } else {
      return '#4CAF50'; // Color for 100%
    }
  }

  // Close button handler
  $('.rhap_container').parent().find('.group').click(function() {
    const audioPlayer = $('#audioPlayer');
    audioPlayer.fadeOut(300, function() {
      if (currentAudio) {
        currentAudio.pause();
        currentAudio.currentTime = 0; // Reset playback position
        if (currentPlayButton) {
          updatePlayIcon($(currentPlayButton), false);
        }
      }
      isAudioPlayerVisible = false;
    });
  });

  // Audio player play/pause button handler
  $('.rhap_play-pause-button').click(function() {
    const audioElement = $('audio')[0];
    if (currentPlayButton) {
      updatePlayIcon($(currentPlayButton), !audioElement.paused);
    }
    // Add play/pause functionality
    if (audioElement.paused) {
      audioElement.play();
      updatePlayIcon($(currentPlayButton), true);
    } else {
      audioElement.pause();
      updatePlayIcon($(currentPlayButton), false);
    }
  });
  function updatePlayIcon(buttonElement, isPlaying) {
    const svg = buttonElement.find('svg');
    // console.log(svg)
    if (isPlaying) {
      svg.html('<path fill-rule="evenodd" clip-rule="evenodd" d="M320 128v768h128V128H320zm256 0v768h128V128H576z"/>'); // Play icon
    } else {
      svg.html('<path fill-rule="evenodd" clip-rule="evenodd" d="M780.8 475.733333L285.866667 168.533333c-27.733333-17.066667-64 4.266667-64 36.266667v614.4c0 32 36.266667 53.333333 64 36.266667l492.8-307.2c29.866667-14.933333 29.866667-57.6 2.133333-72.533334z"></path>'); // Pause icon
    }
  }



  function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const secs = Math.floor(seconds % 60);
    return `${minutes}:${secs < 10 ? '0' : ''}${secs}`; // Format time as mm:ss
  }

  // Handle audio ended event
  $('audio').on('ended', function() {
    if (currentPlayButton) {
      updatePlayIcon($(currentPlayButton), false);
    }
  });

  // Handle audio player visibility on page load
  const audioPlayer = $('#audioPlayer');
  if (audioPlayer.is(':visible')) {
    isAudioPlayerVisible = true;
  } else {
    audioPlayer.hide();
    isAudioPlayerVisible = false;
  }
});
</script>
@endsection


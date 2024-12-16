

<div class="w-full h-auto lg:w-[420px] lg:h-full pb-10 lg:pb-4 lg:overflow-y-auto box-border relative flex flex-col items-start">
  <div class="w-full h-16 p-3.5 bg-gradient-to-t from-zinc-950/50 to-zinc-950 flex items-center justify-center">
    <div class="w-[80%] lg:w-full px-3 text-sm text-neutral-300 bg-white/10 rounded-full flex items-center justify-between overflow-hidden">
      <span>
        <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-neutral-300" preserveAspectRatio="none">
          <path fill="evenodd" clip-rule="evenodd" d="M953.474215 908.234504l-152.576516-163.241391c61.92508-74.48211 95.81186-167.36973 95.81186-265.073744 0-229.294809-186.63531-415.930119-416.102133-415.930119-229.294809 0-415.930119 186.63531-415.930119 415.930119s186.63531 415.930119 415.930119 415.930119c60.032925 0 118.00168-12.55703 172.186125-37.327062 16.169326-7.396607 23.221905-26.318159 15.825298-42.315471-7.396607-16.169326-26.318159-23.221905-42.315471-15.825298-45.927768 20.813707-94.951789 31.478582-145.695952 31.478582-194.031917 0-351.94087-157.908953-351.94087-351.94087 0-194.031917 157.908953-351.94087 351.94087-351.94087 194.031917 0 351.94087 157.908953 351.94087 351.94087 0 91.339493-34.918864 177.86259-98.048043 243.743995-12.213002 12.729044-11.868974 33.026709 0.860071 45.239711 1.032085 0.860071 2.236183 1.204099 3.268268 2.064169 0.860071 1.204099 1.376113 2.752226 2.408198 3.956325l165.477574 177.00252c6.192508 6.70855 14.793214 10.148833 23.393919 10.148833 7.912649 0 15.653284-2.92424 21.845792-8.600706C964.827146 941.433227 965.515202 921.135562 953.474215 908.234504z"></path>
        </svg>
      </span>
      <input type="text" placeholder="Search Music" class="w-[92%] p-2 bg-transparent border-none outline-none placeholder:text-neutral-500 custom-search"  value="" fdprocessedid="r1s1e" />
    </div>
  </div>
  <div class="w-full h-[calc(100%-64px)] overflow-y-auto" id="songList">
    <!-- Songs will be loaded here dynamically -->
  </div>
  <div class="w-full px-3.5 py-2 block lg:hidden"></div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
let currentlyPlayingSongId = null; // Track current song globally
const url = "{{ env('ROUTE_URL') }}";
function loadSongs(searchQuery = '') {
    $.ajax({
        url: url+'website/song/list',
        method: 'GET',
        data: { search: searchQuery },
        headers: {
            'Accept': 'application/json',
        },
        success: function(response) {
            const songList = $('#songList');
            songList.empty();
            
            // Only auto-play first song if no song has ever been played
            if (!currentlyPlayingSongId && response.data.length > 0) {
                const firstSong = response.data[0];
                
                // Fetch and play the first song
                $.ajax({
                    url: `${url}website/song/play/${firstSong.song_id}`,
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                    },
                    success: function(songResponse) {
                        currentlyPlayingSongId = firstSong.song_id; // Set ID after successful fetch
                        const event = new CustomEvent('playSong', { 
                            detail: songResponse.data 
                        });
                        window.dispatchEvent(event);
                    }
                });
            }
            
            response.data.forEach(song => {
                const isPlaying = currentlyPlayingSongId === song.song_id;
                let created_at = new Date(song.created_at).toLocaleDateString('en-US', { 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric' 
                });

                songList.append(`
                    <div class="relative w-full p-2  border-zinc-800 last:border-none transition duration-500 group hover:bg-zinc-800/50 cursor-pointer flex items-center justify-between gap-2 ${isPlaying ? 'bg-zinc-800/50' : ''}" 
                         data-song-id="${song.song_id}">
                        <div class="w-16 h-16 rounded-md relative transition duration-500 group cursor-pointer overflow-hidden song-trigger">
                            <div class="w-full h-full rounded-md relative">
                                <img alt="cover" loading="lazy" width="100" height="100" 
                                     class="w-full h-full rounded-md object-cover" 
                                     src="${song.image_url}" />
                                ${isPlaying ? `
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                    <div class="playing-wave absolute">
                                        <span class="stroke"></span>
                                        <span class="stroke"></span>
                                        <span class="stroke"></span>
                                        <span class="stroke"></span>
                                        <span class="stroke"></span>
                                    </div>
                                    <svg aria-hidden="true" viewBox="0 0 24 24" 
                                         class="w-8 h-8 fill-fuchsia-500 group-hover:opacity-100 transition-opacity duration-300">
                                        <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/>
                                    </svg>
                                </div>` : `
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" class="w-8 h-8 fill-white">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>`}
                            </div>
                        </div>
                        <div class="w-[70%] flex flex-1 flex-col items-start">
                            <p class="w-full font-semibold text-sm transition duration-500 ${isPlaying ? 'text-fuchsia-500' : 'text-neutral-300 group-hover:text-fuchsia-500'} truncate">
                                ${song.title}
                            </p>
                            <div class="w-full mt-1 flex items-center justify-between gap-2">
                                <p class="w-full text-neutral-500 text-xs flex items-center gap-1">${created_at}</p>
                            </div>
                        </div>
                    </div>
                `);
            });
        },
        error: function(xhr, status, error) {
            console.error('Error loading songs:', error);
        }
    });
}

$(document).ready(function() {
    loadSongs();
    
    // Handle search input with debounce
    let searchTimeout;
    $('.custom-search').on('input', function() {
        clearTimeout(searchTimeout);
        const query = $(this).val();
        
        // If search is cleared, load all songs
        if (!query.trim()) {
            loadSongs();
            return;
        }
        
        // Make AJAX call for search suggestions
        $.ajax({
            url: url+'website/song/search',
            method: 'GET',
            data: { title: query },
            headers: {
                'Accept': 'application/json',
            },
            success: function(response) {
                const songList = $('#songList');
                songList.empty();
                
                // Append search results
                if (response.data && response.data.length > 0) {
                    response.data.forEach(song => {
                        const isPlaying = currentlyPlayingSongId === song.song_id;
                        let created_at = new Date(song.created_at).toLocaleDateString('en-US', { 
                            year: 'numeric', 
                              month: 'long', 
                            day: 'numeric' 
                        });
                        // console.log(song.song_id)
                        songList.append(`
                            <div class="relative w-full p-2  border-zinc-800 last:border-none transition duration-500 group hover:bg-zinc-800/50 cursor-pointer flex items-center justify-between gap-2 ${isPlaying ? 'bg-zinc-800/50' : ''}" 
                                 data-song-id="${song.song_id}">
                                <div class="w-16 h-16 rounded-md relative transition duration-500 group cursor-pointer overflow-hidden song-trigger">
                                    <div class="w-full h-full rounded-md relative">
                                        <img alt="cover" loading="lazy" width="100" height="100" 
                                             class="w-full h-full rounded-md object-cover" 
                                             src="${song.image_url}" />
                                        ${isPlaying ? `
                                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                            <div class="playing-wave absolute">
                                                <span class="stroke"></span>
                                                <span class="stroke"></span>
                                                <span class="stroke"></span>
                                                <span class="stroke"></span>
                                                <span class="stroke"></span>
                                            </div>
                                            <svg aria-hidden="true" viewBox="0 0 24 24" 
                                                 class="w-8 h-8 fill-fuchsia-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/>
                                            </svg>
                                        </div>` : `
                                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity duration-300">
                                            <svg aria-hidden="true" viewBox="0 0 24 24" class="w-8 h-8 fill-white">
                                                <path d="M8 5v14l11-7z"/>
                                            </svg>
                                        </div>`}
                                    </div>
                                </div>
                                <div class="w-[70%] flex flex-1 flex-col items-start">
                                    <p class="w-full font-semibold text-sm transition duration-500 ${isPlaying ? 'text-fuchsia-500' : 'text-neutral-300 group-hover:text-fuchsia-500'} truncate">
                                        ${song.title}
                                    </p>
                                    <div class="w-full mt-1 flex items-center justify-between gap-2">
                                        <p class="w-full text-neutral-500 text-xs flex items-center gap-1">${created_at}</p>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    songList.append(`
                        <div class="w-full p-4 text-center text-neutral-500">
                            No songs found
                        </div>
                    `);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error searching songs:', error);
            }
        });
    });

    // Click handler for songs
    $('#songList').on('click', '.song-trigger', function() {
        const songContainer = $(this).closest('[data-song-id]');
        const songId = songContainer.data('song-id');
        
        // If clicking the currently playing song, trigger pause
        if (currentlyPlayingSongId === songId) {
            currentlyPlayingSongId = null; // Immediately update state
            
            // Update UI immediately
            updateSongUI(songId, false);
            
            const event = new CustomEvent('togglePlayPause', {
                detail: { songId: songId }
            });
            window.dispatchEvent(event);
            return;
        }
        
        // Otherwise, play the new song
        const previousSongId = currentlyPlayingSongId;
        currentlyPlayingSongId = songId;
        
        // Update UI immediately
        if (previousSongId) {
            updateSongUI(previousSongId, false);
        }
        updateSongUI(songId, true);
        
        $.ajax({
            url: `${url}/website/song/?song_id=${songId}`,
            method: 'GET',
            headers: {
                'Accept': 'application/json',
            },
            success: function(response) {
                const event = new CustomEvent('playSong', { 
                    detail: response.data 
                });
                window.dispatchEvent(event);
            },
            error: function(xhr, status, error) {
                console.error('Error loading song details:', error);
                currentlyPlayingSongId = null;
                updateSongUI(songId, false);
            }
        });
    });
    
    // Listen for play state changes from song.blade.php
    window.addEventListener('songStateChanged', function(event) {
        const { songId, isPlaying } = event.detail;
        currentlyPlayingSongId = isPlaying ? songId : null;
        
        // Update the UI without reloading all songs
        $('#songList').children().each(function() {
            const songElement = $(this);
            const currentSongId = songElement.data('song-id');
            const isCurrentPlaying = currentSongId === currentlyPlayingSongId;
            
            songElement.toggleClass('bg-zinc-800/50', isCurrentPlaying);
            songElement.find('.playing-wave').toggle(isCurrentPlaying);
            songElement.find('svg').toggleClass('fill-fuchsia-500', isCurrentPlaying);
        });
    });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    },
    
});

// Helper function to update song UI
function updateSongUI(songId, isPlaying) {
    const songElement = $(`[data-song-id="${songId}"]`);
    
    // Update background
    songElement.toggleClass('bg-zinc-800/50', isPlaying);
    
    // Update title color
    songElement.find('p.font-semibold')
        .toggleClass('text-fuchsia-500', isPlaying)
        .toggleClass('text-neutral-300', !isPlaying);
    
    // Update play/pause icon
    const overlay = songElement.find('.song-trigger .absolute.inset-0');
    if (isPlaying) {
        overlay.html(`
            <div class="playing-wave absolute">
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
                <span class="stroke"></span>
            </div>
            <svg aria-hidden="true" viewBox="0 0 24 24" 
                 class="w-8 h-8 fill-fuchsia-500 group-hover:opacity-100 transition-opacity duration-300">
                <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z"/>
            </svg>
        `);
        overlay.removeClass('opacity-0');
    } else {
        overlay.html(`
            <svg aria-hidden="true" viewBox="0 0 24 24" class="w-8 h-8 fill-white">
                <path d="M8 5v14l11-7z"/>
            </svg>
        `);
        overlay.addClass('opacity-0 group-hover:opacity-100');
    }
}
</script>
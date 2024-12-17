@extends('templates.layout') 
@section('title', 'Playlist')
@section('content')
<style>
    .play-pause-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    
    .group:hover .play-pause-overlay {
        display: flex;
    }
    
    .playing .play-pause-overlay {
        display: flex;
        background: rgba(0, 0, 0, 0.7);
    }
</style>
<section class="w-full lg:h-full cursor-default">
    <div class="w-full lg:h-full pb-24 lg:py-0 flex items-start">
        <div class="w-full lg:h-full relative">
            <div class="w-full lg:h-full flex flex-col-reverse lg:flex-row items-start justify-between">
                <div class="w-full lg:w-[100%] xl:w-[100%] lg:h-full relative">
                    <div class="w-full h-[90%] px-4 py-6 overflow-y-auto flex flex-col items-start gap-1">
                        <div class="w-full h-36 md:h-52 pb-6 border-b border-neutral-500/10 flex items-center gap-4 md:gap-6">
                            <div class="h-full aspect-square rounded-lg flex items-center justify-center overflow-hidden">
                                <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full object-cover" src="{{ env('LOCAL_URL').'website-assets/images/background_1.webp' }}" style="color: transparent;">
                            </div>
                            <div class="max-w-[100%] flex-1 flex flex-col items-start gap-2">
                                <p class="w-full text-4xl text-neutral-100 font-bold line-clamp-1">Liked Songs</p>
                                <p class="w-full text-sm text-neutral-200">
                                    <span class="text-neutral-400 ml-1 inline-block">{{ count($songs) }} songs</span>
                                </p>
                            </div>
                        </div>
                        <div class="w-full overflow-y-auto" style="height: calc(100% - 208px);">
                            @foreach($songs as $index => $song)
                            
                            <div onclick="togglePlayPause('{{ $song->id }}', '{{ $song->audio_url }}', '{{ $song->image_url }}', '{{ $song->title }}')" class="relative w-full p-2 rounded-lg transition duration-500 group hover:bg-white/5 flex items-center justify-between gap-2 lg:gap-4 {{ $loop->first ? 'bg-white/5' : '' }}" data-song-id="{{ $song->id }}" data-lyrics="{{ $song->lyrics }}" data-tags="{{ $song->tags }}">
                                <div class="w-14 h-full text-neutral-400 flex items-center justify-center">{{ $index + 1 }}</div>
                                <div class="w-16 h-16 rounded-md relative transition duration-500 group cursor-pointer overflow-hidden song-container">
                                    <div class="w-full h-full relative">
                                        <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full object-cover" src="{{ $song->image_url }}" style="color: transparent;">
                                        <div class="play-pause-overlay" onclick="togglePlayPause('{{ $song->id }}', '{{ $song->audio_url }}', '{{ $song->image_url }}', '{{ $song->title }}')">
                                            <svg class="play-icon w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 5v14l11-7z" />
                                            </svg>
                                            <svg class="pause-icon w-8 h-8 text-white hidden" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between gap-4" style="width: calc(100% - 140px);">
                                    <div class="w-[80%] md:w-40 lg:w-52 inline-flex flex-col items-start gap-1">
                                        <div class="w-full text-sm font-medium flex items-center gap-2">
                                            <p class="max-w-[60%] md:w-full md:max-w-none transition duration-500 group-hover:text-emerald-500 line-clamp-1 text-neutral-100">{{ $song->title }}</p>
                                        </div>
                                        <p class="w-full text-neutral-300 text-xs flex items-center flex-wrap gap-1">{{ $song->users->name }}</p>
                                        <p class="xl:hidden w-full text-neutral-400 text-xs line-clamp-1">
                                            <span>{{ $song->created_at->diffForHumans() }}</span>
                                        </p>
                                    </div>
                                    <p class="hidden text-neutral-400 text-center text-sm xl:inline-flex items-center gap-1">
                                        <span>{{ $song->created_at->diffForHumans() }}</span>
                                    </p>
                                    <p class="hidden w-28 text-neutral-400 text-sm md:inline-flex items-center justify-center gap-1">
                                        <!-- <span>
                                            <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-4 fill-neutral-200" preserveAspectRatio="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M512 128a32 32 0 0 1 32 32v704a32 32 0 1 1-64 0v-704A32 32 0 0 1 512 128zM320 256a32 32 0 0 1 32 32v448a32 32 0 1 1-64 0v-448A32 32 0 0 1 320 256z m384 0a32 32 0 0 1 32 32v448a32 32 0 1 1-64 0v-448A32 32 0 0 1 704 256z m192 128a32 32 0 0 1 32 32v192a32 32 0 1 1-64 0v-192A32 32 0 0 1 896 384zM128 384a32 32 0 0 1 32 32v192a32 32 0 0 1-64 0v-192A32 32 0 0 1 128 384z"></path>
                                            </svg>
                                        </span> {{ $song->duration ?? '00:00' }} -->
                                    </p>
                                    <div class="w-24 inline-flex items-center justify-end gap-2">
                                        <div class="inline-flex items-center justify-center">
                                            <div class="w-8 h-8 bg-white/10 rounded-full flex flex-col items-center justify-center group cursor-pointer" type="button">
                                                <span>
                                                    <svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-6 fill-neutral-200 group-hover:fill-emerald-500 rotate-90 transition duration-500" preserveAspectRatio="none">
                                                        <path fill="evenodd" clip-rule="evenodd" d="M203.1 599.3c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5-0.1 48.9-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.7 88.5-88.6 88.5z m309.9 0c-48.9 0-88.6-39.6-88.6-88.5s39.6-88.5 88.6-88.5c48.9 0 88.6 39.6 88.6 88.5s-39.6 88.5-88.6 88.5z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="hidden w-full lg:w-[30%] xl:w-[25%] lg:h-full pb-24 mb-10 lg:mb-0 bg-zinc-950 lg:overflow-y-auto lg:flex flex-col items-start gap-2" id="song-details-sidebar">
            <div class="w-full aspect-square relative">
                <div class="w-full h-full p-6 relative flex flex-col items-center justify-center overflow-hidden">
                    <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-full h-full object-cover absolute top-0 left-0 opacity-25 backdrop-blur-md" id="song-bg-image" src="/images/plate/background_1.webp" style="color: transparent;">
                    <div class="w-full aspect-square p-12 relative flex items-center justify-center">
                        <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-[80%] h-auto lg:w-full lg:h-full aspect-square object-cover absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2" src="{{ env('LOCAL_URL').'website-assets/images/cd_bg.svg' }}" style="color: transparent;">
                        <img alt="cover" loading="lazy" width="100" height="100" decoding="async" data-nimg="1" class="w-1/2 lg:w-[90%] h-auto rounded-full object-cover relative" id="song-main-image" src="/images/plate/background_1.webp" style="color: transparent;">
                    </div>
                </div>
                <ul class="w-full px-4 py-2 flex items-center justify-center gap-4 relative hidden">
                    <li class="w-9 aspect-square bg-white/10 rounded-full flex items-center justify-center group cursor-pointer">
                        <span><svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-neutral-200 group-hover:fill-emerald-500 transition duration-500" preserveAspectRatio="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M918.3 468.6c-18.8 0-34 15.2-34 34v309.6c0 6.6-14.4 18.7-38 18.7H190.2c-23.5 0-38-12.1-38-18.7V486c0-18.8-15.2-34-34-34s-34 15.2-34 34v326.3c0 24.8 12.8 48.4 35 64.7 19.4 14.2 44.6 22 71 22h656.1c26.4 0 51.6-7.8 71-22 22.2-16.3 35-39.9 35-64.7V502.6c0-18.7-15.3-34-34-34z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M450.4 679.4c17.8 18 41.5 28 66.8 28.1h0.5c25.1 0 48.8-9.7 66.6-27.4l154.4-152.8c13.3-13.2 13.5-34.7 0.2-48.1-13.2-13.3-34.7-13.5-48.1-0.2L551.3 617.1c0.6-2.6 1-5.3 1-8.1V149.1c0-18.8-15.2-34-34-34s-34 15.2-34 34V609c0 3.2 0.5 6.3 1.3 9.3L345.9 477.1c-13.2-13.3-34.7-13.5-48.1-0.2-13.3 13.2-13.5 34.7-0.2 48.1l152.8 154.4z"></path></svg></span>
                    </li>
                    <li class="w-9 aspect-square bg-white/10 rounded-full flex items-center justify-center group cursor-pointer">
                        <span><svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-neutral-200 group-hover:fill-emerald-500 transition duration-500" preserveAspectRatio="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M911.6 766c-3.4-41.2-22.6-78.7-54.2-105.5-31.6-26.8-71.7-39.7-112.9-36.3-45.1 3.7-84.1 26.4-109.8 59.6L417.5 581.1c2.8-11.6 4.3-23.7 4.3-36.1 0-21.6-4.5-42.2-12.5-61l181.9-105c27.5 24.8 63.8 39.9 103.7 39.9 85.4 0 154.9-69.5 154.9-154.9s-69.5-154.9-154.9-154.9-155 69.5-155 154.9c0 23.8 5.4 46.4 15.1 66.6L375.2 434.4C347.3 407 309 390 266.8 390c-85.4 0-154.9 69.5-154.9 154.9s69.5 154.9 154.9 154.9c51.6 0 97.4-25.4 125.6-64.3l215.3 101.9c-4.7 17-6.6 35.2-5 53.8 6.6 80.9 74.6 142.3 154.3 142.3 4.2 0 8.5-0.2 12.8-0.5 85.2-6.9 148.8-81.9 141.8-167zM694.8 168.9c52.4 0 95.1 42.6 95.1 95.1s-42.6 95.1-95.1 95.1-95.1-42.6-95.1-95.1 42.7-95.1 95.1-95.1zM266.8 640c-52.4 0-95.1-42.6-95.1-95.1s42.6-95.1 95.1-95.1 95.1 42.6 95.1 95.1-42.7 95.1-95.1 95.1z m498.1 233.4c-52.2 4.3-98.2-34.7-102.5-87-4.3-52.2 34.7-98.2 87-102.5 2.7-0.2 5.3-0.3 7.9-0.3 22.5 0 44 7.9 61.3 22.6 19.4 16.4 31.2 39.4 33.2 64.7 4.4 52.2-34.6 98.2-86.9 102.5z"></path></svg></span>
                    </li>
                    <li class="w-9 aspect-square bg-white/10 rounded-full flex items-center justify-center group cursor-pointer">
                        <span><svg aria-hidden="true" viewBox="0 0 1024 1024" class="w-5 fill-rose-500 group-hover:fill-red-400 transition duration-500" preserveAspectRatio="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M892.543016 224.150106c-9.284457-11.914354-17.804505-21.814842-26.454512-30.930453C759.437485 80.827887 642.682341 92.003414 536.033369 176.799682c-9.493212 7.547907-18.453281 15.383362-26.88737 23.346731-8.43409-7.963369-17.395182-15.798824-26.888394-23.346731C375.608633 92.003414 258.853489 80.827887 152.202471 193.21863c-8.650007 9.115612-17.170055 19.016099-25.559119 29.714765C-2.680039 410.134984 68.411089 595.897805 259.728416 764.030084c42.320874 37.192064 87.560218 70.64906 132.799562 99.905384 15.841803 10.245342 30.570249 19.244296 43.816948 26.932396 8.024767 4.657067 13.827937 7.872295 17.044188 9.578146 4.869914 2.916423 9.728572 5.142114 14.530948 6.771217 3.470031 1.619894 7.516184 3.091408 12.218276 4.387937 25.377994 6.998391 62.97938 1.908466 85.839017-11.764951 2.14178-1.101077 7.944949-4.315282 15.969717-8.972349 13.246699-7.688099 27.974122-16.687054 43.816948-26.932396 45.239344-29.256324 90.478687-62.71332 132.799562-99.905384C949.879885 595.897805 1020.971014 410.134984 892.543016 224.150106z"></path></svg></span>
                    </li>
                </ul>
            </div>
            <div class="w-full py-4 px-5 flex flex-col items-start gap-2">
                <div class="w-full font-medium text-neutral-200 flex items-center gap-2">
                    <p class="w-full line-clamp-1" id="song-title">Select a song to play</p>
                </div>
                <p class="w-full text-neutral-300 text-xs flex items-center flex-wrap gap-1" id="song-tags"></p>
                <p class="text-neutral-400 text-xs" id="song-artist"></p>
                <div class="w-full lg:max-h-none mt-2 lg:mt-4 text-neutral-300 text-sm break-words whitespace-pre-line overflow-y-auto flex flex-col items-start gap-4" id="song-lyrics">
                    Click on any song to view its details
                </div>
            </div>
        </div>
    </div>
    </div>
    
</section>
<script>
    let currentlyPlayingSongId = null;
    let audioPlayer = new Audio();
    
    function updateSongDetails(songData) {
        // Update song images
        document.getElementById('song-bg-image').src = songData.image_url;
        document.getElementById('song-main-image').src = songData.image_url;
        
        // Update song title and artist
        document.getElementById('song-title').textContent = songData.title;
        document.getElementById('song-artist').textContent = songData.users ? songData.users.name : '';
        
        // Update tags if available
        const tagsContainer = document.getElementById('song-tags');
        tagsContainer.innerHTML = ''; // Clear existing tags
        if (songData.tags && songData.tags.length > 0) {
            songData.tags.forEach(tag => {
                const tagSpan = document.createElement('span');
                tagSpan.className = 'px-2 py-1 rounded-full bg-white/5';
                tagSpan.textContent = tag;
                tagsContainer.appendChild(tagSpan);
            });
        }
        
        // Update lyrics if available
        const lyricsContainer = document.getElementById('song-lyrics');
        lyricsContainer.textContent = songData.lyrics || 'No lyrics available';
    }
    
    function togglePlayPause(songId, audioUrl, imageUrl, title) {
        console.log('Toggle play/pause for song:', songId);
        
        const songContainer = document.querySelector(`[data-song-id="${songId}"]`);
        if (!songContainer) {
            console.error('Song container not found for ID:', songId);
            return;
        }
    
        const playIcon = songContainer.querySelector('.play-icon');
        const pauseIcon = songContainer.querySelector('.pause-icon');
        
        // If we're clicking the same song that's currently playing
        if (currentlyPlayingSongId === songId) {
            console.log('Toggling current song');
            if (audioPlayer.paused) {
                audioPlayer.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            } else {
                audioPlayer.pause();
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }
            return;
        }
        
        // If we're playing a different song
        if (currentlyPlayingSongId) {
            console.log('Switching from song:', currentlyPlayingSongId, 'to:', songId);
            // Reset previous song's UI
            const previousContainer = document.querySelector(`[data-song-id="${currentlyPlayingSongId}"]`);
            if (previousContainer) {
                previousContainer.classList.remove('playing');
                const prevPlayIcon = previousContainer.querySelector('.play-icon');
                const prevPauseIcon = previousContainer.querySelector('.pause-icon');
                prevPlayIcon.classList.remove('hidden');
                prevPauseIcon.classList.add('hidden');
            }
        }
        
        // Update UI for new song
        songContainer.classList.add('playing');
        playIcon.classList.add('hidden');
        pauseIcon.classList.remove('hidden');
        
        // Update currently playing song
        currentlyPlayingSongId = songId;
        
        // Play the new song
        audioPlayer.src = audioUrl;
        audioPlayer.play().catch(error => {
            console.error('Error playing audio:', error);
        });
        
        // Get full song data from the container
        const songData = {
            id: songId,
            audio_url: audioUrl,
            image_url: imageUrl,
            title: title,
            isPlaying: true,
            users: {
                name: songContainer.querySelector('.text-neutral-300.text-xs').textContent
            },
            lyrics: songContainer.getAttribute('data-lyrics') || '',
            tags: (songContainer.getAttribute('data-tags') || '').split(',').filter(tag => tag)
        };
        
        // Update the sidebar with song details
        updateSongDetails(songData);
        
        console.log('Dispatching playSong event with data:', songData);
        // Dispatch event to update the main player UI
        const event = new CustomEvent('playSong', { detail: songData });
        window.dispatchEvent(event);
    }
    
    // Listen for song state changes from the main player
    window.addEventListener('songStateChanged', function(event) {
        console.log('Received songStateChanged event:', event.detail);
        const { songId, isPlaying } = event.detail;
        
        if (songId === currentlyPlayingSongId) {
            const songContainer = document.querySelector(`[data-song-id="${songId}"]`);
            if (songContainer) {
                const playIcon = songContainer.querySelector('.play-icon');
                const pauseIcon = songContainer.querySelector('.pause-icon');
                
                if (isPlaying) {
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                    audioPlayer.play();
                } else {
                    playIcon.classList.remove('hidden');
                    pauseIcon.classList.add('hidden');
                    audioPlayer.pause();
                }
            }
        }
    });
    
    // Handle audio player events
    audioPlayer.addEventListener('ended', function() {
        // Reset UI when song ends
        if (currentlyPlayingSongId) {
            const songContainer = document.querySelector(`[data-song-id="${currentlyPlayingSongId}"]`);
            if (songContainer) {
                songContainer.classList.remove('playing');
                const playIcon = songContainer.querySelector('.play-icon');
                const pauseIcon = songContainer.querySelector('.pause-icon');
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }
        }
        currentlyPlayingSongId = null;
    });
    
    audioPlayer.addEventListener('error', function(e) {
        console.error('Audio player error:', e);
        // Reset UI on error
        if (currentlyPlayingSongId) {
            const songContainer = document.querySelector(`[data-song-id="${currentlyPlayingSongId}"]`);
            if (songContainer) {
                songContainer.classList.remove('playing');
                const playIcon = songContainer.querySelector('.play-icon');
                const pauseIcon = songContainer.querySelector('.pause-icon');
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }
        }
        currentlyPlayingSongId = null;
    });
</script>
@endsection
$(document).ready(function() {
    // Generate Music Button Click Handler
    $('#generate-music-btn').on('click', function() {
        console.log('Current URL:', window.location.href);
        console.log('Current Port:', window.location.port);

        const description = $('textarea[placeholder*="Describe the style"]').val();
        const isCustomMode = $('#custom-mode').attr('aria-checked') === 'true';

        // if (!isCustomMode) {
        //     // Get CSRF token from meta tag
        //     const token = $('meta[name="csrf-token"]').attr('content');

        //     fetch('http://127.0.0.1:8001/api/song/generate', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json',
        //             'Accept': 'application/json',
        //             'X-CSRF-TOKEN': token
        //         },
        //         body: JSON.stringify({
        //             gpt_description_prompt: description,
        //             make_instrumental: false,
        //             mv: 'chirp-v3-5',
        //             prompt: 'vocal female'
        //         })
        //     })
        //     .then(response => {
        //         if (!response.ok) {
        //             throw new Error(`HTTP error! status: ${response.status}`);
        //         }
        //         return response.json();
        //     })
        //     .then(data => {
        //         console.log(data);
        //     })
        //     .catch(error => {
        //         console.error('Error:', error);
        //     });
        // }
    });

    // Custom Mode Toggle with animation
   
    // Instrumental Toggle
    $('#instrumental').on('click', function() {
        const isChecked = $(this).attr('aria-checked') === 'true';
        const $button = $(this);
        const $switchKnob = $button.find('span');
        
        if (!isChecked) {
            $button.attr('aria-checked', 'true');
            $button.removeClass('bg-input').addClass('bg-primary');
            $switchKnob.attr('data-state', 'checked');
            $switchKnob.css('transform', 'translateX(16px)');
        } else {
            $button.attr('aria-checked', 'false');
            $button.removeClass('bg-primary').addClass('bg-input');
            $switchKnob.attr('data-state', 'unchecked');
            $switchKnob.css('transform', 'translateX(0)');
        }
    });

    // Open drawer
    $('#open-drawer').on('click', function() {
      const dialog = $('#drawer');
      dialog.removeClass('hidden');
      dialog.attr('data-state', 'open');
    });

    // Close drawer on clicking close button
    $('#close-drawer').on('click', function() {
      const dialog = $('#drawer');
      dialog.addClass('hidden');
      dialog.attr('data-state', 'closed');
    });

    // Close drawer on clicking outside
    $(document).on('click', function(event) {
      const dialog = $('#drawer');
      const isClickInside = $(event.target).closest('#drawer').length > 0;
      const isDialogOpen = dialog.attr('data-state') === 'open';
      const isOpenButton = $(event.target).closest('#open-drawer').length > 0;

      if (isDialogOpen && !isClickInside && !isOpenButton) {
        dialog.addClass('hidden');
        dialog.attr('data-state', 'closed');
      }
    });
});
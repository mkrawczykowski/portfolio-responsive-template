const videoLightboxContent = document.querySelectorAll('.video-lightbox-content');
const playVideoImageButtons = document.querySelectorAll('.play-video-image__button');
const videoLightboxContents = document.querySelectorAll('.video-lightbox-content__lightbox');
const videoLightboxCloseButtons = document.querySelectorAll('.video-lightbox-content__lightbox-close');
const lightboxVideoContainer = document.querySelectorAll('.video-lightbox-content__lightbox-video');

playVideoImageButtons.forEach((button, index) => {
    console.log('klik')
    const lightboxVideoColumn = document.querySelectorAll(`.video-lightbox-content__lightbox-inner .col-12`);
    button.addEventListener('click', () => {
    lightboxVideoContainer[index].id = 'player';
    videoLightboxContents[index].classList.add('active');
    document.body.style.overflow = 'hidden';

    //based on https://developers.google.com/youtube/iframe_api_reference
    let player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: 9*lightboxVideoColumn[index].offsetWidth/16,
          width: lightboxVideoColumn[index].offsetWidth,
          videoId: videoLightboxContent[index].dataset.video,
        });
      }
      onYouTubeIframeAPIReady();
   });
});

videoLightboxCloseButtons.forEach((closeButton, index) => {
    closeButton.addEventListener('click', () => {
        videoLightboxContents[index].classList.remove('active');
        document.body.style.overflow = 'auto';
        lightboxVideoContainer[index].id = '';
    })
})
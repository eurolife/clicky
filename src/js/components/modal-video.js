const Modal = require('modal-video');

$('[data-video-id]').each((index, element) => {
    new Modal([element], {
        channel: $(element).attr('data-video-type'),
        autoplay: 1,
    })
});
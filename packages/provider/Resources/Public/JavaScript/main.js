let iOS = false, p = navigator.platform;
if( p === 'iPad' || p === 'iPhone' || p === 'iPod' ){
    iOS = true;
}

const resizeT3Window = () => {
    const winWidth = $(window).width();
    const winHeight = $(window).height();
}

$(document).ready(() => {
    resizeT3Window();
});

if (iOS === true) {
} else {
    $(window).resize(() => {
        resizeT3Window();
    });
}

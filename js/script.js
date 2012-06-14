$(function() {
    if($.browser.mozilla && parseInt($.browser.version) >= 4) {
        $('#install').attr('href', '/hwm.xpi');
        $('#install').click(function() {
            $(this).addClass('disabled').text('Installing...');
        });
    } else if (!!(window.chrome && chrome.webstore && chrome.webstore.install) && parseInt(navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./)[2]) >= 18) {
        $('#install')[0].onclick = function() {
            chrome.webstore.install();
            $(this).addClass('disabled').text('Installing...');
        };
    } else {
        $('#unsupported').show();
        $('#install').addClass('disabled').click(function() {
            alert('You need to be using either Firefox 4+ or Chrome 18+');
        });
    }
});

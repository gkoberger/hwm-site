$(function() {
    if($.browser.mozilla && parseInt($.browser.version) >= 4) {
        $('#install').attr('href', 'hulu-with-me-proper.xpi');
        $('#install').click(function() {
            $(this).addClass('disabled').text('Installing...');
        });
    } else if (!!(window.chrome && chrome.webstore && chrome.webstore.install)) {
        chrome.webstore.install();
    } else {
        $('#unsupported').show();
        $('#install').addClass('disabled').click(function() {
            alert('You need to be using either Firefox or Chrome');
        });
    }
});

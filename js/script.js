$(function() {
    if($.browser.mozilla && parseInt($.browser.version) >= 4) {
        $('#install').attr('href', 'hwm.xpi');
        $('#install').click(function() {
            $(this).addClass('disabled').text('Installing...');
        });
    } else if (!!(window.chrome && chrome.webstore && chrome.webstore.install)) {
        $('#install')[0].onclick = function() {
            chrome.webstore.install();
            $(this).addClass('disabled').text('Installing...');
        };
    } else {
        $('#unsupported').show();
        $('#install').addClass('disabled').click(function() {
            alert('You need to be using either Firefox or Chrome');
        });
    }
});

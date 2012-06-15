$(function() {
    installButton();
    dots();
});

var installButton = function() {
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
        $('#restart').hide();
        $('#install').addClass('disabled').click(function() {
            alert('You need to be using either Firefox 4+ or Chrome 18+');
        });
    }
};

var dots = function() {
    var spans = $('#detecting_hwm .dots span');

    var i = 0;
    function lightUp() {
        if(i > spans.length) {
            i = -1;
            spans.removeClass('on');
        }
        if(i >= 0)
            spans.eq(i).addClass('on');
        i++;
    }

    setInterval(lightUp, 200);

    setTimeout(function() {
        $('#install-page').show();
        $('#detecting_hwm').hide();
        $('title').text('Install Huluwithme!');
    }, 1000);
};

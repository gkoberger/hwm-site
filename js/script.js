$(function() {
    installButton();
    dots();
});

var installButton = function() {
    if($.browser.mozilla && parseInt($.browser.version) >= 4) {
        $('.install').attr('href', '/hwm.xpi');
        $('.install').click(function() {
            $(this).addClass('disabled').text('Installing...');
            $('#restart').hide();
            $('#already_installed').show();
        });
    } else if (!!(window.chrome && chrome.webstore && chrome.webstore.install) && parseInt(navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./)[2]) >= 18) {
        $('.install').click(function() {
            var url = $('link[rel=chrome-webstore-item]').attr('href');
            chrome.webstore.install(url, installSuccess, installNope);
            $(this).addClass('disabled').text('Installing...');
            $('#restart').hide();
            $('#already_installed').show();
        });
    } else {
        $('#unsupported').show();
        $('#restart').hide();
        $('#install').addClass('disabled').click(function() {
            alert('You need to be using either Firefox 4+ or Chrome 18+');
        });
    }

    var check_i = 0;
    var check = setInterval(function() {
        check_i++;
        if(check_i > 10) clearInterval(check);

        if($('body').hasClass('is_installed')) {
            $('#install').addClass('disabled').text('Installed!');
            $('#already_installed').show();
            $('#restart').hide();
            clearInterval(check);
        }
    }, 500);
};

var installSuccess = function() {
    $('#installed_modal').insertBefore($('<div>', {'class': 'im_overlay'})).show();
    $('#install').text('Installed!');
};

var installNope = function() {
    $('#install').removeClass('disabled').text('Install');
};

var dots = function() {
    if($('#detecting_hwm').length) {
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
    }
};

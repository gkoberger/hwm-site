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

window.onload = function(){
var spans = document.getElementsByTagName('span');

var i = 0;
function lightUp() {
  if(i >= spans.length) {
    i = 0;
    for(var c = 0; c < spans.length; c++) {
      spans[c].className = "";
    }
  }
  spans[i].className = "on";
  i++;
}

setInterval(lightUp, 100);

setTimeout(function() {
    document.getElementById('install-page').style.display = 'block';
    document.getElementById('detecting_hwm').style.display = 'none';
    document.getElementsByTagName('title')[0].text = 'Install Huluwithme!';
}, 1000);
};

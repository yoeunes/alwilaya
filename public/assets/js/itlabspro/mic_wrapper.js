$(window).ready(function () {
    var $btn = $('.mic_wrapper .fa');
    if ('webkitSpeechRecognition' in window) {
        var recognition            = new webkitSpeechRecognition();
        recognition.lang           = 'fr-FR';
        recognition.continuous     = false;
        recognition.interimResults = true;
        $btn.on('click', function (e) {
            var $that = $(this);
            e.preventDefault();
            if ($(this).hasClass('fa-microphone-slash')) recognition.start();
            else recognition.stop();
            var $oldValue = '';
            recognition.onstart  = function () {
                $that.removeClass('fa-microphone-slash');
                $that.addClass('fa-microphone');
                $that.css('color', 'red');
                $oldValue = $that.prev().val();
            };
            recognition.onend    = function () {
                $that.removeClass('fa-microphone');
                $that.addClass('fa-microphone-slash');
                $that.css('color', 'black');
            };
            recognition.onresult = function (event) {
                if (typeof(event.results) == 'undefined') {
                    recognition.onend = null;
                    recognition.stop();
                    upgrade();
                    return;
                }
                var transcript = '';
                for (var i = event.resultIndex; i < event.results.length; ++i) {
                    if (event.results[i].isFinal) recognition.stop();
                    transcript += event.results[i][0].transcript;
                }
                $that.prev().val($oldValue + ' ' + transcript);
            }
        });
    } else {
        $btn.hide();
    }
});
$(document).ready(function () {
    (function (a) {
        a.createModal = function (b) {
            defaults = {title: "", message: "Your Message Goes Here!", closeButton: true, scrollable: false};
            var b    = a.extend({}, defaults, b);
            var c    = (b.scrollable === true) ? 'style="max-height: 420px;overflow-y: auto;"' : "";
            html     = '<div class="pdf"><div class="modal fade" id="myModal">';
            html += '<div class="modal-dialog">';
            html += '<div class="modal-content golbal red-b" style="border-radius: 0px !important;">';
            html += '<div class="modal-header" style="padding: 0px;">';
            html += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
            if (b.title.length > 0) {html += '<h4 class="global-title red" style="padding:10px 30px;">' + b.title + "</h4>"}
            html += "</div>";
            html += '<div style="padding: 0 !important;" class="modal-body" ' + c + ">";
            html += b.message;
            html += "</div>";
            html += '<div class="modal-footer">';
            if (b.closeButton === true) {html += '<button type="button" class="bttn submit right red" data-dismiss="modal" style="color:#FFF !important;">Fermer</button>'}
            html += "</div>";
            html += "</div>";
            html += "</div>";
            html += "</div></div>";
            a("body").prepend(html);
            a("#myModal").modal().on("hidden.bs.modal", function () {a(this).remove()})
        }
    })(jQuery);
    $('.view-pdf').on('click', function (event) {
        event.preventDefault();
        var pdf_link = $(this).attr('href');
        //var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        //var iframe = '<object data="'+pdf_link+'" type="application/pdf"><embed src="'+pdf_link+'" type="application/pdf" /></object>'
        var iframe = '<object type="application/pdf" data="' + pdf_link + '" width="100%" height="500">No Support</object>'
        $.createModal({
            title      : ' ',
            message    : iframe,
            closeButton: true,
            scrollable : false
        });
        return false;
    });
});
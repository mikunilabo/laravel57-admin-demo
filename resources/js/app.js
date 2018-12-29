
require('./bootstrap');
require('./vendor/coreui/main');

window.$('[data-toggle="tooltip"]').tooltip();
window.$('[data-toggle="popover"]').popover();
window.$('.popover-dismiss').popover({
    trigger: 'focus'
});

window.$('.theme-color').each(function () {
    var Color = $(this).css('backgroundColor');
    window.$(this).parent().append("\n    <table class=\"w-100\">\n      <tr>\n        <td class=\"text-muted\">HEX:</td>\n        <td class=\"font-weight-bold\">" + rgbToHex(Color) + "</td>\n      </tr>\n      <tr>\n        <td class=\"text-muted\">RGB:</td>\n        <td class=\"font-weight-bold\">" + Color + "</td>\n      </tr>\n    </table>\n  ");
});

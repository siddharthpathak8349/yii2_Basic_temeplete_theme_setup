yii.validation = (function ($) {
    
    var pub = {
        addMessage: function (messages, message, value) {
            messages.push(message.replace(/\{value\}/g, value));
        },

        wordcount: function (value, messages, options) {
            console.log('wordcount');
            if (options.maxword !== undefined && value.length > options.maxword) {
                pub.addMessage(messages, options.morethanmaxword, value);
            }
        },
    };
    return pub;
})(jQuery);

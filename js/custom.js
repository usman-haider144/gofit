// Wrap any jQuery code like this. It makes '$' use fullproof
// and prevent also some other error.
(function($){
    // And always use 'use strict' to make your JavaScript code mode strict.
    'use strict';
    // Wrap it with after the DOM is ready block.
    $(function (e) {
        // Try not to use click() method directly.
        // Rather try to delegate the event with on() method.
        $('.get_project').on( 'click', function(e) {
            e.preventDefault();
            var postid = $(this).attr('data-postid');
            console.log(postid);
            // I don't know why the shorthand method had not worked for me as well
            // But this method has worked for me.
            $.ajax({
                type: "POST",
                url: my_ajax_object.ajax_url,
                data: {
                    action: 'my_load_ajax_content',
                    postid: postid,
                }
            }).done(function (data) {
                // Just simple html() method with data will show all the content.
                $('.TARGETDIV').html(data);
            });
        });
    });
})(jQuery);
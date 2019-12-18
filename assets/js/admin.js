;(function ($) {
    $(document).ready(function () {
        $("#post-formats-select .post-format").on("click", function () {
            if ($(this).attr("id") == "post-format-image") {
                $("#alpha_alpha_metabox").show();
            } else {
                $("#alpha_alpha_metabox").hide();
            }
        });

        if (alpha_post_format.format != "image") {
            $("#alpha_alpha_metabox").hide();
        }
    });
})(jQuery);
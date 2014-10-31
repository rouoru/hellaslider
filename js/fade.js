$(function() {
        $("a").hover(
            function() {
                $(this).animate({ color: "#00ff00" }, 'fast');
            },function() {
                $(this).animate({ color: "#ff0000" }, 'fast');
        });
    });
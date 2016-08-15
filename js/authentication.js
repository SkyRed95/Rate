$(document).ready(function () {
    $("#auth").click(function () {
        $.ajax({
            type: "POST",
            url: "auth.php",
            // success: function(data) {
            //     alert(data);
            // },
            statusCode: {
                401: function () {
                    alert("401 Unauthorized");
                }
            }
        });
    });
});
$(document).ready(function () {
    $(document).on("click", "#update_image", function (e) {
        e.preventDefault();

        if (!$("#image").length) {
            $("#update_image").hide();
            $("#cancel_update_image").show();

            $("#oldimage").html(
                '<input type = "file" name = "image" id = "image">'
            );
        }
        return false;
    });

    $(document).on("click", "#cancel_update_image", function (e) {
        e.preventDefault();

        $("#update_image").show();
        $("#cancel_update_image").hide();
        $("#oldimage").html("");

        return false;
    });
});

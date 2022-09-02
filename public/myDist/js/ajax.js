
function ajaxContent({
    form,
    target,
    loadingIndicator,
    url
}) {
    loadingIndicator.hide()
    form.submit(function (e) {
        e.preventDefault()
        loadingIndicator.show()

        var formData = new FormData($(this)[0])
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                target.html(response)
                loadingIndicator.hide()
            },
            error: function () {
                //
                loadingIndicator.hide()
            }
        });
    });
}
$(document).ready(function(){


    $("#contactForm").trigger("reset");

    // Submit form through AJAX
    $("#submitContact").click(function(e) {

        e.preventDefault();
        var form = document.getElementById("contactForm");
        var formData = new FormData(form);


        $.ajax({
            url: $("#contactForm").attr("action"), // url where to submit the request
            type: "POST", // type of action POST
            dataType: "json", // data type
            data: formData, // post data
            processData: false,
            contentType: false,
            success: function (result) {
                if (result.status) {
                    toastr.success(result.message);
                    $("#contactForm").trigger("reset");
                } else {
                    //There was an error creating user
                    $.each(result.errors, function (key, value) {
                        toastr.error(value);
                    });
                }
            },
            error: function (xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });

    });


});

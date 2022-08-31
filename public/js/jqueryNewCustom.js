$(document).ready(function () {
    $(document).on('click', "#createNewCategory", function (e) {
        e.preventDefault();
        let url = '/category/store';
        let name = $("#category_title").val();
        let description = $("#category_description").val();
        let status = $("#status").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'url': url,
            'data': {'category_title': name, 'description': description, 'status': status},
            'type': 'POST',
            success: function (response) {
                try {
                    if (response.status != 200) {
                        $("#errrormasgbox_category").show();
                        $("#success_message div").html("");
                        $("#error_message").html('<div class="alert alert-danger">' + response.message + '</div>');
                        $('#successmasgbox_category').hide();
                    } else {
                        $("#successmasgbox_category").show();
                        $("#error_message div").html("");
                        $("#success_message").html('<div class="alert alert-success">' + response.message + '</div>');
                        $("#errrormasgbox_category").hide();
                        window.location.href = "/category/list";
                    }
                } catch (error) {
                    console.log(error.message);
                }
            }
        })
    })
})

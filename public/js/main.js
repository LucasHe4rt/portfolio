$(document).ready(function () {

    $("#send").click(function () {

        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $.post('/send',{
            name: $("#name").val(),
            email: $("#email").val(),
            subject: $("#subject").val(),
            message: $("#message").val()
        },
            function (data, status) {

            console.log(data, status);

        });

    })

})

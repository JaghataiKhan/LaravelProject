$(".save-data").click(function(event){
    event.preventDefault();

    let name = $("input[name=name]").val();
    let email = $("input[name=email]").val();
    let phone = $("input[name=phone]").val();
    let user_message = $("textarea[name=user_message]").val();
    let _token   = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: "/user-request",
        type:"POST",
        data:{
            name:name,
            email:email,
            phone:phone,
            user_message:user_message,
            _token: _token
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(response){
            console.log(response);
            if(response) {
                $('#nameError').text('');
                $('#emailError').text('');
                $('#mobileError').text('');
                $('#messageError').text('');

                $('#success').text(response.success);

                $("#frm-create-request")[0].reset();
            }
        },
        error: function(response) {
            $('#nameError').text('');
            $('#emailError').text('');
            $('#mobileError').text('');
            $('#messageError').text('');

            $('#nameError').text(response.responseJSON.errors.name);
            $('#emailError').text(response.responseJSON.errors.email);
            $('#mobileError').text(response.responseJSON.errors.phone);
            $('#messageError').text(response.responseJSON.errors.user_message);
        }
    });
});

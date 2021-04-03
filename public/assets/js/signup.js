// $(document).ready(function() {
    $('#signup-step2').hide();
    $('#back').hide();
    $('#email-validation-message').hide();
    $('#password-validation-message').hide();

    //email
    let emailInput;
    function validateEmail(email) {
        var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        return $.trim(email).match(pattern) ? true : false;
    }

    $("#email-input").on("blur", function () {
        emailInput = $(this).val();

        if (validateEmail(emailInput)) {
            $('#email-input').addClass("is-valid");
            $('#email-input').removeClass("is-invalid");
            $('#email-validation-message').hide();
        } else {
            $('#email-input').addClass("is-invalid");
            $('#email-validation-message').show();
            $('#email-input').removeClass("is-valid");
        }
    });
//password
//     Contain at least 8 characters
//     contain at least 1 number
//     contain at least 1 lowercase character (a-z)
//     contain at least 1 uppercase character (A-Z)
//     contains only 0-9a-zA-Z
    let passwordInput;
    function validatepassword(password) {
        let pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
        return $.trim(password).match(pattern) ? true : false;
    }
    $("#password-input").on("blur", function () {
        let passwordInput = $('#password-input').val();
        if (validatepassword(passwordInput)) {
            $('#password-input').addClass("is-valid");
            $('#password-input').removeClass("is-invalid");
            $('#password-validation-message').hide();
            // $('#next1').removeAttr("disabled");
        } else {
            $('#password-input').addClass("is-invalid");
            $('#password-validation-message').show();
            $('#password-input').removeClass("is-valid");
        }

    });


    // $("#next1").click(function () {
    //     $('#signup-step1').hide();
    //     $('#signup-step2').show();
    //     $('#back').show();
    // });
    $("#back").click(function () {
        $('#signup-step1').show();
        $('#signup-step2').hide();
        $('#back').hide();
    });



// });

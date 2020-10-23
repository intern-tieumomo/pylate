$(document).ready(function(e) {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        var submit_value = $('#submit').val();

        if (fname == "" || lname == "") {
            swal('Pylate', 'Name is required!', 'warning');
        } else if (email == ""){
            swal('Pylate', 'Email is required!', 'warning');
        } else if (subject == ""){
            swal('Pylate', 'Subject is required!', 'warning');
        } else if (message == ""){
            swal('Pylate', 'Message is required!', 'warning');
        } else {
            $('#submit').val('...');
            $('.sending').removeClass('inactive');
            setTimeout(function () {
                $.ajax({
                    url: "/landing-page/contact",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function() {
                        $('#submit').val(submit_value);
                        $('.sending').addClass('inactive');
                        swal('Pylate', 'We received your contact!', 'success');
                        $('#fname').val("");
                        $('#lname').val("");
                        $('#email').val("");
                        $('#subject').val("");
                        $('#message').val("");
                    }
                });
            }, 1000);
        }
    });
});
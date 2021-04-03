
function sendEmail() {
    var name = $("#formName");
    var email = $("#formEmail");
    var body = $("#formMessage");

    if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
        $.ajax({
            url: 'sendEmail.php',
            method: 'POST',
            dataType: 'json',
            data: {
                name: name.val(),
                email: email.val(),
                subject: subject.val(),
                body: body.val()
            }, success: function (response) {
                $('#myForm')[0].reset();
                $('.sent-notification').text("Message Sent Successfully.");
            }
        });
    }
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
    } else
        caller.css('border', '');

    return true;
}
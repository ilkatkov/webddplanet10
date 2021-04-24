window.onload = function (){
    let userFullName = document.getElementById('fullName').value;
    let userPhoneNumber = document.getElementById('phoneNumber').value;
    let userMessage = document.getElementById('message').value;
    let acceptButton = document.getElementById('accept');

    let token = document.getElementsByName('_token')[0].defaultValue;

    acceptButton.onclick = function (){
        $.ajax({
            url: 'api/orders/store/',
            data: {fullName: userFullName, phoneNumber: userPhoneNumber, message: userMessage, _token: token},
            type: 'POST',
            success: function (data) {
                console.log("+");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
}

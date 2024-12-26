function setNumber(e){
    var value = e.val();
    var res = value.replace(/[^0-9a-zA-Z' ']/g,'');
    e.val( res );
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function sendFormPost(w){
    var $form = w;
    var $body = {
        type: 'POST',
        url:  $form.attr("action"),
        headers: {
            // "Content-Type": "application/json",
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        timeout: 18000,
        cache: false,
        data: $form.serialize(),//JSON.stringify(datasend),
        dataType: 'JSON'
    }

    var $x = $.ajax($body);
    return $x;
}

$(document).ready(function(){

    // $('body').on('keyup', '.numberStatic', function(e){
    $('.numberStatic').keyup(function(e){
        e.stopPropagation();
        setNumber($(this));
    });

    return false;
})
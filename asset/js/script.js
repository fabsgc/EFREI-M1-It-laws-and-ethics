function basket(){
    $('.article').fadeTo( "slow" , 0, function() {
        $('.article').addClass('hidden');
    });

    $('.basket').fadeTo( "slow" , 1, function() {
        $('.basket').removeClass('hidden');
    });
}

function bill(){
    $('.basket').fadeTo( "slow" , 0, function() {
        $('.basket').addClass('hidden');
    });

    $('.bill').fadeTo( "slow" , 1, function() {
        $('.bill').removeClass('hidden');
    });
}

function pay(){
    if($('#checkbox-cgu').is(':checked')){
        $('.bill').fadeTo( "slow" , 0, function() {
            $('.bill').addClass('hidden');
        });
    
        $('.pay').fadeTo( "slow" , 1, function() {
            $('.pay').removeClass('hidden');
        });
    }
    else{
        alert('You must accept General Terms and Conditions of Sales');
    }
}

function thanks(){
    if($('input[name="email"]').val() != '' && $('input[name="card"]').val() != '' &&
       $('input[name="expiration"]').val() != '' && $('input[name="cvc"]').val() != ''){
        $('.pay').fadeTo( "slow" , 0, function() {
            $('.pay').addClass('hidden');
        });
    
        $('.thanks').fadeTo( "slow" , 1, function() {
            $('.thanks').removeClass('hidden');
        });
    }
    else{
        alert('You must fill each input');
    }
}

function condition(){
    $('.bill').fadeTo( "slow" , 0, function() {
        $('.bill').addClass('hidden');
    });

    $('.condition').fadeTo( "slow" , 1, function() {
        $('.condition').removeClass('hidden');
    });
}

function conditionBack(){
    $('.condition').fadeTo( "slow" , 0, function() {
        $('.condition').addClass('hidden');
    });

    $('.bill').fadeTo( "slow" , 1, function() {
        $('.bill').removeClass('hidden');
    });
}

$(function() {
    'use strict';

    var ver = $('.ver');

    function goToNextInput(e) {
        var key = e.which,
            t = $(e.target),
            sib = t.next('input');

        if (key != 9 && (key < 48 || key > 57)) {
            e.preventDefault();
            return false;
        }

        if (key === 9) {
            return true;
        }

        if (!sib || !sib.length) {
            sib = ver.find('input').eq(0);
        }
        sib.select().focus();
    }

    function onKeyDown(e) {
        var key = e.which;

        if (key === 9 || (key >= 48 && key <= 57)) {
            return true;
        }

        e.preventDefault();
        return false;
    }

    function onFocus(e) {
        $(e.target).select();
    }

    ver.on('keyup', 'input', goToNextInput);
    ver.on('keydown', 'input', onKeyDown);
    ver.on('click', 'input', onFocus);


    var total = 0 ;
    $('#value4').on("keyup",function(){
        $('.amount').each(function(index){
            total += ($(this).val());
        });
        total = total.substring(1);
        $('#total-value').val(total);
        alert(total);
    });

})

$(document).ready(function() {
    $('.basic-info-step2').hide();
    $('.basic-info-step3').hide();
    $('#non_jordanian_fields').hide();
    $('#ID-document').hide();

    // $(".basic-info-save1").on("click", function () {
    //     $('.basic-info-step1').hide();
    //     $('.basic-info-step2').show();
    // });
    // $(".basic-info-sms").on("click", function (e) {
    //     e.preventDefault();
    //     $('.basic-info-step3').show();
    //     $('.basic-info-step1').hide();
    //     $('.basic-info-step2').hide();
    // });

    $('#nationality').change(function () {
        // console.log($(this).val());
        let nationality = $(this).val();
        if( nationality === '0' ){
            $('#national-ID').hide();
            $('#non_jordanian_fields').show();
            $('#ID-document').show();
        }
        else {
            $('#national-ID').show();
            $('#non_jordanian_fields').hide();
            $('#ID-document').hide();

    } } ) ;
});

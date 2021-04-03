// from codePen
jQuery(document).ready(function() {
    $('#bod').change(function() {
        let value = $( this ).val();
        let bod = new Date(value);
        let limit = Date.now() - bod.getTime();
        let age_dt = new Date(limit);
        console.log(value);
        // return Math.abs(age_dt.getUTCFullYear() - 1970);
        let age = (Math.abs(age_dt.getUTCFullYear() - 1970));
        // console.log(age<=30 && age >= 18);
        if (age<=30 && age >= 18){
            $('#submit').css('display', 'none');
            $('#next').css('display', 'block');
        }
        else {
            $('#submit').css('display', 'block');
            $('#next').css('display', 'none');
            // alert("The paragraph is now hidden"); // make it in controller
        }
        // console.log(age);

    });
    // $('#nationality').change(function () {
    //     // console.log($(this).val());
    //     let nationality = $(this).val();
    //     if( nationality == 'non-jordanian' ){
    //         $('#national-ID').css('display', 'none');
    //         $('#ID-document').css('display', 'block');
    //         $('#en-name').css('display', 'block');
    //         $('#ar-name').css('display', 'block');
    //         $('#name-alert').css('display', 'block');
    //         $('#name-alert_ar').css('display', 'block');
    //     }
    //     else {
    //         $('#national-ID').css('display', 'block');
    //         $('#ID-document').css('display', 'none');
    //         $('#en-name').css('display', 'none');
    //         $('#ar-name').css('display', 'none');
    //         $('#name-alert').css('display', 'none');
    //         $('#name-alert_ar').css('display', 'none');
    //     }
    //
    // });

    $('#inputEmailVer').on('keyup change', function() {

        //initially hide all
        if(this.value.length <= 3){
            $('#email-verification').hide();
            $('#inputMobile').attr("disabled", true);
            $('#inputMobileVer').attr("disabled", true);
        }
        else{
            $('#email-verification').show();
            $('#inputMobile').removeAttr("disabled");
            $('#inputMobileVer').removeAttr("disabled");
        }
    });

    $('#inputMobileVer').on('keyup change', function() {

        //initially hide all
        if(this.value.length <= 3){
            $('#mobile-verification').hide();
            $('#next-p1').attr("disabled", true);
        }
        else{
            $('#mobile-verification').show();
            $('#next-p1').removeAttr("disabled");
        }
    });


    // click on next button
    jQuery('.form-wizard-next-button').click(function() {
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        var next = jQuery(this);
        var nextWizardStep = true;
        // parentFieldset.find('.wizard-required').each(function(){
        //     var thisValue = jQuery(this).val();
        //
        //     if( thisValue == "") {
        //         jQuery(this).siblings(".wizard-form-error").slideDown();
        //         nextWizardStep = false;
        //     }
        //     else {
        //         jQuery(this).siblings(".wizard-form-error").slideUp();
        //     }
        // });
        if( nextWizardStep) {
            next.parents('.wizard-fieldset').removeClass("show","400");
            currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
            next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
            jQuery(document).find('.wizard-fieldset').each(function(){
                if(jQuery(this).hasClass('show')){
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        if(jQuery(this).attr('data-attr') == formAtrr){
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        }
    });
    //click on previous button
    jQuery('.form-wizard-previous-button').click(function() {
        var counter = parseInt(jQuery(".wizard-counter").text());;
        var prev =jQuery(this);
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        prev.parents('.wizard-fieldset').removeClass("show","400");
        prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
        currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
        jQuery(document).find('.wizard-fieldset').each(function(){
            if(jQuery(this).hasClass('show')){
                var formAtrr = jQuery(this).attr('data-tab-content');
                jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                    if(jQuery(this).attr('data-attr') == formAtrr){
                        jQuery(this).addClass('active');
                        var innerWidth = jQuery(this).innerWidth();
                        var position = jQuery(this).position();
                        jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                    }else{
                        jQuery(this).removeClass('active');
                    }
                });
            }
        });
    });
    //click on form submit button
    jQuery(document).on("click",".form-wizard .form-wizard-submit-button" , function(){
        var parentFieldset = jQuery(this).parents('.wizard-fieldset');
        var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
        // parentFieldset.find('.wizard-required').each(function() {
        //     var thisValue = jQuery(this).val();
        //     if( thisValue == "" ) {
        //         jQuery(this).siblings(".wizard-form-error").slideDown();
        //     }
        //     else {
        //         jQuery(this).siblings(".wizard-form-error").slideUp();
        //     }
        // });
    });
    // focus on input field check empty or not
    jQuery(".form-control").on('focus', function(){
        var tmpThis = jQuery(this).val();
        if(tmpThis == '' ) {
            jQuery(this).parent().addClass("focus-input");
        }
        else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
        }
    }).on('blur', function(){
        var tmpThis = jQuery(this).val();
        if(tmpThis == '' ) {
            jQuery(this).parent().removeClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideDown("3000");
        }
        else if(tmpThis !='' ){
            jQuery(this).parent().addClass("focus-input");
            jQuery(this).siblings('.wizard-form-error').slideUp("3000");
        }
    });
});
// ///////////////////

$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

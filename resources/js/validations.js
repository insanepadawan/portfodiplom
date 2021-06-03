export function initValidations(data)
{
    data.forEach(function(form, index) {
        let formId = $('#' + form[0]);
        let buttonId = $('#' + form[1]);

        let validator = formId.validate({
            errorPlacement: (error, element) => {
                console.log(error);
                error.appendTo($(element).closest('.form-group'));
            },
            highlight: (element, errorClass, validClass) => {
                $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
                buttonId.addClass('disabled');
            },
            unhighlight: (element, errorClass, validClass) => {
                $(element).closest('.form-group').removeClass(errorClass).addClass(validClass);
            },
            success: () => {
                if(validator.numberOfInvalids() === 0)
                    buttonId.removeClass('disabled');
            },
        });
    });
}

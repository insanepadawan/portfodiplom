// libraries
window.$ = window.jQuery = require('jquery');
require('remodal');
require('inputmask');
require('dropzone');
require('jquery-validation');

// custom packages
import { initDropzones } from './dropzones';
import { initValidations } from "./validations";
Dropzone.autoDiscover = false;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    Inputmask({ "mask": phoneMask}).mask(document.querySelectorAll("[rel=phone]"));
    Inputmask({ "mask": smsCodeMask}).mask(document.querySelectorAll("[rel=sms]"));

    initDropzones();
    initValidations(validations);
});

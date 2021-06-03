export function initDropzones()
{
    let maxFilesCount = 1;
    let language = $('html').attr('lang');
    let dz_wrongformat = '';
    let dz_morethatone = '';
    let dz_selected = '';

    if(language === 'ru')
    {
        dz_wrongformat = "Неправильный формат файла!";
        dz_morethatone = 'Вы не можете загрузить больше ' + maxFilesCount + ' файла';
        dz_selected = "Вы выбрали файл. <br>Нажмите кнопку «зарегистрировать чек»<br> для завершения.";
    }else{
        dz_wrongformat = "Файл пішімі дұрыс емес!";
        dz_morethatone = "Бірден көп файл жүктей алмайсыз";
        dz_selected = "Сіз файлды таңдадыңыз.<br> Аяқтау үшін «жүктеуді тексеру» <br>түймесін басыңыз.";
    }

    dropzoneForms.forEach(function(form, index) {
        if($('#' + form).length > 0)
        {
            let dropzone = new Dropzone('#' + form, {
                paramName: 'image',
                autoProcessQueue: false,
                addRemoveLinks: false,
                maxFiles: maxFilesCount,
                resizeWidth: 1000,
                dictInvalidFileType: '' + dz_wrongformat,
                dictMaxFilesExceeded: '' + dz_morethatone,
                acceptedFiles: '.png, .jpg, .jpeg',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                accept: function(file, done){
                    if(this.files.length > maxFilesCount){
                        this.removeFile(file);
                        done('Cant upload more than ' + maxFilesCount);
                        return;
                    }

                    done();
                }
            });

            dropzone.on('success', function(data) {
                dropzone.removeAllFiles();
                console.log(data);
            });

            dropzone.on('queuecomplete', function (){
                dropzone.removeAllFiles();
            });

            dropzone.on('sending', function(files, xhr, formData) {
                formData.append('network', $('select[name="network"]').val());
            });

            dropzone.on('error', function(file, errorMessage, xhr) {
                if(xhr) {
                    let errors = JSON.parse(xhr.response).errors;
                    Object.keys(errors).forEach( key => {
                        let label = $(`input[name="${ key }"]`);
                        label.closest('.form-group').addClass('error').removeClass('valid');
                    });

                    dropzone.files.forEach(file => {
                        file.status = Dropzone.QUEUED;
                    });
                    return;
                }
            });
        }
    });
}



@extends('adminlte::page')

@section('title', 'Faqs')

@section('content_header')
    <a href="{{ url('/edit') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Назад</button></a>
    <h1 class="text-center mb-4">Создать Вопрос-Ответ</h1>
@stop

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/edit') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @include ('pages.edit-prof.form', ['formMode' => 'create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
    <script>
        $(function () {
            document.querySelectorAll('[rel="editor"]').forEach(el => {
                ClassicEditor
                    .create(el)
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            });
            Inputmask({ "mask": "+\\7 (\\799) 999-99-99"}).mask(document.querySelectorAll("[rel=phone]"))
            let daterange = $('[rel="daterange"]').daterangepicker({
                singleDatePicker: true,
                "locale": {
                    "applyLabel": "Применить",
                    "cancelLabel": "Отменить",
                    "format": "YYYY-MM-DD",
                    "daysOfWeek": [
                        "Вс",
                        "Пн",
                        "Вт",
                        "Ср",
                        "Чт",
                        "Пт",
                        "Сб"
                    ],
                    "monthNames": [
                        "Январь",
                        "Февраль",
                        "Март",
                        "Апрель",
                        "Май",
                        "Июнь",
                        "Июль",
                        "Август",
                        "Сентябрь",
                        "Октябрь",
                        "Ноябрь",
                        "Декабрь"
                    ],
                    "firstDay": 1
                }
            })
            let blah = document.querySelector('#blah')
            let imgInp = document.querySelector('#blah-file')
            blah.addEventListener("click",function (e){
                imgInp.click();
            });
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            };
        });
    </script>
@stop

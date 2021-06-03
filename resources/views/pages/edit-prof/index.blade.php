@extends('adminlte::page')

@section('title', 'Профиль озгерту')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title pt-1">Акпарат</h3>
                    <div class="card-tools">
                        {!!   (!\App\Models\UserData::count()) ? '<a href="' . url('/edit/create'). '" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Создать</a>' : '' !!}
                    </div>
                </div>

                <div class="card-body table-responsive table-striped p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Тегi</th>
                                <th>Туылган кунi</th>
                                <th>Туратын мекен жайы</th>
                                <th>Телефон номiрi</th>
                                <th>Сонгы жумысы</th>
                                <th class="text-right">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->surname }}</td>
                                    <td>{{ $item->bday }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->portfolio }}</td>
                                    <td class="text-right">
                                        <a class="btn btn-info btn-sm" href="{{ url('edit/' . $item->id . '/edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                        <form method="POST" action="{{ url('edit' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete faq" onclick="return confirm('Вы уверены?')"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper ml-3"> {!! $data->appends(['search' => Request::get('search')])->links('vendor.pagination.bootstrap-4') !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(function () {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-center',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            @if(session()->has('flash_message'))
            Toast.fire({
                title: '{{ session('flash_message') }}'
            });
            @endif
            let daterange = $('[rel="daterange"]').daterangepicker({
                autoUpdateInput: false,
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
            });
            daterange.on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD') + ' / ' + picker.endDate.format('YYYY-MM-DD'));
            });
            daterange.on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
            Inputmask({ "mask": "+\\7 (\\799) 999-99-99"}).mask(document.querySelectorAll("[rel=phone]"));
        });
    </script>
@stop

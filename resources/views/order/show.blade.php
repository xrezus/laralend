@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body"><h4 class="mt-0 mb-4 header-title">Информация о заявке</h4>

                    <div class="form-group row">
                        <strong class="col-sm-2">Имя</strong>
                        <div class="col-sm-10">
                            <span>{{ $order->name }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <strong class="col-sm-2">Email</strong>
                        <div class="col-sm-10">
                            <span>{{ $order->email }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <strong class="col-sm-2">Телефон</strong>
                        <div class="col-sm-10">
                            <span><a class="btn-link" href="tel:{{ $order->phone }}">{{ $order->phone }}</a></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <strong class="col-sm-2">Дата добавления</strong>
                        <div class="col-sm-10">
                            <span>{{ $order->created_at->format('d.m.Y H:i:s') }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Статус</label>
                        <div class="col-sm-10">
{{--                            <input class="form-control" type="text" value="{{ $order->status }}" >--}}
                            <select class="form-control" id="status" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="0" data-select2-id="16">Не обработан</option>
                                <option value="1" data-select2-id="17">Оплачено</option>
                                <option value="2" data-select2-id="19">Думает</option>
                                <option value="3" data-select2-id="18">Отменен</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="commnt" class="col-sm-2 col-form-label">Комментарий</label>
                        <div class="col-sm-10">
                            <textarea id="commnt" class="form-control" maxlength="225" rows="3">{{ $order->comment }}</textarea>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div><!-- end row -->

@endsection

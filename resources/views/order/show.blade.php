@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body"><h4 class="mt-0 mb-4 header-title">Информация о заявке</h4>

                    @if(Session::has('update'))
                        <div class="alert alert-success fade show" role="alert">
                            {{ Session::get('update') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('order.update', $order->id) }}" method="post">
                        @csrf
                        @method('PUT')

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
                                <select class="form-control" id="status" name="status">
                                    <option value="0">Не обработан</option>
                                    <option value="1">Оплачено</option>
                                    <option value="2">Думает</option>
                                    <option value="3">Отменен</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comment" class="col-sm-2 col-form-label">Комментарий</label>
                            <div class="col-sm-10">
                                <textarea id="comment" name="comment" class="form-control" maxlength="225" rows="3">{{ $order->comment }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div><!-- end row -->

@endsection

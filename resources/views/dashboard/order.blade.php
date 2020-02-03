@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body"><h4 class="mt-0 header-title mb-4">Все заявки</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Email</th>
                                <th scope="col">Телефон</th>
                                <th scope="col">Статус</th>
                                <th>Дата добавления</th>
                                <th scope="col" colspan="2">Комментарий</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->status }}


                                        <span class="badge badge-info">Не обработан</span>

                                    </td>
                                    <td>{{ $order->created_at->format('d.m.Y H:i:s') }}</td>
                                    <td><div class="order__comment">{{ $order->comment }}</div></td>
                                    <td class="text-right"><div><a title="Редактировать" href="{{ route('order.show', $order->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-square-edit-outline"></i></a></div></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end row -->

    <!--  Modal content for the above example -->
    <div class="modal fade modal-comment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Добавить комментарий</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">


                    <form class="outer-repeater">
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item="" class="outer">
                                <div class="form-group">
                                    <label for="formmessage">Комментарий:</label>
                                    <textarea id="formmessage" class="form-control" rows="6"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Изменить</button>

                            </div>
                        </div>
                    </form>


                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

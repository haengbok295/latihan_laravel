@extends('layouts.main')

@section('header')
	TABLE FROM SAKILA
@endsection

@section('content')
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TABEL CUSTOMER
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                            	<caption>
                            		<button type="button" class="btn btn-info waves-effect m-r-20" data-toggle="modal" data-target="#tambahModal">
                                        <i class="material-icons">add</i>
                                        <span>Create</span>
                                    </button>
                            	</caption>
                                <thead>
                                    <tr>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $data)
                                    <tr>
                                        <td>{{$data->first_name}}</td>
                                        <td>{{$data->last_name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>
                                        	<button type="button" href="" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#editModal{{$data->customer_id}}">
                                                <i class="material-icons">edit</i>
                                                <span>Update</span>
                                            </button>
                                        	<button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#hapusModal{{$data->customer_id}}">
                                                <i class="material-icons">delete</i>
                                                <span>Delete</span>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$customer->links()}}
                        </div>
                    </div>
                </div>
            </div>
@foreach($customer as $data)
            <div class="modal fade" id="editModal{{$data->customer_id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Update Data</h4>
                        </div>
                        <div class="modal-body">
                           <div class="row clearfix">
                            <form action="{{action('SakilaController@update', $data->customer_id)}}" method="POST">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="store_id" class="form-control" value="{{$data->store_id}}" placeholder="Store ID" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="first_name" class="form-control" value="{{$data->first_name}}" placeholder="First Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="last_name" class="form-control" value="{{$data->last_name}}" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="address_id" class="form-control" value="{{$data->address_id}}" placeholder="Address ID" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="active" class="form-control" value="{{$data->active}}" placeholder="Active" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{csrf_field()}}

                            <input type="hidden" name="_method" value="PUT">
                        </div>
                        <div class="modal-footer">
                            <div class="row clearfix jsdemo-notification-button">
                                <button type="submit" class="btn btn-info waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="alert-success">SAVE CHANGES</button>
                                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CANCEL</button>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Create Data</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                            <form action="{{route('create')}}" method="POST">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="store_id" class="form-control" placeholder="Store ID" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name ="first_name" class="form-control" placeholder="First Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name="email" class="form-control" placeholder="email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="address_id" class="form-control" placeholder="Address ID" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="active" class="form-control" placeholder="Active" />
                                        </div>
                                    </div>
                                </div>
                                {{csrf_field()}}

                                <input type="hidden" name="_method" value="PUT">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row clearfix jsdemo-notification-button">
                                    <button type="submit" class="btn btn-info waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="" data-animate-exit="" data-color-name="alert-success">ADD</button>
                                    <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CANCEL</button>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@foreach($customer as $data)
            <div class="modal fade" id="hapusModal{{$data->customer_id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Delete</h4>
                        </div>
                        <div class="modal-body">
                            Anda yakin ingin menghapus data ini?
                        </div>
                        <form action="{{action('SakilaController@delete', $data->customer_id)}}" method="POST">
                            {{csrf_field()}}

                            <input type="hidden" name="_method" value="GET">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info waves-effect">YES</button>
                                <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">CANCEL</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
@endforeach

@endsection

@section('js')
    <script src="{{url('/')}}/admin_bsb/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="{{url('/')}}/admin_bsb/js/pages/ui/notifications.js"></script>
@endsection
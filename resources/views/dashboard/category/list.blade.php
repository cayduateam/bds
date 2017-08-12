@extends('dashboard.assets.master')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách Tin Tức</h1>
			</div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    {{$stt=null}}
                    @foreach($data as $parent)
                        <tr>
                            <th>{{$stt+=1}}</th>
                            <td>{{$parent['name']}}</td>
                            <td class="text-center">{{$parent['status']}}</td>
                            <td class="text-center">{{$parent['created_at']}}</td>
                            <td class="text-center">
                                <a href="dashboard/news/edit-category/{{$parent['id']}}">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="dashboard/news/delete-category/{{$parent['id']}}">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                        @foreach($parent['sub'] as $key => $sub)
                            <tr>
                                <th></th>
                                <td class="sub">{{$sub['name']}}</td>
                                <td class="text-center">{{$sub['status']}}</td>
                                <td class="text-center">{{$sub['created_at']}}</td>
                                <td class="text-center">
                                    <a href="dashboard/news/edit-category/{{$key}}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="dashboard/news/delete-category/{{$key}}">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            {{--<div class="text-center">{{$news->links()}}</div>--}}
		</div>
	</div>
@endsection
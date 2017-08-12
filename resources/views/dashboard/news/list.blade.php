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
                        <th>Title</th>
                        <th class="text-center">Hit</th>
                        <th>Is Slide</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    {{$stt=null}}
                    @foreach($news as $val)
                    <tr>
                        <th>{{$stt+=1}}</th>
                        <td>{{$val->title}}</td>
                        <td class="text-center">{{$val->hit}}</td>
                        <td class="text-center">{{$val->image_slide!=null?'Yes':"NO"}}</td>
                        {{--<td>{{$val->category->name}}</td>--}}
                        <td class="text-center">{{$val->created_at}}</td>
                        <td class="text-center">
                            <a href="#">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="text-center">{{$news->links()}}</div>
		</div>
	</div>
@endsection
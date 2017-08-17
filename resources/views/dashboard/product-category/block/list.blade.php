@if(isset($data))
	{{$stt=null}}
	@foreach($data as $id => $parent)
    <tr>
      	<td>{{$stt+=1}}</td>
      	<td>{{$parent['name']}}</td>
      	<td>{{($parent['status'] == 1)?'Yes':'No'}}</td>
      	<td>{{$parent['created_at']}}</td>
      	<td><a href="{{route('product-category.edit',$id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
      	<td>
      		<form action="{{route('product-category.destroy',$id)}}" method="post">
			{{csrf_field()}} {{method_field('DELETE')}}
			<button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>	
			</form>
		</td>
    </tr>
    @if(isset($parent['sub']))
    @foreach($parent['sub'] as $idSub => $sub)
    	<tr>
			<td></td>
	      	<td>{{$sub['name']}}</td>
	      	<td>{{($sub['status'] == 1)?'Yes':'No'}}</td>
	      	<td>{{$sub['created_at']}}</td>
	      	<td><a href="{{route('product-category.edit',$idSub)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	      	<td>
	      		<form action="{{route('product-category.destroy',$idSub)}}" method="post">
				{{csrf_field()}} {{method_field('DELETE')}}
				<button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</form>
			</td>
		</tr>
	@endforeach
	@endif
@endforeach
@endif
@if(isset($data) && (count($data) == 0))
<p>Not have data</p>
@endif

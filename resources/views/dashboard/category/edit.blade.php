@extends('dashboard.category.add')

@section('category.name',$category->name)

@section('edit_method')
{{method_field('PUT')}}
@endsection


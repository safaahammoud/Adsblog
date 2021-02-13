@extends('front.layouts.master') 
@section('content') 
<div class="container-fluid">
    <div class="col-lg-10">
        <h3> ADD NEW POST</h3>
    </div>
    <!-- To be able to download multiple images--> {!! Form::open(array('files'=>true)) !!} <div class="form-group">
        <label> Post</label> {{ Form::text('title',null,['class'=>'form-control']) }} </div>
    <div class="form-group">
        <label>Post info</label> {{ Form::text('text',null,['class'=>'form-control']) }} </div>
    <div class="form-group">
        <label> Price</label> {{ Form::text('price',null,['class'=>'form-control']) }} </div>
    <div class="form-group">
        <label> Category</label> {{ Form::select('category_id',$categories,1,['class'=>'form-control']) }} </div>
    <div class="form-group">
        <label>Country</label> {{ Form::select('country_id',$countries,1,['class'=>'form-control']) }} </div>
    <div class="form-group">
        <label>Images</label>
        <input
            type="file"
            class="form-control"
            name="image[]"
            multiple
        />
    </div>
    <button
        type="submit"
        class="btn btn-primary"
    >Save</button> {!! Form::close() !!}
</div> @endsection
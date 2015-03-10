@extends('app')
@section('content')
<h2 align='center'> Система администрирования</h2>
<h3 align='center'> страница редактирования товара</h3>
<form method='post' action="{{asset('adminka/edit/'.$tovar->id)}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class='container'>
	<div class='row'>
	  <div class="form-group">
	    <input type="login" name="name" class="form-control" value="{{$tovar['name']}}">
	  </div>
	  <textarea name='body' class="form-control" rows="3" >{{$tovar['body']}}</textarea>
	<div class="form-group">
       <label for="exampleInputFile">фото товара</label>
       <input type="file" name="picture" id="exampleInputFile">
        <p class="help-block"></p>
    </div>
	  <div class="form-group">
		<input type="login" class="form-control" name="price" value="{{$tovar['price']}}">
	  </div>
	  <div class="checkbox" >
		<label>
		  <input name="showhide" type="checkbox" <?=$tovar['showhide']=='show'?'checked':''?> > видимый/невидимый
		</label>
	  </div>
	  <div >
	  <label for="form-control">категория товара</label>
		<input type="login" name="category" class="form-control" value="{{$tovar['cat_id']}}">
		</div>
		<? //var_dump($tovar['vip']);?>
		<label for="radio-inline">Vip позиция</label><br/>
		<label class="radio-inline" value="{{$tovar['vip']}}">
			  <input type="radio" name="vip" value='1' <?=$tovar['vip']=='1'?'checked':''?>> 1
			</label>
			<label class="radio-inline">
			  <input type="radio" name="vip" value='2' <?=$tovar['vip']=='2'?'checked':''?>> 2
			</label>
			<label class="radio-inline">
			  <input type="radio" name="vip" value='3' <?=$tovar['vip']=='3'?'checked':''?>> 3
		</label><br/>
	  <button type="submit" class="btn btn-default">Submit</button>
	  </div>
 </div>
</form>
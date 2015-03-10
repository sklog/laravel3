<h2 align='center'> Система администрирования</h2>
<h3 align='center'> форма редактирования товара</h3>
<form method='post' action="{{asset('adminka')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class='container'>
	<div class='row'>
	  <div class="form-group">
	    <input type="login" name="name" class="form-control" placeholder="название товара">
	  </div>
	  <textarea name='body' class="form-control" rows="3" placeholder="описание товара"></textarea>
	<div class="form-group">
       <label for="exampleInputFile">фото товара</label>
       <input type="file" name="picture" id="exampleInputFile">
        <p class="help-block"></p>
    </div>
	  <div class="form-group">
		<input type="login" class="form-control" name="price" placeholder="цена">
	  </div>
	  <div class="checkbox" >
		<label>
		  <input name="showhide" type="checkbox" checked > видимый/невидимый
		</label>
	  </div>
	  <div >
	  <label for="form-control">категория товара</label>
		<select class="form-control" name='category'>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select>
		</div>
		<label for="radio-inline">Vip позиция</label><br/>
		<label class="radio-inline">
			  <input type="radio" name="vip" id="inlineRadio1" value="1"> 1
			</label>
			<label class="radio-inline">
			  <input type="radio" name="vip" id="inlineRadio2" value="2"> 2
			</label>
			<label class="radio-inline">
			  <input type="radio" name="vip" id="inlineRadio3" value="3"> 3
		</label><br/>
	  <button type="submit" class="btn btn-default">Submit</button>
	  </div>
 </div>
</form>
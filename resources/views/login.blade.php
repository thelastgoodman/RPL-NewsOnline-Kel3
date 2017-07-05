@extends('index')
	@section('konten')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login</h3>
				</div>
				<div class="panel-body">
					   <form  enctype= "multipart/form-data"  action="{{url('admin')}}" method="post" name="daftar">
					    <div class="form-group">
					    	{{ csrf_field() }}
                                <label for="exampleInputEmail1">Email <font color="red" >* <p id='pesan_error_nl'></p></font></label>
                                <input type="email" class="form-control"  placeholder="Email" name="NL" id="nl"> 
                          </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Password <font color="red" >* <p id='pesan_error_username'></p></font></label>
                                <input type="password" class="form-control"  placeholder="Password" name="username" id="username">
                        </div>
                          <button type="submit" class="btn btn-danger2" width="40px" onclick="return validasi()">Login</button>
  						  <button type="reset" class="btn btn-danger2">Batal</button>
                        </form>
				</div>
			</div>
		</div>
	</div>
	@endsection
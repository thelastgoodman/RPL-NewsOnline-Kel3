@extends('index')
	@section('konten')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Pencarian Berita Berdasarkan Tanggal</h3>
				</div>
				<div class="panel-body">
					   <form  enctype= "multipart/form-data"  action="{{url('404')}}" method="post" name="daftar">
					    <div class="form-group">
					    	{{ csrf_field() }}
                                <input type="date" class="form-control" name="NL" id="nl"> 
                          </div>
                 		
                 		 <div class="form-group">
					    	{{ csrf_field() }}
                                <input type="date" class="form-control" name="NL" id="nl"> 
                          </div>

                          <button type="submit" class="btn btn-danger2" width="40px" onclick="return validasi()">Cari</button>
  						  <button type="reset" class="btn btn-danger2">Batal</button>
                        </form>
				</div>
			</div>
		</div>
	</div>
	@endsection
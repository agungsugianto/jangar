@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kategori.update',$kategoris->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
					  {{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<input type="text" name="kategori" class="form-control" value="{{ $kategoris->kategori }}"  required>
			  			@if ($errors->has('kategori'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
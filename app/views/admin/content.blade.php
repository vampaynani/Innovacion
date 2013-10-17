@extends('layout.admin')
@section('content')
	<div class="row-fluid">
 		<div class=".col-md12">
 			<ul id="edit-tabs" class="nav nav-tabs">
 				<li class="active"><a href="#files">Archivos</a></li>
 				<li><a href="#new">Nuevo</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="files">
					<nav class="navbar navbar-default" role="navigation">
						<div class="col-md-2">Nombre</div>
			 			<div class="col-md-2">Imagen</div>
			 			<div class="col-md-2">Link</div>
			 			<div class="col-md-2">Descripción</div>
			 			<div class="col-md-2">Subcategoría</div>
		 				<div class="col-md-2">Tipo de archivo</div>
					</nav>
					@foreach($files as $file)
			 			<div class="row">
				 			<div class="col-md-2">{{ $file->nomArch }}</div>
				 			<div class="col-md-2">{{ $file->imgArch }}</div>
				 			<div class="col-md-2">{{ $file->linkArch }}</div>
				 			<div class="col-md-2">{{ $file->descArch }}</div>
				 			<div class="col-md-2">{{ $file->subcat_id }}</div>
			 				<div class="col-md-2">{{ $file->tarch_id }}</div>
			 			</div>
		 			@endforeach
				</div>
				<div class="tab-pane" id="new">
					<div class="panel-group" id="accordion" class=".collapse">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#newImage">
									Nueva imagen
									</a>
								</h4>
							</div>
							<div id="newImage" class="panel-collapse collapse in">
								<div class="panel-body">
									<form role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="1" />
										<div class="form-group">
											<label for="name">Nombre</label>
											<input name="name" type="text" class="form-control" id="name" placeholder="Nombre del archivo">
										</div>
										<div class="form-group">
											<label for="input">Thumbnail</label>
											<input name="thumb" type="file" id="input" accept="image/*">
											<p class="help-block">Thumbnail del archivo a publicar.</p>
										</div>
										<div class="form-group">
											<label for="name">Imagen</label>
											<input name="file" type="file" id="input" accept="image/*">
											<p class="help-block">Archivo de imagen a publicar.</p>
										</div>
										<div class="form-group">
											<label for="desc">Descripción</label>
											<textarea name="desc" id="desc" class="form-control">
											</textarea>
										</div>
										<div class="form-group">
											<label for="subcat">Subcategoria</label>
											<select name="subcat" id="subcat" class="form-control">
												@foreach($subcats as $subcat)
													<option value="{{ $subcat->id }}">{{ $subcat->nomSub }}</option>
												@endforeach
											</select>
										</div>
										<button type="submit" class="btn btn-default">Submit</button>							
									</form>
							   </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#newVideo">
									Nuevo video
									</a>
								</h4>
							</div>
							<div id="newVideo" class="panel-collapse collapse in">
								<div class="panel-body">
							        <form role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="2" />
										<div class="form-group">
											<label for="name">Nombre</label>
											<input name="name" type="text" class="form-control" id="name" placeholder="Nombre del video">
										</div>
										<div class="form-group">
											<label for="input">Thumbnail</label>
											<input name="thumb" type="file" id="input" accept="image/*">
											<p class="help-block">Thumbnail del video a publicar.</p>
										</div>
										<div class="form-group">
											<label for="url">URL del video</label>
											<input name="url" type="text" class="form-control" id="url" placeholder="URL del video">
										</div>
										<div class="form-group">
											<label for="subcat">Subcategoria</label>
											<select name="subcat" id="subcat" class="form-control">
												@foreach($subcats as $subcat)
													<option value="{{ $subcat->id }}">{{ $subcat->nomSub }}</option>
												@endforeach
											</select>
										</div>
										<button type="submit" class="btn btn-default">Submit</button>							
									</form>
							   </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#newFile">
									Nuevo archivo
									</a>
								</h4>
							</div>
							<div id="newFile" class="panel-collapse collapse in">
								<div class="panel-body">
							        <form role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="3" />
										<div class="form-group">
											<label for="name">Nombre</label>
											<input name="name" type="text" class="form-control" id="name" placeholder="Nombre del archivo">
										</div>
										<div class="form-group">
											<label for="input">Thumbnail</label>
											<input name="thumb" type="file" id="input" accept="image/*">
											<p class="help-block">Thumbnail del archivo a publicar.</p>
										</div>
										<div class="form-group">
											<label for="name">Archivo</label>
											<input name="file" type="file" id="input">
											<p class="help-block">Archivo a publicar.</p>
										</div>
										<div class="form-group">
											<label for="subcat">Subcategoria</label>
											<select name="subcat" id="subcat" class="form-control">
												@foreach($subcats as $subcat)
													<option value="{{ $subcat->id }}">{{ $subcat->nomSub }}</option>
												@endforeach
											</select>
										</div>
										<button type="submit" class="btn btn-default">Submit</button>							
									</form>
							   </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#newLink">
									Nuevo link
									</a>
								</h4>
							</div>
							<div id="newLink" class="panel-collapse collapse in">
								<div class="panel-body">
							        <form role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="4" />
										<div class="form-group">
											<label for="name">Nombre</label>
											<input name="name" type="text" class="form-control" id="name" placeholder="Nombre del enlace">
										</div>
										<div class="form-group">
											<label for="input">Thumbnail</label>
											<input name="thumb" type="file" id="input" accept="image/*">
											<p class="help-block">Thumbnail del enlace a publicar.</p>
										</div>
										<div class="form-group">
											<label for="link">URL del enlace</label>
											<input name="link" type="text" class="form-control" id="link" placeholder="URL del enlace">
										</div>
										<div class="form-group">
											<label for="subcat">Subcategoria</label>
											<select name="subcat" id="subcat" class="form-control">
												@foreach($subcats as $subcat)
													<option value="{{ $subcat->id }}">{{ $subcat->nomSub }}</option>
												@endforeach
											</select>
										</div>
										<button type="submit" class="btn btn-default">Submit</button>							
									</form>
							   </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
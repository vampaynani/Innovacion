@extends('layout.admin')
@section('content')
	<div class="row-fluid">
 		<div class=".col-md12">
 			<ul id="edit-tabs" class="nav nav-tabs">
 				<li class="active"><a href="#files">Lista de Archivos</a></li>
 				<li><a href="#new">Cargar Archivos</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="files">
					<div class="row">
						@foreach($files as $file)
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<form role="form" method="post">
									<input type="hidden" name="del" value="{{ $file->id }}" />
									<img src="{{ Request::root() }}/previews/{{ $file->imgArch }}" data-src="holder.js/300x200" alt="{{ $file->nomArch }}" />
									<div class="caption">
										<h3>{{ $file->nomArch }}</h3>
										<p style="height:150px">{{ $file->descArch }}</p>
										<p>
											<button type="button" class="editar btn btn-primary">Editar</button>
											<button type="submit" class="eliminar btn btn-danger">Eliminar</button>
										</p>
									</div>
								</form>
							</div>
							<div class="edit-form">
								<form role="form" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="{{ $file->id }}" />
								<div class="form-group">
									<label for="namee{{ $file->id }}">Nombre</label>
									<input value="{{ $file->nomArch }}" name="name" type="text" class="form-control" id="name{{ $file->id }}" placeholder="Nombre del archivo">
								</div>
								<div class="form-group">
									<label for="inpute{{ $file->id }}">Cambiar thumbnail</label>
									<input name="thumb" type="file" id="input{{ $file->id }}" accept="image/*">
								</div>
								@if ($file->tarch_id === '1')
								<div class="form-group">
									<label for="file{{ $file->id }}">Cambiar imagen</label>
									<input name="file" type="file" id="file{{ $file->id }}" accept="image/*">
								</div>
								@elseif ($file->tarch_id === '2')
								<div class="form-group">
									<label for="url{{ $file->id }}">Cambiar URL de video</label>
									<input name="url" type="text" class="form-control" id="url{{ $file->id }}" placeholder="{{ $file->linkArch }}">
								</div>
								@elseif ($file->tarch_id === '3')
								<div class="form-group">
									<label for="file{{ $file->id }}">Cambiar archivo</label>
									<input name="file" type="file" id="file{{ $file->id }}">
								</div>
								@elseif ($file->tarch_id === '4')
								<div class="form-group">
									<label for="url{{ $file->id }}">Cambiar URL</label>
									<input name="url" type="text" class="form-control" id="url{{ $file->id }}" placeholder="{{ $file->linkArch }}">
								</div>
								@endif
								<div class="form-group">
									<label for="desc">Cambiar descripción</label>
									<textarea name="desc" id="desc" class="form-control">{{ $file->descArch }}</textarea>
								</div>
								<div class="form-group">
									<label for="subcat">Cambiar subcategoria</label>
									<select name="subcat" id="subcat" class="form-control">
									@foreach($subcats as $subcat)
										@if($subcat->id == $file->subcat_id)
											<option selected value="{{ $subcat->id }}">{{ $subcat->nomSub }}</option>
										@else
											<option value="{{ $subcat->id }}">{{ $subcat->nomSub }}</option>
										@endif
									@endforeach
									</select>
								</div>
								<button type="submit" class="guardar btn btn-default">Guardar</button>
								<button type="button" class="cancelar btn btn-primary">Cancelar</button>							
								</form>
							</div>
						</div>
						@endforeach
					</div>
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
									<form role="form" method="post" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="1" />
										<div class="form-group">
											<label for="img-name">Nombre</label>
											<input name="name" type="text" class="form-control" id="img-name" placeholder="Nombre del archivo">
										</div>
										<div class="form-group">
											<label for="img-thumb">Thumbnail</label>
											<input name="thumb" type="file" id="img-thumb" accept="image/*">
											<p class="help-block">Thumbnail del archivo a publicar.</p>
										</div>
										<div class="form-group">
											<label for="img-file">Imagen</label>
											<input name="file" type="file" id="img-file" accept="image/*">
											<p class="help-block">Archivo de imagen a publicar.</p>
										</div>
										<div class="form-group">
											<label for="img-desc">Descripción</label>
											<textarea name="desc" id="img-desc" class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label for="img-subcat">Subcategoria</label>
											<select name="subcat" id="img-subcat" class="form-control">
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
							        <form role="form" method="post" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="2" />
										<div class="form-group">
											<label for="vid-name">Nombre</label>
											<input name="name" type="text" class="form-control" id="vid-name" placeholder="Nombre del video">
										</div>
										<div class="form-group">
											<label for="vid-thumb">Thumbnail</label>
											<input name="thumb" type="file" id="vid-thumb" accept="image/*">
											<p class="help-block">Thumbnail del video a publicar.</p>
										</div>
										<div class="form-group">
											<label for="vid-url">URL del video</label>
											<input name="url" type="text" class="form-control" id="vid-url" placeholder="URL del video">
										</div>
										<div class="form-group">
											<label for="vid-desc">Descripción</label>
											<textarea name="desc" id="vid-desc" class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label for="vid-subcat">Subcategoria</label>
											<select name="subcat" id="vid-subcat" class="form-control">
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
							        <form role="form" method="post" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="3" />
										<div class="form-group">
											<label for="file-name">Nombre</label>
											<input name="name" type="text" class="form-control" id="file-name" placeholder="Nombre del archivo">
										</div>
										<div class="form-group">
											<label for="file-thumb">Thumbnail</label>
											<input name="thumb" type="file" id="file-thumb" accept="image/*">
											<p class="help-block">Thumbnail del archivo a publicar.</p>
										</div>
										<div class="form-group">
											<label for="file-file">Archivo</label>
											<input name="file" type="file" id="file-file">
											<p class="help-block">Archivo a publicar.</p>
										</div>
										<div class="form-group">
											<label for="file-desc">Descripción</label>
											<textarea name="desc" id="file-desc" class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label for="file-subcat">Subcategoria</label>
											<select name="subcat" id="file-subcat" class="form-control">
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
							        <form role="form" method="post" enctype="multipart/form-data">
								        <input type="hidden" name="tarch" value="4" />
										<div class="form-group">
											<label for="link-name">Nombre</label>
											<input name="name" type="text" class="form-control" id="link-name" placeholder="Nombre del enlace">
										</div>
										<div class="form-group">
											<label for="link-thumb">Thumbnail</label>
											<input name="thumb" type="file" id="link-thumb" accept="image/*">
											<p class="help-block">Thumbnail del enlace a publicar.</p>
										</div>
										<div class="form-group">
											<label for="link-url">URL del enlace</label>
											<input name="url" type="text" class="form-control" id="link-url" placeholder="URL del enlace">
										</div>
										<div class="form-group">
											<label for="link-desc">Descripción</label>
											<textarea name="desc" id="link-desc" class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label for="link-subcat">Subcategoria</label>
											<select name="subcat" id="link-subcat" class="form-control">
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
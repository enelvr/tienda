@extends('layout.main')
@section('content')
<div class="portlet-body">
<div id="category">
<h1>Listado de categorias</h1>
<button data-target="#add-categoria-modal" data-toggle="modal" @click="showAddCategoriaModal()" class="btn pmd-btn-raised btn-primary" type="button" >
 <span class="glyphicon glyphicon-user"></span> &nbsp;Crear Categoria
 </button>
<table v-cloak>
<thead>
	<th>N°</th>
	<th>Nombre</th>
	<th>Acciones</th>
</thead>
<tbody>
	<tr v-for="(categoria, index) in categorias">
		<td>@{{ index + 1 + (pagination.current_page - 1) * 10 }}.</td>
		<td data-title="descripcion">@{{ categoria.descripcion}}</td>
		<td><button class="edit-modal btn btn-sm btn-danger pmd-btn-raised" data-toggle="tooltip" data-placement="top" title="Delete" @click="deleteCategoria(categoria.id)">
        <span class="glyphicon glyphicon-trash"></span>
        </button></td>
	</tr>
</tbody>
</table>
 @include('modals.add-categoria-modal')
</div>
</div>
@endsection
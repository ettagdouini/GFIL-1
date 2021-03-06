@extends('layouts.enseignant')

@section('content')
<div align="right">
	<a href="{{ route('etudiant.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('etudiant.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le Nom</label>
		<div class="col-md-8">
			<input type="text" name="nom" value="{{ $data->nom }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le prenom</label>
		<div class="col-md-8">
			<input type="text" name="prenom" value="{{ $data->prenom }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer CNE</label>
		<div class="col-md-8">
			<input type="text" name="cne" value="{{ $data->cne }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer le groupe</label>
		<div class="col-md-8">
			<input type="text" name="grp" value="{{ $data->grp }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Entrer la note</label>
		<div class="col-md-8">
			<input type="text" name="note" value="{{ $data->note }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection




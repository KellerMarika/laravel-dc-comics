@extends('layout.slim')

@section('main')
		<div class="container  ">
				<fieldset
						class="form-container mt-5 w-75 m-auto border border-secondary border-2 px-5 py-4 rounded-5"style="background-image: url({{ Vite::asset('resources/img/footer-bg.jpg') }}); background-size: cover">
						<legend class=" pt-5 pb-4 text-uppercase">
								<h1 class="text-primary">Add New Comic:</h1>
						</legend>

						<form action="{{ route('comics.store') }}" method="POST">

								@csrf {{-- codice univoco identificativo del mio form --}}

								<fieldset class="pb-4 border-secondary border-2 border-bottom">
										<div class="row gap-2 ">
												<div class=" mb-3 col-5">

														<label class="form-label text-light ">title</label>
														<input type="text" class=" form-control bg-light" name="title"
																placeholder="add comic's title">
												</div>

												<div class="mb-3 col-4">
														<label class="form-label text-light">series</label>
														<input type="text" class=" form-control bg-light" name="series"
																placeholder="add comic's series">
												</div>

												<div class="mb-3 col ">
														<label class="form-label text-light">type</label>
														<input type="text" class=" form-control bg-light" name="type"
																placeholder="add comic's type">
												</div>
										</div>


										<div class="mb-3 col ">
												<label class="form-label text-light">Description</label>
												<textarea rows="3" class="form-control bg-light" name="description" placeholder="add comic's description"></textarea>
										</div>
										<div class="mb-3 col ">
												<label class="form-label text-light">Url</label>
												<input type="text" class="form-control bg-light" name="thumb" placeholder="add comic's Url">
										</div>
								</fieldset>

								<fieldset class="p-4 border-secondary border-2 border-bottom">
										<div class="row gap-2">

												<div class="mb-3 col">
														<label class="form-label text-light ">artist</label>
														<input type="text" class=" form-control bg-light" name="artists"
																placeholder="add comic's artist">
												</div>

												<div class="mb-3 col">
														<label class="form-label text-light">writers</label>
														<input type="text" class=" form-control bg-light" name="writers"
																placeholder="add comic's writers">
												</div>
										</div>
								</fieldset>


								<fieldset class="p-4 ">
										<div class="row gap-2 align-items-end">

												<div class=" col">
														<label class="form-label text-light ">price</label>
														<input type="text" class=" form-control bg-light" name="price"
																placeholder="add comic's price">
												</div>

												<div class=" col">
														<label class="form-label text-light">on sale from</label>
														<input type="date" class="form-control bg-light" name="sale_date"
																placeholder="add comic's on sale from">
												</div>
												<div class="col-3 d-flex justify-content-end">
														<button class="btn btn-primary text-light fs-bold text-uppercase text-end px-3" type="submit">
																<i class="fa fa-plus pe-1"></i>
																create </button>
												</div>
										</div>

								</fieldset>


						</form>
				</fieldset>


		</div>
@endsection

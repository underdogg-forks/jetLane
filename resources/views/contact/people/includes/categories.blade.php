<div class="col-md-12">
	<div class="row">

		@foreach($selectedCategories as $selectedCategory)
			<label class="col-md-6">
				{!! Form::checkbox('category[' . $selectedCategory['category'] . ']', '1', '1') !!} {{$selectedCategory['category']}}
			</label>
		@endforeach

		@foreach($peopleCategories as $peopleCategory)
			<label class="col-md-6">
				{!! Form::checkbox('category[' . $peopleCategory['category'] . ']', '1') !!} {{$peopleCategory['category']}}
			</label>
		@endforeach

	</div>
</div>

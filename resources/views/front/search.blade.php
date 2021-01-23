@extends('layouts.front.app')
@section('meta')
    <title>Search | Bryan Venancio | Professional Wedding Photographer | Manila Philippines</title>
@endsection
@section('content')
	<section class="contact-area full_pad nav-space pt-0">
        <div class="contact-area-bg container-fluid">
            <div class="container pb-4">
		            
                <div class="row">
                    <div class="col-xl-12">
                    	<div class="sec-title">
			                <h2>Search keyword: <span class="blue">{{ $keyword }}</span></h2>
			                <p>There are {{ $searchResults->count() }} results.</p>
			            </div>
                    </div>
					<div class="col-xl-12 mb-4">
						{{-- <h3>Search keyword: <span class="blue">{{ $keyword }}</span> </h3>

						There are {{ $searchResults->count() }} results. --}}

						@foreach($searchResults->groupByType() as $type => $modelSearchResults)
						   <h5 class="text-uppercase my-3">{{ $type }}</h5>
						   
						   @foreach($modelSearchResults as $searchResult)
						       <ul>
						            <li>
						            	+ <a href="{{ $searchResult->url }}" class="text-dark">{{ $searchResult->title }}</a>
						            </li>
						       </ul>
						   @endforeach
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
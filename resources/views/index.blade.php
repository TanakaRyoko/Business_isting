@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Business Listing</div>

                <div class="card-body">
                    @if(count($listings))
                        <div class="list-group">
                            @foreach($listings as $listing)
                                <div class="list-group-item">
                                    <a href="listings/{{ $listing->id }}">{{ $listing->name }}</a>
                                </div>
                        </div>
                                
                    @endforeach
    
                    @else
                        <p>No lisitings found!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
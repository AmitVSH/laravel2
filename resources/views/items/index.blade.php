@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Items
						<a class="btn btn-primary float_right" href="{{url('items/create')}}">Add new</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    @forelse($items as $item)
                        {{$item->name}} <br>

                    @empty
                        No items added yet!
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layout.main')

@section('title', 'Publisher')

@section('content')
   <div class="row mb-5 g-3">
      @foreach ($publishers as $publisher)
         <a href="{{ route('publisher.show', $publisher->name) }}" class="col-md-4 text-decoration-none">
            <div class="d-flex shadow-sm overflow-hidden px-3 py-4 gap-3 align-items-center">
               <img src="{{ $publisher->image }}" alt="" class="rounded-circle" style="width: 75px; height: 75px;">
               <div class="d-flex flex-column gap-2 text-dark">
                  <span>{{ $publisher->name }}</span>
                  <span>{{ $publisher->email }}</span>
               </div>
            </div>
         </a>
      @endforeach
   </div>
   {{ $publishers->links() }}
@endsection

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp

{{ $hoge}}
    @include('partials.content-page')

  @endwhile
@endsection

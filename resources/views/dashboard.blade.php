@extends('layouts.app_with_modal')

@section('content')


<script>
    @auth
        showModal('{{ Auth::user()->name }}');
    @endauth
</script>
@endsection

@extends('admin.main_part.master')


@section('content')
    <section class="galleries">
        <store-galleries></store-galleries>
        <index-galleries :galleries="{{json_encode($galleries)}}"></index-galleries>
    </section>
@endsection

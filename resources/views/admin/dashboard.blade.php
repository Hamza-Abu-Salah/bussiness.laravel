@extends('admin.layout.master')
@section('title')
Dashboard
@endsection

@section('contentheader')
Dashboard
@endsection

@section('contentheaderlink')
<a href="/"> Dashboard </a>
@endsection

@section('contentheaderactive')
Show
@endsection



@section('content')
<div>
    <img class="img-fluid" src="{{ asset('adminassets/pages/aerial-view-business-data-analysis-graph_53876-13390.webp') }}" alt="">
</div>

@endsection

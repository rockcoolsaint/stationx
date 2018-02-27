@extends('layouts.app')

@section('content')
      @include('analytics.overview.station_header')

      @include('analytics.overview.replenishment')

      @include('analytics.overview.today')

      @include('analytics.overview.yesterday')

      @include('analytics.overview.comparision')

      @include('analytics.overview.bank-overview')
@endsection
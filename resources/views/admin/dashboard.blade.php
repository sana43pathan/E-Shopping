@extends('admin.layout.layout')

@section('content')
<!-- top tiles -->
<div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count green">{{$userCount}}</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
              <span class="count_top"><i class="fa fa-table"></i> Total Categories</span>
              <div class="count">{{$categoryCount}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
              <span class="count_top"><i class="fa fa-table"></i> Total Subcategories</span>
              <div class="count green">{{$subcategoryCount}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-5 tile_stats_count">
              <span class="count_top"><i class="fa fa-product-hunt"></i> Total Products</span>
              <div class="count">{{$productCount}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->
@endsection   
@extends('Admin.Includes.master')

@section('content')

<div class="container-fluid">
           <div class="row">
               <div class="col-lg-3 col-sm-6">
                   <div class="card">
                       <div class="content">
                           <div class="row">
                               <div class="col-xs-5">
                                   <div class="icon-big icon-warning text-center">
                                       <i class="ti-shopping-cart"></i>
                                   </div>
                               </div>
                               <div class="col-xs-7">
                                   <div class="numbers">
                                       <p>Product</p>
                                       105GB
                                   </div>
                               </div>
                           </div>
                           <div class="footer">
                               <hr />
                               <div class="stats">
                                   <i class="ti-shopping-cart"></i> Total Product
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="card">
                       <div class="content">
                           <div class="row">
                               <div class="col-xs-5">
                                   <div class="icon-big icon-success text-center">
                                       <i class="ti-menu-alt"></i>
                                   </div>
                               </div>
                               <div class="col-xs-7">
                                   <div class="numbers">
                                       <p>Category</p>
                                       $1,345
                                   </div>
                               </div>
                           </div>
                           <div class="footer">
                               <hr />
                               <div class="stats">
                                   <i class="ti-menu-alt"></i> Total Category
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                   <div class="card">
                       <div class="content">
                           <div class="row">
                               <div class="col-xs-5">
                                   <div class="icon-big icon-danger text-center">
                                       <i class="ti-text"></i>
                                   </div>
                               </div>
                               <div class="col-xs-7">
                                   <div class="numbers">
                                       <p>Article</p>
                                       23
                                   </div>
                               </div>
                           </div>
                           <div class="footer">
                               <hr />
                               <div class="stats">
                                   <i class="ti-text"></i> Total Article
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">
               <div class="col-md-6">
                   <div class="card">
                       <div class="header">
                           <h4 class="title">Email Statistics</h4>
                           <p class="category">Last Campaign Performance</p>
                       </div>
                       <div class="content">
                           <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                           <div class="footer">
                               <div class="chart-legend">
                                   <i class="fa fa-circle text-info"></i> Open
                                   <i class="fa fa-circle text-danger"></i> Bounce
                                   <i class="fa fa-circle text-warning"></i> Unsubscribe
                               </div>
                               <hr>
                               <div class="stats">
                                   <i class="ti-timer"></i> Campaign sent 2 days ago
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="card ">
                       <div class="header">
                           <h4 class="title">2015 Sales</h4>
                           <p class="category">All products including Taxes</p>
                       </div>
                       <div class="content">
                           <div id="chartActivity" class="ct-chart"></div>

                           <div class="footer">
                               <div class="chart-legend">
                                   <i class="fa fa-circle text-info"></i> Tesla Model S
                                   <i class="fa fa-circle text-warning"></i> BMW 5 Series
                               </div>
                               <hr>
                               <div class="stats">
                                   <i class="ti-check"></i> Data information certified
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>


@stop

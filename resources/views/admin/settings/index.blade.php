@extends('admin.app')

@section('title') 


{{ $pageTitle }} @endSection

@section('content')
         <!--  BEGIN CONTENT AREA  -->
         <div id="content" class="main-content">
            <div class="">
                <div class="">

                    <div class="row">

                        <div id="tabsVertical" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Settings</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area vertical-pill">
                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-3 col-12">
                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link active mb-2" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="true">General</a>
                                              <a class="nav-link mb-2" id="v-pills-logo-tab" data-toggle="pill" href="#v-pills-logo" role="tab" aria-controls="v-pills-logo" aria-selected="false">Company Logo</a>
                                              <a class="nav-link mb-2" id="v-pills-footer-tab" data-toggle="pill" href="#v-pills-footer" role="tab" aria-controls="v-pills-footer" aria-selected="false">Footer &amp; SEO</a>
                                              <a class="nav-link" id="v-pill-social-tab" data-toggle="pill" href="#v-pills-social" role="tab" aria-controls="v-pill-social" aria-selected="false">Social Links</a>
                                              <a class="nav-link" id="v-pills-analytics-tab" data-toggle="pill" href="#v-pills-analytics" role="tab" aria-controls="v-pills-analytics" aria-selected="false">Analytics</a>
                                              <a class="nav-link" id="v-pills-payments-tab" data-toggle="pill" href="#v-pills-payments" role="tab" aria-controls="v-pills-payments" aria-selected="false">Payments</a>


                                            </div>
                                        </div>

                                        <div class="col-sm-9 col-12">
                                            <div class="tab-content" id="v-pills-tabContent">
                                              <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                                                
                                                @include('admin.settings.includes.general')
                                               
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
                                              <h4 class="mb-4">Company Logo </h4>
                                                @include('admin.settings.includes.logo')
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-footer" role="tabpanel" aria-labelledby="v-pills-footer-tab">
                                              <h4 class="mb-4">Footer &amp; SEO</h4>
                                              @include('admin.settings.includes.footer_seo')
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
                                              <h4 class="mb-4">Social Links</h4>
                                              @include('admin.settings.includes.social_links')
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-analytics" role="tabpanel" aria-labelledby="v-pills-analytics-tab">
                                              <h4 class="mb-4">Analytics</h4>
                                              @include('admin.settings.includes.analytics')
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-payments" role="tabpanel" aria-labelledby="v-pills-payments-tab">
                                              <h4 class="mb-4">Payments</h4>
                                              @include('admin.settings.includes.payments')
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                
            </div>
            
        </div>
        <!--  END CONTENT AREA  -->

@endsection
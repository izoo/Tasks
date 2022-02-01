@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
    <div class="row layout-top-spacing">
                
                <div class="col-xl-12 col-lg-12 col-sm-12">
                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-9 col-md-9 col-sm-9 col-9 mb-3">
                                            <h4>{{ $subTitle }}</h4>

                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3 mb-3">
                                           
                                            <a href="{{ route('admin.attributes.create') }}" class="btn bnt-primary pull-right">Add Attribute</a>

                                        </div>
                                    </div>
                                </div>
                   @include('admin.partials.flash')
                    <div class="widget-content widget-content-area br-6">
                        <table id="attributesTable" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Frontend Type</th>
                                    <th>Filterable</th>
                                    <th>Required</th>
                                    <th tyle="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"></i></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attributes as $attribute)
                                <tr>
                                    <td>{{ $attribute->code }}</td>
                                    <td>{{ $attribute->name }}</td>
                                    <td>{{ $attribute->frontend_type }}</td>
                                    <td>
                                        @if($attribute->is_filterable == 1)
                                        <span class="badge badge-success">YES</span>
                                        @else
                                        <span class="badge badge-danger">NO</span>
                                        @endif
                                    </td>
                                    <td>
                                       @if($attribute->is_required == 1)
                                       <span class="badge badge-success">YES</span>
                                       @else
                                           <span class="badge badge-danger">NO</span>
                                       @endif
                                    </td>
                                    
                                    
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark btn-sm">Open</button>
                                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference21">
                                            <a href="{{ route('admin.attributes.edit',$attribute->id) }}" class="btn btn-sm btn-primary">
                                                   <i class="fa fa-edit"></i></a>
                                                <div class="dropdown-divider"></div>
                                                <a href="{{ route('admin.attributes.delete',$attribute->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                            </div>
                                            </div>
                                    </td>
                                </tr>
                             
                          @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('backend/plugins/table/datatable/datatables.js')}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script type="text/javascript" src="{{ asset('backend/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
    <script type="text/javascript" src="{{ asset('backend/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('backend/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script type="text/javascript">
        $('#attributesTable').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
@endpush
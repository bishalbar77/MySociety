{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

                        <div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card card-custom">
									<!--begin::Header-->
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Edit User {{ $user-> name}}
											<span class="d-block text-muted pt-2 font-size-sm"></span></h3>
										</div>
										
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
										<!--begin: Datatable-->
										
										 <form action ="{{route ('admin.users.update' , $user) }}" method ="POST">
                                         @csrf
                                         {{ method_field('PUT')}}
                                         @foreach($roles as $role)
										 <br>
                                         <div class="form-check ">
                                        <input id="checkbox" type="checkbox" name="roles[]" value="{{ $role-> id }}">
                                        <label>{{ $role-> name }}</label>
                                                    </div>
													<br>
                                         @endforeach
										 <br>
                                         <button type="submit" class="btn btn-success">
                                         Update
                                         </button>
										 
										<!--end: Datatable-->
										
									</div>
									<!--end::Body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection

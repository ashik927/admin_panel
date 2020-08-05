
@extends('adminlayout.adminmaster')

@section('title')
<title>Edit Product</title>
@endsection
@section('subtitle')
Edit Product
@endsection
@section('content')
<div class="layout-content">
        <div class="layout-content-body">
        
          <div class="text-center m-b">
            <h3 class="m-b-0">Edit Product List</h3>
            
          </div>
          <div class="row gutter-xs">
            <div class="col-xs-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-actions">
                    <button type="button" class="card-action card-toggler" title="Collapse"></button>
                    <button type="button" class="card-action card-reload" title="Reload"></button>
                    <button type="button" class="card-action card-remove" title="Remove"></button>
                  </div>
                  <strong>Edit Product List</strong>
                </div>
                <div class="card-body">
                  <table id="demo-datatables-5" class="table table-striped table-bordered table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>edit</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>edit</th>
                      </tr>
                    </tfoot>
          
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
@endsection

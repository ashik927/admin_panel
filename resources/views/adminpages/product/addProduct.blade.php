@extends('adminlayout.adminmaster')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="summernote.css" rel="stylesheet">
<script src="summernote.min.js"></script>

<!-- include summernote-ko-KR -->
<script src="lang/summernote-ko-KR.js"></script>
    <script>
      $('#summernote').summernote();
      $(document).ready(function() {
  $('#summernote').summernote({
    lang: 'ko-KR' // default: 'en-US'
  });
});
    </script>
@section('title')
<title>Add Product</title>
@endsection
@section('subtitle')
Add Product
@endsection
@section('content')
<div class="layout-content">
        <div class="layout-content-body">
          <div class="row">
            <div class="col-md-8">
              <div class="demo-form-wrapper">
                <form class="form form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Product Name</label>
                    <div class="col-sm-9">
                      <input id="form-control-1" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Product size</label>
                    <div class="col-sm-9">
                      <input id="form-control-1" class="form-control" type="text">
                    </div>
                  </div>
                 
                  <!-- <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-3">Input with placeholder</label>
                    <div class="col-sm-9">
                      <input id="form-control-3" class="form-control" type="email" placeholder="Email Address">
                    </div>
                  </div> -->
                  
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-6">Select Category</label>
                    <div class="col-sm-9">
                      <select id="form-control-6" class="form-control">
                        <option value="c-plus-plus">Plate</option>
                        <option value="css">Glass</option>
                        <option value="java">Sound box</option>
                        <option value="javascript">Chair</option>
                        <option value="php">Table</option>
                        <option value="python">Spoon</option>
                        <option value="ruby">Jug</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-7">Multiple select</label>
                    <div class="col-sm-9">
                      <select id="form-control-7" class="form-control" multiple="multiple">
                        <option value="c-plus-plus">C++</option>
                        <option value="css">CSS</option>
                        <option value="java">Java</option>
                        <option value="javascript">JavaScript</option>
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                        <option value="ruby">Ruby</option>
                      </select>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-8">Information</label>
                    <div class="col-sm-9">
                      <textarea id="summernote" class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-9">Image File</label>
                    <div class="col-sm-9">
                      <input id="form-control-9" type="file" accept="image/*" multiple="multiple">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Checkboxes and radios</label>
                    <div class="col-sm-9">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="mode" checked="checked"> Put site into maintenance mode
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="message" value="none"> None
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="message" value="all" checked="checked"> All messages
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="message" value="some"> Errors and warnings
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-md-push-3">
                      <button class="btn btn-primary btn-block btn-next" type="button">Add</button>
                    </div>
                  </div>
                </form>
              </div>
             
      </div>
    </div>
  </div>
</div>

@endsection
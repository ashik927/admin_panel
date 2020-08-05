
@extends('adminlayout.adminmaster')
@section('title')
<title>Settings Form</title>
@endsection
@section('subtitle')
Settings Form
@endsection
@section('content')
<div class="layout-content">
        <div class="layout-content-body">
          <div class="row">
            <div class="col-md-8">
              <div class="demo-form-wrapper">
                <form class="form form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Text input</label>
                    <div class="col-sm-9">
                      <input id="form-control-1" class="form-control" type="text">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-3">Input with placeholder</label>
                    <div class="col-sm-9">
                      <input id="form-control-3" class="form-control" type="email" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Predefined value</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" class="form-control" type="url" value="language:JavaScript">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-6">Select</label>
                    <div class="col-sm-9">
                      <select id="form-control-6" class="form-control">
                        <option value="c-plus-plus">C++</option>
                        <option value="css">CSS</option>
                        <option value="java">Java</option>
                        <option value="javascript">JavaScript</option>
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                        <option value="ruby">Ruby</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
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
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-8">Textarea</label>
                    <div class="col-sm-9">
                      <textarea id="form-control-8" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-9">File input</label>
                    <div class="col-sm-9">
                      <input id="form-control-9" type="file" accept="image/*" multiple="multiple">
                      <p class="help-block">
                        <small>Unlimited number of files can be uploaded to this field. Allowed types: png gif jpg jpeg.</small>
                      </p>
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
                </form>
              </div>
             
      </div>
    </div>
  </div>
</div>
@endsection
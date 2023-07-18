<!DOCTYPE html>
<html lang="en">
@include('layouts.includes.links')
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

  @include('layouts.components.header')


  @include('layouts.components.sidebar')

  <div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Product Add Category</h4>
    <h6>Create new product Category</h6>
    </div>
    </div>
    @include('notification')
    <div class="card">
    <div class="card-body">
      <form action="{{route('store.cart')}}" method="post" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="category_name">
            </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
            <label>Category Code</label>
            <input type="text" name="category_code">
            </div>
            </div>
            <div class="col-lg-12">
            <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="category_desc"></textarea>
            </div>
            </div>
            <div class="col-lg-12">
            <div class="form-group">
            <label> Product Image</label>
            <div class="image-upload">
            <input type="file" name="category_img">
            <div class="image-uploads">
            <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
            <h4>Drag and drop a file to upload</h4>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-12">
            <button type="submit" href="javascript:void(0);" class="btn btn-submit me-2" style="background-color: green;color:white;">
              Save</button>
            </div>
          </div>
      </form>
    </div>
    </div>
    
    </div>
    </div>
</div>

@include('layouts.includes.scripts')
</body>
</html>
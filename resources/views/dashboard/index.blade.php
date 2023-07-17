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

  @include('dashboard.master')
</div>

@include('layouts.includes.scripts')
</body>
</html>
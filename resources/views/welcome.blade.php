@extends('base.materialize')

@section('title', 'Custom Clothing materialize')

@section('materialize')
<div class="slider">
  <ul class="slides">
    <li>
      <img src="img/slider/a.png"> <!-- random image -->
      <div class="caption center-align">
        <h3>This is our big Tagline!</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="img/slider/b.png"> <!-- random image -->
      <div class="caption left-align">
        <h3>Left Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
    <li>
      <img src="img/slider/c.png"> <!-- random image -->
      <div class="caption right-align">
        <h3>Right Aligned Caption</h3>
        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
      </div>
    </li>
  </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.slider');
  var instances = M.Slider.init(elems,{
    indicators: true
  });
});
</script>
@endsection

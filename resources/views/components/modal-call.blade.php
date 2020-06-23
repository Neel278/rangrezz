<div class="cube-container ">
  <div class="photo-cube">

    <img class="front" src="" alt="">
    <div class="back photo-desc">
      <div class="headingbox">{{ $cube['heading'] }}</div>
      <div class="para">{{ $cube['para'] }}</div>
      <a href="" class="button" data-toggle="modal" data-target="{{ '#' . $cube['data_target'] }}">know more</a>
    </div>
    <img class="left" src="" alt="">
    <img class="right" src="{{ $cube['image_path'] }}" alt="">

  </div>
</div>

{{-- modal here --}}
<div class="modal fade" id="{{$cube['data_target']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{$cube['image_path']}}" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="gallery.html" role="button">Go to Auction</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
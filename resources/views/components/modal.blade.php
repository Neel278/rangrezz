<div class="cube-container " >
  <div class="photo-cube">

    <img class="front"src="" alt="">
    <div class="back photo-desc">
      <div class="headingbox">Menaka</div>
      <div class="para">Tallenge Menaka and Shakuntala - by Raja Ravi Varma - Large Canvas - Unframed (20 x 30 inches)</div>
      <a href="" class="button" data-toggle="modal" data-target="#exampleModal">know more</a>
    </div>
    <img class="left" src="" alt="">
    <img class="right" src="images/menaka.JPG" alt="">

  </div>
</div>  
{{-- modal here --}}
<div class="modal fade" id="{{$modal1['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <img src="{{$modal1['image_path']}}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="gallery.html" role="button" >Go to Auction</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
    </div>
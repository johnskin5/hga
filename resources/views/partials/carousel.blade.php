<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner img">
      <div class="carousel-item active" data-interval="6000">
        <img src="{{ URL::to('img/ap1.png') }}" class="d-block w-100" alt="PHOTO">
        <div class="carousel-caption d-md-block">
          <h5>HOLYGHOST AMBASSADORS</h5>
          <p>... Soaring Men To Greater Heights.</p>
          <a class="btn btn-primary" href="#" role="button">Learn More</a>
        </div>
      </div>
      <div class="carousel-item" data-interval="4000">
        <img src="{{ URL::to('img/ma1.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5>HOUSE OF WORSHIP</h5>
          <p>WORSHIP - The Heart Beat Of God.</p>
        </div>
      </div>
      <div class="carousel-item" data-interval="4000">
        <img src="{{ URL::to('img/ap2.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block">
          <h5>FRESH FROM HEAVEN</h5>
          <p>The Word Of God - Fresh And Undiluted.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
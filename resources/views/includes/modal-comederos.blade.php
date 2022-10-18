<div class="modal fade" id="comederosModal" tabindex="-1" aria-labelledby="comederosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-transparent">
            <div class="modal-header justify-content-end px-0">
                <a href="#" class="link-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></a>
            </div>  
            <div class="modal-body p-0">          
                <div id="comederosCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @for($i = 1; $i < 6; $i++)
                            <div class="carousel-item @if($i==1) active @endif">
                                <img src="{{ asset('img/comederos/'.$i.'.jpg') }}" class="d-block w-100" alt="Foto">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#comederosCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#comederosCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
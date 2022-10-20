<div class="modal fade" id="bebederosModal" tabindex="-1" aria-labelledby="bebederosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-header border-0 justify-content-end px-0">
                <a href="#" class="link-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></a>
            </div>
            <div class="modal-body p-0">
                <div id="bebederosCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @for($i = 1; $i < 5; $i++)
                            <div class="carousel-item @if($i==1) active @endif">
                                <img src="{{ asset('img/bebederos/'.$i.'.jpg') }}" class="d-block w-100" alt="Foto">
                            </div>
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#bebederosCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#bebederosCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
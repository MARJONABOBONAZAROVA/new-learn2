<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">@lang('words.win2')</span></p>
            <h1 class="mb-4">@lang('words.b1')</h1>
        </div>
        <div class="row pb-3">
            @foreach ($posts as $item)

                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="/images/{{ $item['img'] }}" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">{{ $item['name_'. \App::getLocale()] }}</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $item['owner_'. \App::getLocale()] }}</small>
                            </div>
                            <p>{!! $item['info_'. \App::getLocale()] !!}</p>
                            <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Batafsil</a> -->
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>

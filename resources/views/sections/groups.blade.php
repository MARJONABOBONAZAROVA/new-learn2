<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">@lang('groups.our_groups')r</span></p>
            <h1 class="mb-4">@lang('groups.g1')</h1>
        </div>
        <div class="row">
            @foreach ($groups as $item)
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="/images/{{ $item['img'] }}" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $item['name_'.\App::getLocale()] }}</h4>
                            <p class="card-text">{!! $item['title_'.\App::getLocale()] !!}</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>@lang('groups.g6')</strong></div>
                                <div class="col-6 py-1">{{ $item['age'] }}</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>@lang('groups.g7')</strong></div>
                                <div class="col-6 py-1">{{ $item['seat'] }}</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>@lang('groups.g8')</strong></div>
                                <div class="col-6 py-1">{{ $item['time'] }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>@lang('groups.g9')</strong></div>
                                <div class="col-6 py-1">{{ $item['payment'] }}</div>
                            </div>
                        </div>
                        <a href="tel:+998996111300" class="btn btn-primary px-4 mx-auto mb-4">@lang('groups.g10')</a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-12 col-md-8 col-lg-5 my-4">
            <div>
                <a class="" href="/">
                    <img src="{{asset('/img/logo.png')}}" alt="LOGO" style="padding-left: 200px; padding-bottom: 20px">
                </a>
            </div>

            <div class="card shadow-sm px-1 mx-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

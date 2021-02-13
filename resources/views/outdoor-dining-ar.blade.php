@extends ('layouts.layout-ar')

@section('content')
<main id="primary" class="site-main bg-light">
    <div class="container">
        <div class="spaces"></div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/welcome-ar">الرئيسية</a></li>
            <li class="breadcrumb-item active"><a href="/outdoor-dining-ar">أطقم طعام خارجية</a></li>
            </ol>
        </nav>
    </div>
    <div class="container bg-light header-title">
    أطقم طعام خارجية
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="images/pic/item27.png"/>
                        <div class="card-body">
                            <a href="#"><p class="card-text text-center font-weight-bold text-uppercase font-16"></p></a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="images/pic/item19.png"/>
                        <div class="card-body">
                            <a href="#"><p class="card-text text-center font-weight-bold text-uppercase font-16"></p></a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="images/pic/item19.png"/>
                        <div class="card-body">
                            <a href="#"><p class="card-text text-center font-weight-bold text-uppercase font-16"></p></a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group"></div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</main><!-- #main -->

@endsection
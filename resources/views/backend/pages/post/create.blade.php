        @extends('backend.layout.template')


        @section('body')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pageHeading mb-3">
                            <h2>Post Article</h2>
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Article</li>
                                </ol>
                            </nav>
                        </div>
                    </div>


                    <div class="col-lg-12 mb-5">
                        <div class="card h-100 border-0 mycard addCard shadow-sm overflow-hidden">
                            <div class="card-body p-4 d-flex align-items-center justify-content-between">
                                <h5 class="card-title">Add New Article</h5>
                                <a href="#" class="btn cta-btn-lg btn-primary" id="addArticle">Add Now</a>
                            </div>
                            <div class="addArticleWizard p-4">
                                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <nav>
                                        <div class="nav nav-pills justify-content-center" id="nav-tab" role="tablist">
                                            <input type="hidden" name="Create_Article_Straight" value="1">

                                            <button class="nav-link mycard shadow-sm" id="nav-home-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-home" type="button" role="tab"
                                                aria-controls="nav-home" aria-selected="true">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"
                                                    class="m-0 p-0">

                                                    <img src="{{ asset('Backend/img/article-icon-1.png') }}" alt=""
                                                        width="50">
                                                    Create Article Straight
                                                </a>

                                            </button>
                                            <button class="nav-link mycard shadow-sm" id="nav-profile-tab"
                                                data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                                                role="tab" aria-controls="nav-profile" aria-selected="false">
                                                <img src="{{ asset('Backend/img/article-icon-2.png') }}" alt=""
                                                    width="50">
                                                Create Article Via Wizard
                                            </button>
                                        </div>
                                    </nav>
                                </form>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab" tabindex="0">

                                    </div>
                                    <div class="tab-pane fade p-4 position-relative" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab" tabindex="0">

                                        <div class="wizard-newdropdowns">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalw-1">
                                                            <div class="wiz-icon">
                                                                <img src="{{ asset('Backend/img/wiz-icon-1.png') }}"
                                                                    alt="">
                                                            </div>
                                                            Non-Sport and Game
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalw-1" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header border-0">
                                                                        <h5 class="modal-title fs-5" id="exampleModalLabel">
                                                                            Non-Sport and Game</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row g-3">
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src=" {{ asset('Backend/img/news-icon.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop21">News
                                                                                            Template 1</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src="{{ asset('Backend/img/news-icon.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop22">News
                                                                                            Template 2</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src="{{ asset('Backend/img/news-icon.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop23">News
                                                                                            Template 3</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src="{{ asset('Backend/img/news-icon.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop24">News
                                                                                            Template 4</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalw-2">
                                                            <div class="wiz-icon">
                                                                <img src=" {{ asset('Backend/img/wiz-icon-2.png') }}"
                                                                    alt="">
                                                            </div>
                                                            Sport & Game
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalw-2" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header border-0">
                                                                        <h5 class="modal-title fs-5"
                                                                            id="exampleModalLabel">Sport & Game</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row g-3">
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src=" {{ asset('Backend/img/news-icon-2.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop25">Sport
                                                                                            & Game News Template 1</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src="{{ asset('Backend/img/news-icon-2.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop26">Sport
                                                                                            & Game News Template 2</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src="{{ asset('Backend/img/news-icon-2.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop27">Sport
                                                                                            & Game News Template 3</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src="{{ asset('Backend/img/news-icon-2.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop28">Sport
                                                                                            & Game News Template 4</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">


                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalw-3">
                                                            <div class="wiz-icon">
                                                                <img src="{{ asset('Backend/img/wiz-icon-3.png') }}"
                                                                    alt="">
                                                            </div>
                                                            Product Review
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalw-3" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header border-0">
                                                                        <h5 class="modal-title fs-5"
                                                                            id="exampleModalLabel">Product Review</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row g-3">
                                                                            <div class="col-12">
                                                                                <div
                                                                                    class="card text-center mycard shadow-sm h-100 p-4">
                                                                                    <div class="card-body p-0">
                                                                                        <img src="{{ asset('Backend/img/news-icon-2.png') }}"
                                                                                            alt="" width="50">
                                                                                    </div>
                                                                                    <div
                                                                                        class="card-footer border-0 bg-transparent p-0">
                                                                                        <a href=""
                                                                                            class="stretched-link"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#staticBackdrop29">Product
                                                                                            Review News Template</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="row g-3 g-lg-4">
                            @foreach ($posts as $post)
                                <div class="col-xxl-4 col-xl-6 col-md-6">
                                    <div class="card border-0 mycard overflow-hidden articleCard shadow-sm h-100">
                                        <div class="row g-2 h-100">
                                            <div class="col-xl-4">

                                                <img src="{{ asset('Backend/img/post/' . $post->image) }}"
                                                    width="100">
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="card-body p-3">
                                                    <div
                                                        class="articleDates d-flex align-items-center justify-content-between">
                                                        <span>07-08-2023</span>
                                                        <div class="articleRating d-flex">
                                                            <div class="starR"><img
                                                                    src=" {{ asset('Backend/img/star.png') }}"
                                                                    alt=""></div>
                                                            <div class="starR"><img
                                                                    src="{{ asset('Backend/img/star.png') }}"
                                                                    alt=""></div>
                                                            <div class="starR"><img
                                                                    src="{{ asset('Backend/img/star.png') }}"
                                                                    alt=""></div>
                                                            <div class="starR"><img
                                                                    src="{{ asset('Backend/img/star.png') }}"
                                                                    alt=""></div>
                                                            <div class="starR"><img
                                                                    src="{{ asset('Backend/img/star.png') }}"
                                                                    alt=""></div>
                                                        </div>
                                                    </div>
                                                    <a href="article-details.html"
                                                        class="pageLink">{{ $post->article_title }}</a>
                                                    {{ $post->aricale_description }}</a>
                                                    <div class="articleAnalysis position-relative">
                                                        <div class="showMore_btn">

                                                        </div>
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href=""
                                                                    class="d-flex align-items-center position-relative">
                                                                    <span>
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            id="Layer_1" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="14"
                                                                            height="14">
                                                                            <path
                                                                                d="M21,6h-6c-.553,0-1,.447-1,1s.447,1,1,1h5.586l-6.562,6.562c-.564,.564-1.482,.564-2.047,0l-2.539-2.539c-1.344-1.344-3.531-1.344-4.875,0L.293,16.293c-.391,.391-.391,1.023,0,1.414,.195,.195,.451,.293,.707,.293s.512-.098,.707-.293l4.27-4.27c.547-.547,1.5-.547,2.047,0l2.539,2.539c1.344,1.344,3.531,1.344,4.875,0l6.563-6.562v5.586c0,.553,.447,1,1,1s1-.447,1-1v-6c0-1.654-1.346-3-3-3Z"
                                                                                fill="#607d8b" />
                                                                        </svg>
                                                                    </span>
                                                                    7
                                                                    <div class="cardTooltip">
                                                                        Analysis
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=""
                                                                    class="d-flex align-items-center position-relative">
                                                                    <span style="background: #ffe9eb;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            id="Outline" viewBox="0 0 24 24"
                                                                            width="14" height="14">
                                                                            <path
                                                                                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"
                                                                                fill="#dc3545" />
                                                                            <path
                                                                                d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z"
                                                                                fill="#dc3545" />
                                                                            <rect x="11" y="17" width="2"
                                                                                height="2" rx="1" />
                                                                        </svg>
                                                                    </span>
                                                                    2
                                                                    <div class="cardTooltip">
                                                                        Error
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="article-comment.html"
                                                                    class="d-flex align-items-center position-relative">
                                                                    <span style="background: #ebf9ea;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            id="Layer_1" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="14"
                                                                            height="14">
                                                                            <path
                                                                                d="m13.5,10.5c0,.828-.672,1.5-1.5,1.5s-1.5-.672-1.5-1.5.672-1.5,1.5-1.5,1.5.672,1.5,1.5Zm3.5-1.5c-.828,0-1.5.672-1.5,1.5s.672,1.5,1.5,1.5,1.5-.672,1.5-1.5-.672-1.5-1.5-1.5Zm-10,0c-.828,0-1.5.672-1.5,1.5s.672,1.5,1.5,1.5,1.5-.672,1.5-1.5-.672-1.5-1.5-1.5Zm17-5v12c0,2.206-1.794,4-4,4h-2.852l-3.848,3.18c-.361.322-.824.484-1.292.484-.476,0-.955-.168-1.337-.507l-3.749-3.157h-2.923c-2.206,0-4-1.794-4-4V4C0,1.794,1.794,0,4,0h16c2.206,0,4,1.794,4,4Zm-2,0c0-1.103-.897-2-2-2H4c-1.103,0-2,.897-2,2v12c0,1.103.897,2,2,2h3.288c.235,0,.464.083.645.235l4.048,3.41,4.171-3.416c.179-.148.404-.229.637-.229h3.212c1.103,0,2-.897,2-2V4Z"
                                                                                fill="#34c431" />
                                                                        </svg>
                                                                    </span>
                                                                    10
                                                                    <div class="cardTooltip">
                                                                        Comment
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled showAll">
                                                            <li>
                                                                <a href=""
                                                                    class="d-flex align-items-center position-relative">
                                                                    <span style="background: #ebf9ea;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            id="Layer_1" data-name="Layer 1"
                                                                            viewBox="0 0 24 24" width="14"
                                                                            height="14">
                                                                            <path
                                                                                d="M13,24H11.431a1,1,0,0,1-.957-1.291A11.2,11.2,0,0,0,11,20a2,2,0,0,0-4,0,11.2,11.2,0,0,0,.526,2.709A1,1,0,0,1,6.569,24H5a5.006,5.006,0,0,1-5-5V11A5.006,5.006,0,0,1,5,6h.272A9.929,9.929,0,0,1,5,4a4,4,0,0,1,8,0,9.929,9.929,0,0,1-.272,2H13a5.006,5.006,0,0,1,5,4.773,10.01,10.01,0,0,1,2-.273,4,4,0,0,1,0,8,10.02,10.02,0,0,1-2-.272V19A5.006,5.006,0,0,1,13,24Zm-.272-2H13a3,3,0,0,0,3-3V16.931a1,1,0,0,1,1.291-.957A11.224,11.224,0,0,0,20,16.5a2,2,0,0,0,0-4,11.224,11.224,0,0,0-2.709.526A1,1,0,0,1,16,12.069V11a3,3,0,0,0-3-3H11.431a1,1,0,0,1-.957-1.291A11.2,11.2,0,0,0,11,4,2,2,0,0,0,7,4a11.2,11.2,0,0,0,.526,2.709A1,1,0,0,1,6.569,8H5a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3h.272A9.929,9.929,0,0,1,5,20a4,4,0,0,1,8,0A9.929,9.929,0,0,1,12.728,22Z"
                                                                                fill="#34c431" />
                                                                        </svg>
                                                                    </span>
                                                                    0
                                                                    <div class="cardTooltip">
                                                                        Compensator
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=""
                                                                    class="d-flex align-items-center position-relative">
                                                                    <span style="background: #f2f3ff;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            id="Outline" viewBox="0 0 24 24"
                                                                            width="14" height="14">
                                                                            <path
                                                                                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"
                                                                                fill="#717ff1" />
                                                                            <path
                                                                                d="M12,5a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Z"
                                                                                fill="#717ff1" />
                                                                            <rect x="11" y="17" width="2"
                                                                                height="2" rx="1" />
                                                                        </svg>
                                                                    </span>
                                                                    5
                                                                    <div class="cardTooltip">
                                                                        Problem
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=""
                                                                    class="d-flex align-items-center position-relative">
                                                                    <span style="background: #e7f7ff;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            id="Outline" viewBox="0 0 24 24"
                                                                            width="14" height="14">
                                                                            <path
                                                                                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,22A10,10,0,1,1,22,12,10.011,10.011,0,0,1,12,22Z"
                                                                                fill="#607d8b" />
                                                                            <path
                                                                                d="M12.717,5.063A4,4,0,0,0,8,9a1,1,0,0,0,2,0,2,2,0,0,1,2.371-1.967,2.024,2.024,0,0,1,1.6,1.595,2,2,0,0,1-1,2.125A3.954,3.954,0,0,0,11,14.257V15a1,1,0,0,0,2,0v-.743a1.982,1.982,0,0,1,.93-1.752,4,4,0,0,0-1.213-7.442Z"
                                                                                fill="#607d8b" />
                                                                            <rect x="11" y="17" width="2"
                                                                                height="2" rx="1" />
                                                                        </svg>
                                                                    </span>
                                                                    8
                                                                    <div class="cardTooltip">
                                                                        Question
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-transparent p-3">

                                                    <!-- Add Analysis button -->


                                                    <a href="#" class="btn btn-danger" role="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-delete-{{ $post->id }}">
                                                        Add Analysis
                                                    </a>






                                                    <a href="#"
                                                        class="btn cta-btn-md btn-primary card-btn shadow-sm"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Add
                                                        Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal for post content showing-->
                                <div class="modal fade" id="modal-delete-{{ $post->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header align-items-start p-4">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="pop-icon d-flex align-items-center me-3">
                                                            <img src="{{ asset('Backend/img/analysis-popup-icon.svg') }}"
                                                                alt class="m-auto" />
                                                        </div>
                                                        <div class="modal-title">
                                                            <h3>Article Under Analysis</h3>
                                                            <span>Admin</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        Please provide your valuable analysis for this
                                                        article.
                                                    </p>
                                                </div>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                {{-- <h5 class="modal-title">{{ $post->article_title }}</h5> --}}

                                                <div class="editedData p-3 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <img src="{{ asset('Backend/img/image.jpg') }} "
                                                                alt="" class="w-100">
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="editedData__content">

                                                                <h5>{{ $post->article_title }}</h5>{{ $post->id }}
                                                                <!-- <h6>Here I will use sub heading</h6> -->
                                                                <p>
                                                                    {{ $post->aricale_description }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="errorFound errorSuccess text-end">
                                                    <span>3</span>
                                                </div>

                                                <div>
                                                    <ul class="nav nav-tabs d-flex justify-content-between myTabs mb-4"
                                                        id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="home-tab"
                                                                data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                                                                type="button" role="tab"
                                                                aria-controls="home-tab-pane" aria-selected="true">
                                                                Analysis
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="profile-tab"
                                                                data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                                                                type="button" role="tab"
                                                                aria-controls="profile-tab-pane" aria-selected="false">
                                                                Errors
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="contact-tab"
                                                                data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                                                                type="button" role="tab"
                                                                aria-controls="contact-tab-pane" aria-selected="false">
                                                                Compensators
                                                            </button>
                                                        </li>

                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="contact-tab1"
                                                                data-bs-toggle="tab" data-bs-target="#contact-tab-pane1"
                                                                type="button" role="tab"
                                                                aria-controls="contact-tab-pane1" aria-selected="false">
                                                                Questions
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="contact-tab2"
                                                                data-bs-toggle="tab" data-bs-target="#contact-tab-pane2"
                                                                type="button" role="tab"
                                                                aria-controls="contact-tab-pane2" aria-selected="false">
                                                                Answers
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="contact-tab3"
                                                                data-bs-toggle="tab" data-bs-target="#contact-tab-pane3"
                                                                type="button" role="tab"
                                                                aria-controls="contact-tab-pane3" aria-selected="false">
                                                                Problems
                                                            </button>
                                                        </li>
                                                    </ul>

                                                    {{-- analysis tab modal --}}
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home-tab-pane"
                                                            role="tabpanel" aria-labelledby="home-tab" tabindex="0">

{{-- to show the analysis data
    @if ($analyses->isEmpty())
    <p>No analyses found.</p>
@else
    <!-- Your table code here -->
@endif

     --}}
     <div class="myDataTable table-responsive">
    <table class="table" style="width: 100%">
        <thead>
            <tr>
                <th>Analysis Text</th>
            </tr>
        </thead>
        <tbody>
             @foreach($analyses->where('post_id', $post->id) as $analysis)
            <tr><td>{{ $analysis->content }}</td></tr>
        @endforeach
        </tbody>
    </table>
</div>


                                                            {{-- analysis modal --}}
                                                           <form action="{{ route('analysis.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-12">
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="form-field">
                <!-- Replace the div with textarea -->
                <textarea class="form-control" name="analysis_description" rows="3"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="mt-4">
                <div class="form-field text-end">
                    <button type="submit" class="btn btn-lg btn-success">Add Analysis</button>
                    <button type="button" class="btn btn-lg btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>


                                                        </div>
                                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                            aria-labelledby="profile-tab" tabindex="0">

                                                            <div class="myDataTable table-responsive">

                                                                {{-- error showing table --}}

                                                                <table class="table" style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Error #</th>
                                                                            <th>Actual Error</th>
                                                                            <th>Entity Error Point To</th>
                                                                            <th>Error Description</th>
                                                                            <th>Error Date</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($identifyError->where('post_id', $post->id) as $error)
<tr>
    <td>{{ $error->from_comm_app }}</td>
    <td>{{ $error->actual_error }}</td>
    <td>{{ $error->entity_error_point_to }}</td>
    <td>{{ $error->error_description }}</td>
    <td>{{ $error->created_at }}</td>
    <td>
        <div class="addRemove-opt">
            <a href="#" id="add-opt">
                <img src="{{ asset('Backend/img/plus-icon.svg') }}" alt="" width="24">
            </a>
             <form action="{{ route('error.destroy', $error->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="remove-opt" style="border: none; background: none; cursor: pointer;">
                        <img src="{{ asset('Backend/img/minus-icon.svg') }}" alt="" width="24">
                    </button>
                </form>
        </div>
    </td>
</tr>
@endforeach

@if($identifyError->where('post_id', $post->id)->isEmpty())
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <div class="addRemove-opt">
            <a href="#" id="add-opt">
                <img src="{{ asset('Backend/img/plus-icon.svg') }}" alt="" width="24">
            </a>
            {{-- <a href="" id="remove-opt">
                <img src="{{ asset('Backend/img/minus-icon.svg') }}" alt="" width="24">
            </a> --}}
        </div>
    </td>
</tr>
@endif

                                                                    </tbody>
                                                                </table>

                                                            </div>

                                                        </div>
                                                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                                            aria-labelledby="contact-tab" tabindex="0">
                                                            <div class="myDataTable table-responsive">
                                                                <table class="table" style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Compensator #</th>
                                                                            <th>Actual Compensator</th>
                                                                            <th>Compensator Date</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td>
                                                                                <div class="addRemove-opt">
                                                                                    <a href="#" id="add-opt-comp">
                                                                                        <img src="{{ asset('Backend/img/plus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                    <a href=""
                                                                                        id="remove-opt-comp">
                                                                                        <img src=" {{ asset('Backend/img/minus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="contact-tab-pane1" role="tabpanel"
                                                            aria-labelledby="contact-tab1" tabindex="0">
                                                            <div class="myDataTable table-responsive">
                                                                <table class="table" style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Question #</th>
                                                                            <th>Actual Question</th>
                                                                            <th>Entity Question Point To</th>
                                                                            <th>Question Date</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>First Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td>
                                                                                <div class="addRemove-opt">
                                                                                    <a href="#" id="add-opt-ques">
                                                                                        <img src="{{ asset('Backend/img/plus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                    <a href=""
                                                                                        id="remove-opt-comp">
                                                                                        <img src="{{ asset('Backend/img/minus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Second Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>Third Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="contact-tab-pane2" role="tabpanel"
                                                            aria-labelledby="contact-tab2" tabindex="0">
                                                            <div class="myDataTable table-responsive">
                                                                <table class="table" style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Answer #</th>
                                                                            <th>Actual Answer</th>
                                                                            <th>Information Answer Point To</th>
                                                                            <th>Entity Question Point To</th>
                                                                            <th>Answer Date</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>First Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td>
                                                                                <div class="addRemove-opt">
                                                                                    <a href="#" id="add-opt-ans">
                                                                                        <img src="{{ asset('Backend/img/plus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                    <a href="" id="remove-opt-ans">
                                                                                        <img src="{{ asset('Backend/img/minus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>First Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>First Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>25 Ma y, 2023</td>
                                                                            <td>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="contact-tab-pane3" role="tabpanel"
                                                            aria-labelledby="contact-tab3" tabindex="0">
                                                            <div class="myDataTable table-responsive">
                                                                <table class="table" style="width: 100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Problem #</th>
                                                                            <th>Actual Problem</th>
                                                                            <th>Problem Name</th>
                                                                            <th>From Actual Error</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>First Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>
                                                                                <div class="addRemove-opt">
                                                                                    <a href="#" id="add-opt-prob">
                                                                                        <img src="{{ asset('Backend/img/plus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                    <a href=""
                                                                                        id="remove-opt-prob">
                                                                                        <img src="{{ asset('Backend/img/minus-icon.svg') }}"
                                                                                            alt="" width="24">
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>First Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>First Question</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>Lorem Ispsum aadsd</td>
                                                                            <td>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>



                                    <!-- Identify Error Modal -->

                                    <div class="upModal fade" id="upModal">
                                        <div class="modal d-block">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header align-items-start p-4">
                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="pop-icon d-flex align-items-center me-3">
                                                                    <img src="{{ asset('Backend/img/error-popup-icon.svg') }}"
                                                                        alt class="m-auto" />
                                                                </div>
                                                                <div class="modal-title">
                                                                    <h3>Identify an Error</h3>
                                                                    <span>Thursday May 25, 2023 10:10 AM</span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Please fill the following details to identify a new error.
                                                            </p>
                                                        </div>

                                                        <button type="button" class="btn-close"
                                                            id="upModal-close"></button>
                                                    </div>

                                                    <div class="modal-body p-4">
                                                        <form action="{{ route('error.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-12 align-items-center d-flex mb-3">
            <div class="form-field w-100 m-0">
                <input type="text" name="actual_error" placeholder="Actual Error" class="form-control" required>
            </div>
            <div class="text-end align-items-center d-flex justify-content-end ms-3">
                <div class="myTooltip position-relative">
                    <img src="{{ asset('Backend/img/info-icon.svg') }}" alt="" width="26">
                    <span>Tooltip content will be here.</span>
                </div>
            </div>
        </div>

        <div class="col-md-12 align-items-center d-flex mb-3">
            <div class="form-field w-100 m-0">
                <input type="text" name="from_comm_app" placeholder="From Actual Comm/App" class="form-control" required>
            </div>
            <div class="text-end align-items-center d-flex justify-content-end ms-3">
                <div class="myTooltip position-relative">
                    <img src="{{ asset('Backend/img/info-icon.svg') }}" alt="" width="26">
                    <span>Tooltip content will be here.</span>
                </div>
            </div>
        </div>

        <div class="col-md-12 align-items-center d-flex mb-3">
            <div class="form-field w-100 m-0">
                <input type="text" name="entity_error_point_to" placeholder="Entity Error Point To" class="form-control" required>
            </div>
            <div class="text-end align-items-center d-flex justify-content-end ms-3">
                <div class="myTooltip position-relative">
                    <img src="{{ asset('Backend/img/info-icon.svg') }}" alt="" width="26">
                    <span>Tooltip content will be here.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="text-ed-outer p-3 mt-4">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <h6>Error Description</h6>
                <div class="form-group">
                    <label for="error_description">Error Description</label>
                    <textarea class="form-control" id="error_description" name="error_description" rows="3" required></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="mt-4">
                <div class="form-field text-end">
                    <input type="submit" value="Submit" class="btn btn-lg btn-success">
                    <input type="button" value="Cancel" class="btn btn-lg btn-danger">
                </div>
            </div>
        </div>
    </div>
</form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Identify Error Modal -->


                                    <!-- Compensator Modal -->

                                    <div class="upModal fade" id="upModal2">
                                        <div class="modal d-block">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header align-items-start p-4">
                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="pop-icon d-flex align-items-center me-3">
                                                                    <img src=" {{ asset('Backend/img/comp-popup-icon.svg') }}"
                                                                        alt class="m-auto" width="40" />
                                                                </div>
                                                                <div class="modal-title">
                                                                    <h3>Identify Compensator</h3>
                                                                    <span>Thursday May 25, 2023 10:10 AM</span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Please fill the following details to identify Compensator.
                                                            </p>
                                                        </div>

                                                        <button type="button" class="btn-close"
                                                            id="upModal2-close"></button>
                                                    </div>

                                                    <div class="modal-body p-4">
                                                        <form action="">
                                                            <div class="row">
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id=""
                                                                            placeholder="Actual Compensator"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src=" {{ asset('Backend/img/info-icon.svg') }}"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id=""
                                                                            placeholder="Actual Error to Replace"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src="{{ asset('Backend/img/info-icon.svg') }}"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id=""
                                                                            placeholder="In Actual App/Comm"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src="{{ asset('Backend/img/info-icon.svg') }}"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-ed-outer p-3 mt-4">
                                                                        <h6>Compensator Description</h6>
                                                                        <div id="editor3"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mt-4">
                                                                        <div class="form-field text-end">
                                                                            <input type="submit" name=""
                                                                                id="" value="Submit"
                                                                                class="btn btn-lg btn-success">
                                                                            <input type="submit" name=""
                                                                                id="" value="Cancel"
                                                                                class="btn btn-lg btn-danger">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Compensator Modal -->

                                    <!-- Question Modal -->

                                    <div class="upModal fade" id="upModal3">
                                        <div class="modal d-block">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header align-items-start p-4">
                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="pop-icon d-flex align-items-center me-3">
                                                                    <img src=" {{ asset('Backend/img/ques-popup-icon.svg') }}"
                                                                        alt class="m-auto" width="40" />
                                                                </div>
                                                                <div class="modal-title">
                                                                    <h3>Add New Question</h3>
                                                                    <span>Thursday May 25, 2023 10:10 AM</span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Please fill the following details to add a new question.
                                                            </p>
                                                        </div>

                                                        <button type="button" class="btn-close"
                                                            id="upModal3-close"></button>
                                                    </div>

                                                    <div class="modal-body p-4">
                                                        <form action="">
                                                            <div class="row">
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id=""
                                                                            placeholder="Entity Question point to"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src=" {{ asset('Backend/img/info-icon.svg') }}"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-ed-outer p-3 mt-4">
                                                                        <h6>Actual Question </h6>
                                                                        <div id="editor4"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mt-4">
                                                                        <div class="form-field text-end">
                                                                            <input type="submit" name=""
                                                                                id="" value="Submit"
                                                                                class="btn btn-lg btn-success">
                                                                            <input type="submit" name=""
                                                                                id="" value="Cancel"
                                                                                class="btn btn-lg btn-danger">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Question Modal -->

                                    <!-- Answer Modal -->

                                    <div class="upModal fade" id="upModal4">
                                        <div class="modal d-block">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header align-items-start p-4">
                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="pop-icon d-flex align-items-center me-3">
                                                                    <img src="assets/img/ans-popup-icon.svg" alt
                                                                        class="m-auto" width="40" />
                                                                </div>
                                                                <div class="modal-title">
                                                                    <h3>Answer a Question</h3>
                                                                    <span>Thursday May 25, 2023 10:10 AM</span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Please fill the following details to answer a question.
                                                            </p>
                                                        </div>

                                                        <button type="button" class="btn-close"
                                                            id="upModal4-close"></button>
                                                    </div>

                                                    <div class="modal-body p-4">
                                                        <form action="">
                                                            <div class="row">
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">

                                                                        <select name="" id=""
                                                                            class="form-select">
                                                                            <option value="">Select Actual Question
                                                                            </option>
                                                                            <option value="">Question 1</option>
                                                                            <option value="">Question 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id=""
                                                                            placeholder="Entity Question point to"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src="assets/img/info-icon.svg"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id=""
                                                                            placeholder="Information Answer Point To"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src="assets/img/info-icon.svg"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-ed-outer p-3 mt-4">
                                                                        <h6>Actual Answer </h6>
                                                                        <div id="editor5"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mt-4">
                                                                        <div class="form-field text-end">
                                                                            <input type="submit" name=""
                                                                                id="" value="Submit"
                                                                                class="btn btn-lg btn-success">
                                                                            <input type="submit" name=""
                                                                                id="" value="Cancel"
                                                                                class="btn btn-lg btn-danger">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Answer Modal -->

                                    <!-- Problem Modal -->

                                    <div class="upModal fade" id="upModal5">
                                        <div class="modal d-block">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header align-items-start p-4">
                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="pop-icon d-flex align-items-center me-3">
                                                                    <img src="assets/img/prob-popup-icon.svg" alt
                                                                        class="m-auto" width="40" />
                                                                </div>
                                                                <div class="modal-title">
                                                                    <h3>Identify a Problem</h3>
                                                                    <span>Thursday May 25, 2023 10:10 AM</span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Please fill the following details to identify a problem.
                                                            </p>
                                                        </div>

                                                        <button type="button" class="btn-close"
                                                            id="upModal5-close"></button>
                                                    </div>

                                                    <div class="modal-body p-4">
                                                        <form action="">
                                                            <div class="row">
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id="" placeholder="Actual Problem"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src="assets/img/info-icon.svg"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">
                                                                        <input type="text" name=""
                                                                            id="" placeholder="Problem Name"
                                                                            class="form-control" required />
                                                                    </div>
                                                                    <div
                                                                        class="text-end align-items-center d-flex justify-content-end ms-3">
                                                                        <div class="myTooltip position-relative">
                                                                            <img src="assets/img/info-icon.svg"
                                                                                alt="" width="26">
                                                                            <span>Tooltip content will be here.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 align-items-center d-flex mb-3">
                                                                    <div class="form-field w-100 m-0">

                                                                        <select name="" id=""
                                                                            class="form-select">
                                                                            <option value="">Select Actual Error
                                                                            </option>
                                                                            <option value="">Error 1</option>
                                                                            <option value="">Error 2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="text-ed-outer p-3 mt-4">
                                                                        <h6>Problem Description</h6>
                                                                        <div id="editor6"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mt-4">
                                                                        <div class="form-field text-end">
                                                                            <input type="submit" name=""
                                                                                id="" value="Submit"
                                                                                class="btn btn-lg btn-success">
                                                                            <input type="submit" name=""
                                                                                id="" value="Cancel"
                                                                                class="btn btn-lg btn-danger">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Problem Modal -->

                                </div>
                            @endforeach


                        </div>
                    </div>








                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header align-items-start p-4">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="pop-icon d-flex align-items-center me-3">
                                                <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                            </div>
                                            <div class="modal-title">
                                                <h3>Article Comment</h3>
                                                <span>Admin</span>
                                            </div>
                                        </div>
                                        <p>
                                            Please provide your valuable comment for this
                                            article.
                                        </p>
                                    </div>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">

                                    <div class="editedData p-3 mb-4">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="assets/img/image.jpg" alt="" class="w-100">
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="editedData__content">
                                                    <h5>My first data analysis in this portal</h5>
                                                    <!-- <h6>Here I will use sub heading</h6> -->
                                                    <p>
                                                        Lorem ipsum dolor sit amet. Cum illum nesciunt et eveniet
                                                        dolores vel unde galisum aut possimus neque At ratione
                                                        debitis sed illo sapiente est enim nemo. A harum eius non
                                                        praesentium quae vel beatae ducimus ut minima incidunt sit
                                                        nulla debitis non ipsam rerum et dolorem voluptatem. Nam
                                                        dolores voluptas aut saepe voluptate sed error sint non
                                                        suscipit magni ea perferendis eligendi est galisum incidunt
                                                        et fugiat dolor!
                                                        <br><br>
                                                        Aut voluptatibus suscipit ad blanditiis architecto vel
                                                        dolores eveniet in debitis deleniti est velit aspernatur quo
                                                        officia consequatur. Ut voluptatem sapiente sit odit debitis
                                                        non voluptatum corrupti et minus ipsa et nostrum galisum.
                                                        Nam amet delectus sit culpa ipsam eos quasi eligendi sed
                                                        molestiae recusandae ut veniam voluptate. Vel voluptas ullam
                                                        et doloribus sint et perspiciatis possimus qui officiis
                                                        omnis est illum ipsum et voluptatibus quidem!

                                                        <br><br>
                                                        Lorem ipsum dolor sit amet. Cum illum nesciunt et eveniet
                                                        dolores vel unde galisum aut possimus neque At ratione
                                                        debitis sed illo sapiente est enim nemo. A harum eius non
                                                        praesentium quae vel beatae ducimus ut minima incidunt sit
                                                        nulla debitis non ipsam rerum et dolorem voluptatem. Nam
                                                        dolores voluptas aut saepe voluptate sed error sint non
                                                        suscipit magni ea perferendis eligendi est galisum incidunt
                                                        et fugiat dolor!
                                                        <br><br>
                                                        Aut voluptatibus suscipit ad blanditiis architecto vel
                                                        dolores eveniet in debitis deleniti est velit aspernatur quo
                                                        officia consequatur. Ut voluptatem sapiente sit odit debitis
                                                        non voluptatum corrupti et minus ipsa et nostrum galisum.
                                                        Nam amet delectus sit culpa ipsam eos quasi eligendi sed
                                                        molestiae recusandae ut veniam voluptate. Vel voluptas ullam
                                                        et doloribus sint et perspiciatis possimus qui officiis
                                                        omnis est illum ipsum et voluptatibus quidem!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div>
                                        <ul class="nav nav-tabs d-flex justify-content-between myTabs mb-4" id="myTab"
                                            role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                                    aria-controls="home-tab-pane" aria-selected="true">
                                                    Comment
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="text-ed-outer p-3 mt-2">
                                                                <h6>Write your Comment</h6>
                                                                <div id="editor-comment"></div>
                                                            </div>
                                                            <!-- <div class="errorFound errorSuccess text-end">
                                                                            <span>3</span>
                                                                        </div> -->
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mt-4">
                                                                <div class="form-field text-end">
                                                                    <input type="submit" name="" id=""
                                                                        value="Add Comment"
                                                                        class="btn btn-lg btn-success">
                                                                    <input type="submit" name="" id=""
                                                                        value="Cancel" class="btn btn-lg btn-danger">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header align-items-start p-4">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="pop-icon d-flex align-items-center me-3">
                                                <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                            </div>
                                            <div class="modal-title">
                                                <h3>Add Article</h3>
                                                <span>Admin</span>
                                            </div>
                                        </div>
                                        <p>
                                            Please add your article here.
                                        </p>
                                    </div>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">


                                    <form action="{{ route('post.store') }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 mb-2">
                                                <div class="form-field">
                                                    <input type="text" name="article_title" id="validationCustom02"
                                                        placeholder="Article Title" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="pt-2 pb-2">Write your Article</h6>
                                                <div class="form-field">
                                                    <!-- Replace the div with textarea -->
                                                    <textarea class="form-control" name="aricale_description" rows="3"></textarea>
                                                </div>
                                                {{-- <div class="text-ed-outer p-3 mt-2">
                                                            <h6>Write your Article</h6>
                                                            <div id="editor-addArticle"></div>
                                                        </div> --}}
                                                <!-- <div class="errorFound errorSuccess text-end">
                                                            <span>3</span>
                                                        </div> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Image</label>
                                                        <input type="file" class="form-control-file" name="image"
                                                            id="exampleInputPassword1" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-4">
                                                    <div class="form-field text-end">
                                                        <input type="submit" name="" id="submitData"
                                                            value="Add Article" class="btn btn-lg btn-success">
                                                        <input type="submit" name="" id=""
                                                            value="Cancel" class="btn btn-lg btn-danger">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <!-- Modal -->
            {{-- non sports and game template one --}}
            <div class="modal fade" id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel21" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        {{-- non sports and gam etemplate one --}}
                        <div class="modal-body p-4">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Information existed/identified before event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="information_before_event" id="is-editer-1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Mother nature into consideration</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="mother_nature" id="is-editer-2" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Negative function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="negative_function" id="is-editer-3" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Problem developed from negative function execution</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="problem_developed" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- Modal -->

            <!-- Modal  -->
            {{-- non sports and gam template two --}}
            <div class="modal fade" id="staticBackdrop22" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel22" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">

                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Information existed/identified before event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="information_before_event" id="is-editer-1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Mother nature into consideration</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="mother_nature" id="is-editer-2" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Negative function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="negative_function" id="is-editer-3" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Problem developed from negative function execution</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="problem_developed" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Relationship if any between information existed before event & negative function
                                            executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Relationship_if_any_between" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>


                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>



            </div>
            </div>
            </div>
            </div>
            <!-- Modal -->

            <!-- Modal -->
            {{-- non sports and gam template three --}}
            <div class="modal fade" id="staticBackdrop23" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel23" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">

                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Information existed/identified before event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="information_before_event" id="is-editer-1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Mother nature into consideration</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="mother_nature" id="is-editer-2" rows="3"></textarea>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Function_executed_from_event" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Relationship if any between information existed before event & negative function
                                            executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Relationship_if_any_between" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>


                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>


            </div>
            </div>
            </div>
            </div>
            <!-- Modal -->

            <!-- Modal -->
            {{-- non sports and gam template four --}}
            <div class="modal fade" id="staticBackdrop24" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel24" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Information existed/identified before event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="information_before_event" id="is-editer-1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Mother nature into consideration</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="mother_nature" id="is-editer-2" rows="3"></textarea>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Negative function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="negative_function" id="is-editer-3" rows="3"></textarea>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>


                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>



            </div>
            </div>
            </div>
            </div>
            <!-- Modal -->

            {{-- sport and game template 1 --}}
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop25" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel25" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Pre-event observation</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Pre_event_observation" id="is-editer-1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Function_executed_from_event" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Post-event observation</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Post_event_observation" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>

            </div>
            </div>
            </div>
            </div>
            <!-- Modal -->

            {{-- sport and game template 2 --}}
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop26" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel26" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Function_executed_from_event" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>





                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>

            </div>
            </div>
            </div>
            </div>
            <!-- Modal -->
            {{-- sport and game template 3 --}}
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop27" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel27" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Information existed/identified before event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="information_before_event" id="is-editer-1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Mother nature into consideration</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="mother_nature" id="is-editer-2" rows="3"></textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Function_executed_from_event" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>





                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
            </div>
            </div>
            <!-- Modal -->
            {{-- sport and game template 4 --}}
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop28" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel28" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="article_title" id="validationCustom02"
                                                placeholder="Article Title" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Provider</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_name" id=""
                                                placeholder="Provider Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_name" id=""
                                                placeholder="Person Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="person_location" id=""
                                                placeholder="Person Location" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About The Given Set</h6>
                                        <small>Does provider use The Given Set to provide this information?</small>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault11" value="yes">
                                                <label class="form-check-label" for="given_set_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" name="given_set" id="flexRadioDefault11"
                                                    value="no">
                                                <label class="form-check-label" for="given_set_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About People Information Directed To</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="people_location" id=""
                                                placeholder="People Location" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="consideration" id=""
                                                placeholder="Consideration " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About Event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_name" id=""
                                                placeholder="Event Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="event_location" id=""
                                                placeholder="Event Location " class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="date" name="event_date" id=""
                                                        placeholder="Event Date" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-field">
                                                    <input type="time" name="event_time" id=""
                                                        placeholder="Event Time " class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Information existed/identified before event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="information_before_event" id="is-editer-1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Mother nature into consideration</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="mother_nature" id="is-editer-2" rows="3"></textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Function executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Function_executed_from_event" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Relationship if any between information existed before event & negative function
                                            executed from event</h6>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Replace the div with textarea -->
                                            <textarea class="form-control" name="Relationship_if_any_between" id="is-editer-4" rows="3"></textarea>
                                        </div>
                                    </div>





                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                </div>






                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" name="addPost" id=""
                                                    value="Add Article" class="btn btn-lg btn-success">
                                                {{-- <input type="" name="" id="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                </form>

            </div>
            </div>
            </div>
            </div>
            <!-- Modal -->

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop29" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel29" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header align-items-start p-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="pop-icon d-flex align-items-center me-3">
                                        <img src="assets/img/analysis-popup-icon.svg" alt class="m-auto" />
                                    </div>
                                    <div class="modal-title">
                                        <h3>Add Provider</h3>
                                        <span>Admin</span>
                                    </div>
                                </div>
                                <p>
                                    Please add your article here.
                                </p>
                            </div>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('post.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>About the Given Set<br> <small>Does provider use The Given Set to Provide this
                                                Information?</small></h6>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio" name="about_given_set"
                                                    id="flexRadioDefault112" value="Yes">
                                                <label class="form-check-label" for="flexRadioDefault112">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="about_given_set"
                                                    id="flexRadioDefault212" value="No">
                                                <label class="form-check-label" for="flexRadioDefault212">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="product_name" id="validationCustom02"
                                                placeholder="Product Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="model_number" id="model_number"
                                                placeholder="Model Number" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="product_type" id="product_type"
                                                placeholder="Product Type" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="product_function" id="product_function"
                                                placeholder="Product Function" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="problem_solved" id="problem_solved"
                                                placeholder="Problem Solved" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Function Executed During Review</h6>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Add input field for Function Executed During Review -->
                                            <input type="text" name="function_executed_review"
                                                id="function_executed_review" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Is function executed during reviewed solved problem solved by product?</h6>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check me-4">
                                                <input class="form-check-input" type="radio"
                                                    name="is_problem_solved" id="is_problem_solved_yes"
                                                    value="Yes">
                                                <label class="form-check-label" for="is_problem_solved_yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="is_problem_solved" id="is_problem_solved_no" value="No">
                                                <label class="form-check-label" for="is_problem_solved_no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-2 mt-2">
                                        <h6>Any additional information if necessary</h6>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <!-- Add input field for additional information -->
                                            <textarea name="additional_information" id="additional_information" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="product_url" id="product_url"
                                                placeholder="Product URL" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="provider_contact" id="provider_contact"
                                                placeholder="Provider name and Contact" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mb-2">
                                        <div class="form-field">
                                            <input type="text" name="reviewer_contact" id="reviewer_contact"
                                                placeholder="Reviewer name and contact" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-4">
                                            <div class="form-field text-end">
                                                <input type="submit" value="Add Article"
                                                    class="btn btn-lg btn-success">
                                                {{-- <input type="" value="Cancel" class="btn btn-lg btn-danger"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
        @endsection


    <div class="main-wrapper h-100">
        <header>
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="toggleIcon">
                        <a href="javascript:void(0)" class="toggle-btn"><img src=" {{ asset('Backend/img/toggle-icon.svg') }}" alt
                                width="45" /></a>
                        <a href="#" class="d-sm-none mob-search-btn"><img src=" {{ asset('Backend/img/search-icon.svg') }}" alt
                                width="20" /></a>
                    </div>
                    <div class="headerSearch">
                        <form action>
                            <div class="form-field position-relative m-0">
                                <input type="search" placeholder="Search" class="form-control" />
                                <img src=" {{ asset('Backend/img/search-icon.svg') }}"  alt class="headerSearch__icon" />
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="headerMenus d-flex align-items-center">
                            <div class="dropdown">
                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.5589 26.1335C16.7322 26.1335 17.6922 25.1735 17.6922 24.0002H13.4256C13.4256 25.1735 14.3749 26.1335 15.5589 26.1335ZM21.9589 19.7335V14.4002C21.9589 11.1255 20.2096 8.38416 17.1589 7.65883V6.9335C17.1589 6.04816 16.4442 5.3335 15.5589 5.3335C14.6736 5.3335 13.9589 6.04816 13.9589 6.9335V7.65883C10.8976 8.38416 9.1589 11.1148 9.1589 14.4002V19.7335L7.7829 21.1095C7.1109 21.7815 7.58024 22.9335 8.52957 22.9335H22.5776C23.5269 22.9335 24.0069 21.7815 23.3349 21.1095L21.9589 19.7335Z"
                                            fill="white" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.4 4H5.6C4.72 4 4 4.72 4 5.6V20L7.2 16.8H18.4C19.28 16.8 20 16.08 20 15.2V5.6C20 4.72 19.28 4 18.4 4Z"
                                            fill="white" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16 16.0001C18.3573 16.0001 20.2667 14.0908 20.2667 11.7335C20.2667 9.37613 18.3573 7.4668 16 7.4668C13.6427 7.4668 11.7333 9.37613 11.7333 11.7335C11.7333 14.0908 13.6427 16.0001 16 16.0001ZM16 18.1335C13.152 18.1335 7.46667 19.5628 7.46667 22.4001V23.4668C7.46667 24.0535 7.94667 24.5335 8.53334 24.5335H23.4667C24.0533 24.5335 24.5333 24.0535 24.5333 23.4668V22.4001C24.5333 19.5628 18.848 18.1335 16 18.1335Z"
                                            fill="white" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="userDd">
                            <div class="dropdown">
                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin &nbsp; <img src="{{ asset('Backend/img/angle-icon.svg') }}" alt />
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



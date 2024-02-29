@extends('backend.layout.template')
@section('body')

      {{-- <div class="dashboardInner"> --}}
            <div class="container-fluid">
                <div class="row g-2 g-sm-4">
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" style="width: 30px; height: 30px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.7 11.2H29.012C28.34 9.344 26.58 8 24.5 8C22.42 8 20.66 9.344 19.988 11.2H13.3C11.54 11.2 10.1 12.64 10.1 14.4V36.8C10.1 38.56 11.54 40 13.3 40H35.7C37.46 40 38.9 38.56 38.9 36.8V14.4C38.9 12.64 37.46 11.2 35.7 11.2ZM24.5 11.2C25.38 11.2 26.1 11.92 26.1 12.8C26.1 13.68 25.38 14.4 24.5 14.4C23.62 14.4 22.9 13.68 22.9 12.8C22.9 11.92 23.62 11.2 24.5 11.2ZM26.1 33.6H18.1C17.22 33.6 16.5 32.88 16.5 32C16.5 31.12 17.22 30.4 18.1 30.4H26.1C26.98 30.4 27.7 31.12 27.7 32C27.7 32.88 26.98 33.6 26.1 33.6ZM30.9 27.2H18.1C17.22 27.2 16.5 26.48 16.5 25.6C16.5 24.72 17.22 24 18.1 24H30.9C31.78 24 32.5 24.72 32.5 25.6C32.5 26.48 31.78 27.2 30.9 27.2ZM30.9 20.8H18.1C17.22 20.8 16.5 20.08 16.5 19.2C16.5 18.32 17.22 17.6 18.1 17.6H30.9C31.78 17.6 32.5 18.32 32.5 19.2C32.5 20.08 31.78 20.8 30.9 20.8Z" fill="#0284fe"/>
                                    </svg>
                                </span>

                                <h3>10</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Articles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #f4f2ff;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="32" viewBox="0 0 29 32" fill="none" style="width: 20px; height: 20px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.7 3.2H19.012C18.34 1.344 16.58 0 14.5 0C12.42 0 10.66 1.344 9.988 3.2H3.3C1.54 3.2 0.0999985 4.64 0.0999985 6.4V28.8C0.0999985 30.56 1.54 32 3.3 32H25.7C27.46 32 28.9 30.56 28.9 28.8V6.4C28.9 4.64 27.46 3.2 25.7 3.2ZM14.5 3.2C15.38 3.2 16.1 3.92 16.1 4.8C16.1 5.68 15.38 6.4 14.5 6.4C13.62 6.4 12.9 5.68 12.9 4.8C12.9 3.92 13.62 3.2 14.5 3.2ZM10.164 24.464L6.02 20.32C5.72039 20.0211 5.55202 19.6152 5.55202 19.192C5.55202 18.7688 5.72039 18.3629 6.02 18.064C6.644 17.44 7.652 17.44 8.276 18.064L11.3 21.072L20.708 11.664C21.332 11.04 22.34 11.04 22.964 11.664C23.588 12.288 23.588 13.296 22.964 13.92L12.42 24.464C11.812 25.088 10.788 25.088 10.164 24.464Z" fill="#886cfd"/>
                                    </svg>
                                </span>
                                <h3>10</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Analysis</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #fef7e5;">
                                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 28px; height: 28px;" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M322.4,217.8H189.6c-44.9,0.1-81.3,36.5-81.4,81.4V382h295.5v-82.8C403.7,254.3,367.3,217.9,322.4,217.8z" fill="#ffc10e"/>
                                        <circle cx="256" cy="100.5" r="98.5" fill="#ffc10e"/>
                                        <path d="M342.3,432l-32.2-32.5c-3.2-3.3-8.5-3.3-11.8,0c0,0,0,0,0,0l0,0c-3.2,3.2-3.2,8.5,0,11.7l29.6,29.9H158.3
                                            c-4.6,0-8.3,3.7-8.3,8.3l0,0c0,4.6,3.7,8.3,8.3,8.3h170.1l-30.1,30c-3.3,3.2-3.3,8.5,0,11.8c0,0,0,0,0,0l0,0c3.2,3.3,8.5,3.3,11.8,0
                                            c0,0,0,0,0,0l32.2-32.3C352,457.5,351.9,441.8,342.3,432z" fill="#ffc10e"/>
                                        </svg>

                                </span>
                                <h3>8</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Feedback Provided</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #ebf9ea;">
                                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" style="width: 28px; height: 28px;" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M322.4,217.8H189.6c-44.9,0.1-81.3,36.5-81.4,81.4V382h295.5v-82.8C403.7,254.3,367.3,217.9,322.4,217.8z"  fill="#34c431"/>
                                        <circle cx="256" cy="100.5" r="98.5" fill="#34c431"/>
                                        <path d="M157.2,467.3l32.2,32.3c0,0,0,0,0,0c3.3,3.2,8.5,3.2,11.8,0l0,0c0,0,0,0,0,0c3.2-3.3,3.2-8.5,0-11.8l-30.1-30h170.1
                                            c4.6,0,8.3-3.7,8.3-8.3l0,0c0-4.6-3.7-8.3-8.3-8.3H171.6l29.6-29.9c3.2-3.2,3.2-8.5,0-11.7l0,0c0,0,0,0,0,0c-3.3-3.2-8.5-3.2-11.8,0
                                            L157.2,432C147.6,441.8,147.6,457.5,157.2,467.3z"  fill="#34c431"/>
                                        </svg>
                                </span>
                                <h3>10</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Feedback Received</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #dbf1fb;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" style="width: 28px; height: 28px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40.5 11.2C40.5 9.44 39.06 8 37.3 8H11.7C9.94 8 8.5 9.44 8.5 11.2V30.4C8.5 32.16 9.94 33.6 11.7 33.6H34.1L40.5 40V11.2Z" fill="#2196f3"/>
                                      </svg>
                                </span>
                                <h3>50</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">My Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #e7f7ff;">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20"><path d="M19,0H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V5c0-2.757-2.243-5-5-5Zm-7,19c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5,.672,1.5,1.5-.672,1.5-1.5,1.5Zm1.928-6.512c-.521,.287-.928,.952-.928,1.512,0,.553-.448,1-1,1s-1-.447-1-1c0-1.284,.807-2.626,1.963-3.264,.763-.42,1.157-1.254,1.004-2.125-.138-.787-.81-1.458-1.596-1.596-.606-.107-1.195,.047-1.656,.435-.455,.381-.715,.94-.715,1.533,0,.552-.448,1-1,1s-1-.448-1-1c0-1.185,.521-2.302,1.429-3.064,.908-.762,2.109-1.077,3.287-.873,1.613,.282,2.938,1.606,3.221,3.22,.298,1.699-.509,3.395-2.009,4.222Z"  fill="#607d8b"/></svg>

                                </span>
                                <h3>15</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">My Questions</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #f0e9f1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" style="width: 30px; height: 30px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.3 14.4H35.7V27.2C35.7 28.08 34.98 28.8 34.1 28.8H14.9V30.4C14.9 32.16 16.34 33.6 18.1 33.6H34.1L40.5 40V17.6C40.5 15.84 39.06 14.4 37.3 14.4ZM32.5 22.4V11.2C32.5 9.44 31.06 8 29.3 8H11.7C9.94 8 8.5 9.44 8.5 11.2V32L14.9 25.6H29.3C31.06 25.6 32.5 24.16 32.5 22.4Z" fill="#9c27b0"/>
                                      </svg>
                                </span>
                                <h3>20</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">My Answer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #ffe9eb;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" style="width: 30px; height: 30px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5 8C15.668 8 8.5 15.168 8.5 24C8.5 32.832 15.668 40 24.5 40C33.332 40 40.5 32.832 40.5 24C40.5 15.168 33.332 8 24.5 8ZM24.5 25.6C23.62 25.6 22.9 24.88 22.9 24V17.6C22.9 16.72 23.62 16 24.5 16C25.38 16 26.1 16.72 26.1 17.6V24C26.1 24.88 25.38 25.6 24.5 25.6ZM26.1 32H22.9V28.8H26.1V32Z" fill="#dc3545"/>
                                      </svg>
                                </span>
                                <h3>10</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Error Identified</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #ebf9ea;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" style="width: 30px; height: 30px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M38.1 24H35.7V17.6C35.7 15.84 34.26 14.4 32.5 14.4H26.1V12C26.1 9.792 24.308 8 22.1 8C19.892 8 18.1 9.792 18.1 12V14.4H11.7C9.94 14.4 8.516 15.84 8.516 17.6V23.68H10.9C13.284 23.68 15.22 25.616 15.22 28C15.22 30.384 13.284 32.32 10.9 32.32H8.5V38.4C8.5 40.16 9.94 41.6 11.7 41.6H17.78V39.2C17.78 36.816 19.716 34.88 22.1 34.88C24.484 34.88 26.42 36.816 26.42 39.2V41.6H32.5C34.26 41.6 35.7 40.16 35.7 38.4V32H38.1C40.308 32 42.1 30.208 42.1 28C42.1 25.792 40.308 24 38.1 24Z" fill="#34c431"/>
                                      </svg>
                                </span>
                                <h3>30</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Compensator Identified</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #fef7e5;">
                                      <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" style="width: 22px; height: 22px;">
                                        <path d="m8,12c3.309,0,6-2.691,6-6S11.309,0,8,0,2,2.691,2,6s2.691,6,6,6Zm0,2C3.589,14,0,17.589,0,22v1c0,.552.448,1,1,1h14c.552,0,1-.448,1-1v-1c0-4.411-3.589-8-8-8Zm15.697-3.783l-3.992,3.875c-.581.582-1.368.907-2.205.907s-1.624-.326-2.215-.917l-1.971-1.854c-.402-.378-.421-1.011-.042-1.414.379-.402,1.011-.421,1.414-.042l1.992,1.875c.471.47,1.195.449,1.623.021l4.002-3.886c.396-.385,1.029-.375,1.414.021.385.396.375,1.03-.021,1.414Z" fill="#ffc10e"/>
                                      </svg>
                                </span>
                                <h3>20</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Feedback Applied</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #f2f3ff;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" style="width: 30px; height: 30px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5 8C15.668 8 8.5 15.168 8.5 24C8.5 32.832 15.668 40 24.5 40C33.332 40 40.5 32.832 40.5 24C40.5 15.168 33.332 8 24.5 8ZM24.5 32C23.62 32 22.9 31.28 22.9 30.4V24C22.9 23.12 23.62 22.4 24.5 22.4C25.38 22.4 26.1 23.12 26.1 24V30.4C26.1 31.28 25.38 32 24.5 32ZM26.1 19.2H22.9V16H26.1V19.2Z" fill="#717ff1"/>
                                      </svg>
                                </span>
                                <h3>5</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Problem Identified</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="card h-100 text-center border-0 dashboardCard shadow-sm">
                            <div class="card-body pt-4 px-5 pb-0">
                                <span style="background: #f0e9f1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none" style="width: 30px; height: 30px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.3 14.4H35.7V27.2C35.7 28.08 34.98 28.8 34.1 28.8H14.9V30.4C14.9 32.16 16.34 33.6 18.1 33.6H34.1L40.5 40V17.6C40.5 15.84 39.06 14.4 37.3 14.4ZM32.5 22.4V11.2C32.5 9.44 31.06 8 29.3 8H11.7C9.94 8 8.5 9.44 8.5 11.2V32L14.9 25.6H29.3C31.06 25.6 32.5 24.16 32.5 22.4Z" fill="#9c27b0"/>
                                      </svg>
                                </span>
                                <h3>20</h3>
                            </div>
                            <div class="card-footer border-0 bg-transparent pt-0 px-5 pb-4">
                                <a href="#" class="stretched-link">Article Forms</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
@endsection

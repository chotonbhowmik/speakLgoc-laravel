@extends('backend.layout.template')

@section('body')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Manage Article</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Count</th>
                                <th scope="col">Topic Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @forelse($posts as $post)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $post->heading }} - {{ $post->paragraph }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>
                                        @if ($post->image)
                                            <img src="{{ asset('Backend/img/post/' . $post->image) }}" width="100">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalLong{{ $post->id }}">
                                            Add Analysis
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No posts found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts as $post)
        <!-- Modal for each post -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalLong{{ $post->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel{{ $post->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Analysis</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Analysis Question</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Analysis Answer</a>

                                    <a class="nav-item nav-link" id="list-of-error" data-toggle="tab" href="#list-error"
                                    role="tab" aria-controls="list-error" aria-selected="false">List Of Error</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading</label>
                                        <input type="text" class="form-control" name="heading" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="" value="{{ $post->heading }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Sub-heading</label>
                                        <input type="text" class="form-control" name="paragraph"
                                            id="exampleInputPassword1" placeholder="" value="{{ $post->paragraph }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1">
                                        @if ($post->image)
                                            <img src="{{ asset('Backend/img/post/' . $post->image) }}" width="100">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $post->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="updatePost" class="btn btn-primary"
                                            value="Save Change">

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">cxzczx...</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">..czxx.</div>

                                <div class="tab-pane fade" id="list-error" role="tabpanel"
                                aria-labelledby="list-of-error">..error.</div>
                        </div>

                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> --}}
                </div>
            </div>
        </div>
    @endforeach
@endsection

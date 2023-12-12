@extends('backend.layout.template')


@section('body')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Add Articale</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPostModal">
                    Add Article
                </button>

                <!-- Modal -->
                <div class="modal fade" id="createPostModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New Article</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading</label>
                                        <input type="text" class="form-control" name="heading" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Sub-heading</label>
                                        <input type="text" class="form-control" name="paragraph"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image</label>
                                        <input type="file" class="form-control-file" name="image"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="addPost" class="btn btn-primary" value="Add Post">
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- modal end --}}

                <div class="card mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Count</th>
                                <th scope="col">Topic Category</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @forelse($posts as $post)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $post->heading }}</td>
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
                                    <td colspan="4">No posts found.</td>
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
                            <div class="nav nav-tabs" id="nav-tab{{ $post->id }}" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab{{ $post->id }}" data-toggle="tab"
                                    href="#nav-home{{ $post->id }}" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Analysis</a>
                                <a class="nav-item nav-link" id="nav-profile-tab{{ $post->id }}" data-toggle="tab"
                                    href="#nav-profile{{ $post->id }}" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Analysis Question</a>
                                <a class="nav-item nav-link" id="nav-contact-tab{{ $post->id }}" data-toggle="tab" href="#nav-contact{{ $post->id }}"
   role="tab" aria-controls="nav-contact" aria-selected="false">Analysis Answer</a>



                                <a class="nav-item nav-link" id="list-of-error" data-toggle="tab" href="#list-error"
                                    role="tab" aria-controls="list-error" aria-selected="false">List Of Error</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent{{ $post->id }}">
                            {{-- this tab is for analysis part --}}
                            <div class="tab-pane fade show active" id="nav-home{{ $post->id }}" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Heading</label>
                                        <input type="text" class="form-control" name="heading"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                                            value="{{ $post->heading }}">
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

                            {{-- this tab is for analysis question part --}}
                            <div class="tab-pane fade" id="nav-profile{{ $post->id }}" role="tabpanel"
                                aria-labelledby="nav-profile-tab{{ $post->id }}">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Post Name</th>
                                            <th scope="col">Question Number</th>
                                            <th scope="col">Actual Question</th>
                                            <th scope="col">Question Points to</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @forelse($questions->where('question', $post->id) as $question)
                                            <tr>
                                                <th scope="row">{{ $i++ }}</th>
                                                <td>{{ $question->post->heading }}</td>
                                                <td>{{ $question->heading }}</td>
                                                <td>{{ $question->description }}</td>
                                                <td>{{ $question->created_at }}</td>

                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#createQuestion{{ $post->id }}">
                                                        <i class="bi bi-file-plus"></i>
                                                    </button>
                                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#editQuestion{{ $question->id }}">
                                                        <i class="bi bi-pen-fill"></i>
                                                    </button> --}}

                                                    <form method="post"
                                                        action="{{ route('post.destroy', ['id' => $post->id]) }}"
                                                        id="deletePostForm{{ $post->id }}" style="display: inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-primary"
                                                            onclick="return confirm('Are you sure you want to delete this post?')">
                                                            <i class="bi bi-trash3-fill"></i>
                                                        </button>
                                                    </form>


                                                    <!-- Modal -->

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No posts found.</td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#createQuestion{{ $post->id }}">
                                                    <i class="bi bi-file-plus"></i>
                                                </button>
                                            </tr>
                                        @endforelse


                                    </tbody>
                                    <div class="modal fade" id="createQuestion{{ $post->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">New Article</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('analysisQuestion.store') }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Heading</label>
                                                            <input type="text" class="form-control" name="heading"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                placeholder="">

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Select Question</label>
                                                            <select class="form-control" name="question">
                                                                <option value="0">Please Select a Question</option>
                                                                @foreach ($posts as $post)
                                                                    <!-- Change $division to $post -->
                                                                    <option value="{{ $post->id }}">
                                                                        {{ $post->heading }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" name="addPost" class="btn btn-primary"
                                                                value="Add Post">
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                    @foreach ($questions as $question)
                                        <!-- Modal for editing analysis question -->
                                        <div class="modal fade bd-example-modal-lg"
                                            id="editQuestion{{ $post->id }}_{{ $question->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Analysis
                                                            Question</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('analysisQuestion.update', ['id' => $question->id]) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Heading</label>
                                                                <input type="text" class="form-control" name="heading"
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    value="{{ $question->heading }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label
                                                                    for="exampleFormControlTextarea1">Description</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $question->description }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="submit" name="updateQuestion"
                                                                    class="btn btn-primary" value="Save Changes">
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </table>


                            </div>
                            {{-- this tab is for analysis  answer part --}}

<div class="tab-pane fade" id="nav-contact{{ $post->id }}" role="tabpanel"
     aria-labelledby="nav-contact-tab{{ $post->id }}">



                            </div>

                            <div class="tab-pane fade" id="list-error" role="tabpanel" aria-labelledby="list-of-error">
                                ..error.</div>
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

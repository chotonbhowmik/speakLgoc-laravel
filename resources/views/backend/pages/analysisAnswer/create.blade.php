@extends('backend.layout.template')


@section('body')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Analysis Answer</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPostModal">
                    Add Analysis Answer
                </button>

                <!-- Modal -->
                <div class="modal fade" id="createPostModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Analysis Dialog</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('analysisAnswer.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Entity Question Point To</label>
                                        <input type="text" class="form-control" name="heading" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="">

                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Information Answer Point To</label>
                                        <input type="text" class="form-control" name="paragraph" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="">

                                    </div>
                                    <div class="form-group">
                                        <label>Actual Question</label>
                                        <select class="form-control" name="question">
                                            <option value="0">Please Select a Question</option>
                                            @foreach ($blogpost as $post)
                                                <!-- Change $division to $post -->
                                                <option value="{{ $post->id }}">{{ $post->heading }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Actual Question</label>
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

                <div class="card mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Question Number</th>
                                <th scope="col">Question</th>
                                <th scope="col">Information Answer Point To</th>
                                <th scope="col">Entity Question Point To</th>
                                <th scope="col">Answer Date</th>
                                <th scope="col">Actual Answer</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @forelse($analysisAnswers as $analysisAnswer)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $analysisAnswer->heading }}</td>
                                    <td>{{ $analysisAnswer->paragraph }}</td>
                                    <td>{{ $analysisAnswer->question }}</td>
                                    <td>{{ $analysisAnswer->description }}</td>
                                    <td>{{ $analysisAnswer->created_at }}</td>

                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalLong{{ $analysisAnswer->id }}">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteAnalysis{{ $analysisAnswer->id }}">
                                            Delete
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
    <!-- Modal -->

    @foreach ($analysisAnswers as $analysisAnswer)
        <!-- Modal for each post -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalLong{{ $analysisAnswer->id }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel{{ $analysisAnswer->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">




                        <form action="{{ route('analysisAnswer.update', ['id' => $analysisAnswer->id]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Entity Question Point To</label>
                                <input type="text" class="form-control" name="heading" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="" value="{{ $analysisAnswer->heading }}">
                            </div>
                             <div class="form-group">
                                        <label for="exampleInputEmail1">Information Answer Point To</label>
                                        <input type="text" class="form-control" name="paragraph" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="" value="{{ $analysisAnswer->paragraph }}">

                                    </div>
                            <div class="form-group">
                                <label>Select Question</label>
                                <select class="form-control" name="question">
                                    <option value="0">Please Select The Question</option>
                                    @foreach ($blogpost as $question)
                                        <option value="{{ $question->id }}"
                                            @if ($question->id == $analysisAnswer->question) selected @endif>{{ $question->heading }}
                                        </option>
                                    @endforeach

                                </select>

                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Question Point To</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $analysisAnswer->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="updatePost" class="btn btn-primary" value="Save Change">

                            </div>
                        </form>
                    </div>




                </div>
                {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> --}}
            </div>
        </div>
        <div class="modal fade" id="deleteAnalysis{{ $analysisAnswer->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this analysis?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('analysisAnswer.destroy', $analysisAnswer->id) }}" method="POST">
                            @csrf
                            <div class="action-icons">
    <ul style="list-style: none; margin: 0; padding: 0; display: flex;">
        <li style="margin-right: 10px;"><input type="submit" name="delete" value="Delete" class="btn btn-danger"></li>
        <li><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></li>
    </ul>
</div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        </div>
    @endforeach
@endsection

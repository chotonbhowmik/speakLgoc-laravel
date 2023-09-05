@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Analysis Setting</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
</div>
<div class="br-pagebody">
    <div class="row row-sm">
        <div class="col-sm-12">
            <div class="card p-5">
                <form method="post" action="{{ route('analysissetting.store') }}">
                    @csrf
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableAnalysis" name="enable_analysis" value="1" @if($analysisSetting && $analysisSetting->enable_analysis) checked @endif>
                        <label class="form-check-label" for="enableAnalysis">Enable Analysis Only</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableComment" name="enable_comment" value="1" @if($analysisSetting && $analysisSetting->enable_comment) checked @endif>
                        <label class="form-check-label" for="enableComment">Enable Comment Only</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableAnalysisComment" name="enable_analysis_comment" value="1" @if($analysisSetting && $analysisSetting->enable_analysis_comment) checked @endif>
                        <label class="form-check-label" for="enableAnalysisComment">Enable Both Analysis and Comment Only</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableSubject" name="enable_subject" value="1" @if($analysisSetting && $analysisSetting->enable_subject) checked @endif>
                        <label class="form-check-label" for="enableSubject">Enable Analysis Subject to be Visible</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableAnalysisBeforePosting" name="enable_analysis_before_posting" value="1" @if($analysisSetting && $analysisSetting->enable_analysis_before_posting) checked @endif>
                        <label class="form-check-label" for="enableAnalysisBeforePosting">Enable Analysis Before Posting</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="enableCommentBeforePosting" name="enable_comment_before_posting" value="1" @if($analysisSetting && $analysisSetting->enable_comment_before_posting) checked @endif>
                        <label class="form-check-label" for="enableCommentBeforePosting">Enable Comment Before Posting</label>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-primary">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

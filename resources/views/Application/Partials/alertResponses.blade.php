@if(session()->has('SubmissionResponse'))
    <div class="alert alert-warning text-center">
        <span class="text-primary"><strong>Alert!!!</strong></span>
        <span class="lead">{{session()->get('SubmissionResponse')}}</span>
    </div>
@endif
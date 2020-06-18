<div class="card">
    <div class="card-header">
        <h3>
            <p>ToDo list</p>
        </h3>
    </div>
    <div class="card-body">
        <form action="{{ route('job.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea name="job" id="" cols="3" rows="3" maxlength="240" class="form-control"
                placeholder="İçerik">{{ empty($job ->job) ? '': $job->job }}</textarea>
            <button type="submit" class="btn btn-primary gonder ">Kaydet</button>
        </form>
    </div>
    <div class="card-body">
        @foreach ($job as $jobs)
        <p>{{ $jobs->job }}</p>
        <form action="{{ route('done.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="post_id" value="{{ $jobs->id }}">
            <button type="submit" class="btn btn-primary gonder ">Tamamlandı</button>
        </form>
        @endforeach
        <hr>
        <h3>
            <p>Completed</p>
        </h3>
        @if (!empty($job->job)) {
        @foreach ($completed as $complete)
        <span>{{ $complete->text }}
            @endforeach }
            @endif
    </div>
</div>
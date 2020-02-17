<div>

@if (count($submissions))
    <h1 class="title is-3">Submissions</h1>

    <ul>
        @foreach ($submissions as $submission)
            <li>
                <div>{{ $submission->name }}</div>
                <div>{{ date('d-M-y', strtotime($submission->date)) }}</div>
                <div>{{ date('H:i', strtotime($submission->date)) }}</div>
                <div>{{ $submission->message }}</div>
            </li>
        @endforeach
    </ul>

    <hr>
@endif

</div>
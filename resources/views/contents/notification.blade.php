@foreach ($data as $item)
    <p>
        <strong>Batch:</strong> {{ $item['batch_name'] }}<br>
        <strong>Vaccine:</strong> {{ $item['vaccine_name'] }}<br>
        <strong>Scheduled:</strong> {{ \Carbon\Carbon::parse($item['scheduled_date'])->toFormattedDateString() }}<br>
        <strong>Status:</strong> {{ $item['status_label'] }}
    </p>
    <hr>
@endforeach

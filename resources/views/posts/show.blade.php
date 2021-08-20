@foreach ($responseBody->availability as $response)

{{ $response->date }}
<br />
{{ $response->partner->name }}
<br />
{{ $response->partner->country }}
<br />
{{ $response->partner->status }}
<br />
<br />




@endforeach




@forelse($messages as $message)



{{$message->name}}
{{$message->email}}
{{$message->message}}

<br>
@empty
@endforelse
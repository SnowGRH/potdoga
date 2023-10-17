@foreach ($lessons as $lesson)
<from action="/api/task/{{$lesson->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="from-group">
        <input type="submit" value="{{$lesson->status}}">
    </div>
</from>
@endforeach
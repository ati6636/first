@if (count($students))

  @foreach ($students as $student)
    <li>{{$student}}</li><br>
  @endforeach
  <br><br>

  @foreach ($class as $c)
    <li>{{$c}}</li>
  @endforeach

@endif

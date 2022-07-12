@if (count($students))
  @foreach ($students as $student)
    <li>{{$student}}</li><br>
  @endforeach
@endif

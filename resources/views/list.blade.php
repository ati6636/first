@php
  $data='1';
@endphp
@switch($data)
  @case(1)
    numara 1'dir.
  @break
  @case(2)
    numara 2'dir.
  @break
  @case(3)
    numara 3'dür.
  @break
  @default
  default değer
@endswitch

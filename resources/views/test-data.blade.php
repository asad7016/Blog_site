@extends('layout.master')
@section('content')
@for($i=0;$i<4;$i++)
<div class="sucess"><h1>
<?php echo "true";?>
{{$i}}
</h1>
</div>
@endfor
@endsection
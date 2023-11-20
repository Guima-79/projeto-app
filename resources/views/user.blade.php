<h1> User </h1>

{{$user->name}} <br>
{{$user->email}} <br>

<br>
{{date('d/m/y')}}

<br>

@php
    
    $total = 50;
    $array = [];
@endphp

@empty($array)
    O Array está vazio

@endempty

@if($total > 100)
    Muito caro

@elseif($total > 80)
    Tá Ok

@elseif($total > 50)
    Tá barato
   
@endif


{{-- @if($user->name === 'Prof. Kody Adams MD')
    {{$user->name}}

@elseif($user->email === 'fbrakus@example.net')
    {{$user->email}}
   
@endif --}}
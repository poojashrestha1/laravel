@extends('master')

@section('content')
<h1> Blade engine </h1>
    @for($i=1; $i<=10; $i++)
    {{$i}}
    <br/>
    @endfor

    <?php
    //plain 
    echo '<hr/>';
    echo date('Y-m-d h:i:s');
    ?>

    @endsection

    @yield('title')
    This is a title
    
    

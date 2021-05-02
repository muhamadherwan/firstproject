{{-- @if (5 > 10)
    <p>5 is less then 10</p>
@elseif ( 5 == 10 )
    <p>5 is indeed less then 10</p>
@else
<h2>all condition is wrong!</h2>
@endif

@unless (empty($name))
    name is not empty  <br>  
@endunless

@empty($secondName)
    <h2>name is empty</h2>
@endempty

@isset($name)
    <h2>name has been set</h2>
@endisset

 --}}

 <!--
    comparing multiple value with switch
 -->

 @switch($name)
     @case('daigo')
         <h2>name is daigo</h2>
         @break
     @case('taylor')
         <h2>name is taylor</h2>
         @break
     @default
         <h2>no match found!</h2>
 @endswitch
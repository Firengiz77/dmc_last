@foreach($spikers as $key => $spiker)
<a href="#ModalArea_{{$spiker->id}}" style="width:254px" data-toggle="modal" data-target="#myModal_{{$spiker->id}}" class="sponsor_link sponsor_link2" >
  <div class="moderator-info">
    <img src="{{ asset($spiker->image) }}" alt="">
    <h4>  {{ $spiker->name  }}</h4> 
    <p> {{ $spiker->profession }}  </p>
     <p> {{ $spiker->company }}  </p>
  </div> 
 </a>
@endforeach
</div>
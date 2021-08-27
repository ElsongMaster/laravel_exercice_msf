<ul class="nav d-flex justify-content-center bg-warning  mb-5">
     <li class="nav-item"><a  href="{{route('batiment')}}" class="nav-link  @if(request()->routeIs('batiments')) active @else '' @endif">Home</a></li>
   <li class="nav-item"><a  href="{{route('backBatiment')}}" class="nav-link  @if(request()->routeIs('backBatiment')) active @else '' @endif">Batiment</a></li>
    <li class="nav-item"><a  href="{{route('backEleves')}}" class="nav-link  @if(request()->routeIs('backEleves')) active @else '' @endif">Eleves</a></li>
    <li class="nav-item"><a  href="{{route('backFormations')}}" class="nav-link  @if(request()->routeIs('backFormations')) active @else '' @endif">Formations</a></li>
    <li class="nav-item"><a  href="{{route('backTypeFormations')}}" class="nav-link  @if(request()->routeIs('backTypeFormations')) active @else '' @endif">Types Formations</a></li>
</ul>
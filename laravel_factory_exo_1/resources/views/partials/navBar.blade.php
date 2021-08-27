<ul class="nav d-flex justify-content-center bg-info text-light mb-5">
    <li class="nav-item"><a  href="{{route('batiment')}}" class="nav-link text-light @if(request()->routeIs('fruits')) active @else '' @endif">Batiment</a></li>
    <li class="nav-item"><a  href="{{route('eleves')}}" class="nav-link text-light @if(request()->routeIs('fruits')) active @else '' @endif">Eleves</a></li>
    <li class="nav-item"><a  href="{{route('formations')}}" class="nav-link text-light @if(request()->routeIs('fruits')) active @else '' @endif">Formations</a></li>
    <li class="nav-item"><a  href="{{route('typeFormations')}}" class="nav-link text-light @if(request()->routeIs('fruits')) active @else '' @endif">Types Formations</a></li>
</ul>
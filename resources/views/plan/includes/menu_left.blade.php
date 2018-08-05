<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu" style="padding-top: 4px; padding-bottom: 4px">
            <ul>
                <li >
                    <a href="{{route('plans')}}" class="waves-effect waves-primary" >
                        <i class=" mdi mdi-keyboard-backspace"></i><span>Буцах </span></a>
                </li>
                @if($plan)
                    <li class="menu-title">Хөтөлбөр</li>

                    @foreach($plan->days()->get() as $day)
                        <li>
                            <a href="{{route('day', ['id'=>$day->day])}}" class="waves-effect waves-primary" >
                                @if($day->watched())
                                    <i class=" mdi mdi-check-circle"></i><span>Өдөр {{$day->day}}</span>
                                @else
                                    <i class="mdi mdi-checkbox-blank-circle-outline"></i><span>Өдөр {{$day->day}}</span>
                                @endif
                            </a>
                        </li>
                    @endforeach

                @else

                @endif

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
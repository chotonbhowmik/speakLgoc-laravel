 <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Analysis<i>App</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link" >
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>

        <li class="br-menu-item">
          <a href="" class="br-menu-link with-sub @if ( Route::currentRouteNamed('post.create') || Route::currentRouteNamed('analysisQuestion.create') || Route::currentRouteNamed('analysisAnswer.create')  active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Post Article</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('post.create')}}" class="sub-link @if ( Route::currentRouteNamed('post.create')) active @endif">Add Article</a></li>
 <li class="sub-item"><a href="{{route('analysisQuestion.create')}}" class="sub-link @if ( Route::currentRouteNamed('analysisQuestion.create')) active @endif">Analysis Question</a></li>
 <li class="sub-item"><a href="{{route('analysisAnswer.create')}}" class="sub-link @if ( Route::currentRouteNamed('analysisQuestion.create')) active @endif">Analysis Answer</a></li>

          </ul>

        </li>
         <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link" >
            <i class="fas fa-check-square"></i>
            <span class="menu-item-label">Approve Analysis</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link" >
            <i class="fas fa-trash-alt"></i>
            <span class="menu-item-label">Delete</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link" >
            <i class="far fa-eye-slash"></i>
            <span class="menu-item-label">Hide</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link" >
            <i class="far fa-comment-dots"></i>
            <span class="menu-item-label">Provide Feedback</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="{{route('analysissetting.create')}}" class="br-menu-link" >
            <i class="fas fa-cog"></i>
            <span class="menu-item-label">Analysis Setting</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link" >
            <i class="fas fa-chart-pie"></i>
            <span class="menu-item-label">Report</span>
          </a>
        </li>



      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>


      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

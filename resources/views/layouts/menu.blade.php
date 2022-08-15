 
<li class="nav-item   has-treeview  {{request()->routeIs('employee*')?'menu-open':'' }}">
    <a href="#" class="nav-link">
      <i class="nav-icon nav-icon fas  fa-user text-green"></i>
      <p> 
        Employee
        <i class="right fas fa-angle-left text-green"></i>
      </p>
    </a>

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('employee.index') }}" class="nav-link {{request()->routeIs('employee.index')?'active':'' }}  ">
          <i class="far fa-circle nav-icon text-green"></i>
          <p>All employee</p>
        </a>
      </li>  
      <li class="nav-item">
        <a href="{{ route('employee.create') }}" class="nav-link   {{request()->routeIs('employee.craete')?'active':'' }} ">
          <i class="far fa-circle nav-icon text-green"></i>
          <p>New employee</p>
        </a>
      </li> 
    </ul>
  </li>

  <li class="nav-item   has-treeview  {{request()->routeIs('user*')?'menu-open':'' }}">
    <a href="#" class="nav-link">
      <i class="nav-icon nav-icon fas  fa-user text-red"></i>
      <p> 
        Users
        <i class="right fas fa-angle-left text-red"></i>
      </p>
    </a>

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ route('user.index') }}" class="nav-link {{request()->routeIs('user.index')?'active':'' }}  ">
          <i class="far fa-circle nav-icon text-red"></i>
          <p>All user</p>
        </a>
      </li>  
      <li class="nav-item">
        <a href="{{ route('user.susspend') }}" class="nav-link {{request()->routeIs('user.susspend')?'active':'' }}  ">
          <i class="far fa-circle nav-icon text-red"></i>
          <p>Suspended user</p>
        </a>
      </li>  
      <li class="nav-item">
        <a href="{{ route('user.create') }}" class="nav-link   {{request()->routeIs('user.craete')?'active':'' }} ">
          <i class="far fa-circle nav-icon text-red"></i>
          <p>New user</p>
        </a>
      </li> 
    </ul>
  </li>
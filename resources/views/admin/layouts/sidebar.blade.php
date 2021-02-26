<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
   
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Project</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Project</h6>
          <a class="collapse-item" href="{{route('project.index')}}">All Projects</a>
          <a class="collapse-item" href="{{route('project.create')}}">Create Project</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm1" aria-expanded="true"
        aria-controls="collapseForm1">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Experience</span>
      </a>
      <div id="collapseForm1" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Experience</h6>
          <a class="collapse-item" href="{{route('experience.index')}}">Experience List</a>
          <a class="collapse-item" href="{{route('experience.create')}}">Add Experience</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm11" aria-expanded="true"
        aria-controls="collapseForm11">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Institute</span>
      </a>
      <div id="collapseForm11" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Institute</h6>
          <a class="collapse-item" href="{{route('education.index')}}">Institute List</a>
          <a class="collapse-item" href="{{route('education.create')}}">Add Institute</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm111" aria-expanded="true"
        aria-controls="collapseForm111">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Post</span>
      </a>
      <div id="collapseForm111" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
   
          <a class="collapse-item" href="{{route('post.index')}}">All Post</a>
          <a class="collapse-item" href="{{route('post.create')}}">Add Post</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm1111" aria-expanded="true"
        aria-controls="collapseForm1111">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Skill</span>
      </a>
      <div id="collapseForm1111" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
       
          <a class="collapse-item" href="{{route('skill.index')}}">All Skill</a>
          <a class="collapse-item" href="{{route('skill.create')}}">Add Skill</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm11111" aria-expanded="true"
        aria-controls="collapseForm11111">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>About</span>
      </a>
      <div id="collapseForm11111" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        
          <a class="collapse-item" href="{{route('about.index')}}">About</a>
          <a class="collapse-item" href="{{route('about.create')}}">Add About</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm111111" aria-expanded="true"
        aria-controls="collapseForm111111">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Information</span>
      </a>
      <div id="collapseForm111111" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        
          <a class="collapse-item" href="{{route('information.index')}}">Information</a>
          <a class="collapse-item" href="{{route('information.create')}}">Add Information</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="{{route('message.get')}}">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Messages</span>
      </a>
    
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm11111" aria-expanded="true"
        aria-controls="collapseForm11111">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Admin</span>
      </a>
      <div id="collapseForm11111" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Admin</h6>
          <a class="collapse-item" href="{{ route('register')}}">Add Admin</a>
          <a class="collapse-item" href="{{ route('get.admin')}}">Admin List</a>
          <a class="collapse-item"  href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="fal fa-sign-out"></i>
          {{ __('Logout') }}
          
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </div>
    </li>
 
    <br>
   
  
    <hr class="sidebar-divider">

  
  
 
  </ul>
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
          <h6 class="collapse-header">Post</h6>
          <a class="collapse-item" href="{{route('post.index')}}">All Post</a>
          <a class="collapse-item" href="{{route('post.create')}}">Add Post</a>
        </div>
      </div>
    </li>
  
    <hr class="sidebar-divider">
  
 
  </ul>
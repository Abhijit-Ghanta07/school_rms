<div class="offcanvas offcanvas-start sidebar-nav text-light" data-bs-scroll="true" data-bs-backdrop="false"
  data-bs-theme="dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h3 class="m-0">Admin</h3>
    <button type="button" class="btn-close ms-auto d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">

    <ul class="list-unstyled d-flex flex-column gap-3" id="sidebar-list">
      <li class="">
        <a href="{{route('Admin.Dashbroad')}}" class="btn">
          <span class="me-2">
            <i class="bi bi-grid-1x2-fill"></i>
          </span>
          Dashbroad
        </a>
      </li>
      <li>
        <a href="#" class="btn" data-bs-target="#ad-collapse" aria-controls="#ad-collapse" data-bs-toggle="collapse">
          <span class="me-2"><i class="bi bi-calendar2-x-fill"></i>
          </span>
          Admission
        </a>
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#ad-collapse"
          aria-expanded="false"></button>
        <ul class="collapse" id="ad-collapse">
          <li><a href="{{route('student.add')}}" class="btn">Student Registration </a></li>
         
        </ul>
      </li>
    
      <li>
        <a href="#" class="btn" data-bs-target="#fe-collapse" data-bs-toggle="collapse" aria-controls="#fe-collapse">
          <span class="me-2"><i class="bi bi-cash-coin"></i></span>
          Financial Management
        </a>
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#fe-collapse"
          aria-expanded="false"></button>
        <ul class="collapse" id="fe-collapse">
          <li><a href="#" onclick="update()" class="btn"> Add Fees </a></li>
          <li><a href="#" onclick="update()" class="btn"> See Fees Reports </a></li>
          <li><a href="#" onclick="update()" class="btn"> Techers Payout Reports </a></li>
          <li><a href="#" onclick="update()" class="btn"> Students Fees Reports </a></li>
          <li><a href="#" onclick="update()" class="btn"> Staffs Payout Reports </a></li>
        </ul>
      </li>
      <li>
        <a href="#" class="btn" data-bs-target="#ex-collapse" data-bs-toggle="collapse" aria-controls="#ex-collapse">
          <span class="me-2"><i class="bi bi-file-earmark-excel"></i></span>
          Exams
        </a>
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#ex-collapse"
          aria-expanded="false"></button>
        <ul class="collapse" id="ex-collapse">
          <li><a href="#" onclick="update()" class="btn"> Add Exams </a></li>
          <li><a href="#" onclick="update()" class="btn"> Manage Exams </a></li>
          <li><a href="#" onclick="update()" class="btn"> Exams Reports </a></li>
        </ul>
      </li>
     
      <li>
        <a href="#" class="btn" data-bs-target="#st-collapse" data-bs-toggle="collapse" aria-controls="#st-collapse">
          <span class="me-2"><i class="bi bi-bezier"></i></span> Students
        </a>
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#st-collapse"
          aria-expanded="false"></button>
        <ul class="collapse" id="st-collapse">
          <li><a href="{{route('student.fee')}}" class="btn"> Student Fees </a></li>
          <li><a href="{{route('student.manage')}}" class="btn"> Manage Student </a></li>
        </ul>
      </li>
      
     

      <hr class="hr" />

      <li>
        <a href="#" class="btn border-0">
          <span>
            <img
              src="https://images.pexels.com/photos/15242091/pexels-photo-15242091/free-photo-of-man-posing-to-photo.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="img rounded-circle" alt="" style="width: 30px; height: 30px" />
          </span>
          Profile
        </a>
      </li>
      <li>
        <a href="#" class="btn border-0">
          <span class="me-2"><i class="bi bi-pass-fill"></i> </span>
          Change Password
        </a>
      </li>
      <li>
        <a href="{{route('Admin.Logout')}}" class="btn border-0">
          <span class="me-2"><i class="bi bi-box-arrow-right"></i></span>
          Logout
        </a>
      </li>
    </ul>
  </div>
</div>

<style>
  #sidebar-list li {
    background: transparent;
    transition: 400ms ease;
  }

  #sidebar-list li:hover {
    background-color: #78787879;

  }
</style>

<script>
  function update(){
    alert("Update package \nContact +91-7076299025 \nMail id info@procenturetech.com ");
  }
</script>
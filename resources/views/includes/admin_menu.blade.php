<header id="masthead" class="shadow-sm">
   <div class="container-fluid">
      <nav class="navbar navbar-expand-xl py-0">
         <a href="./">
            <img src="{{asset('assets/images/site-logo.webp')}}" alt="logo" class="desk d-md-block d-none">
            <img src="{{asset('assets/images/logo-mob.png')}}" alt="logo" class="mob d-md-none">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">

                <?php if (in_array($_SESSION["roleId"], [1, 2, 3, 4, 6])): ?>
                   <li class="nav-item dropdown">
                      <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Leads</a>
                      <div class="dropdown-menu">
                         <a class="nav-link" href="customer/request">All Leads</a>
                          <?php if (in_array($_SESSION["roleId"], [1, 2, 3, 4])): ?>
                             <a class="nav-link" href="customer/add">Add Lead</a>
                             <a class="nav-link" href="customer/query">Contact Form Query</a>
                          <?php endif; ?>
                          <?php if (in_array($_SESSION["roleId"], [1, 3, 4, 5, 6])): ?>
                             <a class="nav-link" href="invoice/sequence_payment">Paid Leads</a>
                          <?php endif; ?>
                          <?php if (in_array($_SESSION["roleId"], [4])): ?>
                            <a class="nav-link" href="customer/request/unpaid-leads.php">Unpaid Leads</a>
                          <?php endif; ?>
                      </div>
                   </li>
                <?php endif; ?>

                <?php if (in_array($_SESSION["roleId"], [1, 3, 4])): ?>
                   <li class="nav-item">
                      <a class="nav-link" href="customer/list">Customers</a>
                   </li>
                <?php endif; ?>

                <?php if (in_array($_SESSION["roleId"], [1, 3, 4, 5, 6, 9])): ?>
                   <li class="nav-item dropdown">
                      <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Invoices</a>
                      <div class="dropdown-menu">
                          <?php if (in_array($_SESSION["roleId"], [1, 3, 4, 9])): ?>
                             <a class="nav-link" href="invoice/add">New Invoice</a>
                          <?php endif; ?>
                          <?php if (in_array($_SESSION["roleId"], [1, 3, 4, 5, 9])): ?>
                             <a class="nav-link" href="invoice/list">All Invoices</a>
                          <?php endif; ?>
                          <?php if (in_array($_SESSION["roleId"], [4])): ?>
                             <a class="nav-link" href="invoice/list/paid-inv.php">Paid Invoices</a>
                             <a class="nav-link" href="invoice/list/unpaid-inv.php">Unpaid Invoices</a>
                          <?php endif; ?>
                      </div>
                   </li>
                <?php endif; ?>

                <?php if (in_array($_SESSION["roleId"], [1, 4])): ?>
                   <li class="nav-item dropdown">
                      <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Agents</a>
                      <div class="dropdown-menu">
                         <a class="nav-link" href="employee/add">Add Agent</a>
                         <a class="nav-link" href="employee/list">All Agents</a>
                      </div>
                   </li>
                <?php endif; ?>

                <?php if ($_SESSION["roleId"] == 4): ?>
                   <li class="nav-item">
                      <a class="nav-link" href="categories">Categories</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="entitytype">Entity Type</a>
                   </li>
                   <li class="nav-item dropdown">
                      <a href="javascript:void(0)" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Packages</a>
                      <div class="dropdown-menu">
                         <a class="nav-link" href="packages/list">List</a>
                         <a class="nav-link" href="packages/sub_packages_add">Sub Package Add</a>
                         <a class="nav-link" href="packages/sub_packages_list">Sub Packages List</a>
                         <a class="nav-link" href="packages/condition_list">Condition List</a>
                      </div>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="reviews/list">Reviews</a>
                   </li>
                <?php endif; ?>

               <li class="nav-item">
                  <a class="nav-link" href="profile">Profile</a>
               </li>
            </ul>
         </div>
         <div class="header-btn">
            <div class="dropdown">
               <a href="javascript:void(0)" onclick="updatenoticationCounter()" class="button-round dropdown-toggle px-3" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell me-2"></i><span class="tags" id="usernotificationCounter"></span></a>
               <div class="dropdown-menu notifyDropdown" id="usernotification">
               </div>
            </div>
            <a class="ms-2 button-round" href="logout">Logout</a>
         </div>
      </nav>
   </div>
</header>

<head>
  <style>

    .container {
      max-width: 960px;
    }
    .navbar-survival101 {
      background-color:#2B6DAD;
    }
    /* .navbar-survival101 .navbar-brand {
      margin-right: 2.15rem;
      padding: 3px 0 0 0;
      line-height: 36px;
    } */
    
    .navbar-survival101 .navbar-brand img {
      vertical-align: baseline;
    }
    
    .navbar-expand-lg .navbar-nav .nav-link {
      color: #fff;
    }
    
    .search-box {
      position: relative;
      height: 34px;
    }
    .search-box input {
      border: 0;
      border-radius: 3px !important;
      padding-right: 28px;
      font-size: 15px;
    }
    
    .search-box .input-group-btn {
      position: absolute;
      right: 0;
      top: 0;
      z-index: 999;
    }
    
    .search-box .input-group-btn button {
      background-color: transparent;
      border: 0;
      padding: 4px 8px;
      color: rgba(0,0,0,.4);
      font-size: 20px;
    }
    
    .search-box .input-group-btn button:hover,
    .search-box .input-group-btn button:active,
    .search-box .input-group-btn button:focus {
      color: rgba(0,0,0,.4);
    }
    
    @media (min-width: 992px) {
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .7rem;
        padding-left: .7rem;
      }
      
      .search-box {
        width: 300px !important;
      }
    }
    
    .caroulsel {
      width: 100%;
      overflow: hidden;
      padding: 5px 0 5px 5px;
    }
    
    .caroulsel-wrap {
      white-space: nowrap;
      font-size: 0;
    }
    
    .caroulsel-wrap a {
      display: inline-block;
      width: 134px;
      height: 92px;
      background-color: silver;
      border: #ccc 1px solid;
      margin-right: 5px;
    }
   .bg-Profile{
     border: 0.15em solid #8ca9c7;
     background-color: #88a4c0;
     color: #d0dbe6;
     font-weight: 600;

   }
    
    </style>
      
</head>
 
<nav class="navbar navbar-expand-lg navbar-dark navbar-survival101 fixed-top">
  <div class="container">
    <a class="navbar-brand ml-5" href="#">
      <img src="" width="50" alt="T R I P S A I D">
    </a>
 <div>
    <ul class="navbar-nav  float-right">
    

      <li class="nav-item dropdown ml-5">
          <a class="nav-link dropdown-toggle" href="" id="2"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                  class="fas fa-sign-in-alt"></i>
              <div class="notify">  </div>
          </a>
          <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
              <ul class="list-style-none">
                 
                  <li>
                      <div class="message-center position-relative" style="height:auto">
                          <!-- Message -->
                        
                          @if(Session::has('user'))
                         
                          <a href="/logout" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                           <h5><i class=" fas fa-sign-in-alt text-dark-info"></i> Sign out </h5>
                          </a>
                          @endif
                          @if(!Session::has('user'))
                          <a href="/login" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                            <h5><i class=" fas fa-sign-in-alt text-dark-info"></i> Sign in </h5>
                           </a>
                           @endif
                          <a href="/register_user" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                              <h5><i class="fas fa-registered text-dark-info"></i> Register </h5>
                             </a>
                             <a href="/register_servicemanegar" class=" d-flex align-items-center border-bottom px-3 py-2">
                              <h5><i class=" fas fa-plus-circle text-dark-info"></i> Insert a place </h5>
                             </a>
                             </div>
                             </li>
                      
              </ul>
          </div>
      </li>
      </ul>
  </div>
    
</nav>

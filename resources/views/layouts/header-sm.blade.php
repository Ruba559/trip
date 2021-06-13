
<!DOCTYPE html>
<html dir="ltr" lang="en">

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
        .navbar-expand-lg .navbar-nav .nav-link:hover {
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
     
       .nav-item:hover{
         background-color: #377bbe;
        box-shadow: 0em 0em 0.4em #4c98e4;
        transition: 0.3s
       }
        
        </style>
        
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-survival101 fixed-top p-0">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand ml-5" href="#">
            <img src="" width="50" alt="T R I P S A I D">
          </a>
         
      
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav  ">
              
              <li class="nav-item  p-3">
                <a class="nav-link" href="/room_info">Room Table</a>
              </li>
             
              <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                
              </div>

            </ul>
          
          </div>
     
          </ul>
         
          <a class="nav-link" href="/logout_maneger"><i class="fas fa-sign-out-alt text-white" data-toggle="tooltip" data-placement="bottom" title=" Log out"></i></a> 
        </div>
    
      </nav>

</body>
</html>
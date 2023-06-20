
{{--<!DOCTYPE html>
<html>
    <head>
        <title>Liste des marins</title>


    </head>
    <style>
        * {
          box-sizing: border-box;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
        }

        body {
          font-family: "Helvetica", Arial, sans-serif;
          -webkit-font-smoothing: antialiased;
          background: rgba(71, 147, 227, 1);
        }

        h2 {
          text-align: center;
          font-size: 18px;
          text-transform: uppercase;
          letter-spacing: 1px;
          color: white;
          padding: 30px 0;
        }

        /* Table Styles */

        .table-wrapper {
          margin: 10px 70px 70px;
          box-shadow: 0px 35px 50px rgba(0, 0, 0, 0.2);
          overflow-x: auto;
        }

        .fl-table {
          border-radius: 5px;
          font-size: 12px;
          font-weight: normal;
          border: none;
          border-collapse: collapse;
          width: 100%;
          max-width: 100%;
          white-space: nowrap;
          background-color: white;
        }

        .fl-table td,
        .fl-table th {
          text-align: center;
          padding: 8px;
        }

        .fl-table td {
          border-right: 1px solid #f8f8f8;
          font-size: 12px;
        }

        .fl-table thead th {
          color: #ffffff;
          background: #4fc3a1;
          font-weight: bold;
          padding: 12px;
        }

        .fl-table thead th:nth-child(odd) {
          background: #324960;
        }

        .fl-table tbody tr:nth-child(even) {
          background: #f8f8f8;
        }

        /* Responsive */

        @media (max-width: 767px) {
          .fl-table {
            display: block;
            width: 100%;
          }
          .table-wrapper:before {
            content: "Scroll horizontally >";
            display: block;
            text-align: right;
            font-size: 11px;
            color: white;
            padding: 0 0 10px;
          }
          .fl-table thead,
          .fl-table tbody,
          .fl-table thead th {
            display: block;
          }
          .fl-table thead th:last-child {
            border-bottom: none;
          }
          .fl-table thead {
            float: left;
          }
          .fl-table tbody {
            width: auto;
            position: relative;
            overflow-x: auto;
          }
          .fl-table td,
          .fl-table th {
            padding: 20px 10px;
            height: 60px;
            vertical-align: middle;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: auto;
            width: 120px;
            font-size: 13px;
            text-overflow: ellipsis;
          }
          .fl-table thead th {
            text-align: left;
            border-bottom: 1px solid #f7f7f9;
          }
          .fl-table tbody tr {
            display: table-cell;
          }
          .fl-table tbody tr:nth-child(odd) {
            background: none;
          }
          .fl-table tr:nth-child(even) {
            background: transparent;
          }
          .fl-table tr td:nth-child(odd) {
            background: #f8f8f8;
            border-right: 1px solid #e6e4e4;
          }
          .fl-table tr td:nth-child(even) {
            border-right: 1px solid #e6e4e4;
          }
          .fl-table tbody td {
            display: block;
            text-align: center;
          }
        }


      </style>

    <body>
        @if (session()->has('success'))
        <div style='background: fixed;
        text-align: center;
        border: double;
        background-color: green'>
            <p>
                {{session('success')}}
            </p>
        </div>
    @endif

    <div class="search-container">
        <form action="#" method="GET">
            @csrf
            <input type="text" placeholder="Search..." name="search">

            <button type="submit">Search</button>
        </form>
    </div>

    <div  class="table-wrapper">
        @php
        use Carbon\Carbon;
        @endphp
        
    <table class="fl-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Matricule</th>
            <th>Post travail</th>
            <th>Numero telephone</th>
            <th>Situation</th>
            <th>Visite medical </th>
            <th>Fasicule</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($marins as $marin)
     
        @php
        $lastVisitDate = optional($marin->visitemedical->last())->date_visite;
        $lastFasicule = optional($marin->fasicule->last())->date_debut;

        $twoYearsAgo = Carbon::now()->subYears(2);
        $fiveYearsAgo = Carbon::now()->subYears(5);

        $isMoreThanTwoYears = $lastVisitDate && $lastVisitDate < $twoYearsAgo;
        $isMoreThanFiveYears = $lastFasicule && $lastFasicule < $fiveYearsAgo;

        $situation = optional($marin->situation->last())->situation;
        @endphp
        
   
        <tr>     
            <td>{{ $marin->Nom}}</td>
            <td>{{ $marin->Prenom }}</td>
            <td>{{ $marin->Matricule }}</td>
            <td>{{ $marin->Post_travail }}</td>
            <td>{{ $marin->Numero_telephone }}</td>
            @if (($situation == 'disponible' && $isMoreThanTwoYears) || ($situation == 'disponible' && $isMoreThanFiveYears))
                    <td>
                        {{ $situation }} mais visite ou fasicule mort
                    </td>
                @elseif ($situation == 'disponible')
                    <td>
                        <a href="{{ route('bondembarquement.create', [
                            'matricule' => $marin->Matricule,
                            'wilaya' => $marin->wilaya_de_domicile, 
                            'nom' => $marin->Nom,
                            'prenom' => $marin->Prenom,
                            'numero_fasicule' => optional($marin->fasicule->last())->numero,
                            'debut_fasicule' => optional($marin->fasicule->last())->date_debut,
                            'fin_fasicule' => optional($marin->fasicule->last())->date_expriration,
                            'post_marin' => $marin->Post_travail,
                            'date_visite' => optional($marin->visitemedical->last())->date_visite,
                            'fin_visite' => optional($marin->visitemedical->last())->date_fin,
                        ]) }}">
                            {{ $situation }}
                        </a>
                    </td>
                 @elseif ($situation == 'embarquer')
                <td>
                    <a href="{{ route('bondebarquement.create', [
                        'matricule' => $marin->Matricule,
                        'wilaya' => $marin->wilaya_de_domicile, 
                        'nom' => $marin->Nom,
                        'prenom' => $marin->Prenom,
                        'numero_fasicule' => optional($marin->fasicule->last())->numero,
                        'debut_fasicule' => optional($marin->fasicule->last())->date_debut,
                        'fin_fasicule' => optional($marin->fasicule->last())->date_expriration,
                        'post_marin' => $marin->Post_travail,
                        'date_visite' => optional($marin->visitemedical->last())->date_visite,
                        'fin_visite' => optional($marin->visitemedical->last())->date_fin,
                        'date_embarquement' => optional($marin->bondembarquement->last())->date_embarquement,
                    ]) }}">
                        {{ $situation }}
                    </a>
                </td>

                @else
                    <td>{{ $situation }}</td>
                @endif

             @if ($isMoreThanTwoYears || optional($marin->visitemedical->last()) === null)
               <td>
                <a href="{{ route('visitemedical.create',['matricule' => $marin->Matricule,])}}">Visite medical morte</a>
               </td>
             @else
                 <td>Good</td>
             @endif

             @if ($isMoreThanFiveYears)
                 <td>
                    <a href="{{ route('fasicule.create',['matricule' => $marin->Matricule,])}}">Fasicule morte</a>
                 </td>
             @else
                 <td>Good</td>
             @endif



            </tr>
      
            
        @endforeach


    </tbody>
</table>

</div> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ShipMates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .custom-content{
            display: flex;
            flex-direction: column;
            align-items:center ;
            justify-content: center;
            height: 100vh;
            padding-top: 2rem;
        }
    </style>
</head>
   
        
      
        
        <body>
            <div class="container-fluid position-relative d-flex p-0">
                <!-- Spinner Start -->
                <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <!-- Spinner End -->
        
        
                <!-- Sidebar Start -->
                <div class="sidebar pe-4 pb-3">
                    <nav class="navbar bg-secondary navbar-dark">
                        <a href="index.html" class="navbar-brand mx-4 mb-3">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ShipMates</h3>
                        </a>
                        <div class="d-flex align-items-center ms-4 mb-4">
                            <div class="position-relative">
                                <img class="rounded-circle" src="img/avatar.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">{{auth()->user()->Username}}</h6>
                                <span>{{auth()->user()->profil}}</span>
                            </div>
                        </div>
                        <div class="navbar-nav w-100">
                            <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Données de Base</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="liste-marin" class="dropdown-item">Liste Marins</a>
                                    <a href="liste-navires" class="dropdown-item">Liste Navires</a>
                                    <a href="liste-port" class="dropdown-item">Liste Ports</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Gestion Marin</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="ajoute-marin" class="dropdown-item">Ajoute Marin</a>
                                <a href="fasicule" class="dropdown-item">Ajoute Fascicule</a>
                                <a href="visitemedical" class="dropdown-item">Create Visite Medicale</a>
                                <a href="contrat" class="dropdown-item">Create Contrat</a>
                                <a href="familiarisation" class="dropdown-item">Familiariser</a>
                                <a href="situation" class="dropdown-item">Situation</a>
                                <a href="equipage" class="dropdown-item">Equipage</a>
                            </div>
                            </div>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Embarquement</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="liste_bonembarquement" class="dropdown-item">Embrquer un marin</a>
                                    
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Débarquement</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="liste_bondebarquement" class="dropdown-item">Debarquer un marin</a>
                                    
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Rapport</a>
                                    <div class="dropdown-menu bg-transparent border-0">
                                        <a href="#" class="dropdown-item">Statistique</a>
                                        
                                    </div>

                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Gestion Users</a>
                                        <div class="dropdown-menu bg-transparent border-0">
                                            <a href="register" class="dropdown-item">Create an User</a>
                                        </div>
                                        </div>
                            </div>
                        </div>
                    </nav>
                </div>
        <!-- Sidebar End -->


      
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notificatin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Fascicule de moh is dead</h6>
                            <small>Date ex :</small>
                        </a>
                    </div>
                </div>
 
                   <div class="navbar-nav ms-auto order-1">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/avatar.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{auth()->user()->profil}}</span>
                        </a>
                        @auth
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                
                            <form method="POST" action="/logout" enctype="multipart/form-data">
                                @csrf

                                <button class="dropdown-item" type="submit"> Log Out</button>
            
                        </div>                    
                        @endauth
        
                    </div>
                </div>
            
            </nav>
            
            <!-- Navbar End -->


            
        

            <form action="#" method="GET">
                @csrf
                <input type="text" placeholder="Search..." name="search">
    
                <button type="submit">Search</button>
            </form>
            
            <div class="custom-content">
                <div class="bg-secondary text-center rounded p-4">
                    <form class="mb-4">
                        <div class="input-group justify-content-lg-start">
                            <form action="#" method="GET">
                                @csrf
                            <input class="form-control" type="search" placeholder="Chercher Marin" name="search">
                             <button class="btn btn-primary" type="submit" >Chercher</button>
                            </form>
                        </div>
                    </form>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Liste des marins</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        @php
                        use Carbon\Carbon;
                        @endphp
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Matricule</th>
                                    <th scope="col">Poste de travail</th>
                                    <th scope="col">Situation</th>
                                    <th scope="col">Visite medical</th>
                                    <th scope="col">fasicule</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marins as $marin)
     
                                @php
                                $lastVisitDate = optional($marin->visitemedical->last())->date_visite;
                                $lastFasicule = optional($marin->fasicule->last())->date_debut;
                        
                                $twoYearsAgo = Carbon::now()->subYears(2);
                                $fiveYearsAgo = Carbon::now()->subYears(5);
                        
                                $isMoreThanTwoYears = $lastVisitDate && $lastVisitDate < $twoYearsAgo;
                                $isMoreThanFiveYears = $lastFasicule && $lastFasicule < $fiveYearsAgo;
                        
                                $situation = optional($marin->situation->last())->situation;
                                @endphp
                                
                           
                                <tr>     
                                    <td>{{ $marin->Nom}}</td>
                                    <td>{{ $marin->Prenom }}</td>
                                    <td>{{ $marin->Matricule }}</td>
                                    <td>{{ $marin->Post_travail }}</td>
                                  
                                    @if (($situation == 'disponible' && $isMoreThanTwoYears) || ($situation == 'disponible' && $isMoreThanFiveYears))
                                            <td>
                                                {{ $situation }} mais visite ou fasicule mort
                                            </td>
                                        @elseif ($situation == 'disponible')
                                            <td>
                                                <a href="{{ route('bondembarquement.create', [
                                                    'matricule' => $marin->Matricule,
                                                    'wilaya' => $marin->wilaya_de_domicile, 
                                                    'nom' => $marin->Nom,
                                                    'prenom' => $marin->Prenom,
                                                    'numero_fasicule' => optional($marin->fasicule->last())->numero,
                                                    'debut_fasicule' => optional($marin->fasicule->last())->date_debut,
                                                    'fin_fasicule' => optional($marin->fasicule->last())->date_expriration,
                                                    'post_marin' => $marin->Post_travail,
                                                    'date_visite' => optional($marin->visitemedical->last())->date_visite,
                                                    'fin_visite' => optional($marin->visitemedical->last())->date_fin,
                                                ]) }}">
                                                    {{ $situation }}
                                                </a>
                                            </td>
                                         @elseif ($situation == 'embarquer')
                                        <td>
                                            <a href="{{ route('bondebarquement.create', [
                                                'matricule' => $marin->Matricule,
                                                'wilaya' => $marin->wilaya_de_domicile, 
                                                'nom' => $marin->Nom,
                                                'prenom' => $marin->Prenom,
                                                'numero_fasicule' => optional($marin->fasicule->last())->numero,
                                                'debut_fasicule' => optional($marin->fasicule->last())->date_debut,
                                                'fin_fasicule' => optional($marin->fasicule->last())->date_expriration,
                                                'post_marin' => $marin->Post_travail,
                                                'date_visite' => optional($marin->visitemedical->last())->date_visite,
                                                'fin_visite' => optional($marin->visitemedical->last())->date_fin,
                                                'date_embarquement' => optional($marin->bondembarquement->last())->date_embarquement,
                                            ]) }}">
                                                {{ $situation }}
                                            </a>
                                        </td>
                        
                                        @else
                                            <td>{{ $situation }}</td>
                                        @endif
                        
                                     @if ($isMoreThanTwoYears || optional($marin->visitemedical->last()) === null)
                                       <td>
                                        <a href="{{ route('visitemedical.create',['matricule' => $marin->Matricule,])}}">Visite medical morte</a>
                                       </td>
                                     @else
                                         <td>Good</td>
                                     @endif
                        
                                     @if ($isMoreThanFiveYears)
                                         <td>
                                            <a href="{{ route('fasicule.create',['matricule' => $marin->Matricule,])}}">Fasicule morte</a>
                                         </td>
                                     @else
                                         <td>Good</td>
                                     @endif
                        
                        
                        
                                    </tr>
                              
                                    
                                @endforeach
                        
                        
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
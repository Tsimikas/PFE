
<!DOCTYPE html>
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
            <input type="text" placeholder="Search situation" name="situation">
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

        <tr>      {{--<ajouter un filtre ></ajouter> --}}
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

                 @if ($isMoreThanTwoYears)
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




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

    <table class="fl-table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Matricule</th>
            <th>Date naissance</th>
            <th>Email</th>
            <th>Post travail</th>
            <th>Numero telephone</th>
            <th>Situation</th>
            <th>Date derniere visite</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marins as $marin)
        <tr>
                <td>{{ $marin->Nom}}</td>
                <td>{{ $marin->Prenom }}</td>
                <td>{{ $marin->Matricule }}</td>
                <td>{{ $marin->Date_Naissance }}</td>
                <td>{{ $marin->email }}</td>
                <td>{{ $marin->Post_travail }}</td>
                <td>{{ $marin->Numero_telephone }}</td>
             @if (optional($marin->situation)->situation == 'libre')
             <td> <a href="/bondembarquement" >{{optional($marin->situation)->situation}}</a></td>)
                 @else
                 <td>{{ optional($marin->situation)->situation }}</td>
             @endif
                 <td>
                    {{optional($marin->visitemedical->last())->date_visite}}
                 </td>
                </tr>
        @endforeach
    </tbody>
</table>

</div>

</body>

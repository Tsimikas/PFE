


   <!DOCTYPE html>
<html>
    <head>
        <title>Liste des marins</title>


    </head>
    <style>
        table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 30px;
}

/* Style pour les entêtes de colonnes */
thead th {
  background-color: #f2f2f2;
  border: 1px solid #ddd;
  padding: 12px;
  text-align: left;
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Style pour les cellules de données */
tbody td {
  border: 1px solid #ddd;
  padding: 12px;
  font-size: 14px;
  vertical-align: middle;
}

/* Style pour les liens dans les cellules de données */
tbody td a {
  color: #337ab7;
  text-decoration: none;
}

/* Style pour les liens au survol de la souris */
tbody td a:hover {
  text-decoration: underline;
}

/* Style pour les lignes impaires */
tbody tr:nth-child(odd) {
  background-color: #f9f9f9;
}

/* Style pour les boutons d'actions */
.action-btn {
  background-color: #337ab7;
  color: #fff;
  border: none;
  padding: 6px 12px;
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

/* Style pour les boutons d'actions au survol de la souris */
.action-btn:hover {
  background-color: #23527c;
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

   <table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Matricule</th>
            <th>Date naissance</th>
            <th>Email</th>
            <th>Post travail</th>
            <th>Numero telephone</th>
            <th>Nouveau Post</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marins as $marin)
        @foreach ($marin->familiarisation as $familiarisation)
        <tr>
                <td>{{ $marin->Nom}}</td>
                <td>{{ $marin->Prenom }}</td>
                <td>{{ $marin->Matricule }}</td>
                <td>{{ $marin->Date_Naissance }}</td>
                <td>{{ $marin->email }}</td>
                <td>{{ $marin->Post_travail }}</td>
                <td>{{ $marin->Numero_telephone }}</td>
                <td>{{$familiarisation->nouveau_post}}</td>
                </tr>
        @endforeach
        @endforeach
    </tbody>
        <h1> </h1>
</table>



</body>
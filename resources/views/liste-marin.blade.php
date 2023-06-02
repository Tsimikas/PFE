


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

.search-container {
  display: flex;
  align-items: center;
}

input[type="text"] {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-right: 8px;
}

button[type="submit"] {
  padding: 8px 12px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
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



</body>

<!DOCTYPE html>
<html>
    <head>
        <title>Liste familiarise</title>

        
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
   <table>
    <thead>
        <tr>
            <th>Post actuel</th>
            <th>Nouveau post</th>
            <th>Cas de Familiarisation</th>
            <th>le marin associe</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($familiarisations as $familiarisation)
            <tr>
                <td>{{ $familiarisation->post_actuel}}</td>               
                <td>{{ $familiarisation->nouveau_post }}</td>
                <td>{{ $familiarisation->cas_familiarisation }}</td>
                <td>{{$familiarisation->marin->Nom}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
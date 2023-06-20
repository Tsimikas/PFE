

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>ShipMates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Matricule</th>
            <th>Fonction</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($situations as $situation)
            <tr>
                <td>{{ $situation->marin->Nom}}</td>               
                <td>{{ $situation->marin->Prenom}}</td>
                <td>{{ $situation->marin->Matricule }}</td>
                <td>{{ $situation->marin->Post_travail}}</td>
                <td>
                    <a href="{{ route('situation-dispo',[
                        'marin' => $situation->marin->Matricule
                    ])}}">
                    ARRETE CONGE
                    </a>
                </td>
            </tr>
         
        @endforeach
    </tbody>
</table>

  </body>
</html>



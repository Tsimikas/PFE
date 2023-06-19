<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Marins</th>
            <th>Date debut membre</th>
            <th> Date fin membre</th>
        </tr>
    </thead>
    <tbody>
  @foreach ($equipages as $equipage )
  @if ($equipage->navire->nom == 'Tariq ibn Ziyad')
  <tr>
    <td>
       {{ $equipage->navire->nom}}
     </td>

     <td>
       {{ $equipage->marin->Nom}}
     </td>
     
     <td>
       {{ $equipage->date_debut_membre}}
     </td>

     <td>
       {{ $equipage->date_fin_membre}}
     </td>

 </tr>
 @elseif ($equipage->navire->nom == 'El Djazair II')
 
 @endif
 @endforeach
   </tbody>
</table> 
  

  




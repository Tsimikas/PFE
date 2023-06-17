@component('mail::message')

# Your Fasicule is about to expire

Hi {{ $marin->Nom }} {{ $marin->Prenom}}, <br>
Your Fasicule is about to expire on {{ $fasicule->date_expriration }}<br>
Please renew your fasicule before it expires. <br>
Thank you, <br>
The Team
@endcomponent
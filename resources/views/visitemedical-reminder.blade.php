
@component('mail::message')

# Your visitemedical is about to expire

Hi {{ $marin->Nom }},
Your visitemedical is about to expire on {{ $visiteMedical->date_fin }}
Please renew your visitemedical before it expires. <br>
Thank you, <br>
The Team
@endcomponent




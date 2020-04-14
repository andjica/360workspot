<div style="width:100%; height:30px; background:orange; padding:5px; border-radius:5px; color:white; text-align:center">
    <b class="text-info">Hoop 4 EU B.V.</b> &nbsp; &nbsp;<i class="fas fa-phone text-warning"></i> 
    D-inlineTelefoon: 0180 – 531191, &nbsp; <i class="fas fa-map-marker-alt text-warning"></i> 
    Deventerseweg 50, 2994LD Barendrecht </div>
</div>

 
<div style="height:100%" style="background-image: url('{{asset('/')}}img/job.jpg')">
<center>
<img src="{{asset('/')}}img/logo4.jpg" class="img-fluid" style="margin:0px auto">
<div style="background:#f5f2e4; width:50%; padding:10px; margin-top:25px;">
    <p><b>Er is een nieuwe aanmelding voor de Vacature:</b>  {{ $job['firstname'] }} {{$job['lastname']}}<br>
    <b>Vacature Naam:</b>{{ $job['jobname'] }}<br>
    <b>Vacature nummer:</b> {{ $job['jobid'] }}<br>
    <b>Branche: {{$job['category']}}</b><br>
    <b>Stad: {{$job['city']}}</b><br>
</p>
</div>
<img class="img-fluid rounded" src="{{asset('/')}}img/job.jpg" alt="hoop4eu vacature" style="width:50%">

</center>

</div>   




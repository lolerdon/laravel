<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1 class="text-3xl">All Projects</h1>
<ul>
   @foreach($projectData as $Data)
       <li>{{$Data->name }} - {{$Data->project_code}} - {{$Data->status}}
       @if($Data->start_date)
           - {{$Data->start_date}}
       @endif
       </li>

   @endforeach
</ul>
<h1 class="text-3xl">All Sites</h1>
<ul>
    @foreach($siteData as $Data)
        <li>{{$Data->name }} - {{$Data->site_code}} - {{$Data->city}} - {{$Data->country}}
        </li>
    @endforeach
</ul>
</body>
</html>

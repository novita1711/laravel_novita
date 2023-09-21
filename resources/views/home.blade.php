<!DOCTYPE html>
<html lang='lang'>
<head>
    <meta charset="utf-8">
    <meta http-equid="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>tentang kita</title>
</head>
<body>
    <h2>Novita Sari</h2>
    <h2>SMK N 1 SAYUNG, {{$nama}}, {{$kelas}}</h2>

    @if($nama=='admin')
    <a href ="">Anda Bukan ADMIN dan USER</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman User</a>
    @else
    <h2> Anda Bukan Admin dan User</h2>
    @endif

    @switch($i)
    @case(1)
    first case...
    @break 

    @case(2)
    second case...
     @break

     @default
     Default case...
     @endswitch


     <br>
     @for ($i = 1; $i <= 5; $i++)
     {{ $i }}</br>
     @endfor

    <br>
     @foreach ($buah as $nama)
     {{ $nama }}</br>
     @endforeach


</body>
</html>
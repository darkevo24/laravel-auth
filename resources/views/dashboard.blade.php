<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="flex flex-col justify-center items-center">
    <div class = "">
<button  type="button" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"><a href="insert">Insert</a></button>
<table class="table">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">username</th>
      <th scope="col">phone</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $i)
      <tr>
          <td>{{$i->id}}</td>
        <td>{{$i->email}}</td>
  <td>{{$i->username}}</td>
  <td>{{$i->phone}}</td>
  <td><a href={{"/edit/".$i->id}} >Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>    
</div>
</body>
</html>
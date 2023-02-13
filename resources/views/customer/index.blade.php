<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Customers</title>
</head>
<body>
    <h3>Customer Data</h3>
    <ul>
    @foreach($customers as $customer)
        <li>{{$customer->firstName}} {{$customer->lastName}}</li>
        <li>{{$customer->email}}</li>
        <li>{{$customer->contactNumber}}</li>
        <li>{{$customer->address}}</li>
    @endforeach
    </ul>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      @foreach($customers as $customer)
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->contactNumber}}</td>
      <td>{{$customer->address}}</td>
      <td><button type="button" class="btn btn-primary">Edit></td>
      <td><button type="button" class="btn btn-primary">Delete></td>
      @endforeach
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</body>
</html>
 



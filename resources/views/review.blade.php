<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../navbarU/style.css">
  <link rel="stylesheet" href="../styleReview/style.css">
  <title>Document</title>
</head>
<body>
  <h3>TESTIMONIALS WEBSITE <a href="/home">LINGKAR BUDAYA</a></h3>
  <div class="main-content">
  <div class="list">
        @foreach($ratingStar as $rating)
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                  <h5>Rating : {{ $rating->ratingStar }}/5</h5>
                  <h4>"{{  $rating->comment  }}"</h4>
                  <p>By {{  $rating->name  }} at {{ $rating->created_at->diffForHumans() }}</p>
              </div>

            </div>
        </div>
      @endforeach
  </div>
  </div>

  
</body>
</html>
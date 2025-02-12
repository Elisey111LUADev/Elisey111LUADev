<!-- filepath: /c:/xampp/htdocs/eindwerk/index.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>U.EXPLORE</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/webshop.css">


  </head>
  <body class="bg-dark-custom text-white d-flex flex-column min-vh-100">
    <?php require_once './include/navbar.php'; ?>
   
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/carousel/1-1.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="image/carousel/2-2.jpg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="image/carousel/3-3.jpg" class="d-block w-100" alt="Slide 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Info Sectie -->
    <section id="info" class="container mt-5 centered-box">
      <h2>Welkom bij U.Explore</h2>
      <p>Dé webshop voor urban explorers en avonturiers die de verborgen en vergeten plekken van de wereld willen ontdekken. Wij zijn gepassioneerd door urban exploring (urbex) en bieden hoogwaardige uitrusting, kleding en accessoires die je helpen om je expedities veiliger en beter voorbereid aan te gaan.</p>

      <p>Bij U.Explore draait alles om avontuur, ontdekking en respect voor verlaten locaties. Of je nu een beginnende explorer bent of een ervaren ontdekkingsreiziger, wij hebben de plekken die je nodig hebt om jouw urbex-ervaring naar een hoger niveau te tillen.</p>
    </section>

 

    <!-- Waarschuwing Sectie -->
    <section id="warning" class="container centered-box">
      <h2>⚠️ Belangrijke waarschuwing</h2>
      <p>Urban exploring brengt risico’s met zich mee. Verlaten gebouwen en locaties kunnen gevaarlijk zijn vanwege instortingsgevaar, onstabiele vloeren, blootstelling aan schadelijke stoffen en andere onvoorziene gevaren.</p>

      <p>JOUW VEILIGHEID is JOUW VERANTWOORDELIJKHEID. U.Explore biedt enkel informatie over urbex-locaties en geen garanties of bescherming tegen de risico’s die hiermee gepaard gaan. Door deel te nemen aan urban exploring, doe je dit volledig op eigen risico. Wij zijn niet verantwoordelijk voor eventuele verwondingen, juridische consequenties of andere problemen die kunnen voortvloeien uit jouw verkenningen.</p>

      <p>Ga altijd voorbereid op pad, neem de juiste veiligheidsmaatregelen en respecteer de wet en de locaties die je bezoekt.</p>  
    </section>

    <section id="contact" >
    <?php require_once './include/footer.php'; ?>
    </section>
   
  </body>
</html>
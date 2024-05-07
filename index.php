<?php
 include __DIR__ . '/Views/header.php'; 
 include __DIR__ . '/Models/Movie.php';
 include __DIR__ . '/Models/Book.php';
 include __DIR__ . '/Models/Category.php';
 $cat = new Category('Action');
 $movies = [
    new Movie('Star Wars', 'en', $fantascienza, "https://images.everyeye.it/img-notizie/ecco-linguaggi-programmazione-prova-futuro-v7-531835.jpg", 10,  5, $cat), ),
    new Movie('Harry potter', 'en', $fantascienza, "https://images.everyeye.it/img-notizie/ecco-linguaggi-programmazione-prova-futuro-v7-531835.jpg", 10,  5, $cat) )
 ];
 $books = [
    new Book('dune', 400, $fantascienza, 'https://images.everyeye.it/img-notizie/ecco-linguaggi-programmazione-prova-futuro-v7-531835.jpg', 10, 5, $cat),
    new Book('dune 2', 400, $fantascienza, 'https://images.everyeye.it/img-notizie/ecco-linguaggi-programmazione-prova-futuro-v7-531835.jpg', 10, 5, $cat)
 ];
 

?>

<main class="container">


   <section>
    <h2>Movies</h2>
    <div class="row">
        <?php foreach($movies as $movie) { ?>
        <div class="col-12 col-md-4 col-lg-3">
        <div class="card" >
  <img src="<?=$movie->cover?>" class="card-img-top" alt="<?=$movie->title?>">
  <div class="card-body">
    <h5 class="card-title"><?= $movie->title?></h5>
    <p class="card-text"><?= $movie->language?></p>
    <p class="card-text"><?= $movie->category->name?></p>

    <div><?=$movie->getVote()?></div>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <?php } ?>
    </div>
   </section>



   <section>
    <h2>Books</h2>
    <div class="row">
        <?php foreach($bookss as $book) { ?>
        <div class="col-12 col-md-4 col-lg-3">

        </div>
        <?php } ?>
    </div>
   </section>


</main>

<?php include __DIR__ . '/Views/footer.php'; ?>
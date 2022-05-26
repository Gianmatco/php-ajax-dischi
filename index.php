<?php
include  __DIR__.'/database.php';
$title = 'Home page';
include __DIR__.'/partials/header.php';
//var_dump(__DIR__); percorso 

?>

    <main class="container">
        <h1 class="text-center">dischi</h1>
        <div class="row">
            <?php foreach($dischi as $disco){?>
            <div class="col-3">
                <div class="card" >
                    <img src="<?php echo $disco['poster']?>" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-center"><?php echo $disco['title']?></h5>
                        <p class="card-text text-center"><?php echo $disco['author']?></p>
                        <p class="card-text text-center"><?php echo $disco['year']?></p>
                        
                    </div>
                </div>
            </div>
            <?php };?>
        </div>
    </main>

<?php include __DIR__.'/partials/footer.php'; ?>


<?php // include database
include __DIR__ . '/partials/show/server.php';

// sezione head
include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4" >
                <h1 class="text-secondary">Details Room <?php echo $room['room_number'];?></h1>
            </header>

            <div class="card mb-5">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        ID: <?php echo $room['id'];?>
                    </li>
                    <li class="list-group-item">
                        ROOM NUMBER: <?php echo $room['room_number'];?>
                    </li>
                    <li class="list-group-item">
                        BEDS: <?php echo $room['beds'];?>
                    </li>
                    <li class="list-group-item">
                        FLOOR: <?php echo $room['floor'];?>
                    </li>
                    <li class="list-group-item">
                        CREATED: <?php echo $room['created_at'];?>
                    </li>
                    <li class="list-group-item">
                        UPDATED: <?php echo $room['updated_at'];?>
                    </li>
                </ul>
            </div>

            <a class="btn btn-secondary" href="<?php echo $base_path; ?>edit.php?id=<?php echo $room['id'];?>">Update</a>

        </div>
    </div>
</main>
    
<?php 
include __DIR__ . '/partials/templates/footer.php'
?>
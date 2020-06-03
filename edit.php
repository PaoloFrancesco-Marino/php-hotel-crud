<?php // include database
include_once __DIR__ . '/partials/update/server-edit.php';
// sezione head
include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4" >
                <h1 class="text-secondary">Edit Room </h1>
            </header>

            <form action="./partials/update/server-update.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room Number</label>
                    <input class="form-control" type="number" name="room_number" id="room_number" value="<?php echo $room['room_number']; ?>">
                </div>
                <div class="form-group">
                    <label for="beds">Beds Number</label>
                    <input class="form-control" type="number" name="beds" id="beds" value="<?php echo $room['beds']; ?>">
                </div>
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input class="form-control" type="number" name="floor" id="floor" value="<?php echo $room['floor']; ?>">
                </div>

                <div class="form-group text-right">
                    <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                    <input class="btn btn-secondary" type="submit" value="Send">
                </div>
            </form>

            <a class="btn btn-secondary" href="<?php echo $base_path; ?>show.php?id=<?php echo $room['id'];?>">Details Room</a>
        </div>
    </div>
</main>
    
<?php 
include __DIR__ . '/partials/templates/footer.php'
?>
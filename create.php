<?php 

// sezione head
include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4" >
                <h1 class="text-secondary">Create New Room </h1>
            </header>

            <form action="./partials/create/server.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room Number</label>
                    <input class="form-control" type="number" name="room_number" id="room_number" placeholder="Insert Room Number">
                </div>
                <div class="form-group">
                    <label for="beds">Beds Number</label>
                    <input class="form-control" type="number" name="beds" id="beds" placeholder="Insert Beds Number">
                </div>
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input class="form-control" type="number" name="floor" id="floor" placeholder="Insert Floor">
                </div>

                <div class="form-group text-right">
                    <input class="btn btn-secondary" type="submit" value="Create">
                </div>
            </form>
        </div>
    </div>
</main>
    
<?php 
include __DIR__ . '/partials/templates/footer.php'
?>
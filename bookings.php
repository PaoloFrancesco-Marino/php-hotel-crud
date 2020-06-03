<?php // include database
include __DIR__ . '/partials/bookings/server.php';

// sezione head
include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4" >
                <h1 class="text-primary">Hotel Bookings</h1>
            </header>



            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID ROOM</th>
                        <th>CREATED</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($bookings as $booking) { ?>
                    <tr>
                        <td><?php echo $booking['id'];?></td>
                        <td><?php echo $booking['stanza_id'];?></td>
                        <td><?php echo $booking['created_at'];?></td>
                        <td class="text-right">
                            <a class="text-success" href="#">View</a>
                        </td>
                        <td class="text-right">
                            <a  class="text-primary"href="#">Update</a>
                        </td>
                        <td class="text-right">
                            <a class="text-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table><!-- ./table -->
        </div>
    </div><!-- ./Row -->
</main><!-- ./Main -->

    
<?php 
include __DIR__ . '/partials/templates/footer.php'
?>
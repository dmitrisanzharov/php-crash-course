<?php include 'inc/header.php'; ?>

<?php


?>
<h2>Feedback</h2>

<?php if (empty($myArr)) : ?>
    <p>there is no feedback</p>
<?php endif; ?>

<?php foreach ($myArr as $el) : ?>

    <div class="card my-3">
        <div class="card-body">
            <p><?php echo $el['body']; ?></p>
            <p>by <?php echo $el['name']; ?> on <?php echo $el['date']; ?></p>

        </div>
    </div>

<?php endforeach; ?>


<?php include 'inc/footer.php'; ?>
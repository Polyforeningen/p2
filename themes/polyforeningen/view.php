<?php  
    defined('C5_EXECUTE') or die("Access Denied.");
    $this->inc('elements/header.php');
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
<?php echo $innerContent; ?>
            </div>
        </div>
    </div>
</main>

<?php
    $this->inc('elements/footer.php');
?>


<?= $this->include("templates/components/header") ?>
<?= $this->include("templates/components/sidebar") ?>
    
    <div class="page-heading">
        <h3><?= $judulhalaman ?></h3>
    </div>
    <div class="page-content">
        <?= $this->renderSection('content') ?>
    </div>

<?= $this->include("templates/components/modal") ?>
<?= $this->include("templates/components/footer") ?>
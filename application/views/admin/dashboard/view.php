<div class="container-fluid">
    <h2 class="mt-4">Administrator</h2>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-envelope-open-text"></i>
                    <?php echo $title ?>
            </div>
<div class="form-group form-lg">
<br/>
<div class="col-md-7">
            <strong>Kepada</strong> : Administrator<br/>
            <strong>Dari</strong> : <?php echo $view->nama ?><br/>
            <strong>Tanggal</strong> : <?php echo $view->tanggal_kirim ?>
</div>

        <div class="col-md-5"">
            <p>
            </p>
            <p>
                <?php echo $view->pesan ?>
            </p>
        </div>

</div>
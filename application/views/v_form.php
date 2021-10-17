<!DOCTYPE html>

<head>
    <title>Membuat Form Validation</title>
</head>

<body>
        <h1>Membuat Form Validation dengan CodeIgniter | MalasNgoding.com</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('form/aksi'); ?>
        <label for="">Nama</label><br/>
        <input type="text" name="nama"><br/>
        <?php echo form_error('nama') ?>
        <label for="">Email</label><br/>
        <input type="text" name="email"><br/>
        <?php echo form_error('email') ?>
        <label for="">Konfirmasi Email</label><br/>
        <input type="text" name="konfir_email"><br/>
        <?php echo form_error('konfir_email') ?>
        <input type="submit" value="Simpan"><br/>
</body>
</html>
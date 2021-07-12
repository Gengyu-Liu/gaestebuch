
<?= form_open(''); ?>
    <input type="text" name="name" placeholder="username" value="<?= $name ?>" />
    <input type="text" name="email" placeholder="email" value="<?= $email ?>" />
    <textarea name="kommentar"><?= $kommentar ?></textarea>
    <?= form_input(['type'=>'submit','value'=>$submit])?>
</form>
<?= validation_errors(); ?>


    
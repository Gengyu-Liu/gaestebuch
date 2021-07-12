<dialog open>
    <p>
        Möchten sie den Datensatz mit ID <?= $id ?> wirklich unwiderruflich löschen?
    </p>
    <div>
        <a href="<?= site_url('delete/'.$id);?>"><button>Ja</button></a>
        <a href=""><button>Nein</button></a>
    </div>   
</dialog>


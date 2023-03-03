<h3 class="text-center"><?php echo "Aggiungi Attività"; ?></h3>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 text-center edit-form">
        <form>
            <div class="mb-3">
                <label for="codice" class="form-label">Inserisci il codice di 6 cifre</label>
                <input type="text" class="form-control" id="inputCodice">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Inserisci il nome dell'attività</label>
                <input type="text" class="form-control" id="inputNome">
            </div>
            <div class="mb-3">
                <label for="cfu" class="form-label">Inserisci quanti CFU vale l'attività</label>
                <input type="number" class="form-control" id="inputCFU">
            </div>
            <button type="submit" class="btn btn-outline-dark">Aggiungi</button>
        </form>
    </div>
    <div class="col-3"></div>
</div>
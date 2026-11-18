<div class="container my-4">
    <div class="card">
        <div class="card-header fs-4 fw-bold">
            Spalte erstellen
        </div>
        <div class="card-body" style="min-height: 80px;">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Spalten-Bezeichnung</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Bezeichnung für die Spalte">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Spaltenbeschreibung</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Sortid</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Sortid angeben">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Board auswählen</label>
                    <div class="col-sm-9">
                        <select class="form-select">
                            <option selected>Allgemeine Todos</option>
                            <option>Projekt A</option>
                            <option>Projekt B</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-success me-2">Speichern</button>
                    <button type="button" class="btn btn-secondary">Abbrechen</button>
                </div>
            </form>
        </div>
    </div>
</div>
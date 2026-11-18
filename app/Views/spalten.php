<div class="container my-4">
    <div class="card">
        <div class="card-header fs-4 fw-bold">
            Spalten
        </div>
        <div class="card-body" style="min-height: 80px;">
            <a href="<?= base_url('spalten-erstellen') ?>" class="btn btn-primary mb-3">Erstellen</a>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Board</th>
                        <th scope="col">Sortid</th>
                        <th scope="col">Spalte</th>
                        <th scope="col">Spaltenbeschreibung</th>
                        <th scope="col">Bearbeiten</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Allgemeine Todos</td>
                        <td>100</td>
                        <td>Zu besprechen</td>
                        <td>Noch zu besprechende Todos</td>
                        <td>
                            <a href="#" class="text-primary me-2"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#" class="text-primary"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Allgemeine Todos</td>
                        <td>200</td>
                        <td>In Bearbeitung</td>
                        <td>Todos die aktuell bearbeitet werden</td>
                        <td>
                            <a href="#" class="text-primary me-2"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#" class="text-primary"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
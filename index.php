<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/journal/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid m-1">
            <a class="navbar-brand" href="#"><h2><i class="fa-solid fa-graduation-cap mx-2"></i>Colegio </h2> </a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        <!-- Información del alumno -->
        <div class="text-center mb-4">
            <h2>Catalina Pérez</h2>
            <p class="text-muted">DNI: 40.123.456</p>
        </div>

        <!-- Cards -->
        <div class="row row-cols-1 m-4 g-4">
            <!-- Card 1: Cuota Diciembre -->
            <div class="col-12 m-2">
                <a href="https://pagoseduc.com/api/index.php?id_factura=MTAzMzMwOTU%3D" target="_blank" class="card-link">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h5 class="col-4 mb-0 card-title">Cuota Diciembre</h5>
                            <p class="col-4 mb-0 card-text">$50,000</p>
                            <span class="btn btn-primary">Pagar</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 2: Materiales -->
            <div class="col-12 m-2">
                <a href="https://pagoseduc.com/api/index.php?id_factura=MTAzMzMwOTY%3D" target="_blank" class="card-link">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h5 class="col-4 mb-0 card-title">Materiales</h5>
                            <p class="col-4 mb-0 card-text">$15,000</p>
                            <span class="btn btn-primary">Pagar</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3: Deuda 2024 -->
            <div class="col-12 m-2">
                <a href="https://pagoseduc.com/api/index.php?id_factura=MTAzMzMwOTc%3D"  target="_blank" class="card-link">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h5 class="col-4 mb-0 card-title">Deuda 2024</h5>
                            <p class="col-4 mb-0 card-text">$70,000</p>
                            <span class="btn btn-primary">Pagar</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 4: Deuda 2023 -->
            <div class="col-12 m-2">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="col-4 mb-0 card-title">Deuda 2023</h5>
                        <p class="col-4 mb-0 card-text">$400,000</p>
                        <button class="btn btn-outline-success" disabled>Abonada</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
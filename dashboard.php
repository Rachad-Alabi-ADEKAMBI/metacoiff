<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>MetaCoiff - Accueil</title>
</head>

<body>
    <?php include 'parts/header.php'; ?>
    <div class="main">
        <div class="container bg-light">
            <div class="row dashboard">
                <div class="col-sm-12 col-md-3 dashboard__menu">
                    <?php include 'parts/menu.php'; ?>
                </div>

                <div class="col-sm-12 col-md-9 dashboard__content">
                    <p class="text">/tableau de bord</p>
                    <div class="">
                        <p class="text text-bold">Mardi 15 Juin 2023</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <div class="card">
                                    <img class="card-img-top" src="public/images/0ca6f3c43d3ca79a66945c464b16017c.jpeg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Vendredi 12 Fev 15h</h5>
                                        <p class="card-text">Coupe + shampoing</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="bi bi-alarm"></i> 20 min</li>
                                        <li class="list-group-item"><i class="bi bi-cash"></i> 30 eur</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="btn btn btn-danger">Annuler le rdv</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3">
                                <div class="card">
                                    <img class=" card-img-top" src="public/images/0ca6f3c43d3ca79a66945c464b16017c.jpeg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Vendredi 12 Fev 15h</h5>
                                        <p class="card-text">Coupe + shampoing</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="bi bi-alarm"></i> 20 min <i
                                                class="bi bi-cash"></i> 30 eur</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="btn btn btn-danger">Annuler le rdv</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3">
                                <div class="card">
                                    <img class=" card-img-top" src="public/images/0ca6f3c43d3ca79a66945c464b16017c.jpeg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Vendredi 12 Fev 15h</h5>
                                        <p class="card-text">Coupe + shampoing</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="bi bi-alarm"></i> 20 min</li>
                                        <li class="list-group-item"><i class="bi bi-cash"></i> 30 eur</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="btn btn btn-danger">Annuler le rdv</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-3">
                                <div class="card">
                                    <img class=" card-img-top" src="public/images/0ca6f3c43d3ca79a66945c464b16017c.jpeg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Vendredi 12 Fev 15h</h5>
                                        <p class="card-text">Coupe + shampoing</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="bi bi-alarm"></i> 20 min</li>
                                        <li class="list-group-item"><i class="bi bi-cash"></i> 30 eur</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="btn btn btn-danger">Annuler le rdv</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <?php include 'parts/footer.php'; ?>
        <script src="swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script src='public/js/script.js'></script>

        <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {
                    nbr: 0,
                    details: []
                }
            },
            mounted: function() {
                this.displayHome();

            },
            methods: {
                displayHome() {
                    this.showHome = true;
                },
                getImgUrl(pic) {
                    return "public/img/" + pic;
                },
                getPic(pic) {
                    window.location.replace('public/img/' + pic);
                },
                format(num) {
                    let res = new Intl.NumberFormat('fr-FR', {
                        maximumSignificantDigits: 3
                    }).format(num);
                    return res;
                }
            }
        }).mount('#app')
        </script>
</body>

</html>
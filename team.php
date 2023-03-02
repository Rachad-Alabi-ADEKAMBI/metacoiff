<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>MetaCoiff - Equipe</title>
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
                    <p class="text text-left">/Liste de mon équipe</p>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">
                                Ajouter
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive mt-2">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Coiffeur</th>
                                            <th scope="col">Prestations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Nom">Ali</td>
                                            <td data-label="Nombre">145</td>
                                            <td>
                                                <a href="">
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Nom">Cali</td>
                                            <td data-label="Nombre">215</td>
                                            <td>
                                                <a href="">
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Nom">Abdoul</td>
                                            <td data-label="Nombre">250</td>
                                            <td>
                                                <a href="">
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
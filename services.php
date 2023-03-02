<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>MetaCoiff - Prestations</title>
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
                    <p class="text text-left">/Liste des prestations</p>
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
                                            <th scope="col">Nom</th>
                                            <th scope="col">Montant TTC</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Nom">Coupe simple</td>
                                            <td data-label="Nombre">15 eur</td>
                                            <td data-label="Nom"> <img src="/public/images/blog2.jpg" alt=""></td>
                                            <td data-label="Nombre">Coupe simpe avec ...</td>
                                            <td>
                                                <a href="">
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Nom">Greffe</td>
                                            <td data-label="Nombre">60 eur</td>
                                            <td data-label="Nom"> <img src="/public/images/blog1.jpg" alt=""></td>
                                            <td data-label="Nombre">Pose de greffes ...</td>
                                            <td>
                                                <a href="">
                                                    Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="Nom">Locks</td>
                                            <td data-label="Nombre">45 eur</td>
                                            <td data-label="Nom"> <img src="/public/images/blog1.jpg" alt=""></td>
                                            <td data-label="Nombre">Pose de locks ...</td>
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
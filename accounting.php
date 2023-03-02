<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>MetaCoiff - Comptabilité</title>
</head>

<body>
    <?php include 'parts/header.php'; ?>
    <div class="main">
        <section>
            <div class="container bg-light">
                <div class="row dashboard">
                    <div class="col-sm-12 col-md-3 dashboard__menu">
                        <?php include 'parts/menu.php'; ?>
                    </div>

                    <div class="col-sm-12 col-md-9 dashboard__content">
                        <p class="text text-left">/Comptabilité</p>
                        <div class="row">
                            <div class="buttons">
                                <button class="btn-primary">
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
                                                <th scope="col">Date</th>
                                                <th scope="col">Libellé</th>
                                                <th scope="col">Montant TTC</th>
                                                <th scope="col">Solde</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">05/03/2023</th>
                                                <td data-label="Date">Coiffure simple</td>
                                                <td data-label="Name">15 eur TTC</td>
                                                <td data-label="Balance">560 eur TTC</td>
                                                <td>
                                                    <a href="">
                                                        Supprimer
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">05/03/2023</th>
                                                <td data-label="Date">Greffe</td>
                                                <td data-label="Name">45 eur TTC</td>
                                                <td data-label="Balance">545 eur TTC</td>
                                                <td>
                                                    <a href="">
                                                        Supprimer
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">04/03/2023</th>
                                                <td data-label="Date">Locks</td>
                                                <td data-label="Name">30 eur TTC</td>
                                                <td data-label="Balance">500 eur TTC</td>
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
        </section>
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
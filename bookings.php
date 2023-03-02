<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>MetaCoiff - Liste des réservations</title>
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
                        <p class="text text-left">/liste des réservations</p>
                        <div class="row">
                            <div class="col">
                                <div class="table-responsive mt-2">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Prestation</th>
                                                <th scope="col">Coiffeur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">05/03/2023 à 15h00 </th>
                                                <td data-label="Date">Coiffure simple</td>
                                                <td data-label="Name">Abdoul</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">05/03/2023 à 15h30 </th>
                                                <td data-label="Date">Teinte</td>
                                                <td data-label="Name">Ali</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">05/03/2023 à 16h00 </th>
                                                <td data-label="Date">Coiffure simple</td>
                                                <td data-label="Name">Cali</td>
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
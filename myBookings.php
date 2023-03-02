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
                    <p class="text text-left">/Mes créneaux</p>
                    <div class="">
                        <div class="row">
                            <div class="col-12">
                                Créneaux
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
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'parts/meta.php'; ?>

    <title>MetaCoiff - Réservation</title>
</head>

<body>
    <?php include 'parts/header.php'; ?>
    <div class="main">
        <div class="row booking" id="app">
            <div class="col-sm-12 col-md-10 mx-auto booking__item bg-light mt-3 pt-3">
                <h1 class="title text-center mx-auto">
                    Réservation
                </h1>

                <div class="booking__item__top">
                    <ul>
                        <li>
                            <button class="btn btn-primary" @click="displayServices()">
                                Prestation
                            </button>
                        </li>

                        <li>
                            <button class="btn btn-primary" @click="displayCalendar()">
                                Jour
                            </button>
                        </li>

                        <li>
                            <button class="btn btn-primary" @click="displayBarber()">
                                Coiffeur
                            </button>
                        </li>

                        <li>
                            <a class="btn btn-primary">
                                Récapitulatif
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="booking__item__main ">
                    <div class="booking__main__item" v-if='showServices'>
                        <h1 class="subtitle">
                            Choix de la prestation
                        </h1> <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-3" v-for='detail in services' :key='detail.id'>
                                <div class="card" @click='displayCalendar()'>
                                    <img class=" card-img-top" :src="getImgUrl(detail.image)" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{detail.name}}</h5>
                                        <p class="card-text">{{detail.description}}</p>
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
                        </div>
                    </div>

                    <div class="booking__main__item bg-light" v-if='showCalendar'>
                        <h1 class="subtitle">
                            Choix de la date
                        </h1> <br>

                        <div class="row text-center">
                            <div class="days mx-auto text-center">
                                <div class="day">
                                    <p class="text text-left fw-bold">
                                        Lundi <br> 03/03/2023
                                    </p>
                                </div>

                                <div class="day">
                                    <p class="text text-left fw-bold">
                                        Mardi <br> 04/03/2023
                                    </p>
                                </div>

                                <div class="day">
                                    <p class="text text-left fw-bold">
                                        Mercredi <br> 05/03/2023
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-auto text-center">
                            <div class="col-sm-12 col-md-8 mx-auto">
                                <div class="times">
                                    <div class="time">
                                        08:00
                                    </div>

                                    <div class="time">
                                        08:30
                                    </div>

                                    <div class="time">
                                        09:00
                                    </div>

                                    <div class="time">
                                        09:30
                                    </div>

                                    <div class="time">
                                        10:00
                                    </div>

                                    <div class="time">
                                        10:30
                                    </div>
                                    <div class="time">
                                        11:00
                                    </div>
                                    <div class="time">
                                        11:30
                                    </div>
                                    <div class="time">
                                        12:00
                                    </div>

                                    <div class="time">
                                        12:30
                                    </div>
                                </div>

                                <hr>

                                <div class="times">
                                    <div class="time">
                                        14:00
                                    </div>

                                    <div class="time">
                                        14:30
                                    </div>

                                    <div class="time">
                                        15:00
                                    </div>

                                    <div class="time">
                                        15:30
                                    </div>

                                    <div class="time">
                                        16:00
                                    </div>

                                    <div class="time">
                                        16:30
                                    </div>
                                    <div class="time">
                                        17:00
                                    </div>
                                    <div class="time">
                                        17:30
                                    </div>
                                    <div class="time">
                                        18:00
                                    </div>

                                    <div class="time">
                                        18:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="booking__main__item" v-if='showBarbers'>
                        <h1 class="subtitle">
                            Choix du coiffeur
                        </h1> <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-8 mx-auto">
                                <div class="barbers">
                                    <div class="barber" v-for='detail in barbers' :key='detail.id'>
                                        <img :src="getImgUrl(detail.image)" alt="">
                                        <h4>
                                            {{detail.name}}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="booking__main__item" v-if='showSummary'>
                        <h1 class="subtitle">
                            Récapitulatif
                        </h1> <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-8 mx-auto">
                                <card class="summary">

                                </card>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php include 'parts/footer.php'; ?>

            <script>
            const {
                createApp
            } = Vue

            createApp({
                data() {
                    return {
                        nbr: 0,
                        details: [],
                        services: [{
                                id: '1',
                                name: 'Coupe simple',
                                price: '30',
                                image: '0ca6f3c43d3ca79a66945c464b16017c.jpeg',
                                description: 'Shampoing, séchage, cheveux longs ou courts',
                                duration: '20'
                            },
                            {
                                id: '2',
                                name: 'Locks',
                                price: '45',
                                image: '0ca6f3c43d3ca79a66945c464b16017c.jpeg',
                                description: 'Pose de locks',
                                duration: '30'
                            },
                            {
                                id: '3',
                                name: 'Pose de greffe',
                                price: '60',
                                image: '0ca6f3c43d3ca79a66945c464b16017c.jpeg',
                                duration: '35'
                            },
                            {
                                id: '4',
                                name: 'Teinture',
                                price: '70',
                                image: '0ca6f3c43d3ca79a66945c464b16017c.jpeg',
                                duration: '40'
                            }
                        ],
                        barbers: [{
                                id: '1',
                                name: 'Abdel',
                                image: 'eugene-chystiakov-taZSJ6xmt48-unsplash.jpg'
                            },
                            {
                                id: '2',
                                name: 'Cali',
                                image: 'slide1.jpg'
                            },
                            {
                                id: '3',
                                name: 'Jeanne',
                                image: '27de1f60e3c1a90a389aa6794cef999b.jpeg'
                            },

                        ],
                        barber: '',
                        service: '',
                        showServices: false,
                        showCalendar: false,
                        showBarbers: true,
                        showSummary: true,
                        showDay: false
                    }
                },
                mounted: function() {
                    // this.displayServices();
                },
                methods: {
                    displayServices() {
                        this.showServices = true;
                        this.showCalendar = false;
                        this.showBarbers = false;
                        this.showSummary = false;
                    },
                    displayCalendar() {
                        this.showServices = false;
                        this.showCalendar = true;
                        this.showBarbers = false;
                        this.showSummary = false;
                    },
                    displayBarbers() {
                        this.showServices = false;
                        this.showCalendar = false;
                        this.showBarbers = true;
                        this.showSummary = false;
                    },
                    displaySummary() {
                        this.showServices = false;
                        this.showCalendar = false;
                        this.showBarbers = false;
                        this.showSummary = true;
                    },
                    getImgUrl(pic) {
                        return "public/images/" + pic;
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
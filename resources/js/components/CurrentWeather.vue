<template>
  <div class="col-6">
    <ul class="list-inline">
      <li v-for="location in locations" class="list-inline-item py-3">
        <div class="card bg-dark text-white">
          <div class="card-body pb-3">
            <h2 class="card-title font-weight-bold">{{ location.name}}</h2>
            <p class="card-text">Mostly Sunny</p>
            <div class="d-flex justify-content-between mb-5">
              <p class="display-4 degree">{{location.main.temp}}&deg; C</p>
            </div>
            <!-- end weather-conditon -->
            <div class="d-flex justify-content-between mb-5">
              <p class="px-2">
                <i class="fa fa-leaf fa-lg grey-text pr-2"></i>
                {{location.wind.speed}} km/h
              </p>
              <p class="px-2">
                <i class="fa fa-tint fa-lg text-info pr-2"></i>
                {{location.main.humidity}}% Humidity
              </p>
              <p>
                <i class="fa fa-compress fa-lg grey-text pr-2"></i>
                {{location.main.pressure}} hpa Air Pressure
              </p>
            </div>
            <!-- end-weather-details -->
          </div>
          <!-- end card-body -->
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  mounted() {
    this.fetchWeather();
  },
  data() {
    return {
      currentWeather: {
        name: "",
        temp: "",
        windSpeed: "",
        humidity: "",
        airPressure: "",
        icon: ""
      },
      locations: []
    };
  },
  computed: {},
  methods: {
    fetchWeather() {
      fetch(`/api/weather`)
        .then(response => response.json())
        .then(data => {
          console.log(data.list[0]);
          this.locations = data.list;
        });
    }
  }
};
</script>


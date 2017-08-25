$(document).ready(function() {

  //  ADD ACTIVE CLASS navigation
  $(".link").on("click", function() {
    $(".link").removeClass("active-menu");
    $(this).addClass("active-menu");
  });

  // $('.go-back').on('click', function() {
  //   window.history.back();
  // });

  $('.carousel').carousel({
    interval: 2000
  });


  $('.video').on('click', function(){
    $("#video")[0].play();
    $('video').attr('loop','loop');
  });

  var owl = $('.widget-slider');
    owl.owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        video:true,
        URLhashListener:true,
        startPosition: '#weather',
        items:1,
        singleItem: true,
        animateIn: 'slideIn',
        animateOut: 'slideOut',
    });

  // slider
  $('.feature-slider').owlCarousel({
    items: 1,
    nav: true,
    loop: true,
    dots: true,
    lazyLoad: true,
    autoHeight: true,
    navText: ['<i class="fa fa-angle-left fa-2x"></i> ','<i class="fa fa-angle-right fa-3x"></i>'],
  });

  $('[data-toggle="popover"]').popover({
    trigger: 'focus',
    placement: 'top'
  });

  $('#smartwizard').smartWizard({
    transitionEffect: 'fade',
    keyNavigation: true,
    theme: 'default',
    autoAdjustHeight: false,
    useURLhash: false,
    toolbarSettings: {
      toolbarPosition: 'top',
      toolbarButtonPosition: 'left',
    }
  });

  $('#hiddenWizard').smartWizard();

  /* CHARLIST */

  /* END CHARLIST */

}); //end ready

window.onload = function() {
  var barChart = document.getElementById("bar-chart");
  var myBarChart = new Chart(barChart, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, -3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

  var barChart2 = document.getElementById("bar-chart2");
  var myBarChart2 = new Chart(barChart2, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green"],
        datasets: [{
            label: '# of Votes',
            data: [-45, 15, 55, 90],
            backgroundColor: [
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

  var pieChart = document.getElementById("pie-chart");
  var pieChart2 = document.getElementById("pie-chart2");
  var pieChart3 = document.getElementById("pie-chart3");
  var myPieChart = new Chart(pieChart,{
    type: 'pie',
    data: {
      labels: [
        "Red",
        "Blue",
        "Yellow"
      ],
      datasets: [
        {
          data: [350, 70, 160],
          backgroundColor: [
              "#FF6384",
              "#36A2EB",
              "#FFCE56"
          ],
          hoverBackgroundColor: [
              "#FF6384",
              "#36A2EB",
              "#FFCE56"
          ]
        }],
    }
  });
  var myPieChart2 = new Chart(pieChart2,{
    type: 'pie',
    data: {
      labels: [
        "Red",
        "Blue",
        "Yellow"
      ],
      datasets: [
        {
          data: [10, 4, 1],
          backgroundColor: [
              "#FF6384",
              "#36A2EB",
              "#FFCE56"
          ],
          hoverBackgroundColor: [
              "#FF6384",
              "#36A2EB",
              "#FFCE56"
          ]
        }],
    }
  });
  var myPieChart3 = new Chart(pieChart3,{
    type: 'pie',
    data: {
      labels: [
        "Red",
        "Blue",
        "Yellow"
      ],
      datasets: [
        {
          data: [2000, 1700, 500],
          backgroundColor: [
              "#FF6384",
              "#36A2EB",
              "#FFCE56"
          ],
          hoverBackgroundColor: [
              "#FF6384",
              "#36A2EB",
              "#FFCE56"
          ]
        }],
    }
  });
};
/*preloader*/
$(window).load(function() {
  setTimeout(function() {
    $("#status").fadeOut(), $("#preloader").delay(350).fadeOut("slow")
  }, 2e3)
});


function initMap() {
  var city = {lat: 51.5406456, lng: -0.1595378};
  var map = new google.maps.Map(document.getElementById('map'), {
    center: city,
    zoom: 15,
    scrollwheel: false,
    styles: [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ]
  });
  var marker = new google.maps.Marker({
    position: city,
    map: map,
    icon: './img/icons/map-marker.svg',
  });
}

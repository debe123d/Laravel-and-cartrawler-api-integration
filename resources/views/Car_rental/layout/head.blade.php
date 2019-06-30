<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>car-rental</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ URL::to('public/front/css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('public/front/css/callender.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('public/front/css/callender-ui.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('public/front/css/timepicki.css') }}" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script src="{{ URL::to('public/front/js/timepicki.js') }} "></script>
<script src="{{ URL::to('public/front/js/bootstrap.min.js') }}"></script>

<script type="text/javascript">

var CT = {
  ABE: {
    Settings: {
      clientID: '[156716]',
      proxyURL: "{{ URL::to('/') }}/otaproxy"
    }
  }
};
</script>
 <script type="text/javascript">
var CT = {
  ABE: {
    Settings: {
      clientID: [156716],
      age: 40,
      residenceID: 'IE',
      pickupID: 11,
      leadDays: 7,
      durationDays: 7,
      step1: {
        deeplinkURL: '{{ URL::to('/') }}/car_rental/search_car'
      },
      extensions: {
        alwaysDisplayDropoffLocation: true
      },
      events: [
        {
          ready: function(e, obj, $) {
            // Do something.
          }
        },
        {
          step1: function(e, obj, $) {
            // Do something i.e. add some GA tracking.
          }
        },
        {
          step2: function(e, obj, $) {
            // Do something i.e. add some GA tracking.
          }
        },
        {
          step3: function(e, obj, $) {
            // Do something i.e. add some GA tracking.
          }
        },
        {
          step4: function(e, obj, $) {
            // Do something i.e. add some GA tracking.
          }
        }
      ]
    }
  }
};
</script>

</head>
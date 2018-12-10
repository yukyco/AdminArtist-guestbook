(function() {
  'use strict';

  var start = document.getElementById('start');
  var stop = document.getElementById('stop');
  var result = document.getElementById('result');
  var startTime;
  var isStarted = false;

   start.addEventListener('click', function () {
     startTime = Date.now();
   });

   stop.addEventListener('click', function() {
      var elapsedTime;
      var diff;
      elapsedTime =  (Date.now() - startTime) / 100;
     //var elapsedTime = 4;
      // result.textContent = elapsedTime;
      result.textContent = elapsedTime.toFixed(3);
      this.className = 'pushed';
      start.className = ' ';
      diff = elapsedTime - 5.0;
    //  if (diff > -1.0) && diff < 1.0) {
       if (Math.abs(diff) < 1.0) {
         result.className = 'perfect';
      }
  });
})();

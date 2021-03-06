(function() {
  $(function() {

    /*  Globals
    -------------------------------------------------- */
    var PROPERTIES =               ['translateX', 'translateY', 'opacity', 'rotate', 'scale'],
        $window =                  $(window),
        $body =                    $('body'),
        wrappers =                 [],
        currentWrapper =           null,
        scrollTimeoutID =          0,
        bodyHeight =               0,
        windowHeight =             0,
        windowWidth =              0,
        prevKeyframesDurations =   0,
        scrollTop =                0,
        relativeScrollTop =        0,
        currentKeyframe =          0,
        keyframes = [
          {
            'wrapper' : '#intro',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.name',
                'translateY'  : -140,
                'opacity'     : 0
              } , {
                'selector'    : '.byline',
                'translateY'  : -110,
                'opacity'     : 0
              } , {
                'selector'    : '.byline2',
                'translateY'  : -80,
                'opacity'     : 0
              } , {
                'selector'    : '.header',
                'opacity'     : [0,1]
              }
            ]
          } , {
            'wrapper' : '#skills',
            'duration' : '150%',
            'animations' :  [
              {
                'selector'    : '.skills-title',
                'translateY'  : [80, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.skills-byline',
                'translateY'  : [100, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.skills-button',
                'translateY'  : [40, -100],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.skill-1',
                'translateY'  : [30, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],
              } , {
                'selector'    : '.skill-2',
                'translateY'  : [60, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],
              } , {
                'selector'    : '.skill-3',
                'translateY'  : [90, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],
              } , {
                'selector'    : '.skill-4',
                'translateY'  : [120, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],
              } , {
                'selector'    : '.skill-5',
                'translateY'  : [150, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],             
              } , {
                'selector'    : '.skill-6',
                'translateY'  : [180, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],   
              } , {
                'selector'    : '.skill-7',
                'translateY'  : [210, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],   
              } , {
                'selector'    : '.skill-8',
                'translateY'  : [240, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],   
              } , {
                'selector'    : '.skill-9',
                'translateY'  : [270, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],   
              } , {
                'selector'    : '.skill-10',
                'translateY'  : [300, 0],
                'translateX'  : [10, 0],
                'opacity'     : [0, 2],                     
              } , {
                'selector'    : '.bar',
                'translateX'  : ['-100%', 0],
                'opacity'     : [0, 2],
              } 
            ]
          } , {
            'wrapper' : '#skills',
            'duration' : '40%',
            'animations' :  []
          } , {
            'wrapper' : '#skills',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.skill-1',
                'translateY'  : -300,
                'opacity'     : [1, 0]
              } , {
                'selector'    : '.skill-2',
                'translateY'  : -270,
                'opacity'     : [1, 0]
              } , {
                'selector'    : '.skill-3',
                'translateY'  : -240,
                'opacity'     : [1, 0]
              } , {
                'selector'    : '.skill-4',
                'translateY'  : -210,
                'opacity'     : [1, 0]
              } , {
                'selector'    : '.skill-5',
                'translateY'  : -180,
                'opacity'     : [1, 0]           
              } , {
                'selector'    : '.skill-6',
                'translateY'  : -150,
                'opacity'     : [1, 0]  
              } , {
                'selector'    : '.skill-7',
                'translateY'  : -120,
                'opacity'     : [1, 0],   
              } , {
                'selector'    : '.skill-8',
                'translateY'  : -90,
                'opacity'     : [1, 0],   
              } , {
                'selector'    : '.skill-9',
                'translateY'  : -60,
                'opacity'     : [1, 0],   
              } , {
                'selector'    : '.skill-10',
                'translateY'  : -30,
                'opacity'     : [1, 0],                    
              }
            ]
          } , {
            'wrapper' : '#skills',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.skills-title',
                'translateY'  : [0, -110],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {       
                'selector'    : '.skills-byline',
                'translateY'  : [0, -80],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.skills-button',
                'translateY'  : [-100, -150],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#projects',
            'duration' : '150%',
            'animations' :  [
             {
                'selector'    : '.projects-title',
                'translateY'  : [80, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.projects-byline',
                'translateY'  : [100, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '#projectsList',
                'translateY'  : ['70%', '0%'],
                'opacity'     : [0, 1] // hack to accelrate opacity speed
              } , {
                'selector'    : '.projects-button',
                'translateY'  : [40, -100],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              
              }
            ]
          } , {
            'wrapper' : '#projects',
            'duration' : '40%',
            'animations' :  []
          } , {
            'wrapper' : '#projects',
            'duration' : '150%',
            'animations' :  [
              {
                'selector'    : '.dei-1',
                'translateY'  : '-15%',
                'translateX'  : '-10%',
                'opacity'     : [1, 0],
                'scale'       : 2,
              } , {

                'selector'    : '.dei-3',
                'translateY'  : '-9%',
                'translateX'  : '2%',
                'opacity'     : [1, 0], // hack to accelrate opacity speed
                'scale'       : 1.2,
              } , {

                'selector'    : '.dei-9',
                'translateY'  : '3%',
                'translateX'  : '-12%',
                'opacity'     : [1, 0],
                'scale'       : 1.5,
              } , {

                'selector'    : '.dei-11',
                'translateY'  : '8%',
                'translateX'  : '6%',
                'opacity'     : [1, 0], // hack to accelrate opacity speed
                'scale'       : 1.4,
              }
            ]
          } , {
            'wrapper' : '#projects',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.projects-title',
                'translateY'  : [0, -110],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.projects-byline',
                'translateY'  : [0, '-80'],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.projects-button',
                'translateY'  : [-100, -150],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.experience-title',
                'translateY'  : [80, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.experience-byline',
                'translateY'  : [100, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.experience-button',
                'translateY'  : [40, -100],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.experience-line',
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '100%',
            'animations' :  [
                         {
                'selector'    : '.experience-1',
                'translateY'  : [60, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
             'wrapper' : '#experience',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-1',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '150%',
            'animations' :  []
          } , {
            'wrapper' : '#experience',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-1',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.experience-2',
                'translateY'  : [120, 60],
                'opacity'     : [0, 1] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '80%',
            'animations' :  [
                         {
                'selector'    : '.detail-2',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
          } , {
             'wrapper' : '#experience',
            'duration' : '150%',
            'animations' :  [ ]
          } , {
            'wrapper' : '#experience',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-2',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.experience-3',
                'translateY'  : [180, 120],
                'opacity'     : [0, 1] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '80%',
            'animations' :  [
                         {
                'selector'    : '.detail-3',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
          } , {
             'wrapper' : '#experience',
            'duration' : '150%',
            'animations' :  [ ]
          } , {
            'wrapper' : '#experience',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-3',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#experience',
            'duration' : '100%',
            'animations' :  [
                         {
                'selector'    : '.experience-title',
                'translateY'  : [0, -110],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
              
                'selector'    : '.experience-byline',
                'translateY'  : [0, '-80'],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.experience-button',
                'translateY'  : [-100, -150],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } ,     {
                'selector'    : '.experience-1',
                'translateY'  : [0, -30],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } ,     {
                'selector'    : '.experience-2',
                'translateY'  : [60, 45],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } ,     {
                'selector'    : '.experience-3',
                'translateY'  : [120, 110],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '150%',
            'animations' :  [
              {
                'selector'    : '.education-title',
                'translateY'  : [80, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-byline',
                'translateY'  : [100, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-button',
                'translateY'  : [40, -100],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.education-1',
                'translateY'  : [60, 0],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-1',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '150%',
            'animations' :  []
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-1',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.education-2',
                'translateY'  : [120, 60],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-2',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '150%',
            'animations' :  [ ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-2',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.education-3',
                'translateY'  : [180, 120],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-3',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '150%',
            'animations' :  [ ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-3',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.education-4',
                'translateY'  : [240, 180],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-4',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '150%',
            'animations' :  [ ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-4',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.education-5',
                'translateY'  : [300, 240],
                'opacity'     : [0, 1.75] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-5',
                'opacity'     : [0, 1.75], // hack to accelrate opacity speed
                'translateX'  : [0, -600]
              }
            ]
           } , {
            'wrapper' : '#education',
            'duration' : '150%',
            'animations' :  [ ]
          } , {
            'wrapper' : '#education',
            'duration' : '80%',
            'animations' :  [
              {
                'selector'    : '.detail-5',
                'opacity'     : [1, -1], // hack to accelrate opacity speed
                'translateX'  : [-600, 0]
              }
            ]
          } , {
            'wrapper' : '#education',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '.education-title',
                'translateY'  : [0, -110],
                'opacity'     : [1, -1] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-byline',
                'translateY'  : [0, '-80'],
                'opacity'     : [1, -1] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-button',
                'translateY'  : [-100, -150],
                'opacity'     : [1, -1] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-line',
                'opacity'     : [1, -1] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-1',
                'translateY'  : [0, -30],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-2',
                'translateY'  : [60, 45],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-3',
                'translateY'  : [120, 110],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-4',
                'translateY'  : [180, 175],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              } , {
                'selector'    : '.education-5',
                'translateY'  : [240, 238],
                'opacity'     : [1, 0] // hack to accelrate opacity speed
              }
            ]
          } , {
            'wrapper' : '#connect',
            'duration' : '100%',
            'animations' :  [
              {
                'selector'    : '#connect',
                'opacity'     : [0, 2],
                'scale'       : [.8, 1]
              }
            ]
          } , {
            'duration' : '100%',
            'animations' :  []
          }
        ]

    /*  Construction
    -------------------------------------------------- */
    init = function() {
      scrollIntervalID = setInterval(updatePage, 10);
      setupValues();
      // $window.resize(throwError)
      // if(isTouchDevice) {
      //   $window.resize(throwError)
      // }
    }

    setupValues = function() {
      scrollTop = $window.scrollTop();
      windowHeight = $window.height();
      windowWidth = $window.width();
      convertAllPropsToPx();
      buildPage();
    }

    buildPage = function() {
      var i, j, k;
      for(i=0;i<keyframes.length;i++) { // loop keyframes
          bodyHeight += keyframes[i].duration;
          if($.inArray(keyframes[i].wrapper, wrappers) == -1) {
            wrappers.push(keyframes[i].wrapper);
          }
          for(j=0;j<keyframes[i].animations.length;j++) { // loop animations
            Object.keys(keyframes[i].animations[j]).forEach(function(key) { // loop properties
              value = keyframes[i].animations[j][key];
              if(key !== 'selector' && value instanceof Array === false) {
                var valueSet = [];
                valueSet.push(getDefaultPropertyValue(key), value);
                value = valueSet;
              }
              keyframes[i].animations[j][key] = value;
            });
          }
      }
      $body.height(bodyHeight);
      $window.scroll(0);
      currentWrapper = wrappers[0];
      $(currentWrapper).show();
    }

    convertAllPropsToPx = function() {
      var i, j, k;
      for(i=0;i<keyframes.length;i++) { // loop keyframes
        keyframes[i].duration = convertPercentToPx(keyframes[i].duration, 'y');
        for(j=0;j<keyframes[i].animations.length;j++) { // loop animations
          Object.keys(keyframes[i].animations[j]).forEach(function(key) { // loop properties
            value = keyframes[i].animations[j][key];
            if(key !== 'selector') {
              if(value instanceof Array) { // if its an array
                for(k=0;k<value.length;k++) { // if value in array is %
                  if(typeof value[k] === "string") {
                    if(key === 'translateY') {
                      value[k] = convertPercentToPx(value[k], 'y');
                    } else {
                      value[k] = convertPercentToPx(value[k], 'x');
                    }
                  }
                } 
              } else {
                if(typeof value === "string") { // if single value is a %
                  if(key === 'translateY') {
                    value = convertPercentToPx(value, 'y');
                  } else {
                    value = convertPercentToPx(value, 'x');
                  }
                }
              }
              keyframes[i].animations[j][key] = value;
            }
          });
        }
      }
    }

    getDefaultPropertyValue = function(property) {
      switch (property) {
        case 'translateX':
          return 0;
        case 'translateY':
          return 0;
        case 'scale':
          return 1;
        case 'rotate':
          return 0;
        case 'opacity':
          return 1;
        default:
          return null;
      }
    }

    /*  Animation/Scrolling
    -------------------------------------------------- */
    updatePage = function() {
      window.requestAnimationFrame(function() {
        setScrollTops();
        if(scrollTop > 0 && scrollTop <= (bodyHeight - windowHeight)) {
          animateElements();
          setKeyframe();
        }
      });
    }

    setScrollTops = function() {
      scrollTop = $window.scrollTop();
      relativeScrollTop = scrollTop - prevKeyframesDurations;
    }

    animateElements = function() {
      var animation, translateY, translateX, scale, rotate, opacity;
      for(var i=0;i<keyframes[currentKeyframe].animations.length;i++) {
        animation   = keyframes[currentKeyframe].animations[i];
        translateY  = calcPropValue(animation, 'translateY');
        translateX  = calcPropValue(animation, 'translateX');
        scale       = calcPropValue(animation, 'scale');
        rotate      = calcPropValue(animation, 'rotate');
        opacity     = calcPropValue(animation, 'opacity');

        $(animation.selector).css({
          'transform':    'translate3d(' + translateX +'px, ' + translateY + 'px, 0) scale('+ scale +') rotate('+ rotate +'deg)',
          'opacity' : opacity
        })
      }
    }

    calcPropValue = function(animation, property) {
      var value = animation[property];
      if(value) {
        value = easeInOutQuad(relativeScrollTop, value[0], (value[1]-value[0]), keyframes[currentKeyframe].duration);
      } else {
        value = getDefaultPropertyValue(property);
      }
      // value = +value.toFixed(2) 
      // TEMPORARILY REMOVED CAUSE SCALE DOESN'T WORK WITHA AGRESSIVE ROUNDING LIKE THIS
      return value;
    }

    easeInOutQuad = function (t, b, c, d) {
      //sinusoadial in and out
      return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
    };

    setKeyframe = function() {
      if(scrollTop > (keyframes[currentKeyframe].duration + prevKeyframesDurations)) {
          prevKeyframesDurations += keyframes[currentKeyframe].duration;
          currentKeyframe++;
          showCurrentWrappers();
      } else if(scrollTop < prevKeyframesDurations) {
          currentKeyframe--;
          prevKeyframesDurations -= keyframes[currentKeyframe].duration;
          showCurrentWrappers();
      }
    }

    showCurrentWrappers = function() {
      var i;
      if(keyframes[currentKeyframe].wrapper != currentWrapper) {
        $(currentWrapper).hide();
        $(keyframes[currentKeyframe].wrapper).show();
        currentWrapper = keyframes[currentKeyframe].wrapper;
      }
    }

    /*  Helpers
    -------------------------------------------------- */

    convertPercentToPx = function(value, axis) {
      if(typeof value === "string" && value.match(/%/g)) {
        if(axis === 'y') value = (parseFloat(value) / 100) * windowHeight;
        if(axis === 'x') value = (parseFloat(value) / 100) * windowWidth;
      }
      return value;
    }

    throwError = function() {
      $body.addClass('page-error')
    }

    isTouchDevice = function() {
      return 'ontouchstart' in window // works on most browsers 
      || 'onmsgesturechange' in window; // works on ie10
    }

    init();

  })
}).call(this);
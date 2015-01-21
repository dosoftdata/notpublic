// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());



// Place any jQuery/helper plugins in here.
//Nivo slide
/*
 * jQuery Nivo Slider v3.2
 * http://nivo.dev7studios.com
 *
 * Copyright 2012, Dev7studios
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */

(function($) {
    var NivoSlider = function(element, options){
        // Defaults are below
        var settings = $.extend({}, $.fn.nivoSlider.defaults, options);

        // Useful variables. Play carefully.
        var vars = {
            currentSlide: 0,
            currentImage: '',
            totalSlides: 0,
            running: false,
            paused: false,
            stop: false,
            controlNavEl: false
        };

        // Get this slider
        var slider = $(element);
        slider.data('nivo:vars', vars).addClass('nivoSlider');

        // Find our slider children
        var kids = slider.children();
        kids.each(function() {
            var child = $(this);
            var link = '';
            if(!child.is('img')){
                if(child.is('a')){
                    child.addClass('nivo-imageLink');
                    link = child;
                }
                child = child.find('img:first');
            }
            // Get img width & height
            var childWidth = (childWidth === 0) ? child.attr('width') : child.width(),
                childHeight = (childHeight === 0) ? child.attr('height') : child.height();

            if(link !== ''){
                link.css('display','none');
            }
            child.css('display','none');
            vars.totalSlides++;
        });
         
        // If randomStart
        if(settings.randomStart){
            settings.startSlide = Math.floor(Math.random() * vars.totalSlides);
        }
        
        // Set startSlide
        if(settings.startSlide > 0){
            if(settings.startSlide >= vars.totalSlides) { settings.startSlide = vars.totalSlides - 1; }
            vars.currentSlide = settings.startSlide;
        }
        
        // Get initial image
        if($(kids[vars.currentSlide]).is('img')){
            vars.currentImage = $(kids[vars.currentSlide]);
        } else {
            vars.currentImage = $(kids[vars.currentSlide]).find('img:first');
        }
        
        // Show initial link
        if($(kids[vars.currentSlide]).is('a')){
            $(kids[vars.currentSlide]).css('display','block');
        }
        
        // Set first background
        var sliderImg = $('<img/>').addClass('nivo-main-image');
        sliderImg.attr('src', vars.currentImage.attr('src')).show();
        slider.append(sliderImg);

        // Detect Window Resize
        $(window).resize(function() {
            slider.children('img').width(slider.width());
            sliderImg.attr('src', vars.currentImage.attr('src'));
            sliderImg.stop().height('auto');
            $('.nivo-slice').remove();
            $('.nivo-box').remove();
        });

        //Create caption
        slider.append($('<div class="nivo-caption"></div>'));
        
        // Process caption function
        var processCaption = function(settings){
            var nivoCaption = $('.nivo-caption', slider);
            if(vars.currentImage.attr('title') != '' && vars.currentImage.attr('title') != undefined){
                var title = vars.currentImage.attr('title');
                if(title.substr(0,1) == '#') title = $(title).html();   

                if(nivoCaption.css('display') == 'block'){
                    setTimeout(function(){
                        nivoCaption.html(title);
                    }, settings.animSpeed);
                } else {
                    nivoCaption.html(title);
                    nivoCaption.stop().fadeIn(settings.animSpeed);
                }
            } else {
                nivoCaption.stop().fadeOut(settings.animSpeed);
            }
        }
        
        //Process initial  caption
        processCaption(settings);
        
        // In the words of Super Mario "let's a go!"
        var timer = 0;
        if(!settings.manualAdvance && kids.length > 1){
            timer = setInterval(function(){ nivoRun(slider, kids, settings, false); }, settings.pauseTime);
        }
        
        // Add Direction nav
        if(settings.directionNav){
            slider.append('<div class="nivo-directionNav"><a class="nivo-prevNav">'+ settings.prevText +'</a><a class="nivo-nextNav">'+ settings.nextText +'</a></div>');
            
            $(slider).on('click', 'a.nivo-prevNav', function(){
                if(vars.running) { return false; }
                clearInterval(timer);
                timer = '';
                vars.currentSlide -= 2;
                nivoRun(slider, kids, settings, 'prev');
            });
            
            $(slider).on('click', 'a.nivo-nextNav', function(){
                if(vars.running) { return false; }
                clearInterval(timer);
                timer = '';
                nivoRun(slider, kids, settings, 'next');
            });
        }
        
        // Add Control nav
        if(settings.controlNav){
            vars.controlNavEl = $('<div class="nivo-controlNav"></div>');
            slider.after(vars.controlNavEl);
            for(var i = 0; i < kids.length; i++){
                if(settings.controlNavThumbs){
                    vars.controlNavEl.addClass('nivo-thumbs-enabled');
                    var child = kids.eq(i);
                    if(!child.is('img')){
                        child = child.find('img:first');
                    }
                    if(child.attr('data-thumb')) vars.controlNavEl.append('<a class="nivo-control" rel="'+ i +'"><img src="'+ child.attr('data-thumb') +'" alt="" /></a>');
                } else {
                    vars.controlNavEl.append('<a class="nivo-control" rel="'+ i +'">'+ (i + 1) +'</a>');
                }
            }

            //Set initial active link
            $('a:eq('+ vars.currentSlide +')', vars.controlNavEl).addClass('active');
            
            $('a', vars.controlNavEl).bind('click', function(){
                if(vars.running) return false;
                if($(this).hasClass('active')) return false;
                clearInterval(timer);
                timer = '';
                sliderImg.attr('src', vars.currentImage.attr('src'));
                vars.currentSlide = $(this).attr('rel') - 1;
                nivoRun(slider, kids, settings, 'control');
            });
        }
        
        //For pauseOnHover setting
        if(settings.pauseOnHover){
            slider.hover(function(){
                vars.paused = true;
                clearInterval(timer);
                timer = '';
            }, function(){
                vars.paused = false;
                // Restart the timer
                if(timer === '' && !settings.manualAdvance){
                    timer = setInterval(function(){ nivoRun(slider, kids, settings, false); }, settings.pauseTime);
                }
            });
        }
        
        // Event when Animation finishes
        slider.bind('nivo:animFinished', function(){
            sliderImg.attr('src', vars.currentImage.attr('src'));
            vars.running = false; 
            // Hide child links
            $(kids).each(function(){
                if($(this).is('a')){
                   $(this).css('display','none');
                }
            });
            // Show current link
            if($(kids[vars.currentSlide]).is('a')){
                $(kids[vars.currentSlide]).css('display','block');
            }
            // Restart the timer
            if(timer === '' && !vars.paused && !settings.manualAdvance){
                timer = setInterval(function(){ nivoRun(slider, kids, settings, false); }, settings.pauseTime);
            }
            // Trigger the afterChange callback
            settings.afterChange.call(this);
        }); 
        
        // Add slices for slice animations
        var createSlices = function(slider, settings, vars) {
        	if($(vars.currentImage).parent().is('a')) $(vars.currentImage).parent().css('display','block');
            $('img[src="'+ vars.currentImage.attr('src') +'"]', slider).not('.nivo-main-image,.nivo-control img').width(slider.width()).css('visibility', 'hidden').show();
            var sliceHeight = ($('img[src="'+ vars.currentImage.attr('src') +'"]', slider).not('.nivo-main-image,.nivo-control img').parent().is('a')) ? $('img[src="'+ vars.currentImage.attr('src') +'"]', slider).not('.nivo-main-image,.nivo-control img').parent().height() : $('img[src="'+ vars.currentImage.attr('src') +'"]', slider).not('.nivo-main-image,.nivo-control img').height();

            for(var i = 0; i < settings.slices; i++){
                var sliceWidth = Math.round(slider.width()/settings.slices);
                
                if(i === settings.slices-1){
                    slider.append(
                        $('<div class="nivo-slice" name="'+i+'"><img src="'+ vars.currentImage.attr('src') +'" style="position:absolute; width:'+ slider.width() +'px; height:auto; display:block !important; top:0; left:-'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px;" /></div>').css({ 
                            left:(sliceWidth*i)+'px', 
                            width:(slider.width()-(sliceWidth*i))+'px',
                            height:sliceHeight+'px', 
                            opacity:'0',
                            overflow:'hidden'
                        })
                    );
                } else {
                    slider.append(
                        $('<div class="nivo-slice" name="'+i+'"><img src="'+ vars.currentImage.attr('src') +'" style="position:absolute; width:'+ slider.width() +'px; height:auto; display:block !important; top:0; left:-'+ ((sliceWidth + (i * sliceWidth)) - sliceWidth) +'px;" /></div>').css({ 
                            left:(sliceWidth*i)+'px', 
                            width:sliceWidth+'px',
                            height:sliceHeight+'px',
                            opacity:'0',
                            overflow:'hidden'
                        })
                    );
                }
            }
            
            $('.nivo-slice', slider).height(sliceHeight);
            sliderImg.stop().animate({
                height: $(vars.currentImage).height()
            }, settings.animSpeed);
        };
        
        // Add boxes for box animations
        var createBoxes = function(slider, settings, vars){
        	if($(vars.currentImage).parent().is('a')) $(vars.currentImage).parent().css('display','block');
            $('img[src="'+ vars.currentImage.attr('src') +'"]', slider).not('.nivo-main-image,.nivo-control img').width(slider.width()).css('visibility', 'hidden').show();
            var boxWidth = Math.round(slider.width()/settings.boxCols),
                boxHeight = Math.round($('img[src="'+ vars.currentImage.attr('src') +'"]', slider).not('.nivo-main-image,.nivo-control img').height() / settings.boxRows);
            
                        
            for(var rows = 0; rows < settings.boxRows; rows++){
                for(var cols = 0; cols < settings.boxCols; cols++){
                    if(cols === settings.boxCols-1){
                        slider.append(
                            $('<div class="nivo-box" name="'+ cols +'" rel="'+ rows +'"><img src="'+ vars.currentImage.attr('src') +'" style="position:absolute; width:'+ slider.width() +'px; height:auto; display:block; top:-'+ (boxHeight*rows) +'px; left:-'+ (boxWidth*cols) +'px;" /></div>').css({ 
                                opacity:0,
                                left:(boxWidth*cols)+'px', 
                                top:(boxHeight*rows)+'px',
                                width:(slider.width()-(boxWidth*cols))+'px'
                                
                            })
                        );
                        $('.nivo-box[name="'+ cols +'"]', slider).height($('.nivo-box[name="'+ cols +'"] img', slider).height()+'px');
                    } else {
                        slider.append(
                            $('<div class="nivo-box" name="'+ cols +'" rel="'+ rows +'"><img src="'+ vars.currentImage.attr('src') +'" style="position:absolute; width:'+ slider.width() +'px; height:auto; display:block; top:-'+ (boxHeight*rows) +'px; left:-'+ (boxWidth*cols) +'px;" /></div>').css({ 
                                opacity:0,
                                left:(boxWidth*cols)+'px', 
                                top:(boxHeight*rows)+'px',
                                width:boxWidth+'px'
                            })
                        );
                        $('.nivo-box[name="'+ cols +'"]', slider).height($('.nivo-box[name="'+ cols +'"] img', slider).height()+'px');
                    }
                }
            }
            
            sliderImg.stop().animate({
                height: $(vars.currentImage).height()
            }, settings.animSpeed);
        };

        // Private run method
        var nivoRun = function(slider, kids, settings, nudge){          
            // Get our vars
            var vars = slider.data('nivo:vars');
            
            // Trigger the lastSlide callback
            if(vars && (vars.currentSlide === vars.totalSlides - 1)){ 
                settings.lastSlide.call(this);
            }
            
            // Stop
            if((!vars || vars.stop) && !nudge) { return false; }
            
            // Trigger the beforeChange callback
            settings.beforeChange.call(this);

            // Set current background before change
            if(!nudge){
                sliderImg.attr('src', vars.currentImage.attr('src'));
            } else {
                if(nudge === 'prev'){
                    sliderImg.attr('src', vars.currentImage.attr('src'));
                }
                if(nudge === 'next'){
                    sliderImg.attr('src', vars.currentImage.attr('src'));
                }
            }
            
            vars.currentSlide++;
            // Trigger the slideshowEnd callback
            if(vars.currentSlide === vars.totalSlides){ 
                vars.currentSlide = 0;
                settings.slideshowEnd.call(this);
            }
            if(vars.currentSlide < 0) { vars.currentSlide = (vars.totalSlides - 1); }
            // Set vars.currentImage
            if($(kids[vars.currentSlide]).is('img')){
                vars.currentImage = $(kids[vars.currentSlide]);
            } else {
                vars.currentImage = $(kids[vars.currentSlide]).find('img:first');
            }
            
            // Set active links
            if(settings.controlNav){
                $('a', vars.controlNavEl).removeClass('active');
                $('a:eq('+ vars.currentSlide +')', vars.controlNavEl).addClass('active');
            }
            
            // Process caption
            processCaption(settings);            
            
            // Remove any slices from last transition
            $('.nivo-slice', slider).remove();
            
            // Remove any boxes from last transition
            $('.nivo-box', slider).remove();
            
            var currentEffect = settings.effect,
                anims = '';
                
            // Generate random effect
            if(settings.effect === 'random'){
                anims = new Array('sliceDownRight','sliceDownLeft','sliceUpRight','sliceUpLeft','sliceUpDown','sliceUpDownLeft','fold','fade',
                'boxRandom','boxRain','boxRainReverse','boxRainGrow','boxRainGrowReverse');
                currentEffect = anims[Math.floor(Math.random()*(anims.length + 1))];
                if(currentEffect === undefined) { currentEffect = 'fade'; }
            }
            
            // Run random effect from specified set (eg: effect:'fold,fade')
            if(settings.effect.indexOf(',') !== -1){
                anims = settings.effect.split(',');
                currentEffect = anims[Math.floor(Math.random()*(anims.length))];
                if(currentEffect === undefined) { currentEffect = 'fade'; }
            }
            
            // Custom transition as defined by "data-transition" attribute
            if(vars.currentImage.attr('data-transition')){
                currentEffect = vars.currentImage.attr('data-transition');
            }
        
            // Run effects
            vars.running = true;
            var timeBuff = 0,
                i = 0,
                slices = '',
                firstSlice = '',
                totalBoxes = '',
                boxes = '';
            
            if(currentEffect === 'sliceDown' || currentEffect === 'sliceDownRight' || currentEffect === 'sliceDownLeft'){
                createSlices(slider, settings, vars);
                timeBuff = 0;
                i = 0;
                slices = $('.nivo-slice', slider);
                if(currentEffect === 'sliceDownLeft') { slices = $('.nivo-slice', slider)._reverse(); }
                
                slices.each(function(){
                    var slice = $(this);
                    slice.css({ 'top': '0px' });
                    if(i === settings.slices-1){
                        setTimeout(function(){
                            slice.animate({opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
                        }, (100 + timeBuff));
                    } else {
                        setTimeout(function(){
                            slice.animate({opacity:'1.0' }, settings.animSpeed);
                        }, (100 + timeBuff));
                    }
                    timeBuff += 50;
                    i++;
                });
            } else if(currentEffect === 'sliceUp' || currentEffect === 'sliceUpRight' || currentEffect === 'sliceUpLeft'){
                createSlices(slider, settings, vars);
                timeBuff = 0;
                i = 0;
                slices = $('.nivo-slice', slider);
                if(currentEffect === 'sliceUpLeft') { slices = $('.nivo-slice', slider)._reverse(); }
                
                slices.each(function(){
                    var slice = $(this);
                    slice.css({ 'bottom': '0px' });
                    if(i === settings.slices-1){
                        setTimeout(function(){
                            slice.animate({opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
                        }, (100 + timeBuff));
                    } else {
                        setTimeout(function(){
                            slice.animate({opacity:'1.0' }, settings.animSpeed);
                        }, (100 + timeBuff));
                    }
                    timeBuff += 50;
                    i++;
                });
            } else if(currentEffect === 'sliceUpDown' || currentEffect === 'sliceUpDownRight' || currentEffect === 'sliceUpDownLeft'){
                createSlices(slider, settings, vars);
                timeBuff = 0;
                i = 0;
                var v = 0;
                slices = $('.nivo-slice', slider);
                if(currentEffect === 'sliceUpDownLeft') { slices = $('.nivo-slice', slider)._reverse(); }
                
                slices.each(function(){
                    var slice = $(this);
                    if(i === 0){
                        slice.css('top','0px');
                        i++;
                    } else {
                        slice.css('bottom','0px');
                        i = 0;
                    }
                    
                    if(v === settings.slices-1){
                        setTimeout(function(){
                            slice.animate({opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
                        }, (100 + timeBuff));
                    } else {
                        setTimeout(function(){
                            slice.animate({opacity:'1.0' }, settings.animSpeed);
                        }, (100 + timeBuff));
                    }
                    timeBuff += 50;
                    v++;
                });
            } else if(currentEffect === 'fold'){
                createSlices(slider, settings, vars);
                timeBuff = 0;
                i = 0;
                
                $('.nivo-slice', slider).each(function(){
                    var slice = $(this);
                    var origWidth = slice.width();
                    slice.css({ top:'0px', width:'0px' });
                    if(i === settings.slices-1){
                        setTimeout(function(){
                            slice.animate({ width:origWidth, opacity:'1.0' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
                        }, (100 + timeBuff));
                    } else {
                        setTimeout(function(){
                            slice.animate({ width:origWidth, opacity:'1.0' }, settings.animSpeed);
                        }, (100 + timeBuff));
                    }
                    timeBuff += 50;
                    i++;
                });
            } else if(currentEffect === 'fade'){
                createSlices(slider, settings, vars);
                
                firstSlice = $('.nivo-slice:first', slider);
                firstSlice.css({
                    'width': slider.width() + 'px'
                });
    
                firstSlice.animate({ opacity:'1.0' }, (settings.animSpeed*2), '', function(){ slider.trigger('nivo:animFinished'); });
            } else if(currentEffect === 'slideInRight'){
                createSlices(slider, settings, vars);
                
                firstSlice = $('.nivo-slice:first', slider);
                firstSlice.css({
                    'width': '0px',
                    'opacity': '1'
                });

                firstSlice.animate({ width: slider.width() + 'px' }, (settings.animSpeed*2), '', function(){ slider.trigger('nivo:animFinished'); });
            } else if(currentEffect === 'slideInLeft'){
                createSlices(slider, settings, vars);
                
                firstSlice = $('.nivo-slice:first', slider);
                firstSlice.css({
                    'width': '0px',
                    'opacity': '1',
                    'left': '',
                    'right': '0px'
                });

                firstSlice.animate({ width: slider.width() + 'px' }, (settings.animSpeed*2), '', function(){ 
                    // Reset positioning
                    firstSlice.css({
                        'left': '0px',
                        'right': ''
                    });
                    slider.trigger('nivo:animFinished'); 
                });
            } else if(currentEffect === 'boxRandom'){
                createBoxes(slider, settings, vars);
                
                totalBoxes = settings.boxCols * settings.boxRows;
                i = 0;
                timeBuff = 0;

                boxes = shuffle($('.nivo-box', slider));
                boxes.each(function(){
                    var box = $(this);
                    if(i === totalBoxes-1){
                        setTimeout(function(){
                            box.animate({ opacity:'1' }, settings.animSpeed, '', function(){ slider.trigger('nivo:animFinished'); });
                        }, (100 + timeBuff));
                    } else {
                        setTimeout(function(){
                            box.animate({ opacity:'1' }, settings.animSpeed);
                        }, (100 + timeBuff));
                    }
                    timeBuff += 20;
                    i++;
                });
            } else if(currentEffect === 'boxRain' || currentEffect === 'boxRainReverse' || currentEffect === 'boxRainGrow' || currentEffect === 'boxRainGrowReverse'){
                createBoxes(slider, settings, vars);
                
                totalBoxes = settings.boxCols * settings.boxRows;
                i = 0;
                timeBuff = 0;
                
                // Split boxes into 2D array
                var rowIndex = 0;
                var colIndex = 0;
                var box2Darr = [];
                box2Darr[rowIndex] = [];
                boxes = $('.nivo-box', slider);
                if(currentEffect === 'boxRainReverse' || currentEffect === 'boxRainGrowReverse'){
                    boxes = $('.nivo-box', slider)._reverse();
                }
                boxes.each(function(){
                    box2Darr[rowIndex][colIndex] = $(this);
                    colIndex++;
                    if(colIndex === settings.boxCols){
                        rowIndex++;
                        colIndex = 0;
                        box2Darr[rowIndex] = [];
                    }
                });
                
                // Run animation
                for(var cols = 0; cols < (settings.boxCols * 2); cols++){
                    var prevCol = cols;
                    for(var rows = 0; rows < settings.boxRows; rows++){
                        if(prevCol >= 0 && prevCol < settings.boxCols){
                            /* Due to some weird JS bug with loop vars 
                            being used in setTimeout, this is wrapped
                            with an anonymous function call */
                            (function(row, col, time, i, totalBoxes) {
                                var box = $(box2Darr[row][col]);
                                var w = box.width();
                                var h = box.height();
                                if(currentEffect === 'boxRainGrow' || currentEffect === 'boxRainGrowReverse'){
                                    box.width(0).height(0);
                                }
                                if(i === totalBoxes-1){
                                    setTimeout(function(){
                                        box.animate({ opacity:'1', width:w, height:h }, settings.animSpeed/1.3, '', function(){ slider.trigger('nivo:animFinished'); });
                                    }, (100 + time));
                                } else {
                                    setTimeout(function(){
                                        box.animate({ opacity:'1', width:w, height:h }, settings.animSpeed/1.3);
                                    }, (100 + time));
                                }
                            })(rows, prevCol, timeBuff, i, totalBoxes);
                            i++;
                        }
                        prevCol--;
                    }
                    timeBuff += 100;
                }
            }           
        };
        
        // Shuffle an array
        var shuffle = function(arr){
            for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i, 10), x = arr[--i], arr[i] = arr[j], arr[j] = x);
            return arr;
        };
        
        // For debugging
        var trace = function(msg){
            if(this.console && typeof console.log !== 'undefined') { console.log(msg); }
        };
        
        // Start / Stop
        this.stop = function(){
            if(!$(element).data('nivo:vars').stop){
                $(element).data('nivo:vars').stop = true;
                trace('Stop Slider');
            }
        };
        
        this.start = function(){
            if($(element).data('nivo:vars').stop){
                $(element).data('nivo:vars').stop = false;
                trace('Start Slider');
            }
        };
        
        // Trigger the afterLoad callback
        settings.afterLoad.call(this);
        
        return this;
    };
        
    $.fn.nivoSlider = function(options) {
        return this.each(function(key, value){
            var element = $(this);
            // Return early if this element already has a plugin instance
            if (element.data('nivoslider')) { return element.data('nivoslider'); }
            // Pass options to plugin constructor
            var nivoslider = new NivoSlider(this, options);
            // Store plugin object in this element's data
            element.data('nivoslider', nivoslider);
        });
    };
    
    //Default settings
    $.fn.nivoSlider.defaults = {
       effect:'fade', // Specify sets like: 'fold,fade,sliceDown,boxRandom'
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:600, // Slide transition speed
        pauseTime:5000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:false, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:false, // 1,2,3... navigation
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:false, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    };

    $.fn._reverse = [].reverse;
    
})(jQuery);



//Select box
/*! jquery.selectBoxIt - v3.6.0 - 2013-06-25 
* http://www.selectboxit.com
* Copyright (c) 2013 Greg Franko; Licensed MIT*/

// Immediately-Invoked Function Expression (IIFE) [Ben Alman Blog Post](http://benalman.com/news/2010/11/immediately-invoked-function-expression/) that calls another IIFE that contains all of the plugin logic.  I used this pattern so that anyone viewing this code would not have to scroll to the bottom of the page to view the local parameters that were passed to the main IIFE.

;(function (selectBoxIt) {

    //ECMAScript 5 Strict Mode: [John Resig Blog Post](http://ejohn.org/blog/ecmascript-5-strict-mode-json-and-more/)
    "use strict";

    // Calls the second IIFE and locally passes in the global jQuery, window, and document objects
    selectBoxIt(window.jQuery, window, document);

}

// Locally passes in `jQuery`, the `window` object, the `document` object, and an `undefined` variable.  The `jQuery`, `window` and `document` objects are passed in locally, to improve performance, since javascript first searches for a variable match within the local variables set before searching the global variables set.  All of the global variables are also passed in locally to be minifier friendly. `undefined` can be passed in locally, because it is not a reserved word in JavaScript.

(function ($, window, document, undefined) {

    // ECMAScript 5 Strict Mode: [John Resig Blog Post](http://ejohn.org/blog/ecmascript-5-strict-mode-json-and-more/)
    "use strict";

    // Calling the jQueryUI Widget Factory Method
    $.widget("selectBox.selectBoxIt", {

        // Plugin version
        VERSION: "3.6.0",

        // These options will be used as defaults
        options: {

            // **showEffect**: Accepts String: "none", "fadeIn", "show", "slideDown", or any of the jQueryUI show effects (i.e. "bounce")
            "showEffect": "none",

            // **showEffectOptions**: Accepts an object literal.  All of the available properties are based on the jqueryUI effect options
            "showEffectOptions": {},

            // **showEffectSpeed**: Accepts Number (milliseconds) or String: "slow", "medium", or "fast"
            "showEffectSpeed": "medium",

            // **hideEffect**: Accepts String: "none", "fadeOut", "hide", "slideUp", or any of the jQueryUI hide effects (i.e. "explode")
            "hideEffect": "none",

            // **hideEffectOptions**: Accepts an object literal.  All of the available properties are based on the jqueryUI effect options
            "hideEffectOptions": {},

            // **hideEffectSpeed**: Accepts Number (milliseconds) or String: "slow", "medium", or "fast"
            "hideEffectSpeed": "medium",

            // **showFirstOption**: Shows the first dropdown list option within the dropdown list options list
            "showFirstOption": true,

            // **defaultText**: Overrides the text used by the dropdown list selected option to allow a user to specify custom text.  Accepts a String.
            "defaultText": "",

            // **defaultIcon**: Overrides the icon used by the dropdown list selected option to allow a user to specify a custom icon.  Accepts a String (CSS class name(s)).
            "defaultIcon": "",

            // **downArrowIcon**: Overrides the default down arrow used by the dropdown list to allow a user to specify a custom image.  Accepts a String (CSS class name(s)).
            "downArrowIcon": "",

            // **theme**: Provides theming support for Twitter Bootstrap and jQueryUI
            "theme": "default",

            // **keydownOpen**: Opens the dropdown if the up or down key is pressed when the dropdown is focused
            "keydownOpen": true,

            // **isMobile**: Function to determine if a user's browser is a mobile browser
            "isMobile": function() {

                // Adapted from http://www.detectmobilebrowsers.com
                var ua = navigator.userAgent || navigator.vendor || window.opera;

                // Checks for iOs, Android, Blackberry, Opera Mini, and Windows mobile devices
                return (/iPhone|iPod|iPad|Silk|Android|BlackBerry|Opera Mini|IEMobile/).test(ua);

            },

            // **native**: Triggers the native select box when a user interacts with the drop down
            "native": false,

            // **aggressiveChange**: Will select a drop down item (and trigger a change event) when a user navigates to the item via the keyboard (up and down arrow or search), before a user selects an option with a click or the enter key
            "aggressiveChange": false,

            // **selectWhenHidden: Will allow a user to select an option using the keyboard when the drop down list is hidden and focused
            "selectWhenHidden": true,

            // **viewport**: Allows for a custom domnode used for the viewport. Accepts a selector.  Default is $(window).
            "viewport": $(window),

            // **similarSearch**: Optimizes the search for lists with many similar values (i.e. State lists) by making it easier to navigate through
            "similarSearch": false,

            // **copyAttributes**: HTML attributes that will be copied over to the new drop down
            "copyAttributes": [

                "title",

                "rel"

            ],

            // **copyClasses**: HTML classes that will be copied over to the new drop down.  The value indicates where the classes should be copied.  The default value is 'button', but you can also use 'container' (recommended) or 'none'.
            "copyClasses": "button",

            // **nativeMousedown**: Mimics native firefox drop down behavior by opening the drop down on mousedown and selecting the currently hovered drop down option on mouseup
            "nativeMousedown": false,

            // **customShowHideEvent**: Prevents the drop down from opening on click or mousedown, which allows a user to open/close the drop down with a custom event handler.
            "customShowHideEvent": false,

            // **autoWidth**: Makes sure the width of the drop down is wide enough to fit all of the drop down options
            "autoWidth": true,

            // **html**: Determines whether or not option text is rendered as html or as text
            "html": true,

            // **populate**: Convenience option that accepts JSON data, an array, a single object, or valid HTML string to add options to the drop down list
            "populate": "",

            // **dynamicPositioning**: Determines whether or not the drop down list should fit inside it's viewport
            "dynamicPositioning": true,

            // **hideCurrent**: Determines whether or not the currently selected drop down option is hidden in the list
            "hideCurrent": false

        },

        // Get Themes
        // ----------
        //      Retrieves the active drop down theme and returns the theme object
        "getThemes": function() {

            var self = this,
                theme = $(self.element).attr("data-theme") || "c";

            return {

                // Twitter Bootstrap Theme
                "bootstrap": {

                    "focus": "active",

                    "hover": "",

                    "enabled": "enabled",

                    "disabled": "disabled",

                    "arrow": "caret",

                    "button": "btn",

                    "list": "dropdown-menu",

                    "container": "bootstrap",

                    "open": "open"

                },

                // jQueryUI Theme
                "jqueryui": {

                    "focus": "ui-state-focus",

                    "hover": "ui-state-hover",

                    "enabled": "ui-state-enabled",

                    "disabled": "ui-state-disabled",

                    "arrow": "ui-icon ui-icon-triangle-1-s",

                    "button": "ui-widget ui-state-default",

                    "list": "ui-widget ui-widget-content",

                    "container": "jqueryui",

                    "open": "selectboxit-open"

                },

                // jQuery Mobile Theme
                "jquerymobile": {

                    "focus": "ui-btn-down-" + theme,

                    "hover": "ui-btn-hover-" + theme,

                    "enabled": "ui-enabled",

                    "disabled": "ui-disabled",

                    "arrow": "ui-icon ui-icon-arrow-d ui-icon-shadow",

                    "button": "ui-btn ui-btn-icon-right ui-btn-corner-all ui-shadow ui-btn-up-" + theme,

                    "list": "ui-btn ui-btn-icon-right ui-btn-corner-all ui-shadow ui-btn-up-" + theme,

                    "container": "jquerymobile",

                    "open": "selectboxit-open"

                },

                "default": {

                    "focus": "selectboxit-focus",

                    "hover": "selectboxit-hover",

                    "enabled": "selectboxit-enabled",

                    "disabled": "selectboxit-disabled",

                    "arrow": "selectboxit-default-arrow",

                    "button": "selectboxit-btn",

                    "list": "selectboxit-list",

                    "container": "selectboxit-container",

                    "open": "selectboxit-open"

                }

            };

        },

        // isDeferred
        // ----------
        //      Checks if parameter is a defered object      
        isDeferred: function(def) {
            return $.isPlainObject(def) && def.promise && def.done;
        },

        // _Create
        // -------
        //      Sets the Plugin Instance variables and
        //      constructs the plugin.  Only called once.
        _create: function(internal) {

            var self = this,
                populateOption = self.options["populate"];

            // If the element calling SelectBoxIt is not a select box or is not visible
            if(!self.element.is("select")) {

                // Exits the plugin
                return;

            }

            // Stores a reference to the parent Widget class
            self.widgetProto = $.Widget.prototype;

            // The original select box DOM element
            self.originalElem = self.element[0];

            // The original select box DOM element wrapped in a jQuery object
            self.selectBox = self.element;

            if(self.options["populate"] && self.add && !internal) {

                self.add(populateOption);

            }

            // All of the original select box options
            self.selectItems = self.element.find("option");

            // The first option in the original select box
            self.firstSelectItem = self.selectItems.slice(0, 1);

            // The html document height
            self.documentHeight = $(document).height();

            self.theme = self.getThemes()[self.options["theme"]] || self.getThemes()["default"];

            // The index of the currently selected dropdown list option
            self.currentFocus = 0;

            // Keeps track of which blur events will hide the dropdown list options
            self.blur = true;

             // Array holding all of the original select box options text
            self.textArray = [];

            // Maintains search order in the `search` method
            self.currentIndex = 0;

            // Maintains the current search text in the `search` method
            self.currentText = "";

            // Whether or not the dropdown list opens up or down (depending on how much room is on the page)
            self.flipped = false;

            // If the create method is not called internally by the plugin
            if(!internal) {

                // Saves the original select box `style` attribute within the `selectBoxStyles` plugin instance property
                self.selectBoxStyles = self.selectBox.attr("style");

            }

            // Creates the dropdown elements that will become the dropdown
            // Creates the ul element that will become the dropdown options list
            // Add's all attributes (excluding id, class names, and unselectable properties) to the drop down and drop down items list
            // Hides the original select box and adds the new plugin DOM elements to the page
            // Adds event handlers to the new dropdown list
            self._createDropdownButton()._createUnorderedList()._copyAttributes()._replaceSelectBox()._addClasses(self.theme)._eventHandlers();

            if(self.originalElem.disabled && self.disable) {

                // Disables the dropdown list if the original dropdown list had the `disabled` attribute
                self.disable();

            }

            // If the Aria Accessibility Module has been included
            if(self._ariaAccessibility) {

                // Adds ARIA accessibillity tags to the dropdown list
                self._ariaAccessibility();

            }

            self.isMobile = self.options["isMobile"]();

            if(self._mobile) {

                // Adds mobile support
                self._mobile();

            }

            // If the native option is set to true
            if(self.options["native"]) {

                // Triggers the native select box when a user is interacting with the drop down
                this._applyNativeSelect();

            }

            // Triggers a custom `create` event on the original dropdown list
            self.triggerEvent("create");

            // Maintains chainability
            return self;

        },

        // _Create dropdown button
        // -----------------------
        //      Creates new dropdown and dropdown elements to replace
        //      the original select box with a dropdown list
        _createDropdownButton: function() {

            var self = this,
                originalElemId = self.originalElemId = self.originalElem.id || "",
                originalElemValue = self.originalElemValue = self.originalElem.value || "",
                originalElemName = self.originalElemName = self.originalElem.name || "",
                copyClasses = self.options["copyClasses"],
                selectboxClasses = self.selectBox.attr("class") || "";

            // Creates a dropdown element that contains the dropdown list text value
            self.dropdownText = $("<span/>", {

                // Dynamically sets the dropdown `id` attribute
                "id": originalElemId && originalElemId + "SelectBoxItText",

                "class": "selectboxit-text",

                // IE specific attribute to not allow the element to be selected
                "unselectable": "on",

                // Sets the dropdown `text` to equal the original select box default value
                "text": self.firstSelectItem.text()

            }).

            // Sets the HTML5 data attribute on the dropdownText `dropdown` element
            attr("data-val", originalElemValue);

            self.dropdownImageContainer = $("<span/>", {

                "class": "selectboxit-option-icon-container"

            });

            // Creates a dropdown element that contains the dropdown list text value
            self.dropdownImage = $("<i/>", {

                // Dynamically sets the dropdown `id` attribute
                "id": originalElemId && originalElemId + "SelectBoxItDefaultIcon",

                "class": "selectboxit-default-icon",

                // IE specific attribute to not allow the element to be selected
                "unselectable": "on"

            });

            // Creates a dropdown to act as the new dropdown list
            self.dropdown = $("<span/>", {

                // Dynamically sets the dropdown `id` attribute
                "id": originalElemId && originalElemId + "SelectBoxIt",

                "class": "selectboxit " + (copyClasses === "button" ? selectboxClasses: "") + " " + (self.selectBox.prop("disabled") ? self.theme["disabled"]: self.theme["enabled"]),

                // Sets the dropdown `name` attribute to be the same name as the original select box
                "name": originalElemName,

                // Sets the dropdown `tabindex` attribute to 0 to allow the dropdown to be focusable
                "tabindex": self.selectBox.attr("tabindex") || "0",

                // IE specific attribute to not allow the element to be selected
                "unselectable": "on"

            }).

            // Appends the default text to the inner dropdown list dropdown element
            append(self.dropdownImageContainer.append(self.dropdownImage)).append(self.dropdownText);

            // Create the dropdown container that will hold all of the dropdown list dom elements
            self.dropdownContainer = $("<span/>", {

                "id": originalElemId && originalElemId + "SelectBoxItContainer",

                "class": "selectboxit-container " + (copyClasses === "container" ? selectboxClasses: "")

            }).

            // Appends the inner dropdown list dropdown element to the dropdown list container dropdown element
            append(self.dropdown);

            // Maintains chainability
            return self;

        },

        // _Create Unordered List
        // ----------------------
        //      Creates an unordered list element to hold the
        //        new dropdown list options that directly match
        //        the values of the original select box options
        _createUnorderedList: function() {

            // Storing the context of the widget
            var self = this,

                dataDisabled,

                optgroupClass,

                optgroupElement,

                iconClass,

                iconUrl,

                iconUrlClass,

                iconUrlStyle,

                // Declaring the variable that will hold all of the dropdown list option elements
                currentItem = "",

                originalElemId = self.originalElemId || "",

                // Creates an unordered list element
                createdList = $("<ul/>", {

                    // Sets the unordered list `id` attribute
                    "id": originalElemId && originalElemId + "SelectBoxItOptions",

                    "class": "selectboxit-options",

                    //Sets the unordered list `tabindex` attribute to -1 to prevent the unordered list from being focusable
                    "tabindex": -1

                }),

                currentDataSelectedText,

                currentDataText,

                currentText,

                parent;

            // Checks the `showFirstOption` plugin option to determine if the first dropdown list option should be shown in the options list.
            if (!self.options["showFirstOption"]) {

                // Disables the first select box option
                self.selectItems.first().attr("disabled", "disabled");

                // Excludes the first dropdown list option from the options list
                self.selectItems = self.selectBox.find("option").slice(1);

            }

            // Loops through the original select box options list and copies the text of each
            // into new list item elements of the new dropdown list
            self.selectItems.each(function(index) {

                optgroupClass = "";

                optgroupElement = "";

                dataDisabled = $(this).prop("disabled");

                iconClass = $(this).attr("data-icon") || "";

                iconUrl = $(this).attr("data-iconurl") || "";

                iconUrlClass = iconUrl ? "selectboxit-option-icon-url": "";

                iconUrlStyle = iconUrl ? 'style="background-image:url(\'' + iconUrl + '\');"': "";

                currentDataSelectedText = $(this).attr("data-selectedtext");

                currentDataText = $(this).attr("data-text");

                currentText = currentDataText ? currentDataText: $(this).text();

                parent = $(this).parent();

                // If the current option being traversed is within an optgroup

                if(parent.is("optgroup")) {

                    optgroupClass = "selectboxit-optgroup-option";

                    if($(this).index() === 0) {

                         optgroupElement = '<span class="selectboxit-optgroup-header ' + parent.first().attr("class") + '"data-disabled="true">' + parent.first().attr("label") + '</span>';

                    }

                }

                // Uses string concatenation for speed (applies HTML attribute encoding)
                currentItem += optgroupElement + '<li id="' + index + '" data-val="' + this.value + '" data-disabled="' + dataDisabled + '" class="' + optgroupClass + " selectboxit-option " + ($(this).attr("class") || "") + '"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon ' + iconClass + ' ' + (iconUrlClass || self.theme["container"]) + '"' + iconUrlStyle + '></i></span>' + (self.options["html"] ? currentText: self.htmlEscape(currentText)) + '</a></li>';

                // Stores all of the original select box options text inside of an array
                // (Used later in the `searchAlgorithm` method)
                self.textArray[index] = dataDisabled ? "": currentText;

                // Checks the original select box option for the `selected` attribute
                if (this.selected) {

                    // Replaces the default text with the selected option text
                    self._setText(self.dropdownText, currentDataSelectedText || currentText);

                    //Set the currently selected option
                    self.currentFocus = index;

                }

            });

            // If the `defaultText` option is being used
            if ((self.options["defaultText"] || self.selectBox.attr("data-text"))) {

                var defaultedText = self.options["defaultText"] || self.selectBox.attr("data-text");

                //Overrides the current dropdown default text with the value the user specifies in the `defaultText` option
                self._setText(self.dropdownText, defaultedText);

                self.options["defaultText"] = defaultedText;
            }

            // Append the list item to the unordered list
            createdList.append(currentItem);

            // Stores the dropdown list options list inside of the `list` instance variable
            self.list = createdList;

            // Append the dropdown list options list to the dropdown container element
            self.dropdownContainer.append(self.list);

            // Stores the individual dropdown list options inside of the `listItems` instance variable
            self.listItems = self.list.children("li");

            self.listAnchors = self.list.find("a");

            // Sets the 'selectboxit-option-first' class name on the first drop down option
            self.listItems.first().addClass("selectboxit-option-first");

            // Sets the 'selectboxit-option-last' class name on the last drop down option
            self.listItems.last().addClass("selectboxit-option-last");

            // Set the disabled CSS class for select box options
            self.list.find("li[data-disabled='true']").not(".optgroupHeader").addClass(self.theme["disabled"]);

            self.dropdownImage.addClass(self.selectBox.attr("data-icon") || self.options["defaultIcon"] || self.listItems.eq(self.currentFocus).find("i").attr("class"));

            self.dropdownImage.attr("style", self.listItems.eq(self.currentFocus).find("i").attr("style"));

            //Maintains chainability
            return self;

        },

        // _Replace Select Box
        // -------------------
        //      Hides the original dropdown list and inserts
        //        the new DOM elements
        _replaceSelectBox: function() {

            var self = this,
                height,
                originalElemId = self.originalElem.id || "",
                size = self.selectBox.attr("data-size"),
                listSize = self.listSize = size === undefined ? "auto" : size === "0" || "size" === "auto" ? "auto" : +size;

            // Hides the original select box
            self.selectBox.css("display", "none").

            // Adds the new dropdown list to the page directly after the hidden original select box element
            after(self.dropdownContainer);

            // The height of the dropdown list
            height = self.dropdown.height();

            // The down arrow element of the dropdown list
            self.downArrow = $("<i/>", {

                // Dynamically sets the dropdown `id` attribute of the dropdown list down arrow
                "id": originalElemId && originalElemId + "SelectBoxItArrow",

                "class": "selectboxit-arrow",

                // IE specific attribute to not allow the dropdown list text to be selected
                "unselectable": "on"

            });

            // The down arrow container element of the dropdown list
            self.downArrowContainer = $("<span/>", {

                // Dynamically sets the dropdown `id` attribute for the down arrow container element
                "id": originalElemId && originalElemId + "SelectBoxItArrowContainer",

                "class": "selectboxit-arrow-container",

                // IE specific attribute to not allow the dropdown list text to be selected
                "unselectable": "on"

            }).

            // Inserts the down arrow element inside of the down arrow container element
            append(self.downArrow);

            // Appends the down arrow element to the dropdown list
            self.dropdown.append(self.downArrowContainer);

            // Adds the `selectboxit-selected` class name to the currently selected drop down option
            self.listItems.removeClass("selectboxit-selected").eq(self.currentFocus).addClass("selectboxit-selected");

            // If an image is not being used
            if(!self._realOuterWidth(self.dropdownImageContainer)) {

                // Removes the image and image container
                self.dropdownImageContainer.remove();

            }

            // If the `autoWidth` option is true
            if(self.options["autoWidth"]) {

                // If the SelectBoxIt drop down is visible (i.e. not set to display: none;)
                if(self.dropdown.is(":visible")) {

                    // Sets the auto width of the drop down
                    self.dropdown.css({ "width": "auto" }).css({

                        "width": self.list.outerWidth(true) + self.downArrowContainer.outerWidth(true) + self.dropdownImage.outerWidth(true)

                    });

                }

                // If the SelectBoxIt drop down is hidden (i.e. set to display: none)
                else {

                    // Sets the auto width of the drop down
                    self.dropdown.css({ "width": "auto" }).css({

                        "width": self._realOuterWidth(self.list) + self._realOuterWidth(self.downArrowContainer) + self._realOuterWidth(self.dropdownImage)

                    });

                }

                self.list.css({

                    "min-width": self.dropdown.width()

                });

            }

            // Dynamically adds the `max-width` and `line-height` CSS styles of the dropdown list text element
            self.dropdownText.css({

                "max-width": self.dropdownContainer.width() - (self.downArrowContainer.outerWidth(true) + self.dropdownImage.outerWidth(true))

            });

            if($.type(listSize) === "number") {

                // Stores the new `max-height` for later
                self.maxHeight = self.listAnchors.outerHeight(true) * listSize;

            }

            // Maintains chainability
            return self;

        },

        // _Scroll-To-View
        // ---------------
        //      Updates the dropdown list scrollTop value
        _scrollToView: function(type) {

            var self = this,

                currentOption = self.listItems.eq(self.currentFocus),

                // The current scroll positioning of the dropdown list options list
                listScrollTop = self.list.scrollTop(),

                // The height of the currently selected dropdown list option
                currentItemHeight = currentOption.height(),

                // The relative distance from the currently selected dropdown list option to the the top of the dropdown list options list
                currentTopPosition = currentOption.position().top,

                absCurrentTopPosition = Math.abs(currentTopPosition),

                // The height of the dropdown list option list
                listHeight = self.list.height(),

                currentText;

            // Scrolling logic for a text search
            if (type === "search") {

                // Increases the dropdown list options `scrollTop` if a user is searching for an option
                // below the currently selected option that is not visible
                if (listHeight - currentTopPosition < currentItemHeight) {

                    // The selected option will be shown at the very bottom of the visible options list
                    self.list.scrollTop(listScrollTop + (currentTopPosition - (listHeight - currentItemHeight)));

                }

                // Decreases the dropdown list options `scrollTop` if a user is searching for an option above the currently selected option that is not visible
                else if (currentTopPosition < -1) {

                    self.list.scrollTop(currentTopPosition - currentItemHeight);

                }
            }

            // Scrolling logic for the `up` keyboard navigation
            else if (type === "up") {

                // Decreases the dropdown list option list `scrollTop` if a user is navigating to an element that is not visible
                if (currentTopPosition < -1) {

                    self.list.scrollTop(listScrollTop - absCurrentTopPosition);

                }
            }

            // Scrolling logic for the `down` keyboard navigation
            else if (type === "down") {

                // Increases the dropdown list options `scrollTop` if a user is navigating to an element that is not fully visible
                if (listHeight - currentTopPosition < currentItemHeight) {

                    // Increases the dropdown list options `scrollTop` by the height of the current option item.
                    self.list.scrollTop((listScrollTop + (absCurrentTopPosition - listHeight + currentItemHeight)));

                }
            }

            // Maintains chainability
            return self;

        },

        // _Callback
        // ---------
        //      Call the function passed into the method
        _callbackSupport: function(callback) {

            var self = this;

            // Checks to make sure the parameter passed in is a function
            if ($.isFunction(callback)) {

                // Calls the method passed in as a parameter and sets the current `SelectBoxIt` object that is stored in the jQuery data method as the context(allows for `this` to reference the SelectBoxIt API Methods in the callback function. The `dropdown` DOM element that acts as the new dropdown list is also passed as the only parameter to the callback
                callback.call(self, self.dropdown);

            }

            // Maintains chainability
            return self;

        },

        // _setText
        // --------
        //      Set's the text or html for the drop down
        _setText: function(elem, currentText) {

            var self = this;

            if(self.options["html"]) {

                elem.html(currentText);

            }

            else {

                elem.text(currentText);

            }

            return self;

        },

        // Open
        // ----
        //      Opens the dropdown list options list
        open: function(callback) {

            var self = this,
                showEffect = self.options["showEffect"],
                showEffectSpeed = self.options["showEffectSpeed"],
                showEffectOptions = self.options["showEffectOptions"],
                isNative = self.options["native"],
                isMobile = self.isMobile;

            // If there are no select box options, do not try to open the select box
            if(!self.listItems.length || self.dropdown.hasClass(self.theme["disabled"])) {

                return self;

            }

            // If the new drop down is being used and is not visible
            if((!isNative && !isMobile) && !this.list.is(":visible")) {

                // Triggers a custom "open" event on the original select box
                self.triggerEvent("open");

                if (self._dynamicPositioning && self.options["dynamicPositioning"]) {

                    // Dynamically positions the dropdown list options list
                    self._dynamicPositioning();

                }

                // Uses `no effect`
                if(showEffect === "none") {

                    // Does not require a callback function because this animation will complete before the call to `scrollToView`
                    self.list.show();

                }

                // Uses the jQuery `show` special effect
                else if(showEffect === "show" || showEffect === "slideDown" || showEffect === "fadeIn") {

                    // Requires a callback function to determine when the `show` animation is complete
                    self.list[showEffect](showEffectSpeed);

                }

                // If none of the above options were passed, then a `jqueryUI show effect` is expected
                else {

                    // Allows for custom show effects via the [jQueryUI core effects](http://http://jqueryui.com/demos/show/)
                    self.list.show(showEffect, showEffectOptions, showEffectSpeed);

                }

                self.list.promise().done(function() {

                    // Updates the list `scrollTop` attribute
                    self._scrollToView("search");

                });

            }

            // Provide callback function support
            self._callbackSupport(callback);

            // Maintains chainability
            return self;

        },

        // Close
        // -----
        //      Closes the dropdown list options list
        close: function(callback) {

            var self = this,
                hideEffect = self.options["hideEffect"],
                hideEffectSpeed = self.options["hideEffectSpeed"],
                hideEffectOptions = self.options["hideEffectOptions"],
                isNative = self.options["native"],
                isMobile = self.isMobile;

            // If the drop down is being used and is visible
            if((!isNative && !isMobile) && self.list.is(":visible")) {

                // Triggers a custom "close" event on the original select box
                self.triggerEvent("close");

                // Uses `no effect`
                if(hideEffect === "none") {

                    // Does not require a callback function because this animation will complete before the call to `scrollToView`
                    self.list.hide();

                }

                // Uses the jQuery `hide` special effect
                else if(hideEffect === "hide" || hideEffect === "slideUp" || hideEffect === "fadeOut") {

                    self.list[hideEffect](hideEffectSpeed);

                }

                // If none of the above options were passed, then a `jqueryUI hide effect` is expected
                else {

                    // Allows for custom hide effects via the [jQueryUI core effects](http://http://jqueryui.com/demos/hide/)
                    self.list.hide(hideEffect, hideEffectOptions, hideEffectSpeed);

                }

            }

            // Provide callback function support
            self._callbackSupport(callback);

            // Maintains chainability
            return self;

        },

        toggle: function() {

            var self = this,
                listIsVisible = self.list.is(":visible");

            if(listIsVisible) {

                self.close();

            }

            else if(!listIsVisible) {

                self.open();

            }

        },

        // _Key Mappings
        // -------------
        //      Object literal holding the string representation of each key code
        _keyMappings: {

            "38": "up",

            "40": "down",

            "13": "enter",

            "8": "backspace",

            "9": "tab",

            "32": "space",

            "27": "esc"

        },

        // _Key Down Methods
        // -----------------
        //      Methods to use when the keydown event is triggered
        _keydownMethods: function() {

            var self = this,
                moveToOption = self.list.is(":visible") || !self.options["keydownOpen"];

            return {

                "down": function() {

                    // If the plugin options allow keyboard navigation
                    if (self.moveDown && moveToOption) {

                        self.moveDown();

                    }

                },

                "up": function() {

                     // If the plugin options allow keyboard navigation
                    if (self.moveUp && moveToOption) {

                        self.moveUp();

                    }

                },

                "enter": function() {

                    var activeElem = self.listItems.eq(self.currentFocus);

                    // Updates the dropdown list value
                    self._update(activeElem);

                    if (activeElem.attr("data-preventclose") !== "true") {

                        // Closes the drop down list options list
                        self.close();

                    }

                    // Triggers the `enter` events on the original select box
                    self.triggerEvent("enter");

                },

                "tab": function() {

                    // Triggers the custom `tab-blur` event on the original select box
                    self.triggerEvent("tab-blur");

                    // Closes the drop down list
                    self.close();

                },

                "backspace": function() {

                    // Triggers the custom `backspace` event on the original select box
                    self.triggerEvent("backspace");

                },

                "esc": function() {

                    // Closes the dropdown options list
                    self.close();

                }

            };

        },


        // _Event Handlers
        // ---------------
        //      Adds event handlers to the new dropdown and the original select box
        _eventHandlers: function() {

            // LOCAL VARIABLES
            var self = this,
                nativeMousedown = self.options["nativeMousedown"],
                customShowHideEvent = self.options["customShowHideEvent"],
                currentDataText,
                currentText,
                focusClass = self.focusClass,
                hoverClass = self.hoverClass,
                openClass = self.openClass;

            // Select Box events
            this.dropdown.on({

                // `click` event with the `selectBoxIt` namespace
                "click.selectBoxIt": function() {

                    // Used to make sure the dropdown becomes focused (fixes IE issue)
                    self.dropdown.trigger("focus", true);

                    // The `click` handler logic will only be applied if the dropdown list is enabled
                    if (!self.originalElem.disabled) {

                        // Triggers the `click` event on the original select box
                        self.triggerEvent("click");

                        if(!nativeMousedown && !customShowHideEvent) {

                            self.toggle();

                        }

                    }

                },

                // `mousedown` event with the `selectBoxIt` namespace
                "mousedown.selectBoxIt": function() {

                    // Stores data in the jQuery `data` method to help determine if the dropdown list gains focus from a click or tabstop.  The mousedown event fires before the focus event.
                    $(this).data("mdown", true);

                    self.triggerEvent("mousedown");

                    if(nativeMousedown && !customShowHideEvent) {

                        self.toggle();

                    }

                },

                // `mouseup` event with the `selectBoxIt` namespace
                "mouseup.selectBoxIt": function() {

                    self.triggerEvent("mouseup");

                },

                // `blur` event with the `selectBoxIt` namespace.  Uses special blur logic to make sure the dropdown list closes correctly
                "blur.selectBoxIt": function() {

                    // If `self.blur` property is true
                    if (self.blur) {

                        // Triggers both the `blur` and `focusout` events on the original select box.
                        // The `focusout` event is also triggered because the event bubbles
                        // This event has to be used when using event delegation (such as the jQuery `delegate` or `on` methods)
                        // Popular open source projects such as Backbone.js utilize event delegation to bind events, so if you are using Backbone.js, use the `focusout` event instead of the `blur` event
                        self.triggerEvent("blur");

                        // Closes the dropdown list options list
                        self.close();

                        $(this).removeClass(focusClass);

                    }

                },

                "focus.selectBoxIt": function(event, internal) {

                    // Stores the data associated with the mousedown event inside of a local variable
                    var mdown = $(this).data("mdown");

                    // Removes the jQuery data associated with the mousedown event
                    $(this).removeData("mdown");

                    // If a mousedown event did not occur and no data was passed to the focus event (this correctly triggers the focus event), then the dropdown list gained focus from a tabstop
                    if (!mdown && !internal) {

                        setTimeout(function() {

                            // Triggers the `tabFocus` custom event on the original select box
                            self.triggerEvent("tab-focus");

                        }, 0);

                    }

                    // Only trigger the `focus` event on the original select box if the dropdown list is hidden (this verifies that only the correct `focus` events are used to trigger the event on the original select box
                    if(!internal) {

                        if(!$(this).hasClass(self.theme["disabled"])) {

                            $(this).addClass(focusClass);

                        }

                        //Triggers the `focus` default event on the original select box
                        self.triggerEvent("focus");

                    }

                },

                // `keydown` event with the `selectBoxIt` namespace.  Catches all user keyboard navigations
                "keydown.selectBoxIt": function(e) {

                    // Stores the `keycode` value in a local variable
                    var currentKey = self._keyMappings[e.keyCode],

                        keydownMethod = self._keydownMethods()[currentKey];

                    if(keydownMethod) {

                        keydownMethod();

                        if(self.options["keydownOpen"] && (currentKey === "up" || currentKey === "down")) {

                            self.open();

                        }

                    }

                    if(keydownMethod && currentKey !== "tab") {

                        e.preventDefault();

                    }

                },

                // `keypress` event with the `selectBoxIt` namespace.  Catches all user keyboard text searches since you can only reliably get character codes using the `keypress` event
                "keypress.selectBoxIt": function(e) {

                    // Sets the current key to the `keyCode` value if `charCode` does not exist.  Used for cross
                    // browser support since IE uses `keyCode` instead of `charCode`.
                    var currentKey = e.charCode || e.keyCode,

                        key = self._keyMappings[e.charCode || e.keyCode],

                        // Converts unicode values to characters
                        alphaNumericKey = String.fromCharCode(currentKey);

                    // If the plugin options allow text searches
                    if (self.search && (!key || (key && key === "space"))) {

                        // Calls `search` and passes the character value of the user's text search
                        self.search(alphaNumericKey, true, true);

                    }

                    if(key === "space") {

                        e.preventDefault();

                    }

                },

                // `mousenter` event with the `selectBoxIt` namespace .The mouseenter JavaScript event is proprietary to Internet Explorer. Because of the event's general utility, jQuery simulates this event so that it can be used regardless of browser.
                "mouseenter.selectBoxIt": function() {

                    // Trigger the `mouseenter` event on the original select box
                    self.triggerEvent("mouseenter");

                },

                // `mouseleave` event with the `selectBoxIt` namespace. The mouseleave JavaScript event is proprietary to Internet Explorer. Because of the event's general utility, jQuery simulates this event so that it can be used regardless of browser.
                "mouseleave.selectBoxIt": function() {

                    // Trigger the `mouseleave` event on the original select box
                    self.triggerEvent("mouseleave");

                }

            });

            // Select box options events that set the dropdown list blur logic (decides when the dropdown list gets
            // closed)
            self.list.on({

                // `mouseover` event with the `selectBoxIt` namespace
                "mouseover.selectBoxIt": function() {

                    // Prevents the dropdown list options list from closing
                    self.blur = false;

                },

                // `mouseout` event with the `selectBoxIt` namespace
                "mouseout.selectBoxIt": function() {

                    // Allows the dropdown list options list to close
                    self.blur = true;

                },

                // `focusin` event with the `selectBoxIt` namespace
                "focusin.selectBoxIt": function() {

                    // Prevents the default browser outline border to flicker, which results because of the `blur` event
                    self.dropdown.trigger("focus", true);

                }

            });

            // Select box individual options events bound with the jQuery `delegate` method.  `Delegate` was used because binding indropdownidual events to each list item (since we don't know how many there will be) would decrease performance.  Instead, we bind each event to the unordered list, provide the list item context, and allow the list item events to bubble up (`event bubbling`). This greatly increases page performance because we only have to bind an event to one element instead of x number of elements. Delegates the `click` event with the `selectBoxIt` namespace to the list items
            self.list.on({

                "mousedown.selectBoxIt": function() {

                    self._update($(this));

                    self.triggerEvent("option-click");

                    // If the current drop down option is not disabled
                    if ($(this).attr("data-disabled") === "false" && $(this).attr("data-preventclose") !== "true") {

                        // Closes the drop down list
                        self.close();

                    }

                    setTimeout(function() {

                        self.dropdown.trigger('focus', true);

                    }, 0);

                },

               // Delegates the `focusin` event with the `selectBoxIt` namespace to the list items
               "focusin.selectBoxIt": function() {

                    // Removes the hover class from the previous drop down option
                    self.listItems.not($(this)).removeAttr("data-active");

                    $(this).attr("data-active", "");

                    var listIsHidden = self.list.is(":hidden");

                    if((self.options["searchWhenHidden"] && listIsHidden) || self.options["aggressiveChange"] || (listIsHidden && self.options["selectWhenHidden"])) {

                        self._update($(this));

                    }

                    // Adds the focus CSS class to the currently focused dropdown list option
                   $(this).addClass(focusClass);

                },

                // Delegates the `focus` event with the `selectBoxIt` namespace to the list items
                "mouseup.selectBoxIt": function() {

                    if(nativeMousedown && !customShowHideEvent) {

                        self._update($(this));

                        self.triggerEvent("option-mouseup");

                        // If the current drop down option is not disabled
                        if ($(this).attr("data-disabled") === "false" && $(this).attr("data-preventclose") !== "true") {

                            // Closes the drop down list
                            self.close();

                        }

                    }

                },

                // Delegates the `mouseenter` event with the `selectBoxIt` namespace to the list items
                "mouseenter.selectBoxIt": function() {

                    // If the currently moused over drop down option is not disabled
                    if($(this).attr("data-disabled") === "false") {

                        self.listItems.removeAttr("data-active");

                        $(this).addClass(focusClass).attr("data-active", "");

                        // Sets the dropdown list indropdownidual options back to the default state and sets the focus CSS class on the currently hovered option
                        self.listItems.not($(this)).removeClass(focusClass);

                        $(this).addClass(focusClass);

                        self.currentFocus = +$(this).attr("id");

                    }

                },

                // Delegates the `mouseleave` event with the `selectBoxIt` namespace to the list items
                "mouseleave.selectBoxIt": function() {

                    // If the currently moused over drop down option is not disabled
                    if($(this).attr("data-disabled") === "false") {

                        // Removes the focus class from the previous drop down option
                        self.listItems.not($(this)).removeClass(focusClass).removeAttr("data-active");

                        $(this).addClass(focusClass);

                        self.currentFocus = +$(this).attr("id");

                    }

                },

                // Delegates the `blur` event with the `selectBoxIt` namespace to the list items
                "blur.selectBoxIt": function() {

                    // Removes the focus CSS class from the previously focused dropdown list option
                    $(this).removeClass(focusClass);

                }

            }, ".selectboxit-option");

            // Select box individual option anchor events bound with the jQuery `delegate` method.  `Delegate` was used because binding indropdownidual events to each list item (since we don't know how many there will be) would decrease performance.  Instead, we bind each event to the unordered list, provide the list item context, and allow the list item events to bubble up (`event bubbling`). This greatly increases page performance because we only have to bind an event to one element instead of x number of elements. Delegates the `click` event with the `selectBoxIt` namespace to the list items
            self.list.on({

                "click.selectBoxIt": function(ev) {

                    // Prevents the internal anchor tag from doing anything funny
                    ev.preventDefault();

                }

            }, "a");

            // Original dropdown list events
            self.selectBox.on({

                // `change` event handler with the `selectBoxIt` namespace
                "change.selectBoxIt, internal-change.selectBoxIt": function(event, internal) {

                    var currentOption,
                        currentDataSelectedText;

                    // If the user called the change method
                    if(!internal) {

                        currentOption = self.list.find('li[data-val="' + self.originalElem.value + '"]');

                        // If there is a dropdown option with the same value as the original select box element
                        if(currentOption.length) {

                            self.listItems.eq(self.currentFocus).removeClass(self.focusClass);

                            self.currentFocus = +currentOption.attr("id");

                        }

                    }

                    currentOption = self.listItems.eq(self.currentFocus);

                    currentDataSelectedText = currentOption.attr("data-selectedtext");

                    currentDataText = currentOption.attr("data-text");

                    currentText = currentDataText ?  currentDataText: currentOption.find("a").text();

                    // Sets the new dropdown list text to the value of the current option
                    self._setText(self.dropdownText, currentDataSelectedText || currentText);

                    self.dropdownText.attr("data-val", self.originalElem.value);

                    if(currentOption.find("i").attr("class")) {

                        self.dropdownImage.attr("class", currentOption.find("i").attr("class")).addClass("selectboxit-default-icon");

                        self.dropdownImage.attr("style", currentOption.find("i").attr("style"));
                    }

                    // Triggers a custom changed event on the original select box
                    self.triggerEvent("changed");

                },

                // `disable` event with the `selectBoxIt` namespace
                "disable.selectBoxIt": function() {

                    // Adds the `disabled` CSS class to the new dropdown list to visually show that it is disabled
                    self.dropdown.addClass(self.theme["disabled"]);

                },

                // `enable` event with the `selectBoxIt` namespace
                "enable.selectBoxIt": function() {

                    // Removes the `disabled` CSS class from the new dropdown list to visually show that it is enabled
                    self.dropdown.removeClass(self.theme["disabled"]);

                },

                // `open` event with the `selectBoxIt` namespace
                "open.selectBoxIt": function() {

                    var currentElem = self.list.find("li[data-val='" + self.dropdownText.attr("data-val") + "']"),
                        activeElem;

                    // If no current element can be found, then select the first drop down option
                    if(!currentElem.length) {

                        // Sets the default value of the dropdown list to the first option that is not disabled
                        currentElem = self.listItems.not("[data-disabled=true]").first();

                    }

                    self.currentFocus = +currentElem.attr("id");

                    activeElem = self.listItems.eq(self.currentFocus);

                    self.dropdown.addClass(openClass).

                    // Removes the focus class from the dropdown list and adds the library focus class for both the dropdown list and the currently selected dropdown list option
                    removeClass(hoverClass).addClass(focusClass);

                    self.listItems.removeClass(self.selectedClass).

                    removeAttr("data-active").not(activeElem).removeClass(focusClass);

                    activeElem.addClass(self.selectedClass).addClass(focusClass);

                    if(self.options.hideCurrent) {

                        self.listItems.show();

                        activeElem.hide();

                    }

                },

                "close.selectBoxIt": function() {

                    // Removes the open class from the dropdown container
                    self.dropdown.removeClass(openClass);

                },

                "blur.selectBoxIt": function() {

                    self.dropdown.removeClass(focusClass);

                },

                // `mousenter` event with the `selectBoxIt` namespace
                "mouseenter.selectBoxIt": function() {

                    if(!$(this).hasClass(self.theme["disabled"])) {
                        self.dropdown.addClass(hoverClass);
                    }

                },

                // `mouseleave` event with the `selectBoxIt` namespace
                "mouseleave.selectBoxIt": function() {

                    // Removes the hover CSS class on the previously hovered dropdown list option
                    self.dropdown.removeClass(hoverClass);

                },

                // `destroy` event
                "destroy": function(ev) {

                    // Prevents the default action from happening
                    ev.preventDefault();

                    // Prevents the destroy event from propagating
                    ev.stopPropagation();

                }

            });

            // Maintains chainability
            return self;

        },

        // _update
        // -------
        //      Updates the drop down and select box with the current value
        _update: function(elem) {

            var self = this,
                currentDataSelectedText,
                currentDataText,
                currentText,
                defaultText = self.options["defaultText"] || self.selectBox.attr("data-text"),
                currentElem = self.listItems.eq(self.currentFocus);

            if (elem.attr("data-disabled") === "false") {

                currentDataSelectedText = self.listItems.eq(self.currentFocus).attr("data-selectedtext");

                currentDataText = currentElem.attr("data-text");

                currentText = currentDataText ? currentDataText: currentElem.text();

                // If the default text option is set and the current drop down option is not disabled
                if ((defaultText && self.options["html"] ? self.dropdownText.html() === defaultText: self.dropdownText.text() === defaultText) && self.selectBox.val() === elem.attr("data-val")) {

                    self.triggerEvent("change");

                }

                else {

                    // Sets the original dropdown list value and triggers the `change` event on the original select box
                    self.selectBox.val(elem.attr("data-val"));

                    // Sets `currentFocus` to the currently focused dropdown list option.
                    // The unary `+` operator casts the string to a number
                    // [James Padolsey Blog Post](http://james.padolsey.com/javascript/terse-javascript-101-part-2/)
                    self.currentFocus = +elem.attr("id");

                    // Triggers the dropdown list `change` event if a value change occurs
                    if (self.originalElem.value !== self.dropdownText.attr("data-val")) {

                        self.triggerEvent("change");

                    }

                }

            }

        },

        // _addClasses
        // -----------
        //      Adds SelectBoxIt CSS classes
        _addClasses: function(obj) {

            var self = this,

                focusClass = self.focusClass = obj.focus,

                hoverClass = self.hoverClass = obj.hover,

                buttonClass = obj.button,

                listClass = obj.list,

                arrowClass = obj.arrow,

                containerClass = obj.container,

                openClass = self.openClass = obj.open;

            self.selectedClass = "selectboxit-selected";

            self.downArrow.addClass(self.selectBox.attr("data-downarrow") || self.options["downArrowIcon"] || arrowClass);

            // Adds the correct container class to the dropdown list
            self.dropdownContainer.addClass(containerClass);

            // Adds the correct class to the dropdown list
            self.dropdown.addClass(buttonClass);

            // Adds the default class to the dropdown list options
            self.list.addClass(listClass);

            // Maintains chainability
            return self;

        },

        // Refresh
        // -------
        //    The dropdown will rebuild itself.  Useful for dynamic content.
        refresh: function(callback, internal) {

            var self = this;

            // Destroys the plugin and then recreates the plugin
            self._destroySelectBoxIt()._create(true);

            if(!internal) {
                self.triggerEvent("refresh");
            }

            self._callbackSupport(callback);

            //Maintains chainability
            return self;

        },

        // HTML Escape
        // -----------
        //      HTML encodes a string
        htmlEscape: function(str) {

            return String(str)
                .replace(/&/g, "&amp;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#39;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;");

        },

        // triggerEvent
        // ------------
        //      Trigger's an external event on the original select box element
        triggerEvent: function(eventName) {

            var self = this,
                // Finds the currently option index
                currentIndex = self.options["showFirstOption"] ? self.currentFocus : ((self.currentFocus - 1) >= 0 ? self.currentFocus: 0);

            // Triggers the custom option-click event on the original select box and passes the select box option
            self.selectBox.trigger(eventName, { "selectbox": self.selectBox, "selectboxOption": self.selectItems.eq(currentIndex), "dropdown": self.dropdown, "dropdownOption": self.listItems.eq(self.currentFocus) });

            // Maintains chainability
            return self;

        },

        // _copyAttributes
        // ---------------
        //      Copies HTML attributes from the original select box to the new drop down 
        _copyAttributes: function() {

            var self = this;

            if(self._addSelectBoxAttributes) {

                self._addSelectBoxAttributes();

            }

            return self;

        },

        // _realOuterWidth
        // ---------------
        //      Retrieves the true outerWidth dimensions of a hidden DOM element
        _realOuterWidth: function(elem) {

            if(elem.is(":visible")) {

                return elem.outerWidth(true);

            }

            var self = this,
                clonedElem = elem.clone(),
                outerWidth;

            clonedElem.css({

                "visibility": "hidden",

                "display": "block",

                "position": "absolute"

            }).appendTo("body");

            outerWidth = clonedElem.outerWidth(true);

            clonedElem.remove();

            return outerWidth;
        }

    });

    // Stores the plugin prototype object in a local variable
    var selectBoxIt = $.selectBox.selectBoxIt.prototype;

    // Add Options Module
    // ==================

    // add
    // ---
    //    Adds drop down options
    //    using JSON data, an array,
    //    a single object, or valid HTML string

    selectBoxIt.add = function(data, callback) {

        this._populate(data, function(data) {

            var self = this,
                dataType = $.type(data),
                value,
                x = 0,
                dataLength,
                elems = [],
                isJSON = self._isJSON(data),
                parsedJSON = isJSON && self._parseJSON(data);

            // If the passed data is a local or JSON array
            if(data && (dataType === "array" || (isJSON && parsedJSON.data && $.type(parsedJSON.data) === "array")) || (dataType === "object" && data.data && $.type(data.data) === "array")) {

                // If the data is JSON
                if(self._isJSON(data)) {

                    // Parses the JSON and stores it in the data local variable
                    data = parsedJSON;

                }

                // If there is an inner `data` property stored in the first level of the JSON array
                if(data.data) {

                    // Set's the data to the inner `data` property
                    data = data.data;

                }

                // Loops through the array
                for(dataLength = data.length; x <= dataLength - 1; x += 1) {

                    // Stores the currently traversed array item in the local `value` variable
                    value = data[x];

                    // If the currently traversed array item is an object literal
                    if($.isPlainObject(value)) {

                        // Adds an option to the elems array
                        elems.push($("<option/>", value));

                    }

                    // If the currently traversed array item is a string
                    else if($.type(value) === "string") {

                        // Adds an option to the elems array
                        elems.push($("<option/>", { text: value, value: value }));

                    }

                }

                // Appends all options to the drop down (with the correct object configurations)
                self.selectBox.append(elems);

            }

            // if the passed data is an html string and not a JSON string
            else if(data && dataType === "string" && !self._isJSON(data)) {

                // Appends the html string options to the original select box
                self.selectBox.append(data);

            }

            else if(data && dataType === "object") {

                // Appends an option to the original select box (with the object configurations)
                self.selectBox.append($("<option/>", data));

            }

            else if(data && self._isJSON(data) && $.isPlainObject(self._parseJSON(data))) {

                // Appends an option to the original select box (with the object configurations)
                self.selectBox.append($("<option/>", self._parseJSON(data)));

            }

            // If the dropdown property exists
            if(self.dropdown) {

                // Rebuilds the dropdown
                self.refresh(function() {

                    // Provide callback function support
                    self._callbackSupport(callback);

                }, true);

            } else {

                // Provide callback function support
                self._callbackSupport(callback);

            }

            // Maintains chainability
            return self;

        });

    };

    // parseJSON
    // ---------
    //      Detects JSON support and parses JSON data
    selectBoxIt._parseJSON = function(data) {

        return (JSON && JSON.parse && JSON.parse(data)) || $.parseJSON(data);

    };

    // isjSON
    // ------
    //    Determines if a string is valid JSON

    selectBoxIt._isJSON = function(data) {

        var self = this,
            json;

        try {

            json = self._parseJSON(data);

            // Valid JSON
            return true;

        } catch (e) {

            // Invalid JSON
            return false;

        }

    };

    // _populate
    // --------
    //    Handles asynchronous and synchronous data
    //    to populate the select box

    selectBoxIt._populate = function(data, callback) {

        var self = this;

        data = $.isFunction(data) ? data.call() : data;

        if(self.isDeferred(data)) {

            data.done(function(returnedData) {

                callback.call(self, returnedData);

            });

        }

        else {

            callback.call(self, data);

        }

        // Maintains chainability
        return self;

    };

    // Accessibility Module
    // ====================

    // _ARIA Accessibility
    // ------------------
    //      Adds ARIA (Accessible Rich Internet Applications)
    //      Accessibility Tags to the Select Box

    selectBoxIt._ariaAccessibility = function() {

        var self = this;

        // Adds `ARIA attributes` to the dropdown list
        self.dropdown.attr({

            // W3C `combobox` description: A presentation of a select; usually similar to a textbox where users can type ahead to select an option.
            "role": "combobox",

            //W3C `aria-autocomplete` description: Indicates whether user input completion suggestions are provided.
            "aria-autocomplete": "list",

            // W3C `aria-expanded` description: Indicates whether the element, or another grouping element it controls, is currently expanded or collapsed.
            "aria-expanded": "false",

            // W3C `aria-owns` description: The value of the aria-owns attribute is a space-separated list of IDREFS that reference one or more elements in the document by ID. The reason for adding aria-owns is to expose a parent/child contextual relationship to assistive technologies that is otherwise impossible to infer from the DOM.
            "aria-owns": self.list.attr("id"),

            // W3C `aria-activedescendant` description: This is used when a composite widget is responsible for managing its current active child to reduce the overhead of having all children be focusable. Examples include: multi-level lists, trees, and grids.
            "aria-activedescendant": self.listItems.eq(self.currentFocus).length ? self.listItems.eq(self.currentFocus)[0].id: "",

            // W3C `aria-label` description:  It provides the user with a recognizable name of the object.
            "aria-label": $("label[for='" + self.originalElem.id + "']").text() || "",

            // W3C `aria-live` description: Indicates that an element will be updated.
            // Use the assertive value when the update needs to be communicated to the user more urgently.
            "aria-live": "assertive"

        }).

        // Dynamically adds `ARIA attributes` if the new dropdown list is enabled or disabled
        on({

            //Select box custom `disable` event with the `selectBoxIt` namespace
            "disable.selectBoxIt" : function() {

                // W3C `aria-disabled` description: Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
                self.dropdown.attr("aria-disabled", "true");

            },

            // Select box custom `enable` event with the `selectBoxIt` namespace
            "enable.selectBoxIt" : function() {

                // W3C `aria-disabled` description: Indicates that the element is perceivable but disabled, so it is not editable or otherwise operable.
                self.dropdown.attr("aria-disabled", "false");

            }

        });

        // Adds ARIA attributes to the dropdown list options list
        self.list.attr({

            // W3C `listbox` description: A widget that allows the user to select one or more items from a list of choices.
            "role": "listbox",

            // Indicates that the dropdown list options list is currently hidden
            "aria-hidden": "true"

        });

        // Adds `ARIA attributes` to the dropdown list options
        self.listItems.attr({

            // This must be set for each element when the container element role is set to `listbox`
            "role": "option"

        });

        // Dynamically updates the new dropdown list `aria-label` attribute after the original dropdown list value changes
        self.selectBox.on({

            // Custom `change` event with the `selectBoxIt` namespace
            "change.selectBoxIt": function() {

                // Provides the user with a recognizable name of the object.
                self.dropdownText.attr("aria-label", self.originalElem.value);

            },

            // Custom `open` event with the `selectBoxIt` namespace
            "open.selectBoxIt": function() {

                // Indicates that the dropdown list options list is currently visible
                self.list.attr("aria-hidden", "false");

                // Indicates that the dropdown list is currently expanded
                self.dropdown.attr("aria-expanded", "true");

            },

            // Custom `close` event with the `selectBoxIt` namespace
            "close.selectBoxIt": function() {

                // Indicates that the dropdown list options list is currently hidden
                self.list.attr("aria-hidden", "true");

                // Indicates that the dropdown list is currently collapsed
                self.dropdown.attr("aria-expanded", "false");

            }

        });

        // Maintains chainability
        return self;

    };

    // Copy Attributes Module
    // ======================

    // addSelectBoxAttributes
    // ----------------------
    //      Add's all attributes (excluding id, class names, and the style attribute) from the default select box to the new drop down

    selectBoxIt._addSelectBoxAttributes = function() {

        // Stores the plugin context inside of the self variable
        var self = this;

        // Add's all attributes to the currently traversed drop down option
        self._addAttributes(self.selectBox.prop("attributes"), self.dropdown);

        // Add's all attributes to the drop down items list
        self.selectItems.each(function(iterator) {

            // Add's all attributes to the currently traversed drop down option
            self._addAttributes($(this).prop("attributes"), self.listItems.eq(iterator));

        });

        // Maintains chainability
        return self;

    };

    // addAttributes
    // -------------
    //  Add's attributes to a DOM element
    selectBoxIt._addAttributes = function(arr, elem) {

        // Stores the plugin context inside of the self variable
        var self = this,
            whitelist = self.options["copyAttributes"];

        // If there are array properties
        if(arr.length) {

            // Iterates over all of array properties
            $.each(arr, function(iterator, property) {

                // Get's the property name and property value of each property
                var propName = (property.name).toLowerCase(), propValue = property.value;

                // If the currently traversed property value is not "null", is on the whitelist, or is an HTML 5 data attribute
                if(propValue !== "null" && ($.inArray(propName, whitelist) !== -1 || propName.indexOf("data") !== -1)) {

                    // Set's the currently traversed property on element
                    elem.attr(propName, propValue);

                }

            });

        }

        // Maintains chainability
        return self;

    };
// Destroy Module
// ==============

// Destroy
// -------
//    Removes the plugin from the page

selectBoxIt.destroy = function(callback) {

    // Stores the plugin context inside of the self variable
    var self = this;

    self._destroySelectBoxIt();

    // Calls the jQueryUI Widget Factory destroy method
    self.widgetProto.destroy.call(self);

    // Provides callback function support
    self._callbackSupport(callback);

    // Maintains chainability
    return self;

};

// Internal Destroy Method
// -----------------------
//    Removes the plugin from the page

selectBoxIt._destroySelectBoxIt = function() {

    // Stores the plugin context inside of the self variable
    var self = this;

    // Unbinds all of the dropdown list event handlers with the `selectBoxIt` namespace
    self.dropdown.off(".selectBoxIt");

    // If the original select box has been placed inside of the new drop down container
    if ($.contains(self.dropdownContainer[0], self.originalElem)) {

        // Moves the original select box before the drop down container
        self.dropdownContainer.before(self.selectBox);

    }

    // Remove all of the `selectBoxIt` DOM elements from the page
    self.dropdownContainer.remove();

    // Resets the style attributes for the original select box
    self.selectBox.removeAttr("style").attr("style", self.selectBoxStyles);

    // Shows the original dropdown list
    self.selectBox.show();

    // Triggers the custom `destroy` event on the original select box
    self.triggerEvent("destroy");

    // Maintains chainability
    return self;

};

    // Disable Module
    // ==============

    // Disable
    // -------
    //      Disables the new dropdown list

    selectBoxIt.disable = function(callback) {

        var self = this;

        if(!self.options["disabled"]) {

            // Makes sure the dropdown list is closed
            self.close();

            // Sets the `disabled` attribute on the original select box
            self.selectBox.attr("disabled", "disabled");

            // Makes the dropdown list not focusable by removing the `tabindex` attribute
            self.dropdown.removeAttr("tabindex").

            // Disables styling for enabled state
            removeClass(self.theme["enabled"]).

            // Enabled styling for disabled state
            addClass(self.theme["disabled"]);

            self.setOption("disabled", true);

            // Triggers a `disable` custom event on the original select box
            self.triggerEvent("disable");

        }

        // Provides callback function support
        self._callbackSupport(callback);

        // Maintains chainability
        return self;

    };

    // Disable Option
    // --------------
    //      Disables a single drop down option

    selectBoxIt.disableOption = function(index, callback) {

        var self = this, currentSelectBoxOption, hasNextEnabled, hasPreviousEnabled, type = $.type(index);

        // If an index is passed to target an indropdownidual drop down option
        if(type === "number") {

            // Makes sure the dropdown list is closed
            self.close();

            // The select box option being targeted
            currentSelectBoxOption = self.selectBox.find("option").eq(index);

            // Triggers a `disable-option` custom event on the original select box and passes the disabled option
            self.triggerEvent("disable-option");

            // Disables the targeted select box option
            currentSelectBoxOption.attr("disabled", "disabled");

            // Disables the drop down option
            self.listItems.eq(index).attr("data-disabled", "true").

            // Applies disabled styling for the drop down option
            addClass(self.theme["disabled"]);

            // If the currently selected drop down option is the item being disabled
            if(self.currentFocus === index) {

                hasNextEnabled = self.listItems.eq(self.currentFocus).nextAll("li").not("[data-disabled='true']").first().length;

                hasPreviousEnabled = self.listItems.eq(self.currentFocus).prevAll("li").not("[data-disabled='true']").first().length;

                // If there is a currently enabled option beneath the currently selected option
                if(hasNextEnabled) {

                    // Selects the option beneath the currently selected option
                    self.moveDown();

                }

                // If there is a currently enabled option above the currently selected option
                else if(hasPreviousEnabled) {

                    // Selects the option above the currently selected option
                    self.moveUp();

                }

                // If there is not a currently enabled option
                else {

                    // Disables the entire drop down list
                    self.disable();

                }

            }

        }

        // Provides callback function support
        self._callbackSupport(callback);

        // Maintains chainability
        return self;

    };

    // _Is Disabled
    // -----------
    //      Checks the original select box for the
    //    disabled attribute

    selectBoxIt._isDisabled = function(callback) {

        var self = this;

        // If the original select box is disabled
        if (self.originalElem.disabled) {

            // Disables the dropdown list
            self.disable();

        }

        // Maintains chainability
        return self;

    };

    // Dynamic Positioning Module
    // ==========================

    // _Dynamic positioning
    // --------------------
    //      Dynamically positions the dropdown list options list

    selectBoxIt._dynamicPositioning = function() {

        var self = this;

        // If the `size` option is a number
        if($.type(self.listSize) === "number") {

            // Set's the max-height of the drop down list
            self.list.css("max-height", self.maxHeight || "none");

        }

        // If the `size` option is not a number
        else {

            // Returns the x and y coordinates of the dropdown list options list relative to the document
            var listOffsetTop = self.dropdown.offset().top,

                // The height of the dropdown list options list
                listHeight = self.list.data("max-height") || self.list.outerHeight(),

                // The height of the dropdown list DOM element
                selectBoxHeight = self.dropdown.outerHeight(),

                viewport = self.options["viewport"],

                viewportHeight = viewport.height(),

                viewportScrollTop = $.isWindow(viewport.get(0)) ? viewport.scrollTop() : viewport.offset().top,

                topToBottom = (listOffsetTop + selectBoxHeight + listHeight <= viewportHeight + viewportScrollTop),

                bottomReached = !topToBottom;

            if(!self.list.data("max-height")) {

              self.list.data("max-height", self.list.outerHeight());

            }

            // If there is room on the bottom of the viewport to display the drop down options
            if (!bottomReached) {

                self.list.css("max-height", listHeight);

                // Sets custom CSS properties to place the dropdown list options directly below the dropdown list
                self.list.css("top", "auto");

            }

            // If there is room on the top of the viewport
            else if((self.dropdown.offset().top - viewportScrollTop) >= listHeight) {

                self.list.css("max-height", listHeight);

                // Sets custom CSS properties to place the dropdown list options directly above the dropdown list
                self.list.css("top", (self.dropdown.position().top - self.list.outerHeight()));

            }

            // If there is not enough room on the top or the bottom
            else {

                var outsideBottomViewport = Math.abs((listOffsetTop + selectBoxHeight + listHeight) - (viewportHeight + viewportScrollTop)),

                    outsideTopViewport = Math.abs((self.dropdown.offset().top - viewportScrollTop) - listHeight);

                // If there is more room on the bottom
                if(outsideBottomViewport < outsideTopViewport) {

                    self.list.css("max-height", listHeight - outsideBottomViewport - (selectBoxHeight/2));

                    self.list.css("top", "auto");

                }

                // If there is more room on the top
                else {

                    self.list.css("max-height", listHeight - outsideTopViewport - (selectBoxHeight/2));

                    // Sets custom CSS properties to place the dropdown list options directly above the dropdown list
                    self.list.css("top", (self.dropdown.position().top - self.list.outerHeight()));

                }

            }

        }

        // Maintains chainability
        return self;

    };

    // Enable Module
    // =============

    // Enable
    // ------
    //      Enables the new dropdown list

    selectBoxIt.enable = function(callback) {

        var self = this;

        if(self.options["disabled"]) {

            // Triggers a `enable` custom event on the original select box
            self.triggerEvent("enable");

            // Removes the `disabled` attribute from the original dropdown list
            self.selectBox.removeAttr("disabled");

            // Make the dropdown list focusable
            self.dropdown.attr("tabindex", 0).

            // Disable styling for disabled state
            removeClass(self.theme["disabled"]).

            // Enables styling for enabled state
            addClass(self.theme["enabled"]);

            self.setOption("disabled", false);

            // Provide callback function support
            self._callbackSupport(callback);

        }

        // Maintains chainability
        return self;

    };

    // Enable Option
    // -------------
    //      Disables a single drop down option

    selectBoxIt.enableOption = function(index, callback) {

        var self = this, currentSelectBoxOption, currentIndex = 0, hasNextEnabled, hasPreviousEnabled, type = $.type(index);

        // If an index is passed to target an indropdownidual drop down option
        if(type === "number") {

            // The select box option being targeted
            currentSelectBoxOption = self.selectBox.find("option").eq(index);

            // Triggers a `enable-option` custom event on the original select box and passes the enabled option
            self.triggerEvent("enable-option");

            // Disables the targeted select box option
            currentSelectBoxOption.removeAttr("disabled");

            // Disables the drop down option
            self.listItems.eq(index).attr("data-disabled", "false").

            // Applies disabled styling for the drop down option
            removeClass(self.theme["disabled"]);

        }

        // Provides callback function support
        self._callbackSupport(callback);

        // Maintains chainability
        return self;

    };

    // Keyboard Navigation Module
    // ==========================

    // Move Down
    // ---------
    //      Handles the down keyboard navigation logic

    selectBoxIt.moveDown = function(callback) {

        var self = this;

        // Increments `currentFocus`, which represents the currently focused list item `id` attribute.
        self.currentFocus += 1;

        // Determines whether the dropdown option the user is trying to go to is currently disabled
        var disabled = self.listItems.eq(self.currentFocus).attr("data-disabled") === "true" ? true: false,

            hasNextEnabled = self.listItems.eq(self.currentFocus).nextAll("li").not("[data-disabled='true']").first().length;

        // If the user has reached the top of the list
        if (self.currentFocus === self.listItems.length) {

            // Does not allow the user to continue to go up the list
            self.currentFocus -= 1;

        }

        // If the option the user is trying to go to is disabled, but there is another enabled option
        else if (disabled && hasNextEnabled) {

            // Blur the previously selected option
            self.listItems.eq(self.currentFocus - 1).blur();

           // Call the `moveDown` method again
            self.moveDown();

            // Exit the method
            return;

        }

        // If the option the user is trying to go to is disabled, but there is not another enabled option
        else if (disabled && !hasNextEnabled) {

            self.currentFocus -= 1;

        }

        // If the user has not reached the bottom of the unordered list
        else {

            // Blurs the previously focused list item
            // The jQuery `end()` method allows you to continue chaining while also using a different selector
            self.listItems.eq(self.currentFocus - 1).blur().end().

            // Focuses the currently focused list item
            eq(self.currentFocus).focusin();

            // Calls `scrollToView` to make sure the `scrollTop` is correctly updated. The `down` user action
            self._scrollToView("down");

            // Triggers the custom `moveDown` event on the original select box
            self.triggerEvent("moveDown");

        }

        // Provide callback function support
        self._callbackSupport(callback);

        // Maintains chainability
        return self;

    };

    // Move Up
    // ------
    //      Handles the up keyboard navigation logic
    selectBoxIt.moveUp = function(callback) {

        var self = this;

        // Increments `currentFocus`, which represents the currently focused list item `id` attribute.
        self.currentFocus -= 1;

        // Determines whether the dropdown option the user is trying to go to is currently disabled
        var disabled = self.listItems.eq(self.currentFocus).attr("data-disabled") === "true" ? true: false,

            hasPreviousEnabled = self.listItems.eq(self.currentFocus).prevAll("li").not("[data-disabled='true']").first().length;

        // If the user has reached the top of the list
        if (self.currentFocus === -1) {

            // Does not allow the user to continue to go up the list
            self.currentFocus += 1;

        }

        // If the option the user is trying to go to is disabled and the user is not trying to go up after the user has reached the top of the list
        else if (disabled && hasPreviousEnabled) {

            // Blur the previously selected option
            self.listItems.eq(self.currentFocus + 1).blur();

            // Call the `moveUp` method again
            self.moveUp();

            // Exits the method
            return;

        }

        else if (disabled && !hasPreviousEnabled) {

            self.currentFocus += 1;

        }

        // If the user has not reached the top of the unordered list
        else {

            // Blurs the previously focused list item
            // The jQuery `end()` method allows you to continue chaining while also using a different selector
            self.listItems.eq(this.currentFocus + 1).blur().end().

            // Focuses the currently focused list item
            eq(self.currentFocus).focusin();

            // Calls `scrollToView` to make sure the `scrollTop` is correctly updated. The `down` user action
            self._scrollToView("up");

            // Triggers the custom `moveDown` event on the original select box
            self.triggerEvent("moveUp");

        }

        // Provide callback function support
        self._callbackSupport(callback);

        // Maintains chainability
        return self;

    };

    // Keyboard Search Module
    // ======================

    // _Set Current Search Option
    // -------------------------
    //      Sets the currently selected dropdown list search option

    selectBoxIt._setCurrentSearchOption = function(currentOption) {

        var self = this;

        // Does not change the current option if `showFirstOption` is false and the matched search item is the hidden first option.
        // Otherwise, the current option value is updated
        if ((self.options["aggressiveChange"] || self.options["selectWhenHidden"] || self.listItems.eq(currentOption).is(":visible")) && self.listItems.eq(currentOption).data("disabled") !== true) {

            // Calls the `blur` event of the currently selected dropdown list option
            self.listItems.eq(self.currentFocus).blur();

            // Sets `currentIndex` to the currently selected dropdown list option
            self.currentIndex = currentOption;

            // Sets `currentFocus` to the currently selected dropdown list option
            self.currentFocus = currentOption;

            // Focuses the currently selected dropdown list option
            self.listItems.eq(self.currentFocus).focusin();

            // Updates the scrollTop so that the currently selected dropdown list option is visible to the user
            self._scrollToView("search");

            // Triggers the custom `search` event on the original select box
            self.triggerEvent("search");

        }

        // Maintains chainability
        return self;

    };

    // _Search Algorithm
    // -----------------
    //      Uses regular expressions to find text matches
    selectBoxIt._searchAlgorithm = function(currentIndex, alphaNumeric) {

        var self = this,

            // Boolean to determine if a pattern match exists
            matchExists = false,

            // Iteration variable used in the outermost for loop
            x,

            // Iteration variable used in the nested for loop
            y,

            // Variable used to cache the length of the text array (Small enhancement to speed up traversing)
            arrayLength,

            // Variable storing the current search
            currentSearch,

            // Variable storing the textArray property
            textArray = self.textArray,

            // Variable storing the current text property
            currentText = self.currentText;

        // Loops through the text array to find a pattern match
        for (x = currentIndex, arrayLength = textArray.length; x < arrayLength; x += 1) {

            currentSearch = textArray[x];

            // Nested for loop to help search for a pattern match with the currently traversed array item
            for (y = 0; y < arrayLength; y += 1) {

                // Searches for a match
                if (textArray[y].search(alphaNumeric) !== -1) {

                    // `matchExists` is set to true if there is a match
                    matchExists = true;

                    // Exits the nested for loop
                    y = arrayLength;

                }

            } // End nested for loop

            // If a match does not exist
            if (!matchExists) {

                // Sets the current text to the last entered character
                self.currentText = self.currentText.charAt(self.currentText.length - 1).

                // Escapes the regular expression to make sure special characters are seen as literal characters instead of special commands
                replace(/[|()\[{.+*?$\\]/g, "\\$0");

                currentText = self.currentText;

            }

            // Resets the regular expression with the new value of `self.currentText`
            alphaNumeric = new RegExp(currentText, "gi");

            // Searches based on the first letter of the dropdown list options text if the currentText < 2 characters
            if (currentText.length < 3) {

                alphaNumeric = new RegExp(currentText.charAt(0), "gi");

                // If there is a match based on the first character
                if ((currentSearch.charAt(0).search(alphaNumeric) !== -1)) {

                    // Sets properties of that dropdown list option to make it the currently selected option
                    self._setCurrentSearchOption(x);

                    if((currentSearch.substring(0, currentText.length).toLowerCase() !== currentText.toLowerCase()) || self.options["similarSearch"]) {

                        // Increments the current index by one
                        self.currentIndex += 1;

                    }

                    // Exits the search
                    return false;

                }

            }

            // If `self.currentText` > 1 character
            else {

                // If there is a match based on the entire string
                if ((currentSearch.search(alphaNumeric) !== -1)) {

                    // Sets properties of that dropdown list option to make it the currently selected option
                    self._setCurrentSearchOption(x);

                    // Exits the search
                    return false;

                }

            }

            // If the current text search is an exact match
            if (currentSearch.toLowerCase() === self.currentText.toLowerCase()) {

                // Sets properties of that dropdown list option to make it the currently selected option
                self._setCurrentSearchOption(x);

                // Resets the current text search to a blank string to start fresh again
                self.currentText = "";

                // Exits the search
                return false;

            }

        }

       // Returns true if there is not a match at all
        return true;

    };

    // Search
    // ------
    //      Calls searchAlgorithm()
    selectBoxIt.search = function(alphaNumericKey, callback, rememberPreviousSearch) {

        var self = this;

        // If the search method is being called internally by the plugin, and not externally as a method by a user
        if (rememberPreviousSearch) {

            // Continued search with history from past searches.  Properly escapes the regular expression
            self.currentText += alphaNumericKey.replace(/[|()\[{.+*?$\\]/g, "\\$0");

        }

        else {

            // Brand new search.  Properly escapes the regular expression
            self.currentText = alphaNumericKey.replace(/[|()\[{.+*?$\\]/g, "\\$0");

        }

        // Searches globally
        var searchResults = self._searchAlgorithm(self.currentIndex, new RegExp(self.currentText, "gi"));

        // Searches the list again if a match is not found.  This is needed, because the first search started at the array indece of the currently selected dropdown list option, and does not search the options before the current array indece.
        // If there are many similar dropdown list options, starting the search at the indece of the currently selected dropdown list option is needed to properly traverse the text array.
        if (searchResults) {

            // Searches the dropdown list values starting from the beginning of the text array
            self._searchAlgorithm(0, self.currentText);

        }

        // Provide callback function support
        self._callbackSupport(callback);

        // Maintains chainability
        return self;

    };

    // Mobile Module
    // =============

    // Apply Native Select
    // -------------------
    //      Applies the original select box directly over the new drop down

    selectBoxIt._applyNativeSelect = function() {

        // Stores the plugin context inside of the self variable
        var self = this,
            currentOption,
            currentDataText,
            currentText;

        // Appends the native select box to the drop down (allows for relative positioning using the position() method)
        self.dropdownContainer.append(self.selectBox);

        self.dropdown.attr('tabindex', '-1');

        // Positions the original select box directly over top the new dropdown list using position absolute and "hides" the original select box using an opacity of 0.  This allows the mobile browser "wheel" interface for better usability.
        self.selectBox.css({

            "display": "block",

            "visibility": "visible",

            "width": self.dropdown.outerWidth(),

            "height": self.dropdown.outerHeight(),

            "opacity": "0",

            "position": "absolute",

            "top": "0",

            "left": "0",

            "cursor": "pointer",

            "z-index": "999999",

            "margin": self.dropdown.css("margin"),

            "padding": "0",

            "-webkit-appearance": "menulist-button"

        }).on({

            "changed.selectBoxIt": function() {

                currentOption = self.selectBox.find("option").filter(":selected");

                currentDataText = currentOption.attr("data-text");

                currentText = currentDataText ? currentDataText: currentOption.text();

                // Sets the new dropdown list text to the value of the original dropdown list
                self._setText(self.dropdownText, currentText);

                if(self.list.find('li[data-val="' + currentOption.val() + '"]').find("i").attr("class")) {

                   self.dropdownImage.attr("class", self.list.find('li[data-val="' + currentOption.val() + '"]').find("i").attr("class")).addClass("selectboxit-default-icon");

                }

                // Triggers the `option-click` event on mobile
                self.triggerEvent("option-click");

            }

        });

    };

    // Mobile
    // ------
    //      Applies the native "wheel" interface when a mobile user is interacting with the dropdown

    selectBoxIt._mobile = function(callback) {

        // Stores the plugin context inside of the self variable
        var self = this;

            if(self.isMobile) {

                self._applyNativeSelect();

            }

            // Maintains chainability
            return this;

    };

    // Remove Options Module
    // =====================

    // remove
    // ------
    //    Removes drop down list options
    //    using an index

    selectBoxIt.remove = function(indexes, callback) {

        var self = this,
            dataType = $.type(indexes),
            value,
            x = 0,
            dataLength,
            elems = "";

        // If an array is passed in
        if(dataType === "array") {

            // Loops through the array
            for(dataLength = indexes.length; x <= dataLength - 1; x += 1) {

                // Stores the currently traversed array item in the local `value` variable
                value = indexes[x];

                // If the currently traversed array item is an object literal
                if($.type(value) === "number") {

                    if(elems.length) {

                        // Adds an element to the removal string
                        elems += ", option:eq(" + value + ")";

                    }

                    else {

                        // Adds an element to the removal string
                        elems += "option:eq(" + value + ")";

                    }

                }

            }

            // Removes all of the appropriate options from the select box
            self.selectBox.find(elems).remove();

        }

        // If a number is passed in
        else if(dataType === "number") {

            self.selectBox.find("option").eq(indexes).remove();

        }

        // If anything besides a number or array is passed in
        else {

            // Removes all of the options from the original select box
            self.selectBox.find("option").remove();

        }

        // If the dropdown property exists
        if(self.dropdown) {

            // Rebuilds the dropdown
            self.refresh(function() {

                // Provide callback function support
                self._callbackSupport(callback);

            }, true);

        } else {

            // Provide callback function support
            self._callbackSupport(callback);

        }

        // Maintains chainability
        return self;

    };

    // Select Option Module
    // ====================

    // Select Option
    // -------------
    //      Programatically selects a drop down option by either index or value

    selectBoxIt.selectOption = function(val, callback) {

        // Stores the plugin context inside of the self variable
        var self = this,
            type = $.type(val);

        // Makes sure the passed in position is a number
        if(type === "number") {

            // Set's the original select box value and triggers the change event (which SelectBoxIt listens for)
            self.selectBox.val(self.selectItems.eq(val).val()).change();

        }

        else if(type === "string") {

            // Set's the original select box value and triggers the change event (which SelectBoxIt listens for)
            self.selectBox.val(val).change();

        }

        // Calls the callback function
        self._callbackSupport(callback);

        // Maintains chainability
        return self;

    };

    // Set Option Module
    // =================

    // Set Option
    // ----------
    //      Accepts an string key, a value, and a callback function to replace a single
    //      property of the plugin options object

    selectBoxIt.setOption = function(key, value, callback) {

        var self = this;

        //Makes sure a string is passed in
        if($.type(key) === "string") {

            // Sets the plugin option to the new value provided by the user
            self.options[key] = value;

        }

        // Rebuilds the dropdown
        self.refresh(function() {

            // Provide callback function support
            self._callbackSupport(callback);

        }, true);

        // Maintains chainability
        return self;

    };

    // Set Options Module
    // ==================

    // Set Options
    // ----------
    //      Accepts an object to replace plugin options
    //      properties of the plugin options object

    selectBoxIt.setOptions = function(newOptions, callback) {

        var self = this;

        // If the passed in parameter is an object literal
        if($.isPlainObject(newOptions)) {

            self.options = $.extend({}, self.options, newOptions);

        }

        // Rebuilds the dropdown
        self.refresh(function() {

            // Provide callback function support
            self._callbackSupport(callback);

        }, true);

        // Maintains chainability
        return self;

    };

    // Wait Module
    // ===========

    // Wait
    // ----
    //    Delays execution by the amount of time
    //    specified by the parameter

    selectBoxIt.wait = function(time, callback) {

        var self = this;

        self.widgetProto._delay.call(self, callback, time);

        // Maintains chainability
        return self;

    };
})); // End of all modules
 
/**
 * nimbleLoader v2.0.1 - Display loading bar where you want with ease
 * Version v2.0.1
 * @requires    jQuery v1.7.1
 * @description Display a loading bar in whatever block element you want
 *
 ***********************************************************************************************************************
 *                                                                                                      Prerequisites ? *
 ***********************************************************************************************************************
 *
 * 1- Build and download animated gif adapted to your web site thanks tools like http://www.ajaxload.info/
 * 2- Add a script tag referencing jquery.nimble.loader.js
 * 3- Configure your nimbleLoader and you somme CSS class
 * 4- That's it ! nimbleLoader is ready to use
 *
 *
 ***********************************************************************************************************************
 *                                                                                                          Use case ? *
 ***********************************************************************************************************************
 *
 * Most of the time the nimbleLoader is used when sending ajax request, to warn users that there is something
 * happening in the page :
 * - A form submission is being performed
 * - Updating a block content by getting information with ajax request
 * - Uploading / Downloading data
 * - ...
 *
 * There are two main ways of using the nimbleLoader
 * 1- You want to use it as an "overlay" : the nimbleLoader will appear inside the targeted container but over its content
 *    You may want to display a background with the loading bar (the background will cover all the content of the nimbleLoader target
 * 2- You want to display the nimbleLoader inside an container but as a element placed into the content right after the container content
 *
 *
 * Limitations :
 * - nimbleLoader shouldn't be use on an element with the css "position" property set to "fixed"
 * - nimbleLoader could impact the display of absolute element contained in the target element if the target element
 *   become the first relative parent to the absolute element.
 *
 ***********************************************************************************************************************
 *                                                                                                  How to configure ? *
 ***********************************************************************************************************************
 *
 * 1- Choose your params
 *
 *         |  Type / Value accepted   |  Name                 |              |  Default value         | Description
 * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * @option |  Boolean                 |  overlay              |  (optional)  |  default:true          | When true, nimbleLoader will appear above the content of the targeted element
 *                                                                                                      "loaderImgUrl" option will be ignore in this case.
 *                                                                                                      When false, it will be displayed as an img tag as the last child of the targeted element
 *                                                                                                      To build the image, "loaderImgUrl" will be used, and all other options will be ignored
 * @option |  String                  |  loaderClass          |  (optional)  |  default:"loading_bar" | CSS class for the element which will display your loading bar
 * @option |  Numeric                 |  zIndex               |  (optional)  |  default:undefined     | value of the z-index css property of the loading bar if you need to handle it.
 *         |                          |                       |              |                          This can be useful if you have loading bars on top of the other in a page
 * @option |  Boolean                 |  debug                |  (optional)  |  default:false         | useful to display debug info
 * @option |  String/Numeric          |  speed                |  (optional)  |  default:"fast"        | The speed you want tour loading bar to appear/disappear (numeric or 'slow', 'fast'...)
 * @option |  Boolean                 |  hasBackground        |  (optional)  |  default:false         | If true will add a background to the loader
 * @option |  css color               |  backgroundColor      |  (optional)  |  default:"black"       | Will decide the background color   (only useful when "hasBackground" is true)
 * @option |  0< opt =<1              |  backgroundOpacity    |  (optional)  |  default:0.5           | Will decide the background opacity (only useful when "hasBackground" is true)
 * @option |  String                  |  loaderImgUrl         |  (optional)  |  default:""            | Represent the img URL to build the nimbleLoader (only useful when "overlay" is false)
 *                                                                                                      If "overlay" is false, then "loaderImgUrl" is required
 * @option |  String                  |  position             |  (optional)  |  default:absolute      | A CSS position (absolute or fixed) which will allow the nimbleLoader to be displayed over some content
 * @option |  function                |  callbackOnHiding     |  (optional)  |  default:undefined     | Will be executed when nimbleLoader hide itself, when the fadeOut is done
 *
 *    Example : 
 *    var params = {
 *      loaderClass        : "loading_bar",
 *      debug              : false,
 *      speed              : 'fast',
 *      needPositionedParent : true
 *    }
 *
 * 2- Set your params
 *
 *    2.1 Global way
 *      $.fn.nimbleLoader.setSettings(params);
 *
 *    2.2 Specific way
 *      $("#myDiv").nimbleLoader("show", otherParams);
 *
 * 3- Don't forget to set the css of your loading bar : see the demo to have an example (style/loader.css)
 * 
 *
 * 
 ***********************************************************************************************************************
 *                                                                                                        How to use ? *
 ***********************************************************************************************************************
 *
 * => Showing a loading bar in <div id="myDiv"></div>
 * $("#myDiv").nimbleLoader("show");
 *
 * => Hiding the loading bar
 * $("#myDiv").nimbleLoader("hide");
 *
 */

if(jQuery)(function($){
  
  // Extend JQuery function : adding nimbleLoader
  $.extend($.fn,{
    
    nimbleLoader: function(method, options){
      
      /*************************************************************************
       *  Plugin Methods
       ************************************************************************/

      // Clone the global settings. $.extend is needed : we extend a new object with global settings
      var settings = $.extend( true, {}, $.fn.nimbleLoader.settings);

      // Catch settings given in parameters

      if(options){ jQuery.extend(settings, options); }

      // Function to init the loader
      function init($nimbleLoader, settings){
        var loader = new LoadingHandlerGenerator($nimbleLoader, settings);
        $nimbleLoader.data("loader", loader);
      }

      // Function to show the loading bar
      var show = function(){

        return this.each(function(){
          var $nimbleLoader = $(this);
          if($nimbleLoader.data("loader") !== undefined){
            var loader = $nimbleLoader.data("loader");
            loader.showLoading();
          }
          else{
            init($nimbleLoader, settings);
            $nimbleLoader.nimbleLoader('show');
          }
        });
      };

      // Function to hide the loading bar
      var hide = function(){
        return this.each(function(){
          var $nimbleLoader = $(this);
          if($nimbleLoader.data("loader") !== undefined){
            var loader = $nimbleLoader.data("loader");
            loader.hideLoading();
          }
        });
      };

      var methods = {
        show         : show,
        hide         : hide
      };
      
      /*************************************************************************
      *  Execution when calling .nimbleLoader()
      ************************************************************************/
      if(methods[method]){
        return methods[method].apply( this, Array.prototype.slice.call( arguments, 1));
      }
      else if(!method){
        return methods.show.apply(this , Array.prototype.slice.call( arguments, 1));
      }
      else{
        if(window && window.console){
          console.log("[jquery.nimble.loader] -> no method '"+method+"' to apply ");
        }
        return false;
      }

      /**
       * Closure function which define a loading bar element
       */
      function LoadingHandlerGenerator($parentSelector, params){

        /**
         * $loadingBar              : the loading bar jQuery element
         * debug                    : debug option to display in console how many times the loading bar has been called
         * speed                    : animation speed when showing/hiding the loading bar
         * previousCssPosition      : store the initial position (string) of the loader parent when "needPositionedParent" is true
         * countNbCall              : the counter to count the number of time the loader has been called
         * nbLoadingElements        : counter of the number of HTML elements involved (1 -only the loading bar- or 2 -the loading bar + the background-)
         */

        var $loadingBar;
        var debug                     = params.debug;
        var speed                     = params.speed;
        var previousCssPosition       = "";
        var countNbCall               = 0;
        var nbLoadingElements         = 0;
        var waitForAnimation          = {
          isAnimated  : 0, // the number of animated elements, - 0 meaning then no animation
          callStack   : []
        };

        // Init the loader : set html and place it
        function initLoading(){

          // If the loader doesn't exists, we create and init it
          if(!$loadingBar){

            // Define loading bar basic element (used to build inline and positioned nimble loader)
            var $loader = $('<div></div>').addClass(params.loaderClass);
            nbLoadingElements = 1;

            /**
             * Configuration for inline nimbleLoader:
             * When creating an inline nimbleLoader, the plugin create a HTML img tag to display the nimbleLoader.
             * To create this img tag, params.loaderImgUrl is required.
             */
            if (!params.overlay) {

              $loadingBar = $loader;
              // loaderImgUrl is required to build the image that will represent the loader
              if(params.loaderImgUrl){
                $loadingBar.append("<img src='"+params.loaderImgUrl+"' />");
              }
              else{
                if(window && window.console){
                  console.log("[jquery.nimble.loader] -> loaderImgUrl should be defined when 'display' = 'inline'" );
                }
              }
              // Append the loading bar in its parent so that it appear after the content already in $parentSelector
              if($parentSelector && $parentSelector.length){
                $parentSelector.append($loadingBar);
              }
            }
            /**
             * Configuration for overlay nimbleLoader:
             */
            else{
              /**
               * Configuring background
               * If there is a background, we add it to the loadingBar selector
               * and increase the nbLoadingElements value
               * $nimbleLoader is now composed of two "brother" elements
               */
              if (params.hasBackground) {
                nbLoadingElements++;
                var opacity           = params.backgroundOpacity;
                var $backgroundLoader = $('<div></div>').css({
                  top                : 0,
                  left               : 0,
                  position           : params.position,
                  display            : "none",
                  height             : "100%",
                  width              : "100%",
                  "background-color" : params.backgroundColor,
                  "opacity"          : opacity,
                  filter             : "alpha(opacity="+Math.floor(100*opacity)+")" // This is for IE7 and IE8
                });
                $loadingBar = $backgroundLoader.add($loader);
              }else{
                $loadingBar = $loader;
              }

              /**
               * Prepend the loading bar in its parent.
               * It has to be done before configuring CSS properties: ce need to read some CSS property which should
               * come from css file, and these properties are set to the element only once it has been added to the dom
               */
              if($parentSelector && $parentSelector.length){$parentSelector.prepend($loadingBar);}

              // Configuring CSS z-index
              if (params.zIndex) { $loadingBar.css("z-index", params.zIndex);}

              /**
               * Configuring CSS position of the loading bar
               */
              if(params.position){
                var $elToPosition = $loadingBar.filter("."+params.loaderClass);
                $elToPosition.css("position", params.position);
              }

              /**
               * Configuring CSS position of the nimbleLoader target
               * If the params specified that the loading bar should have an absolute position, so we attribute a
               * relative position to its parent if it's not already positioned
               */
              if(params.position === "absolute"){
                // If nimbleLoader container is already positioned we keeps its position in memory to be able to
                // restore it when precessing hide on nimbleLoader. Otherwise the container will loose it.
                if($parentSelector.css("position") === "relative" || $parentSelector.css("position") === "absolute"){
                  previousCssPosition = $parentSelector.css("position");
                }
                // Else we positioned the nimbleLoader container as relative
                else{
                  if(params.position === "absolute" && ($parentSelector[0].tagName).toLowerCase() !== "body" ){
                    $parentSelector.css("position", "relative");
                  }
                }
              }
            }
          }
        }

        // Log counter element in the loading bar : show the number of time a loading bar has been call
        function logCounter(nbCall){
          if(window && window.console){
            var idAttr    = $parentSelector.attr("id");
            var classAttr = $parentSelector.attr("class");
            var params    = [];
            if(idAttr    != ""){params.push("#"+idAttr);}
            if(classAttr != ""){params.push("."+classAttr);}
            console.log("[jquery.nimble.loader] -> $("+params.join(" ")+").logCounter : "+nbCall);
          }
        }

        // Decrease the call counter and change the debug display if needed
        function decreaseCounter(){
          var ret = -1;
          if(countNbCall > 0){
            countNbCall--;
            ret = countNbCall;
          }
          if(debug){logCounter(ret);}
          return ret;
        }

        // Increase the call counter and change the debug display if needed
        function increaseCounter(){
          countNbCall++;
          if(debug){logCounter(countNbCall);}
          return countNbCall;
        }

        // Check if there is an action to do in the callStack and do the one of the top of the stack
        function callStack(){
          if(waitForAnimation.callStack.length > 0){
            if(waitForAnimation.isAnimated === 0) {
              var actionToDo = waitForAnimation.callStack.pop();

              if(actionToDo == "hideLoading"){
                processHide();
              }
              else if(actionToDo == "showLoading"){
                processShow();
              }
            }
          }
        }

        function showLoading() {
          unshiftAction("showLoading");
        }
        function hideLoading() {
          unshiftAction("hideLoading");
        }

        function unshiftAction(action){
          waitForAnimation.callStack.unshift(action);
          callStack();
        }

        // Show the loading bar element
        function processShow(){
          if(increaseCounter() == 1) { // Check if we have to show the loader it's the first
            initLoading();

            // We set a param to know that the animation to hide has begin
            waitForAnimation.isAnimated = nbLoadingElements;
            $loadingBar.fadeIn(speed, function(){

              // We set a param to know that the animation to show is finished
              waitForAnimation.isAnimated--;

              // During destroying, calls can be made to show the loader. So we let's the loader disappear and then we show it again
              callStack();

            });
          }
          else{
            callStack();
          }
        }

        // Hide the loading bar element
        function processHide(){
          
          // Check if we have to destroy the loader (it happens when the counter is equal to 0)
          if( decreaseCounter() === 0){ // If countNbCall == 0 decreaseCounter() returns -1

            // We set a param to know that the animation to hide has begin
            waitForAnimation.isAnimated = nbLoadingElements;

            // We animate the loader to make it disappear
            $loadingBar.fadeOut(speed, function(){
              // This will be called as many times as there are elements in the $loading element
              // We set a param to know that the animation to hide is finished
              waitForAnimation.isAnimated--;

              // We destroy the loader element
              $(this).remove();

              // Reset the initial position of the loader parent
              $parentSelector.css("position", previousCssPosition);

              // If all loaders have been destroyed, we reset the $loadingBar variable
              if (waitForAnimation.isAnimated === 0) {
                $loadingBar = undefined;
              }

              // If a callback is defined, we call it
              if(params.callbackOnHiding && typeof(params.callbackOnHiding) === "function"){
                params.callbackOnHiding();
              }

              // During destroying, calls can be made to show the loader. So we let's the loader disappear and then we show it again
              callStack();
            });
          }
          else{
            callStack();
          }
        }

        // Body of the closure function
        return  {
          showLoading : showLoading,
          hideLoading : hideLoading,
          init        : initLoading
        };
      }
    }
  });

  $.extend($.fn.nimbleLoader,{
    settings:{
      overlay              : true,
      position             : "absolute",
      loaderImgUrl         : "",
      loaderClass          : "loading_bar",
      callbackOnHiding     : function(){},
      speed                : 'fast',
      hasBackground        : false,
      backgroundColor      : "#ffffff",
      backgroundOpacity    : 0.5,
      debug                : false
    },
    setSettings: function(options){
      $.extend($.fn.nimbleLoader.settings, options);
    }
  });

})(jQuery);

$(document).ready(function() {
    var SITE = SITE || {};
 
SITE.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('/'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.button'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('File Chosen');
    if($fakeFile.length === 0) {
      $button.after('<span class="file-holder">' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};
  $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
});


/**
 * nimbleLoader v2.0.1 - Display loading bar where you want with ease
 * Version v2.0.1
 * @requires    jQuery v1.7.1
 * @description Display a loading bar in whatever block element you want
 *
 ***********************************************************************************************************************
 *                                                                                                      Prerequisites ? *
 ***********************************************************************************************************************
 *
 * 1- Build and download animated gif adapted to your web site thanks tools like http://www.ajaxload.info/
 * 2- Add a script tag referencing jquery.nimble.loader.js
 * 3- Configure your nimbleLoader and you somme CSS class
 * 4- That's it ! nimbleLoader is ready to use
 *
 *
 ***********************************************************************************************************************
 *                                                                                                          Use case ? *
 ***********************************************************************************************************************
 *
 * Most of the time the nimbleLoader is used when sending ajax request, to warn users that there is something
 * happening in the page :
 * - A form submission is being performed
 * - Updating a block content by getting information with ajax request
 * - Uploading / Downloading data
 * - ...
 *
 * There are two main ways of using the nimbleLoader
 * 1- You want to use it as an "overlay" : the nimbleLoader will appear inside the targeted container but over its content
 *    You may want to display a background with the loading bar (the background will cover all the content of the nimbleLoader target
 * 2- You want to display the nimbleLoader inside an container but as a element placed into the content right after the container content
 *
 *
 * Limitations :
 * - nimbleLoader shouldn't be use on an element with the css "position" property set to "fixed"
 * - nimbleLoader could impact the display of absolute element contained in the target element if the target element
 *   become the first relative parent to the absolute element.
 *
 ***********************************************************************************************************************
 *                                                                                                  How to configure ? *
 ***********************************************************************************************************************
 *
 * 1- Choose your params
 *
 *         |  Type / Value accepted   |  Name                 |              |  Default value         | Description
 * --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * @option |  Boolean                 |  overlay              |  (optional)  |  default:true          | When true, nimbleLoader will appear above the content of the targeted element
 *                                                                                                      "loaderImgUrl" option will be ignore in this case.
 *                                                                                                      When false, it will be displayed as an img tag as the last child of the targeted element
 *                                                                                                      To build the image, "loaderImgUrl" will be used, and all other options will be ignored
 * @option |  String                  |  loaderClass          |  (optional)  |  default:"loading_bar" | CSS class for the element which will display your loading bar
 * @option |  Numeric                 |  zIndex               |  (optional)  |  default:undefined     | value of the z-index css property of the loading bar if you need to handle it.
 *         |                          |                       |              |                          This can be useful if you have loading bars on top of the other in a page
 * @option |  Boolean                 |  debug                |  (optional)  |  default:false         | useful to display debug info
 * @option |  String/Numeric          |  speed                |  (optional)  |  default:"fast"        | The speed you want tour loading bar to appear/disappear (numeric or 'slow', 'fast'...)
 * @option |  Boolean                 |  hasBackground        |  (optional)  |  default:false         | If true will add a background to the loader
 * @option |  css color               |  backgroundColor      |  (optional)  |  default:"black"       | Will decide the background color   (only useful when "hasBackground" is true)
 * @option |  0< opt =<1              |  backgroundOpacity    |  (optional)  |  default:0.5           | Will decide the background opacity (only useful when "hasBackground" is true)
 * @option |  String                  |  loaderImgUrl         |  (optional)  |  default:""            | Represent the img URL to build the nimbleLoader (only useful when "overlay" is false)
 *                                                                                                      If "overlay" is false, then "loaderImgUrl" is required
 * @option |  String                  |  position             |  (optional)  |  default:absolute      | A CSS position (absolute or fixed) which will allow the nimbleLoader to be displayed over some content
 * @option |  function                |  callbackOnHiding     |  (optional)  |  default:undefined     | Will be executed when nimbleLoader hide itself, when the fadeOut is done
 *
 *    Example : 
 *    var params = {
 *      loaderClass        : "loading_bar",
 *      debug              : false,
 *      speed              : 'fast',
 *      needPositionedParent : true
 *    }
 *
 * 2- Set your params
 *
 *    2.1 Global way
 *      $.fn.nimbleLoader.setSettings(params);
 *
 *    2.2 Specific way
 *      $("#myDiv").nimbleLoader("show", otherParams);
 *
 * 3- Don't forget to set the css of your loading bar : see the demo to have an example (style/loader.css)
 * 
 *
 * 
 ***********************************************************************************************************************
 *                                                                                                        How to use ? *
 ***********************************************************************************************************************
 *
 * => Showing a loading bar in <div id="myDiv"></div>
 * $("#myDiv").nimbleLoader("show");
 *
 * => Hiding the loading bar
 * $("#myDiv").nimbleLoader("hide");
 *
 */

if(jQuery)(function($){
  
  // Extend JQuery function : adding nimbleLoader
  $.extend($.fn,{
    
    nimbleLoader: function(method, options){
      
      /*************************************************************************
       *  Plugin Methods
       ************************************************************************/

      // Clone the global settings. $.extend is needed : we extend a new object with global settings
      var settings = $.extend( true, {}, $.fn.nimbleLoader.settings);

      // Catch settings given in parameters

      if(options){ jQuery.extend(settings, options); }

      // Function to init the loader
      function init($nimbleLoader, settings){
        var loader = new LoadingHandlerGenerator($nimbleLoader, settings);
        $nimbleLoader.data("loader", loader);
      }

      // Function to show the loading bar
      var show = function(){

        return this.each(function(){
          var $nimbleLoader = $(this);
          if($nimbleLoader.data("loader") !== undefined){
            var loader = $nimbleLoader.data("loader");
            loader.showLoading();
          }
          else{
            init($nimbleLoader, settings);
            $nimbleLoader.nimbleLoader('show');
          }
        });
      };

      // Function to hide the loading bar
      var hide = function(){
        return this.each(function(){
          var $nimbleLoader = $(this);
          if($nimbleLoader.data("loader") !== undefined){
            var loader = $nimbleLoader.data("loader");
            loader.hideLoading();
          }
        });
      };

      var methods = {
        show         : show,
        hide         : hide
      };
      
      /*************************************************************************
      *  Execution when calling .nimbleLoader()
      ************************************************************************/
      if(methods[method]){
        return methods[method].apply( this, Array.prototype.slice.call( arguments, 1));
      }
      else if(!method){
        return methods.show.apply(this , Array.prototype.slice.call( arguments, 1));
      }
      else{
        if(window && window.console){
          console.log("[jquery.nimble.loader] -> no method '"+method+"' to apply ");
        }
        return false;
      }

      /**
       * Closure function which define a loading bar element
       */
      function LoadingHandlerGenerator($parentSelector, params){

        /**
         * $loadingBar              : the loading bar jQuery element
         * debug                    : debug option to display in console how many times the loading bar has been called
         * speed                    : animation speed when showing/hiding the loading bar
         * previousCssPosition      : store the initial position (string) of the loader parent when "needPositionedParent" is true
         * countNbCall              : the counter to count the number of time the loader has been called
         * nbLoadingElements        : counter of the number of HTML elements involved (1 -only the loading bar- or 2 -the loading bar + the background-)
         */

        var $loadingBar;
        var debug                     = params.debug;
        var speed                     = params.speed;
        var previousCssPosition       = "";
        var countNbCall               = 0;
        var nbLoadingElements         = 0;
        var waitForAnimation          = {
          isAnimated  : 0, // the number of animated elements, - 0 meaning then no animation
          callStack   : []
        };

        // Init the loader : set html and place it
        function initLoading(){

          // If the loader doesn't exists, we create and init it
          if(!$loadingBar){

            // Define loading bar basic element (used to build inline and positioned nimble loader)
            var $loader = $('<div></div>').addClass(params.loaderClass);
            nbLoadingElements = 1;

            /**
             * Configuration for inline nimbleLoader:
             * When creating an inline nimbleLoader, the plugin create a HTML img tag to display the nimbleLoader.
             * To create this img tag, params.loaderImgUrl is required.
             */
            if (!params.overlay) {

              $loadingBar = $loader;
              // loaderImgUrl is required to build the image that will represent the loader
              if(params.loaderImgUrl){
                $loadingBar.append("<img src='"+params.loaderImgUrl+"' />");
              }
              else{
                if(window && window.console){
                  console.log("[jquery.nimble.loader] -> loaderImgUrl should be defined when 'display' = 'inline'" );
                }
              }
              // Append the loading bar in its parent so that it appear after the content already in $parentSelector
              if($parentSelector && $parentSelector.length){
                $parentSelector.append($loadingBar);
              }
            }
            /**
             * Configuration for overlay nimbleLoader:
             */
            else{
              /**
               * Configuring background
               * If there is a background, we add it to the loadingBar selector
               * and increase the nbLoadingElements value
               * $nimbleLoader is now composed of two "brother" elements
               */
              if (params.hasBackground) {
                nbLoadingElements++;
                var opacity           = params.backgroundOpacity;
                var $backgroundLoader = $('<div></div>').css({
                  top                : 0,
                  left               : 0,
                  position           : params.position,
                  display            : "none",
                  height             : "100%",
                  width              : "100%",
                  "background-color" : params.backgroundColor,
                  "opacity"          : opacity,
                  filter             : "alpha(opacity="+Math.floor(100*opacity)+")" // This is for IE7 and IE8
                });
                $loadingBar = $backgroundLoader.add($loader);
              }else{
                $loadingBar = $loader;
              }

              /**
               * Prepend the loading bar in its parent.
               * It has to be done before configuring CSS properties: ce need to read some CSS property which should
               * come from css file, and these properties are set to the element only once it has been added to the dom
               */
              if($parentSelector && $parentSelector.length){$parentSelector.prepend($loadingBar);}

              // Configuring CSS z-index
              if (params.zIndex) { $loadingBar.css("z-index", params.zIndex);}

              /**
               * Configuring CSS position of the loading bar
               */
              if(params.position){
                var $elToPosition = $loadingBar.filter("."+params.loaderClass);
                $elToPosition.css("position", params.position);
              }

              /**
               * Configuring CSS position of the nimbleLoader target
               * If the params specified that the loading bar should have an absolute position, so we attribute a
               * relative position to its parent if it's not already positioned
               */
              if(params.position === "absolute"){
                // If nimbleLoader container is already positioned we keeps its position in memory to be able to
                // restore it when precessing hide on nimbleLoader. Otherwise the container will loose it.
                if($parentSelector.css("position") === "relative" || $parentSelector.css("position") === "absolute"){
                  previousCssPosition = $parentSelector.css("position");
                }
                // Else we positioned the nimbleLoader container as relative
                else{
                  if(params.position === "absolute" && ($parentSelector[0].tagName).toLowerCase() !== "body" ){
                    $parentSelector.css("position", "relative");
                  }
                }
              }
            }
          }
        }

        // Log counter element in the loading bar : show the number of time a loading bar has been call
        function logCounter(nbCall){
          if(window && window.console){
            var idAttr    = $parentSelector.attr("id");
            var classAttr = $parentSelector.attr("class");
            var params    = [];
            if(idAttr    != ""){params.push("#"+idAttr);}
            if(classAttr != ""){params.push("."+classAttr);}
            console.log("[jquery.nimble.loader] -> $("+params.join(" ")+").logCounter : "+nbCall);
          }
        }

        // Decrease the call counter and change the debug display if needed
        function decreaseCounter(){
          var ret = -1;
          if(countNbCall > 0){
            countNbCall--;
            ret = countNbCall;
          }
          if(debug){logCounter(ret);}
          return ret;
        }

        // Increase the call counter and change the debug display if needed
        function increaseCounter(){
          countNbCall++;
          if(debug){logCounter(countNbCall);}
          return countNbCall;
        }

        // Check if there is an action to do in the callStack and do the one of the top of the stack
        function callStack(){
          if(waitForAnimation.callStack.length > 0){
            if(waitForAnimation.isAnimated === 0) {
              var actionToDo = waitForAnimation.callStack.pop();

              if(actionToDo == "hideLoading"){
                processHide();
              }
              else if(actionToDo == "showLoading"){
                processShow();
              }
            }
          }
        }

        function showLoading() {
          unshiftAction("showLoading");
        }
        function hideLoading() {
          unshiftAction("hideLoading");
        }

        function unshiftAction(action){
          waitForAnimation.callStack.unshift(action);
          callStack();
        }

        // Show the loading bar element
        function processShow(){
          if(increaseCounter() == 1) { // Check if we have to show the loader it's the first
            initLoading();

            // We set a param to know that the animation to hide has begin
            waitForAnimation.isAnimated = nbLoadingElements;
            $loadingBar.fadeIn(speed, function(){

              // We set a param to know that the animation to show is finished
              waitForAnimation.isAnimated--;

              // During destroying, calls can be made to show the loader. So we let's the loader disappear and then we show it again
              callStack();

            });
          }
          else{
            callStack();
          }
        }

        // Hide the loading bar element
        function processHide(){
          
          // Check if we have to destroy the loader (it happens when the counter is equal to 0)
          if( decreaseCounter() === 0){ // If countNbCall == 0 decreaseCounter() returns -1

            // We set a param to know that the animation to hide has begin
            waitForAnimation.isAnimated = nbLoadingElements;

            // We animate the loader to make it disappear
            $loadingBar.fadeOut(speed, function(){
              // This will be called as many times as there are elements in the $loading element
              // We set a param to know that the animation to hide is finished
              waitForAnimation.isAnimated--;

              // We destroy the loader element
              $(this).remove();

              // Reset the initial position of the loader parent
              $parentSelector.css("position", previousCssPosition);

              // If all loaders have been destroyed, we reset the $loadingBar variable
              if (waitForAnimation.isAnimated === 0) {
                $loadingBar = undefined;
              }

              // If a callback is defined, we call it
              if(params.callbackOnHiding && typeof(params.callbackOnHiding) === "function"){
                params.callbackOnHiding();
              }

              // During destroying, calls can be made to show the loader. So we let's the loader disappear and then we show it again
              callStack();
            });
          }
          else{
            callStack();
          }
        }

        // Body of the closure function
        return  {
          showLoading : showLoading,
          hideLoading : hideLoading,
          init        : initLoading
        };
      }
    }
  });

  $.extend($.fn.nimbleLoader,{
    settings:{
      overlay              : true,
      position             : "absolute",
      loaderImgUrl         : "",
      loaderClass          : "loading_bar",
      callbackOnHiding     : function(){},
      speed                : 'fast',
      hasBackground        : false,
      backgroundColor      : "#ffffff",
      backgroundOpacity    : 0.5,
      debug                : false
    },
    setSettings: function(options){
      $.extend($.fn.nimbleLoader.settings, options);
    }
  });

})(jQuery);

//masked password constructor
function fm_pwd(passfield, symbol)
{
	//if the browser is unsupported, silently fail
	//[pre-DOM1 browsers generally, and Opera 8 specifically]
	if(typeof document.getElementById == 'undefined'
		|| typeof document.styleSheets == 'undefined') { return false; }

	//or if the passfield doesn't exist, silently fail
	if(passfield == null) { return false; }
	
	//save the masking symbol 
	this.symbol = symbol;

	//identify Internet Explorer for a couple of conditions
	this.isIE = typeof document.uniqueID != 'undefined';
	
	//delete any default value for security (and simplicity!)
	passfield.value = '';
	passfield.defaultValue = '';

	//create a context wrapper, so that we have sole context for modifying the content
	//(ie. we can go context.innerHTML = replacement; without catering for 
	// anything else that's there besides the password field itself)
	//and give it a distinctive and underscored name, to prevent conflict
	passfield._contextwrapper = this.createContextWrapper(passfield);
	
	//create a fullmask flag which will be used from events to determine
	//whether to mask the entire password (true) 
	//or to stop at the character limit (false)
	//most events set the flag before being called, except for onpropertychange
	//which uses whatever the setting currently is
	//this used to be an argument, but onpropertychange fires from our modifications
	//as well as manual input, so the blur event that's supposed to have a fullmask
	//triggers in turn an onpropertychange which doesn't, with the end result
	//that fullmask never works; so by doing it like this, we can set it to 
	//true from the blur event and that will persist through all subsequent 
	//onpropertychange events, until another manual event changes it back to false
	this.fullmask = false; 

	//for the code that converts a password field into a masked field
	//I used to have lovely clean elegant code for most browsers, then 
	//ugly horrible hacky code for IE; but since the hacky approach does
	//actually work for everyone, and we have to have it here whatever,
	//we may as well just use it for everyone, and get a big saving in code-size
	//it also means we'll get total behavioral consistency, in terms of
	//the preservation (or rather, lack thereof) of existing event handlers

	//save a reference to the wrapper because the passfield reference will be lost soon
	var wrapper = passfield._contextwrapper;
	
	//create the HTML for the hidden field
	//using the name from the original password field
	var hiddenfield = '<input type="hidden" name="' + passfield.name + '">';
	
	//copy the HTML from the password field to create the new plain-text field
	var textfield = this.convertPasswordFieldHTML(passfield);

	//write the hiddenfield and textfield HTML into the wrapper, replacing what's there
	wrapper.innerHTML = hiddenfield + textfield;
	
	//grab back the passfield reference back and save it back to passfield
	//then add the masked-password class 
	passfield = wrapper.lastChild;
	passfield.className += ' masked';
	
	//try to disable autocomplete for this field
	//to prevent firefox from remembering and subsequently offering 
	//a menu of useless masking strings, things like "✫✫✫✫✫✫✫f"
	//which of course can't be decoded, they'll just be represented by whatever
	//is in the realfield value at the time, ie. a completely unrelated value!
	passfield.setAttribute('autocomplete', 'off');

	//now grab the hidden field reference, 
	//saving it as a property of the passfield
	passfield._realfield = wrapper.firstChild;
	
	//restore its contextwrapper reference
	passfield._contextwrapper = wrapper;

	//limit the caret position so that you can only edit or select from the end
	//you can't add, edit or select from the beginning or middle of the field
	//otherwise we can't track which masked characters represent which letters
	//(far from ideal I know, but I can't see how else to know 
	//which masking symbols represent which letters if you edit from the middle..?)
	this.limitCaretPosition(passfield);
	
	//save a reference to this
	var self = this;
	
	//then apply the core events to the visible field
	this.addListener(passfield, 'change', function(e) 
	{ 
		self.fullmask = false; 
		self.doPasswordMasking(self.getTarget(e)); 
	});
	this.addListener(passfield, 'input', function(e) 
	{ 
		self.fullmask = false; 
		self.doPasswordMasking(self.getTarget(e)); 
	});
	//no fullmask setting for onpropertychange (as noted above)
	this.addListener(passfield, 'propertychange', function(e) 
	{ 
		self.doPasswordMasking(self.getTarget(e)); 
	});
	
	//for keyup, don't respond to the tab or shift key, otherwise when you [shift/]tab 
	//into the field the keyup will cause the fully-masked password to become partially masked
	//which is inconsistent with the mouse since it doesn't happen when you click focus
	//so it's only supposed to happen when you actually edit it; we'll also prevent it
	//from happening in response to arrows keys as well, for visual completeness!
	//and from the other modifiers keys, just cos it feels like the right thing to do
	this.addListener(passfield, 'keyup', function(e) 
	{ 
		if(!/^(9|1[678]|224|3[789]|40)$/.test(e.keyCode.toString()))
		{
			self.fullmask = false; 
			self.doPasswordMasking(self.getTarget(e));
		}
	});
	
	//the blur event completely masks the input password
	//(as opposed to leaving the last n characters plain during input)
	this.addListener(passfield, 'blur', function(e) 
	{ 
		self.fullmask = true; 
		self.doPasswordMasking(self.getTarget(e)); 
	});
	
	//so between those events we get completely rock-solid behavior
	//with enough redundency to ensure that all input paths are covered
	//and no flickering of text between states :-)

	//force the parent form to reset onload
	//thereby clearing all values after soft refreh
	this.forceFormReset(passfield);

	//return true for success
	return true;
}


//associated utility methods
fm_pwd.prototype =
{

	//implement password masking for a textbox event
	doPasswordMasking : function(textbox)
	{
		//create the plain password string
		var plainpassword = '';
		
		//if we already have a real field value we need to work out the difference
		//between that and the value that's in the input field
		if(textbox._realfield.value != '')
		{
			//run through the characters in the input string
			//and build the plain password out of the corresponding characters
			//from the real field, and any plain characters in the input
			for(var i=0; i<textbox.value.length; i++)
			{
				if(textbox.value.charAt(i) == this.symbol)
				{
					plainpassword += textbox._realfield.value.charAt(i);
				}
				else
				{
					plainpassword += textbox.value.charAt(i);
				}
			}
		}
		
		//if there's no real field value then we're doing this for the first time
		//so whatever's in the input field is the entire plain password
		else 
		{ 
			plainpassword = textbox.value; 
		}
		
		//get the masked version of the plainpassword, according to fullmask 
		//and passing the textbox reference so we have its symbol and limit properties
		var maskedstring = this.encodeMaskedPassword(plainpassword, this.fullmask, textbox);
		
		//then we modify the textfield values
		//if (AND ONLY IF) one of the values are now different from the original
		//(this condition is essential to avoid infinite repetition 
		// leading to stack overflow, from onpropertychange in IE
		// [value changes, fires event, which changes value, which fires event ...])
		//we check both instead of just one, so that we can still allow the action
		//of changing the mask without modifying the password itself
		if(textbox._realfield.value != plainpassword || textbox.value != maskedstring)
		{
			//copy the plain password to the real field
			textbox._realfield.value = plainpassword;
			
			//then write the masked value to the original textbox
			textbox.value = maskedstring;
		}
	},
	
	
	//convert a plain-text password to a masked password
	encodeMaskedPassword : function(passwordstring, fullmask, textbox)
	{
		//the character limit is nominally 1
		//this is how many characters to leave plain at the end
		//but if the fullmask flag is true the limit is zero
		//and the password will be fully masked
		var characterlimit = fullmask === true ? 0 : 1;
		
		//create the masked password string then iterate  
		//through he characters in the plain password
		for(var maskedstring = '', i=0; i<passwordstring.length; i++)
		{
			//if we're below the masking limit, 
			//add a masking symbol to represent this character
			if(i < passwordstring.length - characterlimit) 
			{ 
				maskedstring += this.symbol; 
			}
			//otherwise just copy across the real character
			else 
			{
				maskedstring += passwordstring.charAt(i); 
			}
		}
		
		//return the final masked string
		return maskedstring;
	},
	
	
	//create a context wrapper element around a password field
	createContextWrapper : function(passfield)
	{
		//create the wrapper and add its class
		//it has to be an inline element because we don't know its context
		var wrapper = document.createElement('span');
		
		//enforce relative positioning
		wrapper.style.position = 'relative';
		
		//insert the wrapper directly before the passfield
		passfield.parentNode.insertBefore(wrapper, passfield);
		
		//then move the passfield inside it
		wrapper.appendChild(passfield);
		
		//return the wrapper reference
		return wrapper;
	},
	
	
	//force a form to reset its values, so that soft-refresh does not retain them
	forceFormReset : function(textbox)
	{
		//find the parent form from this textbox reference
		//(which may not be a textbox, but that's fine, it just a reference name!)
		while(textbox)
		{
			if(/form/i.test(textbox.nodeName)) { break; }
			textbox = textbox.parentNode;
		}
		//if the reference is not a form then the textbox wasn't wrapped in one
		//so in that case we'll just have to abandon what we're doing here
		if(!/form/i.test(textbox.nodeName)) { return null; }
		
		//otherwise bind a load event to call the form's reset method
		//we have to defer until load time for IE or it won't work
		//because IE renders the page with empty fields 
		//and then adds their values retrospectively!
		//(but in other browsers we can use DOMContentLoaded;
		// and the load listener function takes care of that split)
		this.addSpecialLoadListener(function() { textbox.reset(); });
		
		//return the now-form reference
		return textbox;
	},
	
	
	//copy the HTML from a password field to a plain text field, 
	//we have to convert the field this way because of Internet Explorer
	//because it doesn't support setting or changing the type of an input
	convertPasswordFieldHTML : function(passfield, addedattrs)
	{
		//start the HTML for a text field
		var textfield = '<input';
		
		//now run through the password fields' specified attributes 
		//and copy across each one into the textfield HTML
		//*except* for its name and type, and any formtools underscored attributes
		//we need to exclude the name because we'll define that separately
		//depending on the situation, and obviously the type, and formtools attributes
		//because we control them and their meaning in separate conditions too
		for(var fieldattributes = passfield.attributes, 
				j=0; j<fieldattributes.length; j++)
		{
			//we have to check .specified otherwise we'll get back every single attribute
			//that the element might possibly have! which is what IE puts in the attributes 
			//collection, with default values for unspecified attributes
			if(fieldattributes[j].specified && !/^(_|type|name)/.test(fieldattributes[j].name))
			{
				textfield += ' ' + fieldattributes[j].name + '="' + fieldattributes[j].value + '"';
			}
		}
		
		//now add the type of "text" to the end, plus an autocomplete attribute, and close it
		//we add autocomplete attribute for added safety, though it probably isnt necessary, 
		//since browsers won't offer to remember it anywway, because the field has no name
		//this uses HTML4 empty-element syntax, but we don't need to distinguish by spec
		//because the browser's internal representations will generally be identical anyway
		textfield += ' type="text" autocomplete="off">';
		
		//return the finished textfield HTML
		return textfield;
	},
	
	
	//this crap is what it takes to force the caret in a textbox to stay at the end
	//I'd really rather not to do this, but it's the only way to have reliable encoding
	limitCaretPosition : function(textbox)
	{
		//create a null timer reference and start function
		var timer = null, start = function()
		{
			//prevent multiple instances
			if(timer == null) 
			{
				//IE uses this range stuff
				if(this.isIE)
				{
					//create an interval that continually force the position
					//as long as the field has the focus
					timer = window.setInterval(function() 
					{ 
						//we can only force position to the end
						//because there's no way to know whether there's a selection
						//or just a single caret point, because the range methods 
						//we could use to determine that don't work on created fields
						//(they generate "Invalid argument" errors)
						var range = textbox.createTextRange(),
							valuelength = textbox.value.length,
							character = 'character';
						range.moveEnd(character, valuelength);
						range.moveStart(character, valuelength);
						range.select();				
					
					//not so fast as to be a major CPU hog
					//but fast enough to do the job effectively
					}, 100);
				}
				//other browsers have these selection properties
				else
				{
					//create an interval that continually force the position
					//as long as the field has the focus
					timer = window.setInterval(function() 
					{ 
						//allow selection from or position at the end
						//otherwise force position to the end
						var valuelength = textbox.value.length;
						if(!(textbox.selectionEnd == valuelength && textbox.selectionStart <= valuelength))
						{
							textbox.selectionStart = valuelength;
							textbox.selectionEnd = valuelength;
						}
						
					//ditto
					}, 100);
				}
			}
		},
		
		//and a stop function
		stop = function()
		{
			window.clearInterval(timer);
			timer = null;
		};
		
		//add events to start and stop the timer
		this.addListener(textbox, 'focus', function() { start(); });
		this.addListener(textbox, 'blur', function() { stop(); });
	},
	
	
	//add an event listener
	//this is deliberately not called "addEvent" so that we can 
	//compress the name, which would otherwise also effect "addEventListener"
	addListener : function(eventnode, eventname, eventhandler)
	{
		if(typeof document.addEventListener != 'undefined')
		{
			return eventnode.addEventListener(eventname, eventhandler, false);
		}
		else if(typeof document.attachEvent != 'undefined')
		{
			return eventnode.attachEvent('on' + eventname, eventhandler);
		}
	},
	
	
	//add a special load listener, split between 
	//window load for IE and DOMContentLoaded for others
	//this is only used by the force form reset method, which wants that split
	addSpecialLoadListener : function(eventhandler)
	{
		//we specifically need a browser condition here, not a feature test
		//because we know specifically what should be given to who
		//and that doesn't match general support for these constructs
		if(this.isIE)
		{
			return window.attachEvent('onload', eventhandler);
		}
		else
		{
			return document.addEventListener('DOMContentLoaded', eventhandler, false);
		}
	},
	
	
	//get an event target by sniffing for its property name
	//(assuming here that e is already a cross-model reference
	//as it is from addListener because attachEvent in IE 
	//automatically provides a corresponding event argument)
	getTarget : function(e)
	{
		//just in case!
		if(!e) { return null; }
		
		//otherwise return the target
		return e.target ? e.target : e.srcElement;
	}

}///masked pwd

function PasswordWidget(divid,pwdname)
{
	this.maindivobj = document.getElementById(divid);
	this.pwdobjname = pwdname;

	this.MakePWDWidget=_MakePWDWidget;

	this.showing_pwd=1;
	this.txtShow = 'Show';
	this.txtMask = 'Mask';
	this.txtGenerate = 'Generate';
	this.txtWeak='weak';
	this.txtMedium='medium';
	this.txtGood='good';

	this.enableShowMask=true;
	this.enableGenerate=true;
	this.enableShowStrength=true;
	this.enableShowStrengthStr=true;

}

function _MakePWDWidget()
{
	var code="";
    var pwdname = this.pwdobjname;

	this.pwdfieldid = pwdname+"_id";

	code += "<input type='password' class='pwdfield' name='"+pwdname+"' id='"+this.pwdfieldid+"'>";

	this.pwdtxtfield=pwdname+"_text";

	this.pwdtxtfieldid = this.pwdtxtfield+"_id";

	code += "<input type='text' class='pwdfield' name='"+this.pwdtxtfield+"' id='"+this.pwdtxtfieldid+"' style='display: none;'>";

	this.pwdshowdiv = pwdname+"_showdiv";

	this.pwdshow_anch = pwdname + "_show_anch";

	code += "<div class='pwdopsdiv' id='"+this.pwdshowdiv+"'><a href='#' id='"+this.pwdshow_anch+"'>"+this.txtShow+"</a></div>";

	this.pwdgendiv = pwdname+"_gendiv";

	this.pwdgenerate_anch = pwdname + "_gen_anch";

	code += "<div class='pwdopsdiv'id='"+this.pwdgendiv+"'><a href='#' id='"+this.pwdgenerate_anch+"'>"+this.txtGenerate+"</a></div>";

	this.pwdstrengthdiv = pwdname + "_strength_div";

	code += "<div class='pwdstrength' id='"+this.pwdstrengthdiv+"'>";

	this.pwdstrengthbar = pwdname + "_strength_bar";

	code += "<div class='pwdstrengthbar' id='"+this.pwdstrengthbar+"'></div>";

	this.pwdstrengthstr = pwdname + "_strength_str";

	code += "<div class='pwdstrengthstr' id='"+this.pwdstrengthstr+"'></div>";

	code += "</div>";

	this.maindivobj.innerHTML = code;

	this.pwdfieldobj = document.getElementById(this.pwdfieldid);
	
	this.pwdfieldobj.pwdwidget=this;

	this.pwdstrengthbar_obj = document.getElementById(this.pwdstrengthbar);
	
	this.pwdstrengthstr_obj = document.getElementById(this.pwdstrengthstr);

	this._showPasswordStrength = passwordStrength;

	this.pwdfieldobj.onkeyup=function(){ this.pwdwidget._onKeyUpPwdFields(); }

	this._showGeneatedPwd = showGeneatedPwd;

	this.generate_anch_obj = document.getElementById(this.pwdgenerate_anch);
	
	this.generate_anch_obj.pwdwidget=this;

	this.generate_anch_obj.onclick = function(){ this.pwdwidget._showGeneatedPwd(); }

	this._showpwdchars = showpwdchars;

	this.show_anch_obj = document.getElementById(this.pwdshow_anch);

	this.show_anch_obj.pwdwidget = this;

	this.show_anch_obj.onclick = function(){ this.pwdwidget._showpwdchars();}

	this.pwdtxtfield_obj = document.getElementById(this.pwdtxtfieldid);

	this.pwdtxtfield_obj.pwdwidget=this;

	this.pwdtxtfield_obj.onkeyup=function(){ this.pwdwidget._onKeyUpPwdFields(); }
	

	this._updatePwdFieldValues = updatePwdFieldValues;

	this._onKeyUpPwdFields=onKeyUpPwdFields;

	if(!this.enableShowMask)
	{ document.getElementById(this.pwdshowdiv).style.display='none';}

	if(!this.enableGenerate)
	{ document.getElementById(this.pwdgendiv).style.display='none';}

	if(!this.enableShowStrength)
	{ document.getElementById(this.pwdstrengthdiv).style.display='none';}

	if(!this.enableShowStrengthStr)
	{ document.getElementById(this.pwdstrengthstr).style.display='none';}
}

function onKeyUpPwdFields()
{
	this._updatePwdFieldValues(); 
	this._showPasswordStrength();
}

function updatePwdFieldValues()
{
	if(1 == this.showing_pwd)
	{
		this.pwdtxtfield_obj.value = this.pwdfieldobj.value;	
	}
	else
	{
		this.pwdfieldobj.value = this.pwdtxtfield_obj.value;
	}
}

function showpwdchars()
{
	var innerText='';
	var pwdfield = this.pwdfieldobj;
	var pwdtxt = this.pwdtxtfield_obj;
	var field;
	if(1 == this.showing_pwd)
	{
		this.showing_pwd=0;
		innerText = this.txtMask;

		pwdtxt.value = pwdfield.value;
		pwdfield.style.display='none';
		pwdtxt.style.display='';
		pwdtxt.focus();
	}
	else
	{
		this.showing_pwd=1;
		innerText = this.txtShow;	
		pwdfield.value = pwdtxt.value;
		pwdtxt.style.display='none';
		pwdfield.style.display='';
		pwdfield.focus();
			
	}
	this.show_anch_obj.innerHTML = innerText;

}

function passwordStrength()
{
	var colors = new Array();
	colors[0] = "#cccccc";
	colors[1] = "#ff0000";
	colors[2] = "#ff5f5f";
	colors[3] = "#56e500";
	colors[4] = "#4dcd00";
	colors[5] = "#399800";

	var pwdfield = this.pwdfieldobj;
	var password = pwdfield.value

	var score   = 0;

	if (password.length > 6) {score++;}

	if ( ( password.match(/[a-z]/) ) && 
	     ( password.match(/[A-Z]/) ) ) {score++;}

	if (password.match(/\d+/)){ score++;}

	if ( password.match(/[^a-z\d]+/) )	{score++};

	if (password.length > 12){ score++;}
	
	var color=colors[score];
	var strengthdiv = this.pwdstrengthbar_obj;
	
	strengthdiv.style.background=colors[score];
	
	if (password.length <= 0)
	{ 
		strengthdiv.style.width=0; 
	}
	else
	{
		strengthdiv.style.width=(score+1)*10+'px';
	}

	var desc='';
	if(password.length < 1){desc='';}
	else if(score<3){ desc = this.txtWeak; }
	else if(score<4){ desc = this.txtMedium; }
	else if(score>=4){ desc= this.txtGood; }

	var strengthstrdiv = this.pwdstrengthstr_obj;
	strengthstrdiv.innerHTML = desc;
}

function getRand(max) 
{
	return (Math.floor(Math.random() * max));
}

function shuffleString(mystr)
{
	var arrPwd=mystr.split('');

	for(i=0;i< mystr.length;i++)
	{
		var r1= i;
		var r2=getRand(mystr.length);

		var tmp = arrPwd[r1];
		arrPwd[r1] = arrPwd[r2];
		arrPwd[r2] = tmp;
	}

	return arrPwd.join("");
}

function showGeneatedPwd()
{
	var pwd = generatePWD();
	this.pwdfieldobj.value= pwd;
	this.pwdtxtfield_obj.value =pwd;

	this._showPasswordStrength();
}

function generatePWD()
{
    var maxAlpha = 26;
	var strSymbols="~!@#$%^&*(){}?><`=-|][";
	var password='';
	for(i=0;i<3;i++)
	{
		password += String.fromCharCode("a".charCodeAt(0) + getRand(maxAlpha));
	}
	for(i=0;i<3;i++)
	{
		password += String.fromCharCode("A".charCodeAt(0) + getRand(maxAlpha));
	}
	for(i=0;i<3;i++)
	{
		password += String.fromCharCode("0".charCodeAt(0) + getRand(10));
	}
	for(i=0;i<4;i++)
	{
		password += strSymbols.charAt(getRand(strSymbols.length));
	}

	password = shuffleString(password);
	password = shuffleString(password);
	password = shuffleString(password);

	return password;
}


(function(a){
    a.fn.FMrating=function(p){
        var p=p||{};

        var b=p&&p.rating_star_length?p.rating_star_length:"5";
        var c=p&&p.rating_function_name?p.rating_function_name:"";
        var e=p&&p.rating_initial_value?p.rating_initial_value:"0";
        var d=p&&p.directory?p.directory:"images";
        var f=e;
        var g=a(this);
        b=parseInt(b);
        init();
        g.next("ul").children("li").hover(function(){
            $(this).parent().children("li").css('background-position','0px 0px');
            var a=$(this).parent().children("li").index($(this));
            $(this).parent().children("li").slice(0,a+1).css('background-position','0px -28px')
            },function(){});
        g.next("ul").children("li").click(function(){
            var a=$(this).parent().children("li").index($(this));
            f=a+1;
            g.val(f);
            if(c!=""){
                eval(c+"("+g.val()+")")
                }
            });
    g.next("ul").hover(function(){},function(){
        if(f==""){
            $(this).children("li").slice(0,f).css('background-position','0px 0px')
            }else{
            $(this).children("li").css('background-position','0px 0px');
            $(this).children("li").slice(0,f).css('background-position','0px -28px')
            }
        });
function init(){
    $('<div style="clear:both;"></div>').insertAfter(g);
    g.css("float","left");
    var a=$("<ul>");
    a.addClass("rating_");
    for(var i=1;i<=b;i++){
        a.append('<li style="background-image:url('+d+'/web_widget_star.gif)"><span>'+i+'</span></li>')
        }
        a.insertAfter(g);
    if(e!=""){
        f=e;
        g.val(e);
        g.next("ul").children("li").slice(0,f).css('background-position','0px -28px')
        }
    }
}
})(jQuery);

function FMgmap(origin, dest) {
	var location1;
	var location2;
	var latlng;
	var map;
	var distance;
	var geocoder = new google.maps.Geocoder();
	var address1 = origin;
	var address2 = dest;
	
	 //alert('Address1'+address1+'<br />'+'Address2'+address2);
    // Creating a GeocoderRequest object
    var geocoderRequest1 = { address: address1}
	var geocoderRequest2 = { address: address2}
	// Making the Geocode request for the location 1
    geocoder.geocode(geocoderRequest1,function(results, status) 
	{
      // Check if status is OK before proceeding
      if (status == google.maps.GeocoderStatus.OK) 
	  {
	   location1 = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
	   geocoder.geocode(geocoderRequest2,function(results) 
	   {
	 location2 = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
	 latlng = new google.maps.LatLng((location1.lat()+location2.lat())/2,(location1.lng()+location2.lng())/2);
	
	var mapOptions = 
	{
		zoom: 2,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	// create a new map object
		// set the div id where it will be shown
		// set the map options
	map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	// show route between the points
	
	directionsService = new google.maps.DirectionsService();
	
	directionsDisplay = new google.maps.DirectionsRenderer(
	{
		suppressMarkers: true,
		suppressInfoWindows: true
	});
	
	directionsDisplay.setMap(map);
	
	var request = {
		origin:location1, 
		destination:location2,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	
	directionsService.route(request, function(response, status) 
	{
		if (status == google.maps.DirectionsStatus.OK) 
		{
			directionsDisplay.setDirections(response);
			distance = response.routes[0].legs[0].distance.text;
            //distance += "<br/>Aproximate driving time is: "+response.routes[0].legs[0].duration.text;
		    document.getElementById("distance_road").innerHTML = distance;
            //var freightdistance = distance;
            //alert(freightdistance);
		}
	});

	// create the text to be shown in the infowindows
	var text1 = '<div id="content">'+
			'<h1 id="firstHeading">First location</h1>'+
			'<div id="bodyContent">'+
			'<p>Coordinates: '+location1+'</p>'+
			'</div>'+
			'</div>';
			
	var text2 = '<div id="content">'+
		'<h1 id="firstHeading">Second location</h1>'+
		'<div id="bodyContent">'+
		'<p>Coordinates: '+location2+'</p>'+
		'</div>'+
		'</div>';
	// create the markers for the two locations		
	var marker1 = new google.maps.Marker({
		map: map, 
		position: location1,
		title: "First location",
        content: text2
	});
	var marker2 = new google.maps.Marker({
		map: map, 
		position: location2,
		title: "Second location",
        content: text2
	});
	
	
	
  var infowindow1 = new InfoBubble({ 
            map : map,  
            maxWidth : 320, 
            minWidth : 180, 
            maxHeight : 320, 
            minHeight : 120, 
            shadowStyle : 1, 
            padding : 1, 
            backgroundColor : '#fdead0', 
            borderRadius : 8, 
            arrowSize : 15, 
            borderWidth : 2, 
            borderColor : '#5aa5cc', 
            disableAutoPan : false, 
            hideCloseButton : false, 
            arrowPosition : 50, 
            arrowStyle : 0 ,
            //pixelOffset : new google.maps.Size(-1000, -100) 

         }); 
  var infowindow2 = new InfoBubble({ 
            map : map,  
            maxWidth :320, 
            minWidth :180, 
            maxHeight : 320, 
            minHeight : 120, 
            shadowStyle : 1, 
            padding : 1, 
            backgroundColor : '#fdead0', 
            borderRadius : 8, 
            arrowSize : 15, 
            borderWidth : 2, 
            borderColor : '#5aa5cc', 
            disableAutoPan : false, 
            hideCloseButton : false, 
            arrowPosition : 50, 
            arrowStyle : 0 ,
           // pixelOffset : new google.maps.Size(-1000, -100) 

         }); 
    
    //infowindow.close();
		
   		//infowindow.setContent('<h1>Hi this is my Info Window');
 	//	owindow.open(map, info);
    
	// create info boxes for the two markers
	//var infowindow1 = new google.maps.InfoWindow({
	//	content: text1
	//});
	//var infowindow2 = new google.maps.InfoWindow({
	//	content: text2
	//});

	// add action events so the info windows will be shown when the marker is clicked
	google.maps.event.addListener(marker1, 'click', function() {
		infowindow1.open(map,marker1);
        infowindow1.setContent(text1);
        infowindow2.close();
	});
	google.maps.event.addListener(marker2, 'click', function() {
		infowindow2.open(map,marker2);
        infowindow2.setContent(text2);
         infowindow1.close();
	});
	
	// compute distance between the two points
	var R = 6371; 
	var dLat = toRad(location2.lat()-location1.lat());
	var dLon = toRad(location2.lng()-location1.lng()); 
	
	var dLat1 = toRad(location1.lat());
	var dLat2 = toRad(location2.lat());
	
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
			Math.cos(dLat1) * Math.cos(dLat1) * 
			Math.sin(dLon/2) * Math.sin(dLon/2); 
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
	var d = R * c;
	   
	   });
	  //alert("Location1"+location1+"Location2"+location2);
	  //alert('Loc1 Lat'+location1.lat())
	  
	  }
	  else{
	     alert('Locations  not set');
	  }
	  });
	// center of the map (compute the mean value between the two locations)
	
	
	// document.getElementById("distance_direct").innerHTML = "<br/>The distance between the two points (in a straight line) is: "+d;
   //return freightdistance;
}//FMgmap()

function toRad(deg) 
{
	return deg * Math.PI/180;
}//toRad()
//FMgmap("France","Greece");
//alert($('#distance_road').val());
/*
 * SimpleModal 1.4.4 - jQuery Plugin
 * http://simplemodal.com/
 * Copyright (c) 2013 Eric Martin
 * Licensed under MIT and GPL
 * Date: Sun, Jan 20 2013 15:58:56 -0800
 */


<!-- <div class="carousel slide" data-ride="carousel" id="carrossel-principal">
<div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/img/jobfinder.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/carrossel.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>

</div> -->
<a class="btn-inverse btn-large" href="/login">Login</a>
<div class="productCarrousel slider">
                <div class="carrosselniced" data-view="1" data-grid=".productCarrousel" data-nav="false" data-auto="true" data-bullet="true" data-delay="4500" data-transition="850">
                    <div class="block">
                        <div class="content">
                            <!-- content li - product -->
                            <div>
                                <ul>
                                    <li>
                                        <figure>
                                            <img src="/assets/img/jobfinder.png" />
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="/assets/img/design2.png" />
                                        </figure>
                                    </li>
                                    <li>
                                        <figure>
                                            <img src="/assets/img/design3.png" />
                                        </figure>
                                       
                                    </li>
                                   
                                </ul>
                            </div>
                           
                            <!-- /content li - product -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   

<style>
  


a{
    margin: 35cm;
}
   
.background{
    background: url('/assets/img/jobfinder.png');
    width:100%;
    height: 100%;
    opacity: 0.5;

}
html,
body,
section,
div,
button,
figure,
ul,
li,
img,
h1,
h2,
h4,
a {
    border: 0;
    padding: 0;
    margin: 0;
}

.full {
    max-width: 1200px;
    width: 90%;
    display: block;
    margin: auto;
    position: relative;
}

a {
    display: block;
    text-align: center;
    margin: 0 0 10px;
    text-transform: uppercase;
    letter-spacing: 5px;
}

h1,
h2,
h4 {
    width: 100%;
    text-align: center;
    font-family: arial;
    letter-spacing: 5px;
    margin: 50px 0 25px;
    font-weight: 700;
    display: block;
    font-size: 25px;
}

h2 {
    font-size: 20px;
}

h4 {
    font-size: 14px;
    margin: 0;
}

.productCarrousel {
    width: calc(100% - 70px);
    margin: 0 auto;
}

.productCarrousel ul li {
    margin: auto 5px 30px 5px;
}

.productCarrousel.slider ul li {
    margin: 0;
}


/* :base /

/* carrosselniced */

.carrosselniced {
    width: 100%;
    position: relative;
    margin: 0 0 15px;
}

.carrosselniced:first-child {
    /*margin:40px 0 20px;*/
}

.carrosselniced .block {
    width: 100%;
    /*height:180px;*/
    transition: all 0.4s;
    overflow: hidden;
}

.carrosselniced .content {
    margin: 0;
}

.carrosselniced .content li {
    width: 100%;
    /*height:180px;
    line-height:180px;
    font-size:60px;
    font-weight:800;
    color:rgba(255, 255, 255, 0.4);
    font-family:arial;*/
    position: relative;
    /*margin:0 5px;*/
    /*test*/
    /*padding:0 5px;*/
    /*test*/
    text-transform: uppercase;
    transition: all 0.4s;
    overflow: hidden;
    text-align: center;
    display: block;
    float: left;
}

.carrosselniced .content li img {
    width: 100%;
    /*height:100%;*/
    /*position:absolute;*/
    /*left:0;
    top:0;
    z-index:-1;*/
}

.carrosselniced .control {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.carrosselniced .control button {
    background: none;
    position: absolute;
    top: 0;
    color: #00C4FF;
    font-size: 13px;
    font-weight: 100;
    text-transform: uppercase;
    transition: all 0.4s;
    cursor: pointer;
    display: inline-block;
}

.carrosselniced .control button span {
    font-size: 35px;
    font-weight: 100;
}

.carrosselniced .control button:hover {
    color: #111111;
}

.carrosselniced .control button.prev {
    left: -35px;
}

.carrosselniced .control button.next {
    right: -35px;
}

.carrosselniced .bullet {
    width: 100%;
    position: absolute;
    top: 15px;
    left: 0;
    z-index: 1;
    text-align: center
}

.carrosselniced .bullet button {
    width: 14px;
    height: 14px;
    background: rgba(255, 255, 255, 0.6);
    text-indent: -9999px;
    margin: 0 3px;
    border: 1px solid #717171;
    border-radius: 20px;
    cursor: pointer;
    display: inline-block;
}

.carrosselniced.caption .bullet button {
    width: auto;
    height: auto;
    text-indent: 0;
    padding: 3px 5px;
    margin: 0 3px 0 0;
    font-size: 10px;
    color: #424242;
    border-radius: 3px;
}

.carrosselniced .bullet button.selected {
    background: #00C4FF;
}

.carrosselniced.caption .bullet button.selected {
    color: #FFFFFF;
}


/* animations */

.carrosselniced.anGrayscale .block {
    filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
}

.carrosselniced.anRotateY .block {
    transform: rotateY(360deg);
}

.carrosselniced.anRotateX .block {
    transform: rotateX(360deg);
}

.carrosselniced.anOpacity .block {
    opacity: 0;
}


/* :animations */


/* :carrosselniced */


/* adjust for plataform */

section#slider .slider-content .carrosselniced .control {
    width: 90px !important;
    height: 50px !important;
    position: absolute;
    right: 3% !important;
    bottom: 4.3% !important;
    top: inherit;
    left: inherit;
    margin: 0 !important;
}

section#slider .slider-content .carrosselniced .control button {
    padding: 15px;
    color: white;
    left: inherit !important;
    right: inherit !important;
    cursor: pointer;
    border: 1px solid white;
    top: inherit;
}

section#slider .slider-content .carrosselniced .control span {
    font-size: 18px;
}

section#slider .slider-content .carrosselniced .control button:first-child {
    left: 0 !important;
}

section#slider .slider-content .carrosselniced .control button:last-child {
    right: 0 !important;
}


/* adjust for plataform */


</style>
<script type="text/javascript">
var Wapp = Wapp || {};

(function($, d, w) {
    'use strict';

    var
        Wobj = {
            carrossel: '.carrosselniced',
            block: '.carrosselniced .block',
            content: '.carrosselniced .block .content',
            control: '.carrosselniced .control',
            bullet: '.carrosselniced .bullet',
            bulletButton: '.carrosselniced .bullet button',
            line: '.carrosselniced .block .content',
            amount: $('.carrosselniced .block ul').length,
            list: '.carrosselniced .block .content li',
            width: 0,
            height: 0,
            margin: 0,
            prev: '.prev',
            next: '.next',
            buttonHeight: 30, // px
            count: 0,
            interval: {},
            // --------------- animate CSS class
            animateClass: [
                // 'anGrayscale',
                // 'anRotateY',
                // 'anRotateX',
                // 'anOpacity',
                // 'anRotate'
            ]
        };

    Wapp.carrosselNiced = {};

    Wapp.carrosselNiced.Init = function(debug) {
        if (debug === true) { // objects workspace
            console.log('Wapp: ', Wapp);
            console.log('Wobj: ', Wobj);
            console.log('-----------------------------------------');
        }

        //Wapp.carrosselNiced.CreateId();
        //Wapp.carrosselNiced.Listen();

        // ******************************************
        // FOR V T E X PLATAFORM ONLY
        // ******************************************
        // remove li empty - for carrossel and slider
        // remove setTimeout if plataform not VTEX
        // ******************************************
        $('.helperComplement').remove(); // trash list
        $('.carrosselniced ul li li').remove(); // others trash list

        setTimeout(function() {
            Wapp.carrosselNiced.CreateId();
            Wapp.carrosselNiced.Listen();
        }, 200);
        // ******************************************
    };

    Wapp.carrosselNiced.Listen = function() {
        $(d).on('click', Wobj.prev, Wapp.carrosselNiced.PrevSet);
        $(d).on('click', Wobj.next, Wapp.carrosselNiced.NextSet);
        $(w).on('resize', Wapp.carrosselNiced.Resize);
        $(d).on('click', Wobj.bulletButton, Wapp.carrosselNiced.ChangeBullet);
    };

    Wapp.carrosselNiced.Resize = function() {
        Wobj.count = 1;
        Wapp.carrosselNiced.CreateId();
    };

    Wapp.carrosselNiced.CreateId = function() { // multiple carrossel
        // not create, disable example
        /*if ($(w).width() <= 550) {
            return false;
        }*/

        $(Wobj.carrossel).each(function(i) {
            $(this).removeAttr('id');
            $(this).attr('id', 'cn' + i);
            Wapp.carrosselNiced.Create('#cn' + i, $(this).attr('data-view'));
        });
    };

    Wapp.carrosselNiced.Create = function(id, v) {
        var
            amount = $(id + ' .content li').length,
            element = $(id + ' .content li').first(),
            first = $(id + ' .content li')[0],
            margin = ($(element).outerWidth(true) - $(element).width()) + 1,
            block = $(id + ' .block .content'),
            line = $(id + ' .content li'),
            view = parseInt(v, 0),
            grid = $(id).closest($(id).attr('data-grid')),
            gridWidth = parseInt($(grid).width()),
            responsa = $(id).attr('data-responsa'),
            width = ($(grid).width() / view),
            blockWidth = ($(grid).width() * amount),
            lineWidth = (width - margin),
            percent = '10000%';

        // no create
        if (amount === 1) {
            return false;
        }

        $(first).addClass('selected');

        // for slider
        if (view === 1) {
            // create for bullets
            $(line).each(function(i) {
                $(this).attr('data-pos', i);
            });

            $(block).width(blockWidth);
            $(line).width(width);
            console.log('Create: Slider');

            // for carrossel
        } else {
            // for responsive using data-responsa
            if (responsa) {
                $.each(JSON.parse(responsa), function(i, v) {
                    if (gridWidth < parseInt(i, 0)) {
                        view = parseInt(v, 0);
                        width = (gridWidth / view);
                        blockWidth = (gridWidth * amount);
                        lineWidth = width;

                        return false;
                    }
                });
            }

            $(line).width(lineWidth);
            $(block).width(percent);
            console.log('Create: Carrossel');
        }

        setTimeout(function() {
            Wapp.carrosselNiced.ResetControls(id);
            Wapp.carrosselNiced.Controls(id);
        }, 500);

        // only first time
        if (Wobj.count === 0) {
            Wapp.carrosselNiced.Continuous(id);
        }
    };

    Wapp.carrosselNiced.ResetControls = function(id) {
        if (!id) {
            $(Wobj.control).remove();
            $(Wobj.bulletButton).remove();

        } else {
            $(id + ' .control').remove();
            $(id + ' .bullet').remove();
        }
    };

    Wapp.carrosselNiced.Controls = function(id) {
        var
            html = '';

        // navigation
        if ($(id).attr('data-nav') === 'true') {

            var
                height = ($(id + ' .block').height() / 2) - 20, // (carrosel UL height / 2) - (BUTTON height / 2) = center BUTTON
                left = ($(id).attr('data-left') ? '<span class="' + $(id).attr('data-left') + '">' : 'left'),
                right = ($(id).attr('data-right') ? '<span class="' + $(id).attr('data-right') + '">' : 'right');

            html += '<div class="control" style="margin-top:' + height + 'px;">';
            html += '<button class="prev" data-id="' + id + '">';
            html += left;
            html += '</button>';
            html += '<button class="next" data-id="' + id + '">';
            html += right;
            html += '</button>';
            html += '</div>';

            $(id).append(html);
            html = '';
        }

        // bullet only slider
        if ($(id).attr('data-bullet') === 'true') {
            if ($(id).attr('data-view') === '1') {
                var
                    first;

                html += '<div class="bullet">';

                // text in bullet
                if ($(id).attr('data-caption') === 'true') {
                    $(id).addClass('caption');

                    $(id + ' .content li').each(function(i) {
                        html += '<button data-pos="' + i + '" data-id="' + id + '">' + $(this).attr('data-title') + '</button>';
                    });

                } else {
                    $(id + ' .content li').each(function(i) {
                        html += '<button data-pos="' + i + '" data-id="' + id + '">' + i + '</button>';
                    });
                }

                html += '</div>';

                $(id).append(html);
                html = '';

                first = $(id + ' .bullet button')[0];
                $(first).addClass('selected');
            }
        }
    };

    Wapp.carrosselNiced.Continuous = function(id) {
        if ($(id).attr('data-auto') === 'true') {
            Wapp.carrosselNiced.SetInterVal(id);
        }
    };

    Wapp.carrosselNiced.SetInterVal = function(id) {
        Wobj.interval[id.replace('#', '')] = setInterval(function() {
            Wapp.carrosselNiced.Next(id);
        }, $(id).attr('data-delay'));
    };

    Wapp.carrosselNiced.Clear = function(id) {
        clearInterval(Wobj.interval[id.replace('#', '')]);
    };

    Wapp.carrosselNiced.PrevSet = function(e) {
        var
            id;

        if ($(e.target).prop('tagName') === 'SPAN') {
            id = $(e.target).parent().attr('data-id');

        } else {
            id = $(e.target).attr('data-id');
        }

        Wapp.carrosselNiced.Clear(id);
        Wapp.carrosselNiced.Prev(e, id);
    };

    Wapp.carrosselNiced.Prev = function(e, id) {
        var
            view = $(id).attr('data-view'),
            len = $(id + ' .content li').length,
            first = $(id + ' .content li')[0],
            last = $(id + ' .content li')[len - 1],
            width = $(id + ' .content li').width(),
            rand = 'noClass',
            transition = 0;

        if ($(id).attr('data-effect') === 'true') {
            rand = Wapp.carrosselNiced.Rand();
        }

        console.log('first', first);
        console.log('last', last);

        transition = $(id).attr('data-transition');
        $(id).addClass(rand);
        $(first).before($(last));

        $(id + ' .content').css('margin-left', '-' + width + 'px');
        $(id + ' .content').stop().animate({
            'margin-left': 0
        }, transition, function() {
            $(id).removeClass(rand);
            $(first).addClass('selected');
            Wapp.carrosselNiced.ChangeSelected(e, id);
        });

        return false;
    };

    Wapp.carrosselNiced.NextSet = function(e) {
        var
            id;

        if ($(e.target).prop('tagName') === 'SPAN') {
            id = $(e.target).parent().attr('data-id');

        } else {
            id = $(e.target).attr('data-id');
        }

        Wapp.carrosselNiced.Clear(id);
        Wapp.carrosselNiced.Next(id);
    };

    Wapp.carrosselNiced.Next = function(e) {
        var
            id,
            len = '',
            first,
            last,
            width = 0,
            rand = 'noClass',
            transition = 0;

        if (typeof(e) === 'string') { // init by FUNCTION[Continuous]
            id = e;

        } else { // init by EVENT[Click]
            id = $(e.target).attr('data-id');
        }

        len = $(id + ' .content li').length;
        first = $(id + ' .content li')[0];
        last = $(id + ' .content li')[len - 1];
        width = $(id + ' .content li').width();
        transition = $(id).attr('data-transition');

        if ($(id).attr('data-effect') === 'true') {
            rand = Wapp.carrosselNiced.Rand();
        }

        $(id).addClass(rand);

        $(id + ' .content').stop().animate({
            'margin-left': '-' + width + 'px'
        }, transition, function() {
            $(id + ' .content').css('margin-left', 0);
            $(last).after($(first));
            $(id).removeClass(rand);
            Wapp.carrosselNiced.ChangeSelected(e, id);
        });
    };

    Wapp.carrosselNiced.ChangeBullet = function(e) {
        var
            id = $(e.target).attr('data-id'),
            pos = $(e.target).attr('data-pos'),
            amount = $(id + ' .content li').length,
            selected = $(id + ' .content li.selected'),
            element = '',
            first = $(id + ' .content li.selected'),
            last = $(id + ' .content li')[amount - 1],
            width = $(id + ' .content li').width(),
            rand = 'noClass',
            transition = $(id).attr('data-transition');

        if ($(id + ' .content li.selected').attr('data-pos') === pos) {
            return false;
        }

        Wapp.carrosselNiced.Clear(id);

        $(id + ' .content li').each(function() {
            if ($(this).attr('data-pos') === pos) {
                element = $(this);
            }
        });

        if ($(id).attr('data-effect') === 'true') {
            rand = Wapp.carrosselNiced.Rand();
        }

        $(id).addClass(rand);

        $(selected).after($(element));

        $(id + ' .content').stop().animate({
            'margin-left': '-' + width + 'px'
        }, transition, function() {
            $(id).removeClass(rand);
            $(this).css('margin-left', 0);
            $(last).after($(first));
            Wapp.carrosselNiced.ChangeSelected(e, id);
        });
    };

    Wapp.carrosselNiced.ChangeSelected = function(e, id) {
        var
            first = $(id + ' .content li')[0],
            pos = parseInt($(first).attr('data-pos'), 0),
            bullet = $(id + ' .bullet button')[pos];
        pos = $(e.target).attr('data-pos');

        $(id + ' .content li').removeClass('selected');
        $(id + ' .bullet button').removeClass('selected');
        $(first).addClass('selected');
        $(bullet).addClass('selected');
    };

    Wapp.carrosselNiced.Rand = function() {
        var
            name = Wobj.animateClass[Math.floor(Math.random() * Wobj.animateClass.length)];

        return name;
    };

    $(d).ready(function() {
        setTimeout(function() {
            console.log('INIT: C A R R O S S E L N I C E D - V.0.4');
            Wapp.carrosselNiced.Init(true);
        }, 20);
    });

}(jQuery, document, window));

</script>
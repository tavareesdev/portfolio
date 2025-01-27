<style><?php include 'css/experience.css' ?></style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<section id="experience" class="experience cd-horizontal-timeline divPc section">
    <h1>Experiências</h1>
    <br>
    <div class="timeline">
        <div class="events-wrapper">
            <div class="events">
                <ul class="no-markers">
                    <li><a href="#0" data-date="15/08/2022" class="selected">Ago 2022</a></li>
                    <li><a href="#0" data-date="12/03/2024">Mar 2024</a></li>
                    <li><a href="#0" data-date="21/10/2024">Out 2024</a></li>
                </ul>
                <span class="filling-line" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <div class="events-content">
        <ul class="no-markers">
            <li class="selected" data-date="15/08/2022">
                <h2>ItPower Software</h2>
                <em>Agosto, 2022 até Agosto, 2023</em>
                <p>• Responsável por liderar equipes que cuidaram do ciclo de desenvolvimento e melhorias  de softwares de  projetos de clientes do começo ao fim.</p>
                <p>• Construí uma infraestrutura que lida com o cadastro e gerenciamento de produtos de clientes, desde sua origem até seu destino final.</p>
                <p>• Desenvolvi OCRs em Python para otimizar a extração e o cadastro de dados vindos de arquivos PDFs.</p>
            </li>

            <li data-date="12/03/2024">
                <h2>EasyTech Profissões</h2>
                <em>Março, 2024 até Outubro, 2024</em>
                <p>• Professor de informática pela Easytech Profissões. Trabalhei ensinando e trilhando jovens para o mercado de trabalho, preparando eles para começarem sua jornada com a melhor experiência possível.</p>
            </li>

            <li data-date="21/10/2024">
                <h2>Seja Now</h2>
                <em>Outubro, 2024 até Atualmente</em>
                <p>• Responsável por desenvolver todos os sistemas e plataformas da empresa, desde páginas B2B à B2C.</p>
                <p>• Desenvolvi sistemas como agenda online, checkout de pagamentos, plataforma de suporte e a página home da organização.</p>
            </li>
        </ul>
    </div>
</section>

<section id="experience" class="experience divCelular section" style="padding-top: 40%;">
    <h1>Experiências</h1>
    <br>
    <div class="row">
        <div class="col-md-12" style="display: flex; justify-content: center;">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h2>ItPower Software</h2>
                        <em>Agosto, 2022 até Agosto, 2023</em>
                        <p>• Responsável por liderar equipes que cuidaram do ciclo de desenvolvimento e melhorias de softwares de projetos de clientes do começo ao fim.</p>
                        <p>• Construí uma infraestrutura que lida com o cadastro e gerenciamento de produtos de clientes, desde sua origem até seu destino final.</p>
                        <p>• Desenvolvi OCRs em Python para otimizar a extração e o cadastro de dados vindos de arquivos PDFs.</p>
                    </div>
                    <div class="carousel-item">
                        <h2>EasyTech Profissões</h2>
                        <em>Março, 2024 até Outubro, 2024</em>
                        <p>• Professor de informática pela EasyTech Profissões. Trabalhei ensinando e trilhando jovens para o mercado de trabalho, preparando eles para começarem sua jornada com a melhor experiência possível.</p>
                    </div>
                    <div class="carousel-item">
                        <h2>Seja Now</h2>
                        <em>Outubro, 2024 até Atualmente</em>
                        <p>• Responsável por desenvolver todos os sistemas e plataformas da empresa, desde páginas B2B à B2C.</p>
                        <p>• Desenvolvi sistemas como agenda online, checkout de pagamentos, plataforma de suporte e a página home da organização.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($){
        var timelines = $('.cd-horizontal-timeline'),
            eventsMinDistance = 70;

        (timelines.length > 0) && initTimeline(timelines);

        function initTimeline(timelines) {
            timelines.each(function(){
                var timeline = $(this),
                    timelineComponents = {};
                //cache timeline components 
                timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
                timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children('.events');
                timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children('.filling-line');
                timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
                timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
                timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
                timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
                timelineComponents['eventsContent'] = timeline.children('.events-content');

                //assign a left postion to the single events along the timeline
                setDatePosition(timelineComponents, eventsMinDistance);
                //assign a width to the timeline
                var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
                //the timeline has been initialize - show it
                timeline.addClass('loaded');

                //detect click on the next arrow
                timelineComponents['timelineNavigation'].on('click', '.next', function(event){
                    event.preventDefault();
                    updateSlide(timelineComponents, timelineTotWidth, 'next');
                });
                //detect click on the prev arrow
                timelineComponents['timelineNavigation'].on('click', '.prev', function(event){
                    event.preventDefault();
                    updateSlide(timelineComponents, timelineTotWidth, 'prev');
                });
                //detect click on the a single event - show new event content
                timelineComponents['eventsWrapper'].on('click', 'a', function(event){
                    event.preventDefault();
                    timelineComponents['timelineEvents'].removeClass('selected');
                    $(this).addClass('selected');
                    updateulderEvents($(this));
                    updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
                    updateVisibleContent($(this), timelineComponents['eventsContent']);
                });

                //on swipe, show next/prev event content
                timelineComponents['eventsContent'].on('swipeleft', function(){
                    var mq = checkMQ();
                    ( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'next');
                });
                timelineComponents['eventsContent'].on('swiperight', function(){
                    var mq = checkMQ();
                    ( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'prev');
                });

                //keyboard navigation
                $(document).keyup(function(event){
                    if(event.which=='37' && elementInViewport(timeline.get(0)) ) {
                        showNewContent(timelineComponents, timelineTotWidth, 'prev');
                    } else if( event.which=='39' && elementInViewport(timeline.get(0))) {
                        showNewContent(timelineComponents, timelineTotWidth, 'next');
                    }
                });
            });
        }

        function updateSlide(timelineComponents, timelineTotWidth, string) {
            //retrieve translateX value of timelineComponents['eventsWrapper']
            var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
                wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));
            //translate the timeline to the left('next')/right('prev') 
            (string == 'next') 
                ? translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth - timelineTotWidth)
                : translateTimeline(timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
        }

        function showNewContent(timelineComponents, timelineTotWidth, string) {
            //go from one event to the next/previous one
            var visibleContent =  timelineComponents['eventsContent'].find('.selected'),
                newContent = ( string == 'next' ) ? visibleContent.next() : visibleContent.prev();

            if ( newContent.length > 0 ) { //if there's a next/prev event - show it
                var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
                    newEvent = ( string == 'next' ) ? selectedDate.parent('li').next('li').children('a') : selectedDate.parent('li').prev('li').children('a');
                
                updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
                updateVisibleContent(newEvent, timelineComponents['eventsContent']);
                newEvent.addClass('selected');
                selectedDate.removeClass('selected');
                updateulderEvents(newEvent);
                updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
            }
        }

        function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
            //translate timeline to the left/right according to the position of the selected event
            var eventStyle = window.getComputedStyle(event.get(0), null),
                eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
                timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
                timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
            var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

            if( (string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' && eventLeft < - timelineTranslate) ) {
                translateTimeline(timelineComponents, - eventLeft + timelineWidth/2, timelineWidth - timelineTotWidth);
            }
        }

        function translateTimeline(timelineComponents, value, totWidth) {
            var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
            value = (value > 0) ? 0 : value; //only negative translate value
            value = ( !(typeof totWidth === 'undefined') &&  value < totWidth ) ? totWidth : value; //do not translate more than timeline width
            setTransformValue(eventsWrapper, 'translateX', value+'px');
            //update navigation arrows visibility
            (value == 0 ) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive') : timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
            (value == totWidth ) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive') : timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
        }

        function updateFilling(selectedEvent, filling, totWidth) {
            //change .filling-line length according to the selected event
            var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
                eventLeft = eventStyle.getPropertyValue("left"),
                eventWidth = eventStyle.getPropertyValue("width");
            eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', ''))/2;
            var scaleValue = eventLeft/totWidth;
            setTransformValue(filling.get(0), 'scaleX', scaleValue);
        }

        function setDatePosition(timelineComponents, min) {
            for (i = 0; i < timelineComponents['timelineDates'].length; i++) { 
                var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][i]),
                    distanceNorm = Math.round(distance/timelineComponents['eventsMinLapse']) + 2;
                timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm*min+'px');
            }
        }

        function setTimelineWidth(timelineComponents, width) {
            var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][timelineComponents['timelineDates'].length-1]),
                timeSpanNorm = timeSpan/timelineComponents['eventsMinLapse'],
                timeSpanNorm = Math.round(timeSpanNorm) + 4,
                totalWidth = timeSpanNorm*width;
            timelineComponents['eventsWrapper'].css('width', totalWidth+'px');
            updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'], totalWidth);
        
            return totalWidth;
        }

        function updateVisibleContent(event, eventsContent) {
            var eventDate = event.data('date'),
                visibleContent = eventsContent.find('.selected'),
                selectedContent = eventsContent.find('[data-date="'+ eventDate +'"]'),
                selectedContentHeight = selectedContent.height();

            if (selectedContent.index() > visibleContent.index()) {
                var classEnetering = 'selected enter-right',
                    classLeaving = 'leave-left';
            } else {
                var classEnetering = 'selected enter-left',
                    classLeaving = 'leave-right';
            }

            selectedContent.attr('class', classEnetering);
            visibleContent.attr('class', classLeaving).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
                visibleContent.removeClass('leave-right leave-left');
                selectedContent.removeClass('enter-left enter-right');
            });
            eventsContent.css('height', selectedContentHeight+'px');
        }

        function updateulderEvents(event) {
            event.parent('li').prevAll('li').children('a').addClass('ulder-event').end().end().nextAll('li').children('a').removeClass('ulder-event');
        }

        function getTranslateValue(timeline) {
            var timelineStyle = window.getComputedStyle(timeline.get(0), null),
                timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
                    timelineStyle.getPropertyValue("-moz-transform") ||
                    timelineStyle.getPropertyValue("-ms-transform") ||
                    timelineStyle.getPropertyValue("-o-transform") ||
                    timelineStyle.getPropertyValue("transform");

            if( timelineTranslate.indexOf('(') >=0 ) {
                var timelineTranslate = timelineTranslate.split('(')[1];
                timelineTranslate = timelineTranslate.split(')')[0];
                timelineTranslate = timelineTranslate.split(',');
                var translateValue = timelineTranslate[4];
            } else {
                var translateValue = 0;
            }

            return Number(translateValue);
        }

        function setTransformValue(element, property, value) {
            element.style["-webkit-transform"] = property+"("+value+")";
            element.style["-moz-transform"] = property+"("+value+")";
            element.style["-ms-transform"] = property+"("+value+")";
            element.style["-o-transform"] = property+"("+value+")";
            element.style["transform"] = property+"("+value+")";
        }

        //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
        function parseDate(events) {
            var dateArrays = [];
            events.each(function(){
                var dateComp = $(this).data('date').split('/'),
                    newDate = new Date(dateComp[2], dateComp[1]-1, dateComp[0]);
                dateArrays.push(newDate);
            });
            return dateArrays;
        }

        function parseDate2(events) {
            var dateArrays = [];
            events.each(function(){
                var singleDate = $(this),
                    dateComp = singleDate.data('date').split('T');
                if( dateComp.length > 1 ) { //both DD/MM/YEAR and time are provided
                    var dayComp = dateComp[0].split('/'),
                        timeComp = dateComp[1].split(':');
                } else if( dateComp[0].indexOf(':') >=0 ) { //only time is provide
                    var dayComp = ["2000", "0", "0"],
                        timeComp = dateComp[0].split(':');
                } else { //only DD/MM/YEAR
                    var dayComp = dateComp[0].split('/'),
                        timeComp = ["0", "0"];
                }
                var	newDate = new Date(dayComp[2], dayComp[1]-1, dayComp[0], timeComp[0], timeComp[1]);
                dateArrays.push(newDate);
            });
            return dateArrays;
        }

        function daydiff(first, second) {
            return Math.round((second-first));
        }

        function minLapse(dates) {
            //determine the minimum distance among events
            var dateDistances = [];
            for (i = 1; i < dates.length; i++) { 
                var distance = daydiff(dates[i-1], dates[i]);
                dateDistances.push(distance);
            }
            return Math.min.apply(null, dateDistances);
        }

        /*
            How to tell if a DOM element is visible in the current viewport?
            http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        */
        function elementInViewport(el) {
            var top = el.offsetTop;
            var left = el.offsetLeft;
            var width = el.offsetWidth;
            var height = el.offsetHeight;

            while(el.offsetParent) {
                el = el.offsetParent;
                top += el.offsetTop;
                left += el.offsetLeft;
            }

            return (
                top < (window.pageYOffset + window.innerHeight) &&
                left < (window.pageXOffset + window.innerWidth) &&
                (top + height) > window.pageYOffset &&
                (left + width) > window.pageXOffset
            );
        }

        function checkMQ() {
            //check if mobile or desktop device
            return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
        }
    });
</script>
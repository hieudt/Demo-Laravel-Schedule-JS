## Learning Laravel
Simple Daily Schedule Plugin with jQuery and jQuery UI - Schedule <br/>
[Live Demo](https://www.jqueryscript.net/demo/Simple-Daily-Schedule-Plugin-with-jQuery-and-jQuery-UI-Schedule/)
[Download](https://www.jqueryscript.net/time-clock/Simple-Daily-Schedule-Plugin-with-jQuery-and-jQuery-UI-Schedule.html?fbclid=IwAR1rHcijqyhwnH4mM2eIlmmKdaPWmDhipe8wVra9oMsrg1q40wPahp_xLpU)

## Data variable 
``` php
$listTable = [
                '1' => [
                        'title' => 'Bàn 1',
                        'schedule' => 
                                    [
                                        0 => ['start'=>'12:00','end' => '14:00'],
                                        1 => ['start' => '14:00','end' => '16:00'],
                                    ]
                    ],
                '2' => [
                    'title' => 'Bàn 2',
                    'schedule' => 
                                [
                                    0 => ['start'=>'08:00','end' => '10:00'],
                                    1 => ['start' => '10:00','end' => '12:00'],
                                ]
                    ],
                ];
```

## View

``` javascript

jQuery(document).ready(function(){
    var $sc = jQuery("#schedule").timeSchedule({
        startTime: "07:00", // schedule start time(HH:ii)
        endTime: "21:00",   // schedule end time(HH:ii)
        widthTime:60 * 10,  // cell timestamp example 10 minutes
        timeLineY:60,       // height(px)
        verticalScrollbar:20,   // scrollbar (px)
        timeLineBorder:2,   // border(top and bottom)
        debug:"#debug",     // debug string output elements
        rows : {
            @foreach($listTable as $index => $data)
            '{{$index}}' : {
                title : '{{$data['title']}}',
                schedule:[
                    @foreach($data['schedule'] as $indexSche => $value)
                    {
                        start:'{{$value['start']}}',
                        end:'{{$value['end']}}',
                        text:'Text Area',
                        data:{
                        }
                    },
                    @endforeach
                ]
            },
            @endforeach
        },
        change: function(node,data){
            alert("change event");
        },
        init_data: function(node,data){
        },
        click: function(node,data){
            alert("click event");
        },
        append: function(node,data){
        },
        time_click: function(time,data){
            alert("time click event");
        },
    });
});
```

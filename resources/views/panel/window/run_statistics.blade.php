<?php

$runStatistic = new StdClass();
$runStatistic->year = 2019;
$runStatistic->month = 'Styczeń';
$runStatistic->data = [];

    for($day=1; $day<=31; $day++) {
        for($hour = 0; $hour <= 23; $hour++) {
            $runStatistic->data[$hour][$day] = 0;
        }
    }

$runStatistic->data[6][10] = 1;
$runStatistic->data[7][10] = 1;
$runStatistic->data[8][10] = 1;
$runStatistic->data[9][10] = 1;
$runStatistic->data[9][11] = 1;
$runStatistic->data[9][12] = 1;
$runStatistic->data[5][13] = 1;
$runStatistic->data[9][14] = 1;
$runStatistic->data[8][14] = 1;
$runStatistic->data[7][14] = 1;

?>

<div class="panel_window_bar main_color_background">
    {{__('panel.run_statistic', ['year' => $runStatistic->year , 'month'=> $runStatistic->month])}}
</div>
<div class="panel_window_content">

    <table class="panel_table_statistic">
        <tr>
            <td></td>
            @for($i=1; $i<=count($runStatistic->data[0]); $i++)
                <td>
                    <div style="width:6px;">{{$i}}</div>
                </td>
            @endfor
        </tr>
        @foreach ($runStatistic->data as $hour_key=>$hour)
            <tr>
                <td>{{$hour_key}}:00</td>
                @foreach ($hour as $day_key=>$day)
                    <td
                    @if($day)
                        class="panel_statistic_print"
                    @endif
                    >
                @endforeach
            </tr>
        @endforeach
    </table>
<div class="text-center">
    <div class="btn panel_btn m-2">{{__('panel.previous')}}</div>
    <div class="btn panel_btn m-2">{{__('panel.next')}}</div>
</div>



</div>
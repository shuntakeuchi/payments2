<!-- Main bar -->
<div class="mainbar">
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- SERVICES -->
        <section class="module">
            <div class="container">
                <!-- MODULE TITLE -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="h3title">イベントの詳細</h3>
                        <h3><?=$awesome_arr[substr($events_detail->type, 0, strcspn($events_detail->type,'.'))];?>&nbsp;<?=h($log_arr[$events_detail->type]);?></h3>
                        <h4>イベントの概要</h4>
                        <table class="table table-bordered table-generated">
                            <tr><td class="col-xs-4 col-sm-4 col-md-3">ID</td>
                                <td class="col-xs-8 col-sm-8 col-md-9"><?=h($events_detail->id);?></td></tr>
                            <tr><td>日時</td>
                                <td><?=h(date('Y/m/d H:i', $events_detail->created));?></td></tr>
                            <tr><td>タイプ</td><td><?=h($events_detail->type);?></td></tr>
                        </table>


                        <?php if(($type_flg) and ($type==="charge")): ?>
                            <h4>このイベントに関連するオブジェクト</h4>
                            <table class="table table-bordered table-generated table-hover">
                                <tr class="cursor_pointer" data-href="../charges/<?=$events_detail->data->object->id;?>">
                                    <td class="col-xs-4 col-sm-4 col-md-3"><?=$awesome_arr[substr($events_detail->type, 0, strcspn($events_detail->type,'.'))];?>&nbsp;<?=number_format(h($events_detail->data->object->amount - $events_detail->data->object->amountRefunded))."円";?>

                                    <div class="visible-xs-inline" style=""><br></div>
                                    <?php if(($events_detail->type=="charge.refunded") && ($events_detail->data->object->refunded))
                                            echo " <span class=\"badge badge-info\">払戻済</span>";
                                          elseif(($events_detail->type=="charge.refunded") && ($events_detail->data->object->amount_refunded > 0))
                                            echo " <span class=\"badge badge-warning\">一部払戻済</span>";
                                          elseif($events_detail->data->object->captured)
                                            echo " <!--<span class=\"badge badge-success\">支払済</span>-->";
                                          else echo " <span class=\"badge badge-important\">未払い</span>"; ?>
                                    </td>
                                    <td class="col-xs-5 col-sm-5 col-md-6"><?=h($events_detail->data->object->description);?></td>
                                    <td class="col-xs-3 col-sm-3 col-md-3"><?=h(date('Y/m/d ', $events_detail->created));?>
                                                                               <div class="visible-xs-inline" style=""><br></div>
                                                                               <?=h(date('H:i', $events_detail->created));?></td>
                                </tr>
                            </table>

                        <?php elseif(($type_flg) and ($type==="customer")): ?>
                            <table class="table table-bordered table-generated table-hover">
                                <tr class="cursor_pointer" data-href="../customers/<?=$events_detail->data->object->id;?>">
                                    <td class="col-xs-9 col-sm-9 col-md-9"><?=$awesome_arr[substr($events_detail->type, 0, strcspn($events_detail->type,'.'))];?>&nbsp;<?=h($events_detail->data->object->email);?></td>
                                    <td class="col-xs-3 col-sm-3 col-md-3"><?=h(date('Y/m/d ', $events_detail->created));?>
                                                                               <div class="visible-xs-inline" style=""><br></div>
                                                                               <?=h(date('H:i', $events_detail->created));?></td>
                                </tr>
                            </table>

                        <?php elseif(($type_flg) and ($type==="recursion") and ($events_detail->type!=="recursion.deleted")): ?>
                            <h4>このイベントに関連するオブジェクト</h4>
                            <table class="table table-bordered table-generated table-hover">
                                <tr class="cursor_pointer" data-href="../recursions/<?=$events_detail->data->object->id;?>">
                                    <td class="col-xs-4 col-sm-4 col-md-3"><?=$awesome_arr[substr($events_detail->type, 0, strcspn($events_detail->type,'.'))];?>&nbsp;<?=number_format(h($events_detail->data->object->amount))."円";?></td>
                                    <td class="col-xs-5 col-sm-5 col-md-6"><?=h($events_detail->data->object->description);?></td>
                                    <td class="col-xs-3 col-sm-3 col-md-3"><?=h(date('Y/m/d ', $events_detail->created));?>
                                                                               <div class="visible-xs-inline" style=""><br></div>
                                                                               <?=h(date('H:i', $events_detail->created));?></td>
                                </tr>
                            </table>
                        <?php endif; ?>


                        <h4>データの詳細</h4>
                            <table class="table table-bordered table-generated">
                                <tr><td class="col-xs-12 col-sm-12 col-md-12">
                                <?php echo "<pre>";
                                            print_r($events_detail->data->object);
                                      echo "</pre>" ?>
                                </td></tr>
                            </table>

                        <div>
                            <?=$this->Html->link('イベントの一覧画面へ',
                                                    array('controller'=>'adminpayments',
                                                          'action'=>'events'
                                                ),
                                                    array('class'=>'btn btn-default pull-left',
                                                    'id'=>'btn-return')
                                                );?>
                        </div>
                        <br><br>
                    </div>
                </div>
                <!-- /MODULE TITLE -->
            </div>
        </section>
        <!-- /SERVICES -->
    </div>
</div><!--/ Mainbar ends
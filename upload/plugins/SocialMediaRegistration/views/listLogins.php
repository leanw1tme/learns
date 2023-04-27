
<div class="container-fluid" id="in_survey_common">
    <div class="row">
        <div class="col-sm-12 h3 pagetitle">Social Media Registration plugin - Logins </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php
                $this->widget('bootstrap.widgets.TbGridView', array(
                    'id' => 'SMRListUsers',
                    'itemsCssClass' => 'table table-striped items',
                    'dataProvider' => $model->search(),
                    'columns' => $model->colums,
                    'afterAjaxUpdate' => 'bindButtons',
                    'summaryText'   => gT('Displaying {start}-{end} of {count} result(s).').' '. sprintf(gT('%s rows per page'),
                                CHtml::dropDownList(
                                    'pageSize',
                                    $pageSize,
                                    Yii::app()->params['pageSizeOptions'],
                                    array('class'=>'changePageSize form-control', 'style'=>'display: inline; width: auto'))
                                ),
                        ));
                ?>
        </div>
    </div>
</div>
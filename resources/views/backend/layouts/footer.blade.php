<!--BEGIN FOOTER-->
<!--BOARD-->
<div id="modal-board" class="modal fade in" aria-hidden="false" aria-labelledby="modal-wide-width-label" role="dialog"
    tabindex="1"><!--data-backdrop="static"-->
    <div class="modal-dialog"><!--modal-wide-width-->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">Notification</h4>
            </div>
            <div class="modal-body">
                <div id="board_box"></div>
                <div id="board-form" class="board-form" style='display:none'>
                    <form name="frm_addboard" id="frm_addboard" method="post" class="form-horizontal">
                        <img id="load_board" src="https://www.asiatours.com/manager/images/loading.gif"
                            style="display: none;">
                        <div class="form-group">
                            <label for="exampleInputFile1" class="col-md-2 control-label">&nbsp;</label>
                            <div class="col-md-9">
                                <input type="text" id="board_subject" name="board_subject" class="form-control"
                                    value="" placeholder="Subject..." autocomplete="off" />
                            </div>
                            <label for="exampleInputFile1" class="col-md-2 control-label">&nbsp;</label>
                            <div class="col-md-9">
                                <textarea id="board_content" name="board_content" rows="5" class="form-control" placeholder="Content..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-2 text-right">
                                <img id="save_board" src="https://www.asiatours.com/manager/images/loading.gif"
                                    style="width:20px;display: none;">
                                <input name="board_type" id="board_type" type="hidden" value="suplier" />
                                <button id="submit_board" name="submit_board" class="btn btn-success start"
                                    type="submit"><span>Add New</span></button>
                            </div>
                        </div>
                        <hr />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Copy Service-->
<div id="modal-copy-service" class="modal fade in" aria-hidden="false" aria-labelledby="modal-wide-width-label"
    role="dialog" tabindex="1"><!--data-backdrop="static"-->
    <div class="modal-dialog"><!--modal-wide-width-->
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">Copy Service</h4>
            </div>
            <div class="modal-body">
                <div id="board_box"></div>
                <div id="board-form" class="board-form">
                    <form name="frm_addservice" id="frm_addservice" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="exampleInputFile1" class="col-md-2 control-label">Quantity</label>
                            <div class="col-md-9">
                                <input type="text" id="num_copy_service" name="num_copy_service" class="form-control"
                                    value="" placeholder="" autocomplete="off" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-2 text-right">
                                <input type="hidden" id="id_copy_service" name="id_copy_service" value="" />
                                <input type="hidden" id="copy_type" name="copy_type" value="service" />
                                <img id="save_copy_service" src="https://www.asiatours.com/manager/images/loading.gif"
                                    style="width:20px;display: none;">
                                <button id="submit_copy_service" name="submit_copy_service"
                                    class="btn btn-success start" type="button"
                                    onclick="copy_service();"><span>Copy</span></button>
                            </div>
                        </div>
                        <hr />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--BUILD REQUEST-->
<div id="modal-build-request" tabindex="-1" role="dialog" aria-labelledby="modal-responsive-label"
    aria-hidden="true" class="modal fade in">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title" id="build-label"></h4>
            </div>
            <div class="modal-body">
                <div class="form">
                    <form name="frm_addbuild" id="frm_addbuild" method="post" class="form-horizontal">
                        <img id="load_build" src="https://www.asiatours.com/manager/images/loading.gif"
                            style="display: none;">
                        <div id="build_content"></div><!--Content build-->
                        <hr />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END BOARD-->
<div id="footer">
    <div class="copyright">
        <b>Copyright © 2010 INSIDE TRAVEL Corporation: Trademark &amp; Protected by CSHTT
            #278280&nbsp;&nbsp;&nbsp;</b>
    </div>
</div>
<div id="load-page"
    style="width:100%;height:100%;top:68px;text-align:center;position: fixed;z-index: 99999;display: none;">
    <!--<i style="font-size: 50px; color:#2196f3;" class="fa fa-spinner fa-spin"></i>-->
    <!--<img src="https://www.asiatours.com/manager/images/preloader_v2.gif" />-->
    <img src="https://www.asiatours.com/manager/images/preloader_v2.gif?v=1.0" width="40px" style="width: 40px;" />
</div>
<!--END FOOTER-->

@extends('backend.layouts.app')
@section('content')
    <div class="box-content">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="caption">Add Group</div>
                        </div>

                        <div class="panel-body">
                            <div id="viewcode-form-register-script" class="">
                                <form id="form-register" name="addnew" action="" method="post"
                                    enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Group Name &nbsp;
                                                </label>
                                                <input type="text" name="name" id="name" class="form-control" />
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2">
                                                <div class="form-group">
                                                    <label style="margin-top: 30px;">
                                                        <input id="iti_check" name="iti_check" type="checkbox" value="1"/>
                                                        &nbsp; Itinerary
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        Web Code &nbsp;
                                                    </label>
                                                    <select name="web_code" id="web_code" class="select2-multi-value form-control select2-offscreen">
                                                        <option value="">Choose Web</option>
                                                                                                        </select>
                                                </div>
                                            </div> -->

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label" style="width: 100%;">
                                                    Photo &nbsp;
                                                </label>
                                                <span class="btn btn-success fileinput-button">
                                                    <i class="icon-plus"></i>
                                                    <span>Add Photo</span>
                                                    <input type="file" name="photo" />
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Country &nbsp;
                                                </label>
                                                <select name="country" id="country"
                                                    class="select2-multi-value form-control select2-offscreen">
                                                    <option value="">--Country--</option>
                                                    <option value='Asia'>Asia</option>
                                                    <option value='Vietnam'>Vietnam</option>
                                                    <option value='Cambodia'>Cambodia</option>
                                                    <option value='Laos'>Laos</option>
                                                    <option value='Myanmar'>Myanmar</option>
                                                    <option value='Thailand'>Thailand</option>
                                                    <option value='Indonesia'>Indonesia</option>
                                                    <option value='Malaysia'>Malaysia</option>
                                                    <option value='Philippines'>Philippines</option>
                                                    <option value='Singapore'>Singapore</option>
                                                    <option value='Bhutan'>Bhutan</option>
                                                    <option value='Japan'>Japan</option>
                                                    <option value='China'>China</option>
                                                    <option value='Nepal'>Nepal</option>
                                                    <option value='India'>India</option>
                                                    <option value='Sri Lanka'>Sri Lanka</option>
                                                    <option value='Taiwan'>Taiwan</option>
                                                    <option value='Hong Kong'>Hong Kong</option>
                                                    <option value='South Korea'>South Korea</option>
                                                    <option value='Turkey'>Turkey</option>
                                                    <option value='Brunei'>Brunei</option>
                                                    <option value='' selected="selected"></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tabbable-line-wrapper" style="border: 0;">
                                        <div class="">
                                            <ul class="nav nav-tabs" style="border-left: 1px solid #dddddd;">
                                                <li class="active" style="border-right: 2px solid #eee;"><a
                                                        href="#tab_overview" data-toggle="tab"
                                                        style="margin-right: 0;">Overview</a></li>
                                                <li class="" style="border-right: 2px solid #eee;"><a
                                                        href="#tab_default_1" data-toggle="tab"
                                                        style="margin-right: 0;">Features </a></li>
                                                <li class="" style="border-right: 2px solid #eee;"><a
                                                        href="#tab_travel_photo" data-toggle="tab"
                                                        style="margin-right: 0;">Travel Photo</a></li>
                                                <li class="" style="border-right: 2px solid #eee;"><a
                                                        href="#tab_highLight" data-toggle="tab"
                                                        style="margin-right: 0;">Experience</a></li>
                                                <li class="" style="border-right: 2px solid #eee;"><a
                                                        href="#tab_review" data-toggle="tab"
                                                        style="margin-right: 0;">Reviews</a></li>
                                            </ul>
                                            <div class="tab-content" style="border: 1px solid #dddddd;">
                                                <div id="tab_overview" class="tab-pane fade active in">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">
                                                                    Slogan &nbsp;
                                                                </label>
                                                                <input type="text" name="slogan" id="slogan"
                                                                    class="form-control" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">
                                                                    Intro1 &nbsp;
                                                                </label>
                                                                <input type="text" name="intro1" id="intro1"
                                                                    class="form-control" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">
                                                                    Intro2 &nbsp;
                                                                </label>
                                                                <textarea id="intro2" rows="4" class="form-control" name="intro2"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 viewcode-editor-CKEditor">
                                                            <div class="form-group">
                                                                <label class="control-label">
                                                                    Detail &nbsp;
                                                                </label>
                                                                <textarea id="content" rows="8" class="wysihtml5 form-control" name="detail"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab_default_1" class="tab-pane">
                                                    <div class="content-tab-reason">
                                                        <div class="row">
                                                            <div class="content-detail">
                                                                <div class="col-md-8">
                                                                    <div class="control-group">
                                                                        <label class="control-label">
                                                                            Title &nbsp;
                                                                        </label>
                                                                        <input type="text" name="reason_title1"
                                                                            class="form-control" value="" />
                                                                    </div>
                                                                    <div class="control-group">
                                                                        <label class="control-label">
                                                                            Content &nbsp;
                                                                        </label>
                                                                        <textarea rows="10" name="reason_content1" class="wysihtml5 form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="control-group">
                                                                        <button type="button" class="btn btn-success"
                                                                            onclick="popupImages('open=listreason1');">Select
                                                                            Photos</button>
                                                                        <div style="float:left;width:100%"
                                                                            id="listreason1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="1" id="reason_tab"
                                                        name="reason_tab" />
                                                    <div style="margin-top: 20px;">
                                                        <button type="button" class="btn btn-success"
                                                            onclick="add_reason();">Add More</button>
                                                    </div>
                                                </div><!-- end overview -->

                                                <div id="tab_travel_photo" class="tab-pane fade">
                                                    <!-- Travel photo -->
                                                    <div class="well">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <label class="control-label text-left">
                                                                    <b>Travel Photo:</b>&nbsp;
                                                                </label>
                                                            </div>
                                                            <div id="box_travel_photo">
                                                                <div class="col-md-12">

                                                                    <div class="dd" id="nestable3-new">
                                                                        <ol id="div_iti_new" class="dd-list">

                                                                        </ol>
                                                                    </div>
                                                                    <input type="hidden" id="nestable3-new-output"
                                                                        name="save_order_new" class="form-control" />
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">
                                                                            &nbsp;
                                                                        </label>
                                                                        <select
                                                                            class="country select2-multi-value form-control select2-offscreen"
                                                                            id="search_sup_country"
                                                                            name="search_sup_country"
                                                                            onchange=search_sup_contry_desti(this.value)>
                                                                            <option value="">---Country---</option>
                                                                            <option value='Vietnam'>Vietnam</option>
                                                                            <option value='Cambodia'>Cambodia</option>
                                                                            <option value='Laos'>Laos</option>
                                                                            <option value='Myanmar'>Myanmar</option>
                                                                            <option value='Thailand'>Thailand</option>
                                                                            <option value='Indonesia'>Indonesia</option>
                                                                            <option value='Malaysia'>Malaysia</option>
                                                                            <option value='Philippines'>Philippines
                                                                            </option>
                                                                            <option value='Singapore'>Singapore</option>
                                                                            <option value='Bhutan'>Bhutan</option>
                                                                            <option value='Japan'>Japan</option>
                                                                            <option value='China'>China</option>
                                                                            <option value='Nepal'>Nepal</option>
                                                                            <option value='India'>India</option>
                                                                            <option value='Sri Lanka'>Sri Lanka</option>
                                                                            <option value='Taiwan'>Taiwan</option>
                                                                            <option value='Hong Kong'>Hong Kong</option>
                                                                            <option value='South Korea'>South Korea
                                                                            </option>
                                                                            <option value='Turkey'>Turkey</option>
                                                                            <option value='Brunei'>Brunei</option>
                                                                            <option value='' selected="selected">
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">
                                                                            &nbsp;
                                                                        </label>
                                                                        <div class="form-group" id="box_search_sup_dest">
                                                                            <select id="search_sup_dest"
                                                                                name="search_sup_dest"
                                                                                class="select2-multi-value form-control select2-offscreen">
                                                                                <option value="">---Destination---
                                                                                </option>
                                                                                <!-- <option value=""></option> -->

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="control-label">
                                                                            &nbsp;
                                                                        </label>
                                                                        <div class="form-group" id="box_search_sup_dest">
                                                                            <!-- <input type="button" onclick="" value="Search" class="btn btn-info btn-block btn-small"> -->
                                                                            <a href="javascript:;"
                                                                                onclick="search_travel_photo();"
                                                                                class="btn btn-info btn-block btn-small"
                                                                                title="Create Tour"><i
                                                                                    class="fa fa-search"></i> Search</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="ajax_travel_photo"></div>
                                                        <input type="hidden" id="total_travel_photo"
                                                            name="total_travel_photo" value="">
                                                    </div>
                                                    <!-- END Travel photo -->
                                                </div>

                                                <div id="tab_highLight" class="tab-pane fade">
                                                    <!-- HighLights -->
                                                    <div class="well">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12 control-label">
                                                                        <b>Experience &nbsp;</b>
                                                                    </label>

                                                                    <div id="box_highlight">
                                                                        <div class="col-md-12">

                                                                            <div class="dd" id="nestable3-highlight">
                                                                                <ol id="div_iti_highlight"
                                                                                    class="dd-list">
                                                                                </ol>
                                                                            </div>
                                                                            <input type="hidden"
                                                                                id="nestable3-highlight-output"
                                                                                name="save_order_highlight"
                                                                                class="form-control" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label">
                                                                                &nbsp;
                                                                            </label>
                                                                            <select
                                                                                class="country select2-multi-value form-control select2-offscreen"
                                                                                id="search_sup_country2"
                                                                                name="search_sup_country2"
                                                                                onchange=search_sup_contry_desti2(this.value)>
                                                                                <option value="">---Country---
                                                                                </option>
                                                                                <option value='Vietnam'>Vietnam</option>
                                                                                <option value='Cambodia'>Cambodia</option>
                                                                                <option value='Laos'>Laos</option>
                                                                                <option value='Myanmar'>Myanmar</option>
                                                                                <option value='Thailand'>Thailand</option>
                                                                                <option value='Indonesia'>Indonesia
                                                                                </option>
                                                                                <option value='Malaysia'>Malaysia</option>
                                                                                <option value='Philippines'>Philippines
                                                                                </option>
                                                                                <option value='Singapore'>Singapore
                                                                                </option>
                                                                                <option value='Bhutan'>Bhutan</option>
                                                                                <option value='Japan'>Japan</option>
                                                                                <option value='China'>China</option>
                                                                                <option value='Nepal'>Nepal</option>
                                                                                <option value='India'>India</option>
                                                                                <option value='Sri Lanka'>Sri Lanka
                                                                                </option>
                                                                                <option value='Taiwan'>Taiwan</option>
                                                                                <option value='Hong Kong'>Hong Kong
                                                                                </option>
                                                                                <option value='South Korea'>South Korea
                                                                                </option>
                                                                                <option value='Turkey'>Turkey</option>
                                                                                <option value='Brunei'>Brunei</option>
                                                                                <option value=''
                                                                                    selected="selected"></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label">
                                                                                &nbsp;
                                                                            </label>
                                                                            <div class="form-group"
                                                                                id="box_search_sup_dest2">
                                                                                <select id="search_sup_dest2"
                                                                                    name="search_sup_dest2"
                                                                                    class="select2-multi-value form-control select2-offscreen">
                                                                                    <option value="">
                                                                                        ---Destination---</option>
                                                                                    <!-- <option value=""></option> -->

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">
                                                                                &nbsp;
                                                                            </label>
                                                                            <div class="form-group">
                                                                                <!-- <input type="button" onclick="" value="Search" class="btn btn-info btn-block btn-small"> -->
                                                                                <a href="javascript:;"
                                                                                    onclick="search_exp_tour();"
                                                                                    class="btn btn-info btn-block btn-small"
                                                                                    title="Search Exp"><i
                                                                                        class="fa fa-search"></i>
                                                                                    Search</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="ajax_highlight"></div>
                                                                <input type="hidden" id="total_highlight"
                                                                    name="total_highlight" value="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END HighLights -->
                                                </div>

                                                <div id="tab_review" class="tab-pane fade">
                                                    <!-- Review Web -->
                                                    <div class="well">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <label class="control-label text-left">
                                                                    <b>Review Web:</b>&nbsp;
                                                                </label>
                                                                <a href="?module=review_web&action=add"
                                                                    style="padding: 8px;" class="btn btn-info btn-xs mlm">
                                                                    <i class="icon-note mrs"></i>
                                                                    Add New
                                                                </a>
                                                            </div>
                                                            <div id="box_review_web">
                                                                <div class="col-md-12">

                                                                    <div class="dd" id="nestable3-review">
                                                                        <ol id="div_iti_review" class="dd-list">
                                                                        </ol>
                                                                    </div>
                                                                    <input type="hidden" id="nestable3-review-output"
                                                                        name="save_order_review" class="form-control" />
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">
                                                                            &nbsp;
                                                                        </label>
                                                                        <input type="text" name="search_review_keyword"
                                                                            id="search_review_keyword"
                                                                            class="form-control"
                                                                            placeholder="Subject, Content...">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">
                                                                            &nbsp;
                                                                        </label>
                                                                        <div class="form-group">
                                                                            <select id="search_review_user"
                                                                                name="search_review_user"
                                                                                class="select2-multi-value form-control select2-offscreen">
                                                                                <option value="">---User---</option>
                                                                                <option value="2">Huong Le</option>
                                                                                <option value="9">Ms. Hanh Do</option>
                                                                                <option value="16">Luyen Ta</option>
                                                                                <option value="18">My Linh</option>
                                                                                <option value="20">Ms. Lilly Kao
                                                                                </option>
                                                                                <option value="28">Ms. Trang Thu
                                                                                </option>
                                                                                <option value="30">Ms. Hong Nham
                                                                                </option>
                                                                                <option value="33">Ms. Viet Ha</option>
                                                                                <option value="38">Ms. Jessie</option>
                                                                                <option value="42">Ms. Rosie Nguyen
                                                                                </option>
                                                                                <option value="44">Ms. Phuong Nguyen
                                                                                </option>
                                                                                <option value="47">Ms. Minh Dao
                                                                                </option>
                                                                                <option value="51">Ms. Lacey Bui
                                                                                </option>
                                                                                <option value="60">Ms. Sophie</option>
                                                                                <option value="65">Ms. Quyen</option>
                                                                                <option value="66">Ms. Ruby Mac
                                                                                </option>
                                                                                <option value="67">Ms. Tuyet Nhi
                                                                                </option>
                                                                                <option value="68">Ms. Mia Nguyen
                                                                                </option>
                                                                                <option value="69">Ms. Rin Chan
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="control-label">
                                                                            &nbsp;
                                                                        </label>
                                                                        <div class="form-group" id="box_search_sup_dest">
                                                                            <!-- <input type="button" onclick="" value="Search" class="btn btn-info btn-block btn-small"> -->
                                                                            <a href="javascript:;"
                                                                                onclick="search_review_web();"
                                                                                class="btn btn-info btn-block btn-small"
                                                                                title="Search"><i
                                                                                    class="fa fa-search"></i> Search</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="ajax_review_web"></div>
                                                        <input type="hidden" id="total_review_web"
                                                            name="total_review_web" value="0">
                                                    </div>
                                                    <!-- END Review Web -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">
                                                    Tag &nbsp;
                                                </label>
                                                <input id="tag" name="tag" type="text"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="button-addnew">
                                                <div class="col-md-4">
                                                    <input type="submit" name="addnew" onclick="loading();"
                                                        value="ADD NEW" class="btn btn-info" />
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="submit" name="editgroup" onclick="loading();"
                                                        value="ADD NEW &amp; EXIT" class="btn btn-warning" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
